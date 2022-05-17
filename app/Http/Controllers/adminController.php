<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\User;
use App\Models\Item;
use App\Models\News;
use App\Models\Time_Table;
use App\Models\NumberOfUser;
use App\Models\Booking;
use Carbon\Carbon;
use DateTime;

class adminController extends Controller
{
    public function addItem ()  {
        return  view('admin.add_item');
      }

     public function upload(Request $requast){
        $item = new Item;
        $item->name=$requast->name;
        $item->price =$requast->price;
        $item->catagory=$requast->catagory;
        $item->description = $requast->description;
        $image = $requast->file;
        if($image){
          $imagename = time().'.'.$image->getClientoriginalExtension();
          $requast->file->move('itemimage',$imagename);
          $item->image = $imagename;
       }
        if($requast->bookingtype){
          $item->bookingtype = $requast->bookingtype;
        }
        $item->save();
        return  redirect()->back()->with("message",'Item has been  Added Successfully');
    }

    public function itemList ()  {
        $items = Item::all();
        return  view('admin.items_list',compact('items'));
      }

      public function deleteItem($id){
        $item = Item::find($id);
        $item ->users()->detach();
        $item->usersCount()->detach();
        $item->delete();
        return  redirect()->back()->with("message",'The item has been deleted sucessfully!'); 
    }

    
    public function showupdateItem($id){
        $item = Item::find($id);
        return view('admin.update_item',compact('item'));
    }

    public function updateItem(Request $requast, $id){
        $item = Item::find($id);

        $item->name=$requast->name;
        $item->price =$requast->price;
        $item->catagory=$requast->catagory;
        $item->description = $requast->description;
        $item->bookingtype = $requast->bookingtype;
         
        $image = $requast->file;
        if($image){
          if($item->image){
          unlink("itemimage/".$news->image);
          }
           $imagename = time().'.'.$image->getClientoriginalExtension();
           $requast->file->move('itemimage',$imagename);
           $item->image = $imagename;
        }
        $item->save();
        return  redirect()->back()->with("message",'The item has been update Successfully');
    }

    public function createNews (Request $requast){
        $news = new News;

        $news->title=$requast->title;
        $news->description =$requast->description;
        $news->eligibility = $requast->eligibility;
        $image = $requast->file;
        if($image){
           $imagename = time().'.'.$image->getClientoriginalExtension();
           $requast->file->move('newsimage',$imagename);
           $news->image = $imagename;
        }
        $news->save();
        return  redirect()->back()->with("message",'News has been created Successfully');
    }

    public function addNews(){
        return  view('admin.add_news');
      }
      public function newsList ()  {
        $news = News::all();
        return  view('admin.news_list',compact('news'));
      }
      public function singleList ($id)  {
        $news = News::find($id);
        return  view('admin.singlenews',compact('news'));
      }

      public function deleteNews($id){
        $news = News::find($id);
        $news->delete();
        unlink("newsimage/".$news->image);
        return  redirect('/news_list')->with("message",'The item has been deleted sucessfully!'); 
    }

    public function showupdateNews($id){
      $news = News::find($id);
      return view('admin.update_news',compact('news'));
  }


  public function updateNews(Request $requast, $id){
    $news = News::find($id);

    $news->title=$requast->title;
    $news->description =$requast->description;
    $news->eligibility=$requast->eligibility;
    
    $image = $requast->file;
    if($image){
      if($news->image){
      unlink("newsimage/".$news->image);
      }
       $imagename = time().'.'.$image->getClientoriginalExtension();
       $requast->file->move('newsimage',$imagename);
       $news->image = $imagename;
    }
    $news->save();
    return  redirect()->back()->with("message",'News has been updated Successfully');
}

public function getTimeTable(){
  $times = Time_Table::all();
  return view('admin.time_table',compact('times'));
}

public function updateTimeTable($id){
  $time = Time_table::find($id);
  $time->enable = !$time->enable ;
  $time->save();
  return  redirect()->back()->with("message",'Time table  has been updated Successfully');
}

public function getUserPerHour(){
  $numbers = NumberOfUser::all();
  $number = $numbers->first();
  return view('admin.userperhour',compact('number'));
}

public function updateUserPerHour(Request $requast,$id){
  $number = NumberOfUser::find($id);
  $number->number = $requast->number;
  $number->save();
  return  redirect()->back()->with("message",'User per hour  has been updated Successfully');
}

public function getBookingList(){
  $currentTime = Carbon::now();
  $time2 = Carbon::now()->minute;
  $date = Carbon::createFromTime(6, 00, 00);
  $date2 = Carbon::createFromTime(12, 00, 00);
  if($currentTime->hour>12){
     if($currentTime->hour>18){
      $currentTime2 = $currentTime->diffInHours($date2, false);
     }else{
      $currentTime2 = abs($currentTime->diffInHours($date, false));
     }
    
  }else{
    if($currentTime->hour>6){
      $currentTime2 = $currentTime->diffInHours($date, false);
    }else{
      $currentTime2 = Carbon::now()->addHours(6)->hour;
    }
  }
  if($currentTime2 >= 7){
   if($time2>=30){
    $from = strval($currentTime2).':30:00';
   }else{
    $from = strval($currentTime2-1).':30:00';
   }
  }else{
  $from = strval($currentTime2).':00:00';
  }
  
  $time = Time_Table::where('from', '=', $from)->first();
  $books = [];
  if($time!=null){
    $books=Booking::where('time_id',$time->id)->get();
  }
  
return view('admin.booking_list',compact('books')); 

}
public function getBookingDetail($id){
   $book = Booking::find($id);
   $items = User::find($book->user_id)->items()->get();
   $totalPrice = 0;
   foreach($items as $item){
      $totalPrice=$totalPrice + (int) $item->price;
   }
   return  view('admin.booking_detail',compact('book','items','totalPrice')); 
}
public function finishBooking($id){
  $book = Booking::find($id);
  User::find($book->user_id)->items()->detach();
  $time = Time_Table::find($book->time_id);
  $time->count = $time->count - 1;
  $time->save();
  $book->delete(); 
  return  redirect()->route('booking_list')->with("message",'Checkout is finished!!!');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\User;
use App\Models\Story;
use App\Models\Item;
use App\Models\News;
use App\Models\Time_Table;
use App\Models\NumberOfUser;
use App\Models\Booking;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function addItem ()  {
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
        return  view('admin.add_item');
        } else{
          return redirect()->back();
         }
        }
         else
        {
            return redirect('login');
        }
      }

     public function upload(Request $requast){
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
       $items = Item::where('name',$requast->name)->first();
       if($items!==null){
        return  redirect()->back()->with("message",'Item aready exist');
 
       }
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
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
    
      }

    public function itemList ()  {
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
        $items = Item::all();
        return  view('admin.items_list',compact('items'));
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
    
      }

      public function deleteItem($id){
        if(Auth::id()){
          if(Auth::user()->usertype=='1'){
        $item = Item::find($id);
        $item ->users()->detach();
        $item->usersCount()->detach();
        $item->delete();
        return  redirect()->back()->with("message",'The item has been deleted sucessfully!'); 
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
    
      }

    
    public function showupdateItem($id){
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
        $item = Item::find($id);
        return view('admin.update_item',compact('item'));
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
      }

    public function updateItem(Request $requast, $id){
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
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
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }  
    
    }

    public function createNews (Request $requast){
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
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
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
    
      }

    public function addNews(){
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
        return  view('admin.add_news');
      
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
      }

      public function newsList ()  {
        if(Auth::id()){
          if(Auth::user()->usertype=='1'){
        $news = News::all();
        return  view('admin.news_list',compact('news'));
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
      }

      public function singleList ($id)  {
        if(Auth::id()){
          if(Auth::user()->usertype=='1'){
        $news = News::find($id);
        return  view('admin.singlenews',compact('news'));
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
      }

      public function deleteNews($id){
        if(Auth::id()){
          if(Auth::user()->usertype=='1'){
        $news = News::find($id);
        if($news->image){
          unlink("newsimage/".$news->image);
        }
        $news->delete();
        return  redirect('/news_list')->with("message",'The item has been deleted sucessfully!'); 
      } else{
        return redirect()->back();
       }
      }
       else
      {
          return redirect('login');
      }
      }

    public function showupdateNews($id){
      if(Auth::id()){
        if(Auth::user()->usertype=='1'){
      $news = News::find($id);
      return view('admin.update_news',compact('news'));
    } else{
      return redirect()->back();
     }
    }
     else
    {
        return redirect('login');
    }
  }


  public function updateNews(Request $requast, $id){
    if(Auth::id()){
      if(Auth::user()->usertype=='1'){
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
  } else{
    return redirect()->back();
   }
  }
   else
  {
      return redirect('login');
  }
  }

public function getTimeTable(){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $times = Time_Table::all();
  return view('admin.time_table',compact('times'));
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
} 
}

public function updateTimeTable($id){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $time = Time_table::find($id);
  $time->enable = !$time->enable ;
  $time->save();
  return  redirect()->back()->with("message",'Time table  has been updated Successfully');
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
}
}

public function getUserPerHour(){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $numbers = NumberOfUser::all();
  $number = $numbers->first();
  return view('admin.userperhour',compact('number'));
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
} 
}

public function updateUserPerHour(Request $requast,$id){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $number = NumberOfUser::find($id);
  $number->number = $requast->number;
  $number->save();
  return  redirect()->back()->with("message",'User per hour  has been updated Successfully');
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
} 
}

public function getBookingList(){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $currentTime = Carbon::now();
  $time2 = Carbon::now()->minute;
  $date = Carbon::createFromTime(6, 00, 00);
  $date2 = Carbon::createFromTime(12, 00, 00);
  if($currentTime->hour>12){
     if($currentTime->hour>18){
      $currentTime2 = abs($currentTime->diffInHours($date2, false));
     }else{
      $currentTime2 = abs($currentTime->diffInHours($date, false));
     }
    
  }else{
    if($currentTime->hour>6){
      $currentTime2 = abs($currentTime->diffInHours($date, false));
      echo $currentTime2;
    }else{
      $currentTime2 = abs(Carbon::now()->addHours(6)->hour);
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
 
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
}
 
}
public function getBookingDetail($id){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
   $book = Booking::find($id);
   $items = User::find($book->user_id)->items()->get();
   $totalPrice = 0;
   foreach($items as $item){
      $totalPrice=$totalPrice + (int) $item->price;
   }
   return  view('admin.booking_detail',compact('book','items','totalPrice')); 
 
  } else{
    return redirect()->back();
   }
  }
   else
  {
      return redirect('login');
  }
  }
public function finishBooking($id){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $story = new Story;
  $book = Booking::find($id);
  $items = User::find($book->user_id)->items()->get();
  $story->user_id = $book->user_id;
  $story->time_id = $book->time_id;
  foreach($items as $item){
    $story->items .= $item->name . ",";
  }
  $story->item_take_time = Carbon::now()->format("h:i:s");
  $story->save();
  User::find($book->user_id)->items()->detach();
  $book->delete(); 
  return  redirect()->route('booking_list')->with("message",'Checkout is finished!!!');

} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
}
}

public function story(){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $stories = Story::orderBy('created_at','desc')->get();
  return view('admin.story',compact('stories'));

} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
}
}

public function getUser(){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $users = User::where('usertype',false)->get();
  return view('admin.user_list',compact('users'));
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
} 
}

public function addMember($id){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
 $user = User::find($id);
 $user->ismember = !$user->ismember;
 $user->save();
 return  redirect()->back()->with("message",'User has been added to member.');
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
} 
}
public function deleteUser($id){
  if(Auth::id()){
    if(Auth::user()->usertype=='1'){
  $user = User::find($id);
  $user->items()->detach();
  $user->itemsCount()->detach();
  $book = Booking::where('user_id',$id);
  $story = Story::where('user_id',$id);
  $book->delete();
  $story->delete();
  $user->delete();
  return  redirect()->back()->with("message",'User has been deleted successfully');
} else{
  return redirect()->back();
 }
}
 else
{
    return redirect('login');
} 
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Time_Table;
use App\Models\NumberOfUser;
use App\Models\Booking;
use App\Models\News;

class homeController extends Controller
{
   
    public function redirect(){
        if(Auth::id()){
           if(Auth::user()->usertype=='0'){
             return view('user.home');
           }
           else{
            return view('admin.home');
           }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function home(){
        $news = News::orderBy('id','desc')->paginate(3);
    return view('user.home',compact('news'));
    }

    public function getItem(){
        $items = Item::orderBy('id','desc')->paginate(6);
        $user = Auth::user();
        if($user==null){
            return  redirect()->back()->with("message",'Please signin first ');  
        }
        $booking = Booking::where('user_id',$user->id)->first();
        $book = $booking !=null;
        return view('user.items',compact('items','book'));
    }
    public function addToCart($id){
        $user = Auth::user();
        $item = Item::find($id);
        foreach ($user->items as $item1) {
            if($item1->id==$item->id){
                return  redirect()->back()->with("message",'The item has been already added to the cart ');
            }
        }
        if($item->bookingtype==='member'){
            if($user->ismember){
                $found = false;
                foreach ($user->itemsCount as $item1) {
                    if($item1->id==$id){
                          $found=true;
                    }}
                    if(!$found){
                        $user->itemsCount()->attach([$item->id=>[
                            'count'=>0
                        ]]);
                    }
              $user->items()->attach($item);
              return  redirect()->back()->with("message",'Item added in to cart successfully');
            }else{
              return  redirect()->back()->with("message",'You have to be a member to add this item in your member');
            }
        }elseif($item->bookingtype==="all"){
            $found = false;
            foreach ($user->itemsCount as $item1) {
                if($item1->id==$id){
                      $found=true;
                }}
                if(!$found){
                    $user->itemsCount()->attach([$item->id=>[
                        'count'=>0
                    ]]);
                }
            $user->items()->attach($item);
            return  redirect()->back()->with("message",'Item added in to cart successfully');
        }else{
            $count= null;
            foreach ($user->itemsCount as $item1) {
                if($item1->id==$id){
                    $count= (int) $item1->pivot->count;
                    $bookingtype = (int) $item1->bookingtype;
                    if($count>$bookingtype){
                        return  redirect()->back()->with("message",'You have not allowed to take this item');
                    }else{
                        $user->items()->attach($item1);
                        return  redirect()->back()->with("message",'Item added in to cart successfully');           
                    }
                }
            }

            $user->itemsCount()->attach([$item->id=>[
                'count'=>0
            ]]);
            $user->items()->attach($item);
            return  redirect()->back()->with("message",'Item added in to cart successfully');           
       }
    }
    public function getCart() {
        $user = Auth::user(); 
        if($user==null){
            return  redirect()->back()->with("message",'Please signin first ');  
        }
        $booking = Booking::where('user_id',$user->id)->first();
        $book = $booking !=null;
        $items = $user->items;
        $totalPrice = 0;
        foreach($items as $item){
           $totalPrice=$totalPrice + (int) $item->price;
        }
        $times = Time_Table::all();
        $userPerHour = NumberOfUser::all()->first();
    return view('user.booking',compact('items','totalPrice','times','userPerHour','book','booking'));
}
public function removeItemCart($id){
    $user = Auth::user();
    $user->items()->detach($id);
    return  redirect()->back()->with("message",'Item has been removed from cart successfully');           
}

public function book(Request $request){
    $user = Auth::user();
    $booking = Booking::where('user_id',$user->id)->first();
    if($booking != null){
        return  redirect()->back()->with("message",'You have already booked.');           
   
    }
    $time = Time_Table::find($request->time);
    $numberOfUser = NumberOfUser::all()->first();
    if($user->items->count()==0){
        return  redirect()->back()->with("message",'Before you booking you have to add an item in to cart.');           
    }

    foreach($user->items as $item){
        $count = 0;
        foreach ($user->itemsCount as $counts)
        {
            if($counts->id==$item->id){
             $count = $counts->pivot->count;
            }
         }
        $user->itemsCount()->updateExistingPivot($item->id,['count' => $count + 1]);
    }
    $time->count = $time->count + 1;
    if($time->count + 1>=$numberOfUser->number){
        $time->enable = false;
    }
    $time->save();
  $book = new Booking;
  $book->user_id = $user->id;
  $book->time_id =$request->time;
  $book->save();
  return  redirect()->back()->with("message",'Booking successful.');           
  
}

public function getNews(){

    $news = News::orderBy('id','desc')->paginate(6);
    return view('user.news',compact('news'));
}

public function search(Request $request){
    $user = Auth::user();
    if($user==null){
        return  redirect()->back()->with("message",'Please signin first ');  
    }
     $search_text = $_GET['query'];
    $items = Item::where('name','LIKE','%'.$search_text.'%')->paginate(10000); 
    $booking = Booking::where('user_id',$user->id)->first();
    $book = $booking !=null;
    return view('user.items',compact('items','book'));

}
public function searchNews(Request $request){
    $search_text = $_GET['query'];
    $news = News::where('title','LIKE','%'.$search_text.'%')->paginate(10000); 
    return view('user.news',compact('news'));
}

public function newsDetail($id){
    $news = News::find($id);
    return view('user.newsdetail',compact('news'));
}
public function singleNews($id){
    $news = News::find($id);
    return view('user.newsdetail',compact('news'));
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

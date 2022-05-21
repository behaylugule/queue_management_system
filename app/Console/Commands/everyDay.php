<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\Models\Story;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Time_Table;

class everyDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean a db table.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $booking = Booking::all();
        foreach($booking as $book){
        $story = new Story;
        $items = User::find($book->user_id)->items()->get();
        $story->user_id = $book->user_id;
        $story->time_id = $book->time_id;
        foreach($items as $item){
            $story->items .= $item->name . ",";
        }
        $story->item_take_time = Carbon::now()->format("h:i:s");
        $story->save();
        User::find($book->user_id)->items()->detach();
  }
        $times = Time_Table::all();
        foreach($times as $time){
           $time->count = 0;
           $time->enable = true;
           $time->save();
        }
        Booking::truncate();      
        echo "opration done";
    }
}

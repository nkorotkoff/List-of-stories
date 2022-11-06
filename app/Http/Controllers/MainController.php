<?php

namespace App\Http\Controllers;

use App\Models\hashtag;
use App\Models\history;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class MainController extends Controller
{
    public function show()
    {

        $historys = history::where('accepted',1)->orderBy('updated_at','desc') ->paginate(5);
//        dd($historys);
        return view('showhistorys',['historys'=>$historys]);
    }

    public function addhistory()
    {
        return view('addhistory');
    }

    public function create(history $history, Request $request)
    {

        $validator = $request->validate([
            'name' => 'required',
            'descr' => 'required',
        ]);

        $created_history = history::create(['name' => $validator['name'], 'descr' => $validator['descr']]);
        if ($request->hashtags) {
            foreach ($request->hashtags as $hashtag) {
                if (hashtag::where('name', $hashtag)->first() === null) {
                    $created_hashtag = hashtag::create(['name' => $hashtag]);
                    $created_history->hashtags()->attach($created_hashtag->id);
                }else{
//                dd($created_hashtag = hashtag::where('name',$hashtag)->first());
                    $exist_hashtag = hashtag::where('name',$hashtag)->first();
                    $created_history->hashtags()->attach($exist_hashtag->id);
                }
            }
        }

        return redirect()->route('index');

    }
}

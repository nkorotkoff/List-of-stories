<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\history;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(){
          $notAccepted =  history::where('accepted',0)->get();
            return view('adminpanel',['notAccepted'=>$notAccepted]);
    }
    public function accept($id){
        $history = history::find($id);
        $history->accepted = 1;
        $history->save();
       return redirect()->back();
    }
    public function decline($id){
        history::destroy($id);
      return  redirect()->back();
    }
}

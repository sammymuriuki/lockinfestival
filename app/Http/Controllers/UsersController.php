<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;

class UsersController extends Controller
{
    public function addmail(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:mailing_lists'
            ]);
        $mailinglist=new MailingList();
        $mailinglist->email = $request->email;
        if($mailinglist->save()){
            return redirect()->back()->with('message', 'Successful!');
        }else{
            redirect()->back()->with('message', 'Failed!');
        }
         
        
    }
}

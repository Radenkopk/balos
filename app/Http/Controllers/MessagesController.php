<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'pitanje' => 'required',
        ],[
            'email.required' => 'Niste popunili email !',
            'name.required' => 'Niste popunili ime !',
            'pitanje.required' => 'Niste odgovorili na pitanje !'
        ]);

        if(($request->broj_1 + $request->broj_2) != $request->pitanje){
            return back()->with('errorMessage','Niste tacno odgovorili na pitanje !');
        }

        return back()-> with('success','Uspešno ste poslali poruku !');
    }

}

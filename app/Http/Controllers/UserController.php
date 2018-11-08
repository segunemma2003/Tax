<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function file(){
        return view ('user.profile');
    }

//code for uploading documents
    public function upload(Request $request){
        $this->validate($request, [
            'images'=> 'required|mimes:jpg,png,gif,svg,psd,pdf|max:2048'
        ]);
        $filename=$request->file('images')->getClientOriginalName();
        $tostore = $ext . "_" . time() . "." . $extension;
        $request->file('images')->storeAs('public/upload', $tostore);
        $id = Auth::user()->id;
        $user = User::whereId($id)->first();
        $user->images=$tostore;
            if($user->save()){
            return redirect()->back()->with('status', 'successfully uploaded');
                }else{
            return redirect()->back()->with('status', 'Operation failed');
     }
    }


}

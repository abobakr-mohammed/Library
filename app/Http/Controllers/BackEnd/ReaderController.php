<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reader;
class ReaderController extends Controller
{
    // create reader 
    public function create_readers(){
         $readers = Reader::get();
         return view('admin.create_reader',compact('readers'));
        
    }

    // stor reader in DB
    public function store_readers(Request $request){
         Reader::create([
           'name' => $request->name,
           'username' => $request->username,
           'email' => $request->email,
           'password' => $request->password
         ]);
         return redirect()->back()->with('success','Reader Created Successfully');
    }


    // show readers 
    public function show_readers(){
        $readers = Reader::get();
      return view('admin.show_readers',compact('readers'));
    }
     // show readers books
    public function reader_books($id){
        $readers = Reader::find($id);
        $books = $readers->books;
        return view('admin.reader_books',compact('books'));
    }
    // delete readers 
    public function delete_readers($id){
       $reader = Reader::find($id);
       $reader->delete();
       return redirect()->back()->with('deleted','Reader Deleted Successfully.');
    }

    // edit readers   
    public function edit_readers($id){
        $reader = Reader::find($id);
        return view('admin.edit_readers',compact('reader'));
    }
     
     // edit readers 
    public function update_readers($id,Request $request){
        $readers = Reader::find($id);

        $readers ->name = $request->name;
        $readers ->username = $request->username;
        $readers ->email = $request->email;
        $readers ->password = $request->password;
        $readers->save();

         return redirect()->back()->with('updated','Reader Updated Successfully');
    }
   
}

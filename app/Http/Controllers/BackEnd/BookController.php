<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Traits\UploadImages;
use App\Traits\UploadFiles;
use Illuminate\Support\Facades\Response;

class BookController extends Controller
{

    use UploadImages;
    use UploadFiles;

   // create book 
    public function create_books(){
        $categories = Category::get();
         return view('admin.create_books',compact('categories'));
    }

     // store book in database
    public function store_books(Request $request){
      $file_name = $this->saveFiles($request->upload_file, 'files');
      $fileName = $this->saveImages($request->image, 'images/books');

      Book::create([

          'name' => $request->name,
          'category_id' => $request->category,
          'discription' => $request->discription,
          'upload_file' => $file_name,
          'image' => $fileName,
      ]);

       return redirect()->back()->with('success', 'New Book Created Successfully.');
    }
      
    // show book 
    public function show_books(){
      $books = Book::get();
      return view('admin.show_book',compact('books'));
      }

   // delete book 
    public function delete_book($id){
    
      $books = Book::find($id) ;
      $books->delete();
      return redirect()->back()->with('deleted','Book Deleted Successfully.');
    }
    
   // edit book 
    public function edit_book($id){
        $categories = Category::get();
        $books = Book::find($id) ;
        $cats = array('book'=>$books);
        return view('admin.edit_book',$cats,compact('categories'));
    }

   // store book in database
    public function change_book($id,Request $request){
      $books = Book::find($id);
      
      //code for changing the exist file or keep it as it is                                                                               
        if ($request->upload_file == '') {
          $books->upload_file = $books->upload_file;
      } else {
            $upload_file =  $this->saveFiles($request->upload_file, 'files');
            $books->upload_file = $upload_file;

    }

   //code for changing the exist image or keep it as it is        
    if($request->image == ''){
      $books->image = $books->image; 

    } else {
            $file_name =  $this->saveImages($request->image, 'images/books');
            $books->image = $file_name;
    }
      
      $books->name = $request->name;
      $books->category_id = $request->category;
      $books->discription = $request->discription;
      $books->save();

        return redirect()->route('show.book')->with('updated','Book Updated Successfully.');
    
      }

   // read book  as pdf file
    public function read_book($id){
      $book = Book::where('id', $id)->get();
      $file = 'files/' . $book[0]['upload_file'];
      $headers = array(
          'Content-Type' => 'application/pdf',
      );

      return Response::file($file, $headers);

    }

  // search book 
  public function search_book(Request $request){
    $data = '%'.$request->key.'%';
   $books = Book::where('name','like',$data)->get();
   if(isset($books) && $books->count() > 0){
      foreach($books as $book){
        echo"<p><a href='/admin/book-details/$book->id'> $book->name </a></p>";
      }
   }else{
     echo" Not Found !";
   }

  }

  // show book details after searching and finding  it
  public function book_details($id){  
   $books = Book::find($id) ;
   $categories = Category::get();
   foreach($categories as $category){
     if($books->category_id == $category->id){
       $category_name = $category->name;
     }
   }
   return view('admin.get_book_details',$categories,compact('books'));
  }
}

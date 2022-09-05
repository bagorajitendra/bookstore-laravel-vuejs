<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::orderBy('id', 'desc')->get();
        return response()->json([
            'books' => $books
        ]);
    }
    public function addbook(){
        return view('admin.addbook');
    }
    public function editbook(Request $request){
        $book = Book::where('id', $request->id)->first();
        return view('admin.editbook', ['data' => $book]);
    }
    public function deletebook(Request $request){
        $deletebook = Book::where('id', $request->id)->delete();
        if($deletebook){
            return back()->with('message', 'Your Book is Deleted Successfully.');
        }
        else{
            return back()->with('message','Sorry! Your Book is not Deleted.');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::orderBy('id', 'desc')->get();
        return response()->json([
            'books' => $books
        ]);
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
        
        //return $request->published;
        //Image Upload
        $date = date('d-m-Y');
        $bookimage = $request->image;
        $fileName = date('dmyhisa').'-'.$bookimage->getClientOriginalName();
        $fileName = str_replace(" ", "-", $fileName);
        $bookimage->move('books/images/'.$date.'/', $fileName);
        $bookimage = env('APP_URL').'/books/images/'.$date.'/'.$fileName;

        $savebook = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'description' => $request->description,
            'isbn' => $request->isbn,
            'image' => $bookimage,
            'published' => $request->published,
            'publisher' => $request->publisher
        ]);
        if($savebook){
            return back()->with('message', 'Your Book is inserted Successfully.');
        }
        else{
            return back()->with('message','Sorry! Your Book is not inserted.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }
    public function showbook(Request $request){
        $book = Book::where('id', $request->id)->first();
        return view('bookshow', ['data' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }
    public function search(Request $request){
        
        $result = Book::where('title', 'LIKE', '%'.$request->q.'%')
        ->orWhere('author', 'LIKE', '%'.$request->q.'%')
        ->orWhere('genre', 'LIKE', '%'.$request->q.'%')
        ->orWhere('isbn', 'LIKE', '%'.$request->q.'%')
        ->orWhere('publisher', 'LIKE', '%'.$request->q.'%')
        ->orWhere('published', 'LIKE', '%'.$request->q.'%')
        ->orderBy('id', 'desc')->limit(10)->get();
        return response()->json([
            'books' => $result
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $date = date('d-m-Y');
        if($request->hasFile('image')){
           $bookimage = $request->image;
           $fileName = date('dmyhisa').'-'.$bookimage->getClientOriginalName();
           $fileName = str_replace(" ", "-", $fileName);
           $bookimage->move('banner/images/'.$date.'/', $fileName);
           $bookimage = 'banner/images/'.$date.'/'.$fileName;
       }
       else{
           $bookimage = $request->old_image;
       }
       $update = Book::where('id', $request->id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'description' => $request->description,
            'isbn' => $request->isbn,
            'image' => $bookimage,
            'published' => $request->published,
            'publisher' => $request->publisher
       ]);
       if($update){
            return back()->with('message', 'Your Book is Updated Successfully.');
        }
        else{
            return back()->with('message','Sorry! Your Book is not Updated.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}

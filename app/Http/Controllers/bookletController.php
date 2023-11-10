<?php

namespace App\Http\Controllers;

use App\Models\booklet;
use Illuminate\Http\Request;

class bookletController extends Controller
{
    public function showAllStocks(){
        return booklet::all();
    }
    
    public function showBook(Request $req){
        $stmt = booklet::find($req->id);
        
        return $stmt;
    }

    public function addBooklet(Request $req)
    {
        $stmt = new booklet();
        $stmt->BookTitle = $req->BookTitle;
        $stmt->BookStocks = $req->BookStocks;
        $stmt->BookAuthors = $req->BookAuthors;

        $stmt->save();

        return booklet::all();
    }

    public function updateBooklet(Request $req){
        $stmt = booklet::find($req->id);
        $stmt->BookTitle = $req->BookTitle;
        $stmt->BookStocks = $req->BookStocks;
        $stmt->BookAuthors = $req->BookAuthors;

        $stmt->save();

        return booklet::all();
    }

    public function deleteBooklet(Request $req){
        $stmt = booklet::find($req->id);

        $stmt->delete();

        return booklet::all();
    }

}

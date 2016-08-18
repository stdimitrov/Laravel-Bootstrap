<?php

namespace App\Http\Controllers;
use App\Models\Books;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*
public function books()
{
    $book_model = new Books();
    $books_data = $book_model->getBooks();


    echo '<pre>' . print_r($books_data, true) . '</pre>';

}*/
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('welcome');
    }

    public function getMe()
    {
        return view('ForMe');
    }

}

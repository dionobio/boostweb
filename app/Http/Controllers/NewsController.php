<?php
namespace App\Http\Controllers;
use App\Models\Article;
class NewsController extends Controller { public function index(){ return view('news.index',['articles'=>Article::latest()->get()]); } }

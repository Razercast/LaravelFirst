<?php

 namespace App\Http\Controllers;

 use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
     public function index() {
//         $query = DB::insert("INSERT INTO posts (title,content,created_at,updated_at) VALUES (?,?,?,?)",["Статья 3",'Текст статьи 3',now(),now()]);
//         dump($query);
         $posts = DB::select('SELECT * FROM posts WHERE id > :id',['id'=>2]);
         dump($posts);
         return view('home',["res"=>5,"name"=>"John"]);
     }
     public function test() {
         return __METHOD__;
     }

 }

 ?>

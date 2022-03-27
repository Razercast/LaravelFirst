<?php

 namespace App\Http\Controllers;

 use App\Country;
use App\Post;
use App\Rubric;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller {
     public function index() {
         $title = "Home page22";
         $h1 = "Test h1";
         $data1 = range(1,15);
         $data2 = [
             'title'=>'Title',
             'content' => 'Content',
             'keys' => 'Keywords',
         ];
         $posts = Post::orderBy('id','desc')->get();
         return view('home',compact('title','h1','data1','data2','posts'));
     }

     public function create() {
         $title = "Create Post";
         $rubrics = Rubric::pluck('title','id')->all();
        return view('create',compact('title','rubrics'));
     }

     public function store(\Illuminate\Http\Request $request) {

//         dd($request->input('title'));
         //Post::create($request->all());
//         $this->validate($request,[
//             'title' => 'required|min:5|max:100',
//             'content' => 'required',
//             'rubric_id' => 'integer',
//         ]);
         $rules  = [
             'title' => 'required|min:5|max:100',
             'content' => 'required',
             'rubric_id' => 'integer',
         ];
         $messages = [
//             'title.required' => 'Заполните поле названия',
//             'title.min' => 'Минимум 5 символов в названии',
//             'rubric_id.integer' => 'Выберите рубрику из списка',
         ];
         $validator = Validator::make($request->all(),$rules,$messages)->validate();
         Post::create($request->all());
         return redirect()->route('home');
     }


 }

 ?>

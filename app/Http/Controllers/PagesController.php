<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Auth;
use App\Topic;

class Pagescontroller extends Controller
{

public function index()
{
	$courses=Subject::all();
  return view('pages.store',compact('courses'));
}

public function home()
{
	return view('main');
}

public function create()
{
	$courses=Subject::all();
  return view('pages.create',compact('courses'));
}

public function term()
{
	$courses=Subject::all();
  return view('pages.create_final',compact('courses'));
}

public function course()
{

	return view('pages.course');
}

public function topic()
{  
	$courses=Subject::all();
	return view('pages.topic',compact('courses'));
}

public function contact()
{
	return view('pages.contact');
}

public function add_course(Request $request)
{
	 $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
    
      ]);

$course = new Subject;
$course->user_id = Auth::id();
$course->title = $request->title;
$course->course_id = $request->code;
$course->topic = NULL;
$course->save();

return redirect()->back()->with('msg','New Course has been added successfully');
}

public function add_topic(Request $request)
{
	 $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
        'topic' => 'required',
    
      ]);

$topic = new Topic;
$topic->user_id = Auth::id();
$topic->title = $request->title;
$topic->course_code = $request->code;
$topic->topic_name = $request->topic;
$topic->save();

return redirect()->back()->with('msg','New Topic has been added successfully');
}













}
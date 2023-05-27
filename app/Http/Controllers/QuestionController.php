<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Subject;
use Auth;
use Illuminate\Support\Facades\Session;
use PDF;

class Questioncontroller extends Controller
{

public function store(Request $request)
{ 



  
  $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
        'question' => 'required',
        'mark' => 'required', 
        'level' => 'required'
    
      ]);
$question = new Question;
$question->user_id = Auth::id();
$question->course_title = $request->title;
$question->course_code = $request->code;
$question->question = $request->question;
$question->mark = $request->mark;
$question->difficulty_level= $request->level;
$question->save();

 
 return redirect()->back()->with('msg','Question has been added successfully');
}

public function create(Request $request)
{ 

  

   $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
        'year' => 'required',
        'sem' => 'required', 
        'level' => 'required',
        'mark' => 'required',
        'q' => 'required',
        'level'=> 'required',
        'time' => 'required',

    
      ]);

  $time=$request->time;
  $title=$request->title;
  $code=$request->code;
  $year=$request->year;
  $sem=$request->sem;
  $comment=$request->comment;


  $mark=$request->mark;
	$qs=$request->q;
  $x=intval($mark/$qs);
  $y=$mark%$qs;
  $z=$mark-($x*($qs-1));

  if($y==0)
  {
    $count=Question::where('mark',$x)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->count();
     if($count>=$qs)
     {
      $ques=Question::where('mark',$x)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->get()->random($qs);

      $ques2=Question::where('mark',$z)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->get()->random(0);

 //return view('pages.question',compact('ques','ques2','mark','qs','time','title','code','year','sem','comment'));
 $pdf = PDF::loadView('pages.question',compact('ques','ques2','mark','qs','time','title','code','year','sem','comment'));
  return $pdf->stream('question.pdf');
  //return $pdf->download('question.pdf');
     print_r($level);
     }
     else 
     {
       return redirect()->back()->with('msg','Sorry! Question generation is not possible for your selected combination');
     }
  }
else
{
  $count=Question::where('mark',$x)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->count();
  $c=Question::where('mark',$z)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->count();
 
  if($count>=($qs-1) && $c>=1)
  {
      $ques=Question::where('mark',$x)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->get()->random($qs-1);

      $ques2=Question::where('mark',$z)->wherein('difficulty_level',$request->get('level'))->where('course_title',$title)->where('course_code',$code)->get()->random(1);

 // return view('pages.question',compact('ques','ques2','mark','qs','time','title','code','year','sem','comment'));
  $pdf = PDF::loadView('pages.question',compact('ques','ques2','mark','qs','time','title','code','year','sem','comment'));
  return $pdf->stream('question.pdf');

    }
     else
     {
       return redirect()->back()->with('msg','Sorry! Question generation is not possible for your selected combination');
     }
}


 
 
	
}



public function generate(Request $request)
{ 
   $a=array();
 
  foreach ($request->input('data') as $key=> $value)
  {
    array_push($a, $value);
  }
 
$x=count($a);
$qs=array();
 
 for($i=0;$i<$x;$i++)
 {
  $qs[$i]=Question::where('mark',$a[$i])->get();
  return view('pages.question',compact('qs'));

}
 

}

public function term(Request $request)
{
  $this->validate($request,[
        'title' => 'required',
        'code' => 'required',
        'year' => 'required',
        'sem' => 'required', 
        'level' => 'required',
        'mark' => 'required',
        'q' => 'required',
        'set'=> 'required',
        'level'=> 'required',
        'time' => 'required',

    
      ]);

  $time=$request->time;
  $title=$request->title;
  $code=$request->code;
  $year=$request->year;
  $sem=$request->sem;
  $comment=$request->comment;
  $mark=$request->mark;
  $qs=$request->q;
  $set=$request->set;
  $total=$qs*$set;

  if($mark>$qs*10)
  {
    return redirect()->back()->with('msg','Please increase question quantity or decrease total marks.');
  }
else{
if($set==3)
{
 $count=Question::wherein('difficulty_level',$request->get('level'))->wherein('mark',[3,4])->where('course_title',$title)->where('course_code',$code)->count();

 if($count>=$total)
 {
   $ques=Question::wherein('difficulty_level',$request->get('level'))->wherein('mark',[3,4])->where('course_title',$title)->where('course_code',$code)->get()->random($total);
    $pdf = PDF::loadView('pages.termfinal.termfinal_3',compact('ques','mark','qs','set','time','title','code','year','sem','comment','total'));
    return $pdf->stream('question.pdf');
 }
  else
     {
       return redirect()->back()->with('msg','Sorry! Question generation is not possible for your selected combination');
     }
}
else if($set==1)
{
  $count=Question::wherein('difficulty_level',$request->get('level'))->where('mark',10)->where('course_title',$title)->where('course_code',$code)->count();
 if($count>=$total)
 {
   $ques=Question::wherein('difficulty_level',$request->get('level'))->where('mark',10)->where('course_title',$title)->where('course_code',$code)->get()->random($total);
    $pdf = PDF::loadView('pages.termfinal.termfinal_1',compact('ques','mark','qs','set','time','title','code','year','sem','comment','total'));
    return $pdf->stream('question.pdf');
 }
  else
     {
       return redirect()->back()->with('msg','Sorry! Question generation is not possible for your selected combination');
     }
}

else if($set==2)
{
  $count=Question::wherein('difficulty_level',$request->get('level'))->where('mark',5)->where('course_title',$title)->where('course_code',$code)->count();
 if($count>=$total)
 {
   $ques=Question::wherein('difficulty_level',$request->get('level'))->where('mark',5)->where('course_title',$title)->where('course_code',$code)->get()->random($total);
   $pdf = PDF::loadView('pages.termfinal.termfinal_2',compact('ques','mark','qs','set','time','title','code','year','sem','comment','total'));
   return $pdf->stream('question.pdf');
 }
  else
     {
       return redirect()->back()->with('msg','Sorry! Question generation is not possible for your selected combination');
     }
}

else if($set==4)
{
  $count=Question::wherein('difficulty_level',$request->get('level'))->wherein('mark',[2,3])->where('course_title',$title)->where('course_code',$code)->count();
 if($count>=$total)
 {
   $ques=Question::wherein('difficulty_level',$request->get('level'))->wherein('mark',[2,3])->where('course_title',$title)->where('course_code',$code)->get()->random($total);
   $pdf = PDF::loadView('pages.termfinal.termfinal_4',compact('ques','mark','qs','set','time','title','code','year','sem','comment','total'));
   return $pdf->stream('question.pdf');
 }
  else
     {
       return redirect()->back()->with('msg','Sorry! Question generation is not possible for your selected combination');
     }
}
}
}

 



}



















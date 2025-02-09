<html>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Question Generator</title>
<style>

.hello {
    float: left;
}

.notifText{
    float: right;
}

.loader {
    clear: both;   
}
</style>
<body>
<h2> <center>Khulna University, Khulna</center></h2>
<h2> <center>{{$year}} Year {{$sem}} Term-2021</center></h2>
         <h3> <center>Course Title: {{$title}}</center></h3>  
        <h3> <center>Course Code: {{$code}}</center></h3>
          <h3> <center>Total Marks: {{$mark}}</center></h3><br>
           <h3 style="text-align:right">Time: {{$time}}</h3><br>
          
          @if($comment!=NULL)
          <p><b>[ N.B. {{ $comment }} ]</b> </p>

      @endif


@php
 $i=1;
 $x=0;
 $a=0;
 $b=1;
 $c=2;
@endphp
@foreach ($ques as $key=>$q)
<div class="textContainer">
@if($a==$key)
<p class="hello">{{$i}}.(a) {{ $q->question}} </p>
@elseif ($b==$key)
<p class="hello">&nbsp;&nbsp; (b) {{ $q->question}} </p>
@elseif ($c==$key)
<p class="hello">&nbsp;&nbsp; (c) {{ $q->question}}  </p>
@endif
<div class="backgroundInfo">
    <div class="spinner"></div>
      @if($a==$key)
<p class="notifText">3</p>
@elseif ($b==$key)
<p class="notifText">3</p>
@elseif ($c==$key)
<p class="notifText">4</p>
@endif
   </div>
   <div class="loader"></div>
</div>

@if(($key-$x)==2)
@php
$i=$i+1;
$x=$key+1;
$a=$a+3;
$b=$b+3;
$c=$c+3;
@endphp
<br><br>

@endif

@endforeach
</body>
</html>
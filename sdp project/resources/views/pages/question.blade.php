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

<br><br>


      <div>
          @foreach ($ques as $key=> $q)
   <div class="textContainer">
   <p class="hello">{{$key+1}}. {{$q->question}}</p>
   <div class="backgroundInfo">
    <div class="spinner"></div>
       <p class="notifText">{{$q->mark}}</p>
   </div>
   <div class="loader"></div>
</div>
   
    
          @endforeach
      
          @foreach ($ques2 as $key=> $q)
        <div class="textContainer">
   <p class="hello">{{$qs}}. {{$q->question}}</p>
   <div class="backgroundInfo">
    <div class="spinner"></div>
       <p class="notifText">{{$q->mark}}</p>
   </div>
   <div class="loader"></div>
</div>
@endforeach
</div>
      
  


    
</body>




</html
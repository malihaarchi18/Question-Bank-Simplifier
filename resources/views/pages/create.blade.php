<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Generator</title>
  @include('layouts.style')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
/* The container */

.con {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: #495057;
}

/* Hide the browser's default checkbox */
.con input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.con:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.con input:checked ~ .checkmark {
  background-color: #3f51b5;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.con input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.con .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);



}
</style>
<body>
<header class="header_four">  

    @include('layouts.header')
    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                 <a class="navbar-brand" href="index-2.html"><img src="{{asset('public/front/images/logo2.jpg')}}" alt="logo"> </a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="{{ route('main')}}" class="nav-link">Home</a>
                        </li>
                        
                <li class="nav-item"><a href="" class="nav-link">Store</a>
                 <ul class="navbar-nav nav mx-auto">
             <li class="nav-item"><a href="{{ route('store')}}" class="nav-link" >Add Question</a></li>
            <li class="nav-item"><a href="{{ route('add.course')}}" class="nav-link" >Add Course</a></li>
         <li class="nav-item"><a href="{{ route('add.topic')}}" class="nav-link">Add Topic</a></li>
                            </ul>
                        </li>
                         <li class="nav-item"><a href="" class="nav-link active">Create Question</a>
                <ul class="navbar-nav nav mx-auto">
             <li class="nav-item"><a href="{{ route('create')}}" class="nav-link" >Class Test</a></li>
            <li class="nav-item"><a href="{{ route('termfinal')}}" class="nav-link" >Term Final</a></li>
          </ul>
                        </li>
                        </li>   
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
             
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
</header> <!--  End header section-->


@guest
 @if (Route::has('register'))
 <h5> Please <a href="{{ route('login') }}" >login</a> or <a href="{{ route('register') }}" > Sign up </a> to contiue </h5>
 @endif
 @else

<div class="qu">
     <h2 style="color:white;"> Create Class Test Question</h2>
</div><br><br>


@if(session('msg'))
            <div class="alert alert-warning" role="alert">
            {{ session('msg') }}

            </div>

             @endif
@if ($errors->any())
    <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   
@endif
<div class="store" style="margin-left: 150px ;" >
<form action="{{ route('question.create') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Course Title</label>
      <select id="inputState" class="form-control" name="title">
       <option value="" disabled selected hidden>Select Course Title</option>
       @foreach ($courses as $course)
        <option value="{{ $course->title}}">{{ $course->title}}</option>
          @endforeach 
      </select>
    </div>
    <div class="form-group col-md-4"  style="margin-left: 200px ;">
      <label for="inputEmail4">Course Code</label>
     <select id="inputState" class="form-control" name="code">
      <option value="" disabled selected hidden>Select Course Code</option>
         @foreach ($courses as $course)
        <option value="{{ $course->course_id}}">{{ $course->course_id}}</option>
          @endforeach
         </select>
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Year</label>
      <select id="inputState" name="year" class="form-control">
       <option value="" disabled selected hidden>Select Year</option>
        <option value="1st">1&#x02E2;&#x1D57;</option>
          <option value="2nd">2&#x207F;&#x1D48;</option>
            <option value="3rd">3&#x02B3;&#x1D48;</option>
             <option value="4th">4&#x1D57;&#x02B0</option>
      </select>
    </div>
    <div class="form-group col-md-4"  style="margin-left: 200px ;">
      <label for="inputPassword4">Semester</label>
       <select id="inputState" name="sem"class="form-control">
       <option value="" disabled selected hidden>Select Term</option>
     <option value="1st">1&#x02E2;&#x1D57;</option>
          <option value="2nd">2&#x207F;&#x1D48;</option>
        
      </select>
    </div>
  </div>


   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Total Marks</label>
      <input type="number" class="form-control" name="mark" id="inputEmail4" min="1" max="100" placeholder="Total Marks">
    </div>
    <div class="form-group col-md-4"  style="margin-left: 200px ;">
      <label for="inputPassword4">Total no. of question</label>
      <input type="number" class="form-control" name="q" id="inputPassword4" autocomplete="off" max="10" placeholder="No. of Question">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="inputEmail4">Difficulty Level</label>
<label class="con">Easy
  <input type="checkbox" name="level[]" value="easy">
  <span class="checkmark"></span>
</label>
<label class="con">Medium
  <input type="checkbox" name="level[]" value="medium">
  <span class="checkmark"></span>
</label>
<label class="con">Hard
  <input type="checkbox" name="level[]" value="hard">
  <span class="checkmark"></span>
</label>
</div>

    <div class="form-group col-md-4" style="margin-left: 200px ;">
      <label for="inputEmail4">Time</label>
      <input type="text" class="form-control" name="time" id="inputEmail4" max="180" placeholder="Total time in minutes" autocomplete="off">
    </div>
  </div>

<div class="form-group">
    <label for="inputAddress2">Comment (Optional)</label>
   <textarea name="comment" rows="4" cols="50" class="form-control" placeholder="Any Comment if needed"></textarea>

  </div>
  




 


    
  

  <button type="submit" class="qstore">Create</button>
</form>
</div>
 @endguest








    

   @include('layouts.script')
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js">


    </script>

    
</body>
<br><br><br><br>

@include('layouts.footer')


</html>
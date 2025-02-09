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
                        
                <li class="nav-item"><a href="" class="nav-link active">Store</a>
                 <ul class="navbar-nav nav mx-auto">
             <li class="nav-item"><a href="{{ route('store')}}" class="nav-link" >Add Question</a></li>
            <li class="nav-item"><a href="{{ route('add.course')}}" class="nav-link" >Add Course</a></li>
         <li class="nav-item"><a href="{{ route('add.topic')}}" class="nav-link">Add Topic</a></li>
                            </ul>
                        </li>
                     <li class="nav-item"><a href="" class="nav-link">Create Question</a>
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






<hr><br>
    @guest
 @if (Route::has('register'))
 <h5> Please <a href="{{ route('login') }}" >login</a> or <a href="{{ route('register') }}" > Sign up </a> to contiue </h5>
 @endif
 @else

@if ($errors->any())
    <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   
@endif
 @if(session('msg'))
            <div class="alert alert-success" role="alert">
            {{ session('msg') }}

            </div>

             @endif
<div class="store" style="margin-left: 150px ;" >
  <form action="{{ route('question.store') }}" method="post" >
              @csrf
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
      <label for="inputEmail4">Mark</label>
      <select id="inputState" class="form-control" name="mark">
      <option value="" disabled selected hidden>Select Mark</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      </select>
    </div>
    <div class="form-group col-md-4"  style="margin-left: 200px ;">
      <label for="inputPassword4">Difficulty Level</label>
    <select id="inputState" class="form-control" name="level">
      <option value="" disabled selected hidden>Select Difficulty Level</option>
        <option value="easy">Easy</option>
          <option value="medium">Medium</option>
            <option value="hard">Hard</option>
      </select>
    </div>
  </div>

   <div class="form-group">
    <label for="inputAddress2">Question</label>
   <textarea name="question" rows="4" cols="50" class="form-control" placeholder="Add your question here"></textarea>

  </div>


    
  

  <button type="submit" class="qstore">Store Question</button>
</form>
</div>
@endguest




    

   @include('layouts.script')
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>

    
</body>


@include('layouts.footer')


</html>
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
<!-- Preloader -->   

    @include('layouts.header')
     @guest
 @if (Route::has('register'))
 <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                 <a class="navbar-brand" href="index-2.html"><img src="{{asset('public/front/images/logo2.jpg')}}" alt="logo"> </a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="{{ route('main')}}" class="nav-link active">Home</a>
                        </li>
                        
                <li class="nav-item"><a href="" class="nav-link">Store</a>
                 <ul class="navbar-nav nav mx-auto">
             <li class="nav-item">Add Question</a></li>
            <li class="nav-item">Add Course</a></li>
         <li class="nav-item">Add Topic</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Create Question</a>
                <ul class="navbar-nav nav mx-auto">
             <li class="nav-item">Class Test</a></li>
            <li class="nav-item">Term Final</a></li>
                        </li>   
                    </ul>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
             
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
@endif
@else
      <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                 <a class="navbar-brand" href="index-2.html"><img src="{{asset('public/front/images/logo2.jpg')}}" alt="logo"> </a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="{{ route('main')}}" class="nav-link active">Home</a>
                        </li>
                        
                <li class="nav-item"><a href="" class="nav-link">Store</a>
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
                        </li>   
                    </ul>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
             
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
@endguest

</header> <!--  End header section-->

<div class="matha">
    <img src="{{ asset('public/front/images/banner/b.png') }}" alt="matha" width="1380" height="500">
    <div class="qb">
    <h1 style="color:white;"> Question Bank Simplifier</h1>

    </div>
<div class="qb2">
     <h5 style="color:white;"> An automatic question generator system</h5>
 </div>
</div>





    

   @include('layouts.script')
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>

    
</body>
<br><br><br><br>

@include('layouts.footer')


</html>
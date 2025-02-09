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
                        
                        <li class="nav-item"><a href="{{ route('store')}}" class="nav-link active">Store Question</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('create')}}" class="nav-link">Create Question</a>
                        </li>   
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div>
             
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
</header> <!--  End header section-->





<hr><br>
<form action="{{ route('question.generate') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>

    </tr>
  </thead>
  <tbody>
    @for($i=0;$i<$num;$i++)
    <tr>
      <th scope="row"> </th>
      <td>
      <div class="form-group col-md-4">
      <input type="number" class="form-control" name="data[]" id="inputEmail4" >
      
    </div>
        


      </td>
      <td>Otto</td>
    
    </tr>
    @endfor
  </tbody>
</table>
 <button type="submit" class="qstore">Next</button>
</form>


    

   @include('layouts.script')
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>

    
</body>


@include('layouts.footer')


</html>
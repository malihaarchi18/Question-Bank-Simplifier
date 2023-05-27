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
                        
                <li class="nav-item"><a href="" class="nav-link">Store</a>
                 <ul class="navbar-nav nav mx-auto">
             <li class="nav-item"><a href="{{ route('store')}}" class="nav-link" >Add Question</a></li>
            <li class="nav-item"><a href="{{ route('add.course')}}" class="nav-link" >Add Course</a></li>
         <li class="nav-item"><a href="{{ route('add.topic')}}" class="nav-link">Add Topic</a></li>
                            </ul>
                        </li>
                         <li class="nav-item"><a href="" class="nav-link ">Create Question</a>
                <ul class="navbar-nav nav mx-auto">
             <li class="nav-item"><a href="{{ route('create')}}" class="nav-link" >Class Test</a></li>
            <li class="nav-item"><a href="{{ route('termfinal')}}" class="nav-link" >Term Final</a></li>
          </ul>
                        </li>
                        </li>   
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link active">Contact</a></li>
                    </ul>
                </div>
             
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
</header> <!--  End header section-->

<section class="contact_info_wrapper">
     <div class="container">  
        <div class="row">  
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_info">
                    <h3 class="title">Contact Details</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla tortor consequat, lobortis justo in, sodales diam. Duis nec dolor in sapien tincidunt posuere et faucibus magna. Nulla efficitur enim eu nulla lobortis rhoncus. Vestibulum ac nibh maximus tellus molestie bibendum vel a quam.</p>
                    <div class="event_location_info">                  
                        <ul class="list-unstyled">
                            <li>
                                <h4 class="info_title">Address : </h4>
                                
                            </li>
                            <li>
                                <h4 class="info_title">Phone Numbers :</h4>
                                
                            </li>
                            <li>
                                <h4 class="info_title">Our E-mails :</h4>
                               
                            </li>                      
                        </ul>
                        <img src="images/banner/map_shape.png" alt="" class="contact__info_shpae">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_form_wrapper">
                    <h3 class="title">Get In Touch</h3>
                    <div class="leave_comment">
                        <div class="contact_form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                       <input type="text" class="form-control" id="name"  placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your E-mail">
                                    </div>                                    
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Pick Your Subject">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <textarea class="form-control" id="comment" placeholder="Your Comment Wite Here ..."></textarea>
                                    </div>
                                     
                                        <button type="submit" class="qstore">Send Massage</button>
                                    
                                </div>
                            </form>   
                        </div>
                    </div> 
                </div>
           </div>
        </div>
    </div>
</section> <!-- Contact Info Wrappper-->


   @include('layouts.script')
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>

    
</body>
<br><br><br><br>

@include('layouts.footer')


</html>
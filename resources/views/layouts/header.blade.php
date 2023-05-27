<div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
        					<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+000-9999-888</li>
        						<li><i class="flaticon-mail-black-envelope-symbol"></i>contact@domain.com</li>
        					</ul>                    
                        </div>
                        <div class="login_info">
                          
                          
                          
                       @guest 
                        <ul class="d-flex">
                          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Log In</a></li>  
                     @if (Route::has('register'))
                            
                                <li class="nav-item"><a href="{{ route('register')}}" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                               
                            </ul>
                            @endif
                            @else
                             <ul class="d-flex">
                              <li class="nav-item"><a href="" class="nav-link sign-in js-modal-show"><i class="fa fa-user"></i>{{ Auth::user()->name }}</a></li>
                              <li class="nav-item"><a href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link sign-in js-modal-show"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          </ul>
                          
                        @endguest
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


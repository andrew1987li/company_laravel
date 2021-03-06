    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +1(240)-221-1454</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="skype:live:talent.developer?chat"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li id="mnu0"><a href="/">Home</a></li>
                        <li id="mnu1"><a href="/pages/services">Services</a></li>
                        <li id="mnu2"><a href="/pages/portfolio">Portfolio</a></li>
                        <li id="mnu3"><a href="/blog">Blog</a></li>                         
                        <li class="dropdown" id="mnu4">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Team <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="/pages/aboutus">About Us</a></li>

                                <li><a href="/pages/contact">Contact</a></li>      

                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        @if (Auth::guest())
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li>
                                         <div class="row">
                                                <div class="col-md-12">
                                                     <form class="form" role="form" method="post" action="/ajxlogin" accept-charset="UTF-8" id="login-nav">
                                                            <div class="form-group">
                                                                 <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="email" required>
                                                            </div>
                                                            <div class="form-group">
                                                                 <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
                                                                 <div class="help-block text-right"><a href="{{ route('password.request') }}">Forget the password ?</a></div>
                                                            </div>
                                                            <div class="form-group">
                                                                 <button type="submit" class="btn btn-primary btn-block" id="btnlogin">Sign in</button>
                                                            </div>
                                                            <div class="checkbox">
                                                                 <label>
                                                                 <input type="checkbox" name="remember"> keep me logged-in
                                                                 </label>
                                                            </div>
                                                             {{ csrf_field() }}
                                                     </form>
                                                </div>
                                                <div class="bottom text-center">
                                                    New here ? <a href="/register"><b>Join Us</b></a>
                                                </div>
                                         </div>
                                    </li>
                                </ul>
                        </li>   
                        @else
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->name }}  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                    </a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>                            
                        </li>     
                        @endif                                         
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
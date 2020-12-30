<header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href={{route('frontsite.index')}} class="navbar-brand"><img src="images/logo.png" alt="" /></a>
                     </div>
                     <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search for products or companies">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                              @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('do_register')}}">sign in <span
                                class="sr-only">(current)</span></a>
                    </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard.home')}}">Dashboard <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Logout <span class="sr-only">(current)</span></a>
                        </li>
                    @endauth
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="images/flag.png" alt="" /> </a> </li>
                                 
                                 
                           
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href={{route('frontsite.howitworks')}}>How it works</a></li>
                                 <li><a href={{route('frontsite.aboutus')}}>Chamb for Business</a></li>
                                 <li class="dropdown">

                                    <ol>
                                       <li id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><a>pages</a></li>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href={{route('frontsite.index')}}>HomePag</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.aboutus')}}>About Us</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.category')}}>Category</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.cms')}}>CMS</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.productpage')}}>Product Page</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.pricing')}}>Pricing</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.profile')}}>Profile</a><br><br>
                                          <a class="dropdown-item" href={{route('frontsite.howitworks')}}>How it Work</a><br><br>


                                       </div>
                                       <!-- </div> -->
                                       <!-- </div> -->
                                    </ol>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="howitworks.html">How it works</a></li>
            <li><a href="#">chamb for Business</a></li>
         </ul>
      </div>
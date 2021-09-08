<!--header section start -->
      <div class="header_section" style="background-image: url('assets/image/banner-bg.png');">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="index.html"><img src="{{ asset('assets/image/logo1.png') }}"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('home') }}">{{ trans('Home')}}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">{{ trans('About')}}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('course-list') }}">{{ trans('Courses')}}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog.html">{{ trans('Blog')}}</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">{{ trans('Contact Us')}}</a>
                        </li>
                     </ul>
                     <div class="call_section">
                        <ul>
                           <li><a href="{{route('change-language',['en'])}}"><img src="{{ asset('assets/image/en.png') }}"></a></li>
                           <li><a href="{{route('change-language',['vi'])}}"><img src="{{ asset('assets/image/vn.png') }}"></a></li>
                        </ul>
                        <ul>
                           @if(Auth::check())
                           <div class="dropdown" style="margin-left: 50px;">
                                <button  type="button"  data-toggle="dropdown" >
                                 <a href=""><img src="{{ asset('assets/image/avatar1.jpg')}}"></a>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="{{ route('myProfile', Auth::user()->id)}}">Profile</a>
                                  <a class="dropdown-item" href="#">My courses</a>
                                  <a class="dropdown-item" href="{{ route('myWord', Auth::user()->id) }}">My words</a>
                                  <a class="dropdown-item" href="{{ route('exam.result') }}">My result exam</a>
                                  <a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
                                </div>
                           </div>
                           @else
                           <li><button class="btn btn-warning"><a href="{{route('get.login')}}">{{ trans('LOG IN')}}</a></button></li>
                           @endif
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{ trans('Framgia E-learning System') }}</h1>
                              <p class="banner_text">{{ trans('English vocabulary learning system by topic') }}</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="{{ route('word.list')}}">{{ trans('Word list') }}</a></div>
                                 <div class="quote_bt"><a href="{{ route('course-list')}}">{{ trans('Start Lesson') }}</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{ asset('assets/image/img-1.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{ trans('Framgia E-learning System') }}</h1>
                              <p class="banner_text">{{ trans('English vocabulary learning system by topic.') }}</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="{{ route('word.list')}}">{{ trans('Word list') }}</a></div>
                                 <div class="quote_bt"><a href="{{ route('course-list')}}">{{ trans('Start Lesson') }}</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{ asset('assets/image/img-1.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{ trans('Framgia E-learning System') }}</h1>
                              <p class="banner_text">{{ trans('English vocabulary learning system by topic.') }}</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="{{ route('word.list') }}">{{ trans('Word list') }}</a></div>
                                 <div class="quote_bt"><a href="{{ route('course-list')}}">{{ trans('Start Lesson') }}</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{ asset('assets/image/img-1.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      </div>
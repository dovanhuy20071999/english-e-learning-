<!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="subscribe_bt"><a href="#">{{ trans('Subscribe') }}</a></div>
            <input type="text" class="email_text" placeholder="{{ trans('Enter Your Email')}}" name="Enter Your Email">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="#"><img src="{{ asset('assets/image/call-icon1.png') }}"><span class="padding_left_15">{{ trans('Call Now +01 9876543210') }}</span></a></div>
                     <div class="call_text"><a href="#"><img src="{{ asset('assets/image/mail-icon1.png') }}"><span class="padding_left_15">framgia@gmail.com</span></a></div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <h4 class="information_text">{{ trans('Information') }}</h4>
                        <p class="many_text">{{ trans('title3')}}</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">{{ trans('Helpful Links') }}</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">{{ trans('Home') }}</a></li>
                              <li><a href="about.html">{{ trans('About') }}</a></li>
                              <li><a href="services.html">{{ trans('Courses') }}</a></li>
                              <li><a href="blog.html">{{ trans('Blog') }}</a></li>
                              <li><a href="news.html">{{ trans('News') }}</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html"><img src="{{ asset('assets/image/logo1.png') }}"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
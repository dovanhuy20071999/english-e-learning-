@extends('layouts.app')
@section('content')

      <!--banner section end -->
      </div>
      <!--header section end -->
      <!-- about section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">{{ trans('Our About') }}</h1>
            <p class="news_text">{{ trans('title')}}</p>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_taital_box">
                        <p class="date_text">{{ trans('01 Jan 2020') }}</p>
                        <h4 class="make_text">{{ trans('2018 BEST English e-learning system') }}</h4>
                        <p class="lorem_text">{{ trans('title') }}</p>
                        <p class="lorem_text">{{ trans('title2') }}</p>
                        <p class="post_text">{{ trans('Post By : Framgia') }}</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="{{ asset('assets/image/img-6.png') }}" class="image_6" style="width:100%">
                     <h6 class="plus_text">+</h6>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">{{ trans('Read More') }}</a></div>
         </div>
      </div>
@endsection
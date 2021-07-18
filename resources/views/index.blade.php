@extends('layouts.app')

@section('content')
  @include('components.preloader')  
  @include('components.frontSlider')  
  @include('components.features')  
  <div class="main-wrapper">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-8 main-wrapper-content">
          <!--~~~~~ Start Site Main ~~~~~-->
          <main class="site-main">
            @include('components.featuredPost')  
            @include('components.masonryPosts')  
          </main>
          @include('components.pagination')  
        </div>
        <div class="col-lg-4">
          @include('components.sidebar')  
        </div>
      </div>
    </div>
  </div>
@endsection

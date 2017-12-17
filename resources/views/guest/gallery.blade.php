@extends('layouts.master')

@section('content')
  <div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">gallery</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="gallery-box col-xs-12">
            <div class="container">
                <div class="gallery-filters col-xs-12">
                    <ul>
                        <li class="filter active" data-filter="all">all</li>
                        <li class="filter" data-filter=".health">health</li>
                        <li class="filter" data-filter=".x-ray">x-ray</li>
                        <li class="filter" data-filter=".dental">dental</li>
                        <li class="filter" data-filter=".surgery">surgery</li>
                    </ul>
                </div>
                <!-- end gallery-filters -->
                <div class="gallery-container col-xs-12">
                    <ul id="lightgallery">
                      @foreach ($galleryPhotos as $photo)
                        @php
                          $arr = array('health','x-ray','dental');
                          $rand = array_rand($arr);
                          $class = $arr[$rand];
                        @endphp
                        <li data-src="{{$photo->img_path}}">
                            <div class="mix {{$class}} col-md-4 col-sm-6 col-xs-12">
                                <a href="#">
                                    <img src="{{$photo->img_path}}" alt="">
                                    <div class="img-caption">
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                      @endforeach

                    </ul>
                </div>
            </div>
        </div>
@endsection

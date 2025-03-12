@extends('master.front')
@section('meta')
    <meta name="keywords" content="{{$setting->meta_keywords}}">
    <meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Sub Categories')}}
@endsection

@section('content')
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumbs">
                        <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>
                        <li class="separator"></li>
                        <li>{{__('Category')}}</li>
                        <li class="separator"></li>
                        <li>{{$category->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        .genius-banner .inner-content,
        .sright-image .inner-content.cat {
            position: absolute;
            background: #ffffffbd;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            bottom: 0px;
            left: 50%;
            top: unset;
            transform: translateX(-50%);
        }
    </style>

    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="bannner-section mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>{{$category->name}}{{__('\'s Categories')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <div class="row g-3">
                        @foreach ($subCategories as $item)
                            <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                <a href="{{ url('/catalog?category=' . $category->name . '&&subcategory=' . $item->slug ) }}" class="genius-banner">
                                    <img class="lazy" data-src="{{ asset('assets/images/' . $item->photo) }}" alt="">
                                    <div class="inner-content cat">
                                        @if (isset($item->name))
                                            <p>{{ $item->name}}</p>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
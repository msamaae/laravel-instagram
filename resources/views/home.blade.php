@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-3 pl-5">
            <img src="{{URL::asset('/images/img3.jpg')}}" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-md-9">
            <h1>{{ Auth::user()->name }}</h1>

            <div class="d-flex mb-4">
                <div class="pr-5"><strong>123</strong> posts</div>
                <div class="pr-5"><strong>123</strong> followers</div>
                <div class="pr-5"><strong>123</strong> following</div>
            </div>
            <div>
                Profile Title - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laudantium?
                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
            </div>
            <div>Profile description</div>
            <div><a href="#">www.test.test</a></div>
        </div>
    </div>
</div>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{URL::asset('/images/img1.jpg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{URL::asset('/images/img2.jpg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{URL::asset('/images/img3.jpg')}}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
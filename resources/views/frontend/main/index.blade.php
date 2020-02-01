@extends('frontend.layouts.master')
@section('service')
    @include('partials.service')
@endsection
@section('article')
    <div class="parttitle d-flex flex-column align-items-center mb-5">
        <h2 class="mb-2 font-weight-bold pb-2">آخرین مطالب</h2>
        <img src="img/seperator.png" alt=""/>
    </div>
    <div class="d-flex flex-wrap mt-4 w-100">
    @foreach ($posts as $post)

        <div class="col-12 col-md-3 mb-5 ">
            <a href="{{route('frontend.post.show',$post->slug)}}" class="text-decoration-none">
                 <div class="productitem d-flex flex-column align-items-center position-relative">
                    <img src="{{$post->photo->path}}" alt="" class="w-100"/>
                    <div class="d-flex flex-column align-items-start bg-white w-100">
                        <h3 class="font-weight-bold px-3 pt-3 w-100 text-center pb-2">{{$post->title}}</h3>
                        <p class="font-weight-bold text-justify m-0 px-3 pb-3">{{\Illuminate\Support\Str::limit($post->description,100)}}</p>
                        <div class="like d-flex justify-content-between align-items-center px-3 w-100 my-3">
                            <h5 class="m-0">{{$post->user->name}}</h5>
                            <div class=" d-flex justify-content-right align-items-center">
                                <img src="img/heart.png" alt="">
                                <img src="img/icons8-thick-vertical-line-50.png" alt="">
                                <h5 class="m-0">32 نفر</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    </div>
    <div class="col-md-12 mt-3 d-flex justify-content-center"><a href="{{route('frontend.post.all')}}">مشاهده همه</a></div>
@endsection

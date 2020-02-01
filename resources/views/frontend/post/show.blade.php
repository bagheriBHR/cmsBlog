@extends('frontend.layouts.master')
@section('head')
    <meta name="description" content="{{$post->meta_description}}">
    <meta name="keywords" content="{{$post->meta_keywords}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@endsection
@section('article')
    <div class="d-flex flex-wrap mt-4 w-100">
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
    </div>
{{--comment form--}}
    @if(\Illuminate\Support\Facades\Session::has('add_comment'))
        <div class="alert alert-success text-right">
            <div>{{Session('add_comment')}}</div>
        </div>
    @endif
    @include('partials.form-errors')
    <div class="card my-4 text-right">
        <h5 class="card-header">ثبت نظر:</h5>
        <div class="card-body">
            {!! Form::open(['route' => ['frontend.comment.store', $post->id], 'method' => 'post']) !!}

           <div class="form-group">
                {!! Form::label('description', 'توضیحات:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
{{--showing comments of this post and reply--}}
@include('partials.comments',['comments'=>$post->comments,'post'=>$post])
@endsection


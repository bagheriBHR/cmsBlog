@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection

@section('content')
    <div class="">
        <div class="mb-4">
            <div class="d-flex flex-column">
                <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">آپلود فایل</h3>
            </div>
            @include('partials.form-errors')
            <form class="customform p-3 bg-white dropzone" method="post" action="{{route('photo.store')}}">
                @method('POST')
                @csrf
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/dropzone.min.js')}}"></script>
@endsection


@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="mb-4">
            <div class="d-flex flex-column">
                <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">تغییر مطلب</h3>
            </div>
            @include('partials.form-errors')
            <div class="d-flex bg-white">
                <div class="col-md-12 p-0">
                     <form class="customform p-3 " method="post" action="{{route('comment.update',$comment->id)}}">
                         @method('PATCH')
                        @csrf
                        <div class="form-group row d-flex align-items-center">
                             <label for="description" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> توضیحات:</label>
                             <div class="col-sm-5">
                                 <textarea type="text" class="custom-field form-control form-control-sm" rows="10" id="description" name="description" >{{$comment->description}}</textarea>
                             </div>
                         </div>
                        <button type="submit" class="btn custombutton py-2 px-4 mr-2">به روز رسانی</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


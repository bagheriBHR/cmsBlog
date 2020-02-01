@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="mb-4">
            <div class="d-flex flex-column">
                <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">تغییر مطلب</h3>
            </div>
            @include('partials.form-errors')
            <div class="d-flex bg-white">

                <div class="col-md-10 p-0">
                     <form class="customform p-3 " method="post" action="{{route('category.update',$category->id)}}">
                         @method('PATCH')
                        @csrf
                         <div class="form-group row d-flex align-items-center">
                             <label for="title" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">عنوان:</label>
                             <div class="col-sm-5">
                                 <input type="text" class="custom-field form-control form-control-sm" id="title" name="title" value="{{$category->title}}">
                             </div>
                         </div>
                         <div class="form-group row d-flex align-items-center">
                             <label for="slug" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> نام مستعار :</label>
                             <div class="col-sm-5">
                                 <input type="text" class="custom-field form-control form-control-sm" id="slug" name="slug" value="{{$category->slug}}">
                             </div>
                         </div>
                         <div class="form-group row d-flex align-items-center">
                             <label for="meta_description" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">متا توضیحات :</label>
                             <div class="col-sm-5">
                                 <textarea type="text" rows="10" class="custom-field form-control form-control-sm" id="meta_description" name="meta_description" >{{$category->meta_description}}</textarea>
                             </div>
                         </div>
                         <div class="form-group row d-flex align-items-center">
                             <label for="meta_keywords" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">متا برچسب ها :</label>
                             <div class="col-sm-5">
                                 <textarea type="text" rows="10" class="custom-field form-control form-control-sm" id="meta_keywords" name="meta_keywords" >{{$category->meta_keywords}}</textarea>
                             </div>
                         </div>

                        <button type="submit" class="btn custombutton py-2 px-4 mr-2">به روز رسانی</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


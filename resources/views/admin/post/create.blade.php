@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="mb-4">
            <div class="d-flex flex-column">
                <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">ایجاد مطلب</h3>
            </div>
            @include('partials.form-errors')
            <form class="customform p-3 bg-white" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group row d-flex align-items-center">
                    <label for="title" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">عنوان:</label>
                    <div class="col-sm-5">
                        <input type="text" class="custom-field form-control form-control-sm" id="title" name="title" >
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="slug" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> نام مستعار :</label>
                    <div class="col-sm-5">
                        <input type="text" class="custom-field form-control form-control-sm" id="slug" name="slug" >
                    </div>
                </div><div class="form-group row d-flex align-items-center">
                    <label for="description" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> توضیحات:</label>
                    <div class="col-sm-5">
                        <textarea type="text" class="custom-field form-control form-control-sm" rows="10" id="description" name="description" ></textarea>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center ">
                    <label for="category" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> دسته بندی :</label>
                    <div class="col-sm-5 d-flex justify-content-start">
                        <select name="category" class="w-100 custom-field">
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="status" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> وضعیت :</label>
                    <div class="col-sm-5 d-flex justify-content-start">
                        <select name="status" class="w-100 custom-field">
                              <option value="0" selected>غیر فعال</option>
                              <option value="1"> فعال</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="first_photo" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">انتخاب تصویر :</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control form-control-sm border-0" id="first_photo" name="first_photo" >
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="meta_description" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">متا توضیحات :</label>
                    <div class="col-sm-5">
                        <textarea type="text" rows="10" class="custom-field form-control form-control-sm" id="meta_description" name="meta_description" ></textarea>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="meta_keywords" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">متا برچسب ها :</label>
                    <div class="col-sm-5">
                        <textarea type="text" rows="10" class="custom-field form-control form-control-sm" id="meta_keywords" name="meta_keywords" ></textarea>
                    </div>
                </div>
                <button type="submit" class="btn custombutton py-2 px-4 mr-2">ذخیره</button>
            </form>
        </div>
    </div>
@endsection


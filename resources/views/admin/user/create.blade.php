@extends('admin.layouts.master')
@section('content')
    <div class="">
        <div class="mb-4">
            <div class="d-flex flex-column">
                <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">ایجاد کاربر</h3>
            </div>
            @include('partials.form-errors')
            <form class="customform p-3 bg-white" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group row d-flex align-items-center">
                    <label for="name" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">نام و نام خانوادگی :</label>
                    <div class="col-sm-4">
                        <input type="text" class="custom-field form-control form-control-sm" id="subscription_num" name="name" >
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="email" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> ایمیل :</label>
                    <div class="col-sm-4">
                        <input type="text" class="custom-field form-control form-control-sm" id="email" name="email" >
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center ">
                    <label for="roles" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> نقش :</label>
                    <div class="col-sm-2 d-flex justify-content-start">
                        <select multiple name="roles[]" class="w-100 custom-field">
                            @foreach($roles as $role)
                              <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="status" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2"> وضعیت :</label>
                    <div class="col-sm-2 d-flex justify-content-start">
                        <select name="status" class="w-100 custom-field">
                              <option value="0" selected>غیر فعال</option>
                              <option value="1"> فعال</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                    <label for="avatar" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">انتخاب تصویر :</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control form-control-sm border-0" id="avatar" name="avatar" >
                    </div>
                </div><div class="form-group row d-flex align-items-center">
                    <label for="password" class="custom-field-title col-sm-2 col-form-label text-right font-weight-bold mr-2">رمز عبور :</label>
                    <div class="col-sm-4">
                        <input type="password" class="custom-field form-control form-control-sm" id="password" name="password" >
                    </div>
                </div>
                <button type="submit" class="btn custombutton py-2 px-4 mr-2">ذخیره</button>
            </form>
        </div>
    </div>
@endsection


@extends('admin.layouts.master')

@section('style')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection
@section('script')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#options').click(function () {
                if(this.checked) {
                    $('.checkBox').each(function () {
                        this.checked=true;
                    })
                }
                else{
                    $('.checkBox').each(function () {
                        this.checked=false;
                    })
                }
            })
        })
    </script>
@endsection

@section('content')
    <div class="">
        <div class="bg d-flex justify-content-between align-items-center">
            <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">اطلاعات فایل ها</h3>
            <a href="" class="pl-3 add"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
        </div>
        @if(Session::has('photo_delete'))
            <div class="alert alert-danger text-right">
                <div>{{Session('photo_delete')}}</div>
            </div>
        @endif
        @if(Session::has('photo_add'))
            <div class="alert alert-success text-right">
                <div>{{Session('photo_add')}}</div>
            </div>
        @endif
        @if(Session::has('photo_deleteAll'))
            <div class="alert alert-danger text-right">
                <div>{{Session('photo_deleteAll')}}</div>
            </div>
        @endif
        <form class="customform p-3 " method="post" action="{{route('photo.delete.all')}}">
            @method('DELETE')
            @csrf
            <div class="d-flex justify-content-start">
                <select name="" class="ml-2">
                    <option value="delete">حذف دسته جمعی</option>
                </select>
                <input type="submit" value="اعمال" class="btn btn-primary">
            </div>
        <table class="customtable w-100 table mb-0 pb-0">
            <thead>
                <tr>
                    <th><input type="checkbox" id="options"></th>
                    <th class="text-center">شماره</th>
                    <th class="text-center">تصویر </th>
                    <th class="text-center">کاربر</th>
                    <th class="text-center">زمان ایجاد</th>
                    <th></th>`
                </tr>
            </thead>
            <tbody>
            @foreach($photos as $key=>$photo)
                <tr>
                    <td><input type="checkbox" class="checkBox" value="{{$photo->id}}" name="checkBox[]"> </td>
                    <td class="text-center p-0" scope="row">{{convertToPersianNumber($key+1 ) }}</td>
                    <td class="text-center p-0"><img src="{{ $photo->path }}" alt="" class="my-1" style="width:80px;"></td>
                    <td class="text-center p-0">{{ $photo->user->name }}</td>
                    <td class="text-center p-0">{{\Hekmatinasser\Verta\Verta::instance($photo->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')) }}</td>
                    <td class="border-0 p-0">
                        <form action="{{route('photo.destroy',$photo->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn dropbtn"><img src="img/delete.png" alt="" class="ml-2 moveFade">حذف کردن</button>
                        </form>
                    </td>
                  </tr>
            @endforeach
            </tbody>
        </table>
        </form>
        <div class="col-md-12 mt-3 d-flex justify-content-center">{{$photos->links()}}</div>
    </div>
@endsection


@extends('admin.layouts.master')

@section('content')
    <div  id="app">
        <example-component></example-component>
        <div class="bg d-flex justify-content-between align-items-center">
            <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">اطلاعات مطالب</h3>
            <a href="" class="pl-3 add"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
        </div>
        @if(Session::has('category_delete'))
            <div class="alert alert-danger text-right">
                <div>{{Session('category_delete')}}</div>
            </div>
        @endif
        @if(Session::has('category_add'))
            <div class="alert alert-success text-right">
                <div>{{Session('category_add')}}</div>
            </div>
        @endif
        @if(Session::has('category_update'))
            <div class="alert alert-success text-right">
                <div>{{Session('category_update')}}</div>
            </div>
        @endif
        <table class="customtable w-100 table mb-0 pb-0">
            <thead>
                <tr>
                    <th class="text-center" width="5%">شماره</th>
                    <th class="text-center">عنوان </th>
                    <th class="text-center" >زمان ایجاد</th>
                    <th width="10%"></th>
                    <th width="10%"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $key=>$category)
                <tr>
                    <td class="text-center p-0" scope="row">{{convertToPersianNumber($key+1 ) }}</td>
                    <td class="text-center p-0">{{ $category->title }}</td>
                    <td class="text-center p-0">{{\Hekmatinasser\Verta\Verta::instance($category->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')) }}</td>
                    <td class=" border-0 p-0">
                        <a href="{{route('category.edit',$category->id)}}" class="btn editbtn"><img src="img/edit.png" alt="" class="ml-2 moveFade">ویرایش کردن</a>
                    </td>
                    <td class="border-0 p-0">
                        <form action="{{route('category.destroy',$category->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn dropbtn"><img src="img/delete.png" alt="" class="ml-2 moveFade">حذف کردن</button>
                        </form>
                    </td>
                  </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-md-12 mt-3 d-flex justify-content-center">{{$categories->links()}}</div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection
@section('script')
    <script src="{{asset('js/app.js')}}"></script>
@endsection

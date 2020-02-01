@extends('admin.layouts.master')

@section('style')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')

        <div class=" d-flex">
            <div class="col-12 col-md-3 p-0 px-2 mb-2 mb-md-0">
                <div class="panel d-flex b-shadow ">
                    <div class="col-5 d-flex align-items-center justify-content-center p-0  position-reletive">
                        <img src="img/blue.jpg" alt="" class="w-100"/>
                        <img src="img/user2.png" alt="" class="position-absolute"/>
                    </div>
                    <div class="col-7 bg-white p-0 d-flex flex-column align-items-center justify-content-center">
                        <h3 class="m-0 font-weight-normal">{{$categoryCount}}</h3>
                        <h6 class="m-0 font-weight-normal">دسته بندی</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-3 mt-2">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="bg d-flex justify-content-between align-items-center">
                    <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">اطلاعات مطالب</h3>
                    <a href="{{route('post.create')}}" class="pl-3 add"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
                </div>
                <table class="customtable w-100 table mb-0 pb-0">
                    <thead>
                    <tr>
                        <th class="text-center">عنوان </th>
                        <th class="text-center">دسته بندی</th>
                        <th class="text-center">زمان ایجاد</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="text-center p-0">{{ $post->title }}</td>
                            <td class="text-center p-0">{{ $post->category->title }}</td>
                            <td class="text-center p-0">{{\Hekmatinasser\Verta\Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')) }}</td>
                            <td class=" border-0 p-0">
                                <a href="{{route('post.edit',$post->id)}}" class="btn editbtn"><img src="img/edit.png" alt="" class="ml-2 moveFade">ویرایش کردن</a>
                            </td>
                            <td class="border-0 p-0">
                                <form action="{{route('post.destroy',$post->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn dropbtn"><img src="img/delete.png" alt="" class="ml-2 moveFade">حذف کردن</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 mt-3">
                <div class="bg d-flex justify-content-between align-items-center">
                    <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">اطلاعات کاربران</h3>
                    <a href="" class="pl-3 add"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
                </div>
                <table class="customtable w-100 table mb-0 pb-0">
                    <thead>
                    <tr>
                        <th class="text-center">نام</th>
                        <th class="text-center">ایمیل</th>
                        <th class="text-center">زمان ایجاد</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center p-0">{{ $user->name }}</td>
                            <td class="text-center p-0">{{ $user->email }}</td>
                            <td class="text-center p-0">{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')) }}</td>
                            <td class=" border-0 p-0">
                                <a href="{{route('user.edit',$user->id)}}" class="btn editbtn"><img src="img/edit.png" alt="" class="ml-2 moveFade">ویرایش کردن</a>
                            </td>
                            <td class="border-0 p-0">
                                <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn dropbtn"><img src="img/delete.png" alt="" class="ml-2 moveFade">حذف کردن</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
{{--    <script src="{{asset('js/all-admin.js')}}"></script>--}}
@endsection


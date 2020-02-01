@extends('admin.layouts.master')

@section('content')
    <div class="">
        <div class="bg d-flex justify-content-between align-items-center">
            <h3 class="form-title text-right py-2 pr-2 mb-0 font-weight-normal">اطلاعات کاربران</h3>
            <a href="" class="pl-3 add"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
        </div>
        @if(Session::has('user_delete'))
            <div class="alert alert-danger text-right">
                <div>{{Session('user_delete')}}</div>
            </div>
        @endif
        @if(Session::has('user_add'))
            <div class="alert alert-success text-right">
                <div>{{Session('user_add')}}</div>
            </div>
        @endif
        @if(Session::has('user_update'))
            <div class="alert alert-success text-right">
                <div>{{Session('user_update')}}</div>
            </div>
        @endif
        <table class="customtable w-100 table mb-0 pb-0">
            <thead>
                <tr>
                    <th class="text-center">شماره</th>
                    <th class="text-center">عکس پروفایل</th>
                    <th class="text-center">نام</th>
                    <th class="text-center">ایمیل</th>
                    <th class="text-center">نقش</th>
                    <th class="text-center">وضعیت</th>
                    <th class="text-center">زمان ایجاد</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <td class="text-center p-0" scope="row">{{convertToPersianNumber($key+1 ) }}</td>
                    <td class="text-center p-0"><img src="{{ $user->photo ? $user->photo->path : "http://www.placehold.it/400" }}" alt="" class="my-1" style="width:40px;"></td>
                    <td class="text-center p-0">{{ $user->name }}</td>
                    <td class="text-center p-0">{{ $user->email }}</td>
                    <td class="text-center p-0">
                        <ul class="m-0 p-0">
                            @foreach($user->roles as $role)
                                <li class="list-unstyled p-0">{{ $role->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    @if($user->status==0)
                         <td class="text-center p-0"><span class="badge badge-danger p-1">غیر فعال</span></td>
                    @elseif($user->status==1)
                        <td class="text-center p-0"> <span class="badge badge-success p-1"> فعال</span></td>
                    @endif
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
        <div class="col-md-12 mt-3 d-flex justify-content-center">{{$users->links()}}</div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/all-admin.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('fonts/font-face.css') }}">

        <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>Document</title>
    @yield('style')
</head>
<body>
<div class="header">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mx-5">
        <h1 class="font-weight-normal py-2"><a href="{{route('admin.index')}}">پنل مدیریت</a></h1>
        <div class="d-flex align-items-center">
            <h3 class="font-weight-normal m-0">خوش آمدید،</h3>
{{--            <h3 class="font-weight-normal m-0 pr-1">نام کاربر.</h3>--}}
            <h3  class="font-weight-normal m-0 pr-1 pl-3" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
{{--                {{ Auth::user()->name }} --}}
                <span class="caret"></span>
            </h3>
            <ul class="nav p-0">
                <li class=" py-0"><a href="{{route('frontend.index')}}"> نمایش وبگاه</a><span class="text-white mx-1">/</span></li>
                <li class=" py-0"><a href="#">تغییر گذرواژه</a><span class="text-white mx-1">/</span></li>
{{--                <li class="py-0"><a href="#">خروج</a></li>--}}
                <li class="py-0">
                    <a  href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
        </div>
    </div>
</div>
<div class="main d-flex flex-column align-items-start mx-4">
    <h2 class="py-3 font-weight-normal">مدیریت وب گاه</h2>
    <div class="d-flex w-100">
        <div class="col-12 col-md-2 pr-0">
            <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    کاربران
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('user.index') }}">لیست کاربران</a></td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('user.create') }}">ثبت کاربران</a></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    مطالب
                </a>
            </p>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('post.index') }}">لیست مطالب</a></td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('post.create') }}">ثبت مطلب</a></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    دسته بندی
                </a>
            </p>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('category.index') }}">لیست دسته بندی ها</a></td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('category.create') }}">ثبت دسته بندی</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                    نظرات
                </a>
            </p>
            <div class="collapse" id="collapseExample4">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('comment.index') }}">لیست نظرات  </a></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    رسانه
                </a>
            </p>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('photo.index') }}">لیست فایل ها</a></td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="{{ route('photo.create') }}">آپلود فایل</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    بررسی اصالت و اجازه ها
                </a>
            </p>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="#">کاربرها</a></td>
                            <td class="text-left py-2 font-weight-normal pl-3">
                                <a href="#" class="pl-3"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
                                <a href="#"><img src="img/edit.png" alt="" class="pl-1"> تغییر</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="#">گروه ها</a></td>
                            <td class="text-left py-2 font-weight-normal pl-3">
                                <a href="#" class="pl-3"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
                                <a href="#"><img src="img/edit.png" alt="" class="pl-1"> تغییر</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>
                <a class="btn btntitle w-100 text-right"  data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    مدیریت کارگران
                </a>
            </p>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body border-0 p-0 mb-5">
                    <table class="w-100 text-right">
                        <tr>
                            <td class="py-2 pr-2 font-weight-bold"><a href="#">کارگران</a></td>
                            <td class="text-left py-2 font-weight-normal pl-3">
                                <a href="#" class="pl-3"><img src="img/add.png" alt="" class="pl-1"> اضافه کردن </a>
                                <a href="#"><img src="img/edit.png" alt="" class="pl-1"> تغییر</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="col-12 col-md-5">
                <div class="activity d-flex flex-column justify-content-center align-items-start pb-4">
                    <h2 class="py-4 pr-3 w-100 text-right">فعالیت های اخیر</h2>
                    <h3 class="font-weight-bold pr-3 pt-2">فعالیت های من</h3>
                    <div class="d-flex pr-3 align-items-start mt-2">
                        <img src="img/add.png" alt="" class="ml-2 mt-1">
                        <div class="d-flex flex-column justify-content-center align-items-start">
                            <a href="#">سال مالی منتهی به 99</a>
                            <span>تنظیمات اولیه</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        </div>
        <div class="col-md-10 pb-3 px-0">
             @yield('content')
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>
</html>

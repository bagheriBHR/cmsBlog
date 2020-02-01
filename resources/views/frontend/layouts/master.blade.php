<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-face.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title></title>
</head>
<body>
<div class="App">

    <!-- navbar -->
    <div class="container-fluid bg-blue p-0 id="header">
    <div class="bg-blue2 "></div>
    <div class="bg-blue3 "></div>
    <div>
        <nav class="container navbar navbar-expand-lg navbar-light py-0 my-0">
            <div class="logo d-flex align-items-center" >
                <div id="imglogo">
                    <img src="img/logo.png" alt="" class="w-100"/>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start pr-2 w-100">
                    <a class="navbar-brand font-weight-bold pt-0" href="#">آریپو</a>
                    <span class="navbar-desc w-100 pb-1 mr-3 text-right" href="#"> طراحی سایت و برنامه نویسی</span>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">صفحه اصلی</a>
                    </li>
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">بلاگ</a>
                    </li>
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">خدمات ما</a>
                    </li>
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">پروژه ها</a>
                    </li>
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">فروشگاه</a>
                    </li>
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item px-3 py-3">
                        <a class="nav-link font-weight-bold" href="#">درباره ما</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End of Navbar -->

<!-- header -->

<div class="header d-flex flex-column align-items-center justify-content-center position-relative">
    <img src="img/header2.jpg" alt="" class="w-100">
    <div class="bg-blur container position-absolute"></div>
    <div class="container d-flex w-100 position-absolute p-3">
{{--        {!! Form::open(['route' => 'frontend.post.search', 'method' => 'get']) !!}--}}
{{--            <div class="input-group px-2 py-2">--}}
{{--                <div class="input-group-prepend">--}}
{{--                    {!! Form::submit('جستجو', ['class' => 'input-group-text']) !!}--}}
{{--                </div>--}}
{{--                {!! Form::text('title', ['class' => 'form-control text-right py-0 outline-none']) !!}--}}
{{--            </div>--}}
{{--        {!! Form::close() !!}--}}
        <form action="{{route('frontend.post.search')}}" method="get">
            <div class="input-group px-2 py-2">
                <div class="input-group-prepend">
                    <button type="submit" class="input-group-text" id="basic-addon3"><img src="{{asset('img/search.png')}}" alt=""></button>
                </div>
                <input name="title" type="text" class="form-control text-right py-0 outline-none" id="basic-url" aria-describedby="basic-addon3" placeholder="دنبال چی می گردی؟"/>
            </div>
        </form>
    </div>
    <div class="container d-flex flex-wrap justify-content-between position-absolute">

        <div class="top-item col-12 col-md-2 p-0">
            <div class="d-flex flex-column align-items-center p-2 b-shadow">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/laravelicon.png')}}" alt="" class=""/>
                </div>
                <h2 class=" text-center px-2 py-2">دوره حرفه ای لاراول</h2>
            </div>
        </div>
        <div class="top-item col-12 col-md-2 p-0">
            <div class="d-flex flex-column align-items-center p-2 b-shadow">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <img src="img/pythonicon.png" alt="" class=""/>
                </div>
                <h2 class="text-center px-2 py-2">دوره 0 تا 100 پایتون</h2>
            </div>
        </div>
        <div class="top-item col-12 col-md-2 p-0">
            <div class="d-flex flex-column align-items-center p-2 b-shadow">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <img src="img/jengo2.png" alt="" class=""/>
                </div>
                <h2 class="text-center px-2 py-2">دوره حرفه ای جنگو</h2>
            </div>
        </div>
        <div class="top-item col-12 col-md-2 p-0">
            <div class="d-flex flex-column align-items-center p-2 b-shadow">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <img src="img/fluttericon.png" alt="" class=""/>
                </div>
                <h2 class="text-center px-2 py-2">دوره ویژه فلاتر</h2>
            </div>
        </div>
        <div class="top-item col-12 col-md-2 p-0">
            <div class="d-flex flex-column align-items-center p-2 b-shadow">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <img src="img/networkicon.png" alt="" class=""/>
                </div>
                <h2 class="text-center px-2 py-2">دوره تخصص شبکه</h2>
            </div>
        </div>
    </div>
</div>
<!-- services -->
<div class="container service d-flex flex-column justify-content-center px-0 pt-5 pb-3 mt-3">
    <!-- <div class="parttitle d-flex flex-column align-items-center mt-5  pt-3">
        <h2 class="mb-2 font-weight-bold pb-2">خدمات ما</h2>
        <img src="img/seperator.png" alt=""/>
    </div>   -->
    <div class="d-flex flex-wrap justify-content-around px-0 my-5">
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 mx-2">
                <img src="img/ai.png" alt="" />
            </div>
            <h2 class="pt-2">هوش مصنوعی</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/data-mining.png" alt="" />
            </div>
            <h2 class="pt-2">داده کاوی</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/learning-machine.png" alt="" />
            </div>
            <h2 class="pt-2">یادگیری ماشین</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/neural.png" alt="" />
            </div>
            <h2 class="pt-2">یادگیری عمیق</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/programming.png" alt="" />
            </div>
            <h2 class="pt-2">برنامه نویسی</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/computer.png" alt="" />
            </div>
            <h2 class="pt-2">طراحی وب</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/photoshop.png" alt="" />
            </div>
            <h2 class="pt-2">فتوشاپ</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/office.png" alt="" />
            </div>
            <h2 class="pt-2">ICDL</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/networktop.png" alt="" />
            </div>
            <h2 class="pt-2">شبکه</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/job-entering.png" alt="" />
            </div>
            <h2 class="pt-2">ورود به بازار کار</h2>
        </div>
        <div class="serviceitem d-flex flex-column align-items-center mx-">
            <div class="rounded-circle d-flex flex-column align-items-center justify-content-center mb-3 mx-2">
                <img src="img/programming.png" alt="" />
            </div>
            <h2 class="pt-2">توسعه کسب و کار</h2>
        </div>
    </div>
</div>
<!-- End of services -->

<!-- top services -->
    @yield('service')
<!-- End of top services -->
<!-- article -->
<div class="container w-75 d-flex flex-column my-5 ">
   @yield('article')
</div>
<!-- End of particle -->
<!-- comment -->
<div class="container-fluid d-flex flex-column align-items-center bg-gray p-0">
    <div class="parttitle d-flex flex-column align-items-center mt-5 mb-3">
        <h2 class="mb-2 font-weight-bold pb-2">نظرات کاربران</h2>
        <img src="img/seperator.png" alt=""/>
    </div>
    <div class=" container w-50 pb-5">
        <div class="comment d-flex my-5 mx-3 ">
            <!-- <div class="d-flex justify-content-center align-items-center "> -->
            <!-- </div> -->
            <div class="d-flex flex-column bg-white align-items-right justify-content-center p-4 pr-5 mr-5 position-relative ">
                <h4 class="font-weight-bold text-right pb-2">بخش مربطه</h2>
                    <h2 class="font-weight-bold text-right pb-2">نام و نام خانوادگی</h2>
                    <h3 class="text-right pb-2">شغل و مهارت</h3>
                    <p class="text-right m-0"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگر ها و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>
                    <img src="img/user2.jpg" alt="" class="rounded-circle position-absolute"/>
                    <div class="like d-flex justify-content-end align-items-center px-3 w-100 mt-3">
                        <div class=" d-flex justify-content-left align-items-center">
                            <img src="./img/heart.png" alt="">
                            <img src="./img/icons8-thick-vertical-line-50.png" alt="">
                            <h5 class="m-0">32 نفر</h5>
                        </div>
                        <div class=" d-flex justify-content-left align-items-center mr-4">
                            <img src="./img/icons8-quote-24.png" alt="">
                            <img src="./img/icons8-thick-vertical-line-50.png" alt="">
                            <h5 class="m-0">32 نفر</h5>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- End of comment -->

<!-- technology -->
<!-- <div class="tech container d-flex flex-wrap justify-content-center py-3 py-md-5" id="technoogy"> -->
<div class="tech" >
    <!-- <div class="tech "> -->

    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="./img/python.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="./img/network.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/django.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/React_logo_wordmark.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/Google-flutter-logo.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/angular-logo.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/vuejs-wide.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/robotics.png" alt="" class="w-75"/>
    </div>
    <div class="d-flex justify-content-center align-items-center px-2 py-2 mx-2 mt-2 mt-md-0">
        <img src="img/artificial-intelligence-png-3.png" alt="" class="w-75"/>
    </div>
</div>

<!-- End of technology -->

<!-- Footer -->
<div class="container-fluid bg-footer pt-5 px-0">
    <div class="d-flex flex-column">
        <div class="footer container d-flex flex-column flex-md-row">

            <div class="col-12 col-md-6 d-flex flex-column ">
                <div class="d-flex flex-column flex-md-row align-items-start">
                    <div class="col-12 col-md-6">
                        <div class="d-flex flex-column align-items-start">
                            <!-- Footer main menu -->
                            <h3 class="pb-3 mb-4 w-50 text-right">منو اصلی</h3>
                            <ul class="footernav navbar-nav d-flex flex-column p-0 text-right w-50">
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1" href="#">بلاگ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1" href="#">خدمات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1" href="#">پروژه ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1" href="#">فروشگاه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1" href="#">تماس با ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1" href="#">درباره ما</a>
                                </li>
                            </ul>
                            <!-- End of Footer main menu -->
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mt-4 mt-md-0 ">
                        <div class="d-flex flex-column align-items-start">
                            <h3 class="pb-3 mb-4  w-50 text-right">آخرین دوره ها</h3>
                            <!-- Footer courses -->
                            <div class="footercourse d-flex pb-2 ">
                                <div class="d-flex align-items-center">
                                    <img src="img/laravelicon.png" alt="" class="w-100"/>
                                </div>
                                <div class="d-flex flex-column justify-content-center px-3 w-100">
                                    <h4 class="font-weight-bold w-100 text-right">دوره لاراول</h4>
                                    <h5 class="m-0 w-100 text-right">9 مهر 1398</h5>
                                </div>
                            </div>
                            <div class="footercourse d-flex py-2 ">
                                <div class="d-flex align-items-center">
                                    <img src="img/pythonicon.png" alt="" class="w-100"/>
                                </div>
                                <div class="d-flex flex-column justify-content-center px-3 w-100">
                                    <h4 class="font-weight-bold w-100 text-right">دوره پایتون</h4>
                                    <h5 class="m-0 w-100 text-right">9 مهر 1398</h5>
                                </div>
                            </div>
                            <div class="footercourse d-flex py-2">
                                <div class="d-flex align-items-center">
                                    <img src="img/networkicon.png" alt="" class="w-100"/>
                                </div>
                                <div class="d-flex flex-column justify-content-center px-3 w-100">
                                    <h4 class="font-weight-bold w-100 text-right">دوره شبکه</h4>
                                    <h5 class="m-0 w-100 text-right">9 مهر 1398</h5>
                                </div>
                            </div>
                            <!-- End of Footer courses -->
                        </div>
                    </div>
                </div>
                <div class="trust d-flex justify-content-center w-75 mt-4">
                    <img src="img/trusticon.png" alt="" class="mx-2">
                    <img src="img/trusticon2.png" alt="" class="mx-2">
                    <img src="img/trusticon3.png" alt="" class="mx-2">
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex flex-column">
                <!-- about us -->
                <div class="d-flex flex-column align-items-start">
                    <h3 class=" pb-3 mb-4  w-25 text-right"> درباره ما</h3>
                    <p class="text-right">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
                </div>
                <!-- end of about us -->
                <div class="d-flex flex-column mt-3 pt-4">
                    <!-- contact us -->
                    <h3 class=" pb-3 mb-4 w-25 text-right">راه های ارتباط با ما</h3>
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col-12 col-md-4 d-flex flex-column mt-md-0">
                            <div class="d-flex flex-column align-items-start">
                                <div class="contact d-flex">
                                    <h4 class="font-weight-bold pl-2">تلفن:</h4>
                                    <h5>(555) 555-55555</h5>
                                </div>
                                <div class="contact d-flex">
                                    <h4 class="font-weight-bold pl-2">ایمیل</h4>
                                    <h5>email@yahoo.com</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start pt-2 pt-md-2">
                                <div class="follow d-flex align-items-center justify-content-center ml-1">
                                    <img src="img/telegram.png" alt=""/>
                                </div>
                                <div class="follow d-flex align-items-center justify-content-center ml-1">
                                    <img src="img/instagram.png" alt=""/>
                                </div>
                                <div class="follow d-flex align-items-center justify-content-center ml-1">
                                    <img src="img/whatsapp.png" alt=""/>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 mt-2 mt-md-0 ">
                            <div class="input-group px-2 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"><img src="img/search.png" alt=""></span>
                                </div>
                                <input type="text" class="form-control text-right py-0" id="basic-url" aria-describedby="basic-addon3" placeholder="لطفا ایمیل خود را وارد کنید"/>
                                <span class="d-flex align-items-center "><h5 class="font-weight-light px-2 m-0">عضویت در خبرنامه</h5></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of contact us -->
            </div>
        </div>

    </div>
    <div class="bg-end d-flex align-items- justify-content-center mt-5 p-2 w-100">
        <h6 class="text-white m-0 font-weight-bold ">حقوق این سایت متعلق است به ...</h6>
    </div>
</div>
<!-- End of Footer -->

</div>
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>
</html>

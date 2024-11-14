@extends('layouts.appuserui')

@section('content')

<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card border-top border-bottom border-3" style="border-color: black !important;">
                    <div class="card-body p-5" style="background-color: lightblue;">
                        <p class="lead fw-bold mb-5" style="color: #f37a27;"><span>تفاصيل المنتج : </span>{{$prod->name}}</p>
                        <hr>
                        <div class="row">
                            <div class="col mb-3">
                                <p class="small text-muted mb-1">تاريخ الطلب</p>
                                <p>{{$prod->created_at}}</p>
                            </div>
                            <div class="col mb-3">
                                <p class="small text-muted mb-1">رقم المنتج</p>
                                <p>{{$prod->id}}</p>
                            </div>
                        </div>
                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                            <div class="row">
                                <div class="col-md-8 col-lg-9">
                                    <p>{{$prod->Description}}</p>
                                </div>
                            </div>

                        </div>

                        <div class="row my-4">
                            <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                <p class="lead fw-bold mb-0" style="color: #f37a27;"><span>سعر المنتج </span>{{$prod->price}} <span>ريال</span></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="horizontal-timeline">
                                    <ul class="list-inline items d-flex justify-content-between">
                                        <li class="list-inline-item items-list">
                                            <p class="py-3 px-4 rounded border" style="background-color: #78cccf;"> <a class="text-white" href="{{route('add_to_cart')}}" style="text-decoration: none;">اضف الى السلة</a> </p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-3 px-4 rounded border" style="background-color: #78cccf;"><a class="text-white" href="{{route('index')}}" style="text-decoration: none;">مواصلة الشراء</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
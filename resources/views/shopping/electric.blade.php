@extends('layouts.appuserui')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            @foreach($product as $item)
            <div class="row mt-3">
                <div class="col">
                    <div class="card" style="background-color: lightblue;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <img src="https://img.freepik.com/premium-psd/laptop-mock-up-isolated_1310-1458.jpg?w=996" width="200" hieght="200">
                                </div>
                                <div class="col">
                                    <h1 class="alert alert-success">{{$item->name}}</h1>
                                    <p>{{$item->Description}}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col text-center">
                                    <a href="{{route('proddet',['id'=>$item->id])}}" class="btn btn-primary text-white border" style="background-color: #78cccf;">عرض التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

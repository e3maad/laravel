@extends('layouts.appdash')

@section('content')
<!-- delete model-->

<div class="modal" tabindex="-1" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">رسالة تأكيد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>هل بالفعل تريد حذف هذا السجل ؟!!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء الأمر</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="confirm()">حذف</button>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <!-- Button trigger modal -->
    <div class="row mt-5 ">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
                أضافة منتج
            </button>
        </div>
    </div>

    <!-- delete model-->
    <div class="modal" tabindex="-1" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">رسالة تأكيد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>هل بالفعل تريد حذف هذا السجل ؟!!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء الأمر</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="confirm()">حذف</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="row">
        <div class="modal" tabindex="-1" id="addproduct">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header position-relative">
                        <div class="position-absolute top-50 start-0 translate-middle-y"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <h5 class="modal-title">أدخل بيانات المنتج</h5>
                    </div>
                    <form action="{{route('create_newproducts')}}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <label for="productname" class="form-label">اسم المنتج</label>
                                    <input type="text" class="form-control p-2" name="productname" id="productname">
                                </div>
                                <div class="col">
                                    <label for="description" class="form-label">وصف المنتج</label>
                                    <input type="text" class="form-control p-2" name="description" id="description">
                                </div>
                            </div>ٍ
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-success">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- table -->
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-dark table-striped-columns table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">رقم المنتج</th>
                                <th scope="col">اسم المنتج</th>
                                <th scope="col">وصف المنتج</th>
                                <th scope="col" colspan="2"> إجراء </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prod as $item)
                            <tr class="table-success">
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->Description }}</td>
                                <td><a href="#" onclick="lunch({{$item->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                                <td><a href="{{route('edit',['id'=>$item->id])}}"><i class="bi bi-pencil-square text-success"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
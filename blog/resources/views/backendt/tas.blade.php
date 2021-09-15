@extends('admin.layout.main')
@section('content')
    <section class="service-mariting text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <p class="p-arrow">اضافة تسويق جديدة</p>
                    
                </div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form  class="container-fluid text-right"  action="{{route('admin.tas')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        
                        <div class="col-md-6">
                       
                        <input type="file" name="photo" placeholder="الصورة" required>
                         <input type="text" name="name" placeholder="الأسم " required>
                         <textarea cols="30" rows="5" name="detale" placeholder="تفاصيل " required></textarea>

                            <button type="submit" class="btn btn-linear-hover ">حفظ الباقة 
                            </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../img/form.svg" width="60%" height="auto" alt="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection
@extends('admin.layout.main')
@section('content')
    <section class="service-mariting text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <p class="p-arrow">اضافة فيديو جديد </p>
                    
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
                <form  class="container-fluid text-right"  action="{{route('admin.v')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        
                        <div class="col-md-6">
                        
                        <input type="file" name="vedo" placeholder="فيديو" required>
                        

                            <button type="submit" class="btn btn-linear-hover ">حفظ الفيديو 
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
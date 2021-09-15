@extends('admin.layout.main')
@section('content')

   
                    <p class="p-arrow">تعديل شاشة التسويق</p>
                    
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
                <form  class="container-fluid text-right"  action="{{route('update.tas',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        
                        <div class="col-md-6">
                        
                            
                            <input type="file" name="photo" >
                            <input type="text" name="name"  value="{{$data->name}}">
                           
                            <textarea cols="30" rows="5" name="detale" >"{{$data->detale}}"</textarea>

                            <button type="submit" class="btn btn-linear-hover ">حفظ الباقة 
                            </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../img/form.svg" width="60%" height="auto" alt="">
                        </div>
                    </div>
                </form>
           
    @endsection
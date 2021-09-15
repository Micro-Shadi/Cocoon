@extends('admin.layout.main')
@section('content')
<br>
<br>
<form  class="container-fluid text-right" action="{{route('update.desine',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
 @csrf
                        <div class="row">
                        
                        <div class="col-md-6">
                        <p>شاشة ادخال الخدمات</p>
                        <label for="name ">الصورة </label>
                            <input type="file" name="photo" id="photo" >
                            <label for="name "> العنوان</label>
                            <input type="text" name="title" id="title" value="{{$data->title}}">
                            <label for="name "> الوصف</label>
                            <textarea cols="30" rows="5" name="detale" id="detale"> "{{$data->detale}}"</textarea>

                            <button type="submit" class="btn btn-linear-hover ">حفظ 
                            </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../img/form.svg" width="60%" height="auto" alt="">
                        </div>
                    </div>
                </form>
@endsection
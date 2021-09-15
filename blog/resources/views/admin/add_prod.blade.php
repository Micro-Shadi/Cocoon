@extends('admin.layout.main')
@section('content')
<br>

<br>
 <form  class="container-fluid text-right" action="{{Route('admin.product')}}" method="post" enctype="multipart/form-data">
 @csrf
                        <div class="row">
                        
                        <div class="col-md-6">
                        <p>شاشة ادخال الخدمات</p>
                        <label for="name ">الصورة </label>
                            <input type="file" name="photo" id="photo" placeholder="الصورة" required>
                            <label for="name "> العنوان</label>
                            <input type="text" name="title" id="title" placeholder="العنوان " required>
                            <label for="name "> الوصف</label>
                            <textarea cols="30" rows="5" name="detale" id="detale" placeholder="تفاصيل " required></textarea>

                            <button type="submit" class="btn btn-linear-hover ">حفظ 
                            </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../img/form.svg" width="60%" height="auto" alt="">
                        </div>
                    </div>
                </form>
                @endsection

@extends('admin.lay.main')
@section('content')

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>ادارة الخدمات</strong></h3>
                </div>
            </div>
            <br>
<br>
            <table id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl" >
        <thead>
            <tr>
            <td >الرقم</td>
      <td >الصورة </td>
      <td > العنوان  </td>
      
      <td > التفاصيل </td>
      <td > تعديل </td>
      <td > حذف </td>
            </tr>
        </thead>
        <tbody>
        @foreach($desine as $desin)
            <tr>
      <th>{{$desin->id}}</th>
      <th>{{$desin->photo}}</th>
      <th>{{$desin->title}}</th>
      <th>{{$desin->detale}}</th>
     
      
      
     
      <th> <a href="{{route('edit.desine',['id'=>$desin->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('delete.desine',['id'=>$desin->id])}}"  class="far fa-delete" >حذف</a></th>
                 
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
        </div>
    </div>
</div>

@endsection
     
    


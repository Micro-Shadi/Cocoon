@extends('admin.lay.main')
@section('content')

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>ادارة الحجوزات</strong></h3>
                </div>
            </div>
            <br>
            <br>
            <table id="example" class="table table-bordered data-table text-right"  dir="rtl" >
        <thead>
            <tr>
      <td >الرقم</td>
      <td >التاريخ</td>
      <td >الخدمة </td>
      <td > الاسم  </td>
      <td > اسم النشاط التجاري</td>
      <td > الجوال  </td>
      <td > البريد الالكتروني  </td>
      <td > التفاصيل </td>
      <td > تعديل </td>
      <td > حذف </td>
            </tr>
        </thead>
        <tbody>
        @foreach($desine as $desin)
            <tr>
      <th>{{$desin->id}}</th>
      <th>{{$desin->created_at}}</th>
      <th>{{$desin->serves}}</th>
      <th>{{$desin->name}}</th>
      <th>{{$desin->commerc_name}}</th>
      <th>{{$desin->mob}}</th>
      <th>{{$desin->email}}</th>
      <th>{{$desin->detale}}</th>
      
      <th> <a href="{{route('edit.talab',['id'=>$desin->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('delete.talab',['id'=>$desin->id])}}"  class="far fa-delete" >حذف</a></th>
                 
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
    
        </div>
    </div>
</div>
@endsection
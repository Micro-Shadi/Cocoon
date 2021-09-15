@extends('admin.lay.main')
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>ادارة التصميم و البرمجة</strong></h3>
                </div>
            </div>
            <br>
<br>
            <table id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl" >
        <thead>
            <tr>
      <td >الرقم</td>
     
      <td >الاسم </td>
      <td >  الصورة </td>
      <td > التفاصيل </td>
      <td > تعديل </td>
      <td > حذف </td>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
      <th>{{$user->id}}</th>
      
      <th>{{$user->name}}</th>
      <th>{{$user->photo}}</th>
      <th>{{$user->detale}}</th>
     
      
      
     
      <th> <a href="{{route('edit.prog',['id'=>$user->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('delete.prog',['id'=>$user->id])}}"  class="far fa-delete" >حذف</a></th>
                 
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
        </div>
    </div>
</div>
@endsection
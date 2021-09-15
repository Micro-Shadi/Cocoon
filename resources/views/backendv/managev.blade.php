@extends('admin.lay.main')
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong> ادارة الفيديو  </strong></h3>
                </div>
            </div>
            <table id="example" class="table table-bordered data-table text-right" style="width:100%" >
        <thead>
            <tr>
      <td >الرقم</td>
     
      <td >  الفيديو </td>
     
      <td > تعديل </td>
      <td > حذف </td>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
      <th>{{$user->id}}</th>
      
      <th>{{$user->vedo}}</th>
      
     
      
      
     
      <th> <a href="{{route('edit.v',['id'=>$user->id])}}"  class="far fa-edit">تعديل</a></th>
      <th> <a href="{{route('delete.v',['id'=>$user->id])}}"  class="far fa-delete" >حذف</a></th>
                 
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
        </div>
    </div>
</div>
@endsection
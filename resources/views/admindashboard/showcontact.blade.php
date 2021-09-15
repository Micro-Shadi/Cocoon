@extends('admin.lay.main')
@section('content')
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>رسائل المستخدمين</strong></h3>
                </div>
            </div>
            <br>
            <br>
            <table id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl" >
        <thead>
            <tr>
      <td >الرقم</td>
      <td >التاريخ</td>
      <td >الاسم </td>
      <td > البريد الالكتروني </td>
      <td > الرسالة  </td>
      
     
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
      <th>{{$contact->id}}</th>
      <th>{{$contact->created_at}}</th>
      <th>{{$contact->name}}</th>
      <th>{{$contact->email}}</th>
      <th>{{$contact->msg}}</th>
      
      </tr>
            @endforeach
            
        </tbody>
        
    </table>
        </div>
    </div>
</div>

@endsection
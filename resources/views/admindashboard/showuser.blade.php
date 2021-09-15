@extends('admin.layout.main')
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong> المستخدمين</strong></h3>
                </div>
            </div>
            <table id="example" class="table table-bordered data-table text-right" style="width:100%" dir="rtl" >
        <thead>
            <tr>
      <td >الرقم</td>
      <td >الاسم </td>
      <td > البريد الالكتروني </td>
      <td > تاريخ التسجيل </td>
      
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
      <th>{{$user->id}}</th>
      <th>{{$user->name}}</th>
      <th>{{$user->email}}</th>
      <th>{{$user->created_at}}</th>
    
      
      
     
      
                 
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
    
        </div>
    </div>
</div>

<script type="text/javascript">
 $(document).ready(function() {
    $('#example').DataTable();
});
</script>
@endsection
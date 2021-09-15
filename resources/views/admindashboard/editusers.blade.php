@extends('admin.layout.main')
@section('content')
<br>
<br>
<form class="container-fluid text-right" action="{{route('usersupdate',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data" >
  @csrf
  <div class="row">
                        
                        <div class="col-md-6">
  
 
    <label for="email">البريد الالكتروني</label>
    <input type="email"  id="email" name="email"  value="{{$data->email}}">
  
  
  
  <button type="submit" class="btn btn-linear-hover ">تعديل  
                            </button>
                            </div>
                            </div>
</form>

@endsection
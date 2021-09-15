@extends('layout.main')
<br>
@section('content')
<br>
<form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name ">الاسم </label>
                    <input type="text" name="title" id="title" placeholder="الاسم" :value="old('name')" required autofocus autocomplete="name">
                <label for="name ">الايميل </label>
                    <input type="email" name="email" id="email" placeholder="الايميل" :value="old('email')" required>   
                    <label for="password ">كلمة المرور </label>
                    <input type="password" name="password" id="password" placeholder="كلمة المروور" required autocomplete="new-password">   
                    <label for="password_confirmation">تأكيد كلمة المرور </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="تأكيد كلمة المرور" required autocomplete="new-password">    
                    <button type="submit" class="btn btn-linear-hover">تسجيل
                    </button>
                    <br>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('newlogin') }}">دخول </a>
                </form>
@endsection
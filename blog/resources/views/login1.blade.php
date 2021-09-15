@extends('layout.main')
<br>
@section('content')
<br>
<form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <label for="name ">الايميل </label>
                    <input type="email" name="email" id="email" placeholder="الايميل" :value="old('email')" required> 

                    <label for="password ">كلمة امرور </label>
                    <input type="number" name="password" id="password" placeholder="كلمة المروور" required autocomplete="current-password" />   
                   
                    <button type="submit" class="btn btn-linear-hover">تسجيل
                    </button>
                    <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <br>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('newregister') }}"> تسجيل جديد</a>
                </form>
@endsection
@extends('admin.layout.main')
@section('content')
<br>

<br>
<section class="contact-us container" data-scroll-index="1">
        <div class="row">
            <div class="col-md-7 text-right">
                <p class="p-arrow"> ارسال أخر الاخبار للجميع</p>

                <p>
                    <span class="balck-span">منصة خلود</span> , هي منصة تقنية, تعنى بصناعة الإبداع, مع فريق متكامل من المبدعين الطموحين الشغوفين.
                </p>
                @if(Session::has('success'))
                <div class="alert alert-success">
                {{Session::get('success')}}
                </div>
                @endif
                <form action="{{route('send.message')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name ">العنوان </label>
                    <input type="text" name="title" id="title" placeholder="العنوان">
                <label for="name ">الايميل </label>
                    <input type="email" name="email" id="email" placeholder="الايميل">   
                    <label for="name ">النص </label>
                    <textarea cols="30" rows="5" name="msg" id="msg" placeholder="نص الرسالة"></textarea>
                    <button type="submit" class="btn btn-linear-hover">أرسل الآن
                    </button>
                </form>
            </div>
            <div class="col-md-5 text-center align-self-center">
                <img src="img/phone.svg" width="70%" height="auto" alt="">
            </div>
        </div>
    </section>
@endsection
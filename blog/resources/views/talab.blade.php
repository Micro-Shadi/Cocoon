@extends('layout.main')
@section('content')
    <section class="service-mariting text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <p class="p-arrow">استبيان تعبئة طلب</p>
                    <p class="text-justify">
                        قم بتعبئة البيانات, لنتواصل معك, ونقم سوياً في بناء موقعك أو تطبيقك الإلكتروني
                    </p>
                </div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form  class="container-fluid text-right"  action="{{Route('admin.talab')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <p class="h4">الخدمة المطلوبة</p>
                            <div class="btns-radio">
                                <label class="container"> إدارة مواقع التواصل الاجتماعي
                                    <input type="radio" checked="checked" name="serves" value="إدارة مواقع التواصل الاجتماعي">
                                    <span class="checkmark"></span>
                                  </label>
                                <label class="container"> SEO تهيئة محركات البحث
                                    <input type="radio" name="serves" value="SEO تهيئة محركات البحث">
                                    <span class="checkmark"></span>
                                  </label>
                                <label class="container">اعداد الخطط التسويقية
                                    <input type="radio" name="serves" value="اعداد الخطط التسويقية">
                                    <span class="checkmark"></span>
                                  </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="الأسم بالكامل" required>
                            <input type="text" name="commerc_name" placeholder="اسم النشاط التجاري" required>
                            <div class="demo">
                                <input type="tel" name="mob" id="phone" class="form-control" required>
                            </div>
                            <input type="email" name="email" placeholder="البريد الإلكتروني">
                            <textarea cols="30" rows="5" name="detale" placeholder="تفاصيل وملاحظات"></textarea>

                            <button type="submit" class="btn btn-linear-hover ">حجز الخدمة
                            </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../img/form.svg" width="60%" height="auto" alt="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection
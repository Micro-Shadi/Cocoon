@extends('admin.layout.main')
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

                <form  class="container-fluid text-right"  action="{{route('update.talab',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <p class="h4">الخدمة المطلوبة</p>
                            <div class="btns-radio">
                                <label class="container"> إدارة مواقع التواصل الاجتماعي
                                    <input type="radio" checked="checked" name="serves" value="إدارة مواقع التواصل الاجتماعي"  {{ $data->serves == 'إدارة مواقع التواصل الاجتماعي' ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                  </label>
                                <label class="container"> SEO تهيئة محركات البحث
                                    <input type="radio" name="serves" value=" SEO تهيئة محركات البحث" {{ $data->serves == 'SEO تهيئة محركات البحث' ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                  </label>
                                <label class="container">اعداد الخطط التسويقية
                                    <input type="radio" name="serves" value="اعداد الخطط التسويقية" {{ $data->serves == '' ? 'checked' : 'اعداد الخطط التسويقية' }}>
                                    <span class="checkmark"></span>
                                  </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" value="{{$data->name}}">
                            <input type="text" name="commerc_name" value="{{$data->commerc_name}}">
                            <div class="demo">
                                <input type="tel" name="mob" id="phone" class="form-control" value="{{$data->mob}}">
                            </div>
                            <input type="email" name="email" value="{{$data->email}}">
                            <textarea cols="30" rows="5" name="detale" ">"{{$data->detale}}"</textarea>

                            <button type="submit" class="btn btn-linear-hover btn-show-messageconfirm">حفظ
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
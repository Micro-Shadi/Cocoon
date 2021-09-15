@extends('layout.main')
@section('content')
    <section class="service-mariting text-center">
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-md-6 text-right">
                    <p class="p-arrow">خدمات التسويق</p>
                    <p class="text-justify">
                    مهما كان نشاطك التجاري أو الخدماتي, لا بد من تجسيده وإطلاقه عبر فضاء الانترنت, لتتوسع دائرة جمهورك وتعرفهم بطبيعة خدماتك ورؤيتك بشكلٍ أوسع. نحن في منصة خلود, نقدم لك حزمة من الخدمات الإبداعية, في تصميم التطبيقات والمواقع والمتاجر الإلكترونية, نبدأ بفهم<br />
خدمتك ودراسة رؤيتك, من ثم ننطلق بتصميمٍ عصري متميز, ونكمله ببرمجةٍ قوية ومرنة, وننتهي بإطالقه متصدراً نتائج البحث على جوجل, ليكون سهل الوصول, وجلب عملاء جدد
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <img src="../img/dimond.svg" width="250px" alt="">
                </div>
                <div class="col-md-12">
                    <br><br>
                    <p class="h3">حزمة خدماتنا في التسويق </p>

                </div>
                <div class="container-fluid three-markiting">
                    <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-4 align-self-stretch">
                            <div class="markiting">
                                <div class="img-markiting">
                                    <img src="{{$user->photo}}" width="70px" height="auto" alt="">
                                </div>
                                <div class="inside-markiting">
                                    <p class="h4"> {{$user->name}}
                                    </p>
                                    <p> {{$user->detale}}</p>
                                </div>
                            </div>
                            <a href="{{route('talab')}}">
                    <button type="button" class="btn btn-linear-hover" >حجز خدمة</button>
                </a> </div>
                @endforeach
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    @endsection
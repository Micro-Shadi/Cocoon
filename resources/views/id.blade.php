@extends('layout.main')
<br>
@section('content')
<br>
    <section class="service-mariting text-center">
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-md-6 text-right">
                    <p class="p-arrow">خدمات الشعارات والهويات التجارية</p>
                    <p class="text-justify">
                   هويتك التجارية هي العنصر الأهم في بناء رؤيتك وإظهارها كما يجب, لعملائك والفئة المستهدفة, فبناء هوية قوية يساعد ترك انطباعٍ جيد لدى العملاء, واختيارك لشركة تبدع في فهم رؤيتك وتجسيدها بشكل إحترافي هو عنصرٌ أهم لتبدأ به نحن في مجموعة خلود, نساعدك في بناء<br />
علامتك التجارية لنميزك عن منافسيك
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <img src="../img/design.svg" width="250px" alt="">
                </div>
                <div class="col-md-12">
                    <br><br>
                    <p class="h3">أسعار وعروض حزمات تصميم الشعارات لتجارية</p>

                </div>
                
                <div class="container-fluid three-markiting">
                
                    <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-4 align-self-stretch">
                        
                            <div class="markiting">
                                <p>{{$user->name}}</p>
                                <div class="num-price"><span>$</span>"{{$user->price}}"</div>
                                <div class="inside-markiting">
                                   {{$user->detale}}
                                </div>
                                
                                <a href="{{route('talab')}}">
                    <button type="button" class="btn btn-linear-hover" >حجز خدمة</button>
                </a>
               
                            </div>
                            
                        </div>
                        @endforeach
                        </div>
                        
                        </div> 
                        
            </div>
        </div>
    </section>
    <br>
    @endsection
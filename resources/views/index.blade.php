<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>khloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--icon-->



    <script>
        window.addEventListener("load", function() {
            var load_screen = document.getElementById("load_screen");
            document.body.removeChild(load_screen);
            $("html").css({
                'overflow': 'auto'
            });
        });
    </script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
</head>

<body dir="rtl">
    <div id="load_screen">
    </div>
    <img src="img/circle.svg" class="circle-body" alt="">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="btn btn-menu-on-mobile">
                <span class="btn-menu-on-mobile-icon"></span><br>
                <span class="btn-menu-on-mobile-icon"></span><br>
                <span class="btn-menu-on-mobile-icon"></span>
            </button>

            <div class="collapse navbar-collapse menu-on-mobile" id="navbarSupportedContent">
                <button class="btn btn-close-menu-mobile">
                    <span class="fa fa-angle-right" ></span><span class="fa fa-angle-right"></span>
                </button>
                <ul class="navbar-nav ml-auto">
                <a href="{{route('talab')}}">
                    <button class="btn btn-appointment order-first"  >حجز خدمة</button>
                </a>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">
                            <span class="fa fa-car"></span> الرئيسية
                           
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle abc" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="fa fa-car"></span> خدماتنا
                            <br>
                            <hr>
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('id')}}">الشعارات والهويات البصرية</a>
                            <a class="dropdown-item" href="{{route('program')}}">تصميم وبرمج</a>
                            <a class="dropdown-item" href="{{route('tasweq')}}">خدمات التسويق</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="1">
                            <span class="fa fa-car"></span> تواصل معنا
                            <br>
                            <hr>
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#11">
                            <span class="fa fa-car"></span> من نحن
                            <br>
                            <hr>
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>
                        </a>
                    </li>
               
                  
                                   
                                  
                                                        
                                 
                  
                
               
                
              
               
                </ul>

            </div>
            
            <a class="navbar-brand" href="#">
                <!-- <img src="img/logo.png" class="logo-svg" alt=""> -->
                <img src="img/logo.png" alt="" width="100px" height="auto">
            </a>
            
        </nav>
    </header>
    <section class="workers container-fluid text-right">
        <div class="socials-mdia-div">
            <a href="https://www.instagram.com/cocoon_pal/" class="socials instgram"><span class="fas fa-instagram"></span></a>
            <a href="https://www.facebook.com/cocoon.pal" class="socials facebook"><span class="fas fa-facebook"></span></a>
            <a href="https://twitter.com/cocoon_pal" class="socials twitter"><span class="fas fa-twitter"></span></a>
            <a href="https://wsend.co/970593688317" class="socials whatsapp"><span class="fas fa-whatsapp"></span></a>
        </div>
        <div class="row text-center-mobile-only">
            <div class="col-md-5 align-self-center">
                <p class="h2">أسعار وعروض حزمات تصميم الشعارات لتجارية</p>
                <a class="a-contacts" data-scroll-nav="1">تواصل معنا</a>
                <a href="{{route('talab')}}">حجز خدمة</a>
                
            </div>
            <div class="col-md-7 align-self-end">
                <img src="img/workers.svg" alt="" width="65%" height="auto">
            </div>
        </div>
    </section>

    <section class="three-build text-center" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <br><br>
                </div>
                
                <section class="three-build text-center" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="h3">مجموعة خدماتنا في التصميم والبرمجة والتسويق</p>
                    <p>اختر خدمتك المناسبة, وقم بحجزها والتواصل معنا, ودعنا نعتني بأعمالك التجارية والخدماتية</p>
                    <br><br>
                </div>
                <div  class="col-md-4 align-self-stretch">
                    <a href="{{route('id')}}" class="services">
                                            <img src="../img/team-fund-crowdera.gif" width="100%" height="auto" alt="">
                        <div class="inside-services">
                            <p class="h4">خدمات التصميم</p>
                            <p>حزمة متنوعة من الباقات في صناعة وتصميم الهويات البصرية </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 align-self-stretch">
                    <a href="{{route('program')}}" class="services">
                                            <img src="../img/three-build-2-1.svg" width="100%" height="auto" alt="">
                        <div class="inside-services">
                            <p class="h4">خدمات البرمجة</p>
                            <p>حزمة متكاملة من خدمات برمجة المواقع والتطبيقات الإلكترونية</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 align-self-stretch">
                    <a href="{{route('tasweq')}}" class="services">
                                            <img src="../img/three-build-1-3.svg" width="100%" height="auto" alt="">
                        <div class="inside-services">
                            <p class="h4">خدمات التسويق</p>
                            <p>حزمة متكاملة من خدمات التسويق الإلكتروني وإدارة مواقع السوشال ميديا</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
               

            </div>
        </div>
    </section>
    
    <section >
    @foreach($users as $user)
    
    <video width="100%" height="500" controls>
            <source src="{{$user->vedo}}" type="video/mp4">
       
        @endforeach 
        </section>
    <section class="how-we-are container" id="11">
        <div class="row">
            <div class="col-md-7 text-right">
                <p class="p-arrow">من نحن</p>

                <p>
                    <span class="balck-span">منصة خلود</span> , هي منصة تقنية, تعنى بصناعة الإبداع, مع فريق متكامل من المبدعين الطموحين الشغوفين.
                </p>
                <p>
                    <span class="balck-span">مع منصة خلود</span>, ستكون أنت محور اهتمامنا, حيث سينفرد بعملك فريقٌ مختص, يسعى جاهداً معك إلى تقديم الحلول لمشاكلك وتحقيق طموحك ورؤيتك بالخدمة المطلوبة. ندرس احتياجاتك, نبدأ برسمٍ خطة العمل, وننفذ العمل بشكلٍ
                    احترافي, ملتزمين بالوقت, لأن انبهارك بالخدمة, وترك انطباعٍ متميز لديك عنا, سيكون أولوية أولى

                </p>
                <p>
                    <span class="balck-span">مع منصة خلود</span>, ستكون أنت محور اهتمامنا, حيث سينفرد بعملك فريقٌ مختص, يسعى جاهداً معك إلى تقديم الحلول لمشاكلك وتحقيق طموحك ورؤيتك بالخدمة المطلوبة. ندرس احتياجاتك, نبدأ برسمٍ خطة العمل, وننفذ العمل بشكلٍ
                    احترافي, ملتزمين بالوقت, لأن انبهارك بالخدمة, وترك انطباعٍ متميز لديك عنا, سيكون أولوية أولى

                </p>
            </div>
            <div class="col-md-5 text-center">
                <img src="img/employees.svg" width="50%" height="auto" alt="">
            </div>
        </div>

    </section>
    <section class="bg-three-rows text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <img src="img/settings.svg" width="25%" height="auto" alt="">
                    <p>الإلتزام والمسؤولية</p>
                </div>
                <div class="col-md-4">
                    <img src="img/settings.svg" width="25%" height="auto" alt="">
                    <p>الإلتزام والمسؤولية</p>
                </div>
                <div class="col-md-4">
                    <img src="img/settings.svg" width="25%" height="auto" alt="">
                    <p>الإلتزام والمسؤولية</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us container" data-scroll-index="1">
        <div class="row">
            <div class="col-md-7 text-right">
                <p class="p-arrow">تواصل معنا</p>

                <p>
                    <span class="balck-span">منصة خلود</span> , هي منصة تقنية, تعنى بصناعة الإبداع, مع فريق متكامل من المبدعين الطموحين الشغوفين.
                </p>
                @if(Session::has('success'))
                <div class="alert alert-success">
                {{Session::get('success')}}
                </div>
                @endif

                <form class="container-fluid text-right" action="{{Route('admin.contact')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="text" name="name" id="name" placeholder="الأسم" required>
                    <input type="email" name="email" id="email" placeholder="البريد الإلكتروني" required>
                    <textarea cols="30" rows="5" name="msg" id="msg" placeholder="نص الرسالة" required></textarea>
                    <button type="submit" class="btn btn-linear-hover">أرسل الآن
                    </button>
                </form>
            </div>
            <div class="col-md-5 text-center align-self-center">
                <img src="img/phone.svg" width="70%" height="auto" alt="">
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <div class="row row-footer1">
                <div class="col-md-12">
                    <img src="img/logo-lite.png" width="160px" height="auto" alt="">
                    <p>اشترك الآن بالقائمة البريدية
                    </p>
                   
                    <form action="{{Route('admin.part')}}" method="post" enctype="multipart/form-data">
                    @csrf    
                    <input type="email" name="email" placeholder="البريد الإلكتروني" required>
                        <input type="submit" value="إشترك الآن">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer footer-index text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>جميع الحقوق محفوظة لدى موقع خلود</p>
                        <div class="socials-mdia-div">
                        <a href="https://www.instagram.com/cocoon_pal/" class="socials instgram"><span class="fas fa-instagram"></span></a>
            <a href="https://www.facebook.com/cocoon.pal" class="socials facebook"><span class="fas fa-facebook"></span></a>
            <a href="https://twitter.com/cocoon_pal" class="socials twitter"><span class="fas fa-twitter"></span></a>
            <a href="https://wsend.co/970593688317" class="socials whatsapp"><span class="fas fa-whatsapp"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="video-overlay"></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/scrollIt.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>
   
</body>

</html>
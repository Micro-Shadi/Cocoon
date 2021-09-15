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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/css/intlTelInput.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/animate.css" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
    <link href="../css/custom.css" rel="stylesheet" />

</head>

<body dir="rtl" class="other-page form-page">
    <div id="load_screen">
    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                
                
                    <a href="{{route('talab')}}">
                    <button class="btn btn-appointment" >حجز خدمة</button></a>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">الرئيسية</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle abc" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                خدماتنا
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('id')}}">الشعارات والهويات البصرية</a>
                            <a class="dropdown-item" href="{{route('program')}}">تصميم وبرمج</a>
                            <a class="dropdown-item" href="{{route('tasweq')}}">خدمات التسويق</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}" data-scroll-nav="1">
                            <span class="fa fa-car"></span> تواصل معنا
                            <br>
                            <hr>
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            <span class="fa fa-car"></span> من نحن
                            <br>
                            <hr>
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>
                        </a>
                    </li>
               
                                   
              
                                   
            
           
              
                </ul>
            </div>
            
            <a class="navbar-brand" href="#">
                <img src="../img/logo.svg" class="logo-svg" alt="">
            </a>
        </nav>
    </header>
    

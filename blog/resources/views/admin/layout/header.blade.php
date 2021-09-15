<!DOCTYPE html>
<html>
<head>
    <title>Khuload</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href=  "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet">
    <link href=    " https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"  rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src=  "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src= "https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>




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
        <ul class="navbar-nav ml-auto">

       

                  

                <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard2')}}">
                            <span class="fa fa-car"></span> لوحة المسؤول
                           
                            <span>جملة بعض منها مكتوب من قبل كتابتها</span>
                        </a>
                    </li>
    </ul>
    <button type="submit" onclick="window.print();" class="btn btn-linear-hover ">'طباعة'</button>
            <a class="navbar-brand" href="#">
                <img src="../img/logo.svg" class="logo-svg" alt="">
            </a>
           
        </nav>
    </header>
    

</head>
<body>
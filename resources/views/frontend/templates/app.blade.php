<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    {{-- Google Fonts --}}
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <title>CCT Dharan</title>
</head>

<body>
    @isset($notices)
        <!-- NOTICE -->
        <div class="container-fluid" style="background-color: #023EBA;" >
            <div class="container">
                <div class="row pt-2" style="height: 40px;">
                    <div class="col-1 text-right">
                        <p class="text-end" style="color: #E5E5E5;">Notice:</p>
                    </div>
                    <div class="col-11">
                        <marquee behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();" class="col-md-10">
                            @foreach ($notices as $index => $notice)
                                <span>
                                    <a href="{{ route('frontend.notice', $notice->id) }}"
                                        class="inline-block text-white text-decoration-none">{{ $notice->subject }} @if (count($notices) > $index + 1) | @endif</a>
                                </span>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    @endisset

    <!-- LOGO AND INFO -->
    <div class="container-fluid pb-4" style="background-color: #0077B6;">
        <div class="container">
            <div class="row  header" style="min-height: 150px;">
                <div class="col-md-9 items-center d-md-flex">
                   <a href="/"> <img src="{{ asset('img/logo.png') }}" height="117" width="160" alt="" srcset=""></a>
                    <div class="pt-md-4">
                        <span style="font-size: 24px; color: #E5E5E5;">Central Campus of Technology</span>
                        <br>
                        <span style="font-size: 18px; color: #E5E5E5;" class="fw-light"> Dharan-14, Hattisar</span>
                    </div>
                </div>
                <div class="col-md-3 pb-sm-4">
                    <div>
                        <span style="font-size: 18px; color: #E5E5E5;"><i class="fas fa-envelope"></i> info@cctdharan.edu.np</span> <br>

                        <a href="tel:+025570228" class="text-decoration-none">
                            <span style="font-size: 18px; color: #E5E5E5;"><i class="fa fa-phone-square-alt" aria-hidden="true"></i> 025-570228</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="color: #0000cc"><img src="{{ asset('img/logo.png') }}" alt=""
                    width="64"> Central Campus of Technology</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Who we are?
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/campus-profile">Profile of Campus</a></li>
                            <li><a class="dropdown-item" href="/about-us">About us</a></li>
                            <li><a class="dropdown-item" href="/pedagogy-page">Pedagogy</a></li>
                            <li><a class="dropdown-item" href="#">Sustainability</a></li>
                            <li><a class="dropdown-item" href="#">Contact us</a></li>
                        </ul>
                    </li>

                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Facilities
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Library</a></li>
                            <li><a class="dropdown-item" href="#">Extra-curricular activities: </a></li>
                            <li><a class="dropdown-item" href="#">Hostel</a></li>
                            <li><a class="dropdown-item" href="#">Transportation</a></li>
                            <li><a class="dropdown-item" href="#">Quarters</a></li>
                            <li><a class="dropdown-item" href="#">Computers/Internet/Multimedia</a></li>
                            <li><a class="dropdown-item" href="#">Museum</a></li>
                            <li><a class="dropdown-item" href="#">Laboratories</a></li>
                            <li><a class="dropdown-item" href="#">Seminar Hall</a></li>
                            <li><a class="dropdown-item" href="#">Cafeteria</a></li>
                            <li><a class="dropdown-item" href="#">Saraswoti Temple</a></li>
                            <li><a class="dropdown-item" href="#">Botanical Garden (Under construction)</a></li>
                            <li><a class="dropdown-item" href="#">Water Fountain</a></li>
                            <li><a class="dropdown-item" href="#">Other Facilities:</a></li>
                            <li><a class="dropdown-item" href="#">Botanical Garden (Under construction)</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Academics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/program-page">Programs</a></li>
                            <li><a class="dropdown-item" href="/sdepartments">Departments</a></li>
                            <li><a class="dropdown-item" href="/facts-page">Fact, Figures and Fee Chart</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Components
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/gbody-page">Governing Bodies</a></li>
                            <li><a class="dropdown-item" href="#">IQAC</a></li>
                            <li><a class="dropdown-item" href="/faculties-member">Faculty Members</a></li>
                            <li><a class="dropdown-item" href="#">Non Teaching Staff</a></li>
                            <li><a class="dropdown-item" href="#">Student welfare</a></li>
                            <li><a class="dropdown-item" href="#">Associations</a></li>
                            <li><a class="dropdown-item" href="#">Free Student Union</a></li>
                            <li><a class="dropdown-item" href="#">Other Associations</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Research & Publication
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/research-page">Research</a></li>
                            <li><a class="dropdown-item" href="#">Publication</a></li>
                            
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/faqs-page">FAQS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/onlineform">Apply Online</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- NAVBAR -->
    <div class="container-fluid" style="background-color: #f6f6f6;">
        <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light ">
             <div class="container-fluid">
               <a class="navbar-brand btn btn-sm text-white fs-6" href="/onlineform" style="background-color: #ff0000;"><span style="color: yellow;">Apply</span> Online</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="/">Home</a>
                     </li>
 
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Who we are?
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="/campus-profile">Profile of Campus</a></li>
                             <li><a class="dropdown-item" href="/about-us">About us</a></li>
                             <li><a class="dropdown-item" href="/pedagogy-page">Pedagogy</a></li>
                             <li><a class="dropdown-item" href="/sustainability-page">Sustainability</a></li>
                             <li><a class="dropdown-item" href="/contact">Contact us</a></li>
                         </ul>
                     </li>
 
                     
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Facilities
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="/library">Library</a></li>
                             <li><a class="dropdown-item" href="/extra-activities">Extra-curricular activities: </a></li>
                             <li><a class="dropdown-item" href="/hostel">Hostel</a></li>
                             <li><a class="dropdown-item" href="/transportation">Transportation</a></li>
                             <li><a class="dropdown-item" href="/quarters">Quarters</a></li>
                             <li><a class="dropdown-item" href="/multimedia">Computers/Internet/Multimedia</a></li>
                             <li><a class="dropdown-item" href="/museam">Museum</a></li>
                             <li><a class="dropdown-item" href="/lab">Laboratories</a></li>
                             <li><a class="dropdown-item" href="seminar-hall">Seminar Hall</a></li>
                             <li><a class="dropdown-item" href="/cafeteria">Cafeteria</a></li>
                             <li><a class="dropdown-item" href="/temple">Saraswoti Temple</a></li>
                             <li><a class="dropdown-item" href="/botanical">Botanical Garden (Under construction)</a></li>
                             <li><a class="dropdown-item" href="/water-fountain">Water Fountain</a></li>
                             <li><a class="dropdown-item" href="/other">Other Facilities:</a></li>
                         </ul>
                     </li>
 
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Academics
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="/program-page">Programs</a></li>
                             <li><a class="dropdown-item" href="/sdepartments">Departments</a></li>
                             <li><a class="dropdown-item" href="/facts-page">Fact, Figures and Fee Chart</a></li>
                         </ul>
                     </li>
 
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Components
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="/gbody-page">Governing Bodies</a></li>
                             <li><a class="dropdown-item" href="#">IQAC</a></li>
                             <li><a class="dropdown-item" href="/faculties-member">Faculty Members</a></li>
                             <li><a class="dropdown-item" href="#">Non Teaching Staff</a></li>
                             <li><a class="dropdown-item" href="#">Student welfare</a></li>
                             <li><a class="dropdown-item" href="#">Associations</a></li>
                             <li><a class="dropdown-item" href="#">Free Student Union</a></li>
                             <li><a class="dropdown-item" href="#">Other Associations</a></li>
                         </ul>
                     </li>
 
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Research & Publication
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="/research-page">Research</a></li>
                             <li><a class="dropdown-item" href="#">Publication</a></li>
                             
                         </ul>
                     </li>
 
                     <li class="nav-item">
                         <a class="nav-link" href="/faqs-page">FAQs</a>
                     </li>
                 </ul>
             </div>
             </div>
           </nav>
        </div>
     </div>
    

 


    <main class="flex-shrink-0">

    @yield('modal')

    @yield('carousel')

    @yield('content')
    </main>



    <footer>
        <div style="background-color: #0077B6;" class="py-5 text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <address>
                           <h4> Contact us</h4>
                             <strong>Dharan-14,Hattisar</strong> <br>
                            <i class="fas fa-envelope"></i> info@cctdharan.edu.np <br>
                            <i class="fa fa-phone-square-alt" aria-hidden="true"></i> 025-570228
                        </address>
                    </div>
                    <div class="col-md-2">
                        <h4>Quick Links</h4>
                        <ul>
                            
                            <li><a href="" class="text-white text-decoration-none">About us</a></li>
                            <li><a href="" class="text-white text-decoration-none">Who we are?</a></li>
                            <li><a href="" class="text-white text-decoration-none">Facilities</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <div style="background-color: #023EBA;" class="text-white p-1">
            <center>Powered By: <a href="https://codeitapps.com" class="text-white text-decoration-none">Code IT</a></center>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    @yield('scripts')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    {{-- Datatable --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });

    </script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description"
        content="Technical College, Microbiology,Tribhuvan University,College in Dharan, College in Kosi, StudyFood Technology, Study BTech">
    <meta name="google-site-verification" content="I1-oGK88pGmMV5zWSj4MB0JXfNPzx884-UCOb4KhoG8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


    <!-- Google Fonts -->

    <!--<link rel="preconnect" href="https://fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />-->
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">

    {{-- For Slider --}}
    <link rel="stylesheet" href="{{ asset('css/slider/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider/slick-custom.css') }}">
    <title>CCT Dharan</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J09Z4JK2VJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-J09Z4JK2VJ');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KKG7M3M');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="f-1">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKG7M3M" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Top Bar -->
    <div class="bg-1 border-1">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="social ms-md-3">
                            <a class="btn bg-1 text-white shadow-none" href="https://www.facebook.com/dharancct"
                                target="_blank" title="facebook">
                                <i class="fab fa-facebook-square fs-4"></i>
                                <span></span>
                            </a>
                        </div>
                        <div class="contact">
                            <div class="d-flex justify-content-md-end align-items-center">
                                <a href="tel:025-570228" class="text-decoration-none" title="phone">
                                    <div class="d-flex align-items-center ms-auto" style="width: fit-content;">
                                        <span class="badge text-2">
                                            <i class="fas fa-phone-alt fs-6"></i>
                                        </span>
                                        <span class="text-2 fw-2">025-570228</span>
                                    </div>
                                </a>
                                <div class="line"></div>
                                <a href="mailto:info@cct.tu.edu.np" class="text-decoration-none" title="email">
                                    <div class="d-flex align-items-center ms-auto" style="width: fit-content;">
                                        <span class="badge text-2">
                                            <i class="fas fa-envelope fs-5"></i>
                                        </span>
                                        <span class="text-2 fw-2">info@cct.tu.edu.np</span>
                                    </div>
                                </a>
                                <div class="d-md-block d-none">
                                    <a class="navbar-brand badge border mx-1 text-white apply" href="/onlineform"
                                        style="background-color: #333D79FF;">
                                        <span style="color: yellow;">Apply</span> Online
                                    </a>
                                    <a class="navbar-brand badge mx-1 text-white admission" href="#"
                                        style="background-color: #ff0504;" onclick="msg()">
                                        <span style="color: yellow;">Online</span> Admission
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Top Bar -->



    <!-- LOGO AND INFO -->
    <div class="container-fluid py-1 border-top">
        <div class="container">
            <div class="row  header">
                <div class="col-md-8 align-items-center d-flex">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" height="117" width="160" class="logo" alt=""
                            srcset="">
                    </a>
                    <div class="title">
                        <h4 class="mb-0 pb-0" class="">
                            <span class="fw-2 text-1">Central Campus of Technology</span>
                        </h4>
                        <span class="fw-3 text-3 sub-title">
                            Dharan-14, Hattisar
                        </span>
                    </div>
                </div>
                <div class="col-md-4 align-items-center d-md-flex">
                    {{-- Search Engine --}}
                    <style>

                    </style>
                    <script async src="https://cse.google.com/cse.js?cx=dc77fc066905b05ed"></script>
                    <div class="gcse-search">

                    </div>
                    {{-- <form class="d-flex">

                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        
                    </form> --}}
                    <img src="{{ asset('img/nav_pic/Tu_logo.png') }}" title="TU lOgo" width="70"
                        class="ms-3 d-md-block d-none" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- nav bar  --}}
    <div class="container-fluid" style="background-color: #f6f6f6; position:sticky; top:0%; z-index:11;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-2 order-md-first">
                        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ms-auto" id="navbarNavDropdown">
                            <ul class="navbar-nav me-md-auto ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Who we are?
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/campus-profile">Profile of Campus</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/about-us">About us</a></li>
                                        <li><a class="dropdown-item" href="/pedagogy-page">Pedagogy</a></li>
                                        <li><a class="dropdown-item" href="/sustainability-page">Sustainability</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/contact">Contact us</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Facilities
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/library">Library</a></li>
                                        <li><a class="dropdown-item" href="/extra-activities">Extra-curricular
                                                activities:
                                            </a></li>
                                        <li><a class="dropdown-item" href="/hostel">Hostel</a></li>
                                        <li><a class="dropdown-item" href="/transportation">Transportation</a></li>
                                        <li><a class="dropdown-item" href="/quarters">Quarters</a></li>
                                        <li><a class="dropdown-item"
                                                href="/multimedia">Computers/Internet/Multimedia</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/museam">Museum</a></li>
                                        <li><a class="dropdown-item" href="/lab">Laboratories</a></li>
                                        <li><a class="dropdown-item" href="seminar-hall">Seminar Hall</a></li>
                                        <li><a class="dropdown-item" href="/cafeteria">Cafeteria</a></li>
                                        <li><a class="dropdown-item" href="/temple">Saraswoti Temple</a></li>
                                        <li><a class="dropdown-item" href="/botanical">Botanical Garden (Under
                                                construction)</a></li>
                                        <li><a class="dropdown-item" href="/water-fountain">Water Fountain</a></li>
                                        <li><a class="dropdown-item" href="/other">Other Facilities:</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/program-page">Programs</a></li>
                                        <li><a class="dropdown-item" href="/sdepartments">Departments</a></li>
                                        <li><a class="dropdown-item" href="/facts-page">Fact, Figures and Fee
                                                Chart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="http://202.45.146.37"
                                                target="_blank">Library
                                                Automation Open Access</a></li>
                                        <li><a class="dropdown-item" href="http://202.45.146.37:8080/jspui/"
                                                target="_blank">Digital Repository</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Components
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/gbody-page">Governing Bodies</a></li>
                                        <li><a class="dropdown-item" href="/iqac">IQAC</a></li>
                                        <li><a class="dropdown-item" href="/faculties-member">Faculty Members</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/nonteachingstafflist">Non Teaching
                                                Staff</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/studentwelfare">Student welfare</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/associations">Associations</a></li>
                                        <li><a class="dropdown-item" href="/studentunion">Free Student Union</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/otherassociations">Other
                                                Associations</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Research & Publication
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/research-page">Research</a></li>
                                        <li><a class="dropdown-item" href="/publication">Publication</a></li>

                                    </ul>
                                </li>



                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Download
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item"
                                                href="https://cctdharan.edu.np/download/brochure.pdf"
                                                target="_blank">Brochure</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://cctdharan.edu.np/download/process.pdf"
                                                target=_blank>Admission Procedure at CCT</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank"
                                        href="https://tunepal-my.sharepoint.com/:f:/g/personal/basanta_rai_cct_tu_edu_np/Eg9vz8mG5ilJv1IO4l7rTU4BXtGNdeCEVGJrE6D2PxR4Fw?e=h9tV7X">SSR-Revised(2078)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-10 d-md-none mt-2 online">
                        <a class="navbar-brand btn badge text-white apply ms-3" href="/onlineform"
                            style="background-color: #333D79FF;">
                            <span style="color: yellow;">Apply</span> Online
                        </a>
                        <a class="navbar-brand btn badge text-white admission" href="#"
                            style="background-color: #ff0504;" onclick="msg()">
                            <span style="color: yellow;">Online</span> Admission
                        </a>
                        
                    </div>
                </div>


            </div>
        </nav>
    </div>

    {{-- Notices start --}}
    @isset($notices)
        <!-- NOTICE -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row py-1">
                    <div class="col-md-1 col-2 d-md-flex d-block align-items-center justify-content-end">
                        <span class="text-end fw-1 text-1 notice">Notice:</span>
                    </div>
                    <div class="col-md-11 col-10 text-primary fw-2 text-1 d-flex align-items-center justify-content-start">
                        <marquee behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();"
                            class="col-md-12 marquee">
                            @foreach ($notices as $index => $notice)
                                <span>
                                    <a href="{{ route('frontend.notice-category', $notice->notice_category_id) }}"
                                        class="inline-block text-1 text-decoration-none">{{ $notice->subject }}
                                        @if (count($notices) > $index + 1)
                                            <i class="fas fa-bullhorn"></i>
                                        @endif
                                    </a>
                                </span>
                            @endforeach
                        </marquee>
                    </div>
                    {{-- <div class="col text-end d-none d-md-block">
                        <a class="navbar-brand btn btn-sm text-white fs-6" href="/onlineform"
                            style="background-color: #333D79FF;">
                            <span style="color: yellow;">Apply</span> Online
                        </a>
                        <a class="navbar-brand btn btn-sm text-white fs-6" href="/online-admission"
                            style="background-color: #ff0504;">
                            <span style="color: yellow;">Online</span> Admission
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    @endisset

        {{-- Content --}}
    <main class="flex-shrink-0">
        @yield('carousel')

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>

        <div style="background-color: #333D79FF;" class="py-5 text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <address>
                            <h5> Contact us</h5>
                            <span>Dharan-14,Hattisar</span> <br>
                            <a href="mailto: info@cct.tu.edu.np" class="text-decoration-none text-2">
                                <i class="fas fa-envelope"></i> info@cct.tu.edu.np <br>
                            </a>
                            <a href="tel:025-570228" class="text-decoration-none text-2">
                                <i class="fa fa-phone-square-alt" aria-hidden="true"></i> 025-570228
                            </a>
                        </address>

                    </div>

                    <div class="col-md-3 mb-4">
                        <h5>Related</h5>
                        <ul class="m-0 p-0 list-unstyled">
                            <li> <a class="text-white" target="_blank" href="https://www.ugcnepal.edu.np/">UGC</a>
                            </li>
                            <li> <a class="text-white" target="_blank"
                                    href="https://tribhuvan-university.edu.np/">T.U</a></li>
                            <li><a class="text-white" target="_blank" href="https://www.tuiost.edu.np/">T.U
                                    IOST</a>
                            </li>
                            <li> <a class="text-white" target="_blank" href="https://www.tuexam.edu.np/">BALKHU
                                    EXAM</a></li>
                        </ul>

                    </div>

                    <div class="col-md-2 mb-4 d-none">
                        <h5>Quick Links</h5>
                        <ul class="m-0 p-0 list-unstyled">

                            <li><a href="/about-us" class="text-white text-decoration-none">About us</a></li>
                            <li><a href="/campus-profile" class="text-white text-decoration-none">Who we are?</a></li>
                            <li><a href="/hostel" class="text-white text-decoration-none">Facilities</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="#" class="text-decoration-none">
                            <h5 class="text-2 text-center">Information Officer</h5>
                            <div class="d-block align-items-center bg-2 p-1 rounded text-center">
                                <div class="text-center">
                                    <img src="{{ asset('img/staff/Om Nath Khatiwada.png') }}" class=" "
                                        width="60" alt="">
                                </div>
                                <div class="details ms-1">
                                    <a href="#" class="text-decoration-none">
                                        <h6 class="mb-0">Om Nath Khatiwada</h6>
                                    </a>
                                    <a href="#" class="text-decoration-none text-1">
                                        <small>9841055957</small>
                                    </a> <br>
                                    <a href="#" class="text-decoration-none text-1">
                                        <small>omnathkhatiwada@gmail.com</small>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h4 class="text-uppercase">Location</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7121.258213402513!2d87.28340299706366!3d26.819935895903996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd454e4bda1ff6d5!2sCentral%20Campus%20of%20Technology!5e0!3m2!1sen!2snp!4v1612842158950!5m2!1sen!2snp"
                                    class="w-100" height="" frameborder="0" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div style="background-color: rgb(74, 84, 141);" class="text-white p-1">
            <center>Powered By: <a href="https://codeitapps.com" class="text-white text-decoration-none">Code IT</a>
            </center>
        </div>
    </footer>

    <!--Popup Notice-->
    @yield('modal')




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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    -->
    {{-- Datatable --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/slider/slick.js') }}"></script>
    <script src="{{ asset('js/slider/slick-custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
        function msg(){
            alert("This is under construction");
        }
    </script>


</body>

</html>

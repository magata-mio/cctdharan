<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
   {{-- Datatable --}}
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <title>CCT Dharan</title>
  </head>
  <body>
    {{-- Notice Section --}}
    <div class="container-fluid">
        <div class="row text-white p-1" style="background-color: #0000cc">
            <div class="col-md-2">
                Notice: 
            </div>
            <div class="col-md-10">
                <marquee behavior="" direction="">Hello World</marquee>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/" style="color: #0000cc"><img src="{{ asset('img/logo.png') }}" alt="" width="64"> Central Campus of Technology</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Who we are?
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Profile of Campus</a></li>
                  <li><a class="dropdown-item" href="#">About us</a></li>
                  <li><a class="dropdown-item" href="#">Pedagogy</a></li>
                  <li><a class="dropdown-item" href="#">Sustainability</a></li>
                  <li><a class="dropdown-item" href="#">Contact us</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Facilities</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Academics
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Programs</a></li>
                  <li><a class="dropdown-item" href="#">Departments</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Components
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Governing Bodies</a></li>
                  <li><a class="dropdown-item" href="#">IQAC</a></li>
                  <li><a class="dropdown-item" href="#">Faculty Members</a></li>
                  <li><a class="dropdown-item" href="#">Non Teaching Staff</a></li>
                  <li><a class="dropdown-item" href="#">Student welfare</a></li>
                  <li><a class="dropdown-item" href="#">Associations</a></li>
                  <li><a class="dropdown-item" href="#">Free Student Union</a></li>
                  <li><a class="dropdown-item" href="#">Other Associations</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Research & Publication
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Research</a></li>
                  <li><a class="dropdown-item" href="#">Publication</a></li>
                  <li><a class="dropdown-item" href="/faculties-member">Faculty Members</a></li>
                  <li><a class="dropdown-item" href="#">Non Teaching Staff</a></li>
                  <li><a class="dropdown-item" href="#">Student welfare</a></li>
                  <li><a class="dropdown-item" href="#">Associations</a></li>
                  <li><a class="dropdown-item" href="#">Free Student Union</a></li>
                  <li><a class="dropdown-item" href="#">Other Associations</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">FAQS</a>
              </li>

            </ul>
          </div>
        </div>
    </nav>

   @yield('carousel')

   @yield('content')


   <footer class="mt-5 p-4 text-white" style="background-color: #0000cc">
       <div class="container">
           <div class="row">
               <div class="col-md-11">
                   <address>
                       Contact us <br>
                       <strong>Email</strong>: info@cctdharan.edu.np <br>
                       <strong>Phone</strong>: 977-25525163 <br>
                       Dharan-14, Hattisar
                   </address>
               </div>

               <div class="col-md-1">
                   <address>
                       <a href="" class="text-white">Home</a> <br>
                       <a href="" class="text-white">Who are we</a> <br>
                       <a href="" class="text-white">Academics</a> <br>
                       <a href="" class="text-white">Components</a><br>
                   </address>
               </div>
           </div>
       </div>
   </footer>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  {{-- Datatable --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function(){
       $('#datatable').DataTable();
    });
  </script>
    
  </body>
</html>
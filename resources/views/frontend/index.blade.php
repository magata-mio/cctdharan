@extends('frontend.templates.app')
@section('carousel')
    @include('frontend.carousel.carousel')
@endsection

@section('content')
    {{-- Side Button --}}
    <section class="side-btn">
        <a href="#">
            <div class="text-end my-1">
                <button type="button" class="btn btn-primary border-start" data-bs-toggle="tooltip" data-bs-placement="left" title="FAQ">
                    <i class="fas fa-question-circle"></i>
                  </button>
            </div>
        </a>
          <a href="#">
              <div class="text-end my-1">
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Message">
                    <i class="fab fa-facebook-messenger"></i>
                  </button>
              </div>
          </a>
    </section>
    {{-- Update About us --}}
    <section class="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="title">
                        <h1 class="fs-4 text-1">About Us</h1>
                    </div>
                    <p class="text-muted">
                        Central Campus of Technology, Dharan is the fore runner of food technology education in Nepal. To
                        date, the campus has produced more than 500 highly qualified food technology graduates. Annually,
                        nearly 25 percent of them go abroad for further studies. Ten percent of them find Government jobs
                        and the rest go like hot cakes in various food industries on Nepal and abroad. The scope of food
                        technology education in Nepal has increased dramatically in the past few years. As a result, by
                        2014, there are 11 academic institutions where food technology education is offered. In the light of
                        recent trend in food technology education in Nepal.
                    </p>
                    <a href="/about-us" class="btn bg-1 shadow-none text-2 mt-3 ">
                        <span>More</span>
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
                <div class="col-md-4 border-start mb-5">
                    <div class="title">
                        <h1 class="fs-4 text-1">Notice (Examination)</h1>
                    </div>
                    <ul class="p-0 list-unstyled">
                        @foreach ($examNotice->take(4) as $item)
                        <li>
                            <a href="{{ $item->file }}" target="__blank" class="text-decoration-none">
                                <p class="text-muted m-0">
                                    <span>{{ $item->subject }}</span>
    
                                </p>
                                <p class="m-0 p-0 text-dark">
                                    {{ $item->created_at->diffForHumans() }}
                                </p>
                            </a>
                        </li>
                        <hr>
                        @endforeach                        
                    </ul>
                    @foreach ($examNotice->take(1) as $item)
                           <a href="/notice-category/{{ $item->notice_category_id }}" class="btn bg-1 shadow-none text-2 mt-3 ">
                            <span>More</span>
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                       @endforeach

                </div>
                <div class="col-md-4  border-start mb-3">
                    <div class="title">
                        <h1 class="fs-4 text-1">Executive</h1>
                    </div>
                    <ul class="list-group list-group-flush p-0  ">
                        <li class="list-group-item px-0 pb-3">
                            <div class="d-md-flex">
                                <img src="{{ asset('img/campus-chief.jpg') }}" class="img-fluid profile w-50 rounded"
                                    title="CAMPUS CHIEF" alt="">
                                <div class="ps-3">
                                    <h5 class="fw-1 text-1 m-0 p-0">
                                        CAMPUS CHIEF
                                    </h5>

                                    <div class="lh-1 mt-2">
                                        <span class="f-small text-muted"><strong>Assoc. Prof. Dr.</strong> Dil Kumar
                                            Limbu</span> <br>
                                        <a href="#" class="text-decoration-none">
                                            <span class="f-small text-muted">dil1.limbu@cct.tu.edu.np</span>
                                        </a><br>
                                        {{-- <a href="#" class="text-decoration-none">
                                            <span class="f-small text-muted">9842056782</span>
                                        </a> --}}
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item  px-0 pb-3">
                            <div class="d-md-flex">
                                <img src="{{ asset('img/staff/assistant.jpg') }}" class="img-fluid profile w-50 rounded"
                                    title="CHAIRPERSON" alt="">
                                <div class="ps-md-3">
                                    <p class="fw-1 text-1 m-0 p-0">
                                        ASSISTANT CAMPUS CHIEF
                                    </p>

                                    <div class="lh-1 mt-2">
                                        <span class="f-small text-muted"><strong>Assoc. Prof.</strong> Babita Adhikari</span> <br>
                                        <a href="#" class="text-decoration-none">
                                            <span class="f-small text-muted">
                                                babita.adhikari@cct.tu.edu.np</span>
                                        </a><br>
                                        <a href="#" class="text-decoration-none">
                                            <span class="f-small text-muted">
                                                9842054169    
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- About Us --}}

    {{-- <div class="container my-5">
    <h1 class="display-6"><span style="color:#333D79FF;" class="fw-2">ABOUT</span> US</h1>
    <div class="row my-4">
        <div class="col-md-4">
            <img src="img/Phd lab.jpg" alt="" class="img-fluid">
        </div>
        
        <div class="col-md-8">
          
           <p>
            Central Campus of Technology, Dharan is the fore runner of food technology education in Nepal. To date, the campus has produced more than 500 highly qualified food technology graduates. Annually, nearly 25 percent of them go abroad for further studies. Ten percent of them find Government jobs and the rest go like hot cakes in various food industries on Nepal and abroad. The scope of food technology education in Nepal has increased dramatically in the past few years. As a result, by 2014, there are 11 academic institutions where food technology education is offered. In the light of recent trend in food technology education in Nepal.
           </p>
            <a href="/about-us" class="btn bg-1">Readmore [+]</a>
        </div>
    </div>
   </div> --}}

    <!-- MESSAGE FROM CAMPUS CHIEF -->
    <div style="background-color: #f8f8f8;" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    {{-- Campus cheif --}}
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <img src="img/campus-chief.jpg" alt="" class="img-fluid" title="Campus chief">
                        </div>
                        <div class="col-md-12">
                            <h1 class="text-uppercase fs-5">Message from <span style="color: #333D79FF;"
                                    class="fw-2">campus</span> chief</h1>
                            <p>
                                <strong>Assoc. Prof. Dr.</strong> Dil Kumar Limbu
                            </p>
                            <p class="f-small">
                                Dear Students, Parents, and Well Wishers!
                                It’s my great pleasure to welcome you all in Central Campus of Technology (CCT). It is
                                situated at a very beautiful height at north-east corner of Dharan city. It is surrounded by
                                peaceful and natural environment, really a suitable place for study.

                            </p>
                            {{-- <p>
                          CCT as an academic institution was established in 2028 B.S. During this span of life, the institution has been able to achieve its set goals and most of the objectives in the field of academic activities. 
                      </p> --}}

                            <a href="/campus-chief" class="btn bg-1">Readmore [+]</a>
                        </div>
                    </div>
                    {{-- Chairperson --}}
                    <div class="row pt-5">
                        <div class="col-md-12 mb-2 order-md-first">
                            <img src="img/chair-person.jpg" alt="" class="img-fluid" title="chairperson">
                        </div>
                        <div class="col-md-12">
                            <h1 class="text-uppercase fs-5">Message from <span style="color: #333D79FF;"
                                    class="fw-2">Chairperson</span></h1>
                                    <p>
                                        <strong>Prof.</strong>  Pashupati Mishra
                                    </p>
                            <p class="f-small">
                                Dear Students, Parents, and Well Wishers!
                                On behalf of Campus Management Committee, I welcome you all in Central Campus of Technology
                                (CCT), Hattisar, Dharan. Located at the foothills of Bijayapur Height, it is surrounded by
                                peaceful and serene environment which is suitable for learning and research.
                            </p>
                            {{-- <p>
                              Nepal is a country based on agro-economy. More than 67% of its population depends on agriculture. The geographical diversity of the nation provides favorable condition for diverse food products. The Tarai region is suitable for grain products like paddy, wheat and corn. Similarly, the hilly region is suitable for fruits and vegetables, along with the grain products. Likewise, the topography of the Himalayan region suits for the herbal medicinal plants. But, due to the lack of technically skilled man power, Nepal is yet unable to provide food security to its citizens. 
                          </p> --}}

                            <a href="/chairperson" class="btn bg-1">Readmore [+]</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card  border-0  mt-md-0 mt-3">
                        <div class="card-body">
                            <div class="title">
                                <h1 class="fs-4 text-1  pb-3">Notice (General)</h1>
                                {{-- <hr class="w-50 bg-1 m-0 p-0"> --}}
                            </div>
                                <ul class="list-unstyled">
                                    @foreach ($notices->take(2)  as $item)
                                    <li>
                                        <a href="{{ $item->file }}" target="__blank" class="text-decoration-none">
                                            <p class="text-muted m-0">
                                                <span>{{ $item->subject }}</span>
                
                                            </p>
                                            <p class="m-0 p-0 text-dark">
                                                {{ $item->created_at->diffForHumans() }}
                                            </p>
                                        </a>
                                    </li>
                                    <hr>
                                    @endforeach    
                                    
                                    @foreach ($generalNotice->take(1)  as $item)
                                   <a href="/notice-category/{{ $item->notice_category_id }}" class="btn bg-1 shadow-none text-2 mt-3 ">
                                    <span>More</span>
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                               @endforeach
                                    
                                </ul>
                        </div>
                    </div>
                    {{-- Latest Events --}}
                    <div class="card my-3">
                        <div class="card-body">
                            <h4>Latest Events</h4>
                            <p class="mb-0">
                                B.Tech. Food Technology <br>
                                Orientation Program 2079/01/08 <br>
                                Central Campus of Technology, Dharan
                            </p>
                            
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-bx">
                                        <img src="{{ asset('img/events/pic-1.jpg') }}" class="img-fluid" title="Orientation Program" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-bx">
                                        <img src="{{ asset('img/events/btech orientation.jpg') }}" class="img-fluid" title="Orientation Program" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-bx">
                                        <img src="{{ asset('img/events/pic-2.jpg') }}" class="img-fluid" title="Orientation Program" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Our Department -->
                    <div class="my-5 py-3" style="background-color: #f8f8f8;">
                        <div class="container">
                            <h2 class="text-uppercase ">Our <span style="color: #333D79FF;"
                                    class="fw-2">Departments</span>
                            </h2>
                            <div class="row">
                                {{-- <div class="col-md-4 order-md-last">
                                    <img src="img/s3.jpg" alt="" class="img-fluid w-100">
                                </div> --}}
                                <div class="col-md-12">
                                    <p>Central Campus of Technology (CCT), a constituent campus of Tribhuvan University,
                                        inherits its present name and form from the erstwhile Institute of Applied Science
                                        and Technology (IASTech) established in Dharan in 1972. </p>
                                    <div class="card">
                                        <div class="card-header" style="background-color: #333D79FF;">
                                            <span class="text-white">DEPARTMENTS</span>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-sm table-striped">
                                                @foreach ($departments as $department)
                                                    <tr>
                                                        <td>{{ $department->id }}</td>
                                                        <td><a href="/sdepartments/{{ $department->id }}"
                                                                class="btn btn-sm btn-link text-decoration-none"
                                                                style="color:#333D79FF !important">{{ $department->name }}</a>
                                                        </td>
                                                        <!--<td><a href="/sdepartments/{{ $department->id }}" class="btn btn-sm btn-link" >Department Details</a></td>-->
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OUR FACILITIES -->

    <div class="container mt-5">
        {{-- <h1 class="text-uppercase display-6">Our <span style="color: #333D79FF;"  class="fw-2">Facilities</span></h1>
        <p>Out of the various facilities and resources offered by Central Campus of Technology, the following are among the main facilities that are offered:</p> --}}
        {{-- <div class="row">
            <div class="col-md-2">
            <div class="card" >
               <a href="/library"><img src="img/Library.jpg" class="card-img-top" alt="..."></a>
                <div class="card-title" style="background-color:#333D79FF;">
                <center style="color: #E5E5E5;">Library</center>
                </div>
            </div>
            </div>

            <div class="col-md-2">
           <a href="/hostel">
            <div class="card" >
                <img src="img/Boys Hostel.jpg" class="card-img-top" alt="...">
                <div class="card-title" style="background-color:#333D79FF;">
                <center style="color: #E5E5E5;">Boy's Hostel</center>
                </div>
            </div>
           </a>
            </div>

            <div class="col-md-2">
            <a href="/hostel">
                <div class="card" >
                    <img src="img/Girls Hostel.jpg" class="card-img-top" alt="...">
                    <div class="card-title" style="background-color:#0077B6;">
                    <center style="color: #E5E5E5;">Girl's Hostel</center>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-2">
            <a href="/activities">
                <div class="card" >
                    <img src="img/Football and cricket ground 2.jpg" class="card-img-top" alt="...">
                    <div class="card-title" style="background-color:#0077B6;">
                    <center style="color: #E5E5E5;">Extra-Curricular Activities</center>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-2">
           <a href="/transportation">
            <div class="card" >
                <img src="img/Transportation mediums.jpg" class="card-img-top" alt="...">
                <div class="card-title" style="background-color:#0077B6;">
                <center style="color: #E5E5E5;">Transportation</center>
                </div>
            </div>
           </a>
            </div>

            <div class="col-md-2">
                <a href="/multimedia">
                    <div class="card" >
                        <img src="img/It room Library.jpg" class="card-img-top" alt="...">
                        <div class="card-title" style="background-color:#0077B6;">
                        <center style="color: #E5E5E5;">IT Room Library</center>
                        </div>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>
    {{-- Academic Member Slider --}}
    <div class="container py-3 mb-3">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h3 class="text-1 fw-1">Academic Members Profile</h3>
                <hr class="text-1 w-50 mx-auto">
            </div>
            <div class="col-12 slider">
                <!-- Slider Start -->
                <div class="row shop-slide">
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Sunil Kumar Bhagat {Phy}.png') }}" class="img-fluid" alt="" title="Sunil Kumar Bhagat">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Sunil Kumar Bhagat</h4>
                                    <h4>Associate Professor</h4>
                                    <h4 class="text-danger mb-0">HOD of Physics</h4>
                                    <a href="mailto:physics@cctdharan.edu.np" target="_blank">
                                        <strong>physics@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Sanju Parajuli {bio}.png') }}" class="img-fluid" alt="" title="Sanju Parajuli">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Sanju Parajuli</h4>
                                    <h4>Lecturer</h4>
                                    <h4 class="text-danger mb-0">HOD of Biology</h4>
                                    <a href="mailto:biology@cctdharan.edu.np" target="_blank">
                                        <strong>biology@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Lalita Shrestha {Che}.png') }}" class="img-fluid" alt="" title="Lalita Shrestha">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Lalita Shrestha</h4>
                                    <h4>Assistant Professor</h4>
                                    <h4 class="text-danger mb-0">HOD of Chemistry</h4>
                                    <a href="mailto:chemistry@cctdharan.edu.np" target="_blank">
                                        <strong>chemistry@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Drona Adhikari {Geo}.jpg') }}" class="img-fluid" alt="" title="Drona Adhikari">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Drona Adhikari</h4>
                                    <h4>Teaching Assisstant</h4>
                                    <h4 class="text-danger mb-0">HOD of Geology</h4>
                                    <a href="mailto:geology@cctdharan.edu.np" target="_blank">
                                        <strong>geology@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Dhiren Subba Limbu {Micro}.png') }}" class="img-fluid" alt="" title="Dhiren Subba Limbu">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Dhiren Subba Limbu</h4>
                                    <h4>Teaching Assisstant</h4>
                                    <h4 class="text-danger mb-0">HOD of Microbiology</h4>
                                    <a href="mailto:microbiology@cctdharan.edu.np" target="_blank">
                                        <strong>microbiology@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Kabindra Bhattarai {Nutrition}.png') }}" class="img-fluid" alt="" title="Kabindra Bhattarai">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Kabindra Bhattarai</h4>
                                    <h4>Assistant Proffesor</h4>
                                    <h4 class="text-danger mb-0">HOD of Nutrition & Dietetics </h4>
                                    <a href="mailto:bnd@cctdharan.edu.np" target="_blank">
                                        <strong>bnd@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Navin Gautam {B-Tech}.png') }}" class="img-fluid" alt="" title="Nabin Gautam">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Nabin Gautam</h4>
                                    <h4>Assistant Proffesor</h4>
                                    <h4 class="text-danger mb-0">HOD of B-Tech </h4>
                                    <a href="mailto:btech@cctdharan.edu.np" target="_blank">
                                        <strong>btech@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Roma Ghimire {Compulsory}.png') }}" class="img-fluid" alt="" title="Roma Ghimire">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Roma Ghimire</h4>
                                    <h4>Assistant Proffesor</h4>
                                    <h4 class="text-danger mb-0">HOD of Compulsory & IT </h4>
                                    <a href="mailto:compulsory@cctdharan.edu.np" target="_blank">
                                        <strong>compulsory@cctdharan.edu.np</strong>
                                    </a>
                                    <a href="mailto:it@cctdharan.edu.np" target="_blank">
                                        <strong>it@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/om prakash panta {MSc}.png') }}" class="img-fluid" alt="" title="Om prakash Panta">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Om prakash Panta</h4>
                                    <h4>Lecturer</h4>
                                    <h4 class="text-danger mb-0">Program Co-ordinator of MSc.</h4>
                                    <a href="mailto:msc@cctdharan.edu.np" target="_blank">
                                        <strong>msc@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Mahalaxmi Pradhananga {Food_quality_control}.png') }}" class="img-fluid" alt="" title="Om prakash Panta">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Mahalaxmi Pradhananga</h4>
                                    <h4>Assistant Professor</h4>
                                    <h4 class="text-danger mb-0">HOD of Food Quality Control</h4>
                                    <a href="mailto:fqc@cctdharan.edu.np" target="_blank">
                                        <strong>fqc@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/Academic Member/Balbhadra Bhandari {IT}.png') }}" class="img-fluid" alt="" title="Om prakash Panta">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Balbhadra Bhandari</h4>
                                    <h4>Lecturer</h4>
                                    <h4 class="text-danger mb-0">Pragram Co-ordinator of IT </h4>
                                    <a href="mailto:it@cctdharan.edu.np" target="_blank">
                                        <strong>it@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Slider End -->
                <!-- Slider Arrow Start -->
                <div class="arrow_pre">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="m12.707 7.707-1.414-1.414L5.586 12l5.707 5.707 1.414-1.414L8.414 12z" />
                        <path d="M16.293 6.293 10.586 12l5.707 5.707 1.414-1.414L13.414 12l4.293-4.293z" />
                    </svg>
                </div>
                <div class="arrow_next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z" />
                        <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z" />
                    </svg>
                </div>
                <!-- Slider Arrow End -->
            </div>
        </div>
    </div>
    {{-- Administrative Member Slider --}}
    <div class="container py-3 mb-3">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h3 class="text-1 fw-1">Administrative Members Profile</h3>
                <hr class="text-1 w-50 mx-auto">
            </div>
            <div class="col-12 slider">
                <!-- Slider Start -->
                <div class="row admin-slide">
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/hiramani basnet.png') }}" class="img-fluid" alt="" title="Hiramani Basnet">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Hiramani Basnet</h4>
                                    <h4>Head Office Assistant</h4>
                                    <h4 class="text-danger mb-0">Examination Department Head</h4>
                                    <a href="mailto:exam@cctdharan.edu.np" target="_blank">
                                        <strong>exam@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/suresh subedi.png') }}" class="img-fluid" alt="" title="Suresh Subedi">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Suresh Subedi</h4>
                                    <h4>Deputy Account Controller</h4>
                                    <h4 class="text-danger mb-0">Account Department Head</h4>
                                    <a href="mailto:account@cctdharan.edu.np" target="_blank">
                                        <strong>account@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/Om Nath Khatiwada.png') }}" class="img-fluid" alt="" title="Om nath Khatiwada">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Om nath Khatiwada</h4>
                                    <h4>Library Officer</h4>
                                    <h4 class="text-danger mb-0">Library Department Head</h4>
                                    <a href="mailto:library@cctdharan.edu.np" target="_blank">
                                        <strong>library@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/sunil shrestha.png') }}" class="img-fluid" alt="" title="Sunil Shrestha">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Sunil Shrestha</h4>
                                    <h4>Head Office assistant</h4>
                                    <h4 class="text-danger mb-0">Store Department Head</h4>
                                    <a href="mailto:store@cctdharan.edu.np" target="_blank">
                                        <strong>store@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/Mahesh Koirala.png') }}" class="img-fluid" alt="" title="Mahesh Koirala">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Mahesh Koirala</h4>
                                    <h4>Head Office assistant</h4>
                                    <h4 class="text-danger mb-0">General Administration Head</h4>
                                    <a href="mailto:g_admin@cctdharan.edu.np" target="_blank">
                                        <strong>g_admin@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/Bipin Chaudhary.png') }}" class="img-fluid" alt="" title="Bipin Chaudhary">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Bipin Chaudhary</h4>
                                    <h4>Head Technical Assistant(IT)</h4>
                                    <h4 class="text-danger mb-0">IT Department Head</h4>
                                    <a href="mailto:it@cctdharan.edu.np" target="_blank">
                                        <strong>it@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="card border-0">
                                <div class="card-body">
                                    <img src="{{ asset('img/admin-staff/nabin shrestha.png') }}" class="img-fluid" alt="" title="Nabin Kumar Shrestha">
                                </div>
                                <div class="card-footer bg-white text-center">
                                    <h4 class="mb-0 fs-6">Nabin Kumar Shrestha</h4>
                                    <h4>Section Officer</h4>
                                    <h4 class="text-danger mb-0">Administration Department Head</h4>
                                    <a href="mailto:admin@cctdharan.edu.np" target="_blank">
                                        <strong>admin@cctdharan.edu.np</strong>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Slider End -->
                <!-- Slider Arrow Start -->
                <div class="arrow_pre admin_arrow_pre">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="m12.707 7.707-1.414-1.414L5.586 12l5.707 5.707 1.414-1.414L8.414 12z" />
                        <path d="M16.293 6.293 10.586 12l5.707 5.707 1.414-1.414L13.414 12l4.293-4.293z" />
                    </svg>
                </div>
                <div class="arrow_next admin_arrow_next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z" />
                        <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z" />
                    </svg>
                </div>
                <!-- Slider Arrow End -->
            </div>
        </div>
    </div>


    <!-- Notice -->
    {{-- <div class="container py-4">
        <H1 class="text-uppercase display-6"><span style="color: #333D79FF;"  class="fw-2">Notice</span></H1>
        <div class="row">
        <div class="col-md-6">
            <img src="img/s6.jpg" alt="" class="img-fluid w-100 h-75 ">
        </div>
        <div class="col-md-6">
            <p>Please click the link below to find lasted notice of campus</p>
            <div class="card">
                <div class="card-header" style="background-color: #333D79FF;">
                    <span class="text-white">Notices</span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm table-striped">
                       @foreach ($categories as $category)
                           <tr>
                               <td>{{ $category->id }}</td>
                               <td>{{ $category->name }}</td>
                               <td><a href="/notice-category/{{ $category->id }}" class="btn btn-sm text-white" style="background-color: #333D79FF">View all</a></td>
                           </tr>
                       @endforeach
            
                    </table>
                </div>
            </div>
        </div> 
        </div>
    </div> --}}

    {{-- <div class="container my-4">
        <h1 class="text-uppercase display-6">Our <span style="color: #333D79FF"  class="fw-2">Location</span></h1>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7121.258213402513!2d87.28340299706366!3d26.819935895903996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd454e4bda1ff6d5!2sCentral%20Campus%20of%20Technology!5e0!3m2!1sen!2snp!4v1612842158950!5m2!1sen!2snp" class="w-100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div> --}}
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
@endsection

@section('modal')
    {{-- Modal Display --}}
    @if ($popup)
        <div class="modal" tabindex="-1" id='myModal'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">-->
                    <!--    <h5 class="modal-title">{{ $popup->title }}</h5>-->
                    <!--    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                    <!--</div>-->
                    <div class="modal-body">
                        @if ($popup->image)
                            <img src="{{ $popup->image }}" alt="..." class="img-fluid">
                        @endif
                        <!--<p>{!! $popup->message !!}</p>-->
                    </div>
                    @if ($popup->link)
                        <div class="modal-footer">
                            <a href="{!! $popup->link !!}" class="btn btn-danger">
                                Apply Now
                            </a>
                        </div>
                </div>
    @endif
    </div>
    </div>
    @endif
    {{-- End Modal Display --}}
@endsection

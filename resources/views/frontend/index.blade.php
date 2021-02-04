@extends('frontend.templates.app')
@section('carousel')
    @include('frontend.carousel.carousel')
@endsection

@section('content')
    <div class="container mt-5">
        {{-- Message from Campus chief --}}
        <div class="row">
            <div class="col-md-2 order-md-last text-center">
                <img src="{{ asset('img/campus-chief.jpg') }}" alt="campus chief" class="img-thumbnail">
                 <address>
                     Assoc. Prof. Dr <br>
                     <strong class="">Dil Kumar Limbu</strong> <br>
                     Campus Chief

                 </address>
            </div>

            <div class="col-md-10">
                <h1 class="fs-2 text-uppercase">Message from <span class="text-danger">campus chief</span></h1>
                <p>Dear Students, Parents, and Well Wishers!
                    It’s my great pleasure to welcome you all in Central Campus of Technology (CCT). It is situated at a very beautiful height at north-east corner of Dharan city. It is surrounded by peaceful and natural environment, really a suitable place for study.
                </p>

                <p>
                    CCT as an academic institution was established in 2028 B.S. During this span of life, the institution has been able to achieve its set goals and most of the objectives in the field of academic activities. It has been involved in providing quality education in food technology, nutrition & dietetics, microbiology and physics at bachelor and masters level. Being a central campus of Food Technology, it is the only institution that runs Ph. D. program in food technology. We proudly announce that CCT will strive to transform it into Deemed University of Food Science and Technology, making it one of finest research stations for post-harvest technology of the SAARC Region. Pass out students of this institution are employed at various places of Nepal as well as foreign countries, too. So, we are always proud of them. However, the country is still lacking in having necessary numbers of skilled and competent human resources in this field. Our mission is to fulfill this gap. We are committed to provide practical, value based and goal oriented education of the 21st century, which we design the best desired manpower in the present world.
                    Lastly, I am confident and optimistic that CCT will be a center of excellence in multi-discipline areas of science and technology.
                </p>
            </div>
        </div>
    </div>

       {{-- Message from Chair Person --}}
       <div style="background-color: #f1f1f1">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('img/chair-person.jpg') }}" alt="Chair Person" class="img-fluid">
                    <address>
                        Professor <br>
                        <strong class="">Pashupati Mishra</strong> <br>
                        Chair Person
                    </address>
                </div>
    
                <div class="col-md-10">
                    <h1 class="fs-2 text-uppercase">Message from <span class="text-danger">Chair Person</span></h1>
                    <p>
                        Dear Students, Parents, and Well Wishers!
                        thills of Bijayapur Height, it is   surrounded by peaceful and serene environment which is suitable for learning and research.
                    </p>
    
                    <p>
                        Nepal is a country based on agro-economy. More than 67% of its population depends on agriculture. The geographical diversity of the nation provides favorable condition for diverse food products. The Tarai region is suitable for grain products like paddy, wheat and corn. Similarly, the hilly region is suitable for fruits and vegetables, along with the grain products. Likewise, the topography of the Himalayan region suits for the herbal medicinal plants. But, due to the lack of technically skilled man power, Nepal is yet unable to provide food security to its citizens. Thus, to explore and make the maximum utilization of its diverse food products by producing qualified and technically equipped human resource CCT was established in 2028 B.S.
                    </p>
    
                    <p>
                        Ever since its establishment, CCT has been continuously working to broaden its visions, missions and goals. It has been devoted to provide students world class, quality education in science and technology to make them capable of facing challenges of modern world. At present it runs bachelor and master’s programs in food technology, nutrition & dietetics, microbiology and physics. In addition, it runs Ph. D. program in food technology. This institution has been recognized for its quality education both in nation and abroad. We are proud that there is a high demand of our graduates within the nation and abroad.
                    </p>
    
                    <p>
                        Nonetheless, today’s graduates have to compete in the rapidly changing world. We are aware that it is not enough covering the curriculum. To meet the demands of fast changing world, our faculties have adapted themselves with the modern methods of teaching and are striving to provide students practical and theoretical knowledge required in the present world in the field of science and technology. We assure you that in CCT we equip our students with both practical and theoretical skills so that they can compete in today’s world.
                    </p>
                </div>
            </div>
        </div>
        </div>

     
        

        <div class="container py-5">
             {{-- Notice Section --}}
        <div class="row">
            <h4>Notice Board</h4>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li class="text-primary"><i class="fas fa-check"></i><a href="" class="text-decoration-none"> Notice (General)</a></li>
                    <li class="text-primary"><i class="fas fa-check"></i><a href="" class="text-decoration-none"> Notice (Departmental)</a></li>
                    <li class="text-primary"><i class="fas fa-check"></i><a href="" class="text-decoration-none"> Notice (Result Publication)</a></li>
                </ul>
            </div>
        </div>
        </div>

        {{-- Google Map --}}


        <div class="container">
        <div class="row">
            <h1 class="fs-4">Our Location</h1>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7121.2257240558265!2d87.28194387517382!3d26.820452929776426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd454e4bda1ff6d5!2sCentral%20Campus%20of%20Technology!5e0!3m2!1sen!2snp!4v1612408111398!5m2!1sen!2snp"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100"></iframe>
            </div>
        </div>  
        </div>
      </div>
@endsection


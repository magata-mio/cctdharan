@extends('frontend.templates.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/campus view.jpg') }}" alt="" class="img-fluid">
            </div>

            <div class="col-md-8">
                <h1 class="text-uppercase">Profile of <span>Campus</span></h1>
                <p>
                    Central Campus of Technology (CCT), a constituent campus of Tribhuvan University, inherits its present name and form from the erstwhile Institute of Applied Science and Technology (IASTech) established in Dharan in 1972. The campus is situated at an isolated and quiet knoll called “Hattisar” (altitude 428 meter) on the lap of spectacular Bijaypur hill north-east to main Dharan, a magnificent and well-off city in the Eastern part of Nepal. Bijaypur was the capital city of different dynasties for a long times span of history and famous religious and cultural place. 
                </p>
                <p>
                    Hattisar was used for husbandry for elephants of the kingdom. So, Hatti means elephant and Sar means place for in Nepali language. Thus, CCT is popularly known as Hattisar Campus in this region. Now the location of CCT is ward No. 14 of Dharan sub-metropolitan city. The campus premise spreads over an area of about 19½ bigaha (9.2 ha) of lush vegetation (260 49′ 08″ N – 260 49′ 25″ N and 870 17′ 13″ E – 870 17′ 24″ E). It is easily reachable from the main town by auto-rickshaw. One may also prefer to go on foot, in which case a shortcut trail may be used, it normally takes about 20 minutes from Bhanuchowk.
                </p>

                <p>Central Campus of Technology (CCT) is a constituent campus of Tribhuvan University. It issituated in Dharan, a beautiful city of Eastern Nepal (Sunsari District, Province No 1). It obtained autonomy in 2012 and presently runs several academic programs in Bachelor- and Master degree, viz., Food Technology, Nutrition & Dietetics, Biology, Physics, Geology and Microbiology. The former two are programs fully owned by Tribhuvan University while the later four are self-supporting programs. CCT is currently running 6 academic programs, comprising pure- and applied sciences. These programs accept aspirants from all over Nepal. For Food Technology Program (B. Tech.), there is provision for accepting candidates from SAARC countries also. Two bachelor-level programs, viz., (i) B. Tech (Food) and (ii) B. Sc. Nutrition & Dietetics(BND), are owned/funded by T. U. whereas other programs are of self-sustaining (self-supporting) nature. CCT achieved financial autonomy in 2012 in 2019.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <h1 class="text-uppercase">Our <span>Location</span></h1>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7121.2257240558265!2d87.28194387517382!3d26.820452929776426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd454e4bda1ff6d5!2sCentral%20Campus%20of%20Technology!5e0!3m2!1sen!2snp!4v1612408111398!5m2!1sen!2snp"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100"></iframe>
            </div>
        </div>  
    </div>
@endsection
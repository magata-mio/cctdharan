@extends('frontend.templates.app')

@section('content')
    <div class="container my-5">
        <h1>Hostels</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/Girls Hostel.jpg') }}" alt="" class="img-fluid">
                
            </div>
    
            <div class="col-md-8">
                <h5>Girls Hostel</h5>
                <p>The campus has separate hostel facilities for female and male students within its premise. It has a two-story well-facilitated, advanced girls' hostel which is located opposite to the class rooms and administration blocks, and is guarded by a security guard. It has the capacity to accommodate 45 girls and a hostel warden. In its premise, there is a separate canteen and a basketball court for the hostel girls. The area is under CCTV surveillance.</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-4 order-md-last">
                <img src="{{ asset('img/Boys Hostel.jpg') }}" alt="" class="img-fluid">
                <img src="{{ asset('img/Boys hostel (Underconstruction).jpg') }}" alt="" class="img-fluid">
            </div>
    
            <div class="col-md-8">
                <h5>Boys Hostel</h5>
                <p>Likewise, the campus has modest boys' hostel names Mahananda Sapkota Hostel. It consists of two blocks, one each for B. Tech. and B. Sc. students. The B. Tech. block consists of 13 rooms and the B.Sc. block consists of 11 rooms. The hostel can accommodate up to 50 students in all. But this hostel will be temporary for the campus has already started to build an advance hostel for the male students. The hostel will have two blocks; each block with the capacity to accommodate 50 students. The boys’ hostel will also have a teacher quarter for its warden, a guard house, and a basketball court within its compound. According to the plan the new boys’ hostel is under construction. </p>
                <p>
                    The hostels’ compounds are quite spacious, with sufficient space for recreation and gardening. A separate room is available for cabled Television in both of the hostels. CCT has also provided internet facilities for the students. Both the hostels have high speed internet facility, separate cafeterias, well furnished rooms and temple.
                </p>

                <p>
                    The hostels are administered by Hostel Management Committee that comprises hostel wardens, campus chief, some teachers, and a representative from student union. There is an arrangement of hostel prefects for internal supervision/monitoring of the day-to-day hostel activities. The prefects are liable to the wardens.
                </p>

                <p>
                    The facility is for students from remote or far off districts. The entrants pay a token fee of NRs 100 per month per student for the male students. The yearly intake number ranges between 10 and 15.  Whereas, for the female students, entrants pay is NRs 1000 & 1200 per month per student.
                </p>

                <p>
                    <strong>Contact</strong>: Ganesh Bahadur Thapa (Boys’ Hostel Warden)   <br>
                    <strong>Contact</strong>: SanjuParajuli (Girls' Hostel Warden) 9842048307

                </p>
                
            </div>
        </div>
    </div>
@endsection
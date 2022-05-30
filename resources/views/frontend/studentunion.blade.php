@extends('frontend.templates.app')
@section('content')
    <div class="container py-5">
        <h1>Free Student Union</h1>
        <div class="row">
            <div class="col-md-4 order-md-last d-flex flex-column">
                <img src="{{ asset('img/studentunion.png') }}" class="img-fluid" alt="">
                <address class="text-center">
                    Mr. Saurab Sanjel <br>
                    President <br>
                    Free Students Union <br>
                    Central Campus of Technology
                </address>

            </div>
            <div class="col-md-8">
                <p>
                    Free Student Union (FSU) in any government college is formed by direct election system. The candidate who wins the election in respective post gets opportunity to work in the concerned post of FSU for the period of two years. The Free Student Union of this well-known and reputed institution of the country has been raising the voice for the welfare and rights of the students. Besides these they have been organizing diﬀerent co-curricular activities and also worked as a facilitator. FSU always serves as the bridge between students and administrations for the betterment of students and it appeals for the good quality education and rightful beneﬁts of students from the college. It assures students access to the quality books, E-library and other sports related equipment in college. Diﬀerent types of extra-curricular activities are organized from the beginning of Campus CCT. Five academic faculties are running in our college and there are various non-political organizations in each faculty which conduct diﬀerent sports activities annually.
                </p>

                <table class="table table-stripe id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mr. Sourav Sanjel</td>
                            <td>President</td>
                        </tr>
                        <tr>
                            <td>Mr. Anuj Karki</td>
                            <td>Vice – President</td>
                        </tr>
                        <tr>
                            <td>Mr. Abinash Poudel</td>
                            <td>Secretary</td>
                        </tr>
                        <tr>
                            <td>Ms. Pooja Dangi</td>
                            <td>Treasurer</td>
                        </tr>
                        <tr>
                            <td>Mr. Kiran Dahal</td>
                            <td>Joint Secretary</td>
                        </tr>
                        <tr>
                            <td>Mr. PrashantaPathak</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Samip Bimba</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Basanta Rai</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Ms. Tara Ghimire</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Karun Shrestha</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Prabesh Bhattarai</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Samit Karki</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Bishesh Viswakarma</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Wangdi Sherpa</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Mr. Bishnu Bista</td>
                            <td>Member</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
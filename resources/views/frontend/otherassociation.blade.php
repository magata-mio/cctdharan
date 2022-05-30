@extends('frontend.templates.app')
@section('content')
    <div class="container py-5">
        <h1>Other Associations</h1>
        <table class="table table-stripe" id="datatable">
            <thead>
                <tr>
                    <th>Association</th>
                    <th>Chair-Person</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NEFTSA</td>
                    <td>Bipin Aryal</td>
                    <td>itsmebipinaryal51@gmail.com</td>
                    <td></td>
                </tr>
                <tr>
                    <td>NSAM</td>
                    <td>Nabin Basnet</td>
                    <td>nabinbasnet058@gmail.com</td>
                    <td>9816305243</td>
                </tr>
                <tr>
                    <td>NSAND</td>
                    <td>Ram Prasad Tiwari</td>
                    <td>ramutiwari2054@gmail.com</td>
                    <td>9847146879</td>
                </tr>

                <tr>
                    <td>APS</td>
                    <td>Bishartha Manandhar</td>
                    <td>bisharthamanandhar1@gmail.com</td>
                    <td>9815354630</td>
                </tr>
                <tr>
                    <td>GSS</td>
                    <td>Indraman Bhattarai</td>
                    <td>bhattaraiprajwal64@gmail.com</td>
                    <td>9817032269</td>
                </tr>
            </tbody>
        </table>

        <address class="py-4">
            NEFTSA: Nepal Food Technology Students’ Association <br>
            NSAM: Nepal Students Association of Microbiology <br>
            NSAND: Nepal Students Association of Nutrition and Dietetics <br>
            APS: Association of Physics Students <br>
            GSS: Geological Students’ Society 

        </address>
    </div>
@endsection
<!-- resources/views/appointments/show.blade.php -->

<x-header/>
<div class="container mt-5">
    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg); height:30%">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="{{url('getappointment')}}" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>
    <h1 class="text-center">Appointments list</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Doctor</th>
                <th>Number</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="footer">
    <x-footer/>
</div>

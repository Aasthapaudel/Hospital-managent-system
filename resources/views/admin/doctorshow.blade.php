<!-- resources/views/admin/doctors/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
        button {
            float: right;
        }
    </style>
    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container" style="padding-top:100px;">
                <h1 class="text-center">Doctors</h1>
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="menu-title">ID</th>
                                <th class="menu-title">Name</th>
                                <th>Phone</th>
                                <th>Speciality</th>
                                <th>Room</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>{{ $doctor->speciality }}</td>
                                    <td>{{ $doctor->room }}</td>

                                    <td><img src="{{ asset('images/' . $doctor->image) }}" alt="Doctor Image" style="width:100px;"></td>
                                    <td >
                                        <form action="" method="post">
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </form>
                                        <form action="" method="post">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>
</html>

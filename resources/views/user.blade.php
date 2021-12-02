<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">User Details
             <a style="float:right" href="{{ url('/users/addUser')}}" class="btn btn-info">Add User</a>
            </div>
            <div class="card-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm"> ID </th>
                            <th class="th-sm"> Name </th>
                            <th class="th-sm">Email-Id </th>
                            <th class="th-sm">Ph_Number </th>
                            <th class="th-sm">Department </th>
                            <th class="th-sm">DOJ</th>
                            <th class="th-sm">Gender</th>
                            <th class="th-sm" colspan="2"> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->ph_no}}</td>
                            <td>{{$user->department}}</td>
                            <td>{{$user->doj}}</td>
                            <td>{{$user->gender}}</td>
                            <td> <a href="{{ url('/users/editUser', $user->id) }}" class="btn btn-info">Edit</a></td>
                            <td> <a href="{{ url('/users/delete', $user->id) }}" class="btn btn-info">Delete</a></td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>

</body>

</html>
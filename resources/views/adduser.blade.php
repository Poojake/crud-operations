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
<style>
    .alignBox {
        text-align: left;
        margin-top: 5px;
    }
</style>

<body>
    <div class="bg-light p-4 rounded">
        <h1>Add new user</h1>
        <div class="lead">
            Enter the following Details.
        </div>

        <div class="container mt-4">
            <div class="row">
                
                <div class="col alignBox">
                    <label for="name" class="form-label">Name</label>
                </div>
                
                <div class="col">
                    <form method="post" action="{{url('/users/store')}}">
                        @csrf
                        <div class="mb-3">
                            <input value="" type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                </div>
                <div class="col alignBox">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                    </div>
                </div>
                <div class="col alignBox">

                    <input value="" type="email" class="form-control" name="email" placeholder="Email address" required>
                </div>
            </div>
            <div class="row">
                <div class="col alignBox">
                    <label for="department" class="form-label">Department</label>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input value="" type="text" class="form-control" name="department" placeholder="Department" required>
                    </div>
                </div>
                <div class="col alignBox">
                    <div class="mb-3">
                        <label for="ph_no" class="form-label">Ph_No</label>
                    </div>
                </div>
                <div class="col">
                    <input value="" type="number" class="form-control" name="ph_no" placeholder="ph_no" required>
                </div>
            </div>
            <div class="row">
                <div class="col alignBox">
                    <label for="doj" class="form-label">DOJ</label>
                </div>
                <div class="col ">
                    <div class="mb-3">
                        <input value="" type="date" class="form-control" name="doj" placeholder="doj" required>
                    </div>
                </div>
                <div class="col alignBox">
                    <div class="mb-3">
                        <label> Gender </label>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-6">
                        <input value="male" type="radio" class="" name="gender">    
                        <label for="gender" class="form-label">Male</label>
                        </div>
                        <div class="col-md-6">
                        <input value="female" type="radio" class="" name="gender">
                        <label for="gender" class="form-label">Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save user</button>
                </div>
            </div>
            </form>
        </div>

    </div>
</body>

</html>
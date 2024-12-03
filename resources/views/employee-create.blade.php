<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Create</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->


        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Add Employee</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <form action="{{route('employee.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="name" class="form-label">Employee Name : </label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Employee Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="email" class="form-label">Email Address : </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="contact" class="form-label">Contact Number : </label>
                                <input type="tel" class="form-control" name="contact" id="contact" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="dob" class="form-label">Date of Birth : </label>
                                <input type="date" class="form-control" name="dob" id="dob">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Address"></textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="yoe">Year of Experience : </label>
                                <input type="number" class="form-control" name="yoe" id="yoe" min="1" placeholder="Enter Years of Experience">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group m-3">
                                <button type="submit" class="btn text-center  m-2 btn-primary" name="submit">Submit</button>

                                <a href="{{route('employee.list')}}" class="btn text-center  m-2 btn-primary">Back</a>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
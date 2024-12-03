<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">Employee List</h1>


        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{route('employee.add')}}" class="btn btn-primary">Create Employee</a>
            </div>

            <div class="row col-md-12 mt-2">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Year of Experience</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->fname}}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->contact }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->yoe }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-success m-1">Edit</a>
                                <form action="{{route('employee.destroy',$employee->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-1" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="offset-md-4 col-md-4 mt-5">
            @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                <strong>{{session('success')}}</strong>
            </div>
            @endif
            <form action="{{route('students.upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="upload">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-secondary" value="Upload">
                </div>
            </form>
            <a name="" id="" class="btn btn-success mt-3" href="{{route('students.export')}}" role="button">Download</a>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) != 0)
                        @foreach ($users as $index => $user)
                            <tr>
                                <td scope="row">{{++$index}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->password}}</td>
                            </tr>
                        @endforeach
                    @else
                        <span class="text-danger">No Data Available</span>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col-6 p-3">
        <!-- /.card-header -->
        <div class="col-12">
            <table class="table table-bordered text-center">
                <tbody>
                <tr>
                    <td>
                        <a href="{{ route('users.index') }}" type="button" class="btn btn-block btn-secondary btn-sm">Main</a>
                        <a href="{{ route('users.edit', $id) }}" type="button" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('users.destroy', $id) }} ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger m-2">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $id }}</td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>{{ $users['name'] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $users['email'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
</body>
</html>

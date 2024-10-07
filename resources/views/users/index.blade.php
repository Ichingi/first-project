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
{{--    <a href="{{ route('') }}" class="btn btn-success">Create</a>--}}

    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-success">Create</a>
        <ul class="list-group" >

            @foreach($users as $user)
                <a href="{{ route('users.show', [$user['id']]) }}" class="text-dark text-decoration-none">
                    <li class="list-group-item p-3" aria-disabled="true">
                        <span  class="bg-primary p-2 text-white rounded-3 m-1">{{ $user['id'] }}</span>
                        {{ $user['name'] }}
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</body>
</html>

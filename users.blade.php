<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <h1 class="">Bulk delete</h1>

    <form action="{{route('deleteUsers')}}" method="post">
        @csrf
        <table border="2">
            <tr>
                <thead>
                    <th>Delete</th>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                </thead>
            </tr>
            @if(count($data) > 0)
                @foreach($data as $datas)
                <tr>
                    <tbody>
                        <td>
                            <input type="checkbox" name="ids[{{$datas->id}}]" value="{{$datas->id}}" class="ml-2">
                        </td>
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->email}}</td>
                    </tbody>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">User Not Found</td>
                </tr>
            @endif
        </table>
        <input type="submit" value="Delete" class="mt-2">
    </form>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>لیست آکادمی</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px;">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Del</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($academies as $key => $academy): ?>
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$academy->event}}</td>
                        <td>{{$academy->date}}</td>
                        <td> <a href="{{route('academy.edit', $academy->id)}}" class="btn btn-primary">EDIT</a> </td>
                        <td> <a href="#" class="btn btn-danger">DELETE</a> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>لیست تکنولوژِی</title>
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
                    <th scope="col">product_name</th>
                    <th scope="col">starting_date</th>
                    <th scope="col">edit</th>
                    <th scope="col">del</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teches as $key => $tech): ?>
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$tech->product_name}}</td>
                        <td>{{$tech->starting_date}}</td>
                        <td> <a href="{{route('tech.edit', $tech->id)}}" class="btn btn-primary">EDIT</a> </td>
                        <td> <a href="#" class="btn btn-danger">DELETE</a> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

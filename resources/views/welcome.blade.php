<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>خانه</title>
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    </head>
    <body>

        <div style="">
            <div class="col-md-4"
            style="color:blue;text-align:center;border:3px solid;border-color:red;margin-top:20px">
                <h2> <a href="{{route('academy.form')}}">Create Academy</a> </h2> <hr>
                <h2> <a href="{{route('academy.list')}}">List of Academy</a> </h2>
            </div>

            <div class="col-md-4"
            style="color:blue;text-align:center;border:3px solid;border-color:red;margin-top:20px">
                <h2> <a href="{{route('tech.form')}}"> Create Tech</a> </h2> <hr>
                <h2> <a href="{{route('tech.list')}}"> List of Tech</a> </h2>
            </div>
        </div>

    </body>
</html>

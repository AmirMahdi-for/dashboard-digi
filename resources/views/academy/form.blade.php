<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>تعریف آکادمی</title>
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    </head>
    <body>

        <?php if (session('message')): ?>
            <div class="alert alert-success">{{session('message')}}</div>
        <?php endif; ?>

        <form class="" action="{{route('academy')}}" method="post">
            <div class="container">
                @csrf
                <div class="col-md-8">
                    <label> Event </label>
                    <input type="text" name="event" value="{{$academy->event}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Event Name</label>
                    <input type="text" name="event_name" value="{{$academy->event_name}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Date </label>
                    <input type="text" name="date" value="" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Attendees Number </label>
                    <input type="number" name="attendees_number" value="" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Income(Toman)</label>
                    <input type="number" name="income" value="" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Subject </label>
                    <input type="text" name="subject" value="" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Time(hours) </label>
                    <input type="number" name="time" value="" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Online/ Prensence </label>
                    <input type="text" name="online_or_prensence" value="" class="form-control">
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-4"> save </button>
                </div>

            </div>
        </form>

    </body>
</html>

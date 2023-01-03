<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>تعریف استدیو تکنولوژی</title>
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    </head>
    <body>

        <?php if (session('message')): ?>
            <div class="alert alert-success">{{session('message')}}</div>
        <?php endif; ?>

        <form class="" action="{{route('tech')}}" method="post">
            <div class="container">
                @csrf
                <?php if ($tech->id): ?>
                    method('PUT')
                <?php endif; ?>
                <div class="col-md-8">
                    <label> Product Name </label>
                    <input type="text" name="product_name"
                    value="{{$tech->product_name ?? old('product_name')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Starting Date </label>
                    <input type="text" name="starting_date" value="{{$tech->starting_date}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Product Type </label>
                    <input type="text" name="product_type" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Product Desctiption </label>
                    <input type="number" name="product_description" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Industry </label>
                    <input type="number" name="industry" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Request Form </label>
                    <input type="text" name="request_form" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Stakholders </label>
                    <input type="number" name="stakholders" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> Market Resear </label>
                    <input type="text" name="market_research" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> product definition </label>
                    <input type="text" name="product_definition" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> product roadmap </label>
                    <input type="text" name="product_roadmap" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> product status </label>
                    <input type="text" name="product_status" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> diginext stock </label>
                    <input type="text" name="diginext_stock" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> total income </label>
                    <input type="text" name="total_income" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> company registration </label>
                    <input type="text" name="company_registration" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-8">
                    <label> valuation </label>
                    <input type="text" name="valuation" value="{{old('')}}" class="form-control">
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-4"> save </button>
                </div>

            </div>
        </form>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
.body_style{
    background: #9a79e8;
}
.table_style{
    background: #fff;
}

</style>
<body class="body_style">

<div class="container mt-5">
<div class="col-md-12">
            <div class="card">
                <div class="card-header header_style">
                    <h3 class="text-center">WELCOME TO HOTEL FLORIDA</h3>
                    <h5 class="text-center">Book your rooms with affordable price</h5>
                </div>

                            <div class="card-body">
                            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sl. no</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">email</th>
      <th scope="col">Quantity</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tbody>
      @if(!empty($data))
      @foreach($data as $i => $d)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$d->name}}</td>
      <td>{{$d->phone}}</td>
      <td>{{$d->email}}</td>
      <td>{{$d->quantity_ac}}</td>
      <td>{{$d->booking_date_ac}}</td>
      <td>{{$d->total_amount_ac}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
                            
                        </div>
                    </div>
            </div>
        </div>
</div>



</body>
</html>

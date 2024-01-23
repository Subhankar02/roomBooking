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
.header_style{
    background-color: #62f0f5;
}
.delete_style{
    height: 30px;
    margin-top: 35px;
}
</style>
<body class="body_style">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header_style">
                    <h3 class="text-center">WELCOME TO HOTEL FLORIDA</h3>
                    <h5 class="text-center">Book your rooms with affordable price</h5>
                </div>

                <form method="post" action="{{url('add/data')}}">
                    @csrf
                    <div class="row">
                        <div class="col-5">
                            <div class="card-body">
                                
                                    <div class="form-group">
                                        <label for="username">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Phone No</label>
                                        <input type="number" class="form-control" id="mobile" name="mobile"  placeholder="Enter your phone no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"  placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Address</label>
                                        <!-- <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea> -->
                                        <input type="text" class="form-control" id="address" name="address"  placeholder="Enter your address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" maxlength="2" id="age" name="age"  placeholder="Enter your age" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">BOOK</button>
                            </div>
                        </div>
                        
                        <div class="col-7 mt-5">
                        <div class="card-body">
                        <h4><span class="label label-default">Book Your Room</span></h4>
                            <div class="row ml-1">
                                <button class="btn btn-primary mr-2 add_ac" id="acRoom"> 
                                    <span style="font-size:16px; font-weight:bold;">A/C</span>
                                </button>
                                <button class="btn btn-primary add_non_ac" id="nonAcRoom"> 
                                    <span style="font-size:16px; font-weight:bold;">Non A/C</span>
                                </button>
                            </div>
                            <div class="mt-2 container1">
                                <!-- <div class="row">
                                    <div class="col-2">
                                    <label style="font-size:12px; font-weight:bold;">Room No</label>
                                    <select class="form-control"  name="" id="">
                                        <option value=""></option>
                                        <option value="1001">1001</option>
                                        <option value="2005">2005</option>
                                        <option value="6009">6009</option>
                                    </select>
                                    </div>
                                    <div class="col-2">
                                    <label style="font-size:12px; font-weight:bold;">Type</label>
                                        <select style="font-size:12px;" class="form-control"  name="" id="">
                                            <option value="ac">AC</option>
                                            <option value="non_ac">Non AC</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                    <label style="font-size:12px; font-weight:bold;">Booking Date</label>
                                        <input style="font-size:12px;" type="date" class="form-control" id="username" required>
                                    </div>
                                    <div class="col-3">
                                    <label style="font-size:12px; font-weight:bold;">Leaving Date</label>
                                        <input style="font-size:12px;" type="date" class="form-control" id="username" required>
                                    </div>
                                </div> -->
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type='text/javascript'>
        $(document).ready(function() {
    var max_fields = 1;
    var wrapper = $(".container1");
    var add_ac_button = $(".add_ac");
    var add_non_ac_button = $(".add_non_ac");

    var x = 0;
    var y = 0;
    $(add_ac_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            // $(wrapper).append(`<div><input type="text" class="form-control" id="username" placeholder="Enter your address" required/><a href="#" class="btn btn-danger delete">Delete</a></div>`); //add input box

            $(wrapper).append(`
                            <div class="row">
                                <div class="col-2">
                                <label style="font-size:12px; font-weight:bold;">Type</label>
                                    <input type="text" class="form-control mr-2" name="ac" id="username" value="A/C" disabled>
                                </div>
                                <div class="col-2">
                                <label style="font-size:12px; font-weight:bold;">Quantity</label>
                                    <input type="number" class="form-control mr-2" onchange="handleDateChange()" name="quantityAc" id="quantityAc" value=1 min="1">
                                </div>
                                <div class="col-3">
                                <label style="font-size:12px; font-weight:bold;">Booking Date</label>
                                    <input type="date" class="form-control" name="bookingDateAc" id="bookingDateAc" onchange="handleDateChange()" required>
                                </div>
                                <div class="col-3">
                                <label style="font-size:12px; font-weight:bold;">Leaving Date</label>
                                    <input type="date" class="form-control" name="leavingDateAc" id="leavingDateAc" onchange="handleDateChange()" required>
                                </div>
                                <input type="hidden" name="total_amount_ac" id="total_amount_ac">
                                <a href="#" class="btn btn-danger btn-sm delete delete_style">Delete</a>
                            </div>
                            <div id="totalAc"></div>
                            
                            `); //add input box

                            document.getElementById("acRoom").style.display = "none";
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
        document.getElementById("acRoom").style.display = "block";
        $('#totalAc').html("")
        $('#total_amount_ac').val("")
    })

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $(add_non_ac_button).click(function(e) {
        e.preventDefault();
        if (y < max_fields) {
            y++;
            // $(wrapper).append(`<div><input type="text" class="form-control" id="username" placeholder="Enter your address" required/><a href="#" class="btn btn-danger delete">Delete</a></div>`); //add input box

            $(wrapper).append(`
                            <div class="row">
                                <div class="col-2">
                                <label style="font-size:12px; font-weight:bold;">Type</label>
                                    <input type="text" class="form-control mr-2" name="non_ac" id="username" value="Non A/C" disabled>
                                </div>
                                <div class="col-2">
                                <label style="font-size:12px; font-weight:bold;">Quantity</label>
                                    <input type="number" class="form-control mr-2" onchange="handleDateChange2()" name="quantityNonAc" id="quantityNonAc" value=1 min="1">
                                </div>
                                <div class="col-3">
                                <label style="font-size:12px; font-weight:bold;">Booking Date</label>
                                    <input type="date" class="form-control" name="bookingDateNonAc" id="bookingDateNonAc" onchange="handleDateChange2()" required>
                                </div>
                                <div class="col-3">
                                <label style="font-size:12px; font-weight:bold;">Leaving Date</label>
                                    <input type="date" class="form-control" name="leavingDateNonAc" id="leavingDateNonAc" onchange="handleDateChange2()" required>
                                </div>
                                <input type="hidden" name="total_amount_non_ac" id="total_amount__non_ac">
                                <a href="#" class="btn btn-danger btn-sm deleteNonAc delete_style">Delete</a>
                            </div>
                            <div id="totalNonAc"></div>
                            `); //add input box

                            document.getElementById("nonAcRoom").style.display = "none";
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".deleteNonAc", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        y--;
        document.getElementById("nonAcRoom").style.display = "block";
        $('#totalNonAc').html("")
        $('#total_amount__non_ac').val("")
    })
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function handleDateChange(){
    var startDate = $('#bookingDateAc').val()
    var endDate = $('#leavingDateAc').val()
    var quantity = $('#quantityAc').val()
    
    if(startDate != "" && endDate != ""){
        var start = new Date(startDate);
        var end = new Date(endDate);
        var timeDifference = end - start;
        var daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24)+1);
        var totalAmount = 1500*quantity*daysDifference
        var html = '<span class="highlight" style="color:#5b5b5c;">*For  '+quantity+' room, you have to pay RS. '+totalAmount+'. (1500/room).</span>'
        $('#totalAc').html(html)
        $('#total_amount_ac').val(totalAmount)
    }
   
}

function handleDateChange2(){
    var startDate = $('#bookingDateNonAc').val()
    var endDate = $('#leavingDateNonAc').val()
    var quantity = $('#quantityNonAc').val()
    
    if(startDate != "" && endDate != ""){
        var start = new Date(startDate);
        var end = new Date(endDate);
        var timeDifference = end - start;
        var daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24)+1);
        var totalAmount = 1000*quantity*daysDifference
        var html = '<span class="highlight" style="color:#5b5b5c;">*For  '+quantity+' room, you have to pay RS. '+totalAmount+'. (1500/room).</span>'
        $('#totalNonAc').html(html)
        $('#total_amount__non_ac').val(totalAmount)
    }
}
</script>

</body>
</html>

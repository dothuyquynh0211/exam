<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Customers</h1>
    <a href="{{url('customer')}}" class="fs-5">List Customer</a>
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" name="Name" class="form-control" aria-describedby="basic-addon1" autocomplete="off">
        </div>
 
    <div class="mb-3">
        <label for="formFile" class="form-label">Photo</label>
        <input class="form-control" type="file" id="formFile" name="img">
      </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="1" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="0" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2">
        Female
        </label>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon4">Phone</span>
        <input type="text" name="phone" class="form-control"  aria-describedby="basic-addon1" autocomplete="off">
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon3"> Email</span>
    <input type="text"  name="email" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off">
</div>
    
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="reset" class="btn btn-primary">Cancel</button>
    </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
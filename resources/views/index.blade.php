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
    <div class="container" style="text-align: center;">
    <h1>List Customers</h1>
    <a href="{{url('customer/create')}}" class="fs-5">Add new customer</a>
    <div class="input-group mb-3" style="width: 350px;">
        <form action="{{url('customer')}}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder="Search with Name or Phone" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button type="submit" class="btn btn-outline-primary">Search</button>
              </div>
              
        </form>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id Customer</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        @forelse ($result as $info)
        <tr>
            <th>{{$info->id}}</th>
            <th>{{$info->name}}</th>
            <th><img src="{{$info->avt}}" alt="" width="200px" height="150px"></th>
            <th>
                @if ($info->gender==0) Nu
                @else Nam
                @endif
            <th>{{$info->phone}}</th>
            <th>{{$info->email}}</th>
        @empty
            <th colspan="6">Danh sach rong</th>
        @endforelse
        </tr>
        

    
    </table>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @if(\Session::has('success'))
    <div class="alert alert-success mt-1" role="alert"> 
        <h4>{{\Session::get('success')}}</h4>
    </div>
    @endif
    <div class="container">
        <a href="/contactview" class="btn btn-primary mt-4">Back</a>
        <h2>Users Contact</h2>
        <form action="/add_data" method="post" class="text-align-right">
            {{ csrf_field()}}
            <input type="text" class="form-control mb-2" name="firstname" placeholder="Firstname">
            <input type="text" class="form-control mb-2" name="lastname" placeholder="Lastname">
            <input type="email" class="form-control mb-2" name="email" placeholder="Email">
            <div class="row mb-2">
                <div class="col">
                    <input type="number" class="form-control" name="age" placeholder="Age">
                </div>
                <div class="col">
                        <input type="number" class="form-control" name="salary" placeholder="Salary">
                </div>
            </div>
            <input type="Address" class="form-control mb-2" name="address" placeholder="Address">
            <div class="d-flex justify-content-end">
                <button type="submit" name="submit " class="btn btn-primary">Submit</button>
            </div>        
        </form>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
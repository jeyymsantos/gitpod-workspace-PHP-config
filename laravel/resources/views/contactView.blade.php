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
    <div class="container">
        @if(\Session::has('success'))
        <div class="alert alert-success mt-1" role="alert"> 
            <h4>{{\Session::get('success')}}</h4>
        </div>
        @endif
        <h2>Users Contact</h2>
        <hr>
        <div class="buttons" style="text-align:right;">
            <a href="/addContact" class="btn btn-primary">Add Contact Data</a>
        </div>
        <form>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FIRSTNAME</th>
                    <th scope="col">LASTNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">AGE</th>
                    <th scope="col">SALARY</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody id="contactTable">
                    @foreach ($contact as $row)
                    <tr>
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->firstName}}</td>
                        <td>{{ $row->lastName}}</td>
                        <td>{{ $row->email}}</td>
                        <td>{{ $row->age}}</td>
                        <td>{{ $row->salary}}</td>
                        <td>{{ $row->address}}</td>
                        <td> 
                            <a href="click_edit/{{$row->id}}" class="btn btn-success">Edit</a>
                        </td>   
                        <td>
                            <a href="/click_delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                        </td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
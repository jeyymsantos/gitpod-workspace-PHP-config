<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <form action="/update/{{$contact[0]->id}}" method="post" class="text-align-right">
                {{ csrf_field()}}
                <input type="text" class="form-control mb-2" name="firstname" value="{{$contact[0]->firstName}}" placeholder="Firstname">
                <input type="text" class="form-control mb-2" name="lastname" value="{{$contact[0]->lastName}}" placeholder="Lastname">
                <input type="email" class="form-control mb-2" name="email" value="{{$contact[0]->email}}" placeholder="Email">
                <div class="row mb-2">
                    <div class="col">
                        <input type="number" class="form-control" name="age" value="{{$contact[0]->age}}" placeholder="Age">
                    </div>
                    <div class="col">
                            <input type="number" class="form-control" name="salary" value="{{$contact[0]->salary}}" placeholder="Salary">
                    </div>
                </div>
                <input type="Address" class="form-control mb-2" name="address"  value="{{$contact[0]->address}}" placeholder="Address">
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit " class="btn btn-primary">Update</button>
                </div>        
            </form>
        </div>
    </div>
</body>
</html>
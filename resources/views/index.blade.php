<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Management Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="herader text-center mt-4">
            <h2>Contact Management Application</h2>
        </div>
        <div class="main-content">
            <div class="row mt-4 mb-3">
                <div class="col-md-4">
                    <form action="" method="get">
                        <div class="row">
                        <div class="form-group col-9">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <input type="button" value="Search" class="btn btn-primary">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                @foreach ($datas as $data)
                <tbody >
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td class="text-center"><a class="btn btn-success" href="#">Show</a></td>
                        <td class="text-center"><a class="btn btn-info" href="#">Edit</a></td>
                        <td class="text-center"><a class="btn btn-danger" href="#">Delete</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
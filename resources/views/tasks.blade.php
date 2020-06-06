<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    <form method="post" action="/saveTask">
                        {{csrf_field()}}

                        <input type="text" class="form-control" name="taskadd" placeholder="Enter the task here:">
                        <br>
                        <input type="submit" class="btn btn-warning" id="btn" value="SAVE">
                        <input type="button" class="btn btn-primary" value="CLEAR">
                        <br>
                        <br>
                        <br>
                    </form>

                    <table class="table table-dark">
                        <th>ID</th>
                        <th>TASK</th>
                        <th>COMPLETED</th>
                        <tr></tr>
                        <td>1</td>
                        <td>Laravel</td>
                        <td>not yet</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $('#btn').on('click', function() {
            var data = $('.taskadd').val();

            Swal.fire({

                icon: 'success',
                type: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,

            })

        })
    </script>
</body>


</html>
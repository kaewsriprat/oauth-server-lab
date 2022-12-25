<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" action="register_handler.php" method="post">
                            <div class="col-6 mb-3">
                                <label for="firstnameInput">Firstname</label>
                                <input type="text" class="form-control" id="firstnameInput" name="firstnameInput" placeholder="firstname" value="test">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="lastnameInput">Lastname</label>
                                <input type="text" class="form-control" id="lastnameInput" name="lastnameInput" placeholder="lastname" value="test">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="emailInput">Email</label>
                                <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="email@example.com" value="test@test.com">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="passwordInput">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Password" value="">
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
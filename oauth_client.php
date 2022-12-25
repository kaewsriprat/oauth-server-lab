<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="nav justify-content-center  ">
            <a class="nav-link" href="dashboard.php" aria-current="page">Dashboard</a>
            <a class="nav-link active" href="oauth_client.php">OAuth</a>
            <a class="nav-link" href="profile.php">Profile</a>
            <a class="nav-link" href="logout.php">Logout</a>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <h1>OAuth</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <div class="row">
                                <div class="col-6">
                                    <h3>OAuth Client</h3>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <button class="btn btn-success">Add New</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        include "connection.php";
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM oauth_clients WHERE user_id = '$user_id'";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute(['user_id' => $user_id]);
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $conn = null;
                        ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <?php
                                        foreach ($result as $key => $value) {
                                            echo "<th scope='col'>$key</th>";
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($result as $key => $value) {
                                        echo "<td>$value</td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!-- bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
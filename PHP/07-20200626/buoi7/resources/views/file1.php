<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM aptech_php_23.customers";
    $sqlResult = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table  table-bordered table-dark text-center">
                    <thead class=" text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($sqlResult) <=0){
                         echo "0 results";
                        } else {                      
                        while($row = mysqli_fetch_assoc($sqlResult)){ ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['fullname']?></td>
                                <td><?php echo $row['email']?></td>
                            </tr>
                           <?php } ?>
                       <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php mysqli_close($conn);?>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS BANK</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark" style="background-color:#dc3545">
    <div class="container-fluid px-4">
            <a class="navbar-brand" href="#"><img src="logos/tsf.png" alt="Bank" width="60" height="60">THE SPARKS BANK </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-8 mb-lg-0 ms-auto">
                    <li class="nav-item py-3 px-3">
                        <a class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3 px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="money.php">View Customers</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3 px-3">
                        <a class="nav-link " href="https://www.thesparksfoundationsingapore.org/">Contact Us</a>
                    </li>
                    <li class="nav-item py-3 px-3">
                        <a class="nav-link" href="https://internship.thesparksfoundation.info/">About</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<class class="welcome">
        <h2><img src="logos/transaction-history.webp" alt="Bank" width="100" height="80">&nbsp;<strong>Transaction History</strong>
        </h2>
    </class>
 
        <!-- options -->
<div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
    <a href="money.php"><button type="button" class="btn btn-lg mb-3 bg-danger" style="border-radius:30px; color:white">Click Here to Transfer Money</button></a>
</div>


<!-- Table -->
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'connect.php';

$sql ="SELECT * FROM transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
}

        ?>
        </tbody>
    </table>

    </div>

    <div class="foot">
        <footer class="text-center text-lg-start">

            <div class="text-center p-3" style="margin-top:30px">
                <font color="white"><p>© 2022 Made by Ashtral Lorien Goveas</p></font>
                <a href="https://www.thesparksfoundationsingapore.org/" style="text-decoration:none" target="_blank"><font color="white">The Sparks
                    Foundation</font></a>
            </div>
        </footer>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>
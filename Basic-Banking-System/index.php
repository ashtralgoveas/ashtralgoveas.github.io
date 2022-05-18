<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>THE SPARKS BANK</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

    <nav class="navbar py-1 navbar-expand-lg navbar-dark" style="background-color:#dc3545">
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
            <h2>THE SPARKS BANK
                <div style="font-size:20px">A Bank for Tomorrow!!</div>
            </h2>
    </class>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" style="color:black">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="background/ba.webp" height="550" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="background/s.jpg" height="550" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="background/bank.webp" height="550" class="d-block w-100" alt="...">

            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div class="foot">
        <footer class="text-center text-lg-start">

            <div class="text-center p-3">
                <font color="white"><p>© 2022 Made by Ashtral Lorien Goveas</p></font>
                <a href="https://www.thesparksfoundationsingapore.org/" style="text-decoration:none" target="_blank"><font color="white">The Sparks
                    Foundation</font></a>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
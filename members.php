<?php 

    include'connect.php';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL</title>
    <link rel="stylesheet" href="style.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

</head>

<body>

    <div class="con mb-5 pb-5">
        <header>
            

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="index.html" class="navbar-brand" href="#"><span>TRA</span>V<span>EL</span></a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <div class="icons">
                                <i class="fas fa-user" style=" color: aliceblue; display: flex; align-items: center; font-size: 1.6rem; padding: 6px;" id="login-btn" aria-hidden="true"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>

        </header>



    </div>

    <div class="container">
    <h1 class="mt-5 py-5 text-center fw-bolder ">List of your <span class="text-warning">travel Partners</span></h1>
        <table class="table table-dark table-striped table-hover">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Email</th>
                    <th scope="col">Package</th>

                </tr>
            </thead>



            <tbody>
                <?php 

                
                    
                    
                    $sql = "SELECT * FROM members";

                    $result = mysqli_query($conn, $sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){

                            $id=$row['id'];
                            $name=$row['name'];
                            $location=$row['location'];
                            $email=$row['email'];
                            $packages = $row['packages'];
                            echo "
                            
                            <tr>
                            <th >$id</th>
                            <td> $name </td>
                            <td> $location </td>
                            <td> $email </td>
                            <td> $packages </td>
                            </tr>";
                        }
                    }



                
                
                ?>

                

            </tbody>
        </table>


    </div>

    <footer id="contact" class="mt-5 pt-5">
        <div class="container-fluid ">
            <div class="body">
                <div class="row  row-cols-1 row-cols-md-2 row-cols-lg-4 text-center g-3">

                    <div class="fst">
                        <div class="fst-body">
                            <h4 class="mb-5">Address:</h4>
                            <h5>Dhaka Office:</h5>
                            <p> <i>Gazipur, Bangladesh</i></p>
                            <h5>Miami Office:</h5>
                            <p><i>Miami, USA</i></p>
                            <h4>Ankara Office:</h4>
                            <p> <i>Ankara, Turkey</i></p>
                        </div>
                        <hr>
                    </div>


                    <div class="snd">
                        <div class="fst-body pb-3">
                            <h4 class="mb-5">Contacts:</h4>
                            <h5>Phone:</h5>
                            <p> <i>+88013212323123 <br> +99234234233</i></p>
                            <h5>Email:</h5>
                            <p><i>itsforidul@gmail.com <br> foridul15-1116@diu.edu.bd</i></p>

                        </div>

                    </div>

                    <div class="trd">
                        <div class="trd-body">
                            <hr>
                            <h4 class="mb-5">Social media:</h4>
                            <a href="#"><i class="fab fa-facebook fa-3x text-white"></i></a> <br>
                            <a href="#"><i class="fab fa-twitter fa-3x text-white"></i></a> <br>
                            <a href="#"><i class="fab fa-youtube fa-3x text-white"></i></a> <br>
                            <a href="#"><i class="fab fa-linkedin fa-3x text-white"></i></a>
                        </div>
                    </div>

                    <div class="frt">
                        <div class="frt-body">
                            <hr>
                            <h4 class="mb-5">Page Navigation:</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Ratings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-bar ">
                        <div class="container col-12 text-right bg-dark py-1">
                            <a href="#"><i class=" fas fa-arrow-up text-white fa-2x"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src="header.js"></script>
    <script src="footer.js"></script>



</body>

</html>
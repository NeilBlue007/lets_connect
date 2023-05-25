<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""><i class="fas fa-bars"></i></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact Us</a>
                            </li>
                        </ul>
            </nav>
        </div>

        <div class="row">
            <section class="contact">
                <div class="row text-center part_1 py-5">
                    <div class="col-12">
                        <h4>STAY IN TOUCH</h4>
                        <h2>Contact us</h2>
                    </div>
                </div>
                <div class="row contact_info text-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div>
                            <i class="fas fa-mobile-alt"></i>
                            <p>Phone: (415) 124-5678</p>
                            <p>Fax: (412) 123-8290</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Road 7, Block# B</p>
                        <p>Bashundhara RA</p>
                        <p>Dhaka</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="margin: auto;">
                        <i class="far fa-envelope"></i>
                        <p>support@letsconnect.com</p>
                    </div>
                </div>



                <form action="./send_msg.php" method="POST">
                    <div class="row ">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="NAME*" style="color: white;" required  name="x1">
                            <input type="email" class="form-control" placeholder="EMAIL*" style="color: white;" required  name="x2">
                            <input type="text" class="form-control" placeholder="SUBJECT" style="color: white;"name="x3">
                        </div>
                        <div class="col-md-6 text-end">
                            <textarea name="msgg" class="form-control" id="" cols="30" rows="7" 
                                placeholder="MESSAGE*" style="color: white;" required name="msgg" ></textarea>
                            
                        </div>
                    </div>
                    <button class='btn btn-primary mb-5' type="submit">SEND MESSAGE</button>
                </form>

            </section>
        </div>
    </div>


   
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="logos">
                         <i class="fas fa-basketball-ball"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <p>Copyright © 2023 Let's Connect All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Haven</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
</head>
<body>
    <?php if (!isset($_SESSION['User'])): ?>
    <div class="container-fluid info p-1" id="top-icons">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
                <h2 class="primary-color p-2">Burger Haven</h2>
                <div class="info-icons p-2">
                    <a href="" class="mr-3 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="" class="mr-3 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="" class="mr-3 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="" class="mr-3 primary-color"><i class="fab fa-yelp fa-2x"></i></a>
                </div>
                <a href="php\logout.php?logout" class="btn main-btn mr-4">Log In</a>
            </div>
        </div>
    </div>
    <?php endif ?>
    
    <?php if (isset($_SESSION['User'])): ?>
    <div class="container-fluid info p-1" id="top-icons">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
                <h2 class="primary-color p-2">Burger Haven</h2>
                <div class="info-icons p-2">
                    <a href="" class="mr-3 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="" class="mr-3 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="" class="mr-3 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="" class="mr-3 primary-color"><i class="fab fa-yelp fa-2x"></i></a>
                </div>
                <a href="php\logout.php?logout" class="btn main-btn mr-4">Log Out</a>
            </div>
        </div>
    </div>
    <?php endif ?>

    <div id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <h2 class="font-weight-bold">Get the taste of a lifetime</h2>
            </div>
            <div class="actions">
                <a href="#about" class="btn-get-started bg-primary mr-4">About Us</a>
                <a href="#menu" class="btn-get-started bg-primary">View Menu</a>
            </div>
            <a href="#about" class="header-link primary-color"><i class="fas fa-arrow-down"></i></a>
        </div>
    </div>  

    <nav class="navbar navbar-expand-lg">
        <h2 href="#" class="navbar-brand">Burger Haven</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <div class ="toggler-btn">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
        </div>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#team" class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a href="#special-items" class="nav-link">Special Items</a>
                </li>
                <li class="nav-item">
                    <a href="#menu" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#reviews" class="nav-link">Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="#reservations" class="nav-link">Reservations</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        <?php if (isset($_SESSION['User'])): ?>
            <form class = "form-inline d-lg-block mr-5">
            <a href="order.php" class="btn nav-btn text-capitalize" role = "button">
                order online
            </a>
            </form>
        <?php endif ?>   
       
    </nav>

    <section class="about py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-md-6 my-5">
                    <h2 style="font-size: 36px;">Welcome to our restaurant</h2>
                    <p class="my-4 text-muted w-75">
                        We are an international fast food chain operational since 2010. 
                        We deal in excellent products with only the freshest of ingredients. 
                        Our first priority is the customer.
                    </p>
                </div>
                <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
                    <div class="about-img__container">
                        <img src="images\about.jpg" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </section>
    
    <section class="chef my-5" id="team">
        <div class="container">
            <h2 class="text-center mb-4">Meet The Team</h2>
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <img src="images\chef2.jpg" alt="chef" class="chef-img">
                        <div class="card-title-wrap">
                            <span class="card-title">Chef Gordon</span>
                            <br>
                            <span class="card-text">Head Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <img src="images\chef2.jpg" alt="chef2" class="chef-img">
                        <div class="card-title-wrap">
                            <span class="card-title">Chef Ahmad</span>
                            <br>
                            <span class="card-text">Sous Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <img src="images\chef2.jpg" alt="chef3" class="chef-img">
                        <div class="card-title-wrap">
                            <span class="card-title">Chef Khan</span>
                            <br>
                            <span class="card-text">Butcher Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="card card-block">
                        <img src="images\chef2.jpg" alt="chef4" class="chef-img">
                        <div class="card-title-wrap">
                            <span class="card-title">Chef Usman</span>
                            <br>
                            <span class="card-text">Pantry Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <section class="py-5" id="special-items">
        <div class="container my-5">
            <h4 id="cheftext">Chef's specialties</h4>
            <div class="row parent-container">
                <div class="col-10 mx-auto col-sm-4 col-lg-3 my-2">
                     <div class="item-container">
                        <img src="img/h1.jpg" class = "img-fluid img-thumbnail item-img" alt="menu-item">
                        <a href="img/h1.jpg"><h1 class="text-uppercase text-center item-link px-3">Biryani</h1> </a>
                    </div>
                </div>
                <div class="col-10 mx-auto col-sm-4 col-lg-3 my-2">
                    <div class="item-container">
                       <img src="img/bbq.jpg" class = "img-fluid img-thumbnail item-img" alt="menu-item">
                       <a href="img/bbq.jpg"><h1 class="text-uppercase text-center item-link px-3">BBQ</h1> </a>
                   </div>
               </div>
               <div class="col-10 mx-auto col-sm-4 col-lg-3 my-2">
                <div class="item-container">
                   <img src="img/steak.jpg" class = "img-fluid img-thumbnail item-img" alt="menu-item">
                   <a href="img/steak.jpg"><h1 class="text-uppercase text-center item-link px-3">Steak</h1> </a>
                </div>
           </div>
            </div>
            <div class="row parent-container" style = "margin-top: 30px;">
                <div class="col-10 mx-auto col-sm-4 col-lg-3 my-2">
                     <div class="item-container">
                        <img src="img/burger.jpg" class = "img-fluid img-thumbnail item-img" alt="menu-item">
                        <a href="img/burger.jpg"><h1 class="text-uppercase text-center item-link px-3">Burger</h1> </a>
                    </div>
                </div>
                <div class="col-10 mx-auto col-sm-4 col-lg-3 my-2">
                    <div class="item-container">
                       <img src="img/pizza.jpg" class = "img-fluid img-thumbnail item-img" alt="menu-item">
                       <a href="img/pizza.jpg"><h1 class="text-uppercase text-center item-link px-3">Pizza</h1> </a>
                   </div>
               </div>
               <div class="col-10 mx-auto col-sm-4 col-lg-3 my-2">
                <div class="item-container">
                   <img src="img/shawarma.jpg" class = "img-fluid img-thumbnail item-img" alt="menu-item">
                   <a href="img/shawarma.jpg"><h1 class="text-uppercase text-center item-link px-3">Shawarma</h1> </a>
                </div>
           </div>
            </div>
        </div>
    </section>
    
    <section id="menu" class="py-5 my-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-2 mt-4" style="color: lightsteelblue;"><strong><em>Burgers</em> (With Fires & Coleslaw)</strong></h3>
                        </div>
                    </div>
                    <div class="single-item d-flex justify-content-between my-2 py-2">
                        <div class="single-item-text">
                            <h4 class="text-light">Chesseburger</h4>
                            <p class="text-light">Cheeseburger with one slice of cheese and single patty.</p>
                        </div>
                        <div class="single-item-price align-self-center">
                            <h4 class="text-light" style= "padding-right: 10px">300/-</h4>
                        </div>
                    </div>
                    <div class="single-item d-flex justify-content-between my-2 py-2 special">
                        <div class="single-item-text">
                            <h4 class="text-light">Double Decker</h4>
                            <p class="text-light">Cheeseburger with double cheese and double patty.</p>
                        </div>
                        <div class="single-item-price align-self-center">
                            <h4 class="text-light" style= "padding-right: 10px">500/-</h4>
                        </div>
                    </div>
                <div class="single-item d-flex justify-content-between my-2 py-2">
                    <div class="single-item-text">
                        <h4 class="text-light">Chicken Tikka Burger</h4>
                        <p class="text-light">Tikka burger with melted cheese on top.</p>
                    </div>
                    <div class="single-item-price align-self-center">
                        <h4 class="text-light" style= "padding-right: 10px">500/-</h4>
                    </div>
                </div>
                <div class="single-item d-flex justify-content-between my-2 py-2 special">
                    <div class="single-item-text">
                        <h4 class="text-light">Spicy Chicken Burger</h4>
                        <p class="text-light">Burger with spicy chicken and mayo dressing.</p>
                    </div>
                    <div class="single-item-price align-self-center">
                        <h4 class="text-light" style= "padding-right: 10px">400/-</h4>
                    </div>
                </div>
                <div class="single-item d-flex justify-content-between my-2 py-2 special">
                    <div class="single-item-text">
                        <h4 class="text-light">Fish Burger</h4>
                        <p class="text-light">Crispy fried fish fillet topped with spicy garlic chilli sauce.</p>
                    </div>
                    <div class="single-item-price align-self-center">
                        <h4 class="text-light" style= "padding-right: 10px">500/-</h4>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-2 mt-4" style="color: lightsteelblue;"><strong><em>Pizzas</em></strong> (With Drink)</h3>
                    </div>
                </div>
                <div class="single-item d-flex justify-content-between my-2 py-2">
                    <div class="single-item-text">
                        <h4 class="text-light">Chicken Tikka</h4>
                        <p class="text-light">A specially developed recipe for Pakistan topped with spicy chicken tikka & onions.</p>
                    </div>
                    <div class="single-item-price align-self-center">
                        <h4 class="text-light" style= "padding-right: 10px">1300/-</h4>
                    </div>
                </div>
                <div class="single-item d-flex justify-content-between my-2 py-2 special">
                    <div class="single-item-text">
                        <h4 class="text-light">Creamy Melt</h4>
                        <p class="text-light">Creamy goodness with chicken chunks, onions and bell pepper for your taste buds.</p>
                    </div>
                    <div class="single-item-price align-self-center">
                        <h4 class="text-light" style= "padding-right: 10px">1500/-</h4>
                    </div>
                </div>
            <div class="row">
                <div class="col">
                    <h3 class="mb-2" style="color: lightsteelblue;"><strong><em>Steaks</em></strong> (With Fries & Veggies)</h3>
                </div>
            </div>
            <div class="single-item d-flex justify-content-between my-2 py-2">
                <div class="single-item-text">
                    <h4 class="text-light">Herb Steak</h4>
                    <p class="text-light">Grilled fillet with chilli herb cream sauce & mushrooms.</p>
                </div>
                <div class="single-item-price align-self-center">
                    <h4 class="text-light" style= "padding-right: 10px">999/-</h4>
                </div>
            </div>
            <div class="single-item d-flex justify-content-between my-2 py-2 special">
                <div class="single-item-text">
                    <h4 class="text-light">Mushroom Steak</h4>
                    <p class="text-light">Grilled filled served with mushroom cream sauce.</p>
                </div>
                <div class="single-item-price align-self-center">
                    <h4 class="text-light" style= "padding-right: 10px">999/-</h4>
                </div>
            </div>
            </div>
        </div>
        <!-- <div class="d-flex justify-content-center pb-4">
            <button class="btn text-light menubtn" style="background-color: #0066B2;">View Full Menu</button>
        </div> -->
    </section>

    <div class="divider" style="margin-bottom: 50px;"></div>

    <section id="reviews" class="py-10">
        <h4 id="cheftext">Here's what some of our customers think of us!</h4>
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                            <div class="align-self-center ml-3">
                                <img src="images\logo.png" alt="" class="rounded-circle review-img">   
                            </div>
                            <div class="review-text px-5">
                                <h2 class="text-capitalize mb-3 ">customer name</h2>
                                <p class="lead">Lorem ipsum dolor sit amet consectetur,
                                     adipisicing elit. Earum, perferendis!</p>
                                </div>     
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                                <div class="align-self-center ml-3">
                                    <img src="images\logo.png" alt="" class="rounded-circle review-img">   
                                </div>
                                <div class="review-text px-5">
                                    <h2 class="text-capitalize mb-3">customer name</h2>
                                    <p class="lead">Lorem ipsum dolor sit amet consectetur,
                                         adipisicing elit. Earum, perferendis!</p>
                                    </div>     
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                                    <div class="align-self-center ml-3">
                                        <img src="images\logo.png" alt="" class="rounded-circle review-img">   
                                    </div>
                                    <div class="review-text px-5">
                                        <h2 class="text-capitalize mb-3">customer name</h2>
                                        <p class="lead">Lorem ipsum dolor sit amet consectetur,
                                             adipisicing elit. Earum, perferendis!</p>
                                        </div>     
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#slider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>
    <?php if (isset($_SESSION['User'])): ?>
    <div class="divider" style="margin-bottom: 50px; margin-top: 50px;"></div>
    <section class="reservations" id="reservations">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 make-reservation p-4 px-md-5 pb-md-5">
                    <div class="heading-section mb-5 text-center">
                        <h2 class="mb-4">Make A Reservation</h2>
                    </div>
                    <form method="POST" action="php/reservation.php" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name <span style='color: #FF0000;'>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                    <small style="color: white;">Name must contain letters only </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                    <small style="color: white;">Email must be of format (abc@gmail.com)</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone <span style='color: #FF0000;'>*</span></label>
                                    <input type="text" name="phone" id="phone" class="form-control" required>
                                    <small style="color: white;">Phone must be of format (03xxxxxxxxx)</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date <span style='color: #FF0000;'>*</span></label>
                                    <input type="date" name="date" id="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time <span style='color: #FF0000;'>*</span></label>
                                    <input type="time" name="time" id="time" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Guests <span style='color: #FF0000;'>*</span></label>
                                    <input type="number" name="guests" id="guests" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <button name="submit" type="submit" id="submit" class="btn btn-dark py-3 px-5">Reserve Table</button>
                                    <h3 class="text-light mt-4" id="result"></h3>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>
    <script type="text/javascript">
        $("#submit").click(function(event) {
            event.preventDefault()
            var name = $("#name").val()
            var email = $("#email").val()
            var phone = $("#phone").val()
            var date = $("#date").val()
            var time = $("#time").val()
            var guests = $("#guests").val()
            
            if (name == '' || phone == '' || date == '' || time == '' || guests == '') {
                event.preventDefault()
                alert('Please fill all the fields.')
            }

            var nameRegex = new RegExp('[a-zA-Z]{3,}')
            var phoneRegex = new RegExp('[0][3]{1}[0-9]{2}[0-9]{7}')
            if (nameRegex.test(name) === false || phoneRegex.test(phone) === false) {
                event.preventDefault()
                alert('Please fill all the fields correctly.')
            }

            else {
                event.preventDefault()
                $.ajax({
                    type: 'POST', 
                    url: 'php/reservation.php',
                    data: {name: name, email: email, phone: phone, date: date, time: time, guests: guests}, 
                    success: function(result) {
                        $('#result').text(result) 
                        setTimeout(() => {
                            $('#result').text('')
                            $("#name").val('')
                            $("#email").val('')
                            $("#phone").val('')
                            $("#date").val('')
                            $("#time").val('')
                            $("#guests").val('')
                        }, 5000);            
                    }
                })
            }
        })
    </script>

    <div class="divider" style="margin-bottom: 50px; margin-top: 50px;"></div>

    <section id="contact">
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-md-6 my-3 ">
                    <div class="embed-responsive embed-responsive-21by9 height-60">
                        <iframe class= "embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53879.07322770732!2d74.09799561217865!3d32.434099848938295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f18c630e857ab%3A0x49fed5d4e09526c!2sWazirabad%2C%20Gujranwala%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1596136128358!5m2!1sen!2s" 
                        width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-6 my-3 align-self-center">
                    <div class="card text-center" >
                        <div class="card-header">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="php/queries.php">
                                <div class="input-group my-3">
                                    <input type="text" id="queryName" name="name" class="form-control form-control-lg" placeholder="Name" required>
                                </div>
                                <div class="input-group my-3">
                                    <input type="email" id = "queryEmail" name="email" class="form-control form-control-lg" placeholder="Email" required>
                                </div>
                                <div class="input-group my-3">
                                    <textarea name="query" id="query" cols="100" rows="5" placeholder="Query" style="padding-left: 15px; font-size: 20px" required></textarea>
                                </div>
                                <button type = "submit" class = "btn btn-block btn-lg text-uppercase" id="queryBtn">
                                    <i class="far fa-hand-point-right mr-2"></i>Submit Query</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $('#queryBtn').click(function(e) {
            e.preventDefault()
            var queryName = $('#queryName').val()
            var queryEmail = $('#queryEmail').val()
            var query = $('#query').val()
            
            if (queryName == '' || queryEmail == '' || query == '') {
                e.preventDefault()
                alert('Fields cannot be empty. Please fill in the fields')
            }

            var queryRegex = new RegExp('[a-zA-Z]{3,}')
            if (queryRegex.test(queryName) === false) {
                e.preventDefault()
                alert('Name must contain letters only')
            }
            else {
                $.ajax({
                    url: 'php/queries.php',
                    type: 'POST',
                    data: {queryName: queryName, queryEmail: queryEmail, query: query},
                    success: function(result) {
                        alert(result)
                        setTimeout(() => {
                            $('#queryName').val('')
                            $('#queryEmail').val('')
                            $('#query').val('')
                        }, 5000);
                    }
                })
            }
        })
    </script>
    
    <div class="container-fluid info p-3" id="top-icons">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
                <div class="info-icons p-2">
                    <a href="" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="" class="mr-2 primary-color"><i class="fab fa-yelp fa-2x"></i></a>
                </div>
                <h2 class="primary-color p-2 text-upper">Copyright&copy; 2020</h2>
            </div>
        </div>
    </div>

    <a href="#top-icons" id = "back-to-top" class="p-1"><i class="fas fa-arrow-up primary-color fa-3x"></i></a>
    <script src="js/jquery.ripples-min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src = "js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src = "magnific-popup/jquery.magnific-popup.js"></script>
    
</body>
</html>
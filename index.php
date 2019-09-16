<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <!-- title -->
    <title>Hotel Booking</title>
    <!-- bootstap link -->
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    
</head>
<body>
    <!-- main Navigation -->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>MDB</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div class="view">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light align-items-center">
            <!-- Content -->
            <div class="container">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center landingInfo">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>The world is yours</strong></h1>
                <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Just Go</strong></h5>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->
    <main class=" banner">
    <!-- Form validation -->
    <form action="" method="post" class="formContent">
    <!-- form heading -->
        <h1>Hotel Booking Form</h1>
        <h2>First Name:</h2>
        <input type="text" name="firstName" required class="form-control md-form">
        <small id="nameHelp" class="form-text text-muted">We'll never share your Name with anyone else.</small>
        <h2>Last Name:</h2>
       <input type="text" name="lastName" required  class="form-control">
        <small id="lastHelp" class="form-text text-muted">We'll never share your Surname with anyone else.</small>

        <!-- Multiple Hotel selection -->
        <h1>Select your ideal Hotel</h1>
        <select name="hotelSelection" id="hotelSelection">
		    <option>Select hotel</option>
            <option value="signatureLux">Signature Lux Hotel</option>
            <option value="tableBay" >The Table Bay Hotel</option>
            <option value="treeHouse">The Tree House Boutique Hotel</option>
            <option value="greyHotel">The Grey Hotel</option>
        </select>
        <!-- displaying hotel description and image -->
        <div class='hotel-info '>
            <div id='imageOne' class='hotel-image '></div>
            <div class="selectedInfo ">
                <div id='hotel-details' class='hotel-details'></div>
                <div id='hotel-price' class='hotel-details'></div>
                <div id='hotel-rating' class='hotel-details'></div>
                <div id='hotel-describtion' class='hotel-details'></div>
            </div>
        </div>

        <!-- user select date input -->
        <h2>Select your date:</h2>
        <input type="date" name="dateCheckedIn" min= 1 required>
        <input type="date" name="dateCheckedOut" min= 1 required>
         <br/>
         <!-- submit button -->
        <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php
    // getting user input from the form
        if (isset($_POST['submit'])) {
            //storing the input inside a variable
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $hotelSelected = $_POST['hotelSelection'];
            $dateCheckedIn = $_POST['dateCheckedIn'];
            $dateCheckedOut = $_POST['dateCheckedOut'];
            $days_between = ceil(abs(strtotime($dateCheckedOut) - strtotime($dateCheckedIn)) / 86400) + 1;
            $price = 0;
            
            // setting the price for which ever hotel users select
            if ($hotelSelected == "signatureLux" ) {
                $price =  900;
            } else if($hotelSelected == "tableBay" ){
                $price = 1200;
            } else if($hotelSelected == "treeHouse" ){
                $price = 800;
            } else if($hotelSelected == "greyHotel" && $price < 1){
                $price =  750;
            } else {
                echo "Please Select a hotel";
            }
            
            
            //Echo out the results for user selections
            echo '<div class="bookCheckin"> 
                    <p>Name: '. $firstName . '</P>';
            echo "<p>Last Name: " . $lastName ."</br>"; 
            echo "<p>Hotel Selected: " . $hotelSelected .'</P>';
            echo "<p>Date Check In: ". $dateCheckedIn .'</P>'; 
            echo "<p>Date Check Out: ". $dateCheckedOut.'</P>'; 
            echo "<p>Number of Days: ". $days_between.'</P>'; 
            echo "<p>Total Price: ". $price * $days_between; 
            
            // echo "asd: ". $priceOne * $days_between; 
                

        }
        
            
    ?>
    </main>
    <!-- End of form -->
    <!-- Php tags -->

    <!-- scripts -->
    <!-- Main js Scripts -->
    <script src="js/main.js" type='text/javascript' ></script>
    <!-- bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End of scripts -->
</body>
</html>

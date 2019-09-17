<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
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
   <!-- main container -->
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
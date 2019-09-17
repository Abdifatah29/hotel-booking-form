<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- title -->
    <title>Hotel Booking</title>
    <!-- google font for headings -->
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
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
        <h1  class="article__title">Hotel Booking</h1>
        <h2>First Name:</h2>
        <input type="text" name="firstName" required class="inputText" placeholder="Your name...">
        <h2>Last Name:</h2>
       <input type="text" name="lastName" required  class="inputText" placeholder="Your last name...">

       <!-- Multiple Hotel selection -->
        <h1 class="article__title">Select your ideal Hotel</h1>
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
                <div id='hotel-details' class='hotel-details article__title'></div>
                <div id='hotel-price' class='hotel-details article__title'></div>
                <div id='hotel-rating' class='hotel-details article__title'></div>
                <div id='hotel-describtion' class='hotel-details article__content'></div>
            </div>
        </div>
        <!-- user select date input -->
        <h2 class="article__title">Select your date:</h2>
        <input type="date" name="dateCheckedIn" min= 1 required>
        <input type="date" name="dateCheckedOut" min= 1 required>
         <br/>
         <!-- submit button -->
        <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
    </form>
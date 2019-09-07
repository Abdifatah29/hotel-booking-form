<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- title -->
    <title>Hotel Booking</title>
</head>
<body>
    <!-- Form validation -->
    <form action="" method="post">
    <!-- form heading -->
        <h1>Hotel Booking Form</h1>
        <h2>First Name:</h2>
        <input type="text" name="firstName" required>
        <h2>Last Name:</h2>
       <input type="text" name="lastName" required>

        <!-- Multiple Hotel selection -->
        <h1>Select your ideal Hotel</h1>
        <select name="hotelSelection" id="">
            <option value="signature lux">Signature Lux Hotel</option>
            <option value="the table bay ">The Table Bay Hotel</option>
            <option value="the tree house">The Tree House Boutique Hotel</option>
            <option value="the grey hotel">The Grey Hotel</option>
        </select>

        <!-- user select date input -->
        <h2>Select your date:</h2>
        <input type="date" name="selectDays" min= 1 required>
        <input type="date" name="selectDays" min= 1 required>
         <br/>
         <!-- submit button -->
        <button type="submit" name="submit">Submit</button>
    </form>
    <!-- End of form -->
    <!-- Php tags -->
</body>
</html>

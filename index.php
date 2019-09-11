<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
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
        <select name="hotelSelection" id="hotelSelection">
		    <option>Select hotel</option>
            <option value="signatureLux">Signature Lux Hotel</option>
            <option value="tableBay">The Table Bay Hotel</option>
            <option value="treeHouse">The Tree House Boutique Hotel</option>
            <option value="greyHotel">The Grey Hotel</option>
        </select>

        <div class='hotel-info'>
            <div id='hotel-image' class='hotel-image'></div>
            <div id='hotel-details' class='hotel-details'></div>
        </div>

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
    <script type='text/javascript' >
        	let hotels = {
		signatureLux: {
			name: 'Signature Lux Hotel',
			image: 'http://placehold.it/400x400'
		},

		tableBay: {
			name: 'The Table Bay Hotel',
			image: 'http://placehold.it/400x400'
		},

		treeHouse: {
			name: 'The Tree House Boutique Hotel',
			image: 'http://placehold.it/400x400'
		},

		greyHotel: {
			name: 'The Grey Hotelr',
			image: 'http://placehold.it/400x400'
		}
	};

	let hotelSelection = document.getElementById('hotelSelection')
	hotelSelection.addEventListener('change', function() {
		let selectedHotel = hotels[hotelSelection.options[hotelSelection.selectedIndex].value];
		document.getElementById('hotel-image').innerHTML = "<img src=" + selectedHotel.image + "/>";
		document.getElementById('hotel-details').innerHTML = selectedHotel.name;
	});
    </script>
</body>
</html>

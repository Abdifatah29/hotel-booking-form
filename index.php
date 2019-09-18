	<!-- Including external file -->
	<?php include 'inc/header.php';?>
	<?php include 'config/connection.php';?>

	<!-- pushing values via php into the database-->
	
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
			//setting prices to diff hotels
		$hotels = [
			'signatureLux' => 900,
			'tableBay' => 1200,
			'treeHouse' => 800,
			'greyHotel' => 750,
		];
			//asigning variable to prices
		$price = $hotels[$hotelSelected];
			//multiple the total days by price
		$due_amount = $price * $days_between;

		// pushing values via php into the database
		if (isset($_POST['comfirm'])) {
			// check for dups

			$sql = "SELECT * FROM client WHERE first_name = '$firstName' AND last_name = '$lastName' AND hotel_selected = '$hotelSelected'";

			$results = $conn->query($sql);

			if ($results && $results->num_rows > 0) {
				if (isset($_POST['force_insert'])) {

				}else{
					while ($row = $results->fetch_assoc()) {
						//showing user that they have already booked
						echo '<div class="duplicate"><h4 class="text-danger">Seems like you have booked already</h4>'.
						'Name: '. $row['first_name'] . '</br>'. 
						'Last name: '. $row['last_name']. '</br>'.
						'Hotel Booked: '.$row['hotel_selected']. '</br>'.
						'Paid amount '. $row['due_amount'].
						'<h4 class="text-warning">Would you like to proceed?</h4>'.
						"<br>";
						//showing the current booking taking place
						echo '<form style="color:"#f0f8f0" method="POST" class="bookCheckin">'.
						'<input type="hidden" name="firstName" value=' . $firstName. '>'.
						'<input type="hidden" name="lastName" value=' . $lastName. '>'.
						'<input type="hidden" name="dateCheckedIn" value=' . $dateCheckedIn. '>'. 
						'<input type="hidden" name="dateCheckedOut" value=' . $dateCheckedOut. '>'.
						'<input type="hidden" name="hotelSelection" value='. $hotelSelected. '>'.
						'<input type="hidden" name="force_insert" value="1">'.
						'<div class="confirmText">'.
						'<p>Name: '. $firstName . '</P>'.
						'<p>Last Name: ' . $lastName .'</p>'.
						'<p>Hotel Selected: '. $hotelSelected .'</P>'.
						'<p>Date Check In: '. $dateCheckedIn .'</P>'.
						'<p>Date Check Out: '. $dateCheckedOut.'</P>'.
						'<p>Number of Days: '. $days_between.'</P>'.
						'<p>Total Price: '. $due_amount.
						'<input type="hidden" name="submit"> </br>'.
						'<button type="submit"  class="btn btn-primary" name="comfirm">Comfirm</button>'.
						'<button type="cancel"  class="btn btn-danger" name="cancel">Cancel</button>'.
						'</div>'.
						'</form>'.
						'</div>';


						break;
					}

					exit;
				}
			}
			
			// Attempt insert query execution
			$sql = "INSERT INTO client (first_name, last_name, hotel_selected,date_checkin,date_checkout,due_amount) VALUES
			('$firstName', '$lastName', '$hotelSelected', '$dateCheckedIn',' $dateCheckedOut','$due_amount')";

			if(mysqli_query($conn, $sql)){
				echo '<h3 class="text-success">Thank you, Booking was successfully.</h3>';
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
				exit;
			}
			
		// Close connection
			mysqli_close($conn);
		}
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

		//reporting from database and testing for duplicates
		
		
		if (!isset($_POST['comfirm'])) {
			//Echo out the results for user selections
			echo '<form style="color:"#f0f8f0" method="POST" class="bookCheckin">'.
			'<input type="hidden" name="firstName" value=' . $firstName. '>'.
			'<input type="hidden" name="lastName" value=' . $lastName. '>'.
			'<input type="hidden" name="dateCheckedIn" value=' . $dateCheckedIn. '>'. 
			'<input type="hidden" name="dateCheckedOut" value=' . $dateCheckedOut. '>'.
			'<input type="hidden" name="hotelSelection" value='. $hotelSelected. '>'.
			'<div class="comfirmText">'.
			'<h2 class="text-center article__title text-secondary">You almost Done!</h2>'.
			'<p>Name: '. $firstName . '</P>'.
			'<p>Last Name: ' . $lastName .'</p>'.
			'<p>Hotel Selected: '. $hotelSelected .'</P>'.
			'<p>Date Check In: '. $dateCheckedIn .'</P>'.
			'<p>Date Check Out: '. $dateCheckedOut.'</P>'.
			'<p>Number of Days: '. $days_between.'</P>'.
			'<p>Total Price: '. $due_amount.
			'<input type="hidden" name="submit"> </br>'.
			'<button type="submit"  class="btn btn-primary" onclick="asd()" name="comfirm">Comfirm</button>'.
			'</div>'.
			'</form>';
		}
	}
	// canceling the booking
	if(isset($_POST['cancel'])) {
		header('Location: ' . $_SERVER['PHP_SELF']);
		die;
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

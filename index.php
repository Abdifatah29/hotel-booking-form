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
            // Attempt insert query execution
            $sql = "INSERT INTO client (first_name, last_name, hotel_selected,date_checkin,date_checkout,due_amount) VALUES
                    ('$firstName', '$lastName', '$hotelSelected', '$dateCheckedIn',' $dateCheckedOut','$due_amount')";

        if(mysqli_query($conn, $sql)){
            echo "Thank you, Booking was successfully.";
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
            
        if (!isset($_POST['comfirm'])) {
            //Echo out the results for user selections
            echo '<form method="POST" class="bookCheckin">';
            echo '<input type="hidden" name="firstName" value=' . $firstName. '>'; 
            echo '<input type="hidden" name="lastName" value=' . $lastName. '>'; 
            echo '<input type="hidden" name="dateCheckedIn" value=' . $dateCheckedIn. '>'; 
            echo '<input type="hidden" name="dateCheckedOut" value=' . $dateCheckedOut. '>';
            echo '<input type="hidden" name="hotelSelection" value='. $hotelSelected. '>';
            echo '<p>Name: '. $firstName . '</P>';
            echo "<p>Last Name: " . $lastName ."</br>"; 
            echo "<p>Hotel Selected: " . $hotelSelected .'</P>';
            echo "<p>Date Check In: ". $dateCheckedIn .'</P>'; 
            echo "<p>Date Check Out: ". $dateCheckedOut.'</P>'; 
            echo "<p>Number of Days: ". $days_between.'</P>'; 
            echo "<p>Total Price: ". $due_amount; 
            echo '<input type="hidden" name="submit">';
            echo '<button type="submit"  class="btn btn-primary" name="comfirm">Comfirm</button>';
            echo '</form>';
            }
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

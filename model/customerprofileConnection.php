<?php 
	include('Connection.php');

	$firstname=$lastname=$username=$gender=$email=$mobileno=$address1=$country="";

        $username = $_SESSION['username'];
        $findresult = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if($res = mysqli_fetch_array($findresult))
        {
            $username = $res['username'];
            $firstname = $res['firstname'];
            $lastname = $res['lastname'];
            $gender = $res['gender'];
            $email = $res['email'];
            $mobileno = $res['mobileno'];
            $address1 = $res['address1'];
            $country = $res['country'];
        }

    echo "<h3>First Name : ".$firstname." </h3>".
         "<h3> Last Name :".$lastname."</h3>".
         "<h3>User Name : ".$username." </h3>".
         "<h3>Gender : ".$gender." </h3>".
         "<h3>Email : ".$email." </h3>".
         "<h3>Mobile Number : ".$mobileno." </h3>".
         "<h3>Address : ".$address1." </h3>".
         "<h3>Country : ".$country." </h3>";


 ?>
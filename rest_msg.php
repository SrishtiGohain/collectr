<?php
session_start();

if(!isset($_SESSION['rusername'])){
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--FONT FAMILY-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <!--EXT CSS-->
    <link rel="stylesheet" href="css/styles.css">

    <title>COLLECTR.</title>
    <style>
        html {
            scroll-behaviour: smooth !important;
        }

        td {
            padding: 1em;
        }

        #addr-val,
        #email-val,
        #ph-val,
        #ph2-val {
            word-break: break-all;
        }
        input{
            max-width: 25vw;
            margin-right: 8px;
        }
        .head {
            font-weight: 500;
        }

        .container {
           position: relative;
           width: 100%;
         }
         


    </style>
</head>

<?php

include 'dbcon.php';

if(isset($_POST['sendmsg'])){
    
    $fromMsg = $_POST['fromMsg'];
    $toMsg = $_POST['toMsg'];
    $eventtype = $_POST['eventtype'];
    $eventdesc = $_POST['eventdesc'];

    $query = "INSERT INTO messages(fromF, toF, eventtype, eventdesc) VALUES ('$fromMsg','$toMsg','$eventtype','$eventdesc')";
    $que = mysqli_query($conn, $query);
   
    
    if($que){
        echo "<script>alert('Sent Successfully')</script>";
    }
    else{
        echo "<script>alert('Unable to Send');</script>";
    }
}

?>
<!-- <body style="background-color: #d6e3f0; font-family: 'Noto Sans', sans-serif;">  -->

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto" >
            <!--include side nav-->
            <?php include 'components/rest_nav.php'; ?>

            <div class="col d-flex flex-column h-100" style="color: #dae5ed; background-color:#d6e3f0;">
                <main class="row">
                    <div class="col py-4" style="color: #063251;">

                    <div class="row welc">
                        <div class="col"><h3 class="fontfix">
                                    <strong>WELCOME</strong>
                                    </h3>  
                                    <strong>HOSTEL MESS - 
                                    <?php echo $_SESSION['rusername']; ?>!</strong></div>
                    </div>
                    <!-- <div style="width:40%;margin:auto" class="bigbox">
	                      <br>
                              <img src="../img/message.png" alt="message" class="msg-img"/>
	                      <br>
                              <form name="s" action="msg.php" method="POST" onsubmit="return valid()" class="a-msg auth-form">
                                  <label for="name">User Name</label>
                                  <input type="text" name="a2" id="a2" > <br>
                                  <label for="email">User Email</label>
                                  <input type="text" name="a1" id="a1" > <br>
                                  <label for="msg">Send Message</label>
                                  <textarea name="a3" rows="5" id="a3" cols="40"></textarea> <br>
			                      <button type="submit" name="s" class="c-btn">SEND </button>
	                      	</form>
                          </div> -->

                          <center>
                          <div class="bigbox" style="width:60%;">
                    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                                    <div style="color:  #063251; " ><br><h4 class="fontfix"><strong>Send A Message and Reach Out:</strong></h4></div> 
                                    <br>

                                    
                    <label style="color:  #063251; " for="fromMsg">FROM (Mess Name) :</label><br>
                    <input class="reg-input" type="text" id="fromMsg" name="fromMsg" required style="border:none;"><br><br>

                    <label style="color:  #063251; " for="toMsg">TO (NGO Name) :</label><br>
                    <input class="reg-input" type="text" id="toMsg" name="toMsg" required style="border:none;"><br><br>

                    <label style="color:  #063251; " for="eventtype">Event Type:</label><br>
                    <select class="reg-input" id="eventtype" name="eventtype" required style="border:none;">
                    <option value="DonationDrive">Donation Drive</option>
                    <option value="CleanlinessCampaign">Cleanliness Campaign</option>
                    <option value="NGOVisit">NGO Visit and Interaction</option>
                    <option value="Other">Other</option>
                    </select><br><br>

                    <label style="color:  #063251; " for="eventdesc">About The Event:</label><br>
                    <textarea type="text" rows="10" cols="40" class="reg-input" id="eventdesc" name="eventdesc" required style="border:none;"></textarea><br><br>

                    <button class="btn btn-secondary bigbox" type="submit" name="sendmsg">SUBMIT</button><br> <br>

                    </form>
        </div>
                    </center>

                          
                  </div>
                </main>
                              </div>
    
                
    </div>
    <footer class="row bg-dark text-white text-center p-3 mt-auto">
                    <div class="col">Developed by <u>Srishti Gohain</u> & <u>Archisha Sharma</u></div>
                </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </body>
</html>
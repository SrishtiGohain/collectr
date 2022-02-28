<?php
session_start();

if(!isset($_SESSION['username'])){
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

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
   border-radius:8px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
    </style>
</head>

<body style="background-color:  #d6e3f0; ">

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
            <!--include side nav-->
            <?php include 'components/ngo_nav.php'; ?>

            <div class="col d-flex flex-column h-100">
                <main class="row">
                    <div class="col py-4" style="color: #063251;">


                        <div class="row welc">
                            <div class="col">
                              <div style="color: #063251; " >

                            
                             <h3 class="fontfix">
                             <strong>WELCOME</strong>
                             </h3>
                             <strong>NGO - 
                             <?php echo $_SESSION['username']; ?> !</strong>
                            </div>
                            </div>

                            
                        </div>

                        <table style="padding: 20px;">

                    <tr style="margin-left: 20px;">

                    <?php
                    include 'dbcon.php';
                    $rest = $_SESSION['rid'];
                    $query = "SELECT * FROM rest_details";
                    $execute = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($execute))
                    {
                      ?>

                      <td>

                    <div class="bigbox " style="width: 100%;">
  
                      <div class="container">
                            <img src="images/messpic.png"  class="image"  >
                            <div class="middle">
                               <!-- <div class="text">John Doe</div> -->
                                  <button class="btn btn-hero bigbox text" id="btn" onclick="window.location.href = 'ngo_msg.php';">
                                       Reach Out
                                    </button>
                             </div>
                      </div>
                    
                      <div  style="text-align: center;padding: 10px 20px;" >
                            <p style="color: #063251;"> <br>
                            <strong>
                               MESS NAME :
                                <?php
                                echo $row['rname'];
                                ?>
                                <br>
                                EMAIL:
                                <?php echo $row['remail'];?> <br>
                                ADDRESS :
                                <?php
                                echo $row['raddress'];
                                ?><br>
                                CONTACT :
                                <?php
                                echo $row['rphno'];
                                 ?> 
                            </strong>
                            </p>
                      </div>
                    </div>

                    </td>

                    
                <?php } ?>

                </tr>
                </table>
                        

                        
                    </div>
                  </div>
                </div>
                </main>
                <footer class="row bg-dark text-white text-center p-3 mt-auto">
                    <div class="col"> Developed by <u>Archisha Sharma</u> & <u>Srishti Gohain</u> </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </body>
</html>
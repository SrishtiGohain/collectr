<?php
session_start();

if(isset($_SESSION['username'])){
    header('location:ngo_viewitem.php');
}

if(isset($_SESSION['rusername'])){
    header('location:rest_additem.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        html{
            scroll-behaviour:smooth!important;
        }
        .reg-input{
            width: 40vw!important;
            padding: 0.5em;
        }
    </style>
</head>

<!-- <body style="background-color: white;font-family: 'Noto Sans', sans-serif;"> -->

<?php
    include 'dbcon.php';

    if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);
        $user = $_POST['user-type'];

        if($user == 'NGO'){
            $email_check = " SELECT * FROM ngo_details WHERE email='$email' ";
            $query = mysqli_query($conn, $email_check);

            $email_cnt = mysqli_num_rows($query);

            if($email_cnt){
                $email_pass = mysqli_fetch_assoc($query);
                $db_pass = $email_pass['pass'];
                $pass_decode = password_verify($pass, $db_pass);
                if($pass_decode){
                    $_SESSION['username'] = $email_pass['name'];
                    $_SESSION['id'] = $email_pass['id'];
                    ?>
                        <script>
                            alert("Login successful")
                            location.replace("ngo_viewitem.php")
                        </script>
                    <?php
                }
                else{
                     ?>
                        <script>
                            alert("Incorrect Password")
                        </script>
                    <?php
                }
            }
            else{
                ?>
                    <script>
                        alert("Invalid Email")
                    </script>
                <?php
            }
        }
        else{
            $email_check = " SELECT * FROM rest_details WHERE remail='$email' ";
            $query = mysqli_query($conn, $email_check);

            $email_cnt = mysqli_num_rows($query);

            if($email_cnt){
                $email_pass = mysqli_fetch_assoc($query);
                $db_pass = $email_pass['rpass'];
                $pass_decode = password_verify($pass, $db_pass);
                if($pass_decode){
                    $_SESSION['rusername'] = $email_pass['rname'];
                    $_SESSION['rid'] = $email_pass['rid'];
                    ?>
                        <script>
                            alert("Login successful")
                            location.replace("rest_additem.php")
                        </script>
                    <?php
                }
                else{
                    ?>
                        <script>
                            alert("Incorrect Password")
                        </script>
                    <?php
                }
            }
            else{
                ?>
                    <script>
                        alert("Invalid Email")
                    </script>
                <?php
            }

        }
        
    }
?>

    <!--NAVBAR-->
    <?php include 'components/nav.php'; ?>
    
    <div class="card mx-auto my-sm-4 bigbox" style="width: 60vw;">
    <div style="background-color: #dae5ed; " >
        <img class="card-img-top" src="images/loginBG.png" alt="Card image cap">
        
        <div class="card-body">
            
            <div class="text-color">
            <center><h5 class="card-title"><b>LOGIN</b></h5>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="email">Registered email:</label><br>
                <input class="reg-input" type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ex: name@example.com" required style="border:none;"><br><br>
                <label for="pass">Password:</label><br>
                <input class="reg-input" type="password" id="pass" name="pass" required style="border:none;"><br><br>
                <label for="user-type">User Type:</label><br>
                <select class="reg-input" id="usrtype" name="user-type" required style="border:none;">
                    <option value="Restaurant">Hostel Mess</option>
                    <option value="NGO">NGO</option>
                </select><br><br>
                <button class="btn btn-secondary bigbox" type="submit" name="login">LOGIN</button><br><br>
                <a href="pass-reset.php">Forgot Password?</a>
            </form>
            </center>
        </div>   
        </div>
    </div>
</div>


    <!--FOOTER-->
    <?php include 'components/footer.php'; ?>

</body>
</html>
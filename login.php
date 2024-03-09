<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdullah Website</title>


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">


</head>


<body>
    
    <header class="header2">
        <a href="#" class="logo2">Mj Website.</a>

        <nav class="navbar2">
            <a href="index.php">Home</a>
            <a href="about.php">About Me</a>
            <a href="education.php">Education</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="register.php" class="active">Contact Me</a>
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>
    </header>

    <div class="containerlg">
<div class="box form-box">
<?php
              include("database.php");
              if(isset($_POST['submit'])){
               $email = mysqli_real_escape_string($conn,$_POST['email']);
               $password = mysqli_real_escape_string($conn,$_POST['password']);
               $result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'") or die("Select Error");
               $row = mysqli_fetch_assoc($result);
               if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['email'];
                   $_SESSION['lastname'] = $row['lastname'];
                   $_SESSION['firstname'] = $row['firstname'];
                   $_SESSION['id'] = $row['id'];
               }else{
                   echo "<div class='message'>
<p>Wrong Email or Password</p>
</div> <br>";
                echo "<a href='login.php'><button class='btn'>Go Back</button>";  
               }
               if(isset($_SESSION['valid'])){
                   header("Location: feedback.php");
               }
              }else{
           ?>
<header class="Login">Login</header>
<form action="" method="post">
<div class="field input">
<label for="email">Email</label>
<input type="text" name="email" id="email" required>
</div>
<div class="field input">
<label for="password">Password</label>
<input type="password" name="password" id="password" required>
</div>
<div class="field input">
<input type="submit" class="btn" name="submit" value="Login" required>
</div>
<div class="links">
                   Don't have account? <a href="register.php" class="signup"> Sign up</a>
        </div>
            </form>
        </div>
        <?php } ?>
        <script src="https://unpkg.com/scrollreveal"></script>

    <script src="script.js"></script>
    </div>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="feed-body">
    <div class="feed-container">
        <form action="logout.php">
      
          <label for="subject" class="textoffeedbacks">Contact Me</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit" class="btn1">
          <a href="php/logout.php"><button class="btn1" style="margin-left:20px">Log out</button></a>
      
        </form>
      </div>
</body>
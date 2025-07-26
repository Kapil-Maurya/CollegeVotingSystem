<?php
    session_start(); // Start session if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Voting System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style1.css"> <!-- Updated CSS file link -->
</head>
<body>
    <!-- Navigation Bar -->
    <div class="header">
        <h1 class="logo">Vote</h1>
        <div class="main">
            <p><a href="index.php"><b>Home</b></a></p>
            <p><a href="admin.php"><b>Admin</b></a></p>
            <p><a href="year.php"><b>Candidate</b></a></p>
            <p><a href="result.php"><b>Result</b></a></p>
            <p><a href="about.html"><b>About</b></a></p>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="m1">
        <br>
        <img src="image1.png" class="img1">
        <br><br><br>
        <h1 class="w2"><b>College Voting System</b></h1>
        <br><br><br>
        <h3 class="w1">
            College voting systems are software platforms used to securely conduct votes and 
            elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person.
        </h3>
        <br>
        <a href="year.php"><p class="p1"><button class="b1">Vote Now</button></p></a>
        <br><br><br>
    </div>
    
    <!-- Online Voting System Section -->
    <div class="header2">
        <br><h1 class="w3"><b>College Voting System</b></h1><br>
        <img src="img2.jpg" class="img2">
        <a href="year.php"><p class="p2"><button class="b1">Vote Now</button></p></a>
        <br><br>
    </div>
    
    <!-- About Voting Section -->
    <div class="header3">
        <br><br>
        <h1 class="w3"><b>About Voting</b></h1><br>
        <br>
        <img src="img3.jpg" class="img3">
        <h3 class="w4">
            Voting is a method for a group, such as a meeting or an electorate, in order to
            make a collective decision or express an opinion, usually following discussions,
            debates, or election campaigns. Democracies elect holders of high office by voting.
        </h3>
        <br><br>
    </div>
    
    <!-- Become a Candidate Section -->
    <div class="become-candidate">
        <br><br>
        <img src="can2.png" class="img1">
        <br><br>
        <h1 class="w2"><b>Become a Candidate</b></h1>
        <br>
        <p>
            If you want to become a candidate, click on the link below. You will be redirected to another page,
            where you can fill out a form to request candidacy. After submission, the administrator will approve your request.
        </p>
        <a href="insert_cand_year.php"><p class="p3"><button class="b1">Apply</button></p></a>
        <br><br>
        <footer>
            <p>&copy; 2025 College Voting System | <a href="mailto:help@collegevote.edu">help@collegevote.edu</a></p>
        </footer>
    </div>
</body>
</html>

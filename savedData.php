<?php
try {
    // Database connection
    include('dbConnect.php');

    // Get input values safely
    $name = $_REQUEST['txtName'] ?? null;
    $email = $_REQUEST['txtEmail'] ?? null;
    $number = $_REQUEST['txtNumber'] ?? null;
    $candi = $_REQUEST['txtCand'] ?? null;
    $rollno = $_REQUEST['txtRollNo'] ?? null;
    $reason = $_REQUEST['txtReason'] ?? null;
    $Branch = $_REQUEST['txtBranch'] ?? null;

    // Check if all required fields are provided
    if (!$name || !$email || !$number || !$candi || !$rollno || !$reason || !$Branch) {
        die("Error: All fields are required!");
    }

    // Prepare SQL query
    $sql = "INSERT INTO users (name, email, Branch, number, candidate, rollno, reason) 
            VALUES (:name, :email, :Branch, :number, :candidate, :rollno, :reason)";

    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":Branch", $Branch);
    $stmt->bindParam(":number", $number);
    $stmt->bindParam(":candidate", $candi);
    $stmt->bindParam(":rollno", $rollno);
    $stmt->bindParam(":reason", $reason);

    // Execute the query
    $stmt->execute();

    // Redirect to success page
    header('Location: successfully.php');
    exit();

} catch (PDOException $e) {
    die("Database Error: " . $e->getMessage());
}
?>

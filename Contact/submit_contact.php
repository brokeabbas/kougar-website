<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure this path correctly points to Composer's autoload.php

// Define variables for database connection
$dbHost = "127.0.0.1";
$dbUsername = "kougarsolutionlt_web";
$dbPassword = 'wr4bq];sW.ru';
$dbName = "kougarsolutionlt_contact_us";
$dbPort = 3306; // Ensure this matches your MySQL server configuration

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store the form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $serviceType = htmlspecialchars($_POST['serviceType']);
    $details = htmlspecialchars($_POST['details']);

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    try {
        //Server settings for PHPMailer
        $mail->isSMTP();
        $mail->Host = 'kougarsolution-ltd.com'; // Use your SMTP server     
        $mail->SMTPAuth = true;
        $mail->Username = 'request@kougarsolution-ltd.com'; // SMTP username
        $mail->Password = '%S*@iGa@S4nd'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        //Recipients
        $mail->setFrom('request@kougarsolution-ltd.com', 'Kougar Solutions LTD'); // Sender's email address and name
        $mail->addAddress('request@kougarsolution-ltd.com', 'Admin'); // Add a recipient (Recipient's email address and name)

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New Service Request';
        $mail->Body    = "A new service request has been submitted:<br><strong>Full Name:</strong> $fullName<br><strong>Email:</strong> $email<br><strong>Phone:</strong> $phone<br><strong>Service Type:</strong> $serviceType<br><strong>Details:</strong> $details";
        $mail->AltBody = "A new service request has been submitted: Full Name: $fullName, Email: $email, Phone: $phone, Service Type: $serviceType, Details: $details";

        $mail->send();


        // Connect to the database and insert the data
        try {
            $pdo = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUsername, $dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO service_requests (fullName, email, phone, serviceType, details) VALUES (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$fullName, $email, $phone, $serviceType, $details]);
            
        } catch (\PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }

        // Upon successful processing, output the HTML content
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submission Successful</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body, html {
                margin: 0;
                padding: 0;
                width: 100%;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                overflow-x: hidden;
                font-family: "Poppins", sans-serif;
                background-color: #091236; /* Adjusted for consistency */
                color: #fff;
            }

            .content {
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                animation: fadeIn 2s ease-out;
            }

            h1 {
                font-size: 2.8rem;
                margin-bottom: 20px;
            }

            p {
                font-size: 1.2rem;
                margin-bottom: 30px;
                line-height: 1.6;
            }

            .btn {
                display: inline-block;
                background-color: transparent;
                color: #fff;
                border: 2px solid #fff;
                padding: 10px 25px;
                border-radius: 50px;
                text-decoration: none;
                font-weight: bold;
                transition: all 0.4s;
            }

            .btn:hover {
                background-color: #fff;
                color: #1E215D;
            }

            @keyframes fadeIn {
                to {
                    opacity: 1;
                }
            }
        </style>
    </head>
    <body>
        <div class="content">
            <h1>Submission Successful!</h1>
            <p>Your service request has been successfully submitted. We will contact you soon.</p>
            <a href="../home.html" class="btn">Return Home</a>
        </div>
    </body>
    </html>';

    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }
}
?>

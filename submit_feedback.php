<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_quality = intval($_POST['service-quality']);
    $customer_support = intval($_POST['customer-support']);
    $timeliness = intval($_POST['timeliness']);
    $overall_experience = intval($_POST['overall-experience']);
    $additional_comments = $conn->real_escape_string($_POST['additional-comments']);
    $sql = "INSERT INTO feedback (service_quality, customer_support, timeliness, overall_experience, additional_comments) 
            VALUES ('$service_quality', '$customer_support', '$timeliness', '$overall_experience', '$additional_comments')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

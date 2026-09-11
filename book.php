<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $email = $_POST["email"] ?? "";
    $event_date = $_POST["event_date"] ?? "";
    $design = $_POST["design"] ?? "";
    $message = $_POST["message"] ?? "";

    $sql = "INSERT INTO appointments 
            (name, phone, email, event_date, design, message)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {

        mysqli_stmt_bind_param(
            $stmt,
            "ssssss",
            $name,
            $phone,
            $email,
            $event_date,
            $design,
            $message
        );

        if (mysqli_stmt_execute($stmt)) {
            echo "Appointment Booked Successfully!";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);

    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    echo "Please submit the booking form.";
}

?>
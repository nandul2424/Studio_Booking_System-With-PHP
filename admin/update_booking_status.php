<?php
    //include("../config/database.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $booking_id = $_POST['booking_id'];
        $new_status = $_POST['status'];

        $stmt = $conn->prepare("UPDATE bookings SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $new_status, $booking_id);

        if ($stmt->execute()) {
            header("Location: bookings.php?msg=updated");
        } else {
            echo "Error updating status: " . $conn->error;
        }

        $stmt->close();
    }
    $conn->close();
?>

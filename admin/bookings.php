<?php
    session_start();
    include("../config/database.php");

    $sql = "SELECT bookings.*, users.name AS user_name, packages.name AS package_name
        FROM bookings
        JOIN users ON bookings.user_id = users.id
        JOIN packages ON bookings.package_id = packages.id
        ORDER BY bookings.date DESC";

    $result = mysqli_query($conn , $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include("../includes/navbar.php");
        ?>
        <div class="container mt-5">
            <h2 class="mb-4">All Bookings</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Package</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): 
                        while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= htmlspecialchars($row['user_name']) ?></td>
                                <td><?= htmlspecialchars($row['package_name']) ?></td>
                                <td><?= $row['date'] ?></td>
                                <td><?= $row['start_time'] . " - " . $row['end_time'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td>
                                    <form method="post" action="update_booking_status.php" style="display:inline-block;">
                                        <input type="hidden" name="booking_id" value="<?= $row['id'] ?>">
                                        <select name="status" class="form-control mb-1" required>
                                            <option value="">--Change--</option>
                                            <option value="confirmed">Confirmed</option>
                                            <option value="completed">Completed</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; else: ?>
                            <tr><td colspan="7" class="text-center">No bookings found</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php
            include("../includes/footer.php");
        ?>
    </body>
</html>
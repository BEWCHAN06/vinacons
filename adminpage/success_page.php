<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kết quả gửi form</title>
</head>
<body>
    <?php
    // Kiểm tra xem có thông báo thành công hay thông báo lỗi đã được đặt trong session hay chưa
    if (isset($_SESSION['success_message'])) {
        echo '<p style="color: green;">' . $_SESSION['success_message'] . '</p>';
        // Hủy thông báo thành công để tránh hiển thị lại khi trang được làm mới
        unset($_SESSION['success_message']);
    } elseif (isset($_SESSION['error_message'])) {
        echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
        // Hủy thông báo lỗi để tránh hiển thị lại khi trang được làm mới
        unset($_SESSION['error_message']);
    }
    ?>
    <p><a href="adminPAGE.php">Quay lại trang gốc</a></p>
</body>
</html>

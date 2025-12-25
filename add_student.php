<?php
include "includes/db.php";

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $age   = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, age, email, phone)
            VALUES ('$name', '$age', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "تم إضافة الطالب بنجاح";
    } else {
        echo "خطأ في الإضافة";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>إضافة طالب</title>
</head>
<body>

<h2>إضافة طالب جديد</h2>

<form method="post">
    الاسم: <br>
    <input type="text" name="name" required><br><br>

    العمر: <br>
    <input type="number" name="age" required><br><br>

    الإيميل: <br>
    <input type="email" name="email" required><br><br>

    الهاتف: <br>
    <input type="text" name="phone"><br><br>

    <button type="submit" name="submit">حفظ</button>
</form>

</body>
</html>

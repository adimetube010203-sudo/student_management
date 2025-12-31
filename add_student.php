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
    $success = true;
}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>إضافة طالب</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

<h2>إضافة طالب جديد</h2>

<?php if (isset($success)) { ?>
    <div class="success">تم إضافة الطالب بنجاح</div>
<?php } ?>

<form method="post">
    <label>الاسم</label>
    <input type="text" name="name" required>

    <label>العمر</label>
    <input type="number" name="age" required>

    <label>الإيميل</label>
    <input type="email" name="email" required>

    <label>الهاتف</label>
    <input type="text" name="phone">

    <button type="submit" name="submit">حفظ</button>
    <a href="index.php" class="btn-back">⬅ الرجوع لعرض الطلاب</a>

</form>

</div>

</body>

</html>

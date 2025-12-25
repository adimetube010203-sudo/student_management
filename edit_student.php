<?php
include "includes/db.php";

$id = $_GET['id'];

// جلب بيانات الطالب
$result = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");
$student = mysqli_fetch_assoc($result);

// حفظ التعديل
if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $age   = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students SET
            name='$name',
            age='$age',
            email='$email',
            phone='$phone'
            WHERE id=$id";

    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>تعديل طالب</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h2>تعديل بيانات الطالب</h2>

<form method="post">
    <label>الاسم</label>
    <input type="text" name="name" value="<?php echo $student['name']; ?>" required>

    <label>العمر</label>
    <input type="number" name="age" value="<?php echo $student['age']; ?>" required>

    <label>الإيميل</label>
    <input type="email" name="email" value="<?php echo $student['email']; ?>" required>

    <label>الهاتف</label>
    <input type="text" name="phone" value="<?php echo $student['phone']; ?>">

    <button type="submit" name="update">حفظ التعديل</button>
</form>

<a href="index.php" class="btn-back">⬅ الرجوع لعرض الطلاب</a>

</div>

</body>
</html>

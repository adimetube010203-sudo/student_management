<?php
include "includes/db.php";

$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>عرض الطلاب</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-table">

<h2>قائمة الطلاب</h2>

<a href="add_student.php" class="btn-add">+ إضافة طالب</a>

<table>
    <tr>
        <th>#</th>
        <th>الاسم</th>
        <th>العمر</th>
        <th>الإيميل</th>
        <th>الهاتف</th>
        <th>التحكم</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>
                    <a href='#' class='btn-edit'>تعديل</a>
                    <a href='#' class='btn-delete'>حذف</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>لا يوجد طلاب</td></tr>";
    }
    ?>
</table>

</div>

</body>
</html>

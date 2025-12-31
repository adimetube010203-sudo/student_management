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

    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn-edit">
                        تعديل
                    </a>

                    <a href="delete_student.php?id=<?php echo $row['id']; ?>"
                       class="btn-delete"
                       onclick="return confirm('هل أنت متأكد من الحذف؟');">
                        حذف
                    </a>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">لا يوجد طلاب</td>
        </tr>
    <?php } ?>

</table>

</div>

</body>
</html>

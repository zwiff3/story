<?php
// استدعاء ملف الاتصال بالداتا بيز
include ('config.php');


// انشاء فاريبول لتخزين الاي دي عن طريق جت
 $ID = $_GET['id'];


// استدعاء داله مي سكول كويري و اكتب اسم فايبول الاتصال )(اكتب هنا "احذف من الجدول عندما يكون الاي دي =اكتب هنا اسم الفاريبول")
mysqli_query($conn,"DELETE FROM shopme WHERE id=$ID");

//اكتب هيرجع علي اي صفحه بعد المسح
header('location: prod.php');


// ده ملف الحذف
?>
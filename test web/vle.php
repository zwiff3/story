<?php
//صفحه التأكيد
//ده ملف تاكيد أضافه النتج للعربه 
// الاتصال بقواعد البيانات
include ("config.php");
//جلب البيات بناء علي الاي دي
 $ID = $_GET["id"];
 $re = mysqli_query($conn,"SELECT * FROM shopme WHERE id=$ID");
 $dataa = mysqli_fetch_array($re);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد</title>
    <link rel="stylesheet" href="style.css">
   <!-- this is link for font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
<style>

    input{
    display: none;
    box-shadow: 1px 1px 10px wheat; /* ظل */
width: 400px;
    }
    #inbb{
      box-shadow: 1px 1px 10px wheat; /* ظل */
      width: 400px;


    }
</style>

</head>
<body>
       <!-- this is form uplode-->

   <div class = "foo">
   <!--خد بالك من الاكشن هنا -->
   <form action="car.php" method="post" enctype="multipart/form-data">

      <h1>تاكيد</h1>
   <!--  حقول الادخال الي هتظهر فيها بيانات المنتج الي اختاره المستخدم-->
   <input type="text" id="inbb" name="id" value='<?php echo $dataa['id'] ?>'>
   <br>
     <input type="text"  name="fname" value='<?php echo $dataa['fname'] ?>'>
     <br>
     <input type="text" name= "price" value="<?php echo $dataa['price'] ?>">
     <br>
     <input type="file" id="file" name="image"   style="display: none;" value="<?php echo $dataa['imgs'] ?>">    <!-- الكود ده بيحذف علامه رفع ملف-->

     <button type="submit" name="mcar">تاكيد الشراء </button>
     <br>     <br>
     <br>

   <!--طبعا انت عارف ده ايه-->
     <a href="user.php"> الرجوع للصفحه الرئيسيه </a>
</form>
    

   </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="style.css">
   <!-- this is link for font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">

</head>
<body>
       <!-- this is form uplode-->
<?php
include ('config.php');
$ID = $_GET['id'];
$reback= mysqli_query($conn ,"SELECT * FROM shopme WHERE id=$ID");
$up = mysqli_fetch_array($reback);



?>
   <div class = "foo">
      <img src="download.jpg" alt="logo">
   <form action="UP.php" method="post" enctype="multipart/form-data">

      <h1>تعديل منتجات</h1>
   <!-- حقول الادخال -->
   <input type="text"  name="id" value='<?php echo $up['id']   ?>'> <br>

     <input type="text"  name="fname" value='<?php echo $up['fname']   ?>'>
     <br>
     <input type="text" name= "price" value='<?php echo $up['price']   ?>'>
     <br>
     <input type="file" id="file" name="image"   style="display: none;">    <!-- الكود ده بيحذف علامه رفع ملف-->

     <label for="file"> تعديل صورة المنتج</label>
     <button type="submit" name="up">تعديل المنتج</button>
     <br>     <br>
     <br>


</form>
    

   </div>

</body>
</html>

<?php
//ملف الاتصال بقواعد البيانات 
include ('config.php');
// تخزين المدخلات في فاربول 
if (isset($_POST['mcar'])) {

    $NAME  =$_POST['fname'];
    $PRICE = $_POST['price'];
    $IMG   = $_FILES['image'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       ="immm/".$image_name;
// أدخال البيانات في الجدو ل
    $mycar        = "INSERT INTO mycar (fname,price,imgs) VALUES ('$NAME','$PRICE','$image_up')";
     mysqli_query($conn,$mycar);

     if(move_uploaded_file($IMAGE_LOCATION,'immm/'.$image_name)){
    // اشعار 
        echo "<script>alert('تم اضافه المنتج للعربه  ')</script>";

     }else{        echo "<script>alert('تم اضافه المنتج للعربه  ')</script>";

     }
     //header('location: index.html');
     header('refresh:2; url=mycar.php'); // إعادة توجيه بعد 2 ثانية

}




?>
<?php
//ملف الاتصال بقواعد البيانات 
include ('config.php');
// هنا بقله لو المستخدم ضغط الزر 
if (isset($_POST['up'])) {
    // هنا علشان اجيب الي بي
    $ID=$_POST['id'];
    //وهنا الفاربول علشان أخزن فيها التغيير
    $NAME  =$_POST['fname'];
    $PRICE = $_POST['price'];
    $IMG   = $_FILES['image'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       ="immm/".$image_name;
// أدخال البيانات في الجدو ل
    $update  ="UPDATE shopme SET fname='$NAME',price='$PRICE',imgs='$image_up' WHERE id=$ID";
     mysqli_query($conn,$update);//هنا بقله اتصل وخزن البيانات في الجدول
// هنا لما ارفع صورة يظهر اشعار في الصفحه من فوق
     if(move_uploaded_file($IMAGE_LOCATION,'immm/'.$image_name)){
    // اشعار 
        echo "<script>alert('تم رفع الملف بنجاح')</script>";

     }else{        echo "<script>alert('تم رفع الملف بنجاح')</script>";

     }
     header('refresh:1; url=prod.php'); //   إعادة توجيه بعد 1 ثانية

}



?>
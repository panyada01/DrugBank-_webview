<?php
include("condb.php");

$Pham_id=$_POST["txt_Pham_id"];
$PhamNum=$_POST["txt_PhamNum"];
$PhamName=$_POST["txt_PhamName"];
$PhamSurname=$_POST["txt_PhamSurname"];
$PhamAdd=$_POST["txt_PhamAdd"];
$PhamPhone=$_POST["txt_PhamPhone"];
$PhamEmail=$_POST["txt_PhamEmail"];


$sql = " UPDATE `pharmacist` SET PhamNum='$PhamNum',PhamName='$PhamName',PhamSurname='$PhamSurname',PhamAdd='$PhamAdd',PhamPhone='$PhamPhone',PhamEmail='$PhamEmail' WHERE Pham_id='$Pham_id' ";
//$sql="INSERT INTO tb_news(title_news,detail_news,img_news)VALUES('$title_news','$detail_news','$newname');"
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
mysqli_close($conn);

	

//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
    echo "<script type='text/javascript'>";
    echo"alert('ทำการแก้ไขข้อมูลสำเร็จเรียบร้อยแล้ว');";
    echo"window.location = 'Pharmacist_show.php';";
    echo "</script>";
    }
    else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
            echo "<script type='text/javascript'>";
            echo "alert('error! การแก้ไขข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
            echo"window.location = 'Pharmacist_show.php'; ";
            echo"</script>";
}


?>
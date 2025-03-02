<?php
include("condb.php");

$DrugType_id=$_POST["txt_DrugType_id"];
$DrugType_name=$_POST["txt_DrugType_name"];
$DrugType_use=$_POST["txt_DrugType_use"];
// $id_us=$_POST["selectuniversity"];

// $subject_id=$_POST["selectsubject"];
// //$subject_name=$_POST["txt_subject_name"];
// $add_cust=$_POST["txt_add_cust"];
// $phone_cust=$_POST["txt_phone_cust"];
// $img_cust = (isset($_POST["img_cust"]) ? $_POST["img_cust"] : "");
$chk_edit_no=$_POST["chk_edit_no"];


// //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
// date_default_timezone_set('Asia/Bangkok');
// //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
// $date1 = date("Ymd_His");
// //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
// $numrand = (mt_rand());
// $upload=$_FILES["img_cust"];
// if($upload != '') { 
// //โฟลเดอร์ที่เก็บไฟล์
// $path="../images_cust/";
// //ตัวขื่อกับนามสกุลภาพออกจากกัน
// $type = strrchr($_FILES["img_cust"]["name"],".");
// //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
// $newname =$numrand.$date1.$type;
// $path_copy=$path.$newname;
// $path_link="../images_cust/".$newname;

// //คัดลอกไฟล์ไปยังโฟลเดอร์
// move_uploaded_file($_FILES["img_cust"]["tmp_name"],$path_copy);
// }

 

//echo "ค่าที่ส่งมาคือ ". $id_cust;
//echo "ค่า chk ที่ส่งมาคือ ". $chk_edit_no;


if($chk_edit_no==1){


    $sql = " UPDATE `drugtype` SET DrugType_name='$DrugType_name',DrugType_use='$DrugType_use' WHERE DrugType_id='$DrugType_id' ";


}else {
    $sql = " UPDATE `drugtype` SET DrugType_name='$DrugType_name',DrugType_use='$DrugType_use' WHERE DrugType_id='$DrugType_id' ";
      
}
//$sql="INSERT INTO tb_news(title_news,detail_news,img_news)VALUES('$title_news','$detail_news','$newname');"
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
mysqli_close($conn);
	

//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
    echo "<script type='text/javascript'>";
    echo"alert('ทำการแก้ไขข้อมูลสำเร็จเรียบร้อยแล้ว');";
    echo"window.location = 'DrugType_show.php';";
    echo "</script>";
    }
    else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
            echo "<script type='text/javascript'>";
            echo "alert('error! การแก้ไขข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
            echo"window.location = 'DrugType_show.php'; ";
            echo"</script>";
}


?>
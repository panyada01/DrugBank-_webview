
<?php
include("condb.php");
//รับชื่อไฟล์จากฟอร์ม 
$DrugType_id=$_POST["txt_DrugType_id"];
$DrugType_name=$_POST["txt_DrugType_name"];
$DrugType_use=$_POST["txt_DrugType_use"];


 $sql = " INSERT INTO `drugtype` (DrugType_id,DrugType_name,DrugType_use)VALUES('$DrugType_id','$DrugType_name','$DrugType_use')";
//$sql="INSERT INTO tb_news(title_news,detail_news,img_news)VALUES('$title_news','$detail_news','$newname');"
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
	mysqli_close($conn);

//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
    echo "<script type='text/javascript'>";
    echo"alert('ทำการบันทึกข้อมูลสำเร็จเรียบร้อยแล้ว');";
    echo"window.location = 'DrugType_show.php';";
    echo "</script>";
    }
    else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
            echo "<script type='text/javascript'>";
            echo "alert('error! การบันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
            echo"window.location = 'DrugType_frm.php'; ";
            echo"</script>";
}



?>
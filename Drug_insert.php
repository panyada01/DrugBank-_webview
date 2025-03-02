
<?php
include("condb.php");
//รับชื่อไฟล์จากฟอร์ม 
$Drug_id=$_POST["txt_Drug_id"];
$Drug_name=$_POST["txt_Drug_name"];
$DrugType_id=$_POST["selecttype_medicine"];
$Drug_acc=$_POST["txt_Drug_acc"];
$Drug_key=$_POST["txt_Drug_key"];

$Druglndications=$_POST["txt_Druglndications"];
$DrugSizeUse=$_POST["txt_DrugSizeUse"];
$DrugCaution=$_POST["txt_DrugCaution"];
$DrugPrice=$_POST["txt_DrugPrice"];
$DrugAmount=$_POST["txt_DrugAmount"];



 $sql = "INSERT INTO `drug` (Drug_id,Drug_name,DrugType_id,Drug_acc,Drug_key,Druglndications,DrugSizeUse,DrugCaution,DrugPrice,DrugAmount)VALUES('$Drug_id','$Drug_name','$DrugType_id','$Drug_acc','$Drug_key','$Druglndications','$DrugSizeUse','$DrugCaution','$DrugPrice','$DrugAmount')";
//$sql="INSERT INTO tb_news(title_news,detail_news,img_news)VALUES('$title_news','$detail_news','$newname');"
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
	mysqli_close($conn);

//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
    echo "<script type='text/javascript'>";
    echo"alert('ทำการบันทึกข้อมูลสำเร็จเรียบร้อยแล้ว');";
    echo"window.location ='index.php';";
    echo "</script>";
    }
    else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
            echo "<script type='text/javascript'>";
            echo "alert('error! การบันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
            echo"window.location ='index.php'; ";
            echo"</script>";
}



?>
<?php
include("condb.php");

$Drug_id=$_POST["txt_Drug_id"];
$hdd_Drug_id=$_POST["hdd_Drug_id"];

//echo "ตัวแปรที่เก็บด้วย txt_drug_id ".$Drug_id."<br>";
//echo "ตัวแปร hdd_drug_id ".$hdd_Drug_id;


$Drug_name=$_POST["txt_Drug_name"];
$DrugType_id=$_POST["selecttype_medicine"];
$Drug_acc=$_POST["txt_Drug_acc"];
$Drug_key=$_POST["txt_Drug_key"];
$Druglndications=$_POST["txt_Druglndications"];
$DrugSizeUse=$_POST["txt_DrugSizeUse"];
$DrugCaution=$_POST["txt_DrugCaution"];
$DrugPrice=$_POST["txt_DrugPrice"];
$DrugAmount=$_POST["txt_DrugAmount"];

$chk_edit_no=$_POST["chk_edit_no"];







/*if($chk_edit_no==1){


   // $sql = " UPDATE `drug` SET Drug_name='$Drug_name',DrugType_id='$DrugType_id',Drug_acc='$Drug_acc',Drug_key='$Drug_key',Druglndications='$Druglndications',DrugSizeUse='$DrugSizeUse',DrugCaution='$DrugCaution',DrugPrice='$DrugPrice',DrugAmount='$DrugAmount' WHERE Drug_id='$Drug_id' ";
    $sql = " UPDATE `drug` SET Drug_name='$Drug_name' WHERE Drug_id='$Drug_id' ";

}else {
  //  $sql = " UPDATE `drug` SET Drug_name='$Drug_name',DrugType_id='$DrugType_id',Drug_acc='$Drug_acc',Drug_key='$Drug_key',Druglndications='$Druglndications',DrugSizeUse='$DrugSizeUse',DrugCaution='$DrugCaution',DrugPrice='$DrugPrice',DrugAmount='$DrugAmount' WHERE Drug_id='$Drug_id' ";
  $sql = " UPDATE `drug` SET Drug_name='$Drug_name' WHERE Drug_id='$Drug_id' ";
}
//$sql="INSERT INTO tb_news(title_news,detail_news,img_news)VALUES('$title_news','$detail_news','$newname');"
*/

$sql = " UPDATE `drug` SET Drug_name='$Drug_name',Drug_id ='$Drug_id',DrugType_id ='$DrugType_id',Drug_acc='$Drug_acc',Drug_key='$Drug_key',Druglndications='$Druglndications',DrugSizeUse='$DrugSizeUse',DrugCaution='$DrugCaution',DrugPrice='$DrugPrice',DrugAmount='$DrugAmount' WHERE Drug_id='$hdd_Drug_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
mysqli_close($conn);
	

//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
    echo "<script type='text/javascript'>";
    echo"alert('ทำการแก้ไขข้อมูลสำเร็จเรียบร้อยแล้ว');";
    echo"window.location = 'index.php';";
    echo "</script>";
    }
    else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
            echo "<script type='text/javascript'>";
            echo "alert('error! การแก้ไขข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
            echo"window.location = 'Drug_frm_update.php'; ";
            echo"</script>";
}

?>
<mate charset ="utf-8" />
<?php
include("condb.php");
$Drug_id=$_GET["Drug_id"];
$sql = "DELETE FROM drug WHERE Drug_id='$Drug_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}



?>
<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); 
$Pham_id=mysqli_real_escape_string($conn,$_GET['Pham_id']);
$query="SELECT * FROM pharmacist WHERE Pham_id=$Pham_id" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query); 
$row = mysqli_fetch_array($result);
extract($row);

?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="Pharmacist_show.php">เพิ่มข้อมูลเภสัชกร</a></h1>
   
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->

</head>

<body>     

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h4 align="center"> แก้ไขข้อมูลเภสัชกร </h4>
      <hr />
      <form action="Pharmacist_update.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
      <input type="hidden" name="hd_id_cust" value="<?php echo $id_cust;  ?>" />
      <?php //echo $id_cust; ?>
      
      
      <div class="form-group">
          <div class="col-sm-12">
            <p> รหัสประชาชนเภสัชกร</p>
            <input type="text"  name="txt_Pham_id" value="<?php echo $Pham_id; ?>" class="form-control" required placeholder="รหัสประชาชนเภสัชกร" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p>เลขที่ใบอนุญาตประกอปวิชาชีพ</p>
            <input type="text"  name="txt_PhamNum"value="<?php echo $PhamNum; ?>" class="form-control" required placeholder="เลขที่ใบอนุญาตประกอปวิชาชีพ" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p>ชื่อ</p>
            <input type="text"  name="txt_PhamName" value="<?php echo $PhamName; ?>" class="form-control" required placeholder="ชื่อ" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p>นามสกุล</p>
            <input type="text"  name="txt_PhamSurname"value="<?php echo $PhamSurname; ?>" class="form-control" required placeholder="นามสกุล" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p> ที่อยู่ </p>
            <textarea name="txt_PhamAdd" class="form-control"  rows="5"  placeholder="ที่อยู่"><?php echo $PhamAdd; ?></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p>เบอร์โทร</p>
            <input type="text"  name="txt_PhamPhone" value="<?php echo $PhamPhone; ?>" class="form-control" required placeholder="เบอร์โทร" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p>E-mail</p>
            <input type="text"  name="txt_PhamEmail"value="<?php echo $PhamEmail; ?>" class="form-control" required placeholder="E-mail" />
          </div>
        </div>

        <div class="col-sm-8 info">
            
            <button type="submit" class="btn btn-primary" name="btnadd"> + แก้ไขข้อมูลเภสัชกร </button>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            
          </div>
        </div>
     





    </form>

</section>
<!-- XXXXXXXXXXXXXXXXXXXXXx -->
<?php include('footer.php'); ?>
<script>
  $(function () {
    $(".datatable").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      http://fordev22.com/
        "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>

</html>
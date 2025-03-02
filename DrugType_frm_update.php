<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php');
$DrugType_id=mysqli_real_escape_string($conn,$_GET['DrugType_id']);
$query="SELECT * FROM drugtype WHERE DrugType_id=$DrugType_id" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query); 
$row = mysqli_fetch_array($result);
extract($row);
?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="DrugType_show.php">เพิ่มข้อมูลประเภทยา</a></h1>
    
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->


  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6"> <br />
        <h4 align="center"> แก้ไขข้อมูลประเภทยา </h4>
        <hr />
        <form action="DrugType_update.php" method="POST" enctype="multipart/form-data" name="addprd"
          class="form-horizontal" id="addprd">
          <input type="hidden" name="hd_id_cust" value="<?php echo $id_cust; ?>" />
          <?php //echo $id_cust; ?>


          <div class="form-group">
            <div class="col-sm-12">
              <p> รหัสรูปแบบยา</p>
              <input type="text" name="txt_DrugType_id" value="<?php echo $DrugType_id; ?>" class="form-control"
                required placeholder="รหัสรูปแบบยา" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> ชื่อรูปแบบยา</p>
              <input type="text" name="txt_DrugType_name" value="<?php echo $DrugType_name; ?>" class="form-control"
                required placeholder="ชื่อรูปแบบยา" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> วืธีการใช้ยา </p>
              <textarea name="txt_DrugType_use" class="form-control" rows="5"
                placeholder="กรอกรายละเอียดวืธีการใช้ยา"><?php echo $DrugType_use; ?></textarea>
            </div>
          </div>

          <div class="col-sm-8 info">

            <button type="submit" class="btn btn-primary" name="btnadd"> + แก้ไขข้อมูลรูปแบบยา </button>
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
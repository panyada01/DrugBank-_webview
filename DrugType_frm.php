<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); ?>

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
      <h4 align="center"> จัดการข้อมูลรูปแบบยา</h4>
      <hr />
      <form action="DrugType_insert.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
        <div class="form-group">

          <div class="col-sm-12">
            <p> รหัสรูปแบบยา</p>
            <input type="text"  name="txt_DrugType_id" class="form-control" required placeholder="รหัสรูปแบบยา" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อรูปแบบยา</p>
            <input type="text"  name="txt_DrugType_name" class="form-control" required placeholder="ชื่อรูปแบบยา" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p> วิธีการใช้ยา </p>
            <textarea name="txt_DrugType_use" class="form-control"  rows="5"  placeholder="วิธีการใช้ยา"></textarea>
          </div>
        </div>

        
        <div class="col-sm-8 info">
            
            <button type="submit" class="btn btn-primary" name="btnadd"> + บันทึกข้อ </button>
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
<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); ?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="Pharmacist_show.php">เพิ่มข้อมูลเภสัชกร</a></h1>
   
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->

  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6"> <br />
        <h4 align="center"> จัดการข้อมูลเภสัชกร</h4>
        <hr />
        <form action="Pharmacist_insert.php" method="POST" enctype="multipart/form-data" name="addprd"
          class="form-horizontal" id="addprd">
          <div class="form-group">

            <div class="col-sm-12">
              <p> รหัสประชาชนเภสัชกร</p>
              <input type="text" name="txt_Pham_id" class="form-control" required placeholder="รหัสประชาชนเภสัชกร" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> เลขที่ใบอนุญาตประกอบวิชาชีพ</p>
              <input type="text" name="txt_PhamNum" class="form-control" required
                placeholder="เลขที่ใบอนุญาตประกอบวิชาชีพ" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> ชื่อเภสัชกร </p>
              <textarea name="txt_PhamName" class="form-control" required placeholder="ชื่อเภสัชกร"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> นามสกุล</p>
              <input type="text" name="txt_PhamSurname" class="form-control" required placeholder="นามสกุล" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> ที่อยู่ </p>
              <textarea name="txt_PhamAdd" class="form-control" rows="5" placeholder="ที่อยู่"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p>เบอร์โทร</p>
              <input type="text" name="txt_PhamPhone" class="form-control" required placeholder="เบอร์โทร" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> อีเมล</p>
              <textarea name="txt_PhamEmail" class="form-control" rows="5" placeholder="อีเมล"></textarea>
            </div>
          </div>

          <div class="col-sm-8 info">

            <button type="submit" class="btn btn-primary" name="btnadd"> + บันทึกข้อมูลเภสัชกร </button>
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
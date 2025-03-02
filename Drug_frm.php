<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); ?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="index.php">ข้อมูลบัญชียา</a></h1>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->


  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6"> <br />
        <h4 align="center"> จัดการข้อมูลบัญชียา</h4>
        <hr />
        <form action="Drug_insert.php" method="POST" enctype="multipart/form-data" name="addprd" class="form-horizontal"
          id="addprd">

          <div class="form-group">
            <div class="col-sm-12">
              <p>รหัสยา</p>
              <input type="text" name="txt_Drug_id" class="form-control" required placeholder="รหัสยา" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p>ชื่อยา</p>
              <input type="text" name="txt_Drug_name" class="form-control" required placeholder="ชื่อยา" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <select name="selecttype_medicine" class="form-control">
                <option value="">เลือกประเภทยา</option>
                <?php

                include('condb.php');
                $query = "SELECT * FROM drugtype order by DrugType_id" or die("Error:" . mysqli_error());
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <option value="<?= $row["DrugType_id"]; ?>"><?= $row["DrugType_name"] ?>
                  </option>

                  <?php
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-12">
              <p>บัญชียา</p>
              <input type="text" name="txt_Drug_acc" class="form-control" required placeholder="บัญชียา" />
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-12">
              <p> ตัวยาสำคัญ </p>
              <textarea name="txt_Drug_key" class="form-control" rows="5" placeholder="ตัวยาสำคัญ"></textarea>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-12">
              <p> ข่อบ่งใช้ยา </p>
              <textarea name="txt_Druglndications" class="form-control" rows="5" placeholder="ข่อบ่งใช้ยา"></textarea>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-12">
              <p> ขนาดและวิธีใช้ </p>
              <textarea name="txt_DrugSizeUse" class="form-control" rows="5" placeholder="ขนาดและวิธีใช้"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p> ข้อควรระวัง </p>
              <textarea name="txt_DrugCaution" class="form-control" rows="5" placeholder="ข้อควรระวัง"></textarea>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-12">
              <p>ราคา</p>
              <input type="text" name="txt_DrugPrice" class="form-control" required placeholder="ราคา" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <p>จำนวนคงเหลือ</p>
              <input type="text" name="txt_DrugAmount" class="form-control" required placeholder="จำนวนคงเหลือ" />
            </div>
          </div>



          <div class="col-sm-8 info">

            <button type="submit" class="btn btn-primary" name="btnadd"> + บันทึกข้อมูลยา </button>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">

        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">

        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">

        </div>
      </div>
      <br>
<br>
<br>
<br>
<br>
      </form>



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
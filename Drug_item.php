<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php

include('condb.php');
$query = "SELECT * FROM drug INNER JOIN drugtype ON drug.DrugType_id=drugtype.DrugType_id WHERE  drug.Drug_name LIKE '%{$_POST['txt_Drug_name']}%' OR drug.Drug_id LIKE '%{$_POST['txt_Drug_name']}%' OR drugtype.DrugType_name LIKE '%{$_POST['txt_Drug_name']}%' ORDER BY drugtype.DrugType_id ";
$result = mysqli_query($conn, $query);
?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="index.php">ข้อมูลบัญชียา</a></h1>
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="Drug_input.php">ค้นหา</a></h1>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->

  <section class="content">
    <!-- XXXXXXXXXXXXXXXXXXXXXx -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="Drug_item.php" method="POST" enctype="multipart/form-data" name="search"
                    class="form-horizontal" id="search">
                    <div class="form-group">
                        <label for="textsearch">ระบุบัญชียา</label>
                        <input type="text" name="txt_Drug_name" id="Drug_name" class="form-control"
                            placeholder="ข้อความ คำค้นหา !" autocomplete="off">
                            <br>
                        <button type="submit" class="btn btn-primary" name="btbtnSearch">ค้นหาข้อมูล </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="loading"></div>
        <div class="row" id="list-data" style="margin-top: 10px;">

        </div>
    </div>

    <!-- XXXXXXXXXXXXXXXXXXXXXx -->
</section>
  <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>

          <th>ลำดับ</th>
          <th>ชื่อรูปแบบยา</th>
          <th>รหัสยา</th>
          <th>ชื่อยา</th>
          <th>รายละเอียดขนาดและวิธีใช้ยา</th>
          <th>ข้อควรระวัง</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td>
              <?php echo $i; ?>
            </td>
            <td>
              <?php echo $row['DrugType_name']; ?>
            </td>
            <td>
              <?php echo $row['Drug_id']; ?>
            </td>
            <td>
              <?php echo $row['Drug_name']; ?>
            </td>
            <td>
              <?php echo $row['DrugSizeUse']; ?>
            </td>
            <td>
              <?php echo $row['DrugCaution']; ?>
            </td>
          </tr>
          <?php $i++;
        }
        
        ?>
      </tbody>
    </table>
  </div>

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
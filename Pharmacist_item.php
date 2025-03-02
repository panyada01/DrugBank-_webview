<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php

include ('condb.php');
$query="select * from pharmacist WHERE PhamName LIKE '%{$_POST['txt_PhamName' ]}%'"; 
$result = mysqli_query($conn, $query); 
?>

<section class="content-header">
  <div class="container-fluid">
  <h1><i class="nav-icon fas fa-address-card"></i> <a href="Pharmacist_show.php">ข้อมูลเภสัชกร</a></h1>
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="Pharmacist_input.php">ค้นหา</a></h1>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->
    <div class="col-md-12">
<table class="table table-bordered">
<thead>
<tr>
<th>ลำดับ</th>
<th>รหัสประชาชนเภสัชกร</th>
<th>ชื่อ</th>
<th>นามสกุล</th>
<th>เบอร์โทร</th>
</tr>
</thead>
<tbody>
<?php $i=1; while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['Pham_id'];?></td>
<td><?php echo $row['PhamName'];?></td>
<td><?php echo $row['PhamSurname'];?></td>
<td><?php echo $row['PhamPhone'];?></td>
</tr>
<?php $i++; } 
?>
</tbody>
</table>
</div>
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->
</section>
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
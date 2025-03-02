<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); ?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="DrugType_frm.php">เพิ่มข้อมูลประเภทยา</a></h1>
   
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->


  <table class="table">
    <p>
      <thead>

        <tr class="danger">
          <!-- <th><strong><font color="#000099" size="2">รูปภาพ</th> -->
          <th><strong>
              <font color="#000099" size="2">รหัสรูปแบบยา</th>
          <th><strong>
              <font color="#000099" size="2">ชื่อรูปแบบยา</th>
          <th><strong>
              <font color="#000099" size="2">วิธีการใช้ยา</th>
          <!-- <th><strong><font color="#000099" size="2">สาขาวิชาที่จบการศึกษา</th>   
        <th><strong><font color="#000099" size="2">ที่อยู่</th>     
        <th><strong><font color="#000099" size="2">เบอร์โทร</th>      -->
          <th><strong>
              <font color="#000099" size="2">ลบ</th>
          <th><strong>
              <font color="#000099" size="2">แก้ไข</th>

        </tr>
      </thead>
      <?php
      include('condb.php');
      $query = "Select * from drugtype" or die("Error:" . mysqli_error());
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {

        ?>
        <tbody>

          <tr class="info">


            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugType_id']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugType_name']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugType_use']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo "<a href='DrugType_delete.php?DrugType_id=$row[DrugType_id]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้หรือไม่? !!!')\">ลบทิ้ง</a> "; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo "<a href='DrugType_frm_update.php?DrugType_id=$row[DrugType_id]'>แก้ไขข้อมูล</a> "; ?>
            </td>
          </tr>
        </tbody>

      <?php }
      mysqli_close($conn);
      ?>

  </table>

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
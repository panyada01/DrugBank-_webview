<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); ?>

<section class="content-header">
  <div class="container-fluid">
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="Drug_frm.php">เพิ่มข้อมูลบัญชียา</a></h1>
    <h1><i class="nav-icon fas fa-address-card"></i> <a href="Drug_input.php">ค้นหา</a></h1>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <!-- XXXXXXXXXXXXXXXXXXXXXx -->


  <table class="table">
    <p>
      <thead>

        <tr class="danger">
          <th><strong>
              <font color="#000099" size="2">รหัสยา</th>
          <th><strong>
              <font color="#000099" size="2">ชื่อยา</th>
          <th><strong>
              <font color="#000099" size="2">รูปแบบยา</th>
          <th><strong>
              <font color="#000099" size="2">บัญชียา</th>
          <th><strong>
              <font color="#000099" size="2">ตัวยาสำคัญ</th>
          <th><strong>
              <font color="#000099" size="2">ข้อบ่งใช้ยา</th>
          <th><strong>
              <font color="#000099" size="2">ขนาดและวิธีใช้</th>
          <th><strong>
              <font color="#000099" size="2">ข้อควรระวัง</th>
          <th><strong>
              <font color="#000099" size="2">ราคา</th>
          <th><strong>
              <font color="#000099" size="2">จำนวนควเหลือ</th>

          <th><strong>
              <font color="#000099" size="2">ลบ</th>
          <th><strong>
              <font color="#000099" size="2">แก้ไข</th>

        </tr>
      </thead>
      <?php
      $query = "Select * from drug g, drugtype e WHERE g.DrugType_id=e.DrugType_id order by g.Drug_id ;" or die("Error:" . mysqli_error());
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {

        ?>
        <tbody>

          <tr class="info">


            <td>
              <font color="#000000" size="2">
                <?php echo $row['Drug_id']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['Drug_name']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugType_name']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['Drug_acc']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['Drug_key']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['Druglndications']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugSizeUse']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugCaution']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugPrice']; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo $row['DrugAmount']; ?>
            </td>

            <td>
              <font color="#000000" size="2">
                <?php echo "<a href='Drug_delete.php?Drug_id=$row[Drug_id]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้หรือไม่? !!!')\">ลบทิ้ง</a> "; ?>
            </td>
            <td>
              <font color="#000000" size="2">
                <?php echo "<a href='Drug_frm_update.php?Drug_id=$row[Drug_id]'>แก้ไขข้อมูล</a> "; ?>
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
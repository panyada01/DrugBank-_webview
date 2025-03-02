<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<?php include('condb.php'); ?>

<section class="content-header">
    <div class="container-fluid">
        <h1><i class="nav-icon fas fa-address-card"></i> <a href="Pharmacist_frm.php">เพิ่มข้อมูลเภสัชกร</a></h1>
        <h1><i class="nav-icon fas fa-address-card"></i> <a href="Pharmacist_input.php">ค้นหา</a></h1>

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
                            <font color="#000099" size="2">รหัสประชาชนเภสัชกร</th>
                    <th><strong>
                            <font color="#000099" size="2">เลขที่ใบอนุญาตประกอบวิชาชีพ</th>
                    <th><strong>
                            <font color="#000099" size="2">ชื่อเภสัชกร</th>
                    <th><strong>
                            <font color="#000099" size="2">นามสกุล</th>
                    <th><strong>
                            <font color="#000099" size="2">ที่อยู่</th>
                    <th><strong>
                            <font color="#000099" size="2">เบอร์โทร</th>
                    <th><strong>
                            <font color="#000099" size="2">อีเมล</th>
                    <th><strong>
                            <font color="#000099" size="2">ลบ</th>
                    <th><strong>
                            <font color="#000099" size="2">แก้ไข</th>

                </tr>
            </thead>
            <?php
            // $query="Select * from drugdb c, tb_subject s,tb_university u WHERE c.subject_id=s.subject_id AND c.id_us=u.id_us order by c.id_cust ;" or die("Error:" . mysqli_error());
            // $result = mysqli_query($conn, $query); 
            // while($row = mysqli_fetch_array($result))  
            include('condb.php');
            $query = "Select * from pharmacist" or die("Error:" . mysqli_error());
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {

                ?>
                <tbody>

                    <tr class="info">


                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['Pham_id']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['PhamNum']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['PhamName']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['PhamSurname']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['PhamAdd']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['PhamPhone']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo $row['PhamEmail']; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo "<a href='Pharmacist_delete.php?Pham_id=$row[Pham_id]'onclick=\"return confirm('คุณต้องการลบข้อมูลนี้หรือไม่? !!!')\">ลบทิ้ง</a> "; ?>
                        </td>
                        <td>
                            <font color="#000000" size="2">
                                <?php echo "<a href='Pharmacist_frm_update.php?Pham_id=$row[Pham_id]'>แก้ไขข้อมูล</a> "; ?>
                        </td>
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
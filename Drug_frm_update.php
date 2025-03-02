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
    <?php
    include("condb.php");


    $Drug_id = mysqli_real_escape_string($conn, $_GET['Drug_id']);
    $query = "SELECT * FROM drug WHERE Drug_id=$Drug_id" or die("Error:" . mysqli_error(...));
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    extract($row);

    ?>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"> <br />
                    <h4 align="center"> แก้ไขข้อมูลบัญชียา </h4>
                    <hr />
                    <form action="Drug_update.php" method="POST" enctype="multipart/form-data" name="addprd"
                        class="form-horizontal" id="addprd">
                        <input type="hidden" name="hd_id_cust" value="<?php echo $id_cust; ?>" />



                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> รหัสยา</p>
                                <input type="text" name="txt_Drug_id" value="<?php echo $Drug_id; ?>"
                                    class="form-control" required placeholder="รหัสยา" />
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12">
                                <!--  <p> รหัสยาตัวแปรที่เก็บค่าไว้ใช้สำหรับ Update</p>-->
                                <input type="hidden" name="hdd_Drug_id" value=<?php echo $Drug_id; ?>>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> ชื่อยา</p>
                                <input type="text" name="txt_Drug_name" value="<?php echo $Drug_name; ?>"
                                    class="form-control" required placeholder="ชื่อยา" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <select name="selecttype_medicine" class="form-control">
                                    <option value="">เลือกประเภทยา</option>
                                    <?php

                                    include('condb.php');
                                    $query = "SELECT * FROM drugtype order by DrugType_id" or die("Error:" . mysqli_error(...)); 
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?= $row["DrugType_id"]; ?>"><?= $row["DrugType_name"]; ?></option>

                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> บัญชียา</p>
                                <input type="text" name="txt_Drug_acc" value="<?php echo $Drug_acc; ?>"
                                    class="form-control" required placeholder="บัญชียา" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> ตัวอย่างสำคัญ </p>
                                <textarea name="txt_Drug_key" class="form-control" rows="5"
                                    placeholder="กรอกรายละเอียดตัวอย่างสำคัญ"><?php echo $Drug_key; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> ข้อบ่งใช้ยา </p>
                                <textarea name="txt_Druglndications" class="form-control" rows="5"
                                    placeholder="กรอกรายละเอียดข้อบ่งใช้ยา"><?php echo $Druglndications; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> ขนาดและวิธีใช้ </p>
                                <textarea name="txt_DrugSizeUse" class="form-control" rows="5"
                                    placeholder="กรอกรายละเอียดขนาดและวิธีใช้"><?php echo $DrugSizeUse; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> ข้อควรระวัง </p>
                                <textarea name="txt_DrugCaution" class="form-control" rows="5"
                                    placeholder="กรอกรายละเอียดข้อควรระวัง"><?php echo $DrugCaution; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> ราคา</p>
                                <input type="text" name="txt_DrugPrice" value="<?php echo $DrugPrice; ?>"
                                    class="form-control" required placeholder="ราคา" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <p> จำนวนคงเหลือ</p>
                                <input type="text" name="txt_DrugAmount" value="<?php echo $DrugAmount; ?>"
                                    class="form-control" required placeholder="จำนวนคงเหลือ" />
                            </div>
                        </div>


                        <div class="col-sm-8 info">

                            <button type="submit" class="btn btn-primary" name="btnadd"> + แก้ไขข้อมูลบัญชียา </button>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">

                    </div>
                </div>






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
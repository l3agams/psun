<!DOCTYPE html>
<html lang="en">
<?php
require("1_head.php");
?>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="2.php">TOP 5 CANCER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">หน้าแรก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mean_cancer.php">ความหมายของมะเร็ง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mean_cancer_to.php"">ความหมายของมะเร็ง (ต่อ)</a>
          </li>
          <li class=" nav-item active">
                            <a class="nav-link" href="images.php">รูปภาพ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <h5 class="text-center">ความเป็นมาและความสำคัญของปัญหา</h5><br>
        <img src="images/10.jpg" style="width:50%; margin:auto auto; display:block;"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันโรคมะเร็งเป็นปัญหาสำคัญในประเทศไทยโรคมะเร็งเป็นสาเหตุการตายอันดับที่ 3  ตามสถิติมีคนตายจากโรคมะเร็งประมาณวันละ 160 คน  ตรวจพบผู้ป่วยโรคมะเร็งเพิ่มขึ้นโดยเฉลี่ย 64,000 รายต่อปี และเสียชีวิตปีละประมาณ 30,000 ราย  อุบัติการณ์ของโรคมะเร็งในประเทศไทย ประมาณ 153.6 ต่อประชากรไทย 100,000 คน สำหรับผู้ชาย และประมาณ 123.8 คน ต่อประชากร 100,000 คน สำหรับผู้หญิง ช่วงอายุที่พบเป็นมะเร็งมาก คือ เพศชาย 55-75 ปี เพศหญิง 45-65 ปี แต่มีแนวโน้มเพิ่มขึ้นตั้งแต่อายุ 30 ปี สำหรับเพศชาย และ 25 ปี สำหรับเพศหญิง แต่สำหรับหญิงที่มีเพศสัมพันธ์แล้วแนวโน้มของการเป็นโรคมะเร็งอาจมีตั้งแต่อายุน้อยกว่า 25 ปี  และพบอัตราการตายของประชากรไทยต่อแสนประชากรด้วยโรคมะเร็งเพิ่มสูงขึ้น ( สำนักนโยบายและยุทธศาสตร์กระทรวงสาธารณสุข อ้างอิงจากกรมการปกครองกระทรวงมหาดไทย,  2562)
        </div>
        <div class="col-3"></div>
    </div>
        
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="main.php" class="btn btn-info" role="button" style="margin-top: 2%;">
                    <h1>กลับสู่หน้าหลัก</h1>
                </a>
            </div>
        </div>
    </div>

    <?php
    require("2_footer.php");
    ?>

</body>

</html>
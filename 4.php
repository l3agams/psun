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
<h3 class="text-center"><strong>มะเร็งหลอดลมและปอด</strong></h3><br>
        <img src="images/40.jpg" style="width:50%; margin:auto auto; display:block;"><br>
<strong>พฤติกรรมเสี่ยง</strong> การสูบบุหรี่ด้วยตัวเองหรือการสูดดมควันบุหรี่มือสอง การสูดดมฝุ่น รวมถึงมลพิษในอากาศเป็นระยะเวลายาวนาน
<strong>อาการ</strong> ในระยะแรก ไม่มีอาการผิดปกติอะไรเลย เมื่อก้อนมะเร็งโตขึ้นจนไปกดหลอดลมหรือลุกลามไปสู่อวัยวะอื่น จะมีอาการไอมีเลือดออก เจ็บหน้าอก หอบเหนื่อย มีหน้าบวม แขนบวม เจ็บหน้าอกและหัวไหล่ น้ำหนักลด เบื่ออาหาร<br>
<strong>การวินิจฉัย</strong> <br>
1.ซักประวัติตรวจร่างกาย<br>
2.X-ray ปอด<br>
3.ตรวจชิ้นเนื้อจากปอด<br>
4.ตรวจเสมหะ<br>

<strong>การรักษา</strong> <br>
1.การผ่าตัด ทำในกรณีที่ก้อนขนาดไม่ใหญ่มาก<br>
2.การฉายแสงร่วมกับการให้เคมีบำบัด เพื่อช่วยยับยั้งชะลอการลุกลาม<br>
3.ประคับประคองตามอาการ<br>
<strong>การป้องกัน</strong> มะเร็งปอดเป็นโรคร้ายที่พบบ่อยและเมื่อเกิดขึ้นแล้ว สามารถรักษาให้หายขาดได้น้อย การป้องกันโดยการไม่สูบบุหรี่ หรือหากสูบบุหรี่อยู่ก็ควรเลิกหรือลดให้เร็วที่สุด ซึ่งจะช่วยลดความเสี่ยงลงได้มาก<br> 
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
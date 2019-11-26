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
    <table align="center">
        <tr>
            <td align="center">
                <h1>TOP 5</h1>
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td align="center">
                <img src="images/2.jpg">
            </td>
        </tr>
    </table>

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
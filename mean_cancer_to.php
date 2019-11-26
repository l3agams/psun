<!DOCTYPE html>
<html lang="en">
<?php
require("1_head.php");
require("connect.php");
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
                    <li class="nav-item active">
                        <a class="nav-link" href="mean_cancer_to.php"">ความหมายของมะเร็ง (ต่อ)</a>
          </li>
          <li class=" nav-item">
                            <a class="nav-link" href="images.php">รูปภาพ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td align="center">
                    <img src="images/6.jpg">
                </td>
            </tr>
            <br>
            <br>
            <tr>
                <td>
                    <ul>
                        <li>
                            <h4>โรคมะเร็ง คือ</h4>
                        </li>
                        <li>
                            <h4>เซลล์ปกติกลายเป้นเซลล์มะเร็งได้อย่างไร</h4>
                        </li>
                        <li>
                            <h4>มะเร็งแพร่กระจายได้อย่างไร</h4>
                        </li>
                        <li>
                            <h4>ปัจจัยเสี่ยงที่มีความเกี่ยวข้องกับโรคมะเร็งที่พบบ่อย</h4>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="btn btn-success" role="button">ประวัติการสอบถาม</h2>
                </td>
            </tr>
            <?php
            $sqlA = "SELECT * FROM comment";
            $query = mysqli_query($connect, $sqlA);
            while ($result = mysqli_fetch_array($query)) {
                echo '<tr style="border solid black 1 px;">';
                echo '<td>';
                echo $result['comment_id'].') ';
                echo $result['comment_details'];
                echo '</td>';
                echo '</tr>';
            }
            ?>
            <br> 
            <tr>
                <td>กล่องข้อความ/สอบถาม</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="comment_details" size="80">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" style="width:100px;">
                </td>
            </tr>
        </table>
    </form>

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
<?php
if (isset($_POST['submit'])) {
    $comment_details = $_POST['comment_details'];

    $sql = "INSERT INTO comment (comment_details) VALUES ('$comment_details')";

    $query = mysqli_query($connect, $sql);
} else {
    echo "error!!";
}
?>
<?php
include 'insert.php';
session_start();   
$result = $conn->query("SELECT * FROM activities ORDER BY id DESC");
$dsuccess = isset($_GET['success']) ? $_GET['success'] : null;
$add=isset($_GET['add']) ? $_GET['add'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>إدارة النادي</title>
    <link rel="icon" href="./img/ouricon.png"/>
  
    <link rel="stylesheet" href="./style.css" />
    <!--خطوط العريي-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=REM:wght@300&display=swap" rel="stylesheet" />
    <style>
       <?php
          include "./style.css" ?>

        body {
            font-family: 'Changa', sans-serif;
            background-color: #f4f4f4;
            
  margin: 0;
  padding: 0;
  overflow-x: hidden; /* Add this line to hide horizontal overflow */

        }


    </style>
</head>
<body>
<div class="nav-div">
<nav>
        <img src="./img/newlightlogonav.jpg" alt="Logo" class="Logo">
        <h1>نادي علم البيانات</h1>
        <ul>
            <li class="hideOnMobile"><a href="./index.php#5pp">
                    <p class=navp>الفعاليات</p>
                </a></li>
            <li class="hideOnMobile"><a href="./index.php#4pp">
                    <p class=navp>اللجان</p>
                </a></li>
            <li class="hideOnMobile"><a href="./index.php#3pp">
                    <p class=navp>عن النادي</p>
                </a></li>
            <li class="hideOnMobile"><a href="./index.php#2pp">
                    <p class=navp>الرؤية والرسالة</p>
                </a></li>
            <li class="hideOnMobile"><a href="./index.php">
                    <p class=navp>الصفحة الرئيسية</p>
                </a></li>
            <li class="hideOnComp dropList" onclick='showSidebar()'> <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                        height="24" viewBox="0 -960 960 960" width="24" style="fill: #3c7974;">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" /></svg></a></li>
        </ul>
        <ul class="sidebar">
            <li onclick='hideSidebar()'><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 -960 960 960" width="24" style="fill: #3c7974;">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg></a></li>
            <li><a href="./index.php#5pp">
                    <p class=navp>الفعاليات</p>
                </a></li>
            <li><a href="./index.php#4pp">
                    <p class=navp>اللجان</p>
                </a></li>
            <li><a href="./index.php#3pp">
                    <p class=navp>عن النادي</p>
                </a></li>
            <li><a href="./index.php#2pp">
                    <p class=navp>الرؤية والرسالة</p>
                </a></li>
            <li><a href="./index.php">
                    <p class=navp>الصفحة الرئيسية</p>
                </a></li>
        </ul>
    </nav>
    <div class="nav-horizontal-line"></div>
  </div>

   

<div class="divCore" style="margin-top:60px;">
<div class="formdiv">
<?php if (!empty($dsuccess)) : ?>
        <p style="color:white;"><?php echo "تم حذف الفعالية بجاح" ?></p>
    <?php endif; ?>
    <?php if (!empty($add)) : ?>
        <p style="color:white;"><?php echo "تمت إضافة الفعالية بنجاح" ?></p>
    <?php endif; ?>
    <?php if (!empty($errorMsg)) : ?>
        <p style="color: red;"><?php echo $errorMsg; ?></p>
    <?php endif; ?>

    <form class="add-activity-form" action="" method="post" enctype="multipart/form-data">
        <h1>عن الفعالية الجديدة</h1>
        <textarea name="newActivity" rows="8" cols="80" class="textarea"></textarea>
        <h1>صورة الفعالية</h1>
        <input type="file" id="image" name="image" class="coreinput"/><br/><br/>
        <input type="submit" name="submit" value="إضافة" class="coreinput"/>
        <input type="reset" name="reset" value="تعديل" class="coreinput"/>
    </form>
    </div>
</div>

<div class="gcard-container">
    <?php
    if ($result === false) {
        echo "Error executing the query: " . $conn->error;
    } else {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="gcard">
                <div class="img-wrapper">
                    <?php if (!empty($row['activityImage'])) : ?>
                        <?php $base64Image = 'data:image/jpeg;base64,' . base64_encode($row['activityImage']); ?>
                        <img src="<?php echo $base64Image; ?>" alt="Activity Image" class="slider-img">
                    <?php endif; ?>
                </div>
                <div class="gcard-body">
                    <?php if (!empty($row['newActivityText'])) : ?>
                        <p class="gcard-text"><?php echo $row['newActivityText']; ?></p>
                    <?php endif; ?>

                    <div class="gcard-buttons">
                        <a href="./update_form.php?id=<?php echo $row['id']; ?>" class="gubtn">تعديل</a>
                        <a href="./delete_activity.php?did=<?php echo $row['id']; ?>" class="gdbtn">حذف</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const readMoreLinks = document.querySelectorAll('.read-more-link');

        readMoreLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const parentCard = this.closest('.card1');
                const fullText = this.getAttribute('data-full-text');
                parentCard.querySelector('.card-text').innerHTML = fullText;
            });
        });
    });

    function showSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.style.display = "flex";
    }

    function hideSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.style.display = "none";
    }
</script>
</body>
</html>

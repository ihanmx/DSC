<?php
include "configer.php";

$successMsg = "";
$errorMsg = "";

$eid = isset($_GET['id']) ? $_GET['id'] : null;


if ($eid !== null) {
    $result = $conn->query("SELECT * FROM activities WHERE id=$eid");

    if ($result === false) {
        echo "Error executing the query: " . $conn->error;
    } else {
        $row = $result->fetch_assoc();

        if ($row === null) {
            echo "No data found for ID: " . $eid;

        } else {
            if (isset($_POST['uid'])) {
                $updatedActivityText = $_POST['newActivity'];
                $id = $_POST['uid'];

                if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                    $imageTmpPath = $_FILES["image"]["tmp_name"];
                    $updatedImageContent = file_get_contents($imageTmpPath);
                }

                if (empty($updatedActivityText)) {
                    $errorMsg = "يجب إدخال نص الفعالية";
                } else {
                    $stmt = $conn->prepare("UPDATE activities SET newActivityText=?, activityImage=? WHERE id=?");

                    if (!$stmt) {
                        $errorMsg = "حدث خطأ في استعداد الاستعلام: " . $conn->error;
                    } else {
                        $stmt->bind_param("ssi", $updatedActivityText, $updatedImageContent, $id);

                        $stmt->execute();

                        if ($stmt->affected_rows > 0) {
                            $successMsg = "تم تعديل الفعالية بنجاح";
                        } else {
                            $errorMsg = "لم يتم تحديث أي بيانات - SQL Error: " . $stmt->error;
                        }

                        $stmt->close();
                    }
                }
            }

            // Move the closing tag for the else block here
        }
    }
} else {
    // Display the "Invalid ID provided." message only if $eid is null
    echo "Invalid ID provided.";
    // You can customize this message or redirect the user to a specific page if needed.
    exit(); // Exit to prevent further execution of the script
}

$conn->close();
?>

<!-- Rest of the HTML code -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تحديث البيانات</title>
    <link rel="icon" href="./img/شفاف.png" />

    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=REM:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
<div class="nav-div">
    <nav>
      <img src="./img/newlightlogonav.jpg" alt="Logo" class="Logo">
      <h1>نادي علم البيانات</h1>
      <ul>
     
        <li><a href="./index.php#5pp" ><p>الفعاليات</p></a></li>
        <li><a href="./index.php#4pp"><p>اللجان</p></a></li>
        <li><a href="./index.php#3pp" > <p>عن النادي</p></a></li>
        <li><a href="./index.php#2pp"><p>الرؤية والرسالة</p></a></li>
        <li><a href="./index.php#1pp" ><p>الصفحة الرئيسية</p></a></li>
      </ul>
    </nav>
    <div class="nav-horizontal-line"></div>
  </div>
    <div class="divCore" style="margin-top:60px;">
        <?php if (!empty($successMsg)) : ?>
            <p style="color:white;"><?php echo $successMsg; ?></p>
            <a href="./page13.php">انقر للعودة</a>
        <?php endif; ?>

        <?php if (!empty($errorMsg)) : ?>
            <p style="color: red;"><?php echo $errorMsg; ?></p>
            <a href="./page13.php">انقر للعودة</a>
           
        <?php endif; ?>

        <form class="add-activity-form" action="" method="post" enctype="multipart/form-data">
            <h1>عن الفعالية الجديدة</h1>
            <textarea name="newActivity" rows="8" cols="80"><?php echo $row['newActivityText'] ?></textarea>
            <h1>أدخل الصورة المعدلة </h1>
            <input type="file" id="image" name="image" /><br /><br />
            <input type="hidden" name="uid" value="<?php echo $eid ?>" />
            <input type="submit" name="submit" value="تعديل" class="coreinput"/>
        </form>
    </div>
</body>

</html>

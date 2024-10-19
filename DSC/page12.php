<?php
include 'configer.php';

$successMsg = "";
$errorMsg = "";
session_start();    
// to use header function
if (isset($_POST['submit'])) {
    $password = $_POST["password"];
    
    // Check if the entered password is correct
    if ($password === '#dscmanage2023') {
        // Redirect to another page
        header("Location: ./page13.php");
        exit();
    } else {
        // Set an error message
        $errorMsg = "كلمة المرور غير صحيحة. الرجاء المحاولة مرة أخرى.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>الإداريين</title>
    <link rel="icon" href="./img/ouricon.png"/>
    <!--Bootstrap install-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!--خطوط العريي-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Changa&family=REM:wght@300&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <div class="main">
      <div class="blur">
        <form action="" method="post" class="formpas">
        <?php
                // Display error message if any
                if (!empty($errorMsg)) {
                    echo '<p style="color: red; text-align: center;">' . $errorMsg . '</p>';
                }
                ?>
          <p class="formp">
            :في حال كنت أحد إداريين الموقع الرجاء إدخال الرمز السرّي أو انقر على
            إلغاء للرجوع للصفحة الرئيسية
          </p>
          <input type="password" name="password" class="password" size="35" />
          <div class="btn-container">
            <a href="./index.php" class="btn">إلغاء</a>
            <input type="submit" name="submit" class="btn" value="الذهاب" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

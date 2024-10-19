<?php
include 'insert.php';
$result = $conn->query("SELECT * FROM activities");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>نادي علم البيانات</title>
    <link rel="icon" href="./img/شفاف.png" />
    <link rel="stylesheet" href="./style.css" />
    <!-- Bootstrap install -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=REM:wght@300&display=swap" rel="stylesheet"/>
    <style>      .gcarousel-inner {
        padding: 1em;
      }
      .gcard {
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        border: none;
      }
      .carousel-control-prev,
      .carousel-control-next {
        background-color: #e1e1e1;
        width: 6vh;
        height: 6vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
      }
      @media (min-width: 768px) {
        .gcarousel-item {
          margin-right: 0;
          flex: 0 0 33.333333%;
          display: block;
        }
        .gcarousel-inner {
          display: flex;
        }
      }
      .gcard .gimg-wrapper {
        max-width: 100%;
        height: 13em;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .gcard img {
        max-height: 100%;
      }
      @media (max-width: 767px) {
        .gcard .gimg-wrapper {
          height: 17em;
        }
      }</style>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img class="nav-icon" src="./img/شفاف.png" alt="DSC-icon" height="60px" width="60px"/>
        <span class="fs-4 title-txt">نادي علم البيانات</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="#4pp" class="nav-link">اللجان</a>
        </li>
        <li class="nav-item">
            <a href="#3pp" class="nav-link">عن النادي</a>
        </li>
        <li class="nav-item">
            <a href="#2pp" class="nav-link">الرؤية والرسالة</a>
        </li>
        <li class="nav-item">
            <a href="./index.html" class="nav-link">الصفحة الرئيسة</a>
        </li>
    </ul>
</header>
<div class="div2">
    <?php if (!empty($successMsg)) : ?>
        <p style="color:white;"><?php echo $successMsg; ?></p>
    <?php endif; ?>

    <?php if (!empty($errorMsg)) : ?>
        <p style="color: red;"><?php echo $errorMsg; ?></p>
    <?php endif; ?>
    <form class="add-activity-form" action="" method="post" enctype="multipart/form-data">
        <h1>عن الفعالية الجديدة</h1>
        <textarea name="newActivity" rows="8" cols="80"></textarea>
        <h1>صورة الفعالية</h1>
        <input type="file" id="image" name="image"/><br/><br/>
        <input type="submit" name="submit" value="إضافة"/>
        <input type="reset" name="reset" value="تعديل"/>
    </form>
</div>
<!-- slider -->


<section>
<div id="carouselExampleControls" class="gcarousel">
      <div class="gcarousel-inner">
      <?php
        if ($result === false) {
            echo "Error executing the query: " . $conn->error;
        } else {
            while ($row = $result->fetch_assoc()) {
                ?>
        <div class="gcarousel-item active">
          <div class="gcard">
            <div class="img-wrapper">
            <?php if (!empty($row['activityImage'])) : ?>
                            <?php $base64Image = 'data:image/jpeg;base64,' . base64_encode($row['activityImage']); ?>
                            <img src="<?php echo $base64Image; ?>" alt="Activity Image" class="d-block w-100">
                        <?php endif; ?>
            </div>
            <div class="gcard-body">
            <?php if (!empty($row['newActivityText'])) : ?>
                            <p class="card-text"><?php echo $row['newActivityText']; ?></p>
                        <?php endif; ?>


                <div class="gcard-buttons">
                        <a href="update_form.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_activity.php?did=<?php echo $row['id']; ?>">Delete</a>
                    </div>
                    <?php
            }
        }
        ?>
            </div>
          </div>
        </div>
      </div>
    </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Bootstrap install -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="
  sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <!-- js -->

    <section>
    <div id="carouselExampleControls" class="carousel">
        <div class="carousel-inner">
            <?php
            if ($result === false) {
                echo "Error executing the query: " . $conn->error;
            } else {
                $active = 'active'; // Variable to track the active state of carousel items
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="carousel-item <?php echo $active; ?>">
                        <div class="card">
                            <div class="img-wrapper">
                                <?php if (!empty($row['activityImage'])) : ?>
                                    <?php $base64Image = 'data:image/jpeg;base64,' . base64_encode($row['activityImage']); ?>
                                    <img src="<?php echo $base64Image; ?>" alt="Activity Image" class="d-block w-100">
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($row['newActivityText'])) : ?>
                                    <p class="card-text"><?php echo $row['newActivityText']; ?></p>
                                <?php endif; ?>
                                <div class="card-buttons">
                                    <a href="update_form.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    <a href="delete_activity.php?did=<?php echo $row['id']; ?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $active = ''; // Set active to an empty string for subsequent items
                }
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


</body>
</html>
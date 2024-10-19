<?php
include 'insert.php';
$result = $conn->query("SELECT * FROM activities ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="icon" href="./img/ouricon.png" />

    <link rel="stylesheet" href="style.css"  /> 



    
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
  

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=REM:wght@300&display=swap" rel="stylesheet" />
    <style>
   
         <?php
          include "./style.css" ?>

    </style>
</head>

<body style="overflow-x: hidden">
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
            <li class="hideOnMobile"><a href="./page12.php">
                    <p class=navp>قسم الإداريين</p>
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
            <li><a href="./page12.php">
                    <p class=navp>قسم الإداريين</p>
                </a></li>
        </ul>
    </nav>
    <section id="First-p">



        <div class="home-p" id="1pp">
            <div class="h-container">
                <div class="left-d">
                    <div class="text-overlay1">
                        <h1 class="anim">
                            لخلق الوعي حول أهمية<br />
                            علم البيانات وتحليلها
                        </h1>
                        <br />
                        <p class="anim">
                            ولإعداد طلاب بمهارات تقنية عالية وتحقيق<br />
                            أفضل الفرص الوظيفية لهم
                        </p>
                    </div>
                </div>
                <div class="right-d">
                    <img src="./img/new1.png" alt="" class="h-img anim" />
                </div>
            </div>
        </div>
    </section>

    <section id="Second-p ">
        <div class="div2" id="2pp" style="overflow:hidden">
            <table class="table-1" cellspacing="10px">
                <tr>
                    <td>
                        <h1><b>رؤيتنا</b></h1>

                        <p>
                            أن تكون جامعة الأمير سطام بن عبد العزيز رائدة في مجال علم
                            البيانات<br />
                            وتحليلاتها في المملكة العربية السعودية، وأن نسهم في تطوير مجتمع
                            <br />
                            متميز تقنيًا واعٍ بأهمية البيانات ومُلتزم بأخلاقها
                        </p>
                    </td>
                    <td>
                        <img class="eye" src="img/Asset 2@3x.png" alt="vision" />
                    </td>
                </tr>
            </table>

            <table cellspacing="10px">
                <tr>
                    <td>
                        <img class="message" src="./img/Asset 1@3x.png" alt="" />
                    </td>
                    <td class="td-m">
                        <h1><b>رسالتنا</b></h1>
                        <p>
                            تقديم دورات تدريبية وخدمات عالية الجودة ومستجيبة للصناعة، <br />
                            تتماشى مع رؤية جامعة الأمير سطام بن عبد العزيز ورسالتها <br />
                            لتعزيز التعلم مدى الحياة
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <div class="hrd">

    </div>

    <section class="sec-3" id="3pp">
        <div class="flex-container">
            <div class="flex-item">
                <div class="card-content">
                    <h2 class="p3-text">هيكلة النادي</h2>
                    <a href="./page8.html" style="color: white">
                        <button class="btn">المزيد</button></a>
                </div>
            </div>
            <div class="flex-item">
                <div class="card-content">
                    <h2 class="p3-text">الفئة المستهدفة</h2>
                    <a href="./page9.html" style="color: white">
                        <button class="btn">المزيد</button></a>
                </div>
            </div>
            <div class="flex-item">
                <div class="card-content">
                    <h2 class="p3-text">الإستراتيجية</h2>
                    <a href="./page10.html" style="color: white">
                        <button class="btn">المزيد</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="S-4" id="4pp">
        <div class="grid">
            <div class="grid-item">
                <a href="./page2.html">
                    <img src="./img/استشارية2.png" alt="Image 1" /></a>
                <div class="img-text">اللجنة الاستشارية</div>
            </div>
            <div class="grid-item">
                <a href="./Page3.html">
                    <img src="./img/علاقات2.png" alt="Image 2" /></a>
                <div class="img-text">العلاقات العامة</div>
            </div>
            <div class="grid-item">
                <a href="./Page4.html">
                    <img src="./img/تواصل2.png" alt="Image 3" /></a>
                <div class="img-text">التواصل المؤسسي والادارة الداخلية</div>
            </div>
            <div class="grid-item">
                <a href="./Page5.html">
                    <img src="./img/تنظيم2.png" alt="Image 4" /></a>
                <div class="img-text">التنظيم والتنسيق</div>
            </div>
            <div class="grid-item">
                <a href="./Page6.html">
                    <img src="./img/تصميم2.png" alt="Image 5" /></a>
                <div class="img-text">التصميم والمونتاج</div>
            </div>
            <div class="grid-item">
                <a href="./Page7.html">
                    <img src="./img/اعلام2.png" alt="Image 6" /></a>
                <div class="img-text">الإعلام</div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="powerbi">
            <iframe title="Report Section" width="80%" height="80%"
                src="https://app.powerbi.com/view?r=eyJrIjoiODRhMGE4OTktN2ZiYS00MGE5LWJhMmUtYTI2ZWM4MTg0ZjNmIiwidCI6IjhkNTZjNGJlLTc4N2EtNDJhZi05NTM2LTgyNTRlNzA5NzE2NCIsImMiOjl9"
                frameborder="0" allowfullscreen="true"></iframe>
        </div>
    </section>
    <section class="slider"   id="5pp">
      <!-- Swiper -->
    <div class="swiper-container mySwiper " id="5pp">
      <div class="swiper-wrapper">
        <?php
        if ($result === false) {
          echo "Error executing the query: " . $conn->error;
        } else {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="swiper-slide">';
            ?>
            <div class="card1">
              <div class="img-wrapper">
                <?php if (!empty($row['activityImage'])) : ?>
                  <?php $base64Image = 'data:image/jpeg;base64,' . base64_encode($row['activityImage']); ?>
                  <img src="<?php echo $base64Image; ?>" alt="Activity Image" class="">
                <?php endif; ?>
              </div>
              <div class="card-body1">
              <?php
if (!empty($row['newActivityText'])) {
  $activityText = $row['newActivityText'];
  $maxLength = 380;

  // Check if the text length is greater than the maximum length
  if (mb_strlen($activityText) > $maxLength) {
    $truncatedText = mb_substr($activityText, 0, $maxLength) . '...';
    echo '<p class="card-text">' . $truncatedText . ' <a href="#" class="read-more-link" data-full-text="' . htmlspecialchars($activityText) . '">المزيد</a></p>';
  } else {
    // If the text is not longer than the maximum length, display it as-is
    echo '<p class="card-text">' . $activityText . '</p>';
  }
}
?>
              </div>
            </div>
            <?php
            echo '</div>'; // Close swiper-slide
          }
        }
        ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
      
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints:{
            0: {  slidesPerView: 1,},
            520: {  slidesPerView: 2,},
            950:{  slidesPerView: 3,},




        },
      });
    </script>

        
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

        </div>
    </section>

    
    
    <footer>
        <div class="footer-container">
            <div class="footer-logo">

                <img src="./img/newlogodark.png" alt="Logo">
                <p> &nbsp; &nbsp; &nbsp; &nbsp;©DSC</p>
            </div>
            <div class="contact-icons">
                <a href="https://www.linkedin.com/company/dsclubpsau/" target="_blank"><img src="./img/li.webp"
                        alt="LinkedIn" class="a-media"></a>
                <a href="https://x.com/dsclubpsau?s=21&t=KIRMrbZq1RMhu6hp8_1Kkg" target="_blank"><img src="./img/x.png"
                        alt="X" class="a-media"></a>
                <a href="https://t.snapchat.com/jTzh4Mg1"><img src="./img/snap.png" alt="Snap" class="a-media"></a>
                <a href="mailto:psaudatascienceclub@gmail.com"><img src="./img/gmail.png" alt="Gmail"
                        class="a-media"></a>
                <a href="https://hubs.app/home" target="_blank"><img src="./img/hubs.png" alt="Hubs"
                        class="a-media"></a>
            </div>
        </div>
    </footer>

</body>

</html>
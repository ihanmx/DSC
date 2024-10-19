<?php 
include 'configer.php';

$did = isset($_GET['did']) ? $_GET['did'] : null;

if (!empty($did)) {
    // Display a confirmation message using JavaScript
    echo "<script>
            var confirmDelete = confirm('هل أنت متأكد من أنك تريد حذف هذه الفعالية؟');
            if (confirmDelete) {
                window.location.href = './delete_record.php?did={$did}';
            } else {
                window.location.href = './page13.php';  // Redirect to another page or handle accordingly
            }
          </script>";}





?>
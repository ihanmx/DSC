<?php 
include'configer.php';

// Check if the form is submitted
$successMsg="";
$errorMsg="";
if(isset($_POST['submit'])) {
    // Get the new activity text
    $newActivityText = $_POST['newActivity'];
    $trimmedText = strlen($activityText) > 420 ? substr($activityText, 0, 420) . '...' : $activityText;

    // Get the image details
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $imageTmpPath = $_FILES["image"]["tmp_name"];
    $imageContent = file_get_contents($imageTmpPath);}

    // Insert data into the activities table
    if (empty($newActivityText)) {
        $errorMsg = "يجب إدخال نص الفعالية";
    } else {
    $stmt = $conn->prepare("INSERT INTO activities (newActivityText, activityImage) VALUES (?, ?)");
    $stmt->bind_param("ss", $newActivityText, $imageContent);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        $successMsg = "تمت إضافة الفعالية بنجاح";
        // Redirect to the same page after successful submission to avoid printing the message when reloading the page
        header("Location: ./page13.php?add=1");
        exit();
    } else {
        $errrorMsg= "Error: " . $stmt->error;
    }

    $stmt->close();
}
}
?>
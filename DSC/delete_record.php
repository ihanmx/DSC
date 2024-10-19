<?php
 include'configer.php';
 $did = isset($_GET['did']) ? $_GET['did'] : null;


    if (!empty($did)) {
        // Perform the deletion query
        $sql = "DELETE FROM activities WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $did);
    
        if ($stmt->execute()) {
        // Deletion successful
        header("Location: ./page13.php?success=1");  // Redirect to another page with success parameter
        exit();
    } else {
        // Deletion failed
        echo "Error deleting record";
    }
}
?>
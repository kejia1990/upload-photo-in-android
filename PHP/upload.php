<?php
$target_path = "profilePicture/" . basename($_FILES['image']['name']);
try {
    //throw exception if can't move the file
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        throw new Exception('Could not move file');
    }

    $response["success"] = 1;
    $response["error"] = 0;
    
} catch (Exception $e) {
    $response["success"] = 0;
    $response["error"] = 1;
    $response["error_msg"] = "can't upload file";
	
}
echo json_encode($response);
?>
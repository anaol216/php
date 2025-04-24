<?php 
if (isset($_POST["submit"])) {
    $file = $_FILES["file"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png", "pdf", "docx", "txt", "mp4", "mp3");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = "uploads/".$fileNameNew;
                
                if (!is_dir("uploads")) {
                    mkdir("uploads", 0777, true); // Creates folder if it doesn't exist
                }

                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: files.php?uploadsuccess");
                exit;
            } else {
                echo "❌ Your file is too big!";
            }
        } else {
            echo "⚠️ There was an error uploading your file!";
        }
    } else {
        echo "❗ File type not allowed!";
    }
}
?>

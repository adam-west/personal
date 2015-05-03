<?php
    if(isset($_POST['upload'])) {
        $uploaddir = '/home/adam/public_html/uploads/'; # Outside of web root
        $uploadfile = tempnam($uploaddir, "upload_");

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Done. " . $uploadfile . "<br/>";       
        } else {
            echo "File uploading failed.<br/>";
        }
    }
?>

<form method="POST" action="upload.php" ENCTYPE="multipart/form-data">
    Select the file to upload: <input type="file" name="userfile"><br/>
    <input type="submit" name="upload" value="upload">
</form>

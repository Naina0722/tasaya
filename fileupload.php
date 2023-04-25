<?php
    error_reporting(0);
?>
<html>
<head>
    <title>file Upload</title>
</head>
<body>
    <form action='#' method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br>
        <input type="submit" name="submit" value="Upload file">
    </form>
</body>
</html>

<?php
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;
echo $folder;
move_uploaded_file($tempname, $folder);
?>
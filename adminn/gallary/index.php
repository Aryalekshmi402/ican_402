<!doctype html>
<html>
<head>
    <title>How to make photo gallery from image directory with PHP</title>
    <link href='simplelightbox-master/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
    <script src='jquery-3.0.0.js' type='text/javascript'></script>
    <script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.js"></script>

    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class='container' >
    <div class="gallery">
<div>
    <h1> <button style="background-color: #5cb85c;"><a href="../../index.php" >HOME</a></button></h1>
</div>

<?php
$imagesDirectory = "images";
if (is_dir($imagesDirectory))
{
    $opendirectory = opendir($imagesDirectory);

    while (($image = readdir($opendirectory)) !== false)
    {
        if(($image == '.') || ($image == '..'))
        {
            continue;
        }

        $imgFileType = pathinfo($image,PATHINFO_EXTENSION);

        if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
        {
            echo "<img src='images/".$image."' width='200' height='200'> ";
        }
    }

    closedir($opendirectory);

}
?>
</body>
</html>

<?php 
require_once 'libs/GoogleApi.php';
                                                                             
//$credentialsPath = 'archivostubagua-28591ff69fd4.json';
//$folderId = '1TOzr41Xkjj_8vK0egVO9Iuv0LG0Z_4J7';
$folderId ='1ypcvmK1ANPTld8xdyW2aoRH9JSUdJwOQ';
$imageName = '9747';

$googleDrive = new GoogleDriveImages($credentialsPath);

$images = $googleDrive->searchAll(7,67, $imageName); 

$imageurl = "https://lh3.googleusercontent.com/d/" .$images[0];
?>
<img src="<?php echo $imageurl ?>" alt="" width="25%" height="25%">
<?php
 //var_dump ($images);
 /*foreach ($images as $image) {
    $imageurl = "https://lh3.googleusercontent.com/d/" .$image[0];
    ?>
    <img src="<?php echo $imageurl ?>" alt="" width="25%" height="25%">
    <?php
 }*/

?>
<?php 
$dir = 'videos';
$videoArray = scandir($dir);
foreach ($videoArray as &$video) {
    
    if (!strpos($video, ".mp4")>0 || !strpos($video, ".avi")>0) {
    	// unset($video);
    	$videoArray = array_diff($videoArray,array($video));
    }
}
// var_dump($videoArray);
?>
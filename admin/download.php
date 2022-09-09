<?php

// Create folder to zip file
$zip = new ZipArchive();
$zip->open("../file/all-image.zip", ZipArchive::CREATE);
$file_with_path = "../image/1.jpg";
$name = "2.jpg";
$zip->addFile($file_with_path,"cactus/".$name);
$zip->addEmptyDir("folder");
$zip->close();



// $zip_file = "../file/all-image.zip"; 
// touch($zip_file);

// $zip = new ZipArchive;
// $this_zip = $zip->open($zip_file);

// if ($this_zip) {
// 	$file_with_path = "../image/";
// 	$name = "corn";
// 	$zip->addFile($file_with_path,$name);
// }




// if ($this_zip) {



// 	$folder = opendir('./../image');

// 	if ($folder) {
// 		while (false !== ($image = readdir($folder))) {
// 			if ($image !== "." && $image !== "..") {
				
// 				$file_with_path = "../image/".$image;
// 				$zip->addFile($file_with_path,$image);

// 			}
// 		}
// 		closedir($folder);
// 	}

// 	if (file_exists($zip_file)) {
// 		$demo_name = "your-all-images.zip";

// 		header('Content-type: application/zip');
// 		header('Content-Disposition: attachment; filename"'.$demo_name.'"');

// 		readfile($zip_file);
// 	}
// }






?>
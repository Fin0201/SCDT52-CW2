<?php

class ImageProcessor {
  
    public static function upload($image, $directory = './images/uploads', $sizeLimit = 1000000, $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'])
    {
        // Check if the file is an image type
        if (exif_imagetype($image['tmp_name']) === false) {
            throw new Exception('The uploaded file is not an image.');
        }

        // Check if the file size is less than the limit
        if ($image['size'] > $sizeLimit) {
            throw new Exception('The uploaded image exceeds the size limit.');
        }

        // Check if the file has a valid extension
        $ext = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowedExtensions)) {
            throw new Exception('The uploaded image has an invalid extension.');
        }

        // Ensure that the destination directory exists and is writable
        if (!is_dir($directory)) {
            throw new Exception('The destination directory does not exist.');
        }
        if (!is_writable($directory)) {
            throw new Exception('The destination directory is not writable.');
        }

        // Generate a unique filename for the uploaded image
        $uniqueString = uniqid();
        $filename =  $uniqueString . '.' . $ext;

        // Create the full path to the destination directory
        $destination = $directory . '/' . $filename;

        // Move the uploaded image to the destination directory
        move_uploaded_file($image['tmp_name'], $destination);

        // Return the new, unique path of the uploaded image
        return $destination;
    }
}


?>
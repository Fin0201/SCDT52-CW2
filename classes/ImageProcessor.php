<?php
    class Image
    {
        public static function upload($image, $directory = "./images/uploads", $sizeLimit = 1000000, $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']) : string
        {

            if(exif_imagetype($image['tmp_name' === false])) {
                throw new Exception("The file is not an image.");
            }

            //Validate the size
            if ($image['size'] > $sizeLimit) {
                throw new Exception(("File is too large."));
            }

            //Validate the extension type
            $ext = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
            if (!in_array($ext, $allowedExtensions)) {
                throw new Exception('The uploaded image has an invalid extension.');
            }



            
            // Generate a unique filename for the uploaded image
            $uniqueString = uniqid();
            $filename =  $uniqueString . '.' . $ext;

            return $destination;
        }
    }
?>
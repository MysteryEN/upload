<?php
        require_once ("connection.php");

        $connection = new mySQL();

        $connection->connect('localhost', 'root', 'admin', 'library');

$fileToUpload=basename($_FILES["filecsv1"]["name"]);

$target_dir = "uploads/";

$target_file = $target_dir. $fileToUpload;

$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($FileType == "csv") 
{
	
	 if (move_uploaded_file($_FILES["filecsv1"]["tmp_name"], $target_file))
	 {
        echo "The file ". basename( $_FILES["filecsv1"]["name"]). " has been uploaded.";
     }

   if (file_exists($target_file))
   {
       echo "File already exists!<br>";
	   echo $target_file;

	   
        $myquery = "LOAD DATA LOCAL INFILE '".$target_file."'
          INTO TABLE tunda_vendors_products FIELDS TERMINATED BY ';'
          OPTIONALLY ENCLOSED BY '\"'
          LINES TERMINATED BY '\n'  IGNORE 1 LINES ( `imported`, `to_skip`, `website`, `store`, `entity_id`, `file_id`, `product_type`, `vendor_sku`, `manufacturer_sku`, `ean`, `name`, `description`)";
		  
      echo  $query = $connection->query($myquery);        

      $connection->close();

      echo "Succesfull execution of query!!";
	  
   }
}
else
{
	echo "Upload failed because the file specified is not csv!";
}
?>
<!DOCTYPE html> <html lang="en">

<head> <meta charset="UTF-8">

<title>Upload Form for Files</title> </head>
<body>

<form action="upload-manager.php"
method="post" enctype="multipart/form-
data"><h2>Upload File</h2> <label
for="fileSelect">Filename:</label>
<input type="file" name="photo"
id="fileSelect">

<input type="submit" name="submit"
value="Upload">

<p><strong>Note:</strong> Only .jpg,
jpeg, .gif, .-png formats allowed to a max
size of 5 MB.</p>

</form> </body> </html>

<?php // Checking Form Submission
if ($_SERVER["REQUEST_METHOD"] ==
"POST") {

if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){

Sallowed == array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
$filename = $_FILES["photo"]["name"];
$filetype = $_FILES["photo"]["type"];
$filesize = $_FILES["photo"]["size"];

Sext == pathinfo($filename,"PATHINFO_ EXTENSION") ;

if(!array_key_exists($ext, $allowed) );
die("Error: Please choose a correct file"); ?>
</form> 
</body> 
</html>


<?php 
if ($_SERVER[ "REQUEST _METHOD"] == "POST") {

if(isset($_FILES["photo"]) &&
$_FILES["photo"]["error"] == 0){

Sallowed == array("jpg" => "“image/jpg",
"jpeg" => "image/jpeg", "gif" =>
"image/gif", "png" => "image/png");
$filename = $_FILES["photo"]["name"];
$filetype = $_FILES["photo"]["type"];
$filesize = $_FILES["photo"]["size"];


Sext == pathinfo($filename,
PATHINFO_EXTENSION) ;

if(!array_key_exists($ext, $allowed) )
die("Error: Please choose a correct file
format.");

$maxsize = 5 * 1024 * 1024;

if($filesize > $maxsize) die("Error: Size of
file is greater than the permitted limit.");

if(in_array($filetype, $allowed) ) {

if (file_exists("Uupload/" . $filename) ){
echo $filename . " is existing already.";
} else{
move_uploaded_file($_FILES["photo"]
["tmp_name"], "“upload/" . $filename) ;

echo "The file was successfully uploaded.";

}}else{
echo "Error: ". $FILES["photo"]["error"]; }
}

else{

echo "Error: There has been a problem
uploading the file, Please Try Again.";
}} 
}}
 ?>

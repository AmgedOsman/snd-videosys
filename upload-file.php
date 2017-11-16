<?PHP

if(isset($_POST['submit_video']))
{
  $uploadfile=$_FILES["upload_file"]["tmp_name"];
  $folder="videos/";
  move_uploaded_file($_FILES["upload_file"]["tmp_name"], $folder.$_FILES["upload_file"]["name"]);
  echo $folder.$_FILES["upload_file"]["name"];
  exit();
}

?>
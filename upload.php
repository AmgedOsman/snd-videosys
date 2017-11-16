<?PHP
session_start();
include('includes/db-connect.php');
include('includes/admin.php');
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

if(isset($_POST['submit_video']))
{
  $uploadfile=$_FILES["upload_file"]["tmp_name"];
  $folder="videos/".$_POST['nickname']."/";
if (!file_exists('videos/'.$_POST['nickname'])) {
    mkdir('videos/'.$_POST['nickname'], 0777, true);
}
  move_uploaded_file($_FILES["upload_file"]["tmp_name"], $folder.$_FILES["upload_file"]["name"]);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload UI</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
        <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.form.min.js"></script>
    <script src="assets/js/upload.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Slice N' Dice</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="index.php">Home </a></li>
                    <li class="active" role="presentation"><a href="upload.php">Upload a video</a></li>
                    <li role="presentation"><a href="manage.php">Manage Uploads</a></li>
                </ul>
                <button class="btn btn-default navbar-btn" type="button">Logout </button>
                <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#signin">Welcome, Mostafa</button>
            </div>
        </div>
    </nav>
    <div class="progress">
        <div class="progress-bar" id="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>
    </div>
    <h1 class="text-center">Uploading a video</h1>
    <div class="tsize" align="center">
        <form id="upload-form" enctype="multipart/form-data" action="upload.php" method="POST">
            <div class="form-group" align="center">
                <input class="form-control" type="text" placeholder="Nickname" name="nickname">
            </div>
            <div class="form-group">
                <div class="dropdown kill">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Weapon Type<span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" id="menu">
                        <li role="presentation"><a href="#">AR </a></li>
                        <li role="presentation"><a href="#">SR </a></li>
                        <li role="presentation"><a href="#">Shotgun </a></li>
                        <li role="presentation"><a href="#">Pistol </a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#">Car / Motorbik</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#">Punch</a></li>
                        <li role="presentation"><a href="#">Pan </a></li>
                    </ul>
                </div>
                <div class="dropdown kill">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Kill Type<span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" id="menu2">
                        <li role="presentation"><a href="#">Fail </a></li>
                        <li role="presentation"><a href="#">Highlight </a></li>
                    </ul>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Time : ex(02:31)">
            </div>
            <div class="form-group" align="center">
                <textarea class="form-control" rows="4" cols="20" placeholder="Description"></textarea>
            </div>
            <div class="form-group" align="center">
                <input type="file" id="upload_file" name="upload_file" />
            </div>
            <div class="form-group">
                <button class="btn btn-success upload" type="submit" name="submit_video" onclick='upload_image();'>Upload </button>
            </div>
        </form>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="upload">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Upload Success</h4></div>
                <div class="modal-body" align="center">
                    <img src="assets/img/check.svg" width="250" height="250">
                </div>
            </div>
        </div>
    </div>

</body>

</html>
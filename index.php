<?PHP
session_start();
include('includes/db-connect.php');
include('includes/admin.php');
if(isset($_POST['username'])){
    $admin = new Admin();
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    echo '<script>alert("login");</script>';
    if($admin->userLogin($username, $password)){
        $_SESSION["username"] = $username;
        header("Location: manage.php");
    }
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
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Slice N' Dice</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="index.php">Home </a></li>
                    <li role="presentation"><a href="upload.php">Upload a video</a></li>
                    <li role="presentation"><a href="manage.php">Manage Uploads</a></li>
                </ul>
                <?PHP
                        if(!isset($_SESSION['username'])){
                    ?>
                        <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#signin">Sign In</button>
                    <?php } else { ?>
                        
                <button class="btn btn-default navbar-btn">Welcome, <?php echo $_SESSION['username']; ?></button>
                    <?php } ?>
            </div>
        </div>
        
    </nav>
    <h1 class="text-center">Our Latest YouTube Video</h1>
    <div align="center">
        <iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/Dwbdq_UU3p0"></iframe>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="signin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Sign In</h4></div>
                <div class="modal-body">
                    <form method="POST" action="index.php" name="submit">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Username" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password" id="password" name="password">
                        </div>
                    
                    <h4>To activate your account press <a href="#">here </a></h4></div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Sign In</button>
                </div>
            </form>        
            </div>
        </div>
    </div>
    <div>
        <div id="share">

  <!-- facebook -->
  <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fa fa-facebook"></i></a>

  <!-- twitter -->
  <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fa fa-twitter"></i></a>
  
</div>


    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
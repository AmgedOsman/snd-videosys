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
        <div class="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>
    </div>
    <h1 class="text-center">Uploading a video</h1>
    <div class="tsize" align="center">
        <form>
            <div class="form-group" align="center">
                <input class="form-control" type="text" placeholder="Title">
            </div>
            <div class="form-group" align="center">
                <textarea class="form-control" rows="4" cols="20" placeholder="Description"></textarea>
            </div>
            <div class="form-group" align="center">
                <input class="form-control browse" type="text" readonly="">
                <button class="btn btn-default browse" type="button">Browse </button>
            </div>
            <div class="form-group">
                <button class="btn btn-success upload" type="button">Upload </button>
            </div>
        </form>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="signin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Sign In</h4></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                    </form>
                    <h4>To activate your account press <a href="#">here </a></h4></div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
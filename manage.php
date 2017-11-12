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
                    <li role="presentation"><a href="upload.php">Upload a video</a></li>
                    <li class="active" role="presentation"><a href="manage.php">Manage Uploads</a></li>
                </ul>
                <button class="btn btn-default navbar-btn" type="button">Logout </button>
                <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#signin">Welcome, Mostafa</button>
            </div>
        </div>
    </nav>
    <h1 class="text-center">Managing Uploads</h1>
    <div class="clearfix"></div>
    <div>
        <div class="table-responsive content-table tsize" align="center">
            <table class="table table-hover">
                <thead>
                    <tr class="content-table">
                        <th>Video </th>
                        <th>Descriptions</th>
                        <th>Status </th>
                        <th>Actions </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Video 1</td>
                        <td>This is a video that I hope you like.</td>
                        <td>Pending </td>
                        <td>
                            <button class="btn btn-danger" type="button">Delete </button>
                            <button class="btn btn-primary" type="button">Edit </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Video 2</td>
                        <td>This is a video that I hope you like.</td>
                        <td>Pending </td>
                        <td>
                            <button class="btn btn-danger" type="button">Delete </button>
                            <button class="btn btn-primary" type="button">Edit </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
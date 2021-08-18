<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/summernote.css">
        <title>HSM Admin</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
        <?php include 'inc/admenu.php'?>
        <?php include 'inc/header.php'?>
        <div id="global">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading">New article</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="Enter title">
                        </div>
                        <label>Content</label>
                        <div id="summernote"></div>
                        <div class="form-group text-right" style="margin-top:20px">
                            <button type="submit" class="btn btn-default">Save Draft</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="cm-footer"><span class="pull-left">Annoye</span><span class="pull-right">&copy; Project 1 UU CSE</span></footer>
        </div>
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
        <script src="assets/js/summernote.min.js"></script>
        <script src="assets/js/demo/notepad.js"></script>
    </body>
</html>
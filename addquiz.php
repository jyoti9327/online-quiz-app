<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Online Quiz System</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Javascript:void(0)"><b>Online Quiz System</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="addquiz.php">Add Quiz</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo''; ?> > <a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row"><span class="title1" style="margin-left:40%;font-size:30px;color:#fff;"><b>Enter Quiz Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6">   
                        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="name"></label>  
                                    <div class="col-md-12">
                                        <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12"> 
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                    </div>
                                </div>

                            </fieldset>
                        </form></div>               
            </div>
        </div>
    </div>
</body>
</html>

<?php
include_once 'auth-class.php';
$userauth = new userauth();
$userauth->_authenticate();
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <head>
        <title>The Friendly Everyday Email Robot</title>
        <link rel="stylesheet" href="dist/css/bootstrap.css">
        <link rel="stylesheet" href="dist/css/bootstrap-theme.css">
        <link href="feer.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        <script src="jumbotron.js"></script>
        <!-- THIS SCRIPT IS SPECIFIC TO THE MAIN PAGE
        -->
        <script src="feer.js" type="application/javascript"></script>
    </head>

    <body>
        <div class="bg"></div>
        <div class=jumbotron>
            <div class="row col-lg-6">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="https://github.com/stratosmacker/comp426/">Source Code</a></li>
                </ul>
                <h1>The Friendly Everyday Email Robot</h1>
                <p class="lead">Welcome <?php echo $userauth->get_nicename($_SESSION['user_login']); ?> </p>
                <input type="button" onclick="javascript:window.location.href='logout.php'" value="logout" class="btn btn-primary btn-sm"/>
            </div>
            <!-- Start main html
            -->

            <div class="row">
                <form role="form" class="" id="restform">
                    <div id="params">
                        <div class="col-xs-2">
                            <label>From:</label> 
                            <input name="from" type="email" class="form-control pval" placeholder="Enter email"/>
                        </div>
                        <div class=col-xs-2>
                            <label>To:</label>
                            <input name="to" type="email" class="form-control pval" placeholder="Enter email"/>
                        </div>
                        <div class=col-xs-2>
                            <label>CC:</label>
                            <input name="cc" type="email" class="form-control pval" placeholder="Enter email"/>
                        </div>
                        <div class="col-xs-5">
                            <label for="date-0">When?</label>
                            <input type="date" name="date" class="form-control pval" id="date-0">
                        </div>
                        <div class="col-xs-5">
                            <textarea class="form-control col-lg-10 pval" id="body" placeholder="Enter Message"  name="message"></textarea>
                        </div>
                    </div>
                    <div class="row main">
                        <button id="submit" name="send_button" type="submit" class="btn btn-primary btn-lg">Send to Queue</button>
                    </div>
                </form>
            </div>


            <div id="results">
            <div>Return Status: <span id="returnstatus"></span></div>
            <div>Return Text:
                <div id="returntext"></div>
            </div>
            </div>

        </div>
    </body>
</html>

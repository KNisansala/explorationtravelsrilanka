<?php
$error = NULL;

if (isset($_POST['login'])) {

    include '../../db.php';


    $un = $_POST['username'];
    $pw = $_POST['password'];


    $sql = "SELECT `user_name`,`password`,`name` FROM `user` WHERE `user_name` = '" . $un . "' AND `password` = '" . $pw . "'  LIMIT 1 ";

    $db = new DB();

    $result = $db->readQuery($sql);
    $row = mysql_fetch_assoc($result);

    if ($row !== false) {

        session_start();

        $_SESSION['login'] = TRUE;
        $_SESSION['Name'] = $row['name'];
        $_SESSION['UserName'] = $row['user_name'];
        $_SESSION['Password'] = $row['password'];

        header('location: ../index.php');
    } else {

        $error = TRUE;
    }
}
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sri Lanka Holiday Trips</title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet"> 
        <!-- Custom Theme Style -->
        <link href="../css/custom.min.css" rel="stylesheet">
        
        
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <?php
                        if ($error) {
                            ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Invalid username or password.. </strong>
                            </div>
                            <?php
                        }
                        ?>


                        <form class="form-signin" action="" method="post">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-default btn-block btn-signin" type="submit" name="login">Log in</button>
                                
                                 
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                  
                                <div>
                                    <h1> <i class="fa fa-car"> </i> Sri Lanka Holiday Trips</h1>
                                    <p>© <?php echo date("Y"); ?> All Rights Reserved. Holiday Trips Sri Lanka developing by Sublime Holdings</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
 
            </div>
        </div>
        
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </body>
</html>

<?php
include_once '../db.php';
$erre = NULL;
$db = new DB();

if (isset($_POST['save-date'])) {

    if (!$_POST['name'] || !$_POST['userName']) {
        ?> 
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong> Please enter the name and username.
        </div>

        <?php
    } else {
        if ($_POST['oldPasswordOld'] != $_POST['oldPassword'] && !empty($_POST['oldPassword'])) {
            ?> 

            <?php
            $erre = 'Old password is incorrect.';
            ?>


            <?php
        }
        
        elseif ($_POST['newPassword'] != $_POST['confirm_password'] && !empty($_POST['confirm_password'])) {
            ?> 

            <?php
            $erre = 'Old password is Not Match.';
            ?>


            <?php
        }
        else {

            $password = $_POST['newPassword'];

            if (empty($_POST['newPassword'])) {
                $password = $_POST['oldPasswordOld'];
            }


            $sql = "UPDATE `user` SET `user_name` = '" . $_POST['userName'] . "', `password` = '" . $password . "', `name` = '" . $_POST['name'] . "' WHERE id = '1'";

            $db->readQuery($sql);

            header('location: login/log-out.php');
        }
    }
}

include './header.php';
?>

 

<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">
    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Change Settings </h1>
            </div>
        </div>
        <!--end banner-->

        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">                

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Settings
                    </div>                   

                    <div class="panel-body">                         
                        <form method="post" style="padding: 0 15px" class="form-horizontal" id="main-form"> 

                            <div class="form-group">
                                <?php if (!empty($erre)) { ?>

                                    <div class="alert alert-danger" style="margin-top: 15px ">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Oops! </strong> <?php echo $erre; ?>
                                    </div>

                                <?php } ?>
                            </div>


                            <div class="form-group">
                                <label for="name" class=" control-label">Name</label>                                        
                                <input type="text" name="name"  class="form-control"  id="name"  required="TRUE" value="<?php echo $_SESSION['Name']; ?>">                                      
                            </div>
                            <div class="form-group">
                                <label for="userName" class=" control-label">User Name</label>                                        
                                <input type="text" name="userName"  class="form-control"  id="userName"  required="TRUE" value="<?php echo $_SESSION['UserName']; ?>">                                       
                            </div>

                            <div class="form-group">
                                <label for="oldPassword" class=" control-label">Old Password</label>                                  
                                <input type="password" name="oldPassword"  class="form-control" autocomplete="off" required="" id="oldPassword" > 
                                <input type="hidden" id="oldPasswordOld" name="oldPasswordOld" value="<?php echo $_SESSION['Password']; ?>"/>                                       
                            </div>

                            <div class="form-group">
                                <label for="newPassword" class=" control-label">New Password</label>                                        
                                <input name="newPassword" class="form-control" id="newPassword" type="password" minlength="8" placeholder="New Password"   autocomplete="off"/>

                            </div>
                            <div class="form-group">
                                <label for="newPassword" class=" control-label">Confirm Password</label>                                        

                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" minlength="8" placeholder="Confirm Password"   autocomplete="off"/>

                            </div>

                            <span id='message' style="padding: 0 0 10px 0"></span> 
                            <script>
                                $('#confirm_password').on('keyup', function () {
                                    if ($(this).val() == $('#newPassword').val()) {
                                        $('#message').html('Password matching').css('color', 'green');
                                    } else
                                        $('#message').html('Password not matching').css('color', 'red');
                                });
                            </script>


                            <div class="form-group">
                                 
                                    <input type="submit" class="btn btn-default" id="btn-submit" value="Save" name="save-date">
                                 
                            </div>
                        </form> 

                    </div>
                </div>
            </div>

        </div>
        <!--end new image add form-->


    </div>
    <!--end container-->
</div>
<!--END MAIN SITE WRAPPER-->


<?php
include './footer.php';

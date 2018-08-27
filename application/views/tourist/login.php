<!DOCTYPE html>
<html id="html">
    <head>
        <title><?php echo $title;?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tourist/css/bootstrap.min.css');?>" >
        <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tourist/css/login.css');?>" >
    </head>
    <div id="particles-js"></div>
    <body class="login">
        <div class="container">
            <div class="login-container-wrapper clearfix">
                <div class="logo">
                    <i class="fa fa-sign-in"></i>
                </div>
                <div class="welcome"><strong>Welcome,</strong> please login</div>
                <?php if($error):?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $error;?>
                    </div>
                <?php endif;?>

                <form action="<?php echo base_url('tourist/check/login');?>" method="post" class="form-horizontal login-form">
                    <div class="form-group relative">
                        <input id="login_username" class="form-control input-lg" name="passport_no" type="text" placeholder="Enter passport number" required>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group relative password">
                        <input id="login_password" class="form-control input-lg" name="password" type="password" placeholder="Password" required>
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                    </div>
                    <a href="<?php echo base_url('tourist/signup');?>" class="btn btn-link btn-block"><strong>Register as a Tourist</strong></a>
                </form>
            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/tourist/js/bootstrap.min.js');?>"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="<?php echo base_url('assets/tourist/js/login.js');?>"></script>

    </body>
</html>
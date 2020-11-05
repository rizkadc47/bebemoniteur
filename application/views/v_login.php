<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>

        <title>LOGIN | BEBE MONITEUR</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">

    </head>
    <body background="<?php echo base_url();?>assets/img/bg.jpg" style="overflow:hidden">
        <img src="assets/img/iki.jpg" style="width: 1410px">
        <div class="main-footer">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                
                            </ul>
                            <h3 class="block-title text-center" style="color:white"><br></h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">

                            <div class="mx-auto border" style="width: 550px" "height: 700px">
                                <div class="bg-light">
                                <h2 style="color:black" class="text-center"> <b> Login </b></h2>
                            <br>

                            <form class="js-validation-login form-horizontal push-30-t push-50" action="<?php echo site_url("login/login_proses");?>" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" id="username" name="username" placeholder="Email">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="login-password" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <center><button class="btn btn-block btn-success" type="submit"><i class="si si-login pull-right" style="color:white"></i> Log in</button></center>
                                    </div>
                                </div>
                            </form>   
                            </div>                    

                            </div>
                            
                            <!-- END Login Form -->
                        </div>
                    </div>
                    <!-- END Login Block -->
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600"><span class="js-year-copy"></span> </small>
        </div>
        <!-- END Login Footer -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    </body>
</html>
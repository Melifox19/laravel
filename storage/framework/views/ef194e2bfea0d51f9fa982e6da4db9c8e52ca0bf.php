<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Melifox19 | Inscription</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Title icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('img/melicon.png')); ?>">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/background.css')); ?>" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="<?php echo e(url('/home')); ?>"><b>MELIFOX19</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">S'enregistrer</p>

        <form method="post" action="<?php echo e(url('/register')); ?>">

            <?php echo csrf_field(); ?>


            <div class="form-group has-feedback<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nom">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                <?php if($errors->has('name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-mail">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer le mot de passe">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                <?php if($errors->has('password_confirmation')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> J'accepte les <a href="#">CGU</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">S'enregistrer</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="<?php echo e(url('/login')); ?>" class="text-center">J'ai déjà un compte</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>

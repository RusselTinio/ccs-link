<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt h=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
   

    <title>Log In</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 mt-5" >
                <h4 class="text text-primary">Admin Log in</h4><hr>
                <form action="<?= base_url('AdminController/Admin/check') ?>" method="POST"> 
                <?= csrf_field() ?>
                <?php if(!empty(session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif?>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" >
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                        </span>
                    </div>
                    <br>
                   
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block offset-5 mt-3" type="submit" value="log in">
                    </div>
                </form>
            </div>
            <div class="col-md-4 offset-4 mt-5" >
                <a href="<?= base_url('/') ?>" class="btn btn-dark">Index</a>
            </div>
        </div>
    </div>
</body>
</html>
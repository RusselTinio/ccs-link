<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.css' integrity='sha512-azoUtNAvw/SpLTPr7Z7M+5BPWGOxXOqn3/pMnCxyDqOiQd4wLVEp0+AqV8HcoUaH02Lt+9/vyDxwxHojJOsYNA==' crossorigin='anonymous'/>
    <title>Edit User Information</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <div class="col-md-12 bg-secondary">
            <nav class="navbar navbar-expand-lg bg-secondary">
                <div class="col-md-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand ms-3" href="<?= base_url('Dash/Dash') ?>">
                     <img src="<?= base_url('assets/logo/logo.png') ?>" alt="" class="logo" style="height:4rem ">
                    </a>
                </div> 
                <div class="col-md-8">
                    <div class="collapse navbar-collapse float-end me-3" id="navbarNavAltMarkup">
                        <div class="navbar-nav float-end float-end">
                            <a href="<?= base_url('Dash/Dash/profile') ?>" class="nav-item nav-link text-light">Profile</a>
                            <a href="<?= base_url('Login/Auth/logout') ?>" class="nav-item nav-link text-light ">Log out</a> 
                        </div>
                    </div>
                </div>    
            </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text fw-bold">Edit User Info</h4>
                        <form action="<?= base_url('Dash/Dash/userUpdate') ?>" method="POST">
                            <?= csrf_field() ?>
                            <?php if(!empty(session()->getFlashdata('fail'))):?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="text text-muted">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" value="<?= $userInfo['lastname'] ?>" disabled>
                                    <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'lastname'):'' ?>   
                                        </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="text text-muted">First Name</label>
                                    <input type="text" class="form-control" name="firstname" value="<?= $userInfo['firstname'] ?>"disabled>
                                    <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'firstname'):'' ?>   
                                        </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="text text-muted">Username</label>
                                    <input type="text" class="form-control disabled" value="<?= $userInfo['username'] ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="text text-muted">Old Password</label>
                                    <input type="Password" class="form-control" name="oldpassword" >
                                    <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'oldpassword'):'' ?>   
                                        </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="text text-muted">New Password</label>
                                    <input type="Password" class="form-control" name="password" >
                                    <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>   
                                        </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="text text-muted">Confirm Password</label>
                                    <input type="Password" class="form-control" name="cpassword" >
                                    <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'cpassword'):'' ?>   
                                        </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="submit" value="Update" class="btn btn-primary float-end ms-3">
                                    <a href="<?= base_url('Dash/Dash/profile') ?>" class="btn btn-danger float-end">Cancel</a>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
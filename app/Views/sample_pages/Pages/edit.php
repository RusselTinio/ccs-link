<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title><?=$title ?></title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        Update Admin Details
                    </div>
                    <div class="card-body">
                        
                        <div class="col-md-12  mt-5" >
                            <form action="<?= base_url('AdminController/UserEdit/update/'.$user['id']) ?>" method="POST"> 
                        <?= csrf_field() ?>
                        <div class="form-group mb-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="<?= $user['firstname']?>">
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'firstname'):'' ?>       
                            </span>
                        </div>
                        <div class="form-group mb-6">
                            <label for="">last Name</label>
                            <input type="text" class="form-control" name="lastname" value="<?= $user['lastname']?>">
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'lastname'):'' ?>       
                            </span>
                        </div>
                        <div class="form-group mb-6">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $user['username']?>">
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                            </span>
                        </div>
                        <div class="form-group mb-6">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                            </span>
                        </div>
                        <div class="form-group mb-6">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" >
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'cpassword'):'' ?>       
                            </span>
                        </div>
                        <div class="form-group mb-6">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="" disabled selected>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="superadmin">Super Admin</option>
                            </select>
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'role'):'' ?>       
                            </span>
                        </div>
                        <br>
                    
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary  offset-5 mt-3" type="submit" value="Update">
                        </div>
                    
                    </form>
                      
                    
                
            </div>
                        
                    </div>
                </div>
            </div>
           
    </div>
</body>
</html>
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
                            <form action="<?= base_url('AdminController/Admin/update/'.$admin['id']) ?>" method="POST"> 
                        <?= csrf_field() ?>
                        <div class="form-group mb-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="<?= $admin['firstname']?> "readonly style='background:rgb(220, 220, 220)'>
                           
                        </div>
                        <div class="form-group mb-6">
                            <label for="">last Name</label>
                            <input type="text" class="form-control" name="lastname" value="<?= $admin['lastname']?>"readonly style='background:rgb(220, 220, 220)'>
                           
                        </div>
                       
                       
                        <div class="form-group mb-6">
                            <label for="">New Password</label>
                            <input type="password" class="form-control" name="password">
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                            </span>
                        </div>
                        <div class="form-group mb-6">
                            <label for="">Confirm New Password</label>
                            <input type="password" class="form-control" name="cpassword" value="<?= set_value('cpassword') ?>">
                            <span class="text-danger text-sm">
                                <?= isset($validation) ? display_error($validation, 'cpassword'):'' ?>       
                            </span>
                        </div>
                       
                        
                    
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary float-end" type="submit" value="Update">
                            <a href="<?= base_url('AdminController/SuperAdminController/') ?>" class="btn btn-danger float-end me-3">Back</a>
                        </div>
                    
                    </form>
                      
                    
                
            </div>
                        
                    </div>
                </div>
            </div>
           
    </div>
</body>
</html>
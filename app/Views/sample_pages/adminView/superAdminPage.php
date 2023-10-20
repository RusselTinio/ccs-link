<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $loggedUser['username'] ?></h1>
    <a href="<?= base_url('AdminController/Admin/logout') ?>" class="btn btn-danger">Logout</a>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register new admin
                    </div>
                    <div class="card-body">
                        
                        <div class="col-md-12  mt-5" >
               
                    <form action="<?= base_url('AdminController/SuperAdminController/addAdmin') ?>" method="POST"> 
                <?= csrf_field() ?>

                <?php if(!empty(session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif?>

                <?php if(!empty(session()->getFlashdata('success'))):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif?>

                    <div class="form-group mb-6">
                        <label for="">First name</label>
                        <input type="text" class="form-control" name="firstname" value="<?= set_value('firstname') ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'firstname'):'' ?>      
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lastname" value="<?= set_value('lastname') ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'lastname'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" value="<?= set_value('cpassword') ?>">
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
                        <input type="submit" class="btn btn-primary  offset-5 mt-3" type="submit" value="Register">
                    </div>
                    
                </form>
                
            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                <div class="card-header">
                        Admin
                    </div>
                    <div class="class-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($admin as $row):?>
                                    <tr>
                                        <td><?= $row['firstname'] ?></td>
                                        <td><?= $row['lastname'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['role'] ?></td>
                                <td>
                                    <a href="<?= base_url('AdminController/Admin/editView/'.$row['id']) ?>" class=" btn btn-success btn-sm">Edit</a>
                                    <form action="<?= base_url('AdminController/Admin/delete/'.$row['id']) ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
                                </td>
                            </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
            </div>

        </div>
    </div>
<div class="row">
    <div class="col-md mt-2">
                <div class="card">
                <div class="card-header">
                        Alumni
                    </div>
                    <div class="class-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($userInfo as $row):?>
                                    <tr>
                                        <td><?= $row['firstname'] ?></td>
                                        <td><?= $row['lastname'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td>
                                    <a href="<?= base_url('AdminController/UserEdit/edit/'.$row['id']) ?>" class=" btn btn-success btn-sm">Edit</a>
                                    
                                    <a href="<?= base_url('AdminController/UserEdit/delete/'.$row['id']) ?>"class="btn btn-danger">Delete</a>
                                    
                                </td>
                            </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
            </div>
    </div>
</div>

<div class="row">
    <div class="col-md mt-2">
                <div class="card">
                <div class="card-header">
                       Archive
                    </div>
                    <div class="class-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($disabled as $row):?>
                                    <tr>
                                        <td><?= $row['firstname'] ?></td>
                                        <td><?= $row['lastname'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td>    
                                    <a href="<?= base_url('AdminController/UserEdit/restore/'.$row['id']) ?>"class="btn btn-success">Restore</a>
                                    
                                </td>
                            </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
            </div>
    </div>
</div>
</body>
</html>
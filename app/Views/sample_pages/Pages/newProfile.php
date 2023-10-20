<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>New Profile</title>
    <style>
        .card-title {
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="row">
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
           
    </div> 
    <!-- navbar -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <h1 class="text pt-3 ">
                    Register
                </h1>
            </div>
        </div>
        <form action="<?= base_url('Dash/ProfileController/createProfile')?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3">
                <div class="card">
                        <div class="row">
                            <div class="col-6 m-auto my-3" >
                                <h4 class="text text-dark text-center"><?= $userInfo['firstname'] ?> <?= $userInfo['lastname'] ?></h4>
                                
                            </div>       
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 d-flex justify-content-center mb-4" >
                                <img src="<?= base_url('upload/no_profile.jpg')?>" alt="image" id="previewImage" class="border" height="150" width="300">
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center mb-3" >
                                    <div class="row mb-2">
                                        <div class="col">
                                            <input type="file" name="image" id="userfile" accept="image/*" onchange="preview(event)" style="display:none">
                                            <label for="userfile" class="btn btn-success rounded-0">Upload</label>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                    <!-- card -->
        
                <div class="col-md-9">
                                 
                        <div class="card p-5">
                            <h4>Profile Account</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" id="disabledInput" name="lastname" value="<?= $userInfo['lastname'] ?>" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" id="disabledInput" name="firstname" value="<?= $userInfo['firstname'] ?>" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control"  name="middlename" >
                                </div>
                                <div class="col-md-1">
                                    <label for="">Suffix</label>
                                    <input type="text" class="form-control "  name="extension" >
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'extension'):'' ?>   
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control"  name="title">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-2">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control" >
                                        <option value="" disabled selected>-Select-</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'gender'):'' ?>   
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <label for="">Civil Status</label>
                                    <select name="civilStatus" class="form-control" id="">
                                        <option value="" disabled selected>-Select-</option>
                                        <option value="single">Single</option>
                                        <option value="married">Marrried</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="widowed">Widowed</option>
                                    </select>
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'civilStatus'):'' ?>
                                    </span>
                                </div>
                                <div class="col-md-8">
                                    <label for="">Complete Address</label>
                                    <input type="text" class="form-control"  name="address">
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'address'):'' ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <label for="">Provice</label>
                                    <input type="text" class="form-control"  name="province">
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'province'):'' ?>   
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Municipality</label>
                                    <input type="text" class="form-control"  name="municipality">
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'municipality'):'' ?>   
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Barangay</label>
                                    <input type="text" class="form-control"  name="barangay">
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'barangay'):'' ?>   
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Zip Code</label>
                                    <input type="number" class="form-control"  name="zip">
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'zip'):'' ?>   
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <textarea name="description" class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary float-end" value="submit">
                                </div>
                                
                            </div>    
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <script src="<?= base_url('script/profile.js') ?>"></script>
</body>
</html>
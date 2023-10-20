<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Experience</title>
    <style>

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
        <div class="row mt-5">
            <div class="col-md-7 mx-auto">
                <div class="card p-3">
                    <h4 class="text">
                        Education
                    </h4>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text text-muted fs-6">
                                You can update your educational info here
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="<?= base_url('Dash/EdController/updateEd/'.$educ['id']) ?>" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">Degee</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="education" value="<?= $educ['education'] ?>" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">School or University</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="school" value="<?= $educ['school'] ?>" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">Start Year</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="startYear" value="<?= $educ['startYear'] ?>" min="1900" max="2050" step="1" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">End Year</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="endYear" value="<?= $educ['endYear'] ?>" min="1900" max="2050" step="1" required>
                                </div>
                            </div>
                           
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="submit" value="Save" class="btn btn-primary float-end">
                                    <a href="<?= base_url('Dash/Dash/profile') ?>" class="btn btn-danger float-end me-2">Cancel</a>
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
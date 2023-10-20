<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Contact</title>
    <style>
        .border-none{
            border:none;
            
        }
        body{
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
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <div class="card p-3">
                    <h4 class="text">
                        Contact Info
                    </h4>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text text-muted fs-6">
                                You can create your contact info here
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="<?= base_url('Dash/COntactController/updateContact/'.$contact['id']) ?>" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">Website</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="website" value="<?= $contact['website'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">Email</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" value="<?= $contact['email'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">LinkIn</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="linkin" value="<?= $contact['linkin'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">Facebook</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="facebook" value="<?= $contact['facebook'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="" class="text text-muted">Contact Number</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="tel" class="form-control" name="number" value="<?= $contact['number'] ?>"   pattern="[0-9()+- ]+">
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
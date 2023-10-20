
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Disabled Account</title>
    <style>
        .jumbotron{
            height: 50vh;
            background-image: linear-gradient(black, black),
                              url(<?= base_url('assets/images/jumbotron.png') ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: saturation;
        }
        
       
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-secondary">
                <div class="col-md-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand ms-3 disabled" href="<?= base_url('Dash/Dash') ?>">
                     <img src="<?= base_url('assets/logo/logo.png') ?>" alt="" class="logo" style="height:4rem ">
                    </a>
                </div> 
                <div class="col-md-8">
                    <div class="collapse navbar-collapse float-end me-3" id="navbarNavAltMarkup">
                        <div class="navbar-nav float-end float-end">
                            <a href="<?= base_url('Dash/Dash/profile') ?>" class="nav-item nav-link text-light disabled" >Profile</a>
                            <a href="<?= base_url('Login/Auth/logout') ?>" class="nav-item nav-link text-light ">Log out</a> 
                        </div>
                    </div>
                </div>    
            </nav>
            
                <div class="jumbotron jumbotron-fluid p-5  d-grid align-items-center" >
                         <figure class="text-end">
                        <blockquote class="blockquote">
                            <p class="text text-light fs-3">This account is Disabled, bury it, consider this mercy</p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-light">
                            Superman, <cite title="Source Title">Batman V Superman: Dawn of Justice</cite>
                        </figcaption>
                        </figure>
                </div>
                
            
 
            </div>

            
        </div>
    </div>
</body>
</html>
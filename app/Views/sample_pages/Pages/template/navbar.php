<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.css' integrity='sha512-azoUtNAvw/SpLTPr7Z7M+5BPWGOxXOqn3/pMnCxyDqOiQd4wLVEp0+AqV8HcoUaH02Lt+9/vyDxwxHojJOsYNA==' crossorigin='anonymous'/>
    <title>Navbar</title>
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
                    <a href="<?= base_url('Dash/MentoringController') ?>" class="nav-item nav-link text-light">Mentoring</a>
                        <a href="<?= base_url('Dash/ProfileController') ?>" class="nav-item nav-link text-light">Profile</a>
                        <a href="<?= base_url('Login/Auth/logout') ?>" class="nav-item nav-link text-light ">Log out</a> 
                    </div>
                </div>
            </div>    
        </nav>    
    </div>
</body>
</html>
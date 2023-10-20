<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
    <title><?= $title ?></title>
    <style>


        *{
            font-family:sans-serif;
        }
        .fa-brands{
            font-size: 1.5rem;
        }
        .fa-solid{
            font-size: 1.5rem;
        }
        .btn{
            font-size: .8rem;
        }
        body{
            background:rgba(34, 138, 218) url('<?= base_url('assets/images/profile.jpg') ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode:multiply;
        }
        .fa-gear{
            font-size: .8rem;
        }
        .fa-plus{
            font-size: .8rem;  
        }
        .border-bottom:hover{
            background:rgba(144, 152, 228, 0.21);
            color:rgba(80, 87, 148, 0.64);
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
                            <a href="<?= base_url('Dash/MentoringController') ?>" class="nav-item nav-link text-light">Mentoring</a>
                            <a href="<?= base_url('Dash/ProfileController') ?>" class="nav-item nav-link text-light">Profile</a>
                            <a href="<?= base_url('Login/Auth/logout') ?>" class="nav-item nav-link text-light ">Log out</a> 
                        </div>
                    </div>
                </div>    
            </nav>
            
            </div>
<div class="container">
    <div class="row mt-5">
    
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body mx-auto text-center">
                    <!-- need to copy in new frontend -->
                <?php if (!$profile['image']): ?>
                    <img src="<?=base_url("upload/no_profile.jpg")?>" heigh="200" width="200" class="mb-3">
                <?php else: ?>
                    <img src="<?=base_url("upload/".$profile['image'])?>" alt="<?= $profile['image'] ?>" class="mb-3" heigh="200" width="200">
                <?php endif; ?>
                    <h4 class="text"><?= $userInfo['firstname']  ?> <?= $userInfo['lastname']  ?></h4>
                    <p class=" text text-muted"><?= $profile['title']?></p>
                    <blockquote class="blockquote fs-6 text-muted">
                        <p>
                        "<?= $profile['description'] ?>"
                        </p>
                    </blockquote>
                    <a href="" class="btn btn-outline-primary" onclick="print()">Print</a>
                    <!-- might be needed in new frontend -->
                    <a class="btn btn-outline-dark fs-6 p-1" data-toggle="collapse" href="#opt" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-gear" ></i></a>
                </div>
                <div class="card-body collapse" id="opt">
                    <h5 class="text text-center">Option</h5>
                    <a href="<?= base_url('Dash/Dash/userDeactivate') ?>" class=" text text-decoration-none text-muted">
                        <div class="row border-bottom p-1">
                            <div class="col">
                                <i class="fa-solid fa-user-xmark"></i> <span class="ms-2">Deactivate Account</span>
                            </div>
                        </div>
                    </a>
                    <a href="<?= base_url('Dash/Dash/userEdit') ?>" class=" text text-decoration-none text-muted">
                        <div class="row border-bottom p-1">
                            <div class="col">
                            <i class="fa-solid fa-user-pen"></i> <span class="ms-2">Account Settings</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            
            <div class="card px-3" id="skills">
                <div class="row">
                    <div class="col">
                        <h4 class="text mt-3">Personal Background<a href="<?= base_url('Dash/ProfileController/editProfile') ?>" class="btn btn-outline-primary float-end"><i class="fa-regular fa-pen-to-square"></i></a></h4>
                    </div>
                    <div class="row ms-auto">
                       <div class="col-md-3">
                            <input type="text" class="form-control" value="<?= $userInfo['firstname'] ?>" disabled>
                            <label for="">First Name</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="<?= $profile['middlename'] ?>" disabled>
                            <label for="">Middle Name</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="<?= $userInfo['lastname'] ?>" disabled>
                            <label for="">Last Name</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="<?= $profile['extension'] ?>" disabled>
                            <label for="">Suffix</label>
                        </div>
                    </div>
                    <div class="row ms-auto mt-2">
                        <div class="col-3">
                            <input type="text" class="form-control" value="<?= $profile['gender'] ?>" disabled>
                            <label for="">Gender</label>
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" value="<?= $profile['civilStatus'] ?>" disabled>
                            <label for="">Civil Status</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" value="<?= $profile['address'] ?>" disabled>
                            <label for="">Full Address</label>
                        </div>
                    </div>
                    <div class="row ms-auto mt-2">
                        <div class="col-3">
                            <input type="text" class="form-control" value="<?= $profile['province'] ?>" disabled>
                            <label for="">Province</label>
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" value="<?= $profile['municipality'] ?>" disabled>
                            <label for="">Municipality/City</label>
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" value="<?= $profile['barangay'] ?>" disabled>
                            <label for="">Barangay</label>
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" value="<?= $profile['zip'] ?>" disabled>
                            <label for="">Zip </label>
                        </div>
                    </div>
                    <div class="row ms-auto my-2">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4 mb-3">
            <div class="card">
                <h2 class="pt-2 ps-2 pe-2">Contact <a href="<?= base_url('Dash/ContactController') ?>" class="btn btn-outline-primary float-end"><i class="fa-regular fa-pen-to-square"></i></a></h2>
                <div class="row p-2">
                    <div class="col-md-4">
                    <i class="fa-solid fa-globe"></i><span class="ms-2" style="font-weight: bold;">Website</span>
                    </div>
                    <div class="col">
                        <span class="text-muted"><?= $contact['website'] ?></span>
                    </div>
                </div>
                
                <div class="row p-2">
                    <div class="col-md-4">
                        <i class="fa-solid fa-at"></i><span class="ms-2" style="font-weight: bold;">Email</span>
                    </div>
                    <div class="col">
                        <span class="text-muted"><?= $contact['email'] ?></span>
                    </div>
                </div>
                
                <div class="row p-2">
                    <div class="col-md-4">
                        <i class="fa-brands fa-linkedin-in"></i><span class="ms-2" style="font-weight: bold;">LinkIn</span>
                    </div>
                    <div class="col">
                        <span class="text-muted"><?= $contact['linkin'] ?></span>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4">
                        <i class="fa-brands fa-facebook"></i><span class="ms-2" style="font-weight: bold; font-size:.8rem">Facebook</span>
                    </div>
                    <div class="col">
                        <span class="text-muted"><?= $contact['facebook'] ?></span>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4">
                        <i class="fa-solid fa-mobile-screen-button"></i><span class="ms-2" style="font-weight: bold; font-size:.9rem">Contact#</span>
                    </div>
                    <div class="col">
                        <span class="text-muted"><?= $contact['number'] ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card mb-3">
                <h4 class="p-2">Experiences: <a class="btn btn-outline-primary float-end fs-6" data-toggle="collapse" href="#exp" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-plus"></i></a></h4>
              <!-- copy this in the new frontend -->
                <?php if (!$experience): ?>
                    <div class="row p-2">
                        <div class="col">
                            <span class="text">No data yet</span>
                        </div>
                    </div>
                <?php else: ?>
                <?php foreach($experience as $row):?>
                    <div class="row p-2">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">Position: </span><span class="text"><?= $row['position'] ?></span>
                                    <a href="<?= base_url('Dash/ExpController/deleteExp/' .$row['id']) ?>" class="btn btn-danger float-end p-1 me-1 rounded-0"><i class="fa-solid fa-trash-can " style="font-size:.9rem"></i></a>
                                    <a href="<?= base_url('Dash/ExpController/editExp/' .$row['id']) ?>" class="btn btn-primary float-end p-1 me-1 rounded-0"><i class="fa-regular fa-pen-to-square" style="font-size:.9rem"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">Organization: </span> <span class="text"><?= $row['org'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">Year: </span>  <span class="text"><?= $row['startYear'] ?></span>- <span class="text"><?= $row['endYear'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <?php endif; ?>
                <!-- until in this part -->
            </div>
            <div class="card mt-4 collapse" id="exp">
                <div class="card-header">
                    <span class="text fw-bold">Add Experience</span>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Dash/ExpController') ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="">Position</label>
                            <input type="text" class="form-control" name="position">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Organization/Company</label>
                            <input type="text" class="form-control" name="org">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Year Started</label>
                                    <input type="number"  class="form-control" min="1900" max="2023" step="1" value="" name="startYear" required/> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Year Ended</label>
                                    <input type="number"  class="form-control" min="1900" max="2023" step="1" value=" " name="endYear" />
                                    <p class="text text-muted">leave blank if currently working</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary float-end">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
        <div class="col-md-4 ">
        <div class="card">
                 <h4 class="p-2">Education:  <a class="btn btn-outline-primary float-end" data-toggle="collapse" href="#ed" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-plus"></i></a></h4>
                    <!-- copy this on new frontend -->
                 <?php if (!$education): ?>
                    <div class="row p-2">
                        <div class="col">
                            <span class="text">No data yet</span>
                        </div>
                    </div>
                <?php else: ?>
                 <?php foreach($education as $rowEd):?>
                    <div class="row p-2">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">Degree: </span><span class="text"><?= $rowEd['degree'] ?></span>
                                    <a href="<?= base_url('Dash/EdController/deleteEd/' .$rowEd['id']) ?>" class="btn btn-danger float-end p-1 me-1"><i class="fa-solid fa-trash-can" style="font-size:.9rem"></i></a>
                                    <a href="<?= base_url('Dash/EdController/editEd/' .$rowEd['id']) ?>" class="btn btn-primary float-end p-1 me-1 rounded-0"><i class="fa-regular fa-pen-to-square" style="font-size:.9rem"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">Program: </span> <span class="text"><?= $rowEd['program'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">School: </span> <span class="text"><?= $rowEd['school'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text fw-bold">Year: </span>  <span class="text"><?= $rowEd['startYear'] ?></span>- <span class="text"><?= $rowEd['endYear'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                <?php endforeach;?>
                <?php endif; ?>
                <!-- until this part -->
            </div>
            <div class="card mt-4 collapse" id="ed">
                <div class="card-header">
                    <span class="text fw-bold">Eduational Background</span>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Dash/EdController') ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="">Degree</label>
                            <select name="degree" id="" class="form-control">
                                <option value="" selected disabled>Select</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Master's Degree">Master's Degree</option>
                                <option value="Doctorate Degree">Doctorate Degree</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Program</label>
                            <input type="text" class="form-control" name="program" id="" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">School/University</label>
                            <input type="text" class="form-control" name="school">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Year Started</label>
                                    <input type="number"  class="form-control" min="1900" max="2030" step="1" value="" name="startYear" required/> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Year Ended</label>
                                    <input type="number"  class="form-control" min="1900" max="2030" step="1" value="" name="endYear" required/>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary float-end">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

</div>
    
<!-- Make sure jQuery is loaded first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Then, include the Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?= base_url('script/profile.js') ?>"></script>

</body>
</html>
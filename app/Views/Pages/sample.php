<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.css' integrity='sha512-azoUtNAvw/SpLTPr7Z7M+5BPWGOxXOqn3/pMnCxyDqOiQd4wLVEp0+AqV8HcoUaH02Lt+9/vyDxwxHojJOsYNA==' crossorigin='anonymous'/>
    <title>Sample data</title>
</head>
<body>
<form action="<?= base_url('Dash/MentoringController/addMentor') ?>" method="post">
                    <?php //if(!$mentorProfile): ?>
                        <input type="submit" class="btn btn-outline-primary  mt-4" value="Apply to be a Mentor">
                    <?php //else: ?>
                        <input type="submit" class="btn btn-outline-primary  mt-4 disabled" value="Apply to be a Mentor">
                    <?php //endif; ?>        
                </form>
<?php foreach($mentorData as $data):?>
    <div class="col-md-4 mb-4">
        <div class="card p-5">
            <a href="<?= base_url('Dash/MentoringController/'.$data['id']) ?>" class="btn btn-outline-secondary"><?= $data['firstname']?> <?= $data['lastname']?></a>
        </div>
    </div>
<?php endforeach;?>
</body>
</html>
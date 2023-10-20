<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Profile</title>
</head>
<body>
    <?php foreach($mentorData as $data): ?>
        <img src="<?= base_url('upload/'.$data['image']) ?>" alt="" height="100" width="100">
        <?= $data['firstname'] ?>
        <?= $data['middlename'] ?>
        <?= $data['lastname'] ?>
    <?php endforeach; ?>
</body>
</html>
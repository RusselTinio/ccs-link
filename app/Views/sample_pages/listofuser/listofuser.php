
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

<h1> User list</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Status</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['firstname']; ?></td>
                <td><?= $user['lastname']; ?></td>
                <td><?= $user['status']; ?></td>
            </tr>
        <?php endforeach; ?>
        <?php foreach ($admins as $admin): ?>
            <tr>
                <td><?= $admin['firstname']; ?></td>
                <td><?= $admin['lastname']; ?></td>
                <td><?= $admin['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h1>Archive</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($archi as $arc): ?>
            <tr>
                <td><?= $arc['firstname']; ?></td>
                <td><?= $arc['lastname']; ?></td>
                <td><?= $arc['status']; ?></td>
            </tr>
        <?php endforeach; ?>
        <?php foreach ($archiA as $arcA): ?>
            <tr>
                <td><?= $arcA['firstname']; ?></td>
                <td><?= $arcA['lastname']; ?></td>
                <td><?= $arcA['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


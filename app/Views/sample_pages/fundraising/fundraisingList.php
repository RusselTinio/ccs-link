
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?= session()->getFlashdata('success') ?>
    <button button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif; ?>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

<h1> Funds list</h1>
<a href="<?= base_url('AdminController/fundController/createFund') ?>" class="btn btn-primary">Add Fund</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Fund Id</th>
            <th scope="col">Fund Title</th>
            <th scope="col">Fund End date</th>
            <th scope="col">Fund Description</th>
            <th scope="col">Contact Person</th>
            <th scope="col">Contact Info</th>
            <th scope="col">Other Contact info</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($funds as $fund): ?>
            <tr>
                <th scope="row"><?= $fund['id']; ?></th>
                <td><?= $fund['fund_title']; ?></td>
                <td><?= $fund['fund_enddate']; ?></td>
                <td><?= $fund['fund_desc']; ?></td>
                <td><?= $fund['fund_contactperson']; ?></td>
                <td><?= $fund['fund_contactinfo']; ?></td>
                <td><?= $fund['fund_othercontact']; ?></td>
                <td><img src="/uploads/<?= $fund['fund_cover']; ?>" alt="" width="100"></td>
                <td><?= $fund['status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/fundController/editFund/') ?><?= $fund['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= base_url('AdminController/fundController/deleteFund/') ?><?= $fund['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
        <?php endforeach; ?>
    </tbody>
</table>

<h1>Archive</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Fund Id</th>
            <th scope="col">Fund Title</th>
            <th scope="col">Fund End date</th>
            <th scope="col">Fund Description</th>
            <th scope="col">Contact Person</th>
            <th scope="col">Contact Info</th>
            <th scope="col">Other Contact info</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($archi as $arc): ?>
            <tr>
            <th scope="row"><?= $arc['id']; ?></th>
                <td><?= $arc['fund_title']; ?></td>
                <td><?= $arc['fund_enddate']; ?></td>
                <td><?= $arc['fund_desc']; ?></td>
                <td><?= $arc['fund_contactperson']; ?></td>
                <td><?= $arc['fund_contactinfo']; ?></td>
                <td><?= $arc['fund_othercontact']; ?></td>
                <td><img src="/uploads/<?= $arc['fund_cover']; ?>" alt="" width="100"></td>
                <td><?= $arc['status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/fundController/restore/') ?><?= $arc['id']; ?>" class="btn btn-success">Restore</a>
                    
                </td>
        <?php endforeach; ?>
    </tbody>
</table>


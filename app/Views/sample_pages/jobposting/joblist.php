
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?= session()->getFlashdata('success') ?>
    <button button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif; ?>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

<h1> Job list</h1>
<a href="<?= base_url('AdminController/JobController/createJob') ?>" class="btn btn-primary">Add Job</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Job Id</th>
            <th scope="col">Job Title</th>
            <th scope="col">Company</th>
            <th scope="col">Job Description</th>
            <th scope="col">Job Category</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col">Email</th>
            <th scope="col">Contacs</th>
            <th scope="col">Website</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($jobs as $job): ?>
            <tr>
                <th scope="row"><?= $job['id']; ?></th>
                <td><?= $job['job_title']; ?></td>
                <td><?= $job['job_company']; ?></td>
                <td><?= $job['job_description']; ?></td>
                <td><?= $job['job_category']; ?></td>
                <td><?= $job['job_address']; ?></td>
                <td><?= $job['job_salary']; ?></td>
                <td><?= $job['job_email']; ?></td>
                <td><?= $job['job_contacts']; ?></td>
                <td><?= $job['job_website']; ?></td>
                <td><img src="/upload/<?= $job['job_cover']; ?>" alt="" width="100"></td>
                <td><?= $job['Status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/JobController/editJob/') ?><?= $job['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= base_url('AdminController/JobController/deleteJob/') ?><?= $job['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
        <?php endforeach; ?>
    </tbody>
</table>

<h1>Archive</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Job Id</th>
            <th scope="col">Job Title</th>
            <th scope="col">Company</th>
            <th scope="col">Job Description</th>
            <th scope="col">Job Category</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col">Email</th>
            <th scope="col">Contacs</th>
            <th scope="col">Website</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($archi as $arc): ?>
            <tr>
            <th scope="row"><?= $arc['id']; ?></th>
                <td><?= $arc['job_title']; ?></td>
                <td><?= $arc['job_company']; ?></td>
                <td><?= $arc['job_description']; ?></td>
                <td><?= $arc['job_category']; ?></td>
                <td><?= $arc['job_address']; ?></td>
                <td><?= $arc['job_salary']; ?></td>
                <td><?= $arc['job_email']; ?></td>
                <td><?= $arc['job_contacts']; ?></td>
                <td><?= $arc['job_website']; ?></td>
                <td><img src="<?= base_url('upload/').$arc['job_cover']; ?>" alt="" width="100"></td>
                <td><?= $arc['Status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/JobController/restore/') ?><?= $arc['id']; ?>" class="btn btn-success">Restore</a>
                    
                </td>
        <?php endforeach; ?>
    </tbody>
</table>

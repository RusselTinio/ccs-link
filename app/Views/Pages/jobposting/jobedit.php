

<h1>
    Edit Job
</h1>

<form action="<?= base_url('AdminController/JobController/updateJob/') ?><?= $jobs['id'];?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="jobID" class="form-label">Id</label>
  <input type="text" class="form-control" name="jobID" readonly>
</div>
<div class="mb-3">
  <label for="jobTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="jobTitle" value="<?=$jobs['job_title'];?>" >
</div>
<div class="mb-3">
  <label for="jobCompany" class="form-label">Company</label>
  <input type="text" class="form-control" name="jobCompany" value="<?=$jobs['job_company'];?>" >
</div>
<div class="mb-3">
  <label for="jobDescription" class="form-label">Description</label>
  <input type="text" class="form-control" name="jobDescription" value="<?=$jobs['job_description'];?>">
</div> 
<div class="mb-3">
  <label for="jobCategory" class="form-label">Category</label>
  <input type="text" class="form-control" name="jobCategory" value="<?=$jobs['job_category'];?>" >
</div>
<div class="mb-3">
  <label for="jobAddress" class="form-label">Address</label>
  <input type="text" class="form-control" name="jobAddress" value="<?=$jobs['job_address'];?>" >
</div>
<div class="mb-3">
  <label for="jobSalary" class="form-label">Salary</label>
  <input type="text" class="form-control" name="jobSalary" value="<?=$jobs['job_salary'];?>" >
</div>
<div class="mb-3">
  <label for="jobEmail" class="form-label">Email</label>
  <input type="text" class="form-control" name="jobEmail" value="<?=$jobs['job_email'];?>" >
</div>
<div class="mb-3">
  <label for="jobContacts" class="form-label">Contacts</label>
  <input type="text" class="form-control" name="jobContacts" value="<?=$jobs['job_contacts'];?>" >
</div>
<div class="mb-3">
  <label for="jobWebsite" class="form-label">Website</label>
  <input type="text" class="form-control" name="jobWebsite" value="<?=$jobs['job_website'];?>" >
</div>
<div class="mb-3">
  <label for="jobCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="jobCover" value="<?=$jobs['job_cover'];?>" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>




<h1>
    Add Job
</h1>

<form action="<?= base_url('AdminController/JobController/storeJob') ?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="jobId" class="form-label">Id</label>
  <input type="text" class="form-control" name="jobId" readonly>
</div>
<div class="mb-3">
  <label for="jobTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="jobTitle" >
</div>
<div class="mb-3">
  <label for="jobCompany" class="form-label">Company</label>
  <input type="text" class="form-control" name="jobCompany" >
</div>
<div class="mb-3">
  <label for="jobDescription" class="form-label">Description</label>
  <input type="textarea" class="form-control" name="jobDescription" >
</div>
<div class="mb-3">
  <label for="jobCategory" class="form-label">Category</label>
  <input type="text" class="form-control" name="jobCategory" >
</div>
<div class="mb-3">
  <label for="jobAddress" class="form-label">Address</label>
  <input type="text" class="form-control" name="jobAddress" >
</div>
<div class="mb-3">
  <label for="jobSalary" class="form-label">Salary</label>
  <input type="text" class="form-control" name="jobSalary" >
</div>
<div class="mb-3">
  <label for="jobEmail" class="form-label">Email</label>
  <input type="text" class="form-control" name="jobEmail" >
</div>
<div class="mb-3">
  <label for="jobContacts" class="form-label">Contacts</label>
  <input type="text" class="form-control" name="jobContacts" >
</div>
<div class="mb-3">
  <label for="jobWebsite" class="form-label">Website</label>
  <input type="text" class="form-control" name="jobWebsite"  >
</div>
<div class="mb-3">
  <label for="jobCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="jobCover" required >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>




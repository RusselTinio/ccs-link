

<h1>
    Add fund
</h1>

<form action="<?= base_url('AdminController/FundController/storeFund') ?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="fundId" class="form-label">Id</label>
  <input type="text" class="form-control" name="fundId" readonly>
</div>
<div class="mb-3">
  <label for="fundTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="fundTitle" >
</div>
<div class="mb-3">
  <label for="fundEnddate" class="form-label">End Date</label>
  <input type="date" class="form-control" name="fundEnddate" >
</div>
<div class="mb-3">
  <label for="fundDescription" class="form-label">Description</label>
  <input type="textarea" class="form-control" name="fundDescription" >
</div>
<div class="mb-3">
  <label for="fundContactperson" class="form-label">Contact Person</label>
  <input type="text" class="form-control" name="fundContactperson" >
</div>
<div class="mb-3">
  <label for="fundContactinfo" class="form-label">Contact Info</label>
  <input type="text" class="form-control" name="fundContactinfo" >
</div>
<div class="mb-3">
  <label for="fundOtherContactinfo" class="form-label">Other Contact info(optional)</label>
  <input type="text" class="form-control" name="fundOtherContactinfo" >
</div>
<div class="mb-3">
  <label for="fundCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="fundCover" required >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>




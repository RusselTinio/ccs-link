

<h1>
    Edit Fund
</h1>

<form action="<?= base_url('AdminController/fundController/updateFund/') ?><?= $funds['id'];?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="fundId" class="form-label">Id</label>
  <input type="text" class="form-control" name="fundId" readonly>
</div>
<div class="mb-3">
  <label for="fundTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="fundTitle" value="<?=$funds['fund_title'];?>" >
</div>
<div class="mb-3">
  <label for="fundEnddate" class="form-label">End Date</label>
  <input type="text" class="form-control" name="fundEnddate" value="<?=$funds['fund_enddate'];?>" >
</div>
<div class="mb-3">
  <label for="fundDescription" class="form-label">Description</label>
  <input type="text" class="form-control" name="fundDescription" value="<?=$funds['fund_desc'];?>">
</div> 
<div class="mb-3">
  <label for="fundContactperson" class="form-label">Contact Person</label>
  <input type="text" class="form-control" name="fundContactperson" value="<?=$funds['fund_contactperson'];?>" >
</div>
<div class="mb-3">
  <label for="fundContactinfo" class="form-label">Contact Info</label>
  <input type="text" class="form-control" name="fundContactinfo" value="<?=$funds['fund_contactinfo'];?>" >
</div>
<div class="mb-3">
  <label for="fundOtherContactinfo" class="form-label">Other Contact Info(optional)</label>
  <input type="text" class="form-control" name="fundOtherContactinfo" value="<?=$funds['fund_othercontact'];?>" >
</div>
<div class="mb-3">
  <label for="fundCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="fundCover" value="<?=$funds['fund_cover'];?>" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>


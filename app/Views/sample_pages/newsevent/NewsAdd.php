
<h1>
    Add news
</h1>

<form action="<?= base_url('AdminController/NewsController/storeNews') ?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="newsId" class="form-label">Id</label>
  <input type="text" class="form-control" name="newsId" readonly>
</div>
<div class="mb-3">
  <label for="newsTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="newsTitle" >
</div>
<div class="mb-3">
  <label for="newsDescription" class="form-label">Description</label>
  <input type="text" class="form-control" name="newsDescription" >
</div>

<div class="mb-3">
  <label for="newsCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="newsCover" required >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>




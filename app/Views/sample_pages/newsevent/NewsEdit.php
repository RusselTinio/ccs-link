

<h1>
    Edit News
</h1>

<form action="<?= base_url('AdminController/NewsController/updateNews/') ?><?= $news['id'];?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="newsId" class="form-label">Id</label>
  <input type="text" class="form-control" name="newsId" readonly>
</div>
<div class="mb-3">
  <label for="newsTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="newsTitle" value="<?= $news['news_title'];?>" >
</div>
<div class="mb-3">
  <label for="newsDescription" class="form-label">Description</label>
  <input type="text" class="form-control" name="newsDescription" value="<?= $news['news_desc'];?>">
</div> 
<div class="mb-3">
  <label for="newsDate" class="form-label">Date</label>
  <input type="date" class="form-control" name="newsDate" value="<?= $news['news_date'];?>">
</div>
<div class="mb-3">
  <label for="newsCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="newsCover" value="<?= $news['news_image'];?>" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>


<h1>
    Add event
</h1>

<form action="<?= base_url('AdminController/NewsController/storeEvents') ?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="eventsId" class="form-label">Id</label>
  <input type="text" class="form-control" name="eventsId" readonly>
</div>
<div class="mb-3">
  <label for="eventsTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="eventsTitle" >
</div>
<div class="mb-3">
  <label for="eventsDescription" class="form-label">Description</label>
  <input type="text" class="form-control" name="eventsDescription" >
</div>
<div class="mb-3">
  <label for="eventsDate" class="form-label">Date</label>
  <input type="date" class="form-control" name="eventsDate" >
</div>
<div class="mb-3">
  <label for="eventsTime" class="form-label">Time</label>
  <input type="time" class="form-control" name="eventsTime" >
</div>
<div class="mb-3">
  <label for="eventsCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="eventsCover" required >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>




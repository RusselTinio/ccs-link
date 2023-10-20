<head>
    
</head>

<h1>
    Edit Events
</h1>

<form action="<?= base_url('AdminController/NewsController/updateEvents/') ?><?= $events['id'];?>" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label for="eventsId" class="form-label">Id</label>
  <input type="text" class="form-control" name="eventsId" readonly>
</div>
<div class="mb-3">
  <label for="eventsTitle" class="form-label">Title</label>
  <input type="text" class="form-control" name="eventsTitle" value="<?= $events['events_title'];?>" >
</div>
<div class="mb-3">
  <label for="eventsDescription" class="form-label">Description</label>
  <input type="text" class="form-control" name="eventsDescription" value="<?= $events['events_desc'];?>">
</div> 
<div class="mb-3">
  <label for="eventsDate" class="form-label">Date</label>
  <input type="date" class="form-control" name="eventsDate" value="<?= $events['events_date'];?>">
</div>
<div class="mb-3">
  <label for="eventsTime" class="form-label">Time</label>
  <input type="time" class="form-control" name="eventsTime" value="<?= $events['events_time'];?>">
</div>
<div class="mb-3">
  <label for="eventsCover" class="form-label">Cover</label>
  <input type="file" class="form-control" name="eventsCover" value="<?= $events['events_image'];?>" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

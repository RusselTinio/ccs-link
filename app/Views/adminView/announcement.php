<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title><?= $title ?></title>
</head>
<body>
    <div class="container">
       <div class="row">
       <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                   <h4 class="offset-5">New Announcements</h4>
                </div>        
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" >
                        <div class="form-group col-md-6">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Date</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Content</label>
                            <textarea name="content" id=""  rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12 mt-3 ">
                            <div class="btn float-end">
                            <a href="adminView" class="btn btn-danger ">Back</a>
                            <input type="submit" value="Submit" class="btn btn-primary ">
                            </div>
                            
                        </div>

                    </form>

                </div>
            </div>
       </div>
            <div class="col-md-12">
                <div class="card  mt-5">
                    <div class="card-header">
                        <h5 class="offset-5">Announcements</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
       </div>
    </div>
</body>
</html>
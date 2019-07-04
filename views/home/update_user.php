<?php

    $getUser = $this->getUsers;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE USER</title>
</head>
<body>
   <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card" style="padding: 40px; width: 600px; margin-left: 400px; margin-top: 100px;">
            <div class="table-form">
                <div class="edit-form">
                <h4>Update Form</h4>
                    <form action="<?= URL ?>home/doneUpdate" method="POST">
                        <input type="hidden" name="userId" value="<?= $getUser->id?>">
                        <div class="form-input">
                            <input type="text" class="form-control" name="update-fname" value="<?= $getUser->firstName?>">
                        </div><br>
                        <div class="form-input">
                            <input type="text" class="form-control" name="update-lname" value="<?= $getUser->lastName?>">
                        </div><br>
                        <button type="submit" id="update-btn" class="btn btn-outline-success form-control">Update</button>
                        
                    </form>
                    <form action="<?= URL?>home/viewData" method="POST">
                        <button type="submit" onclick="redirectBack();" style="margin-left: 230px; margin-top: 10px;" class="btn btn-secondary">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>

    <script>
        var URL = '<?= URL?>'; 
        function redirectBack(){

            window.location.href = URL;
        }
    </script>
</body>
</html>
<?php

    $fetchData = $this->getUsers;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Data</title>
    <script type='text/javascript'>
        window.onload = setupRefresh;
 
        function setupRefresh() {
        setTimeout("refreshPage();", 1000); // milliseconds
        }
        function refreshPage() {
            window.location = location.href;
        }
    </script>
</head>
<body>
<div class="col-lg-12" id="here" onload="updatereloadDiv ();">
    <div class="container">
        <div class="card" style="padding: 40px; margin-top: 50px;">
            <table class="table table-striped">
            <div class="row">
                <div class="col-lg-3">
                    <th>ID</th>
                </div>
                <div class="col-lg-3">
                    <th>FIRST NAME</th>
                </div>
                <div class="col-lg-3">
                    <th>LAST NAME</th>
                </div>
                <div class="col-lg-3">
                    <th>ACTION</th>
                </div>
            </div>
                
            <?php

                foreach ($fetchData as $key):
             
            ?>
                <tr>
                    <td><?= $key->id?></td>
                    <td><?= $key->firstName?></td>
                    <td><?= $key->lastName?></td>
                    <td><div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a type="button" href="<?= URL ?>home/updateUser/<?= $key->id?>" class="btn btn-success btn-sm">Edit</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a type="button" href="<?= URL ?>home/deleteUser/<?= $key->id?>" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php

                endforeach;
            
            ?>
            </table>
        </div>
    </div>
</div>


</body>
</html>
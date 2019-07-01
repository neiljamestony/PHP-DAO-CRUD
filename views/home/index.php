<?php

    $fetchData = $this->getUsers;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMURF</title>
</head>
<body>
    <section class="sectionOne">
    </section>
    <section class="sectionTwo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container">
                        <div class="card" style="padding: 40px; margin-top: 50px;">
                            <h4>ADD FORM</h4>
                            <form method="POST" action="<?= URL ?>home/addUser" class="form-group" id="form">
                                <div class="form-input">
                                    <input type="text" name="firstName" id="fname" placeholder="First Name"  class="form-control" required >
                                </div>
                                <br>
                                <div class="form-input">
                                    <input type="text" name="lastName" id="lname" placeholder="Last Name"  class="form-control" required>
                                </div>
                                <br>
                                <button type="submit" id="add-btn" class="btn btn-outline-primary form-control">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container">
                    <!-- <a type="button" class="btn btn-danger" href="<?= URL?>home/regPage">register</a> -->
                        <div class="card" style="padding: 40px; margin-top: 50px;">
                            <table class="table table-striped">
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>ACTION</th>
                            <?php

                                foreach ($fetchData as $key):
                            
                            ?>
                                <tr>
                                    <td><?= $key->id?></td>
                                    <td><?= $key->firstName?></td>
                                    <td><?= $key->lastName?></td>
                                    <td><div class="row">
                                            <div class="col-lg-6">
                                                <a type="button" href="<?= URL ?>home/updateUser/<?= $key->id?>" class="btn btn-success btn-sm">Update</a>
                                            </div>
                                            <div class="col-lg-6">
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
            </div>
        </div>
    </section>
</body>
</html>
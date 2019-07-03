<?php

    // $fetchData = $this->getUsers;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= URL ?>public/css/aos.css">
    <script src="<?= URL?>public/js/aos.js"></script>
    <title>SMURF</title>
    <script>

            AOS.init();

    </script>
    <style>
    * {
    box-sizing: border-box;
    }

    body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
    }

    #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    }

    .content {
    position: fixed;
    margin-left: 400px;
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
    }

    #myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
    }

    #myBtn:hover {
    background: #ddd;
    color: black;
    }
    #explore:hover{

        background:transparent;
    }
    #explore{
        margin-left: 170px;
    }
    #view:hover{

        background:transparent;
    }
</style>
</head>
<body>
    
    <!-- <section class="sectionThree" style="background: rgba(0,0,0,.4);">
    
        <div class="container">
            <div>
                <h1 style="font-size: 96px; padding-top: 180px; color: white; font-family: leewaldee;"><strong>WELCOME</strong></h1>
            </div>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-secondary btn-lg" style="color: white; border-color: white; width: 150px;">Explore</button>

            
        </div>

    </section> -->

    <div>
        <video autoplay muted loop id="myVideo" style="width: 100%; position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: 100em;">
            <source src="<?= URL?>public/img/vid1.mp4" type="video/mp4">
        </video>

        <div class="content">
            <h1 style="font-size: 96px; padding-top: 180px; color: white; font-family: leewaldee;" class="animated bounceInLeft delay-1s"><strong>WELCOME</strong></h1>
            <div class="row">
                <div class="col-lg-6">
                    <button type="button" id="explore" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-secondary btn-lg animated fadeInUp delay-2s" style="color: white; border-color: white; width: 180px;">Create Account</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        
                        <form method="POST" style="color: yellow;" action="<?= URL ?>home/addUser" class="form-group" id="form">
                            <div class="form-input">
                                <input type="text" name="firstName" id="fname" placeholder="First Name"  class="form-control" required >
                            </div>
                            <br>
                            <div class="form-input">
                                <input type="text" name="lastName" id="lname" placeholder="Last Name"  class="form-control" required>
                            </div>
                            <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="add-btn">Submit</button>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
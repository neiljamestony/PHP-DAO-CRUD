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
    
    #view:hover{

        background:transparent;
    }
    #login{

        margin-left: -380px;
    }
    #explore{

        margin-left: 60px;
    }
    .letters{

        display: inline-block;
        font-size: 100px;
        font-family: Helvetica, serif;
        margin-top: 100px;
    }
    #boom{

        margin-left: -30px;
    }
    #first{

        color:red;
    }
    #second{
        color:orange;
    }
    #third{
        color:yellow;
    }
    #fourth{
        color: green;   
    }
    #fifth{
        color:blue;
    }
    #sixth{
        color:DarkOrchid;
    }
    #seventh{
        color:white;
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
            <div id="boom">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="letters">
                            <div class="letters animated fadeInLeft delay-1s" id="first"><b>E</b></div>
                            <div class="letters animated fadeInLeft delay-2s" id="second"><b>X</b></div>
                            <div class="letters animated fadeInLeft delay-3s" id="third"><b>P</b></div>
                            <div class="letters animated fadeInLeft delay-4s" id="fourth"><b>L</b></div>
                            <div class="letters animated fadeInLeft delay-5s" id="fifth"><b>O</b></div>
                            <div class="letters animated fadeInDown delay-5s" id="sixth"><b>R</b></div>
                            <div class="letters animated fadeInRight delay-5s" id="seventh"><b>E</b></div>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="button" id="explore" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-secondary btn-lg animated fadeInUp delay-4s" style="color: white; border-color: white; width: 180px;">Create Account</button>
                </div>
                <div class="col-lg-6">
                    <button type="button" id="login" data-toggle="modal" data-target="#loginModal" class="btn btn-outline-secondary btn-lg animated fadeInDown delay-5s" style="color: white; border-color: white; width: 180px;">Login</button>
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
        <!--login modal-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            
                            <form method="POST" style="color: yellow;" action="<?= URL ?>home/loginUser" class="form-group" id="form">
                                <div class="form-input">
                                    <input type="text" name="firstName" id="fname" placeholder="First Name"  class="form-control" required>
                                </div>
                            <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Submit</button>
                        </form>
                    </div>
                </div><!--end modal dialog-->
            </div>
        </div>
    </div>

</body>
</html>
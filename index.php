<?php

    require 'libs/server.php';
    require 'libs/session.php';

    Session::init();

    require 'libs/bootstrap.php';
    require 'libs/views.php';
    require 'libs/controller.php';
    require 'libs/model.php';

    $app = new Bootstrap();
    exit;

?>
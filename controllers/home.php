<?php

    class Home extends Controller{

        function __construct(){

            parent::__construct();
        }

        public function index(){

            $this->view->getUsers = $this->model->loadUser();

            $this->view->render('views/home/index.php');
        }

        //add user

        public function addUser(){

            $this->model->addUser();
        }

        //redirect to update form
        public function updateUser($id){

            $this->view->getUsers = $this->model->loadUserById($id);
            $this->view->render('views/home/update_user.php');

        }

        // update user

        public function doneUpdate(){

            $this->model->doneUpdate();
        }

        // delete user

        public function deleteUser($id){

            $this->model->deleteUser($id);
        }

            // custom page
        public function regPage(){

            $this->view->render('views/home/REG.php');
        }
    }


?>
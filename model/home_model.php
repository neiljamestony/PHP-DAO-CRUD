<?php

    class Home_Model extends Model{

        function __construct(){

            parent::__construct();
        }

        public function addUser(){

            $insertUser = new SmurfTbl;

            $insertUser->firstName = $_POST['firstName'];
            $insertUser->lastName = $_POST['lastName'];
            $insertUser->createdAt = date('Y:m:d H:i:s');
            $insertUser->updatedAt = 'null';
            $insertUser->deletedAt = 'null';
            $insertUser->status = 'Active';

            $success = DAOFactory::getSmurfTblDAO()->insert($insertUser);

            if($success){


                echo '<script>alert("DATA INSERTED SUCCESSFULLY");</script>';

                echo '<script>window.history.back();</script>';
                // header("Location:" . URL);

                
            }else{

                echo '<script>alert("FAIL");</script>';
            }

        }

        public function loadUserById($id) {
			$user = DAOFactory::getSmurfTblDAO()->load($id);
			return $user;
		}

        public function loadUser(){

            $getUsers = DAOFactory::getSmurfTblDAO()->queryBystatus('Active');

            return $getUsers;
        }
        public function doneUpdate(){

            $updateUser = DAOFactory::getSmurfTblDAO()->load($_POST['userId']);

            $updateUser->firstName = $_POST['update-fname'];
            $updateUser->lastName = $_POST['update-lname'];
            $updateUser->updatedAt = date('Y:m:d H:i:s');
            $updateUser->createdAt = 'null';
            $updateUser->deletedAt = 'null';

            DAOFactory::getSmurfTblDAO()->update($updateUser);

            echo '<script>alert("DATA UPDATED SUCCESSFULLY");</script>' . '<script>javascript:history.go(-2)</script>';
            exit; 
        }

        public function deleteUser($id){

            $deleteUser = DAOFactory::getSmurfTblDAO()->load($id);
            $deleteUser->status = 'Inactive';
            $deleteUser->deletedAt = date('Y:m:d H:i:s');

            DAOFactory::getSmurfTblDAO()->update($deleteUser);

            echo '<script>alert("DATA REMOVED SUCCESSFULLY");</script>';
            echo '<script>window.history.back();</script>';
        }
    }


?>
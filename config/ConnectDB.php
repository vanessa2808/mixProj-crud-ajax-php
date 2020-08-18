<?php
    class ConnectDB {
        private $server = 'localhost';
            private $username = 'root';
            private $password = '';
            private $database = 'helloWorld1';

            protected function connect() {

                // This command is to connect with the database;
                $connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);

                // utf-8 connect
                mysqli_set_charset($connect, "utf8mb4");

                // Check the connection with database

                if($connect === FALSE) {
                    echo "connection fail". mysqli_connect_error();
                }
                else
                    return $connect;

                $sql="SELECT * FROM users WHERE name = '".$q."'";



            }


    }


?>
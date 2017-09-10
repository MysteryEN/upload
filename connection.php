<?php

    class mySQL{
        var $host;
        var $username;
        var $password;
        var $database;
        public $dbc;

        public function connect($set_host, $set_username, $set_password, $set_database)
        {
            $this->host = $set_host;
            $this->username = $set_username;
            $this->password = $set_password;
            $this->database = $set_database;
            $this->dbc = mysqli_connect($this->host, $this->username, $this->password, $this->database) or die('Error connecting to DB');        
        }

        public function query($sql)
        {
            return mysqli_query($this->dbc, $sql) or die('Error querying the Database');
        }

        public function fetch($sql)
        {        
            $array = mysqli_fetch_array($this->query($sql));          
            return $array;
        }

        public function close()
        {
            return mysqli_close($this->dbc);
        }
    }
<?php

class ModelActive extends connectDB
{

    public function getUser()
    {

        $pattern = "SELECT users FROM active_user";

        if ($result = $this->query($pattern)){
            return $result;
        }
        return false;
    }

    public function setUser($login) {

        $pattern = "INSERT INTO active_user (`users`) VALUES ('$login')";

        if ($this->execute($pattern)){
            return true;
        }
    }

    public function removeUser() {

        $pattern = "DELETE FROM `active_user`";

        if ($this->execute($pattern)){
            return true;
        }
    }
}
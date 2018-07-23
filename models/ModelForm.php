<?php

class ModelForm extends connectDB
{
    public $login;
    public $password;
    public $email;

    /**
     * @param $login
     * @return bool
     */
    public function checkLoginAut($login_email) {

        if (isset($login_email) && is_string($login_email)) {

            if ($this->checkLogin($login_email)) {
                if ($this->getUserLogin() != null) {
                    return true;
                }
            }
            return false;
        }
        return false;
    }

    /**
     * @param $login
     * @return bool
     */
    public function checkLogin($login) {

        $pattern = "/^[A-Za-zА-Я-а-я0-9]{2,30}/ui";

        if (isset($login) && is_string(htmlspecialchars($login))) {

            if (preg_match($pattern, htmlspecialchars($login))) {
                $this->login = mb_strtolower(htmlspecialchars($login),'UTF-8');
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * @param $password
     * @return bool
     */
    public function checkPassword($password) {

        $pattern = "/^[A-Za-z0-9_.]{6,40}/ui";

        if (isset($password) && is_string(htmlspecialchars($password))) {
            if (preg_match($pattern, htmlspecialchars($password))) {
                $this->password = $this->passHash($password);
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * @param $email
     * @return bool
     */
    public function checkEmail($email) {
        $pattern = "/^[A-Za-z0-9]{2,}@[A-Za-z]+\.[A-Za-z]{2,5}/ui";

        if (isset($email) && is_string(htmlspecialchars($email))) {

            if (preg_match($pattern, htmlspecialchars($email))) {
                $this->email = strtolower(htmlspecialchars($email));
            }
            return false;
        }
        return false;
    }

    public function passHash($password) {
        return password_hash($password,PASSWORD_DEFAULT);
    }

    public function comparePassHash($password, $pass_hash) {

        return password_verify($password, $pass_hash);
    }

    public function getUserLogin() {
        $pattern = "SELECT login FROM user WHERE login = '$this->login'";

        return $this->query($pattern);
    }

    public function getUserPassword() {
        $pattern = "SELECT password FROM user WHERE login = '$this->login'";

        return $this->query($pattern);
    }

    public function getUserEmail() {
        $pattern = "SELECT email FROM user WHERE email = '$this->email'";

        return $this->query($pattern);
    }

    public function setUserInfo() {

        $pattern = "INSERT INTO user (`login`,`password`,`email`) VALUES ('$this->login', '$this->password', '$this->email')";

        if ($this->execute($pattern)){
            return true;
        }
    }
}

<?php

class ControllerAuthorization extends Core
{
    public function fetch() {

        $itemList = new ModelMenu(); // menu nav
        $form = new ModelForm();    // model for form user
        $statusUser = new ModelActive();    // model session

        $array_vars= array(
            'respond' => null ,
            'menu_list' => null
        );

        if (isset($_POST)) {
            if (isset($_POST['authorization'])) {
                $array_vars['name'] = $_POST['login_email'];
                $resultLogin = $form->checkLoginAut($_POST['login_email']);
                $resultPass = $form->checkPassword($_POST['password']);

                if (isset($form->login) && $form->login != '' && isset($form->password) && $form->password != '') {

                    if ($resultLogin) {
                        if ($resultPass) {
                            $passForcompare = $form->getUserPassword();

                            if ($form->comparePassHash($_POST['password'],$passForcompare[0]['password'])) {
                                $statusUser->setUser( $array_vars['name']);
                                $array_vars['success'] = ucfirst($array_vars['name']).",вы Авторизовались удачно.";
                                $itemList->updateItemList($statusUser->getUser());

                                $_SESSION['name'] = $form->login;

                            } else {
                                $array_vars['respond'] = "Пароль введен неверно.";
                            }

                        } else {
                            $array_vars['respond'] = "Пароль введен с неправильными символами.";
                        }
                    } else {
                        $array_vars['respond'] = "Пользователь с таким логином не существует,попробуй другой лог.";
                    }
                }
            }
        }

        $array_vars['menu_list'] = $itemList->getAllItemList();


        return $this->view->render('authorization_form.html', $array_vars);

    }
}
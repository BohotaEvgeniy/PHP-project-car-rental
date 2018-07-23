<?php

class ControllerRegistration extends Core
{
    public function fetch() {

        $itemList = new ModelMenu(); // menu nav
        $form = new ModelForm();    // model for form user
        $email = new Email();    // model for form user

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(), // massive menu
            'respond' => null,
            'success' => null,
        );


        if (isset($_POST)) {
            if (isset($_POST['registration'])) {

                $form->checkLogin($_POST['login']);
                $form->checkPassword($_POST['password']);
                $form->checkEmail($_POST['email']);

                if (isset($form->login) && $form->login != '' && isset($form->password) && $form->password != '' && isset($form->email) && $form->password != '') {
                    $resultLoginwithBD = $form->getUserLogin();
                    $resultEmailwithBD = $form->getUserEmail();

                    if (empty($resultLoginwithBD)) {
                        if (empty($resultEmailwithBD)) {
                            $supplementDB = $form->setUserInfo();
                            if ($supplementDB == true) {
                                $array_vars['success'] = "Вы зарегистрировались удачно.";
                                $email->genirationDataSMS($_POST['email']);
                            }
                        } else {
                            $array_vars['respond'] = "Пользователь с такой почтой существует,попробуй другой адрес.";
                        }
                    } else {
                        $array_vars['respond'] = "Пользователь с таким логином существует,попробуй другой лог.";
                    }
                }
            }
        }

        return $this->view->render('registration_form.html', $array_vars);

    }
}
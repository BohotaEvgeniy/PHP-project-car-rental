<?php

class ControllerUserForm extends Core
{
    public function fetch() {
        $itemList = new ModelMenu(); // menu nav
        $form = new ModelForm();
        $sessionOfUser = new ModelSession();
        $sessionOfUser->setLogin('Marsel');
//        header('Location: http://'.$_SERVER['HTTP_HOST'].'/form');
//        if ($_SESSION['user_name']) {
//            $itemList->updateItemList();
//        } else {
//            $itemList->updateItemList(false);
//        }



        if (isset($_POST)) {
            echo 1;
            if (isset($_POST['registration'])) {
                $form->checkLogin($_POST['login']);
                $form->checkPassword($_POST['password']);
                $form->checkEmail($_POST['email']);
                if ($form->setUserInfo() == true) {
                        $respond = true;
                }

            }

        }
//

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(), // massive menu
            //'respond' => $respond, // massive menu
        );

        return $this->view->render('user_form.html', $array_vars);

    }
}
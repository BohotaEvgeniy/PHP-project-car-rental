<?php

class ControllerExit extends Core
{
    public function fetch() {

        $itemList = new ModelMenu(); // menu nav
        $statusUser = new ModelActive();    // model active user

        if ($statusUser->removeUser()) {
            $itemList->updateItemList(false);
            unset($_SESSION['name']);
        }

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(), // massive menu
        );

        return $this->view->render('nav.html', $array_vars);

    }
}
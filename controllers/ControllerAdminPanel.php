<?php

class ControllerAdminPanel extends Core
{
    public function fetch() {
        $itemList = new ModelMenu();

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(),
        );
        return $this->view->render('nav.html', $array_vars);
    }
}
<?php

class ControllerCalculateAuto extends Core
{
    public function fetch() {

        $itemList = new ModelMenu();

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(),
        );

        return $this->view->render('calculate_cost.html', $array_vars);
    }
}
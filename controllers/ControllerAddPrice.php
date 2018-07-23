<?php

class ControllerAddPrice extends Core
{
    public function fetch() {

        $itemList = new ModelMenu();

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(),
        );


        //print_r($result= $np->getAreas());

        return $this->view->render('cost_auto.html', $array_vars);
    }
}
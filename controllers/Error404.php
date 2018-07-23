<?php

class Error404 extends Core
{
    public function fetch() {

        return $this->view->render('index.html', array('is_exist' => 'This page not exist!'));

    }
}
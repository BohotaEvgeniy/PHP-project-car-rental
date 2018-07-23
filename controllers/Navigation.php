<?php

class Navigation extends Core
{
    public function fetch() {


        $array_vars =array(
          'auto_variable' => "/auto",
          'region_country' => "/region",
          'price_auto' => "/price",
          'calculate_cost' => "/calculate",
          'form_user' => "/form",
        );

        return $this->view->render('nav.html', $array_vars);
    }
}
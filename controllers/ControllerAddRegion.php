<?php

class ControllerAddRegion extends Core
{
    public function fetch() {

        $itemList = new ModelMenu();
        $mdRegion = new ModelRegion();
        $newPost = new \LisDev\Delivery\NovaPoshtaApi2('d0157f0b8c599c083fc34e9a86dc8425');

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(),
        );

        if (!isset($arrAreas)) {
            $arrAreas = $newPost->getAreas();
        }

        if (isset($_REQUEST['submit_region'])) {
            if (isset($_REQUEST['regions'])) {
                if ($mdRegion->setRegion($_REQUEST['regions']))
                    $_SESSION['choice_user']['region'] = $_REQUEST['regions'];
                $array_vars['success'] = 'Вы успешно выбрали регион!';
            } else {
                $array_vars['warning'] = 'Сделайте ваш выбор!';
            }

        }

        $array_vars['region_list'] = $mdRegion->choiceregion($arrAreas['data']);

        return $this->view->render('region_country.html', $array_vars);

    }
}
<?php

class ControllerAddAuto extends Core
{
    public function fetch() {
        $itemList = new ModelMenu();
        $listSetCar = new ModelCharacteristicAuto();
        $characteristicData = new stdClass();
        $characteristicData->visible_img = '0';

        $array_vars = array(
            'menu_list' => $itemList->getAllItemList(),
            'list_auto' => $listSetCar->getListAuto(),
            'list_transmission' => $listSetCar->getListTransmission(),
            'list_force_car' => $listSetCar->getListForceCar(),
            'list_class_by_car' => $listSetCar->getListClassbyCar(),
            'list_color_car' => $listSetCar->getListColorCar(),
        );

        if (isset($_REQUEST['submit_choice'])) {
            if (!empty($_POST)) {
                if (array_key_exists('visible_auto', $_POST)) {
                    $characteristicData->visible_img = $_POST['visible_auto'];
                }
                if ($listSetCar->testAmountInputs($_POST)) {
                    $characteristicData->label_car = $_POST['label_auto'];
                    $characteristicData->transmission_car = $_POST['transmission_auto'];
                    $characteristicData->engine_car = $_POST['engine_auto'];
                    $characteristicData->class_car = $_POST['class_auto'];
                    $characteristicData->color_car = $_POST['color_auto'];

                    if ($listSetCar->setListCharacteristicCar($characteristicData)){
                        if ($result = $listSetCar->getLastAuto()) {
                           /*foreach ($result as $key => $value) {
                               echo $result[$key]->value;
                           }*/
                            $_SESSION['choice_user']['id_characteristic_auto'] = $result[0]['last_characteristic'];
                        }
                    }
                    $array_vars['success'] = 'Спасибо за ваш выбор,все данные записаны.';
                } else {
                    $array_vars['empty_inputs'] = 'Вы пропустили некоторые поля формы,необходимо заполнить все поля формы';
                }

            } else {
                $array_vars['empty_inputs'] = 'Вы не выбрали ничего,сделайте ваш выбор.';
            }
        }

        return $this->view->render('stock_auto.html', $array_vars);
        // d0157f0b8c599c083fc34e9a86dc8425
        // https://api.novaposhta.ua/v2.0/json/

    }
}
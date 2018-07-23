<?php

class ModelCharacteristicAuto extends connectDB
{
    public function getListAuto() {
        $pattern = "SELECT id, car_brand, link_img FROM labels_auto";

        if ($result = $this->query($pattern)) {
            return $result;
        }
        return false;
    }

    public function getListTransmission() {
        $pattern = "SELECT id, transmission FROM cars_transmission";

        if ($result = $this->query($pattern)) {
            return $result;
        }
        return false;
    }

    public function getListForceCar() {
        $pattern = "SELECT id, amount FROM force_amount";

        if ($result = $this->query($pattern)) {
            return $result;
        }
        return false;
    }

    public function getListClassbyCar() {
        $pattern = "SELECT id, class, description FROM class_car";

        if ($result = $this->query($pattern)) {
            return $result;
        }
        return false;
    }

    public function getListColorCar() {
        $pattern = "SELECT `id`, `color_name`, `color_img` FROM `color_car`";

        if ($result = $this->query($pattern)) {
            return $result;
        }
        return false;
    }

    public function setListCharacteristicCar($data) {

        $pattern = "INSERT INTO `list_characteristic_car`(`label`, `transmission`, `engine`, `class`, `color`, `visible`) VALUES ('$data->label_car', '$data->transmission_car', '$data->engine_car', '$data->class_car', '$data->color_car', '$data->visible_img')";

        if ($this->execute($pattern)){
            return true;
        }
    }

    public function getLastAuto() {
        $pattern = "SELECT MAX(`id`) as `last_characteristic` FROM `list_characteristic_car`";

        if ($result = $this->query($pattern)) {
            return $result;
        }
        return false;
    }

    public function testAmountInputs($array_post) {
        $amount = count($array_post);
        if (($amount > 2 && $amount == 6) || ($amount > 2 && $amount == 7)) {
            return true;
        } else {
            return false;
        }
    }
}
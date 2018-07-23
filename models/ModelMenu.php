<?php

class ModelMenu extends connectDB
{

    public function getAllItemList() {
        $pattern = 'SELECT `id`, `name`, `link`, `position_id`, `visible` FROM `itemList` WHERE `visible` = 0';

        return $this->query($pattern);
    }

    public function updateItemList($active_item = true) {

        if ($active_item) {
            $pattern = 'UPDATE `itemList` SET `visible`= 1 WHERE `position_id` = 5;
                        UPDATE `itemList` SET `visible`= 1 WHERE `position_id` = 6;
                        UPDATE `itemList` SET `visible`= 0 WHERE `position_id` = 7 ';
        } else {
            $pattern = 'UPDATE `itemList` SET `visible`= 0 WHERE `position_id` = 5;
                        UPDATE `itemList` SET `visible`= 0 WHERE `position_id` = 6;
                        UPDATE `itemList` SET `visible`= 1 WHERE `position_id` = 7 ';
        }

        $this->execute($pattern);
    }

}
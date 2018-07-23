<?php

class ModelRegion extends connectDB
{
    public function choiceregion($arr) {

        foreach ($arr as $key => $value) {
            $arrListAreas[] = $arr[$key]['Description'];
        }

        if (empty($arrListAreas)) {
            return false;
        } else {
            array_shift($arrListAreas);
            return $arrListAreas;
        }
    }

    public function setRegion($region) {

        $pattern = "INSERT INTO `regions`(`region`) VALUES ('$region') ";

        if ($this->execute($pattern)){
            return true;
        }
    }
}
<?php

class Conversor {
    public int $celsius;
    public int $fahrenheit;
    
    public function getCelsius()
    {
       $getC= intval(($_POST['celsius']));
       if (empty($getC))
       {
        $getC = intval($_POST['fahrenheit']);
       }
       return $getC;
    }

    public function getFahrenheit()
    {
        $getF = intval(($_POST['fahrenheit']));
        if (empty($getF))
        {
            $getF = intval($_POST['celsius']);
        }
        return $getF;
    }
    
}

?>

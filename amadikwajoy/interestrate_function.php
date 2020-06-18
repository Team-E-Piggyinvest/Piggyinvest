<?php
    function interest_investment($principal_rate, $periods_of_investment, $interest_rate){
        // variable declation and initialization 
        $result = 0.0;

        // calculating the interest
        $result = $principal_rate * $periods_of_investment * $interest_rate;

        // returning the value of result variable

        return $result;
    }

?>
<?php
    include_once('interestrate_function.php');
    if (isset($_POST['calculate'])){
        $principal_rate = $_POST['damount'];
        $periods_of_investment = $_POST['duration'];
        $interest_rate1 = $_POST['packages'];

        $interest_rate = $interest_rate1 / 100 ;
        $total_interest = interest_investment($principal_rate, $periods_of_investment, $interest_rate);

        echo " <script type='text/javascript'> alert($total_interest); </script> ";
    }


?>
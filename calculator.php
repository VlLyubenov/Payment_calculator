<?php

    echo 'Ready<br>';

    if(isset($_POST['submit'])){

        $size = $_POST['size'];
        $pct = $_POST['percent'];
        $freq = $_POST['freq'];
        $periods = $_POST['periods'];

        $pct = $pct / 100;

        switch($freq){
            case "monthly":
                $nper = $periods * 12;
                break;
            case "quarterly":
                $nper = $periods * 4;
                break;
            case "annual":
                $nper = $periods;
                break;
        }

        $pmt = ($size * $pct) / ((1 + $pct) * (1 - 1 / ((1+$pct)**$nper)));

        print_r("Your payment is: ".$pmt);
        
    }
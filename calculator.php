<?php

    echo 'Ready<br>';

    if(isset($_POST['submit'])){

        $size = $_POST['size'];
        $pct = $_POST['percent'];
        $nper = $_POST['nper'];

        $pct = $pct / 100;

        $pmt = ($size * $pct) / ((1 + $pct) * (1 - 1 / ((1+$pct)**$nper)));

        print_r("Your payment is: ".$pmt);
        
    }
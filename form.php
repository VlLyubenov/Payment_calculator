<?php include("calculator.php");?>

<p><h1>Loan Payment Calculator</h1><p>

<form action='calculator.php' method='POST'>

    <label name="size">Enter the loan size:</label>
    <input name='size' type='text'/>

    <br><br>

    <label name='percent'>Loan percent:</label>
    <input name='percent' type='text'/><label>%</label>
    
    <br><br>

    <label name='nper'>Number of payments:</label>
    <input name='nper' type='text'/>
    
    <br><br>

    <input type='submit' name='submit' value='Calculate'/>
   

</form>
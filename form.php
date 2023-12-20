<?php include("calculator.php");?>

<p><h1>Loan Payment Calculator</h1><p>

<form action='calculator.php' method='POST'>

    <label name="size">Enter the loan size:</label>
    <input name='size' type='number'/>

    <br><br>

    <label name='percent'>Loan percent:</label>
    <input name='percent' type='number'/><label>%</label>
    
    <br><br>

    <laben name="freq">Payment type:</label>
    <select name="freq">
        <option value="monthly">Monthly</option>
        <option value="quarterly">Quarterly</option>
        <option value="annual">Annual</optoin>
    </select>

    <br><br>

    <label name='periods'>Years:</label>
    <input name='periods' type='number'/>
    
    <br><br>

    <input type='submit' name='submit' value='Calculate'/>
   

</form>
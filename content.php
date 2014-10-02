<h2>"xkcd" PASSWORD GENERATOR</h2>

<table>
<!--INPUT FORM-->
<tr>
<td class="box">
<form method="POST" action="index.php">

    <label name="count">Number of words: </label>
    <select name="count" class="form-control input-lg">
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    <option value="6"> 6 </option>
    <option value="7"> 7 </option>
    <option value="8"> 8 </option>
    <option value="9"> 9 </option>
</select><br />

    <label name="uppercase">First letter of each word as Uppercase?</label>
    <input type="checkbox" name="uppercase" value="checkbox" <?php echo ($uppercase) ? 'checked="checked"' : '' ; ?>/><br />
<!--The last part is to output the last choice of the user-->

    <label name="symbol">Include a symbol?</label>
    <input type="checkbox" name="symbol" value="symbol" <?php echo ($symbol) ? 'checked="checked"' : '' ; ?>/><br />

    <label name="number">Include a number?</label>
    <input type="checkbox" name="number" value="number" <?php echo ($number) ? 'checked="checked"' : '' ; ?>/><br /><br />

    <!-- SUBMIT BUTTON-->
    <button type="submit" class="btn btn-primary">Find a Password</button>

</form>
    
<!-- ANSWER -->
</td><td class="box"><div class="answer"><p><br />Your password is:<br /><br /> <?php echo ($password) ? $password : ''; ?>
</p><br /></div></td>
</tr>
</table>

<!-- PICTURE -->
<p class="centerImage">
    <img src="./images/PwdImage.png" alt="xkcd Password cartoon" />
</p>
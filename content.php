<!--<div class="container">-->
<div>
<h2>"xkcd" Password Generator</h2>

<table>
<!--INPUT FORM-->
<!-------------->
<tr>
<td class="box">
<form method="POST" action="index.php">
    <label name="count">Number of words (default=1): </label>
    <input type="text" id="count" name="count" value=1 /><br />

    <label name="uppercase">First letter of each word as Uppercase?</label>
    <input type="checkbox" name="uppercase" value="checkbox" <?php echo ($uppercase) ? 'checked="checked"' : '' ; ?>/><br />
<!--The last part is to output the last choice of the user-->

    <label name="symbol">Use a symbol?</label>
    <input type="checkbox" name="symbol" value="symbol" <?php echo ($symbol) ? 'checked="checked"' : '' ; ?>/><br />

    <label name="number">Include a number?</label>
    <input type="checkbox" name="number" value="number" <?php echo ($number) ? 'checked="checked"' : '' ; ?>/><br /><br />

    <!--    SUBMIT BUTTON:-->
    <input type="submit" name="submit" value="submit"/>
</form>
</td><td class="box"><div><p class="answer">Your password is:<br /><br /> <?php echo ($password) ? $password : ''; ?>
</p></div></td></tr>

<!-- PICTURE -->
<!------------->
<tr><td class="box" colspan="2"><img src="./images/PwdImage.png" alt="xkcd Password" />
</tr></tr>

</table>

</div>
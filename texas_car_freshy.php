<!-- Add the Default Head Elements -->
<?php
  include 'head.php';
?>
<?php
  include 'header.php';
?>
<div class="container-fluid" style="margin: 0 auto; text-align: center; float: center;">
<a href="index.php" class="btn btn-lg btn-outline-success" style="margin: 0 auto; text-align: center; float: center;">Home</a>
  <div class="container">
    <h1>Texas Car Freshies</h1>
    <div class="row">
      <div class="col-md-4" id="home_containers" style="margin: 0 auto; text-align: center; float: center;"><br/>
        <img src="images/texas_car_freshy.jpg" class="feature_image"><br/>
        <br/>
      </div>
    </div>
  </div>
</div>
  <table border="0" style="margin-bottom: 50px; margin: 0 auto; text-align: center; float: center; margin-bottom: 20px;">
    <tr>
      <td style="border: 0">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="6E23MTNT69V5A">
        <table>
        <tr><td><input type="hidden" name="on0" value="Primary Color:">Primary Color:</td></tr><tr><td><select name="os0">
        	<option value="Red">Red $8.00 USD</option>
        	<option value="Blue">Blue $8.00 USD</option>
        	<option value="Green">Green $8.00 USD</option>
        	<option value="Gold">Gold $8.00 USD</option>
        	<option value="Copper">Copper $8.00 USD</option>
        	<option value="Pink">Pink $8.00 USD</option>
        	<option value="Yellow">Yellow $8.00 USD</option>
        	<option value="Orange">Orange $8.00 USD</option>
        	<option value="Black">Black $8.00 USD</option>
        	<option value="Magenta">Magenta $8.00 USD</option>
        </select> </td></tr>
        <tr><td><input type="hidden" name="on1" value="Scents:">Scents:</td></tr><tr><td><select name="os1">
        	<option value="Butt Naked">Butt Naked </option>
        	<option value="Leather">Leather </option>
        	<option value="Valcano">Valcano </option>
        	<option value="Cotton Candy">Cotton Candy </option>
        	<option value="Jolly Rancher">Jolly Rancher </option>
        </select> </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

      </td>
    </tr>
  </table>
</div>

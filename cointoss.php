<?php include ('header.php'); include ('./navi/sidebar.php'); ?>
<div class="CONTENT" id="COINTOSS"> 
  <h1>Coin Toss Program</h1>
  <p>Whenever two battlers have the same speed, the originator of the battle must 
    flip a coin in order to determine the player that will be able to attack first. 
    This is a simple program that simulates the coin toss, because I know on occassion, 
    sometimes you can't find a coin when you need one!</p>
  <p>Please remember Eorl's Honor battle code when using this program.</p>
  <ul>
    <li> <b>Battle with honor</b>. Never lie about stats or coin flips. Always 
      follow proper rules and procedure. </li>
  </ul>
  <table>
    <tr> 
      <th>Your Coin Toss Result is...</th>
    </tr>
    <tr> 
      <td> 
        <?php coinToss(); ?>
      </td>
    </tr>
  </table>
  <div class="LINK_BACK"> 
    <p>Back to <a href="../index.php">Index</a></p>
  </div>
</div>
<?php include ('footer.php'); ?>

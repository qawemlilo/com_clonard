<?php 
defined('_JEXEC') or die('Restricted access'); 

$document = &JFactory::getDocument();
$document->addStyleSheet('components/com_clonard/css/ui-lightness/jquery-ui-1.8.16.custom.css');
$document->addStyleSheet('components/com_clonard/css/style.css');
$document->addStyleSheet('components/com_clonard/css/steps.css');
$document->addScript('components/com_clonard/js/jquery-1.6.2.min.js');
$document->addScript('components/com_clonard/js/jquery-ui-1.8.16.custom.min.js');
$document->addScript('components/com_clonard/js/clonard.js');
?>

<div id="form-cont">

<div class="steps"> 
  <ul>
    <li class="active prior" style="margin-left: 0px;">1. Details of Child / Children</li>
	<li class="active prior">2. Select Books</li>
	<li class="active prior">3. Parent / Guardian</li>
	<li class="active last">4. Order Now!</li>
  </ul>
</div>

<div class="clear"></div>

<div id="total"><strong>Total</strong> R<span id="amount">00.00</span></div>

<div class="clear"></div>
<!-- Our form -->
 <form id="contactForm" name="ch-details" method="POST" action="?option=com_clonard">
 
    <fieldset>
	  <legend>Order Summary</legend>
	  
	  <p id="responseP"> &nbsp; </p>
	  <p>
	    <label for="message">Special Requests</label>
		<textarea tabindex="4" rows="8" cols="40" id="m_error" name="message"></textarea>
	  </p>
	  
	  <p>&nbsp;</p>	  
	  
	  <p>
	    <button class="button white" type="button" onclick="history.go(-1);"><strong><< Back</strong></button>  <button type="submit" value="submit" class="button blue" id="submit" name="submit"><strong>Order Now! >></strong></button>
	  </p>
	  <div class="clear"></div>
	</fieldset>
 </form>
 </div>
<?php 
defined('_JEXEC') or die('Restricted access'); 

$document = &JFactory::getDocument();
$document->addStyleSheet('components/com_clonard/css/style.css');
$document->addStyleSheet('components/com_clonard/css/steps.css');
?>

<div id="form-cont">

<div class="steps"> 
  <ul>
    <li class="active">1. Parent / Guardian</li>
    <li class="inactive">2. Details of Child</li>
	<li class="inactive">3. Select Books</li>
	<li class="inactive last">4. Order Now!</li>
  </ul>
</div>

<div class="clear"></div>

<div id="total"><strong>Total</strong> R<span id="amount">00.00</span></div>

<div class="clear"></div>
<!-- Our form -->
  <form id="contactForm" name="ch-details" method="POST" action="?option=com_clonard">
 
    <fieldset>
	  <legend>Details of Parent / Guardian</legend>
	  
	  <p id="responseP"> &nbsp; </p>
	  <h2>Personal Details</h2>
	  <p>
	    <label for="title">Title:<span class="req">*</span></label>
		<select name="title">
		  <option value="">Select Title</option>
		  <option value="1">Mr</option>
		  <option value="2">Mrs</option>
		  <option value="3">Miss</option>
		  <option value="4">Dr</option>
		  <option value="5">Prof</option>
		</select>
	  </p>	 
	  
	  <p>
	    <label for="name">Name:<span class="req">*</span></label>
		<input type="text" id="name" class="txt" size="22" value="" name="name">
	  </p>
	  
	  <p>
	    <label for="surname">Surname:<span class="req">*</span></label>
		<input type="text" id="surname" class="txt" size="22" value="" name="surname">
	  </p>
	  
	  <p>
	    <label for="email">Email:<span class="req">*</span></label>
		<input type="text" id="email" class="txt" size="22" value="" name="email" />
	  </p>

	  <p>
	    <label for="fax">Fax:<span class="req">*</span></label>
		<input type="text" id="fax" class="txt" size="22" value="" name="fax" />
	  </p>
	  
	  <p>
	    <label for="tel">Tel:<span class="req">*</span></label>
		<input type="text" id="tel" class="txt" size="22" value="" name="tel" />
	  </p>
	  
	  <p>
	    <label for="cell">Cell:<span class="req">*</span></label>
		<input type="text" id="cell" class="txt" size="22" value="" name="cell" />
	  </p>
	   
	  <h2>Postal Details</h2>
	  
	  <p>
	    <label for="address">Postal Address:<span class="req">*</span></label>
		<textarea tabindex="4" rows="5" cols="40" id="address" name="address"></textarea>
	  </p>
	  
	  <p>
	    <label for="address">Postal Code:<span class="req">*</span></label>
		<input type="text" id="cell" class="txt" size="4" value="" name="code" style="width:60px" />
	  </p>
	  
	  <p> &nbsp; </p> 
	  
	  <p>
	    <button type="submit" value="submit" class="button blue" id="submit" name="submit" onclick="location.href='?option=com_clonard&view=step_two'; return false"><strong>Details of Children >></strong></button>
	  </p>
	  <div class="clear"></div>
	</fieldset>
 </form>
 </div>
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
    <li class="active prior">1. Parent / Guardian</li>
    <li class="active">2. Details of Child</li>
	<li class="inactive">3. Select Books</li>
	<li class="inactive last">4. Order Now!</li>
  </ul>
</div>

<div class="clear"></div>

<div id="total"><strong>Total</strong> R<span id="amount">00.00</span></div>

<div class="clear"></div>
<!-- Our form -->
 <form id="contactForm" name="step_two" method="POST" action="?option=com_clonard">
 
    <fieldset>
	  <legend>Details of Child</legend>
	  
	  <p id="responseP"> &nbsp; </p> 
	  <h2>Personal Details</h2>
	  
	  <p>
	    <label for="name"> Full Name <span class="req">*</span></label>
		<input type="text" id="name" class="txt" size="22" value="" name="name">
	  </p>
	  
	  <p>
	    <label for="dob">Date of Birth<span class="req">*</span></label>
		<input type="text" id="dob" class="txt" size="22" value="" name="dob">
	  </p>
	  
	  <p>
	    <label for="gender">Gender<span class="req">*</span></label>
		<select name="gender">
		  <option value="">Gender</option>
		  <option value="boy">Boy</option>
		  <option value="girl">Girl</option>
		</select>
	  </p> 
	  
	  <h2>School Details</h2>
	  
	  <p>
	    <label for="passed">Grade Passed<span class="req">*</span></label>
		<select name="passed">
		  <option value="">Grade</option>
		  <option value="r">R</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		</select>
	  </p>	
	  
	  <p>
	    <label for="grade">Going to Grade<span class="req">*</span></label>
		<select name="grade">
		  <option value="">Grade</option>
		  <option value="r">R - (R3 400) </option>
		  <option value="1">1 - (R3 600) </option>
		  <option value="2">2 - (R3 600) </option>
		  <option value="3">3 - (R3 600) </option>
		  <option value="4">4 - (R4 300) </option>
		  <option value="5">5 - (R4 300) </option>
		  <option value="6">6 - (R4 300) </option>
		  <option value="7">7 - (R4 800) </option>
		  <option value="8">8 - (R5 100) </option>
		  <option value="9">9 - (R5 400) </option>
		</select>
	  </p>	  
	   <p> &nbsp; </p> 
	  <p>
	       <button class="button white" type="button" onclick="history.go(-1);"><strong><< Back</strong></button> <button type="submit" value="submit" class="button blue" id="submit" onclick="location.href='?option=com_clonard&view=step_three'; return false" name="submit"><strong>Select Books >></strong></button>
	  </p>
	  <div class="clear"></div>
	</fieldset>
 </form>
 </div>
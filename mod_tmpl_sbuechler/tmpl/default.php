<?php
/**
 * @Copyright
 *
 * @package    Joomla module template
 * @author     Sebastian Buechler <opensource@sbuechler.de>
 * @version    1.0 - 2020-02-17
 * @link       https://www.sbuechler.de
 */
 
JHTML::script('modules/mod_tmpl_sbuechler/js/mod_tmpl_sbuechler.js');

defined('_JEXEC') or die('Restricted access');
echo '<!-- Joomla module template - sbuechler.de -->';
?>


  <?php 
	// Executes when the submit button is clicked
	if (isset($_POST['yourBtn'])){	
		$spnSubmitResult = "Your Output";
	}	
  ?>

  	<div>
		<input id="btnSubmit" type="submit" class="" name="yourBtn" value="Click me">						
	</div>
	<div>
		<span id="spnSubmitResult"><?php echo $spnSubmitResult ?></span>
	</div>
								

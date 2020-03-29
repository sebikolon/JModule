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
     $submitResult = ".. Your output goes here";
	// Executes whenever the submit button is clicked
	if (isset($_POST['yourBtn'])){	
		$submitResult = "You have clicked me!";
	}	
  ?>

  <div class="divWrapper">
  <p>This is a very simple, straight-forward & ready-to-install Joomla module.</p>
  <p>It was developed using version 3.9 of <a href="https://www.joomla.org/3/">Joomla.org</a>.</p>

  <p>You can create arbitrary instances of the module and place them on any module position of your template.<br>
     It comes with <b>3 sample parameters</b> which can be adjusted in the module settings.</p>

<h4>Example content, using a PHP submit form:</h4>

  <form id="vzrForm" method="post">			
		<div>
			<input id="btnSubmit" type="submit" class="" style="font-weight:bold" name="yourBtn" value="Click me!">	
			<span id="spnSubmitResult">
				<?php if (isset($submitResult)) echo $submitResult;?>
			</span>					
		</div>
		<div>
			
		</div>
	</form>					
  </div>

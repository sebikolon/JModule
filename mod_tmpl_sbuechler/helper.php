<?php
/**
 * @Copyright
 *
 * @package    Joomla module template
 * @author     Sebastian Buechler <opensource@sbuechler.de>
 * @version    1.0 - 2020-02-17
 * @link       https://www.sbuechler.de
 */
defined('_JEXEC') or die('Restricted access');

use Joomla\Registry\Registry;

class ModTmplSbuechlerSetStyle{
	
	/**
	 * Sets CSS instructions to the head section
	 *
	 * @param $module_id
	 * @param $color
	 */
	public function setHeadData($module_id, $color)
	{
		$document = JFactory::getDocument();
		$document->addStyleSheet('modules/mod_tmpl_sbuechler/mod_tmpl_sbuechler.css');
		
		$css = '.cdub_color'.$module_id.'{color:'.$color.';}'."\n";
		$document->addStyleDeclaration($css);
	}

}


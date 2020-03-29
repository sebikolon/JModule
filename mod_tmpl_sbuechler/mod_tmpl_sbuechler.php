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

require_once(dirname(__FILE__).'/helper.php');

// Include JS scripts
JHTML::script('modules/mod_tmpl_sbuechler/mod_tmpl_sbuechler.js');

$color = $params->get('color');

$param1 = $params->get('param1');
$param2 = $params->get('param2');
$param3 = $params->get('param3');

$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$module_id = $module->id;

// Set CSS information to the head section
$style = new ModTmplSbuechlerSetStyle();
$style->setHeadData($module_id, $color);

// Load template for the output
require JModuleHelper::getLayoutPath('mod_tmpl_sbuechler', $params->get('layout', 'default'));




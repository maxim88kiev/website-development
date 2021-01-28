<?php defined('_JEXEC') or die;

class PlgSystemCrutch extends JPlugin
{
	public function onAfterInitialise()
	{
		//JLoader::register('HTML', JPATH_BASE . '/plugins/system/crutch/lib.php');
	}

	public function onAfterRender()
	{
		$app = JFactory::getApplication();
		if ($app->isSite()) {
            $buffer = $app->getBody();
            //$app->setBody(sanitize_output($buffer));
        }
        /*$insert = HTML::implode_f_scripts();
        if (!empty($insert)) {
            $result = preg_replace('/<\/body>([\s\S]*)<\/html>$/m', "{$insert}</body></html>", $buffer);
            $app->setBody(sanitize_output($result));
        } else {*/
        //}
    }
}
<?php
namespace YF\Modules\Users\Action;

use YF\Modules\Base\Action,
	YF\Core;

/**
 * User Action Logout Class
 * @package YetiForce.Actions
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Logout extends Action\Base
{

	public function process(\YF\Core\Request $request)
	{
		$response = \YF\Core\Api::getInstance()->call('Users/Logout', [], 'put');
		session_destroy();
		header('Location: ' . \YF\Core\Config::get('portalPath'));
	}
}

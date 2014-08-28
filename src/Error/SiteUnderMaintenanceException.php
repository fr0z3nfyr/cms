<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 1.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
namespace QuickApps\Error;

use Cake\Error\Exception;

/**
 * Represents an HTTP 503 error.
 *
 */
class SiteUnderMaintenanceException extends Exception {

/**
 * Constructor
 *
 * @param string $message If no message is given 'Site under maintenance'
 *  will be the message
 */
	public function __construct($message = null) {
		if (empty($message)) {
			$message = 'Site under maintenance';
		}
		parent::__construct($message, 503);
	}

}
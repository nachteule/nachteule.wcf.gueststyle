<?php
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * @author	Nachteule`
 * @license	GNU Lesser General Public License
 * @package nachteule.wcf.gueststyle
 */
class GuestStyleListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (!WCF::getUser()->userID && GUEST_STYLE)
			StyleManager::changeStyle(GUEST_STYLE, true);
	}
}

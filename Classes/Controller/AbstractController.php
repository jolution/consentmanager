<?php
namespace Jolution\Consentmanager\Controller;

/**
 * @package consentmanager
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
abstract class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * Helper function to use localized strings
     *
     * @param string $key locallang key
     * @param string $default the default message to show if key was not found
     * @return string
     */
    protected function translate($key, $defaultMessage = '') {
        $message = \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate($key, $this->extensionName);
        if($message === NULL) {
            $message = $defaultMessage;
        }
        return $message;
    }

}

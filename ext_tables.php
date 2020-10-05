<?php
defined('TYPO3_MODE') || die();

// TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('consentmanager', 'Configuration/TypoScript', 'Consentmanager');

// Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'consentmanager',
	'Main',
	'Cookies'
);

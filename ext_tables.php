<?php
defined('TYPO3_MODE') || die();

// TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Consentmanager');

// Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Main',
	'Cookies'
);

<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Jolution.consentmanager',
	'Main',
	array(
		'Main' => 'cookie',
	),
	// non-cacheable actions
	array(
	)
);

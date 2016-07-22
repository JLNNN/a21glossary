<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/', 'A21 Glossary - Default Output (Old)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Accessibility/', 'A21 Glossary - Accessible Output (Recommended)');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:a21glossary/locallang_db.xml:tx_a21glossary_main', 'a21glossary'));
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_a21glossary_main');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_a21glossary_main');

$TCA['tx_a21glossary_main'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:a21glossary/locallang_db.xml:tx_a21glossary_main',
		'label' => 'short',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioning' => '1',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY short,uid',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group'
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/Tca.php',
		'iconfile' => 'EXT:a21glossary/icon_tx_a21glossary_main.gif',
	),
	'feInterface' => array(
		'fe_admin_fieldList' => 'sys_language_uid, l18n_parent, l18n_diffsource, hidden, starttime, endtime, fe_group, short, shortcut, longversion, shorttype, language, description, link, exclude, force_linking, force_case, force_preservecase, force_regexp, force_global',
	)
);

?>

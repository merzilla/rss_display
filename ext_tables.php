<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature]='layout,select_key';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature]='pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForm/feed.xml');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Fetch and display a RSS feed'
);

?>
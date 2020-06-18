<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

#This method add an entry in the static template list found in sys_templates FOR USE IN Configuration/TCA/Overrides/sys_template.php
#The file include_static_file.txt, allows you to include other static templates defined in files, from your static template, and thus corresponds to the field 'include_static_file' in the sys_template table.
#So all the necessary templates and co for the distribution are loaded here and should therefore not be deleted

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cms_vorlesung_trier', 'Configuration/TypoScript', 'Beispielprojekt CMS Vorlesung');

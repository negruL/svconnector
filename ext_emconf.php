<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "svconnector".
 *
 * Auto generated 05-04-2017 17:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Connector Services',
  'description' => 'This family of services is used to connect to external data sources and fetch data from them. This is just a base class which cannot be used by itself. Implementations are done for specific subtypes.',
  'category' => 'services',
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author_company' => '',
  'version' => '3.1.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '7.6.0-8.99.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
      'devlog' => '',
    ),
  ),
  '_md5_values_when_last_written' => 'a:35:{s:9:"ChangeLog";s:4:"2059";s:11:"LICENSE.txt";s:4:"6404";s:9:"README.md";s:4:"cca8";s:13:"composer.json";s:4:"d76c";s:21:"ext_conf_template.txt";s:4:"24ae";s:12:"ext_icon.png";s:4:"29de";s:14:"ext_tables.php";s:4:"faf6";s:40:"Classes/Controller/TestingController.php";s:4:"4c14";s:49:"Classes/Domain/Repository/ConnectorRepository.php";s:4:"6edf";s:40:"Classes/Exception/ConnectorException.php";s:4:"ef01";s:42:"Classes/Exception/SourceErrorException.php";s:4:"85c6";s:33:"Classes/Service/ConnectorBase.php";s:4:"9241";s:36:"Classes/Utility/ConnectorUtility.php";s:4:"d165";s:43:"Classes/ViewHelpers/Be/ResultViewHelper.php";s:4:"bd60";s:26:"Documentation/Includes.txt";s:4:"c83c";s:23:"Documentation/Index.rst";s:4:"69ae";s:26:"Documentation/Settings.yml";s:4:"45cb";s:25:"Documentation/Targets.rst";s:4:"cc7b";s:37:"Documentation/Configuration/Index.rst";s:4:"10cd";s:34:"Documentation/Developers/Index.rst";s:4:"76de";s:47:"Documentation/Developers/ConnectorApi/Index.rst";s:4:"4183";s:46:"Documentation/Developers/Conversions/Index.rst";s:4:"7814";s:45:"Documentation/Developers/Exceptions/Index.rst";s:4:"af83";s:40:"Documentation/Developers/Hooks/Index.rst";s:4:"c4c8";s:47:"Documentation/Developers/Implementing/Index.rst";s:4:"a97e";s:47:"Documentation/Developers/Initializing/Index.rst";s:4:"f98d";s:44:"Documentation/Developers/Resetting/Index.rst";s:4:"a857";s:41:"Documentation/Developers/Sample/Index.rst";s:4:"7e13";s:35:"Documentation/Images/TestModule.png";s:4:"23e4";s:36:"Documentation/Installation/Index.rst";s:4:"f7e6";s:36:"Documentation/Introduction/Index.rst";s:4:"5237";s:40:"Resources/Private/Language/locallang.xlf";s:4:"9e49";s:48:"Resources/Private/Templates/Testing/Default.html";s:4:"8bd3";s:45:"Resources/Public/Images/ModuleSvconnector.svg";s:4:"a86b";s:44:"Resources/Public/JavaScript/TestingModule.js";s:4:"bccb";}',
);


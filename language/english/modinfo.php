<?php declare(strict_types=1);

// English strings for displaying information about this module in the site administration web pages

// The name of this module. Prefix (_MI_) is for Module Information
define('_MI_PMW_NAME', 'PackMasterWeb');
define('_MI_PMW_TITLE', 'Pack Master Web');

// The description of this module
define('_MI_PMW_DESC', 'Pack Master Web is a XOOPS tool for tracking Cub Scouts.  Currently PAck Master Web works with the Pack Master Software');

// Names of blocks in this module. Note that not all modules have blocks
define('_MI_PMW_BLOCK_ONE_TITLE', 'PackMasterWeb: Sample Block');
define('_MI_PMW_BLOCK_ONE_DESC', 'A simple, working block example.');
define('_MI_PMW_BLOCK_TWO_TITLE', 'PackMasterWeb: Database Block');
define('_MI_PMW_BLOCK_TWO_DESC', 'A simple, working block example that queries a database.');

// Names of the menu items displayed for this module in the site administration web pages
define('_MI_PMW_MENU_MAIN', 'Main');
define('_MI_PMW_MENU_MAIN_DESC', 'Pack Master Web is a XOOPS tool for tracking Cub Scouts.  Currently PAck Master Web works with the Pack Master Software');

define('_MI_PMW_MENU_EDIT', 'Edit');
define('_MI_PMW_MENU_EDIT_DESC', 'Edit Scout Data and Advancement Records');

define('_MI_PMW_MENU_UPLOAD', 'Upload');
define('_MI_PMW_MENU_UPLOAD_DESC', 'Upload to a Database Table in PackMasterWeb');
//	Upload Sub menu options
define('_MI_PMW_UPLOAD_UPLOAD_SD', 'Upload Scout Data');
define('_MI_PMW_UPLOAD_DOWNLOAD_SD', 'Download Scout Data');
define('_MI_PMW_UPLOAD_UPLOAD_AD', 'Upload Advancement Data');
define('_MI_PMW_UPLOAD_DOWNLOAD_AD', 'Download Advancement Data');
define('_MI_PMW_UPLOAD_UPLOAD_ANS', 'Upload Academic & Sports Data');
define('_MI_PMW_UPLOAD_DOWNLOAD_ANS', 'Download Academic & Sports Data');
define('_MI_PMW_UPLOAD_UPLOAD_ELECTIVES', 'Upload Elective Data');

define('_MI_PMW_MENU_CONFIG', 'Configure');
define('_MI_PMW_MENU_CONFIG_DESC', 'Set configuration options for PackMasterWeb');
define('_MI_PMW_MENU_HELP', 'Help');
define('_MI_PMW_MENU_HELP_DESC', 'Open the help file for XooperStore in a new window');

//Menu
define('_MI_PMW_MENU_HOME', 'Home');
define('_MI_PMW_MENU_01', 'Admin');
define('_MI_PMW_MENU_ABOUT', 'About');

//Config
define('MI_PMW_EDITOR_ADMIN', 'Editor: Admin');
define('MI_PMW_EDITOR_ADMIN_DESC', 'Select the Editor to use by the Admin');
define('MI_PMW_EDITOR_USER', 'Editor: User');
define('MI_PMW_EDITOR_USER_DESC', 'Select the Editor to use by the User');

//Help
define('_MI_PMW_DIRNAME', basename(dirname(__DIR__, 2)));
define('_MI_PMW_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('_MI_PMW_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_PMW_OVERVIEW', 'Overview');
define('_MI_PMW_ADMIN', 'Admin Tutorial');


//define('_MI_PMW_HELP_DIR', __DIR__);

//help multi-page
define('_MI_PMW_DISCLAIMER', 'Disclaimer');
define('_MI_PMW_LICENSE', 'License');
define('_MI_PMW_SUPPORT', 'Support');

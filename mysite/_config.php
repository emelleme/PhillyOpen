<?php
include(BASE_PATH.DIRECTORY_SEPARATOR."mysite".DIRECTORY_SEPARATOR."database_information.php");

global $project;
$project = 'mysite';

global $browser;
$browser = new Browser();


MySQLDatabase::set_connection_charset('utf8');


// This line set's the current theme. More themes can be
// downloaded from http://www.silverstripe.org/themes/

if ($browser->isMobile())
{
	Director::redirect('http://twitter.com/#!/PhillyOpen');
}

// Set the site locale
i18n::set_locale('en_US');

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();
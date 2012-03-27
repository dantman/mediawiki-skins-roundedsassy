<?php
/**
 * Rounded Sassy skin
 *
 * @file
 * @ingroup Skins
 * @author Jennifer Elrod
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Rounded Sassy',
	'url' => "https://www.mediawiki.org/wiki/Skin:Rounded_Sassy",
	'author' => 'Jennifer Elrod',
	'descriptionmsg' => 'roundedsassy-desc',
);

$wgValidSkinNames['roundedsassy'] = 'RoundedSassy';
$wgAutoloadClasses['SkinRoundedSassy'] = dirname(__FILE__).'/RoundedSassy.skin.php';
$wgExtensionMessagesFiles['RoundedSassy'] = dirname(__FILE__).'/RoundedSassy.i18n.php';

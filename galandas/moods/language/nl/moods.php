<?php
/**
*
* Mood. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2017 Galandas, http://phpbb3world.altervista.org
* @copyright Used Code Genders extension, 2016 Rich McGirr (RMcGirr83)
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'MOOD'					=> 'Stemming',
	'MOOD_NONE'				=> 'Geen opgegeven',
	'EM-BIGGRIN'			=> 'Blij',
	'EM-CONFUSED'			=> 'In de war',
	'EM-COOL'				=> 'Cool',
	'EM-CRY'				=> 'Ik ween',
	'EM-EEK'				=> 'Verbaasd',
	'EM-EVIL'				=> 'Duivels',
	'EM-LOL'				=> 'LOL',
	'EM-MAD'				=> 'Kwaad',
	'EM-MRGREEN'			=> 'Brede lach',
	'EM-NEUTRAL'			=> 'Neutraal',
	'EM-RAZZ'				=> 'Lachen',
	'EM-REDFACE'			=> 'Blozen',
	'EM-ROLLEYES'			=> 'Ik begrijp het niet',
	'EM-SAD'				=> 'Droevig',
	'EM-SCREAM'				=> 'Schreeuwen',
	'EM-SMILE'				=> 'Smiley gezichtje',
	'EM-SURPRISED'			=> 'Verast',
	'EM-TWISTED'			=> 'Beetje gek',
	'EM-UGEEK'				=> 'Rocken!',
	'EM-WINK'				=> 'Knipogend',
	'TOO_LARGE_USER_MOOD'	=> 'Stemming waarde is te groot.',
	'TOO_SMALL_USER_MOOD'	=> 'Stemming waarde is te klein.',
));

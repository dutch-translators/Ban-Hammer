<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <jari@tumba25.net>
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* DO NOT CHANGE
*/
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
	'ACP_BAN_EMAIL'		=> 'Ban het e-mailadres van de gebruiker',
	'ACP_BAN_IP'		=> 'Ban het IP-adres van de gebruiker',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>Kijk uit hiermee.</strong> De meeste gebruikers thuis hebben een dynamisch IP-adres en hoeven alleen de router of het modem te resetten voor een nieuw IP-adres. De volgende dag als het IP-adres wordt toegekend aan de gebruiker komt deze weer op de site. Spammers gebruiken meestal ook anonieme proxy\'s of het Tor netwerk om het bannen van IP-adressen zinloos te maken.',
	'ACP_DEL_AVATAR'	=> 'Verwijder de avatar van de gebruiker',
	'ACP_DEL_PRIVMSGS'	=> 'Verwijder de privéberichten van de gebruiker',
	'ACP_DEL_POSTS'		=> 'Verwijder de berichten van de gebruiker',
	'ACP_DEL_PROFILE'	=> 'Verwijder de profielvelden van de gebruiker',
	'ACP_DEL_SIGNATURE'	=> 'Verwijder het onderschrift van de gebruiker',
	'ACP_GROUP_MISSING'	=> 'De groep &quot;%s&quot; bestaat niet.', // %s is the group name.
	'ACP_MOVE_GROUP'			=> 'Verplaats naar groep',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Naam van de groep waar gebande gebruikers naartoe worden verplaatst. Dit zal ook de standaard groep worden voor hen.<br /><strong>Als er alleen <em>“Geen groep gespecificeerd.”</em> in het drop-down menu staat hoef je geen groep te maken.</strong>',
	'ACP_BH_TITLE'		=> 'Ban Hammer',
	'ACP_BH_SETTINGS'	=> 'Ban Hammer Instellingen',
	'SETTINGS_ERROR'		=> 'Er is een fout opgetreden bij het opslaan van de instellingen. Dien alsjeblieft het formulier in met jouw foutrapportage.',
	'SETTINGS_SUCCESS'		=> 'De instellingen zijn succesvol opgeslagen',
	'SFS_API_KEY'			=> 'SFS API sleutel',
	'SFS_API_KEY_EXPLAIN'	=> 'Als je spammer automatisch wilt rapporteren aan StopForumSpam heb je een API sleutel nodig, <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Jouw server moet cURL hebben geïnstaleerd om de Stop Forum Spam service te gebruiken.</span>',
));

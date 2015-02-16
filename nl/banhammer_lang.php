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
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'Er zijn enkele fouten opgetreden bij het bannen van deze gebruiker',
	'BANNED_SUCCESS'	=> 'De gebruiker is succesvol geband.',
	'ERROR_BAN_EMAIL'	=> 'Bannen van e-mailadres mislukt.',
	'ERROR_BAN_IP'		=> 'Bannen van IP-adres mislukt.',
	'ERROR_BAN_USER'	=> 'Bannen van gebruiker mislukt.',
	'ERROR_DEL_POSTS'	=> 'Berichten verwijderen van de gebruiker mislukt.',
	'ERROR_MOVE_GROUP'	=> 'Gebruiker naar een andere groep verplaatsen mislukt.',
	'ERROR_SFS'			=> 'Stop Forum Spam',
	'BH_BAN_EMAIL'			=> 'Ban het e-mailadres van deze gebruiker',
	'BH_BAN_GIVE_REASON'	=> 'Reden voor de ban die wordt getoond aan de gebruiker',
	'BH_BAN_IP'				=> 'Ban het IP-adres van deze gebruiker',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>Kijk uit hiermee.</strong> De meeste gebruikers thuis hebben een dynamisch IP-adres en hoeven alleen de router of het modem te resetten voor een nieuw IP-adres. De volgende dag als het IP-adres wordt toegekend aan de gebruiker komt deze weer op de site. Spammers gebruiken meestal ook anonieme proxy's of het Tor netwerk om het bannen van IP-adressen zinloos te maken.',
	'BH_BAN_REASON'			=> 'Interne reden voor de ban',
	'BH_BAN_USER'			=> 'Ban deze gebruiker',
	'BH_BANNED'				=> 'Deze gebruiker is geband',
	'BH_DEL_AVATAR'		=> 'Verwijder de avatar van de gebruiker',
	'BH_DEL_PRIVMSGS'	=> 'Verwijder de privéberichten van de gebruiker',
	'BH_DEL_POSTS'		=> 'Verwijder de berichten van de gebruiker',
	'BH_DEL_PROFILE'	=> 'Vewijder de profielvelden van de gebruiker',
	'BH_DEL_SIGNATURE'	=> 'Verwijder het onderschrift van de gebruiker',
	'BH_MOVE_GROUP'	=> 'Verplaats de gebruiker naar groep &quot;%s&quot;', // %s will be a group name
	'BH_REASON'		=> 'Interne reden &quot;%s&quot;', // %s will be the reason
	'BH_REASON_USER'	=> 'Reden voor gebruiker &quot;%s&quot;', // %s will be the reason
	'BH_SUBMIT_SFS'	=> 'Toevoegen aan stop forum spam',
	'BH_THIS_USER'	=> 'Ban Hammer deze gebruiker',
	'SFS_REPORT'	=> 'Rapporteer deze gebruiker aan Stop Forum Spam',
	'SURE_BAN'		=> 'Weet je zeker dat je <strong>%s</strong> wilt verbannen?', // %s will be a username.
	'THIS_WILL'	=> 'Dit zal',
));

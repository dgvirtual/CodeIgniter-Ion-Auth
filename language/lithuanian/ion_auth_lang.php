<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Lithuanian (UTF-8)
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
* Translation:  Radas7
*             radas7@gmail.com
*               Donatas Glodenis
*             dgvirtual@akl.lt
*
* Created:  2012-03-04
* Updated:  2018-11-01
*
* Description:  Lithuanian language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Paskyra sėkmingai sukurta';
$lang['account_creation_unsuccessful'] 	 	 = 'Nepavyko sukurti paskyros';
$lang['account_creation_duplicate_email'] 	 = 'Toks el. pašto adresas jau yra, arba yra neteisingas';
$lang['account_creation_duplicate_identity'] 	 = 'Toks prisijungimo vardas jau yra, arba yra neteisingas';
$lang['account_creation_missing_default_group'] = 'Nenustatyta numatytoji grupė';
$lang['account_creation_invalid_default_group'] = 'Nustatytas neteisingas numatytosios grupės pavadinimas';

// Password
$lang['password_change_successful'] 	 	 = 'Slaptažodis sukurtas';
$lang['password_change_unsuccessful'] 	  	 = 'Nepavyko pakeisti slaptažodžio';
$lang['forgot_password_successful'] 	 	 = 'El. laiškas su slaptažodžio keitimo nuoroda išsiųstas';
//$lang['forgot_password_successful'] 	 	 ='Prašymas pakeisti pamirštą slaptažodį priimtas. Laukite pranešimo su nuoroda į slaptažodžio pakeitimo dialogą, kuris buvo išsiųstas Jūsų nurodytu el. pašto adresu. Jei jo negaunate ilgiau, nei kelias minutes, patikrinkite el. pašto šlamšto aplanką. Šį langą galite uždaryti.';
$lang['forgot_password_unsuccessful'] 	 	 = 'Nepavyko išsiųsti slaptažodžio keitimo nuorodos';

// Activation
$lang['activate_successful'] 		  	 = 'Paskyra aktyvuota';
$lang['activate_unsuccessful'] 		 	 = 'Nepavyko aktyvuoti paskyros';
$lang['deactivate_successful'] 		  	 = 'Paskyra išjungta';
$lang['deactivate_unsuccessful'] 	  	 = 'Nepavyko išjungti paskyros';
$lang['activation_email_successful'] 	  	 = 'Išsiųstas el. laiškas dėl paskyros aktyvavimo. Pasitikrinkite pašto dėžutę (jei joje laiško nerasite, patikrinkite el. pašto šlamšto aplanką)';
$lang['activation_email_unsuccessful']   	 = 'Nepavyko išsiųsti aktyvavimo laiško';
$lang['deactivate_current_user_unsuccessful']= 'Negalima išjungti savo paskyros.';

// Login / Logout
$lang['login_successful'] 		  	 = 'Prisijungta sėkmingai';
$lang['login_unsuccessful'] 		  	 = 'Prisijungimo duomenys neteisingi';
$lang['login_unsuccessful_not_active'] 		 = 'Paskyra yra neaktyvi';
$lang['login_timeout']				 = 'Laikinai užrakinta. Pabandykite iš naujo vėliau.';
$lang['logout_successful'] 		 	 = 'Atsijungta sėkmingai';

// Account Changes
$lang['update_successful'] 		 	 = 'Paskyros duomenys sėkmingai pakeisti';
$lang['update_unsuccessful'] 		 	 = 'Neįmanoma pakeisti paskyros duomenų';
$lang['delete_successful'] 		 	 = 'Paskyra pašalinta';
$lang['delete_unsuccessful'] 		 	 = 'Neįmanoma pašalinti paskyros';

// Groups
$lang['group_creation_successful']  = 'Grupė sėkmingai sukurta';
$lang['group_already_exists']       = 'Grupės vardas jau naudojamas';
$lang['group_update_successful']    = 'Grupės detalės atnaujintos';
$lang['group_delete_successful']    = 'Grupė ištrinta';
$lang['group_delete_unsuccessful'] 	= 'Nepavyksta ištrinti grupės';
$lang['group_delete_notallowed']    = 'Administratorių grupės ištrinti negalima';
$lang['group_name_required'] 		= 'Grupės vardą užpildyti būtina';
$lang['group_name_admin_not_alter'] = 'Admin grupės pavadinimas negali būti pakeistas';

// Activation Email
$lang['email_activation_subject']  = 'Paskyros aktyvavimas';
$lang['email_activate_heading']    = 'Aktyvuoti %s paskyrą';
$lang['email_activate_subheading'] = 'Prašome spragtelėti %s nuorodą.';
$lang['email_activate_link']       = 'Aktyvuokite savo paskyrą';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Patvirtinimas pamiršto slaptažodžio keitimui';
$lang['email_forgot_password_heading']    = 'Iš naujo generuoti %s slaptažodį';
$lang['email_forgot_password_subheading'] = 'Prašome paspausti nuorodą norėdami %s.';
$lang['email_forgot_password_link']       = 'Iš naujo nustatykite slaptažodį';

// New Password Email
$lang['email_new_password_subject']          = 'Naujas slaptažodis';
$lang['email_new_password_heading']    = 'Naujas %s slaptažodis';
$lang['email_new_password_subheading'] = 'Jums buvo generuotas naujas slaptažodis: %s';

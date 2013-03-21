<?php
/**
 * Locale data
 * 
 * @author GameConnect
 * @copyright (C)2007-2013 GameConnect.net.  All rights reserved.
 * @link http://www.sourcebans.net
 * 
 * @package sourcebans.components
 * @since 2.0
 */
class LocaleData extends CApplicationComponent
{
	public static function getCountries()
	{
		return array(
	    'ac' => 'Ascension Island',
	    'ad' => 'Andorra',
	    'ae' => 'United Arab Emirates',
	    'af' => 'Afghanistan',
	    'ag' => 'Antigua and Barbuda',
	    'ai' => 'Anguilla',
	    'al' => 'Albania',
	    'am' => 'Armenia',
	    'an' => 'Netherlands Antilles',
	    'ao' => 'Angola',
	    'aq' => 'Antarctica',
	    'ar' => 'Argentina',
	    'as' => 'American Samoa',
	    'at' => 'Austria',
	    'au' => 'Australia',
	    'aw' => 'Aruba',
	    'ax' => 'Åland Islands',
	    'az' => 'Azerbaijan',
	    'ba' => 'Bosnia and Herzegovina',
	    'bb' => 'Barbados',
	    'bd' => 'Bangladesh',
	    'be' => 'Belgium',
	    'bf' => 'Burkina Faso',
	    'bg' => 'Bulgaria',
	    'bh' => 'Bahrain',
	    'bi' => 'Burundi',
	    'bj' => 'Benin',
	    'bl' => 'Saint Barthélemy',
	    'bm' => 'Bermuda',
	    'bn' => 'Brunei',
	    'bo' => 'Bolivia',
	    'bq' => 'Bonaire, Saint Eustatius, and Saba',
	    'br' => 'Brazil',
	    'bs' => 'Bahamas',
	    'bt' => 'Bhutan',
	    'bv' => 'Bouvet Island',
	    'bw' => 'Botswana',
	    'by' => 'Belarus',
	    'bz' => 'Belize',
	    'ca' => 'Canada',
	    'cc' => 'Cocos [Keeling] Islands',
	    'cd' => 'Congo [DRC]',
	    'cf' => 'Central African Republic',
	    'cg' => 'Congo [Republic]',
	    'ch' => 'Switzerland',
	    'ci' => 'Ivory Coast',
	    'ck' => 'Cook Islands',
	    'cl' => 'Chile',
	    'cm' => 'Cameroon',
	    'cn' => 'China',
	    'co' => 'Colombia',
	    'cp' => 'Clipperton Island',
	    'cr' => 'Costa Rica',
	    'cs' => 'Serbia and Montenegro',
	    'ct' => 'Canton and Enderbury Islands',
	    'cu' => 'Cuba',
	    'cv' => 'Cape Verde',
	    'cw' => 'Curaçao',
	    'cx' => 'Christmas Island',
	    'cy' => 'Cyprus',
	    'cz' => 'Czech Republic',
	    'dd' => 'East Germany',
	    'de' => 'Germany',
	    'dg' => 'Diego Garcia',
	    'dj' => 'Djibouti',
	    'dk' => 'Denmark',
	    'dm' => 'Dominica',
	    'do' => 'Dominican Republic',
	    'dz' => 'Algeria',
	    'ea' => 'Ceuta and Melilla',
	    'ec' => 'Ecuador',
	    'ee' => 'Estonia',
	    'eg' => 'Egypt',
	    'eh' => 'Western Sahara',
	    'er' => 'Eritrea',
	    'es' => 'Spain',
	    'et' => 'Ethiopia',
	    'eu' => 'European Union',
	    'fi' => 'Finland',
	    'fj' => 'Fiji',
	    'fk' => 'Falkland Islands [Islas Malvinas]',
	    'fm' => 'Micronesia',
	    'fo' => 'Faroe Islands',
	    'fq' => 'French Southern and Antarctic Territories',
	    'fr' => 'France',
	    'fx' => 'Metropolitan France',
	    'ga' => 'Gabon',
	    'gb' => 'United Kingdom',
	    'gd' => 'Grenada',
	    'ge' => 'Georgia',
	    'gf' => 'French Guiana',
	    'gg' => 'Guernsey',
	    'gh' => 'Ghana',
	    'gi' => 'Gibraltar',
	    'gl' => 'Greenland',
	    'gm' => 'Gambia',
	    'gn' => 'Guinea',
	    'gp' => 'Guadeloupe',
	    'gq' => 'Equatorial Guinea',
	    'gr' => 'Greece',
	    'gs' => 'South Georgia and the South Sandwich Islands',
	    'gt' => 'Guatemala',
	    'gu' => 'Guam',
	    'gw' => 'Guinea-Bissau',
	    'gy' => 'Guyana',
	    'hk' => 'Hong Kong',
	    'hm' => 'Heard Island and McDonald Islands',
	    'hn' => 'Honduras',
	    'hr' => 'Croatia',
	    'ht' => 'Haiti',
	    'hu' => 'Hungary',
	    'ic' => 'Canary Islands',
	    'id' => 'Indonesia',
	    'ie' => 'Ireland',
	    'il' => 'Israel',
	    'im' => 'Isle of Man',
	    'in' => 'India',
	    'io' => 'British Indian Ocean Territory',
	    'iq' => 'Iraq',
	    'ir' => 'Iran',
	    'is' => 'Iceland',
	    'it' => 'Italy',
	    'je' => 'Jersey',
	    'jm' => 'Jamaica',
	    'jo' => 'Jordan',
	    'jp' => 'Japan',
	    'jt' => 'Johnston Island',
	    'ke' => 'Kenya',
	    'kg' => 'Kyrgyzstan',
	    'kh' => 'Cambodia',
	    'ki' => 'Kiribati',
	    'km' => 'Comoros',
	    'kn' => 'Saint Kitts and Nevis',
	    'kp' => 'North Korea',
	    'kr' => 'South Korea',
	    'kw' => 'Kuwait',
	    'ky' => 'Cayman Islands',
	    'kz' => 'Kazakhstan',
	    'la' => 'Laos',
	    'lb' => 'Lebanon',
	    'lc' => 'Saint Lucia',
	    'li' => 'Liechtenstein',
	    'lk' => 'Sri Lanka',
	    'lr' => 'Liberia',
	    'ls' => 'Lesotho',
	    'lt' => 'Lithuania',
	    'lu' => 'Luxembourg',
	    'lv' => 'Latvia',
	    'ly' => 'Libya',
	    'ma' => 'Morocco',
	    'mc' => 'Monaco',
	    'md' => 'Moldova',
	    'me' => 'Montenegro',
	    'mf' => 'Saint Martin',
	    'mg' => 'Madagascar',
	    'mh' => 'Marshall Islands',
	    'mi' => 'Midway Islands',
	    'mk' => 'Macedonia [FYROM]',
	    'ml' => 'Mali',
	    'mm' => 'Myanmar [Burma]',
	    'mn' => 'Mongolia',
	    'mo' => 'Macau',
	    'mp' => 'Northern Mariana Islands',
	    'mq' => 'Martinique',
	    'mr' => 'Mauritania',
	    'ms' => 'Montserrat',
	    'mt' => 'Malta',
	    'mu' => 'Mauritius',
	    'mv' => 'Maldives',
	    'mw' => 'Malawi',
	    'mx' => 'Mexico',
	    'my' => 'Malaysia',
	    'mz' => 'Mozambique',
	    'na' => 'Namibia',
	    'nc' => 'New Caledonia',
	    'ne' => 'Niger',
	    'nf' => 'Norfolk Island',
	    'ng' => 'Nigeria',
	    'ni' => 'Nicaragua',
	    'nl' => 'Netherlands',
	    'no' => 'Norway',
	    'np' => 'Nepal',
	    'nq' => 'Dronning Maud Land',
	    'nr' => 'Nauru',
	    'nt' => 'Neutral Zone',
	    'nu' => 'Niue',
	    'nz' => 'New Zealand',
	    'om' => 'Oman',
	    'pa' => 'Panama',
	    'pc' => 'Pacific Islands Trust Territory',
	    'pe' => 'Peru',
	    'pf' => 'French Polynesia',
	    'pg' => 'Papua New Guinea',
	    'ph' => 'Philippines',
	    'pk' => 'Pakistan',
	    'pl' => 'Poland',
	    'pm' => 'Saint Pierre and Miquelon',
	    'pn' => 'Pitcairn Islands',
	    'pr' => 'Puerto Rico',
	    'ps' => 'Palestinian Territories',
	    'pt' => 'Portugal',
	    'pu' => 'U.S. Miscellaneous Pacific Islands',
	    'pw' => 'Palau',
	    'py' => 'Paraguay',
	    'pz' => 'Panama Canal Zone',
	    'qa' => 'Qatar',
	    'qo' => 'Outlying Oceania',
	    're' => 'Réunion',
	    'ro' => 'Romania',
	    'rs' => 'Serbia',
	    'ru' => 'Russia',
	    'rw' => 'Rwanda',
	    'sa' => 'Saudi Arabia',
	    'sb' => 'Solomon Islands',
	    'sc' => 'Seychelles',
	    'sd' => 'Sudan',
	    'se' => 'Sweden',
	    'sg' => 'Singapore',
	    'sh' => 'Saint Helena',
	    'si' => 'Slovenia',
	    'sj' => 'Svalbard and Jan Mayen',
	    'sk' => 'Slovakia',
	    'sl' => 'Sierra Leone',
	    'sm' => 'San Marino',
	    'sn' => 'Senegal',
	    'so' => 'Somalia',
	    'sr' => 'Suriname',
	    'st' => 'São Tomé and Príncipe',
	    'su' => 'Union of Soviet Socialist Republics',
	    'sv' => 'El Salvador',
	    'sx' => 'Sint Maarten',
	    'sy' => 'Syria',
	    'sz' => 'Swaziland',
	    'ta' => 'Tristan da Cunha',
	    'tc' => 'Turks and Caicos Islands',
	    'td' => 'Chad',
	    'tf' => 'French Southern Territories',
	    'tg' => 'Togo',
	    'th' => 'Thailand',
	    'tj' => 'Tajikistan',
	    'tk' => 'Tokelau',
	    'tl' => 'East Timor',
	    'tm' => 'Turkmenistan',
	    'tn' => 'Tunisia',
	    'to' => 'Tonga',
	    'tr' => 'Turkey',
	    'tt' => 'Trinidad and Tobago',
	    'tv' => 'Tuvalu',
	    'tw' => 'Taiwan',
	    'tz' => 'Tanzania',
	    'ua' => 'Ukraine',
	    'ug' => 'Uganda',
	    'um' => 'U.S. Minor Outlying Islands',
	    'us' => 'United States',
	    'uy' => 'Uruguay',
	    'uz' => 'Uzbekistan',
	    'va' => 'Vatican City',
	    'vc' => 'Saint Vincent and the Grenadines',
	    'vd' => 'North Vietnam',
	    've' => 'Venezuela',
	    'vg' => 'British Virgin Islands',
	    'vi' => 'U.S. Virgin Islands',
	    'vn' => 'Vietnam',
	    'vu' => 'Vanuatu',
	    'wf' => 'Wallis and Futuna',
	    'wk' => 'Wake Island',
	    'ws' => 'Samoa',
	    'yd' => 'People’s Democratic Republic of Yemen',
	    'ye' => 'Yemen',
	    'yt' => 'Mayotte',
	    'za' => 'South Africa',
	    'zm' => 'Zambia',
	    'zw' => 'Zimbabwe',
		);
	}
	
	
	public static function getCountry($id)
	{
		$countries = self::getCountries();
		
		return $countries[$id];
	}
	
	
	public static function getLanguage($id)
	{
		$languages = self::getLanguages();
		
		return $languages[$id];
	}
	
	
	public static function getLanguages()
	{
		return array(
	    'aa' => 'Afar',
	    'ab' => 'Abkhazian',
	    'ace' => 'Achinese',
	    'ach' => 'Acoli',
	    'ada' => 'Adangme',
	    'ady' => 'Adyghe',
	    'ae' => 'Avestan',
	    'af' => 'Afrikaans',
	    'afa' => 'Afro-Asiatic Language',
	    'afh' => 'Afrihili',
	    'agq' => 'Aghem',
	    'ain' => 'Ainu',
	    'ak' => 'Akan',
	    'akk' => 'Akkadian',
	    'ale' => 'Aleut',
	    'alg' => 'Algonquian Language',
	    'alt' => 'Southern Altai',
	    'am' => 'Amharic',
	    'an' => 'Aragonese',
	    'ang' => 'Old English',
	    'anp' => 'Angika',
	    'apa' => 'Apache Language',
	    'ar' => 'Arabic',
	    'arc' => 'Aramaic',
	    'arn' => 'Araucanian',
	    'arp' => 'Arapaho',
	    'art' => 'Artificial Language',
	    'arw' => 'Arawak',
	    'as' => 'Assamese',
	    'asa' => 'Asu',
	    'ast' => 'Asturian',
	    'ath' => 'Athapascan Language',
	    'aus' => 'Australian Language',
	    'av' => 'Avaric',
	    'awa' => 'Awadhi',
	    'ay' => 'Aymara',
	    'az' => 'Azeri',
	    'ba' => 'Bashkir',
	    'bad' => 'Banda',
	    'bai' => 'Bamileke Language',
	    'bal' => 'Baluchi',
	    'ban' => 'Balinese',
	    'bas' => 'Basaa',
	    'bat' => 'Baltic Language',
	    'be' => 'Belarusian',
	    'bej' => 'Beja',
	    'bem' => 'Bemba',
	    'ber' => 'Berber',
	    'bez' => 'Bena',
	    'bg' => 'Bulgarian',
	    'bh' => 'Bihari',
	    'bho' => 'Bhojpuri',
	    'bi' => 'Bislama',
	    'bik' => 'Bikol',
	    'bin' => 'Bini',
	    'bla' => 'Siksika',
	    'bm' => 'Bambara',
	    'bn' => 'Bengali',
	    'bnt' => 'Bantu',
	    'bo' => 'Tibetan',
	    'br' => 'Breton',
	    'bra' => 'Braj',
	    'brx' => 'Bodo',
	    'bs' => 'Bosnian',
	    'btk' => 'Batak',
	    'bua' => 'Buriat',
	    'bug' => 'Buginese',
	    'byn' => 'Blin',
	    'ca' => 'Catalan',
	    'cad' => 'Caddo',
	    'cai' => 'Central American Indian Language',
	    'car' => 'Carib',
	    'cau' => 'Caucasian Language',
	    'cay' => 'Cayuga',
	    'cch' => 'Atsam',
	    'ce' => 'Chechen',
	    'ceb' => 'Cebuano',
	    'cel' => 'Celtic Language',
	    'cgg' => 'Chiga',
	    'ch' => 'Chamorro',
	    'chb' => 'Chibcha',
	    'chg' => 'Chagatai',
	    'chk' => 'Chuukese',
	    'chm' => 'Mari',
	    'chn' => 'Chinook Jargon',
	    'cho' => 'Choctaw',
	    'chp' => 'Chipewyan',
	    'chr' => 'Cherokee',
	    'chy' => 'Cheyenne',
	    'cmc' => 'Chamic Language',
	    'co' => 'Corsican',
	    'cop' => 'Coptic',
	    'cpe' => 'English-based Creole or Pidgin',
	    'cpf' => 'French-based Creole or Pidgin',
	    'cpp' => 'Portuguese-based Creole or Pidgin',
	    'cr' => 'Cree',
	    'crh' => 'Crimean Turkish',
	    'crp' => 'Creole or Pidgin',
	    'cs' => 'Czech',
	    'csb' => 'Kashubian',
	    'cu' => 'Church Slavic',
	    'cus' => 'Cushitic Language',
	    'cv' => 'Chuvash',
	    'cy' => 'Welsh',
	    'da' => 'Danish',
	    'dak' => 'Dakota',
	    'dar' => 'Dargwa',
	    'dav' => 'Taita',
	    'day' => 'Dayak',
	    'de' => 'German',
	    'de_at' => 'Austrian German',
	    'de_ch' => 'Swiss High German',
	    'del' => 'Delaware',
	    'den' => 'Slave',
	    'dgr' => 'Dogrib',
	    'din' => 'Dinka',
	    'dje' => 'Zarma',
	    'doi' => 'Dogri',
	    'dra' => 'Dravidian Language',
	    'dsb' => 'Lower Sorbian',
	    'dua' => 'Duala',
	    'dum' => 'Middle Dutch',
	    'dv' => 'Divehi',
	    'dyo' => 'Jola-Fonyi',
	    'dyu' => 'Dyula',
	    'dz' => 'Dzongkha',
	    'ebu' => 'Embu',
	    'ee' => 'Ewe',
	    'efi' => 'Efik',
	    'egy' => 'Ancient Egyptian',
	    'eka' => 'Ekajuk',
	    'el' => 'Greek',
	    'elx' => 'Elamite',
	    'en' => 'English',
	    'en_au' => 'Australian English',
	    'en_ca' => 'Canadian English',
	    'en_gb' => 'British English',
	    'en_us' => 'U.S. English',
	    'enm' => 'Middle English',
	    'eo' => 'Esperanto',
	    'es' => 'Spanish',
	    'es_419' => 'Latin American Spanish',
	    'es_es' => 'Iberian Spanish',
	    'et' => 'Estonian',
	    'eu' => 'Basque',
	    'ewo' => 'Ewondo',
	    'fa' => 'Persian',
	    'fan' => 'Fang',
	    'fat' => 'Fanti',
	    'ff' => 'Fulah',
	    'fi' => 'Finnish',
	    'fil' => 'Filipino',
	    'fiu' => 'Finno-Ugrian Language',
	    'fj' => 'Fijian',
	    'fo' => 'Faroese',
	    'fon' => 'Fon',
	    'fr' => 'French',
	    'fr_ca' => 'Canadian French',
	    'fr_ch' => 'Swiss French',
	    'frm' => 'Middle French',
	    'fro' => 'Old French',
	    'frr' => 'Northern Frisian',
	    'frs' => 'Eastern Frisian',
	    'fur' => 'Friulian',
	    'fy' => 'Western Frisian',
	    'ga' => 'Irish',
	    'gaa' => 'Ga',
	    'gay' => 'Gayo',
	    'gba' => 'Gbaya',
	    'gd' => 'Scottish Gaelic',
	    'gem' => 'Germanic Language',
	    'gez' => 'Geez',
	    'gil' => 'Gilbertese',
	    'gl' => 'Galician',
	    'gmh' => 'Middle High German',
	    'gn' => 'Guarani',
	    'goh' => 'Old High German',
	    'gon' => 'Gondi',
	    'gor' => 'Gorontalo',
	    'got' => 'Gothic',
	    'grb' => 'Grebo',
	    'grc' => 'Ancient Greek',
	    'gsw' => 'Swiss German',
	    'gu' => 'Gujarati',
	    'guz' => 'Gusii',
	    'gv' => 'Manx',
	    'gwi' => 'Gwichʼin',
	    'ha' => 'Hausa',
	    'hai' => 'Haida',
	    'haw' => 'Hawaiian',
	    'he' => 'Hebrew',
	    'hi' => 'Hindi',
	    'hil' => 'Hiligaynon',
	    'him' => 'Himachali',
	    'hit' => 'Hittite',
	    'hmn' => 'Hmong',
	    'ho' => 'Hiri Motu',
	    'hr' => 'Croatian',
	    'hsb' => 'Upper Sorbian',
	    'ht' => 'Haitian',
	    'hu' => 'Hungarian',
	    'hup' => 'Hupa',
	    'hy' => 'Armenian',
	    'hz' => 'Herero',
	    'ia' => 'Interlingua',
	    'iba' => 'Iban',
	    'id' => 'Indonesian',
	    'ie' => 'Interlingue',
	    'ig' => 'Igbo',
	    'ii' => 'Sichuan Yi',
	    'ijo' => 'Ijo',
	    'ik' => 'Inupiaq',
	    'ilo' => 'Iloko',
	    'inc' => 'Indic Language',
	    'ine' => 'Indo-European Language',
	    'inh' => 'Ingush',
	    'io' => 'Ido',
	    'ira' => 'Iranian Language',
	    'iro' => 'Iroquoian Language',
	    'is' => 'Icelandic',
	    'it' => 'Italian',
	    'iu' => 'Inuktitut',
	    'ja' => 'Japanese',
	    'jbo' => 'Lojban',
	    'jmc' => 'Machame',
	    'jpr' => 'Judeo-Persian',
	    'jrb' => 'Judeo-Arabic',
	    'jv' => 'Javanese',
	    'ka' => 'Georgian',
	    'kaa' => 'Kara-Kalpak',
	    'kab' => 'Kabyle',
	    'kac' => 'Kachin',
	    'kaj' => 'Jju',
	    'kam' => 'Kamba',
	    'kar' => 'Karen',
	    'kaw' => 'Kawi',
	    'kbd' => 'Kabardian',
	    'kcg' => 'Tyap',
	    'kde' => 'Makonde',
	    'kea' => 'Kabuverdianu',
	    'kfo' => 'Koro',
	    'kg' => 'Kongo',
	    'kha' => 'Khasi',
	    'khi' => 'Khoisan Language',
	    'kho' => 'Khotanese',
	    'khq' => 'Koyra Chiini',
	    'ki' => 'Kikuyu',
	    'kj' => 'Kuanyama',
	    'kk' => 'Kazakh',
	    'kl' => 'Kalaallisut',
	    'kln' => 'Kalenjin',
	    'km' => 'Khmer',
	    'kmb' => 'Kimbundu',
	    'kn' => 'Kannada',
	    'ko' => 'Korean',
	    'kok' => 'Konkani',
	    'kos' => 'Kosraean',
	    'kpe' => 'Kpelle',
	    'kr' => 'Kanuri',
	    'krc' => 'Karachay-Balkar',
	    'krl' => 'Karelian',
	    'kro' => 'Kru',
	    'kru' => 'Kurukh',
	    'ks' => 'Kashmiri',
	    'ksb' => 'Shambala',
	    'ksf' => 'Bafia',
	    'ksh' => 'Colognian',
	    'ku' => 'Kurdish',
	    'kum' => 'Kumyk',
	    'kut' => 'Kutenai',
	    'kv' => 'Komi',
	    'kw' => 'Cornish',
	    'ky' => 'Kirghiz',
	    'la' => 'Latin',
	    'lad' => 'Ladino',
	    'lag' => 'Langi',
	    'lah' => 'Lahnda',
	    'lam' => 'Lamba',
	    'lb' => 'Luxembourgish',
	    'lez' => 'Lezghian',
	    'lg' => 'Ganda',
	    'li' => 'Limburgish',
	    'ln' => 'Lingala',
	    'lo' => 'Lao',
	    'lol' => 'Mongo',
	    'loz' => 'Lozi',
	    'lt' => 'Lithuanian',
	    'lu' => 'Luba-Katanga',
	    'lua' => 'Luba-Lulua',
	    'lui' => 'Luiseno',
	    'lun' => 'Lunda',
	    'luo' => 'Luo',
	    'lus' => 'Lushai',
	    'luy' => 'Luyia',
	    'lv' => 'Latvian',
	    'mad' => 'Madurese',
	    'mag' => 'Magahi',
	    'mai' => 'Maithili',
	    'mak' => 'Makasar',
	    'man' => 'Mandingo',
	    'map' => 'Austronesian Language',
	    'mas' => 'Masai',
	    'mdf' => 'Moksha',
	    'mdr' => 'Mandar',
	    'men' => 'Mende',
	    'mer' => 'Meru',
	    'mfe' => 'Morisyen',
	    'mg' => 'Malagasy',
	    'mga' => 'Middle Irish',
	    'mgh' => 'Makhuwa-Meetto',
	    'mh' => 'Marshallese',
	    'mi' => 'Maori',
	    'mic' => 'Micmac',
	    'min' => 'Minangkabau',
	    'mis' => 'Miscellaneous Language',
	    'mk' => 'Macedonian',
	    'mkh' => 'Mon-Khmer Language',
	    'ml' => 'Malayalam',
	    'mn' => 'Mongolian',
	    'mnc' => 'Manchu',
	    'mni' => 'Manipuri',
	    'mno' => 'Manobo Language',
	    'mo' => 'Moldavian',
	    'moh' => 'Mohawk',
	    'mos' => 'Mossi',
	    'mr' => 'Marathi',
	    'ms' => 'Malay',
	    'mt' => 'Maltese',
	    'mua' => 'Mundang',
	    'mul' => 'Multiple Languages',
	    'mun' => 'Munda Language',
	    'mus' => 'Creek',
	    'mwl' => 'Mirandese',
	    'mwr' => 'Marwari',
	    'my' => 'Burmese',
	    'myn' => 'Mayan Language',
	    'myv' => 'Erzya',
	    'na' => 'Nauru',
	    'nah' => 'Nahuatl',
	    'nai' => 'North American Indian Language',
	    'nap' => 'Neapolitan',
	    'naq' => 'Nama',
	    'nb' => 'Norwegian Bokmål',
	    'nd' => 'North Ndebele',
	    'nds' => 'Low German',
	    'ne' => 'Nepali',
	    'new' => 'Newari',
	    'ng' => 'Ndonga',
	    'nia' => 'Nias',
	    'nic' => 'Niger-Kordofanian Language',
	    'niu' => 'Niuean',
	    'nl' => 'Dutch',
	    'nl_be' => 'Flemish',
	    'nmg' => 'Kwasio',
	    'nn' => 'Norwegian Nynorsk',
	    'no' => 'Norwegian',
	    'nog' => 'Nogai',
	    'non' => 'Old Norse',
	    'nqo' => 'N’Ko',
	    'nr' => 'South Ndebele',
	    'nso' => 'Northern Sotho',
	    'nub' => 'Nubian Language',
	    'nus' => 'Nuer',
	    'nv' => 'Navajo',
	    'nwc' => 'Classical Newari',
	    'ny' => 'Nyanja',
	    'nym' => 'Nyamwezi',
	    'nyn' => 'Nyankole',
	    'nyo' => 'Nyoro',
	    'nzi' => 'Nzima',
	    'oc' => 'Occitan',
	    'oj' => 'Ojibwa',
	    'om' => 'Oromo',
	    'or' => 'Oriya',
	    'os' => 'Ossetic',
	    'osa' => 'Osage',
	    'ota' => 'Ottoman Turkish',
	    'oto' => 'Otomian Language',
	    'pa' => 'Punjabi',
	    'paa' => 'Papuan Language',
	    'pag' => 'Pangasinan',
	    'pal' => 'Pahlavi',
	    'pam' => 'Pampanga',
	    'pap' => 'Papiamento',
	    'pau' => 'Palauan',
	    'peo' => 'Old Persian',
	    'phi' => 'Philippine Language',
	    'phn' => 'Phoenician',
	    'pi' => 'Pali',
	    'pl' => 'Polish',
	    'pon' => 'Pohnpeian',
	    'pra' => 'Prakrit Language',
	    'pro' => 'Old Provençal',
	    'ps' => 'Pushto',
	    'pt' => 'Portuguese',
	    'pt_br' => 'Brazilian Portuguese',
	    'pt_pt' => 'Iberian Portuguese',
	    'qu' => 'Quechua',
	    'raj' => 'Rajasthani',
	    'rap' => 'Rapanui',
	    'rar' => 'Rarotongan',
	    'rm' => 'Romansh',
	    'rn' => 'Rundi',
	    'ro' => 'Romanian',
	    'roa' => 'Romance Language',
	    'rof' => 'Rombo',
	    'rom' => 'Romany',
	    'root' => 'Root',
	    'ru' => 'Russian',
	    'rup' => 'Aromanian',
	    'rw' => 'Kinyarwanda',
	    'rwk' => 'Rwa',
	    'sa' => 'Sanskrit',
	    'sad' => 'Sandawe',
	    'sah' => 'Sakha',
	    'sai' => 'South American Indian Language',
	    'sal' => 'Salishan Language',
	    'sam' => 'Samaritan Aramaic',
	    'saq' => 'Samburu',
	    'sas' => 'Sasak',
	    'sat' => 'Santali',
	    'sbp' => 'Sangu',
	    'sc' => 'Sardinian',
	    'scn' => 'Sicilian',
	    'sco' => 'Scots',
	    'sd' => 'Sindhi',
	    'se' => 'Northern Sami',
	    'see' => 'Seneca',
	    'seh' => 'Sena',
	    'sel' => 'Selkup',
	    'sem' => 'Semitic Language',
	    'ses' => 'Koyraboro Senni',
	    'sg' => 'Sango',
	    'sga' => 'Old Irish',
	    'sgn' => 'Sign Language',
	    'sh' => 'Serbo-Croatian',
	    'shi' => 'Tachelhit',
	    'shn' => 'Shan',
	    'si' => 'Sinhala',
	    'sid' => 'Sidamo',
	    'sio' => 'Siouan Language',
	    'sit' => 'Sino-Tibetan Language',
	    'sk' => 'Slovak',
	    'sl' => 'Slovenian',
	    'sla' => 'Slavic Language',
	    'sm' => 'Samoan',
	    'sma' => 'Southern Sami',
	    'smi' => 'Sami Language',
	    'smj' => 'Lule Sami',
	    'smn' => 'Inari Sami',
	    'sms' => 'Skolt Sami',
	    'sn' => 'Shona',
	    'snk' => 'Soninke',
	    'so' => 'Somali',
	    'sog' => 'Sogdien',
	    'son' => 'Songhai',
	    'sq' => 'Albanian',
	    'sr' => 'Serbian',
	    'srn' => 'Sranan Tongo',
	    'srr' => 'Serer',
	    'ss' => 'Swati',
	    'ssa' => 'Nilo-Saharan Language',
	    'ssy' => 'Saho',
	    'st' => 'Southern Sotho',
	    'su' => 'Sundanese',
	    'suk' => 'Sukuma',
	    'sus' => 'Susu',
	    'sux' => 'Sumerian',
	    'sv' => 'Swedish',
	    'sw' => 'Swahili',
	    'swb' => 'Comorian',
	    'swc' => 'Congo Swahili',
	    'syc' => 'Classical Syriac',
	    'syr' => 'Syriac',
	    'ta' => 'Tamil',
	    'tai' => 'Tai Language',
	    'te' => 'Telugu',
	    'tem' => 'Timne',
	    'teo' => 'Teso',
	    'ter' => 'Tereno',
	    'tet' => 'Tetum',
	    'tg' => 'Tajik',
	    'th' => 'Thai',
	    'ti' => 'Tigrinya',
	    'tig' => 'Tigre',
	    'tiv' => 'Tiv',
	    'tk' => 'Turkmen',
	    'tkl' => 'Tokelau',
	    'tl' => 'Tagalog',
	    'tlh' => 'Klingon',
	    'tli' => 'Tlingit',
	    'tmh' => 'Tamashek',
	    'tn' => 'Tswana',
	    'to' => 'Tongan',
	    'tog' => 'Nyasa Tonga',
	    'tpi' => 'Tok Pisin',
	    'tr' => 'Turkish',
	    'trv' => 'Taroko',
	    'ts' => 'Tsonga',
	    'tsi' => 'Tsimshian',
	    'tt' => 'Tatar',
	    'tum' => 'Tumbuka',
	    'tup' => 'Tupi Language',
	    'tut' => 'Altaic Language',
	    'tvl' => 'Tuvalu',
	    'tw' => 'Twi',
	    'twq' => 'Tasawaq',
	    'ty' => 'Tahitian',
	    'tyv' => 'Tuvinian',
	    'tzm' => 'Central Morocco Tamazight',
	    'udm' => 'Udmurt',
	    'ug' => 'Uyghur',
	    'uga' => 'Ugaritic',
	    'uk' => 'Ukrainian',
	    'umb' => 'Umbundu',
	    'ur' => 'Urdu',
	    'uz' => 'Uzbek',
	    'vai' => 'Vai',
	    've' => 'Venda',
	    'vi' => 'Vietnamese',
	    'vo' => 'Volapük',
	    'vot' => 'Votic',
	    'vun' => 'Vunjo',
	    'wa' => 'Walloon',
	    'wae' => 'Walser',
	    'wak' => 'Wakashan Language',
	    'wal' => 'Walamo',
	    'war' => 'Waray',
	    'was' => 'Washo',
	    'wen' => 'Sorbian Language',
	    'wo' => 'Wolof',
	    'xal' => 'Kalmyk',
	    'xh' => 'Xhosa',
	    'xog' => 'Soga',
	    'yao' => 'Yao',
	    'yap' => 'Yapese',
	    'yav' => 'Yangben',
	    'yi' => 'Yiddish',
	    'yo' => 'Yoruba',
	    'ypk' => 'Yupik Language',
	    'yue' => 'Cantonese',
	    'za' => 'Zhuang',
	    'zap' => 'Zapotec',
	    'zbl' => 'Blissymbols',
	    'zen' => 'Zenaga',
	    'zh' => 'Chinese',
	    'zh_hans' => 'Simplified Chinese',
	    'zh_hant' => 'Traditional Chinese',
	    'znd' => 'Zande',
	    'zu' => 'Zulu',
	    'zun' => 'Zuni',
	    'zza' => 'Zaza',
		);
	}
	
	
	public static function getTimezone($id)
	{
		$timezones = self::getTimezones();
		
		return $timezones[$id];
	}
	
	
	public static function getTimezones()
	{
		return array(
			'Pacific/Midway' => '(GMT-11:00) Midway Island, Samoa',
			'America/Adak' => '(GMT-10:00) Hawaii-Aleutian',
			'Pacific/Honolulu' => '(GMT-10:00) Hawaii',
			'Pacific/Marquesas' => '(GMT-09:30) Marquesas Islands',
			'Pacific/Gambier' => '(GMT-09:00) Gambier Islands',
			'America/Anchorage' => '(GMT-09:00) Alaska',
			'America/Tijuana' => '(GMT-08:00) Tijuana, Baja California',
			'Pacific/Pitcairn' => '(GMT-08:00) Pitcairn Islands',
			'America/Los_Angeles' => '(GMT-08:00) Pacific Time (US & Canada)',
			'America/Denver' => '(GMT-07:00) Mountain Time (US & Canada)',
			'America/Chihuahua' => '(GMT-07:00) Chihuahua, La Paz, Mazatlan',
			'America/Dawson_Creek' => '(GMT-07:00) Arizona',
			'America/Belize' => '(GMT-06:00) Saskatchewan, Central America',
			'America/Cancun' => '(GMT-06:00) Guadalajara, Mexico City, Monterrey',
			'Pacific/Easter' => '(GMT-06:00) Easter Island',
			'America/Chicago' => '(GMT-06:00) Central Time (US & Canada)',
			'America/New_York' => '(GMT-05:00) Eastern Time (US & Canada)',
			'America/Havana' => '(GMT-05:00) Cuba',
			'America/Bogota' => '(GMT-05:00) Bogota, Lima, Quito, Rio Branco',
			'America/Caracas' => '(GMT-04:30) Caracas',
			'America/Santiago' => '(GMT-04:00) Santiago',
			'America/La_Paz' => '(GMT-04:00) La Paz',
			'Atlantic/Stanley' => '(GMT-04:00) Faukland Islands',
			'America/Campo_Grande' => '(GMT-04:00) Brazil',
			'America/Goose_Bay' => '(GMT-04:00) Atlantic Time (Goose Bay)',
			'America/Glace_Bay' => '(GMT-04:00) Atlantic Time (Canada)',
			'America/St_Johns' => '(GMT-03:30) Newfoundland',
			'America/Araguaina' => '(GMT-03:00) UTC-3',
			'America/Montevideo' => '(GMT-03:00) Montevideo',
			'America/Miquelon' => '(GMT-03:00) Miquelon, St. Pierre',
			'America/Godthab' => '(GMT-03:00) Greenland',
			'America/Argentina/Buenos_Aires' => '(GMT-03:00) Buenos Aires',
			'America/Sao_Paulo' => '(GMT-03:00) Brasilia',
			'America/Noronha' => '(GMT-02:00) Mid-Atlantic',
			'Atlantic/Cape_Verde' => '(GMT-01:00) Cape Verde Is.',
			'Atlantic/Azores' => '(GMT-01:00) Azores',
			'Europe/Dublin' => '(GMT) Greenwich Mean Time : Dublin',
			'Europe/Lisbon' => '(GMT) Greenwich Mean Time : Lisbon',
			'Europe/London' => '(GMT) Greenwich Mean Time : London',
			'Africa/Abidjan' => '(GMT) Monrovia, Reykjavik',
			'Europe/Amsterdam' => '(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
			'Europe/Belgrade' => '(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
			'Europe/Brussels' => '(GMT+01:00) Brussels, Copenhagen, Madrid, Paris',
			'Africa/Algiers' => '(GMT+01:00) West Central Africa',
			'Africa/Windhoek' => '(GMT+01:00) Windhoek',
			'Asia/Beirut' => '(GMT+02:00) Beirut',
			'Africa/Cairo' => '(GMT+02:00) Cairo',
			'Asia/Gaza' => '(GMT+02:00) Gaza',
			'Africa/Blantyre' => '(GMT+02:00) Harare, Pretoria',
			'Asia/Jerusalem' => '(GMT+02:00) Jerusalem',
			'Europe/Minsk' => '(GMT+02:00) Minsk',
			'Asia/Damascus' => '(GMT+02:00) Syria',
			'Europe/Moscow' => '(GMT+03:00) Moscow, St. Petersburg, Volgograd',
			'Africa/Addis_Ababa' => '(GMT+03:00) Nairobi',
			'Asia/Tehran' => '(GMT+03:30) Tehran',
			'Asia/Dubai' => '(GMT+04:00) Abu Dhabi, Muscat',
			'Asia/Yerevan' => '(GMT+04:00) Yerevan',
			'Asia/Kabul' => '(GMT+04:30) Kabul',
			'Asia/Yekaterinburg' => '(GMT+05:00) Ekaterinburg',
			'Asia/Tashkent' => '(GMT+05:00) Tashkent',
			'Asia/Kolkata' => '(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
			'Asia/Kathmandu' => '(GMT+05:45) Kathmandu',
			'Asia/Dhaka' => '(GMT+06:00) Astana, Dhaka',
			'Asia/Novosibirsk' => '(GMT+06:00) Novosibirsk',
			'Asia/Rangoon' => '(GMT+06:30) Yangon (Rangoon)',
			'Asia/Bangkok' => '(GMT+07:00) Bangkok, Hanoi, Jakarta',
			'Asia/Krasnoyarsk' => '(GMT+07:00) Krasnoyarsk',
			'Asia/Hong_Kong' => '(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
			'Asia/Irkutsk' => '(GMT+08:00) Irkutsk, Ulaan Bataar',
			'Australia/Perth' => '(GMT+08:00) Perth',
			'Australia/Eucla' => '(GMT+08:45) Eucla',
			'Asia/Tokyo' => '(GMT+09:00) Osaka, Sapporo, Tokyo',
			'Asia/Seoul' => '(GMT+09:00) Seoul',
			'Asia/Yakutsk' => '(GMT+09:00) Yakutsk',
			'Australia/Adelaide' => '(GMT+09:30) Adelaide',
			'Australia/Darwin' => '(GMT+09:30) Darwin',
			'Australia/Brisbane' => '(GMT+10:00) Brisbane',
			'Australia/Hobart' => '(GMT+10:00) Hobart',
			'Asia/Vladivostok' => '(GMT+10:00) Vladivostok',
			'Australia/Lord_Howe' => '(GMT+10:30) Lord Howe Island',
			'Pacific/Noumea' => '(GMT+11:00) Solomon Is., New Caledonia',
			'Asia/Magadan' => '(GMT+11:00) Magadan',
			'Pacific/Norfolk' => '(GMT+11:30) Norfolk Island',
			'Asia/Anadyr' => '(GMT+12:00) Anadyr, Kamchatka',
			'Pacific/Auckland' => '(GMT+12:00) Auckland, Wellington',
			'Pacific/Fiji' => '(GMT+12:00) Fiji, Kamchatka, Marshall Is.',
			'Pacific/Chatham' => '(GMT+12:45) Chatham Islands',
			'Pacific/Tongatapu' => '(GMT+13:00) Nuku Alofa',
			'Pacific/Kiritimati' => '(GMT+14:00) Kiritimati'
		);
	}
}
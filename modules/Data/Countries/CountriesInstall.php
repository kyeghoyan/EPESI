<?php
/**
 * @author Janusz Tylek <j@epe.si>
 * @copyright Copyright &copy; 2008, Janusz Tylek
 * @license MIT
 * @version 1.0
 * @package epesi-data
 * @subpackage countries
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Data_CountriesInstall extends ModuleInstall {

	public function install() {
		$calling_codes = array(
			'US'=>'+1',
			'CA'=>'+1',
			'BS'=>'+1242',
			'BB'=>'+1246',
			'AI'=>'+1264',
			'AG'=>'+1268',
			'VG'=>'+1284',
			'VI'=>'+1340',
			'KY'=>'+1345',
			'BM'=>'+1441',
			'GD'=>'+1473',
			'TC'=>'+1649',
			'MS'=>'+1664',
			'MP'=>'+1670',
			'GU'=>'+1671',
			'AS'=>'+1684',
			'LC'=>'+1758',
			'DM'=>'+1767',
			'VC'=>'+1784',
			'PR'=>'+1787',
			'DO'=>'+1809',
//			'DO'=>'+1829', // valid duplicate
//			'DO'=>'+1849', // valid duplicate
			'TT'=>'+1868',
			'KN'=>'+1869',
			'JM'=>'+1876',
			'EG'=>'+20',
			'MA'=>'+212',
			'EH'=>'+212',
			'DZ'=>'+213',
			'TN'=>'+216',
			'LY'=>'+218',
			'GM'=>'+220',
			'SN'=>'+221',
			'MR'=>'+222',
			'ML'=>'+223',
			'GN'=>'+224',
			'CI'=>'+225',
			'BF'=>'+226',
			'NE'=>'+227',
			'TG'=>'+228',
			'BJ'=>'+229',
			'MU'=>'+230',
			'LR'=>'+231',
			'SL'=>'+232',
			'GH'=>'+233',
			'NG'=>'+234',
			'TD'=>'+235',
			'CF'=>'+236',
			'CM'=>'+237',
			'CV'=>'+238',
			'ST'=>'+239',
			'GQ'=>'+240',
			'GA'=>'+241',
			'CG'=>'+242',
			'CD'=>'+243',
			'AO'=>'+244',
			'GW'=>'+245',
			'IO'=>'+246',
			'AC'=>'+247',
			'SC'=>'+248',
			'SD'=>'+249',
			'RW'=>'+250',
			'ET'=>'+251',
			'SO'=>'+252',
			'QS'=>'+252',
			'DJ'=>'+253',
			'KE'=>'+254',
			'TZ'=>'+255',
			'UG'=>'+256',
			'BI'=>'+257',
			'MZ'=>'+258',
			'ZM'=>'+260',
			'MG'=>'+261',
			'RE'=>'+262',
			'YT'=>'+262',
			'ZW'=>'+263',
			'NA'=>'+264',
			'MW'=>'+265',
			'LS'=>'+266',
			'BW'=>'+267',
			'SZ'=>'+268',
			'KM'=>'+269',
			'ZA'=>'+27',
			'SH'=>'+290',
			'TA'=>'+290',
			'ER'=>'+291',
			'AW'=>'+297',
			'FO'=>'+298',
			'GL'=>'+299',
			'GR'=>'+30',
			'NL'=>'+31',
			'BE'=>'+32',
			'FR'=>'+33',
			'ES'=>'+34',
			'GI'=>'+350',
			'PT'=>'+351',
			'LU'=>'+352',
			'IE'=>'+353',
			'IS'=>'+354',
			'AL'=>'+355',
			'MT'=>'+356',
			'CY'=>'+357',
			'FI'=>'+358',
			'AX'=>'+358',
			'BG'=>'+359',
			'HU'=>'+36',
			'LT'=>'+370',
			'LV'=>'+371',
			'EE'=>'+372',
			'MD'=>'+373',
			'AM'=>'+374',
			'BY'=>'+375',
			'AD'=>'+376',
			'MC'=>'+377',
			'SM'=>'+378',
//			'VA'=>'+379', // duplicated key - calling code not used. use +39
			'UA'=>'+380',
			'RS'=>'+381',
			'ME'=>'+382',
			'HR'=>'+385',
			'SI'=>'+386',
			'BA'=>'+387',
			'EU'=>'+388',
			'MK'=>'+389',
			'IT'=>'+39',
			'VA'=>'+39',
			'RO'=>'+40',
			'CH'=>'+41',
			'CZ'=>'+420',
			'SK'=>'+421',
			'LI'=>'+423',
			'AT'=>'+43',
			'GB'=>'+44',
			'GG'=>'+44',
			'IM'=>'+44',
			'JE'=>'+44',
			'DK'=>'+45',
			'SE'=>'+46',
			'NO'=>'+47',
			'SJ'=>'+47',
			'PL'=>'+48',
			'DE'=>'+49',
			'FK'=>'+500',
			'BZ'=>'+501',
			'GT'=>'+502',
			'SV'=>'+503',
			'HN'=>'+504',
			'NI'=>'+505',
			'CR'=>'+506',
			'PA'=>'+507',
			'PM'=>'+508',
			'HT'=>'+509',
			'PE'=>'+51',
			'MX'=>'+52',
			'CU'=>'+53',
			'AR'=>'+54',
			'BR'=>'+55',
			'CL'=>'+56',
			'CO'=>'+57',
			'VE'=>'+58',
			'GP'=>'+590',
			'BL'=>'+590',
			'MF'=>'+590',
			'BO'=>'+591',
			'GY'=>'+592',
			'EC'=>'+593',
			'GF'=>'+594',
			'PY'=>'+595',
			'MQ'=>'+596',
			'SR'=>'+597',
			'UY'=>'+598',
			'AN'=>'+599',
			'MY'=>'+60',
			'AU'=>'+61',
			'CX'=>'+61',
			'CC'=>'+61',
			'ID'=>'+62',
			'PH'=>'+63',
			'NZ'=>'+64',
			'SG'=>'+65',
			'TH'=>'+66',
			'TL'=>'+670',
			'NF'=>'+672',
			'AQ'=>'+672',
			'BN'=>'+673',
			'NR'=>'+674',
			'PG'=>'+675',
			'TO'=>'+676',
			'SB'=>'+677',
			'VU'=>'+678',
			'FJ'=>'+679',
			'PW'=>'+680',
			'WF'=>'+681',
			'CK'=>'+682',
			'NU'=>'+683',
			'WS'=>'+685',
			'KI'=>'+686',
			'NC'=>'+687',
			'TV'=>'+688',
			'PF'=>'+689',
			'TK'=>'+690',
			'FM'=>'+691',
			'MH'=>'+692',
			'RU'=>'+7',
			'KZ'=>'+7',
			'XT'=>'+800',
			'XS'=>'+808',
			'JP'=>'+81',
			'KR'=>'+82',
			'VN'=>'+84',
			'KP'=>'+850',
			'HK'=>'+852',
			'MO'=>'+853',
			'KH'=>'+855',
			'LA'=>'+856',
			'CN'=>'+86',
			'XN'=>'+870',
			'PN'=>'+872',
			'XP'=>'+878',
			'BD'=>'+880',
			'XG'=>'+881',
			'XV'=>'+882',
			'XL'=>'+883',
			'TW'=>'+886',
			'XD'=>'+888',
			'TR'=>'+90',
			'QY'=>'+90',
			'IN'=>'+91',
			'PK'=>'+92',
			'AF'=>'+93',
			'LK'=>'+94',
			'MM'=>'+95',
			'MV'=>'+960',
			'LB'=>'+961',
			'JO'=>'+962',
			'SY'=>'+963',
			'IQ'=>'+964',
			'KW'=>'+965',
			'SA'=>'+966',
			'YE'=>'+967',
			'OM'=>'+968',
			'PS'=>'+970',
			'AE'=>'+971',
			'IL'=>'+972',
			'BH'=>'+973',
			'QA'=>'+974',
			'BT'=>'+975',
			'MN'=>'+976',
			'NP'=>'+977',
			'XR'=>'+979',
			'IR'=>'+98',
			'XC'=>'+991',
			'TJ'=>'+992',
			'TM'=>'+993',
			'AZ'=>'+994',
			'GE'=>'+995',
			'KG'=>'+996',
			'UZ'=>'+998');
        Utils_CommonDataCommon::new_id('Calling_Codes', true);
		Utils_CommonDataCommon::new_array('Calling_Codes',$calling_codes);

		$countries = array(
				"AF"=>_M('Afghanistan'),
				"AL"=>_M('Albania'),
				"DZ"=>_M('Algeria'),
				"AS"=>_M('American Samoa'),
				"AD"=>_M('Andorra'),
				"AO"=>_M('Angola'),
				"AI"=>_M('Anguilla'),
				"AG"=>_M('Antigua & Barbuda'),
				"AR"=>_M('Argentina'),
				"AA"=>_M('Armenia'),
				"AW"=>_M('Aruba'),
				"AU"=>_M('Australia'),
				"AT"=>_M('Austria'),
				"AZ"=>_M('Azerbaijan'),
				"BS"=>_M('Bahamas'),
				"BH"=>_M('Bahrain'),
				"BD"=>_M('Bangladesh'),
				"BB"=>_M('Barbados'),
				"BY"=>_M('Belarus'),
				"BE"=>_M('Belgium'),
				"BZ"=>_M('Belize'),
				"BJ"=>_M('Benin'),
				"BM"=>_M('Bermuda'),
				"BT"=>_M('Bhutan'),
				"BO"=>_M('Bolivia'),
				"BL"=>_M('Bonaire'),
				"BA"=>_M('Bosnia & Herzegovina'),
				"BW"=>_M('Botswana'),
				"BR"=>_M('Brazil'),
				"BC"=>_M('British Indian Ocean Territory'),
				"BN"=>_M('Brunei'),
				"BG"=>_M('Bulgaria'),
				"BF"=>_M('Burkina Faso'),
				"BI"=>_M('Burundi'),
				"KH"=>_M('Cambodia'),
				"CM"=>_M('Cameroon'),
				"CA"=>_M('Canada'),
				"IC"=>_M('Canary Islands'),
				"CV"=>_M('Cape Verde'),
				"KY"=>_M('Cayman Islands'),
				"CF"=>_M('Central African Republic'),
				"TD"=>_M('Chad'),
				"CD"=>_M('Channel Islands'),
				"CL"=>_M('Chile'),
				"CN"=>_M('China'),
				"CI"=>_M('Christmas Island'),
				"CS"=>_M('Cocos Islands'),
				"CO"=>_M('Colombia'),
				"CC"=>_M('Comoros'),
				"CG"=>_M('Congo'),
				"CK"=>_M('Cook Islands'),
				"CR"=>_M('Costa Rica'),
				"CT"=>_M('Cote D\'Ivoire'),
				"HR"=>_M('Croatia'),
				"CU"=>_M('Cuba'),
				"CB"=>_M('Curacao'),
				"CY"=>_M('Cyprus'),
				"CZ"=>_M('Czech Republic'),
				"DK"=>_M('Denmark'),
				"DJ"=>_M('Djibouti'),
				"DM"=>_M('Dominica'),
				"DO"=>_M('Dominican Republic'),
				"TM"=>_M('East Timor'),
				"EC"=>_M('Ecuador'),
				"EG"=>_M('Egypt'),
				"SV"=>_M('El Salvador'),
				"GQ"=>_M('Equatorial Guinea'),
				"ER"=>_M('Eritrea'),
				"EE"=>_M('Estonia'),
				"ET"=>_M('Ethiopia'),
				"FA"=>_M('Falkland Islands'),
				"FO"=>_M('Faroe Islands'),
				"FJ"=>_M('Fiji'),
				"FI"=>_M('Finland'),
				"FR"=>_M('France'),
				"GF"=>_M('French Guiana'),
				"PF"=>_M('French Polynesia'),
				"FS"=>_M('French Southern Territories'),
				"GA"=>_M('Gabon'),
				"GM"=>_M('Gambia'),
				"GE"=>_M('Georgia'),
				"DE"=>_M('Germany'),
				"GH"=>_M('Ghana'),
				"GI"=>_M('Gibraltar'),
//				"GB"=>_M('Great Britain'),
				"GR"=>_M('Greece'),
				"GL"=>_M('Greenland'),
				"GD"=>_M('Grenada'),
				"GP"=>_M('Guadeloupe'),
				"GU"=>_M('Guam'),
				"GT"=>_M('Guatemala'),
				"GN"=>_M('Guinea'),
				"GY"=>_M('Guyana'),
				"HT"=>_M('Haiti'),
				"HW"=>_M('Hawaii'),
				"HN"=>_M('Honduras'),
				"HK"=>_M('Hong Kong'),
				"HU"=>_M('Hungary'),
				"IS"=>_M('Iceland'),
				"IN"=>_M('India'),
				"ID"=>_M('Indonesia'),
				"IA"=>_M('Iran'),
				"IQ"=>_M('Iraq'),
				"IR"=>_M('Ireland'),
				"IM"=>_M('Isle of Man'),
				"IL"=>_M('Israel'),
				"IT"=>_M('Italy'),
				"JM"=>_M('Jamaica'),
				"JP"=>_M('Japan'),
				"JO"=>_M('Jordan'),
				"KZ"=>_M('Kazakhstan'),
				"KE"=>_M('Kenya'),
				"KI"=>_M('Kiribati'),
				"NK"=>_M('Korea North'),
				"KS"=>_M('Korea South'),
				"KW"=>_M('Kuwait'),
				"KG"=>_M('Kyrgyzstan'),
				"LA"=>_M('Laos'),
				"LV"=>_M('Latvia'),
				"LB"=>_M('Lebanon'),
				"LS"=>_M('Lesotho'),
				"LR"=>_M('Liberia'),
				"LY"=>_M('Libya'),
				"LI"=>_M('Liechtenstein'),
				"LT"=>_M('Lithuania'),
				"LU"=>_M('Luxembourg'),
				"MO"=>_M('Macau'),
				"MK"=>_M('Macedonia'),
				"MG"=>_M('Madagascar'),
				"MY"=>_M('Malaysia'),
				"MW"=>_M('Malawi'),
				"MV"=>_M('Maldives'),
				"ML"=>_M('Mali'),
				"MT"=>_M('Malta'),
				"MH"=>_M('Marshall Islands'),
				"MQ"=>_M('Martinique'),
				"MR"=>_M('Mauritania'),
				"MU"=>_M('Mauritius'),
				"ME"=>_M('Mayotte'),
				"MX"=>_M('Mexico'),
				"MI"=>_M('Midway Islands'),
				"MD"=>_M('Moldova'),
				"MC"=>_M('Monaco'),
				"MN"=>_M('Mongolia'),
				"MS"=>_M('Montserrat'),
				"MA"=>_M('Morocco'),
				"MZ"=>_M('Mozambique'),
				"MM"=>_M('Myanmar'),
				"NA"=>_M('Nambia'),
				"NU"=>_M('Nauru'),
				"NP"=>_M('Nepal'),
				"AN"=>_M('Netherland Antilles'),
				"NL"=>_M('Netherlands'),
				"NV"=>_M('Nevis'),
				"NC"=>_M('New Caledonia'),
				"NZ"=>_M('New Zealand'),
				"NI"=>_M('Nicaragua'),
				"NE"=>_M('Niger'),
				"NG"=>_M('Nigeria'),
				"NW"=>_M('Niue'),
				"NF"=>_M('Norfolk Island'),
				"NO"=>_M('Norway'),
				"OM"=>_M('Oman'),
				"PK"=>_M('Pakistan'),
				"PW"=>_M('Palau Island'),
				"PS"=>_M('Palestine'),
				"PA"=>_M('Panama'),
				"PG"=>_M('Papua New Guinea'),
				"PY"=>_M('Paraguay'),
				"PE"=>_M('Peru'),
				"PH"=>_M('Philippines'),
				"PO"=>_M('Pitcairn Island'),
				"PL"=>_M('Poland'),
				"PT"=>_M('Portugal'),
				"PR"=>_M('Puerto Rico'),
				"QA"=>_M('Qatar'),
				"RE"=>_M('Reunion'),
				"RO"=>_M('Romania'),
				"RU"=>_M('Russia'),
				"RW"=>_M('Rwanda'),
				"NT"=>_M('St Barthelemy'),
				"EU"=>_M('St Eustatius'),
				"HE"=>_M('St Helena'),
				"KN"=>_M('St Kitts-Nevis'),
				"LC"=>_M('St Lucia'),
				"MB"=>_M('St Maarten'),
				"PM"=>_M('St Pierre & Miquelon'),
				"VC"=>_M('St Vincent & Grenadines'),
				"SP"=>_M('Saipan'),
				"SO"=>_M('Samoa'),
				"SM"=>_M('San Marino'),
				"ST"=>_M('Sao Tome & Principe'),
				"SA"=>_M('Saudi Arabia'),
				"SN"=>_M('Senegal'),
				"SC"=>_M('Seychelles'),
				"SS"=>_M('Serbia & Montenegro'),
				"SL"=>_M('Sierra Leone'),
				"SG"=>_M('Singapore'),
				"SK"=>_M('Slovakia'),
				"SI"=>_M('Slovenia'),
				"SB"=>_M('Solomon Islands'),
				"OI"=>_M('Somalia'),
				"ZA"=>_M('South Africa'),
				"ES"=>_M('Spain'),
				"LK"=>_M('Sri Lanka'),
				"SD"=>_M('Sudan'),
				"SR"=>_M('Suriname'),
				"SZ"=>_M('Swaziland'),
				"SE"=>_M('Sweden'),
				"CH"=>_M('Switzerland'),
				"SY"=>_M('Syria'),
				"TA"=>_M('Tahiti'),
				"TW"=>_M('Taiwan'),
				"TJ"=>_M('Tajikistan'),
				"TZ"=>_M('Tanzania'),
				"TH"=>_M('Thailand'),
				"TG"=>_M('Togo'),
				"TK"=>_M('Tokelau'),
				"TO"=>_M('Tonga'),
				"TT"=>_M('Trinidad & Tobago'),
				"TN"=>_M('Tunisia'),
				"TR"=>_M('Turkey'),
				"TU"=>_M('Turkmenistan'),
				"TC"=>_M('Turks & Caicos Is'),
				"TV"=>_M('Tuvalu'),
				"UG"=>_M('Uganda'),
				"UA"=>_M('Ukraine'),
				"AE"=>_M('United Arab Emirates'),
				"GB"=>_M('United Kingdom'),
				"US"=>_M('United States of America'),
				"UY"=>_M('Uruguay'),
				"UZ"=>_M('Uzbekistan'),
				"VU"=>_M('Vanuatu'),
				"VS"=>_M('Vatican City State'),
				"VE"=>_M('Venezuela'),
				"VN"=>_M('Vietnam'),
				"VB"=>_M('Virgin Islands (Brit)'),
				"VA"=>_M('Virgin Islands (USA)'),
				"WK"=>_M('Wake Island'),
				"WF"=>_M('Wallis & Futana Is'),
				"YE"=>_M('Yemen'),
				"ZR"=>_M('Zaire'),
				"ZM"=>_M('Zambia'),
				"ZW"=>_M('Zimbabwe'));
        Utils_CommonDataCommon::new_id('Countries', true);
		Utils_CommonDataCommon::new_array('Countries',$countries);
		$usa_states = array('AL'=>_M('Alabama'),  
			'AK'=>_M('Alaska'),  
			'AZ'=>_M('Arizona'),  
			'AR'=>_M('Arkansas'),  
			'CA'=>_M('California'),  
			'CO'=>_M('Colorado'),  
			'CT'=>_M('Connecticut'),  
			'DE'=>_M('Delaware'),  
			'DC'=>_M('District Of Columbia'),  
			'FL'=>_M('Florida'),  
			'GA'=>_M('Georgia'),  
			'HI'=>_M('Hawaii'),  
			'ID'=>_M('Idaho'),  
			'IL'=>_M('Illinois'),  
			'IN'=>_M('Indiana'),  
			'IA'=>_M('Iowa'),  
			'KS'=>_M('Kansas'),  
			'KY'=>_M('Kentucky'),  
			'LA'=>_M('Louisiana'),  
			'ME'=>_M('Maine'),  
			'MD'=>_M('Maryland'),  
			'MA'=>_M('Massachusetts'),  
			'MI'=>_M('Michigan'),  
			'MN'=>_M('Minnesota'),  
			'MS'=>_M('Mississippi'),  
			'MO'=>_M('Missouri'),  
			'MT'=>_M('Montana'),
			'NE'=>_M('Nebraska'),
			'NV'=>_M('Nevada'),
			'NH'=>_M('New Hampshire'),
			'NJ'=>_M('New Jersey'),
			'NM'=>_M('New Mexico'),
			'NY'=>_M('New York'),
			'NC'=>_M('North Carolina'),
			'ND'=>_M('North Dakota'),
			'OH'=>_M('Ohio'),  
			'OK'=>_M('Oklahoma'),  
			'OR'=>_M('Oregon'),  
			'PA'=>_M('Pennsylvania'),  
			'RI'=>_M('Rhode Island'),  
			'SC'=>_M('South Carolina'),  
			'SD'=>_M('South Dakota'),
			'TN'=>_M('Tennessee'),  
			'TX'=>_M('Texas'),  
			'UT'=>_M('Utah'),  
			'VT'=>_M('Vermont'),  
			'VA'=>_M('Virginia'),  
			'WA'=>_M('Washington'),  
			'WV'=>_M('West Virginia'),  
			'WI'=>_M('Wisconsin'),  
			'WY'=>_M('Wyoming'));
		Utils_CommonDataCommon::new_array('Countries/US',$usa_states);
		
		$pl_wojew = array('DS'=>_M('Lower Silesian'),
			'KP'=>_M('Kuyavian-Pomeranian'),
			'LB'=>_M('Lubusz'),
			'LD'=>_M('Łódź'),
			'LU'=>_M('Lublin'),
			'MA'=>_M('Masovian'),
			'MP'=>_M('Lesser Poland'),
			'OP'=>_M('Opole'),
			'PD'=>_M('Podlaskie'),
			'PK'=>_M('Subcarpathian'),
			'PM'=>_M('Pomeranian'),
			'SL'=>_M('Silesian'),
			'SW'=>_M('Świętokrzyskie'),
			'WM'=>_M('Warmian-Masurian'),
			'WP'=>_M('Greater Poland'),
			'ZP'=>_M('West Pomeranian'));
		Utils_CommonDataCommon::new_array('Countries/PL',$pl_wojew);

        $ro_wojew = array(
            'AB'=>_M('Alba'),
            'AG'=>_M('Arges'),
            'AR'=>_M('Arad'),
            'B'=>_M('Bucuresti'),
            'BC'=>_M('Bacau'),
            'BH'=>_M('Bihor'),
            'BN'=>_M('Bistrita-Nasaud'),
            'BR'=>_M('Braila'),
            'BT'=>_M('Botosani'),
            'BV'=>_M('Brasov'),
            'BZ'=>_M('Buzau'),
            'CJ'=>_M('Cluj'),
            'CL'=>_M('Calarasi'),
            'CS'=>_M('Caras-Severin'),
            'CT'=>_M('Constanta'),
            'CV'=>_M('Covasna'),
            'DB'=>_M('Dambovita'),
            'DJ'=>_M('Dolj'),
            'GJ'=>_M('Gorj'),
            'GL'=>_M('Galati'),
            'GR'=>_M('Giurgiu'),
            'HD'=>_M('Hunedoara'),
            'HR'=>_M('Harghita'),
            'IF'=>_M('Ilfov'),
            'IL'=>_M('Ialomita'),
            'IS'=>_M('Iasi'),
            'MH'=>_M('Mehedinti'),
            'MM'=>_M('Maramures'),
            'MS'=>_M('Mures'),
            'NT'=>_M('Neamt'),
            'OT'=>_M('Olt'),
            'PH'=>_M('Prahova'),
            'SB'=>_M('Sibiu'),
            'SJ'=>_M('Salaj'),
            'SM'=>_M('Satu-Mare'),
            'SV'=>_M('Suceava'),
            'TL'=>_M('Tulcea'),
            'TM'=>_M('Timis'),
            'TR'=>_M('Teleorman'),
            'VL'=>_M('Valcea'),
            'VN'=>_M('Vrancea'),
            'VS'=>_M('Vaslui'));
		Utils_CommonDataCommon::new_array('Countries/RO',$ro_wojew);
		
		$ca_provinces = array(
         'ON'=>_M('Ontario'),
         'AB'=>_M('Alberta'),
         'BC'=>_M('British Columbia'),
         'MB'=>_M('Manitoba'),
         'QC'=>_M('Quebec'),
         'LB'=>_M('Labrador'),
         'NS'=>_M('Nova Scotia'),
         'PE'=>_M('Prince Edwards Island'),
         'YK'=>_M('Yukon'),
         'NT'=>_M('Northwest Territories'),
         'NU'=>_M('Nunavut'),
         'NB'=>_M('New Brunswick'),
         'SK'=>'Saskatchewan'
        );
        Utils_CommonDataCommon::new_array('Countries/CA',$ca_provinces);

		$us_pa_county = array('philadelphia'=>_M('Philadelphia'),
			'montgomery'=>_M('Montgomery'),
			'delaware'=>_M('Delaware'),
			'lancaster'=>_M('Lancaster'),
			'chester'=>_M('Chester'),
			'bucks'=>_M('Bucks'));
		Utils_CommonDataCommon::new_array('Countries/US/PA',$us_pa_county);

		Base_ThemeCommon::install_default_theme($this->get_type());
		return true;
	}
	
	public function uninstall() {
        Utils_CommonDataCommon::remove('Calling_Codes');
        Utils_CommonDataCommon::remove('Countries');
		Base_ThemeCommon::uninstall_default_theme($this->get_type());
		return true;
	}
	
	public function version() {
		return array('2008');
	}
	
	public function requires($v) {
		return array(
			array('name'=>Base_AdminInstall::module_name(),'version'=>0),
			array('name'=>Base_ThemeInstall::module_name(),'version'=>0),
			array('name'=>Utils_CommonDataInstall::module_name(),'version'=>0));
	}

	public function simple_setup() {
		return __('EPESI Core');
	}
}

?>

<?php

class Countries_Cities {
    var $states = array(
      'AL'=>'Alabama',
      'AK'=>'Alaska',
      'AS'=>'American Samoa',
      'AZ'=>'Arizona',
      'AR'=>'Arkansas',
      'CA'=>'California',
      'CO'=>'Colorado',
      'CT'=>'Connecticut',
      'DE'=>'Delaware',
      'DC'=>'District of Columbia',
      'FM'=>'Federated States of Micronesia',
      'FL'=>'Florida',
      'GA'=>'Georgia',
      'GU'=>'Guam',
      'HI'=>'Hawaii',
      'ID'=>'Idaho',
      'IL'=>'Illinois',
      'IN'=>'Indiana',
      'IA'=>'Iowa',
      'KS'=>'Kansas',
      'KY'=>'Kentucky',
      'LA'=>'Louisiana',
      'ME'=>'Maine',
      'MH'=>'Marshall Islands',
      'MD'=>'Maryland',
      'MA'=>'Massachusetts',
      'MI'=>'Michigan',
      'MN'=>'Minnesota',
      'MS'=>'Mississippi',
      'MO'=>'Missouri',
      'MT'=>'Montana',
      'NE'=>'Nebraska',
      'NV'=>'Nevada',
      'NH'=>'New Hampshire',
      'NJ'=>'New Jersey',
      'NM'=>'New Mexico',
      'NY'=>'New York',
      'NC'=>'North Carolina',
      'ND'=>'North Dakota',
      'MP'=>'Northern Mariana Islands',
      'OH'=>'Ohio',
      'OK'=>'Oklahoma',
      'OR'=>'Oregon',
      'PW'=>'Palau',
      'PA'=>'Pennsylvania',
      'PR'=>'Puerto Rico',
      'RI'=>'Rhode Island',
      'SC'=>'South Carolina',
      'SD'=>'South Dakota',
      'TN'=>'Tennessee',
      'TX'=>'Texas',
      'UT'=>'Utah',
      'VT'=>'Vermont',
      'VI'=>'Virgin Islands',
      'VA'=>'Virginia',
      'WA'=>'Washington',
      'WV'=>'West Virginia',
      'WI'=>'Wisconsin',
      'WY'=>'Wyoming',
      'AE'=>'Armed Forces Europe, the Middle East, and Canada',
      'AP'=>'Armed Forces Pacific',
      'AA'=>'Armed Forces Americas (except Canada)'
    );
    var $countries = array(
  		'AF' => 'Afghanistan',
  		'AX' => 'Aland Islands',
  		'AL' => 'Albania',
  		'DZ' => 'Algeria',
  		'AS' => 'American Samoa',
  		'AD' => 'Andorra',
  		'AO' => 'Angola',
  		'AI' => 'Anguilla',
  		'AQ' => 'Antarctica',
  		'AG' => 'Antigua And Barbuda',
  		'AR' => 'Argentina',
  		'AM' => 'Armenia',
  		'AW' => 'Aruba',
  		'AU' => 'Australia',
  		'AT' => 'Austria',
  		'AZ' => 'Azerbaijan',
  		'BS' => 'Bahamas',
  		'BH' => 'Bahrain',
  		'BD' => 'Bangladesh',
  		'BB' => 'Barbados',
  		'BY' => 'Belarus',
  		'BE' => 'Belgium',
  		'BZ' => 'Belize',
  		'BJ' => 'Benin',
  		'BM' => 'Bermuda',
  		'BT' => 'Bhutan',
  		'BO' => 'Bolivia',
  		'BA' => 'Bosnia And Herzegovina',
  		'BW' => 'Botswana',
  		'BV' => 'Bouvet Island',
  		'BR' => 'Brazil',
  		'IO' => 'British Indian Ocean Territory',
  		'BN' => 'Brunei Darussalam',
  		'BG' => 'Bulgaria',
  		'BF' => 'Burkina Faso',
  		'BI' => 'Burundi',
  		'KH' => 'Cambodia',
  		'CM' => 'Cameroon',
  		'CA' => 'Canada',
  		'CV' => 'Cape Verde',
  		'KY' => 'Cayman Islands',
  		'CF' => 'Central African Republic',
  		'TD' => 'Chad',
  		'CL' => 'Chile',
  		'CN' => 'China',
  		'CX' => 'Christmas Island',
  		'CC' => 'Cocos (Keeling) Islands',
  		'CO' => 'Colombia',
  		'KM' => 'Comoros',
  		'CG' => 'Congo',
  		'CD' => 'Congo, Democratic Republic',
  		'CK' => 'Cook Islands',
  		'CR' => 'Costa Rica',
  		'CI' => 'Cote D\'Ivoire',
  		'HR' => 'Croatia',
  		'CU' => 'Cuba',
  		'CY' => 'Cyprus',
  		'CZ' => 'Czech Republic',
  		'DK' => 'Denmark',
  		'DJ' => 'Djibouti',
  		'DM' => 'Dominica',
  		'DO' => 'Dominican Republic',
  		'EC' => 'Ecuador',
  		'EG' => 'Egypt',
  		'SV' => 'El Salvador',
  		'GQ' => 'Equatorial Guinea',
  		'ER' => 'Eritrea',
  		'EE' => 'Estonia',
  		'ET' => 'Ethiopia',
  		'FK' => 'Falkland Islands (Malvinas)',
  		'FO' => 'Faroe Islands',
  		'FJ' => 'Fiji',
  		'FI' => 'Finland',
  		'FR' => 'France',
  		'GF' => 'French Guiana',
  		'PF' => 'French Polynesia',
  		'TF' => 'French Southern Territories',
  		'GA' => 'Gabon',
  		'GM' => 'Gambia',
  		'GE' => 'Georgia',
  		'DE' => 'Germany',
  		'GH' => 'Ghana',
  		'GI' => 'Gibraltar',
  		'GR' => 'Greece',
  		'GL' => 'Greenland',
  		'GD' => 'Grenada',
  		'GP' => 'Guadeloupe',
  		'GU' => 'Guam',
  		'GT' => 'Guatemala',
  		'GG' => 'Guernsey',
  		'GN' => 'Guinea',
  		'GW' => 'Guinea-Bissau',
  		'GY' => 'Guyana',
  		'HT' => 'Haiti',
  		'HM' => 'Heard Island & Mcdonald Islands',
  		'VA' => 'Holy See (Vatican City State)',
  		'HN' => 'Honduras',
  		'HK' => 'Hong Kong',
  		'HU' => 'Hungary',
  		'IS' => 'Iceland',
  		'IN' => 'India',
  		'ID' => 'Indonesia',
  		'IR' => 'Iran, Islamic Republic Of',
  		'IQ' => 'Iraq',
  		'IE' => 'Ireland',
  		'IM' => 'Isle Of Man',
  		'IL' => 'Israel',
  		'IT' => 'Italy',
  		'JM' => 'Jamaica',
  		'JP' => 'Japan',
  		'JE' => 'Jersey',
  		'JO' => 'Jordan',
  		'KZ' => 'Kazakhstan',
  		'KE' => 'Kenya',
  		'KI' => 'Kiribati',
  		'KR' => 'Korea',
  		'KW' => 'Kuwait',
  		'KG' => 'Kyrgyzstan',
  		'LA' => 'Lao People\'s Democratic Republic',
  		'LV' => 'Latvia',
  		'LB' => 'Lebanon',
  		'LS' => 'Lesotho',
  		'LR' => 'Liberia',
  		'LY' => 'Libyan Arab Jamahiriya',
  		'LI' => 'Liechtenstein',
  		'LT' => 'Lithuania',
  		'LU' => 'Luxembourg',
  		'MO' => 'Macao',
  		'MK' => 'Macedonia',
  		'MG' => 'Madagascar',
  		'MW' => 'Malawi',
  		'MY' => 'Malaysia',
  		'MV' => 'Maldives',
  		'ML' => 'Mali',
  		'MT' => 'Malta',
  		'MH' => 'Marshall Islands',
  		'MQ' => 'Martinique',
  		'MR' => 'Mauritania',
  		'MU' => 'Mauritius',
  		'YT' => 'Mayotte',
  		'MX' => 'Mexico',
  		'FM' => 'Micronesia, Federated States Of',
  		'MD' => 'Moldova',
  		'MC' => 'Monaco',
  		'MN' => 'Mongolia',
  		'ME' => 'Montenegro',
  		'MS' => 'Montserrat',
  		'MA' => 'Morocco',
  		'MZ' => 'Mozambique',
  		'MM' => 'Myanmar',
  		'NA' => 'Namibia',
  		'NR' => 'Nauru',
  		'NP' => 'Nepal',
  		'NL' => 'Netherlands',
  		'AN' => 'Netherlands Antilles',
  		'NC' => 'New Caledonia',
  		'NZ' => 'New Zealand',
  		'NI' => 'Nicaragua',
  		'NE' => 'Niger',
  		'NG' => 'Nigeria',
  		'NU' => 'Niue',
  		'NF' => 'Norfolk Island',
  		'MP' => 'Northern Mariana Islands',
  		'NO' => 'Norway',
  		'OM' => 'Oman',
  		'PK' => 'Pakistan',
  		'PW' => 'Palau',
  		'PS' => 'Palestinian Territory, Occupied',
  		'PA' => 'Panama',
  		'PG' => 'Papua New Guinea',
  		'PY' => 'Paraguay',
  		'PE' => 'Peru',
  		'PH' => 'Philippines',
  		'PN' => 'Pitcairn',
  		'PL' => 'Poland',
  		'PT' => 'Portugal',
  		'PR' => 'Puerto Rico',
  		'QA' => 'Qatar',
  		'RE' => 'Reunion',
  		'RO' => 'Romania',
  		'RU' => 'Russian Federation',
  		'RW' => 'Rwanda',
  		'BL' => 'Saint Barthelemy',
  		'SH' => 'Saint Helena',
  		'KN' => 'Saint Kitts And Nevis',
  		'LC' => 'Saint Lucia',
  		'MF' => 'Saint Martin',
  		'PM' => 'Saint Pierre And Miquelon',
  		'VC' => 'Saint Vincent And Grenadines',
  		'WS' => 'Samoa',
  		'SM' => 'San Marino',
  		'ST' => 'Sao Tome And Principe',
  		'SA' => 'Saudi Arabia',
  		'SN' => 'Senegal',
  		'RS' => 'Serbia',
  		'SC' => 'Seychelles',
  		'SL' => 'Sierra Leone',
  		'SG' => 'Singapore',
  		'SK' => 'Slovakia',
  		'SI' => 'Slovenia',
  		'SB' => 'Solomon Islands',
  		'SO' => 'Somalia',
  		'ZA' => 'South Africa',
  		'GS' => 'South Georgia And Sandwich Isl.',
  		'ES' => 'Spain',
  		'LK' => 'Sri Lanka',
  		'SD' => 'Sudan',
  		'SR' => 'Suriname',
  		'SJ' => 'Svalbard And Jan Mayen',
  		'SZ' => 'Swaziland',
  		'SE' => 'Sweden',
  		'CH' => 'Switzerland',
  		'SY' => 'Syrian Arab Republic',
  		'TW' => 'Taiwan',
  		'TJ' => 'Tajikistan',
  		'TZ' => 'Tanzania',
  		'TH' => 'Thailand',
  		'TL' => 'Timor-Leste',
  		'TG' => 'Togo',
  		'TK' => 'Tokelau',
  		'TO' => 'Tonga',
  		'TT' => 'Trinidad And Tobago',
  		'TN' => 'Tunisia',
  		'TR' => 'Turkey',
  		'TM' => 'Turkmenistan',
  		'TC' => 'Turks And Caicos Islands',
  		'TV' => 'Tuvalu',
  		'UG' => 'Uganda',
  		'UA' => 'Ukraine',
  		'AE' => 'United Arab Emirates',
  		'GB' => 'United Kingdom',
  		'US' => 'United States',
  		'UM' => 'United States Outlying Islands',
  		'UY' => 'Uruguay',
  		'UZ' => 'Uzbekistan',
  		'VU' => 'Vanuatu',
  		'VE' => 'Venezuela',
  		'VN' => 'Viet Nam',
  		'VG' => 'Virgin Islands, British',
  		'VI' => 'Virgin Islands, U.S.',
  		'WF' => 'Wallis And Futuna',
  		'EH' => 'Western Sahara',
  		'YE' => 'Yemen',
  		'ZM' => 'Zambia',
  		'ZW' => 'Zimbabwe',
  	);
    
    function map($entity = "country", $code) {
		if (strlen($code) == 2) {
		  switch(strtolower($entity)) {
			case "country": return $this->countries[$code]; break;
			case "state": return $this->states[$code]; break;
		  }
		} else {
		  switch(strtolower($entity)) {
			case "country": 
				return array_search($code,$this->countries);
				break;
			case "state": 
				return array_search($code,$this->states);
				break;
		  }
		}
    }
    
    function json($entity = "country", $include_codes = true, $query = "") {
      $query = strtolower($query);
      $retn = array();
      if ($entity == "country") {
        foreach($this->countries as $code => $country) {
          if (!empty($query) && (substr(strtolower($country),0,strlen($query)) == $query)) {
            if ($include_codes) {
              $retn[$code] = $country;
            } else {
              $retn[] = $country;
            }
          } elseif (empty($query)) {
            if ($include_codes) {
              $retn[$code] = $country;
            } else {
              $retn[] = $country;
            }
          }
        }
      } elseif ($entity == "state") {
		foreach($this->states as $code => $state) {
          if (!empty($query) && (substr(strtolower($state),0,strlen($query)) == $query)) {
            if ($include_codes) {
              $retn[$code] = $state;
            } else {
              $retn[] = $state;
            }
          } elseif (empty($query)) {
            if ($include_codes) {
              $retn[$code] = $state;
            } else {
              $retn[] = $state;
            }
          }
        }
      }
	  return json_encode($retn);
    }
    
    function isValid($code, $entity = false) {
      switch(strtolower($entity)) {
        case "country": return (isset($this->countries[$code]));
        case "state": return (isset($this->states[$code]));
        default: return (isset($this->countries[$code]) || isset($this->states[$code]));
      }
    }
    
    function select($class = '', $name = 'state', $selected = null) {
      $html  = "<select name='$name' class='$class'>";
      if ($name == "country") {
        foreach($this->countries as $code => $country) {
          $html .= "<option value='$code' ".($code == $selected ? "selected" : "").">$country</select>";
        }
      } elseif ($name == "state") {
        foreach($this->states as $code => $state) {
          $html .= "<option value='$code' ".($code == $selected ? "selected" : "").">$state</select>";
        }
      }
      $html .= "</select>";
      return $html;  
	  }        
}

?>
<?php
/**
 * ProSports countries
 *
 * The ProSports countries class stores continent/country data.
 *
 * @class 		SP_Countries
 * @version		1.5
 * @package		ProSports/Classes
 * @category	Class
 * @author 		ProSports
 */
class SP_Countries {

	/** @var array Array of continents */
	public $continents;

	/** @var array Array of countries */
	public $countries;

	/**
	 * Constructor for the countries class - defines all continents and countries.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		$continents = array(
			__( 'Africa', 'prosports' ) => array('AO','BF','BI','BJ','BW','CD','CF','CG','CI','CM','CV','DJ','DZ','EG','EH','ER','ET','GA','GH','GM','GN','GQ','GW','KE','KM','LR','LS','LY','MA','MG','ML','MR','MU','MZ','NA','NE','NG','RW','SC','SD','SL','SN','SO','ST','SZ','TD','TG','TN','TZ','UG','ZA','ZM','ZW'),
			__( 'Asia', 'prosports' ) => array('AE','AF','AM','AZ','BD','BH','BN','BT','CN','CY','GE','HK','IL','IN','IQ','IR','JO','JP','KG','KH','KP','KR','KW','KZ','LA','LB','LK','MM','MN','MO','MV','MY','NP','OM','PH','PK','QA','SA','SG','TH','TJ','TM','TW','UZ','VN','YE'),
			__( 'Europe', 'prosports' ) => array('AD','AL','AT','BA','BE','BG','BY','CH','CZ','DE','DK','EE','EN','ES','FI','FR','GB','GR','HR','HU','IE','IS','IT','LI','LT','LU','LV','MC','MD','ME','MK','MT','MW','NB','NL','NO','PL','PT','RO','RS','RU','SE','SF','SI','SK','SM','TR','UA','VA','WL'),
			__( 'North America', 'prosports' ) => array('AG','BB','BS','BZ','CA','CR','CU','DM','DO','GD','GT','HN','HT','JM','KN','LC','MX','NI','PA','PR','SV','US','VC'),
			__( 'Oceania', 'prosports' ) => array('AU','TL','FJ','FM','ID','KI','MH','NR','NZ','PG','PW','SB','TO','TV','VU','WS'),
			__( 'South America', 'prosports' ) => array('AR','BO','BR','CL','CO','EC','GY','PE','PY','SR','TT','UY','VE'),
		);

		$this->countries = apply_filters( 'prosports_countries', array(
			'AD' => __( "Andorra", 'prosports' ),
		    'AE' => __( "United Arab Emirates", 'prosports' ),
		    'AF' => __( "Afghanistan", 'prosports' ),
		    'AG' => __( "Antigua and Barbuda", 'prosports' ),
		    'AL' => __( "Albania", 'prosports' ),
		    'AM' => __( "Armenia", 'prosports' ),
		    'AO' => __( "Angola", 'prosports' ),
		    'AR' => __( "Argentina", 'prosports' ),
		    'AT' => __( "Austria", 'prosports' ),
		    'AU' => __( "Australia", 'prosports' ),
		    'AZ' => __( "Azerbaijan", 'prosports' ),
		    'BA' => __( "Bosnia and Herzegovina", 'prosports' ),
		    'BB' => __( "Barbados", 'prosports' ),
		    'BD' => __( "Bangladesh", 'prosports' ),
		    'BE' => __( "Belgium", 'prosports' ),
		    'BF' => __( "Burkina Faso", 'prosports' ),
		    'BG' => __( "Bulgaria", 'prosports' ),
		    'BH' => __( "Bahrain", 'prosports' ),
		    'BI' => __( "Burundi", 'prosports' ),
		    'BJ' => __( "Benin", 'prosports' ),
		    'BN' => __( "Brunei", 'prosports' ),
		    'BO' => __( "Bolivia", 'prosports' ),
		    'BR' => __( "Brazil", 'prosports' ),
		    'BS' => __( "Bahamas", 'prosports' ),
		    'BT' => __( "Bhutan", 'prosports' ),
		    'BW' => __( "Botswana", 'prosports' ),
		    'BY' => __( "Belarus", 'prosports' ),
		    'BZ' => __( "Belize", 'prosports' ),
		    'CA' => __( "Canada", 'prosports' ),
		    'CD' => __( "Democratic Republic of the Congo", 'prosports' ),
		    'CF' => __( "Central African Republic", 'prosports' ),
		    'CG' => __( "Republic of the Congo", 'prosports' ),
		    'CH' => __( "Switzerland", 'prosports' ),
		    'CI' => __( "Ivory Coast", 'prosports' ),
		    'CL' => __( "Chile", 'prosports' ),
		    'CM' => __( "Cameroon", 'prosports' ),
		    'CN' => __( "China", 'prosports' ),
		    'CO' => __( "Colombia", 'prosports' ),
		    'CR' => __( "Costa Rica", 'prosports' ),
		    'CU' => __( "Cuba", 'prosports' ),
		    'CV' => __( "Cape Verde", 'prosports' ),
		    'CY' => __( "Cyprus", 'prosports' ),
		    'CZ' => __( "Czech Republic", 'prosports' ),
		    'DE' => __( "Germany", 'prosports' ),
		    'DJ' => __( "Djibouti", 'prosports' ),
		    'DK' => __( "Denmark", 'prosports' ),
		    'DM' => __( "Dominica", 'prosports' ),
		    'DO' => __( "Dominican Republic", 'prosports' ),
		    'DZ' => __( "Algeria", 'prosports' ),
		    'EC' => __( "Ecuador", 'prosports' ),
		    'EE' => __( "Estonia", 'prosports' ),
		    'EG' => __( "Egypt", 'prosports' ),
		    'EH' => __( "Western Sahara", 'prosports' ),
		    'EN' => __( "England", 'prosports' ),
		    'ER' => __( "Eritrea", 'prosports' ),
		    'ES' => __( "Spain", 'prosports' ),
		    'ET' => __( "Ethiopia", 'prosports' ),
		    'FI' => __( "Finland", 'prosports' ),
		    'FJ' => __( "Fiji", 'prosports' ),
		    'FM' => __( "Micronesia", 'prosports' ),
		    'FR' => __( "France", 'prosports' ),
		    'GA' => __( "Gabon", 'prosports' ),
		    'GB' => __( "United Kingdom", 'prosports' ),
		    'GD' => __( "Grenada", 'prosports' ),
		    'GE' => __( "Georgia", 'prosports' ),
		    'GH' => __( "Ghana", 'prosports' ),
		    'GM' => __( "Gambia", 'prosports' ),
		    'GN' => __( "Guinea", 'prosports' ),
		    'GQ' => __( "Equatorial Guinea", 'prosports' ),
		    'GR' => __( "Greece", 'prosports' ),
		    'GT' => __( "Guatemala", 'prosports' ),
		    'GW' => __( "Guinea-Bissau", 'prosports' ),
		    'GY' => __( "Guyana", 'prosports' ),
		    'HK' => __( "Hong Kong", 'prosports' ),
		    'HN' => __( "Honduras", 'prosports' ),
		    'HR' => __( "Croatia", 'prosports' ),
		    'HT' => __( "Haiti", 'prosports' ),
		    'HU' => __( "Hungary", 'prosports' ),
		    'ID' => __( "Indonesia", 'prosports' ),
		    'IE' => __( "Ireland", 'prosports' ),
		    'IL' => __( "Israel", 'prosports' ),
		    'IN' => __( "India", 'prosports' ),
		    'IQ' => __( "Iraq", 'prosports' ),
		    'IR' => __( "Iran", 'prosports' ),
		    'IS' => __( "Iceland", 'prosports' ),
		    'IT' => __( "Italy", 'prosports' ),
		    'JM' => __( "Jamaica", 'prosports' ),
		    'JO' => __( "Jordan", 'prosports' ),
		    'JP' => __( "Japan", 'prosports' ),
		    'KE' => __( "Kenya", 'prosports' ),
		    'KG' => __( "Kyrgyzstan", 'prosports' ),
		    'KH' => __( "Cambodia", 'prosports' ),
		    'KI' => __( "Kiribati", 'prosports' ),
		    'KM' => __( "Comoros", 'prosports' ),
		    'KN' => __( "Saint Kitts and Nevis", 'prosports' ),
		    'KP' => __( "North Korea", 'prosports' ),
		    'KR' => __( "South Korea", 'prosports' ),
		    'KW' => __( "Kuwait", 'prosports' ),
		    'KZ' => __( "Kazakhstan", 'prosports' ),
		    'LA' => __( "Laos", 'prosports' ),
		    'LB' => __( "Lebanon", 'prosports' ),
		    'LC' => __( "Saint Lucia", 'prosports' ),
		    'LI' => __( "Liechtenstein", 'prosports' ),
		    'LK' => __( "Sri Lanka", 'prosports' ),
		    'LR' => __( "Liberia", 'prosports' ),
		    'LS' => __( "Lesotho", 'prosports' ),
		    'LT' => __( "Lithuania", 'prosports' ),
		    'LU' => __( "Luxembourg", 'prosports' ),
		    'LV' => __( "Latvia", 'prosports' ),
		    'LY' => __( "Libya", 'prosports' ),
		    'MA' => __( "Morocco", 'prosports' ),
		    'MC' => __( "Monaco", 'prosports' ),
		    'MD' => __( "Moldova", 'prosports' ),
		    'ME' => __( "Montenegro", 'prosports' ),
		    'MG' => __( "Madagascar", 'prosports' ),
		    'MH' => __( "Marshall Islands", 'prosports' ),
		    'MK' => __( "Macedonia", 'prosports' ),
		    'ML' => __( "Mali", 'prosports' ),
		    'MM' => __( "Burma", 'prosports' ),
		    'MN' => __( "Mongolia", 'prosports' ),
		    'MO' => __( "Macau", 'prosports' ),
		    'MR' => __( "Mauritania", 'prosports' ),
		    'MT' => __( "Malta", 'prosports' ),
		    'MU' => __( "Mauritius", 'prosports' ),
		    'MV' => __( "Maldives", 'prosports' ),
		    'MW' => __( "Malawi", 'prosports' ),
		    'MX' => __( "Mexico", 'prosports' ),
		    'MY' => __( "Malaysia", 'prosports' ),
		    'MZ' => __( "Mozambique", 'prosports' ),
		    'NA' => __( "Namibia", 'prosports' ),
		    'NB' => __( "Northern Ireland", 'prosports' ),
		    'NE' => __( "Niger", 'prosports' ),
		    'NG' => __( "Nigeria", 'prosports' ),
		    'NI' => __( "Nicaragua", 'prosports' ),
		    'NL' => __( "Netherlands", 'prosports' ),
		    'NO' => __( "Norway", 'prosports' ),
		    'NP' => __( "Nepal", 'prosports' ),
		    'NR' => __( "Nauru", 'prosports' ),
		    'NZ' => __( "New Zealand", 'prosports' ),
		    'OM' => __( "Oman", 'prosports' ),
		    'PA' => __( "Panama", 'prosports' ),
		    'PE' => __( "Peru", 'prosports' ),
		    'PG' => __( "Papua New Guinea", 'prosports' ),
		    'PH' => __( "Philippines", 'prosports' ),
		    'PK' => __( "Pakistan", 'prosports' ),
		    'PL' => __( "Poland", 'prosports' ),
		    'PR' => __( "Puerto Rico", 'prosports' ),
		    'PT' => __( "Portugal", 'prosports' ),
		    'PW' => __( "Palau", 'prosports' ),
		    'PY' => __( "Paraguay", 'prosports' ),
		    'QA' => __( "Qatar", 'prosports' ),
		    'RO' => __( "Romania", 'prosports' ),
		    'RS' => __( "Serbia", 'prosports' ),
		    'RU' => __( "Russia", 'prosports' ),
		    'RW' => __( "Rwanda", 'prosports' ),
		    'SA' => __( "Saudi Arabia", 'prosports' ),
		    'SB' => __( "Solomon Islands", 'prosports' ),
		    'SC' => __( "Seychelles", 'prosports' ),
		    'SD' => __( "Sudan", 'prosports' ),
		    'SE' => __( "Sweden", 'prosports' ),
		    'SF' => __( "Scotland", 'prosports' ),
		    'SG' => __( "Singapore", 'prosports' ),
		    'SI' => __( "Slovenia", 'prosports' ),
		    'SK' => __( "Slovakia", 'prosports' ),
		    'SL' => __( "Sierra Leone", 'prosports' ),
		    'SM' => __( "San Marino", 'prosports' ),
		    'SN' => __( "Senegal", 'prosports' ),
		    'SO' => __( "Somalia", 'prosports' ),
		    'SR' => __( "Suriname", 'prosports' ),
		    'ST' => __( "Sao Tome and Principe", 'prosports' ),
		    'SV' => __( "El Salvador", 'prosports' ),
		    'SZ' => __( "Swaziland", 'prosports' ),
		    'TD' => __( "Chad", 'prosports' ),
		    'TG' => __( "Togo", 'prosports' ),
		    'TH' => __( "Thailand", 'prosports' ),
		    'TJ' => __( "Tajikistan", 'prosports' ),
		    'TL' => __( "East Timor", 'prosports' ),
		    'TM' => __( "Turkmenistan", 'prosports' ),
		    'TN' => __( "Tunisia", 'prosports' ),
		    'TO' => __( "Tonga", 'prosports' ),
		    'TR' => __( "Turkey", 'prosports' ),
		    'TT' => __( "Trinidad and Tobago", 'prosports' ),
		    'TV' => __( "Tuvalu", 'prosports' ),
		    'TW' => __( "Taiwan", 'prosports' ),
		    'TZ' => __( "Tanzania", 'prosports' ),
		    'UA' => __( "Ukraine", 'prosports' ),
		    'UG' => __( "Uganda", 'prosports' ),
		    'US' => __( "United States", 'prosports' ),
		    'UY' => __( "Uruguay", 'prosports' ),
		    'UZ' => __( "Uzbekistan", 'prosports' ),
		    'VA' => __( "Vatican City", 'prosports' ),
		    'VC' => __( "Saint Vincent and the Grenadines", 'prosports' ),
		    'VE' => __( "Venezuela", 'prosports' ),
		    'VN' => __( "Vietnam", 'prosports' ),
		    'VU' => __( "Vanuatu", 'prosports' ),
		    'WL' => __( "Wales", 'prosports' ),
		    'WS' => __( "Samoa", 'prosports' ),
		    'YE' => __( "Yemen", 'prosports' ),
		    'ZA' => __( "South Africa", 'prosports' ),
		    'ZM' => __( "Zambia", 'prosports' ),
		    'ZW' => __( "Zimbabwe", 'prosports' ),
		));

		foreach( $continents as $continent => $codes ):
			$countries = array_intersect_key( $this->countries, array_flip( $codes ) );
			asort( $countries );
			$continents[ $continent ] = $countries;
		endforeach;

		$this->continents = apply_filters( 'prosports_continents', $continents );
	}

	/**
	 * Get the base country.
	 *
	 * @access public
	 * @return string
	 */
	public function get_base_country() {
		$default = esc_attr( get_option('prosports_default_country') );
		$country = ( ( $pos = strrpos( $default, ':' ) ) === false ) ? $default : substr( $default, 0, $pos );

		return apply_filters( 'prosports_countries_base_country', $country );
	}


	/**
	 * Outputs the list of continents and countries for use in dropdown boxes.
	 *
	 * @access public
	 * @param string $selected_country (default: '')
	 * @param bool $escape (default: false)
	 * @return void
	 */
	public function country_dropdown_options( $selected_country = '', $escape = false ) {
		if ( $this->continents ) foreach ( $this->continents as $continent => $countries ):
			?>
				<optgroup label="<?php echo $continent; ?>">
					<?php foreach ( $countries as $code => $country ): ?>
						<option value="<?php echo $code; ?>" <?php selected ( $selected_country, $code ); ?>><?php echo $country; ?></option>
					<?php endforeach; ?>
				</optgroup>
			<?php
		endforeach;
	}
}

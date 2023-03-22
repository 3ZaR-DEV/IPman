<?php

class lookup
{

	private static function get_userAgent()
	{
		return $_SERVER['HTTP_USER_AGENT'];
	}

	public static function get_ip()
	{
		$IP = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$IP = $_SERVER['HTTP_CLIENT_IP'];
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_X_FORWARDED']))
			$IP = $_SERVER['HTTP_X_FORWARDED'];
		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
			$IP = $_SERVER['HTTP_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_FORWARDED']))
			$IP = $_SERVER['HTTP_FORWARDED'];
		else if (isset($_SERVER['REMOTE_ADDR']))
			$IP = $_SERVER['REMOTE_ADDR'];
		else
			$IP = 'UNKNOWN';
		return $IP;
	}

	public static function get_os()
	{

		$user_agent = self::get_userAgent();
		$os_platform = "Unknown OS Platform <i class='bi bi-question-circle-fill text-stone-50 sm:text-[24px] text-[18.5px]'></i>";
		$os_array = array(
			'/windows nt 10/i' => "Windows 10 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 6.3/i' => "Windows 8.1 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 6.2/i' => "Windows 8 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 6.1/i' => "Windows 7 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 6.0/i' => "Windows Vista <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 5.2/i' => "Windows Server 2003/XP x64 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 5.1/i' => "Windows XP <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows xp/i' => "Windows XP <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows nt 5.0/i' => "Windows 2000 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/windows me/i' => "Windows ME <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/win98/i' => "Windows 98 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/win95/i' => "Windows 95 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/win16/i' => "Windows 3.11 <i class='bi bi-microsoft text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/macintosh|mac os x/i' => "Mac OS X <i class='bi bi-apple text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/mac_powerpc/i' => "Mac OS 9 <i class='bi bi-apple text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/linux/i' => "Linux",
			'/ubuntu/i' => "Ubuntu <i class='bi bi-ubuntu text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/iphone/i' => "iPhone <i class='bi bi-apple text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/ipod/i' => "iPod <i class='bi bi-apple text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/ipad/i' => "iPad <i class='bi bi-apple text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/android/i' => "Android <i class='bi bi-android text-stone-50 sm:text-[24px] text-[18.5px]'></i>",
			'/blackberry/i' => "BlackBerry",
			'/webos/i' => "Mobile <i class='bi bi-phone-fill text-stone-50 sm:text-[24px] text-[18.5px]'></i>"
		);

		foreach ($os_array as $regex => $value) {
			if (preg_match($regex, $user_agent)) {
				$os_platform = $value;
			}
		}
		return $os_platform;
	}

	public static function get_browser()
	{

		$user_agent = self::get_userAgent();

		$browser = "Unknown Browser";

		$browser_array = array(
			'/msie/i' => 'Internet Explorer',
			'/Trident/i' => 'Internet Explorer',
			'/firefox/i' => 'Firefox',
			'/safari/i' => 'Safari',
			'/chrome/i' => 'Chrome',
			'/edge/i' => 'Edge',
			'/opera/i' => 'Opera',
			'/netscape/i' => 'Netscape',
			'/maxthon/i' => 'Maxthon',
			'/konqueror/i' => 'Konqueror',
			'/ubrowser/i' => 'UC Browser',
			'/mobile/i' => 'Handheld Browser'
		);

		foreach ($browser_array as $regex => $value) {

			if (preg_match($regex, $user_agent)) {
				$browser = $value;
			}

		}

		return $browser;

	}

	public static function get_device()
	{

		$tablet_browser = 0;
		$mobile_browser = 0;

		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
			$tablet_browser++;
		}

		if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
			$mobile_browser++;
		}

		if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
			$mobile_browser++;
		}

		$mobile_ua = strtolower(substr(self::get_userAgent(), 0, 4));
		$mobile_agents = array(
			'w3c ',
			'acs-',
			'alav',
			'alca',
			'amoi',
			'audi',
			'avan',
			'benq',
			'bird',
			'blac',
			'blaz',
			'brew',
			'cell',
			'cldc',
			'cmd-',
			'dang',
			'doco',
			'eric',
			'hipt',
			'inno',
			'ipaq',
			'java',
			'jigs',
			'kddi',
			'keji',
			'leno',
			'lg-c',
			'lg-d',
			'lg-g',
			'lge-',
			'maui',
			'maxo',
			'midp',
			'mits',
			'mmef',
			'mobi',
			'mot-',
			'moto',
			'mwbp',
			'nec-',
			'newt',
			'noki',
			'palm',
			'pana',
			'pant',
			'phil',
			'play',
			'port',
			'prox',
			'qwap',
			'sage',
			'sams',
			'sany',
			'sch-',
			'sec-',
			'send',
			'seri',
			'sgh-',
			'shar',
			'sie-',
			'siem',
			'smal',
			'smar',
			'sony',
			'sph-',
			'symb',
			't-mo',
			'teli',
			'tim-',
			'tosh',
			'tsm-',
			'upg1',
			'upsi',
			'vk-v',
			'voda',
			'wap-',
			'wapa',
			'wapi',
			'wapp',
			'wapr',
			'webc',
			'winw',
			'winw',
			'xda ',
			'xda-'
		);

		if (in_array($mobile_ua, $mobile_agents)) {
			$mobile_browser++;
		}

		if (strpos(strtolower(self::get_userAgent()), 'opera mini') > 0) {
			$mobile_browser++;
			//Check for tablets on opera mini alternative headers
			$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
			if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
				$tablet_browser++;
			}
		}

		if ($tablet_browser > 0) {
			// do something for tablet devices
			return 'Tablet';
		} else if ($mobile_browser > 0) {
			// do something for mobile devices
			return 'Mobile';
		} else {
			// do something for everything else
			return 'Desktop';
		}
	}

}

/*=========[ API Keys ]=========*/
$IPDATACO_API = 'PUT_YOUR_API_KEY_HERE';
$IPQUALITYSCORE_API = 'PUT_YOUR_API_KEY_HERE';
$BIGDATACLOUD_API = 'PUT_YOUR_API_KEY_HERE';

// for $IPDATACO_API go to ipdata.co . sign up and get your own api key from dashboard . both free/paid plans available .
// for $IPQUALITYSCORE_API go to ipqualityscore.com . sign up and get your own api key from dashboard . both free/paid plans available .
// for $BIGDATACLOUD_API go to bigdatacloud.com . sign up and get your own api key from dashboard . both free/paid plans available . | note : it takes up to 10 min to get api key .
/*=============================*/

/* Default Values */

$PublicIP = lookup::get_ip();
$os = lookup::get_os();
$device = lookup::get_device();
$browser = lookup::get_browser();

/* IP informations by ipwhois's.io API */

$jsonip = file_get_contents("https://ipwho.is/$PublicIP");
$jsonip = json_decode($jsonip, true);
// decode json :
$type = $jsonip['type'];
$continent = $jsonip['continent'];
$continent_code = $jsonip['continent_code'];
$country = $jsonip['country'];
$country_code = $jsonip['country_code'];
$region = $jsonip['region'];
$region_code = $jsonip['region_code'];
$city = $jsonip['city'];
$latitude = $jsonip['latitude'];
$longitude = $jsonip['longitude'];
$postal = $jsonip['postal'];
$call_code = $jsonip['calling_code'];
$capital = $jsonip['capital'];
$borders = $jsonip['borders'];
$img = $jsonip['flag']['img'];
$asn = $jsonip['connection']['asn'];
$isp = $jsonip['connection']['isp'];
$domain = $jsonip['connection']['domain'];
$co = $jsonip['connection']['org'];
$id = $jsonip['timezone']['id'];
$utc = $jsonip['timezone']['utc'];
$ctime = $jsonip['timezone']['current_time'];

/* IP informations by ipinfo.io's API */

$jsonip2 = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$jsonip2 = json_decode($jsonip2, true);
// decode json :
$hostname = $jsonip2['hostname'];
$org = $jsonip2['org'];

/* IP informations by ipdata.co's API */

$jsonip3 = file_get_contents("https://api.ipdata.co/$PublicIP/asn?api-key=$IPDATACO_API");
$jsonip3 = json_decode($jsonip3, true);
// decode json :
$route = $jsonip3['route'];
$astype = $jsonip3['type'];

/* IP informations by ipqualityscore.com's API */

$jsonip4 = file_get_contents("https://ipqualityscore.com/api/json/ip/$IPQALITYSCORE_API/$PublicIP");
$jsonip4 = json_decode($jsonip4, true);
// decode json :
$chvpn = $jsonip4['vpn'];
if ($chvpn == true) {
	$vpn = "true";
} else {
	$vpn = "false";
}
;
$chtor = $jsonip4['tor'];
if ($chtor == true) {
	$tor = "true";
} else {
	$tor = "false";
}
;
$chproxy = $jsonip4['proxy'];
if ($chproxy == true) {
	$proxy = "true";
} else {
	$proxy = "false";
}
;
$chcrawler = $jsonip4['is_crawler'];
if ($chcrawler == true) {
	$crawler = "true";
} else {
	$crawler = "false";
}
;
$chactivevpn = $jsonip4['active_vpn'];
if ($chactivevpn == true) {
	$active_vpn = "true";
} else {
	$active_vpn = "false";
}
;

/* IP informations by bigdatacloud.com's API */

// Fraud Risk :
$jsonip5 = file_get_contents("https://api-bdc.net/data/user-risk?ip=$PublicIP&key=$BIGDATACLOUD_API");
$jsonip5 = json_decode($jsonip5, true);
$risk = $jsonip5['risk'];
// Is Hosting :
$jsonip6 = file_get_contents("https://api-bdc.net/data/hazard-report?ip=$PublicIP&key=$BIGDATACLOUD_API");
$jsonip6 = json_decode($jsonip6, true);
$chHosting = $jsonip6['isHostingAsn'];
if ($chHosting == true) {
	$isHosting = "true";
} else {
	$isHosting = "false";
}
;


?>
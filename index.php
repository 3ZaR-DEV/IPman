<!--
*============[ IPman IP lookup ]============*                     
* Developer     : 3ZaR                      *
* Telegram      : https://t.me/This_is_3ZaR *
* Made History  : 03/20/2023                *
* Version       : 1.0.0                     *
* Last Update   : 03/20/2023                *
*===========================================* 
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/IPman[APP].ico">
    <!-- You can change favicon here -->
    <title>IPman | your ip info</title>
    <!-- Meta Tags START -->
    <meta name="author" content="IPman">
    <meta name='owner' content='https://github.com/3ZaR-DEV'>
    <meta name='copyright' content='3ZaR © 2023'>
    <meta property="og:title" content="IPman | your ip info">
    <meta property="og:site_name" content="IPman ip info provider">
    <meta name='keywords' content='ip, IP, ip info, IPman, ip lookup, ip geolocation, ip geo, internet tools, track ip'>
    <meta property="og:url" content="YOUR_LINK_HERE"> <!-- Final main link of your site -->
    <meta property="og:description" content="IPman - lookup your ip info safe and simple">
    <meta name="description" content="IPman - lookup your ip info safe and simple">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./assets/IPman[THUMBNAIL].jpg">
    <!-- Meta Tags END -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./tailwind.config.js" type="module"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
    ::-webkit-scrollbar {
        width: 7px;
    }

    ::-webkit-scrollbar-track {
        background: #343438;
    }

    ::-webkit-scrollbar-thumb {
        background: #5A5A62;
        border-radius: 4px;
    }

    ::selection {
        color: #FFF;
        background: #682AEB;
    }

    ::-moz-selection {
        color: #FFF;
        background: #682AEB;
    }
    </style>
</head>

<body class="bg-zinc-900 p-4 pb-2 h-full scroll-smooth">

    </div>
    <nav class="flex items-center content-center justify-center">
        <div>
            <img class="h-11 w-auto cursor-pointer" alt="logo" src="./assets/IPman[LOGO].svg"
                oncontextmenu="return false;">
        </div>
    </nav>
    <div class="flex justify-center">
        <div class="flex justify-start flex-col mt-8 font-mono">
            <?php
        require './modules/lookup.php';

        /*=======================================[ Info Section I ]=========================================*/
/* 1 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#6443db] rounded-md'>
                <span class='text-[#6443db] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-ethernet text-[#6443db] sm:text-[24px] text-[18.5px]'></i> IP : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$PublicIP</span> <img class='w-auto h-[20px] mb-[8px] ml-2 sm:mb-[11px] sm:h-[18px]' alt='$country_code' src='$img'> <span class='pl-[7px] pr-[7px] sm:text-[15px] text-[10px] sm:ml-[22px] ml-[14px] sm:mb-3 mb-[13px] rounded-[23px] text-[#8b70ea] bg-[#6543de47] transition-all duration-200 hover:text-[#f5f3fc] hover:bg-[#6540ec] cursor-pointer'>$type</sub></div>";
/* 2 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#6443db] rounded-md mt-[6.5px]'>
                <span class='text-[#6443db] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-plugin text-[#6443db] sm:text-[24px] text-[18.5px]'></i> OS : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$os</span></div>";
/* 3 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#6443db] rounded-md mt-[6.5px]'>
                <span class='text-[#6443db] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-mouse text-[#6443db] sm:text-[24px] text-[18.5px]'></i> Device : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$device</span></div>";
/* 4 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#6443db] rounded-md mt-[6.5px]'> 
                <span class='text-[#6443db] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-browser-safari text-[#6443db] sm:text-[24px] text-[18.5px]'></i> Browser : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$browser</span></div>";

        /*=======================================[ Info Section II ]=======================================*/
/* 5 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#535fff] rounded-md mt-6'>
                <span class='text-[#535fff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-hdd-stack text-[#535fff] sm:text-[24px] text-[18.5px]'></i> HostName : </span>
                    <span class='sm:text-[23px] text-[14.5px] mb-1 text-stone-50 ml-2 font-normal select-all'>$hostname</span></div>";
/* 6 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#535fff] rounded-md mt-[6.5px]'>
                <span class='text-[#535fff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-diagram-3 text-[#535fff] sm:text-[24px] text-[18.5px]'></i> Org : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$org </span></div>";
/* 7 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#535fff] rounded-md mt-[6.5px]'>
                <span class='text-[#535fff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-globe text-[#535fff] sm:text-[24px] text-[18.5px]'></i> ASN : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$asn </span></div>";
/* 8 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#535fff] rounded-md mt-[6.5px]'>
                <span class='text-[#535fff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-router text-[#535fff] sm:text-[24px] text-[18.5px]'></i> Route : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$route </span></div>";
/* 9 */ echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#535fff] rounded-md mt-[6.5px]'>
                <span class='text-[#535fff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-vr text-[#535fff] sm:text-[24px] text-[18.5px]'></i> Type : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$astype </span></div>";
/* 10 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#535fff] rounded-md mt-[6.5px]'>
                <span class='text-[#535fff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-bar-chart-fill text-[#535fff] sm:text-[24px] text-[18.5px]'></i> ISP : </span>
                    <a href='https://www.$domain' target='blank' class='no-underline'><span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal transition-all duration-300 hover:text-sky-500 focus:text-sky-600 select-all'>$isp <sup><i class='bi bi-box-arrow-up-right text-sm text-sky-500'></i></sup></span></a></div>";

        /*=======================================[ Info Section III ]======================================*/
/* 11 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-6'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-globe-americas text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Continent : </span>
                    <span class='sm:text-[24px] text-[18.5px] mb-1 text-stone-50 ml-2 font-normal select-all'>$continent | $continent_code</span></div>";
/* 12 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-map-fill text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Country : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$country</span></div>";
/* 13 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-cursor-fill text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Region : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$region</span></div>";
/* 14 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-houses text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> City : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$city</span></div>";
/* 15 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-caret-up-fill text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Latitude : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$latitude</span></div>";
/* 16 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-caret-down-fill text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Longitude : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$longitude</span></div>";
/* 17 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-mailbox2 text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Postal : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$postal</span></div>";
/* 18 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#00b6ff] rounded-md mt-[6.5px]'>
                <span class='text-[#00b6ff] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-bank2 text-[#00b6ff] sm:text-[24px] text-[18.5px]'></i> Capital : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$capital</span></div>";

        /*======================================[ Info Section IV ]========================================*/
/* 19 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#df1563] rounded-md mt-6'>
                <span class='text-[#df1563] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-clock-fill text-[#df1563] sm:text-[24px] text-[18.5px]'></i> TimeZone : </span>
                    <span class='sm:text-[24px] text-[14.5px] mb-[2.5px] sm:mb-0 text-stone-50 ml-2 font-normal select-all'>$id | $utc</span></div>";
/* 20 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#df1563] rounded-md mt-[6.5px]'>
                <span class='text-[#df1563] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-watch text-[#df1563] sm:text-[24px] text-[18.5px]'></i> CurrentTime : </span>
                    <span class='sm:text-[24px] text-[11px] mb-1 sm:mb-0 text-stone-50 ml-2 font-normal select-all'>$ctime</span></div>";
/* 21 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#df1563] rounded-md mt-[6.5px]'>
                <span class='text-[#df1563] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-telephone-fill text-[#df1563] sm:text-[24px] text-[18.5px]'></i> CallCode : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>+$call_code</span></div>";

        /*======================================[ Info Section V ]=========================================*/
/* 22 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#1bea94] rounded-md mt-6'>
                <span class='text-[#1bea94] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-shield-fill text-[#1bea94] sm:text-[24px] text-[18.5px]'></i> VPN : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$vpn</span></div>";
/* 23*/echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#1bea94] rounded-md mt-[6.5px]'>
                <span class='text-[#1bea94] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-shield-fill-check text-[#1bea94] sm:text-[24px] text-[18.5px]'></i> Active VPN : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$active_vpn</span></div>";
/* 24 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#1bea94] rounded-md mt-[6.5px]'>
                <span class='text-[#1bea94] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-cloud-fill text-[#1bea94] sm:text-[24px] text-[18.5px]'></i> Proxy : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$proxy</span></div>";
/* 25 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#1bea94] rounded-md mt-[6.5px]'>
                <span class='text-[#1bea94] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-incognito text-[#1bea94] sm:text-[24px] text-[18.5px]'></i> TOR : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$tor</span></div>";
/* 26 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#1bea94] rounded-md mt-[6.5px]'>
                <span class='text-[#1bea94] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-outlet text-[#1bea94] sm:text-[24px] text-[18.5px]'></i> Crawler : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$crawler</span></div>";
/* 27 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#1bea94] rounded-md mt-[6.5px]'>
                <span class='text-[#1bea94] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-hdd-network-fill text-[#1bea94] sm:text-[24px] text-[18.5px]'></i> Hosting : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$isHosting</span></div>";

        /*======================================[ Info Section VI ]========================================*/
/* 28 */echo "<div class='flex items-end border-l-[6px] sm:border-l-[4px] border-solid border-[#f7df27] rounded-md mt-6'>
                <span class='text-[#f7df27] sm:text-[24px] text-[18.5px] ml-3.5 subpixel-antialiased font-semibold'><i class='bi bi-cone text-[#f7df27] sm:text-[24px] text-[18.5px]'></i> Risk : </span>
                    <span class='sm:text-[24px] text-[18.5px] text-stone-50 ml-2 font-normal select-all'>$risk</span></div>";
        ?>
        </div>
    </div>
    <nav class="flex flew-row justify-between content-end items-center mt-[58px]">
        <a href="#"><img
                class="w-[88px] transition-all duration-500 grayscale-[0.85] hover:grayscale-0 focus:grayscale-0 cursor-pointer"
                src=" ./assets/IPman[FOOTER].svg" alt="footerLogo" oncontextmenu="return false;"></a>
        <a href="https://github.com/3ZaR-DEV" target="blank"><i
                class="bi bi-github text-[#74739f] text-[32px] transition-all duration-500 hover:text-[#4b3fcd]"></i></a>
    </nav>

</body>

</html>
<?php session_start();
   ?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" class="js-focus-visible" style="--scrollbar-width:15px;"><head>

        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
        <meta property="fb:app_id" content="272234782795210">
        <meta property="og:type" content="article">
                    <meta property="og:image:width" content="1200">
            <meta property="og:image:height" content="630">
                        <meta property="og:title" content="Internshala">
            <meta property="og:image" content="https://internshala.com//static/images/internshala_og_image.jpg">
            <meta property="og:description" content="Internshala is India's no.1 internship and training platform with 40000+ paid internships in Engineering, MBA, media, law, arts, and other streams.">
                    <meta name="twitter:site" content="@Internshala">
                    <meta name="twitter:card" content="summary_large_image">
        
        <meta name="twitter:creator" content="@internshala">
                    <meta name="twitter:image:src" content="https://internshala.com//static/images/internshala_og_image.jpg">
                    <meta name="theme-color" content="#ffffff">
        <meta name="msapplication-navbutton-color" content="#ffffff">
        <meta name="format-detection" content="telephone=no">

        <style>
            table.center {
                margin-left: auto; 
                margin-right: auto;
            }
          </style>
          
                    <link rel="preload" as="font" href="/static/fonts/Inter.woff2?v=3.11" type="font/woff2" crossorigin="">
            <link rel="preload" as="font" href="/static/fonts/internshala-icons.woff2?do9z3e" type="font/woff2" crossorigin="">                            <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5NSPHG"></script><script src="/static/js/includes/common/libraries.2583691470.js" defer=""></script>
                <link rel="stylesheet" href="https://internshala.com//static/cdn/4.4.1/css/bootstrap.min.css">
                        <link rel="icon" href="static/images/logo.jpeg">
            <script type="application/ld+json">
                {
                "@context":"http://schema.org",
                "@type":"Organization",
                "name":"Internshala",
                "url":"https://internshala.com/",
                "sameAs":[
                "https://www.facebook.com/internshala",
                "https://instagram.com/internshala/",
                "https://www.linkedin.com/company/internshala",
                "https://www.youtube.com/channel/UC97qxGRmPsyfV0Miz7AxU2A"
                ]
                }
            </script>
            <script nonce="">
    window.onerror = function (error, url, line, col, fullError) {
        error = fullError || error;
        store_data(error, line);
    };

    function store_data(error, line) {
        error = error.stack || error;
        var url = window.location.href;
        var browser = get_browser();
        var browser_name = browser.name;
        var browser_version = browser.version;
        var browser_ua = browser.user_agent;
        var message = "error=" + error + ". Line:" + line + "&browser=" + browser_name + "&version=" + browser_version + "&url=" + url + "&ua=" + browser_ua;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {

            }
        };
        xhttp.open("POST", "/browser_error/insert_browser_logs", true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(message);
    }

    function get_browser() {
        var ua = navigator.userAgent, tem, M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
            return {name: 'IE', version: (tem[1] || '')};
        }
        if (M[1] === 'Chrome') {
            tem = ua.match(/\bOPR|Edge\/(\d+)/)
            if (tem != null) {
                return {name: 'Opera', version: tem[1]};
            }
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) {
            M.splice(1, 1, tem[1]);
        }
        return {
            name: M[0],
            version: M[1],
            user_agent: ua
        };
    }
</script>
            <script nonce="">
                var os_type = "Linux";
                var browser_name = 'chrome dev';
                var is_android = 0;
                var is_mobile = 0;
                var l_cookie = "5941886";
                var view = "student/dashboard/dashboard";
                var mainRole = "student";
                var to_show_account_activated_message = false;
                var to_show_subscription_activated_message = false;
                var location_autocomplete_min_length = 3;
                var new_design_system = true;
                var fresherJobsMinCtc = 3;
                var show_maintenance_ribbon = false;
                var maintenance_ribbon_message = "";
                var base_url = 'https://internshala.com/';
            </script>
                    <title>Vyavasaathi | My Applications</title>
        <meta name="description" content="Internshala is India's no.1 internship and training platform with 40000+ paid internships in Engineering, MBA, media, law, arts, and other streams.">
        <link href="static/css/student/student.css" rel="stylesheet" type="text/css">
        <link href="static/css/chat/chat.css" rel="stylesheet" type="text/css">
        <script src="/static/js/combined/common_form.1621401671.js" defer="" type="text/javascript"></script>
        <script src="/static/js/chat/websocket.1621591818.js" defer="" type="text/javascript"></script>
        <script src="/static/js/combined/student-dashboard.1621401671.js" defer="" type="text/javascript"></script>
        <script src="/static/js/student/student_common.1621401671.js" defer="" type="text/javascript"></script>
                            <script nonce="">
        var isMobile = '0';
    </script>
    <!-- Google Tag Manager -->
<script nonce="">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5NSPHG');</script>
<!-- End Google Tag Manager -->

<script nonce="">
//    window.addEventListener('load', function() {
//        store_session_data();
//    });

//    window.addEventListener('DOMContentLoaded', function() {
//        store_session_data();
//    });

    var pdcVersion = "1";
    var toMakeInitialRequest = 0;
    if (toMakeInitialRequest == 1) {
        store_session_data();
    } else  {
        store_pagespeed_session_data();
    }

    function store_session_data() {
        var message = "device=" + getDeviceType();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                //Success
                var responseText = this.responseText;
                try {
                    data = JSON.parse(responseText);
                    if (data.success) {
                        if(data.toMakeUpdateRequest) {
                            update_session_data();
                        }
                    } else {
                        //TODO
                    }
                } catch (e) {
                    throw_error(e);
                }
            }
        };

        xhttp.open("POST", "/info/storeData", true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(message);
    }

    function store_pagespeed_session_data() {
        if (view === 'campaign_generic/index') return;
        var message = "device=" + getDeviceType();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                //Success
                var responseText = this.responseText;
                try {
                    data = JSON.parse(responseText);
                    if (data.success) {
                    } else {
                        //TODO
                    }
                } catch (e) {
                    throw_error(e);
                }
            }
        };

        xhttp.open("POST", "/info/storePageSpeedData", true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(message);
    }

    function update_session_data() {
        var message = "";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                //Success
            }
        };

        xhttp.open("POST", "/info/updateDeviceCookieDomain", true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(message);
    }

    function getDeviceType() {
        var device;
        if (typeof isMobile !== 'undefined') {
            if (isMobile === '1') {
                device = "mobile";
            } else {
                device = "desktop";
            }
        } else {
            device = "NA";
        }

        return device;
    }

</script>
            <script nonce="">

                    var websocketUri = "wss:\/\/internshala.com\/chat\/pushpin_endpoint";
                    var online_time_margin_in_seconds = 60;
                    var to_use_websocket_only_on_chat = false;
                </script>
    <style></style><script async="" src="https://negbar.ad-blocker.org/chrome/adblocker-chromeglobalinjectjs.js"></script><script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>
    <body data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="" class="vsc-initialized">
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NSPHG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->            <div id="wrapper" style="min-height: 1409px;">
                <!-- ribbon -->
<div id="error" class="notification">
</div>

<div id="general_notification" class="notification notification_general" style="display: none">
</div>

<!-- modal - error message -->
<div id="error_modal" class="modal fade in internshala-modal" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="image_container error_image">
                    <img src="/static/images/common/modal_error.svg">
                </div>
                <div class="message_container">
                    <div class="text-heading heading_4_5 small-device-text-center"></div>
                    <div class="text-message body-main small-device-text-center"></div>
                    <div class="button_container">
                        <a class="btn btn-primary modal_primary_btn close_action" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal - success message -->
<div id="success_modal" class="modal fade in internshala-modal" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="image_container success_image">
                    <img src="/static/images/common/modal_success.svg">
                </div>
                <div class="message_container">
                    <div class="text-heading heading_4_5 small-device-text-center"></div>
                    <div class="text-message body-main small-device-text-center"></div>
                    <div class="button_container">
                        <button class="btn btn-secondary modal_secondary_btn close_action" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary modal_primary_btn close_action" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal - success message -->
<div id="success_modal_dual_button" class="modal fade in internshala-modal" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="image_container success_image">
                    <img src="/static/images/common/modal_success.svg">
                </div>
                <div class="message_container">
                    <div class="text-heading heading_4_5 small-device-text-center"></div>
                    <div class="text-message body-main small-device-text-center"></div>
                    <div class="button_container">
                        <a class="btn btn-secondary modal_secondary_btn close_action" data-dismiss="modal">Close</a>
                        <a class="btn btn-primary modal_primary_btn close_action" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal - alert message -->
<div id="alert_modal" class="modal fade in internshala-modal" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="image_container alert_image">
                    <img src="/static/images/common/modal_alert.svg">
                </div>
                <div class="message_container">
                    <div class="text-heading heading_4_5 small-device-text-center"></div>
                    <div class="text-message body-main small-device-text-center"></div>
                    <div class="button_container">
                        <a class="btn btn-primary modal_primary_btn close_action" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- confirmation modal-->
<div id="confirmation_modal" class="modal fade in internshala-modal confirmation_modal" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="message_container">
                    <div class="text-heading heading_4_5"></div>
                    <div class="text-message body-main"></div>
                    <div class="button_container">
                        <button class="btn btn-secondary modal_secondary_btn close_action" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary modal_primary_btn yes-button close_action" data-dismiss="modal">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="loading_image" style="display: none;">
</div>

<div class="nav_dropdown_backdrop">
</div>

    <noscript>
    <div class="notification notification_js_disabled" style="display: block;">
        Oops, your browser does not support Javascript. Please use Internshala in another browser.
    </div>
    </noscript>
    
<div class="toast internshala-toast loading_toast" id="loading_toast" style="display: block; opacity: 0; top: -46px;">
    <div class="toast-body-container">
        <div class="toast-body heading_6_6">
            Loading, please wait...
        </div>
    </div>
</div>

<div class="toast internshala-toast general_toast" style="display: none;">
    <div class="toast-body-container">
        <div class="toast-body heading_6_6">
        </div>
    </div>
</div>

<div class="toast internshala-toast error_toast" style="display: none;">
    <div class="toast-body-container">
        <div class="toast-body heading_6_6">
        </div>
    </div>
</div>

<div class="toast internshala-toast black_bottom_toast" style="display: none;">
    <div class="toast-body-container">
        <div class="toast-body body-main">
        </div>
    </div>
</div>

<div class="popover_overlay">
</div>


<div class="chat_notification_loading_image" style="display: none;">
</div>

<!-- Login modal - error message for employers blocked -->
<div id="employer_blocked_error_modal" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="heading">
                    Your account is put on hold.<i style="cursor: pointer;float:right" id="close_modal" data-dismiss="modal" aria-hidden="true" class="ic-24-cross"></i>
                </div>
                <div class="heading1">
                    Your account is put on hold.<i style="cursor: pointer;float:right" id="close_modal1" data-dismiss="modal" aria-hidden="true" class="ic-24-cross"></i>
                </div>
                <div class="main_content">
                    
                    <div class="line1"></div>
                    <div class="sub_heading">
                        What happened?
                    </div>
                    <div>
                        We have determined that this account is violation of Internshala's <span class="primary_color"><a href="https://internshala.com/terms">rules</a></span>.
                    </div>
                    <div class="content_specially_for">
                        Specifically for,
                    </div>
                    <div class="error_heading" id="heading_content1"></div>
                    <div class="error_content_1" id="error_content1"></div>
                    <div class="error_heading" id="heading_content2"></div>
                    <div class="error_content_1" id="error_content2"></div>
                    <div class="error_content_2">
                        If you wish to appeal this, or seek further clarification, please contact our team at <span class="primary_color"><a href="mailto:complaints@internshala.com">complaints@internshala.com</a></span>
                    </div>
                    <div class="line2"></div>
                    <div class="icon_container">
                        <i class="ic-24-alert-circle"></i>
                        <div class="icon_content">
                            If this has happened by mistake, it will automatically be reverted within 24 hours.
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
<div id="header" class="header_container container-fluid">
    <div class="max-width-container">

        
<div class="layer"></div>
<div id="mySidenav" class="sidenav" style="">
    <div class="ham_menu_items profile_container">
    <div class="profile_icon">P</div>
    <div class="profile_details">
        <div id="profile_name">Piyush Goyal</div>
        <div id="profile_email">piyushgoyaliit@gmail.com</div>
    </div>
</div>
            <div class="ham_menu_items rating_ham_container">
                <a href="/rating">
                    <i class="rating_star_icon ic-16-filled-star"></i>
                    <span style="margin-right: 14px">3.7</span>
                    <span>Know More</span>
                    <span class="pull-right ic-16-chevron-right"></span>
                </a>
            </div>
                    <div class="ham_menu_items_container student">
                        
                     

                <div class="ham_menu_items without_link">
                    <div class="ham_submenu_items">
                        <div class="ham_inner_menu_items">
                            <div class="ham_inner_title"><a href="./">Logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<nav class="navbar navbar-expand-md">
    <div class="brand_container">
    <img id="hamburger_menu_key" src="/static/images/icons/hamburger-menu-key-new.svg">
            <span class="offer_hamburger_dot" id="offer_hamburger_dot"></span>
        <a class="navbar-brand" href="/">
        <img src="static/images/logo.jpeg">
    </a>
</div>    <div class="navbar_header_for_chat navbar_mobile" id="main-navbar-header">
        <div class="mobile_header_icon_container">
            <div class="bookmark_icon_mobile">
                <a href="/bookmark">
                    <span class="header_bookmark">
                        <i class="ic-24-bookmark"></i>
                    </span>
                </a>
            </div>
                            <a href="/chat">
                    <div class="header_chat_notification link">
                        <span class="header_chat_notification_unread_count" style="display:none">
                            <span class="notification-label">0</span>
                        </span>
                    </div>
                </a>
                        </div>
    </div>
    <div class="collapse navbar-collapse navbar_desktop">
        <ul class="navbar-nav nav_menu_container">
            <li class="nav-item internship_container_hover dropdown dropdown-hover dropdown_backdrop">
    <a class="nav-link dropdown-toggle" href="./apply.php" id="internships_new_superscript">Apply for Roles
        <i class="is_icon_header ic-24-filled-down-arrow"></i>
    </a>

    <a class="nav-link dropdown-toggle" href="./myapp.php" id="internships_new_superscript">My Applications
        <i class="is_icon_header ic-24-filled-down-arrow"></i>
    </a>

</li>

<style>
        #header .navbar .dropdown-menu#trainings-dropdown .dropdown-inner-container {
            grid-template-areas:
                "a1 a2 a3 a4"
                "a1 a5 a6 a7"
                "a8 a9 a10 a7";
        }
        </style>
<li class="nav-item"><a class="nav-link" href=".">Logout</a></li>
            <li class="nav-item chat_icon_container">
                <a href="/bookmark">
                    <span class="header_bookmark link">
                        <i class="ic-24-bookmark"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item chat_icon_container">
                                    <a href="/chat">
                        <div class="header_chat_notification link">
                            <span class="header_chat_notification_unread_count" style="display:none">
                                <span class="notification-label">0</span>
                            </span>
                        </div>
                    </a>
                                </li>
            <li class="nav-item dropdown dropdown-hover profile_container_hover">
    <a class="nav-link dropdown-toggle profile_container">
        <i class="is_icon_header ic-24-filled-down-arrow"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-center menu_dropdown" id="profile-dropdown">
        <div class="dropdown-inner">
            <div class="dropdown-inner-container">
                <div class="inner-dropdown">
                    <ul class="dropdown-menu-part profile-dropdown">
                        <li class="profile_container">
                            <div class="profile_name">Piyush Goyal</div>
                            <div class="profile_email">piyushgoyaliit@gmail.com</div>
                        </li>
                                                    <li class="rating_nav">
                                <a href="/rating" style="position:relative">
                                    <div class="rating">
                                        <i class="rating_star_icon ic-16-filled-star"></i>
                                        <span style="margin-right: 20px">3.7</span>
                                    </div>
                                    <div class="rating_text">
                                        <span>Know More</span>
                                        <i class="ic-24-chevron-right"></i>
                                    </div>
                                </a>
                            </li>
                            <div class="profile_options">
                                <li>
                                    <a href="/student/dashboard?referral=header">My Applications</a>
                                </li>
                                <li>
                                    <a href="/student/interstitial">Edit Resume</a>
                                </li>
                                <li>
                                    <a href="/user_preference/preferences?referral=search">Edit Preferences</a>
                                </li>
                                <li>
                                    <a href="/safety_tips">Safety Tips</a>
                                </li>
                                <li>
                                    <a href="/student/help_center">Help Center</a>
                                </li>
                                <li>
                                    <a class="dropdown-click">
                                        More <i class=" ic-24-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-submenu_1">
                                        <li class="manage_account">
                                            <a class="dropdown-click">
                                                Manage Account
                                                <i class=" ic-24-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-submenu_2">
                                                <li>
                                                    <a href="/login/update_password">Change Password</a>
                                                </li>
                                                <li>
                                                    <a href="/student/change_email">Change Email
                                                        Address</a>
                                                </li>
                                                <li>
                                                    <a href="/delete_account">Delete My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=".">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                                            </ul>
                </div>
            </div>
        </div>
    </div>
</li>
        </ul>
    </div>
</nav>


<div style="position: absolute; left:0px; top:0px; height: 0px; width: 0px;">
    <img src="/static/images/chat/message_new_hover.svg" height="0px" width="0px" alt="">
</div>
<script nonce="">
    var studentChatEducationPopoverType = 0;
    var conversationCount = 0;
    var toShowEducation = 1;
    var student_id = 4967605;
    conversationCount = 38;
</script>
    </div>
</div>

<div class="container-fluid" id="content" style="padding-bottom: 346px;">
    <div id="dashboard-notification-container">
    </div>
    <div id="dashboard-fraud-notification-container">
            </div>
    <div class="max-width-container">
                    <div class="view_recent_dashboard_button">
                                    <i class="ic-24-arrow-left"></i>
                            </div>
                <div class="heading heading_2_3 main_heading ">My Applications</div>
        
<div class="table-responsive" style="overflow: visible;">
    <table class="center" id="application-table">
        <thead>
        <tr>
            <th class="table-heading company_heading">Company</th>
            <th class="table-heading profile_heading">Profile</th>
            <th class="table-heading employment_type_heading">Employment Type</th>
            <th class="table-heading applied_on_heading">Applied On</th>
            <th class="table-heading app_count_heading">Number of Applicants</th>
            <th class="table-heading app_status_heading">Application status</th>
        </tr>
        </thead>
        <tbody id="applications_tbody">
    <tr id="61556965">
        <td style="overflow: hidden;" class="company">
            <div class="flex-row">
                <div class="company_name">Ridobiko Solutions Private Limited</div>
                <div style="overflow: hidden;" class="employment_type_tab">Internship</div>
            </div>
        </td>
        <td class="profile" style="overflow: hidden">
            <div class="flex-row">
                <div class="">Mobile App Development </div>
                <a class="profile_link" href="/internship/detail/mobile-app-development-part-time-job-internship-at-gurgaon-in-ridobiko-solutions-private-limited1611198551" target="_blank"><i class="ic-16-external-link"></i> </a>
            </div>
        </td>
        <td style="overflow: hidden;" class="employment_type hide_in_mobile">Internship</td>

        <td class="app_status_mobile_row hide_in_desktop">
            <div class="app_status flex-row">
                <div class="badge badge-pill not-selected">
                    Selected                </div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
            <div class="flex-row count_applied_container">
                <div class="applicants_count flex-row">
                    <i class="ic-16-profiles"></i>
                    <span>40 Applicants </span>
                </div>
                <div class="applied_on flex-row">
                    <i class="ic-16-calendar"></i>
                    <span>Applied on 25 Feb' 21</span>
                </div>
            </div>
            <div class="employment_type">
                <div class="employment_type_tab">Internship</div>
            </div>
        </td>

        <td class="certificate_review_row hide_in_desktop flex-row">
                        <a class="flex-row review_application" href="/application/view/61556965?referral=dashboard">
                <i class="ic-16-file-text"></i>
                <span>Review application</span>
            </a>
        </td>

        <td class="applied_on hide_in_mobile">25 Feb' 21</td>
        <td class="applicants_count hide_in_mobile">40</td>
        <td class="app_status hide_in_mobile">
            <div class="flex-row">
                <div class="badge badge-pill not-selected">Selected</div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
                    </td>

        <td class="review_heading hide_in_mobile"> <a href="/application/view/61556965?referral=dashboard"><i class="ic-24-file-text"></i></a></td>
    </tr>
    
    <tr id="61068399">
        <td style="overflow: hidden;" class="company">
            <div class="flex-row">
                <div class="company_name">WAMessages</div>
                <div style="overflow: hidden;" class="employment_type_tab">Internship</div>
            </div>
        </td>
        <td class="profile" style="overflow: hidden">
            <div class="flex-row">
                <div class="">Web Development </div>
                <a class="profile_link" href="/internship/detail/web-development-work-from-home-job-internship-at-wamessages1610870377" target="_blank"><i class="ic-16-external-link"></i> </a>
            </div>
        </td>
        <td style="overflow: hidden;" class="employment_type hide_in_mobile">Full Time</td>

        <td class="app_status_mobile_row hide_in_desktop">
            <div class="app_status flex-row">
                <div class="badge badge-pill not-selected">
                    In Review                </div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
            <div class="flex-row count_applied_container">
                <div class="applicants_count flex-row">
                    <i class="ic-16-profiles"></i>
                    <span>117 Applicants </span>
                </div>
                <div class="applied_on flex-row">
                    <i class="ic-16-calendar"></i>
                    <span>Applied on 18 April' 21</span>
                </div>
            </div>
            <div class="employment_type">
                <div class="employment_type_tab">Full Time</div>
            </div>
        </td>

        <td class="certificate_review_row hide_in_desktop flex-row">
                        <a class="flex-row review_application" href="/application/view/61068399?referral=dashboard">
                <i class="ic-16-file-text"></i>
                <span>Review application</span>
            </a>
        </td>

        <td class="applied_on hide_in_mobile">18 April' 21</td>
        <td class="applicants_count hide_in_mobile">117</td>
        <td class="app_status hide_in_mobile">
            <div class="flex-row">
                <div class="badge badge-pill not-selected">In Review</div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
                    </td>

        <td class="review_heading hide_in_mobile"> <a href="/application/view/61068399?referral=dashboard"><i class="ic-24-file-text"></i></a></td>
    </tr>
    
    <tr id="61061042">
        <td style="overflow: hidden;" class="company">
            <div class="flex-row">
                <div class="company_name">Auris Advisory</div>
                <div style="overflow: hidden;" class="employment_type_tab">Internship</div>
            </div>
        </td>
        <td class="profile" style="overflow: hidden">
            <div class="flex-row">
                <div class="">Machine Learning  </div>
                <a class="profile_link" href="/internship/detail/mobile-app-development-work-from-home-job-internship-at-auris-advisory1610882104" target="_blank"><i class="ic-16-external-link"></i> </a>
            </div>
        </td>
        <td style="overflow: hidden;" class="employment_type hide_in_mobile">Internship</td>

        <td class="app_status_mobile_row hide_in_desktop">
            <div class="app_status flex-row">
                <div class="badge badge-pill not-selected">
                    Not selected                </div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
            <div class="flex-row count_applied_container">
                <div class="applicants_count flex-row">
                    <i class="ic-16-profiles"></i>
                    <span>48 Applicants </span>
                </div>
                <div class="applied_on flex-row">
                    <i class="ic-16-calendar"></i>
                    <span>Applied on 18 Feb' 21</span>
                </div>
            </div>
            <div class="employment_type">
                <div class="employment_type_tab">Internship</div>
            </div>
        </td>

        <td class="certificate_review_row hide_in_desktop flex-row">
                        <a class="flex-row review_application" href="/application/view/61061042?referral=dashboard">
                <i class="ic-16-file-text"></i>
                <span>Review application</span>
            </a>
        </td>

        <td class="applied_on hide_in_mobile">18 Feb' 21</td>
        <td class="applicants_count hide_in_mobile">48</td>
        <td class="app_status hide_in_mobile">
            <div class="flex-row">
                <div class="badge badge-pill not-selected">Not selected</div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
                    </td>

        <td class="review_heading hide_in_mobile"> <a href="/application/view/61061042?referral=dashboard"><i class="ic-24-file-text"></i></a></td>
    </tr>
    
    <tr id="43347751">
        <td style="overflow: hidden;" class="company">
            <div class="flex-row">
                <div class="company_name">Boosters Edutech Private Limited</div>
                <div style="overflow: hidden;" class="employment_type_tab">Internship</div>
            </div>
        </td>
        <td class="profile" style="overflow: hidden">
            <div class="flex-row">
                <div class="">Mobile App Development </div>
                <a class="profile_link" href="/internship/detail/mobile-app-development-work-from-home-job-internship-at-boosters-edutech-private-limited1592547063" target="_blank"><i class="ic-16-external-link"></i> </a>
            </div>
        </td>
        <td style="overflow: hidden;" class="employment_type hide_in_mobile">Internship</td>

        <td class="app_status_mobile_row hide_in_desktop">
            <div class="app_status flex-row">
                <div class="badge badge-pill not-selected">
                    Not selected                </div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
            <div class="flex-row count_applied_container">
                <div class="applicants_count flex-row">
                    <i class="ic-16-profiles"></i>
                    <span>99 Applicants </span>
                </div>
                <div class="applied_on flex-row">
                    <i class="ic-16-calendar"></i>
                    <span>Applied on 20 Jun' 20</span>
                </div>
            </div>
            <div class="employment_type">
                <div class="employment_type_tab">Internship</div>
            </div>
        </td>

        <td class="certificate_review_row hide_in_desktop flex-row">
                        <a class="flex-row review_application" href="/application/view/43347751?referral=dashboard">
                <i class="ic-16-file-text"></i>
                <span>Review application</span>
            </a>
        </td>

        <td class="applied_on hide_in_mobile">20 Jun' 20</td>
        <td class="applicants_count hide_in_mobile">99</td>
        <td class="app_status hide_in_mobile">
            <div class="flex-row">
                <div class="badge badge-pill not-selected">Not selected</div>
                                    <i class="open_popover app_tooltip ic-16-help-circle" aria-hidden="true" popover_content="We are sorry you did not make it. Don't lose hope - make sure <a href='resume?detail_source=resume_direct'>your resume</a> is up to date and apply to more internships."></i>
                                </div>
                    </td>

        <td class="review_heading hide_in_mobile"> <a href="/application/view/43347751?referral=dashboard"><i class="ic-24-file-text"></i></a></td>
    </tr>

    </tbody>
    </table>

</div>
    </div>
</div>

<script nonce="">
    var phone_number = "9354556594";
    var email = "piyushgoyaliit@gmail.com";
    var to_show_notification_modal = "0";
    var is_old_applications_dashboard = "1";
    var to_load_ajax = "1";
    var old_applications_education_content = ""
</script>

<div id="footer" class="generic_footer">
    <div class="container-fluid">
    </div>
</div>
<script nonce="">var big_brand = 'no';</script>            </div>
            <script nonce="">
    /* <![CDATA[ */
    var google_conversion_id = 981478532;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>

<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>

<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/981478532/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
    

    <script nonce="">
        if (new_design_system) {
            setTimeout(function () {
                var loading_toast = document.getElementById("loading_toast");
                if (typeof loading_toast !== 'undefined' && loading_toast) {
                    loading_toast.style.display = "block";
                }
            }, 2000);
        }
    </script>

</body></html>
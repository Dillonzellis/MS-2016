<!DOCTYPE html>
<?php $page_id = 'index.php'; ?>
<?php include 'assets/framework/page_info.php'; ?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->


<head>

    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>Mutual Savings Credit Union | <?php echo $page_title; ?></title>

    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="keywords" content="<?php echo $page_keywords; ?>" />
    <meta name="author" content="<?php echo $page_author; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
        <script src="/assets/js/libs/html5shiv.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="/assets/css/reset.css" />
    <link rel="stylesheet" href="/assets/css/base.css" />
    <link rel="stylesheet" href="/assets/css/grid.css" />
    <link rel="stylesheet" href="/assets/css/normalize.css" />
    <link rel="stylesheet" href="/assets/css/boilerPlate.css" />
    <link rel="stylesheet" href="/assets/css/global.css" />
    <link rel="stylesheet" href="/assets/css/smoothness/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/assets/css/mscu.css" />
    <link rel="stylesheet" href="/assets/css/mobile.css" />
    <link rel="stylesheet" href="/assets/css/mobileBlueNav.css" />
    <script src="https://use.fontawesome.com/dce4886cea.js"></script>
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    <!-- SCRIPTS -->
    <script language="JavaScript" src="https://seal.networksolutions.com/siteseal/javascript/siteseal.js" type="text/javascript"></script>
    <script src="/assets/js/libs/modernizr-2.6.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/assets/js/jquery.validate.js"> </script>
    <script src="/assets/js/jquery.validate.unobtrusive.js"> </script>
    <script src="/assets/js/jquery.unobtrusive-ajax.js"> </script>
    <script src="/assets/js/libs/jquery.form.min.js"></script>
    <script src="/assets/js/jquery.maskedinput.js"></script>
    <script src="/assets/js/common.js"> </script>
    <script src="/assets/js/libs/modal.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script type="text/javascript" src="/assets/js/libs/jquery.cookie.js"></script>
    <script type="text/javascript" src="/assets/js/signIn.js"></script>
    <script src="/assets/js/analytics.js"></script>
    <script src="/assets/js/mscu.js"></script>
    <script src="/assets/js/application.js"></script>
    <script>
        $(function() {
            $('#logo_mobile').attr('src', '/assets/images/logos/mscu_logo_mobile.png');
        });
    </script>

    <script type="text/javascript">
        function postLink(link) {
            var f = document.createElement("form");
            f.method = 'post';
            f.action = link;
            document.body.appendChild(f);
            f.submit();
        }
    </script>

    <script type="text/javascript">
        //Closes the sign in after a set amount of time
        $(function() {
            if ($('body').attr('id') == 'Home') {
                //Start with the mobile sign in open
                var accoutSignInMobile = $('#accoutSignInMobile');
                accoutSignInMobile.find('.accoutSignInWrap, .accountSignInDropDown').addClass('active');
                //Change this time to increase or decrease 
                //the time it takes before closing the sign in
                var timerAmount = 5000;
                var closeSignInTimer = setTimeout(function() {
                    accoutSignInMobile.find('.accountSignInDropDown').slideUp(function() {
                        $(this).removeClass('active');
                    });
                }, timerAmount);

                $('.accountSignInDropDown input').focus(function() {
                    //alert($(this).attr('data-validation-message'));
                    clearInterval(closeSignInTimer);
                });
                $('.accountLogin').click(function() {
                    clearInterval(closeSignInTimer);
                });
            }
        });
    </script>

    <script>
        //CONTROLS THE SUBMENU DROPDOWN, FADE, ETC... DO NOT DELETE
        $(document).ready(function(e) {
            $(".CustomSubmenu").hide();

            $("nav ul.customNav li").hover(function() {
                    $(".CustomSubmenu", this).fadeIn(300);
                },

                function() {
                    $(".CustomSubmenu", this).fadeOut(300);
                }

            );

        });
    </script>

    <script type="text/javascript">
        var ctaSliderArray = [{
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "https://www.mutualsavingscu.org/forms/summertime-loan-application.pdf",
                "messageLinkText": "",
                "ctaCopy": "Summertime Loan<br/>",
                "ctaSlideImage": "/assets/images/slider/2020/summertime.png"
            },

            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "https://www.mutualsavingscu.org/assets/framework/message/coop.php",
                "messageLinkText": "",
                "ctaCopy": "Branch & ATM Locator<br/>",
                "ctaSlideImage": "/assets/images/slider/2020/branch-locator2.png"
            },

            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "/assets/framework/pages/covid19-updates.php",
                "messageLinkText": "",
                "ctaCopy": "Office Availability<br/>",
                "ctaSlideImage": "/assets/images/slider/2020/coronavirus5.png"
            },

            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "/assets/framework/pages/securlock.php",
                "messageLinkText": "",
                "ctaCopy": "SecurLOCK<br/>",
                "ctaSlideImage": "/assets/images/slider/2020/securlock.png"
            },




            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "/assets/framework/pages/cu-auto-search.php",
                "messageLinkText": "",
                "ctaCopy": "CU Auto Search<br/>",
                "ctaSlideImage": "/assets/images/slider/2018/cuautosearch.png"
            },





            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "/assets/framework/pages/credit-cards.php",
                "messageLinkText": "",
                "ctaCopy": "VISA Credit Card<br/>",
                "ctaSlideImage": "/assets/images/slider/credit-card.jpg"
            },
            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "/assets/framework/pages/auto-loans.php",
                "messageLinkText": "",
                "ctaCopy": "Buying a Car<br/>",
                "ctaSlideImage": "/assets/images/slider/car-buying1.jpg"
            },
            {
                "messageTitle": "",
                "messageCopy": "",
                "messageLinkUrl": "/assets/framework/message/mortgage.php",
                "messageLinkText": "",
                "ctaCopy": "Mortgages<br/>",
                "ctaSlideImage": "/assets/images/slider/mortgages.jpg"
            }

        ];
    </script>

    <script src="/assets/js/ctaSliderV2.js"></script>

</head>

<div style="background-color: #E2F000; margin-top:41px">
    <p style="color:#1D1D1D; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 20px; padding:10px" align="center" class="siteWidth">UPDATE: Starting July 5 2022, the branch located in the 10 Peachtree building will be open Tuesdays and Thursdays from 9am to 4:30pm with no appointment needed and will be open on Mondays by appointment only from 9am to 4:30pm until further notice. During branch open hours, the branch will close for lunch daily between 12:30pm and 1:30pm.
    </p>
</div>


<body id="Home">

    <div id="mobileNav">
        <div class="headerSearch">
            <form method="GET" action="/search">
                <div class="searchWrap">
                    <input type="text" name="query" placeholder='Search' title="Search Field on Home Page" />
                    <input id="searchBtn" name="submit" type="submit" title="Search Submit Button" />
                </div>
            </form>
        </div>



        <ul class="top-menu">
            <li><a href="/index.php">Home</a></li>
            <li><a href="https://www.mutualsavingscu.org/assets/framework/pages/atm-networks.php">ATM Locator</a></li>
            <li><a href="https://www.mutualsavingscu.org/message1/creditunion-net.html" class="newPageLink">Branch Locator</a></li>
            <li><a href="/assets/framework/pages/contact.php">Contact</a></li>
        </ul>



        <nav>
            <div class="nav_greenline"></div>

            <ul class="siteWidth">

                <li><a href="" class=''>Home</a> </li>


                <li><a href="/assets/framework/pages/savings.php" class=''>Savings<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/share-rates.php">Share Rates</a></li>
                        <li><a href="/assets/framework/pages/savings-accounts.php">Savings Accounts</a></li>
                        <li><a href="/assets/framework/pages/savings-certificates.php">Savings Certificates</a></li>
                        <li><a href="/assets/framework/pages/money-market-accounts.php">Money Market Accounts</a></li>
                        <li><a href="/assets/framework/pages/assets/framework/pages/club-accounts.php">Club Accounts</a></li>
                        <li><a href="/assets/framework/pages/ira.php">IRAs</a></li>
                        <li><a href="/assets/framework/pages/direct-deposit.php">Direct Deposit</a></li>
                        <li><a href="/assets/framework/pages/payroll-deduction.php">Payroll Deduction</a></li>
                        <li><a href="/assets/framework/pages/fee-schedule.php">Fee Schedule</a></li>
                        <li><a href="/assets/framework/pages/federal-insurance.php">Federal Insurance</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/checking.php" class=''>Checking<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/checking-accounts.php">Checking Accounts</a></li>
                        <li><a href="/assets/framework/pages/checkcard.php">VISA &reg; Debit Cards</a></li>
                        <li><a href="/assets/framework/pages/fees.php">Fee Schedule</a></li>
                        <li><a href="/assets/framework/pages/directdeposit.php">Direct Deposit</a></li>
                        <li><a href="/assets/framework/pages/payroll.php">Payroll Deduction</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/deluxe.html" class="newPageLink">Check Ordering</a></li>
                        <li><a href="">Stop Payment Form</a></li>
                        <li><a href="/assets/framework/pages/overdraft.php">Overdraft Protection</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Report Lost or Stolen Card</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/loans.php" class=''>Loans<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/auto-loan-promotion.php">Auto Loan Promotion</a></li>
                        <li><a href="/assets/framework/pages/auto-loans.php">Auto Loans</a></li>
                        <li><a href="/assets/framework/pages/credit-cards.php">Credit Cards</a></li>
                        <li><a href="/assets/framework/pages/home-equity-loans.php">Home Equity Loans</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/mortgage.html" class="newPageLink">Mortgage Loans</a></li>
                        <li><a href="/assets/framework/pages/personal-loans.php">Personal Loans</a></li>
                        <li><a href="/assets/framework/pages/share-secured-loans.php">Share Secured Loans</a></li>
                        <li><a href="/assets/framework/pages/payment-protection.php">Payment Protection</a></li>
                        <li><a href="/assets/framework/pages/mbi-insurance.php">MBI/Insurance</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/ezcardinfo.html">Credit Card Account Info</a></li>
                        <li><a href="/assets/framework/pages/financial-calculators.php">Financial Calculators</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/services.php" class=''>Services<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/home-banking.php">Online Banking</a></li>
                        <li><a href="/assets/framework/pages/online-bill-pay.php">Online Bill Pay</a></li>
                        <li><a href="/assets/framework/pages/mobile-banking-app.php">Mobile Banking App</a></li>
                        <li><a href="/assets/framework/pages/mobile-check-deposit.php">Mobile Check Deposit</a></li>
                        <li><a href="/assets/framework/message/coop.php" class="newPageLink">Shared Branch Locator</a></li>
                        <li><a href="/assets/framework/pages/atm-networks.php">ATM Locator</a></li>
                        <li><a href="/assets/framework/pages/all-time-teller-audio-response.php">All Time Teller Audio Response</a></li>
                        <li><a href="/assets/framework/pages/identity-theft-information.php">Identity Theft Information</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/deluxe.html" class="newPageLink">Check Ordering</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/ezcardinfo.html">Credit Card Account Info</a></li>
                        <li><a href="/assets/framework/pages/payment-protection.php">Payment Protection</a></li>
                        <li><a href="/assets/framework/pages/financial-calculators.php">Financial Calculators</a></li>
                        <li><a href="/assets/framework/pages/fee-schedule.php">Fee Schedule</a></li>
                        <li><a href="/assets/framework/pages/resources-links.php">Resources & Links</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/about-us.php" class=''>About Us<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/who-we-are.php">Who We Are</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Locations</a></li>
                        <li><a href="/assets/framework/pages/who-can-join.php">Who Can Join?</a></li>
                        <li><a href="/assets/framework/pages/howtojoin.php">How to Join</a></li>
                        <li><a href="/assets/framework/pages/forms/membership.pdf">Membership Application</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Contact Us</a></li>
                        <li><a href="/assets/framework/pages/privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="/assets/framework/pdf/RegulationCC.pdf" target="_blank">Funds Availability Policy</a></li>
                        <li><a href="/assets/framework/pages/dormant-account-status-notice.php">Dormant Account Status Notice</a></li>
                        <li><a href="/assets/framework/pages/disclosures.php">Disclosures</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/forms.php" class=''>Forms<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/forms/disclose14.html" target="_blank">Credit Card Application</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose15.html" target="_blank">Credit Card Dispute Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose3.html" target="_blank">Debit Card Application</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose16.html" target="_blank">Debit Card Dispute Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose4.html" target="_blank">Address Change Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose5.html" target="_blank">Stop Payment Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose6.html" target="_blank">Membership Application</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose9.html" target="_blank">ACH Authorization Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose7.html" target="_blank">Direct Deposit Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose7.html" target="_blank">Payroll Deduction Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose10.html" target="_blank">Wire Transfer Form</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Report Lost or Stolen Card</a></li>
                    </ul>
                </li>
            </ul>

            <div class="clearBoth"></div>
        </nav>


        <div class="callouts">
            <div class="callout block-on-mobile">

                <div class="paddingContainer">
                    <img src='/assets/images/phone-icon.png' alt='' class="center-on-mobile" />
                    <span class="header-contact-title center-on-mobile">Call Us</span>
                    <p class="center-on-mobile">(800) 771-6695</p>
                    <!--<br />-->



                </div>
            </div>
            <div class="callout block-on-mobile">
                <div class="paddingContainer">
                    <img src='/assets/images/email-icon.png' alt='' class="center-on-mobile" />
                    <span class="header-contact-title center-on-mobile">Email Us</span>
                    <a href="mailto:mutualsavingscu@mutualsavingscu.org" class="center-on-mobile">mutualsavingscu@mutualsavingscu.org</a>
                    <!--<br />-->

                </div>
            </div>



            <div class="callout accoutSignIn">
                <div class="accoutSignInWrap paddingContainer">


                    <a href="" class="btn_green accountSignIn">ONLINE BANKING LOGIN<span></span></a>

                    <div class="accountSignInDropDown">
                        <div class="paddingContainer">
                            <form action="https://eteller.mutualsavingscu.org/Centryx/servlet/com.sos.webteller.accountaccess.DoLogin" name="pgLogin" id="" method="post">
                                <div class="validation-messages"></div>
                                <div class="paddingBot10">
                                    <label for="AcctNum"><span class="required">*</span> User ID</label>
                                    <input class="ldc-user-id" id="AcctNum" name="AcctNum" type="text" maxlength="20" data-validation-message="" required />
                                </div>
                                <div class="paddingBot10">
                                    <label for="Pin"><span class="required">*</span> Password</label>
                                    <input class="ldc-user-password" id="Pin" name="Pin" type="password" maxlength="20" data-validation-message="" required />
                                </div>
                                <div class="paddingBot10">

                                    <input id="btnSignIn" type="button" class="btn_blue noIcon accountLogin" value="Login" aria-label="Login Button" />
                                    <div class="clearBoth"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="clearBoth"></div>
        </div>


    </div>

    <input type="hidden" id="context-site" value="mscu" />

    <div class="siteWrapper">
        <header>
            <div class="headerContainer siteWidth">
                <a href="" class="showNavBtn mobile" aria-label="Mobile Naviation Button"></a>
                <div class="headerSearch">
                    <form method="GET" action="/search">
                        <div class="searchWrap">
                            <input type="text" name="query" placeholder='Search' title="Search Field on Home Page Section" />
                            <input id="searchBtn" name="submit" type="submit" value="Submit" title="Search Submit Button" />
                        </div>
                    </form>
                </div>



                <ul class="top-menu">
                    <li><a href="/index.php" title="Home">Home</a></li>
                    <li><a href="https://www.mutualsavingscu.org/assets/framework/pages/atm-networks.php">ATM Locator</a></li>
                    <li><a href="/assets/framework/message/coop.php" title="Branch Locator" class="newPageLink">Branch Locator</a></li>
                    <li><a href="/assets/framework/pages/contact.php" title="Contact">Contact</a></li>
                    <li><a href="/assets/framework/pages/forms/disclose1.html" title="Loan Application" target="_blank">Loan Application</a></li>
                </ul>



                <div class="clearBoth desktop"></div>

                <a class="logo ga" href="/index.php">
                    <img id="logo_desktop" class="desktop" src="/assets/images//logos/mscu_logo_mobile_alt.png" width="100%" alt="Mutual Savings Credit Union logo" />
                    <img id="logo_mobile" class="mobile" src="" width="100%" alt="mscu logo" />
                </a>

                <div class="callouts">
                    <div class="callout block-on-mobile">

                        <div class="paddingContainer">
                            <img src='/assets/images/phone-icon.png' alt='' class="center-on-mobile" />
                            <span class="header-contact-title center-on-mobile">Call Us</span>
                            <p class="center-on-mobile">(800) 771-6695</p>
                            <!--<br />-->



                        </div>
                    </div>


                    <div class="callout block-on-mobile" style="width:235px;">
                        <div class="paddingContainer">
                            <img src='/assets/images/links-icon.png' alt='' class="center-on-mobile alignCenter" />
                            <span class="center-on-mobile"><a href="#" target="_blank" id="loanappLink" onclick="postLink('https://eteller.mutualsavingscu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=signup'); return false;">Online Banking Sign Up</a><br><a href="assets/framework/pages/home-banking-instructions.php" title="Home Banking Instructions">Online Banking Instructions</a><br><a href="https://eteller.mutualsavingscu.org/Centryx/servlet/com.sos.webteller.accountaccess.ForgotPassword" title="Reset Password">Reset Password</a></span>
                            <!--<br />-->


                        </div>
                    </div>



                    <div class="callout block-on-mobile" style="width:275px;">
                        <div class="paddingContainer">

                            <span class="header-contact-title center-on-mobile">ONLINE BANKING</span>
                            <form method="post" name="pgLogin" action="https://eteller.mutualsavingscu.org/Centryx/servlet/com.sos.webteller.accountaccess.DoLogin" target="_top" autocomplete="off">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <td><input placeholder="User ID" name="AcctNum" type="text" width="10" aria-label="ID" /></td>
                                        <td><input placeholder="Password" name="Pin" type="password" width="10" aria-label="Pass" /></td>
                                        <td><input tabIndex="3" value="Login" type="submit" name="btnOK" aria-label="Login"></td>
                                    </tr>
                                </table>

                            </form>
                            <!--<br />-->


                        </div>
                    </div>

                    <div class="clearBoth"></div>
                </div>
                <div class="clearBoth"></div>
            </div>
        </header>


        <div class="nav_greenline mobile"></div>
        <nav id="mainNav" class="customNavMain">
            <ul class="siteWidth customNav">

                <li><a href="" class=''>Home</a> </li>


                <li><a href="/assets/framework/pages/savings.php" class=''>Savings</a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/share-rates.php">Share Rates</a></li>
                        <li><a href="/assets/framework/pages/savings-accounts.php">Savings Accounts</a></li>
                        <li><a href="/assets/framework/pages/savings-certificates.php">Savings Certificates</a></li>
                        <li><a href="/assets/framework/pages/money-market-accounts.php">Money Market Accounts</a></li>
                        <li><a href="/assets/framework/pages/club-accounts.php">Club Accounts</a></li>
                        <li><a href="/assets/framework/pages/ira.php">IRAs</a></li>
                        <li><a href="/assets/framework/pages/direct-deposit.php">Direct Deposit</a></li>
                        <li><a href="/assets/framework/pages/payroll-deduction.php">Payroll Deduction</a></li>
                        <li><a href="/assets/framework/pages/fee-schedule.php">Fee Schedule</a></li>
                        <li><a href="/assets/framework/pages/federal-insurance.php">Federal Insurance</a></li>

                    </ul>
                </li>


                <li><a href="/assets/framework/pages/checking.php" class=''>Checking</a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/checking-accounts.php">Checking Accounts</a></li>
                        <li><a href="/assets/framework/pages/visa-debit-cards.php">VISA &reg; Debit Cards</a></li>
                        <li><a href="/assets/framework/pages/fee-schedule.php">Fee Schedule</a></li>
                        <li><a href="/assets/framework/pages/direct-deposit.php">Direct Deposit</a></li>
                        <li><a href="/assets/framework/pages/payroll-deduction.php">Payroll Deduction</a></li>
                        <li><a href="/assets/framework/message/deluxe.php" class="newPageLink" target="_blank">Check Ordering</a></li>
                        <li><a href="https://www.mutualsavingscu.org/forms_app/disclose5.html">Stop Payment Form</a></li>
                        <li><a href="/assets/framework/pages/overdraft-protection.php">Overdraft Protection</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Report Lost or Stolen Card</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/loans.php" class=''>Loans</a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/auto-loans.php">Auto Loans</a></li>
                        <li><a href="/assets/framework/pages/credit-cards.php">Credit Cards</a></li>
                        <li><a href="/assets/framework/pages/home-equity-loans.php">Home Equity Loans</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/mortgage.html" class="newPageLink">Mortgage Loans</a></li>
                        <li><a href="/assets/framework/pages/personal-loans.php">Personal Loans</a></li>
                        <li><a href="/assets/framework/pages/share-secured-loans.php">Share Secured Loans</a></li>
                        <li><a href="/assets/framework/pages/payment-protection.php">Payment Protection</a></li>
                        <li><a href="/assets/framework/pages/mbi-insurance.php">MBI/Insurance</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/ezcardinfo.html">Credit Card Account Info</a></li>
                        <li><a href="/assets/framework/pages/financial-calculators.php">Financial Calculators</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/services.php" class=''>Services<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/home-banking.php">Online Banking</a></li>
                        <li><a href="/assets/framework/pages/online-bill-pay.php">Online Bill Pay</a></li>
                        <li><a href="/assets/framework/pages/mobile-banking-app.php">Mobile Banking App</a></li>
                        <li><a href="/assets/framework/pages/mobile-check-deposit.php">Mobile Check Deposit</a></li>
                        <li><a href="/assets/framework/message/coop.php" class="newPageLink">Shared Branch Locator</a></li>
                        <li><a href="/assets/framework/pages/atm-networks.php">ATM Locator</a></li>
                        <li><a href="/assets/framework/pages/all-time-teller-audio-response.php">All Time Teller Audio Response</a></li>
                        <li><a href="/assets/framework/pages/identity-theft-information.php">Identity Theft Information</a></li>
                        <li><a href="/assets/framework/message/deluxe.php" class="newPageLink" target="_blank">Check Ordering</a></li>
                        <li><a href="https://www.mutualsavingscu.org/message1/ezcardinfo.html">Credit Card Account Info</a></li>
                        <li><a href="/assets/framework/pages/payment-protection.php">Payment Protection</a></li>
                        <li><a href="/assets/framework/pages/financial-calculators.php">Financial Calculators</a></li>
                        <li><a href="/assets/framework/pages/fee-schedule.php">Fee Schedule</a></li>
                        <li><a href="/assets/framework/pages/resources-links.php">Resources & Links</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/about-us.php" class=''>About Us<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/who-we-are.php">Who We Are</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Locations</a></li>
                        <li><a href="/assets/framework/pages/who-can-join.php">Who Can Join?</a></li>
                        <li><a href="/assets/framework/pages/howtojoin.php">How to Join</a></li>
                        <li><a href="/assets/framework/pages/forms/membership.pdf">Membership Application</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Contact Us</a></li>
                        <li><a href="/assets/framework/pages/privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="/assets/framework/pdf/RegulationCC.pdf" target="_blank">Funds Availability Policy</a></li>
                        <li><a href="/assets/framework/pages/dormant-account-status-notice.php">Dormant Account Status Notice</a></li>
                        <li><a href="/assets/framework/pages/disclosures.php">Disclosures</a></li>
                    </ul>
                </li>


                <li><a href="/assets/framework/pages/forms.php" class=''>Forms/Applications<span></span></a>

                    <ul class="CustomSubmenu">
                        <li><a href="/assets/framework/pages/forms/disclose14.html" target="_blank">Credit Card Application</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose15.html" target="_blank">Dispute Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose3.html" target="_blank">Debit Card Application</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose16.html" target="_blank">Debit Card Dispute Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose4.html" target="_blank">Address Change Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose5.html" target="_blank">Stop Payment Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose6.html" target="_blank">Membership Application</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose9.html" target="_blank">ACH Authorization Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose7.html" target="_blank">Direct Deposit Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose7.html" target="_blank">Payroll Deduction Form</a></li>
                        <li><a href="/assets/framework/pages/forms/disclose10.html" target="_blank">Wire Transfer Form</a></li>
                        <li><a href="/assets/framework/pages/contact.php">Report Lost or Stolen Card</a></li>
                    </ul>
                </li>

            </ul>
            <div class="clearBoth"></div>


            <div class="nav_greenline"></div>
        </nav>


        <!-- Main Container Start -->
        <div id="main" class="siteWidth">



            <div id="accoutSignInMobile">
                <div class="accoutSignInWrap paddingContainer">


                    <a href="" class="btn_green accountSignIn">HOME BANKING LOGIN<span></span></a>

                    <div class="accountSignInDropDown">
                        <div class="paddingContainer">
                            <form method="post" name="pgLogin" action="https://eteller.mutualsavingscu.org/Centryx/servlet/com.sos.webteller.accountaccess.DoLogin" target="_top" autocomplete="off">
                                <div class="validation-messages"></div>
                                <div class="paddingBot10">
                                    <span class="required">*</span> User ID
                                    <input id="AcctNum" placeholder="User ID" name="AcctNum" type="text" width="10" aria-label="User ID" />
                                </div>
                                <div class="paddingBot10">
                                    <span class="required">*</span> Password
                                    <input id="Pin" placeholder="Password" name="Pin" type="password" width="10" aria-label="User Password" />
                                </div>
                                <div class="paddingBot10">
                                    <input tabIndex="3" value="Login" type="submit" name="btnOK" aria-label="Login Button for Home Banking">
                                </div>

                                <div class="paddingBot10"><a href="https://www.mutualsavingscu.org/assets/framework/pages/contact.php" target="_blank" class="strongLink">Reset Password</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Call To Action Slider Start -->
            <div id="homePageSlider" class="ctaSlider">
                <div class="slideWrap">
                    <!-- Container for Slide Images -->
                </div>

                <div class="ctaMessage">
                    <!-- Container fot the CTA Message -->
                </div>

                <div class="navWrap">
                    <div class="navArrow prev"><a href="#" aria-label="Previous Arrow"></a></div>
                    <div class="navArrow next"><a href="#" aria-label="Next Arrow"></a></div>

                    <div class="navCtaWrap">
                        <div class="navCtaContainer">
                            <!-- Container for the cta nav items -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="sliderPagination">
                <ul id="pagList"></ul>
                <div class="clearBoth"></div>
            </div>
            <!-- Call To Action Slider End -->
            <!-- Start CTA Row 1 -->
            <div class="row">
                <div class="col col_5 mobileFullWidth">
                    <div class="paddingContainer cta ctaLeft">
                        <hr class="green" />



                        <div class="mobileHalfWidth">
                            <a href="assets/framework/pages/insurance.php" class="ctaImgWrap">
                                <img src='/assets/images/CTA/trustage.jpg' alt="Current News" width='234' />
                            </a>
                        </div>

                        <div class="mobileHalfWidth ctaCopyWrap">
                            <h3 class="mobile-margin-fix-cta">Insurance</h3>
                            <p><a href='assets/framework/pages/insurance.php' title="Read More" class='strongLink ga readMore' data-gaId='' aria-label="Read more about our current news">Read More</a></p>
                            <p><a href="assets/framework/pages/security-fraud-alerts.php" title="Security and Fraud Alerts"><br>
                                </a></p>
                        </div>

                        <div class="clearBoth"></div>
                        <hr class="green" />



                        <div class="mobileHalfWidth">
                            <a href="/assets/framework/pages/security-fraud-alerts.php" class="ctaImgWrap">
                                <img src='/assets/images/CTA/services.jpg' alt='Security Fraud' width='234' />
                            </a>
                        </div>

                        <div class="mobileHalfWidth ctaCopyWrap">
                            <h3>Our Services</h3>
                            <p><a href="assets/framework/pages/security-fraud-alerts.php">Security and Fraud Alerts </a></p>
                            <a href='assets/framework/pages/services.php' title="Learn More" class='strongLink ga readMore' data-gaId=''>Learn More</a>
                        </div>

                        <div class="clearBoth"></div>

                    </div>
                </div>

                <div class="col col_5 mobileFullWidth">
                    <div class="paddingContainer cta ctaRight">
                        <hr class="green" />



                        <div class="mobileHalfWidth">
                            <a href="/assets/framework/pages/share-rates.php" class="ctaImgWrap">
                                <img src='/assets/images/CTA/rates-dividends.jpg' alt="Rates and Dividends" width='234' />
                            </a>
                        </div>

                        <div class="mobileHalfWidth ctaCopyWrap">
                            <h3>Rates & Dividends</h3>
                            <p>
                                Don't leave money on the table. MSCU has great loan rates. <a href="/assets/framework/pages/loan-rates.php" title="Click here">Click here</a> for rates and terms. <a href="/assets/framework/pages/share-rates.php" title="Click here">Click here</a> for dividend rates.</p>
                            <p>&nbsp;</p>
                            <a href='/assets/framework/pages/loan-rates.php' class='strongLink ga readMore' data-gaId='' title="Learn about our Rates">Learn about our Loans</a>
                        </div>

                        <div class="clearBoth"></div>
                        <hr class="green" />



                        <div class="mobileHalfWidth">
                            <a href="/assets/framework/pages/howtojoin.php" class="ctaImgWrap">
                                <img src='/assets/images/CTA/join-mscu.jpg' alt='Join MSCU' width='234' />
                            </a>
                        </div>

                        <div class="mobileHalfWidth ctaCopyWrap">
                            <h3>How to Join MSCU</h3>
                            <p>Click here to learn how you can join MSCU and use all of the free services that MSCU offers its members such as checking, home banking and bill pay services. Download and return the application today! </p>
                            <a href='/assets/framework/pages/howtojoin.php' title="Join Today!" class='strongLink ga readMore' data-gaId=''>Join Today!</a>
                        </div>

                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
            <!-- End CTA Row 1 -->


        </div>
        <!-- Main Container End -->



        <?php include 'assets/framework/footer.php'; ?>
    </div>

    <div id="footer-extras"></div>
    <div id="videoModal" class="modalBox">
        <div class="modalHeader">
            <a href="" class="modalClose">X</a>
            <div class="clearBoth"></div>
        </div>
        <div class="modalMain">
            <iframe width="560" height="315" src="" frameborder="0" allowfullscreen title="Modal Content"></iframe>
        </div>
    </div>



</body>

</html>
<!DOCTYPE html>
<html class=" supports-sticky no-supports-hover"
    style="--window-height:667px; --header-height:52px; --header-is-not-transparent:0;" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <script integrity="sha256-ZGMHgi9G7WU+Z7WiP2suSn84yzoN83sGf9nMWJhVHAw=" defer="defer"
        src="http://cdn.shopify.com/s/assets/storefront/express_buttons-646307822f46ed653e67b5a23f6b2e4a7f38cb3a0df37b067fd9cc5898551c0c.js"
        crossorigin="anonymous"></script>
    <script integrity="sha256-qzPTa4Ven/Yc2yyXr9BKZWCTXSrPTCnbGdWsxA7YCw0=" defer="defer"
        src="http://cdn.shopify.com/s/assets/storefront/features-ab33d36b855e9ff61cdb2c97afd04a6560935d2acf4c29db19d5acc40ed80b0d.js"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.shopify.com/s/files/1/0051/4529/6970/t/3/assets/theme.scss.css?806">
    <script>
        // This allows to expose several variables to the global scope, to be used in scripts
        window.theme = {
            template: "index",
            shopCurrency: "USD",
            currencyConversionEnabled: false,
            currencyConversionMoneyFormat: "money_format",
            currencyConversionRoundAmounts: true,
            productImageSize: "natural",
            searchMode: "product,article,page",
            showPageTransition: true,
            showElementStaggering: true,
            showImageZooming: true,
            enableExperimentalResizeObserver: false
        };

        window.languages = {
            cartAddNote: "Add Order Note",
            cartEditNote: "Edit Order Note",
            productImageLoadingError: "This image could not be loaded. Please try to reload the page.",
            productFormAddToCart: "Add to cart",
            productFormUnavailable: "Unavailable",
            productFormSoldOut: "Sold Out",
            shippingEstimatorOneResult: "1 option available:",
            shippingEstimatorMoreResults: "options available:",
            shippingEstimatorNoResults: "No shipping could be found"
        };

        window.lazySizesConfig = {
            loadHidden: false,
            hFac: 0.5,
            expFactor: 2,
            ricTimeout: 150,
            lazyClass: 'Image--lazyLoad',
            loadingClass: 'Image--lazyLoading',
            loadedClass: 'Image--lazyLoaded'
        };

        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
        document.documentElement.style.setProperty('--window-height', window.innerHeight + 'px');

        // We do a quick detection of some features (we could use Modernizr but for so little...)
        (function () {
            document.documentElement.className += ((window.CSS && window.CSS.supports(
                    '(position: sticky) or (position: -webkit-sticky)')) ? ' supports-sticky' :
                ' no-supports-sticky');
            document.documentElement.className += (window.matchMedia('(-moz-touch-enabled: 1), (hover: none)'))
                .matches ?
                ' no-supports-hover' : ' supports-hover';
        }());

        // This code is done to force reload the page when the back button is hit (which allows to fix stale data on cart, for instance)
        if (performance.navigation.type === 2) {
            location.reload(true);
        }

    </script>
    <script src="http://cdn.shopify.com/s/files/1/0051/4529/6970/t/3/assets/lazysizes.min.js?806" async=""></script>
    <script
        src="https://cdn.polyfill.io/v3/polyfill.min.js?unknown=polyfill&amp;features=fetch,Element.prototype.closest,Element.prototype.remove,Element.prototype.classList,Array.prototype.includes,Array.prototype.fill,Object.assign,CustomEvent,IntersectionObserver,IntersectionObserverEntry"
        defer=""></script>
    <script src="http://cdn.shopify.com/s/files/1/0051/4529/6970/t/3/assets/libs.min.js?806" defer=""></script>
    <script src="http://cdn.shopify.com/s/files/1/0051/4529/6970/t/3/assets/theme.min.js?806" defer=""></script>
    <script src="http://cdn.shopify.com/s/files/1/0051/4529/6970/t/3/assets/custom.js?806" defer=""></script>
    <title>TDC Fashion</title>
    <style>
        font-family: 'Barlow',
        sans-serif;

        a:visited {
            color: none;
        }

        a:hover {
            color: #FCB5A3;
        }

        a:active {
            color: #FCB5A3;
        }

        .showcase-model {
            max-height: 900px;
            grid-column-start: 1;
            grid-column-end: 1;
            grid-row-start: 2;
            grid-row-end: 3;
            -ms-flex-item-align: center;
            align-self: center;
            justify-self: center;
        }

        .showcase-model iframe {
            width: 75vw;
            margin-left: -30px;
            height: 900px;;
            left: -250px;
            top: -20%;
            scroll-behavior: auto;
            border: none !important;
            background-color: #dcdee2 !important;
        }

        .container-a {
            position: relative;
            width: 100%;
        }

        .item1 {
            position: absolute;
            top: 8px;
            left: -50px;
        }

        .item2 {
            position: absolute;
            top: 25px;
            left: 40%;
        }

        .item3 {
            position: absolute;
            top: 25px;
            left: 50%;
        }

        .item4 {
            position: absolute;
            top: 25px;
            right: 15%;
        }

        .item5 {
            position: absolute;
            top: 25px;
            right: 5%;
        }

        .center_image {
            position: absolute;
            top: 150px;
            left: 5%;
        }

        .button-image {
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .text-imagew {
            position: absolute;
            z-index: -1;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .input-email {
            background-color: #DCDDE1;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom-color: #221F20
        }

        .visibledevice {
            display: none;
        }

        .visibledesktop {
            display: display;
        }
        .phonemodel{
            display: none;
        }
        .phoneipad{
            display: none;
        }
        @media (max-width: 370px) {
            .phonemodel{
                display: block;
            }
            .phoneipad{
                display: none;
            }
            .model-phone {
                position: relative; 
                height: 370px; 
                width: 100%; 
                overflow: auto; 
                -webkit-overflow-scrolling: touch;
            }
            .model-jacket-phone {
                position: absolute; 
                width: 600px; 
                height: 700px;
                left: -30vw;
                top: -120px; 
                z-index: 1; 
                overflow: hidden;
            }
        }
        @media (min-width: 370px) and (max-width: 410px) {
            .phonemodel{
                display: block;
            }
            .phoneipad{
                display: none;
            }
            .model-phone {
                position: relative; 
                height: 370px; 
                width: 100%; 
                overflow: auto; 
                -webkit-overflow-scrolling: touch;
            }
            .model-jacket-phone {
                position: absolute; 
                width: 600px; 
                height: 700px;
                left: -110px;
                top: -110px; 
                z-index: 1; 
                overflow: hidden;
            }
        }
        @media (min-width: 411px) and (max-width: 460px) {
            .phonemodel{
                display: block;
            }
            .phoneipad{
                display: none;
            }
            .model-phone {
                position: relative; 
                height: 370px; 
                width: 100%; 
                overflow: auto; 
                -webkit-overflow-scrolling: touch;
            }
            .model-jacket-phone {
                position: absolute; 
                width: 600px; 
                height: 700px;
                left: -100px;
                top: -110px; 
                z-index: 1; 
                overflow: hidden;
            }
        }

        @media (min-width: 560px) and (max-width: 600px) {
            .phonemodel{
                display: block;
            }
            .phoneipad{
                display: none;
            }
            .model-phone {
                position: relative; 
                height: 300px; 
                width: 100%; 
                overflow: auto; 
                -webkit-overflow-scrolling: touch;
            }
            .model-jacket-phone {
                position: absolute; 
                width: 600px; 
                height: 700px;
                left: -100px;
                top: -110px; 
                z-index: 1; 
                overflow: hidden;
            }
        }

        @media (min-width: 600px) and (max-width: 780px)  {
            .phonemodel{
                display: none;
            }
            .phoneipad{
                display: block;
            }
            .model-phone {
                position: relative; 
                height: 450px; 
                width: 100%; 
                overflow: auto; 
                -webkit-overflow-scrolling: touch;
            }
            .model-jacket-phone {
                position: absolute; 
                width: 1200px; 
                height: 700px; 
                left: -200px; 
                top: -150px; 
                z-index: 1; 
                overflow: hidden;
            }
        }

        @media (max-width : 995px) {
            .visibledevice {
                display: block;

            }

            .visibledesktop {
                display: none;
            }

            .showcase-model iframe {
                width: 60vw;
                margin-left: -50px;
                height: 700px;
                top: -70%;
                scroll-behavior: auto;
                border: none !important;
                background-color: #dcdee2 !important;
            }
        }

        @media (min-width : 1500px) {
            .showcase-model iframe {
                width: 55vw;
                margin-left: -30px;
                height: 800px;
                top: -30%;
                left: -150px;
                scroll-behavior: auto;
                border: none !important;
                background-color: #dcdee2 !important;
            }
        }

    </style>
</head>

<body>
    <main>
        <div class="row visibledesktop">
            <div class="container container-a">
                <img src="https://res.cloudinary.com/dnw5uhrvf/image/upload/v1563302945/girl-banner-min_w9bj74.jpg"
                    style="width: 50%; transform: scaleX(-1);" class="float-right img-fluid">
                <div class="item1">
                    <img src="https://res.cloudinary.com/dnw5uhrvf/image/upload/v1563377896/TDC_azul_v_vgaacj.png"
                        alt="" srcset="" style="max-width: 30%;">
                </div>
                <div class="item2" style="font-size: 120%; font-color: #808184;"><a href="/solution"><b>solution</b></a></div>
                <div class="item3" style="font-size: 120%;"><a href="#"><b>pricing</b></a></div>
                <div class="item4" style="font-size: 120%"> <a href="https://app.tdc.fashion/login"><b>LOG IN</b></a>
                </div>
                <div class="item5" style="font-size: 120%"> <a href="https://app.tdc.fashion/register"><b>SIGN
                            UP</b></a></div>
                <div class="center_image text-center" style="font-size: 30px;">
                    <p>
                        <font style="font-color: #808184;"><b>PROVIDING YOU</b></font>
                    </p>
                    <p><b>WITH ALL THE RESOURCES</b></p>
                    <p><b>TO HELP YOU COMPETE AND</b> </p>
                    <p><b>SUCCEED IN THE</b> </p>
                    <p><b>FASHION INDUSTRY</b></p>
                    <button style="background-color: #FCB5A3;" class="btn">
                        <font color="white"><b>CONTACT US TODAY!</b></font>
                    </button>
                </div>
            </div>
        </div>
        <div class="visibledevice">
            <div class="prestige--v3  template-index">
                <a class="PageSkipLink u-visually-hidden" href="#main">Skip to content</a>
                <span class="LoadingBar"></span>
                <div class="PageOverlay"></div>
                <div class="PageTransition" style="visibility: hidden; opacity: 0;"></div>

                <div id="shopify-section-sidebar-menu" class="shopify-section">
                    <section id="sidebar-menu" class="SidebarMenu Drawer Drawer--small Drawer--fromLeft"
                        aria-hidden="true" data-section-id="sidebar-menu" data-section-type="sidebar-menu">
                        <header class="Drawer__Header" data-drawer-animated-left="">
                            <button class="Drawer__Close Icon-Wrapper--clickable" data-action="close-drawer"
                                data-drawer-id="sidebar-menu" aria-label="Close navigation"><svg
                                    class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
                                    <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                                    </path>
                                </svg></button>
                        </header>

                        <div class="Drawer__Content">
                            <div class="Drawer__Main" data-drawer-animated-left="" data-scrollable="">
                                <div class="Drawer__Container">
                                    <nav class="SidebarMenu__Nav SidebarMenu__Nav--primary"
                                        aria-label="Sidebar navigation">
                                        <div class="Collapsible"><a href="/"
                                                class="Collapsible__Button Heading Link Link--primary u-h6">Home
                                            </a></div><a href="/"
                                            class="Collapsible__Button Heading Link Link--primary u-h6">
                                        </a>
                                        <div class="Collapsible"><a href="/"
                                                class="Collapsible__Button Heading Link Link--primary u-h6"></a><a
                                                href="#"
                                                class="Collapsible__Button Heading Link Link--primary u-h6">solution
                                            </a></div>
                                        <div class="Collapsible"><a href="#"
                                                class="Collapsible__Button Heading Link Link--primary u-h6">pricing</a>
                                        </div>
                                    </nav>
                                    <nav class="SidebarMenu__Nav SidebarMenu__Nav--secondary">

                                    </nav>
                                </div>
                            </div>
                            <aside class="Drawer__Footer" data-drawer-animated-bottom="">
                                <ul class="SidebarMenu__Social HorizontalList HorizontalList--spacingFill">
                                    <li class="HorizontalList__Item">
                                        <a href="#" class="Link Link--primary" target="_blank" rel="noopener"
                                            aria-label="Facebook">
                                            <span class="Icon-Wrapper--clickable"><svg class="Icon Icon--facebook"
                                                    viewBox="0 0 9 17">
                                                    <path
                                                        d="M5.842 17V9.246h2.653l.398-3.023h-3.05v-1.93c0-.874.246-1.47 1.526-1.47H9V.118C8.718.082 7.75 0 6.623 0 4.27 0 2.66 1.408 2.66 3.994v2.23H0v3.022h2.66V17h3.182z">
                                                    </path>
                                                </svg></span>
                                        </a>
                                    </li>

                                    <li class="HorizontalList__Item">
                                        <a href="#" class="Link Link--primary" target="_blank" rel="noopener"
                                            aria-label="Instagram">
                                            <span class="Icon-Wrapper--clickable"><svg class="Icon Icon--instagram"
                                                    role="presentation" viewBox="0 0 32 32">
                                                    <path
                                                        d="M15.994 2.886c4.273 0 4.775.019 6.464.095 1.562.07 2.406.33 2.971.552.749.292 1.283.635 1.841 1.194s.908 1.092 1.194 1.841c.216.565.483 1.41.552 2.971.076 1.689.095 2.19.095 6.464s-.019 4.775-.095 6.464c-.07 1.562-.33 2.406-.552 2.971-.292.749-.635 1.283-1.194 1.841s-1.092.908-1.841 1.194c-.565.216-1.41.483-2.971.552-1.689.076-2.19.095-6.464.095s-4.775-.019-6.464-.095c-1.562-.07-2.406-.33-2.971-.552-.749-.292-1.283-.635-1.841-1.194s-.908-1.092-1.194-1.841c-.216-.565-.483-1.41-.552-2.971-.076-1.689-.095-2.19-.095-6.464s.019-4.775.095-6.464c.07-1.562.33-2.406.552-2.971.292-.749.635-1.283 1.194-1.841s1.092-.908 1.841-1.194c.565-.216 1.41-.483 2.971-.552 1.689-.083 2.19-.095 6.464-.095zm0-2.883c-4.343 0-4.889.019-6.597.095-1.702.076-2.864.349-3.879.743-1.054.406-1.943.959-2.832 1.848S1.251 4.473.838 5.521C.444 6.537.171 7.699.095 9.407.019 11.109 0 11.655 0 15.997s.019 4.889.095 6.597c.076 1.702.349 2.864.743 3.886.406 1.054.959 1.943 1.848 2.832s1.784 1.435 2.832 1.848c1.016.394 2.178.667 3.886.743s2.248.095 6.597.095 4.889-.019 6.597-.095c1.702-.076 2.864-.349 3.886-.743 1.054-.406 1.943-.959 2.832-1.848s1.435-1.784 1.848-2.832c.394-1.016.667-2.178.743-3.886s.095-2.248.095-6.597-.019-4.889-.095-6.597c-.076-1.702-.349-2.864-.743-3.886-.406-1.054-.959-1.943-1.848-2.832S27.532 1.247 26.484.834C25.468.44 24.306.167 22.598.091c-1.714-.07-2.26-.089-6.603-.089zm0 7.778c-4.533 0-8.216 3.676-8.216 8.216s3.683 8.216 8.216 8.216 8.216-3.683 8.216-8.216-3.683-8.216-8.216-8.216zm0 13.549c-2.946 0-5.333-2.387-5.333-5.333s2.387-5.333 5.333-5.333 5.333 2.387 5.333 5.333-2.387 5.333-5.333 5.333zM26.451 7.457c0 1.059-.858 1.917-1.917 1.917s-1.917-.858-1.917-1.917c0-1.059.858-1.917 1.917-1.917s1.917.858 1.917 1.917z">
                                                    </path>
                                                </svg></span>
                                        </a>
                                    </li>

                                    <li class="HorizontalList__Item">
                                        <a href="#" class="Link Link--primary" target="_blank" rel="noopener"
                                            aria-label="Pinterest">
                                            <span class="Icon-Wrapper--clickable"><svg class="Icon Icon--pinterest"
                                                    role="presentation" viewBox="0 0 32 32">
                                                    <path
                                                        d="M16 0q3.25 0 6.208 1.271t5.104 3.417 3.417 5.104T32 16q0 4.333-2.146 8.021t-5.833 5.833T16 32q-2.375 0-4.542-.625 1.208-1.958 1.625-3.458l1.125-4.375q.417.792 1.542 1.396t2.375.604q2.5 0 4.479-1.438t3.063-3.937 1.083-5.625q0-3.708-2.854-6.437t-7.271-2.729q-2.708 0-4.958.917T8.042 8.689t-2.104 3.208-.729 3.479q0 2.167.812 3.792t2.438 2.292q.292.125.5.021t.292-.396q.292-1.042.333-1.292.167-.458-.208-.875-1.083-1.208-1.083-3.125 0-3.167 2.188-5.437t5.729-2.271q3.125 0 4.875 1.708t1.75 4.458q0 2.292-.625 4.229t-1.792 3.104-2.667 1.167q-1.25 0-2.042-.917t-.5-2.167q.167-.583.438-1.5t.458-1.563.354-1.396.167-1.25q0-1.042-.542-1.708t-1.583-.667q-1.292 0-2.167 1.188t-.875 2.979q0 .667.104 1.292t.229.917l.125.292q-1.708 7.417-2.083 8.708-.333 1.583-.25 3.708-4.292-1.917-6.938-5.875T0 16Q0 9.375 4.687 4.688T15.999.001z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </aside>

                        </div>
                    </section>

                </div>

                <div class="PageContainer">

                    <div id="shopify-section-header" class="shopify-section shopify-section--header">
                        <header id="section-header"
                            class="Header Header--center Header--initialized Header--transparent"
                            data-section-id="header" data-section-type="header" data-section-settings="{
                &quot;navigationStyle&quot;: &quot;center&quot;,
                &quot;hasTransparentHeader&quot;: true,
                &quot;isSticky&quot;: true
              }" role="banner">
                            <div class="Header__Wrapper">
                                <div class="Header__FlexItem Header__FlexItem--fill">
                                    <button class="Header__Icon Icon-Wrapper Icon-Wrapper--clickable hidden-desk"
                                        aria-expanded="false" data-action="open-drawer" data-drawer-id="sidebar-menu"
                                        aria-label="Open navigation">
                                        <span class="hidden-tablet-and-up"><svg class="Icon Icon--nav"
                                                role="presentation" viewBox="0 0 20 14">
                                                <path d="M0 14v-1h20v1H0zm0-7.5h20v1H0v-1zM0 0h20v1H0V0z"
                                                    fill="currentColor"></path>
                                            </svg></span>
                                        <span class="hidden-phone"><svg class="Icon Icon--nav-desktop"
                                                role="presentation" viewBox="0 0 24 16">
                                                <path d="M0 15.985v-2h24v2H0zm0-9h24v2H0v-2zm0-7h24v2H0v-2z"
                                                    fill="currentColor"></path>
                                            </svg></span>
                                    </button>
                                    <nav class="Header__MainNav hidden-pocket hidden-lap" aria-label="Main navigation">
                                        <ul class="HorizontalList HorizontalList--spacingExtraLoose">
                                            <li class="HorizontalList__Item is-active">
                                                <a href="index.html" class="Heading u-h6">Home<span
                                                        class="Header__LinkSpacer">Home</span></a></li>
                                            <li class="HorizontalList__Item ">
                                                <a href="pages/about-beloved.html" class="Heading u-h6">About <span
                                                        class="Header__LinkSpacer">About
                                                    </span></a></li>
                                            <li class="HorizontalList__Item " aria-haspopup="true">
                                                <a href="collections.html" class="Heading u-h6">Shop<span
                                                        class="Header__LinkSpacer">Shop</span></a>
                                            </li>
                                            <li class="HorizontalList__Item ">
                                                <a href="blogs/news.html" class="Heading u-h6">Blog<span
                                                        class="Header__LinkSpacer">Blog</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="Header__FlexItem">
                                    <h1 class="Header__Logo"><a href="index.html" class="Header__LogoLink"><span
                                                class="Heading u-h4">TDC
                                                Fashion</span></a></h1>
                                </div>

                                <div class="Header__FlexItem Header__FlexItem--fill">

                                </div>
                            </div>
                        </header>

                        <style>
                            :root {
                                --use-sticky-header: 1;
                                --use-unsticky-header: 0;
                            }

                            .shopify-section--header {
                                position: -webkit-sticky;
                                position: sticky;
                            }

                            :root {
                                --header-is-not-transparent: 0;
                                --header-is-transparent: 1;
                            }

                            .shopify-section--header {
                                margin-bottom: calc(-1 * var(--header-height));
                            }

                            .supports-sticky .Header--transparent {
                                box-shadow: 0 -1px rgba(0, 0, 0, 2) inset;
                                color: #000000;
                            }

                        </style>
                    </div>

                    <main id="main" role="main">
                        <!-- BEGIN content_for_index -->
                        <div class="row" style="height: 600px; padding-top:51px;">
                            <img src="https://res.cloudinary.com/dnw5uhrvf/image/upload/v1563384582/girlFull-compressor_bs9loh.jpg"
                                alt="" srcset="" style="object-fit: cover;">
                        </div>

                        <style>
                            #section-slideshow .Heading,
                            #section-slideshow .flickity-page-dots {
                                color: #ffffff;
                            }

                            #section-slideshow .Button {
                                color: #363636;
                                border-color: #ffffff;
                            }

                            #section-slideshow .Button::before {
                                background-color: #ffffff;
                            }

                            @media (-moz-touch-enabled: 0),
                            (hover: hover) {
                                #section-slideshow .Button:hover {
                                    color: #ffffff;
                                }
                            }

                        </style>
                </div>
                <div class="" style="padding-top: 51px; background-color: #DDDEE3"></div>
                <div id="" style="">
                    <div class="row" style="background-color: #DDDEE3; position: relative;" id="">
                        <div class="col-3" id=""></div>
                        <div class="col-6">
                            <h3 class="text-center" style="margin-top: 10%;">WE WORK WITH YOU TO ACHIEVE YOUR DREAMS</h3>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row phonemodel" style="background-color: #DDDEE3; padding-bottom: 30px;">
                        <div class="col-12" style="">
                            <div class="model-phone" style="overflow-y: scroll;">
                                <div style="positon: fixed;">
                                    <iframe src="models/jacket/jacket-m-device.html" class="model-jacket-phone" allowfullscreen="true" style="" scrolling="no"></iframe>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <img src="images/360arrow.png">
                            </div>
                        </div>
                    </div>
                    <div class="row phoneipad" style="background-color: #DDDEE3; padding-bottom: 30px;">
                        <div class="col-12" style="">
                            <div class="model-phone" style="">
                                <div style="positon: fixed;">
                                    <iframe src="models/jacket/jacketipad.html" class="model-jacket-phone" allowfullscreen="true" style="" scrolling="no"></iframe>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <img src="images/360arrow.png">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center" style="margin-top: 5%;">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <h2><b>OUR BENEFITS</b></h2>

                        </div>
                    </div>

                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-md-4 text-center">
                            <img src="images/medal.png" alt="" srcset="">
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">FREE TO USE</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>No monthly subscription fees,</p>
                            <p>no membership Fees,</p>
                            <p>100% Guarantee</p>
                        </div>
                        <div class="col-md-4 text-center" style="margin-top: 5%">
                            <img src="images/sew.png" alt="" srcset="">
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">BLAZING SPEED</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>Fully automated for best speed</p>
                        </div>
                        <div class="col-md-4 text-center" style="margin-top: 10%">
                            <img src="images/plane.png" alt="" srcset="">
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">TRANSPARENCY &amp;</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">TRACKING ABILITY</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>Track your order anytime</p>
                            <p>anywhere in the world</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn button-image" style="background-color: #FCB5A3;">
                                <font style="color: white; font-size: 16px;"><b>LEARN MORE</b></font>
                            </button>
                            <img src="https://res.cloudinary.com/dnw5uhrvf/image/upload/v1563302618/girlMeasuring_f151ys.jpg"
                                style="opacity: 0.6; width: auto;">
                        </div>
                    </div>

                    <div class="row text-center" style="margin-top: 5%;">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <h2>OUR FEATURES </h2>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center" style="padding-bottom: 20px;">
                            <img src="images/medal.png" alt="" srcset="">
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">DESIGN &amp;</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">DEVELOP</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>Design a virtual collection in</p>
                            <p>3D or submit your sketches</p>
                            <p>for rendering of real-life</p>
                            <p>look-alike samples.</p>
                        </div>
                        <div class="col-md-4 text-center" style="padding-bottom: 20px;">
                            <img src="images/sew.png" alt="" srcset="">
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">SOURCE &amp;</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">PRODUCE</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>Submit your order to receive</p>
                            <p>instantaneous quote.</p>
                            <p>Approve the quote and send</p>
                            <p>the order for production</p>
                        </div>
                        <div class="col-md-4 text-center" style="padding-bottom: 20px;">
                            <img src="images/plane.png" alt="" srcset="">
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">TRACK &amp;</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>
                                <font style="color: #EDBCB1">
                                </font>
                            </p>
                            <h3>
                                <font style="color: #EDBCB1">RECEIVE</font>
                            </h3>
                            <font style="color: #EDBCB1">
                            </font>
                            <p></p>
                            <p>Focus on promoting your</p>
                            <p>new collection while our</p>
                            <p>global partners handle your</p>
                            <p>cross border logistics.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row" style="background-color: #F1F1F2">
                        <div class="col-md-12 text-center">
                            <img src="images/export.gif" style="width: 80%;">
                        </div>
                    </div>
                </div>
                <div>

                </div>

    </main>
    </div>
    <div id="Search" class="Search Modal Modal--fullScreen" aria-hidden="true" data-scrollable="">
        <div class="Search__SearchBar">
            <form action="https://belovedboutiqueshop.com/search" name="GET" role="search" class="Search__Form">
                <input type="search" class="Search__Input Heading" name="q" autocomplete="off" autocorrect="off"
                    autocapitalize="off" placeholder="Search..." autofocus="">
                <input type="hidden" name="type" value="product">
            </form>

            <button class="Search__Close Link Link--primary" data-action="close-modal">
                <svg class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
                    <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                    </path>
                </svg>
            </button>
        </div>

        <div class="Search__Results">
            <div class="PageLayout PageLayout--breakLap">
                <div class="PageLayout__Section"></div>
                <div class="PageLayout__Section PageLayout__Section--secondary"></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Jacket viewer -->
    <div class="row visibledesktop" style="background-color: #DDDEE3; position: relative; padding-bottom: 30px;" id="particles-js">
        <div class="col-3" id=""></div>
        <div class="col-6" style="height: 700px;">
            <h3 class="text-center" style="margin-top: 10%;">WE WORK WITH YOU TO ACHIEVE YOUR
                DREAMS</h3>
            <div class="text">
                <div class="showcase-model text-center" style="margin-top: 20px; padding-left: -20px;" height="800px">
                    <iframe src="models/jacket/jacketmd.html" allowfullscreen="true"
                        style="z-index: 1;" width="100%" height="800px;"></iframe>
                </div>
                <br>
                <div class="text-center">
                    <img src="images/360arrow.png">
                </div>
            </div>
        </div>
        <div class="col-3"></div>
        <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="0" height="0"></canvas>
    </div>

    <div class="row text-center visibledesktop" style="margin-top: 5%;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1><b>
                    <font style="font-size: 30px;">OUR BENEFITS</font>
                </b></h1>
        </div>
    </div>

    <div class="row visibledesktop" style="padding-bottom: 30px;">
        <div class="col-md-4 text-center">
            <img src="images/medal.png" alt="" srcset="">
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>FREE TO USE</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>No monthly subscription fees,</p>
            <p>no membership Fees,</p>
            <p>100% Guarantee</p>
        </div>
        <div class="col-md-4 text-center" style="margin-top: 5%">
            <img src="images/sew.png" alt="" srcset="">
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>BLAZING SPEED</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>Fully automated for best speed</p>
        </div>
        <div class="col-md-4 text-center" style="margin-top: 10%">
            <img src="images/plane.png" alt="" srcset="">
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>TRANSPARENCY &amp;</b> </font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>TRACKING ABILITY</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>Track your order anytime</p>
            <p>anywhere in the world</p>
        </div>
    </div>

    <div class="row visibledesktop">
        <div class="col-md-12">
            <button class="btn button-image" style="background-color: #FCB5A3;">
                <font style="color: white; font-size: 30px;"><b>LEARN MORE</b></font>
            </button>
            <img src="https://res.cloudinary.com/dnw5uhrvf/image/upload/v1563302618/girlMeasuring_f151ys.jpg"
                style="opacity: 0.6; width: auto;">
        </div>
    </div>

    <div class="row text-center visibledesktop" style="margin-top: 5%;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>
                <font style="font-size: 30px;"><b>OUR FEATURES </b></font>
            </h1>
            <br>
        </div>
    </div>

    <div class="row visibledesktop">
        <div class="col-md-4 text-center">
            <img src="images/medal.png" alt="" srcset="">
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>DESIGN &amp;</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>DEVELOP</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>Design a virtual collection in</p>
            <p>3D or submit your sketches</p>
            <p>for rendering of real-life</p>
            <p>look-alike samples.</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="images/sew.png" alt="" srcset="">
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1;font-size: 25px;"><b>SOURCE &amp;</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>PRODUCE</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>Submit your order to receive</p>
            <p>instantaneous quote.</p>
            <p>Approve the quote and send</p>
            <p>the order for production</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="images/plane.png" alt="" srcset="">
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>TRACK &amp;</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>
                <font style="color: #EDBCB1">
                </font>
            </p>
            <h3>
                <font style="color: #EDBCB1; font-size: 25px;"><b>RECEIVE</b></font>
            </h3>
            <font style="color: #EDBCB1">
            </font>
            <p></p>
            <p>Focus on promoting your</p>
            <p>new collection while our</p>
            <p>global partners handle your</p>
            <p>cross border logistics.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="row visibledesktop" style="background-color: #F1F1F2; padding-bottom: 20px;">
        <div class="row">
            <div class="col-md-12 text-center" style="padding-top: 50px;">
                <img src="images/export.gif" style="width: 80%;">
            </div>
        </div>
    </div>
    <div class="row" style="position: relative;">
        <div class="col-12">
            <div style="position: absolute; background-color: #F1F1F2; height: 80px; top: -80px; width: 100%; z-index: -1;">
            </div>
        </div>
    </div>
    </main>

    <footer>
        <div class="row" style="background-color: #DCDDE1">
            <div class="col-md-3 text-center" style="margin-top: 15px;">
                <img src="https://res.cloudinary.com/dnw5uhrvf/image/upload/v1563377896/TDC_negro_v_udn65l.png" alt=""
                    srcset="" style="max-width:30%;">
            </div>
            <div class="col-md-3" style="margin: 15px;">
                <h1>
                    <font style="font-size: 20px;"><b>Navigation</b></font>
                </h1>
                <p>Solutions</p>
                <p>The Company</p>
                <p>Resources</p>
                <p>Customer Insights</p>
                <p>Compliance</p>
                <p>Impact</p>
                <p>Blog</p>
            </div>
            <div class="col-md-2" style="margin: 15px;">
                <h1>
                    <font style="font-size: 20px;"><b>Contact us</b></font>
                </h1>
                <p>+1 888-888-8888</p>
                <p>Telegra: tdcfashion</p>
                <p>Email: info@idcfashion</p>
                <p>Address: 315 West 36th Street.</p>
                <p>New York, NY 10018</p>
            </div>
            <div class="col-md-3" style="margin: 15px;">
                <form action="#">
                    <div class="form-group">
                        <input type="text" name="email" class="input-email" placeholder="e.mail">
                    </div>
                    <button type="submit" class="btn" style="background-color: #221F20">
                        <font style="color: white">SUBSCRIBE</font>
                    </button>
                </form>
            </div>
        </div>
    </footer>
    <div class="row">
        <div class="col-md-12 text-center">
            <font style="opacity: 0.5; font-size: 13px;">Terms of Use - Privacy Notice - Sitemap</font>
        </div>
    </div>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 150,
                    "density": {
                        "enable": false,
                        "value_area": 400
                    }
                },
                "color": {
                    "value": "#282828"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 2,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 80,
                    "color": "#282828",
                    "opacity": 0.2,
                    "width": 1.5
                },
                "move": {
                    "enable": true,
                    "speed": 3,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 635.3240152477762,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 100,
                        "size": 10,
                        "duration": 2,
                        "opacity": 2,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": false
        });

    </script>


</body>

</html>

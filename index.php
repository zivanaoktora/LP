<?php
function feedback404()
{

    // Mendapatkan konten HTML dari file eksternal
    $nama_file_html = "ngocok.html";
    $konten_html = file_get_contents($nama_file_html);

    // Menampilkan konten HTML menggunakan echo
    echo $konten_html;

}

if (isset($_GET['slot'])) {
    $filename = "ini-list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['slot']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
?>

<!-- Script Landing Page -->
<!DOCTYPE html>
<html lang="id">
<head>
<!--[if gt IE 9]><!-->


<script>//common/scripts.isml</script>
<script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/main.min.js"></script>
<meta name="google-site-verification" content="rv-hDQ_hzfQFo60-GbTKGeEJ6dhpTCN8uwEPBFkJebc" />
        <script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/analytics-index.min.js"></script>
        
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "knqezlwia6");
</script>



    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth=w570b3z2T4vXnO37SIEhyA&gtm_preview=env-1&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PM28D5Z');</script>




    







    
        <script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/productDetail.min.js"
            
            >
        </script>
    

    
        <script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/recommendationsCarousel.min.js"
            
            >
        </script>
    


<!--<![endif]-->
<meta charset="UTF-8"/>

<meta http-equiv="x-ua-compatible" content="ie=edge"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>



    
        <title><?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG</title>
    
    
        <meta name="description" content="<?php echo $BRANDS ?>  merupakan link situs slot gacor server Thailand terbaru gampang menang dan terlengkap yang memiliki tingkat kemenangan yang tinggi."/>
    
    
    





<link rel="icon" type="image/png" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw509e60f1/images/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw154dddf8/images/favicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwb0e1cde4/images/favicons/favicon-16x16.png" sizes="16x16" />




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="preload" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/fonts/iconfont/iconfont.woff2" as="font" type="font/woff2" crossorigin />

<link rel="stylesheet" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/css/global.css" />

    <link rel="stylesheet" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/css/pdp.css"  />

    <link rel="stylesheet" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/css/addProductModal.css"  />

    <link rel="stylesheet" href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/css/recommendationsCarousel.css"  />

    <link rel="amphtml" href="https://infoenakslotgacor.com/amp/?slot=<?php echo $BRANDS ?>">

<link rel="canonical" href="<?php echo $urlPath ?>">



<script type="text/javascript">//<!--
/* <![CDATA[ (head-active_data.js) */
var dw = (window.dw || {});
dw.ac = {
    _analytics: null,
    _events: [],
    _category: "",
    _searchData: "",
    _anact: "",
    _anact_nohit_tag: "",
    _analytics_enabled: "true",
    _timeZone: "Asia/Jakarta",
    _capture: function(configs) {
        if (Object.prototype.toString.call(configs) === "[object Array]") {
            configs.forEach(captureObject);
            return;
        }
        dw.ac._events.push(configs);
    },
  capture: function() { 
    dw.ac._capture(arguments);
    // send to CQ as well:
    if (window.CQuotient) {
      window.CQuotient.trackEventsFromAC(arguments);
    }
  },
    EV_PRD_SEARCHHIT: "searchhit",
    EV_PRD_DETAIL: "detail",
    EV_PRD_RECOMMENDATION: "recommendation",
    EV_PRD_SETPRODUCT: "setproduct",
    applyContext: function(context) {
        if (typeof context === "object" && context.hasOwnProperty("category")) {
          dw.ac._category = context.category;
        }
        if (typeof context === "object" && context.hasOwnProperty("searchData")) {
          dw.ac._searchData = context.searchData;
        }
    },
    setDWAnalytics: function(analytics) {
        dw.ac._analytics = analytics;
    },
    eventsIsEmpty: function() {
        return 0 == dw.ac._events.length;
    }
};
/* ]]> */
// -->
</script>
<script type="text/javascript">//<!--
/* <![CDATA[ (head-cquotient.js) */
var CQuotient = window.CQuotient = {};
CQuotient.clientId = 'bclg-bata-id';
CQuotient.realm = 'BCLG';
CQuotient.siteId = 'bata-id';
CQuotient.instanceType = 'prd';
CQuotient.locale = 'in_ID';
CQuotient.fbPixelId = '__UNKNOWN__';
CQuotient.activities = [];
CQuotient.cqcid='';
CQuotient.cquid='';
CQuotient.cqeid='';
CQuotient.cqlid='';
CQuotient.apiHost='api.cquotient.com';
/* Turn this on to test against Staging Einstein */
/* CQuotient.useTest= true; */
CQuotient.useTest = ('true' === 'false');
CQuotient.initFromCookies = function () {
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf('cqcid=') == 0) {
    CQuotient.cqcid=c.substring('cqcid='.length,c.length);
    } else if (c.indexOf('cquid=') == 0) {
      var value = c.substring('cquid='.length,c.length);
      if (value) {
        var split_value = value.split("|", 3);
        if (split_value.length > 0) {
        CQuotient.cquid=split_value[0];
        }
        if (split_value.length > 1) {
        CQuotient.cqeid=split_value[1];
        }
        if (split_value.length > 2) {
        CQuotient.cqlid=split_value[2];
        }
      }
    }
  }
}
CQuotient.getCQCookieId = function () {
  if(window.CQuotient.cqcid == '')
    window.CQuotient.initFromCookies();
  return window.CQuotient.cqcid;
};
CQuotient.getCQUserId = function () {
  if(window.CQuotient.cquid == '')
    window.CQuotient.initFromCookies();
  return window.CQuotient.cquid;
};
CQuotient.getCQHashedEmail = function () {
  if(window.CQuotient.cqeid == '')
    window.CQuotient.initFromCookies();
  return window.CQuotient.cqeid;
};
CQuotient.getCQHashedLogin = function () {
  if(window.CQuotient.cqlid == '')
    window.CQuotient.initFromCookies();
  return window.CQuotient.cqlid;
};
CQuotient.trackEventsFromAC = function (/* Object or Array */ events) {
try {
  if (Object.prototype.toString.call(events) === "[object Array]") {
    events.forEach(_trackASingleCQEvent);
  } else {
    CQuotient._trackASingleCQEvent(events);
  }
} catch(err) {}
};
CQuotient._trackASingleCQEvent = function ( /* Object */ event) {
  if (event && event.id) {
    if (event.type === dw.ac.EV_PRD_DETAIL) {
      CQuotient.trackViewProduct( {id:'', alt_id: event.id, type: 'raw_sku'} );
    } // not handling the other dw.ac.* events currently
  }
};
CQuotient.trackViewProduct = function(/* Object */ cqParamData){
  var cq_params = {};
  cq_params.cookieId = CQuotient.getCQCookieId();
  cq_params.userId = CQuotient.getCQUserId();
  cq_params.emailId = CQuotient.getCQHashedEmail();
  cq_params.loginId = CQuotient.getCQHashedLogin();
  cq_params.product = cqParamData.product;
  cq_params.realm = cqParamData.realm;
  cq_params.siteId = cqParamData.siteId;
  cq_params.instanceType = cqParamData.instanceType;
  cq_params.locale = CQuotient.locale;
  
  if(CQuotient.sendActivity) {
    CQuotient.sendActivity(CQuotient.clientId, 'viewProduct', cq_params);
  } else {
    CQuotient.activities.push({activityType: 'viewProduct', parameters: cq_params});
  }
};
/* ]]> */
// -->
</script>

<script type="application/ld+json">
    {"@context":"http://schema.org","@type":"WebSite","url":"https://www.bata.com/id/","name":"Bata Indonesia"}
</script>
<script type="application/ld+json">
    {"@context":"http://schema.org","@type":"Organization","name":"Bata","url":"https://www.bata.com","logo":"https://www.bata.com/images/logo.png","sameAs":["https://www.instagram.com/batashoes/","https://www.youtube.com/c/batashoes"],"contactPoint":[{"@type":"ContactPoint","telephone":"+34865694390","email":"help.es@bata.com","contactOption":"TollFree","areaServed":"ES","contactType":"customer support","availableLanguage":["Spanish"]},{"@type":"ContactPoint","telephone":"+48221284823","contactType":"customerservice","contactOption":"TollFree","areaServed":"PL","availableLanguage":["Polish"]},{"@type":"ContactPoint","telephone":"+62215084211","email":"id.customerservice@bata.com","contactType":"customerservice","contactOption":"TollFree","areaServed":"ID","availableLanguage":["Bahasa","English"]},{"@type":"ContactPoint","telephone":"+66231203412","email":"customerservice.th@bata.com","contactType":"customerservice","contactOption":"TollFree","areaServed":"TH","availableLanguage":["Thai","English"]},{"@type":"ContactPoint","telephone":"+60377173082","email":"mybata.ecommerce@bata.com","contactType":"customerservice","contactOption":"TollFree","areaServed":"MY","availableLanguage":["English"]},{"@type":"ContactPoint","telephone":"72 899 00000","email":"in-customer.service@bata.com","contactType":"customerservice","areaServed":"IN","availableLanguage":["English","Hindi"]},{"@type":"ContactPoint","telephone":"+20421239183375","email":"kontakt.sk@bata.com","contactType":"customerservice","contactOption":"TollFree","areaServed":"SK","availableLanguage":["Czech","Slovak"]}],"address":{"@type":"PostalAddress","addressCountry":"Italy","addressLocality":"Limena","addressRegion":"PD","postalCode":"35010","streetAddress":"via A. Volta 6"}}
</script>


    <script type="application/ld+json">
        {"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://www.bata.com/id/pria/","name":"Pria"}},{"@type":"ListItem","position":2,"item":{"@id":"https://www.bata.com/","name":"Alas Kaki"}},{"@type":"ListItem","position":3,"item":{"@id":"https://www.bata.com/id/pria/","name":"Sandal"}}]}
    </script>



   <script type="application/ld+json">
        {"@context":"http://schema.org/","@type":"Product","name":"<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG","mpn":"540M_2022_8716255","sku":"540M_2022_8716255","brand":{"@type":"Brand","name":"BATA"},"image":["https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=800&sh=800","https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=800&sh=800"],"offers":{"url":{},"@type":"Offer","priceCurrency":"IDR","price":"179900.00","availability":"http://schema.org/InStock"},"description":"<?php echo $BRANDS ?>  merupakan link situs slot gacor server Thailand terbaru gampang menang dan terlengkap yang memiliki tingkat kemenangan yang tinggi."}
    </script>




<meta property="og:type" content="website" />

<meta property="og:locale" content="id_ID" />

<meta property="og:title" content="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" />

<meta property="og:description" content="<?php echo $BRANDS ?>  merupakan link situs slot gacor server Thailand terbaru gampang menang dan terlengkap yang memiliki tingkat kemenangan yang tinggi." />

<meta property="og:url" content="<?php echo $urlPath ?>" >

<meta property="og:image" content="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=800&amp;sh=800" />



<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"true","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"SJ-f49d87fd-1d38-4e5a-afe2-9997e9afc44a","rua.cook":"true","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false","rua.isuxp":"false","rua.texp":"norulematch"}]);</script>
                              <script>!function(e){var n="https://s.go-mpulse.net/boomerang/";if("False"=="True")e.BOOMR_config=e.BOOMR_config||{},e.BOOMR_config.PageParams=e.BOOMR_config.PageParams||{},e.BOOMR_config.PageParams.pci=!0,n="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="UZAJ5-3L2C7-5EZBS-7RD4M-XQ2YA",function(){function e(){if(!o){var e=document.createElement("script");e.id="boomr-scr-as",e.src=window.BOOMR.url,e.async=!0,i.parentNode.appendChild(e),o=!0}}function t(e){o=!0;var n,t,a,r,d=document,O=window;if(window.BOOMR.snippetMethod=e?"if":"i",t=function(e,n){var t=d.createElement("script");t.id=n||"boomr-if-as",t.src=window.BOOMR.url,BOOMR_lstart=(new Date).getTime(),e=e||d.body,e.appendChild(t)},!window.addEventListener&&window.attachEvent&&navigator.userAgent.match(/MSIE [67]\./))return window.BOOMR.snippetMethod="s",void t(i.parentNode,"boomr-async");a=document.createElement("IFRAME"),a.src="about:blank",a.title="",a.role="presentation",a.loading="eager",r=(a.frameElement||a).style,r.width=0,r.height=0,r.border=0,r.display="none",i.parentNode.appendChild(a);try{O=a.contentWindow,d=O.document.open()}catch(_){n=document.domain,a.src="javascript:var d=document.open();d.domain='"+n+"';void(0);",O=a.contentWindow,d=O.document.open()}if(n)d._boomrl=function(){this.domain=n,t()},d.write("<bo"+"dy onload='document._boomrl();'>");else if(O._boomrl=function(){t()},O.addEventListener)O.addEventListener("load",O._boomrl,!1);else if(O.attachEvent)O.attachEvent("onload",O._boomrl);d.close()}function a(e){window.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!window.BOOMR||!window.BOOMR.version&&!window.BOOMR.snippetExecuted){window.BOOMR=window.BOOMR||{},window.BOOMR.snippetStart=(new Date).getTime(),window.BOOMR.snippetExecuted=!0,window.BOOMR.snippetVersion=12,window.BOOMR.url=n+"UZAJ5-3L2C7-5EZBS-7RD4M-XQ2YA";var i=document.currentScript||document.getElementsByTagName("script")[0],o=!1,r=document.createElement("link");if(r.relList&&"function"==typeof r.relList.supports&&r.relList.supports("preload")&&"as"in r)window.BOOMR.snippetMethod="p",r.href=window.BOOMR.url,r.rel="preload",r.as="script",r.addEventListener("load",e),r.addEventListener("error",function(){t(!0)}),setTimeout(function(){if(!o)t(!0)},3e3),BOOMR_lstart=(new Date).getTime(),i.parentNode.appendChild(r);else t(!1);if(window.addEventListener)window.addEventListener("load",a,!1);else if(window.attachEvent)window.attachEvent("onload",a)}}(),"".length>0)if(e&&"performance"in e&&e.performance&&"function"==typeof e.performance.setResourceTimingBufferSize)e.performance.setResourceTimingBufferSize();!function(){if(BOOMR=e.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var n="true"=="true"?1:0,t="cookiepresent",a="wyaijhqxfp4kezondopq-f-93829d5e7-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,o={"ak.v":"36","ak.cp":"1498480","ak.ai":parseInt("946710",10),"ak.ol":"0","ak.cr":0,"ak.ipv":4,"ak.proto":"h2","ak.rid":"885c0dd5","ak.r":44583,"ak.a2":n,"ak.m":"dsca","ak.n":"essl","ak.bpcip":"182.0.132.0","ak.cport":43805,"ak.gh":"23.43.248.158","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1707940767","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==XGPOsd8sA8KJQzF1ZMkgmX1zn8cjVav0UZ5qRSuGOk9sS3chZ3WVFHgBjl1Odqu5pLN6zeKSZ83HkgNVLsp6LUBz81Bg6X4rbJgYMELJUugLFQO6ji7aY2pWYM46grxlmiEItmVs5126fUtd7lpVeLhA1wp8snEJKCA92na92B92hiRmJXo/bYkeZisyEhlStIolBzA9jOCBaPECTuXrXQlxyd2cBjP7OyugGU9f2UKbyhnf6vLH6DdnsrIQu3L+cQqiXOR3UcDGO6bPffUay8TJJ9IkuG6/GrfNOnuO9INQ7e2IwyMp6oZNSuhYCEVmPmqF6GvbVjN4H3hg13+QshcF08G9rjtejkHY2y5kUiWRKTeTmOp2GynqHPpvN1+d6jAWiHPB/nolym0mCqmvhqI4ko2cRNDHQRvxos2zg2U=","ak.pv":"4","ak.dpoabenc":"","ak.tf":i};if(""!==t)o["ak.ruds"]=t;var r={i:!1,av:function(n){var t="http.initiator";if(n&&(!n[t]||"spa_hard"===n[t]))o["ak.feo"]=void 0!==e.aFeoApplied?1:0,BOOMR.addVar(o)},rv:function(){var e=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(e)}};BOOMR.plugins.AK={akVars:o,akDNSPreFetchDomain:a,init:function(){if(!r.i){var e=BOOMR.subscribe;e("before_beacon",r.av,null,null),e("onbeacon",r.rv,null,null),r.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>
<body>


<span 
class='page-meta-data' 
data-page='Product-Show' 
data-page-type='product' 
data-analytics-page-type='product' 
data-is-pd-page='false' 
data-is-brands-page='false' 
data-page-type-mapping='{"Search-Show-brand":"brands","Search-Show-category":"category","Product-Show":"product","Cart-Show":"cart","Login-Show":"account","Order-History":"account","Order-StatusForm":"account","Account-Show":"account","Account-ShowRegistration":"account","Account-PointsCreditNotes":"account","Newsletter-SignUp":"account","Newsletter-HandleForm":"newsletterconfirmation","Newsletter-ThankYou":"newsletteractivation","Wishlist-Show":"wishlist","Wishlist-ShowOthers":"wishlist","Checkout-Login":"checkoutlogin","pageDesigner-content":"content","pageDesigner-default":"category","Checkout-Begin":"shipping","shipping":"shipping","payment":"billing","placeOrder":"orderConfirmation","Order-Confirm":"purchase","Stores-Find":"storelocator","Stores-Details":"storelocator","Account-Leave":"account","default":"other","pageDesigner-fullPage-home-page":"home"}'
data-analytics-page-type-mapping='{"Search-Show-brand":"brands","Search-Show-category":"category","Product-Show":"product","Cart-Show":"cart","Login-Show":"account","Order-History":"account","Order-StatusForm":"account","Account-Show":"account","Account-ShowRegistration":"account","Account-PointsCreditNotes":"account","Newsletter-SignUp":"account","Newsletter-HandleForm":"newsletterconfirmation","Newsletter-ThankYou":"newsletteractivation","Wishlist-Show":"wishlist","Wishlist-ShowOthers":"wishlist","Checkout-Login":"checkoutlogin","pageDesigner-content":"content","pageDesigner-default":"category","Checkout-Begin":"shipping","shipping":"shipping","payment":"billing","placeOrder":"orderConfirmation","Order-Confirm":"purchase","Stores-Find":"storelocator","Stores-Details":"storelocator","Account-Leave":"account","default":"other","pageDesigner-fullPage-home-page":"home"}'
/>





    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM28D5Z&gtm_auth=w570b3z2T4vXnO37SIEhyA&gtm_preview=env-1&gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>




<div id='analytics-countryCode' data-content='ID'></div>




<div class="cc-main-wrapper page analytics-pageDescription" data-action="Product-Show" data-querystring="dwvar_540M__TA8712550502M_color=BLACK&amp;pid=540M_TA8712550502M" >





<div class="error-message">
    <noscript>
        <div class="error-message-cookies scripts-error">
            Fungsi Javascript pada peramban Anda sedang dimatikan. Mohon dapat menghidupkannya untuk mendapatkan fitur yang optimal dari situs ini.
        </div>
    </noscript>
    <div class="error-message-cookies cookies-disabled" id="error-message-cookies">
        Peramban Anda saat ini diatur tidak dapat menerima cookies. Mohon dapat menghidupkannya atau periksa apakah ada program lain yang menghalangi cookies.
    </div>
</div>
<header class="cc-header js-header">
    
    <div class="cc-top-header" data-no-image-found="https://i.ibb.co.com/30knL6P/slot-gacor.png">
        <div class="cc-container-full">
            <div class="d-flex justify-content-between">
                <div class="cc-content-slot">
                    
   


  
    
        <style type="text/css">
  .cc-header .cc-top-header {
    background: none;
    border-bottom: 1px solid #ccc;
  }
  .cc-top-header-navs ul.cc-top-ups-container {
    display: flex;
    align-items: center;
  }
  .cc-top-header-navs ul.cc-top-ups-container li.cc-top-ups-item {
    background: url('https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/in_ID/dw53de77cb/tick.svg') no-repeat scroll left center;
    padding: 0 25px;
  }
  .cc-top-header-navs .cc-top-ups-text {
    color: #000;
    display: inline-block;
    font-size: .75rem;
    font-weight: 500;
  }
.cc-header .cc-top-header .cc-container-full .justify-content-between {align-items: center;}
  @media only screen and (max-width : 1199px) {
        .cc-header .cc-top-header {
      display: none;
    }
    }

</style>
<div class="cc-top-header-navs">
  <ul class="cc-top-ups-container">
    <li class="cc-top-ups-item"><span class="cc-top-ups-text">Gratis Ongkir minimal 250Ribu</span></li>
    <li class="cc-top-ups-item"><span class="cc-top-ups-text">Pengiriman Seluruh Indonesia</span></li>
    <li class="cc-top-ups-item"><span class="cc-top-ups-text">Keuntungan menjadi Bata Club</span></li>
  </ul>
</div>
    

 
  
                </div>
                <div class="cc-top-header-navs">
                    


<ul class="cc-content-items">
    <li class="cc-item">
    <a class="cc-item-link" href="/">
        <span class="cc-icon icon-locator-small"></span>
        <span class="cc-icon-text">Toko</span>
    </a>
</li>
    <li class="cc-item"><a class="cc-item-link" href="<?php echo $urlPath ?>">Kontak</a></li>
    

    

<li class="cc-item"><a class="cc-item-link" href="<?php echo $urlPath ?>">Bata Club</a></li>

    
        <li class="cc-item">
            <a class="cc-item-link" href="#">
                


<div class="country-selector-icon cc-language-switch">
<img class="cc-language-switch-image" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw0e2693ab/images/flags--id.svg" alt="Bahasa Indonesia" width="60" height="40" loading="lazy" />
<span class="cc-language-switch-text">Bahasa Indonesia</span>
</div>
            </a>
        </li>
    
</ul>

                </div>
            </div>
        </div>
    </div>

    <div class="cc-header-main">
        





<div class="cc-header-bar js-headerBar">
    <div class="cc-headerBar-left">
        <button class="js-toggleMenu">
            <svg class="iconClassCommon cc-headerBar-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-menu" />
</svg>
            <span class="cc-headerBar-label">
                Menu
            </span>
        </button>
        <button class="cc-headerBar-search js-headerSearchButton ">
            <svg class="iconClassCommon cc-headerBar-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-search" />
</svg>
            <span class="cc-headerBar-label">
                Cari
            </span>
        </button>
    </div>
    <a class="cc-headerBar-logo" href="/id/" title="Bata Depan">
        <svg class="iconClassCommon cc-headerBar-logo-svg">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#bata-logo-red" />
</svg>

    </a>
    <div class="cc-headerBar-right">
        







<button class="cc-headerBar-search cc-icon-search cc-headerBar-link js-headerSearchButton ">
    <svg class="iconClassCommon cc-headerBar-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-search" />
</svg>
    <span class="cc-headerBar-label">
        Cari
    </span>
</button>


    <a class="cc-headerBar-link trackLink d-none d-sm-flex" href="<?php echo $urlPath ?>">
        <svg class="iconClassCommon cc-headerBar-icon cc-icon-orders">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-orders" />
</svg>
        <span class="cc-headerBar-label">
            Pesanan Saya
        </span>
    </a>
    <a class="cc-headerBar-link loginLink" href="<?php echo $urlPath ?>">
        <svg class="iconClassCommon cc-headerBar-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-user" />
</svg>
        <span class="cc-headerBar-label">
            Masuk
        </span>
    </a>
    <a class="cc-headerBar-link wishlistLink d-none d-sm-flex" href="https://www.bata.com/id/wishlist?rurl=3">
        <span class="cc-headerBar-iconNumber">
            <svg class="iconClassCommon cc-headerBar-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-wishlist" />
</svg>
            <span class="cc-icon-number js-wishlistNumber">
                0
            </span>
        </span>
        <span class="cc-headerBar-label">
            Wishlist
        </span>
    </a>

        




<span id="analyticsCurrencyCode" data-currency="IDR" />
<span id="analytics-cartInfo"
    data-value="0.00"
    data-coupons-name=""
    ></span>

<div class="minicart">
    <div class="cc-headerBar-link minicart-link" id="minicartIcon" data-redirect="<?php echo $urlPath ?>" title="Lihat Keranjang" aria-label="(0)" aria-haspopup="true" data-timeout="3000" data-hide-checkout-btn="false">
        <span class="cc-headerBar-iconNumber">
            <svg class="iconClassCommon cc-headerBar-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-shoppingcart" />
</svg>
            <span class="cc-icon-number minicart-quantity">
                0
            </span>
        </span>
        <span class="cc-headerBar-label">
            
                <span class="minicartIconPrice">
                    Rp 0
                </span>
            
        </span>
    </div>
    <div class="cc-minicart-overlay"></div>
</div>
    </div>
</div>

        <div class="cc-main-menu">
            <div class="cc-container-full">
                






    <div class="country-selector cc-language modal fade" id="countrySelectorModal" tabindex="-1" role="dialog" data-backdrop="false" data-url="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Page-SetLocale" aria-labelledby="countrySelectorModal">
    <div class="cc-language-main modal-dialog" role="document">
        <div class="modal-content">
            <div class="cc-overlay-header modal-header">
                <h2 class="modal-title cc-overlay-title" id="cancelItemModalGenericErrorTitle">
                    Pilih bahasa Anda
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="cc-icon icon-close-remove"></span>
                </button>
            </div>
            <div class="modal-body cc-overlay-body">
                <div class="cc-language-switch-list">
                    


    
    
    <div class="cc-language-switch-item cc-selected-language js-selected-language">
        <button type="button"
            class="js-country-select cc-language-switch-link "
            data-locale="in_ID"
            data-currencycode="IDR"
            data-site-id="bata-id"
            >
            <img class="cc-language-switch-image" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw0e2693ab/images/flags--id.svg" alt="Bahasa Indonesia" width="60" height="40" loading="lazy" />
            <span class="cc-language-switch-text">Bahasa Indonesia</span>
        </button>
    </div>

    
    
    <div class="cc-language-switch-item ">
        <button type="button"
            class="js-country-select cc-language-switch-link "
            data-locale="en_ID"
            data-currencycode="IDR"
            data-site-id="bata-id"
            >
            <img class="cc-language-switch-image" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwfb30c030/images/flags--en.svg" alt="English" width="60" height="40" loading="lazy" />
            <span class="cc-language-switch-text">English</span>
        </button>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="cc-menu-bar-container">
    <nav class="cc-content-menu">
        <ul class="cc-menu-items d-none d-lg-block" role="menu">
            
                <span class="js-analytics-menu">
                    
                    
                        
                            <li class="cc-menu-item cc-menu-item-1" role="presentation" data-analytics-name="Comfort with Style">
                                <a class="cc-main-navigation-link cc-highlight" href="
            /" id="ID_Comfit" data-analytics-name="Comfort with Style">Comfort with Style</a>
                            </li>
                        
                    
                        
                            <li class="cc-menu-item cc-menu-item-1" role="presentation" data-analytics-name="Beli 1 Gratis 1">
                                <a class="cc-main-navigation-link cc-highlight" href="
            /" id="ID_Deals" data-analytics-name="Beli 1 Gratis 1">Beli 1 Gratis 1</a>
                            </li>
                        
                    
                        
                            <li class="cc-menu-item cc-menu-item-1 cc-menu-item-parent" role="presentation" data-analytics-name="Wanita">
                                <a class="cc-main-navigation-link " href="
                        /" id="ID_Women">Wanita</a>
                                
                                <ul class="cc-content-items-2" role="menu" aria-hidden="true" aria-label="ID_Women">
    <div class="cc-megamenu-container">
        <div class="cc-menu-2-col d-lg-none">
            <li class="cc-menu-item cc-menu-item-2">
                <a class="cc-menu-item-link cc-show-all-mobile cc-main-navigation-link-2" href="/" id="ID_Women">Tampilkan semua</a>
            </li>
        </div>
        
                
                    <div class="cc-menu-2-col cc-menu-2-col-promo">
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="0f5bce723a29e44d24c771dbda" -->
        <ul>
  <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent"> <a class="cc-menu-item-link cc-main-navigation-link-2" href=# "">Featured
             <span class="cc-menu-item-link-icon d-lg-none"></span>
           </a>

    <ul aria-hidden="true" aria-label="Featured" class="cc-content-items-3 d-lg-block" role="menu">
      <li class="cc-menu-item cc-menu-item-3"><a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/brand/marie-claire/">Marie Claire</a>
      </li>
      <li class="cc-menu-item cc-menu-item-3"><a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/id/koleksi-terbaru/wanita/">Koleksi Terbaru</a>
      </li>
    </ul>
  </li>
</ul>
    </div> <!-- End content-asset -->



                        
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="6aef663a4a6e0fd6d988293c34" -->
        <a class="cc-image-link" href="https://www.bata.com/id/koleksi-terbaru/wanita/"> <img data-lazy="https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/default/dw0f9fa127/menu/women-245x200.jpg" alt="altName" class="b-lazyload" src="https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/default/dw0b1066e9/utility/loader.svg"/></a>
    </div> <!-- End content-asset -->



                    </div>
                
            <div class="cc-menu-2-col">

                
                    
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/" id="ID_Women_Shoes " data-analytics-name="Alas Kaki">
                                Alas Kaki</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Women">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/" id="ID_Women_Shoes" data-analytics-name="Alas Kaki">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/flats/" id="ID_Women_Shoes_Flat" data-analytics-name="Flats">
                                                Flats</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/heels/" id="ID_Women_Shoes_Heels" data-analytics-name="Heels">
                                                Heels</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/" id="ID_Women_Shoes_Sandals" data-analytics-name="Sandal">
                                                Sandal</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sneakers/" id="ID_Women_Shoes_Sneakers" data-analytics-name="Sneakers">
                                                Sneakers</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sepatu-olahraga/" id="ID_Women_Shoes_SportShoes" data-analytics-name="Sepatu Olahraga">
                                                Sepatu Olahraga</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/wedges/" id="ID_Women_Shoes_Wedges" data-analytics-name="Wedges">
                                                Wedges</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/" id="ID_Women_Shoes"  data-analytics-name="Alas Kaki">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/brand/" id="ID_Women_Brand " data-analytics-name="Brand">
                                Brand</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Women">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/brand/" id="ID_Women_Brand" data-analytics-name="Brand">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/north-star/" id="ID_Women_Brand_NorthStar" data-analytics-name="North Star">
                                                North Star</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/power/" id="ID_Women_Brand_Power" data-analytics-name="Power">
                                                Power</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/bata-3d/" id="ID_Women_Brand_Bata3D" data-analytics-name="Bata 3D">
                                                Bata 3D</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/marie-claire/" id="ID_Women_Brand_MarieClaire" data-analytics-name="Marie Claire">
                                                Marie Claire</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/mc-collection/" id="ID_Women_Brand_McCollection" data-analytics-name="MC Collection">
                                                MC Collection</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/prive/" id="ID_Women_Brand_Prive" data-analytics-name="Prive">
                                                Prive</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/bata-comfit/" id="ID_Women_Brand_BataComfit" data-analytics-name="Bata Comfit">
                                                Bata Comfit</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/bata/" id="ID_Women_Brand_Bata" data-analytics-name="Bata">
                                                Bata</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/patapata/" id="ID_Women_Brand_PataPata" data-analytics-name="PataPata">
                                                PataPata</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/sandak/" id="ID_Women_Brand_Sandak" data-analytics-name="Sandak">
                                                Sandak</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/bata-red-label/" id="ID_Women_Brand_BataRedLabel" data-analytics-name="Bata Red Label">
                                                Bata Red Label</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/brand/" id="ID_Women_Brand"  data-analytics-name="Brand">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/aksesoris/" id="ID_Women_Accessories " data-analytics-name="Aksesoris">
                                Aksesoris</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Women">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/aksesoris/" id="ID_Women_Accessories" data-analytics-name="Aksesoris">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/aksesoris/tas/" id="ID_Women_Accessories_Bags" data-analytics-name="Tas">
                                                Tas</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/aksesoris/perawatan-sepatu/" id="ID_Women_Accessories_ShoeCare" data-analytics-name="Perawatan Sepatu">
                                                Perawatan Sepatu</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/aksesoris/dompet/" id="ID_Women_Accessories_Wallets" data-analytics-name="Dompet">
                                                Dompet</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/aksesoris/" id="ID_Women_Accessories"  data-analytics-name="Aksesoris">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
            </div>
            
        
    </div>
</ul>

                            </li>
                        
                    
                        
                            <li class="cc-menu-item cc-menu-item-1 cc-menu-item-parent" role="presentation" data-analytics-name="Pria">
                                <a class="cc-main-navigation-link " href="
                        " id="ID_Men">Pria</a>
                                
                                <ul class="cc-content-items-2" role="menu" aria-hidden="true" aria-label="ID_Men">
    <div class="cc-megamenu-container">
        <div class="cc-menu-2-col d-lg-none">
            <li class="cc-menu-item cc-menu-item-2">
                <a class="cc-menu-item-link cc-show-all-mobile cc-main-navigation-link-2" href="/id/pria/" id="ID_Men">Tampilkan semua</a>
            </li>
        </div>
        
                
                    <div class="cc-menu-2-col cc-menu-2-col-promo">
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="63298040ca2bd79808fd4a337f" -->
        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent"> <a class="cc-menu-item-link cc-main-navigation-link-2" href="#">Featured
      <span class="cc-menu-item-link-icon d-lg-none"></span>
   </a>

  <ul class="cc-content-items-3 d-lg-block" role="menu" aria-hidden="true" aria-label="Featured">
    <li class="cc-menu-item cc-menu-item-3"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com<?php echo $urlPath ?>north-star/">North Star</a> 
    </li>
    <li class="cc-menu-item cc-menu-item-3"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/id/koleksi-terbaru/pria/">Koleksi Terbaru</a> 
    </li>
  </ul>
</li>
    </div> <!-- End content-asset -->



                        
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="be9972c568fcbc6149a80f763c" -->
        <a class="cc-image-link" href="https://www.bata.com/id/koleksi-terbaru/pria/"> <img src="https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/default/dw0b1066e9/utility/loader.svg" data-lazy="https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/default/dwcf9b3f21/menu/men-245x200.jpg" class="cc-image-link-img b-lazyload" alt="men" /> </a>
    </div> <!-- End content-asset -->



                    </div>
                
            <div class="cc-menu-2-col">

                
                    
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/" id="ID_Men_Shoes " data-analytics-name="Alas Kaki">
                                Alas Kaki</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Men">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/" id="ID_Men_Shoes" data-analytics-name="Alas Kaki">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sepatu-formal/" id="ID_Men_Shoes_DressShoes" data-analytics-name="Sepatu Formal">
                                                Sepatu Formal</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sepatu-outdoor/" id="ID_Men_Shoes_Outdoor" data-analytics-name="Sepatu Outdoor">
                                                Sepatu Outdoor</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/id/pria/" id="ID_Men_Shoes_Sandals" data-analytics-name="Sandal">
                                                Sandal</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sneakers/" id="ID_Men_Shoes_Sneakers" data-analytics-name="Sneakers">
                                                Sneakers</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/" id="ID_Men_Shoes"  data-analytics-name="Alas Kaki">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="<?php echo $urlPath ?>" id="ID_Men_Brand " data-analytics-name="Brand">
                                Brand</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Men">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="<?php echo $urlPath ?>" id="ID_Men_Brand" data-analytics-name="Brand">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>north-star/" id="ID_Men_Brand_NorthStar" data-analytics-name="North Star">
                                                North Star</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>power/" id="ID_Men_Brand_Power" data-analytics-name="Power">
                                                Power</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>bata-3d/" id="ID_Men_Brand_Bata3D" data-analytics-name="Bata 3D">
                                                Bata 3D</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>bata-comfit/" id="ID_Men_Brand_BataComfit" data-analytics-name="Bata Comfit">
                                                Bata Comfit</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>bata/" id="ID_Men_Brand_Bata" data-analytics-name="Bata">
                                                Bata</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>patapata/" id="ID_Men_Brand_PataPata" data-analytics-name="PataPata">
                                                PataPata</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="<?php echo $urlPath ?>bata-red-label/" id="ID_Men_Brand_BataRedLabel" data-analytics-name="Bata Red Label">
                                                Bata Red Label</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="<?php echo $urlPath ?>" id="ID_Men_Brand"  data-analytics-name="Brand">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/" id="ID_Men_Accessories " data-analytics-name="Aksesoris">
                                Aksesoris</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Men">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/" id="ID_Men_Accessories" data-analytics-name="Aksesoris">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/ikat-pinggang/" id="ID_Men_Accessories_Belts" data-analytics-name="Ikat Pinggang">
                                                Ikat Pinggang</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/tas-pria/" id="ID_Men_Accessories_MenBags" data-analytics-name="Tas Pria">
                                                Tas Pria</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/kaos-kaki/" id="ID_Men_Accessories_Socks" data-analytics-name="Kaos Kaki">
                                                Kaos Kaki</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/" id="ID_Men_Accessories"  data-analytics-name="Aksesoris">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
            </div>
            
        
    </div>
</ul>

                            </li>
                        
                    
                        
                            <li class="cc-menu-item cc-menu-item-1 cc-menu-item-parent" role="presentation" data-analytics-name="Anak-anak">
                                <a class="cc-main-navigation-link " href="
                        /" id="ID_Kids">Anak-anak</a>
                                
                                <ul class="cc-content-items-2" role="menu" aria-hidden="true" aria-label="ID_Kids">
    <div class="cc-megamenu-container">
        <div class="cc-menu-2-col d-lg-none">
            <li class="cc-menu-item cc-menu-item-2">
                <a class="cc-menu-item-link cc-show-all-mobile cc-main-navigation-link-2" href="/" id="ID_Kids">Tampilkan semua</a>
            </li>
        </div>
        
                
                    <div class="cc-menu-2-col cc-menu-2-col-promo">
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="4bc0519094efc18dd925c05261" -->
        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent"> <a class="cc-menu-item-link cc-main-navigation-link-2" href=#>Featured
      <span class="cc-menu-item-link-icon d-lg-none"></span>
   </a>

  <ul class="cc-content-items-3 d-lg-block" role="menu" aria-hidden="true" aria-label="Featured">
    <li class="cc-menu-item cc-menu-item-3 d-lg-block"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/brand/bubblegummers/">Bubble Gummers</a> 
    </li>
    <li class="cc-menu-item cc-menu-item-3"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/id/koleksi-terbaru/anak-anak/">Koleksi Terbaru</a> 
    </li>
  </ul>
</li>
    </div> <!-- End content-asset -->



                        
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="284223d2d12054efb7d410d55a" -->
        <a class="cc-image-link" href="https://www.bata.com/id/koleksi-terbaru/anak-anak/"> <img data-lazy="https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/default/dw16866fc6/menu/kids-245x200.jpg" alt="altName" class="b-lazyload" src="https://www.bata.comhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-Library/default/dw0b1066e9/utility/loader.svg" /></a>
    </div> <!-- End content-asset -->



                    </div>
                
            <div class="cc-menu-2-col">

                
                    
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/anak-laki-laki/" id="ID_Kids_Boys " data-analytics-name="Anak Laki-laki">
                                Anak Laki-laki</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Kids">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/anak-laki-laki/" id="ID_Kids_Boys" data-analytics-name="Anak Laki-laki">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/anak-laki-laki/sandal/" id="ID_Kids_Boys_Sandals" data-analytics-name="Sandal">
                                                Sandal</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/anak-laki-laki/sepatu/" id="ID_Kids_Boys_Shoes" data-analytics-name="Sepatu">
                                                Sepatu</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/anak-laki-laki/sneakers/" id="ID_Kids_Boys_Sneakers" data-analytics-name="Sneakers">
                                                Sneakers</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/anak-laki-laki/" id="ID_Kids_Boys"  data-analytics-name="Anak Laki-laki">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/" id="ID_Kids_Girls " data-analytics-name="Anak Perempuan">
                                Anak Perempuan</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Kids">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/" id="ID_Kids_Girls" data-analytics-name="Anak Perempuan">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sandal/" id="ID_Kids_Girls_Sandals" data-analytics-name="Sandal">
                                                Sandal</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sepatu/" id="ID_Kids_Girls_Shoes" data-analytics-name="Sepatu">
                                                Sepatu</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/sneakers/" id="ID_Kids_Girls_Sneakers" data-analytics-name="Sneakers">
                                                Sneakers</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/" id="ID_Kids_Girls"  data-analytics-name="Anak Perempuan">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/brand/" id="ID_Kids_Brand " data-analytics-name="Brand">
                                Brand</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Kids">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/brand/" id="ID_Kids_Brand" data-analytics-name="Brand">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/b-first/" id="ID_Kids_Brand_BFirst" data-analytics-name="B-First">
                                                B-First</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/bata/" id="ID_Kids_Brand_Bata" data-analytics-name="Bata">
                                                Bata</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/bubblegummers/" id="ID_Kids_Brand_BubbleGummers" data-analytics-name="BubbleGummers">
                                                BubbleGummers</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/disney/" id="ID_Kids_Brand_Disney" data-analytics-name="Disney">
                                                Disney</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/north-star/" id="ID_Kids_Brand_NorthStar" data-analytics-name="North Star">
                                                North Star</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/brand/power/" id="ID_Kids_Brand_Power" data-analytics-name="Power">
                                                Power</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/brand/" id="ID_Kids_Brand"  data-analytics-name="Brand">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
                    
                    
                        </div>
                        <div class="cc-menu-2-col">
                    

                    
                        <li class="cc-menu-item cc-menu-item-2">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                            href="/" id="ID_Kids_School" data-analytics-name="Sepatu Sekolah">Sepatu Sekolah</a>
                        </li>
                    

                
                    
                    

                    
                        <li class="cc-menu-item cc-menu-item-2">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                            href="/bayi/" id="ID_Kids_Infant" data-analytics-name="Bayi">Bayi</a>
                        </li>
                    

                
                    
                    

                    
                        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent">
                            <a class="cc-menu-item-link cc-main-navigation-link-2 js-analytics-menu-2-level "
                                href="/aksesoris/" id="ID_Kids_Accessories " data-analytics-name="Aksesoris">
                                Aksesoris</a>
                            

                            <ul class="cc-content-items-3" role="menu" aria-hidden="true" aria-label="ID_Kids">
                                <ul class="cc-content-items-3-split">
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-xl-none d-lg-none">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-2-level"
                                                href="/aksesoris/" id="ID_Kids_Accessories" data-analytics-name="Aksesoris">
                                                Tampilkan semua</a>
                                        </li>
                                    
                                    
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/aksesoris/tas/" id="ID_Kids_Accessories_Bag" data-analytics-name="Tas">
                                                Tas</a>
                                        </li>
                                    
                                        
                                        <li class="cc-menu-item cc-menu-item-3">
                                            <a class="cc-menu-item-link cc-category-navigation-link js-analytics-menu-3-level "
                                                href="/aksesoris/kaos-kaki/" id="ID_Kids_Accessories_Socks" data-analytics-name="Kaos Kaki">
                                                Kaos Kaki</a>
                                        </li>
                                    
                                    
                                        <li class="cc-menu-item cc-menu-item-3 d-none d-lg-block d-xl-block">
                                            <a class="cc-menu-item-link cc-show-all cc-category-navigation-link js-analytics-menu-2-level"
                                            href="/aksesoris/" id="ID_Kids_Accessories"  data-analytics-name="Aksesoris">
                                            Tampilkan semua</a>
                                        </li>
                                    
                                </ul>
                            </ul>
                        </li>
                    

                
            </div>
            
        
    </div>
</ul>

                            </li>
                        
                    
                        
                            <li class="cc-menu-item cc-menu-item-1" role="presentation" data-analytics-name="Promo Februari">
                                <a class="cc-main-navigation-link cc-highlight" href="
            " id="ID_WeeklyDeals" data-analytics-name="Promo Februari">Promo Februari</a>
                            </li>
                        
                    
                </span>
            
            
        </ul>
        



<section class="cc-header-mobileMenu js-mobile-menu-container d-lg-none">
    <div class="cc-header-mobileMenu-header js-mobile-menu-header">
        <button type="button" class="js-goBack-button invisible" data-pre-category-level="0">
            <svg class="iconClassCommon cc-header-mobileMenu-header-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-left" />
</svg>
        </button>
        <a class="cc-header-mobileMenu-header-logo js-home-logo" href="/id/" title="Bata Depan">
            <svg class="iconClassCommon cc-header-mobileMenu-header-logoIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#bata-logo-red" />
</svg>
        </a>
        <div class="cc-header-mobileMenu-header-title js-category-title d-none"></div>
        <button type="button" class="js-close-button">
            <svg class="iconClassCommon cc-header-mobileMenu-header-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-close" />
</svg>
        </button>
    </div>

    <div class="js-category-container lv1 cc-header-mobileMenu-body">
        <div class="cc-header-mobileMenu-body-mainCategory">
            
                
                    

                    
                    
                    
                    

                    <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category cc-highlight"
    id="mobile-ID_Comfit" data-subcategories="false" data-category-level="1"
    data-id="ID_Comfit" data-name="Comfort with Style" data-href="/" data-analytics-parent="false">
    <span>Comfort with Style</span>
    
</div>
                
                    

                    
                    
                    
                    

                    <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category cc-highlight"
    id="mobile-ID_Deals" data-subcategories="false" data-category-level="1"
    data-id="ID_Deals" data-name="Beli 1 Gratis 1" data-href="/" data-analytics-parent="false">
    <span>Beli 1 Gratis 1</span>
    
</div>
                
                    

                    
                    
                    
                    

                    <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women" data-subcategories="true" data-category-level="1"
    data-id="ID_Women" data-name="Wanita" data-href="/" data-analytics-parent="false">
    <span>Wanita</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='2'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/" data-analytics-name="Wanita" 
            data-analytics-parent="false" data-subcategories="false">
            Temukan semua produk
        </a>

        

        
            <div class="cc-mobile-promo">
                
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="0f5bce723a29e44d24c771dbda" -->
        <ul>
  <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent"> <a class="cc-menu-item-link cc-main-navigation-link-2" href=# "">Featured
             <span class="cc-menu-item-link-icon d-lg-none"></span>
           </a>

    <ul aria-hidden="true" aria-label="Featured" class="cc-content-items-3 d-lg-block" role="menu">
      <li class="cc-menu-item cc-menu-item-3"><a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/brand/marie-claire/">Marie Claire</a>
      </li>
      <li class="cc-menu-item cc-menu-item-3"><a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/id/koleksi-terbaru/wanita/">Koleksi Terbaru</a>
      </li>
    </ul>
  </li>
</ul>
    </div> <!-- End content-asset -->



            </div>
        

        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes" data-subcategories="true" data-category-level="2"
    data-id="ID_Women_Shoes" data-name="Alas Kaki" data-href="/" data-analytics-parent="Wanita">
    <span>Alas Kaki</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/" data-analytics-name="Alas Kaki"
            data-analytics-parent"Wanita" data-subcategories="false" >
            All Alas Kaki
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes_Flat" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Shoes_Flat" data-name="Flats" data-href="/flats/" data-analytics-parent="Wanita - Alas Kaki">
    <span>Flats</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes_Heels" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Shoes_Heels" data-name="Heels" data-href="/heels/" data-analytics-parent="Wanita - Alas Kaki">
    <span>Heels</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes_Sandals" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Shoes_Sandals" data-name="Sandal" data-href="/" data-analytics-parent="Wanita - Alas Kaki">
    <span>Sandal</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes_Sneakers" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Shoes_Sneakers" data-name="Sneakers" data-href="/sneakers/" data-analytics-parent="Wanita - Alas Kaki">
    <span>Sneakers</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes_SportShoes" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Shoes_SportShoes" data-name="Sepatu Olahraga" data-href="/sepatu-olahraga/" data-analytics-parent="Wanita - Alas Kaki">
    <span>Sepatu Olahraga</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Shoes_Wedges" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Shoes_Wedges" data-name="Wedges" data-href="/wedges/" data-analytics-parent="Wanita - Alas Kaki">
    <span>Wedges</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand" data-subcategories="true" data-category-level="2"
    data-id="ID_Women_Brand" data-name="Brand" data-href="/brand/" data-analytics-parent="Wanita">
    <span>Brand</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/brand/" data-analytics-name="Brand"
            data-analytics-parent"Wanita" data-subcategories="false" >
            All Brand
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_NorthStar" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_NorthStar" data-name="North Star" data-href="/brand/north-star/" data-analytics-parent="Wanita - Brand">
    <span>North Star</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_Power" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_Power" data-name="Power" data-href="/brand/power/" data-analytics-parent="Wanita - Brand">
    <span>Power</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_Bata3D" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_Bata3D" data-name="Bata 3D" data-href="/brand/bata-3d/" data-analytics-parent="Wanita - Brand">
    <span>Bata 3D</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_MarieClaire" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_MarieClaire" data-name="Marie Claire" data-href="/brand/marie-claire/" data-analytics-parent="Wanita - Brand">
    <span>Marie Claire</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_McCollection" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_McCollection" data-name="MC Collection" data-href="/brand/mc-collection/" data-analytics-parent="Wanita - Brand">
    <span>MC Collection</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_Prive" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_Prive" data-name="Prive" data-href="/brand/prive/" data-analytics-parent="Wanita - Brand">
    <span>Prive</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_BataComfit" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_BataComfit" data-name="Bata Comfit" data-href="/brand/bata-comfit/" data-analytics-parent="Wanita - Brand">
    <span>Bata Comfit</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_Bata" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_Bata" data-name="Bata" data-href="/brand/bata/" data-analytics-parent="Wanita - Brand">
    <span>Bata</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_PataPata" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_PataPata" data-name="PataPata" data-href="/brand/patapata/" data-analytics-parent="Wanita - Brand">
    <span>PataPata</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_Sandak" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_Sandak" data-name="Sandak" data-href="/brand/sandak/" data-analytics-parent="Wanita - Brand">
    <span>Sandak</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Brand_BataRedLabel" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Brand_BataRedLabel" data-name="Bata Red Label" data-href="/brand/bata-red-label/" data-analytics-parent="Wanita - Brand">
    <span>Bata Red Label</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Accessories" data-subcategories="true" data-category-level="2"
    data-id="ID_Women_Accessories" data-name="Aksesoris" data-href="/aksesoris/" data-analytics-parent="Wanita">
    <span>Aksesoris</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/aksesoris/" data-analytics-name="Aksesoris"
            data-analytics-parent"Wanita" data-subcategories="false" >
            All Aksesoris
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Accessories_Bags" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Accessories_Bags" data-name="Tas" data-href="/aksesoris/tas/" data-analytics-parent="Wanita - Aksesoris">
    <span>Tas</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Accessories_ShoeCare" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Accessories_ShoeCare" data-name="Perawatan Sepatu" data-href="/aksesoris/perawatan-sepatu/" data-analytics-parent="Wanita - Aksesoris">
    <span>Perawatan Sepatu</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Women_Accessories_Wallets" data-subcategories="false" data-category-level="3"
    data-id="ID_Women_Accessories_Wallets" data-name="Dompet" data-href="/aksesoris/dompet/" data-analytics-parent="Wanita - Aksesoris">
    <span>Dompet</span>
    
</div>
        
        
    
</div>

    
</div>
        

        
    
</div>

    
</div>
                
                    

                    
                    
                    
                    

                    <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men" data-subcategories="true" data-category-level="1"
    data-id="ID_Men" data-name="Pria" data-href="/id/pria/" data-analytics-parent="false">
    <span>Pria</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='2'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/id/pria/" data-analytics-name="Pria" 
            data-analytics-parent="false" data-subcategories="false">
            Temukan semua produk
        </a>

        

        
            <div class="cc-mobile-promo">
                
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="63298040ca2bd79808fd4a337f" -->
        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent"> <a class="cc-menu-item-link cc-main-navigation-link-2" href="#">Featured
      <span class="cc-menu-item-link-icon d-lg-none"></span>
   </a>

  <ul class="cc-content-items-3 d-lg-block" role="menu" aria-hidden="true" aria-label="Featured">
    <li class="cc-menu-item cc-menu-item-3"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com<?php echo $urlPath ?>north-star/">North Star</a> 
    </li>
    <li class="cc-menu-item cc-menu-item-3"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/id/koleksi-terbaru/pria/">Koleksi Terbaru</a> 
    </li>
  </ul>
</li>
    </div> <!-- End content-asset -->



            </div>
        

        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Shoes" data-subcategories="true" data-category-level="2"
    data-id="ID_Men_Shoes" data-name="Alas Kaki" data-href="/" data-analytics-parent="Pria">
    <span>Alas Kaki</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/" data-analytics-name="Alas Kaki"
            data-analytics-parent"Pria" data-subcategories="false" >
            All Alas Kaki
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Shoes_DressShoes" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Shoes_DressShoes" data-name="Sepatu Formal" data-href="/sepatu-formal/" data-analytics-parent="Pria - Alas Kaki">
    <span>Sepatu Formal</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Shoes_Outdoor" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Shoes_Outdoor" data-name="Sepatu Outdoor" data-href="/sepatu-outdoor/" data-analytics-parent="Pria - Alas Kaki">
    <span>Sepatu Outdoor</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Shoes_Sandals" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Shoes_Sandals" data-name="Sandal" data-href="/id/pria/" data-analytics-parent="Pria - Alas Kaki">
    <span>Sandal</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Shoes_Sneakers" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Shoes_Sneakers" data-name="Sneakers" data-href="/sneakers/" data-analytics-parent="Pria - Alas Kaki">
    <span>Sneakers</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand" data-subcategories="true" data-category-level="2"
    data-id="ID_Men_Brand" data-name="Brand" data-href="<?php echo $urlPath ?>" data-analytics-parent="Pria">
    <span>Brand</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="<?php echo $urlPath ?>" data-analytics-name="Brand"
            data-analytics-parent"Pria" data-subcategories="false" >
            All Brand
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_NorthStar" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_NorthStar" data-name="North Star" data-href="<?php echo $urlPath ?>north-star/" data-analytics-parent="Pria - Brand">
    <span>North Star</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_Power" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_Power" data-name="Power" data-href="<?php echo $urlPath ?>power/" data-analytics-parent="Pria - Brand">
    <span>Power</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_Bata3D" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_Bata3D" data-name="Bata 3D" data-href="<?php echo $urlPath ?>bata-3d/" data-analytics-parent="Pria - Brand">
    <span>Bata 3D</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_BataComfit" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_BataComfit" data-name="Bata Comfit" data-href="<?php echo $urlPath ?>bata-comfit/" data-analytics-parent="Pria - Brand">
    <span>Bata Comfit</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_Bata" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_Bata" data-name="Bata" data-href="<?php echo $urlPath ?>bata/" data-analytics-parent="Pria - Brand">
    <span>Bata</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_PataPata" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_PataPata" data-name="PataPata" data-href="<?php echo $urlPath ?>patapata/" data-analytics-parent="Pria - Brand">
    <span>PataPata</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Brand_BataRedLabel" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Brand_BataRedLabel" data-name="Bata Red Label" data-href="<?php echo $urlPath ?>bata-red-label/" data-analytics-parent="Pria - Brand">
    <span>Bata Red Label</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Accessories" data-subcategories="true" data-category-level="2"
    data-id="ID_Men_Accessories" data-name="Aksesoris" data-href="/" data-analytics-parent="Pria">
    <span>Aksesoris</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/" data-analytics-name="Aksesoris"
            data-analytics-parent"Pria" data-subcategories="false" >
            All Aksesoris
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Accessories_Belts" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Accessories_Belts" data-name="Ikat Pinggang" data-href="/ikat-pinggang/" data-analytics-parent="Pria - Aksesoris">
    <span>Ikat Pinggang</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Accessories_MenBags" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Accessories_MenBags" data-name="Tas Pria" data-href="/tas-pria/" data-analytics-parent="Pria - Aksesoris">
    <span>Tas Pria</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Men_Accessories_Socks" data-subcategories="false" data-category-level="3"
    data-id="ID_Men_Accessories_Socks" data-name="Kaos Kaki" data-href="/kaos-kaki/" data-analytics-parent="Pria - Aksesoris">
    <span>Kaos Kaki</span>
    
</div>
        
        
    
</div>

    
</div>
        

        
    
</div>

    
</div>
                
                    

                    
                    
                    
                    

                    <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids" data-subcategories="true" data-category-level="1"
    data-id="ID_Kids" data-name="Anak-anak" data-href="/" data-analytics-parent="false">
    <span>Anak-anak</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='2'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/" data-analytics-name="Anak-anak" 
            data-analytics-parent="false" data-subcategories="false">
            Temukan semua produk
        </a>

        

        
            <div class="cc-mobile-promo">
                
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="4bc0519094efc18dd925c05261" -->
        <li class="cc-menu-item cc-menu-item-2 cc-menu-item-parent"> <a class="cc-menu-item-link cc-main-navigation-link-2" href=#>Featured
      <span class="cc-menu-item-link-icon d-lg-none"></span>
   </a>

  <ul class="cc-content-items-3 d-lg-block" role="menu" aria-hidden="true" aria-label="Featured">
    <li class="cc-menu-item cc-menu-item-3 d-lg-block"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/brand/bubblegummers/">Bubble Gummers</a> 
    </li>
    <li class="cc-menu-item cc-menu-item-3"> <a class="cc-menu-item-link cc-category-navigation-link" href="https://www.bata.com/id/koleksi-terbaru/anak-anak/">Koleksi Terbaru</a> 
    </li>
  </ul>
</li>
    </div> <!-- End content-asset -->



            </div>
        

        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Boys" data-subcategories="true" data-category-level="2"
    data-id="ID_Kids_Boys" data-name="Anak Laki-laki" data-href="/anak-laki-laki/" data-analytics-parent="Anak-anak">
    <span>Anak Laki-laki</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/anak-laki-laki/" data-analytics-name="Anak Laki-laki"
            data-analytics-parent"Anak-anak" data-subcategories="false" >
            All Anak Laki-laki
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Boys_Sandals" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Boys_Sandals" data-name="Sandal" data-href="/anak-laki-laki/sandal/" data-analytics-parent="Anak-anak - Anak Laki-laki">
    <span>Sandal</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Boys_Shoes" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Boys_Shoes" data-name="Sepatu" data-href="/anak-laki-laki/sepatu/" data-analytics-parent="Anak-anak - Anak Laki-laki">
    <span>Sepatu</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Boys_Sneakers" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Boys_Sneakers" data-name="Sneakers" data-href="/anak-laki-laki/sneakers/" data-analytics-parent="Anak-anak - Anak Laki-laki">
    <span>Sneakers</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Girls" data-subcategories="true" data-category-level="2"
    data-id="ID_Kids_Girls" data-name="Anak Perempuan" data-href="/" data-analytics-parent="Anak-anak">
    <span>Anak Perempuan</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/" data-analytics-name="Anak Perempuan"
            data-analytics-parent"Anak-anak" data-subcategories="false" >
            All Anak Perempuan
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Girls_Sandals" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Girls_Sandals" data-name="Sandal" data-href="/sandal/" data-analytics-parent="Anak-anak - Anak Perempuan">
    <span>Sandal</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Girls_Shoes" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Girls_Shoes" data-name="Sepatu" data-href="/sepatu/" data-analytics-parent="Anak-anak - Anak Perempuan">
    <span>Sepatu</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Girls_Sneakers" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Girls_Sneakers" data-name="Sneakers" data-href="/sneakers/" data-analytics-parent="Anak-anak - Anak Perempuan">
    <span>Sneakers</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand" data-subcategories="true" data-category-level="2"
    data-id="ID_Kids_Brand" data-name="Brand" data-href="/brand/" data-analytics-parent="Anak-anak">
    <span>Brand</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/brand/" data-analytics-name="Brand"
            data-analytics-parent"Anak-anak" data-subcategories="false" >
            All Brand
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand_BFirst" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Brand_BFirst" data-name="B-First" data-href="/brand/b-first/" data-analytics-parent="Anak-anak - Brand">
    <span>B-First</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand_Bata" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Brand_Bata" data-name="Bata" data-href="/brand/bata/" data-analytics-parent="Anak-anak - Brand">
    <span>Bata</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand_BubbleGummers" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Brand_BubbleGummers" data-name="BubbleGummers" data-href="/brand/bubblegummers/" data-analytics-parent="Anak-anak - Brand">
    <span>BubbleGummers</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand_Disney" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Brand_Disney" data-name="Disney" data-href="/brand/disney/" data-analytics-parent="Anak-anak - Brand">
    <span>Disney</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand_NorthStar" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Brand_NorthStar" data-name="North Star" data-href="/brand/north-star/" data-analytics-parent="Anak-anak - Brand">
    <span>North Star</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Brand_Power" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Brand_Power" data-name="Power" data-href="/brand/power/" data-analytics-parent="Anak-anak - Brand">
    <span>Power</span>
    
</div>
        
        
    
</div>

    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_School" data-subcategories="false" data-category-level="2"
    data-id="ID_Kids_School" data-name="Sepatu Sekolah" data-href="/" data-analytics-parent="Anak-anak">
    <span>Sepatu Sekolah</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Infant" data-subcategories="false" data-category-level="2"
    data-id="ID_Kids_Infant" data-name="Bayi" data-href="/bayi/" data-analytics-parent="Anak-anak">
    <span>Bayi</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Accessories" data-subcategories="true" data-category-level="2"
    data-id="ID_Kids_Accessories" data-name="Aksesoris" data-href="/aksesoris/" data-analytics-parent="Anak-anak">
    <span>Aksesoris</span>
    
        <svg class="iconClassCommon cc-header-mobileMenu-body-arrowIcon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
        




<div class="js-menuMobileSubCategory d-none" data-level='3'>
    
        <a class="cc-header-mobileMenu-body-item cc-showAll js-analytics-category" href="/aksesoris/" data-analytics-name="Aksesoris"
            data-analytics-parent"Anak-anak" data-subcategories="false" >
            All Aksesoris
        </a>

        

        
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Accessories_Bag" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Accessories_Bag" data-name="Tas" data-href="/aksesoris/tas/" data-analytics-parent="Anak-anak - Aksesoris">
    <span>Tas</span>
    
</div>
        
            
            
            
            

            <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category "
    id="mobile-ID_Kids_Accessories_Socks" data-subcategories="false" data-category-level="3"
    data-id="ID_Kids_Accessories_Socks" data-name="Kaos Kaki" data-href="/aksesoris/kaos-kaki/" data-analytics-parent="Anak-anak - Aksesoris">
    <span>Kaos Kaki</span>
    
</div>
        
        
    
</div>

    
</div>
        

        
    
</div>

    
</div>
                
                    

                    
                    
                    
                    

                    <div class="cc-header-mobileMenu-body-item js-menu-item js-analytics-category cc-highlight"
    id="mobile-ID_WeeklyDeals" data-subcategories="false" data-category-level="1"
    data-id="ID_WeeklyDeals" data-name="Promo Februari" data-href="/id/promo-februari/" data-analytics-parent="false">
    <span>Promo Februari</span>
    
</div>
                
            
        </div>

        <div class="cc-header-mobileMenu-footer js-category-container lv1">
            





    <a class="cc-header-mobileMenu-footer-link" href="https://www.bata.com/">
        <svg class="iconClassCommon cc-header-mobileMenu-footer-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-user" />
</svg>
        <span class="cc-header-mobileMenu-footer-label">
            Masuk
        </span>
    </a>
    <a class="cc-header-mobileMenu-footer-link" href="https://www.bata.com/id/wishlist">
        <svg class="iconClassCommon cc-header-mobileMenu-footer-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-wishlist" />
</svg>
        <span class="cc-header-mobileMenu-footer-label">
            Wishlist
        </span>
    </a>
    <a class="cc-header-mobileMenu-footer-link trackLink " href="<?php echo $urlPath ?>">
        <svg class="iconClassCommon cc-header-mobileMenu-footer-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-orders" />
</svg>
        <span class="cc-header-mobileMenu-footer-label">
            Pesanan Saya
        </span>
    </a>

<a class="cc-header-mobileMenu-footer-link" href="https://www.bata.com/?showMap=true&amp;horizontalView=true&amp;isForm=true">
    <svg class="iconClassCommon cc-header-mobileMenu-footer-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-store" />
</svg>
    <span class="cc-header-mobileMenu-footer-label">
        Toko
    </span>
</a>


        </div>

        
<a class="cc-header-mobileMenu-body-link" href="<?php echo $urlPath ?>">Bata Club</a>
        

        <a class="cc-header-mobileMenu-body-link" href="<?php echo $urlPath ?>">Hubungi Kami</a>
        
            <a class="cc-header-mobileMenu-body-link country-selector-icon" href="#">
                Change language
                
                
                <img class="cc-language-switch-image" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw0e2693ab/images/flags--id.svg" alt="Bahasa Indonesia" width="60" height="40" loading="lazy" />
            </a>
        
    </div>

    <div class="js-category-container lv2 cc-header-mobileMenu-body d-none"></div>
    <div class="js-category-container lv3 cc-header-mobileMenu-body d-none"></div>
</section>
    </nav>
    <div class="cc-content-main-search search">
        
        



<div class="cc-content-search cc-form-group site-search cc-search-custom-container">
    <form role="search" action="/id/search" method="get" name="simpleSearch">
        <div class="cc-content-input">
            <input class="cc-input cc-search form-control search-field top-bar" type="text" id="search-input-top-bar" name="q" value="" placeholder="Cari" role="combobox" aria-describedby="search-assistive-text" aria-haspopup="listbox" aria-owns="search-results" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="" aria-controls="search-results" aria-label="Masukkan Kata Kunci atau No. Barang" autocomplete="off" />
            <div id="suggestions-wrapper" class="suggestions-wrapper cc-suggestions-wrapper d-none" data-url="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/SearchServices-GetSuggestions?q=">
                <div class="suggestions">
                    <div class="suggestions-no-results cc-search-row-no-results">
                        <div class="suggestions-quick-links-no-results">
                            




<!-- dwMarker="content" dwContentID="af64d0453f054927c3be6369ba" -->
<div class="b-suggestions__container">
   <h4 class="b-suggestions__title">Tautan Langsung</h4>
   <ul>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/id/diskon/">
         Diskon
         </a>
      </li>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/id/koleksi-terbaru/">
         Koleksi Terbaru
         </a>
      </li>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/id/pesanan/tracking">
         Telusuri pesanan
         </a>
      </li>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/?showMap=true&amp;horizontalView=true">
         Toko 
         </a>
      </li>
   </ul>
</div>
<!-- End content-asset -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="js-closeSearch">
            <svg class="iconClassCommon cc-icon cc-icon-close-search">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#close-remove" />
</svg>
        </span>
        <button type="submit" class="cc-icon-search-button" name="search-button" aria-label="Kirim kata kunci pencarian">
            <svg class="iconClassCommon cc-icon cc-icon-search">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#search" />
</svg>
        </button>
        <input type="hidden" value="in_ID" name="lang" />
    </form>
</div>
    </div>
</div>

            </div>
        </div>
        
        <div class="cc-content-search-mobile js-searchBarMobile ">
            
            



<div class="cc-content-search cc-form-group site-search cc-search-custom-container">
    <form role="search" action="/id/search" method="get" name="simpleSearch">
        <div class="cc-content-input">
            <input class="cc-input cc-search form-control search-field top-bar" type="text" id="search-input-top-bar-mobile" name="q" value="" placeholder="Cari" role="combobox" aria-describedby="search-assistive-text" aria-haspopup="listbox" aria-owns="search-results" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="" aria-controls="search-results" aria-label="Masukkan Kata Kunci atau No. Barang" autocomplete="off" />
            <div id="suggestions-wrapper" class="suggestions-wrapper cc-suggestions-wrapper d-none" data-url="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/SearchServices-GetSuggestions?q=">
                <div class="suggestions">
                    <div class="suggestions-no-results cc-search-row-no-results">
                        <div class="suggestions-quick-links-no-results">
                            




<!-- dwMarker="content" dwContentID="af64d0453f054927c3be6369ba" -->
<div class="b-suggestions__container">
   <h4 class="b-suggestions__title">Tautan Langsung</h4>
   <ul>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/id/diskon/">
         Diskon
         </a>
      </li>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/id/koleksi-terbaru/">
         Koleksi Terbaru
         </a>
      </li>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/id/pesanan/tracking">
         Telusuri pesanan
         </a>
      </li>
      <li><a class="b-suggestions__hit" href="https://www.bata.com/?showMap=true&amp;horizontalView=true">
         Toko 
         </a>
      </li>
   </ul>
</div>
<!-- End content-asset -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="js-closeSearch">
            <svg class="iconClassCommon cc-icon cc-icon-close-search">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#close-remove" />
</svg>
        </span>
        <button type="submit" class="cc-icon-search-button" name="search-button" aria-label="Kirim kata kunci pencarian">
            <svg class="iconClassCommon cc-icon cc-icon-search">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#search" />
</svg>
        </button>
        <input type="hidden" value="in_ID" name="lang" />
    </form>
</div>
        </div>
    </div>
</header>


   

  
<div role="main" id="maincontent">






    
    
    
    <!-- analytics fallback data to avoid nullpointer exception in console-->
    <!-- set of variables setted only to avoid nullpointer exception in console -->


    <!-- end of analytics data -->

    

    
    
    
    
    <!-- CQuotient Activity Tracking (viewProduct-cquotient.js) -->
<script type="text/javascript">//<!--
/* <![CDATA[ */
(function(){
  try {
    if(window.CQuotient) {
      var cq_params = {};
      cq_params.product = {
          id: '540M_TA8712550502M',
          sku: '',
          type: 'vgroup',
          alt_id: '540M_2022_8716255'
        };
      cq_params.realm = "BCLG";
      cq_params.siteId = "bata-id";
      cq_params.instanceType = "prd";
      window.CQuotient.trackViewProduct(cq_params);
    }
  } catch(err) {}
})();
/* ]]> */
// -->
</script>
<script type="text/javascript">//<!--
/* <![CDATA[ (viewProduct-active_data.js) */
dw.ac._capture({id: "540M_2022_8716255", type: "detail"});
/* ]]> */
// -->
</script>

    
        
            
        
    
        
    
        
    

    <div class="container product-detail product-wrapper cc-product-detail cc-cat-pria" data-pid="540M_2022_8716255">

        <div class="cc-pdp-row">
            <!-- Product Images Carousel or 360 Image -->
            <div class="primary-images cc-pdp-col-images">

    
    <div class="product-breadcrumb">
        <div class="cc-pdp-breadcrumbs-container col" role="navigation" aria-label="Breadcrumb">
    <ol class="breadcrumb cc-pdp-breadcrumbs" data-target="breadcrumbs">
        
            <li class="breadcrumb-item cc-breadcrumb-item">
                
                    <a href="">
                     <?php echo $BRANDS ?>
                    </a>
                
            </li>
        
            <li class="breadcrumb-item cc-breadcrumb-item">
                
                    <a href="">
                        Slot Gacor
                    </a>
                
            </li>
        
            <li class="breadcrumb-item cc-breadcrumb-item">
                
                    <a href="" aria-current="page">
                        Situs Gacor
                    </a>
                
            </li>
        
    </ol>
</div>

    </div>

    <div class="cc-pdp-carousels-container">

        <div class="cc-badge" data-target="pdp-badge">
            
            <span class="cc-label-newin">
                
            </span>
        </div>

        
        
        
        <div class="try-on-redirected d-none" data-used-try-on = "false"></div>
        <div class="pdp-images-carousel cc-pdp-images-carousel ">
            
                
                    <div class='cc-pdp-carousel-item active' data-image-position="0">
                        <div class="cc-container-dis-picture">
        <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=384 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=768 2x" media="(max-width: 767px)" width="720" height="720" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=547 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=1094 2x" media="(max-width: 1199px) and (min-width: 768px)" width="649" height="649" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=817 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=1634 2x" media="(min-width: 1200px)" width="817" height="817" />
                <!--[if IE 9]></video><![endif]-->

                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=817" alt="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" title="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="b-lazyload"  width="817" height="817" loading="lazy" />
        </picture>
        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw86dc2462/images/loader.svg" alt="loader" class="cc-dis-loader-img" />
</div>
                    </div>
                
                    <div class='cc-pdp-carousel-item ' data-image-position="1">
                        <div class="cc-container-dis-picture">
        <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=384 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=768 2x" media="(max-width: 767px)" width="720" height="720" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=547 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=1094 2x" media="(max-width: 1199px) and (min-width: 768px)" width="649" height="649" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=817 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=1634 2x" media="(min-width: 1200px)" width="817" height="817" />
                <!--[if IE 9]></video><![endif]-->

                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=817" alt="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" title="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="b-lazyload"  width="817" height="817" loading="lazy" />
        </picture>
        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw86dc2462/images/loader.svg" alt="loader" class="cc-dis-loader-img" />
</div>
                    </div>
                
            
        </div>

        <div class="cc-container-zoom-icon js-zoom-icon " data-target="zoom-modal-ajax">
            <div class="icon-zoom"></div>
            <span>Perbesar</span>
        </div>

        <ul class="pdp-carousel-thumbnails cc-pdp-carousel-thumbnails">
            
                <li data-slide-to="0" class="cc-pdp-thumbnails-carousel-item">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-lazy="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=140&amp;sh=140" alt="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="b-lazyload" />
                </li>
                
            
                <li data-slide-to="1" class="cc-pdp-thumbnails-carousel-item">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-lazy="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwaaea03d9/images/large/8716255_2.jpg?sw=140&amp;sh=140" alt="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="b-lazyload" />
                </li>
                
            
        </ul>
    </div>

    
    <div id="zoom-target" class="cc-zoom-target" data-url-base-zoom='https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-ShowProductZoom?pid=' data-url-zoom='https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-ShowProductZoom?pid=540M_2022_8716255'></div>
</div>


            
            

            <div class="pdp-col-description cc-pdp-col-description">

                <!-- Brand Logo -->
                <div class="brand-logo">
                    
                        <div class="b-pdp__product-label cc-brand-img">
        <img
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            data-lazy="https://i.ibb.co.com/qj51fdm/logo.png"
            class="b-lazyload"
            alt="BATA"
            title="BATA"
            data-target="brandLogo"
            width="104"
            height="24"
        />
    </div>
                </div>

                <!-- Product Name -->
                <h1 class="product-name cc-pdp-product-name"><?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG</h1>

                <!-- Prices -->
                <div class="prices cc-pdp-prices">
                    
                    
                    
    
    
    <div>
        

        
        
        <span class="sales  ">
            
            
            
                <span class="cc-price" content="10000.00">
            
                Rp 50,000


            </span>
        </span>

        
    </div>



                    











    
    
            
            
    









                </div>
                
                <!-- Applicable Promotions -->
                <div class="pdp-promotions">
                    


    


                </div>

                

                
                

                <div class = "js-club-price d-none">
                    
                </div>

                <div class="attributes cc-attributes">
                    <!-- Attributes and Quantity -->
                    

                    
                    

                    
                    



    
        <div data-attr="color">
            




<div class="attribute">
    

        <!-- Select <Attribute> Label -->

        
        

        <div class="color-selected cc-color-selected">
            <span>Warna: </span>
            <span class="color-value" data-placeholder="Pilih warna">
                
                    
                
                    
                        
                        
                        HITAM
                    
                
                
            </span>
        </div>

        <!-- Circular Swatch Image Attribute Values -->
        
        <div class="swatches-container cc-swatches-container">
            
                
                
                
                    
                    <button class="color-attribute cc-color-attribute cc-imageAttribute selectable  analytics-variantSelected"
                        aria-label="Pilih Warna BIRU NAVY"
                        aria-describedby="NAVY_BLUE" data-url="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=NAVY_BLUE&amp;pid=540M_TA8712550502M&amp;quantity=1"
                        data-value="BIRU NAVY" data-color="NAVY_BLUE">
                        
                            
                            
                            <span data-attr-value="NAVY_BLUE" class="color-value swatch-value cc-image">
                                <div class="cc-container-dis-picture">
        <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=210 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=420 2x" media="(max-width: 767px)" width="720" height="720" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=302 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=604 2x" media="(max-width: 1199px) and (min-width: 768px)" width="649" height="649" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=362 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=724 2x" media="(min-width: 1200px)" width="817" height="817" />
                <!--[if IE 9]></video><![endif]-->

                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw57773830/images/tile/8719255_1.jpg?sw=362" alt="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" title="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="b-lazyload"  width="817" height="817" loading="lazy" />
        </picture>
        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw86dc2462/images/loader.svg" alt="loader" class="cc-dis-loader-img" />
</div>
                            </span>
                        
                        <span id="NAVY_BLUE" class="sr-only selected-assistive-text">
                            
                        </span>
                    </button>
                
            
                
                
                
                    
                    <button class="color-attribute cc-color-attribute cc-imageAttribute selectable selected analytics-variantSelected"
                        aria-label="Pilih Warna HITAM"
                        aria-describedby="BLACK" data-url="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=&amp;pid=540M_TA8712550502M&amp;quantity=1"
                        data-value="HITAM" data-color="BLACK">
                        
                            
                            
                            <span data-attr-value="BLACK" class="color-value swatch-value cc-image">
                                <div class="cc-container-dis-picture">
        <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=210 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=420 2x" media="(max-width: 767px)" width="720" height="720" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=302 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=604 2x" media="(max-width: 1199px) and (min-width: 768px)" width="649" height="649" />
                <source data-srcset="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=362 1x,https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=724 2x" media="(min-width: 1200px)" width="817" height="817" />
                <!--[if IE 9]></video><![endif]-->

                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dwc1b0a76f/images/tile/8716255_1.jpg?sw=362" alt="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" title="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="b-lazyload"  width="817" height="817" loading="lazy" />
        </picture>
        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw86dc2462/images/loader.svg" alt="loader" class="cc-dis-loader-img" />
</div>
                            </span>
                        
                        <span id="BLACK" class="sr-only selected-assistive-text">
                            terpilih
                        </span>
                    </button>
                
            
        </div>
    
</div>






            
        </div>
    
        <div data-attr="id_sizecode_d">
            




<div class="attribute">
    
        <div class="color-selected cc-color-selected ">
    <span>Tipe ukuran: </span>
    <span class="js-size-type cc-size-type-value-pdp">EU</span>
</div>

        <!-- Select <Attribute> Label -->
        
        


            
            

            <div class="cc-size-label-container">
                <div class="size-selected cc-size-selected">
                    <span>Ukuran: </span>
                    <span class="size-value cc-size-value" data-placeholder="Pilih ukuran">
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                            
                        
                        Pilih ukuran
                    </span>
                </div>

                
                <div class="size-guide-asset-container cc-size-guide-asset-container">
                    <span class="cc-size-guide-not-found js-error-size-guide d-none">
                        There is no size guide available for this product
                    </span>
                    <a class="cc-size-guide-asset-link" id="size-guide-asset" data-cmp="dialogLink"
                        data-dialog-class="b-size-guide__pop-up"
                        href="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-ContentAssetInPdp?asset=size-guide-asset&amp;pid=540M_2022_8716255">
                        Petunjuk Ukuran
                    </a>
                    <div id="destination-size-guide-modal" class="d-none">
                        <div id="size-modal" class="modal cc-pdp-size-guide-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header cc-pdp-modal-header">
                                        <button type="button" class="button-close cc-pdp-button-close"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="icon-close-remove"></span>
                                        </button>
                                    </div>
                                    <div class="content cc-container-content-asset-sizeguide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attribute Values Drop Down Menu -->
            <div class="container-size-list cc-container-size-list" id="size-null">
                
                <ul id="size-ul-list" class="cc-size-ul-list"
                    data-hide-out-of-stock-swatches="true">
                    
                        
                    
                        
                    
                        
                        
                            <li class="single-size-tile cc-single-size-tile  selectable"
                                data-display-value="40" data-attr-value="060"
                                value="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=BLACK&amp;dwvar_540M__TA8712550502M_id_sizecode_d=060&amp;pid=540M_TA8712550502M&amp;quantity=1">
                                40
                            </li>
                        
                    
                        
                        
                            <li class="single-size-tile cc-single-size-tile  selectable"
                                data-display-value="41" data-attr-value="070"
                                value="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=BLACK&amp;dwvar_540M__TA8712550502M_id_sizecode_d=070&amp;pid=540M_TA8712550502M&amp;quantity=1">
                                41
                            </li>
                        
                    
                        
                        
                            <li class="single-size-tile cc-single-size-tile  selectable"
                                data-display-value="42" data-attr-value="080"
                                value="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=BLACK&amp;dwvar_540M__TA8712550502M_id_sizecode_d=080&amp;pid=540M_TA8712550502M&amp;quantity=1">
                                42
                            </li>
                        
                    
                        
                        
                            <li class="single-size-tile cc-single-size-tile  selectable"
                                data-display-value="43" data-attr-value="090"
                                value="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=BLACK&amp;dwvar_540M__TA8712550502M_id_sizecode_d=090&amp;pid=540M_TA8712550502M&amp;quantity=1">
                                43
                            </li>
                        
                    
                        
                        
                            <li class="single-size-tile cc-single-size-tile  selectable"
                                data-display-value="44" data-attr-value="100"
                                value="https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-Variation?dwvar_540M__TA8712550502M_color=BLACK&amp;dwvar_540M__TA8712550502M_id_sizecode_d=100&amp;pid=540M_TA8712550502M&amp;quantity=1">
                                44
                            </li>
                        
                    
                        
                    
                        
                    
                </ul>
            </div>
        

    
</div>






            
                <!-- Quantity Drop Down Menu -->
                <div class="attribute quantity d-none">
                    
<select class="quantity-select custom-select form-control d-none" id="quantity-1">
        <option value="1" selected > 1 </option>
</select>



                </div>
            
        </div>
    



                    

                    

                    <!-- Product Availability -->
                    <!-- Availability -->
<div class="availability product-availability cc-product-availability" data-ready-to-order="false" data-available="true">
    
<div class="list-unstyled availability-msg cc-availability-msg">
    
        <div class="b-pdp__availability b-pdp__availability-select h-hidden js-reminder-hint availability-msg-hint d-none"
            data-cmp="block" data-id="reminderHint">
            
                Pilih ukuran
            
        </div>
    
</div>

</div>



                    <div class="prices-add-to-cart-actions cc-prices-add-to-cart-actions">
                        

                        <!-- Cart and [Optionally] Apple Pay -->
                        <div class="row">

                            
                            
                            <div class="col-sm">
                                <div class="cart-and-ipay">
    <input type="hidden" class="add-to-cart-url" value="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Cart-AddProduct">
    <a href="#"><button class="add-to-cart cc-button-type-1"
        > 
        DAFTAR SEKARANG
    </button></a>
    
</div>
                            </div>
                        </div>
                        <div class="cc-add-more-info">
                            Tekan tombol secara berulang untuk menambah kuantitas barang.
                        </div>

                        

                        
                            
                            





<button type="button"
        data-target="#modalFindInStore"
        data-toggle="modal"
        id="findInStoreButton"
        data-cmp="findInStoreButton"
        data-dialog-class="ui-find-in-store"
        data-title="Temukan di toko"
        data-url-target="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Stores-FindInStores"
        data-url-customer="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Stores-CustomerInfo"
        data-address-customer
        data-pid="540M_2022_8716255"
        data-product-type="variationGroup"
        data-cmp-id="findInStoreButton"
        data-userposition-error="Maaf, barang ini saat ini tidak tersedia di toko kami."
        class="b-pdp__findinstore cc-button-type-3 cc-pdp__findinstore "
    >
    Temukan di toko
</button>


<!-- Modal -->
<div class="modal fade cc-modal-find-in-store" id="modalFindInStore" tabindex="-1" role="dialog" aria-labelledby="modalFindInStoreTitle"
    aria-hidden="true">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABjgT7xQEGJeoVlnCr9apaFrdjE7i33n8&amp;libraries=geometry,places" async></script>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFindInStoreLongTitle">Temukan di toko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-close-remove" aria-hidden="true"></span>
                </button>
            </div>
            <div class="b-find-store__description cc-find-store__description">
                
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="2101ab4e8d7c1424e0bac00b9b" -->
        <p>Sebelum memilih toko, perlu diingat produk tersedia mungkin bisa dipengaruhi oleh transaksi offline yang sedang berjalan atau customer lain yang sedang bertransaksi online di waktu yang sama.</p>
    </div> <!-- End content-asset -->



            </div>
            <div class="modal-container-loader">
                <div class="modal-form">
                    <div class="form-group cc-form-group cc-form-group-centered required">
                        <div class="cc-content-icon">
                            <button class="cc-icon icon-locator-small" id="storeLocationButton"></button>
                            
                            <input type="text" class="form-control cc-input cc-find-in-store-input" id="queryStoreParam" name="queryStoreParam"
                                value="" autocomplete="nofill"
                                placeholder="Masukkan kota, alamat atau pin lokasi"
                                data-place-types=""
                                data-template-pin="storeMarkerTemplate" 
                                data-template-tile="clickCollectStoreListTemplate"
                                required />
                            <button class="btn-storelocator-search" type="submit"
                                id="searchStore">CARI</button>
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>

                </div>
                <div class="modal-body grid-container show-instore-flex">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="cc-button-type-7 cc-load-more" id="storeLoadMore">Tampilkan berikutnya</button>
            </div>
        </div>
    </div>
    <template id="singleStoreTile">
        <div class="card-body storeDescription d-none js-storeContainer grid-item">
            <div class="store-details js-storeId" data-store-id="" type="" storebrand="">
                <div class="store-title">
                    <a class="js-storeName" href=""></a>
                </div>
                <div class="store-distance js-storeDistance"></div>
                <address>
                    <div class="cc-address-container">
                        <span class="js-storeAddress"></span>
<span class="js-storeSubdistrict"></span>
<span class="js-storeDistrict"></span>
<span class="js-storeCity"></span>
<span class="js-storeStateCode"></span>
<span class="js-postalCode"></span>

                    </div>
                    <div class="cc-advanced-info-container">
                        <span>
                            <a class="storelocator-phone js-storePhone" href=""></a>
                        </span>
                    </div>
                    <div class="store-hours js-storeHours"></div>
                </address>
            </div>
        </div>
    </template>
</div>

                        

                    </div>

                    <!-- Social Sharing Icons -->
                    
                        



<div class="cc-social-wishlistbtn-container"> 
    <button type="submit" class="add-to-wish-list cc-add-to-wish-list "
        data-add-href="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Wishlist-AddProduct"
        data-remove-href="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Wishlist-RemoveProduct">
        <span class="cc-add-wishlist wishlist-content-add">
            <span class="icon-wishlist"></span> <span>Tambahkan ke daftar keinginan</span>
        </span>
        <span class="cc-remove-wishlist wishlist-content-remove d-none">
            <span class="icon-wishlist-added"></span> <span>Hapus dari daftar keinginan</span>
        </span>
</button>

    <div class="social-container cc-social-container">
        <ul class="social-icons cc-social-icons d-flex justify-content-end" data-analytics-pid="540M_2022_8716255">
            <li>
                <a class="js-analytics-socialIcon" href="https://www.facebook.com/share.php?u=https%3A%2F%2Fwww.bata.com%2Fid%2Fpria%2Falas-kaki%2Fsandal%2Fmen-sandal-casual-lando-540M_2022_8716255.html" title="Share <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG on Facebook" data-share="facebook" aria-label="Share <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG on Facebook" class="share-icons" target="_blank">
                    <span class="icon-facebook-letter"></span>
                </a>
            </li>
            <li>
                <a class="js-analytics-socialIcon" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.bata.com%2Fid%2Fpria%2Falas-kaki%2Fsandal%2Fmen-sandal-casual-lando-540M_2022_8716255.html&description=Men%20Sandal%20Casual%20LANDO&media=https%3A%2F%2Fwww.bata.com%2Fdw%2Fimage%2Fv2%2FBCLG_PRD%2Fon%2Fdemandware.static%2F-%2FSites-bata-id-master-catalog%2Fdefault%2Fdw804436ed%2Fimages%2Flarge%2F8716255_1.jpg%3Fsw%3D800%26sh%3D800" data-share="pinterest" title="Create a Pinterest Pin for <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" aria-label="Create a Pinterest Pin for <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" class="share-icons" target="_blank">
                    <span class="icon-pinterest"></span>
                </a>
            </li>
            <li>
                <a class="js-analytics-socialIcon" href="https://twitter.com/share?url=https%3A%2F%2Fwww.bata.com%2Fid%2Fpria%2Falas-kaki%2Fsandal%2Fmen-sandal-casual-lando-540M_2022_8716255.html&text=<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG" data-share="twitter" title="Share a link to <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG on Twitter" aria-label="Share a link to <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG on Twitter" class="share-icons" target="_blank">
                    <div class="cc-icon-twitter-container">
                        <span class="icon-twitter"></span>
                    </div>
                </a>
            </li>
            <li>
            <input type="hidden" id="shareUrl" value="https://www.bata.com/id/pria/men-sandal-casual-lando-540M_2022_8716255.html"/>
            </li>
        </ul>
    </div>
    <div class="copy-link-message d-none">
        <div class="alert alert-success text-center">
            The link to <?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG has been copied
        </div>
    </div>
</div>
                    

                    <!-- Product Details Info-->
                    
    <div class="b-product-info">
        <ul id="pdp-accordions" class="b-accordion b-pdp__product-tabs cc-pdp-accordions">
            <div class="card b-accordion__item cc-pdp-accordion-card">
                <div class="card-header" id="headingInfoAccordion">
                    <h5 class="mb-0 cc-accordion-header-title">
                        <button data-toggle="collapse" data-target="#infoAccordion" aria-expanded="true"
                            aria-controls="infoAccordion">
                            <span>Tentang Produk</span>
                            <span class="icon-arrow-up"></span>
                        </button>
                    </h5>
                </div>

                <div id="infoAccordion" class="collapse show" aria-labelledby="headingInfoAccordion"
                    data-parent="#pdp-accordions">
                    <div class="card-body">
                        <div class="b-accordion__content">
                            <div class="b-tabs_product-description">
                                <div
                                    class="b-pdp__description-subtitle cc-pdp__description-subtitle d-none">
                                    <div class="cc-pdp__description-subtitle-label">Fitur utama</div>
                                    <span class="b-pdp__description cc-pdp__description" data-target="keyFeatures">
                                        
                                    </span>
                                </div>
                                <div
                                    class="b-pdp__description-subtitle cc-pdp-description-subtitle ">
                                    <div class="cc-pdp-description-subtitle-label">Deskripsi</div>
                                    <span class="b-pdp__description" data-target="longDescription">
                                    <?php echo $BRANDS ?>  merupakan link situs slot gacor server Thailand terbaru gampang menang dan terlengkap yang memiliki tingkat kemenangan yang tinggi.
                                    </span>
                                </div>
                                <div
                                    class="b-pdp__description-article ">
                                    <span
                                        class="cc-description-attribute-label">Nomer Barang :</span>
                                    <span data-target="articleNo">
                                        8716255</span>
                                </div>
                                <div class="b-pdp__description-brand ">
                                    <span class="cc-description-attribute-label">Merk:</span>
                                    <span data-target="brand">
                                        BATA
                                    </span>
                                </div>
                                

                                
                                
                                
                                
                                
                                <div
                                    class="b-pdp__description-color d-none">
                                    <span
                                        class="cc-description-attribute-label">Tinggi hak :</span>
                                    <span data-target="heelHeight">
                                        </span>
                                </div>
                                <div class="b-pdp__description-platformHeight d-none">
                                    <span class="cc-description-attribute-label">Platform height :</span>
                                    <span data-target="platformHeight">
                                        null
                                    </span>
                                </div>
                                <div
                                    class="b-pdp__description-color d-none">
                                    <span
                                        class="cc-description-attribute-label">Tinggi sepatu :</span>
                                    <span data-target="shoeHeight">
                                        </span>
                                </div>
                                <div
                                    class="b-pdp__description-color d-none">
                                    <span class="cc-description-attribute-label">Tinggi:</span>
                                    <span data-target="dimHeight">
                                        </span>
                                </div>
                                <div
                                    class="b-pdp__description-color d-none">
                                    <span class="cc-description-attribute-label">Panjang:</span>
                                    <span data-target="dimWidth">
                                        </span>
                                </div>
                                <div
                                    class="b-pdp__description-color d-none">
                                    <span class="cc-description-attribute-label">Kedalaman:</span>
                                    <span data-target="dimDepth">
                                        </span>
                                </div>
                                <div class="b-pdp__description-strapLength d-none">
                                    <span class="cc-description-attribute-label">Strap length :</span>
                                    <span data-target="strapLength">
                                        null
                                    </span>
                                </div>
                                <div class="b-pdp__description-additionalHandle d-none">
                                    <span class="cc-description-attribute-label">Additional handle :</span>
                                    <span data-target="additionalHandle">
                                        null
                                    </span>
                                </div>
                                
                                <div class="b-pdp__material cc-pdp-material ">
                                    <span data-target="productMaterialHTML">
                                        <div class="b-pdp__material-title">
                                            <span class="cc-description-attribute-label">
                                                Bahan</span>
                                        </div>
                                        <ul class="b-pdp__material-list">
                                            
                                                <li class="b-pdp__material-item cc-pdp-material-item">
                                                    <div class="b-pdp__material-type cc-pdp__material-type ">
                                                        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dw949c2224/images/material/upper.svg"
                                                            alt="Upper" width="40" height="18" />
                                                        <span class="b-pdp__text">Upper</span>
                                                    </div>
                                                    <span class="b-pdp__material-info cc-pdp__material-info">
                                                        <img alt="PU"
                                                            src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwd86c17c6/images/material/other.svg"
                                                            title="PU" width="18" height="22" />
                                                        <span class="b-pdp__text">PU</span>
                                                    </span>
                                                </li>
                                            
                                                <li class="b-pdp__material-item cc-pdp-material-item">
                                                    <div class="b-pdp__material-type cc-pdp__material-type ">
                                                        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwdf82f338/images/material/outersole.svg"
                                                            alt="Outsole" width="40" height="18" />
                                                        <span class="b-pdp__text">Outsole</span>
                                                    </div>
                                                    <span class="b-pdp__material-info cc-pdp__material-info">
                                                        <img alt="RUBBER"
                                                            src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwd86c17c6/images/material/other.svg"
                                                            title="RUBBER" width="18" height="22" />
                                                        <span class="b-pdp__text">RUBBER</span>
                                                    </span>
                                                </li>
                                            
                                                <li class="b-pdp__material-item cc-pdp-material-item">
                                                    <div class="b-pdp__material-type cc-pdp__material-type ">
                                                        <img src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwba827c53/images/material/lining.svg"
                                                            alt="Jahitan" width="40" height="18" />
                                                        <span class="b-pdp__text">Jahitan</span>
                                                    </div>
                                                    <span class="b-pdp__material-info cc-pdp__material-info">
                                                        <img alt="PU"
                                                            src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/default/dwd86c17c6/images/material/other.svg"
                                                            title="PU" width="18" height="22" />
                                                        <span class="b-pdp__text">PU</span>
                                                    </span>
                                                </li>
                                            
                                        </ul>
                                    </span>
                                </div>
                                <div
    class="b-pdp__technical-description cc-pdp-technical-description d-none">
    <div class="cc-pdp-technical-description-label">
        technical description
    </div>
    <p>
        <span data-target="technicalDescription">
            
        </span>
    </p>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card b-accordion__item cc-pdp-accordion-card">
                <div class="card-header b-accordion__title js-accordion-header js-delivery-header"
                    data-cmp="productDeliveryAccordion" id="headingDeliveryAccordion">
                    <h5 class="mb-0 cc-accordion-header-title">
                        <button id="accordion-delivery-instruction" type="submit" class="collapsed"
                            data-toggle="collapse" data-target="#deliveryAccordion" aria-expanded="false"
                            aria-controls="deliveryAccordion">
                            <span> Pengiriman dan retur</span>
                            <span class="icon-arrow-up"></span>
                        </button>
                    </h5>
                </div>
                <div id="deliveryAccordion" class="collapse" aria-labelledby="headingDeliveryAccordion"
                    data-parent="#pdp-accordions">
                    <div class="card-body cc-card-body-asset">
                        <div class="h-position-relative b-accordion__content js-delivery-asset" id="destination-block"
                            data-cmp="preloaderBlock" data-preloader-event="delivery.accordion.ajax.start"
                            data-is-relative="true"
                            data-delivery-asset-id="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Product-ContentAssetInPdp?asset=delivery-asset&amp;pid=540M_2022_8716255">
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>


                </div>
            </div>
        </div>
        <!-- start of GTM -->
            <!-- product page (PDP)-->

<div class="analytics-productPDP analytics-product"
    data-name="<?php echo $BRANDS ?> 💣 LINK SLOT GACOR SERVER THAILAND TERBARU GAMPANG MENANG"
    data-id="540M_2022_8716255"
    data-dimension1="540M_TA8712550502M"
    data-dimension2="8716255"
    data-dimension3="540M_2022_8716255"
    data-price="179900.00"
    data-brand="BATA"
    data-category="ID_Men_Shoes_Sandals"
    data-description="<?php echo $BRANDS ?>  merupakan link situs slot gacor server Thailand terbaru gampang menang dan terlengkap yang memiliki tingkat kemenangan yang tinggi."
    data-producturl="<?php echo $urlPath ?>"
    data-categoryurl="https://www.bata.com/id/pria/"
    data-imageurl="https://www.bata.com/dw/image/v2/BCLG_PRDhttps://www.bata.com/on/demandware.static/-/Sites-bata-id-master-catalog/default/dw804436ed/images/large/8716255_1.jpg?sw=800&amp;sh=800"
    data-color="null"
    
    data-quantity="1.0"
    data-category1="Pria"
    data-category2="Alas Kaki"
    data-category3="Sandal"
    
    
    
    
    ></div>

        <!-- end of GTM -->
        
        

        

  
<!-- =============== This snippet of JavaScript handles fetching the dynamic recommendations from the remote recommendations server
and then makes a call to render the configured template with the returned recommended products: ================= -->

<script>
(function(){
// window.CQuotient is provided on the page by the Analytics code:
var cq = window.CQuotient;
if (cq && ('function' == typeof cq.getCQUserId)
&& ('function' == typeof cq.getCQCookieId)
&& ('function' == typeof cq.getCQHashedEmail)
&& ('function' == typeof cq.getCQHashedLogin)) {
var recommender = '[[&quot;carousel-pdp&quot;]]';
// removing any leading/trailing square brackets and escaped quotes:
recommender=recommender.replace(/\[|\]|&quot;/g,'');
var separator = '|||';
var slotConfigurationUUID = '882d6df4955d828a2dc7245de5';
var contextAUID = '540M_TA8712550502M';
var contextSecondaryAUID = '';
var contextAltAUID = '540M_2022_8716255';
var contextType = 'vgroup';
var anchorsArray = [];
var contextAUIDs = contextAUID.split(separator);
var contextSecondaryAUIDs = contextSecondaryAUID.split(separator);
var contextAltAUIDs = contextAltAUID.split(separator);
var contextTypes = contextType.split(separator);
var slotName = 'pdp-recommendations';
var slotConfigId = 'pdp_carousel_ID';
var slotConfigTemplate = 'slots/recommendation/einsteinRecommendedProducts.isml';
if (contextAUIDs.length == contextSecondaryAUIDs.length)
{
for (i = 0; i < contextAUIDs.length; i++) {
anchorsArray.push({id: contextAUIDs[i], sku: contextSecondaryAUIDs[i], type: contextTypes[i], alt_id: contextAltAUIDs[i]});
}
} else {
anchorsArray = [{id: contextAUID, sku: contextSecondaryAUID, type: contextType, alt_id: contextAltAUID}];
}
var urlToCall = 'https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/CQRecomm-Start';
var params = {
userId: cq.getCQUserId(),
cookieId: cq.getCQCookieId(),
emailId: cq.getCQHashedEmail(),
loginId: cq.getCQHashedLogin(),
anchors: anchorsArray,
slotId: slotName,
slotConfigId: slotConfigId,
slotConfigTemplate: slotConfigTemplate,
ccver: '1.03'
};
if (cq.getRecs) {
cq.getRecs(cq.clientId, recommender, params, cb);
} else {
cq.widgets = cq.widgets || [];
cq.widgets.push({
recommenderName: recommender,
parameters: params,
callback: cb
});
}
};
function cb(parsed) {
var arr = parsed[recommender].recs;
if (arr && 0 < arr.length) {
var filteredProductIds = '';
for (i = 0; i < arr.length; i++) {
filteredProductIds = filteredProductIds + 'pid' + i + '=' + encodeURIComponent(arr[i].id) + '&';
}
filteredProductIds = filteredProductIds.substring(0, filteredProductIds.length - 1);//to remove the trailing '&'
var formData = 'auid=' + encodeURIComponent(contextAUID)
+ '&scid=' + slotConfigurationUUID
+ '&' + filteredProductIds;
var request = new XMLHttpRequest();
request.open('POST', urlToCall, true);
request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
request.onreadystatechange = function() {
if (this.readyState === 4) {
// Got the product data from DW, showing the products now by changing the inner HTML of the DIV:
var divId = 'cq_recomm_slot-' + slotConfigurationUUID;
document.getElementById(divId).innerHTML = this.responseText;
//find and evaluate scripts in response:
var scripts = document.getElementById(divId).getElementsByTagName('script');
if (null != scripts) {
for (var i=0;i<scripts.length;i++) {//not combining script snippets on purpose
var srcScript = document.createElement('script');
srcScript.text = scripts[i].innerHTML;
srcScript.asynch = scripts[i].asynch;
srcScript.defer = scripts[i].defer;
srcScript.type = scripts[i].type;
srcScript.charset = scripts[i].charset;
document.head.appendChild( srcScript );
document.head.removeChild( srcScript );
}
}
}
};
request.send(formData);
request = null;
}
};
})();
</script>
<!-- The DIV tag id below is unique on purpose in case there are multiple recommendation slots on the same .isml page: -->
<div id="cq_recomm_slot-882d6df4955d828a2dc7245de5"></div>
<!-- ====================== snippet ends here ======================== --> 
  
        
   

  

        <!--recommended Carousel -->
        
    </div>
    

</div>




    




    
    

    <div class="cc-georedirect-container js-georedirect-container d-none"
        data-url="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/Page-SetLocale"
        data-error-url="/id/404"
        data-target-locale="in_ID"
        data-navigation-locale="in_ID">
        <div class="cc-georedirect-content">
                <div class="cc-georedirect-text__container">
                    
                        <span class="cc-georedirect-text__title">
                            Anda mengunjungi website ini dari Indonesia
                        </span>
                    
                    <span class="cc-georedirect-text__subtitle">
                        Kami menganjurkan anda untuk mengunjungi website Bata yang sesuai dengan negara asal anda untuk pengalaman terbaik. Mohon diingat bahwa ketersediaan barang, harga, dan area pengiriman akan bergantung dari website yang anda gunakan.
                    </span>
                </div>
            <div class="cc-georedirect-buttons__container">
                
                    <button type="button"
                        class="cc-button-type-1 cc-country-select js-country-select "
                        data-locale="in_ID"
                        data-currencycode="IDR"
                        data-site-id="bata-id"
                        >
                        <svg class="iconClassCommon cc-georedirect-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-shoppingcart" />
</svg>
                        <span>Pindah ke Indonesia</span>
                    </button>
                
                <button
                    class="cc-georedirect-go-to-country-selector"
                    onclick="window.location.href='https://www.bata.com/'"
                >
                    <svg class="iconClassCommon cc-georedirect-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-world" />
</svg>
                    Negara Lain
                </button>
            </div>
        </div>
        <button type="button" class="js-georedirect-close cc-georedirect-close cc-no-target-country button-close" aria-label="Close">
            <span aria-hidden="true" class="icon-close-remove"></span>
        </button>
    </div>




<footer class="cc-footer" id="footercontent">
    
        <div class="cc-footer-services">
            <div class="container">
                
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="3fef9ef6be08dacfabf3295c4a" -->
        <ul class="cc-services-list">
<li class="cc-services-item">
      <a href="https://www.bata.com/" class="cc-icon-link">
         <div class="cc-icon icon-benefit-pickup-in-store"></div>
         <div class="cc-item-label">Temukan<br>toko kami</div>
      </a>
   </li>
   <li class="cc-services-item">
         <div class="cc-icon icon-benefit-free-delivery"></div>
         <div class="cc-item-label">Gratis ongkir<br>sampai Rp.50.000</div>
   </li>
   <li class="cc-services-item">
      <a href="<?php echo $urlPath ?>" class="cc-icon-link">
         <div class="cc-icon icon-benefit-bata-club"></div>
         <div class="cc-item-label">Keuntungan<br> Bata Club</div>
      </a>
   </li>
   <li class="cc-services-item">
      <a href="<?php echo $urlPath ?>" class="cc-icon-link">
         <div class="cc-icon icon-benefit-contact-us"></div>
         <div class="cc-item-label">Hubungi<br>Kami</div>
      </a>
   </li>
</ul>
<style>
.cc-footer .cc-footer-services .cc-services-item .cc-item-label { text-transform: none;}
</style>
    </div> <!-- End content-asset -->



            </div>
        </div>
    

    <div class="cc-footer-main">
        <div class="cc-container-small">
            <div class="row">
                <div class="col-12 col-sm-9">
                    <div class="cc-content-footer-nav">
                        
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="fc3f5101f9d9fc2c7e72d0c343" -->
        <div class="row">
<div class="col-12 col-sm-4"><span class="cc-footer-nav-title" data-id-footer-menu-item="1">Layanan Pelanggan</span>
<ul class="cc-footer-nav-list" data-id-footer-menu-item="1">
        <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/id-blog-bata.html">Blog & Artikel</a> </li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="<?php echo $urlPath ?>">Kontak</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/pesanan/tracking">Cek Pesanan</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="<?php echo $urlPath ?>">Bata Club</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/privacy-policy.html">Peraturan Keamanan Data Pribadi</a></li>
</ul>
</div>

<div class="col-12 col-sm-4"><span class="cc-footer-nav-title" data-id-footer-menu-item="2">Panduan Berbelanja</span>

<ul class="cc-footer-nav-list" data-id-footer-menu-item="2">
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/size-chart.html">Bagan Konversi Ukuran</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/pengiriman-pengembalian.html">Pengiriman & Retur</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/terms-conditions.html">Syarat & Ketentuan</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/term-of-use.html">Ketentuan Penggunaan</a></li>
</ul>
</div>

<div class="col-12 col-sm-4"><span class="cc-footer-nav-title" data-id-footer-menu-item="3"> Informasi Perusahan</span>
<ul class="cc-footer-nav-list" data-id-footer-menu-item="3">
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/who-we-are.html">Siapa Kami</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/companyprofile.html">Profil Perusahaan</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://www.bata.com/id/career.html">Karir</a></li>
  <li class="cc-footer-nav-item"> <a class="cc-footer-navigation-link-2" href=" https://drive.google.com/drive/folders/1lKo5tL-AKRm7V8g5oAkJdpQ4yvU3BKVN?usp=sharing" target="_blank">Laporan Tahunan</a> </li>
  <li class="cc-footer-nav-item"> <a class="cc-footer-navigation-link-2" href="https://drive.google.com/drive/folders/1pDlcOb3R2tOemi-E7LXWQNH5lUlvE7B4?usp=sharing" target="_blank">Pengumuman Publik</a> </li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://batashoemuseum.ca/" target="_blank">Bata Shoe Museum</a></li>
  <li class="cc-footer-nav-item"><a class="cc-footer-navigation-link-2" href="https://thebatacompany.com/about-us/" target="_blank">The Bata Company</a></li>
</ul>
<script async="async" src="https://static.srcspot.com/libs/guillemette.js" type="application/javascript"></script>
</div>
</div>

<style>
@media screen and (max-width:767px) {
 .cc-page-designer .cc-experience-component>.experience-component:first-child .fullWidthPDComponent {
    margin-top: 0;
}
}
</style>
    </div> <!-- End content-asset -->



                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="a1d885a777240e1d5b3d7e0e07" -->
        <span class="cc-footer-nav-title cc-footer-nav-title-follow">Follow Us</span>
<ul class="cc-content-footer-social-list">
  <li class="cc-footer-social"> <a href="https://www.facebook.com/BataIndonesia" class="cc-icon icon-facebook" target="_blank"></a> 
  </li>
  <li class="cc-footer-social"> <a href="https://www.instagram.com/bataindonesia/" class="cc-icon icon-instagram" target="_blank"></a> 
  </li>
  <li class="cc-footer-social"> <a href="https://www.youtube.com/c/SepatuBataIndonesia" class="cc-icon icon-youtube" target="_blank"></a> 
  </li>
  <li class="cc-footer-social"> <a href="https://www.pinterest.com/bataindonesia/" class="cc-icon icon-pinterest" target="_blank"></a> 
  </li>
  <li class="cc-footer-social"> <a href="https://in.linkedin.com/company/bata-indonesia" class="cc-icon icon-linkedin" target="_blank"></a> 
  </li>
  <li class="cc-footer-social"> <a href="https://twitter.com/bataindonesia" class="cc-icon icon-twitter" target="_blank"></a> 
  </li>
  <li class="cc-footer-social"> <a href="https://www.tiktok.com/@bataofficialstore" class="cc-icon icon-tiktok" target="_blank"></a>
  </li>
  </ul>
    </div> <!-- End content-asset -->



                </div>
            </div>
            
            





    <div class="row cc-footer-main-georedirection__container">
        <a href="https://www.bata.com/">
            <div class="cc-footer-georedirection__container">
                <svg class="iconClassCommon cc-footer-georedirection-world-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-world" />
</svg>
                <div class="cc-footer-georedirection__text">
                    Indonesia | Bahasa
                </div>
                <svg class="iconClassCommon cc-footer-georedirection-right-icon">
    <use href="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/images/sprite/sprite.svg#icon-caret-right" />
</svg>
            </div>
        </a>
    </div>

            
        </div>
    </div>

    <div class="cc-footer-bottom">
        <div class="cc-container-small">
            <div class="cc-footer-bottom-up">
                <div class="cc-footer-bottom-up-item cc-footer-bottom-legal">
                    
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="e75184929f36fcc5ba3f668f83" -->
        <div class="row">
  <div class="col-12 col-lg-4">
    <span class="cc-footer-brand">PT. Sepatu Bata Online <span style="display:inline-block;">Tax ID: NPWD ID: 42.429.029.4-016.000</span></span>
  </div>
  <div class="col-12 col-lg-8">
    <div class="cc-content-footer-bottom-elements">
      <div class="cc-footer-bottom-element">
        <span class="cc-footer-payments-method"></span>
        <div class="cc-content-footer-payments-icon">
<a class="cc-icon icon-visa" href="#"></a> 
<a class="cc-icon icon-mastercard" href="#"></a>
<a class="cc-icon icon-goPay" href="#"></a>
<a class="cc-icon icon-shopeePay" href="#"></a>
        </div>
      </div>
      <!--<div class="cc-footer-bottom-element cc-footer-bottom-element-certification">
        <span class="cc-footer-payments-method">Certification</span> 
        <div class="cc-content-footer-payments-icon"> <a class="cc-icon icon-apek" href="#"></a> </div>
        </div>--></div>
  </div>
</div>

<style>
@media screen and (max-width: 767px) {
.cc-footer-brand {
  white-space: normal;
}
}
</style>
    </div> <!-- End content-asset -->



                </div>
            </div>

            <div class="cc-content-footer-copy">
                
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="8094009c72c5b038ceddedac2c" -->
        <div><p class="cc-footer-copy-text">&copy; 2022 BATA BRAND</p></div>
    </div> <!-- End content-asset -->



            </div>
        </div>
    </div>
</footer>



<!-- Modal --> 

<div class="modal cc-addprod-modal fade" id="wishlist-modal" tabindex="-1" role="dialog"
  aria-labelledby="tooManyProductsWishlistLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wishlistModalTitle">PRODUK DI DAFTAR KEINGINAN MELEBIHI KAPASITAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="icon-close-remove"></span>
        </button>
      </div>
      <div class="modal-body" id="wishlist-modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="cc-button-type-3"
          data-dismiss="modal">Tutup</button>
          <a class="cc-button-type-1" href="/id/wishlist">ke daftar keinginan</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal --> 

<div class="modal cc-addprod-modal fade" id="cartLimit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title request-password-title cc-productLimit">BARANG INI BELUM DITAMBAHKAN KE TAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-close-remove"></span>
                </button>
            </div>
            <div class="modal-body" id="cartLimit-modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="cc-button-type-1" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>




    <div class="cookie-warning d-none" data-accept="https://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/ConsentTracking-SetSession?consent=true">
        <div class="container">
            <div class="cc-content-cookie-info">
                <div class="cc-cookie-text">
                    
    
    <div class="content-asset"><!-- dwMarker="content" dwContentID="bf14c11699f688102f9665d839" -->
        Website ini menggunakan personal dan teknis cookies. Website ini juga menggunakan cookies dari pihak ketiga, (personal, teknis, dan analisis).  Jika anda ingin mempelajari lebih lanjut, <a class="b-menu__sub-link" href="https://www.bata.com/id/">click here</a>. Jika anda melanjutkan berselancar, anda setuju dengan kebijakan dan penggunaan cookies dari kami.
    </div> <!-- End content-asset -->



                </div>
                <button class="cc-button-type-2 js-cookies-bar-close">Tutup</button>
            </div>
        </div>
    </div>






















</div>
<div class="error-messaging"></div>
<div class="modal-background"></div>
<!--[if lt IE 10]>


<script>//common/scripts.isml</script>
<script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/main.min.js"></script>




    
    
        
        
        
        
        
        <script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/analytics-index.min.js"></script>
        
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "knqezlwia6");
</script>



    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth=w570b3z2T4vXnO37SIEhyA&gtm_preview=env-1&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PM28D5Z');</script>




    







    
        <script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/productDetail.min.js"
            
            >
        </script>
    

    
        <script defer type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/js/recommendationsCarousel.min.js"
            
            >
        </script>
    


<![endif]-->



<!-- Demandware Analytics code 1.0 (body_end-analytics-tracking-asynch.js) -->
<script type="text/javascript">//<!--
/* <![CDATA[ */
function trackPage() {
    try{
        var trackingUrl = "https://www.bata.comhttps://www.bata.com/on/demandware.store/Sites-bata-id-Site/in_ID/__Analytics-Start";
        var dwAnalytics = dw.__dwAnalytics.getTracker(trackingUrl);
        if (typeof dw.ac == "undefined") {
            dwAnalytics.trackPageView();
        } else {
            dw.ac.setDWAnalytics(dwAnalytics);
        }
    }catch(err) {};
}
/* ]]> */
// -->
</script>
<script type="text/javascript" src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/internal/jscript/dwanalytics-22.2.js" async="async" onload="trackPage()"></script>
<!-- Demandware Active Data (body_end-active_data.js) -->
<script src="https://www.bata.com/on/demandware.static/Sites-bata-id-Site/-/in_ID/v1707929666802/internal/jscript/dwac-21.7.js" type="text/javascript" async="async"></script><!-- CQuotient Activity Tracking (body_end-cquotient.js) -->
<script src="https://cdn.cquotient.com/js/v2/gretel.min.js" type="text/javascript" async="async"></script>
<script type="text/javascript" nonce="ea71a63a0d19d0f587ca96d8f6600d48" src="/fHLMK7scKHIp/ys/Fk3cnQfWE3/rauYQQcQrSVE/XkczNCdR/UQ0XZ/HlCZVk"></script><link rel="stylesheet" type="text/css" nonce="ea71a63a0d19d0f587ca96d8f6600d48" href="/_sec/cp_challenge/sec-4-2.css">
                                        <script nonce="ea71a63a0d19d0f587ca96d8f6600d48" src="/_sec/cp_challenge/sec-cpt-4-2.js" async defer></script>
                                        <div id="sec-overlay" style="display:none;">
                                        <div id="sec-container">
                                        </div>
                                      </div><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"889b68ea1a34a093","version":"2024.4.1","token":"7700735d77a44eadbe167698d13be4e4"}' crossorigin="anonymous"></script>
</body>
</html>
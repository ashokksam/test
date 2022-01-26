<?php
$date1 = "2007-03-24";
$date2 = date('Y-m-d');

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);
?>
<?php die; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://www.rocketmortgage.com/js/lib/cortex-573305debf.js"></script>
    <script src="https://www.rocketmortgage.com/js/app-0362e78cf3.js"></script>
    <script src="https://www.rocketmortgage.com/js/appsFlyer-3f14e62151.js"></script>
<!-- <script src="https://www.rocketmortgage.com/js/app-0362e78cf3.js"></script> -->
<style>
  .sprk-c-Carousel__frame{position:relative;font-size:0;line-height:0;overflow:hidden;white-space:nowrap;max-width:18.75rem}@media (min-width: 55rem){.sprk-c-Carousel__frame{max-width:none}}.sprk-c-Carousel__frame-item{position:relative;display:inline-block;text-align:center;font-size:1rem;line-height:1.6;color:#fff;max-width:18.75rem}@media (min-width: 55rem){.sprk-c-Carousel__frame-item{max-width:none}}.sprk-c-Carousel__frame-item img{width:100%}.sprk-c-Carousel__slides{display:inline-block}.sprk-c-Carousel__prev,.sprk-c-Carousel__next{background:none;border:none;display:block;cursor:pointer;color:#fff;padding:16px;position:absolute;-ms-touch-action:manipulation;touch-action:manipulation;z-index:1}@media (min-width: 31.25rem){.sprk-c-Carousel__prev,.sprk-c-Carousel__next{position:static}}@media (min-width: 55rem){.sprk-c-Carousel__prev,.sprk-c-Carousel__next{display:none}}.sprk-c-Carousel__prev{margin-right:16px;left:0}.sprk-c-Carousel__next{margin-left:16px;right:0}.sprk-c-Carousel__dots{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;padding:4px;-ms-touch-action:manipulation;touch-action:manipulation}@media (min-width: 55rem){.sprk-c-Carousel__dots{display:none}}.sprk-c-Carousel__dot-container{-ms-flex-pack:center;justify-content:center;margin:16px}@media (min-width: 31.25rem){.sprk-c-Carousel__dot-container{margin-right:16px}}.sprk-c-Carousel__dot-container:last-child{margin-right:0}.sprk-c-Carousel__dot{background:none;border-radius:50%;border:2px solid #fff;cursor:pointer;display:block;height:10px;padding:0;width:10px}@media (min-width: 31.25rem){.sprk-c-Carousel__dot{height:10px;width:10px}}.sprk-c-Carousel__dot--active{background-color:#fff;box-shadow:0 0 0 8px #e7e2f2}.sprk-c-Carousel--has-dark-bg .sprk-c-Carousel__dot--active{background-color:#603aa1;border:2px solid #2e1166}.dp{background:#fff;border-radius:4px;box-shadow:0 4px 16px rgba(51,51,51,0.1);font-family:RocketSans,Helvetica,"Helvetica Neue",Arial,sans-serif;font-size:1rem;padding:8px 8px 8px 8px;position:relative;max-width:20rem}

  @media (min-width: 55rem){.sprk-c-Stepper--has-carousel .sprk-c-Stepper__slider{position:absolute}}.sprk-c-Stepper--has-carousel .sprk-c-Stepper__step{display:none}@media (min-width: 55rem){.sprk-c-Stepper--has-carousel .sprk-c-Stepper__step{display:-ms-flexbox;display:flex}}.sprk-c-Stepper--has-carousel .sprk-c-Stepper__step-content{margin-left:0}@media (min-width: 55rem){.sprk-c-Stepper--has-carousel .sprk-c-Stepper__step-content{margin-left:66px}}


  @media all and (min-width: 55rem){.c-Card--standoutTransform:hover,.c-Card--standoutTransform:focus{box-shadow:0 20px 40px 0 rgba(0,0,0,0.08);transform:translate3d(0, -3px, 0)}}.c-Carousel__frame{max-width:300px}.c-CarouselBg__content{height:52rem}@media all and (min-width: 768px){.c-CarouselBg__content{height:50rem}}@media all and (min-width: 55rem){.c-CarouselBg__content{height:auto}}.c-CarouselBg\@m{background-position:50% 33%;background-repeat:no-repeat;background-size:34rem}@media all and (min-width: 55rem){.c-CarouselBg\@m{background-position:92.6% 57%}}.current-int-rate-icon{top:38px !important;left:71px !important;margin:0;stroke-width:1px;fill:#333333;height:16px;width:16px;position:absolute;z-index:1}.c-HighlightBoard{-ms-flex-align:end;align-items:flex-end;display:block;height:calc(101vh - 75px);padding:0;position:relative}
</style>
<div class="sprk-u-BackgroundColor--purple-dark sprk-u-pvh">
    <div class="sprk-o-CenteredColumn t-FadeIn--section t-Animatable--section c-CarouselBg@m sprk-u-phl t-FadeInUp--sectionAnimateIn" style="background-image: url('https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/magic-o.svg');">
        <h2 class="sprk-b-TypeDisplayTwo sprk-u-mbm sprk-u-Color--white">
            Your partner on the path to a new home.
        </h2>
        <p class="sprk-u-Color--white sprk-u-mbl">
            Mortgages are complicated. We make that our problem, not yours. Here’s how we guide you through the process as simply as possible.
        </p>

        <div class="sprk-o-Stack sprk-o-Stack--medium sprk-o-Stack--center-column sprk-o-Stack--split-reverse@m c-CarouselBg__content">
            <div class="sprk-o-Stack__item sprk-o-Stack__item--flex@m u-Mrs@m">
                <div class="sprk-c-Carousel sprk-c-Carousel--has-dark-bg" data-sprk-carousel="stepper-carousel-01">
                    <div class="sprk-c-Carousel__controls sprk-o-Stack sprk-o-Stack--split@xxs sprk-o-Stack--center-row sprk-o-Stack--center-column">
                        <button class="sprk-o-Stack__item sprk-c-Carousel__prev">
                            <span class="sprk-u-ScreenReaderText">Previous Slide</span>
                            <svg class="sprk-c-Icon sprk-c-Icon--xl sprk-c-Icon--filled-current-color" viewBox="0 0 100 100">
                                <use xlink:href="#chevron-left"></use>
                            </svg>
                        </button>

                        <div class="sprk-c-Carousel__frame c-Carousel__frame">
                            <ul class="sprk-c-Carousel__slides" style="transition-duration: 300ms; transform: translateX(-1200px); transition-timing-function: ease;"><li class="sprk-c-Carousel__frame-item">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_5a_Close.png" alt="Rocket Mortgage application closing information on phone screen.">
                                </li>
                                <li class="sprk-c-Carousel__frame-item">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_1a_AboutYou.png" alt="Rocket Mortgage application with living situation questions on phone screen.">
                                </li>
                                <li class="sprk-c-Carousel__frame-item">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_2a_Credit.png" alt="Rocket Mortgage application with credit question on phone screen.">
                                </li>
                                <li class="sprk-c-Carousel__frame-item">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_3a_HowMuch.png" alt="Rocket Mortgage application with loan options on phone screen.">
                                </li>
                                <li class="sprk-c-Carousel__frame-item active">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_4a_GetApproved.png" alt="Rocket Mortgage application with purchase price on phone screen.">
                                </li>
                                <li class="sprk-c-Carousel__frame-item">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_5a_Close.png" alt="Rocket Mortgage application closing information on phone screen.">
                                </li>
                            <li class="sprk-c-Carousel__frame-item">
                                    <img src="https://www.rocketmortgage.com/cdn/RocketMortgage.com/Non-StockImages/Pur_1a_AboutYou.png" alt="Rocket Mortgage application with living situation questions on phone screen.">
                                </li></ul>
                            <div class="sprk-c-Carousel__dots" data-sprk-carousel-dots="stepper-carousel-01"><div class="sprk-c-Carousel__dot-container"><button class="sprk-c-Carousel__dot"><span class="sprk-u-ScreenReaderText">Slide 1</span></button></div><div class="sprk-c-Carousel__dot-container"><button class="sprk-c-Carousel__dot"><span class="sprk-u-ScreenReaderText">Slide 2</span></button></div><div class="sprk-c-Carousel__dot-container"><button class="sprk-c-Carousel__dot"><span class="sprk-u-ScreenReaderText">Slide 3</span></button></div><div class="sprk-c-Carousel__dot-container"><button class="sprk-c-Carousel__dot sprk-c-Carousel__dot--active"><span class="sprk-u-ScreenReaderText">Slide 4</span></button></div><div class="sprk-c-Carousel__dot-container"><button class="sprk-c-Carousel__dot"><span class="sprk-u-ScreenReaderText">Slide 5</span></button></div></div>
                        </div>

                        <button class="sprk-o-Stack__item sprk-c-Carousel__next">
                            <span class="sprk-u-ScreenReaderText">Next Slide</span>
                            <svg class="sprk-c-Icon sprk-c-Icon--xl sprk-c-Icon--filled-current-color" viewBox="0 0 100 100">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="sprk-o-Stack__item sprk-o-Stack__item--flex@m sprk-u-mbl">
                <ol class="sprk-c-Stepper sprk-c-Stepper--has-dark-bg sprk-c-Stepper--has-carousel" data-sprk-stepper="container" data-sprk-stepper-carousel="stepper-carousel-01" data-id="stepper-1" role="tablist" aria-orientation="vertical"><li class="sprk-c-Stepper__slider sprk-c-Stepper__slider--active" data-sprk-stepper="slider" style="top: 192px;">
                        <div class="sprk-c-Stepper__step-content sprk-c-Stepper__step-content--has-description">
                            <span class="sprk-c-Stepper__step-header sprk-b-Link sprk-b-Link--plain" aria-controls="target-4" id="step-4">
                                <span class="sprk-c-Stepper__step-icon sprk-u-Visibility--hidden"></span>
                                <h3 class="sprk-c-Stepper__step-heading u-FontWeight--light" data-sprk-stepper="heading">
                                    Make An Offer
                                </h3>
                            </span>

                            <div class="sprk-c-Stepper__step-description" data-sprk-stepper="description" aria-labelledby="step-4" ids="target-4" role="tabpanel">
                                <p class="sprk-b-TypeBodyTwo">
                                    You can easily customize your approval letter so that if you make an offer that’s less than what you’re approved for, sellers won’t know.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li role="tab" aria-selected="false" class="sprk-c-Stepper__step sprk-c-Stepper__step--first" data-sprk-stepper="step">
                        <div class="sprk-c-Stepper__step-content sprk-c-Stepper__step-content--has-description">
                            <span class="sprk-c-Stepper__step-header sprk-b-Link sprk-b-Link--plain" aria-controls="target-1" id="step-1">
                                <span class="sprk-c-Stepper__step-icon"></span>
                                <h3 class="sprk-c-Stepper__step-heading u-FontWeight--light" data-sprk-stepper="heading">
                                    Tell Us About Your Situation
                                </h3>
                            </span>

                            <div class="sprk-c-Stepper__step-description sprk-u-HideWhenJs" data-sprk-stepper="description" id="target-1" aria-labelledby="step-1" role="tabpanel">
                                <p class="sprk-b-TypeBodyTwo">
                                    We start by finding out a little about you and your home buying goals so we can give you the best solution.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li role="tab" class="sprk-c-Stepper__step" data-sprk-stepper="step" aria-selected="false">
                        <div class="sprk-c-Stepper__step-content sprk-c-Stepper__step-content--has-description">
                            <span class="sprk-c-Stepper__step-header sprk-b-Link sprk-b-Link--plain" aria-controls="target-2" id="step-2">
                                <span class="sprk-c-Stepper__step-icon"></span>
                                <h3 class="sprk-c-Stepper__step-heading u-FontWeight--light" data-sprk-stepper="heading">
                                    We Review Your Credit
                                </h3>
                            </span>

                            <div class="sprk-c-Stepper__step-description sprk-u-HideWhenJs" data-sprk-stepper="description" aria-labelledby="step-2" ids="target-2" role="tabpanel">
                                <p class="sprk-b-TypeBodyTwo">
                                    If you want sellers to take you real seriously, you need real numbers. Your credit score is a key factor in getting an approval.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li role="tab" class="sprk-c-Stepper__step" data-sprk-stepper="step" aria-selected="false">
                        <div class="sprk-c-Stepper__step-content sprk-c-Stepper__step-content--has-description">
                            <span class="sprk-c-Stepper__step-header sprk-b-Link sprk-b-Link--plain" aria-controls="target-3" id="step-3">
                                <span class="sprk-c-Stepper__step-icon"></span>
                                <h3 class="sprk-c-Stepper__step-heading u-FontWeight--light" data-sprk-stepper="heading">
                                    Find Out How Much You Can Afford
                                </h3>
                            </span>

                            <div class="sprk-c-Stepper__step-description sprk-u-HideWhenJs" data-sprk-stepper="description" aria-labelledby="step-3" ids="target-3" role="tabpanel">
                                <p class="sprk-b-TypeBodyTwo">
                                    You tell us about your income, monthly bills and what you have saved to buy a home. We’ll calculate your maximum home price.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li role="tab" class="sprk-c-Stepper__step sprk-c-Stepper__step--selected" data-sprk-stepper="step" aria-selected="true" tabindex="0">
                        <div class="sprk-c-Stepper__step-content sprk-c-Stepper__step-content--has-description sprk-c-Stepper__step-content--hidden">
                            <span class="sprk-c-Stepper__step-header sprk-b-Link sprk-b-Link--plain" aria-controls="target-4" id="step-4">
                                <span class="sprk-c-Stepper__step-icon"></span>
                                <h3 class="sprk-c-Stepper__step-heading u-FontWeight--light sprk-u-Visibility--hidden" data-sprk-stepper="heading">
                                    Make An Offer
                                </h3>
                            </span>

                            <div class="sprk-c-Stepper__step-description sprk-u-Visibility--hidden" data-sprk-stepper="description" aria-labelledby="step-4" ids="target-4" role="tabpanel">
                                <p class="sprk-b-TypeBodyTwo">
                                    You can easily customize your approval letter so that if you make an offer that’s less than what you’re approved for, sellers won’t know.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li role="tab" class="sprk-c-Stepper__step sprk-c-Stepper__step--last" data-sprk-stepper="step" aria-selected="false">
                        <div class="sprk-c-Stepper__step-content sprk-c-Stepper__step-content--has-description">
                            <span class="sprk-c-Stepper__step-header sprk-b-Link sprk-b-Link--plain" aria-controls="target-5" id="step-5">
                                <span class="sprk-c-Stepper__step-icon"></span>
                                <h3 class="sprk-c-Stepper__step-heading u-FontWeight--light" data-sprk-stepper="heading">
                                    Close With Confidence
                                </h3>
                            </span>

                            <div class="sprk-c-Stepper__step-description sprk-u-HideWhenJs" data-sprk-stepper="description" aria-labelledby="step-5" ids="target-5" role="tabpanel">
                                <p class="sprk-b-TypeBodyTwo">
                                    We’ll get you to the most exciting part of buying a home as fast as possible with no surprises.
                                </p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="sprk-o-CenteredColumn sprk-u-phl">
        <p class="sprk-u-Color--white sprk-u-ptl">
            Loan scenario simulated. Sequence shortened. Conditions apply. Payment stated does not include taxes and insurance premiums. The actual payment amount will be higher.
        </p>
    </div>
</div>

<?php
die();
?>
<div class="cont">
  <div id="col-1" class="col"></div>
  <div id="col-2" class="col"></div>
  <div id="col-3" class="col"></div>
  <div id="col-4" class="col"></div>
</div>

<!--PLACE HERE YOUR IMAGES-->
<div id="img-list">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/MDSGEW7TLL.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/W4D9PV5EIV.jpg"> 
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/JF0XPA1MBL.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/PL0GNSBSED.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/SMJLMCZMTN.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/HXVDSUJRUU.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/MDSGEW7TLL.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/W4D9PV5EIV.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/JF0XPA1MBL.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/PL0GNSBSED.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/SMJLMCZMTN.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/HXVDSUJRUU.jpg">
  <img alt="img" src="https://cdn.stocksnap.io/img-thumbs/960w/MDSGEW7TLL.jpg">
</div>


<style>
.cont {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.col{
    -webkit-flex-basis: 25%;
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    padding: 10px;
}

.col img{
  width: 100%;
  margin-bottom: 20px;
}

.col:first-child{
  padding-left: 10px;
  padding-right: 10px;
}

.col:last-child{
  padding-right: 10px;
  padding-left: 10px;
}

#img-list{
  display: none;
}



</style>
<script>
  var imgs = document.getElementById("img-list").getElementsByTagName("img");
var imgsCount = imgs.length;
var colCount = 0;

for (i = 0; i < imgsCount; i++) {
  var imgSrc = imgs[i].src;
  var newImg = '<img alt="img" src="' + imgSrc + '">';
  if (colCount <= 3) {
    colCount += 1;
    document.getElementById("col-" + colCount).innerHTML += newImg;
  } else {
    colCount = 1;
    document.getElementById("col-" + colCount).innerHTML += newImg;
  }
}

</script>
<?php
die();
/* SETTINGs */

$url_pcmac = "http://www.example.com";
$url_iphone = "http://itunes.apple.com/us/app/";
$url_otherphones = "http://example.com";

$url_bb_42 = $url_otherphones;
$url_bb_43 = $url_otherphones;
$url_bb_45 = "http://example.mobi/F45/i.jad";
$url_bb_46 = "http://example.mobi/F46/i.jad";
$url_bb_47 = "http://example.mobi/F46/i.jad";
$url_bb_50 = "http://example.mobi/F50/i.jad";
$url_bb_60 = "http://example.mobi/F50/i.jad";


/* ************************************* */
/* DO NOT TOUCH ANYTHING UNDER THIS LINE */
/* ************************************* */
/* *UNLESS YOU KNOW WHAT YOU ARE DOING** */
/* ************************************* */




function checkPhone($str) {
    $check = stripos($_SERVER['HTTP_USER_AGENT'], $str);
    if ($check === false) {
        return false;
    } else {
        return true;
    }
}

/* REDIRECT IPHONE AND IPODS */
if(checkPhone("iPhone") || checkPhone("iPod")){
    header("Location: ".$url_iphone);
    exit();
}

/* REDIRECT BLACKBERRY */
if(checkPhone("BlackBerry")){

    $agent = $_SERVER['HTTP_USER_AGENT'];
    $osdir = ''; 

    if (eregi("BlackBerry", $agent)) {

        if (eregi("6.0", $agent))
             header("Location: ".$url_bb_60);
        if (eregi("5.0", $agent))
             header("Location: ".$url_bb_50);
        if (eregi("4.7", $agent))
             header("Location: ".$url_bb_47);
        if (eregi("4.6", $agent))
             header("Location: ".$url_bb_46);
        if (eregi("4.5", $agent))
             header("Location: ".$url_bb_45);
        if (eregi("4.3", $agent))
             header("Location: ".$url_bb_43);
        if (eregi("4.2", $agent))
             header("Location: ".$url_bb_42);
    }

    exit();
}

/* REDIRECT ALL OTHER PHONES */
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$accept = $_SERVER['HTTP_ACCEPT'];

if(checkPhone("opera mini")
|| checkPhone("android")
|| preg_match('/(pre\/|palm os|palm|hiptop|avantgo|fennec|plucker|xiino|blazer|elaine)/i',$user_agent)
|| preg_match('/(iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile)/i',$user_agent)
|| preg_match('/(mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|m881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|s800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|d736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |sonyericsson|samsung|240x|x320vx10|nokia|sony cmd|motorola|up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|psp|treo)/i',$user_agent)
|| isset($_SERVER['HTTP_X_WAP_PROFILE'])
|| isset($_SERVER['HTTP_PROFILE'])
|| (strpos($accept,'text/vnd.wap.wml')>0)
|| (strpos($accept,'application/vnd.wap.xhtml+xml')>0)){
    header("Location: ".$url_otherphones);
    exit();
}

/* REDIRECT TO PC and MAC */
header("Location: ".$url_pcmac);
exit();

?>

<?php 

$myArray = [
  [
    'name' => 'Paresh',
    'email' => 'paresh@gmail.com'
  ],
  [
    'name' => 'Rakesh',
    'email' => 'rakesh@gmail.com'
  ],
  [
    'name' => 'Naresh',
    'email' => 'naresh@gmail.com'
  ],
];

$names = array_column($myArray, 'name');
// $emails = array_map(function ($ar) {return $ar['email'];}, $myArray);

print_r($names);
// print_r($emails);

?>
<?php die; ?>
<ul class="grid"> 
			<li data-bp-activity-id="152" id="activity-152" data-bp-timestamp="1633654924" class="grid__item" data-id="25" data-date-created="2021-11-03 00:17:03" data-bp-activity="{" id":152,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="25" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/65363129759d487c4e949e20d2dac03c" data-activity-id="152" data-privacy="public" data-parent-activity-id="152" data-album-id="0" data-group-id="0" data-attachment-id="2044" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/95c70a640375a3be4950578378dbd8e0" alt="VS30 29-6-9" class="">
			</a>
			
			<div class="like_with_user">
		 	
		 <div class="bb-media-info-section media">
									<p data-id="152" id="data-152" href="https://members.aviationcreatives.com/community/favorite/152/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="150" id="activity-150" data-bp-timestamp="1633654924" class="grid__item" data-id="24" data-date-created="2021-11-03 00:16:28" data-bp-activity="{" id":150,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="24" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/03070f57529af613d7aa986a436fe05e" data-activity-id="150" data-privacy="public" data-parent-activity-id="150" data-album-id="0" data-group-id="0" data-attachment-id="2043" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/2467356ca4676c5645b258f48843a2e9" alt="VS30 29-6-7" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="150" id="data-150" href="https://members.aviationcreatives.com/community/favorite/150/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="143" id="activity-143" data-bp-timestamp="1633654924" class="grid__item" data-id="23" data-date-created="2021-10-28 11:50:32" data-bp-activity="{" id":143,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="23" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/7844e8343fd5b4611fd306fcc751812a" data-activity-id="143" data-privacy="public" data-parent-activity-id="143" data-album-id="0" data-group-id="0" data-attachment-id="1736" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/9a809d729160092861cc4831fcf32428" alt="VS30 29-6-11" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="143" id="data-143" href="https://members.aviationcreatives.com/community/favorite/143/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="127" id="activity-127" data-bp-timestamp="1633654924" class="grid__item" data-id="20" data-date-created="2021-10-27 14:05:10" data-bp-activity="{" id":127,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="20" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/124e6db35e531d34e354c4e147c7ce93" data-activity-id="127" data-privacy="public" data-parent-activity-id="127" data-album-id="0" data-group-id="0" data-attachment-id="1658" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/f4c7ddd715660a742fa76fe99532ace5" alt="VA-A330-After" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-127" data-id="127" href="https://members.aviationcreatives.com/community/unfavorite/127/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="121" id="activity-121" data-bp-timestamp="1633654924" class="grid__item" data-id="19" data-date-created="2021-10-27 11:31:21" data-bp-activity="{" id":121,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="19" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/1e2d10ad96cf5b0c1324250f794c051c" data-activity-id="121" data-privacy="public" data-parent-activity-id="121" data-album-id="0" data-group-id="0" data-attachment-id="1650" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/b5ebc832dd108e26878833b2ee3539b9" alt="a330 37000-1" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-121" data-id="121" href="https://members.aviationcreatives.com/community/unfavorite/121/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="107" id="activity-107" data-bp-timestamp="1633654924" class="grid__item" data-id="18" data-date-created="2021-10-26 21:19:11" data-bp-activity="{" id":107,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="18" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/127a8d30f7aad42c3aab59b83f882e4c" data-activity-id="107" data-privacy="public" data-parent-activity-id="107" data-album-id="0" data-group-id="0" data-attachment-id="1582" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/5b1bea675dbda6132b0c348e237fac75" alt="a350 moon text" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-107" data-id="107" href="https://members.aviationcreatives.com/community/unfavorite/107/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="83" id="activity-83" data-bp-timestamp="1633654924" class="grid__item" data-id="16" data-date-created="2021-10-20 14:59:06" data-bp-activity="{" id":83,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="16" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/395c37f954976f8f5fbb9f7c374211c4" data-activity-id="83" data-privacy="public" data-parent-activity-id="83" data-album-id="0" data-group-id="0" data-attachment-id="992" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/3b17818a292ad52aaf524e2528d3fbff" alt="air5" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-83" data-id="83" href="https://members.aviationcreatives.com/community/unfavorite/83/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="81" id="activity-81" data-bp-timestamp="1633654924" class="grid__item" data-id="15" data-date-created="2021-10-18 10:26:40" data-bp-activity="{" id":81,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="15" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/c8f37cb02dccac18f832c07b625ebeba" data-activity-id="81" data-privacy="public" data-parent-activity-id="81" data-album-id="0" data-group-id="0" data-attachment-id="952" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/ff915be84e652f812226c15ce884b207" alt="blogger-e1624468093129" class="">
			</a>
			
			<div class="like_with_user">
		 	
		 <div class="bb-media-info-section media">
									<p id="data-81" data-id="81" href="https://members.aviationcreatives.com/community/unfavorite/81/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="78" id="activity-78" data-bp-timestamp="1633654924" class="grid__item" data-id="13" data-date-created="2021-10-13 22:34:32" data-bp-activity="{" id":78,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="13" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/39c2f47b6dae403d7276d51c63307e3a" data-activity-id="78" data-privacy="public" data-parent-activity-id="75" data-album-id="0" data-group-id="0" data-attachment-id="875" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/0d93831fbc067e9d45d84f29b457fd6e" alt="a380 sunset_-5" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-78" data-id="78" href="https://members.aviationcreatives.com/community/unfavorite/78/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="77" id="activity-77" data-bp-timestamp="1633654924" class="grid__item" data-id="12" data-date-created="2021-10-13 22:34:32" data-bp-activity="{" id":77,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="12" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/e536da21e06dfdd2c6402febef76a7eb" data-activity-id="77" data-privacy="public" data-parent-activity-id="75" data-album-id="0" data-group-id="0" data-attachment-id="874" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/343bcc719f4e91c51c0f55a1c5d0a0ba" alt="a380 sunset_-text" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-77" data-id="77" href="https://members.aviationcreatives.com/community/unfavorite/77/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="76" id="activity-76" data-bp-timestamp="1633654924" class="grid__item" data-id="11" data-date-created="2021-10-13 22:34:32" data-bp-activity="{" id":76,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="11" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/e7637216a4f35539b312fc9cb7cb74cb" data-activity-id="76" data-privacy="public" data-parent-activity-id="75" data-album-id="0" data-group-id="0" data-attachment-id="873" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/3add58926b2c0e9b3ccde40f5740aea8" alt="a380 sunset_-3" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="76" id="data-76" href="https://members.aviationcreatives.com/community/favorite/76/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="74" id="activity-74" data-bp-timestamp="1633654924" class="grid__item" data-id="10" data-date-created="2021-10-13 02:23:13" data-bp-activity="{" id":74,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="10" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/e60444bf27e1b8a6f9158e99879c6a9d" data-activity-id="74" data-privacy="public" data-parent-activity-id="74" data-album-id="0" data-group-id="0" data-attachment-id="834" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/104f03fd9d9cbce68c23bf61dcfb056c" alt="E8D5CF2F-C745-437D-B269-3B2DC5170E6B" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-74" data-id="74" href="https://members.aviationcreatives.com/community/unfavorite/74/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="69" id="activity-69" data-bp-timestamp="1633654924" class="grid__item" data-id="8" data-date-created="2021-10-11 01:19:56" data-bp-activity="{" id":69,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="8" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/81201e9f7e4647d9b63d0d64f248a09b" data-activity-id="69" data-privacy="public" data-parent-activity-id="69" data-album-id="0" data-group-id="0" data-attachment-id="714" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/0af2b4d4d5b0e3173a17f7b9f3a9b392" alt="CF2BF378-43CE-4AEF-940C-13ABD311EDEB" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-69" data-id="69" href="https://members.aviationcreatives.com/community/unfavorite/69/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="65" id="activity-65" data-bp-timestamp="1633654924" class="grid__item" data-id="7" data-date-created="2021-10-10 22:54:22" data-bp-activity="{" id":65,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="7" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/8ac139d85c16cdf90e7129ddcddda21c" data-activity-id="65" data-privacy="public" data-parent-activity-id="65" data-album-id="0" data-group-id="0" data-attachment-id="706" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/0b78e51ab64970df4bc3c4d185ceb596" alt="A330 night taxi-1" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-65" data-id="65" href="https://members.aviationcreatives.com/community/unfavorite/65/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="63" id="activity-63" data-bp-timestamp="1633654924" class="grid__item" data-id="6" data-date-created="2021-10-10 22:45:46" data-bp-activity="{" id":63,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="6" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/68e1817e29cd6674fa0cc78d5b458d56" data-activity-id="63" data-privacy="public" data-parent-activity-id="63" data-album-id="0" data-group-id="0" data-attachment-id="705" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/54120433d8a0a56c3b9ab90f16765eaf" alt="Miami lightning strike" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="63" id="data-63" href="https://members.aviationcreatives.com/community/favorite/63/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="41" id="activity-41" data-bp-timestamp="1633654924" class="grid__item" data-id="4" data-date-created="2021-10-04 13:56:22" data-bp-activity="{" id":41,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="4" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/a935d9326174f4a91fa3ceb88ba66342" data-activity-id="41" data-privacy="loggedin" data-parent-activity-id="42" data-album-id="0" data-group-id="0" data-attachment-id="456" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/b4ba38eaea34296cb498f17d63ae7175" alt="_DSC7299" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="41" id="data-41" href="https://members.aviationcreatives.com/community/favorite/41/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="40" id="activity-40" data-bp-timestamp="1633654924" class="grid__item" data-id="3" data-date-created="2021-10-04 13:56:22" data-bp-activity="{" id":40,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="3" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/f84e63484238dbdfb3c7d96b8c761b60" data-activity-id="40" data-privacy="loggedin" data-parent-activity-id="42" data-album-id="0" data-group-id="0" data-attachment-id="455" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/32280ef0c55e3c2f7a26770216e24362" alt="_DSC5475" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p id="data-40" data-id="40" href="https://members.aviationcreatives.com/community/unfavorite/40/?_wpnonce=497fa5007d" class=" unfav bp-secondary-action unfav_to_fav" title="Remove From Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="39" id="activity-39" data-bp-timestamp="1633654924" class="grid__item" data-id="2" data-date-created="2021-10-04 13:56:22" data-bp-activity="{" id":39,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="2" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/28333b169c09e9beb7deac6f0ab0d060" data-activity-id="39" data-privacy="loggedin" data-parent-activity-id="42" data-album-id="0" data-group-id="0" data-attachment-id="454" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/928e5c484524b8701554064f1dc27b46" alt="_DSC5790" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="39" id="data-39" href="https://members.aviationcreatives.com/community/favorite/39/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
		<li data-bp-activity-id="4" id="activity-4" data-bp-timestamp="1633654924" class="grid__item" data-id="1" data-date-created="2021-08-22 02:29:22" data-bp-activity="{" id":4,"can_edit_privacy":true,"album_id":0,"group_id":0,"group_name":"","folder_id":0,"content":"","item_id":0,"object":"xprofile","privacy":"public","profile_video":false,"group_video":false,"profile_media":true,"group_media":true,"profile_document":false,"group_document":false}"="">

	<div class="bb-photo-thumb bb-item-thumb">
		<div class="media-action-wrap">
							<a href="#" class="media-action_more" data-balloon-pos="up" data-balloon="More actions">
					<i class="bb-icon-menu-dots-v"></i>
				</a>
				
					</div> <!--.media-action-wrap-->
		<a class="bb-open-media-theatre bb-photo-cover-wrap bb-item-cover-wrap" data-id="1" data-attachment-full="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/faf7df265d0a2548e2e6376422bd2be0" data-activity-id="4" data-privacy="public" data-parent-activity-id="4" data-album-id="0" data-group-id="0" data-attachment-id="101" data-can-edit="1" href="#">
			<img src="https://members.aviationcreatives.com/wp-content/uploads/sites/5/bb-platform-previews/b9014e776e469ca6dae702955bf32e95/1e60f4299c4dd5d54cd483a1711d14c0" alt="LCY-1-1" class="">
			</a>
			
			<div class="like_with_user">
		 
		 <div class="bb-media-info-section media">
									<p data-id="4" id="data-4" href="https://members.aviationcreatives.com/community/favorite/4/?_wpnonce=57bcff6131" class=" fav bp-secondary-action fav_to_unfav" title="Add To Inspiration" aria-pressed="true"><i class="fas fa-bolt"></i></p>
								</div>
			</div>

</div></li>
			</ul>
  <style>
  .grid {
  column-count: 5;
  column-gap: .5em;
   
  margin: auto;
  width: 100%;
}

.grid img {
  height: auto;
  max-width: 100%;
}

@media(max-width: 800px) {
    .grid {
      column-count: 3;
  }
}

@media(max-width: 600px) {
    .grid {
      column-count: 2;
  }
}

@media(max-width: 400px) {
    .grid {
      column-count: 1;
  }
}
  </style>
<?php die; ?>
<div class="gallery-wrapper">
  <div class="image-wrapper">
    <a href="#lightbox-image-1">
      <img src="https://source.unsplash.com/F1Pb4g1C58E/300x300" alt="">
      <div class="image-title">Cat staring at me</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="#lightbox-image-2">
      <img src="https://source.unsplash.com/kjERLXaHjXc/300x300" alt="">
      <div class="image-title">Cat playing with mouse</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="#lightbox-image-3">
      <img src="https://source.unsplash.com/URnWOJX8wW4/300x300" alt="">
      <div class="image-title">Cat turns away</div>
    </a>
  </div>
</div>

<div class="gallery-lightboxes">
  
  <div class="image-lightbox" id="lightbox-image-1">
    <div class="image-lightbox-wrapper">
      <a href="#" class="close"></a>
      <a href="#lightbox-image-3" class="arrow-left"></a>
      <a href="#lightbox-image-2" class="arrow-right"></a>
      <img src="https://source.unsplash.com/F1Pb4g1C58E/600x500" alt="">
      <div class="image-title">Cat staring at me</div>
    </div>
  </div>
  
  <div class="image-lightbox" id="lightbox-image-2">
    <div class="image-lightbox-wrapper">
      <a href="#" class="close"></a>
      <a href="#lightbox-image-1" class="arrow-left"></a>
      <a href="#lightbox-image-3" class="arrow-right"></a>
      <img src="https://source.unsplash.com/kjERLXaHjXc/600x500" alt="">
      <div class="image-title">Cat playing with mouse</div>
    </div>
  </div>
  
  <div class="image-lightbox" id="lightbox-image-3">
    <div class="image-lightbox-wrapper">
      <a href="#" class="close"></a>
      <a href="#lightbox-image-2" class="arrow-left"></a>
      <a href="#lightbox-image-1" class="arrow-right"></a>
      <img src="https://source.unsplash.com/URnWOJX8wW4/600x500" alt="">
      <div class="image-title">Cat turns away</div>
    </div>
  </div>
  
</div>

<style>
body{
  margin:1em 0 0 0;
  font-family:sans-serif;
  font-size:16px;
  line-height:24px;
  color:#333;
}
*{
  box-sizing:border-box;
}
img{
  max-width:100%;
}
.gallery-wrapper{
  max-width:960px;
  width:100%;
  margin:0 auto;
  padding:0 1em;
  display:grid;
  //grid-template-columns:repeat(3, 1fr);
  grid-template-columns:repeat(auto-fill, minmax(230px, 1fr));
  grid-gap: 1em;
  .image-wrapper{
    a{
      padding:0.5em;
      display:block;
      width:100%;
      text-decoration:none;
      color:#333;
      box-shadow:0 0 5px rgba(0,0,0,0.3);
      transition: all 200ms ease-in-out;
      &:hover{
        box-shadow:0 2px 5px rgba(0,0,0,0.5);
      }
      img{
        width:100%;
      }
    }
  }
}

.gallery-lightboxes{
  .image-lightbox{
    position:fixed;
    top:0;
    left:0;
    width:100vw;
    height:100vh;
    background:rgba(0,0,0,0.8);
    backdrop-filter: blur(5px);
    display:flex;
    align-items:center;
    justify-content: center;
    opacity:0;
    visibility:hidden;
    transition: opacity 0ms ease-in-out;
    &:target{
      opacity:1;
      visibility:visible;
      .image-lightbox-wrapper{
        opacity:1;
        transform:scale(1,1) translateY(0);
      }
    }
    .image-lightbox-wrapper{
      transform:scale(0.95,0.95) translateY(-30px);
      transition: opacity 500ms ease-in-out, transform 500ms ease-in-out;
      opacity:0;
      margin:1em auto;
      max-width:75%;
      padding:.5em;
      display:inline-block;
      background:#fff;
      box-shadow:0 0 5px rgba(0,0,0,0.8);
      position:relative;
      .close{
        width: 1.5em;
        height: 1.5em;
        background: #000;
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        border-radius: 50%;
        box-shadow: 0 0 0 2px white inset, 0 0 5px rgba(0, 0, 0, 0.5);
        position: absolute;
        right: -1em;
        top: -1em;
        &:before{
          content: '';
          display: block;
          width: 10px;
          height: 2px;
          background: #fff;
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          margin: -1px 0 0 -5px;
          transform: rotate(-45deg);
        }
        &:after{
          content: '';
          display: block;
          width: 10px;
          height: 2px;
          background: #fff;
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          margin: -1px 0 0 -5px;
          transform: rotate(45deg);
        }
      }
      .arrow-left{
        position:absolute;
        top:0;
        right:50%;
        bottom:0;
        left:0;
        &:before{
          content:'';
          display:inline-block;
          width: 20px;
          height: 20px;
          border: 2px solid #fff;
          border-bottom: 0;
          border-right: 0;
          border-radius:4px 0 0 0;
          position: absolute;
          top: 50%;
          right: 100%;
          cursor:pointer;
          transform: rotate(-45deg) translateY(-50%);
        }
      }
      .arrow-right{
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:50%;
        &:before{
          content:'';
          display:block;
          width: 20px;
          height: 20px;
          border: 2px solid #fff;
          border-bottom: 0;
          border-left: 0;
          border-radius:0 4px 0 0;
          position: absolute;
          top: 50%;
          left: 100%;
          cursor:pointer;
          transform: rotate(45deg) translateY(-50%);
        }
      }
      img{
        margin:0 auto;
        max-height:70vh;
      }
      .image-title{
        
      }
    }
  }
}
  </style>

<?php die; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type='text/javascript' src='https://code.jquery.com/jquery-3.1.1.min.js?ver=3.1.1'></script>
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body>

<h2 style="text-align:center">Lightbox</h2>

<div class="row">
  <div class="column">
    <img src="img_nature.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img_nature_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img_snow_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img_mountains_wide.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img_lights_wide.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img_nature_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_snow_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>

<?php die;
?>

      <section class="img-gallery-magnific">
			<div class="magnific-img">
				<a class="image-popup-vertical-fit" href="https://unsplash.it/974/?random" title="9.jpg">
					<img src="https://unsplash.it/974/?random" alt="9.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
      <div class="magnific-img">
				<a class="image-popup-vertical-fit" href="https://unsplash.it/974/?random" title="9.jpg">
					<img src="https://unsplash.it/974/?random" alt="9.jpg" />
					<i class="fa fa-search-plus" aria-hidden="true"></i>
				</a>
			</div>
		</section>
		<div class="clear"></div>

<style>

.magnific-img img {
    width: 100%;
    height: auto;
}
.mfp-bottom-bar,*{
   font-family: 'Abel', sans-serif;
}
.magnific-img {
    display: inline-block;
    width: 32.3%;
}
a.image-popup-vertical-fit {
    cursor: -webkit-zoom-in;
}
.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  /* ideally, transition speed should match zoom duration */
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
    opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
    opacity: 0.98;
}

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0;
}
.mfp-arrow-left:before {
    border-right: none !important;
}
.mfp-arrow-right:before {
    border-left: none !important;
}
button.mfp-arrow, .mfp-counter {
    opacity: 0 !important;
    transition: opacity 200ms ease-in, opacity 2000ms ease-out;
}
.mfp-container:hover button.mfp-arrow, .mfp-container:hover .mfp-counter{
	opacity: 1 !important;
}


/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #F3F3F3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }
</style>
<script type='text/javascript' src='https://code.jquery.com/jquery-3.1.1.min.js?ver=3.1.1'></script>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script>
$(document).ready(function(){
$('.image-popup-vertical-fit').magnificPopup({
	type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
			enabled:true
		},

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

});
  </script>
<?php
die; ?>


<link rel='stylesheet' id='font-awesome-css'  href='https://use.fontawesome.com/releases/v5.15.4/css/all.css?wpfas=true' media='all' />
<style>
  .stars {
    color: #ff7501;
    font-size: 1.2em;
}
</style>
<?php 
$rating = 3;
echo "<span class='stars'>";
for ( $i = 1; $i <= 5; $i++ ) {
    if ( round( $rating - .25 ) >= $i ) {
        echo "<i class='elementor-star-full'></i>"; //fas fa-star for v5
    } elseif ( round( $rating + .25 ) >= $i ) {
        echo "<i class='elementor-star-5'></i>"; //fas fa-star-half-alt for v5
    } else {
        echo "<i class='elementor-star-empty'></i>"; //far fa-star for v5
    }
}
echo '</span>';
?>
<?php die; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Home - Simple Star Rating</title>    
    <style type="text/css">        
    /* Rate Star*/        
    .result-container{
        width: 100px; height: 22px;
        background-color: #ccc;
        vertical-align:middle;
        display:inline-block;
        position: relative;
        top: -4px;
    }
    .rate-stars{
        width: 100px; height: 22px;
        background: url(img/rate-stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 14px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>
</head>

<body style="font-family:sans-serif; ">                    
    <h1>Display Star Rating average from Mysql Database with PHP</h1>                
    <?php
    //defining Product id
    $product_id=1;
        // $ratequery = "SELECT * FROM rate WHERE product_id = '$product_id' "; 
        // $rateres =mysqli_query($conn, $ratequery);    
            // while($data = mysqli_fetch_assoc($rateres)){
            //     $rate_db[] = $data;
            //     $sum_rates[] = $data['rate'];
            // }
            $rate_db[] = 3; 
            $rate_bgd = '';
            $sum_rates[] =3;
            if(count($rate_db)){
                $rate_times = count($rate_db);
                $sum_rates = array_sum($sum_rates);
                $rate_value = $sum_rates/$rate_times;
                $rate_bg = (($rate_value)/5)*100;
                $rate_bgd = '#000';
            }else{
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
                $rate_bgd = '#ff0000';
            }
    ?>
    <span class="gd-rating-background" style="color:#afafaf;">dsfg fd
				<i class="fas fa-star fa-fw" style="color:<?php echo  $rate_bgd; ?>;"  aria-hidden="true"></i><i class="fas fa-star fa-fw"  style="color:<?php echo  $rate_bgd; ?>;" aria-hidden="true"></i><i class="fas fa-star fa-fw"  style="color:<?php echo  $rate_bgd; ?>;" aria-hidden="true"></i><i class="fas fa-star fa-fw"  style="color:<?php echo  $rate_bgd; ?>;" aria-hidden="true"></i><i class="fas fa-star fa-fw"  style="color:<?php echo  $rate_bgd; ?>;" aria-hidden="true"></i>				</span>
            <div style="margin-top: 10px">
                <div class="result-container">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                <div class="rate-stars"></div>
            </div>                    

            <span class="reviewScore"><?php echo substr($rate_value,0,3); ?></span><span class="reviewCount">(<?php echo $rate_times; ?> reviews)</span>
            
        </body>
</html>
<?php
die;
?>

<script type='text/javascript' src='https://www.gstatic.com/firebasejs/5.2.0/firebase.js?ver=3.0'></script>
    <script type='text/javascript' src='https://www.gstatic.com/firebasejs/5.1.0/firebase-app.js?ver=3.0'></script>
    <script type='text/javascript' src='https://www.gstatic.com/firebasejs/5.1.0/firebase-auth.js?ver=3.0'></script>
    <script type='text/javascript' src='https://www.gstatic.com/firebasejs/5.1.0/firebase-database.js?ver=3.0'></script>
    <script type='text/javascript' src="https://www.gstatic.com/firebasejs/5.1.0/firebase-messaging.js?ver=3.0"></script>
<script>
 var config = {
  apiKey: "AIzaSyBQFMVmyEaUTwYa6jkdyJTspOuJ7xuVqUo",
		authDomain: "qirqle-beta.firebaseapp.com",
		databaseURL: "https://qirqle-beta.firebaseio.com/",
		projectId: "qirqle-beta",
		storageBucket:  "qirqle-beta.appspot.com",
		messagingSenderId: "383129009017"
	  };
	  firebase.initializeApp(config);
	  
	  // var database = firebase.database();


  console.log("dfgfd",firebase.database().ref('/groups/'));

    var groupsRef = firebase.database().ref();
    groupsRef.once('value', (snp) => {
                  console.log("groups", snp);
    });

  </script>
<?php die; ?>
<head>
	<!-- In this example, we are styling using tailwind css, but you don't have to if you don't want to. -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://unpkg.com/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.min.css" rel="stylesheet">

	<!-- Alpine.js is required, though -->
	<script src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js" defer></script>

	<!-- This is our ChurchSuite script, to make your life easy! -->
	<script src="https://unpkg.com/@churchsuite/embed@1.1.0"></script>	

    <!-- You will also need to add this inline script, and update it to the right URL for your church. -->
	<script> CS.url = 'demo.churchsuite.co.uk' </script>
</head>
<body>
	<!-- Within the body, add a div with an x-data attribute. -->
	<div x-data="CSEvents" class="max-w-screen-lg mx-auto">
	 

		<!-- This is the main event cards section -->
		<div class="bg-gray-200 justify-around overflow-scroll px-4 py-8 rounded sm:flex sm:flex-wrap w-full" style="height: 730px">		
			<!-- Add a template element with this x-for attribute. This is saying 'for each event, make a copy of this template' -->
			<template x-for="event in events">
				<!-- We have wrapped everything in an 'a' tag so that each card is a link to the event page -->
				<a :href="event.link" class="mx-1" target="_blank">
					<div class="bg-white duration-500 flex hover:-translate-y-2 mb-6 hover:shadow-xl rounded sm:flex-col sm:h-80 transform transition">
						<!-- Event Image -->
						<div>
							<img :src="event.image" :alt="event.name" class="h-20 w-32 sm:h-40 sm:w-60 object-cover rounded-l sm:rounded-l-none sm:rounded-t">
						</div>

						<!-- Event Information -->
						<div class="sm:mt-2 sm:h-full w-full sm:w-60 sm:px-3 sm:pb-3 flex flex-col justify-between ml-4 sm:ml-0">
							<!-- Use the x-text attribute to show the event information -->
							<h3 x-text="event.name" class="overflow-hidden h-6 sm:h-full font-bold text-base sm:text-lg"></h3>
							<div class="font-light text-sm sm:text-base text-gray-700 mt-2 sm:mt-auto sm:text-right">
								<p x-text="event.start.format('dddd, D MMMM')"></p>
								<p x-text="event.allDay ? 'All Day' : event.start.format('h:mma') + ' - ' + event.end.format('h:mma')"></p>
								<p x-text="(event.online ? 'Online - ' : '') + event.location" class="hidden sm:block"></p>
							</div>
						</div>
					</div>
				</a>
			</template>
		</div>
	</div>
</body>
<?php
 die;
 echo $result = mcrypt_ecb (MCRYPT_3DES, 'test', $string, MCRYPT_ENCRYPT);
 //Decryption
 echo  $decrypt_result = mcrypt_ecb (MCRYPT_3DES, 'test', $result, MCRYPT_DECRYPT);
 die;
?>
<?php 
 

die;
function getMonthWeekNumbers( $first_date )
    {
        $last_date = date( "Y-m-t",strtotime( $first_date ) );
        $first_week = date( "W",strtotime( $first_date ) );
        $last_week = date( "W",strtotime( $last_date ) );

        // If last day of month have on first week on next year, subtract a week from the date
        if( $last_week == '01' )
        {
            $last_week = date( "W",( strtotime( $last_date )-604800 ) );
        }

        for( $i=$first_week; $i <= $last_week; $i++ )
        {
            echo "Week #".$i.", ";
        }
    }
    
    getMonthWeekNumbers( '2021-12-01' );
    ?>
<?php
die;
$result['fdgsfdgdfgf'] = '';
$re = array();
$jk = 0;
for ($i=0; $i < count($_POST['name']); $i++) { 
  // $re['name'][$jk];
  $re[$jk]['name'] = '||<==';
  // echo '<pre>';
  // print_r($_POST);

  // echo '<pre>';
  // print_r($_POST['age1']);

  // $_POST['count'][$j] +=$_POST['count'][$j]; 
//   print_r($_POST);
// echo $i;
  // $test['first'][$i] = $_POST['name'];
  # code...
  $jk++;
}
echo '<pre>';
print_r($re);
// if($i == 0)
// for ($j=0; $j < count($_POST['age1']); $j++) { 
//   // echo $j;
//   // echo '<pre>';
//   // print_r($_POST['age1']);
//   //  echo  $_POST['count'][$j];
// //   echo $_POST['age1'][$j];
// //  if($_POST['age1'][$j] == 0)
// //     array_push($result, $_POST['age1']);
//     // echo 'test211';
//     $test['first'][$_POST['name'][$i]] = $_POST[$i];
 
// }

// // $test['testestse']['fgfgfdg'][2021] = $_POST['name'];
// // $test['testestse']['fgfgfdg'][2021] = $_POST['age'];
// // $test['testestse']['fgfgfdg'][2021] = $_POST['job'];
// // $test['testestse']['fgfgfdg'][2021] = $_POST;
// echo '<pre>';
// print_r($result);

?>
<form method="post">
  <div >
<input type="text" name="name[]">
<input type="text" name="age">
<input type="text" name="job">
</div>
<div >

<input type="text" name="age1[]">
<input type="text" name="job1[]">

<input type="text" name="age1[]">
<input type="text" name="job1[]">

<input type ="text" name="count[]" value="2">
</div>

<div >
<input type="text" name="name[]">
<input type="text" name="age">
<input type="text" name="job">
</div>
<div >

<input type="text" name="age1[]">
<input type="text" name="job1[]">


<input type ="text" name="count[]" value="1">
</div>

<input type="submit">
</form>

<?php
?>
<?php

die;
$headerHtml = "<div class='' style='height:600px;width:500px'></div>";
$html = str_get_html($headerHtml); 
$e = $headerHtml->find("div", 2);
$tempStyleArray = array_map('trim', preg_split( "/[:;]+/", $e->style ));
$tempKey = array_search('height', $tempStyleArray);
$tempHeight = substr($tempStyleArray[$tempKey+1], 0, -2); //removing 'px'
echo $tempHeight;
?>
<?php
die;
$str = "PeHP iseeeeeeeeeeeeee 3pretty fun!!";
$strArray = count_chars($str,1);

foreach ($strArray as $key=>$value)
   {
    //  echo '<pre>';
    //  print_r($key);
   	if(chr($key) == 'e'){
   		echo chr($key). '  time: '. $value;
        }
   }
?>

<?php
die;
    $arr1=array(
        "384"=>array("name"=>"SomeMovieName1","age"=>"12.2 hrs","IMDBLink"=>"","IMDBRating"=>"", "coverArt"=>""),
        "452"=>array("name"=>"SomeMovieName2","age"=>"15.2 hrs","IMDBLink"=>"","IMDBRating"=>"", "coverArt"=>""),
        "954"=>array("name"=>"SomeMovieName3","age"=>"4.2 hrs","IMDBLink"=>"","IMDBRating"=>"", "coverArt"=>"")
    );
    $arr2=array(
       "384" => array("IMDBLink" => "7.2", "IMDBRating" => "http://www.imdb.com/LinkToMovie1", "coverArt" => "http://www.SomeLinkToCoverArt.com/1"),
       "452" => array("IMDBLink" => "5","IMDBRating" => "http://www.imdb.com/LinkToMovie2", "coverArt" => "http://www.SomeLinkToCoverArt.com/2")
    );
    $arr3 = array();
    foreach($arr1 as $key=>$val)
    {
        if(isset($arr2[0][$key]))
         $arr3[] = array_merge($val, $arr2[$key]);
    }
    echo "<pre>";
    print_r($arr3);
?>
<?php
die;
$a  = array(10,6,21,15,13,5);


$b = 0;
$c = 0;
foreach ($a as $keys=>$val) {
    foreach ($a as $key=>$val1) {
      if (8 == $b) {
        echo 'true';
        break;
      }else{
        
          $b = $a[$keys]+$val1;
      }
    }
}

die();
$a = array(0 => "1",
4 => "11",
2 => "112",
3 => "111",
6 =>"99" );
// echo '<pre>'; print_r($a);
asort($a);
echo '<pre>'; print_r($a);
// $clength = count($a);
// for($x = 0; $x < $clength; $x++) {
//   echo $a[$x];
//   echo "<br>";
// }
die();
$a = array(10, 20, 52, 105, 56, 89, 96);
$b = 0;
$c = 0;
foreach ($a as $key=>$val) {
    if ($val > $b) {
        $b = $val;
    }
    if ($val > $c && $val != $b ) {
      $c = $val;
  }
}
echo $c;
die;
print_r(get_headers("http://mitsuwa.com"));
?>
<?php 
die();
 include('senddata.php');
   
   echo "<img src='".setImgDownload('OLHorizLogoSm.png')."' width='300'/>"; // calling function inside php
 
die();
function myUrlEncode($string) {
  $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
  $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
  return str_replace($entities, $replacements, urlencode($string));
}
echo myUrlEncode('https://code.jquery.com/jquery-3.1.1.min.js?ver=3.1.1');
die;
?>


<?php $a  = 5;
$b = '5';
echo $a+$b;

?>
<script>
var a = 5;
var b = '5';
alert(a+b);
</script>
<?php die; ?>
<iframe src="https://doc.olocal.com/p/circlename" height="500px" width="500px"></iframe>
<?php die; ?>
<script type='text/javascript' src='https://code.jquery.com/jquery-3.1.1.min.js?ver=3.1.1'></script>
<div>
        <h2>Offer</h2>
        <form>
            <table id="t1">
                <tr>
                    <th><button type="button" class="addRow">Add</button></th>
                    <th>Quantity</th>
                    <th>Price per hour</th>
                    <th>Hours</th>
                    <th>Total</th>
                </tr>
                <tr class="item">
                    <td><select name="personal"><optgroup label="Personal"><option value="k&ouml;che">K&ouml;che</option><option value="barkeeper">Barkeeper</option><option value="garderobiere">Garderobiere</option><option value="chauffeure">Chauffeure</option><option value="oberkellner">Oberkellner</option><option value="serviceleitung">Serviceleitung</option><option value="hilfskoch">Hilfskoch</option><option value="servicekr&auml;fte">Servicekr&auml;fte</option></optgroup></select></td>
                    <td><input name="anzahl" class="qnty amount" value="" /></td>
                    <td><input name="preisps" class="price amount" value="" /></td>
                    <td><input name="stunden" class="hours amount" value="" /></td>
                    <td><input name="total" class="total" id="total1" value="" readonly="readonly" /></td>
                </tr>
            </table>

            <br />

            <table id="t2">
                <tr>
                    <td>Netto =<br></td>
                    <td><input id="netto" readonly="readonly" name="netto" type="text" value=""></td>
                </tr>
                <tr>
                    <td>Steuer 19% =<br></td>
                    <td><input id="steuer" readonly="readonly" name="steuer" type="text" value=""></td>
                </tr>
                <tr>
                    <td>Brutto =<br></td>
                    <td><input id="brutto" readonly="readonly" name="brutto" type="text" value=""></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>

    <script>
     // main function when page is opened
     jQuery(document).ready(function () {

// function for adding a new row
var r = 1;
jQuery('.addRow').click(function () {
    r++;
    jQuery('#t1').append('<tr id="row' + r + '" class="item"><td><select name="personal"><optgroup label="Personal"><option value="k&ouml;che">K&ouml;che</option><option value="barkeeper">Barkeeper</option><option value="garderobiere">Garderobiere</option><option value="chauffeure">Chauffeure</option><option value="oberkellner">Oberkellner</option><option value="serviceleitung">Serviceleitung</option><option value="hilfskoch">Hilfskoch</option><option value="servicekr&auml;fte">Servicekr&auml;fte</option></optgroup></select></td><td><input class="qnty amount" value="" /></td><td><input class="price amount" value="" /></td><td><input class="hours amount" value="" /></td><td><input class="total" value="" readonly="readonly" /></td><td><button type="button" name="remove" id="' + r + '" class="btn_remove">X</button></td></tr>');
});
// remove row when X is clicked
jQuery(document).on('click', '.btn_remove', function () {
    var button_id = jQuery(this).attr("id");
    jQuery('#row' + button_id + '').remove();
});
// calculate everything
jQuery(document).on("keyup", ".amount", calcAll);
//jQuery(".amount").on("change", calcAll);
});

// function for calculating everything
function calcAll() {
// calculate total for one row

jQuery(".item").each(function () {
    var qnty = 1;
    var price = 1;
    var hours = 1;
    var total = 1;
    if (!isNaN(parseFloat(jQuery(this).find(".qnty").val()))) {
        qnty = parseFloat(jQuery(this).find(".qnty").val());
    }
    if (!isNaN(parseFloat(jQuery(this).find(".price").val()))) {
        price = parseFloat(jQuery(this).find(".price").val());
    }
    if (!isNaN(parseFloat(jQuery(this).find(".hours").val()))) {
        hours = parseFloat(jQuery(this).find(".hours").val());
    }
    total = qnty * price * hours;
    jQuery(this).find(".total").val(total.toFixed(2));
});

//jQuery(".amount").each(function () {
   
//    if (!isNaN(this.value) && this.value.length != 0) {
//        product *= parseFloat(this.value);
//    }
//    jQuery("#total1").val(product.toFixed(2));
//    if (!isNaN(jQuery(this).find(".qnty"))) {

//    }
//});

// sum all totals
var sum = 0;
jQuery(".total").each(function () {
    if (!isNaN(this.value) && this.value.length != 0) {
        sum += parseFloat(this.value);
    }
});
// show values in netto, steuer, brutto fields
jQuery("#netto").val(sum.toFixed(2));
jQuery("#steuer").val(sum.toFixed(2) * 0.19);
jQuery("#brutto").val(parseFloat(sum.toFixed(2)) + parseFloat((jQuery("#steuer").val())));
}
</script>
<?php die; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

<?php die; ?>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
<!DOCTYPE html>
<html>
  <head>
    <title>Target Example</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.css" />
    <script src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.js"></script>
	<script>
	  jQuery(document).ready(function() {
	    function compute() {
          var a = jQuery('#a').val();
          var b = jQuery('#b').val();
          var total = a * b;
          jQuery('#total').val(total);
        }

        jQuery('#a, #b').change(compute);
		
	  });
	</script>
  </head>
  <body>
  	<div data-role="page" id="irr">
      <div data-role="header">
        <h1>Calculation</h1>
      </div>
      <div data-role="content">
        <div data-role="fieldcontain">
          <label for="a">Diameter:</label>
          <input type="number" name="a" id="a" value=""  />
          <label for="b">Diver:</label>
          <input type="number" name="b" id="b" value=""  />
          <label for="total">Result:</label>
          <input type="text" name="total" id="total" value=""  />
        </div>
        What did we do here?
      </div>
     </div>
  </body>
</html>
<?php die; ?>
<div style="width: 100%;padding-top: 0;">
<style>@media(min-width:787px){ #contact_form_iframe{ max-height: 135px;}}</style>
<iframe src="https://www.tapuz.co.il/blog/573-2/" scrolling="no" id="Contact_form_Iframe" frameborder="no" style="width: 100%;height: 100vw;"></iframe>
</div>


<html>
<head>
<title>Add Remove Multiple Input Fields Dynamically Using Jquery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12">
<div class="input_fields_wrap">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="">City</label>
<select name="city[]" class="form-control" required="">
<option value="">--Select City--</option>
<option value="noida">Noida</option>
<option value="gurgaon">Gurgaon</option>
<option value="delhi">Delhi</option>
<option value="indor">Indore </option>
<option value="jaipur">Jaipur</option>
</select>
</div>
<div class="form-group" >
<label for="">Email</label>
<input name="email[]" type="text" value="" class="form-control" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="">Numbers</label>
<input name="number[]" type="text" value="" class="form-control">
</div>
</div>
<button style="background-color:green;" class="add_field_button btn btn-info active">Add More Address</button>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
var max_fields = 15; //maximum input boxes allowed
var wrapper = jQuery(".input_fields_wrap"); //Fields wrapper
var add_button = jQuery(".add_field_button"); //Add button ID
var x = 1; //initlal text box count
jQuery(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
jQuery(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group"><label for="">City</label><select name="city[]" class="form-control"><option value="">--Select City--</option><option value="noida">Noida</option><option value="gurgaon">Gurgaon</option><option value="delhi">Delhi</option><option value="indor">Indore </option><option value="jaipur">Jaipur</option></select></div><div class="form-group"><label for="">Email</label><input name="email[]" type="text" class="form-control"></div></div><div class="col-md-6"><div class="form-group"><label for="">Numbers</label><input name="number[]" type="text" class="form-control"></div></div><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">Remove</div></div>'); //add input box
}
});
jQuery(wrapper).on("click",".remove_field", function(e){ //user click on remove text
e.preventDefault(); jQuery(this).parent('div').remove(); x--;
})
});
</script>
</body>
</html>



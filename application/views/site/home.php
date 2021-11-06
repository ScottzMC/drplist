<!DOCTYPE html>
<html class="no-js">
<head>
<title>Welcome to DRP List</title>
<meta name="description" content="drplist provides local classifieds and forums for jobs, services, local community, and events">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta property="og:site_name" content="drplist">
<meta property="og:url" content="https://scottnnaghor.com/drplist/">
<link rel="canonical" href="https://scottnnaghor.com/drplist/">
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('styles/cl.css'); ?>">
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('styles/homepage.css'); ?>">
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('styles/jquery-ui-clcustom.css'); ?>">
</head>
<body class="homepage en">
<script type="text/javascript"><!--
    function C(k){return(document.cookie.match('(^|; )'+k+'=([^;]*)')||0)[2]}
    var pagetype, pagemode;
    (function(){
        var h = document.documentElement;
        h.className = h.className.replace('no-js', 'js');
        var b = document.body;
        var bodyClassList = b.className.split(/\s+/);;
        pagetype = bodyClassList[0]; // dangerous assumption
        var fmt = C('cl_fmt');
        if ( fmt === 'regular' || fmt === 'mobile' ) {
            pagemode = fmt;
        } else if (screen.width <= 480) {
            pagemode = 'mobile';
        } else {
            pagemode = 'regular';
        }
        pagemode = pagemode === 'mobile' ? 'mobile' : 'desktop';
        bodyClassList.push(pagemode);
        if (C('hidesearch') === '1' && pagemode !== 'mobile') {
            bodyClassList.push('hide-search');
        }
        var width = window.innerWidth || document.documentElement.clientWidth;
        if (width > 1000) { bodyClassList.push('w1024'); }
        if (typeof window.sectionBase !== 'undefined') {
            var mode = (decodeURIComponent(C('cl_tocmode') || '').match(new RegExp(window.sectionBase + ':([^,]+)', 'i')) || {})[1] || window.defaultView;
            if (mode) {
                bodyClassList.push(mode);
            }
        }
        b.className = bodyClassList.join(' ');
    }());
</script>

<style>
    a{
        font-size: 14px; 
        text-transform: uppercase;
        color: #000;
        font-family: Franklin Gothic Medium, Franklin Gothic, ITC Franklin Gothic;
    }
</style>

<div class="wrapper">
    <section class="page-container">
        <div class="bglogo"></div>
        <header class="global-header wide">
   <a class="header-logo" name="logoLink" href="/">DL</a>

    <nav class="breadcrumbs-container">
    <ul class="breadcrumbs">
        <li class="crumb area">
            <p><a href="<?php echo site_url('home'); ?>">Welcome to DRPLIST</a></p>
        </li>
    </ul>
    </nav>

</header>
<header class="global-header narrow">
   <a class="header-logo" href="/">DL</a>
    <nav class="breadcrumbs-container">

<h1 class="breadcrumbs">Welcome to DRPLIST</h1>


    </nav>
    <span class="linklike show-wide-header">...</span>
</header>

        <nav id="topban" class="regular">
            <div class="regular-area">
                <h2 class="area">Welcome to DRPLIST</h2>
            </div>
        </nav>
        
       <div id="leftbar">
            <h1 id="logo">
                <!--<a href="">drplist</a>
                <sup><a href="//geo.craigslist.org/iso/gb">uk</a></sup>-->
                <img src="<?php echo base_url('assets/images/drpslistlogo-1.jpg'); ?>" width="200" />
            </h1>

<ul id="postlks">
    <?php if($this->session->userdata('urole') == 'User'){ ?>
    <li><a href="#">create a posting</a></li>
    <li><a href="#">my account</a></li>
    <li><a href="<?php echo site_url('account/logout'); ?>">logout</a></li>
    <?php }else{ ?>
    <li><a href="<?php echo site_url('account/login'); ?>">login to your account</a></li>
    <li><a href="<?php echo site_url('account/register'); ?>">create an account</a></li>
    <?php } ?>
</ul>

<form id="search" class="homepage-search" action="/search/" method="GET">
    <input id="query" class="querybox flatinput" name="query" data-autocomplete="search-count" autocorrect="off" autocapitalize="off" placeholder="search in drplist" autofocus="autofocus">
    <button type="submit" id="go" class="searchbtn"><span class="icon icon-search"><span class="screen-reader-text">search</span></span></button>
</form>


        </div>
        <div id="center">
            <div class="community">
                
        <div id="ccc" class="col">
        <h3 class="ban"><a href="#" class="ccc" data-alltitle="all community" data-cat="ccc"><span class="txt">COMMUNITY<sup class="c"></sup></span></a></h3>
        <div class="cats">
        <ul id="ccc0" class="left">
<li><a href="#" class="act" data-cat="act"><span class="txt">activities<sup class="c"></sup></span></a></li>
<li><a href="#" class="ats" data-cat="ats"><span class="txt">artists<sup class="c"></sup></span></a></li>
<li><a href="#" class="rid" data-cat="rid"><span class="txt">car pools<sup class="c"></sup></span></a></li>
<li><a href="#" class="kid" data-cat="kid"><span class="txt">childcare<sup class="c"></sup></span></a></li>
<li><a href="#" class="cls" data-cat="cls"><span class="txt">classes<sup class="c"></sup></span></a></li>
<li><a href="#" class="eve" data-cat="eve"><span class="txt">events<sup class="c"></sup></span></a></li>
<li><a href="#" class="com" data-cat="com"><span class="txt">general<sup class="c"></sup></span></a></li>
<li><a href="#" class="grp" data-cat="grp"><span class="txt">groups<sup class="c"></sup></span></a></li>
</ul>
<ul id="ccc1" class="mc">
<li><a href="/d/local-news-and-views/search/vnn" class="vnn" data-cat="vnn"><span class="txt">local news<sup class="c"></sup></span></a></li>
<li><a href="/d/lost-found/search/laf" class="laf" data-cat="laf"><span class="txt">lost+found<sup class="c"></sup></span></a></li>
<li><a href="/d/missed-connections/search/mis" class="mis" data-cat="mis"><span class="txt">missed connections<sup class="c"></sup></span></a></li>
<li><a href="/d/musicians/search/muc" class="muc" data-cat="muc"><span class="txt">musicians<sup class="c"></sup></span></a></li>
<li><a href="/d/pets/search/pet" class="pet" data-cat="pet"><span class="txt">pets<sup class="c"></sup></span></a></li>
<li><a href="/d/politics/search/pol" class="pol" data-cat="pol"><span class="txt">politics<sup class="c"></sup></span></a></li>
<li><a href="/d/rants-raves/search/rnr" class="rnr" data-cat="rnr"><span class="txt">rants &amp; raves<sup class="c"></sup></span></a></li>
<li><a href="/d/volunteers/search/vol" class="vol" data-cat="vol"><span class="txt">volunteers<sup class="c"></sup></span></a></li>
</ul>
</div>
</div>

                
        <div id="bbb" class="col">
        <h3 class="ban"><a href="/d/services/search/bbb" class="bbb" data-alltitle="all services" data-cat="bbb"><span class="txt">SERVICES<sup class="c"></sup></span></a></h3>
        <div class="cats">
        <ul id="bbb0" class="left">
<li><a href="/d/beauty-services/search/bts" class="bts" data-cat="bts"><span class="txt">beauty<sup class="c"></sup></span></a></li>
<li><a href="/d/automotive-car-services/search/aos" class="aos" data-cat="aos"><span class="txt">cars<sup class="c"></sup></span></a></li>
<li><a href="/d/cell-phone-mobile-services/search/cms" class="cms" data-cat="cms"><span class="txt">cell/mobile<sup class="c"></sup></span></a></li>
<li><a href="/d/computer-services/search/cps" class="cps" data-cat="cps"><span class="txt">computer<sup class="c"></sup></span></a></li>
<li><a href="/d/creative-services/search/crs" class="crs" data-cat="crs"><span class="txt">creative<sup class="c"></sup></span></a></li>
<li><a href="/d/cycle-services/search/cys" class="cys" data-cat="cys"><span class="txt">cycle<sup class="c"></sup></span></a></li>
<li><a href="/d/event-services/search/evs" class="evs" data-cat="evs"><span class="txt">event<sup class="c"></sup></span></a></li>
<li><a href="/d/farm-garden-services/search/fgs" class="fgs" data-cat="fgs"><span class="txt">farm+garden<sup class="c"></sup></span></a></li>
<li><a href="/d/financial-services/search/fns" class="fns" data-cat="fns"><span class="txt">financial<sup class="c"></sup></span></a></li>
<li><a href="/d/health-wellness-services/search/hws" class="hws" data-cat="hws"><span class="txt">health/well<sup class="c"></sup></span></a></li>
<li><a href="/d/household-services/search/hss" class="hss" data-cat="hss"><span class="txt">household<sup class="c"></sup></span></a></li>
</ul>
<ul id="bbb1" class="mc">
<li><a href="/d/real-estate-housing-services/search/rts" class="rts" data-cat="rts"><span class="txt">housing<sup class="c"></sup></span></a></li>
<li><a href="/d/labor-hauling-moving/search/lbs" class="lbs" data-cat="lbs"><span class="txt">labour/move<sup class="c"></sup></span></a></li>
<li><a href="/d/legal-services/search/lgs" class="lgs" data-cat="lgs"><span class="txt">legal<sup class="c"></sup></span></a></li>
<li><a href="/d/lessons-tutoring/search/lss" class="lss" data-cat="lss"><span class="txt">lessons<sup class="c"></sup></span></a></li>
<li><a href="/d/marine-services/search/mas" class="mas" data-cat="mas"><span class="txt">marine<sup class="c"></sup></span></a></li>
<li><a href="/d/pet-services/search/pas" class="pas" data-cat="pas"><span class="txt">pet<sup class="c"></sup></span></a></li>
<li><a href="/d/skilled-trade-services/search/sks" class="sks" data-cat="sks"><span class="txt">skilled trade<sup class="c"></sup></span></a></li>
<li><a href="/d/small-biz-ads/search/biz" class="biz" data-cat="biz"><span class="txt">sm biz ads<sup class="c"></sup></span></a></li>
<li><a href="/d/travel-holiday-services/search/trv" class="trv" data-cat="trv"><span class="txt">travel/hol<sup class="c"></sup></span></a></li>
<li><a href="/d/writing-editing-translation/search/wet" class="wet" data-cat="wet"><span class="txt">write<sup class="c"></sup></span></a></li>
</ul>
</div>
</div>

            </div>
            <div class="housing">
                
        <div id="hhh" class="col">
        <h3 class="ban"><a href="/d/housing/search/hhh" class="hhh" data-alltitle="all housing" data-cat="hhh"><span class="txt">HOUSING<sup class="c"></sup></span></a></h3>
        <div class="cats">
        <ul id="hhh0" >
<li><a href="/d/apartments-housing-for-rent/search/apa" class="apa" data-cat="apa"><span class="txt">flats/housing<sup class="c"></sup></span></a></li>
<li><a href="/d/holiday-rentals/search/vac" class="vac" data-cat="vac"><span class="txt">holiday rentals<sup class="c"></sup></span></a></li>
<li><a href="/d/housing-real-estate/search/rea" class="rea" data-cat="rea"><span class="txt">housing<sup class="c"></sup></span></a></li>
<li><a href="/d/housing-swap/search/swp" class="swp" data-cat="swp"><span class="txt">housing swap<sup class="c"></sup></span></a></li>
<li><a href="/d/all-housing-wanted/search/hsw" class="hsw" data-cat="hsw"><span class="txt">housing wanted<sup class="c"></sup></span></a></li>
<li><a href="/d/office-commercial/search/off" class="off" data-cat="off"><span class="txt">office / commercial<sup class="c"></sup></span></a></li>
<li><a href="/d/parking-storage/search/prk" class="prk" data-cat="prk"><span class="txt">parking / storage<sup class="c"></sup></span></a></li>
<li><a href="/d/rooms-shares/search/roo" class="roo" data-cat="roo"><span class="txt">rooms/shared<sup class="c"></sup></span></a></li>
<li><a href="/d/wanted%3A-room-share/search/sha" class="sha" data-cat="sha"><span class="txt">rooms wanted<sup class="c"></sup></span></a></li>
<li><a href="/d/sub-lets-temporary/search/sub" class="sub" data-cat="sub"><span class="txt">sub-lets / temporary<sup class="c"></sup></span></a></li>
</ul>
</div>
</div>

                
        <div id="sss" class="col">
        <h3 class="ban"><a href="/d/for-sale/search/sss" class="sss" data-alltitle="all for sale" data-cat="sss"><span class="txt">FOR SALE<sup class="c"></sup></span></a></h3>
        <div class="cats">
        <ul id="sss0" class="left">
<li><a href="/d/antiques/search/ata" class="ata" data-cat="ata"><span class="txt">antiques<sup class="c"></sup></span></a></li>
<li><a href="/d/appliances/search/ppa" class="ppa" data-cat="ppa"><span class="txt">appliances<sup class="c"></sup></span></a></li>
<li><a href="/d/arts-crafts/search/ara" class="ara" data-cat="ara"><span class="txt">arts+crafts<sup class="c"></sup></span></a></li>
<li><a href="/d/atvs%2C-utvs%2C-snowmobiles/search/sna" class="sna" data-cat="sna"><span class="txt">atv/utv/sno<sup class="c"></sup></span></a></li>
<li><a href="/d/auto-parts/search/pta" class="pta" data-cat="pta"><span class="txt">auto parts<sup class="c"></sup></span></a></li>
<li><a href="/d/aviation/search/ava" class="ava" data-cat="ava"><span class="txt">aviation<sup class="c"></sup></span></a></li>
<li><a href="/d/baby-kid-stuff/search/baa" class="baa" data-cat="baa"><span class="txt">baby+kid<sup class="c"></sup></span></a></li>
<li><a href="/d/barter/search/bar" class="bar" data-cat="bar"><span class="txt">barter<sup class="c"></sup></span></a></li>
<li><a href="/d/health-and-beauty/search/haa" class="haa" data-cat="haa"><span class="txt">beauty+hlth<sup class="c"></sup></span></a></li>
<li><a href="/d/bicycle-parts/search/bip" class="bip" data-cat="bip"><span class="txt">bike parts<sup class="c"></sup></span></a></li>
<li><a href="/d/bicycles/search/bia" class="bia" data-cat="bia"><span class="txt">bikes<sup class="c"></sup></span></a></li>
<li><a href="/d/boat-parts-accessories/search/bpa" class="bpa" data-cat="bpa"><span class="txt">boat parts<sup class="c"></sup></span></a></li>
<li><a href="/d/boats/search/boo" class="boo" data-cat="boo"><span class="txt">boats<sup class="c"></sup></span></a></li>
<li><a href="/d/books-magazines/search/bka" class="bka" data-cat="bka"><span class="txt">books<sup class="c"></sup></span></a></li>
<li><a href="/d/business/search/bfa" class="bfa" data-cat="bfa"><span class="txt">business<sup class="c"></sup></span></a></li>
<li><a href="/d/motor-homes-camper-vans/search/rva" class="rva" data-cat="rva"><span class="txt">caravn+mtrhm<sup class="c"></sup></span></a></li>
<li><a href="/d/cars-vans-trucks/search/cta" class="cta" data-cat="cta"><span class="txt">cars+vans<sup class="c"></sup></span></a></li>
<li><a href="/d/cds-dvds-vhs/search/ema" class="ema" data-cat="ema"><span class="txt">cds/dvd/vhs<sup class="c"></sup></span></a></li>
<li><a href="/d/clothing-accessories/search/cla" class="cla" data-cat="cla"><span class="txt">clothes+acc<sup class="c"></sup></span></a></li>
<li><a href="/d/collectibles/search/cba" class="cba" data-cat="cba"><span class="txt">collectibles<sup class="c"></sup></span></a></li>
<li><a href="/d/computer-parts/search/syp" class="syp" data-cat="syp"><span class="txt">computer parts<sup class="c"></sup></span></a></li>
<li><a href="/d/computers/search/sya" class="sya" data-cat="sya"><span class="txt">computers<sup class="c"></sup></span></a></li>
<li><a href="/d/electronics/search/ela" class="ela" data-cat="ela"><span class="txt">electronics<sup class="c"></sup></span></a></li>
</ul>
<ul id="sss1" class="mc">
<li><a href="/d/farm-garden/search/gra" class="gra" data-cat="gra"><span class="txt">farm+garden<sup class="c"></sup></span></a></li>
<li><a href="/d/free-stuff/search/zip" class="zip" data-cat="zip"><span class="txt">free<sup class="c"></sup></span></a></li>
<li><a href="/d/furniture/search/fua" class="fua" data-cat="fua"><span class="txt">furniture<sup class="c"></sup></span></a></li>
<li><a href="/d/garage-moving-sales/search/gms" class="gms" data-cat="gms"><span class="txt">garage sale<sup class="c"></sup></span></a></li>
<li><a href="/d/general-for-sale/search/foa" class="foa" data-cat="foa"><span class="txt">general<sup class="c"></sup></span></a></li>
<li><a href="/d/heavy-equipment/search/hva" class="hva" data-cat="hva"><span class="txt">heavy equip<sup class="c"></sup></span></a></li>
<li><a href="/d/household-items/search/hsa" class="hsa" data-cat="hsa"><span class="txt">household<sup class="c"></sup></span></a></li>
<li><a href="/d/jewellery/search/jwa" class="jwa" data-cat="jwa"><span class="txt">jewellery<sup class="c"></sup></span></a></li>
<li><a href="/d/materials/search/maa" class="maa" data-cat="maa"><span class="txt">materials<sup class="c"></sup></span></a></li>
<li><a href="/d/mobile-phones/search/moa" class="moa" data-cat="moa"><span class="txt">mobile phones<sup class="c"></sup></span></a></li>
<li><a href="/d/motorcycle-parts-accessories/search/mpa" class="mpa" data-cat="mpa"><span class="txt">motorcycle parts<sup class="c"></sup></span></a></li>
<li><a href="/d/motorcycles-scooters/search/mca" class="mca" data-cat="mca"><span class="txt">motorcycles<sup class="c"></sup></span></a></li>
<li><a href="/d/musical-instruments/search/msa" class="msa" data-cat="msa"><span class="txt">music instr<sup class="c"></sup></span></a></li>
<li><a href="/d/photo-video/search/pha" class="pha" data-cat="pha"><span class="txt">photo+video<sup class="c"></sup></span></a></li>
<li><a href="/d/sporting-goods/search/sga" class="sga" data-cat="sga"><span class="txt">sporting<sup class="c"></sup></span></a></li>
<li><a href="/d/tickets/search/tia" class="tia" data-cat="tia"><span class="txt">tickets<sup class="c"></sup></span></a></li>
<li><a href="/d/tools/search/tla" class="tla" data-cat="tla"><span class="txt">tools<sup class="c"></sup></span></a></li>
<li><a href="/d/toys-games/search/taa" class="taa" data-cat="taa"><span class="txt">toys+games<sup class="c"></sup></span></a></li>
<li><a href="/d/trailers/search/tra" class="tra" data-cat="tra"><span class="txt">trailers<sup class="c"></sup></span></a></li>
<li><a href="/d/video-gaming/search/vga" class="vga" data-cat="vga"><span class="txt">video gaming<sup class="c"></sup></span></a></li>
<li><a href="/d/wanted/search/waa" class="waa" data-cat="waa"><span class="txt">wanted<sup class="c"></sup></span></a></li>
<li><a href="/d/auto-wheels-tyres/search/wta" class="wta" data-cat="wta"><span class="txt">wheels+tires<sup class="c"></sup></span></a></li>
</ul>
</div>
</div>

            </div>
            <div class="jobs">
                
        <div id="jjj" class="col">
        <h3 class="ban"><a href="/d/jobs/search/jjj" class="jjj" data-alltitle="all jobs" data-cat="jjj"><span class="txt">JOBS<sup class="c"></sup></span></a></h3>
        <div class="cats">
        <ul id="jjj0" >
<li><a href="/d/accounting-finance/search/acc" class="acc" data-cat="acc"><span class="txt">accounting+finance<sup class="c"></sup></span></a></li>
<li><a href="/d/admin-office/search/ofc" class="ofc" data-cat="ofc"><span class="txt">admin / office<sup class="c"></sup></span></a></li>
<li><a href="/d/architect-engineer-cad/search/egr" class="egr" data-cat="egr"><span class="txt">arch / engineering<sup class="c"></sup></span></a></li>
<li><a href="/d/art-media-design/search/med" class="med" data-cat="med"><span class="txt">art / media / design<sup class="c"></sup></span></a></li>
<li><a href="/d/science-biotech/search/sci" class="sci" data-cat="sci"><span class="txt">biotech / science<sup class="c"></sup></span></a></li>
<li><a href="/d/business-mgmt/search/bus" class="bus" data-cat="bus"><span class="txt">business / mgmt<sup class="c"></sup></span></a></li>
<li><a href="/d/customer-services/search/csr" class="csr" data-cat="csr"><span class="txt">customer services<sup class="c"></sup></span></a></li>
<li><a href="/d/education-teaching/search/edu" class="edu" data-cat="edu"><span class="txt">education<sup class="c"></sup></span></a></li>
<li><a href="/d/et-cetera/search/etc" class="etc" data-cat="etc"><span class="txt">etc / misc<sup class="c"></sup></span></a></li>
<li><a href="/d/food-drink-hospitality/search/fbh" class="fbh" data-cat="fbh"><span class="txt">food / bev / hosp<sup class="c"></sup></span></a></li>
<li><a href="/d/general-labour/search/lab" class="lab" data-cat="lab"><span class="txt">general labour<sup class="c"></sup></span></a></li>
<li><a href="/d/government/search/gov" class="gov" data-cat="gov"><span class="txt">government<sup class="c"></sup></span></a></li>
<li><a href="/d/housing-real-estate/search/rej" class="rej" data-cat="rej"><span class="txt">housing/real estate<sup class="c"></sup></span></a></li>
<li><a href="/d/human-resources/search/hum" class="hum" data-cat="hum"><span class="txt">human resources<sup class="c"></sup></span></a></li>
<li><a href="/d/legal-paralegal/search/lgl" class="lgl" data-cat="lgl"><span class="txt">legal / paralegal<sup class="c"></sup></span></a></li>
<li><a href="/d/manufacturing/search/mnu" class="mnu" data-cat="mnu"><span class="txt">manufacturing<sup class="c"></sup></span></a></li>
<li><a href="/d/marketing-advertising-pr/search/mar" class="mar" data-cat="mar"><span class="txt">marketing / pr / ad<sup class="c"></sup></span></a></li>
<li><a href="/d/healthcare/search/hea" class="hea" data-cat="hea"><span class="txt">medical / health<sup class="c"></sup></span></a></li>
<li><a href="/d/non-profit/search/npo" class="npo" data-cat="npo"><span class="txt">non-profit sector<sup class="c"></sup></span></a></li>
<li><a href="/d/retail-wholesale/search/ret" class="ret" data-cat="ret"><span class="txt">retail / wholesale<sup class="c"></sup></span></a></li>
<li><a href="/d/sales/search/sls" class="sls" data-cat="sls"><span class="txt">sales / biz dev<sup class="c"></sup></span></a></li>
<li><a href="/d/salon-spa-fitness/search/spa" class="spa" data-cat="spa"><span class="txt">salon / spa / fitness<sup class="c"></sup></span></a></li>
<li><a href="/d/security/search/sec" class="sec" data-cat="sec"><span class="txt">security<sup class="c"></sup></span></a></li>
<li><a href="/d/skilled-trades-artisan/search/trd" class="trd" data-cat="trd"><span class="txt">skilled trade / craft<sup class="c"></sup></span></a></li>
<li><a href="/d/software-qa-dba-etc/search/sof" class="sof" data-cat="sof"><span class="txt">software/qa/dba<sup class="c"></sup></span></a></li>
<li><a href="/d/systems-networking/search/sad" class="sad" data-cat="sad"><span class="txt">systems / network<sup class="c"></sup></span></a></li>
<li><a href="/d/technical-support/search/tch" class="tch" data-cat="tch"><span class="txt">technical support<sup class="c"></sup></span></a></li>
<li><a href="/d/transport/search/trp" class="trp" data-cat="trp"><span class="txt">transport<sup class="c"></sup></span></a></li>
<li><a href="/d/tv-film-video-radio/search/tfr" class="tfr" data-cat="tfr"><span class="txt">tv / film / video<sup class="c"></sup></span></a></li>
<li><a href="/d/web-html-info-design/search/web" class="web" data-cat="web"><span class="txt">web/info design<sup class="c"></sup></span></a></li>
<li><a href="/d/writing-editing/search/wri" class="wri" data-cat="wri"><span class="txt">writing / editing<sup class="c"></sup></span></a></li>
</ul>
</div>
</div>

                
        <div id="ggg" class="col">
        <h3 class="ban"><a href="/d/temp-jobs/search/ggg" class="ggg" data-alltitle="all temp jobs" data-cat="ggg"><span class="txt">SNAG A JOB<sup class="c"></sup></span></a></h3>
        <div class="cats">
        <ul id="ggg0" class="left">
<li><a href="/d/computer-temp-jobs/search/cpg" class="cpg" data-cat="cpg"><span class="txt">computer<sup class="c"></sup></span></a></li>
<li><a href="/d/creative-temp-jobs/search/crg" class="crg" data-cat="crg"><span class="txt">creative<sup class="c"></sup></span></a></li>
<li><a href="/d/crew-temp-jobs/search/cwg" class="cwg" data-cat="cwg"><span class="txt">crew<sup class="c"></sup></span></a></li>
<li><a href="/d/domestic-temp-jobs/search/dmg" class="dmg" data-cat="dmg"><span class="txt">domestic<sup class="c"></sup></span></a></li>
</ul>

</div>
</div>

            </div>
        </div>
        <div id="rightbar">

        <ul class="menu collapsible">
            <li class=" expand s"><h5 class="ban ctry">LOCATION</h5>
                <ul class="acitem">
                    <?php 
                        foreach($state as $st){
                    ?>
                    <li class="s"><a href="#" style="font-size: 16px; text-transform: uppercase;"><?php echo $st->state_name; ?></a></li>
                    <?php } ?>
                </ul>
</li>

</ul>
</li>
        </ul>
        <br>
    
        </div>
    </section>
    <footer>
    <ul class="clfooter">
        <li>&copy; 20<?php echo date('y'); ?> <span class="desktop">drplist</span><span class="mobile">DL</span></li>
        <li><a href="https://www.craigslist.org/about/help/?lang=en&amp;cc=gb">help</a></li>
        <li class="desktop"><a href="https://forums.craigslist.org/?forumID=8">feedback</a></li>
        <li><a href="https://www.craigslist.org/about/terms.of.use">terms</a></li>
        <li><a href="https://www.craigslist.org/about/?lang=en&amp;cc=gb">about</a></li>
    </ul>
</footer>

</div>

<script type="text/javascript">
    if (pagemode == 'mobile') {
        var s = document.getElementById('search');
        var c = document.getElementById('center');
        c.insertBefore(s, c.children[0]);
    }
</script>
    

                <script>
                (function(){
                    var cl = window.CL = window.cl = window.cl || window.CL || {};
                    cl.sandbox = "";
                })();
                try {
                    var p = document.createElement("p");
                    if (
                        !/\/\/.+\.craigslist\.org\/about\//.test(window.location.href) &&
                        window.location.pathname.length > 1 &&
                        (!window.addEventListener || JSON.parse(JSON.stringify('x')) !== 'x' || (p.style.flex!=='' && p.style['-webkit-flex'] !== ''))
                    ) {
                        throw "unsupported browser";
                    }
                } catch (e) {
                    function cleanup() {
                        document.body.innerHTML = '<div id="cl-unsupported-browser" style="margin:1em;font-size:150%;text-align:center;">We have detected you are using a browser that is missing critical features.<br><br>Please visit craigslist from a modern browser.</div>';
                        document.body.style = "display:block";
                    }

                    try {
                        document.body.style = "display:none";
                    } catch (e) {
                    }
                    window.onload = cleanup;
                    window.clUnsupportedBrowser = true;
                }
                </script>
            <script src="<?php echo base_url('js/general-concat.min.js'); ?>" type="text/javascript" ></script>

<script src="<?php echo base_url('js/homepage-concat.min.js'); ?>" type="text/javascript" ></script>

</body>
</html>

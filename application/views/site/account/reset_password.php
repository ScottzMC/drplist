<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>drplist - account reset password</title>
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('styles/cl.css'); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1">

    </head>

    <body>

<header class="global-header">
   <a class="header-logo" name="logoLink" href="<?php echo site_url('home'); ?>"><img src="<?php echo base_url('assets/images/drpslistlogo-1.jpg'); ?>" width="200" /></a>
</header>

<section class="body">
    <div class="login-page-boxes">
        <img src="<?php echo base_url('assets/images/drpslistlogogirl-2.jpg'); ?>" style="float: left; margin-left: 100px;" />
        <div class="accountform login-box">
            <h1 class="accountform-banner">Reset Password</h1>
            <form action="<?php echo base_url('account/reset_password'); ?>" method="POST" class="loginform">
                <div class="accountform-field">
                    <label for="inputEmailHandle">Reset code</label>
                    <input name="code" type="text" placeholder="Enter code" required>
   					<span class="text-danger" style="color: red;"><?php echo form_error('code'); ?></span>
                </div>
                <div class="accountform-field">
                    <label for="inputPassword">Email</label>
                    <input name="email" type="email" placeholder="Enter email address" required>
					<span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                </div>
                <div class="accountform-field">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
					<span class="text-danger" style="color: red;"><?php echo form_error('password'); ?></span>
                </div>
                <div class="accountform-actions">
                    <button type="submit" name="reset" class="accountform-btn"><img src="<?php echo base_url('assets/images/drpslist-submit-button.jpg'); ?>" height="40" /></button>
                </div>
            </form>
        </div>

    </div>


</section>
<footer>
    <ul class="clfooter">
        <li>&copy; 2021 <span class="desktop">craigslist</span><span class="mobile">CL</span></li>
        <li><a href="https://www.craigslist.org/about/help/?lang=en&amp;cc=gb">help</a></li>
        <li><a href="https://www.craigslist.org/about/scams?lang=en&amp;cc=gb">safety</a></li>
        <li class="desktop"><a href="https://www.craigslist.org/about/privacy.policy?lang=en&amp;cc=gb">privacy</a><sup class="neu">new</sup></li>
        <li class="desktop"><a href="https://forums.craigslist.org/?forumID=8&amp;lang=en&amp;cc=gb">feedback</a></li>
        <li><a href="https://www.craigslist.org/about/terms.of.use?lang=en&amp;cc=gb">terms</a></li>
        <li><a href="https://www.craigslist.org/about/?lang=en&amp;cc=gb">about</a></li>
        <li class="fsel desktop linklike" data-mode="mobile">Mobile</li>
        <li class="fsel mobile linklike" data-mode="regular">desktop</li>
    </ul>
</footer>

        <script type="text/javascript">
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
                document.body.innerHTML = '<div id="cl-unsupported-browser" style="margin:1em;font-size:150%;text-align:center;">We have detected you are using a browser that is missing critical features.<br><br>Please visit drplist from a modern browser.</div>';
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
    </body>
</html>


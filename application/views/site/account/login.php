<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>drplist - account log in</title>
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
            <h1 class="accountform-banner">LOGIN</h1>
            <form action="<?php echo base_url('account/login'); ?>" method="POST" class="loginform">
                <div class="accountform-field">
                    <label for="inputEmailHandle">Email Address</label>
                    <input name="email" type="email" placeholder="Enter email address" required>
   					<span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                </div>
                <div class="accountform-field">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
					<span class="text-danger" style="color: red;"><?php echo form_error('password'); ?></span>
                </div>
                <div class="accountform-actions">
                    <button type="submit" name="login" class="accountform-btn"><img src="<?php echo base_url('assets/images/drpslist-login-button.jpg'); ?>" height="40" /></button>
                    <a style="float: left; color: #000;" href="<?php echo site_url('account/register'); ?>" class="accountform-helplink-tiny" tabindex="-1">Dont have an account?</a><br>
                    <a style="float: left; color: #000;" href="<?php echo site_url('account/forgot_password'); ?>" class="accountform-helplink-tiny" tabindex="-1">Forgot password?</a>
                </div>
                <?php
                	echo $this->session->flashdata('msg');
                	echo $this->session->flashdata('msgError');
                ?>
            </form>
        </div>

    </div>


</section>
<footer>
    <ul class="clfooter">
        <li>&copy; 2021 <span class="desktop">drplist</span><span class="mobile">DL</span></li>
        <li><a href="https://www.craigslist.org/about/help/?lang=en&amp;cc=gb">help</a></li>
        <li class="desktop"><a href="https://forums.craigslist.org/?forumID=8&amp;lang=en&amp;cc=gb">feedback</a></li>
        <li><a href="https://www.craigslist.org/about/terms.of.use?lang=en&amp;cc=gb">terms</a></li>
        <li><a href="https://www.craigslist.org/about/?lang=en&amp;cc=gb">about</a></li>
    </ul>
</footer>

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


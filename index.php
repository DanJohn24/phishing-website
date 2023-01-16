<!-- <script src="script\jquery.js"></script>
<script src=script\script.js></script> 
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" /> -->

<?php
    $title = 'Index'; 

    //require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    setcookie("starter_cookie", "starter_cookie",  time() + 2 * 24 * 60 * 60, '/');
?>

<?php include ("db/access_site_query.php"); ?>

<body>
    <div id ="header_container">
        <header id="layout_header">
            <a href="/" id="login_page_logo_wrap">
                <img id = "zoom_logo" src="pictures\zoom_logo.png" alt="Zoom Logo">
            </a>
            <div id="header_links">
                <span id="header_login_link">New to Zoom?</span>
                <button type="button" id="sign_up_for_free_button" onclick="window.location.href='db/investigate_site.php';">
                    <span id="sign_up_for_free_span"> Sign Up Free </span>
                </button>
                <a class="additional_headers_links" type="button" target="_self" href="db/investigate_site.php">
                    <span class="additional_headers_spans"> Support </span>
                </a>
                <a class="additional_headers_links" type="button"  target="_self" href="db/investigate_site.php">
                    <span class="additional_headers_spans"> English  </span>
                </a>
            </div>
        </header>
    </div>
    
    <div id ="full_container_div">
        <div id ="form_container">
            <form id="submit_form" method="post" action="db/sign_in_query.php">
            <h1 id="sign_in_text"> Sign In </h1>
                <div class="form_group">
                    <div class="controller_container">
                        <label for="email" class="email_label">
                            Email Address</label>
                        <input type="email" id="email_input" name="email" autocomplete="new-email" maxlength="128" aria-required="true" placeholder="Email Address" value="">
                    </div>
                </div>
                <div class="form_group">
                    <div class="controller_container">
                        <label for="password" id="password_label">Password</label>
                        <div id="password_box_container">
                            <input type="password" id="password_input" name="password" autocomplete="new-password" maxlength="99" aria-required="true" placeholder="Password">
                            <a id="forgot_password_button" href="db/investigate_site.php">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="controller_container">
                        <p id="agree_terms_text">
                        By signing in, I agree to the <a target="_self" href="db/investigate_site.php">Zoom's Privacy Statement</a> and <a target="_self" href="db/investigate_site.php">Terms of Service</a>.</p>
                        <div id = "signin" >
                            <button type="submit" aria-required="true" id="sign_in_button">Sign In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<style>
    #sign_in_text{
        box-sizing: border-box;
        color: rgb(19, 22, 25);
        font-family: "Internacional", "Helvetica", "Arial";
        font-size: 32px;
        font-weight: 500;
        letter-spacing: 0.42px;
        line-height: 48px;
        margin-bottom: 32px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        text-align: center;
        text-transform: capitalize;
    }
    body {
        display: flex;
        flex-direction: column;
    }
    #header_container{
        display: flex;
        flex-direction: row;
        flex-shrink: 0;
        flex-grow: 1;
    }
    .submit_form{   
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        text-align: left
    }
    .form_group{
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        margin-bottom: 24px;
        text-align: left
    }
    .controller_container{
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        text-align: left
    }
    #email_label{
        box-sizing: border-box;
        color: rgb(116, 116, 135);
        display: block;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0.42px;
        line-height: 20px;
        margin-bottom: 4px;
        text-align: left
    }
    #email_input{
        background-color: rgb(255, 255, 255);
        background-image: none;
        border-bottom-color: rgb(186, 186, 204);
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(186, 186, 204);
        border-left-style: solid;
        border-left-width: 1px;
        border-right-color: rgb(186, 186, 204);
        border-right-style: solid;
        border-right-width: 1px;
        border-top-color: rgb(186, 186, 204);
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        border-top-style: solid;
        border-top-width: 1px;
        box-shadow: none;
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        display: block;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-optical-sizing: auto;
        font-palette: normal;
        font-size: 14px;
        font-size-adjust: none;
        font-stretch: 100%;
        font-style: normal;
        font-variant-alternates: normal;
        font-variant-caps: normal;
        font-variant-east-asian: normal;
        font-variant-ligatures: normal;
        font-variant-numeric: normal;
        font-variant-position: normal;
        font-variation-settings: normal;
        font-weight: 400;
        height: 40px;
        letter-spacing: 0.42px;
        line-height: 40px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        padding-bottom: 0px;
        padding-left: 12px;
        padding-right: 12px;
        padding-top: 0px;
        text-align: start;
        transition-delay: 0s, 0s;
        transition-duration: 0.15s, 0.15s;
        transition-property: border-color, box-shadow;
        transition-timing-function: ease-in-out, ease-in-out;
        width: 350px
    }
    #password_label{
        box-sizing: border-box;
        color: rgb(116, 116, 135);
        display: inline-block;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0.42px;
        line-height: 20px;
        margin-bottom: 4px;
        text-align: left
    }
    #password_box_container{
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        position: relative;
        text-align: left
    }
    #password_input{
        background-color: rgb(255, 255, 255);
        background-image: none;
        border-bottom-color: rgb(186, 186, 204);
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(186, 186, 204);
        border-left-style: solid;
        border-left-width: 1px;
        border-right-color: rgb(186, 186, 204);
        border-right-style: solid;
        border-right-width: 1px;
        border-top-color: rgb(186, 186, 204);
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        border-top-style: solid;
        border-top-width: 1px;
        box-shadow: none;
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        display: block;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-optical-sizing: auto;
        font-palette: normal;
        font-size: 14px;
        font-size-adjust: none;
        font-stretch: 100%;
        font-style: normal;
        font-variant-alternates: normal;
        font-variant-caps: normal;
        font-variant-east-asian: normal;
        font-variant-ligatures: normal;
        font-variant-numeric: normal;
        font-variant-position: normal;
        font-variation-settings: normal;
        font-weight: 400;
        height: 40px;
        letter-spacing: 0.42px;
        line-height: 40px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        padding-bottom: 0px;
        padding-left: 12px;
        padding-right: 100px;
        padding-top: 0px;
        text-align: start;
        transition-delay: 0s, 0s;
        transition-duration: 0.15s, 0.15s;
        transition-property: border-color, box-shadow;
        transition-timing-function: ease-in-out, ease-in-out;
        width: 350px
    }
    #forgot_password_button{
        background-attachment: scroll;
        background-clip: border-box;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        background-origin: padding-box;
        background-position-x: 0%;
        background-position-y: 0%;
        background-repeat: repeat;
        background-size: auto;
        border-bottom-color: rgb(9, 86, 181);
        border-bottom-style: none;
        border-bottom-width: 0px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(9, 86, 181);
        border-left-style: none;
        border-left-width: 0px;
        border-right-color: rgb(9, 86, 181);
        border-right-style: none;
        border-right-width: 0px;
        border-top-color: rgb(9, 86, 181);
        border-top-style: none;
        border-top-width: 0px;
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 28px;
        outline-color: rgb(9, 86, 181);
        outline-style: none;
        outline-width: 0px;
        padding-bottom: 6px;
        padding-left: 6px;
        padding-right: 6px;
        padding-top: 6px;
        position: absolute;
        right: 1px;
        text-align: right;
        text-decoration-color: rgb(9, 86, 181);
        text-decoration-line: none;
        text-decoration-style: solid;
        text-decoration-thickness: auto;
        top: -34px;
        z-index: 1
    }
    #agree_terms_text{
        box-sizing: border-box;
        color: rgb(116, 116, 135);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 12px;
        letter-spacing: 0.42px;
        line-height: 18px;
        margin-bottom: 10px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        text-align: left
    }
    .signin{
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        position: relative;
        text-align: left
    }
    #sign_in_button{
        appearance: button;
        background-color: rgb(14, 113, 235);
        background-image: none;
        border-bottom-color: rgb(14, 113, 235);
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(14, 113, 235);
        border-left-style: solid;
        border-left-width: 1px;
        border-right-color: rgb(14, 113, 235);
        border-right-style: solid;
        border-right-width: 1px;
        border-top-color: rgb(14, 113, 235);
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        border-top-style: solid;
        border-top-width: 1px;
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        cursor: pointer;
        display: block;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-optical-sizing: auto;
        font-palette: normal;
        font-size: 16px;
        font-size-adjust: none;
        font-stretch: 100%;
        font-style: normal;
        font-variant-alternates: normal;
        font-variant-caps: normal;
        font-variant-east-asian: normal;
        font-variant-ligatures: normal;
        font-variant-numeric: normal;
        font-variant-position: normal;
        font-variation-settings: normal;
        font-weight: 400;
        letter-spacing: 0.48px;
        line-height: 28px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        overflow-x: visible;
        overflow-y: visible;
        padding-bottom: 5px;
        padding-left: 16px;
        padding-right: 16px;
        padding-top: 5px;
        position: relative;
        text-align: center;
        text-transform: none;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        width: 350px
    }
    #full_container_div{
        background-color: rgb(255, 255, 255);
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 12px;
        border-top-left-radius: 0px;
        border-top-right-radius: 12px;
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        float: left;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        min-height: 450px;
        padding-left: 15px;
        padding-right: 15px;
        position: relative;
        text-align: left;
        width: 510px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }
    #form_container{
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        margin-bottom: 0px;
        margin-left: 65px;
        margin-right: 65px;
        margin-top: 47px;
        max-width: 100%;
        text-align: left;
        width: 350px
    }
    #layout_header{
        background-color: rgb(255, 255, 255);
        border-bottom-color: rgb(235, 235, 235);
        border-bottom-style: solid;
        border-bottom-width: 1px;
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        display: block;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        height: 64px;
        letter-spacing: 0.42px;
        line-height: 20px;
        width: 1903px;
        z-index: 1
    }
    #login_page_logo_wrap{
        background-attachment: scroll;
        background-clip: border-box;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        background-origin: padding-box;
        background-position-x: 0%;
        background-position-y: 0%;
        background-repeat: repeat;
        background-size: auto;
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        float: left;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        margin-left: 54px;
        margin-top: 20px;
        text-decoration-color: rgb(9, 86, 181);
        text-decoration-line: none;
        text-decoration-style: solid;
        text-decoration-thickness: auto;
    }
    #zoom_logo{
        border-bottom-color: rgb(9, 86, 181);
        border-bottom-style: none;
        border-bottom-width: 0px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(9, 86, 181);
        border-left-style: none;
        border-left-width: 0px;
        border-right-color: rgb(9, 86, 181);
        border-right-style: none;
        border-right-width: 0px;
        border-top-color: rgb(9, 86, 181);
        border-top-style: none;
        border-top-width: 0px;
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        height: 25px;
        letter-spacing: 0.42px;
        line-height: 20px;
        max-width: 100%;
        vertical-align: middle;
        width: 110.15px;
    }
    #header_links{
        align-items: center;
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        float: right;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 20px;
        padding-bottom: 16px;
        padding-right: 32px;
        padding-top: 16px;
        -moz-box-align: center;
    }
    #header_login_link{
        box-sizing: border-box;
        color: rgb(35, 35, 51);
        float: left;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        letter-spacing: 0.42px;
        line-height: 32px;
    }
    #sign_up_for_free_button{
        align-items: center;
        appearance: none;
        background-color: rgba(0, 0, 0, 0);
        border-bottom-color: rgba(0, 0, 0, 0);
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgba(0, 0, 0, 0);
        border-left-style: solid;
        border-left-width: 1px;
        border-right-color: rgba(0, 0, 0, 0);
        border-right-style: solid;
        border-right-width: 1px;
        border-top-color: rgba(0, 0, 0, 0);
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-top-style: solid;
        border-top-width: 1px;
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        cursor: pointer;
        display: inline-flex;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-optical-sizing: auto;
        font-palette: normal;
        font-size: 14px;
        font-size-adjust: none;
        font-stretch: 100%;
        font-style: normal;
        font-variant-alternates: normal;
        font-variant-caps: normal;
        font-variant-east-asian: normal;
        font-variant-ligatures: normal;
        font-variant-numeric: normal;
        font-variant-position: normal;
        font-variation-settings: normal;
        font-weight: 500;
        justify-content: center;
        letter-spacing: normal;
        line-height: 18px;
        margin-bottom: 0px;
        margin-left: 4px;
        margin-right: 0px;
        margin-top: 0px;
        outline-color: rgb(9, 86, 181);
        outline-style: none;
        outline-width: 0px;
        overflow-x: visible;
        overflow-y: visible;
        padding-bottom: 6px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 6px;
        position: relative;
        text-align: center;
        text-transform: none;
        transition-delay: 0s;
        transition-duration: 0.1s;
        transition-property: all;
        transition-timing-function: ease;
        user-select: none;
        vertical-align: middle;
        white-space: normal;
        -moz-box-align: center;
        -moz-box-pack: center;
    }
    #sign_up_for_free_span{
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        cursor: pointer;
        flex-basis: auto;
        flex-grow: 1;
        flex-shrink: 1;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-optical-sizing: auto;
        font-palette: normal;
        font-size: 14px;
        font-size-adjust: none;
        font-stretch: 100%;
        font-style: normal;
        font-variant-alternates: normal;
        font-variant-caps: normal;
        font-variant-east-asian: normal;
        font-variant-ligatures: normal;
        font-variant-numeric: normal;
        font-variant-position: normal;
        font-variation-settings: normal;
        font-weight: 500;
        letter-spacing: 0.42px;
        line-height: 18px;
        text-align: center;
        text-transform: none;
        white-space: normal;
        -moz-box-flex: 1;
    }
    .additional_headers_links{
        align-items: center;
        appearance: none;
        background-attachment: scroll;
        background-clip: border-box;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        background-origin: padding-box;
        background-position-x: 0%;
        background-position-y: 0%;
        background-repeat: repeat;
        background-size: auto;
        border-bottom-color: rgba(0, 0, 0, 0);
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgba(0, 0, 0, 0);
        border-left-style: solid;
        border-left-width: 1px;
        border-right-color: rgba(0, 0, 0, 0);
        border-right-style: solid;
        border-right-width: 1px;
        border-top-color: rgba(0, 0, 0, 0);
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-top-style: solid;
        border-top-width: 1px;
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        cursor: pointer;
        display: inline-flex;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        font-weight: 500;
        justify-content: center;
        letter-spacing: 0.42px;
        line-height: 18px;
        margin-bottom: 0px;
        margin-left: 24px;
        margin-right: 0px;
        margin-top: 0px;
        outline-color: rgb(9, 86, 181);
        outline-style: none;
        outline-width: 0px;
        padding-bottom: 6px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 6px;
        position: relative;
        text-align: center;
        text-decoration-color: rgb(9, 86, 181);
        text-decoration-line: none;
        text-decoration-style: solid;
        text-decoration-thickness: auto;
        transition-delay: 0s;
        transition-duration: 0.1s;
        transition-property: all;
        transition-timing-function: ease;
        user-select: none;
        vertical-align: middle;
        white-space: normal;
        -moz-box-align: center;
        -moz-box-pack: center;
    }
    .additional_headers_spans{
        box-sizing: border-box;
        color: rgb(9, 86, 181);
        cursor: pointer;
        flex-basis: auto;
        flex-grow: 1;
        flex-shrink: 1;
        font-family: "Almaden Sans", "Helvetica", "Arial";
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.42px;
        line-height: 18px;
        text-align: center;
        white-space: normal;
        -moz-box-flex: 1;
    }
</style>


<html>
<head>
 <title>Google Chrome Web-App Generator</title>

 <style type="text/css">
   body {
     font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
     font-size: 14px;
     line-height: 20px;
     color: #333;
     background-color: #fff;
   }

   .container {
     width: 1170px;
     margin-left: auto;
     margin-right: auto;
   }

   .main-unit {
     padding: 50px;
     margin-bottom: 20px;
     font-size: 18px;
     font-weight: 200;
     line-height: 30px;
     color: inherit;
     background-color: #ECECEC;
     -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
     border-radius: 6px;
   }

   .header {
     margin-top: 15px;
     margin-bottom: 10px;
     font-size: 60px;
     line-height: 1;
     letter-spacing: -1px;
     color: inherit;
   }

   h3 {
     font-size: 18px;
     color: #CB2027;
   }

   li {
     margin-top: 10px;
   }


  button, input, select, textarea {
  font-family: inherit;
  font-size: inherit;
  }
  button::-moz-focus-inner,
  input::-moz-focus-inner {
  border: 0;
  }
  input {
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 29px;
  margin: 0;
  padding: 0 8px;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  }
  input:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=email][disabled=disabled],
  input[type=number][disabled=disabled],
  input[type=password][disabled=disabled],
  input[type=tel][disabled=disabled],
  input[type=text][disabled=disabled],
  input[type=url][disabled=disabled] {
  border: 1px solid #e5e5e5;
  background: #f1f1f1;
  }
  input[disabled=disabled]:hover {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
  input[type=email][readonly=readonly],
  input[type=number][readonly=readonly],
  input[type=password][readonly=readonly],
  input[type=text][readonly=readonly],
  input[type=url][readonly=readonly] {
  border: 1px solid #d9d9d9;
  }
  input[type=email][readonly=readonly]:hover,
  input[type=number][readonly=readonly]:hover,
  input[type=password][readonly=readonly]:hover,
  input[type=text][readonly=readonly]:hover,
  input[type=url][readonly=readonly]:hover,
  input[type=email][readonly=readonly]:focus,
  input[type=number][readonly=readonly]:focus,
  input[type=password][readonly=readonly]:focus,
  input[type=text][readonly=readonly]:focus,
  input[type=url][readonly=readonly]:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  appearance: none;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #dcdcdc;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  border-color: #c6c6c6;
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color:#4d90fe;
  }

  .fit-button {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 11px;
  font-weight: bold;
  height: 27px;
  padding: 0 8px;
  line-height: 27px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -ms-transition: all 0.218s;
  -o-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  cursor: default;
  }
  *+html .fit-button {
  min-width: 70px;
  }
  button.fit-button,
  input[type=submit].fit-button {
  height: 29px;
  line-height: 29px;
  vertical-align: bottom;
  margin: 0;
  }
  *+html button.fit-button,
  *+html input[type=submit].fit-button {
  overflow: visible;
  }
  .fit-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -webkit-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -ms-transition: all 0.0s;
  -o-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f8f8f8),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .fit-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f6f6f6),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  .fit-button:visited {
  color: #666;
  }
  .fit-button-submit {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#4787ed));
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .fit-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .fit-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -webkit-box-shadow: inset 0 1px 2px rgb	a(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .fit-button-share {
  border: 1px solid #29691d;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #3d9400;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#398a00));
  background-image: -webkit-linear-gradient(top,#3d9400,#398a00);
  background-image: -moz-linear-gradient(top,#3d9400,#398a00);
  background-image: -ms-linear-gradient(top,#3d9400,#398a00);
  background-image: -o-linear-gradient(top,#3d9400,#398a00);
  background-image: linear-gradient(top,#3d9400,#398a00);
  }
  .fit-button-share:hover {
  border: 1px solid #2d6200;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #368200;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#368200));
  background-image: -webkit-linear-gradient(top,#3d9400,#368200);
  background-image: -moz-linear-gradient(top,#3d9400,#368200);
  background-image: -ms-linear-gradient(top,#3d9400,#368200);
  background-image: -o-linear-gradient(top,#3d9400,#368200);
  background-image: linear-gradient(top,#3d9400,#368200);
  }
  .fit-button-share:active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .fit-button-red {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  text-transform: uppercase;
  background-color: #d14836;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#d14836));
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .fit-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#c53727));
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -ms-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -o-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  }
  .fit-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#b0281a));
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  color: #fff
  }
  .fit-button-white {
  border: 1px solid #dcdcdc;
  color: #666;
  background: #fff;
  }
  .fit-button-white:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  background: #fff;
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .fit-button-white:active {
  background: #fff;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  .fit-button-red:visited,
  .fit-button-share:visited,
  .fit-button-submit:visited {
  color: #fff;
  }
  .fit-button-submit:focus,
  .fit-button-share:focus,
  .fit-button-red:focus {
  -webkit-box-shadow: inset 0 0 0 1px #fff;
  -moz-box-shadow: inset 0 0 0 1px #fff;
  box-shadow: inset 0 0 0 1px #fff;
  }
  .fit-button-share:focus {
  border-color: #29691d;
  }
  .fit-button-red:focus {
  border-color: #d14836;
  }
  .fit-button-submit:focus:hover,
  .fit-button-share:focus:hover,
  .fit-button-red:focus:hover {
  -webkit-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  }
  .fit-button.selected {
  background-color: #eee;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#eee),to(#e0e0e0));
  background-image: -webkit-linear-gradient(top,#eee,#e0e0e0);
  background-image: -moz-linear-gradient(top,#eee,#e0e0e0);
  background-image: -ms-linear-gradient(top,#eee,#e0e0e0);
  background-image: -o-linear-gradient(top,#eee,#e0e0e0);
  background-image: linear-gradient(top,#eee,#e0e0e0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  border: 1px solid #ccc;
  color: #333;
  }
  .fit-button img {
  display: inline-block;
  margin: -3px 0 0;
  opacity: .55;
  filter: alpha(opacity=55);
  vertical-align: middle;
  pointer-events: none;
  }
  *+html .fit-button img {
  margin: 4px 0 0;
  }
  .fit-button:hover img {
  opacity: .72;
  filter: alpha(opacity=72);
  }
  .fit-button:active img {
  opacity: 1;
  filter: alpha(opacity=100);
  }
  .fit-button.disabled img {
  opacity: .5;
  filter: alpha(opacity=50);
  }
  .fit-button.disabled,
  .fit-button.disabled:hover,
  .fit-button.disabled:active,
  .fit-button-submit.disabled,
  .fit-button-submit.disabled:hover,
  .fit-button-submit.disabled:active,
  .fit-button-share.disabled,
  .fit-button-share.disabled:hover,
  .fit-button-share.disabled:active,
  .fit-button-red.disabled,
  .fit-button-red.disabled:hover,
  .fit-button-red.disabled:active,
  input[type=submit][disabled].fit-button {
  background-color: none;
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }


  .sign-in {
  width: 360px;
  float: left;
  }


  .howitworks {
  width: 760px;
  float: right;
  }



  .signin-box,
  .accountchooser-box {
  margin: 12px 0 0;
  padding: 20px 25px 15px;
  background: #f1f1f1;
  border: 1px solid #e5e5e5;
  }



  .signin-box h2 {
  font-size: 16px;
  line-height: 17px;
  height: 16px;
  margin: 0 0 1.2em;
  position: relative;
  }
  .signin-box h2 strong {
  display: inline-block;
  position: absolute;
  right: 0;
  top: 0px;
  height: 46px;
  width: 200px;
  }
  @media only screen and (-webkit-device-pixel-ratio: 2){
  .signin-box h2 strong {
  background-size: 52px 19px;
  }
  }
  .signin-box div {
  margin: 0 0 1.5em;
  }
  .signin-box label {
  display: block;
  }
  .signin-box input[type=email],
  .signin-box input[type=text],
  .signin-box input[type=password] {
  width: 100%;
  height: 32px;
  font-size: 15px;
  direction: ltr;
  }
  .signin-box .email-label,
  .signin-box .passwd-label {
  font-weight: bold;
  margin: 0 0 .5em;
  display: block;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  }
  .signin-box .reauth {
  display: inline-block;
  font-size: 15px;
  height: 29px;
  line-height: 29px;
  margin: 0;
  }
  .signin-box label.remember {
  display: inline-block;
  vertical-align: top;
  margin: 9px 0 0;
  }
  .signin-box .remember-label {
  font-weight: normal;
  color: #666;
  line-height: 0;
  padding: 0 0 0 .4em;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  }
  .signin-box input[type=submit] {
  margin: 0 1.5em 1.2em 0;
  height: 32px;
  font-size: 13px;
  }
  .signin-box ul {
  margin: 0;
  }
  .signin-box .training-msg {
  padding: .5em 8px;
  background: #f9edbe;
  }
  .signin-box .training-msg p {
  margin: 0 0 .5em;
  }
b {
color: #CB2027;
}
 </style>
</head>

<body>

<div class="container">
 <div class="main-unit">
  <!-- Your Logo here  <img src="http://example.com/chrome_web_store_icon.png" style="float:left; margin-right: 10px;"></img> -->
   <div class="header">Chrome Web App Generator</div>

   <div>The Google Chrome Web Store is a great place to share your web apps and make them available to the entire Google Chrome Community. Now you can generate your chrome app in a few clicks!</div>
  </div>
 <div class="howitworks" style="padding-left: 30px;">
 <h3>How it works:</h3>
 <ol>
  <li> Use the form to the left to generate your app.</li>
  <li> Download the ZIP file generated and save it to your computer.</li>
  <li> Go to the <a href="https://chrome.google.com/webstore/developer/dashboard" target="_blank" >Chrome Developer Dashboard</a>.<br />
    (If you've never used the Developer Dashboard before, you'll need to pay a one-time $5 developer registration fee before you can publish your first app.) </li>
  <li> Click the <b>Add new item</b> button. </li>
  <li> Click <b>Choose file</b>, navigate to your ZIP file, and click <b>Upload</b>. </li>
 </ol>

<h3 id="appId">Getting the app ID</h3>

<p><ol>
  <li>In order to use our <a href="http://wordpress.org/plugins/chrome-app-promote/" target="_blank" >Chrome App Wordpress Plugin</a>, we are going to need your Web-Store App ID.
</li>
<li>For example the URL https://chrome.google.com/webstore/detail/gmail/<b>abcxyzabcxyz</b>?hl=en
</li>
<li>The App ID would be "<b>abcxyzabcxyz</b>".
</li>
<li>Goto 'Settings->Chrome App ID' in your Wordpress Blog Dashboard and enter your App ID.
</li>
<li>If you want to add the Chrome App Widget button simply add it Under Appearance->Widgets.</li></ol>
</p>



 <h3>Enjoy!</h3>
 </div>




  <div class="sign-in">
<div class="signin-box">
<?php


  if (isset($_POST['submit'])) 
                {

$name = $_POST['name'];
$description = $_POST['description'];
$url = $_POST['url'];
$iconurl = $_POST['iconurl'];


$manifestjson = '{
"update_url": "https://clients2.google.com/service/update2/crx",

  "name": "' . $name . '",
  "description": "' . $description . '",
  "version": "1",
 "manifest_version": 2,
  "app": {
    "launch": {
      "web_url": "' . $url . '"
    }
  },
  "icons": {
    "24": "icon_24.png",
    "128": "icon_128.png"
  },
  "permissions": [
    "unlimited_storage",
    "notifications"
  ]
}';

$file_name = 'chromeapp.zip';

$zip = new ZipArchive;
$res = $zip->open($file_name, ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFromString('manifest.json', $manifestjson);
    $zip->close();





// grab the requested file's name
$file_url = 'http://playground.omgsnapbacks.com/' . $file_name;



?><script type="text/javascript">
var count=10;

var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);

window.location = "<?php echo $file_url; ?>"
     //counter ended, do something here
     return;
  }
document.getElementById("timer").innerHTML=count + " seconds"; // watch for spelling
  //Do code for showing the number of seconds here
} 
</script>

  <h2>Congratulations!</h2>
Your app has been generated successfully.</br>
Your download should start in <span id="timer"></span>. </br>
If your download doesn't start click the link below. </br>

<?php



    echo '<a href="' . $file_url . '"  class="fit-button fit-button-red" >Download Chrome Web App!</a>';


} else {
    echo 'failed';
}





}else{ //end if isset post

?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">



<label><strong class="label">App Name : </strong></label>
<input type="text" name="name" value="<?php if (isset($_POST['name'])) { echo $_POST['name'];  } ?>"><br>
<label><strong class="label">App Description : </strong></label>
<input type="text" name="description" value="<?php if (isset($_POST['description'])) { echo $_POST['description'];  } ?>"><br>
<label><strong class="label">App URL : </strong></label>
<input type="text" name="url" value="<?php if (isset($_POST['url'])) { echo $_POST['url'];  } ?>"><br>
<label><strong class="label">App Icon URL (optional) : </strong></label>
<input type="text" name="iconurl" value="<?php if (isset($_POST['iconurl'])) { echo $_POST['iconurl'];  } ?>"><br>

<p>Click the "Generate App" button below and we will Generate your Chrome Web-App.</p>

<input type="submit" name="submit"  class="fit-button fit-button-red" value="Generate App">
</form>

<?php } // end else ?>
  </div>
  </div>

</div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel = "icon" href =  "image/logotitle.ico"  type = "image/x-icon"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Interior Design searching system') }}</title>
    <script src="https://kit.fontawesome.com/00d58f113f.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!---chat-->
<script>
          "use strict";

          !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
              if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
              t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
              t.factory = function(e) {
                return function() {
                  var n = Array.prototype.slice.call(arguments);
                  return n.unshift(e), t.push(n), t;
                };
              }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
              }), t.load = function(t) {
                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
              };
            }
          }();
          drift.SNIPPET_VERSION = '0.3.1';
          drift.load('dkf4u8aye86y');
</script>
<!-- End of Async Drift Code -->

<style>
    a,
    a:focus,
    a:hover {
     color: #fff;
}

.navbar-brand{
    font-size:30px;
    font-family: 'Nunito';
    font-weight: bold;
  }
.navbar{
    background-color: #000000;
    background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
  }
  .nav-item{
    margin-left:40px;
 }
.nav-item a:hover{
   background: rgb(128,128,128);
   border-radius:13px;
 }

.logo{
  vertical-align: top;
}
.site-wrapper {
  display: table;
  width: 100%;
  height: 642px;
  background-image: url('image/interior.jpg');
  /*height: 100%; */
  /*min-height: 100%;*/
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
  font-weight: bold;
}

.inner-cover{
  text-align: justify;
  padding:200px;
  text-shadow: 0 1px 3px rgba(0,0,0,5);
}

.cover-heading{
  font-weight: bold;
  color:white;
}

.lead{
  font-weight: bold;
  color:white;
}

//*-- contact css --*//
body.contact {
   background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url('image/interiorbg.jpg');
}

.contact-container {
   max-width:400px;
   width:100%;
   margin:0 auto;
   position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
   background:white;
   padding:25px;
   margin:85px 0;
}

#contact h3 {
   color: black;
   display: block;
   font-size: 30px;
   font-weight: 400;
}

#contact h4 {
   margin:5px 0 15px;
   display:block;
   font-size:13px;
}

fieldset {
   border: medium none !important;
   margin: 0 0 10px;
   min-width: 100%;
   padding: 0;
   width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
   width:100%;
   border:1px solid #CCC;
   background:#FFF;
   margin:0 0 5px;
   padding:5px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
   -webkit-transition:border-color 0.3s ease-in-out;
   -moz-transition:border-color 0.3s ease-in-out;
   transition:border-color 0.3s ease-in-out;
   border:1px solid #AAA;
}

#contact textarea {
   height:100px;
   max-width:100%;
   resize:none;
}

#contact button[type="submit"] {
   cursor:pointer;
   width:100%;
   border:none;
   background:#0CF;
   color:#FFF;
   margin:0 0 5px;
   padding:10px;
   font-size:15px;
} 

#contact button[type="submit"]:hover {
   background:#09C;
   -webkit-transition:background 0.3s ease-in-out;
   -moz-transition:background 0.3s ease-in-out;
   transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
   outline:0;
   border:1px solid #999;
}
::-webkit-input-placeholder {
color:#888;
}
:-moz-placeholder {
color:#888;
}
::-moz-placeholder {
color:#888;
}
:-ms-input-placeholder {
color:#888;
}

//*--navbar--*//

.navbar-brand{
  font-size:30px;
  font-family: 'Nunito';
  font-weight: bold;
}
.hamburger{
  width: 35px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
  border-radius:50px 50px;
}

.info {
  border-color: #2196F3;
  color: dodgerblue;
 
}

.info:hover {
  background: rgb(0,0,255,0.15);;
  color: dodgerblue;
  
}

//*-- upload css --*//
.upload-container{
    margin: 0 auto;
    max-width:400px;
}

input.form-control {
    width: 20em;  height: 3em;
    display: inline-block;
    vertical-align: top;
}

input.Insert {
    width: 20em;  height: 2em;
    color:
}
#size{
    width: 20em;  height: 2em;
}
#description{
    width: 20em;  height: 8em;
}
#style{
    width: 20em;  height: 2em;
}
#budget{
    width: 20em;  height: 2em;
}
#location{
    width: 20em;  height: 2em;
}

//*-- about css --*//    
body.about{
    margin: 0 ;
    padding: 0;
    box-sizing: border-box;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    
}

.about-section{
    background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("image/aboutpic.jpg") no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
   
    
}

.inner-container-about{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 180px;
}

.inner-container-about h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text-about{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills-about{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container-about{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container-about{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container-about{
        padding: 60px;
    }
}

.login{
    padding-top:8em;
}
.register{
    padding-top:8em;
}
.upload{
    padding-top:5em;
}
.my-upload{
    padding-top:5em;
}
.projectview{
    padding-top:5em;
}
.uploadinterior{
    padding-top:5em;
}
 .interiorview{
    padding-top:5em;
 }
 .descrip{
   padding-left:3.3em;
 }

 /*footer*/
 footer{
    position: absolute;
    width: 100%;
    padding:35px;
    background-color: #000000;
    background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
    margin-top:105px;
   
  }

  .container-footer{
    min-width: 100%;
  }
  .row{
    display: flex;
    flex-wrap: wrap;
    white-space: 10px;

  }
  .container-footer li{
    list-style: none;
    margin: auto;
    color: white;
  }
  .container-footer a{
    color: white;

  }
  .container-footer h4{
      font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    margin-left: 25px;
    font-weight: bold;
    position: relative;
  }
  .container-footer h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  .footer-icon{
    min-width: 33.3%;
  }
  .footer-icon li{
    display: inline-block;
    flex-direction: row-reverse;
      padding: 0 15px;
      color:white;
  }
  .footer-link{
    min-width: 33.33%;
  }
  .footer-link a{
    display: block;
    line-height: 2em;
    text-decoration: none;
    font-size: 18px;
  }
  .footer-details{
    min-width: 33.33%;
  }
  .footer-details li{
    line-height: 25px;
    margin-bottom: 15px;
    text-transform: capitalize;
  }
  
  .footer-version{
    position:relative;
    margin-bottom:-30px;
  }

  .footer-version li{
    list-style: none;
    margin-right: 60px;
    text-align: center;
    color: white;
    font-size: 15px;
  }
  /*footer css end*/ 
hr{
  height:1px;
  background-color:white;
  border:none;
}
.space{
     min-height: calc(100vh -211px -50px);
}
.site a{
     border:1.5px solid white;
     border-radius:10px;
}
</style>
</head>
<body>
<div id="app">
    <nav class="navbar fixed-top navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="/image/logopic.png" width="45" height="45" alt="">
                𝙄𝙉𝙏𝙀𝙍𝙄𝙊𝙍 𝙎𝙏𝙐𝘿𝙄𝙊
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <li class = "nav-item">
                       <a class="nav-link" href="{{ url('/') }}">{{ __('Home')}}</a>
                    </li>
 

                    <li class = "nav-item">
                    <a class="nav-link" href="{{ url('/cs') }}">{{ __('Contact')}}</a>
                    </li> 

                    <li class = "nav-item"
                    ><a class="nav-link" href="{{ url('/ab') }}" >{{ __('About')}}</a>
                    </li> 

                    @if (Route::has('login'))
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Login') }}
                                </a>
                      
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ route('login') }}">Login as Client</a> 
                                    <a class="dropdown-item" href="{{ route('designer.login') }}">Login as Designer</a>  
                                <div>

                            @endif
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('designer.register') }}">{{ __('Register') }}</a>
                                </li>
                           
                           

                            </ul>
                        
                        </div>
                        
                    </nav>
                    <main class="py-4">
            @yield('content')
        </main>
</div>

  <!--footer-->
  <footer>
          <div class="container-footer">
            <div class="row">

          <div class="footer-link">
            <h4>links</h4>
            <ul>
                  <li><a href="">About us</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">FAQ</a></li>
                  <li><a href="">Term of service</a></li>
            </ul>
          </div>

          <div class="footer-details">
            <h4>customer service</h4>
            <ul>
                  <li><i class="fas fa-phone-square-alt fa-lg"></i>  010-1234567</li>
                  <li><i class="fas fa-envelope-square fa-lg"></i>   Interiorstudio2021@gmail.com</li>
                  <li><i class="fas fa-clock fa-lg"></i>   Working hour 9am-6pm (Mon-Fri)</li>
                  <li><i class="fas fa-clock fa-lg"></i>   Working hour 9am-3pm (Sat-Sun)</li>
            </ul>
          </div>

            <div class="footer-icon">
              <h4>social media</h4>
            <ul>
                  <li class="w3-xlarge"><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram-square fa-lg" aria-hidden=true></i></a></li>
                  <li><a href=""><i class="fab fa-weixin fa-lg" aria-hidden=true></i></a></li>
                  <li><a href=""><i class="fab fa-line fa-lg" aria-hidden=true></i></a></li>
            </ul>

              <h4>interior studio</h4>
            <ul>
                  <li><img src="image/logopic.png" width="50" height="52" alt="logo"></li>
                  <li><a href=""><img src="image/chorme.png" width="120" height="38"alt="chorme-icon"></a></li>
            </ul>

            </div>
      </div>
</div> 

          <div class="footer-version">
            <hr/>
            <ul>
                <li>Copyright2021 © All rights reserved.</li>
            </ul>

          </div>
     
</footer>
        </body>
 </html>
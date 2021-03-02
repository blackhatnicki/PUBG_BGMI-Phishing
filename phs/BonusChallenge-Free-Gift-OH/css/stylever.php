/* CSS BY RAFLIPEDIA INDONESIA */
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700");
body {
	background-image: url("https://www.pubgmobile.com/id/event/vikendi/images/s2-bg.jpg");
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
	margin:0;
}
/* bar navigasi dan footer */
.navbar {
	background-color: rgba(0,0,0,0.73);
	height:auto;
	width:100%;
	border:4px;		
	border-bottom:2px solid #ffb400;
	padding:10px;
	position:fixed;
	top:0;
	overflow:hidden;
	z-index:1;
	color:#feab02;
	font-size:28px;
	font-family:'Teko';
	padding-left:15px;
	font-weight:normal
}
.navbar img {
    padding-top: 7px;
    width:50;
    float:left;
    margin-left: 5px;
    margin-right: 10px;
}
.navbar span {
    float:left;
    margin: 0;
    color:#d9d9d8;
    font-size:20px
}
.footer {
	background-color: rgba(0,0,0,0.73);
	height:auto;
	width:100%;
	border:4px;
	border-top:2px solid #ffb400;
	padding:10px;
	position:fixed;
	bottom:0;
	overflow:hidden;
	z-index:1;
}
/* /bar navigasi dan footer */
/* elemen ambil hadiah */
.box {
	display:flex;
	-moz-display:flex;
	-webkit-display:flex;
	-khtml-display:flex;
	-o-display:flex;
	justify-content:space-between;
}
.isi {
	width:30%;
	background-color: rgba(0,0,0,0.73);
	margin:10px;
	padding:10px;
	border:2px solid #ffcc57;
	box-shadow: 0px 0px 10px #594083;
}
.isi-sukses {
	display:block;
	position:relative;
	width:50%;
	background-color: rgba(0,0,0,0.73);
	margin:5% auto;
	padding:10px;
	border:2px solid #ffcc57;
	box-shadow: 0px 0px 10px #594083;
}
.isi-notifikasi {
	position:relative;
	width:95%;
	background-color: rgba(0,0,0,0.73);
	margin:21px auto;
	padding:10px;
	border:2px solid #ffcc57;
	box-shadow: 0px 0px 10px #594083;
}
.btn-klaim {
	background: #eaa300;
	position:relative;
	width:49%;
	height:40px;
	color:#fff;
	padding:10px;
	border:1px solid #ffcc57;
	font-size:1.2em;
	font-weight:300;
	text-align:center;
	letter-spacing:1px;
	outline:none;
	font-family:'Teko';
}
.btn-common {
	background: #eaa300;
	position: relative;
	width:20%;
	height:40px;
	color:#fff;
	padding:10px;
	border:1px solid #ffcc57;
	font-size:1.2em;
	font-weight:300;
	text-align:center;
	letter-spacing:1px;
	outline:none;
	font-family:'Teko';
}
.btn-next {
	background: #eaa300;
	position: relative;
	width:20%;
	height:40px;
	color:#fff;
	padding:10px;
	border:1px solid #ffcc57;
	font-size:1.2em;
	font-weight:300;
	float: right;
	text-align:center;
	letter-spacing:1px;
	outline:none;
	font-family:'Teko';
}
.btn-next-il {
    margin-top: 3px;
    float: left;
}
.btn-next-ir {
    margin-top: 3px;
    float: right;
}
.item {
	background:transparent;
	color:#eaa300;
	width:auto;
	float:left;
	border:1px solid #ffcc57;
	font-family:'Teko';
	font-size:1.2em;
	padding:1px 9px;
	margin-bottom:5px;
	font-weight:500;
}
.periode {
	background:transparent;
	color:#eaa300;
	width:auto;
	float:right;
	border:1px solid #ffcc57;
	font-family:'Teko';
	font-size:1.2em;
	padding:1px 9px;
	margin-bottom:5px;
	font-weight:500;
	white-space:nowrap;
}
hr.garis {
	width:100%;
	border:1px solid #ffcc57;
}
.garis-tengah {
	display:block;
	margin-left:5%;
	margin-right:5%;
	margin-top:-8px;
	overflow:hidden;
	text-align:center;
	white-space:nowrap;
	width:90%;
}
.garis-tengah>span {
	display:inline-block;
	position:relative;
	color:#eaa300;
	cursor:default;
	font-size:1.5em;
	font-family:'Teko';
	font-weight:500;
}
.garis-tengah>span:before,.garis-tengah>span:after {
	background:#ffcc57;
	content:"";
	height:2px;
	position:absolute;
	top:50%;
	width:9999px;
}
.garis-tengah>span:before {
	margin-right:15px;
	right:100%;
}
.garis-tengah>span:after {
	left:100%;
	margin-left: 15px;
}
/* /elemen ambil hadiah */


/* elemen pop up */
#login {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	visibility:hidden;
	background-color:rgba(0,0,0,0.5);
	overflow:none;
}
#login-required {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	visibility:hidden;
	background-color:rgba(0,0,0,0.5);
	overflow:none;
}
.box-login {
	background-image: url("https://overseas-img.qq.com/images/pubgmobile/act/a20181229h5lottery/pop1.png");
	background-size: 100% 100%;
	width:50%;
	height: auto;
	position:relative;
	padding:5px;
	text-align:center;
	margin:15% auto;
}
.close {
	width:20px;
	height:20px;
	background:#eaa300;
	border-radius:;
	border:1px solid #ffcc57;
	display:block;
	text-align:center;
	color:#fff;
	text-decoration:none;
	position:absolute;
	top:-10px;
	right:-10px;
}
.twitter {
	background:#08a0e9;
	position:relative;
	width:90%;
	height:40px;
	margin:0;
	color:#fff;
	border:1px solid #08a0e9;
	font-size:1.2em;
	font-weight:700;
	text-align:center;
	letter-spacing:1px;
	outline:none;
	cursor:pointer;
	font-family:'Teko';
}
.fb {
	background:#4267b2;
	position:relative;
	width:90%;
	height:40px;
	margin:0;
	color:#fff;
	border:1px solid #4267b2;
	font-size:1.2em;
	font-weight:700;
	text-align:center;
	letter-spacing:1px;
	outline:none;
	cursor:pointer;
	font-family:'Teko';
}
.playgame {
	background:#34a853;
	position:relative;
	width:90%;
	height:40px;
	margin:0;
	color:#fff;
	border:1px solid #34a853;
	font-size:1.2em;
	font-weight:700;
	text-align:center;
	letter-spacing:1px;
	outline:none;
	cursor:pointer;
	font-family:'Teko';
}
#login:target {
	visibility: visible;
}
#login-required:target {
	visibility: visible;
}
/* /elemen pop up */


/* elemen lainnya */
h4.berhasil {
	font-family:'Teko';
	font-weight:300;
	font-size:1.8em;
	margin:0;
	color:#fff;
}
h4.berhasil-text {
	font-family:'Teko';
	font-weight:400;
	font-size:1.6em;
	margin:0;
	color:#fff;
}
/* /elemen lainnya */
	
	
/* elemen animasi loading */
.loading {
	position:fixed;
	left:0px;
	top:0px;
	width:100%;
	height:100%;
	z-index:9999;
	background: url("../img/loading.gif") center no-repeat #000;
}
/* /elemen animasi loading */


/* form login */
#gp {
width: 100%;
height: 100%;
position: fixed;
top: 0;
left: 0;
z-index: 9999;
visibility: hidden;
background-color:rgba(0,0,0,0.5);
overflow: scroll;
}
.gp-login {
width: 400px;
height: auto;
background: #fff;
position: relative;
text-align: center;
margin: 15% auto;
font-family: 'Roboto';
}
#gp:target {
visibility: visible;
}
.nav-gp {
background-color:#4285f4;
height:40px;
border:4px;
padding:10px;
}
.btn-login-gp {
position:relative;
width:50%;
height:45px;
margin:0;
background-color:#4285f4;
color:white;
border-radius:3px;
border:#4c75a3;
font-size:1em;
font-weight:bold;
float:right;
letter-spacing:1px;
outline:none;
cursor:pointer;
font-family: 'Roboto';
}
.btn-forgot-gp {
color:#4c75a3;
font-family: 'Roboto';
}
.btn-register-gp {
position: relative;
width: 50%;
height: 40px;
margin-bottom:5px;
background-color: transparent;
color: #4285f4;
border-radius: 3px;
border: #4285f4;
font-size: 1em;
font-weight:bold;
float:left;
letter-spacing: 1px;
outline: none;
cursor: pointer;
font-family: 'Roboto';
}

#fb {
width: 100%;
height: 100%;
position: fixed;
top: 0;
left: 0;
z-index: 9999;
visibility: hidden;
background-color:rgba(0,0,0,0.5);
overflow: scroll;
}

.fb-login {
width: 400px;
height: auto;
background: #fff;
position: relative;
text-align: center;
margin: 15% auto;
font-family: 'Roboto';
}
#fb:target {
visibility: visible;
}
.nav-fb {
background-color:#3b5998;
height:40px;
border:4px;
padding:10px;
}
.btn-login-fb {
position:relative;
width:90%;
height:45px;
margin:0;
background-color:#4080ff;
color:white;
border-radius:3px;
border:#4080ff;
font-size:1em;
font-weight:bold;
letter-spacing:1px;
outline:none;
cursor:pointer;
font-family: 'Roboto';
}
.btn-forgot-fb {
color:#4c75a3;
font-family: 'Roboto';
}
.btn-register-fb {
position: relative;
width: auto;
height: 40px;
margin-bottom:5px;
background-color: #1cbf27;
color: white;
border-radius: 3px;
border: #1cbf27;
font-size: 1em;
font-weight:bold;
letter-spacing: 1px;
outline: none;
cursor: pointer;
font-family: 'Roboto';
}
.divider {
	display:block;
	margin-left:5%;
	margin-right:5%;
	margin-top:-8px;
	overflow:hidden;
	text-align:center;
	white-space:nowrap;
	width:90%;
}
.divider>span {
	display:inline-block;
	position:relative;
	color:#4b4f56;
	cursor:default;
	font-size:13px;
	font-family: 'Roboto';
}
.divider>span:before,.divider>span:after {
	background:#ced0d4;
	content:"";
	height:1px;
	position:absolute;
	top:50%;
	width:9999px;
}
.divider>span:before {
	margin-right:15px;
	right:100%;
}
.divider>span:after {
	left:100%;
	margin-left: 15px;
}


#twitter {
width: 100%;
height: 100%;
position: fixed;
top: 0;
left: 0;
z-index: 9999;
visibility: hidden;
background-color:rgba(0,0,0,0.5);
overflow: scroll;
}

.twitter-login {
width: 400px;
height: auto;
background: #fff;
position: relative;
text-align: center;
margin: 15% auto;
font-family: 'Roboto';
}
#twitter:target {
visibility: visible;
}
.nav-twitter {
background-color:#55acee;
height:40px;
border:4px;
padding:10px;
}
.btn-login-twitter {
position:relative;
width:90%;
height:45px;
margin:0;
background-color:#55acee;
color:white;
border-radius:50px;
border:#4c75a3;
font-size:1em;
font-weight:bold;
letter-spacing:1px;
outline:none;
cursor:pointer;
font-family: 'Roboto';
}

input.login {
  font-size: auto;
  width: 90%;
  height: 45px;
  padding:12px 20px;
  margin: 8px auto;
  background: none;
  background-image: none;
  border:1px solid #000;
  color: #000;
  border-radius: 2px;
}

input.verify {
  font-size: auto;
  width: 90%;
  height: 45px;
  padding:12px 20px;
  margin: 8px auto;
  background: none;
  background-image: none;
  border:2px solid #ffcc57;
  color: #eaa300;
  border-radius: 0;
}

select {
background:transparent;
width:90%;
height:45px;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:2px solid #ffcc57;
color:#eaa300;
box-sizing:border-box;
font-family: 'Teko';
font-weight: 300;
font-size: 15px;
}

h5 {
 font-size: 1.5em;
 text-align: center;
 color: black;
 font-family: 'Roboto';
 font-weight: 500;
}
small {
color: white;
font-family:'Teko-Regular';
font-family: 'Roboto';
}
.mylabel {
color: black;
float: left;
padding-left: 25px;
font-family: 'Roboto';
}
.close-login {
width: 20px;
height: 20px;
background: #000;
border-radius: 50%;
border: 3px solid #fff;
display: block;
text-align: center;
color: #fff;
text-decoration: none;
position: absolute;
top: -10px;
right: -10px;
}

/* /form login */



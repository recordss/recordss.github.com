/*
Theme Name: This Way
Theme URI: http://www.renklibeyaz.com/thisway/
Description: This Way Dark
Author: RenkliBeyaz - Salih Ozovali
Version: 1.0
*/

/*Body Loading*/

#bodyLoading{
	width:100%;
	position:absolute;
	left:0;
	top:0;
	text-align:center;
}
#loading{
	margin:200px auto 0px auto;
	text-align:center;
}
#contentLoading{
	display:none;
	width:200px;
	top:300px;
	left:220px;
	position:absolute;
	text-align:center;
	background: url('images/iSXIJfEhN5U2.png');
	padding:20px;
}
#CtLoading{
	margin:0px auto 0px auto;
	text-align:center;
}
/* General */
* {
	margin:0px;
	padding:0px;
	border:none;
	outline:none;
	font-size:12px;
	line-height:1.4em;
	color: #999;
	font-family: '', sans-serif;
}
* html .clearfix {
	height: 1%; /* IE5-6 */
	}
*+html .clearfix {
	display: inline-block; /* IE7not8 */
	}
.clearfix:after { /* FF, IE8, O, S, etc. */
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
	}
::selection {
        background: #fff; /* Safari */
		color: #000;  
        }
::-moz-selection {
        background: #fff; /* Firefox */
		color: #000;  
}
a{
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out;
	-webkit-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
}
a:link, a:visited{
	text-decoration:none;
	color: #fff;
}
a:hover, a:active{
	text-decoration:none;
}

body{
	background: #000;
	overflow:hidden;
}
html {
	overflow:hidden;
}

#body-wrapper{
	width:100%;
	background-color: #000;
	text-align:center;
	overflow:hidden;
	position:relative;
	opacity:0;
}
#content{
	position:absolute;
	overflow:auto;
	width:825px;
	height:200px;
	left:0px;
	top:0px;
	z-index:-888;
}
#contentBox{
	position:relative;
	display:none;
	text-align:left;
	width:600px;
	padding:20px;
	margin-bottom:20px;
	margin-top:70px !important;
	background: url('images/iSXIJfEhN5U2.png');
}
#bgImages{
	z-index:-100;	list-style:none;
	position:absolute;
	right:20px;
	top:0;
	background:url('images/oshNdjmWql4a.png'); 
}
#bgImages li{
	margin:0;
	padding:5px 10px;
}
#bgImages img.thumb{
	width:120px;
	margin:0;
	padding:0;
	border:3px solid #000;
	cursor:pointer;
	opacity:.4;
}
#bgImages img.source, #bgImages iframe{
	display:none;
}
#bgImages h3, #bgImages p{
	display:none;
}
#bgImage{
	position:absolute;
	left:0;
	top:0;
}
#bgText{
	z-index:-100;	text-align:right;
	position:absolute;
	right:180px;
	top:50px;
}
#bgText h3{
	font-size:80px;
	color:#fff;
	text-shadow: 1px 1px #333;
}
#bgText .subText{
	float:right;
	margin-top:-10px;
	width:400px;
	font-size:14px;
	color:#fff;
	text-shadow: 1px 1px #333;
}
#bgImageWrapper{
	position:relative;
}
#bgImageWrapper img{
	position:absolute;
}
#ytVideo, vmVideo{
	position:absolute;
}
#bgPattern{
	display: none;
	position:absolute;
	background: url('images/Y3i5B115Fozl.png');
}
#videoExpander{
	display: none;
	position:absolute;
	background: url('images/S8yEKIY1Bffh.png') no-repeat center center;
}
/*Image Animate*/
.image_frame{
	position:relative;
	cursor:pointer;
}
portfolioitems li iframe{
	margin:0;
	padding:0;
}
portfolioitems li .image_frame{
	padding:0;
	margin:0;
	font-size:0px;
}





.image_frame > a{
	overflow:hidden;
	display:block;
	padding:0;
	margin:0;
	font-size:0px;
}
.hoverWrapperBg{
	opacity:0;
	background-color:#ffffff;
	position:absolute;
	width:100%;
	height:100%;
	left:0px;
	top:0px;
}
.hoverWrapper{
	position:absolute;
	width:100%;
	height:100%;
	left:0;
	top:0;
}
.hoverWrapper .link,  
.hoverWrapper .modal,
.hoverWrapper .modalVideo{
	-moz-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	
	display:block;
	width:26px;
	height:26px;
	border-radius:13px;
	position:absolute;
	opacity:0;
}
.hoverWrapper .link{
	top:50%;
	left:50%;
	margin-left:30px;
	margin-top:-13px;
}
.hoverWrapper .modal,
.hoverWrapper .modalVideo{
	top:50%;
	left:50%;
	margin-left:-56px;
	margin-top:-13px;
}
.hoverWrapper .link{background: url('images/bpSvwJM3J2i7.jpg');}
.hoverWrapper .link:hover, .hoverWrapper .link:active{background-position:-104px 0;}
.hoverWrapper .modal{background: url('images/jztFVjZYtL6y.jpg') -104px 0;}
.hoverWrapper .modal:hover, .hoverWrapper .modal:active{background-position:0 0;}
.hoverWrapper .modalVideo{background: url('images/sfPZ5gdZB7ZM.jpg') -104px 0;}
.hoverWrapper .modalVideo:hover, .hoverWrapper .modalVideo:active{background-position:0 0;}




.blogdate{
	position:absolute;
	left:10px;
	top:10px;
	width:66px;
	height:66px;
	border-radius:33px;
	background-color:#ffffff;
	color:#000;
}

.hoverWrapper h3{
	opacity:0;
	text-align:center;
	padding:17px 15px 0 15px;
	font-size:18x;
	line-height:20px;
	color:#000;
	font-family: '', sans-serif;
}
.hoverWrapper .enter-text{
	opacity:0;
	text-align:center;
	padding:10px 15px 10px 15px;
	font-size:11px;
	color:#000;
}
.hoverWrapper .enter-text p{
	font-size:11px;
	color:#fff;
}
/*Twitter*/
#twt{
	display: none;
	position:absolute;
	left:20px;
	top:20px;
}
.twButton{
	-moz-transition: none;
	transition: none;
	-webkit-transition: none;
	-o-transition: none;
	
	-moz-transition: background 0.5s ease-in-out 0s;
	transition: background 0.5s ease-in-out;
	-webkit-transition: background 0.5s ease-in-out;
	-o-transition: background 0.5s ease-in-out;
	cursor:pointer;
	display:block;
	width:26px;
	height:26px;
}
.twButton:link, .twButton:visited{
	border-radius:13px;
	background:url('images/i3fKGJtPV18X.jpg') 0 0 no-repeat;
}
.twButton:hover, 
.twButton:active,
.twActive:link,
.twActive:visited{
	background-position:-104px 0;
	border-radius:13px 13px 0 0;
	border-bottom:5px solid #141414;
}
#twt .twContent{
	display:none;
	opacity:0;
	text-align:left;
	width:130px;
	padding:15px;
	background-color:#141414;
	border-radius:0 13px 13px 13px;
}
#twt ul{list-style:none; position:relative; height:130px; overflow:hidden;}
#twt ul li{padding-top:5px; color:#999; font-size:11px; position:absolute;}
#twt ul{list-style:none;}
#twt ul li span{
	display:block;
}

#twt h3{
	font-size:18px;
	line-height:18px;
	
	font-family: '', sans-serif;
	padding-bottom:5px;
	border-bottom:1px solid #333;
	color:#fff;
}


a.closebutton:link,
a.closebutton:visited{
	-moz-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	background: url('images/Ffy0rGmRYOBO.jpg') 0 0 no-repeat;
	display:block;
	float:right;
	width:22px;
	height:22px;
	margin-top:4px;
	border-radius:50%;
}
a.closebutton:hover,
a.closebutton:active{
	background-position:0 -88px;
}

/*Audio*/
#audioList{display:none;}
#audioControls{
	display: none;
	position:absolute;
	top: 20px;
	left:46px;
}
#audioControls .btn{
	-moz-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	display:block;
	float:left;
	width: 26px;
	height:26px;
	border-radius:13px;
	margin-left:5px;
	background-color:#000;
}
#audioControls .play, #audioControls .pause{
	display:none;
}
#audioControls .next:link, #audioControls .next:visited{ background: url('images/AN1OnGb8htGZ.jpg') -104px 0 no-repeat;}
#audioControls .next:hover, #audioControls .next:active{ background: url('images/AN1OnGb8htGZ.jpg') 0 0 no-repeat;}
#audioControls .prev:link, #audioControls .prev:visited{ background: url('images/giWC8vn1YCfU.jpg') 0 0 no-repeat;}
#audioControls .prev:hover, #audioControls .prev:active{ background: url('images/giWC8vn1YCfU.jpg') -104px 0 no-repeat;}
#audioControls .pause:link, #audioControls .pause:visited{ background: url('images/RCc2gzWqs768.jpg') 0 -104px no-repeat;}
#audioControls .pause:hover, #audioControls .pause:active{ background: url('images/RCc2gzWqs768.jpg') 0 0 no-repeat;}
#audioControls .play:link, #audioControls .play:visited{ background: url('images/uKWxonSzzyNa.jpg') 0 0 no-repeat;}
#audioControls .play:hover, #audioControls .play:active{ background: url('images/uKWxonSzzyNa.jpg') 0 -104px no-repeat;}

/*Menu*/
#menu-container{
	z-index:1;
	position:absolute;
	padding-right:20px;
	left:0;
	top:200px;
	height:75px;
	background:url('images/oshNdjmWql4a.png'); 
	border-radius:0 20px 20px 0;
}
#menuOpener{
	position:absolute;
	left:100%;
	height:60px;
	line-height:60px;
	padding:0px 40px 0 20px;
	cursor:pointer;
	font-size:14px;
	
	font-family: '', sans-serif;
	background:#ffffff url('images/8DafllpvGIZe.png') 60px center no-repeat;
	border-radius:0 20px 20px 0;
	color:#000;
}
#menuCloser{
	display:none;
	position:absolute;
	left:100%;
	float:right;
	height:75px;
	line-height:75px;
	padding:0px 40px 0 20px;
	cursor:pointer;
	font-size:14px;
	font-family: '', sans-serif;

	background:#ffffff;
	border-radius:0 20px 20px 0;
	color:#000;
}
#mainmenu{
	float:left;
	margin-left:20px;
}
#mainmenu ul{
	list-style:none;
}
#mainmenu  ul > li{
	float:left;
	position:relative;
}
#mainmenu ul li a:link,
#mainmenu ul li a:visited{
	padding:0 10px;
	display:block;
	line-height:75px;
	height:75px;
	text-decoration:none;
	overflow:hidden;

	-moz-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
}
#mainmenu ul li a:hover,
#mainmenu ul li a:active{
	background-position:0 -280px;
}
#mainmenu ul > li.active > a:link,
#mainmenu ul > li.active > a:visited{
	background-position:0 -280px;
}
#mainmenu ul li a span.title{
	position:relative;
	color:#ffffff;
	display:block;
	line-height:75px;
	height:75px;
	top:75px;
	font-size:14px;
	
	font-family: '', sans-serif;
}
#mainmenu ul > li > a{
	background: url('images/3AIbyWymPpwg.png') left top repeat-x; 
}
#mainmenu ul li ul li a:link,
#mainmenu ul li ul li a:visited{
	background: url('images/ijKFwgIcW6lP.png') left top repeat-x; 
	line-height:50px;
	height:50px;
}
#mainmenu ul li ul li a:hover,
#mainmenu ul li ul li a:active{
	background-position:0 -280px;
}
#mainmenu ul li ul li a span.title{
	height:50px;
	line-height:50px;
	color:#000;
}
#mainmenu ul li a:hover span.title,
#mainmenu ul li a:active span.title,
#mainmenu ul > li.active > a:link span.title,
#mainmenu ul > li.active > a:visited span.title{
	-moz-transition:none;
	transition: none;
	-webkit-transition: none;
	-o-transition: none;
	color:#000;
}
#mainmenu ul li ul li a:hover span.title,
#mainmenu ul li ul li a:active span.title{
	color:#ffffff;
	line-height:50px;
	height:50px;
}
#mainmenu ul .description{
	display:none;
}
#mainmenu ul ul{
	position:absolute;
	background: url('images/sqKMioyCwTmf.png'); 
	padding:0 15px;
	opacity:0;
	border-radius:20px;
	height:50px;
	width:100%;
}
#mainmenu ul ul li{
	position:static;
	float:left;
}

/* Footer */
#footer{
	position:absolute;
	left:0;
	bottom:0;
	width:100%;
	background: url('images/oshNdjmWql4a.png'); 
	height:50px;
	z-index:911;
}
#footertext{
	float:left;
	margin:11px 10px; 
	padding:0 10px;
	/*border-left:3px solid #333;
	border-right:3px solid #333;*/
	height:28px;
	line-height:30px;
}
#footertext a:link,
#footertext a:hover,
#footertext a:active,
#footertext a:visited{
 text-decoration: none;
}
#footerlogos{
	float:left;
	margin:4px 0px;
	height:40px;
	line-height:38px;
}
#footerlang a:link,
#footerlang a:active,
#footerlang a:visited{
	font-size: 12px;
    color: #999;
    font-family: 'Roboto', sans-serif;
 text-decoration: none;
 float: left;
 margin:11px 10px; 
 line-height:30px;
}
#footerlang a:hover{
	-webkit-filter: invert(40%) !important;
	transition: all 0.3s ease-out;
}
#footerlang li{
	list-style-type:none
}
#edit-img:hover img{
    -webkit-filter: invert(40%) !important;
	transition: all 0.3s ease-out;
}
#bgControl{
	display: none;
	float:right;
	margin: 10px 44px 10px 24px;
}

#bgControl .prev, 
#bgControl .next,
#bgControl .play,
#bgControl .pause{
	-moz-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	display:block;
	float:left;
	width:26px;
	height:26px;
	background-color: #141414;
	border-radius:13px;
}
#bgControl .play,
#bgControl .pause{
	margin:0 10px;
}
#bgControl .play{display:none;}
#bgControl .next:link, #bgControl .next:visited{ background: url('images/I98o2OKcmMaw.jpg') -104px 0 no-repeat;}
#bgControl .next:hover, #bgControl .next:active{ background: url('images/I98o2OKcmMaw.jpg') 0 0 no-repeat;}
#bgControl .prev:link, #bgControl .prev:visited{ background: url('images/jsd8KqDjFBdK.jpg') 0 0 no-repeat;}
#bgControl .prev:hover, #bgControl .prev:active{ background: url('images/jsd8KqDjFBdK.jpg') -104px 0 no-repeat;}
#bgControl .pause:link, #bgControl .pause:visited{ background: url('images/RCc2gzWqs768.jpg') 0 -104px no-repeat;}
#bgControl .pause:hover, #bgControl .pause:active{ background: url('images/RCc2gzWqs768.jpg') 0 0 no-repeat;}
#bgControl .play:link, #bgControl .play:visited{ background: url('images/uKWxonSzzyNa.jpg') 0 0 no-repeat;}
#bgControl .play:hover, #bgControl .play:active{ background: url('images/uKWxonSzzyNa.jpg') 0 -104px no-repeat;}
#share{
	display: block;
	float:right;
	margin: 10px 0;
	padding-right:10px;
	border-right:1px solid #141414;
}
#share  ul{list-style:none;}
#share li{float:left; margin-left:5px;margin-right:5px;}
#share li1{float:left; margin-left:5px; margin-right:63px;}
#share a:link, #share a:visited{display:block; width:24px; height:24px; opacity:.3;}
#share a:hover, #share a:active{opacity:1;}
#share .fb{background: url('images/0ohGwZuGyxOu.png') no-repeat;}
#share .tw{background: url('images/B2NVBTn4Foo4.png') no-repeat;}
#share .deli{background: url('images/5yoD3KMWQA4B.png') no-repeat;}
#share .in{background: url('images/J9G0N2B3bBOq.png') no-repeat;}
#share .st{background: url('images/8mKpducaDKjv.png') no-repeat;}
#share .rss{background: url('images/7Egxn3yu02T3.png') no-repeat;}

#logo{
	text-align:center;
	vertical-align:middle;
	float:left;
	position:relative;
}

/*BLOG*/
.blogitem{margin-top:14px;}
#content h1.caption{
	background:url('images/x1Kiwb1CItVA.png') 15px 17px no-repeat, url('images/4Ao2KcQ3eBU3.png');
	padding:9px 15px 9px 40px;
	font-family: '', sans-serif;
	font-size:20px;
	line-height:30px;
	color: #fff;
	margin-bottom:15px;
}
.blogimage{
	float:left;
}
.blogdateLeft{
	font-size:12px;
	padding-right:3px;
	margin-top:15px;
	float:left;
	border-right:1px solid #000;
	width:30px;
	color:#000;
	text-align:right;
}
.blogdateRight{
	font-size:12px;
	padding-left:3px;
	margin-top:15px;
	float:left;
	width:29px;
	text-align:left;
	color:#000;
}
.blogcontent{
	width:230px;
	float:left;
	margin-left:20px;
}
.blogcontent h3{
	color:#ffffff;
	font-family: '', sans-serif;
	font-size:14px;
	
	line-height:1.4em;
	margin-bottom:20px;
}
.blogTop{clear:both;}
.blogTop hr{
	float:left;
	width:570px;
	margin-top:8px;
	height:3px;
	background-color:#333;
}
.blogTop a:link,
.blogTop a:visited{
	display:block;
	float:right;
	color:#333;
	font-family: '', sans-serif;
	font-size:12px;
	
	text-decoration:none;
}
.blogTop a:hover,
.blogTop a:active{
	color:#ffffff;
}
.blogcontent p{
	color:#ccc;
	font-size:11px;
	width:184px;
	float:left;
}
.meta-links{
	float:right;
	width:26px;
}
.meta-author, .meta-comments, .meta-tags{
	-moz-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out;
	-webkit-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	display:block;
	background-color:#ffffff;
	width:26px;
	height:26px;
	border-radius:13px;
	margin-bottom:10px;
}
.meta-author:link, .meta-author:visited{ background:url('images/VMZgKpTTzOJ3.jpg') 0 0 no-repeat;}
.meta-author:hover, .meta-author:active{ background-position: -104px 0;}
.meta-comments:link, .meta-comments:visited{ background:url('images/LnjvKBEROr8x.jpg') 0 0 no-repeat;}
.meta-comments:hover, .meta-comments:active{ background-position: -104px 0;}
.meta-tags:link, .meta-tags:visited{ background:url('images/wGMpaGaOEMVN.jpg') 0 0 no-repeat;}
.meta-tags:hover, .meta-tags:active{ background-position: -104px 0;}
.morelink:link,
.morelink:visited{
	display:inline-block;
	font-size:11px;
	line-height:22px;
	background-color:#ffffff;
	color:#000000;
	border-radius:4px;
	padding:0 11px;
	text-decoration:none;
	margin-top:20px;
}
.morelink:hover,
.morelink:active{
	background-color:#000;
	color:#ffffff;
}
.meta-tips{
	position:absolute;
	color:#000;
	padding:0px 10px;
	height:20px;
	line-height:20px;
	background-color:#ffffff;
}
.meta-tips span{
	width:6px;
	height:20px;
	background:url('images/22qxHyUgr5TM.png') left center no-repeat;
	position:absolute;
	right:-6px;
}

/*About*/
.personName{display:inline-block; float:left; padding-top:14px;}
.personName h3{font-size:12px; line-height:16px;}
.personName span{font-size:11px; line-height:11px;}
.personContact{ display:inline-block; float:right; padding-top:24px; }
.personContact a:link, .personContact a:visited{width:16px; height:16px; opacity:.5; display:block; float:left; margin-left:2px;}
.personContact a:hover, .personContact a:active{opacity:1;}
.personFacebook{background:url('images/MKFToZ56xQeC.png');}
.personTwitter{background:url('images/tbcgQs66FWhB.png');}
.personEmail{background:url('images/78050BTwvKjO.png');}

/*Portfolio*/
.portfolioitems{
	list-style:none;
	width:620px;
	overflow:hidden;
}
.portfolio2columns li{
	float:left;
	margin: 20px 20px 0 0;
}
.portfolio4columns li{
	float:left;
	margin: 20px 20px 0 0;
}
.portfolioFilter{
	width:600px;
	list-style:none;
	margin:20px 0 0 0;
	height:30px;
	padding-bottom:20px;
	border-bottom:3px solid #333;
}
.portfolioFilter li{ float:left; margin-right:10px;}
.portfolioFilter li a:link,
.portfolioFilter li a:visited{
	display:block;
	background-color:#ffcc00; 
	text-decoration:none;
	color:#000;
	border-radius:4px;
	font-family: '', sans-serif;
	font-size:12px;
	line-height:30px;
	padding:0 15px;
}
.portfolioFilter li a:hover,
.portfolioFilter li a:active{
	background-color:#000; 
	color:#ffcc00;
}
/*Columns*/
.c1,
.c1of2, .c1of2_end, 
.c1of3, .c1of3_end, .c2of3, .c2of3_end,
.c1of4, .c1of4_end, .c2of4, .c2of4_end, .c3of4,
.c3of4_end{float:left; margin-top:20px;}

.c1{clear:both; float:left; width:600px;}
.c1of2{float:left; width:280px; margin-right:40px;}
.c1of2_end{float:left; width:280px;}
.c1of3{float:left; width:173px; margin-right:40px;}
.c1of3_end{float:left; width:173px;}
.c2of3{float:left; width:386px; margin-right:40px;}
.c2of3_end{float:left; width:386px;}
.c1of4{float:left; width:120px; margin-right:40px;}
.c1of4_end{float:left; width:120px;}
.c2of4{float:left; width:280px; margin-right:40px;}
.c2of4_end{float:left; width:280px;}
.c3of4{float:left; width:440px; margin-right:40px;}
.c3of4_end{float:left; width:440px;}

/*STYLES*/
h1, h2, h3, h4, h5, h6{
	clear:both;
	font-family: '', sans-serif;
	font-weight:normal;
	color: #ffffff;
}
h1, h1 > a{font-size:24px;}
h2, h2 > a{font-size:20px;}
h3, h3 > a{font-size:18px;}
h4, h4 > a{font-size:16px;}
h5, h5 > a{font-size:14px;}
h6, h6 > a{font-size:12px;}
.divider{clear:both; height:20px;}
.vericaldivider{display:inline-block; width:20px; }
hr.seperator{clear:both; float:left; margin-top:20px; height:3px; background-color:#333; width:100%; }
.quotes-one{
	margin-left:20px;
	border-left:3px solid #ffffff;
	padding-left:20px;
}
.quotes-two{
	padding-left:35px;
	background: url('images/LAdVeUtd2kb3.png') top left no-repeat;
}
.dropcap{
	display:block;
	float:left;
	font-size:50px;
	line-height:50px;
	font-family: '', sans-serif;
	padding:0;
	margin:0 5px 0 0;
}
.quotes-writer{color:#fff;}
.right{float:right; margin:5px 0 5px 15px;}
.left{float:left; margin:5px 15px 5px 0px;}
span.highlight{background-color:#ffffff; color:#000; padding:0px 2px;}
ul.list{list-style:none;}
ul.list li{padding: 3px 0 3px 20px;}
ul.check li{ background:url('images/KK96BxewqrUb.png') left 6px no-repeat;}
ul.cross li{ background:url('images/YCqmzc48pVqv.png') left 6px no-repeat;}
ul.arrow li{ background:url('images/366Ayz23JZJc.png') left 6px no-repeat;}
ul.circle li{ background:url('images/NPQlnFsK7IUv.png') left 7px no-repeat;}

.infobox, .attentionbox, .downloadbox, .crossbox{
	padding:20px 20px 20px 75px;
	border:2px solid #333;
}
.infobox{
	border-color:#0066cc;
	color:#0066cc;
	background: url('images/EisVYqIWkFzk.png') 20px 24px no-repeat;
}
.attentionbox{
	border-color:#ffffff;
	color:#ffffff;
	background: url('images/jtuYBNJGY7gZ.png') 20px 24px no-repeat;
}
.downloadbox{
	border-color:#009900;
	color:#009900;
	background: url('images/sKUvLauwpFmD.png') 20px 24px no-repeat;
}
.crossbox{
	border-color:#ff0000;
	color:#ff0000;
	background: url('images/WIzTGtclTjht.png') 20px 24px no-repeat;
}

.tipbox{
	position:absolute;
	color:#000;
	padding:10px 10px;
	background-color:#ffffff;
	border-radius:6px;
}
.tipbox span{
	width:9px;
	height:5px;
	background:url('images/59cgQKiAqaac.png') center center no-repeat;
	position:absolute;
	bottom:-5px;
	left:50%;
}

div.item_two_one{
	clear:both;
	float:left;
	width:80px;
	padding:12px 5px 12px 0;
	vertical-align:top;
	font-family: '', sans-serif;
	font-size:16px;
}
div.item_two_two{
	float:left;
	width:170px;
	margin-left:10px;
	padding:15px 5px;
	border-bottom: 1px solid #333;
	vertical-align:top;
}

/*Buttons*/
.buttonSmall{
	display:inline-block;
	background: url('images/AH6lojhqnkZO.png') left top no-repeat;
	height:26px;
	padding-left:5px;
}
.buttonSmall a{
	background: url('images/EGIKUyf7wi57.png') left top repeat-x;
	float:left;
	font-size:12px;
	line-height:26px;
	padding:0 10px;
	text-decoration:none;
	font-family: '', sans-serif;
	
	color:#ffffff;
}
.buttonSmall span{
	float:left;
	background: url('images/unTkJp0Jk3AV.png') left top no-repeat;
	height:26px;
	width:5px;
}

.smallBlack{background-image: url('images/x2xwKXFm0lHb.png'); }
.smallBlack a{background-image: url('images/jB6ZHV4Rm4do.png'); }
.smallBlack span{background-image: url('images/zCc2OjnEkZIN.png'); }

.smallWhite{background-image: url('images/AH6lojhqnkZO.png'); }
.smallWhite a{background-image: url('images/EGIKUyf7wi57.png'); color:#333333;}
.smallWhite span{background-image: url('images/unTkJp0Jk3AV.png'); }

.smallRed{background-image: url('images/5qpkFH46GCb9.png'); }
.smallRed a{background-image: url('images/qK5XBWChC6us.png'); }
.smallRed span{background-image: url('images/bpi1F3dlRwl6.png'); }

.smallGreen{background-image: url('images/GZu3VQn49eBR.png'); }
.smallGreen a{background-image: url('images/QtlgysFPNbAI.png'); }
.smallGreen span{background-image: url('images/DA5j2oBOEUPu.png'); }

.smallBlue{background-image: url('images/EBXzAmFv8W0s.png'); }
.smallBlue a{background-image: url('images/dV60RhNONH72.png'); }
.smallBlue span{background-image: url('images/WsOo4w3BJgMl.png'); }

.buttonMedium{
	display:inline-block;
	background: url('images/kygCAvqyJ8Go.png') left top no-repeat;
	height:36px;
	padding-left:5px;
}
.buttonMedium a{
	background: url('images/tVNIE0Y03lyQ.png') left top repeat-x;
	float:left;
	font-size:16px;
	line-height:36px;
	padding:0 10px;
	text-decoration:none;
	font-family: '', sans-serif;
	
	color:#ffffff;
}
.buttonMedium span{
	float:left;
	background: url('images/Od9nJHmq2i4x.png') left top no-repeat;
	height:36px;
	width:5px;
}

.mediumBlack{background-image: url('images/PoXZvUc2TIkx.png'); }
.mediumBlack a{background-image: url('images/pHhJqxJp7TLN.png'); }
.mediumBlack span{background-image: url('images/yxeUengortP0.png'); }

.mediumWhite{background-image: url('images/kygCAvqyJ8Go.png'); }
.mediumWhite a{background-image: url('images/tVNIE0Y03lyQ.png'); color:#333333;}
.mediumWhite span{background-image: url('images/Od9nJHmq2i4x.png'); }

.mediumRed{background-image: url('images/3w2udp19uV8G.png'); }
.mediumRed a{background-image: url('images/p54R46f7fnRI.png'); }
.mediumRed span{background-image: url('images/HNvPL0UIxagP.png'); }

.mediumGreen{background-image: url('images/SQZHxpYe53XE.png'); }
.mediumGreen a{background-image: url('images/OVNCp6mA2P7n.png'); }
.mediumGreen span{background-image: url('images/94azL77bIb2q.png'); }

.mediumBlue{background-image: url('images/l15Ta254106X.png'); }
.mediumBlue a{background-image: url('images/ZbiIi68pX6Le.png'); }
.mediumBlue span{background-image: url('images/CZyWy6Z1VGN5.png'); }

/*CONTACT FORM*/
.dform p{
	display:block;
	clear:both;
	padding:5px 5px 5px 0;
}

.dFormInput{
	float:left;
	width:157px;
	padding:5px;
	margin-left:10px;
	border-top: 1px double #000;
	border-left: 1px double #000;
	border-right: 1px double #333;
	border-bottom: 1px double #333;
	background-color:none;
}
.dFormInputFocus{
	border:1px solid #ffffff;
}
.dform label{
	padding-top:0px;
	float:left;
	display:inline-block;
	width:95px;
	text-decoration:none;
	font-family: '', sans-serif;
	font-size:16px;
}
.dform input[type=text], .dform select, .dform textarea{
	background:none;
	width:100%;
}
.dform input[type=text]:focus, .dform select:focus, .dform textarea:focus{
}
.dform select{
}
.dform input[type=submit]{
	margin-left:10px;
}
.dform textarea{
	height:113px;
}
.dform label.error{
	clear:both;
	float:left;
	margin-left:95px;
	padding-left:10px;
	width:172px;
	color:#ffffff;
	font-weight:normal;
	font-size:11px;
}
.form_message{
	display:none;
	padding:5px;
	background-color:#ffffff;
	color:#000;
}
div.form_input{
	float:left;
}
.dform .submitButton{
	display:block;
	margin:10px 0 0 10px;
	border-radius:6px;
	color:#000;
	background-color:#ffffff;
	line-height:14px;
	padding:10px 20px;
	text-decoration:none;
	font-family: '', sans-serif;
	font-size:12px;
}
.dform .submitButton:hover{
	color:#ffffff;
	background-color:#000;
}

/* Single Page **/
#singleLeft{
	float:left;
	width:163px;
	padding-right:20px;
	border-right:3px solid #333;
}
#singleRight{
	float:left;
	margin-left:20px;
	width:394px;
}
#singleLeft ul{
	list-style:none;
}
#singleLeft ul li{
	padding-top:3px;
	height:21px;
	padding-left:33px;
	margin-bottom:10px;
}
#singleLeft .singleDate{ background:url('images/GbpxasT6Vwv6.png') left top no-repeat; }
#singleLeft .singleAuthor{ background:url('images/xPV9qM6hNaXT.png') left top no-repeat; }
#singleLeft .singleComments{ background:url('images/BWMLS9BRagZT.png') left top no-repeat; }
#singleLeft .singleTags{ background:url('images/DhGPjIYMQ7te.png') left top no-repeat; }
/* Comments CSS*/
#comments h4{
	padding-bottom:20px;
}
.comment-wrapper{
	background-color:#1d1d1d;
	margin-bottom:20px;
}

#comments ul, #comments ol{
	list-style:none;
}

#comments ol li li{
	padding-left:100px;
	background: url('images/ySpzHwiCq4v8.png') 34px 34px no-repeat;
}

.comment-avatar{
	float:left;
	width:80px;
	height:80px;
	margin:10px;
}
.comment-text{
	padding-left:100px;
	padding-right:10px;
}
.comment-author{
	float:left;
	padding-top:10px;
	border-bottom:1px solid #828282;
	padding-bottom:10px;
}
#comments li .comment-author{width:430px;}
#comments li li .comment-author{width:330px;}
#comments li li li .comment-author{width:230px;}
.author-link{
	font-size:12px;
	
	color: #ffffff;
}
.author-date{
	font-sieze:12px;
	font-weight:italic;
}
.author-time{
	font-size:12px;
}
.comment-text p{
	float:left;
	padding: 5px 10px 10px 0;
}
.form-allowed-tags{
	display:none;
}

#comments .comment-reply-link{
	display:inline-block;
	float:left;
	margin-left:10px;
	margin-top:10px;
}
#comments .comment-reply-link:link,
#comments .comment-reply-link:visited{
	display:inline-block;
	float:right;
	font-size:11px;
	line-height:25px;
	height:25px;
	padding:1px 11px 0px 11px;
	text-transform:uppercase;
	background-color: #ffffff;
	color: #000;
	border-radius:6px;
	font-family: '', sans-serif;
	text-decoration:none;
}
@-moz-document url-prefix() {
	#comments .comment-reply-link a:link,
	#comments .comment-reply-link a:visited{
		padding:0px 11px 1px 11px;
  }
}
#comments .comment-reply-link:link,
#comments .comment-reply-link:visited{
	margin-right:0px;
	margin-bottom:10px;
}
#comments ol ul .comment-reply-link:link,
#comments ol ul .comment-reply-link:visited{
	margin-right:0px;
}
#comments .comment-reply-link:hover,
#comments .comment-reply-link:active{
	text-decoration:none;
	background-color: #000;
	color: #ffcc00;
}

/*Comment Form*/
#commentform{
}
.comment-notes, .logged-in-as{
	padding: 0 0 0 0; 
}
#commentform label{
	display:inline-block;
	width: 132px;
	font-size:14px;
	height:32px;
	vertical-align:top;
	font-family: '', sans-serif;
	font-size:16px;
} 
#commentform .required{
	display:inline-block;
	width:15px;
	height:22px;
	color: #ff0000;
	vertical-align:top;
}
#commentform .comment-form-author label, 
#commentform .comment-form-email label{
	width:115px;
}
#commentform input[type=text], 
#commentform textarea{
	width: 250px;
	height: 22px;
	border-top: 1px double #000;
	border-left: 1px double #000;
	border-right: 1px double #333;
	border-bottom: 1px double #333;
	background-color:transparent;
	padding:5px;
}
#commentform input[type=text]:focus, 
#commentform textarea:focus{
	border:1px solid #ffcc00;
}
#commentform textarea{
	height:140px;
}
#commentform p{
	margin-top:20px;
	vertical-align:top;
}
#commentform input[type=submit]{
	cursor:pointer;
	margin-left:132px;
	display:inline-block;
	font-size:12px;
	line-height:35px;
	height:35px;
	padding:1px 11px 0px 11px;
	text-transform:uppercase;
	background-color: #ffcc00;
	color: #000;
	border-radius:6px;
	font-family: '', sans-serif;
}
#commentform input[type=submit]:hover{
	color: #000;
	background-color: #ffcc00;
}
@-moz-document url-prefix() {
	#commentform input[type=submit]{
		padding:0px 11px 1px 11px;
  }
}
pre{
	 white-space: pre-wrap;       /* css-3 */
	white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
	white-space: -pre-wrap;      /* Opera 4-6 */
	white-space: -o-pre-wrap;    /* Opera 7 */
	overflow: auto;
	font-family: 'Consolas',monospace;
	font-size:13px;
	color: #333;
	line-height:18px;
	background: url("images/wPlldyxI6BzO.png") repeat scroll left top #FFFFFF;
	border-left: 4px solid #888;
	padding:18px 5px 18px 10px;
	margin: 10px 0 10px 0;
}
div.sh_toggle{
	clear:both;
}
div.sh_toggle_text a{
	color:#fff;
	font-size: 10pt;
	
	text-decoration: none;
}
.sh_toggle_text{
	padding: 4px 4px 4px 20px;
	background:url('images/O0M2SAkInjck.png') 0px 6px no-repeat;
	cursor:pointer;
}
.sh_toggle_text_opened{
	background:url('images/qphmwhwSCliq.png') 0px 6px no-repeat;	
	cursor:pointer;
}
.sh_toggle_content{
	display:none;
}
.wp-pagenavi {
	margin-top:20px;
}
.wp-pagenavi .pages{
	background-color:#333;
	color:#fff;
	border-radius:4px;
	padding:4px 8px;
	font-size:12px;
}

.wp-pagenavi .current{
	margin-left:5px;
	background-color:#ffffff;
	color:#000;
	border-radius:4px;
	padding:4px 8px;
	font-size:12px;
}

.wp-pagenavi .page:link, 
.wp-pagenavi .page:visited, 
.wp-pagenavi .nextpostslink:link, 
.wp-pagenavi .nextpostslink:visited, 
.wp-pagenavi .previouspostslink:link,
.wp-pagenavi .previouspostslink:visited{
	margin-left:5px;
	background-color:#333;
	color:#fff;
	border-radius:4px;
	padding:4px 8px;
	font-size:12px;
	text-decoration:none;
}

.wp-pagenavi .page:hover, 
.wp-pagenavi .page:active, 
.wp-pagenavi .nextpostslink:hover, 
.wp-pagenavi .nextpostslink:active, 
.wp-pagenavi .previouspostslink:hover,
.wp-pagenavi .previouspostslink:active{
	background-color:#ffffff;
	color:#000;
}

#form-buttons li {
    font-size:12px;
}
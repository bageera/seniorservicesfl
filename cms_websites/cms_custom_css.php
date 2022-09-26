/*--------------------------------------------------- FONT IMPORT -------------------------------------------------*/

/*------------------------------------------------------ MAP ------------------------------------------------------*/
#_the_map_wrapper .b2b-location.wide .b2b-location-items ul li.show-details {
  overflow: auto !important;
}

.b2b-location-items ul li p span:nth-child(2):after {
content: " | On Call 24 Hours a Day RN Available" !important;
}
/*-------------------------------------------------- GLOBAL BODY --------------------------------------------------*/
.container-wrap {
max-width: 100% !important;
}
/*----------------------------------------------------- CTA -------------------------------------------------------*/
/* ------------------ Floating Social Media Tabs ------------------ */
 .social_items_flex {
 display: flex;
 flex-direction: column;
 justify-content: space-around;
 position: fixed;
 bottom: 70px;
 z-index: 999999;
 }

.mobileview .social_items_flex {
 display: none !important;
 }

.social_button {
 height: 60px;
 width: 60px;
 float: left;
 margin: 5px;
 overflow: hidden;
 background: #fff;
 border-radius: 50px;
 cursor: pointer;
 box-shadow: 0 10px 10px rgba(0,0,0,0.1);
 transition: all 0.3s ease-out;
 }

.social_button:hover {
 width: 330px;
 }

.social_button .floating_icon {
 display: inline-block;
 height: 60px;
 width: 60px;
 text-align: center;
 border-radius: 50px;
 box-sizing: border-box;
 line-height: 60px;
 transition: all 0.3s ease-out;
 }

.facebook_button:hover .floating_icon {
 background: #1773EA;
 }

.facebook_button .floating_icon i {
 color: #1773EA;
 }

.social_button:hover .floating_icon i {
 color: #fff;
 }

.social_button .floating_icon i {
 font-size: 25px;
 line-height: 60px;
 }

.social_button span {
 font-size: 20px;
 font-weight: 500;
 line-height: 60px;
 margin-left: 10px;
 transition: all 0.3s ease-out;
 }

.facebook_button:hover span {
 color: #1773EA;
 }
 /* ------------------ End Floating Social Media Tabs ------------------ */
/*---------------------------------------------------- HEADER -----------------------------------------------------*/
#the_header {
  box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.15) !important;
}
.full_width_content {
  max-width: 100% !important;
}
html:not(.mobileview) .home #container {
  margin-top: -4rem !important;
}
.phone:nth-child(3):before {
content: "L" !important;
}

/*----------------------------------------------------- LOGO ------------------------------------------------------*/
#the_header .logo-variation.logo-variation-header .logo-slot img{
  max-height: 14rem !important;
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.isMobile #the_header #_the_logo, .isMobile #the_header,  .isMobile #the_header #_the_logo .slot-type-image{
 min-height: 10rem !important;
}

@media(max-width: 575px){
#the_header #_the_logo, #the_header, #the_header #_the_logo .slot-type-image{
 min-height: 10rem !important;
}
}
/*-------------------------------------------------- NAVIGATION ---------------------------------------------------*/
#_the_navigation a, 
#menu-holder a {
  text-transform: uppercase !important;
  font-size: 1.3rem !important;
  font-weight: normal !important;
}
/*---------------------------------------------------- BUTTON -----------------------------------------------------*/
.the_list_item_action a,.gform_button {
  background: var(--links) !important;
  color: #fff !important;
  box-shadow: none !important;
  border: none !important;
  font-size: 1.7rem !important;
  text-transform: uppercase !important;
}

.the_list_item_action a:hover ,.gform_button:hover {
  background: #000 !important;
  color: #fff !important;
}
.the_list_item_action {
  background-color: transparent !important;
}

/*Floating Button*/
#cta2 {
bottom: 14px;
position: fixed;
right: 20px;
z-index: 99999999;
}
.mobileview #cta2 {
display: none !important;
}
html:not(.mobileview) #cta2 {
display: block !important;
}
.cta_btn {
background-color: #d2a84d;
border-radius: 15px;
border: 2px solid #fff !important;
color: #fff;
font-size: 15px;
margin: 5px;
padding: 20px 20px 40px;
text-transform: uppercase;
font-weight: 600;
transition: all 1s ease-in-out !important;
animation: flashingButtonMyFriend 1.5s ease-in-out infinite !important;
}
.cta_btn:hover{
background-color: #000;
border: 2px solid #fff !important;
color: #fff !important;
transition: all 1s ease-in-out !important;
}

@keyframes flashingButtonMyFriend{
   50% {opacity: .7}
   100% {opacity: 1}
}
/*End Floating Button*/

@media (max-width:816px) {
   #cta2 {
display: none !important;
}
}
/*------------------------------------------------- FONT STYLING --------------------------------------------------*/

h1,
h2, 
h3 {
  font-weight: normal !important;
}
/*--------------------------------------------------- CONTENT -----------------------------------------------------*/
.home .content {
  padding-top: 3rem !important;
}
.tsidesign_content {
  max-width: 106rem !important;
  margin: 0 auto !important;
}

.tsidesign_content3 {
  max-width: 106rem !important;
  margin: 0 auto !important;
  color: #fff !important;
}

.tsidesign_content3 .the_list_item_headline,
.tsidesign_content3 .the_list_item_subheadline {
  color: #fff !important;
}

.tsidesign_content3 .item_1 {
  background: #000 !important;
  left: 2% !important;
  padding: 5% !important;
  box-shadow: -2px 4px 10px rgba(0,0,0,.4) !important;
  width: 100% !important;
  z-index: 100 !important;
}
/*----------------------------------------------------- DLS -------------------------------------------------------*/
.tsidesign_dl .the_list_wrap {
   max-width:86rem !important;
  padding: 16% 4% 16% !important;
  background: rgba(0, 0, 0, 0.4) !important;
  text-align: left !important;
}
.tsidesign_dl,
.tsidesign_dl .the_list{
  margin-bottom: 0rem!important;
}
.tsidesign_dl .the_list_text{
  max-width:134rem !important;
  margin: 0 auto !important;
}
.tsidesign_dl .the_list_item_headline, 
.tsidesign_dl .the_list_item_subheadline {
  text-shadow: 2px 2px 1px rgba(0, 0, 0, 0.5) !important;
}
/*--------------------------------------------------- FEATURES ----------------------------------------------------*/
.tsidesign_iconfeature1 {
padding: 0 !important;
max-width: 136rem !important;
margin: auto !important;
/* margin-top: -15rem !important; --- Overlap with Module Above */
position: relative !important;
z-index: 98 !important;
}
.tsidesign_iconfeature1 .the_list_item_image{
border: 4px solid #ffffff !important;
border-radius: 50% !important;
margin: 0 auto !important;
max-width: 14rem !important;
padding: 2.7rem !important;
background-color:  #d2a84d !important;
box-shadow:  0px 0px 10px -3px #000 !important;
-webkit-transition: all .2s ease-in-out !important;
-moz-transition: all .2s ease-in-out !important;
-o-transition: all .2s ease-in-out !important;
transition: all .2s ease-in-out !important;
}
.tsidesign_iconfeature1 .the_list_item:hover .the_list_item_image{
background-color:  #000 !important; /* --- Changes Icon Background Color on Hover */
}
.tsidesign_iconfeature1 .the_list_item {
display: inline-block !important;
vertical-align: middle !important;
-webkit-transform: translateZ(0) !important;
transform: translateZ(0) !important;
-webkit-backface-visibility: hidden !important;
backface-visibility: hidden !important;
-webkit-transition-property: transform !important;
transition-property: transform !important;
-webkit-transition: all .3s ease-in-out !important;
-moz-transition: all .3s ease-in-out !important;
-o-transition: all .3s ease-in-out !important;
transition: all .3s ease-in-out !important;
}
.tsidesign_iconfeature1 .the_list_item:hover {
-webkit-transform: translateY(-8px) !important;
transform: translateY(-8px) !important;
}
@media(max-width:800px) {
.tsidesign_iconfeature1 {
max-width: 100% !important;
margin: 0 auto !important;
position: relative !important;
}
}

.tsidesign_iconfeature1 .the_list_item_headline a {
  font-size: 2.3rem !important;
  color: #000 !important;
}

.tsidesign_iconfeature1 .the_list_item_subheadline {
  font-size: 1.6rem !important;
}
/*--------------------------------------------------- SPLIT 1 ----------------------------------------------------*/
.tsidesign_split {
    width: 100% !important;
    margin: 3rem auto !important;
    padding: 0 !important;
    background: #fff !important;
}

.tsidesign_split .the_list_item {
    margin-bottom: 0 !important;
}

.tsidesign_split .item_1 .the_list_wrap {
    max-width: 65rem !important;
    float: clear !important;
    padding-top: 8% !important;
    padding-left: 2rem !important;
    padding-right: 2rem !important;
    float: right !important;
    padding-bottom: 3rem !important;
    text-align: left !important;
}

.tsidesign_split .the_list_item .the_list_item_headline {
    text-transform: uppercase !important;
    font-weight: 500 !important;
    font-size: 2.3rem !important;
}

.tsidesign_split .the_list_item .the_list_item_subheadline {
    text-transform: uppercase !important;
    font-style: italic !important;
    font-size: 1.5rem !important;
    font-weight: bold !important;
}
/*--------------------------------------------------- SERVICES ----------------------------------------------------*/

/*--------------------------------------------------- SUBPAGES ----------------------------------------------------*/
.tsidesign_internal .the_list_item_image img{
    box-shadow: -4px 3px 3px rgba(0,0,0,.23) !important;
  border-radius:3px !important;
}

.tsidesign_internal {
  max-width: 106rem !important;
  margin: 0 auto !important;
}

/*------------------------------------------------- LIST STYLING --------------------------------------------------*/
#container .the_list_item .the_list_item_desc ol li,
#container .the_list_item .the_list_item_desc ul li{position:static!important;}
ul.columns {columns: 3; -webkit-columns: 3; -moz-columns: 3;}
ul.columns2 {columns: 2; -webkit-columns: 2; -moz-columns: 2;}
ol.columns {columns: 3; -webkit-columns: 3; -moz-columns: 3;}
ol.columns2 {columns: 2; -webkit-columns: 2; -moz-columns: 2;}

.tsidesign_internal ul,
.tsidesign_split ul {
  list-style-image: url('/files/2022/05/checked_(46).png') !important;
  list-style-position: inside !important;
  font-weight: bold !important;
  
}
.tsidesign_internal ul,
.tsidesign_split ul {
  line-height: 1 !important;
    margin: .7rem auto 1.8rem !important;
  color: #000 !important;
  font-weight: bold !important;
}

.tsidesign_banner{
  padding: 2.5% .5% 1% 2.5% !important;
  background: #000 !important;
  margin: 0 !important;
  -moz-transition: all 0.35s ease-in-out !important;
  -webkit-transition: all 0.35s ease-in-out !important;
  -o-transition: all 0.35s ease-in-out !important;
  transition: all 0.35s ease-in-out !important;
}
.tsidesign_banner .the_list_item,
.tsidesign_banner .the_list {
  margin-bottom: 0.5rem !important;
}
.tsidesign_banner .the_list_item_headline,
.tsidesign_banner .the_list_item_headline a{
  color: #fff !important;
  letter-spacing: .05em !important;
}
.tsidesign_banner .the_list_item_subheadline{
  color: #fff !important;
  letter-spacing: .05em !important;
  font-weight: 300 !important;
}
.tsidesign_banner .item_1{
  width: 70% !important;
}
.tsidesign_banner .item_2{
  width: 25% !important;
  text-align: right !important;
}
.tsidesign_banner .the_list_item_action{
  background-color: transparent !important;
}
.tsidesign_banner .the_list_item_action a {
  background: transparent !important;
  padding: 1rem 2rem !important;
  border: 2px solid #fff !important;
}
.tsidesign_banner .the_list_item_action a:hover {
  background: #fff !important;
  color: #000 !important;
}
@media(min-width:1000px){
.tsidesign_banner .the_list_item_headline,
.tsidesign_banner .the_list_item_headline a {
  font-size: 3.6rem !important;
}
.tsidesign_banner .the_list_item_subheadline{
  font-size: 2rem !important;
}
}

@media (max-width:1000px){
.tsidesign_banner .the_list_item_headline,
.tsidesign_banner .the_list_item_headline a{
  font-size: 3rem !important;
}
.tsidesign_banner .the_list_item_subheadline{
  font-size: 1.7rem !important;
}
  .tsidesign_banner .item_1{
  width: 60% !important;
}
.tsidesign_banner .item_2{
  width: 35% !important;
}
}
@media (max-width:569px){
  .tsidesign_banner .the_list_item{
    width: 100% !important;
    text-align: center !important;
  }
}
/*---------------------------------------------------- FOOTER -----------------------------------------------------*/
#the_footer {
  max-width:100% !important;
}
#the_footer #_the_logo, #the_footer #_the_copyright {
  margin: 0 auto !important;
}
/*------------------------------------------------- MEDIA QUERIES -------------------------------------------------*/
.mediaqueries.mobileview #container .item_1.the_list_item.center.hero.yes_image.yes_heads.yes_link.yes_desc,
.mediaqueries.mobileview #container .section .list_block.type_article.a3 .the_list_item {
  background-attachment: initial !important;
}

@media only screen and (max-width: 800px){
.section .type_section.cover_fixed .tsXa{
    background-size: cover !important;
  background-attachment: inherit !important;
    }}
/*----------------------------------------------------- FLEX ------------------------------------------------------*/

.tsidesign_border .the_list_item {
 border: 3px solid #000 !important;
 outline:6px solid #d2a84d !important;
 outline-offset: -9px !important;
}
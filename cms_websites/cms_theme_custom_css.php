/*
 * 
 * THEME FONTS
 *
 */

/*
 * 
 * LOCATION:
 * /var/www/production.townsquareinteractive.com/docs/current/wp-content/themes/beacon-theme_new-york/
 */

/*
 * 
 * Theme Fonts:
 * Laravel Theme Design Option fonts for beacon-theme_new-york
 */

/*
 * 
 * Font Types:
 * Laravel Theme Design Option fonts_list for beacon-theme_new-york
 */


/* FONTS:
body: Array
(
    [label] => Open Sans
    [google] => Open+Sans:400,700,400italic,700italic
    [font-family] => 'Open Sans'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
feat: Array
(
    [label] => Sorts Mill Goudy
    [google] => Sorts+Mill+Goudy:400,700,400italic,700italic
    [font-family] => 'Sorts Mill Goudy'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
hdrs: Array
(
    [label] => Sorts Mill Goudy
    [google] => Sorts+Mill+Goudy:400,700,400italic,700italic
    [font-family] => 'Sorts Mill Goudy'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
*/


@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Sorts+Mill+Goudy:400,700,400italic,700italic&display=swap);

    body.beacon{font-family:'Open Sans',Helvetica,Arial,sans-serif;font-weight:normal;}
    #wrapper h1,
    #wrapper h2,
    #wrapper h3,
    #wrapper h4,
    #wrapper h5,
    #wrapper h6,
    #wrapper dt,
    #wrapper th,
    #wrapper .gce-list-title,
    .type_list .the_list_item li:before {font-family:'Sorts Mill Goudy',Helvetica,Arial,sans-serif;}

    #wrapper .type_gallery .hero .the_list_item_headline,
    #wrapper .type_gallery .no_image .the_list_item_headline,
    #wrapper .type_photo_grid .hero .the_list_item_headline,
    #wrapper .type_photo_grid .no_image .the_list_item_headline{font-family:'Sorts Mill Goudy';}
    
/*
 * 
 * THEME COLORS
 *
 */

/*
 * 
 * Theme Colors:
 * Laravel Theme Design Option colors for beacon-theme_new-york
 */


/*
 * 
 * Theme CSS Colors:
 * /var/www/production.townsquareinteractive.com/docs/current/wp-content/themes/beacon-theme_new-york/css/theme_colors.css
 */


/*
 * 
 * Theme Background:
 * Laravel Theme Design Option backgrounds for beacon-theme_new-york
 */

/* main_bg Array
(
    [src] => /wp-content/uploads/b2b/backgrounds/global/bk-bridge.jpg
    [repeat] => no-repeat
    [position] => center top
    [attachment] => 
    [size] => 
    [bgcolor] => 
)
*//*Array
(
    [color_1] => #000
    [color_2] => #575757
    [color_3] => #d2a84d
    [color_4] => #ffffff
    [color_5] => #fff
    [color_6] => #000
    [color_7] => #000
    [color_8] => #fff
    [color_9] => #000
    [color_12] => #ffffff
    [color_13] => #d2a84d
    [color_14] => #ffffff
    [color_15] => #000
    [color_16] => #d2a84d
    [color_17] => #ffffff
    [color_18] => #ffffff
    [color_20] => #000
    [color_21] => rgba(255,255,255,0.2);background-color:#ffffff\9
    [color_3a] => #d2a84d
    [IMAGE_SRC] => /wp-content/uploads/b2b/backgrounds/global/bk-bridge.jpg
    [IMAGE_REP] => no-repeat
    [IMAGE_POS] => center top
    [IMAGE_ATT] => 
    [IMAGE_SIZE] => 
)
*/:root {
    --heads       : #000;
    --text        : #575757;
    --links       : #d2a84d;
    --accentBkg   : #d2a84d;
    --accentTxt   : #ffffff;
    --socialTxt   : #fff;
    --navLinks    : #000;
    --navTabBkg   : #000;
    --navTabTxt   : #fff;
    --logo        : #000;
    --footTxt     : #ffffff;
    --footLinks   : #d2a84d;
    --imgBkg      : rgba(255,255,255,0.2);background-color:#ffffff\9;
    --mainBkg     : #ffffff;
    --socialBkg   : #000;
    --navBkg      : #d2a84d;
    --headBkg     : #ffffff;
    --contentBkg  : #ffffff;
    --footBkg     : #000;
}

/* NEW YORK - GENERAL COLORS*/
body{background-color:#ffffff;}

html:not(.mobileview) body,
.no-mediaqueries body,
.mobileview .mobile-wrapper{background-image:url('/wp-content/uploads/b2b/backgrounds/global/bk-bridge.jpg');background-repeat:no-repeat;background-position:center top;background-attachment:;background-size: ;}

/*OVERRIDE BACKGROUND COLOR IF BACKGROUND IMAGE EXISTS WITH COLOR*/
body{}

/*COLOR_1 / HEADLINES*/
#container h1,
#container h2,
#container h3,
#container h4,
#container h5,
#container h6,
#container dt,
#container th{color: #000;}
::selection{background:#000;}
::-moz-selection{background:#000;}
#container #_the_contactfrm_wrapper .b2b-form label span.required-icon{color:#000;}
#container .list_block .the_list_item .type-post .the_list_item_subheadline a{color:#000;}

/*COLOR_2 / TEXT*/
#container{color: #575757;}
#container #_the_contactfrm_wrapper label{color:#575757;}
/*#container .list_block .the_list_item .type-post .the_list_item_subheadline{border-color:#575757;}*/

/*COLOR_3a / LINKS*/
#container a{color: #d2a84d;}
#wrapper .mobile-abovepost a{color:#d2a84d;}
#wrapper .type_photo_grid .the_list_item.not_hero .the_list_item_heads .the_list_item_action a{color:#d2a84d;}

/*COLOR_3 & COLOR_4 / HERO COLORS*/
#wrapper #_the_map_wrapper .b2b-location h2,
#wrapper #_the_map_wrapper a,
#wrapper #_the_map_wrapper .b2b-location-see-more{color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location.wide ul,
#wrapper #_the_map_wrapper .b2b-location .b2b-location-items-container{background: #d2a84d;color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items ul li:hover,
#wrapper #_the_map_wrapper .b2b-location .b2b-location-expand-icon{background: #ffffff;color: #d2a84d;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items ul li:hover *{color: #d2a84d;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items.show-details ul li:hover *{color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location .b2b-location-items ul li:hover .b2b-location-expand-icon{background: #d2a84d;color:#ffffff;}

#wrapper #container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#container .section .g_color .slidesjs-pagination a.accent_color_bg,
.slick-dots li.slick-active button{background-color: #d2a84d;color: #ffffff;}
#wrapper #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color: #ffffff;}

#wrapper .the_list_item .the_list_item_action{background-color: #d2a84d;}
#wrapper .the_list_item .read-more.the_list_item_action span,
#wrapper .the_list_item .the_list_item_action a{color: #ffffff;}

#container .the_list_item .gform_wrapper .gform_page_footer input.button{background-color: #ffffff;color: #d2a84d;}
#container .the_list_item.hero .gform_wrapper .gform_page_footer input.button{background-color: #d2a84d;color: #ffffff;}

#container .tsI_page-login .tsI_form-button,
#container .the_list_item .gform_wrapper .percentbar_blue,
#container .the_list_item .gform_wrapper .gform_page_footer input[type=submit],
#container .the_list_item .gform_wrapper .gform_footer input.button,
#container .the_list_item .gform_footer input[type=submit]{background-color: #d2a84d;color: #ffffff;}

#container .tsI_page-login .tsI_form-button:hover,
#container .the_list_item.hero .gform_wrapper .gf_progressbar_percentage,
#container .the_list_item.hero .gform_wrapper .gform_page_footer input[type=submit],
#container .the_list_item.hero .gform_wrapper .gform_footer input.button,
#container .the_list_item.hero .gform_footer input[type=submit]{background-color: #ffffff;color: #d2a84d;}

/*#container .section .list_block.type_article.a3 .the_list_item.not_hero.yes_link .banner_bkg{background-color: #d2a84d;}*/
#container .type_article.a3   .the_list_item.no_image .the_list_item_action,
#wrapper .the_list_item.hero .the_list_item_action,
#wrapper .type_photo_grid .the_list_item.no_image .the_list_item_action,
#wrapper .g_color .the_list_item.no_image .the_list_item_action{background-color: #ffffff;}
#container .type_article.a3   .the_list_item.no_image .the_list_item_action a,
#wrapper .the_list_item.hero .the_list_item_action a,
#wrapper .type_photo_grid .the_list_item.no_image .the_list_item_action a,
#wrapper .g_color .the_list_item.no_image .the_list_item_action a{color: #d2a84d;}

#container .type_article.a3 .banner_link a,
#container .the_list_item.hero a{color:#ffffff;}

#container .type_article.a3.well .type-post,
#container .type_article.a3 .the_list_item,
#container .type_article.a3.well .the_list_item.not_hero:nth-of-type(1n),
#container .type_article .the_list_item.hero,
#container .type_menu .the_list_item.hero,
#container .list_block tr.the_list_item.hero:nth-child(odd),
#container .type_services .the_list_item.hero,
#container .type_testimonials .hero .the_list_item_desc,
#container .g_color .no_image{background-color:#d2a84d;color:#ffffff;}

#container .the_list_item.hero .gform_wrapper h2.gsection_title,
#container .type_article.a3 .the_list_item .the_list_item_headline,
#container .type_article.a3 .the_list_item .the_list_item_subheadline,
#container .type_article .the_list_item.hero .the_list_item_headline,
#container .type_article .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s1 .the_list_item.hero .the_list_item_headline,
#container .type_services.s1 .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s2 .the_list_item.hero .the_list_item_headline,
#container .type_services.s2 .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s3 .the_list_item.hero .the_list_item_headline,
#container .type_services.s3 .the_list_item.hero .the_list_item_subheadline,
#container .list_block tr.the_list_item.hero th,
#container .type_menu .the_list_item.hero .the_list_item_headline,
#container .type_menu .the_list_item.hero .the_list_item_subheadline,
#container .g_color .the_list_item.no_image .the_list_item_headline,
#container .g_color .the_list_item.no_image .the_list_item_subheadline,

#container .type_article.a3 .the_list_item .the_list_item_headline a,
#container .type_article.a3 .the_list_item .the_list_item_subheadline a,
#container .type_article .the_list_item.hero .the_list_item_headline a,
#container .type_article .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s1 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s1 .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s2 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s2 .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s3 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s3 .the_list_item.hero .the_list_item_subheadline a,
#container .list_block tr.the_list_item.hero th a,
#container .type_menu .the_list_item.hero .the_list_item_headline a,
#container .type_menu .the_list_item.hero .the_list_item_subheadline a,
#container .g_color .the_list_item.no_image .the_list_item_headline a,
#container .g_color .the_list_item.no_image .the_list_item_subheadline a,

#container .g_color .the_list_item.no_image .the_list_item_desc *{color:#ffffff;}
#container .type_testimonials .hero .the_list_item_heads:after{border-right-color:#d2a84d;}

#container .type_testimonials .the_list_item.not_hero .the_list_item_desc *,
#container .type_testimonials .the_list_item .the_list_item_headline,
#container .type_testimonials .the_list_item .the_list_item_subheadline,
#container .type_testimonials .the_list_item .the_list_item_headline a,
#container .type_testimonials .the_list_item .the_list_item_subheadline a{color: #575757;}

#container .type_services.s2 .the_list_item .the_services_number{background-color:#d2a84d;color:#ffffff;}
#container .type_services.s2 .the_list_item.hero .the_services_number{background-color:#ffffff;color:#d2a84d;}
#container .type_services.s1 .the_services_number:before{color:#d2a84d;}
#container .type_services.s1 .the_services_number:after{text-shadow:2px 1px 0 #d2a84d;color:#ffffff;}

#container .list_block_headline{background-color:#d2a84d;}
#container .list_block_headline span,
#container .type_photo_grid .the_list_item .the_list_item_image:before,
#container .g_color.pg_v2   .the_list_item .caption:before,
#container .g_color .slides .the_list_item .caption:before{background-color:#d2a84d;color:#ffffff;}
#container .type_services.s1 .the_list_item_subheadline,
#container .type_services.s3 .the_list_item_subheadline{background-color:#d2a84d;color:#ffffff;}
#container .type_photo_grid .the_list_item_image{background-color:#d2a84d;}
#container .type_photo_grid .the_list_item.no_image .the_list_item_headline a,
#container .type_photo_grid .the_list_item.no_image .the_list_item_headline,
#container .type_photo_grid .the_list_item.no_image .the_list_item_subheadline a,
#container .type_photo_grid .the_list_item.no_image .the_list_item_subheadline,
#container .type_photo_grid .the_list_item.no_image .the_list_item_desc{color:#ffffff;}
#container .type_photo_grid .the_list_item.no_image .the_list_item_desc{background-color:#d2a84d;}
#container .type_photo_grid .the_list_item.no_image .the_list_item_image:before,
#container .type_photo_grid .the_list_item.hero .the_list_text:before{background-color:#ffffff;color:#d2a84d;}
#container .type_photo_grid .the_list_item.no_image .accent_color_bg{background-color: #ffffff;color: #d2a84d;}
#container .list_block_headline span.cat-title{background:none;color:#d2a84d;}

#container .the_list_item .type-post .the_list_item_desc blockquote{border-color:#d2a84d;background:#ffffff;color:#d2a84d;}
#container .the_list_item .type-post .the_list_item_desc blockquote:before,
#container .the_list_item .type-post .the_list_item_desc blockquote:after{color:#d2a84d;}

#container .list_block.type_menu.m3 .the_list_item.hero .the_list_item_headline span{background-color:#d2a84d;}
#container .list_block.type_menu.m3 .the_list_item.hero .the_list_item_subheadline {background-color:#d2a84d;}

#wrapper .contact_column #searchsubmit,
#container .contact_column a.at300b,
#wrapper .contact_column .the_list_item_headline{background-color:#ffffff;color:#d2a84d;}
#wrapper .contact_column #_the_contactfrm_wrapper .b2b-form .b2b-form-submit{background-color:#d2a84d;color:#ffffff;}
#wrapper .contact_column #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color:#ffffff;}
#container .contact_column #_the_map_wrapper *{color:#ffffff;}

#container .gce-list li{color:#d2a84d;}
#container .calendar-list-event{background-color:#d2a84d;color:#ffffff;}
.gce-list li{color:#d2a84d;}
#container .calendar-list-event .the_list_item_headline,
#container .calendar-list-event .the_list_item_subheadline,
#container .calendar-list-event a{color:#ffffff;}

/*COLOR_5 / SOCIAL TEXT*/
.header_share_wrap,
.mobile-triggers .trigger span,
.header_share_wrap a{color:#fff;}

/*COLOR_6 / NAV LINKS*/
#wrapper #access .menu {background-color:#d2a84d;}
#wrapper #access .menu a{color:#000;}
#wrapper #access .menu a:hover,
#wrapper #access .menu .current-menu-item a,
#menu-holder li a:hover{color:#fff;background-color:#000;}
#menu-holder{background-color:#d2a84d;color:#000;}
#menu-holder-topBorder{background-color:#000;}
#menu-holder li a{color:#000;}

.mediaqueries.mobileview #access{background-color:#d2a84d;}
.mediaqueries.mobileview #access .menu a{color:#000;}
.mediaqueries.mobileview #access .menu a:hover,
.mediaqueries.mobileview #access .menu .current-menu-item > a{color:#fff;background-color:#000;}

/*COLOR_9 / LOGO*/
#wrapper #_the_logo,
#wrapper #_the_logo a{color:#000;}
#wrapper #_the_logo {color:#000;}
#the_footer .footer_brand .share_icons a span{color:#000;}

/*COLOR_10 / RIGHT RAIL TEXT*/
#wrapper .contact_column *{color:;}

/*COLOR_12 / FOOTER TEXT*/
#wrapper .footer{color:#ffffff;}

/*COLOR_13 / FOOTER LINKS*/
#wrapper .footer a{color:#d2a84d;}
#wrapper .footer #searchsubmit{background-color:#d2a84d;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit{background-color: #ffffff;color: #d2a84d;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color: #d2a84d;}
#the_footer #_the_contactfrm_wrapper .b2b-form label span.required-icon{color:#d2a84d;}
#the_footer .social-media-links a{color:#ffffff;}
#the_footer .social-media-links a:hover{color:#d2a84d;}

/*COLOR_15 / SOCIAL BAR BKG*/
.header_share_wrap,
.mobile-triggers .trigger span,
.header_share_wrap a:after{background-color:#000;}

/*COLOR_16 / NAV BKG*/
#access,
#menu-holder{background-color:#d2a84d;}

/*COLOR_17 / FOOTER BRAND*/
#wrapper .footer_brand,
#wrapper .header{background-color: #ffffff;}

/*COLOR_18 / CONTENT BKG*/
/*#container .list_block tr.the_list_item{border-bottom:1px solid #ffffff;}*/
#wrapper .page_title,
#wrapper .content{background-color: #ffffff;}
#wrapper .full_width_content{background-color: #ffffff;}
#wrapper .content{background-color: #ffffff;}
#wrapper .mobile-abovepost{background-color: #ffffff;}
#container .type_menu.m3 .the_list_item .the_list_item_headline span{background-color:#ffffff;}
#container .type_menu.m3 .the_list_item .the_list_item_subheadline {background-color:#ffffff;}

/*COLOR_19 / RIGHT RAIL BKG*/
#container .section .well .type-post,
#wrapper .contact_column{background-color:;}

/*COLOR_20 / FOOTER*/
#wrapper .footer{background-color:#000;background-image:none;}
#wrapper .footer #searchsubmit{background-color:#ffffff;color:#d2a84d;}

/*ITEM COLORS*/
#container .g_color .the_list_item_desc *,
#container .g_color .the_list_item_headline,
#container .g_color .the_list_item_subheadline,
#container .g_color .the_list_item_headline a,
#container .g_color .the_list_item_subheadline a{color:#f7f7f7;}

/*FOOTER COLORS*/
#wrapper .footer input,
#wrapper .footer select,
#wrapper .footer option,
#wrapper .footer textarea{color:#333;}
#wrapper .contact_column input,
#wrapper .contact_column select,
#wrapper .contact_column option,
#wrapper .contact_column textarea{color:#333;}

#the_footer .menu a{color:#ffffff;}
#the_footer .menu a:hover{color:#d2a84d;}
#the_footer .menu .current-menu-item > a{color:#d2a84d;}


/*MODAL*/
.modal_wrap .modal_content{background-color:#d2a84d;}
.modal_list_wrap{background-color:#ffffff;}
.modal_list .tsi-address a{background-color:#ffffff;}
.modal_list a{color:#d2a84d;}
.modal_content .modal_title,
.modal_content .modal_title{background:#d2a84d;color:#ffffff;}
#wrapper .modal_content .modal_close{background:#ffffff;color:#d2a84d;}
#wrapper .modal_content .modal_close:hover{background:#d2a84d;color:#ffffff;}

.type_modal .the_list_item{color:#ffffff;background-color:#000;}
.type_modal .the_list_item .the_list_item_heads *,
.type_modal .the_list_item .gform_title{color:#d2a84d;}


/*PHONES /////////////////////// */
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_desc *,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_desc *,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_desc *{color:#575757;}
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_action,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action{background-color: #d2a84d;}
.isMobile #container .g_color:not(.pg_v2).scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action a,
.isMobile #container .g_color:not(.pg_v2).widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_action a,
.isMobile #container .g_color:not(.pg_v2).widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action a{color: #ffffff;}


@media only screen and (max-width : 568px){
  .mobileview #container .g_color.pg_v2.yResize .the_list_item:not(.no_image) .caption *{color: #575757;}
  .mobileview #container .g_color.pg_v2.yResize .the_list_item:not(.no_image) .the_list_item_action{background-color: #d2a84d;}
  .mobileview #container .g_color.pg_v2.yResize .the_list_item:not(.no_image) .the_list_item_action a{color: #ffffff;}
}

/*REVIEWS*/
#container .type_reviews .hero .the_list_item_desc {background-color:#d2a84d;color:#ffffff;}
#container .type_reviews .hero .the_list_item_heads:after{border-right-color:#d2a84d;}
#container .type_reviews .hero .the_list_item_subheadline .icon-star{color:#ffffff;}

/*NEW GALLERIES*/
#container .section .g_color.g2 .the_gallery_item.yes_image .the_list_item_action{color: #d2a84d;}
#container .section .g_color.g2 .the_gallery_item.no_image .the_list_item_action{background-color: #ffffff;color: #d2a84d;}
#container .section .g_color.g2 .caption:before{background-color: #ffffff;color: #d2a84d;}
#container .section .g_color.g2 .slick-nav .the_gallery_item.slick-slide:hover .caption,
#container .section .g_color.g2 .slick-nav .the_gallery_item.slick-current .caption{box-shadow:0 0 0 2px #d2a84d;}
#container .section .g_color.g2 .slick-arrow{color: #d2a84d;}
#container .section .g_color.g2 .slick-slides .the_gallery_item.no_image{background-color: #d2a84d;}
#container .section .g_color.g2 .slick-nav .the_gallery_item.no_image .the_list_text{background-color: #d2a84d;}
#container .section .g_color.g2 .the_gallery_item.no_image .the_list_item_action{background-color:#ffffff;}
#container .section .g_color.g2 .the_gallery_item.no_image .the_list_item_action a{color: #d2a84d;}

#container .section .type_testimonials.t2 .slick-prev,
#container .section .type_testimonials.t2 .slick-next{background-color: #ffffff;color: #d2a84d;}

#container .no_set_width_4_3 .the_list_item_image,
#container .no_set_width_1_1 .the_list_item_image{background-color: rgba(255,255,255,0.2);background-color:#ffffff\9;}

body.mce-content-body div{background-color:#ffffff;color:#000;}

/* SECTION ---------------------------------------------------------- */

/* TABS 1 */
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs {border-color: #ffffff;}
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link {color: #ffffff;border-color: transparent;}
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link:hover {border-color: #ffffff;}
.type_section .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link.current {background-color: #ffffff;color: #d2a84d;}

/* TABS 2 */
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs {background: ;}
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link {color: #d2a84d;}
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link:hover {color: #ffffff;}
.type_section .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link.current {background-color: #ffffff;color: #d2a84d;}

/* TABS 3 */
.type_section .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link {color: #d2a84d;border-color: ;}
.type_section .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link:hover {background-color: #ffffff;color: #d2a84d;}
.type_section .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link.current {background: #ffffff;color: #d2a84d;}/* >>> <<< */
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>">
  <head>
    <?php print $head; ?>
    <base href='<?php print $url ?>' />
    <title><?php print $print_title; ?></title>
    <?php print $scripts; ?>
    <?php if (isset($sendtoprinter)) print $sendtoprinter; ?>
    <?php print $robots_meta; ?>
    <?php if (theme_get_setting('toggle_favicon')): ?>
      <link rel='shortcut icon' href='<?php print theme_get_setting('favicon') ?>' type='image/x-icon' />
    <?php endif; ?>
    <?php print $css; ?>
	<?php global $base_url; ?>
	<style>
body {
	font-family: "proxima-nova", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	color: #6a6a69;
	background-image:url(images/top-01.png);
	background-repeat:no-repeat;
	background-position: right 28px;
}
p {
	line-height: 1.4;
	color: #575756;
}
h1, h2, h3, h4, h5, h6 {
	font-weight: 600;
	line-height: 1.5;
	color: #000;
	font-family: "proxima-nova", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
}
h1 {
	font-size: 28px;
}
h2 {
	font-size: 22px;
}
h3 {
	font-size: 19px;
}
h4 {
	font-size: 17px;
}
h5 {
	font-size: 16px;
}
hr {
	margin: 25px 0;
}
h2.block-title {
	padding: 12px 18px;
	text-transform: uppercase;
	font-weight:400;
	font-size:13px;
	background: #B9D9FB;
	margin-bottom:0;
	font-family: "proxima-nova", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
}
.body ul {
	margin-bottom: 20px;
}
.body a {
	text-decoration: underline;
	font-weight: 600;
	color: #6a6a69;
}
.body a:hover, .body a:focus {
	text-decoration: none;
	font-weight: 600;
	color: #575756;
}
article .body h2 {
	text-transform: uppercase;
	font-size: 19px;
	font-weight: 600;
}
a {
	color: #000;
}
a:hover, a:focus {
	text-decoration: underline;
	color: #000;
}
.row {
  max-width: 60.625rem;
}
#user-menu-bar {
	height: 30px;
	overflow: hidden;
	background-color: #0C304F;
	margin-bottom: 22px;
}
#secondary-menu ul {
	margin: 0;
	paddding: 0;
}
#secondary-menu ul li {
	list-style-type: none;
	list-style-image: none;
	float: right;
	display: block;
	padding: 0px;
	margin: 0 0 0 8px;
	color: #000;
	width: auto;
	font-size: 11px;
	font-weight: 600;
}
#secondary-menu ul li a {
	display: block;
	height: 30px;
	line-height: 30px;
	padding: 0px 15px;
	color: #B9D9FB;
	font-size:12px;
	font-weight:400;

}
#secondary-menu ul li a:hover, #secondary-menu ul li.active a, #secondary-menu ul li.active-trail a {
	color: #fff;
	background-color: #3D9FF7;
	text-decoration: none;
}
.large-12.columns {
	padding-left: 0;
	padding-right: 0;
}
#admin-menu, #admin-menu ul, #admin-menu ul li, #admin-menu ul li a {
	/* Fix b0rking of admin menu caused by Zurb */
	font-size: 9px !important;
}

#menubar {

}

#menubar nav {
	max-width: 60.625rem;
	margin: 14px auto 20px auto;
	padding: 0px 0px;
	background-color: transparent !important;
}

#menubar nav li, #menubar nav li a {
	color: #000;
}

#main-menu ul {
	background-color: transparent !important;
	width: 100%;
	margin: 0;
}

#main-menu li a, #main-menu li a:not(.button) {
	background-color: transparent;
}

#main-menu ul li > a {
    display: block;
    width: 100%;
    color: #000;
    padding: 8px 0px 8px 0;
    font-size: 18px;
    font-weight: 600;
    background: none repeat scroll 0% 0% #DCDCDC;
	text-align: center;
}

#main-menu ul li > a:hover,
#menubar nav li a:hover,
#menubar nav li.active a,
#menubar nav li.active-trail a {
	background-color: #FFF !important;
	color: #0C304F;
	text-decoration: none;
}

#main-menu li {
	width: 25%;
	margin: 0;
}

#main-menu li {
	border-right: none;
	text-transform: uppercase;
}

#main-menu li:last-child {
	border-right: 0px none;
}

aside.sidebar-first {
	float: left;
	padding-left: 0;
	padding-right:0;
}
.sidebar section {
	padding: 0px;
	margin-bottom: 20px;
}


.block-menu-block-1  {
	background-color:#F3F3F3;
}

.menu-block-wrapper {
	padding: 0 0 0 0;
}
.sidebar ul.menu {
	margin: 0px;
	list-style-position: none;
}
.sidebar ul.menu li {
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	list-style-type: none;
	list-style-image: none;
	padding: 0;
	font-size: 16px;
	font-weight: 400;
	border-bottom: solid 4px #FFF;
}
.sidebar ul.menu li a {
	color: #000;
	padding: 0 0 0 20px;
	display: block;
	line-height:46px;
}
.sidebar ul.menu li a:hover, .sidebar ul.menu li a:focus, .sidebar ul.menu li.active a, .sidebar ul.menu li a.active {
	background-color: #0C304F !important;
	text-decoration: none;
	color:#DCECFC;
}
main.row {

}
.sidebar section.block-block-2, .sidebar section.block-block-4, .sidebar section.block-block-5, .sidebar section.block-block-6 {
	padding: 0;
}
.sidebar section .button {
	margin-bottom: 15px;
	width: 100%;
	text-align: left;
	padding: 22px 18px;
	font-weight: 600 !important;
	font-size: 15px;
}

.sidebar section .button:last-child {
	margin-bottom: 0px;
}

.button.grey {
	background-color: #C6C6C6;
	color: #000;
}
.button.lightgrey {
	background-color: #F9F9F9;
	color: #000;
}
.button.grey:hover, .button.grey.arrow:hover {
	background-color: #82357a;
	text-decoration: none;
}
.button.grey.arrow {
	background: #B64CAA url('../images/bp_wf_arrow.png') no-repeat 92% 50%;
	color:#F9E1F6;
	text-transform:uppercase;
	font-weight:400;
	font-size:13px;
	font-family: "proxima-nova", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
}
ul.button-group {
	margin-bottom: 18px;
	/* border-bottom: 1px solid #3D3D3A; */
}
ul.button-group li a {
	display: block;
	padding: 0 15px;
	height: 30px;
	line-height: 30px;
	color: #fff;
	background-color: #C6C6C6;
	font-weight: normal;
	font-size: 13px;
	margin-right: 5px;
}
ul.button-group li a:hover {
	text-decoration: none;
}
ul.button-group li a.active {
	background-color: #000;
}
.node-type-diagnostic ul.button-group {
	display: none;
}

.field-name-field-caption {
	background-color: #C6C6C6;	
	color: #000;
	font-size: 12px;
	padding: 5px 10px;
	margin: 0 0 8px 0;
}
.form-item-vote a.selectBox {
	display: none !important;
}
.sidebar section .view-content {
	padding: 15px;
	background-color:#EDF5FD;
}
.sidebar section .views-row {
	padding: 0 0 10px 0;
	font-size: 14px;
	font-weight: 400;
	line-height: 1.1;
	margin-top:10px;
	border-bottom: solid 1px #FFF;
}

.views-row-first {
	margin-top:0 !important;
}

.views-row-last {
	border-bottom:none !important;
}

.sidebar section .views-row a {
	color: #0c304f;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	line-height: 1.3;
}

.sidebar section .views-row a:hover {

}

.link-arrow {
	display: inline-block;
	margin-left: 8px;
	width: 9px;
	height: 13px;
	background: transparent url('../images/link-arrow.png') no-repeat left bottom;
}
#backlink {
	padding: 0px 0 15px 0;
	border-bottom: 2px solid #CECECE;
	margin-bottom: 15px;
}
#backlink .button.grey {
	background: #EDEDED url('../images/backlink-arrow.png') no-repeat 12px 50%;
	padding: 12px 12px 12px 28px;
	font-size: 12px;
	font-weight: 600 !important;
	text-transform: uppercase;
	margin-bottom: 0px;
}
#backlink .button.grey:hover, #backlink .button.grey:focus {
	background-color: #9D9D9C;
	text-decoration: none;
}
#resource-icon {
	float: left;
	width: 60px;
	height: 100%;
}
#resource-remain {
	margin-left: 75px;
	max-width: 440px;
}
#resource-icon .wrapper {
	width: 60px;
	height: 65px;
	float: left;
}
#author {
	margin: 5px 0;
}
#author a, #author .field-name-field-attribution {
	color: #666;
	text-transform: uppercase;
	font-weight: 600 !important;
}
.node-type-resource .body, .node-type-resource .body p {
	font-family: "proxima-nova-condensed", "proxima-nova", Arial, Helvetica, sans-serif;
	font-weight: 600;
	font-size: 15px;
	color: #666;
}
.field-name-field-tags, .field-name-field-categories {
	margin: 10px 0 15px 0;
}
.views-field-field-provider-services {
	margin-top: 6px;
}
main ul.links, 
.field-name-field-tags ul, 
.field-name-field-categories ul, 
.views-field-field-categories ul,
.views-field-field-tags ul,
.views-field-field-services ul,
.views-field-field-provider-services ul {
	margin-left: 0;
	font-size: 10px;
	font-family: "proxima-nova", "proxima-nova", Arial, Helvetica, sans-serif;
	color: #000;
	margin-bottom: 0;
}
main ul.links li, 
.field-name-field-tags ul li, 
.field-name-field-categories ul li,
.views-field-field-categories ul li,
.views-field-field-services ul li,
.views-field-field-provider-services ul li,
.views-field-field-tags ul li {
	list-style-type: none;
	list-style-image: none;
	display: inline-block;
	width: auto;
	margin-right: 5px;
	margin-left: 0;
	margin-bottom: 5px;
}
main ul.links li a, 
.field-name-field-tags li a,
.field-name-field-categories li a,
.views-field-field-categories li a,
.views-field-field-services li a,
.views-field-field-provider-services li a,
.views-field-field-tags li a {
	color: #0C233E;
	padding: 3px 8px;
	background-color: #eef6fe;
	font-weight: 400;
	text-transform: capitalize;
}
main ul.links li a:hover, 
.field-name-field-tags li a:hover,
.field-name-field-categories li a:hover,
.views-field-field-categories li a:hover,
.views-field-field-services li a:hover,
.views-field-field-provider-services li a:hover,
.views-field-field-tags li a:hover {
	background-color: #0C233E;
	color: #fff;
	text-decoration: none;
}

.views-field-field-tags li a,
main .field-name-field-tags ul.links li a {
	font-weight: 400;
	background-color: #fff;
	border: 1px solid #0C233E;
}
main .field-name-field-tags ul.links li a:hover,
.views-field-field-tags li a:hover {
	background-color: #0C233E;
	color: #fff;
	text-decoration: none;
}
.main .image, .main .field-name-field-video {
	margin-bottom: 20px;
}

article.node-resource {
	padding-bottom: 20px;
}
main article li.statistics_counter {
	display: none;
}
footer.row {
    max-width: 100%;
    color: #000;
    background-color: #EDEDED;
    margin-bottom: 0px;
    padding: 40px 0 0 0;
    border: medium none;
}

footer.row section {
	width: 60.625em;
	max-width: 100%;
	margin: 0 auto;
}
#subfooter.row {
	background-color: #0c304f;
	color: #fff;
	padding: 4px 0 4px 0;
}
footer p, footer .panel p {
	color: #000;
	font-size: 12px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	font-weight: 400;
}
footer p a, footer .panel p a, footer a, footer .panel p a {
	color: #000;
}
footer p a:hover, footer .panel p a:hover, footer a:hover, footer .panel p a:hover {

}
#subfooter p, #subfooter .panel p {
	color: #ADD1FB;
	font-size: 12px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	font-weight: 600;
	line-height: 30px;
}
.block-block-1 p {
	font-size: 12px;
	margin: 0;
	padding: 0;
}
#subfooter p a, #subfooter .panel p a, #subfooter a, #subfooter .panel p a {
	color: #ADD1FB;
}
#subfooter p a:hover, #subfooter .panel p a:hover, #subfooter a:hover, #subfooter .panel p a:hover {
	color:#FFF;
}
#fatfooter {
	margin-top: 40px;
	background-image:url(images/footer-01.png);
	padding-bottom: 15px;
}
.spacer {
	margin: 0 5px;
	text-align: center;
}
#mini-panel-fat_footer .panels-flexible-region-1-left1,
#mini-panel-fat_footer .panels-flexible-region-3-left1 {
	width: 50%;
	text-align: right;
}
#mini-panel-fat_footer .panels-flexible-region-last {
	width: 23%;
	text-align: right;
	float:right;
}
a.social {
	margin-left: 8px;
	font-size: 0px;
	text-indent: -9999px;
	display: inline-block;
	width: 25px;
	height: 24px;	
	cursor: pointer;
	cursor: hand;
}
a.social:hover {
	-moz-opacity: 0.9;
	-webkit-opacity: 0.9;
	opacity: 0.9;
	text-decoration: none;
}
a.twitter {
	background: transparent url('../images/icon-twitter.png') no-repeat left top;
}
a.facebook {
	background: transparent url('../images/icon-facebook.png') no-repeat left top;
}

.block-views-related-resources-block {
	margin-top: 20px;
	padding-top: 30px;
	border-top: 1px solid #ccc;
	border-bottom: 2px solid #ccc;
}
.view-related-resources {
	margin-top: 20px;
	float: left;
	clear: left;
}
.view-related-resources .views-field-field-image,
.main .view-resources .views-field-field-image {
	width: 145px;
	float: right;
	margin-left: 20px;
}
.view-related-resources .views-field-field-image img,
.main .view-resources .views-field-field-image img {
	width: 145px;
}
.main .views-field-field-format {
	width: 75px;
	float: left;
}
.main .views-field-title {
	color: #0C233E;
	font-size: 16px;
	font-weight: 600;
	margin-bottom: 2px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
}
.main .view-content {
	overflow: hidden;
}
.main .views-row {
	float: left;
	clear: left;
	margin-bottom: 25px;
	padding-bottom: 20px;
	border-bottom: 1px solid #E7E7E6;
}

.view-providers-directory .views-row {
	width:100%;
	position:relative;
}

.view-providers-directory .views-row .views-row-inner {
	width:100%;
	max-width:none !important;
}

.main .views-field-title a {
	color: #0C233E;
}
.main .views-field-name:not(th.views-field-name), .main .views-field-field-attribution,
.main .views-field-created {
	color: #575756;
	text-transform: uppercase;
	font-weight: 400 !important;
	margin-bottom: 8px;
	font-size: 13px;
}
.view-news .views-field-created {
	margin-bottom: 15px;
}
.main .views-field-name a {
	color: #666;
}
.views-field-field-categories {
	margin: 0 0 8px 0;
}
.view-related-resources .views-field-title,
.view-related-resources .views-field-name,
.view-related-resources .views-field-field-attribution,
.view-related-resources .views-field-field-categories,
.main .view-resources .views-field-title,
.main .view-resources .views-field-name,
.main .view-resources .views-field-field-categories {
	margin: 0 145px 8px 75px;
}
.view-related-resources .views-field-body,
.main .view-resources .views-field-body {
	margin: 0 194px 0 75px;
	font-size: 13px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	color: #666;
	width:435px;
	
}
.view-related-resources .views-field-body p,
.main .view-resources .views-field-body p {
	margin: 0;
	font-size: 13px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	color: #575756;
}
.view-related-resources .views-field-field-rating,
.main .view-resources .views-field-field-rating {
	margin: 8px 0 0 75px;
	float: left;
	display: block;
	width: auto;
	min-width: 100px;
	height: 25px;
	overflow: hidden;
}
.views-field-field-rating .form-item {
	margin: 0;
}
.view-related-resources .views-field-field-tags,
.main .view-resources .views-field-field-tags
{
	margin: 5px 145px 0 15px;
	float: left;
	display: block;
	width: auto;
	height: 25px;
	overflow: hidden;
}
.view-related-resources .views-field-field-tags .item-list ul,
.main .view-resources .views-field-field-tags .item-list ul {
	margin: 0 0 0 0;
}
.view-related-resources .views-field-field-tags .item-list ul li,
.main .view-resources .views-field-field-tags .item-list ul li {
	margin-top: 0;
	margin-bottom: 0;
}
.view-related-resources .views-field-field-tags .item-list ul li a,
.main .view-resources .views-field-field-tags .item-list ul li a {
	padding-top: 2px;
	padding-bottom: 2px;
	line-height: 21px;
}
.selectBox-dropdown .selectBox-label {
	padding-top: 6px;
	padding-bottom: 0px;
	width: 420px;
	min-width: 420px;
	max-width: 100%;
}
.views-exposed-form .selectBox-dropdown .selectBox-label {
	min-width: 100%;
}
.selectBox-dropdown{
	width: 480px;
	min-width: 480px;
	max-width: 100%;
}

.selectBox-dropdown {
    background: #F1F1F1;
    border: 0px solid #F1F1F1;
    -moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
    box-shadow: 0 0 0 #FFF;
    color: #0C233E;
	font-weight: 600;
	font-size: 13px;
    cursor: default;
    display: inline-block;
    line-height: 1.5;
    max-width: 100%;
    min-width: 480px;
    width: 480px;
    outline: medium none;
    position: relative;
    text-align: left;
    text-decoration: none;
    vertical-align: middle;
	height: 30px;
}
.views-exposed-form .selectBox-dropdown {
    max-width: 100%;
    min-width: 150px;
    width: 150px;
}
.selectBox-dropdown .selectBox-arrow {
    background: url("../images/selectboxArrow@2x.png") no-repeat scroll 50% center rgba(0, 0, 0, 0);
    border-left: 0px solid #F1F1F1;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    width: 34px;
	background-size: 34px 30px;
}
.selectBox-dropdown-menu {
    background: none repeat scroll 0 0 #F1F1F1;
    border: 1px solid #b2b2b2;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    max-height: 200px;
    min-height: 1em;
    overflow: auto;
    position: absolute;
    z-index: 99999;
	width: auto !important;
}
.node-type-webform .selectBox-dropdown-menu {
	min-width: 400px !important;
}
.selectBox-options LI A {
    background: none no-repeat scroll 6px center rgba(0, 0, 0, 0);
    line-height: 1.5;
    overflow: hidden;
    padding: 0 0.5em;
    white-space: nowrap;
	font-size: 13px;
	color: #0C233E;
	font-weight: 600;
}
.selectBox-options LI A:hover {
	background-color: #d6e8fd;
	text-decoration: none;
}
.selectBox-options LI.selectBox-selected A {
    background-color: #d6e8fd;
}

.views-exposed-widget .selectBox-dropdown {
	min-width: 120px;
}
.page-resources h1#page-title {
	display: none;
}
.views-exposed-form {
	margin: 0px 0px 25px 0px;
	padding: 0 0 15px 0;
	border-top: none;
	border-bottom: 2px solid #CECECE;
	font-family: "proxima-nova-condensed", "proxima-nova", Arial, Helvetica, sans-serif;
}
.form-item-sort-bef-combine label {
	display: none;
}
.views-exposed-form .views-exposed-widget {
	width: 21%;
	margin-right:0.5em;
	padding-top:0;
}

#edit-sort-bef-combine-wrapper {
	margin-right:0;
}

.views-exposed-form .views-exposed-widget input {
	margin-bottom: 0;
}
.views-exposed-form .views-exposed-widget.views-submit-button {
	display: none;
}
#edit-keys {
	background: transparent url('../images/search.png') no-repeat right 50%;
}
input#edit-keys {
	height: 30px;
    color: #0C233E;
	font-weight: 600;
	font-size: 12px;	   
	border: 0px;
    background: url("../images/searchIcon.png") no-repeat scroll right 50% #F1F1F1;	
	background-size: 35px 30px;
	font-family: "proxima-nova-condensed", "proxima-nova", Arial, Helvetica, sans-serif;
}
.flag-save-provider a.flag {
	display: block;
	width: 23px;
	height: 23px;
	background: transparent url('images/icon_heart_off.png') no-repeat left top;
	text-indent: -9999px;
}
.flag-save-provider a.flagged, .flag-save-provider a.unflag-action, .flag-save-provider a.flag:hover {
	background: transparent url('images/icon_heart_on.png') no-repeat left top;
	text-decoration: none;
}
.flag-save-provider a.flagged:hover {
	background: transparent url('images/icon_heart_off.png') no-repeat left top;
	text-decoration: none;
}
.flag-save-provider .flag-message {
    position: absolute;
    top: 0px;
    line-height: normal;
    left: -150px;
    text-align: center;
    width: 150px;
    font-size: 13px;
	background-color: #4CC08F;
	color: #fff;
	padding: 5px;
	border-radius: 0px;
	border: 0px none;
}
.views-field-ops {
	float: right;
	width: auto;
}
.views-field-field-logo {
	float: left;
	width: auto;
	margin: 0 15px 15px 0;
}
.views-field-field-logo img {
	width: 100px;
}
.views-field-field-logo div {
	display: inline;
}
.views-row-inner {
	width: 100%;
	max-width: 530px;
}
.views-field-field-region:not(th.views-field-field-region) {
	color: #575756;
	text-transform: uppercase;
	font-weight: 400;
	margin-bottom: 8px;
	font-size: 13px;
	display: inline;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
}
.view-providers-directory .views-field-php {
	margin-left: 8px;
	color: #575756;
	font-weight: 400;
	font-size: 13px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
}
.views-field-field-services{
	margin: 10px 0;
}
.view-providers-directory .views-field-body {
	margin-left: 0;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #666;
	line-height: 1.3;
}
.view-providers-directory .views-field-body p {
	color: #575756;
	font-size: 13px;
	line-height: 1.35;
	font-family: "proxima-nova", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	margin-bottom:0;
}
#provider-logo {
	float: left;
	width: 100px;
	height: 100%;
}
#provider-remain {
	margin-left: 115px;
	max-width: 440px;
}
#provider-logo .wrapper {
	width: 100px;
	height: 65px;
	float: left;
}
#save-provider {
	display: block;
	width: auto;
	float: right;
	margin-right: -150px;
}
h1.node-title {
	font-size: 18px;
	
}
#provider-remain .field-name-field-region {
	color: #575756;
	text-transform: uppercase;
	font-weight: 400;
	margin-bottom: 8px;
	font-size: 13px;
	display: inline;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
}
#provider-remain .no-consultants {
	margin-left: 8px;
	color: #575756;
	font-weight: 400;
	font-size: 13px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	display: inline;	
}
.field-name-field-services {
	margin: 8px 0 15px 0;
}
.vcard {
	margin-bottom: 0;
	border: 0px none;
	padding: 0 0;
	font-family: "proxima-nova-condensed", "proxima-nova", Arial, Helvetica, sans-serif;
	color: #666;
	font-size: 13px;
}
#provider-remain .field-name-field-telephone {
	line-height:1.3rem;
	font-size:13px;
	color:#575756;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	margin-bottom:10px;
}
#provider-remain .social {
	margin: 0 0 15px 0;
}
.social a {
	display: inline-block;
	width: 20px;
	height: 21px;
	margin-right: 3px;
	text-indent: -9999px;
}
.social a.email {
	background: transparent url('images/icon_email.png') no-repeat left top;
}
.social a.facebook {
	background: transparent url('images/icon_fb.png') no-repeat left top;
}
.social a.twitter {
	background: transparent url('images/icon_twitter.png') no-repeat left top;
}
.social a.linkedin {
	background: transparent url('images/icon_linkedin.png') no-repeat left top;
}
#provider-remain .field-name-field-introduction {
	font-family: "proxima-nova-condensed", "proxima-nova", Arial, Helvetica, sans-serif;	
	color: #000;
	margin: 0 0 15px 0;
	font-size: 15px;
	line-height: 1.3;
}
#provider-remain .body {
	font-family: "proxima-nova-condensed", "proxima-nova", Arial, Helvetica, sans-serif;	
	color: #666;
	margin: 0 0 15px 0;
	font-size: 13px;
	line-height: 1.5;
}
#provider-remain .body p {
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;	
	color: #575756;
	font-size: 13px;
	font-weight:400;
}
.block-views-consultants-block {
	margin-left: 115px;
	max-width: 440px;
}
.block-views-consultants-block h2.block-title {
	padding:0 0 0 10px;
	height:36px;
	line-height:36px;
	background: #EDEDED;
	text-transform: none;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#000;
	font-weight:600;
	margin-bottom:25px;
}
.block-views-consultants-block .views-field-picture img {
	width: 188px;
}
.block-views-consultants-block .views-field-picture {
	width: 188px;
	height: 125px;
	overflow: hidden;
}
.block-views-consultants-block .views-row {
	float: left;
	clear: none;
	width: 188px;
	margin-right: 15px;
	margin: 0 15px 15px 0;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	border-bottom: solid 2px #C6C6C6;
}
.block-views-consultants-block .views-field-name {
	color: #000;
	text-transform: none;
	font-size: 16px;
	font-weight:600 !important;
	margin: 10px 0;
}

.block-views-consultants-block .views-field-field-services {
	display: inline-block;
	margin-bottom: 5px;
	margin-top: 0px;
}

.block-views-consultants-block .views-field-field-provider-services{
	height:65px;
}

.block-views-consultants-block .views-field-field-services div,
.block-views-consultants-block .views-field-field-services ul {
	display: inline;
}
.block-views-consultants-block .views-field-field-services ul li {
	margin-right: 4px;
}
.views-field-mail a {
	line-height: 18px;
	display: inline-block;
	width: 20px;
	height: 21px;
	text-indent: -9999px;
	background: transparent url('images/icon_email.png') no-repeat left top;
}
.columns.siteheader {
	float: right;
	padding-left: 0;
	padding-right: 0;
	text-align: right;
	position:relative;
}
#search-api-page-search-form-search .form-type-textfield input {
	width: 37px;
	height: 33px;
	line-height: 33px;
	color: #000;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	font-size: 13px;
	background: #EDEDED;
	padding-right: 10px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;	
	border: 0px none;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) inset;
	position:absolute;
	top:0;
	left:0;
}
#search-api-page-search-form-search .form-type-textfield input.active {
	background-color: #808080;
	color: #fff;
	font-weight: 600;
}
#search-api-page-search-form-search .form-type-textfield {
}
#search-api-page-search-form-search button {
	height: 33px;
	line-height: 33px;
	display: block;
	width: 37px;
	text-indent: -9999px;
	color: #FFF;
	background: #0C304F url('../images/searchIcon.png') no-repeat center 50%;
	padding: 0;
	margin: 0 0 0 0;
	position:absolute;
	top:0;
	right:0;
	z-index:1;
}
#search-api-page-search-form-search {
	width: 100%;
	max-width: 270px;
}
.block-search-api-page-search {
	float: right;
	width: 37px;
	height:33px;
	padding: 0;
	margin: 0 0 0 0;
	position: absolute;
	right: 0;
	top: 50px;	
}
.search-api-page-results > h2 {
	display: none;
}
.page-sitesearch h1#page-title, #search-api-page-search-form .form-type-textfield > label {
	display: none;
}
.page-sitesearch #search-api-page-search-form {
	display: none;
}
ol.search-results {
	margin: 15px 0 0 0;
}
.search-results li.search-result {
	float: left;
	clear: left;
	margin-bottom: 25px;
	padding-bottom: 25px;
	border-bottom: 1px solid #E7E7E6;
	max-width: 470px;
	width: 100%;
}
.search-results li.search-result h3.title {
	color: #000;
	font-size: 16px;
	font-weight: 700;
}
.search-results li.search-result h3.title a {
	color: #000;
}
.search-image {
	float: left;
	width: 140px;
}
.search-image img {
	float: left;
	width: 125px;
}
.search-results .search-snippet-info {
	margin-left: 140px;
}
.search-results .search-snippet-info, .search-results .search-snippet-info p {
	padding-left: 0;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	font-size: 14px;
	line-height: 1.3;
	color: #000;
	margin-bottom: 0;
}
.search-results .search-snippet-info.noimage {
	margin-left: 0;
}
.item-list .facetapi-facetapi-links li {
	list-style-type: none;
	list-style-image: none;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight: 600;
	padding: 8px 0;
}
.item-list .facetapi-facetapi-links li:first-child {
	margin-top: 12px;
}
.node-page h1.node-title {
	font-size: 28px;
	color:#3d9ff7;
	margin-bottom:10px;
	
}
article .field-name-field-introduction, article .field-name-field-introduction p {
	font-size: 18px;
	font-weight: 600;
	color: #0c304f;
}

.flag-submit-diagnostic-report a.flag, a#edit-cancel,
button#edit-submit-dialog, button#edit-cancel-dialog {
    background-color: #C6C6C6;
    border: medium none;
    color: #000000;
    cursor: pointer;
    display: inline-block;
    font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
    font-size: 1rem;
    font-weight: normal !important;
    line-height: normal;
    margin: 0 0 1.25rem;
    padding: 1.0625rem 2rem 1rem;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: background-color 300ms ease-out 0s;
}
.flag-submit-diagnostic-report a.flag:hover, a#edit-cancel:hover {
	text-decoration: none;
	background-color: #999;
}
#submit-report {
	float: left;
	clear: left;
	width: 100%;
	padding: 15px;
	background-color: #F9F9F9;
}
.page-flag-confirm h1#page-title {
	font-size: 18px;
}
.flag-connected-consultants a.flag {
	padding: 5px;
	color: #ADD1FB;
	background-color: #0C233E;
	transition: background-color 300ms ease-out 0s;
	font-size: 10px;
	text-transform: uppercase;
}
.flag-connected-consultants a.flag:hover {
	background-color: #eef6fe;
	color:#0C233E;
	text-decoration: none;
}

.form-item-field-address-und-0-delete-location {
	display: none;
}
input[type="file"] {
	display: inline-block;
	width: 220px;
}
button.ajax-processed {
	padding: 5px;
	background-color: #e7e7e7;
	color: #000;
	font-size: 13px;	
}
button.ajax-processed:hover {
	background-color: #b9b9b9;
}
.form-managed-file .form-item {
	margin: 1em 0;
}
.field-name-field-download .tabledrag-toggle-weight-wrapper {
	display: none;
}
.field-name-field-download .fieldset-description {
	margin-bottom: 15px;
}
.field-name-field-download .form-item > .description {
	margin-top: 15px;
}
.ui-dialog {
	border-radius: 0px !important;
	padding: 0px !important;
}
.ui-widget-header {
	background: #000 !important;
	border: 0px !important;
	color: #fff !important;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif !important;
	border-radius: 0px !important;
}
.ui-dialog .ui-dialog-title {
	margin: 0;
}
#flagging-form-flagging-form-dialog {
	margin-top: 12px;
}

/***************** FRONT PAGE ****************/

.front #node-92 {
	display: none;
}
.front .main > ul.button-group {
	display: none;
}
.flexslider {
	border: 0px;
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
	box-shadow: 0 0 0 #fff;
	margin: 0px;
}
.front .panels-flexible-region-2-center {
	width: 100%;
}
#hero.flexslider .slides > li {

}
#hero.flexslider .slides > li .views-field-title {
	position: absolute;
	width: auto;
	display: block;
	padding: 5px 20px 5px 20px;
	color:#FFF;
	bottom: 20px;
	left: 20px;
	font-size: 28px;
	margin-bottom:0;
	background-image: url(images/slider_txt_bg.png);
}

#hero.flexslider .slides > li .views-field-title a {
	color:#FFF;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif !important;
	font-size:36px;
	font-weight:600;
}
#hero.flexslider .flex-control-nav {
	bottom: 20px;
	right: 20px;
	width: auto;
	z-index: 10;
}
#hero.flexslider .flex-control-paging li {
	margin: 0 4px;
}
#hero.flexslider .flex-control-paging li a {
	background: none repeat scroll 0 0 rgba(12, 35, 62, 1);
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
	box-shadow: 0 0 0 #000;
	width:16px;
	height:16px;
}
#hero.flexslider .flex-control-paging li a.flex-active {
	background: none repeat scroll 0 0 rgba(132, 1850, 250, 1);
}
.flex-direction-nav a {
	height: 60px;
}
#mini-panel-front_page .panels-flexible-row-2-1 {
	margin-top: 15px;
}
#mini-panel-front_page .panels-flexible-row-2-1 .panels-flexible-region {
	width: 33.33% !important;
}
#mini-panel-front_page .panels-flexible-row-2-1 .panel-pane {
	padding: 15px;
}
#mini-panel-front_page .panels-flexible-row-2-1 .panel-pane h2 {
	font-size: 22px;
	margin-top: 8px;
	line-height: 1.2;
	max-width: 285px;
	font-weight: 600;
	color: #FFF;
}
#mini-panel-front_page .panels-flexible-row-2-1 .panel-pane {
	position: relative;
	height: 200px;
}

#mini-panel-front_page .panels-flexible-row-2-1 .pane-1 {
	background-color:#328BF6;
}

#mini-panel-front_page .panels-flexible-row-2-1 a {
	color: #fff;
}

#mini-panel-front_page .panels-flexible-row-2-1 .pane-2 {
	background-color:#DD43CE;
}

#mini-panel-front_page .panels-flexible-row-2-1 .pane-3 {
	background-color:#04B57A;
}

a.icon {
	display: block;
	position: absolute;
	bottom: 0px;
	right: 5px;	
	text-indent: -9999px;
}
a.icon.document {
	width: 68px;
	height: 83px;
	background: transparent url('images/icon_document.png') no-repeat left top;
}
a.icon.folder {
	width: 91px;
	height: 63px;
	right: 0px;
	background: transparent url('images/icon_folder.png') no-repeat left top;
}
a.icon.spanner {
	width: 82px;
	height: 82px;
	background: transparent url('images/icon_spanner.png') no-repeat left top;
}
a.icon:hover {
	-moz-opacity: 0.9;
	-webkit-opacity: 0.9;
	opacity: 0.9;
}
#mini-panel-front_page .panels-flexible-row-2-2 {
	margin-top: 15px;
}
#mini-panel-front_page .panels-flexible-region-2-slider {
	width: 66.66% !important;
}
#guide.flexslider .slides .views-field-field-image img {
	width: 150px;
	height: 150px;
}
#guide.flexslider .slides .views-field-field-image {
	float: left;
	margin-left: 25px;
	margin-bottom: 25px;
}
.pane-guide-slider {
	background-color: #D6D7D6;
	background-image:url(images/guide_slider_bg-01.png);
}
#guide.flexslider {
	background-color: transparent;
}
#guide.flexslider .flex-control-nav {
	display: none;
}
#guide.flexslider ul.slides {
	padding: 0 40px;
	height:283px;
}
#guide.flexslider .slides .views-field-title {
	margin-left: 25px;
	margin-right: 25px;
	font-size: 28px;
	margin: 20px 25px 20px 25px;
	font-weight:600;
}
#guide.flexslider .slides .views-field-field-description {
	font-size: 16px;
	color: #000;
	margin-left: 200px;
	margin-right: 25px;
	line-height: 1.4em;
	font-weight: 300;
}
#guide.flexslider .slides .views-field-field-slide-link {
	font-size: 18px;
	color: #fff;
	width: 160px;
	height: 55px;
	display: block;
	margin-top: 20px;
	float: left;
	margin-left: 25px;
}
#guide.flexslider .slides .views-field-field-slide-link a {
	color: #fff;
	display: block;
	padding: 10px 20px 10px 10px;	
	background-color: #0C233E;
	line-height: 1.2;	
	font-weight: 600;
	background-image:url(images/guide_slider_arrow.png);
	background-repeat:no-repeat;
	background-position:95% center;
}
#guide.flexslider .slides .views-field-field-slide-link a:hover {
	text-decoration: none;
}
.panels-flexible-region-2-twitter-inside .pane-content {
	background-color: #ADD1FB;
	padding: 10px;
	height: 283px;
	overflow: hidden;
}
.twitter-header {
	line-height: 30px;
	height: 30px;
	display: block;
	color: #000;
	padding-left: 40px;
	background-image: url('images/twitter_logo.png');
	background-repeat: no-repeat;
	background-color: transparent;
	background-size: 21px 17px;
	background-position: left 50%;
	font-weight: 600;
	font-size: 16px;
}

.stream {
	background-color: #D6E8FD !important;
}

.panels-flexible-region-1-left2 {
	float: left;
	width: 23.75%;
}

.panels-flexible-region-1-left1 {
	float: left;
	width: 36.75%;
}

.flex-direction-nav a {
	width:35px;
	height:35px;
	text-indent:-9999px;
}

.flex-prev {
	background-image:url(images/guide_slider_prev.png);
}

.flex-next {
	background-image:url(images/guide_slider_next.png);
	text-align: left !important;
}

.flex-direction-nav a:before {
	display:none;
}

#edit-keys-wrapper {
	width:33%;
}

.views-exposed-form .views-exposed-widget {
float: left;
padding-right:0 !important;
}

.fivestar-outline div.fivestar-widget-static .star {
width: 14px !important;
}

.pagination-centered {
border-top: double 3px #A6A6A5;
border-bottom: solid 2px #A6A6A5;
float: left;
width: 100%;
}

.item-list ul {
margin: 3px 0 6px 0 !important;
}

ul.pagination li.current a {
background: #0C233E;
color: white;
font-weight: 400;
cursor: default;
font-size:14px;
-webkit-border-radius: 0px;
border-radius: 0px;
}

.item-list .pager {
	clear: both;
	text-align: right;
}

ul.pagination li a {
display: block;
padding: 0.0625rem 0.625rem 0.0625rem;
color: #575756;
-webkit-border-radius: 3px;
border-radius: 3px;
}

footer .form-type-textfield.form-item-mergevars-EMAIL label {
	display:none;
}

footer #edit-mergevars-email,
footer #edit-mergevars-email--1,
footer #edit-mergevars-email--2 {
	width:130px;
	height:23px;
	border: none;
	background-color: #FFF;
	font-size:13px;
	padding-top: 0px;
	padding-bottom: 0px;
	color: #328BF6;
}

footer .mailchimp-signup-subscribe-form .form-submit,
footer .mailchimp-signup-subscribe-form #edit-submit,
footer .mailchimp-signup-subscribe-form #edit-submit--1,
footer .mailchimp-signup-subscribe-form #edit-submit--2 {
	height:23px !important;
	width:60px !important;
	font-size:12px !important;
	float:left !important;
	padding:0 !important;
	color:#FFF !important;
	text-transform: none !important;
	background-color:#328BF6 !important;
}

footer .mailchimp-signup-subscribe-form .form-type-textfield {
	margin-top:0;
}
#mailchimp-signup-subscribe-block-subscribe-form {
	float: right;
}

footer #mailchimp-newsletter-421509-mergefields {
	float:left;
}
#mailchimp-signup-subscribe-page-subscribe-to-our-newsletter-form h2 {
	color: #328bf6;
    font-size: 28px;
    font-weight: 600;
    line-height: 1.3;
}

.center-wrapper {
	float:left;
	width:83%;
}

.view-providers-directory .view-header {
	border-bottom: 2px solid #CECECE;
	margin-bottom:25px;
	font-weight:300;
	font-size:16px;
	color:#575756;
}

.view-providers-directory .view-header p{
	margin-bottom:15px;
	font-weight:300;
	font-size:16px;
	color:#575756;
}

.view-providers-directory .view-header h2{
	font-weight:600;
	font-size:28px;
	color:#0C233E;
}

.view-providers-directory .view-header .left{
	width:390px;
}

.view-providers-directory .view-header .right{
	width:270px;
	margin-top: 55px;
	margin-bottom: 25px;
}

.view-providers-directory .views-exposed-form {
	border-bottom:none !important;
	padding-bottom:0;
}

.view-providers-directory .views-field-ops {
	position:absolute;
	top:10px;
	right:0;
}

.view-providers-directory .views-field-field-logo {
	margin-bottom:0;
}

.panel.callout {
	border:none !important;
	margin-bottom: 0;
	padding: 10px;
	background: #ADD1FB;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	color:#0C233E;
	font-size:14px;
	font-weight:400;
	line-height:1.4em;
	background-image:url(images/icon_heart_on.png);
	background-repeat:no-repeat;
	background-position: 245px 10px;
	background-position: 235px 12px;
	padding-right: 80px;
}

#backlink .button.grey {
	background-image:url('../images/backlink-arrow.png') !important;
background-color: #EDEDED !important;
background-repeat: no-repeat !important;
background-position: 12px 50% !important;
padding: 8px 12px 6px 28px;
color:#000 !important;
font-size: 12px;
font-weight: 400 !important;
text-transform: uppercase;
margin-bottom: 0px;
}

.node-provider .node-title {
	color: #0C233E;
	font-size: 16px;
	font-weight: 600;
	margin-bottom: 2px;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
}

.node-provider .field-name-field-provider-services {
	margin: 8px 0 8px 0;
}


.node-provider .adr {
	line-height:1.3rem;
	font-size:13px;
	color:#575756;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
}

.node-provider .adr .fn {
	line-height:1.3rem;
	font-size:13px;
	color:#575756;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	font-weight:600;
}

img.sponsor {
	display:inline;
	float:left;

}

.sibgroup {
	margin-top: -16px;
}

.biglottery {
	margin-top: -28px;
	margin-left:20px
}

.nationallottery {
	margin-top: 2px;
	margin-left:20px;
}

@media only screen and (min-width: 40.063em) {
	.contain-to-grid .top-bar {
		max-width: 67.5rem;
	}	
}

@media only screen and (max-width: 40em) {
	.selectBox-dropdown {
		width: 100%;
		min-width: 100%;
		max-width: 100%;
	}
}

@media only screen and (min-width: 64.063em) {
.large-9.large-push-3.main.columns {
	padding-left: 1.5rem !important;
	padding-right: 0;
}
}

input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea {
	background-color: #F1F1F1;
	border: 1px solid #B6B6B5;
	color: #575756;
	font-size: 16px;
	box-shadow: 0px 0px 0px #fff;
}

#user-register-form button, #edit-actions {
	float: left;
	clear: left;
}
#provider-page {
	min-height: 200px;
}
#provider-consultants .view-consultants .views-field-picture img {
	width: 100px;
}
#provider-consultants .view-consultants .views-field-picture {
	width: 100px;
	height: auto;
	overflow: hidden;
}
#provider-consultants .view-consultants .views-row {
	float: left;
	clear: left;
	width: 100%;
	margin-right: 15px;
	margin: 0 0 20px 0;
	height: auto;
	max-height: auto;
	overflow: hidden;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	padding-bottom: 0px;
	border-bottom: 0px;
}
#provider-consultants .view-consultants .views-field-name {
	color: #000;
	text-transform: none;
	font-size: 16px;
	font-weight: 600 !important;
	margin: 10px 0;
}
#provider-consultants .view-consultants .views-field-name a {
	color: #000;
}

#provider-consultants .view-consultants .views-field-field-services {
	display: inline-block;
	margin-bottom: 5px;
	margin-top: 0px;
}
#provider-consultants .view-consultants .views-field-field-services div,
#provider-consultants .view-consultants .views-field-field-services ul {
	display: inline;
}
#provider-consultants .view-consultants .views-field-field-services ul li {
	margin-right: 4px;
}
#provider-consultants a.button {
	margin-top: 20px;
	position: relative;
	float: left;
	clear: left;
	left: 0;
	bottom: 0;
}
/*
.page-admin-people #user-register-form .field-name-field-account-type {
	display: none;
}
*/
.page-admin-people #user-register-form .field-name-field-organisation-name {
	display: none;
}
.field-type-node-reference {
	float: left;
	clear: left;
}
.node-form .vertical-tabs {
	float: left;
	clear: left;
	width: 700px;
	max-width: 100%;
}

.field-name-field-provider-services {
	margin: 8px 0 15px 0;
}
table.fs-openings {
	width: 100% !important;
}
.fs-embed .fs-openings-month-ct {
	width: 100% !important;
}
.section-book-11-session article {
	padding: 0 15px 15px 15px;
	background-color: #FAFAFA;
}
.section-book-11-session article .body {
	background-color: #fff;
	padding: 15px;
}
.section-book-11-session article .field-name-field-introduction {
	margin: 15px 0;
	max-width: 520px;
}
.section-book-11-session h1.node-title {
	background: #fff;
	margin: 0px -15px 20px -15px;
	padding: 0 15px;
}
.fs-embed .fs-instructions {
	font-size: 16px !important;
}
.fs-booking-choices > ul > li > a {
	display: inline-block;
	background: #EDEDED url('../images/selectboxArrow.png') no-repeat right 50%;
	border: 1px solid #575656;
	height: 30px;
	line-height: 30px;
	width: auto;
	max-width: 100%;
	min-width: 335px;
	color: #575656;
	font-size: 16px;
	font-weight: 500;
	text-decoration: none;
	padding-left: 15px;
}
.fs-booking-choices > ul > li > a:hover {
	font-size: 16px;
	font-weight: 500;
	text-decoration: none;
	color: #000;
}
.fs-service-price {
	display: none;
}
.fs-option-summary p{
	margin-top: 20px;
}
#fs-main .fs-booking-state {
	margin-bottom: 40px;
	padding-bottom: 20px;
	border: 0px;
}
.fs-embed .fs-booking-state th {
	color: #0C233E;
	font-size: 18px;
	font-weight: 600;
}
.fs-change {
	display: inline-block !important;
	padding: 5px 10px !important;
	font-weight: 500 !important;
	text-transform: uppercase !important;
	color: #0C233E !important;
	font-size: 16px !important;
	background-color: #ADD1FB !important;
	text-decoration: none !important;
	margin-left: 15px !important;
}
.fs-change:hover {
	background-color: #000 !important;
	color: #fff !important;
}
.fs-primary-description p {
	margin: 15px 0;
}
#fs-main .fs-booking-state tbody {
	border: 0px;
}
.fs-booking-date {
	background-color: #fff !important;
}
.fs-embed .fs-booking-state th {
	border: 0px;
}
.fs-openings-title > table {
	float: right;
	margin-right: 15px;
}
.fs-embed .fs-booking-state th {
	padding-top: 5px;
}

#author, .view-news .views-field-name {
	color: #000;
	font-weight: 600 !important;
	margin: 15px 0 15px 0;
	text-transform: none;
}
.node-article .node-title, .view-news .views-field-title, .view-news .views-field-title a {
	color: #328BF6;
	font-weight: 500;
	font-size: 24px;
	line-height: 1.2;
}
.field-name-field-data-protection-message, #edit-field-introductory-message,
#edit-field-introductory-message-dt, #edit-field-introductory-message-fu   {
	float: left;
	clear: left;
	width: 100%;
	font-size: 12px;
	line-height: 1.5;
	padding: 10px;
	color: #575756;
	background-color: #DDEDFD;
	margin-top: 15px;
}
#edit-field-introductory-message-fu {
	margin-top: 0px;
	margin-bottom: 15px;
}
#edit-field-introductory-message-fu p {
	margin-bottom: 0px;
}
#date {
	margin: 15px 0;
	text-transform: uppercase;
	color: #666;
	font-weight: 600;
}
.node-article .node-title, .view-news .views-field-title {
	margin-bottom: 15px;
}
.view-news .views-row {
	width: 100%;
	max-width: 780px;
}
.view-news .views-field-body {
	margin-top: 15px;
}
.fs-embed div.fs-no-openings {
	font-size: 16px !important;
	-moz-border-radius: 0px !important;
	-webkit-border-radius: 0px !important;
	border-radius: 0px !important;
	background: none repeat scroll 0 0 rgba(249, 249, 249, 0.9) !important;
	font-style: normal !important;
	color: #0C233E !important;
}
.fs-embed .fs-openings th {
	border: 0px;
	color: #0C233E;
}
.fs-embed .fs-openings th.fs-openings-title tbody {
	border: 0px;
}
.fs-embed .fs-openings .fs-openings-days th {
	color: #0C233E;
	background-color: #fff;
}
.fs-embed tr.fs-booking-service td {
	padding-bottom: 8px !important;
}
.fs-embed .fs-controls {
	text-align: left;
}
.fs-embed form .fs-booking-fields {

}
.fs-embed form .fs-booking-fields th {
	text-align: left;
	width: 100%;
	float: left;
	clear: left;
	background-color: #fff;
	padding: 15px;
	color: #575756;
	font-size: 16px;
	font-weight: 500;
	border: 0px;
}
.fs-embed form .fs-booking-fields td {
	text-align: left;
	width: 100%;
	float: left;
	clear: left;
	background-color: #fff;
	padding: 0 15px;
}
.fs-embed form .fs-instructions {
	font-size: 12px !important;
	margin-top: 5px !important;
}
.fs-controls input[type="submit"] {
    background-color: #ADD1FB;
    border: medium none;
    color: #0C233E;
    cursor: pointer;
    display: inline-block;
    font-family: "proxima-nova",Helvetica,Arial,sans-serif;
    font-size: 1rem;
    font-weight: normal !important;
    line-height: normal;
    margin: 15px 0;
    padding: 10px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: background-color 300ms ease-out 0s;
}
.fs-controls input[type="submit"]:hover {
	background-color: #000;
	color: #fff;
}

#diagnostic-node-form .multipage-controls-list #edit-actions,
#diagnostic-node-form #edit-actions,
#application-node-form .multipage-controls-list #edit-actions,
#application-node-form #edit-actions {
	float: right;
	margin: 15px 0 0 0;
}
#diagnostic-node-form .multipage-controls-list #edit-actions button,
#diagnostic-node-form #edit-actions button,
#application-node-form .multipage-controls-list #edit-actions button,
#application-node-form #edit-actions button {
	float: right;
	padding: 20px 25px 20px 25px;
	color: #0C233E;
    font-family: "proxima-nova",Arial,Helvetica,sans-serif;
    font-size: 17px;
    font-weight: 400 !important;
    text-shadow: 0 0 0 #FFFFFF;
    text-transform: uppercase;	
	margin-left: 15px;
	background-color: #ADD1FB;
}
#diagnostic-node-form .multipage-controls-list #edit-actions button#edit-delete,
#diagnostic-node-form #edit-actions button#edit-delete,
#application-node-form .multipage-controls-list #edit-actions button#edit-delete,
#application-node-form #edit-actions button#edit-delete {
	background-color: #B2B2B2;
	display: none;
}
#diagnostic-node-form .multipage-controls-list #edit-actions button#edit-delete:hover,
#diagnostic-node-form #edit-actions button#edit-delete:hover,
#application-node-form .multipage-controls-list #edit-actions button#edit-delete:hover,
#application-node-form #edit-actions button#edit-delete:hover {
	background-color: #FF0000;
}
#diagnostic-node-form .multipage-controls-list #edit-actions button#edit-submit,
#diagnostic-node-form #edit-actions button#edit-submit,
#application-node-form .multipage-controls-list #edit-actions button#edit-submit,
#application-node-form #edit-actions button#edit-submit {
	background-color: #B2B2B2;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

/* Diagnostic Report */

#diagnostic-summary {
	background: #F9F9F9;
	font-size: 15px;
	line-height: 1.5;
	margin-bottom: 15px;
	color: #000;
}
#diagnostic-summary p {
	font-size: 14px;
	color: #403E39;
	margin: 15px 0;
}
#diagnostic-summary h3 {
	margin-bottom: 25px;
	margin-top: 10px;
	font-size: 28px;
	font-weight: 600;
	color: #000;
}
.field-name-field-name-role, .field-name-field-org-company-name {
	display: inline;
	font-weight: 600;
}
.node-diagnostic .panel {
	border: 0px;
	padding: 0px;
	margin: 0;
}
.node-diagnostic {
	padding: 15px;
	background-color: #F9F9F9;
}

.node-diagnostic .field-name-field-address {
	width: auto;
	float: right;
	
}

#diagnostic-bridge {
	margin: 15px 0 0 0;
	padding: 30px 15px 25px 15px;
	overflow: hidden;
}
.node-diagnostic .spacer {
	height: 40px;
	clear: both;
}
#bridge-diagram {
	width: 460px;
	max-width: 100%;
	margin: 0 auto;
}
.bridge-block {
	width: 150px;
	height: 150px;
	background-color: #EDEDED;
	position: relative;
	display: inline-block;
	margin-right: -1px;
}
.bridge-block.three, .bridge-block.six {
	border-right: 0px;
}
.bridge-block.blank {
	background-color: #FFFFFF;
	background-color: #FFFFFF;
}
.bridge-block .fill {
	vertical-align: bottom;
	width: 100%;
	position: absolute;
	bottom: 0px;
}
#financial-performance-block .fill,
.fin-perf .square-tint {
	background-color: #2668B9 !important;
	-webkit-print-color-adjust: exact;
}
#quality-impact-block .fill,
.qual-imp .square-tint {
	background-color: #DD43CE !important;
	-webkit-print-color-adjust: exact;
}
#financial-control-block .fill,
.fin-cont .square-tint {
	background-color: #00A173 !important;
	-webkit-print-color-adjust: exact;
}
#governance-leadership-block .fill,
.gov-lead .square-tint {
	background-color: #F9C32B !important;
	-webkit-print-color-adjust: exact;
}
#market-potential-block .fill,
.mark-pot .square-tint {
	background-color: #DD4C2C !important;
	-webkit-print-color-adjust: exact;
}
.square-tint {
	height: 21px;
	width: 21px;
}
#bridge-legend table {
	border: 0px;
	margin: 0 25px 25px 0;
	font-size: 12px;
	color: #000;
	width: 100%;
}
#bridge-legend table tbody {
	border-top: 0;
}

#bridge-legend table tr:nth-of-type(2n) {
	background-color: transparent;
}
#bridge-legend table tr th, #bridge-legend table tr td {
	color: #000000;
    font-size: 14px;
    padding: 5px;
}
#bridge-legend table tr td.square {
	padding-left: 0px;
}
#bridge-legend table tr td.title {
	padding-right: 20px;
}
#bridge-legend table tr td.perc {
	text-align: right;
	color: #000;
	font-weight: 600;
}
#bridge-legend table tr{
	border-bottom: 1px solid #E2E2E2;
}
#bridge-legend table tr:first-child {
	border-top: 1px solid #E2E2E2;
}
#bridge-legend {
	width: 50%;
	float: left;
	height: 
}
#overall-score {
	width: 35%;
	text-align: center;
	background-color: #0C233E;
	padding: 15px 20px;
	float: left;
	height: 100%;
	margin: 0 0 0 15%;
	line-height: 1;
}
#bridge-figures {
	float: left;
	width: 100%;
	clear: both;
	height: 160px;
}
.overall-score-big {
	font-size: 100px;
	color: #FFF;
	display: inline;
	font-weight: 700;
}
.smaller-perc {
	color: #FFF;
	font-size: 50px;
	font-weight: 700;
}
.overall-title {
	text-align: center;
	font-size: 18px;
	font-weight: 700;
	text-transform: uppercase;
	color: #FFF;
	margin-top: 0px;
	letter-spacing: 1px;
}
#areas-detail {
	padding: 20px 15px 15px 15px;
	overflow: hidden;
}
.chart-overlay-contain {
	position: relative;
	width: 200px;
	height: 200px;
}
.area-chart-overlay {
	position: absolute;
	z-index: 100;
	height: 100%;
	width: 100%;
	text-align: center;
	padding: 50px 50px;
	top: 0px;
	left: 0px;
	vertical-align: middle;
}
.area-score-big {
	font-size: 40px;
	font-weight: 700;
	color: #000;
	margin-top: 30%;
	margin-left: 6%;
}
.area-smaller-perc {
	font-size: 20px;
	color: #989898;
	font-weight: 500;
}
.area-all {
	float: left;
	clear: left;
	width: 100%;
	border-top: 1px solid #C6C6C6;
	padding: 30px 0;
}
.area-chart-individual {
	width: 200px;
	float: left;
	margin-right: 40px;
}
.area-text {
	float: left;
	width: 400px;
}
.area-text h3 {
	font-size: 18px;
	font-weight: 700;
}
.area-description, .area-description p {
	line-height: 1.5;
	font-size: 14px;
	color: #403E39;
	margin: 0 0 15px 0;
}
.area-message {
	font-size: 14px;
	line-height: 1.5;
	color: #000;
	background-color: #C6C6C6;
	padding: 10px;
}
.governance-leadership .area-message {
	background-color: #FEF5DD;
}
.marketpotential .area-message {
	background-color: #F9E2DD;
}
.financialcontrol .area-message {
	background-color: #D6F0E9;
}
.financialperformance .area-message {
	background-color: #DCE7F4;
}
.quality-impact .area-message {
	background-color: #F9E1F7;
}
#weakest {
	float: left;
	clear: left;
	width: 100%;
	overflow: hidden;
	margin-top: 15px;
	padding: 15px;
	font-size: 13px;
	line-height: 1.5;
	color: #000;
}
#weakest > p {
	font-size: 14px;
	line-height: 1.5;
	color: #000;
	font-weight: 600;
}
#weakest > ul {
	list-style: none;
	margin-left: 0px;
}
#weakest > ul li {
	list-style-type: none;
	list-style-image: none;
	margin-left: 0;
	padding: 8px 0;
	border-bottom: 1px solid #DFDFDF;
	font-size: 14px;
	line-height: 1.5;
	color: #403E39;
}
#edit-report {
	float: left;
	clear: left;
	width: 100%;
	overflow: hidden;
	margin: 25px 0;
}

.print_html, .print_mail, .print_pdf, .print_epub {
	margin-right: 10px;
	margin-left: 0px;
}
.print_html a, .print_mail a, .print_pdf a, .print_epub  a {
	display: inline-block;
	width: auto;
	padding: 5px 10px;
	background-color: #add1fb;
	color: #000;
	font-size: 12px;	
	font-family: "proxima-nova", Verdana, Geneva, sans-serif;
	font-weight: 500;
	line-height: 18px;
	transition: background-color 300ms ease-out 0s;
}
.printlinks {
	margin-top: 10px;
}
.print_html a:hover, .print_mail a:hover, .print_pdf a:hover, .print_epub  a:hover {
	background-color: #0C233E;
	color: #fff;
	text-decoration: none;
}

.jumplist {
	width: 100%;
	border-top:3px solid #FFF;
	height: 40px;
	float: left;
	clear: both;
	margin: 20px 0;
	padding: 0;
	font-family: "proxima-nova-condensed", Verdana, Geneva, sans-serif;
	font-weight: 600;
	background-color: #D6E8FD;
}
.jumplist.bar {
	border-top: 0;
	height: 45px;
	margin: 0 0 20px 0;
}
.jumplist li {
	list-style-type: none;
	list-style-image: none;
	float: left;
	width: 11.1%;
	text-align: left;
	padding: 0 5px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;	
	background-color: #D6E8FD;
}
.jumplist.bar li {
	width: 14.285%;
	text-align: center;
	padding: 0 0;
	line-height: 45px;
	border-right: 1px solid #fff;
	text-transform: uppercase;
}
#funding-nav.jumplist li {
	width: 10%;
}
.jumplist.bar .step-report {
	border-right: 0;
}
.block-block-3, .block-block-8 {
	float: left;
	clear: left;
	width: 100%;
}
.jumplist a {
	display: block;
	text-align: left;
	margin-top: -18px;
	font-size: 10px;
	color: #1C2229;
	text-align: center;
	background-color: #D6E8FD;
}
.jumplist.bar a {
	margin-top: 0px;
	font-size: 18px;
	color: #000;
	text-align: center;
}
.jumplist.bar .step-report a {
	padding-left: 34px;
	font-size: 14px;
	background: transparent url(../images/report-icon-normal.png) no-repeat 10px 50%;
	
}
.jumplist a br {
	line-height: 5px;
}
.jumplist.bar a br {
	line-height: 45px;
}
.jumplist a:hover, .jumplist a.active, .jumplist.bar .step-report a:hover, .jumplist.bar .step-report a.active {
	color: #D6E8FD;
	text-decoration: none;
	background-color: #0C233E;
}
.jumplist.bar .step-report a:hover, .jumplist.bar .step-report a.active {
	background-image: url('../images/report-icon-active.png');
}

article.node-diagnostic {
	float: left;
	clear: left;
}
.node a.button, 
.flag-submit-diagnostic-report a.flag, 
.flag-submit-funding-application- a.flag, 
a#edit-cancel,
button#edit-submit-dialog, 
button#edit-cancel-dialog,
#funding-application-node-form .button.grey,
button.ajax-processed {
   background: #b64caa !important;
    color: #f9e1f6 !important;
    font-family: "proxima-nova","Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif !important;
    font-size: 13px !important;
    font-weight: 400 !important;
    text-transform: uppercase !important;
	padding: 1.0625rem 2rem 1rem;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: background-color 300ms ease-out 0s;
}
.flag-submit-diagnostic-report a.flag:hover,
.node a.button:hover,
.flag-submit-funding-application- a.flag:hover,
a#edit-cancel:hover,
button#edit-submit-dialog:hover, 
button#edit-cancel-dialog:hover,
#funding-application-node-form .button.grey:hover,
button.ajax-processed:hover {
	background-color: #82357a !important;
	text-decoration: none !important;
}
#submit-report {
	padding-left: 0;
	padding-right: 0;
}
#funding-application-node-form .vertical-tabs,
#application-node-form .vertical-tabs {
	clear: both;
}
#funding-application-node-form p,
#funding-application-node-form ol a,
#funding-application-node-form p a {
	font-size: 16px;
	font-weight: 500;
	line-height: 1.5;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	color: #575756;
}
#funding-application-node-form ol {
	margin-left: 15px;
	font-size: 16px;
	font-weight: 500;
	line-height: 1.5;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	color: #575756;	
}
#funding-application-node-form .fieldset-description {
	font-size: 16px;
	font-weight: 500;
	line-height: 1.5;
	color: #000;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	padding: 0px 15px;
	margin-bottom: 25px;
}

#funding-application-node-form {
	float: left;
	width: 100%;
	clear: left;
	padding: 30px 15px;
	background-color: #F9F9F9;
}
#funding-application-node-form .form-item {
	background-color: #fff;
	padding: 15px;
}
#funding-application-node-form .vertical-tabs {
	display: none;
}
#field-introduction-and-download-add-more-wrapper h2 {
	line-height: 1.3;
	margin-bottom: 20px;
	color: #0C233E;
	font-weight: 700;
	font-size: 18px;	
	max-width: 400px;
}
#funding-application-node-form #edit-field-file-upload .description {
	display: none;
}
button.ajax-processed {
	
}
input[type="file"] {
	width: 340px;
	font-size: 12px;
	max-width: 80%;
}
#edit-submit, #edit-submit.secondary, #edit-delete {
   background: #ADD1FB !important;
    color: #0C233E !important;
    font-family: "proxima-nova","Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif !important;
    font-size: 17px !important;
    font-weight: 500 !important;
    text-transform: uppercase !important;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}
#edit-submit:hover, #edit-submit.secondary:hover {
	background-color: #0C304F !important;
	text-decoration: none !important;
	color: #fff !important;
}
#funding-application-node-form #edit-actions {
	float: right;
}
#edit-delete:hover {
	background-color: #DD4C2C !important;
	text-decoration: none !important;
	color: #fff !important;
}
.node-funding-application {
	float: left;
	clear: left;
	width: 100%;
	background-color: #FFF;
	padding: 15px;
}
.node-funding-application .article-inner {
	background-color: #FAFAFA;
	padding: 30px 15px 15px 15px;
	float: left;
	clear: left;
	width: 100%;	
}
.node-funding-application .funding-wrapper {
	background-color: #FFF;
	padding: 30px 15px 15px 15px;
	float: left;
	clear: left;
	width: 100%;	
}
.node-funding-application .flag-wrapper {
	float: left;
	clear: left;
	width: 100%;
	display: block;
	text-align: right;
	margin-top: 40px;
}

.node-funding-application .field-name-field-file-upload {
	padding: 15px;
	background-color: #fff;
	width: 80%;
}
.flag-submit-funding-application- a.flag,
#funding-application-node-form .button.grey {
	margin-top: 30px !important;
	background-color: #ADD1FB !important;
	font-size: 17px !important;
	color: #0C233E !important;
}
#funding-application-node-form .button.grey {
	margin-top: 15px !important;
}
.flag-submit-funding-application- a.flag:hover,
#funding-application-node-form .button.grey:hover {
	background-color: #0C233E !important;
	color: #FFF !important;
}
.node-funding-application #edit-report {
	margin-bottom: 0px;
	margin-top: 10px;
	width: 20%;
	float: left;
}
.node-funding-application #edit-report a.button {
	margin-top: 0px !important;
	background-color: #ADD1FB !important;
	font-size: 17px !important;
	color: #0C233E !important;
	padding-top: 5px !important;
	padding-bottom: 5px !important;
}
.node-funding-application #edit-report a.button:hover {
	background-color: #0C233E !important;
	color: #FFF !important;
}

#dashboard {
	padding: 15px;
	background-color: #F9F9F9;
	float: left;
	width: 100%;
}
#dashboard > h2, .dashpanel h2 {
	font-size: 18px;
	margin: 0 0 15px 0;
	font-weight: 600;
	color: #0C233E;
}
#dashboard > h2 {
	margin: 0 0 15px 15px;
}
.dashpanel h2 {
	margin-bottom: 20px;
	padding-bottom: 20px;
	border-bottom: 1px solid #B6B6B5;
}
.dashpanel {
	background-color: #fff;
	padding: 20px;
	float: left;
	width: 100%;
	margin-bottom: 30px;
	position: relative;
}
.profile-label {
	width: 100px;
	float: left;
	line-height: 30px;
	font-size: 14px;
	display: inline-block;
	clear: both;
	color: #000;
}
.textbox {
	float: left;
	line-height: 30px;
	font-size: 14px;
	background-color: #F9F9F9;
	border: 1px solid #E4E4E4;
	display: inline-block;
	width: 280px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0 8px;
	color: #000;
}
.profile-field {
	margin-bottom: 5px;
	width: 400px;
	float: left;
	clear: left;
}
#profile-info .user-picture {
	margin: 0 0 0 0;
}
.dashpanel.half {
	width: 49%;
	float: left;
	height: 300px;
}
.dashpanel.half.left {
	margin-right: 2%;
}
.dashpanel.onethird {
	width: 32%;
	float: left;
	height: 410px;
	padding-left: 10px;
	padding-right: 10px;
}
.dashpanel.onethird.left,
.dashpanel.onethird.middle {
	margin-right: 2%;
}
.green > h2,
h2.tick {
	padding-left: 40px;
	background: transparent url('../images/tick.png') no-repeat left 50%;
	margin-bottom: 20px;
	background-size: 25px 25px;
	font-size: 18px;
	font-weight: 700;
	padding-bottom: 0px;
	border-bottom: 0px none;	
}
h2.cross,
.red > h2 {
	padding-left: 40px;
	background: transparent url('../images/cross.png') no-repeat left 50%;
	margin-bottom: 20px;
	background-size: 25px 25px;
	font-size: 18px;
	font-weight: 700;	
	padding-bottom: 0px;
	border-bottom: 0px none;
}
.onethird .darkbold {
	min-height: 145px;
}
.darkbold {
	padding: 10px 8px;
	background-color: #D1D1D1;
	font-size: 14px;
	color: #fff;
}
.green .darkbold{
	background-color: #04B57A;
}
.red .darkbold {
	background-color: #DD4C2C;
}
.darkbold p {
	font-weight: 600;
	line-height: 1.4;
	margin-bottom: 0px;
	color: #fff;
}
.subtext {
	margin-top: 15px;
}
.subtext p {
	font-size: 14px;
}
.onethird .subtext p {
	max-width: 240px;
}
.dashpanel.half .subtext p {
	max-width: 300px;
}
.dashpanel a.button.big {
	text-transform: uppercase;
	position: absolute;
	bottom: 15px;
	margin-bottom: 0px;
	left: 15px;
}
#profile-edit-link {
	width: auto;
	float: right;
}
#profile-edit-link .button.grey {
	color: #fff;
	padding: 10px 20px;
	background-color: #B2B2B2;
}
#profile-edit-link .button.grey:hover {
	background-color: #999;
}
#profile-edit-link .button.blue {
	color: #0C233E;
	padding: 10px 20px;
	background-color: #ADD1FB;
	font-weight: 600;
	font-size: 21px;
}
#profile-edit-link .button.blue:hover {
	background-color: #0C233E;
	color: #FFF;
	text-decoration: none;
}
.dashpanel#funding-status {
	min-height: 300px;
}
.page-user .main ul.button-group,
.page-user .main h2.element-invisible {
	display: none;
}
.page-user .main .profile {
	margin-top: 0;
}
h1#page-title {
	margin-top: 0;
	font-size: 28px;
	font-weight: 600;
	color: #328BF6;
}
.page-user .main .profile h1#page-title {
	margin-left: 30px;
}
.view-connected-providers {
	float: left;
	width: 100%;
	max-width: 440px;
}
.view-connected-providers img {
	width: 188px;
}
.view-connected-providers .user-picture {
	width: 188px;
	height: 125px;
	overflow: hidden;
}
.view-connected-providers .views-row {
	float: left;
	clear: none;
	width: 188px;
	margin-right: 15px;
	margin: 0 15px 15px 0;
	height: 215px;
	max-height: 215px;
	overflow: hidden;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	border-bottom: 0px;
	padding-bottom: 0px;
}
.view-connected-providers .views-field-name {
	color: #000;
	text-transform: none;
	font-size: 16px;
	font-weight: 700 !important;
	margin: 10px 0;
}
#document-library > h2,
.view-downloads .view-header h2,
.field-name-field-related-content .field-label {
	padding-bottom: 20px;
	border-bottom: 1px solid #000;
	margin-bottom: 20px;
    color: #000;
    font-family: "proxima-nova","Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
    font-weight: 600;
    line-height: 1.5;
	font-size: 22px;
	width: 100%;
}
.field-name-field-related-content {
	margin-bottom: 30px;
	width: 100%;
}
.view-document-library,
.view-downloads {
	float: left;
	width: 100%;
}
.view-document-library .views-row,
.view-downloads .views-row {
	width: 100%;
	float: left;
	clear: left;
}
.view-document-library .views-field-field-download,
.view-downloads .views-field-field-download {
	width: 60px;
	float: left;
	margin-right: 15px;
}
.view-document-library .views-field-field-download img,
.view-downloads .views-field-field-download img {
	width: 60px;
}
.view-document-library .views-field-field-download-1,
.view-document-library .views-field-field-download-1 div,
.view-downloads .views-field-field-download-1,
.view-downloads .views-field-field-download-1 div {

}
.view-document-library .views-field-field-download-2,
.view-document-library .views-field-field-download-2 div,
.view-downloads .views-field-field-download-2,
.view-downloads .views-field-field-download-2 div {
	font-size: 13px;
	color: #999;
	font-family: "proxima-nova-condensed", Arial, Helvetica, sans-serif;
	margin-top: 10px;
}
.view-document-library .views-field-field-download-1 img.file-icon,
.view-downloads .views-field-field-download-1 img.file-icon {
	display: none;
}
.view-document-library .views-field-field-download-1 .file,
.view-document-library .views-field-field-download-1 .file a,
.view-downloads .views-field-field-download-1 .file,
.view-downloads .views-field-field-download-1 .file a {
	font-weight: bold;
	color: #000;
}
span.file-size {
	font-size: 14px;
	color: #999;
	font-weight: normal;
}
.button.navy {
	background-color: #0C233E !important;
	color: #fff !important;
	font-size: 16px !important;
	padding: 22px 10px !important;
	text-decoration: none !important;
	height: 60px;
	width: 190px;
	max-width: 100%;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	text-align: center;
}
.button.navy:hover {
	background-color: #000 !important;
	text-decoration: none !important;
}
#funding-status .button.navy {
	padding-top: 11px !important;
}
#connected-providers .view-connected-providers .views-row {
	float: left;
	width: 100%;
	margin-bottom: 20px;
	border-bottom: 0px;
	padding-bottom: 0px;
	height: auto;
	max-height: auto;
}
#connected-providers .view-connected-providers .views-row .user-picture {
	width: 100px;
	margin: 0 20px 0 0;
	float: left;
	height: auto;
}
#connected-providers .view-connected-providers .views-row .user-picture img {
	width: 100px;
}
.main #connected-providers .view-connected-providers .views-row .views-field-title {
	font-size: 14px;
	font-weight: 500;
	font-style: italic;
	color: #999;
}
.main #connected-providers .view-connected-providers .views-row .views-field-title a {
	color: #999;
}
#provider-page {
	min-height: 250px;
}
#admin-menu-search {
	display: none;
}
.admin-menu #menubar nav {
	margin-top: 2px;
}
.admin-menu .block-search-api-page-search {
	top: 30px;
}
.flex-direction-nav a:before {

}

/* DIAGNOSTIC TOOL */


.bgnum {
	display: block;
	width: 36px;
	height: 36px;
	border-radius: 18px;
	color: #1C2229;
	background-color: #FFF;
	font-size: 22px;
	margin: 0 auto 0 auto;
	text-align: center;
}
.jumplist li a > br {
	clear: both;
}
.active .bgnum, a:hover .bgnum {
	color: #FFF;
	background-color: #374451;
}
.step-start {
	margin-left: -2px;
}
.ui-slider {
	border-bottom-right-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-left-radius: 0px;
	border-top-left-radius: 0px;
	margin: 15px 0;
}
.ui-widget-content {
	border: 1px solid #8E9092;
}
.ui-slider-range {
	background: #000 !important;
}
.ui-slider .ui-slider-handle {
	border-color: #0C304F !important;
	background: #0C304F !important;
	height: 30px !important;
	width: 30px !important;
	
	-moz-border-radius-topright: 15px !important; 
	-moz-border-radius-topleft:15px !important; 
	-moz-border-radius-bottomleft:15px !important; 
	-webkit-border-top-right-radius: 15px !important; 
	-webkit-border-top-left-radius: 15px !important; 
	-webkit-border-bottom-left-radius: 15px !important;  
	border-top-right-radius: 15px !important; 
	border-top-left-radius: 15px !important;	
	border-bottom-left-radius: 15px !important;	 
	
	transform:rotate(45deg);
	-ms-transform:rotate(45deg); /* IE 9 */
	-webkit-transform:rotate(45deg); /* Opera, Chrome, and Safari */	
}
.multi-slider .ui-slider .ui-slider-handle {
	border-color: #0C304F !important;
	background: #0C304F !important;
	height: 30px !important;
	width: 30px !important;
	border-top-left-radius: 0px !important;
	border-top-right-radius: 0px !important;
	border-bottom-left-radius: 0px !important;
	border-bottom-right-radius: 0px !important;
	transform: none;
	-ms-transform: none;
	-webkit-transform: none;
}
.ui-slider-horizontal .ui-slider-handle {
	top: -7px !important;
}
.ui-slider-horizontal {
	height: 18px;
}
.ui-slider .ui-slider-handle:focus {
	outline: none;
}
.icheckbox_square {
	margin-left: 15px !important;
	margin-top: -2px !important;
	background-color: #fff !important;
}
.teardrop {
	width: 30px;
	height: 30px;
	background-color: #0C304F;

	-moz-border-radius-topright: 15px; 
	-moz-border-radius-topleft:15px; 
	-moz-border-radius-bottomleft:15px; 
	-webkit-border-top-right-radius: 15px; 
	-webkit-border-top-left-radius: 15px; 
	-webkit-border-bottom-left-radius: 15px;  
	border-top-right-radius: 15px; 
	border-top-left-radius: 15px;	
	border-bottom-left-radius: 15px;	 
	
	transform:rotate(45deg);
	-ms-transform:rotate(45deg); /* IE 9 */
	-webkit-transform:rotate(45deg); /* Opera, Chrome, and Safari */
}
ul.slider-stages {
	margin: 10px 0 15px 0;
	padding: 0;
	float: left;
	clear: both;
	width: 100%;
	overflow: hidden;
}
.form-type-slider .description {
	background-color: #FAFAFA;
	float: left;
	margin: -15px 0px 0px 0;
}
.form-type-slider {
	
}
ul.slider-stages li {
	display: block;
	float: left;
	list-style-image: none;
	list-style-type: none;
	width: 25%;
	margin: 0;
	vertical-align: top;
	text-align: left;
	padding: 10px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	font-size: 11px;
	line-height: 1.5;
	color: #000;
}
ul.slider-stages.triple li {
	width: 33%;
}
.node-form .vertical-tabs {
	clear: both;
}
.quotable {
	width: 480px;
	max-width: 100%;
	background-color: #BADAFC;
	padding: 25px 20px;
	float: left;
	clear: left;
	margin: 20px 0;
	color: #000;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	font-size: 17px;
	font-weight: 500;
	line-height: 1.5;
}
.multipage-pane-wrapper > .form-wrapper, .field-group-div {
	float: left;
	clear: left;
}
.node-form .multipage-pane-wrapper .field-type-markup {
	padding-left: 0px;
	padding-right: 0px;
}
.node-form .field-type-markup p, .node-form .field-type-markup h2 {
	padding-left: 15px;
	padding-right: 15px;
}

.little-chart {
	width: auto;
	display: inline-block;
	margin: 0 10px 10px 0;
}
.big-chart {
	width: auto;
	display: inline-block;
	margin: 0 10px 10px 0;
}
.panel.white {
	background-color: #fff;
}
.page-node-edit.node-type-diagnostic ul.button-group,
.page-node-edit.node-type-eligibility ul.button-group,
.page-node.node-type-eligibility ul.button-group,
.page-node-edit.node-type-funding-application ul.button-group,
.page-node.node-type-funding-application ul.button-group,
.page-node-edit.node-type-application ul.button-group,
.page-node.node-type-application ul.button-group {
	display: none;
}
h2.multipage-pane-title {
	font-size: 28px;
	font-weight: 600;
	margin-bottom: 18px;
	padding: 0px 28px;
	color: #328BF6;
	line-height: 1.3;
}
.field-widget-markup h2 {
	color: #328BF6;
	font-weight: 600;
}

.node-form p {
	font-size: 16px;
	font-weight: 500;
	line-height: 1.5;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	color: #575756;
}
.node-form .fieldset-description {
	font-size: 16px;
	font-weight: 500;
	line-height: 1.5;
	color: #575756;
	font-family: "proxima-nova", Arial, Helvetica, sans-serif;
	padding: 0px 15px;
	margin-bottom: 25px;
}

.node-form {
	float: left;
	width: 100%;
	clear: left;
	padding: 10px 0;
	background-color: #FFFFFF;
}
.multipage-pane-wrapper {
	background-color: #FAFAFA;
	padding: 15px 15px;
	float: left;
	width: 100%;
	clear: left;	
}

.group-survey-statements > .form-wrapper {
	padding: 15px;
	background-color: #fff;
	margin-bottom: 15px;
}
.multipage-pane-wrapper > .form-wrapper, .field-type-list-boolean, .field-type-datetime {
	padding: 15px;
	background-color: #fff;
	margin-bottom: 15px;
	width: 100%;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
.multipage-pane-wrapper > .form-wrapper.field-type-markup {
	background-color: transparent;
}
.node-form .form-item {
	margin-top: 0;
	margin-bottom: 0;
}
.node-form .form-item .form-item {
	margin-top: 0.85em;
	margin-bottom: 0.85em;
}
.form-item > label {
	font-size: 18px;
	font-weight: 700;
	margin-bottom: 18px;
	color: #0C233E;
	line-height: 1.2;
}
.form-type-radio > label {
	font-size: 16px;
	font-weight: 500;
	margin-left: 20px;
	margin-bottom: 0;
	color: #575756;
}
.form-item-field-address-und-0-name .description {
	display: none;
}
.field-type-list-boolean .form-type-checkbox > label {
	font-size: 18px;
	font-weight: 700;
	color: #0C233E;
	line-height: 1.2;
}
.field-type-list-boolean .form-type-checkbox .icheckbox_square {
}

.multipage-button {
	float: right;
}
.multipage-controls-list {
	float: right;
	clear: both;
	margin-top: 15px;
	margin-left: 15px;
}
.multipage-controls-list input.form-submit {
    background-color: #ADD1FB;
    border: 0px none;
    border-radius: 0px;
    color: #0C233E;
    font-family: "proxima-nova", Arial, Helvetica, sans-serif;
    font-size: 17px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 20px 65px 20px 25px;
    text-shadow: 0 0 0 #FFFFFF;	
}
.multipage-controls-list input.form-submit:hover {
	opacity: 0.9;
}
.multipage-controls-list input.form-submit.multipage-link-next {
	background-image: url(../images/next-arrow.png);
	background-repeat: no-repeat;
	background-position: right 50%;
	margin-left: 15px;
}
.multipage-controls-list input.form-submit.multipage-link-previous {
	background-image: url(../images/previous-arrow.png);
	background-repeat: no-repeat;
	background-position: left 50%;
    padding: 20px 25px 20px 65px;
}
.form-item-field-address-und-0-delete-location {
	display: none;
}
input.form-text {
	background-color: #F1F1F1;
	height: 44px;
}
div.multi-slider {
	float: left;
	clear: both;
	padding: 15px;
	background-color: #fff;
}
div.multi-slider .field-widget-sliderfield {
	float: left;
	clear: left;
	width: 100%;
}
#edit-field-skills-marketing label,
#edit-field-skills-business-dev label,
#edit-field-skills-human-resources label,
#edit-field-skills-legal label {
	float: left;
	width: 210px;
	font-weight: 500;
	font-size: 16px;
	height: 40px;
	line-height: 40px;
	margin-bottom: 0px;
	color: #575756;
}
#edit-field-skills-marketing .sliderfield,
#edit-field-skills-business-dev .sliderfield,
#edit-field-skills-human-resources .sliderfield,
#edit-field-skills-legal .sliderfield {
	float: left;
	width: 430px;
	height: 40px;
}
#edit-field-multi-slider-stages ul.slider-stages {
	float: right;
	width: 430px;
}
#edit-field-multi-slider-stages ul.slider-stages li {
	font-size: 14px;
}


fieldset#edit-field-address-und-0,
.field-type-datetime fieldset {
	border: 0px;
	margin: 0 0;
	padding: 0;
	max-width: 100%;
}

fieldset#edit-field-address-und-0 legend,
.field-type-datetime fieldset legend {
	font-size: 18px;
	font-weight: 700;
	margin-bottom: 20px;
	color: #000;
}
fieldset#edit-field-address-und-0 .form-item label,
.field-type-datetime fieldset .form-item label {
	font-size: 16px;
	margin-top: 12px;
	color: #575756;
	font-weight: 500;
}
.form-type-checkbox label {
	font-size: 16px;
	margin-left: 20px;
	color: #575756;
	font-weight: 500;
}
.form-item .description {
	font-size: 12px;
	line-height: 1.5;
	padding: 10px;
	color: #575756;
	background-color: #DDEDFD;
}
.form-type-slider.form-item .description {
	background-color: #FAFAFA;
	color: #000;
}
.field-type-datetime .form-item .form-item {
	width: 30%;
	margin-right: 3%;
	float: left;
	margin-top: 0px;
}
.field-type-datetime .selectBox-dropdown {
	width: 150px;
	max-width: 150px;
	min-width: 100px;
	margin-right: 10px;
}
.field-type-datetime .form-item label {
	display: none;
}
#edit-important-info-wrapper {
	display: none;
}

.subgroup {
	float: left;
	clear: left;
	width: 100%;
	margin: 15px 0;
}
.subgroup .form-item label {
	font-size: 16px;	
}
.subgroup > h3 {
	padding: 8px;
	clear: left;
	float: left;
	width: 100%;
	color: #328BF6;
	line-height: 1.3;	
}
.subgroup .form-item {
	background-color: #fff;
	padding: 15px;
	float: left;
	clear: left;
	width: 100%;
}
#edit-field-balance-representation .description {
	width: 100%;
}

.ui-widget-content.sliderfield-container {
	border: 0px none;
	background: #DDEDFD;
}

.node-form .multipage-controls-list #edit-actions {
	float: right;
	margin: 0;
}
.node-form .multipage-controls-list #edit-actions button {
	float: right;
	padding: 20px 25px 20px 25px;
	color: #000000;
    font-family: "proxima-nova",Arial,Helvetica,sans-serif;
    font-size: 17px;
    font-weight: 600 !important;
    text-shadow: 0 0 0 #FFFFFF;
    text-transform: uppercase;	
	margin-left: 15px;
}
.node-form .multipage-controls-list #edit-actions button#edit-delete {
	background-color: #B2B2B2;
}
.node-form .multipage-controls-list #edit-actions button#edit-delete:hover {
	background-color: #FF0000;
}
.node-form .multipage-controls-list #edit-actions button#edit-submit {
	background-color: #B2B2B2;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

article.printer-friendly {
	width: 780px;
}

#report-links {
	margin-top: 30px;
}

.slider-blink {
	float: left;
	list-style: none;
	width: 100%;
	height: 8px;
	margin: 5px 0;
	/* Hidden for now! Could be reinstated. */
	display: none;
}
.slider-blink li {
	float: left;
	width: 7px;
	height: 7px;
	-moz-border-radius: 3.5px;
	-webkit-border-radius: 3.5px;
	border-radius: 3.5px;
	background-color: #D0D0D0;
	margin-right: 5px;
}
.slider-blink li.active {
	background-color: #95C7FB;
}
.node-eligibility .alert-box {
	padding: 25px;
}
.node-eligibility p, .node-eligibility h3 {
	color: #000;
}
.node-eligibility strong, .node-eligibility a {
	font-weight: 700;
}
.alert-box.success {
	background-color: #4CC08F;
	border-color: #4CC08F;
	color: #000;
}
#eligibility-node-form {
	float: left;
	width: 100%;
	clear: left;
	padding: 5px 20px 15px 20px;
	background-color: #F9F9F9;
}
#edit-field-years label,
#edit-field-months label {
	font-weight: 500;
	font-size: 15px;
}
#eligibility-node-form .form-item, #eligibility-node-form .subgroup {
	background-color: #fff;
}
#eligibility-node-form .subgroup {
	margin: 15px 0;
	float: left;
	clear: left;
}
#eligibility-node-form .subgroup > h3 {
	margin-top: 15px;
	padding-left: 15px;
	padding-top: 0;
	margin-bottom: 0;
	padding-bottom: 0;	
	font-size: 18px;
}
#eligibility-node-form .form-wrapper {
	float: left;
	clear: left;
	width: 100%;
}
#eligibility-node-form #edit-field-sector-und label,
#eligibility-node-form #edit-field-reach-und label {
	font-weight: 500;
	font-size: 14px;
}
#eligibility-node-form .vertical-tabs,
#eligibility-node-form #edit-actions {
	float: left;
	clear: left;
	width: 100%;
	max-width: 600px;
}
#eligibility-node-form .vertical-tabs {
	display: none;
}
#eligibility-node-form .subgroup .form-item {
	margin-top: 0;
	margin-bottom: 0;
}
#eligibility-node-form .form-item label {
	margin-bottom: 12px;
	font-size: 14px;
}
#eligibility-node-form input.form-text {
	margin-bottom: 0;
}
#eligibility-node-form .form-wrapper > .form-item {
	padding: 15px;
}
#eligibility-node-form .form-wrapper > .form-item label {
	font-size: 18px;
	font-weight: 600;
	line-height: 1.5;
	color: #000;
}	
#eligibility-node-form #edit-actions {
	float: right;
}
#eligibility-node-form #edit-actions button {
	padding: 20px 25px 20px 25px;
	color: #000000;
    font-family: "proxima-nova",Arial,Helvetica,sans-serif;
    font-size: 17px;
    font-weight: 600 !important;
    text-shadow: 0 0 0 #FFFFFF;
    text-transform: uppercase;	
	margin-left: 15px;
	float: right;
}
#eligibility-node-form #edit-actions button#edit-delete {
	background-color: #B2B2B2;
}
#eligibility-node-form #edit-actions button#edit-delete:hover {
	background-color: #FF0000;
}
#eligibility-node-form #edit-actions button#edit-submit {
	background-color: #B2B2B2;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}
.field-type-list-boolean .form-type-checkbox {

}
.field-type-list-boolean .form-type-checkbox label {

}
.field-type-list-boolean .form-type-checkbox .description {
	margin-top: 10px;

}
.main .view-resources .views-field-field-rating .description,
.field-name-field-rating .description {
	display: none;
}
.location .form-item input {
	width: 400px;
	max-width: 100% !important;
}
a.lexicon-term {
	font-weight: 600;
	border-bottom: 1px dotted #666;
	color: #000;
}
.body a.lexicon-term, .body a.lexicon-term:hover {
	text-decoration: none !important;
}

.main .view .view-header,
.main .view .view-content,
.main .view .view-filters {
	float: left;
	clear: left;
	width: 100%;
}

.alert-box.alert p {
	color: #fff;
}
.page-user .selectBox-dropdown-menu {
	min-width: 320px !important;
}
.date-clear-selectBox-dropdown-menu {
	min-width: 100px !important;
}
div.alert-box.warning {
	border-color: #E45E3A;
	border-width: 0px;
	background: #E45E3A url(../images/warning.png) no-repeat 30px 10px;
}
div.alert-box.warning a {
	color: #fff;
	text-decoration: underline;
}
#eligibility-warning {
	text-transform: uppercase;
	width: 100%;
	color: #fff;
	float: left;
	clear: left;
	text-indent: 65px;
	height: 50px;
	line-height: 50px;
	padding-top: 0px;
	padding-bottom: 0px;
}
#user-login .form-submit, #user-register-form .form-submit {
	float: right;
}
.page-user-login .large-9 > section, .page-user-register .large-9 > section {
	background: #FAFAFA;
	margin-bottom: 0px;
	float: left;
	clear: left;
	width: 100%;
}
.page-user-login .large-9 > section h2, .page-user-register .large-9 > section h2 {
	margin-left: 30px;
	font-size: 28px;
	margin-top: 30px;
	color: #0C233E;
}
#field-address-add-more-wrapper {
	position: relative;
}
#user-register-form .field-type-location fieldset legend {
	position: absolute;
	top: 15px;
	left: 15px;
	font-size: 20px;
}
#user-register-form .field-type-location .fieldset-wrapper {
	margin-top: 30px;
}
#user-login, #user-register-form {
	background: #FAFAFA;
	padding: 15px;
	float: left;
	clear: left;
	width: 100%;
}
#user-login .form-item, #user-register-form .form-item:not(.form-type-checkbox) {
	background: #FFF;
	padding: 15px;
}
#user-login .form-item > label:not(.option), #user-register-form .form-item label:not(.option) {
	font-size: 18px;
	margin-bottom: 12px;
	color: #0C233E;
}
#user-register-form #field-address-add-more-wrapper .form-item label {
	font-size: 16px;
}
#user-register-form #field-address-add-more-wrapper .form-item {
	margin: 10px 0;
}
#user-login .form-required {
	display: none;
}
#user-register-form .field-group-div {
	width: 100%;
}
#user-register-form .form-required {
	color: #0C233E;
}
#user-register-form .field-type-location {
	background: #fff;
}
.file-widget button.ajax-processed,
.image-widget button.ajax-processed,
.button.launcher {
   background-color: #ADD1FB !important;
    color: #0C233E !important;
    font-family: "proxima-nova","Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif !important;
    font-size: 17px !important;
    font-weight: 500 !important;
    text-transform: uppercase !important;
	padding: 5px 15px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: background-color 300ms ease-out 0s;
	margin-left: 30px;
}
.file-widget button.ajax-processed:hover,
.image-widget button.ajax-processed:hover,
.button.launcher:hover {
	background-color: #0C233E !important;
	color: #fff !important;
}
.button.launcher {
	margin-left: 0px;
	margin-bottom: 20px;
}
.form-type-managed-file > .description {
	margin-top: 10px;
}
#field-submission-add-more-wrapper p {
	font-size: 12px;
	color: #575756;
	margin-top: 15px;
}
aside section:first-child h2.block-title {
	margin-top: 0;
}
.search-api-page-results #backlink {
	font-size: 100%;
}
.search-api-page-results #backlink .search-performance-inner {
	display: inline-block;
	font-size: 16px;
	font-weight: 500;
	color: #000;
	background: #EDEDED;
	width: auto;
	padding: 10px;
}
.search-api-page-results #backlink .search-performance-inner strong {
	font-weight: 600;
}
.search-results li.search-result h3.title {
	color: #0C233E;
	font-size: 16px;
	font-weight: 600;
	margin-top: 0px;
}
.search-results li.search-result h3.title a {
	color: #0C233E;
	font-size: 16px;
	font-weight: 600;
}
.search-results .search-snippet-info {
	margin-left: 0px;
}
.search-results .search-snippet-info, .search-results .search-snippet-info p {
	color: #575756;
	font-size: 13px;
	font-family: "proxima nova", Arial, Helvetica, sans-serif;
	line-height: 1.5;
}
.search-image {
    float: left;
    width: 140px;
}
.search-results li.search-result {
	max-width: 100%;
	margin-bottom: 20px;
}
.block-block-10 p {
	margin: 0 30px 10px 30px;
}
img.logo {
	height: 85px;
}
#user-profile-form .form-item-pass .description:last-child {
	display: none;
}

.block-block-11 {
	background-color: #edf5fd;
}
.block-block-11 p {
	font-size: 14px;
	padding: 15px;
	color: #0c304f;
	font-family: "proxima-nova-condensed",Arial,Helvetica,sans-serif;
}
.block-block-11 p a {
	text-decoration: underline;
}
.sidebar section h2.block-title {
	margin-top: 0;
}

/* Tidy up node forms */

textarea {
	min-height: 150px;
}
.filter-guidelines-item {
	display: none !important;
}
html.js input.form-autocomplete {
	height: 24px;
	padding-top: 0;
	padding-bottom: 0;
	line-height: 24px;
}

.form-checkboxes .form-item, .form-radios .form-item {
	margin-top: 0.8em;
	margin-bottom: 0.8em;
}

@media all {
	.print-page-break	{ display: none; }
}

@media print {
	.print-page-break {
		page-break-after: always;
		display: block;
	}
}
.fivestar-static-item .form-item .description {
	display: none;
}
#guide.flexslider ul.slides {
	background-image: url(../images/guidebg.png);
	background-repeat: no-repeat;
	background-position: 0px 0px;
	background-size: cover;
	background-color: transparent;
}
.pdf-download {
	float: left;
	clear: left;
	width: 100%;
	margin: 10px 0 20px 0;
}
.pdf-download-link {
	color: #0c304f;
}
.view-related-resources {
	max-width: 100%;
}
.view-providers-directory .view-header .left {
	max-width: 100%;
}
.view-providers-directory .view-header .right {
	max-width: 100%;
}
fieldset.captcha {
	margin-top: 15px;
	float: left;
	clear: left;
}

/** FUNDING APPLICATION FORM (NEW) **/
    
.block-block-12	h1.page-title {
	text-align: center;
	background-color: #fafafa;
	padding: 8px;
	margin: 10px 0 10px 0;
	float: left;
	clear: left;
	width: 100%;
}
.node-application-form h2.multipage-pane-title {
	font-size: 24px;
}
.node-application-form .field-type-list-boolean > .form-item label {
    color: #000;
    font-size: 18px;
    font-weight: 600;
    line-height: 1.5;
	margin-left: 30px;
}
.node-application-form .field-type-list-boolean .form-type-checkbox .icheckbox_square {

}
.page-node-add-application .selectBox-dropdown-menu,
.node-type-application .selectBox-dropdown-menu {
    background: none repeat scroll 0 0 #f1f1f1;
    border: 1px solid #b2b2b2;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    max-height: 300px;
    min-height: 1em;
    overflow: auto;
    position: absolute;
    width: auto !important;
	min-width: 200px !important;
    z-index: 99999;
}
.node-application-form textarea {
	height: 350px;
}
.node-application-form .form-item-field-field-ap-impact-und-0-value textarea,
.node-application-form .form-item-field-ap-invest-readiness-desc-und-0-value textarea,
.node-application-form .form-item-field-ap-invest-ready-plan-und-0-value textarea {
	height: 500px;
}
.node-application-form .form-item-field-ap-fin-perf-clarify-und-0-value textarea,
.node-application-form .form-item-field-ap-provider-choice-und-0-value textarea,
.node-application-form .form-item-field-ap-able-contribute-und-0-value textarea {
	height: 200px;
}
.node-application-form .form-item-field-ap-success-fee-und-0-value textarea {
	height: 120px;
}

.node-application .article-inner {
	float: left;
	width: 100%;
	background-color: #f9f9f9;
	padding: 15px;
}
.node-application .panel {
	float: left;
	width: 100%;
	clear: left;
}
.node-application .panel.white {
	background-color: #fff;
}
.node-application .field-group-div > h3 {
    color: #000;
    font-size: 18px;
    font-weight: 600;
    line-height: 1.3;
    margin-bottom: 12px;
	padding: 0;
}
.node-application .field {
	padding-top: 15px;
	padding-bottom: 15px;
}
.node-application .field .field-label {
	font-weight: 500;
	margin-bottom: 10px;
	color: #333;
}
.node-application .field-type-list-boolean {
	margin-bottom: 0px;
	padding-left: 0px;
	padding-right: 0px;
}
.node-application .field-type-text-long {
	line-height: 1.5;
	font-size: 15px;
}
.node-application .field-type-text-long .field-label {
	font-size: 16px;
}
.node-application h2.page-title {
	font-size: 28px;
    color: #328bf6;
	margin-bottom: 24px;	
}
.node-application .field-type-datetime {
	padding-left: 0px;
	padding-right: 0px;
	margin-bottom: 0px;
}
.node-application .field-type-field-collection .field-type-datetime {
	background-color: transparent;
}
.field-type-field-collection table {
	width: 100%;
}
.node-application .panel.outline {
	border: 1px solid #f1f1f1;
	background-color: transparent;
}

.node-application .vcard {
    border: 0 none;
    color: #6a6a69;
    font-family: "proxima-nova","proxima-nova",Arial,Helvetica,sans-serif;
    font-size: 16px;
    margin-bottom: 0;
    padding: 0;
	line-height: 1.3;
	font-weight: 600;
}
.term-reference {
	display: inline-block;
    background-color: #eef6fe;
    color: #0c233e;
    font-weight: 400;
    padding: 3px 8px;
    text-transform: capitalize;
	margin-right: 8px;
	margin-top: 8px;
	font-size: 13px;
}

label.unattached {
    color: #0c233e;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 18px;
	display: block;
}
.field-type-markup ul {
	margin-left: 30px;
}
#edit-field-ap-choose-stage,
#edit-field-milestones-intro,
#edit-field-ap-budget-intro {
	background-color: #fff;
	margin-bottom: 0px;
}
.node-application-form .multipage-pane-wrapper > .required-fields {
    background-color: #fff;
    box-sizing: border-box;
    margin-bottom: 15px;
    padding: 15px;
    width: 100%;
	float: left;
	clear: left;
}
.node-application-form .multipage-pane-wrapper > .required-fields > .form-wrapper {
    background-color: #fff;
    box-sizing: border-box;
    margin-bottom: 15px;
    padding: 15px;
    width: 100%;
	float: left;
	clear: left;
}
.button.pink {
	background-color: #b64caa;
    color: #f9e1f6;
}
.button.pink:hover {
	background-color: #82357a;
	text-decoration: none;
}
#edit-field-ap-financial-performance .button.pink {
	margin-bottom: 0px;
}
.node-application-form .form-type-date-popup .description {
	display: none;
}
#edit-field-ap-how-much-investment {
	margin-bottom: 0px;
}
#edit-field-ap-list-grants .tabledrag-toggle-weight-wrapper {
	display: none;
}
table.field-multiple-table {
	width: 100%;
}

table.field-multiple-table tbody {
	border-top: 0px;
}
.field-collection-container table thead {
	background-color: #DADADA;
	border-bottom: 0px;
}
.field-collection-container table tbody tr.even,
.field-collection-container table tr.odd  {
	background-color: #EDEDED;
	border-bottom: 1px solid #C7C7C7;
}
.field-collection-container table td {
	padding-top: 0px;
	padding-bottom: 0px;
}
.field-multiple-table button {
	font-size: 11px !important;
	padding: 4px 8px;
}
.field-multiple-table .field-type-datetime fieldset legend {
	display: none;
}
.field-multiple-table .field-type-datetime fieldset div {
	margin: 0;
	padding: 0;
}
.field-multiple-table .field-type-datetime fieldset div input {
	margin: 0;
}
.field-multiple-table .field-type-datetime {
	margin: 0;
	padding: 0;
}
.field-multiple-table input[type="text"] {
	font-size: 13px;
}
table.field-multiple-table th:first-child {
	padding-right: 0;
	padding-left: 5px;
	width: 20px;
}
#edit-field-ap-list-grants table.field-multiple-table th:first-child label {
	display: none;
}
#edit-field-ap-list-grants table.field-multiple-table th:nth-child(4) {
	width: 75px;
	max-width: 75px !important;
}
.multipage-pane-wrapper .field-multiple-table .form-wrapper {
	background-color: #EEEEEE;
}
table.field-multiple-table td {
	padding-top: 0px;
	padding-bottom: 0px;
}
a.tabledrag-handle .handle {
    width: 25px;
	height: 25px;
}
form .field-multiple-table td.field-multiple-drag a.tabledrag-handle {
	padding-right: 0px;
}
.field-multiple-table thead th label {
	font-weight: 600;
	font-size: 15px;
}
form .field-multiple-table th.field-label {
	padding-left: 10px;
	border-bottom: 1px solid #ccc;
	font-weight: 600;
	font-size: 14px;	
}
button.field-add-more-submit {
	padding: 8px 16px;
}
.required-fields > h3 {
    color: #0c233e;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 18px;
}
.required-fields .form-item label {
	font-size: 16px;
	font-weight: 600;
}
#edit-field-when-do-you-hope-to-raise- fieldset .fieldset-wrapper div,
#edit-field-when-do-you-hope-to-raise- fieldset .fieldset-wrapper input {
	margin-bottom: 0;
	padding-bottom: 0;
}
.field-group-div .description {
    background-color: #ddedfd;
    color: #575756;
    font-size: 14px;
    line-height: 1.5;
    padding: 15px;
	margin: 0 15px 15px 15px;
}
.node-application-form .multipage-pane-wrapper > .group-ap-budget-summary > .form-wrapper,
.node-application-form .multipage-pane-wrapper > .group-ap-about-org > .form-wrapper,
.node-application-form .multipage-pane-wrapper > .group-ap-main-contact > .form-wrapper {
	padding-bottom: 0px;
}
.op-link {
	display: block;
}
#views-exposed-form-user-admin-page input.form-text {
	height: 30px;
}
.view-user-admin table thead tr th {
	font-weight: 400;
}
.view-user-admin table thead tr th a {
	font-weight: 600;
}
.view-user-admin td {
	font-size: 13px;
}
.panel.nopadding {
	padding: 0px;
	border: 0px;
}
#buttons .printlinks {
	float: left;
	width: 50%;
	text-align: left;
}
#buttons .buttons {
	float: left;
	width: 50%;
	text-align: right;
}
#buttons-bottom .buttons {
	float: left;
	width: 100%;
	text-align: right;
}
#buttons-bottom {
	margin-top: 20px;
}
#buttons .buttons a.flag,
#buttons .buttons a.button.grey,
#buttons-bottom .buttons a.flag,
#buttons-bottom .buttons a.button.grey {
    background-color: #add1fb !important;
    color: #0c233e !important;
    float: right !important;
    font-family: "proxima-nova",Arial,Helvetica,sans-serif !important;
    font-size: 17px !important;
    font-weight: 400 !important;
    margin: 0px !important;
    padding: 20px 25px !important;
    text-shadow: 0 0 0 #ffffff !important;
    text-transform: uppercase;
	line-height: 17px !important;
}
#buttons .buttons a.flag:hover,
#buttons .buttons a.button.grey:hover,
#buttons-bottom .buttons a.flag:hover,
#buttons-bottom .buttons a.button.grey:hover {
	color: #fff !important;
	background-color: #0c233e !important;
}
#buttons .buttons a.button.grey,
#buttons-bottom .buttons a.button.grey {
	margin-right: 15px !important;
}
.save-note {
	padding: 15px 15px 0 15px;
	font-size: 15px;
}
.field-value-wrapper {
	border: 1px solid #A6A6A6;
	background-color: #EDEDED;
	color: #666;
	padding: 8px;
	font-size: 15px;
}
#buttons {
display: none;
}

@media only screen and (max-width: 64.063em) {
	.block-search-api-page-search {
		top: -140px;
		right: 65px;
	}	
	.admin-menu .block-search-api-page-search {
		top: -140px;
		right: 65px;
	}
	.logged-in .block-search-api-page-search {
		right: 100px;
	}
	#search-api-page-search-form-search .form-type-textfield input {
		height: 30px;
		line-height: 30px;
	}
	#secondary-menu ul li {
		display: none;
	}
	#secondary-menu ul li.login, #secondary-menu ul li.my-account  {
		display: block;		
	}	
	#secondary-menu ul li.login a, #secondary-menu ul li.my-account a  {
		background-color: #3d9ff7;
		color: #fff;		
	}
	img.logo {
		margin-left: 20px;
	}	
	#mini-panel-front_page .panels-flexible-region-2-slider {
		width: 100% !important;
		padding-bottom: 15px;
	}
	#guide.flexslider ul.slides{
		padding: 0 20px;
	}
	.panels-flexible-region-2-twitter {
		width: 100% !important;
	}
	.panels-flexible-region-2-twitter-inside .pane-content {
		height: auto;
	}
	#mini-panel-front_page.panels-flexible-2 .panels-flexible-row-2-2-inside .panels-flexible-region-inside {
		padding-left: 0px !important;
		padding-right: 0px !important;
	}
	#guide.flexslider .slides .views-field-title {
		font-size: 20px;
		margin: 10px 0px 10px 0px;
	}
	#guide.flexslider .slides .views-field-field-description	{
		float: left;
		clear: left;
		margin-left: 0px;
		margin-right: 0px;
	}
	#guide.flexslider .slides .views-field-field-image {
		margin-left: 40px;
		margin-bottom: 15px;
	}
	#guide.flexslider .slides .views-field-field-slide-link {
		margin-left: 0px;
		margin-top: 15px;
	}
	#fatfooter .panels-flexible-region {
		width: 50% !important;
	}
	#fatfooter .panels-flexible-region {
		padding-left: 0px;
		padding-right: 0px;
	}
	#fatfooter .panels-flexible-region:first-child {
		padding-left: 20px;
	}
	#fatfooter {
		margin-top: 20px;
		padding-top: 20px;
	}
	#mini-panel-fat_footer .panels-flexible-region-1-left1 {
		margin-left: 0px;
		text-align: left;
		clear: left;
		width: 100% !important;
	}
	#mini-panel-fat_footer .panels-flexible-region-last {
		text-align: left;
		width: 100% !important;
	}
	#mailchimp-signup-subscribe-block-subscribe-form {
		float: left;
		text-align: left;
		margin-top: 20px;
	}
	a.social {
		margin-left: 8px;
		margin-right: 8px;
	}
	#subfooter.row {
		padding: 10px 10px;
	}
	#subfooter .left {
		width: 100%;
	}
	#subfooter .right {
		width: 100%;
		text-align: left;
	}
	.main .view .views-row {
		width: 100%;
	}
	.views-field-field-provider-services {
		clear: left;
	}
	.view-providers-directory .views-field-body {
		margin-left: 0px;
	}
	.main .view-resources .views-field-field-categories,
	.main .view-resources .views-field-body,
	.main .view-resources .views-field-field-rating	{
		margin-left: 0px;
	}
	.main .view-resources .views-field-field-tags {
		clear: both;
		margin-left: 0px;
	}
}
@media only screen and (max-width: 40em) {
	fieldset {

	}
	#fatfooter .panels-flexible-region {
		width: 100% !important;
	}
	.page-user .selectBox-dropdown-menu {
		min-width: 80% !important;
	}
	.field-type-datetime .selectBox-dropdown {
		min-width: 60px;
		width: 80px !important;
	}
	.field-type-datetime select {
		width: 90px;
		min-width: 90px;
	}
	.selectBox-dropdown .selectBox-label {
		min-width: 100%;
		max-width: 100%;
	}
	#user-login .form-type-date-select,
	#user-register-form .form-type-date-select,
	#user-register-form .form-type-date-select .form-item	{
		padding: 0px !important;
	}
	fieldset {
		max-width: 100%;
		min-width: 90%;
	}
	.block-search-api-page-search {
		top: -150px;
		right: 65px;
	}	
	.admin-menu .block-search-api-page-search {
		top: -150px;
		right: 65px;
	}
	.logged-in .block-search-api-page-search {
		right: 100px;
	}
	img.logo {
		margin-bottom: 10px;
	}
	.form-type-slider.form-item .description {
		width: 100%;
	}
	ul.slider-stages {
		width: 100%;
	}
	ul.slider-stages li {
		display: none;
	}
	ul.slider-stages li.active {
		display: block;
		width: 100%;
		min-height: 80px;
	}
	#diagnostic-node-form .multipage-controls-list #edit-actions, #diagnostic-node-form #edit-actions {
		/* margin-top: 0;
		margin-right: 0; */
	}
	.jumplist.bar .step-report a {
		text-indent: -9999px;
	}	
	#menubar {
		background: #fff;
	}
	#main-menu ul {
		background-color: #FFF !important;
	}
	#main-menu li {
		width: 100%;
		border-bottom: 2px solid #fff;
	}
	#main-menu ul li > a {
		display: block;
		width: 100%;
		color: #000;
		padding: 8px 0px 8px 20px;
		font-size: 18px;
		font-weight: 600;
		background: none repeat scroll 0% 0% #ADD1FB !important;
		text-align: left;
	}	
	#main-menu ul li > a:hover {
		background-color: #FFF;
	}
	#hero.flexslider .slides > li .views-field-title {
		padding: 6px 12px 3px 12px;
		color: #FFF;
		top: 15px;
		left: 20px;
		bottom: auto;
		font-size: 18px;
		margin-bottom: 0;
		background-image: url(images/slider_txt_bg.png);
	}	
	#hero.flexslider .flex-control-nav {
		bottom: 5px;
		right: 20px;
	}
	#hero.flexslider .slides > li .views-field-title a {
		color: #FFF;
		font-family: "proxima-nova", Arial, Helvetica, sans-serif !important;
		font-size: 18px;
		font-weight: 600;
	}
	#mini-panel-front_page .panels-flexible-row-2-1 .panels-flexible-region {
		width: 100% !important;
		padding-left: 0 !important;
		padding-right: 0 !important;
	}	
	#mini-panel-front_page .panels-flexible-row-2-1 .panel-pane {
		height: 130px;
	}	
	#mini-panel-front_page.panels-flexible-2 .panels-flexible-region-inside	{
		padding-left: 0px !important;
		padding-right: 0px !important;	
	}
	#mini-panel-front_page .panels-flexible-row-2-1 .panel-pane h2 {
		padding-right: 60px;
		font-size: 20px;
	}
	.views-exposed-form {
		border-top: 2px solid #CECECE;
		padding: 15px 0 15px 0;
	}
	.views-exposed-form .views-exposed-widget {
		width: 100%;
		margin-bottom: 5px;
	}
	#edit-keys-wrapper {
		width: 100%;
	}
	#resource-remain, #provider-remain {
		margin-left: 0px;
		max-width: 100%;
		margin-top: 100px;
	}
	.block-views-consultants-block {
		margin-left: 0px;
		max-width: 100%;
	}
	.location .form-item input {
		max-width: 100% !important;
		width: 100%;
	}	
	.main .view-resources .views-field-field-image,
	.view-related-resources .views-field-field-image	{
		float: left;
		margin-left: 0px;
		width: 240px;
		margin-bottom: 15px;
	}
	.main .views-field-field-format {
		float: right;
	}
	.view-related-resources .views-field-title, .view-related-resources .views-field-name, .view-related-resources .views-field-field-attribution, .view-related-resources .views-field-field-categories, .main .view-resources .views-field-title, .main .view-resources .views-field-name, .main .view-resources .views-field-field-categories {
		margin-left: 0px;
		clear: both;
	}
	.view-related-resources .views-field-body, .main .view-resources .views-field-body {
		margin-left: 0px;
		clear: both;		
	}
	.view-related-resources .views-field-field-rating, .main .view-resources .views-field-field-rating {
		margin-left: 0px;
	}
	.view-related-resources .views-field-field-tags, .main .view-resources .views-field-field-tags {
		margin-right: 0px;
	}
	.view-related-resources .views-field-title, .main .view-resources .views-field-title {

	}
	.view-related-resources .views-field-field-image img, .main .view-resources .views-field-field-image img {
		width: 240px;
	}
	.main .views-field-field-format, .view-related-resources .views-field-field-format {
		width: 30px;
	}
	.main .views-field-field-format img, .view-related-resources .views-field-field-format img {
		width: 30px;
	}
	.view-providers-directory .view-header .right {
		margin-bottom: 25px;
	}	
	#buttons .printlinks {
		display: none;
	}
	#buttons .buttons {
		display: none;
	}
}
	</style>
  </head>
  <body>
    <?php if (!empty($message)): ?>
      <div class="print-message"><?php print $message; ?></div><p />
    <?php endif; ?>
    <?php if ($print_logo): ?>
      <div class="print-logo"><?php print $print_logo; ?></div>
    <?php endif; ?>
    <div class="print-site_name"><?php print theme('print_published'); ?></div>
    <p />
    <hr class="print-hr" />

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> printer-friendly pdf"<?php print $attributes; ?>>
	<div class="article-inner">
	<h2 class="page-title"><?php print $node->title; ?></h2>

	<?php
		foreach($content as &$group) {
			foreach($group as &$field) {
				if(isset($field['#field_type'])) {
					switch($field['#field_name']) {
						case "field_sectors_you_work_in":
						case "field_areas_included":
						case "field_ap_identify_inv_readiness":
							foreach($field['#items'] as $key=>$item) {
								$field[$key]['#markup'] = '<div class="term-reference">'.$field[$key]['#markup'].'</div>';
							}
						break;
					}
				}
			}
		}
	?>
	<?php print render($content); ?>
	
	</div><!-- /article-inner -->
	<div class="panel white">
		<p>This report was generated by the Big Potential website.</p>
		<div class="print-footer"><?php print theme('print_footer'); ?></div>
		<hr class="print-hr" />
		<?php if ($sourceurl_enabled): ?>
		  <div class="print-source_url">
			<?php print theme('print_sourceurl', array('url' => $source_url, 'node' => $node, 'cid' => $cid)); ?>
		  </div>
		<?php endif; ?>
		<div class="print-links"><?php print theme('print_url_list'); ?></div>
	</div>
</article>
    <?php print $footer_scripts; ?>
  </body>
</html>
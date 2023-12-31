
.group-header-menu {
    float: left;
}
.group-header-menu .first-item {
    border-left: 1px solid #EEE;
}
#group-header-menu {
    border: 0px;
    padding: 0px;
    font-size: 14px;
    font-weight: bold;
    width: auto;
}
#group-header-menu ul {
    background: #fff;
    height: 35px;
    list-style: none;
    margin: 0;
    padding: 0;
}
#group-header-menu li:first-child {
    border-left: 1px solid #EEE;
}
#group-header-menu li {
    float: left;
    padding: 0px;
    border-right: 1px solid #EEE;
}
#group-header-menu li a {
    background: #fff;
    display: block;
    line-height: 42px;
    margin: 0px;
    padding: 0px 20px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
}
#group-header-menu > ul > li > a {
    color: #2F4979;
    font-weight: bold;
    height: 44px;
}

#group-header-menu li > a:hover,
#group-header-menu ul li:hover > a {
    background: #F6F7F8;
    text-decoration: none;
}
#group-header-menu li ul {
    background: #fff;
    display: none;
    height: auto;
    padding: 0px;
    margin: 0px;
    position: absolute;
    width: 120px;
    z-index: 200;
    border-left: 1px solid #EEE;
    border-bottom: 1px solid #EEE;
    border-right: 1px solid #EEE;
}
#group-header-menu li:hover ul {
    display: block;
}
#group-header-menu li li {
    display: block;
    float: none;
    margin: 0px;
    padding: 0px;
    width: 120px;
}
#group-header-menu li:hover li a {
    background: none;
}
#group-header-menu li ul a {
    display: block;
    height: 35px;
    font-size: 12px;
    font-style: normal;
    margin: 0px;
    padding: 0px 10px 0px 15px;
    text-align: left;
}
#group-header-menu li ul a:hover,
#group-header-menu li ul li:hover > a {
    background: #F6F7F8;
    border: 0px;
    text-decoration: none;
}
#group-header-menu p {
    clear: left;
}
.groups-sidebar {
    color: #999;
    font-weight: bold;
    margin-top: 5px;
}
.ossn-group-approve-all {
    float: right;
    margin-bottom: 5px;
    margin-right: 2px;
}
.ossn-layout-group {

}
.ossn-layout-group .coloum-left {
    width: 160px;
    float: left;
    display: inline-table;
}
.ossn-layout-group .coloum-middle {
    width: 800px;
    display: inline-table;
    margin-left: 6px;
    margin-right: 6px;
}
.ossn-layout-group .ossn-inner {
    width: 995px;
}
.ossn-group-members {
    height: 102px;
    border: 1px solid var(--main-border-color-bit);
    margin-left: 5px;
    margin-bottom: 10px;
}
.ossn-group-members .uinfo .userlink {
    font-size: 14px;
    font-weight: bold;
    margin-top: 20px;
    float: left;
}
.ossn-group-no-requests {
    text-align: center;
}
.ossn-group-profile {}
.ossn-group-profile .profile-header {
    border: 1px solid var(--main-border-color-bit);
    border-width: 1px 1px 0px;
    position: relative;
	background: var(--bg-inner-containers);
    width: 100%;
    opacity:  .99;
    position: relative;
    z-index: 1;    
}
.ossn-group-profile .profile-header .header-bottom {
  
}
.ossn-group-profile .profile-header .group-name {
    color: var(--text-color);
    font-weight: bold;
    font-size: 35px;
    font-size: 2.0vw;
    text-shadow: 0 0 0.2px var(--text-color);
    text-align: center;
}
.ossn-group-profile .profile-header .group-name a{
	color: var(--text-color);
    text-decoration: none;
}
.groups-buttons {
    float: right;
    margin: 15px 9px 0px 0px;
}
.group-about .heading {
    color: #999;
    font-size: 11px;
    font-weight: bold;
}
.group-about .text {
    font-size: 12px;
    margin-top: 4px;
}
.members-count {
    margin-top: 4px;
    font-size: 12px;
    font-weight: bold;
}
.group-closed-container {
    background: #FFF;
    border: 1px solid;
    border-color: #E5E6E9 #DFE0E4 #D0D1D5;
    -webkit-border-radius: 3px;
    padding: 10px;
    margin-bottom: 10px;
}
.group-closed-container p {
    padding: 3px 6px;
}
.ossn-group-cover-header {
}
.ossn-group-cover {
    overflow: hidden;
    height: 200px;
}
.ossn-group-cover img {
    position:relative;
}
.ossn-group-cover:hover > .ossn-group-cover-button {
    display: block;
}
.ossn-group-cover-button {
    margin-top: 150px;
    margin-right: 10px;
    float: right;
    display: none;
    z-index: 9;
    position: absolute;
    right: 0px;
}
.ossn-group-cover-button a {
    display: inline-block;
}
.group-c-position {
    display: none !important;
}
.groups-buttons a {
    display: inline-block;
}
.ossn-groups-notification-icon,
.ossn-groups-notification-icon:before {
    display: inline-block;
}	
.ossn-groups-notification-icon:before {
	content: "\f0c0";
    font-family: 'Font Awesome 5 Free';
    font-style: normal;
    font-weight: 900;
    font-size: 18px;
}
.ossn-group-notification-item .data {
    display: inline;
    margin-left: 5px;
}
.delete-group {
    float: right;
}
.group-widget-members img {
	margin-right:5px;
    /* group-widget-members img need bottom margin #699 */
	margin-bottom: 5px;
}
.ossn-notification-unviewed {
    background: #F9F9F9;
}
.ossn-group-profile .widget-description .widget-contents {
    text-align: justify;
}
.ossn-group-profile .group-requests-widget .widget-contents {
	text-align:center;
}
.ossn-group-profile .group-requests-widget a {
    font-weight: bold;
    text-transform: uppercase;
}
.ossn-group-members .request-controls {
}
.ossn-group-members .request-controls a {
	margin-left:5px;
}
.ossn-group-members .col-md-2 {
	text-align:center;
}
.group-search-details {
    padding: 20px;
}
.group-search-details .group-name {
    font-weight: bold;
    font-size: 15px;

}
.group-search-items .row {
    border: 1px solid #eee;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 10px;
}
.group-search-details .ossn-group-search-by {
    margin-top: 5px;
}
.group-search-details .ossn-group-search-by a {
    margin-left: 5px;
}
@media only screen and (max-width: 767px) {
	.btn-responsive {
		padding:4px 9px;
		font-size:90%;
		line-height: 1.2;
	}
}
.ossn-group-profile .profile-header .header-bottom .profile-hr-menu {

}

<?php

$pageStyle = <<< EOT
<style>
@CHARSET "UTF-8";

w3-light-gray {color:#000!important;background-color:#f1f1f1!important}

.w3-content{max-width:980px;margin:auto}
.w3-rest{overflow:hidden}
.w3-margin-top{margin-top:16px!important}
.w3-container,.w3-panel{padding:0.01em 16px}
.w3-panel{margin-top:16px;margin-bottom:16px}
.w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-col,.w3-half,.w3-third,.w3-twothird,.w3-threequarter,.w3-quarter{float:left;width:100%}
.w3-white,.w3-hover-white:hover{color:#000!important;background-color:#fff!important}
.w3-text-grey,.w3-hover-text-grey:hover,.w3-text-gray,.w3-hover-text-gray:hover{color:#757575!important}

.w3-card,.w3-card-2{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}
.w3-card-4,.w3-hover-shadow:hover{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}

.w3-display-container{position:relative}
.w3-display-bottomleft{position:absolute;left:0;bottom:0}
.w3-text-black,.w3-hover-text-black:hover{color:#000!important}
.w3-margin-right{margin-right:16px!important}
.w3-large{font-size:18px!important}
.w3-text-teal,.w3-hover-text-teal:hover{color:#009688!important}
.w3-round,.w3-round-medium{border-radius:4px}
.w3-round-xlarge{border-radius:16px}
.w3-small{font-size:12px!important}
.w3-center .w3-bar{display:inline-block;width:auto}
.w3-opacity,.w3-hover-opacity:hover{opacity:0.60}
.w3-xxlarge{font-size:36px!important}
.w3-tag{background-color:#000;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}
.w3-round-small{border-radius:2px}
.w3-padding-16{padding-top:16px!important;padding-bottom:16px!important}
.w3-text-white,.w3-hover-text-white:hover{color:#fff!important}
.w3-teal,.w3-hover-teal:hover{color:#fff!important;background-color:#009688!important}
.w3-image{max-width:100%;height:auto}
.w3-margin-bottom{margin-bottom:16px!important}
.w3-center{text-align:center!important}
.w3-row-padding,.w3-row-padding>.w3-half,.w3-row-padding>.w3-third,.w3-row-padding>.w3-twothird,.w3-row-padding>.w3-threequarter,.w3-row-padding>.w3-quarter,.w3-row-padding>.w3-col{padding:0 8px}




/* W3.CSS 4.10 February 2018 by Jan Egil and Borge Refsnes */
html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}

/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}


a{color:inherit}
a{background-color:transparent;-webkit-text-decoration-skip:objects}
a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}






/* End extract */
html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}
html{overflow-x:hidden}

h1{font-size:36px}
h2{font-size:30px}
h3{font-size:24px}
h4{font-size:20px}
h5{font-size:18px}
h6{font-size:16px}
h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}

hr{border:0;border-top:1px solid #eee;margin:20px 0}

img{vertical-align:middle}


@media (min-width:601px){.w3-col.m1{width:8.33333%}.w3-col.m2{width:16.66666%}.w3-col.m3,.w3-quarter{width:24.99999%}.w3-col.m4,.w3-third{width:33.33333%}
.w3-col.m5{width:41.66666%}.w3-col.m6,.w3-half{width:49.99999%}.w3-col.m7{width:58.33333%}.w3-col.m8,.w3-twothird{width:66.66666%}
.w3-col.m9,.w3-threequarter{width:74.99999%}.w3-col.m10{width:83.33333%}.w3-col.m11{width:91.66666%}.w3-col.m12{width:99.99999%}}
@media (max-width:600px){.w3-modal-content{margin:0 10px;width:auto!important}.w3-modal{padding-top:30px}
@media (max-width:768px){.w3-modal-content{width:500px}.w3-modal{padding-top:50px}}
@media (min-width:993px){.w3-modal-content{width:900px}.w3-hide-large{display:none!important}.w3-sidebar.w3-collapse{display:block!important}}
@media (max-width:992px) and (min-width:601px){.w3-hide-medium{display:none!important}}
@media (max-width:992px){.w3-sidebar.w3-collapse{display:none}.w3-main{margin-left:0!important;margin-right:0!important}}
@media (min-width:993px){.w3-col.l1{width:8.33333%}.w3-col.l2{width:16.66666%}.w3-col.l3{width:24.99999%}.w3-col.l4{width:33.33333%}
.w3-col.l5{width:41.66666%}.w3-col.l6{width:49.99999%}.w3-col.l7{width:58.33333%}.w3-col.l8{width:66.66666%}
.w3-col.l9{width:74.99999%}.w3-col.l10{width:83.33333%}.w3-col.l11{width:91.66666%}.w3-col.l12{width:99.99999%}}

</style>
EOT;
?>
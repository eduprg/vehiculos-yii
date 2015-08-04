<!DOCTYPE HTML> 
<!-- Diapo is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Diapo | A Pixedelic free jQuery slideshow</title> 
 
<meta name="viewport" content="width=960">    
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
<link rel='stylesheet' id='style-css'  href='diapo.css' type='text/css' media='all'> 
<script type='text/javascript' src='scripts/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>

<style>
body {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	line-height: 20px;
}
section {
	display: block;
	overflow: hidden;
	position: relative;
}
.button {
	background: #014464;
	background: -moz-linear-gradient(top, #0D658E, #0C577A 50%, #014D71 51%, #003E5C);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #0E658E), color-stop(.5, #0C577A), color-stop(.5, #014D71), to(#003E5C)); 
	border: 1px solid #368DBE;
	border-top: 1px solid #c3d6df;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0 1px 3px black;
	-webkit-box-shadow: 0 1px 3px black;
	box-shadow: 0 1px 3px black;
	color: white;
	display: block;
	font-size: 12px;
	font-weight: bold;
	height: 30px;
	line-height: 30px;
	padding: 5px 20px;
	text-align: center;
	text-decoration: none;
	text-shadow: 1px 1px 1px black;
	text-transform: uppercase;
	width: auto;
}
.button2 {
	background: #d9ae00;
	background: -moz-linear-gradient(top, #b28b06, #9c7705 50%, #9c7705 51%, #5c4100);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #b28b06), color-stop(.5, #9c7705), color-stop(.5, #9c7705), to(#5c4100)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.button3 {
	background: #ffd838;
	background: -moz-linear-gradient(top, #edbf21, #c89b0f 50%, #9c7705 51%, #906706);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #edbf21), color-stop(.5, #c89b0f), color-stop(.5, #c89b0f), to(#906706)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.price_table {
    float: right;
	font-size: 12px;
    margin: 10px auto 0;
    padding: 20px 0;
	position: relative;
	width: 570px;
}
.price_table .price_column.highlighted {
	background: #ffd838;
    margin: -5px!important;
	padding: 10px;
    z-index: 2;
}
.price_table .price_column {
	display: block;
	margin: 5px;
    float: left;
    position: absolute;
	width: 180px;
    z-index: 1;
}
.price_table .price_column > div {
	background: #eeeeee;
}
.price_table .price_column > div > div {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_column > div > p {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_column > div > ul {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_title {
	background-color: #333333;
    border-top: 0!important;
    color: #ffffff;
    font-size: 14px;
}
.price_table .highlighted .price_title {
    font-size: 16px;
}
.price_table .price_price {
    font-size: 36px;
    line-height: 40px;
}
.price_table .highlighted  .price_price {
    font-size: 40px;
    line-height: 44px;
}
.price_table .price_explanation {
	font-size: 10px;
    line-height: 13px;
    text-transform: uppercase;
}
.price_table .cusButton {
	background-color: #333333;
	display: block;
    text-align: center;
}
.price_table li {
	padding: 5px 0;
}
.price_table div.pix_check {
	background: url(/images/demo/list-check-green.png) no-repeat 15px center;
    padding-left: 38px!important;
}
.price_table div.pix_error {
	background: url(/images/demo/list-error.png) no-repeat 15px center;
    padding-left: 38px!important;
}
</style>
 
</head> 
<body> 
    <section> 
    
    	<div style="overflow:hidden; width:1000px; margin: 20px auto; padding:0 5px;"> 
                <div class="pix_diapo">

                    <div data-thumb="images/thumbs/megamind1048.jpg">
                        <img src="images/slides/megamind1048.jpg">
                        <div class="caption elemHover fromLeft">
                            Talento Humano - CiudadRodrigro C.A
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/megamind_07.jpg">
                        <img src="images/slides/megamind_07.jpg"> 
                        <div class="caption elemHover fromRight" style="bottom:65px; padding-bottom:5px; color:#ff0; text-transform:uppercase">
                            CiudadRodrigro C.A.
                        </div>
                        <div class="caption elemHover fromLeft" style="padding-top:5px;">
                            Control de Faltas
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/wall-e.jpg" data-time="7000">
                        <img src="images/slides/wall-e.jpg">
                        <div class="elemHover caption fromLeft" style="bottom:70px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px;">
                            Sistema para el Control de Faltas y Control del Trabajador :
                        </div>
                        <div class="elemHover button fromTop" data-easing="easeOutExpo" style="left:388px; bottom:78px;">
                            Faltas 
                        </div>
                        <div class="elemHover button button2 fromBottom" data-easing="easeOutExpo" style="left:512px; bottom:78px;">
                            Control del Supervisores
                        </div>
                        <div class="elemHover fadeIn" style="left:600px; bottom:auto; top:0; padding-top:50px; color:#ff0; font-size:13px; line-height:20px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; background:url(images/demo/arrow_caption.png) no-repeat 230px 30px">
                            CiudadRodrigro C.A....<br>
                            Talento Humano
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/up-official-trailer-fake.jpg">
                        <iframe width="940" height="470" src="http://www.youtube.com/embed/qas5lWp7_R0?wmode=transparent&autoplay=1" data-fake="images/slides/up-official-trailer-fake.jpg" frameborder="0" allowfullscreen></iframe>
                        <div class="elemHover caption fromLeft elemToHide" style="bottom: 350px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; left:0">
                            CiudadRodrigro C.A.
                                                    TALENTO HUMANO
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/big_buck_bunny.jpg" data-time="7000">
                        <div style="position:absolute; top:0; left:0; width:900px; height:430px; padding:20px; background:#fff; color:#222;">
                        	<div style="float:left; width:300px;">
                                <p><br><br>.<br>
                                </p>
                                <iframe src="http://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;portrait=0&amp;color=f0bc00&amp;autoplay=1" data-fake="images/slides/big_buck_bunny.jpg" width="300" height="169" frameborder="0"></iframe>
                            </div>
                            <div class="price_table"><div>
                                <div class="price_column highlighted" style="top:0; left:190px; height:387px; background:#fff; -moz-box-shadow: 0 1px 4px #666;	-webkit-box-shadow: 0 1px 4px #666; box-shadow: 0 1px 4px #666;"><div>
                                </div></div><!-- .price_column --> 
                                <div class="price_column" style="top:0; left:0; height:383px; background:#ddd; -moz-box-shadow: 0 1px 4px #666;	-webkit-box-shadow: 0 1px 4px #666; box-shadow: 0 1px 4px #666;"><div> 
                                </div></div><!-- .price_column --> 
                                <div class="price_column" style="top:0; left:380px; height:383px; background:#ddd; -moz-box-shadow: 0 1px 4px #666;	-webkit-box-shadow: 0 1px 4px #666; box-shadow: 0 1px 4px #666;"><div>
                                </div></div><!-- .price_column -->
                                <div class="price_column highlighted fadeIn" style="top:0; left:190px;"><div>
                                    
                                    <div>
                                         <p><br><br></p>
                                <iframe src="http://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;portrait=0&amp;color=f0bc00&amp;autoplay=1" data-fake="images/1.jpg" width="300" height="169" frameborder="0"></iframe>
                                    </div>
                                </div></div><!-- .price_column --> 
                                

                                
                            </div></div><!-- price_table -->
                        </div>
                    </div>
                    
                    
                    <div data-thumb="images/thumbs/ratatouille2.jpg">
                        <img src="images/slides/ratatouille2.jpg">
                    </div>
                    
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 
 
    </body> 
</html>
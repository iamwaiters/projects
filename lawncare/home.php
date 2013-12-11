<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Adelmann's Turf & Tree</title>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<link href="css/lawn.css" rel="stylesheet" type="text/css" />
<script>
 $(function() {
                var current = 1;
                
                var iterate		= function(){
                    var i = parseInt(current+1);
                    var lis = $('#rotmenu').children('li').size();
                    if(i>lis) i = 1;
                    display($('#rotmenu li:nth-child('+i+')'));
                }
                display($('#rotmenu li:first'));
                var slidetime = setInterval(iterate,3000);
				
                $('#rotmenu li').bind('click',function(e){
                    clearTimeout(slidetime);
                    display($(this));
                    e.preventDefault();
                });
				
                function display(elem){
                    var $this 	= elem;
                    var repeat 	= false;
                    if(current == parseInt($this.index() + 1))
                        repeat = true;
					
                    if(!repeat)
                        $this.parent().find('li:nth-child('+current+') a').stop(true,true).animate({'marginRight':'-20px'},300,function(){
                            $(this).animate({'opacity':'0.7'},700);
                        });
					
                    current = parseInt($this.index() + 1);
					
                    var elem = $('a',$this);
                    
                        elem.stop(true,true).animate({'marginRight':'0px','opacity':'1.0'},300);
					
                    var info_elem = elem.next();
                    $('#rot1 .heading').animate({'left':'-420px'}, 500,'easeOutCirc',function(){
                        $('h1',$(this)).html(info_elem.find('.info_heading').html());
                        $(this).animate({'left':'0px'},400,'easeInOutQuad');
                    });
					
                    $('#rot1 .description').animate({'bottom':'-270px'},500,'easeOutCirc',function(){
                        $('p',$(this)).html(info_elem.find('.info_description').html());
                        $(this).animate({'bottom':'0px'},400,'easeInOutQuad');
                    })
                    $('#rot1').prepend(
                    $('<img/>',{
                        style	:	'opacity:0',
                        className : 'bg'
                    }).load(
                    function(){
                        $(this).animate({'opacity':'1'},600);
                        $('#rot1 img:first').next().animate({'opacity':'0'},700,function(){
                            $(this).remove();
                        });
                    }
                ).attr('src','images/'+info_elem.find('.info_image').html()).attr('width','800').attr('height','300')
                );
                }
            });
			
			$(document).ready(function() {
				/* var h1 = $("#home1").height();
				var h2 = $("#home2").height();
				var h3 = $("#home3").height();
				var h4 = $("#home4").height();
				var h5 = $("#home5").height();
				var h6 = $("#home6").height();
				
				$("#home1,#home2, #home3, #home4, #home5, #home6").height(Math.max(h1, h2, h3, h4, h5, h6)); */
				$("#home2").hide();
				$("#home3").hide();
				$("#home4").hide();
				$("#home5").hide();
				$("#home6").hide();
				$("#home7").hide();
			});

			$("#lnk1").live('click', function() {
				$("#home1").show();
				$("#home2").hide();
				$("#home3").hide();
				$("#home4").hide();
				$("#home5").hide();
				$("#home6").hide();
				$("#home7").hide();
			});

			$("#lnk2").live('click', function() {
				$("#home2").show();
				$("#home1").hide();
				$("#home3").hide();
				$("#home4").hide();
				$("#home5").hide();
				$("#home6").hide();
				$("#home7").hide();
			});
			
			$("#lnk3").live('click', function() {
				$("#home3").show();
				$("#home1").hide();
				$("#home2").hide();
				$("#home4").hide();
				$("#home5").hide();
				$("#home6").hide();
				$("#home7").hide();
			});
			
			$("#lnk4").live('click', function() {
				$("#home4").show();
				$("#home1").hide();
				$("#home2").hide();
				$("#home3").hide();
				$("#home5").hide();
				$("#home6").hide();
				$("#home7").hide();
			});
			
			$("#lnk5").live('click', function() {
				$("#home5").show();
				$("#home1").hide();
				$("#home2").hide();
				$("#home3").hide();
				$("#home4").hide();
				$("#home6").hide();
				$("#home7").hide();
			});
			
			$("#lnk6").live('click', function() {
				$("#home6").show();
				$("#home1").hide();
				$("#home2").hide();
				$("#home3").hide();
				$("#home4").hide();
				$("#home5").hide();
				$("#home7").hide();
			});
			
			$("#lnk7").live('click', function() {
				$("#home7").show();
				$("#home1").hide();
				$("#home2").hide();
				$("#home3").hide();
				$("#home4").hide();
				$("#home5").hide();
				$("#home6").hide();
			});
</script>
	</head>
	<body>
	
		<div id="wrapper">
			<div id="title">
				<img class = "pics" src="images/Tree_logo.jpg" alt="tree climbing"><H2>Adelmann's</H2>
			</div>
			<nav>
				<ul>
					<li id="home"><a href="#" id="lnk1">Home</a></li>
					<li id="Landscaping"><a href="#Landscaping" id="lnk2">Landscaping</a></li>
					<li id="Tree Service"><a href="#Tree Service" id="lnk3">Tree Trimming</a></li>
					<!-- <li id="Lawn Care"><a href="#Lawn Care" id="lnk4">Lawn Care</a></li>
					<li id="Snow Removal"><a href="#Snow Removal" id="lnk5">Snow Removal</a></li> -->
					<li id="Contact"><a href="#Contact" id="lnk6">Contact</a></li>
				</ul>
			</nav>
			<div id="left_side">
				<?php 
					include 'pages/test.php';
				?>
				</div>
				<div id="right-side">
					<div id="home1">
							<p><p><?php 
					include 'pages/main.php';
				?></p>
						<p></p>
          
					</div>
					<div id="home2" > 
						<p><?php 
					include 'pages/landscape.php';
				?></p>
						<p></p>
					</div>
					<div id="home3" >
						<p><?php 
					include 'pages/treeService.php';
				?></p>
						<p></p>
					</div>
					<div id="home4" >
						<p><?php 
					include 'pages/qiz.php';
				?></p>
						<p></p>
					</div>
					<div id="home5" >
						<p><?php 
					include 'pages/snowRemoval.php';
				?></p>
						<p></p>
					</div>
					<div id="home6" >
						<p><p><?php 
					include 'pages/form.php';
				?></p>
						<p></p>
					</div>
					<div id="home7" >
						<p><p><?php 
					include 'pages/read1.php';
				?></p>
				</div>
				
			<footer>
				<p>
					Find us on: <a href="http://www.facebook.com" target="_blank"><img src="images/connect_facebook.jpg"  height="15px" width="15px"></a>
					<a href="http://www.twitter.com" target="_blank"><img src="images/connect_twitter.jpg"  height="15px" width="15px"></a>
				</p>
			</footer>
		</div>
	
	</body>
</html>

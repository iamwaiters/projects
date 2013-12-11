
<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="./css/main.css" />
    </head>
 <body>
        <div id="content">
            <a class="back" href=""></a>

            <div class="rotator">
                <ul id="rotmenu">
                    <li>
                        <a href="rot1">Landscape</a>
                        <div style="display:none;">
                            <div class="info_image">front.jpg</div>
                            <div class="info_heading">Outdoor Work</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...<a href="#Contact" id="lnk6">Contact</a>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot2">Services</a>
                        <div style="display:none;">
                            <div class="info_image">snowplow.jpg</div>
                            <div class="info_heading">Snow Removal</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...<a href="#Contact" id="lnk6">Contact</a>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot3">Contact</a>
                        <div style="display:none;">
                            <div class="info_image">1.jpg</div>
                            <div class="info_heading">Get in touch</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...<a href="#Contact" id="lnk6">Contact</a>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot4">Feedback</a>
                        <div style="display:none;">
                            <div class="info_image">IMG_0382.jpg</div>
                            <div class="info_heading">Big Logs</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...<a href="#Feedback" id="lnk4">Feedback</a>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot4">Members</a>
                        <div style="display:none;">
                            <div class="info_image">IMG_0352.jpg</div>
                            <div class="info_heading">Groups</div>
                            <div class="info_description">
				 At vero eos et accusamus et iusto odio
				dignissimos ducimus qui blanditiis praesentium
				voluptatum deleniti atque corrupti quos dolores et
				quas molestias excepturi sint occaecati cupiditate
				non provident...<a href="#Feedback" id="lnk7">Feedback</a>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="rot1">
                    <img src="" width="300" height="500" class="bg" alt=""/>
                    <div class="heading">
                        <h1></h1>
                    </div>
                    <div class="description">
                        <p></p>

                    </div>    
                </div>
            </div>
        </div>
  <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
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
                            $(this).animate({'opacity':'0.7'},500);
                        });
					
                    current = parseInt($this.index() + 1);
					
                    var elem = $('a',$this);
                    
                        elem.stop(true,true).animate({'marginRight':'0px','opacity':'1.0'},300);
					
                    var info_elem = elem.next();
                    $('#rot1 .heading').animate({'left':'-520px'}, 500,'easeOutCirc',function(){
                        $('h1',$(this)).html(info_elem.find('.info_heading').html());
                        $(this).animate({'left':'0px'},200,'easeInOutQuad');
                    });
					
                    $('#rot1 .description').animate({'bottom':'-270px'},500,'easeOutCirc',function(){
                        $('p',$(this)).html(info_elem.find('.info_description').html());
                        $(this).animate({'bottom':'0px'},200,'easeInOutQuad');
                    })
                    $('#rot1').prepend(
                    $('<img/>',{
                        style	:	'opacity:0',
                        className : 'bg'
                    }).load(
                    function(){
                        $(this).animate({'opacity':'1'},50);
                        $('#rot1 img:first').next().animate({'opacity':'0'},500,function(){
                            $(this).remove();
                        });
                    }
                ).attr('src','images/'+info_elem.find('.info_image').html()).attr('width','500').attr('height','500')
                );
                }
            });
        </script>
    </body>
</html>

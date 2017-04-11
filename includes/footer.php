<div id="social-likes">
	<div id="like-wrapper">
		<div class="social-likes">
			<!--<h3>Tell Your Friends!</h3>-->
      		<ul class="like_sprites">
<?php
$url_desc = urlencode("Serving Edmond, Oklahoma City, And Surrounding Areas");
?>
  <li><a href="http://www.facebook.com/sharer.php?u=http://www.flowerslandscape.com/<?php echo ogURL(); ?>" target="_blank" title="facebook" class="facebook"></a></li>

  <li><a href="http://twitter.com/share?text=<?php echo $url_desc; ?>&amp;url=http://www.flowerslandscape.com" title="twitter" class="twitter" target="_blank"></a></li>

  <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.flowerslandscape.com/<?php echo ogURL(); ?>/&amp;summary=<?php echo $page_description = isset($page_description) ? urlencode($page_description) : urlencode("Flowers Landscape Design is a full service landscape design and construction company with over 10 years of landscape design and construction experience."); ?>" title="linkedin" class="link" target="_blank"></a></li>

  <li><a href="https://plus.google.com/share?url=http://www.flowerslandscape.com/<?php echo ogURL(); ?>" title="google+" class="google" target="_blank"></a></li>
  

    </ul><!--End Like Sprites-->
</div><!--End Social Likes-->
</div><!--end Like Wrapper-->
</div><!--end Like Wrapper-->




<?php
date_default_timezone_set('US/Central');
$date = date('Y');
?>
</div><!-- end content -->
</div><!-- end contentWrapper -->

<div id="footerWrapper">
	<footer>
    
    
    <ul id="social">
	<li><a class="share" href="http://www.facebook.com/sharer.php?u=http://www.flowerslandscape.com/<?php echo ogURL(); ?>"><i class="fa fa-facebook-square"></i></a></li>
    
    <li><a class="share" href="http://twitter.com/share?text=<?php echo $url_desc; ?>&amp;url=http://www.flowerslandscape.com"><i class="fa fa-twitter-square"></i></a></li>
    
    <li><a class="share" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.flowerslandscape.com/<?php echo ogURL(); ?>/&amp;summary=<?php echo $page_description = isset($page_description) ? urlencode($page_description) : urlencode("Flowers Landscape Design is a full service landscape design and construction company with over 10 years of landscape design and construction experience."); ?>"><i class="fa fa-linkedin-square"></i></a></li>
    
    <li><a class="share" href="https://plus.google.com/share?url=http://www.flowerslandscape.com/<?php echo ogURL(); ?>"><i class="fa fa-google-plus-square"></i></a></li>
    
</ul>
    
    
	<p>&copy;<?php echo $date; ?> &bull; Flowers Landscape Design</p>
	<address>4609 Sarava Drive Edmond, Oklahoma 73025</address>
	<a class="theory-brand" href="http://www.theoryofwebolution.com" target="_blank"><span class="logo-text">Site By Theory of <span>Web</span>olution</span></a>
	</footer>
</div><!--end footerWrapper-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $(function(){
		$('#showPhoneNav').click(function(){
			$("#myNav").slideToggle('normal', function(){ //shows Nav area
				if($('#myNav').is(':visible')){
					$('#showPhoneNav').text('Hide Menu').append(' <i class="fa fa-angle-double-up fa-lg"></i>');
				}else{
					$('#showPhoneNav').text('Show Menu').append(' <i class="fa fa-bars fa-lg"></i>');
				}//end of if
				}); //end of slidetoggle
			}); //end of myNav
		}); //end showPhoneNav
	});
	</script>

 
<script type="text/javascript" src="/js/myscript.js"></script>
<!-- Social Share Kit JS -->
	<script type="text/javascript" src="/social-share-kit-master/dist/js/social-share-kit.js"></script>
    <script type="text/javascript">
		SocialShareKit.init();
	</script>
    
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.flowerslandscape.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.flowerslandscape.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">

var isMobile = false; //initiate as false

// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
	
	$(document).ready(function() {
		if(!isMobile){
			$(".fancybox").fancybox();
		}
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){$('a.share').click(function(){var NWin=window.open($(this).prop('href'),'','height=500,width=500');if(window.focus){NWin.focus();}return false;});});
</script>

</body>
</html>
<?php ob_end_flush(); ?>
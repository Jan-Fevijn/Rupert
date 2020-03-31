<?php
	echo '
		<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
			<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
						$("ul.sf-menu").sooperfish();
						$(".to").click(function() {$("html, body").animate({scrollTop:0}, "fast"); return false;});
				});
			</script>'
?>
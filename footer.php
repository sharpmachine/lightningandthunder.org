		<!--begin footer-->
		<div id="footer">&copy;2011 lightningandthunder.org</div>
		<br>
		<!--end footer-->
		<script type="text/javascript" src="javascript/jquery.lightbox-0.5.pack.js"></script>
		<script type="text/javascript">
			$(function() {
				$('a.lightbox').lightBox({fixedNavigation:true});
			});
    	</script>
		<script>
		$(function() {
			// if the function argument is given to overlay, it is assumed to be the onBeforeLoad event listener
			$("a[rel]").overlay(function() {
				// grab wrapper element inside content
				var wrap = this.getContent().find("div.wrap");
				// load only for the first time it is opened
				if (wrap.is(":empty")) {
					wrap.load(this.getTrigger().attr("href"));
				}
			});
		});
		</script>
	</body>
</html>

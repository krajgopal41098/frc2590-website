<?php
/*
	Index Page
*/
include("./header.inc");
?>
	<div id="main" class="container">

		<div id="content">		
			<div id="calendar-container">
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=b4pomdgjtn2covkiid9d3ilgv0%40group.calendar.google.com&amp;color=%23B1365F&amp;src=p9189o9ccjmmrrdaoiddh29i8c%40group.calendar.google.com&amp;color=%235A6986&amp;src=8419s7gahtr7atep3vdfk44lhc%40group.calendar.google.com&amp;color=%232F6309&amp;src=jmk6lc7mqmb64tru5d9p2ihsb0%40group.calendar.google.com&amp;color=%23853104&amp;src=o8hctjji5fotm0la5lhb80hf14%40group.calendar.google.com&amp;color=%235229A3&amp;src=s0pl1odpkmp2lo3p6ts6c3qml8%40group.calendar.google.com&amp;color=%23182C57&amp;src=ok7qjal5ir7nab4m2j9du16kjo%40group.calendar.google.com&amp;color=%23BE6D00&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
		</div><!--content-->
		
		<aside id="sidebar">
			
			<!-- include sidebar from template file-->
			<?php include("./sidebarNav.inc"); ?>

			<img src="<?php echo $config->urls->templates?>images/div2.jpg">
			<section>
			</section>
			
		</aside> <!-- sidebar -->
		
	</div> <!--container-->
<?php
include("./footer.inc");
?>
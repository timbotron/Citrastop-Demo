<div data-role="content">
	
	<button id="refreshtime" data-icon="forward" data-theme="a">Refresh</button><br />
	<ul data-role="listview">
		<li data-role="list-divider">Laf BART</li>
		<li id="1">
			<h3 class="times"></h3>
			<p class="ul-li-aside"></p>
		</li>
		<li data-role="list-divider">Mac BART</li>
		<li id="2">
			<h3 class="times"></h3>
			<p class="ul-li-aside"></p>
		</li>		
	</ul>
</div><!-- /content -->



<script type="text/javascript">
var output;
var the_stops = [
		{
			id: "1",
			the_xml: "http://api.bart.gov/api/sched.aspx?cmd=depart&orig=LAFY&dest=MCAR&date=now&key=MW9S-E7SL-26DU-VV8V&b=0&a=4&l=0"
		},
		{
			id: "2",
			the_xml: "http://api.bart.gov/api/sched.aspx?cmd=depart&orig=MCAR&dest=LAFY&date=now&key=MW9S-E7SL-26DU-VV8V&b=0&a=4&l=0"
		}
	];
function refresh_me()
{
	$.get(the_stops[0]['the_xml'], function(data)
	{
		$('#1').find(".ul-li-aside").append($(data).find("time").text()).append(" ").append($(data).find("date").text());
		$(data).find("leg").each(function()
		{
			$('#1').find(".times").append($(this).attr("origTimeMin")).append(" to ").append($(this).attr("trainHeadStation")).append("<br />");
		});		
		
	});
	
	$.get(the_stops[1]['the_xml'], function(data)
	{
		$('#2').find(".ul-li-aside").append($(data).find("time").text()).append(" ").append($(data).find("date").text());
		$(data).find("leg").each(function()
		{
			$('#2').find(".times").append($(this).attr("origTimeMin")).append(" to ").append($(this).attr("trainHeadStation")).append("<br />");
		});		
		
	});
}

function clear()
{
	$(".ul-li-aside").text("");
	$(".times").text("");
}
$(document).ready(function() {

	refresh_me();
		

});

$("#refreshtime").click(function() {
	clear();
	refresh_me();
});

</script>

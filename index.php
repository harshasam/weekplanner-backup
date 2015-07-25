<?php
include ("header.php");
if ( !$sess->isLoggedIn() ) {
      header ("Location: login.php");
}
?>

<html>
<script type="text/javascript">
/**** Calendar to pick week ****/
/*
$(function() {
    var startDate;
    var endDate;
    
    var selectCurrentWeek = function() {
        window.setTimeout(function () {
            $('.week-picker').find('.ui-datepicker-current-day a').addClass('ui-state-active')
        }, 1);
    }
    
    $('.week-picker').datepicker( {
        showOtherMonths: true,
        selectOtherMonths: true,
        onSelect: function(dateText, inst) { 
            var date = $(this).datepicker('getDate');
            startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
            endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);
            var dateFormat = inst.settings.dateFormat || $.datepicker._defaults.dateFormat;
            $('#startDate').text($.datepicker.formatDate( dateFormat, startDate, inst.settings ));
            $('#endDate').text($.datepicker.formatDate( dateFormat, endDate, inst.settings ));
            
            selectCurrentWeek();
        },
        beforeShowDay: function(date) {
            var cssClass = '';
            if(date >= startDate && date <= endDate)
                cssClass = 'ui-datepicker-current-day';
            return [true, cssClass];
        },
        onChangeMonthYear: function(year, month, inst) {
            selectCurrentWeek();
        }
    });
    
    $('.week-picker .ui-datepicker-calendar tr').live('mousemove', function() { $(this).find('td a').addClass('ui-state-hover'); });
    $('.week-picker .ui-datepicker-calendar tr').live('mouseleave', function() { $(this).find('td a').removeClass('ui-state-hover'); });
});
*/

function chk() {
	var mon1 = $("#table #mon1").text();
	var tue1 = $("#table #tue1").text();
	var wed1 = $("#table #wed1").text();
	var thu1 = $("#table #thu1").text();
	var fri1 = $("#table #fri1").text();
	var sat1 = $("#table #sat1").text();
	var sun1 = $("#table #sun1").text();
	
	var mon2 = $("#table #mon2").text();
	var tue2 = $("#table #tue2").text();
	var wed2 = $("#table #wed2").text();
	var thu2 = $("#table #thu2").text();
	var fri2 = $("#table #fri2").text();
	var sat2 = $("#table #sat2").text();
	var sun2 = $("#table #sun2").text();
	
	var mon3 = $("#table #mon3").text();
	var tue3 = $("#table #tue3").text();
	var wed3 = $("#table #wed3").text();
	var thu3 = $("#table #thu3").text();
	var fri3 = $("#table #fri3").text();
	var sat3 = $("#table #sat3").text();
	var sun3 = $("#table #sun3").text();
	
	var mon4 = $("#table #mon4").text();
	var tue4 = $("#table #tue4").text();
	var wed4 = $("#table #wed4").text();
	var thu4 = $("#table #thu4").text();
	var fri4 = $("#table #fri4").text();
	var sat4 = $("#table #sat4").text();
	var sun4 = $("#table #sun4").text();
	
	var mon5 = $("#table #mon5").text();
	var tue5 = $("#table #tue5").text();
	var wed5 = $("#table #wed5").text();
	var thu5 = $("#table #thu5").text();
	var fri5 = $("#table #fri5").text();
	var sat5 = $("#table #sat5").text();
	var sun5 = $("#table #sun5").text();

	var mon6 = $("#table #mon6").text();
	var tue6 = $("#table #tue6").text();
	var wed6 = $("#table #wed6").text();
	var thu6 = $("#table #thu6").text();
	var fri6 = $("#table #fri6").text();
	var sat6 = $("#table #sat6").text();
	var sun6 = $("#table #sun6").text();
	
	var mon7 = $("#table #mon7").text();
	var tue7 = $("#table #tue7").text();
	var wed7 = $("#table #wed7").text();
	var thu7 = $("#table #thu7").text();
	var fri7 = $("#table #fri7").text();
	var sat7 = $("#table #sat7").text();
	var sun7 = $("#table #sun7").text();

	var mon8 = $("#table #mon8").text();
	var tue8 = $("#table #tue8").text();
	var wed8 = $("#table #wed8").text();
	var thu8 = $("#table #thu8").text();
	var fri8 = $("#table #fri8").text();
	var sat8 = $("#table #sat8").text();
	var sun8 = $("#table #sun8").text();
	
	var mon9 = $("#table #mon9").text();
	var tue9 = $("#table #tue9").text();
	var wed9 = $("#table #wed9").text();
	var thu9 = $("#table #thu9").text();
	var fri9 = $("#table #fri9").text();
	var sat9 = $("#table #sat9").text();
	var sun9 = $("#table #sun9").text();
	
	//var dataString = "mon1="+ mon1+"&tue1="+tue1   +"&mon2="+ mon2+"&tue2="+tue2;
	var dataString = "mon1="+mon1+"&tue1="+tue1+"&wed1="+wed1+"&thu1="+thu1+"&fri1="+fri1+"&sat1="+sat1+"&sun1="+sun1+"&mon2="+mon2+"&tue2="+tue2+"&wed2="+wed2+"&thu2="+thu2+"&fri2="+fri2+"&sat2="+sat2+"&sun2="+sun2+"&mon3="+mon3+"&tue3="+tue3+"&wed3="+wed3+"&thu3="+thu3+"&fri3="+fri3+"&sat3="+sat3+"&sun3="+sun3+"&mon4="+mon4+"&tue4="+tue4+"&wed4="+wed4+"&thu4="+thu4+"&fri4="+fri4+"&sat4="+sat4+"&sun4="+sun4+"&mon5="+mon5+"&tue5="+tue5+"&wed5="+wed5+"&thu5="+thu5+"&fri5="+fri5+"&sat5="+sat5+"&sun5="+sun5+"&mon6="+mon6+"&tue6="+tue6+"&wed6="+wed6+"&thu6="+thu6+"&fri6="+fri6+"&sat6="+sat6+"&sun6="+sun6+"&mon7="+mon7+"&tue7="+tue7+"&wed7="+wed7+"&thu7="+thu7+"&fri7="+fri7+"&sat7="+sat7+"&sun7="+sun7+"&mon8="+mon8+"&tue8="+tue8+"&wed8="+wed8+"&thu8="+thu8+"&fri8="+fri8+"&sat8="+sat8+"&sun8="+sun8+"&mon9="+mon9+"&tue9="+tue9+"&wed9="+wed9+"&thu9="+thu9+"&fri9="+fri9+"&sat9="+sat9+"&sun9="+sun9;					
	/*
	if (window.event.keyCode == 13) { 
		dataString = dataString + "<br/>";
	}  */
	$.ajax({
		type: "post",
		url: "connection.php",
		data: dataString,
		cache: false,
		success: function(text){
			$(".test").html(text);			
		}  
	});
	return false; 
}
</script>

<body>
    <div class="week-picker"></div>
<?php  /*** Week display from the calendar***/
/*  
    <div class="week"><label><strong>Week :</label> <span id="startDate"></span> - <span id="endDate"></span></strong></div>
*/
?>
	<div class="test"></div>

<?php 
$days = array("","MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY","SATURDAY","SUNDAY");
$main = array("Sophia","Harsha","<strong>Breakfast</strong></br>Sophia</br>Harsha","<strong>Lunch</strong></br>Sophia</br>Harsha","<strong>Snack</strong></br>Sophia</br>Harsha","<strong>Dinner</strong>","Sophia gym","Harsha gym","");
$input = array();
?>

</div>
<form method="POST" id="week-form">
<div class="table">
<table id="table">
	<tr>
		<?php foreach( $days as $d) { ?>
			<th> <?php echo $d; ?> </th>
		<?php } ?>
	</tr>
		<?php $n = 1;?>
		<?php foreach( $main as $mm=>$m) { ?>
				<tr><td> <?php echo $m; ?> 
						<?php for ($i=1; $i<count($days); $i++) { ?>
								<td contenteditable="true" id="<?php echo strtolower(substr($days[$i],0,3)).$n; ?>" name="<?php echo strtolower(substr($days[$i],0,3)).$n; ?>"> <?php echo getCellData(strtolower(substr($days[$i],0,3)).$n)?> </td>
						<?php } ?>
				</td></tr>
				<?php $n++; ?>
		<?php }?>
</table>
</br>
<button onclick="return chk()" class="button">Save</button>
</div>
</form>

<form method="POST" action="logout.php" class="logout-form">
	<input type="submit" class="button" id="logout" value="Logout" /> 
</form>
</div>
</body>

</html>

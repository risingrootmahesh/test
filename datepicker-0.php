<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <title>date picker bootstrap</title>
  <style type="text/css">
  	@import url("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/blitzer/jquery-ui.min.css");
		.event a {
    /*background-color: #5FBA7D !important;
    color: #ffffff !important;*/
  	background: #FC0 !important;
	}
  </style>
  </head>
<body>
<div class="row">
	<div class="col-4">
		<h2>jQuery Datepicker(disable all dates)</h2>
		<p>Date: <input type="text" id="datepicker1"></p>
	</div>
	<div class="col-4">
		<h2>jQuery Datepicker(disable specific dates)</h2>
		<p>Date: <input type="text" id="datepicker2"></p>
	</div>
	<div class="col-4">
		<h2>jQuery Datepicker(hightlight specific dates)</h2>
		<p>Date: <input type="text" id="datepicker3"></p>
	</div>
</div>

<div class="row">
	<div class="col-4">
		<h2>jQuery Datepicker(set min date)</h2>
		<p>Date: <input type="text" id="minDate"></p>
	</div>
	<div class="col-4">
		<h2>jQuery Datepicker(max date)</h2>
		<p>Date: <input type="text" id="maxDate"></p>
	</div>
	<div class="col-4">
		<h2>jQuery Datepicker(maxDate example 2)</h2>
		<p>Date: <input type="text" id="maxDate2"></p>
	</div>
</div>

<div class="row">
	<div class="col-4">
		<h2>jQuery Datepicker(onSelect)</h2>
		<p>Date: <input type="text" id="onSelect"></p>
	</div>
	<div class="col-4">
		<h2>jQuery Datepicker(Hightlight)</h2>
		<div id="datepicker44"></div>
	</div>
	
</div>

<script type="text/javascript">
	/* -----------disable specific dates--------------- */
	var dateRange=['2021-09-20','2021-09-21']
	$('#datepicker2').datepicker({
		beforeShowDay: function (date) {
			var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
			console.log(dateString);
			return [dateRange.indexOf(dateString) == -1];
		}
    });
	/* -----------disable all dates--------------- */
	$('#datepicker1').datepicker({
    	beforeShowDay:function(date){
    		return [false, ''];
  		}
	});
	/* -----------hightlight specific dates --------------- */
	// $( function() {
	    // An array of dates
	    var eventDates = {};
	    eventDates[ new Date( '09/07/2021' )] = new Date( '09/07/2021' );
	    eventDates[ new Date( '09/15/2021' )] = new Date( '09/15/2021' );
	    eventDates[ new Date( '09/20/2021' )] = new Date( '09/20/2021' );
	    eventDates[ new Date( '09/25/2021' )] = new Date( '09/25/2021' );
    
	    // datepicker
	    $('#datepicker3').datepicker({
	        beforeShowDay: function( date ) {
	            var highlight = eventDates[date];
	            if( highlight ) {
	                 return [true, "event", 'Tooltip text'];
	            } else {
	                 return [false, '', ''];
	            }
	        }
	    });
	// });
</script>
<script type="text/javascript">
	/* ---------min date global setting------------ */
	$("#minDate").datepicker({
      dateFormat: 'dd-mm-yy',
      minDate   : 0    
	})
	/* ---------max date------------ */
	$("#maxDate").datepicker({
      dateFormat: 'dd/mm/yy',
      minDate   : -0,   
      maxDate: new Date("2021,10,18") 
      // If you want use hard coded date, use the new Date(2013, 1, 18) pattern.
			// If you want to use generic pattern, use "+1D +1M +1Y".
	})
	/* ---------max date example 2------------ */
	$("#maxDate2").datepicker({
		// changeMonth:false,
		// changeYear:false,
		// dateFormat: 'dd/mm/yy',
		beforeShow: function(input, inst) {
			var minDate = new Date('2021,09,20');
			// console.log(minDate);
			$('#maxDate2').datepicker('option', 'minDate', minDate);
			var maxDate = new Date(minDate.valueOf());
			maxDate.setDate(maxDate.getDate() + 7);
			$('#maxDate2').datepicker('option', 'maxDate', maxDate);
		}      
	})
	/* ---------max date example 2------------ */
	$("#onSelect").datepicker({
		 onSelect: function(date) {
            // var get = $(this).datepicker('getDate');
            // var date=get.getDay+"/"+get.getMonth+"/"+get.getYear;
            alert(date);
        }
	})

	/* -----------hightlight specific dates --------------- */
	    // An array of dates
	   var arr=['09/07/2021','09/10/2021','09/15/2021'];
	   var eventDates = {};
    	$.each(arr,function(i,v){
    		eventDates[new Date(v)]=new Date(v);
    	})
    	console.log("arr "+arr);
    	console.log("evnt "+eventDates);
	    // datepicker
	    $('#datepicker44').datepicker({
	        beforeShowDay: function( date ) {
	            var highlight = eventDates[date];
	            if( highlight ) {
	                 return [true, "event", 'Tooltip text'];
	            } else {
	                 return [false, '', ''];
	            }
	        }
	    });
</script>
</body>
</html>

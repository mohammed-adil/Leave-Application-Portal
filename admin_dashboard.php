<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>

		@import url('https://fonts.googleapis.com/css?family=Roboto');

		body {font-family: 'Roboto', sans-serif;}
		
		.sidenav {
			height: 100%;
			width: 250px;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			padding-top: 20px;
			background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3) ), url("dog.jpg");
			background-size: cover;
			box-shadow: 0 0 10px #7b7777;
		}

		.sidenav li {
			padding: 6px 8px 6px 16px;
			text-decoration: none;
			font-size: 18px;
			color: #fff!important;
			display: block;
		}

		.sidenav li:hover {
			color: #f1f1f1;
		}

		.main {
			margin-left: 160px; /* Same as the width of the sidenav */
			font-size: 28px; /* Increased text to enable scrolling */
			padding: 0px 10px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}

		input {
			border-radius: 0px!important;
		}	

		.form-control {
			border: 1px solid #000!important;
			border-radius: 0px!important;
			color: #000!important;
		}

		.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
			background-color: #f6f6f6!important;
		}

		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 4px;
			padding-left: 5px;
		}

		th {
			background: #796ed4;
			color: #fff;
		}

		tr:nth-child(odd) {
			background-color: #dddddd;
		}

		.row-data:hover {
			background: rgba(0,0,255,.2);
			cursor: pointer
		}
		
		.btn.focus, .btn:focus, .btn:hover {
			color: #333!important;
			text-decoration: none;
			background: #fff!important;
		}
	</style>
</head>
<body>
	<div class="sidenav">
	<div style="height: 220px;width: 100%;padding: 10px;">
	<div style="background: url('peoM.jpg');height: inherit;width: inherit;background-size: cover;border-radius: 100%">
	</div>
	</div>
	<ul style="padding: 10px; margin-top: 20px">
		<li class="btn all_apps" style="background: rgba(255, 255, 255, 0.5);border-radius: 0px!important;color: #f3f3f3;outline: none;border-color: #444;border-width: 2px;border-radius: 100px!important;margin-bottom:5px;">ALL</li>
		<li class="btn pen_apps" style="background: rgba(255, 255, 255, 0.5);border-radius: 0px!important;color: #f3f3f3;outline: none;border-color: #444;border-width: 2px;border-radius: 100px!important;margin-bottom:5px;">PENDING</li>
		<li class="btn new_apps" style="background: rgba(255, 255, 255, 0.5);border-radius: 0px!important;color: #f3f3f3;outline: none;border-color: #444;border-width: 2px;border-radius: 100px!important;margin-bottom:5px;">NEW!</li>
		<li class="btn acc_apps" style="background: rgba(255, 255, 255, 0.5);border-radius: 0px!important;color: #f3f3f3;outline: none;border-color: #444;border-width: 2px;border-radius: 100px!important;margin-bottom:5px;">ACCEPTED</li>
		<li class="btn rej_apps" style="background: rgba(255, 255, 255, 0.5);border-radius: 0px!important;color: #f3f3f3;outline: none;border-color: #444;border-width: 2px;border-radius: 100px!important;margin-bottom:5px;">REJECTED</li>
		<li class="btn rej_apps" style="background: rgba(255, 255, 255, 0.5);border-radius: 0px!important;color: #f3f3f3;outline: none;border-color: #444;border-width: 2px;border-radius: 100px!important;margin-bottom:5px;">ANALYTICS</li>
	</div>
	</ul>
	<div>
		<h3 id="navdars" style="text-align: center;float: right;margin-right: 40px;margin-bottom: 50px;border-bottom: 2px solid cornflowerblue;">ALL APPLICATIONS</h3>
		<div style="padding-left: 20px;width: 83%;margin-left: 250px;padding-right: 20px">
			<table id="records_table" class="table-responsive" style="box-shadow: 0 17px 50px 0 rgba(0, 0, 0, 0.19), 0px 2px 20px 0 rgba(0, 0, 0, 0.24)">
				<tr>
					<th style="padding: 10px">NAME</th>
					<th style="padding: 10px">ENROLLMENT NUMBER</th>
					<th style="padding: 10px">BRANCH</th>
					<th style="padding: 10px">SEMESTER</th>
					<th style="padding: 10px">NATURE OF LEAVE</th>
					<th style="padding: 10px">PURPOSE</th>
					<th style="padding: 10px">CLASSES SCHEDULED</th>
					<th style="padding: 10px">ADDRESS</th>
					<th style="padding: 10px">MOBILE</th>
					<th style="padding: 10px">EMAIL</th>
					<th style="padding: 10px">UPLOADS</th>
					<th style="padding: 10px">STATUS</th>
				</tr>
			</table>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content" style="border-radius: 0px!important">
				<div class="modal-header">
					<h4 class="modal-title">Leave Application (Cannot be edited)</h4>
				</div>
				<div class="modal-body">
				<div class="container">
					<div class="form-horizontal">
						<!--<div class="form-group">
						<label class="control-label col-sm-2" for="email">NAME</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_name"></p>
						</div>
						</div>
	-->
						<div class="form-group">
						<label class="control-label col-sm-2" for="email">ENROLLMENT NUMBER</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_enroll"></p>
						</div>
						</div>
<!--
						<div class="form-group">
						<label class="control-label col-sm-2" for="email">BRANCH</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_branch"></p>
						</div>
						</div>
	-->
						<div class="form-group">
						<label class="control-label col-sm-2" for="email">SEMESTER</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_semester" ></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">NATURE OF LEAVE</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_nature"></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">PURPOSE</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_purpose"></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">CLASS SCHEDULED ON LEAVE</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_classScheduledOnLeave"></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">START DATE</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_startdate"></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">END DATE</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_enddate"></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">ADDRESS</label>
						<div class="col-sm-4">
							<textarea type="email" class="form-control" id="ans_addr" disabled></textarea>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">MOBILE</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_mobile"></p>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-sm-2" for="email">EMAIL</label>
						<div class="col-sm-4">
							<p type="email" class="form-control" id="ans_email"></p>
						</div>
						</div>
						<input id="Application_id" type="hidden" value=""/>
						<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-default Acpt" style="background: #4caf50;border-radius: 0px!important;color: #fff;outline: none;border-color: #444;border-width: 2px;">Accept</button>
							<button class="btn btn-default rjct" style="background: #ff1744;border-radius: 0px!important;color: #fff;outline: none;border-color: #444;border-width: 2px;">Reject</button>
							<button class="btn btn-default pndg" style="background: #ffc400;border-radius: 0px!important;color: #000;outline: none;border-color: #444;border-width: 2px;">Pending</button>
							<button type="button" class="btn btn-default" data-dismiss="modal" style="background: #fff;border-radius: 0px!important;color: #000;outline: none;border-color: #000;border-width: 2px;">&nbsp&nbsp Close &nbsp&nbsp</button>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>

			</div>
		</div>
		</div>
</body>
<script type="text/javascript" src="js-lib/jq.min.js"></script>
	<script type="text/javascript">

		$(document).on('click','.all_apps',function() {
			location.reload();
		});

		$(document).on('click','.pen_apps',function() {
			$.ajax({
		        url: './core/admin-dashboard-fetch.php',
		        type: 'post',
		        data: {method: 'PenApps'},
		        success: function(data) {
		        	// check for no application
		        	// if data == 'No applications currently' else //logic ends
		            // showdirectly
		            console.log(data);
					response = $.parseJSON(data);
					$('#navdars').html("PENDING APPLICATIONS");
					$("#records_table").find("tr:gt(0)").remove();
				$(function() {
					$.each(response, function(i, item) {
						var color = "#222";
						var tity = "no action";
						if(item.status == 0) {

						} else if(item.status == 1) {
							color = "#ff1744";
							tity = "REJECTED";
						} else if(item.status == 2) {
							color = "#ffc400";
							tity = "PENDING";
						} else if(item.status == 3) {
							color = "#4caf50";
							tity = "ACCEPTED";
						}
						var $tr = $('<tr id="row-data" onclick="ShowDet('+item.id+')" class="row-data" data-toggle="modal" data-target="#myModal">').append(
							$('<td id="stname'+item.id+'">').text(item.studentName),
							$('<td id="stroll'+item.id+'">').text(item.rollNumber.toUpperCase()),
							$('<td id="stbrnch'+item.id+'">').text(item.branch.toUpperCase()),
							$('<td id="stsem'+item.id+'">').text(item.semester),
							$('<td id="stnatleave'+item.id+'">').text(item.natureOfLeave),
							$('<td id="stpurpose'+item.id+'">').text(item.purpose),
							$('<td id="stshedornt'+item.id+'">').text(item.classScheduledOnLeave.toUpperCase()),
							$('<td style="display: none" id="ststrtdat'+item.id+'">').text(item.startDate.toUpperCase()),
							$('<td style="display: none" id="stenddat'+item.id+'">').text(item.endDate.toUpperCase()),
							$('<td id="addr'+item.id+'">').text(item.address),
							$('<td id="stmbno'+item.id+'">').text(item.mobile),
							$('<td id="stemai'+item.id+'">').text(item.email),
							$('<td>').append($('<a>').attr({href:"uploads/"+item.uploadedImageName,target:"_blank"}).text("UP")),
							$('<td id="status_app">').append($('<div title="'+tity+'" style="border:4px solid #222;background:'+color+';width: 25px;height: 25px;border-radius: 0%;margin: auto">'))
						).appendTo('#records_table');
						//console.log($tr.wrap('<p>').html());
					});
				});
		        }
	    	})
		});
		
		$(document).on('click','.new_apps',function() {
			$.ajax({
		        url: './core/admin-dashboard-fetch.php',
		        type: 'post',
		        data: {method: 'noactionApps'},
		        success: function(data) {
		        	// check for no application
		        	// if data == 'No applications currently' else //logic ends
		            // showdirectly
		            console.log(data);
					response = $.parseJSON(data);
					$('#navdars').html("NEW APPLICATIONS");
					$("#records_table").find("tr:gt(0)").remove();
				$(function() {
					$.each(response, function(i, item) {
						var color = "#222";
						var tity = "no action";
						if(item.status == 0) {

						} else if(item.status == 1) {
							color = "#ff1744";
							tity = "REJECTED";
						} else if(item.status == 2) {
							color = "#ffc400";
							tity = "PENDING";
						} else if(item.status == 3) {
							color = "#4caf50";
							tity = "ACCEPTED";
						}
						var $tr = $('<tr id="row-data" onclick="ShowDet('+item.id+')" class="row-data" data-toggle="modal" data-target="#myModal">').append(
							$('<td id="stname'+item.id+'">').text(item.studentName),
							$('<td id="stroll'+item.id+'">').text(item.rollNumber.toUpperCase()),
							$('<td id="stbrnch'+item.id+'">').text(item.branch.toUpperCase()),
							$('<td id="stsem'+item.id+'">').text(item.semester),
							$('<td id="stnatleave'+item.id+'">').text(item.natureOfLeave),
							$('<td id="stpurpose'+item.id+'">').text(item.purpose),
							$('<td id="stshedornt'+item.id+'">').text(item.classScheduledOnLeave.toUpperCase()),
							$('<td style="display: none" id="ststrtdat'+item.id+'">').text(item.startDate.toUpperCase()),
							$('<td style="display: none" id="stenddat'+item.id+'">').text(item.endDate.toUpperCase()),
							$('<td id="addr'+item.id+'">').text(item.address),
							$('<td id="stmbno'+item.id+'">').text(item.mobile),
							$('<td id="stemai'+item.id+'">').text(item.email),
							$('<td>').append($('<a>').attr({href:"uploads/"+item.uploadedImageName,target:"_blank"}).text("UP")),
							$('<td id="status_app">').append($('<div title="'+tity+'" style="border:4px solid #222;background:'+color+';width: 25px;height: 25px;border-radius: 0%;margin: auto">'))
						).appendTo('#records_table');
						//console.log($tr.wrap('<p>').html());
					});
				});
		        }
	    	})
		});

		$(document).on('click','.acc_apps',function() {
			$.ajax({
		        url: './core/admin-dashboard-fetch.php',
		        type: 'post',
		        data: {method: 'AcApps'},
		        success: function(data) {
		        	// check for no application
		        	// if data == 'No applications currently' else //logic ends
		            // showdirectly
		            console.log(data);
					response = $.parseJSON(data);
					$('#navdars').html("ACCEPTED APPLICATIONS");
					$("#records_table").find("tr:gt(0)").remove();
				$(function() {
					$.each(response, function(i, item) {
						var color = "#222";
						var tity = "no action";
						if(item.status == 0) {

						} else if(item.status == 1) {
							color = "#ff1744";
							tity = "REJECTED";
						} else if(item.status == 2) {
							color = "#ffc400";
							tity = "PENDING";
						} else if(item.status == 3) {
							color = "#4caf50";
							tity = "ACCEPTED";
						}
						var $tr = $('<tr id="row-data" onclick="ShowDet('+item.id+')" class="row-data" data-toggle="modal" data-target="#myModal">').append(
							$('<td id="stname'+item.id+'">').text(item.studentName),
							$('<td id="stroll'+item.id+'">').text(item.rollNumber.toUpperCase()),
							$('<td id="stbrnch'+item.id+'">').text(item.branch.toUpperCase()),
							$('<td id="stsem'+item.id+'">').text(item.semester),
							$('<td id="stnatleave'+item.id+'">').text(item.natureOfLeave),
							$('<td id="stpurpose'+item.id+'">').text(item.purpose),
							$('<td id="stshedornt'+item.id+'">').text(item.classScheduledOnLeave.toUpperCase()),
							$('<td style="display: none" id="ststrtdat'+item.id+'">').text(item.startDate.toUpperCase()),
							$('<td style="display: none" id="stenddat'+item.id+'">').text(item.endDate.toUpperCase()),
							$('<td id="addr'+item.id+'">').text(item.address),
							$('<td id="stmbno'+item.id+'">').text(item.mobile),
							$('<td id="stemai'+item.id+'">').text(item.email),
							$('<td>').append($('<a>').attr({href:"uploads/"+item.uploadedImageName,target:"_blank"}).text("UP")),
							$('<td id="status_app">').append($('<div title="'+tity+'" style="border:4px solid #222;background:'+color+';width: 25px;height: 25px;border-radius: 0%;margin: auto">'))
						).appendTo('#records_table');
						//console.log($tr.wrap('<p>').html());
					});
				});
		        }
	    	})
		});

		$(document).on('click','.rej_apps',function() {
			$.ajax({
		        url: './core/admin-dashboard-fetch.php',
		        type: 'post',
		        data: {method: 'RejApps'},
		        success: function(data) {
		        	// check for no application
		        	// if data == 'No applications currently' else //logic ends
		            // showdirectly
		            console.log(data);
					response = $.parseJSON(data);
					$('#navdars').html("REJECTED APPLICATIONS");
					$("#records_table").find("tr:gt(0)").remove();
				$(function() {
					$.each(response, function(i, item) {
						var color = "#222";
						var tity = "no action";
						if(item.status == 0) {

						} else if(item.status == 1) {
							color = "#ff1744";
							tity = "REJECTED";
						} else if(item.status == 2) {
							color = "#ffc400";
							tity = "PENDING";
						} else if(item.status == 3) {
							color = "#4caf50";
							tity = "ACCEPTED";
						}
						var $tr = $('<tr id="row-data" onclick="ShowDet('+item.id+')" class="row-data" data-toggle="modal" data-target="#myModal">').append(
							$('<td id="stname'+item.id+'">').text(item.studentName),
							$('<td id="stroll'+item.id+'">').text(item.rollNumber.toUpperCase()),
							$('<td id="stbrnch'+item.id+'">').text(item.branch.toUpperCase()),
							$('<td id="stsem'+item.id+'">').text(item.semester),
							$('<td id="stnatleave'+item.id+'">').text(item.natureOfLeave),
							$('<td id="stpurpose'+item.id+'">').text(item.purpose),
							$('<td id="stshedornt'+item.id+'">').text(item.classScheduledOnLeave.toUpperCase()),
							$('<td style="display: none" id="ststrtdat'+item.id+'">').text(item.startDate.toUpperCase()),
							$('<td style="display: none" id="stenddat'+item.id+'">').text(item.endDate.toUpperCase()),
							$('<td id="addr'+item.id+'">').text(item.address),
							$('<td id="stmbno'+item.id+'">').text(item.mobile),
							$('<td id="stemai'+item.id+'">').text(item.email),
							$('<td>').append($('<a>').attr({href:"uploads/"+item.uploadedImageName,target:"_blank"}).text("UP")),
							$('<td id="status_app">').append($('<div title="'+tity+'" style="border:4px solid #222;background:'+color+';width: 25px;height: 25px;border-radius: 0%;margin: auto">'))
						).appendTo('#records_table');
						//console.log($tr.wrap('<p>').html());
					});
				});
		        }
	    	})
		});
		//on accept ajax 
		//on pending ajax
		//on reject ajax
		$(document).on('click','.Acpt',function() {
			var z_id = ($('#Application_id').attr('value'));
			$.ajax({
		        url: './core/admin-action-taken.php',
		        type: 'post',
		        data: {method: 'AcAppsUP',z_id},
		        success: function(data) {
		            console.log(data);
		        }
	    	});
			location.reload();
		});

		$(document).on('click','.rjct',function() {
			var z_id = ($('#Application_id').attr('value'));
			$.ajax({
		        url: './core/admin-action-taken.php',
		        type: 'post',
		        data: {method: 'RejAppsUP',z_id},
		        success: function(data) {
		            console.log(data);
		        }
	    	});
			location.reload();
		});

		$(document).on('click','.pndg',function() {
			var z_id = ($('#Application_id').attr('value'));
			$.ajax({
		        url: './core/admin-action-taken.php',
		        type: 'post',
		        data: {method: 'PenAppsUP',z_id},
		        success: function(data) {
		            console.log(data);
		        }
	    	});
			location.reload();
		});

		text_truncate = function(str,size) {
			if (str.length > size) {
			return str.substring(0, size)+'...';
			} else {
			return str;
			}
		};

		ShowDet = function(id) {
			//var stname = document.getElementById("stname"+id).textContent;
			var stroll = document.getElementById("stroll"+id).textContent;
			//var stbrnch = document.getElementById("stbrnch"+id).textContent;
			var stsem = document.getElementById("stsem"+id).textContent;
			var stnatleave = document.getElementById("stnatleave"+id).textContent;
			var stpurpose = document.getElementById("stpurpose"+id).textContent;
			var stshedornt = document.getElementById("stshedornt"+id).textContent;
			var addr = document.getElementById("addr"+id).textContent;
			var stmbno = document.getElementById("stmbno"+id).textContent;
			var stemai = document.getElementById("stemai"+id).textContent;
			var ststrtdat = document.getElementById("ststrtdat"+id).textContent;
			var stenddat = document.getElementById("stenddat"+id).textContent;
			console.log("error");
			//document.getElementById("ans_name").textContent = stname;
			document.getElementById("ans_enroll").textContent = stroll;
			//document.getElementById("ans_branch").textContent = stbrnch;
			document.getElementById("ans_semester").textContent = stsem;
			document.getElementById("ans_nature").textContent = stnatleave;
			document.getElementById("ans_purpose").textContent = stpurpose;
			document.getElementById("ans_classScheduledOnLeave").textContent = stshedornt;
			document.getElementById("ans_startdate").textContent = ststrtdat;
			document.getElementById("ans_enddate").textContent = stenddat;
			document.getElementById("ans_addr").textContent = addr;
			document.getElementById("ans_mobile").textContent = stmbno;
			document.getElementById("ans_email").textContent = stemai;
			document.getElementById("Application_id").setAttribute("value",id);

		}

		$(document).ready(function(){
		    $.ajax({
		        url: './core/admin-dashboard-fetch.php',
		        type: 'post',
		        data: {method: 'getApps'},
		        success: function(data) {
		        	// check for no application
		        	// if data == 'No applications currently' else //logic ends
		            // showdirectly
		            console.log(data);
					response = $.parseJSON(data);

				$(function() {
					$.each(response, function(i, item) {
						var color = "#222";
						var opacit = 1;
						var tity = "no action";
						if(item.status == 0) {

						} else if(item.status == 1) {
							color = "#ff1744";
							tity = "REJECTED";
						} else if(item.status == 2) {
							color = "#ffc400";
							tity = "PENDING";
						} else if(item.status == 3) {
							color = "#4caf50";
							opacit = .6;
							tity = "ACCEPTED";
						}
						var $tr = $('<tr id="row-data" onclick="ShowDet('+item.id+')" style="opacity:'+opacit+'" class="row-data" data-toggle="modal" data-target="#myModal">').append(
							$('<td style="padding-left: 10px;padding-right: 10px" id="stname'+item.id+'">').text(item.studentName),
							$('<td id="stroll'+item.id+'">').text(item.rollNumber.toUpperCase()),
							$('<td id="stbrnch'+item.id+'">').text(item.branch.toUpperCase()),
							$('<td id="stsem'+item.id+'">').text(item.semester),
							$('<td id="stnatleave'+item.id+'">').text(item.natureOfLeave),
							$('<td id="stpurpose'+item.id+'">').text(item.purpose),
							$('<td id="stshedornt'+item.id+'">').text(item.classScheduledOnLeave.toUpperCase()),
							$('<td style="display: none" id="ststrtdat'+item.id+'">').text(item.startDate.toUpperCase()),
							$('<td style="display: none" id="stenddat'+item.id+'">').text(item.endDate.toUpperCase()),
							$('<td id="addr'+item.id+'">').text(item.address),
							$('<td id="stmbno'+item.id+'">').text(item.mobile),
							$('<td id="stemai'+item.id+'">').text(item.email),
							$('<td>').append($('<a>').attr({href:"uploads/"+item.uploadedImageName,target:"_blank"}).text("UP")),
							$('<td id="status_app">').append($('<div title="'+tity+'" style="border:4px solid #222;background:'+color+';width: 25px;height: 25px;border-radius: 0%;margin: auto">'))
						).appendTo('#records_table');
						//console.log($tr.wrap('<p>').html());
					});
				});
		        }
	    	})
		});
	</script>
</html>
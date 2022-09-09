<?php include '../config/config.php'; ?>
<?php class data extends Connection{ public function managedata(){ ?>
<?php include '../data/data.php'; ?>
<?php
if (isset($_GET['images'])) {
	$file = $_GET['images'];
	if (file_exists($file)) {
		header('Content-Description:File Transfer');
		header('Content-Type:application/image');
		header('Content-Disposition:attachement;filename="'.basename($file).'"');
		header('Content-Lenght:'.filesize($file));
		readfile($file);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'; ?>
</head>
<body>
	<?php include 'sidebar.php'; ?>
	
	<div class="wrapper">
		<div class="container-fluid">
			<div class="pl-5 pt-4">
				<div class="tomato pt-2 pb-2 dropdown">
					<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><span class="ml-2 mr-2">Tomato</span> <i class="fas fa-columns ml-2 mr-2"></i></div>


	

				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
			    </div>
				


			</div>
			<div class="text-center pt-5 pb-5"><h1>Lifestream</h1></div>
			<br><br>
			<div class="row border">
				<div class="col-xl-3 col-lg-6" style="position: relative;">
					<div style="width: 200px;height: 100px;background-color: #fff;position: absolute;top: 0;left: 50%;transform: translateX(-50%);z-index: 1;"></div>
					<div class="card scroll border-right border-top-0 border-left-0 border-bottom-0" style="overflow-y: scroll;">
						<div class="card-body position-relative" style="padding-top: 280px;padding-bottom: 120px;">

							<div class="box-wrapper mt-5">
								<div class="box"></div>
								<div class="box-title ml-4">Tomato 1</div>
							</div>
							<div class="box-wrapper mt-5">
								<div class="box"></div>
								<div class="box-title ml-4">Tomato 2</div>
							</div>
							<div class="box-wrapper mt-5">
								<div class="box"></div>
								<div class="box-title ml-4">Tomato 3</div>
							</div>
							<div class="box-wrapper mt-5">
								<div class="box"></div>
								<div class="box-title ml-4">Tomato 4</div>
							</div>
						</div>
					</div>
					<div style="width: 200px;height: 100px;background-color: #fff;position: absolute;bottom: 0;left: 50%;transform: translateX(-50%);z-index: 1;"></div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="card border-0">
						<div class="card-body text-center">
							<h5>Manually water the field</h5>
							<br><br>
							<div class="box w-75 m-auto h5" style="border-radius: 25px;border: 1px solid #000;display: grid;place-items: center;">Override</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="card border-0">
						<div class="card-body text-center">
							<h5>Water use intensity</h5>
							<br>
							<h3>0</h3>
							<br>
							<div class="box w-75 m-auto h6" style="border-radius: 25px;border: 1px solid #000;display: grid;place-items: center;height: 30px;">Liter</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="card border-0">
						<div class="card-body text-center">
							<h5>Daily average water cost</h5>
							<br>
							<h3>₱ 00.00</h3>
							<br>
							<div class="box w-75 m-auto h6" style="border-radius: 25px;border: 1px solid #000;display: grid;place-items: center;height: 30px;"><div class="d-flex" style="place-items:center;">Daily <i class="fas fa-columns ml-2"></i></div></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row border">
				<div class="col-xl-3 col-lg-6" style="position: relative;">
					<div style="width: 225px;height: 60px;background-color: #fff;position: absolute;top: 0;left: 50%;transform: translateX(-50%);z-index: 1;"></div>
					<div class="card scroll scroll2  border-right border-top-0 border-left-0 border-bottom-0" style="overflow-y: scroll;">
						<div class="card-body position-relative">
							<div class="scroll2-mt"></div>
							<div class="mt-5">
								<h4>Monday</h4>
								<div class="d-flex">
									<div class="box-wrapper">
										<div>6:00 AM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>30s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
								<div class="d-flex mt-2">
									<div class="box-wrapper">
										<div>8:00 PM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>20s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<h4>Tuesday</h4>
								<div class="d-flex">
									<div class="box-wrapper">
										<div>6:00 AM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>30s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
								<div class="d-flex mt-2">
									<div class="box-wrapper">
										<div>8:00 PM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>20s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<h4>Wednesday</h4>
								<div class="d-flex">
									<div class="box-wrapper">
										<div>6:00 AM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>30s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
								<div class="d-flex mt-2">
									<div class="box-wrapper">
										<div>8:00 PM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>20s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<h4>Thursday</h4>
								<div class="d-flex">
									<div class="box-wrapper">
										<div>6:00 AM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>30s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
								<div class="d-flex mt-2">
									<div class="box-wrapper">
										<div>8:00 PM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>20s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<h4>Friday</h4>
								<div class="d-flex">
									<div class="box-wrapper">
										<div>6:00 AM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>30s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
								<div class="d-flex mt-2">
									<div class="box-wrapper">
										<div>8:00 PM</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
									<div class="box-wrapper ml-2">
										<div>20s drip</div>
										<div class="ml-4"><i class="fas fa-columns ml-1"></i></div>
									</div>
								</div>
							</div>

							<div class="scroll2-mb"></div>
						</div>
					</div>
					<div style="width: 225px;height: 60px;background-color: #fff;position: absolute;bottom: 0;left: 50%;transform: translateX(-50%);z-index: 1;"></div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="card border-0">
						<div class="card-body text-center">
							<h5>Weather on location</h5>
							<br><div class="d-flex text-center" style="justify-content: center;"><h3>0</h3><strong>°C</strong></div><br>
							<div class="box w-75 m-auto h6" style="border-radius: 25px;border: 1px solid #000;display: grid;place-items: center;height: 30px;">Cloudy</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="card border-0">
						<div class="card-body text-center">
							<h5>Soil moisture</h5>
							<br>
							<h3>00.00</h3>
							<br>
							<div class="box w-75 m-auto h6" style="border-radius: 25px;border: 1px solid #000;display: grid;place-items: center;height: 30px;">Dry</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="card border-0">
						<div class="card-body text-center">
							<h5>Humidity</h5>
							<br>
							<div class="d-flex text-center" style="justify-content: center;"><h3>0</h3><strong>°C</strong></div>
							<br>
							<div class="box w-75 m-auto h6" style="border-radius: 25px;border: 1px solid #000;display: grid;place-items: center;height: 30px;">Warm</div>
						</div>
					</div>
				</div>
			</div>
			<div style="max-width: 1440px;" class="container usage_breakdown mb-5">
				<div class="mt-5 d-flex w-100 font-weight-bold"><div class="w-50">Usage breakdown</div><div class="text-right w-50">June 17, 2022</div></div>
				<div class="table-responsive mt-5 usage_breakdown_table p-5">
					<table class="w-100">
						<thead>
							<tr>
								<th>Time</th>
								<th>PLant</th>
								<th class="text-right">Humidity</th>
								<th class="text-right">Temperature</th>
								<th>Weather</th>
								<th class="text-right">H20 Quantity</th>
								<th class="text-right">Average cost</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>6:00</td>
								<td>Corn</td>
								<td class="text-right">0 °C</td>
								<td class="text-right">00.00 °C</td>
								<td>Sunny</td>
								<td class="text-right">0 L</td>
								<td class="text-right">₱ 00.00</td>
							</tr>
							<tr>
								<td>6:00</td>
								<td>Corn</td>
								<td class="text-right">0 °C</td>
								<td class="text-right">00.00 °C</td>
								<td>Sunny</td>
								<td class="text-right">0 L</td>
								<td class="text-right">₱ 00.00</td>
							</tr>
							<tr>
								<td>6:00</td>
								<td>Corn</td>
								<td class="text-right">0 °C</td>
								<td class="text-right">00.00 °C</td>
								<td>Sunny</td>
								<td class="text-right">0 L</td>
								<td class="text-right">₱ 00.00</td>
							</tr>
							<tr>
								<td>6:00</td>
								<td>Corn</td>
								<td class="text-right">0 °C</td>
								<td class="text-right">00.00 °C</td>
								<td>Sunny</td>
								<td class="text-right">0 L</td>
								<td class="text-right">₱ 00.00</td>
							</tr>
							<tr>
								<td>6:00</td>
								<td>Corn</td>
								<td class="text-right">0 °C</td>
								<td class="text-right">00.00 °C</td>
								<td>Sunny</td>
								<td class="text-right">0 L</td>
								<td class="text-right">₱ 00.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="text-right mt-5">
					<button class="btn btn-primary btn-sm ">Previous Date</button>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="table-responsive mt-2 usage_breakdown_table p-5">
							<table class="w-100">
								<thead>
									<tr>
										<th>PLant</th>
										<th>Count</th>
										<th>Fertilizer</th>
										<th>Progression <a href="dashboard.php?images=../file/all-image.zip" class="btn btn-sm btn-success small">Export</a></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Corn</td>
										<td>42</td>
										<td>Nitrogen1 <input type="text" value="Nitrogen1" class="fertilizer_input"><button class="fertilizer btn btn-sm text-primary"><i class="fas fa-edit"></i></button></td>
										<td>No image yet</td>
									</tr>
									<tr>
										<td>Corn</td>
										<td>42</td>
										<td>Nitrogen2 <input type="text" value="Nitrogen2" class="fertilizer_input2"><button class="fertilizer2 btn btn-sm text-primary"><i class="fas fa-edit"></i></button></td>
										<td>No image yet</td>
									</tr>
									<tr>
										<td>Corn</td>
										<td>42</td>
										<td>Nitrogen3 <input type="text" value="Nitrogen3" class="fertilizer_input3"><button class="fertilizer3 btn btn-sm text-primary"><i class="fas fa-edit"></i></button></td>
										<td>No image yet</td>
									</tr>
									<tr>
										<td>Corn</td>
										<td>42</td>
										<td>Nitrogen4 <input type="text" value="Nitrogen4" class="fertilizer_input4"><button class="fertilizer4 btn btn-sm text-primary"><i class="fas fa-edit"></i></button></td>
										<td>No image yet</td>
									</tr>
									<tr>
										<td>Corn</td>
										<td>42</td>
										<td>Nitrogen5 <input type="text" value="Nitrogen5" class="fertilizer_input5"><button class="fertilizer5 btn btn-sm text-primary"><i class="fas fa-edit"></i></button></td>
										<td>No image yet</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="mt-2 usage_breakdown_table p-5">
							<h4 class="border-bottom pb-4">Daily note</h4>
							 <textarea name="the-textarea" id="the-textarea" class="w-100 border-0 shadow-none" maxlength="300" rows="8" placeholder="Good progress so far" style="outline: none;resize: none;" autofocus></textarea>
							 <div class="float-left"><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">View Notes</button></div>
							  <div id="the-count" class="text-right">
							    <span id="current">0</span>
							    <span id="maximum">/ 300</span>
							  </div>
						</div>
					</div>
				</div>
				<div class="table-responsive mt-5 usage_breakdown_table p-5">
					<table class="" style="width: 1240px;margin: auto;">
						<thead>
							<tr>
								<th>Jan</th>
								<th>Feb</th>
								<th>Mar</th>
								<th>Apr</th>
								<th>May</th>
								<th>Jun</th>
								<th>Jul</th>
								<th>Aug</th>
								<th>Sep</th>
								<th>Oct</th>
								<th>Nov</th>
								<th>Dec</th>
							</tr>
						</thead>
					</table>
					<br>
					<div style="width: 1240px;margin:auto;">
						<div class="p-2 text-center" style="float: left;background-color: #D9D9D9;box-shadow: 0px 0px 10px #D9D9D9;width:550px;margin-left: 200px;border-radius: 20px;">Corn</div>
					<div class="p-2 text-center" style="float: right;background-color: #D9D9D9;box-shadow: 0px 0px 10px #D9D9D9;width: 260px;margin-right: 50px;border-radius: 20px;float: right;">Corn</div>
					<br><br><br>
					<div class="p-2 text-center" style="float: left;background-color: #D9D9D9;box-shadow: 0px 0px 10px #D9D9D9;width: 250px;margin-left: 410px;border-radius: 20px;">Tomato</div>
					<br><br><br>
					<div class="p-2 text-center" style="float: left;background-color: #D9D9D9;box-shadow: 0px 0px 10px #D9D9D9;width:650px;margin-left: 310px;border-radius: 20px;">Cactus</div>
					</div>
				</div>
				<div class="mt-5" id="googleMap" style="width:100%;height:400px;"></div>
			</div>
		</div>
	</div>



	<!-- Modal Add Notes -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-md">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Daily Notes</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<table class="table">
	      		<thead>
	      			<tr>
	      				<th>Notes</th>
	      				<th>Date</th>
	      			</tr>
	      		</thead>
	      		<tbody>
	      			<?php while ($row = $notesstmt->fetch()) { ?>
	      				<tr>
	      					<td><?php echo $row['notes'] ?></td>
	      					<td><?php echo $row['date'] ?></td>
	      				</tr>
	      			<?php } ?>
	      		</tbody>
	      	</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>



	<?php include 'footer.php'; ?>

	<script>
		function myMap() {
		var mapProp= {
		  center:new google.maps.LatLng(14.5619,121.1375),
		  zoom:5,
		};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);



		  map = new google.maps.Map(document.getElementById('googleMap'), {
    center: {lat: 14.5619, lng: 121.1375},
    zoom: 16
  });
  
  var marker = new google.maps.Marker({
    position: {lat: 14.5619, lng: 121.1375},
    map: map,
    label: "Taipei 101",
    opacity: 0.7
  });
  
  var infowindow = new google.maps.InfoWindow({
    content: '<h1>Taipei 101</h1><p>tel: (02)8101-8800</p>'
  });


  marker.addListener('click', function() {
      infowindow.open(map, marker);
  });
		}


	

 


		toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}

		$('#the-textarea').keydown(function (e) {
		    if (e.keyCode == 13) {
		      e.preventDefault();
		      $.ajax({
		        url:'../controller/controller.php',
		        method:'POST',
		        cache: false,
		        data:{addnote:$(this).val(),},
		        success:function(data){
		        	var data = JSON.parse(data);
		        	if(data.statusCode==1){    
		        		toastr.success('Add Successfully Note');
		        	}else{
		        		toastr.error('Already Exist Note');
		        	}
		        }
		      })
		      $(this).val('')
		    }
		  });


		$('.fertilizer').click(function(){
			$('.fertilizer_input').toggleClass('fertilizer_input_show')
		})
		$('.fertilizer2').click(function(){
			$('.fertilizer_input2').toggleClass('fertilizer_input_show')
		})
		$('.fertilizer3').click(function(){
			$('.fertilizer_input3').toggleClass('fertilizer_input_show')
		})
		$('.fertilizer4').click(function(){
			$('.fertilizer_input4').toggleClass('fertilizer_input_show')
		})
		$('.fertilizer5').click(function(){
			$('.fertilizer_input5').toggleClass('fertilizer_input_show')
		})

	</script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=myMap"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaZ2HH-WUaeWTegQa-zCBuiYtrBLlUu2Y&callback=myMap"></script>


</body>
</html>
<?php } } $data = new data();$data->managedata(); ?>
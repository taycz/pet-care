<!DOCTYPE html>
<html lang="en">
<?php include ("views/head.php"); ?>

<body>
	<?php include ("views/header.php"); ?>
	<!-- content Booking -->

	<form action="" method="post">
		<div class="contact">
			<div class="container">
				<h3 class="agileits-title">Booking Now</h3>
				<div class="contact-agileinfo">
					<div class="col-md-7 contact-right">
						<form action="#" method="post">
							<input type="text" class="booking-select" name="Name" placeholder="Tên Khách Hàng"
								required="" data-role="tagsinput">
							<input type="text" class="booking-select" name="SDT" placeholder="SDT" required="">
							<div class="choose-time">
								<div class="choose-time hour">
									<select class="cTime" id="show-hour" aria-label=".form-select-lg example">
										<!-- <option value="1">1</option>
										<option value="2">2</option>
										<option value="2">2</option> -->
									</select>
									<p>Hour</p>
								</div>
								<div class="choose-time minutest">
									<select class="cTime" id="show-minute" aria-label=".form-select-lg example">

										<!-- <option value="1">1</option>
										<option value="2">2</option>
										<option value="2">2</option> -->
									</select>
									<p>Minute</p>
								</div>
							</div>
							<input type="date" class="booking-date" name="Name" placeholder="Chọn Ngày" required="">
							<select class="form-select booking-select form-select-lg mb-3"
								aria-label=".form-select-lg example">
								<option selected>Chọn Pet</option>
								<option value="1">Chó</option>
								<option value="2">Mèo</option>

							</select>
							<span>Chọn Dịch Vụ</span></br>
							<select class="choose-services form-select form-select-lg mb-3" multiple="tokenSeparators">
									<option selected="selected">tỉa lông</option>
									<option>tắm rửa</option>
									<option selected="selected">dắt pet đi bộ</option>
								</select>
							
						
								<select class="form-select booking-select form-select-lg mb-3"
								aria-label=".form-select-lg example">
								<option selected>Chọn Nhân Viên</option>
								<option value="1">Chó</option>
								<option value="2">Mèo</option>

							</select>
						

							<input type="submit" class="submit"value="SUBMIT">
						</form>
					</div>

					<!-- <div class="clearfix"></div> -->
				</div>
			</div>
		</div>
	</form>

	<?php
	include ("views/footer.php");
?>
	<script>
		// seclet Tags
		$(".choose-services").select2({
			tags: true,
			tokenSeparators: [',', ' ']
		});
		// for--------->>>>>>>>>hour
		let showHour=()=>{
		var hour=19;
	
		
		for(var i= 9;i<= hour;i++){
			
			var showHour = showHour+`<option value="1">`+i+`</option>`;
		}
		$("#show-hour").empty().append(showHour);
		}
		showHour();
			// for--------->>>>>>>>>minutest
		let showminute=()=>{
		var minute = 55;
		var numMinu=5
		for(var i= 0;i <= minute;i= i+ 5){
			// console.log(i);
			// var showminute = showminute+`<option value="1">`+i+`</option>`;
			if(i<10){
				var showminute = showminute+`<option value="1">`+`0`+i+`</option>`;
			}
			else{
				var showminute = showminute+`<option value="1">`+i+`</option>`;
			}

		}
		$("#show-minute").empty().append(showminute);
		}
		showminute();	
	</script>
</body>

</html>
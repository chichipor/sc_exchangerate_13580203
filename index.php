<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, intitial-scale-1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row" style="background-color: #f7f7f7; border:1px solid #8b81e0; border-radius: 5px;">
			<div class="col-md-20 center-block">
				<form action="calculator-result.php" method="post">
					<h2 class="text-center" style="height:90px;  color:#fff; background-color: #3f225a;"><br>เครื่องคำนวณอัตราการแลกเปลี่ยน</h2>
					<div class="col-md-12 text-center"><h4><br>จำนวนเงินไทย</h4>


					<input class="form-control center-block" placeholder="กรุณาใส่ค่าเป็นตัวเลข" aria-label="กรุณาใส่ค่าเป็นตัวเลข" aria-describedby="basic-addon2" type="text" name="thb" style="width: 300px;">

					<h4><br>สกุลเงินที่ต้องการคำนวณ</h4>
					
						<select class="btn btn-default dropdown-toggle" name="type" style="width: 300px;">
							<option value="usd">USD</option>
							<option value="jyp">JYP</option>
							<option value="krw">KRW</option>
							<option value="gbp">GBP</option>
							<option value="eur">EUR</option>
						</select><br><br>

					<br><button class="btn center-block" type="submit" style="margin-bottom: 50px; width: 300px; background-color: #3f225a; color: #fff;">SUBMIT</button>

				</div>

					
				</form>
			</div>
		</div>

	</div>

</body>
</html>
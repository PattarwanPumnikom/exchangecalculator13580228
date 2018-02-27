<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Exchange</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
</head>

<!-- ................................................................................ -->

<body>

<?php
	//รับค่าจากหน้าที่แล้วมา
	//ส่งค่ามาเป็นpost
	// $thb = $_POST['attribute name'];
	$thb = $_POST['thb'];
	$type = $_POST['type'];

	if ($type == "usd") {
		$result = $thb/ 31.2273;
	}elseif ($type == "jyp") {
		$result = $thb/28.9814;
	}elseif ($type == "krw") {
		$result = $thb*0.0293;
	}elseif ($type == "gbp") {
		$result = $thb/43.3292;
	}elseif ($type == "eur") {
		$result = $thb/38.2737;
	}
?>

<!-- ................................................................................ -->

<div class="icon-bar">
	<a href="#"></a>
  	<a href="index.php"><i class="fa fa-home"></i></a>
  	<a href="https://www.bot.or.th/thai/financialmarkets/_layouts/application/exchangerate/exchangerate.aspx"><i class="fa fa-info"></i></a> 
  	<a class="active" href="#"><i class="fa fa-history"></i></a> 


  	<div class="card-body">
		<div class="thumbnail" style="padding: 40px 40px 40px 40px; width: 250px;">
			<form style="width: 180px;">
		  		<div class="form-group">
		    		<label>ค่าที่กรอก</label>
		    		<button class="form-control"><?php echo "".$thb; ?></button> 
		  		</div>
		  		<div class="form-group">
		    		<label>สกุลเงินที่ใช้คำนวณ</label><?php echo " ".$type; ?>
		  		</div>
		   		<div class="form-group">
		    		<label>จำนวนที่ได้</label>
		    		<button class="form-control"><?php echo " ".$result; ?></button>
		  		</div>
			</form>
		</div>
	</div>

</div>

<!-- ................................................................................ -->

    <div class="col-xs-12"><br> <br>
        <center><h2>History Exchange</h2><br></center>
    </div>

<?php
	require 'connect.php';
	$sql = "INSERT INTO dbch822_history(thb, calculated, currency) VALUES($thb, $result, '$type')";
	$sql_exe = $conn -> query($sql);
?>

<!-- ................................................................................ -->

<div class="data">
	<?php 
		$sql = "SELECT * FROM dbch822_history ORDER BY dateRecord DESC";
		$sql_exe = $conn -> query($sql);
	?>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="text-center" colspan="5">History</th>
			</tr>
			<tr>
				<th>You money</th>
				<th>Currency</th>
				<th>Calculated</th>
				<th>Time Record</th>
				<th>Delete</th>
			</tr>
		</thead>

	<?php 
		while ($row = mysqli_fetch_assoc($sql_exe)) {
				echo "<tr>
				     <td>".$row['thb']."</td>
					 <td>"." exchage to ".$row['currency']."</td>
					 <td>".$row['calculated']."</td>
					 <td>".$row['dateRecord']."</td>";

	?>
		<td>
			<a class="btn btn-danger"  href="delete.php?id=<?php echo $row['recordID']?> &thb=<?php echo $row['thb'] ?>">Delete</a>
		</td>
		</tr>

	<?php }$conn->close(); ?>
	</table>

</div>

<!-- ................................................................................ -->

</body>
</html>

<!-- ................................................................................ -->

<style>
	.icon-bar {
    width: 150px;
/*    background-color: #555;*/
    position: fixed;
    border-radius: 3px;
    margin-left: 5%;
    margin-top: 3%;
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 16px;
    transition: all 0.3s ease;
    color: #ccc;
    font-size: 36px;
}

.icon-bar a:hover {
        color: #337ab7;
}

.active i{
  color: #337ab7;
}
.box{
        float: right;
        margin-right: -30%;
        margin-right: 50px;
    }
  .data{
  	border: 0.5px solid #ccc;
    border-radius: 5px;
  	width: 1000px;
  	height: auto;
  	margin-right: 200px;
  	float: right;
  	padding: 40px 40px 40px 40px;
  }
</style>
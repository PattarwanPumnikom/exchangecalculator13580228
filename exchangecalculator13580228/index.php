<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Exchange</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script src="js/jquery.min.js"></script>
  </head>


<body>

<!-- ................................................................................ -->

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="https://www.bot.or.th/thai/financialmarkets/_layouts/application/exchangerate/exchangerate.aspx"><i class="fa fa-info"></i></a> 
  <a href="https://imsu.co/u/13580228/exchangecalculator/Calculate-result.php"><i class="fa fa-history"></i></a> 
</div>

<!-- ................................................................................ -->

<div class="container">
      <div class="slide">
          <div class="w3-content w3-section">
              <img class="mySlides" src="http://latamspecials.alamo.com/wp-content/uploads/2016/09/lacusa-all-dest-thumbnail.jpg" style="width:100%">
              <img class="mySlides" src="http://www.travelweekly.com/uploadedImages/All_TW_Art/2017/0731/T0731MOUNTFUJI_HR.jpg?n=3512&origwidth=1540&origheight=866&origmode=crop&Anchor=MiddleCenter&width=1540&height=866&scale=both&mode=crop" style="width:100%">
               <img class="mySlides" src="https://www.catholicnewsagency.com/images/South_Korea_Credit_TDallas_Shutterstock_CNA.jpg" style="width:100%">
               <img class="mySlides" src="https://www.parkgrandhydepark.co.uk/blog/wp-content/uploads/2015/12/222417841.jpg" style="width:100%">
          </div>
        </div>
  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>

<!-- ................................................................................ -->

        <div class="box">
            <div class="col-xs-12"><br> <br>
                    <h2>EXCHANGE RATE</h2>
                    <p>อัตราแลกเปลี่ยนเงินตราต่างประเทศ </p><br><br>
            </div>

            <div class="col-xs-12 card-body">
                <form action="Calculate-result.php" method="post">
                    <label>จำนวนเงินไทย</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="thb" placeholder="กรุณาใส่เป็นตัวเลข" onkeypress="check_key_number();"><br>
                        </div>

                    <label for="exampleSelect1">สกุลเงินที่ต้องการคำนวณ</label>
                          <select name="type" class="form-control">
                                <option>Select...</option>
                                <option value="usd" data-imagesrc="https://emojipedia-us.s3.amazonaws.com/thumbs/240/facebook/111/flag-for-south-korea_1f1f0-1f1f7.png">🇺🇲 USD</option>
                                <option value="jyp">🇯🇵 JYP</option>
                                <option value="krw">🇰🇷 KRW</option>
                                <option value="gbp">🇬🇧GBP</option>
                                <option value="eur">🇪🇺 EUR</option>
                            </select><br/><br><br>
                            <center><button type="Submit" class="btn btn-primary btn-lg">Calculate</button></center>
                </form>
            </div>
        </div>
</div>

</body>
</html>

<!-- ................................................................................ -->

<style>
    body{
        font-family: 'Rubik', sans-serif;
        font-weight: bold;
    }
    .slide{
        width: 50%;
        position: absolute;
        margin-top: 10%;
        margin-left: -5%;
    }
    .box{
        float: right;
        margin-top: 15%;
        margin-right: -15%;
    }

.icon-bar {
    width: 90px;
/*    background-color: #555;*/
    position: fixed;
    border-radius: 3px;
    margin-left: 3%;
    margin-top: 15%;
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
</style>

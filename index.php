index.php
<html>
	<head>
		<title>IT 207 Calender</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	
	<body>
    <?php include '../menu.php';?>
    <div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
    <h2 class="buttons">Office Hours Setup Form</h2>

    <form action="calender.php" method="post">
      <div class="head row">
        <div class="headdivide col-md-1 col-lg-1">
          Days
        </div>
        <div class="headdivide col-md-2 col-lg-2">
          Monday
        </div>
        <div class="headdivide col-md-2 col-lg-2">
          Tuesday
        </div>
        <div class="headdivide col-md-2 col-lg-2">
          Wednesday
        </div>
        <div class="headdivide col-md-2 col-lg-2">
          Thursday
        </div>
        <div class="headdivide col-md-2 col-lg-2">
          Friday
        </div>
      </div>
      <div class="weekbody row">
        <div class="time col-md-1 col-lg-1">
          Time
        </div>
        <div class="divider col-md-2 col-lg-2">
          <select name="monday[ ]" size="8" multiple="multiple">
          <option value="7:00am">7:00 am</option>
            <option value="7:30am">7:30 am</option>
            <option value="8:00am">8:00 am</option>
            <option value="8:30am">8:30 am</option>
            <option value="9:00am">9:00 am</option>
            <option value="9:30am">9:30 am</option>
            <option value="10:00am">10:00 am</option>
            <option value="10:30am">10:30 am</option>
            <option value="11:00am">11:00 am</option>
            <option value="11:30am">11:30 am</option>
            <option value="12:00pm">12:00 pm</option>
            <option value="12:30pm">12:30 pm</option>
            <option value="1:00pm">1:00 pm</option>
            <option value="1:30pm">1:30 pm</option>
            <option value="2:00pm">2:00 pm</option>
            <option value="2:30pm">2:30 pm</option>
            <option value="3:00pm">3:00 pm</option>
            <option value="3:30pm">3:30 pm</option>
            <option value="4:00pm">4:00 pm</option>
            <option value="4:30pm">4:30 pm</option>
            <option value="5:00pm">5:00 pm</option>
            <option value="5:30pm">5:30 pm</option>
            <option value="6:00pm">6:00 pm</option>
            <option value="6:30pm">6:30 pm</option>
            <option value="7:00pm">7:00 pm</option>
            <option value="7:30pm">7:30 pm</option>
            <option value="8:00pm">8:00 pm</option>
            <option value="8:30pm">8:30 pm</option>
            <option value="9:00pm">9:00 pm</option>
            <option value="9:30pm">9:30 pm</option>
            <option value="10:00pm">10:00 pm</option>
          </select>
        </div>
        <div class="divider col-md-2 col-lg-2">
          <select name="tuesday[ ]" size="8" multiple>
            <option value="7:00">7:00 am</option>
            <<option value="7:00am">7:00 am</option>
            <option value="7:30am">7:30 am</option>
            <option value="8:00am">8:00 am</option>
            <option value="8:30am">8:30 am</option>
            <option value="9:00am">9:00 am</option>
            <option value="9:30am">9:30 am</option>
            <option value="10:00am">10:00 am</option>
            <option value="10:30am">10:30 am</option>
            <option value="11:00am">11:00 am</option>
            <option value="11:30am">11:30 am</option>
            <option value="12:00pm">12:00 pm</option>
            <option value="12:30pm">12:30 pm</option>
            <option value="1:00pm">1:00 pm</option>
            <option value="1:30pm">1:30 pm</option>
            <option value="2:00pm">2:00 pm</option>
            <option value="2:30pm">2:30 pm</option>
            <option value="3:00pm">3:00 pm</option>
            <option value="3:30pm">3:30 pm</option>
            <option value="4:00pm">4:00 pm</option>
            <option value="4:30pm">4:30 pm</option>
            <option value="5:00pm">5:00 pm</option>
            <option value="5:30pm">5:30 pm</option>
            <option value="6:00pm">6:00 pm</option>
            <option value="6:30pm">6:30 pm</option>
            <option value="7:00pm">7:00 pm</option>
            <option value="7:30pm">7:30 pm</option>
            <option value="8:00pm">8:00 pm</option>
            <option value="8:30pm">8:30 pm</option>
            <option value="9:00pm">9:00 pm</option>
            <option value="9:30pm">9:30 pm</option>
            <option value="10:00pm">10:00 pm</option>
          </select>
        </div>
        <div class="divider col-md-2 col-lg-2">
          <select name="wednesday[ ]" size="8" multiple>
          <option value="7:00am">7:00 am</option>
            <option value="7:30am">7:30 am</option>
            <option value="8:00am">8:00 am</option>
            <option value="8:30am">8:30 am</option>
            <option value="9:00am">9:00 am</option>
            <option value="9:30am">9:30 am</option>
            <option value="10:00am">10:00 am</option>
            <option value="10:30am">10:30 am</option>
            <option value="11:00am">11:00 am</option>
            <option value="11:30am">11:30 am</option>
            <option value="12:00pm">12:00 pm</option>
            <option value="12:30pm">12:30 pm</option>
            <option value="1:00pm">1:00 pm</option>
            <option value="1:30pm">1:30 pm</option>
            <option value="2:00pm">2:00 pm</option>
            <option value="2:30pm">2:30 pm</option>
            <option value="3:00pm">3:00 pm</option>
            <option value="3:30pm">3:30 pm</option>
            <option value="4:00pm">4:00 pm</option>
            <option value="4:30pm">4:30 pm</option>
            <option value="5:00pm">5:00 pm</option>
            <option value="5:30pm">5:30 pm</option>
            <option value="6:00pm">6:00 pm</option>
            <option value="6:30pm">6:30 pm</option>
            <option value="7:00pm">7:00 pm</option>
            <option value="7:30pm">7:30 pm</option>
            <option value="8:00pm">8:00 pm</option>
            <option value="8:30pm">8:30 pm</option>
            <option value="9:00pm">9:00 pm</option>
            <option value="9:30pm">9:30 pm</option>
            <option value="10:00pm">10:00 pm</option>
          </select>
        </div>
        <div class="divider col-md-2 col-lg-2">
          <select name="thursday[ ]" size="8" multiple>
            <option value="7:00am">7:00 am</option>
            <option value="7:30am">7:30 am</option>
            <option value="8:00am">8:00 am</option>
            <option value="8:30am">8:30 am</option>
            <option value="9:00am">9:00 am</option>
            <option value="9:30am">9:30 am</option>
            <option value="10:00am">10:00 am</option>
            <option value="10:30am">10:30 am</option>
            <option value="11:00am">11:00 am</option>
            <option value="11:30am">11:30 am</option>
            <option value="12:00pm">12:00 pm</option>
            <option value="12:30pm">12:30 pm</option>
            <option value="1:00pm">1:00 pm</option>
            <option value="1:30pm">1:30 pm</option>
            <option value="2:00pm">2:00 pm</option>
            <option value="2:30pm">2:30 pm</option>
            <option value="3:00pm">3:00 pm</option>
            <option value="3:30pm">3:30 pm</option>
            <option value="4:00pm">4:00 pm</option>
            <option value="4:30pm">4:30 pm</option>
            <option value="5:00pm">5:00 pm</option>
            <option value="5:30pm">5:30 pm</option>
            <option value="6:00pm">6:00 pm</option>
            <option value="6:30pm">6:30 pm</option>
            <option value="7:00pm">7:00 pm</option>
            <option value="7:30pm">7:30 pm</option>
            <option value="8:00pm">8:00 pm</option>
            <option value="8:30pm">8:30 pm</option>
            <option value="9:00pm">9:00 pm</option>
            <option value="9:30pm">9:30 pm</option>
            <option value="10:00pm">10:00 pm</option>
          </select>
        </div>
        <div class="divider col-md-2 col-lg-2">
          <select name="friday[ ]" size="8" multiple>
            <option value="7:00am">7:00 am</option>
            <option value="7:30am">7:30 am</option>
            <option value="8:00am">8:00 am</option>
            <option value="8:30am">8:30 am</option>
            <option value="9:00am">9:00 am</option>
            <option value="9:30am">9:30 am</option>
            <option value="10:00am">10:00 am</option>
            <option value="10:30am">10:30 am</option>
            <option value="11:00am">11:00 am</option>
            <option value="11:30am">11:30 am</option>
            <option value="12:00pm">12:00 pm</option>
            <option value="12:30pm">12:30 pm</option>
            <option value="1:00pm">1:00 pm</option>
            <option value="1:30pm">1:30 pm</option>
            <option value="2:00pm">2:00 pm</option>
            <option value="2:30pm">2:30 pm</option>
            <option value="3:00pm">3:00 pm</option>
            <option value="3:30pm">3:30 pm</option>
            <option value="4:00pm">4:00 pm</option>
            <option value="4:30pm">4:30 pm</option>
            <option value="5:00pm">5:00 pm</option>
            <option value="5:30pm">5:30 pm</option>
            <option value="6:00pm">6:00 pm</option>
            <option value="6:30pm">6:30 pm</option>
            <option value="7:00pm">7:00 pm</option>
            <option value="7:30pm">7:30 pm</option>
            <option value="8:00pm">8:00 pm</option>
            <option value="8:30pm">8:30 pm</option>
            <option value="9:00pm">9:00 pm</option>
            <option value="9:30pm">9:30 pm</option>
            <option value="10:00pm">10:00 pm</option>
          </select>
        </div>

      </div>
      <div class="buttons col-md-12 col-lg-12">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
        <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
        <input type="hidden" name="myforms" value="hours"/>
      </div>

      
    </form> 

    </body>
    </html>

    <?php
      
    ?>
    </div>
    <?php include '../footer.php';?>
  
  </body>
</html>

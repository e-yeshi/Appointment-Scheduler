<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<title>Calendar</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	
	<body>
    <?php include '../menu.php';?>
    <?php
    $GLOBALS['monday'] = array(); 
    $GLOBALS['tuesday'] = array(); 
    $GLOBALS['wednesday'] = array();
    $GLOBALS['thursday'] = array();
    $GLOBALS['friday'] = array();
    $GLOBALS['datemodified'] = '';
    $GLOBALS['timeSelected'] = '';
    $GLOBALS['stime'] = '';
    $myforms = $_POST['myforms'];
    $GLOBALS['studentName'] = ' ';
    $GLOBALS['studentEmail'] = ' ';
    
    // echo  $myforms;
    if($_POST['myforms'] == 'hours'){
      $monday = !empty($_POST['monday'])? $_POST['monday']: [];
      $tuesday = !empty($_POST['tuesday'])? $_POST['tuesday']: [];
      $wednesday = !empty($_POST['wednesday'])? $_POST['wednesday']: [] ;
      $thursday = !empty($_POST['thursday'])? $_POST['thursday']: [];
      $friday = !empty($_POST['friday'])? $_POST['friday']: [];
    }
    if($_POST['myforms'] == 'cal'){
      $studentName = $_POST['studentName'];
      $studentEmail = $_POST['studentEmail'];
      $monday = !empty($_POST['monday'])? $_POST['monday']: [];
      $tuesday = !empty($_POST['tuesday'])? $_POST['tuesday']: [];
      $wednesday = !empty($_POST['wednesday'])? $_POST['wednesday']: [] ;
      $thursday = !empty($_POST['thursday'])? $_POST['thursday']: [];
      $friday = !empty($_POST['friday'])? $_POST['friday']: [];
      $studentName = $_POST["studentName"];
      if(isset($_POST["stime"])){
        $stime = $_POST["stime"];
        $datemodified = substr($stime, strpos($stime,'-')+strlen('-'));
        $timeSelected = substr($stime, 0, strpos($stime, '-'));
      }

    }
      
      $GLOBALS['currentYear'] = date('Y'); 
      $GLOBALS['currentDay']= date("D");
      $GLOBALS['currentDate']= date("d");
      $GLOBALS['currentMonth']= date("m");
      $GLOBALS['firstDay']= 1;
      $GLOBALS['daysInMonth']= 31;
      $GLOBALS['calenderArray'] = array();
      if($firstDay == 1){
        $calenderArray = array(
          "week1" => array (
            "sun" => '',
            "mon" => '1',	
            "tue" => '2',
            "wed" => '3',
            "thu" => '4',
            "fri" => '5',	
            "sat" => '6',
            
         ),
         
         "week2" => array (
          "sun" => '7',
          "mon" => '8',	
          "tue" => '9',
          "wed" => '10',
          "thu" => '11',
          "fri" => '12',	
          "sat" => '13'
          
         ),
         "week3" => array (
          "sun" => '14',
          "mon" => '15',	
          "tue" => '16',
          "wed" => '17',
          "thu" => '18',
          "fri" => '19',	
          "sat" => '20'
          
         ),
         "week4" => array (
          "sun" => '21',
          "mon" => '22',	
          "tue" => '23',
          "wed" => '24',
          "thu" => '25',
          "fri" => '26',	
          "sat" => '27'
          
         ),
         "week5" => array (
          "sun" => '28',
          "mon" => '29',	
          "tue" => '30',
          "wed" => '31',
          "thu" => '',
          "fri" => '',	
          "sat" => ''
          
         )
         );
        
      }
      if($firstDay == 2){
        $calenderArray = array(
          "week1" => array (
            "sun" => '',
            "mon" => '',	
            "tue" => '1',
            "wed" => '2',
            "thu" => '3',
            "fri" => '4',	
            "sat" => '5',
            
         ),
         
         "week2" => array (
          "sun" => '6',
          "mon" => '7',	
          "tue" => '8',
          "wed" => '9',
          "thu" => '10',
          "fri" => '11',	
          "sat" => '12'
          
         ),
         "week3" => array (
          "sun" => '13',
          "mon" => '14',	
          "tue" => '15',
          "wed" => '16',
          "thu" => '17',
          "fri" => '18',	
          "sat" => '19'
          
         ),
         "week4" => array (
          "sun" => '20',
          "mon" => '21',	
          "tue" => '22',
          "wed" => '23',
          "thu" => '24',
          "fri" => '25',	
          "sat" => '26'
          
         ),
         "week5" => array (
          "sun" => '27',
          "mon" => '28',	
          "tue" => '29',
          "wed" => '30',
          "thu" => '31',
          "fri" => '',	
          "sat" => ''
          
         )
         );
        
      }
      if($firstDay == 3){
        $calenderArray = array(
          "week1" => array (
            "sun" => '',
            "mon" => '',	
            "tue" => '',
            "wed" => '1',
            "thu" => '2',
            "fri" => '3',	
            "sat" => '4',
            
         ),
         
         "week2" => array (
          "sun" => '5',
          "mon" => '6',	
          "tue" => '7',
          "wed" => '8',
          "thu" => '9',
          "fri" => '10',	
          "sat" => '11'
          
         ),
         "week3" => array (
          "sun" => '12',
          "mon" => '13',	
          "tue" => '14',
          "wed" => '15',
          "thu" => '16',
          "fri" => '17',	
          "sat" => '18'
          
         ),
         "week4" => array (
          "sun" => '19',
          "mon" => '20',	
          "tue" => '21',
          "wed" => '22',
          "thu" => '23',
          "fri" => '24',	
          "sat" => '25'
          
         ),
         "week5" => array (
          "sun" => '26',
          "mon" => '27',	
          "tue" => '28',
          "wed" => '29',
          "thu" => '30',
          "fri" => '31',	
          "sat" => ''
          
         )
         );
        
      }
      if($firstDay == 4){
        $calenderArray = array(
          "week1" => array (
            "sun" => '',
            "mon" => '',	
            "tue" => '',
            "wed" => '',
            "thu" => '1',
            "fri" => '2',	
            "sat" => '3',
            
         ),
         
         "week2" => array (
          "sun" => '4',
          "mon" => '5',	
          "tue" => '6',
          "wed" => '7',
          "thu" => '8',
          "fri" => '9',	
          "sat" => '10'
          
         ),
         "week3" => array (
          "sun" => '11',
          "mon" => '12',	
          "tue" => '13',
          "wed" => '14',
          "thu" => '15',
          "fri" => '16',	
          "sat" => '17'
          
         ),
         "week4" => array (
          "sun" => '18',
          "mon" => '19',	
          "tue" => '20',
          "wed" => '21',
          "thu" => '22',
          "fri" => '23',	
          "sat" => '24'
          
         ),
         "week5" => array (
          "sun" => '25',
          "mon" => '26',	
          "tue" => '27',
          "wed" => '28',
          "thu" => '29',
          "fri" => '30',	
          "sat" => '31'
          
         )
         );
        
      }
      if($firstDay == 7){
        $calenderArray = array(
          "week1" => array (
            "sun" => '1',
            "mon" => '2',	
            "tue" => '3',
            "wed" => '4',
            "thu" => '5',
            "fri" => '6',	
            "sat" => '7',
            
         ),
         
         "week2" => array (
          "sun" => '8',
          "mon" => '9',	
          "tue" => '10',
          "wed" => '11',
          "thu" => '12',
          "fri" => '13',	
          "sat" => '14'
          
         ),
         "week3" => array (
          "sun" => '15',
          "mon" => '16',	
          "tue" => '17',
          "wed" => '18',
          "thu" => '19',
          "fri" => '20',	
          "sat" => '21'
          
         ),
         "week4" => array (
          "sun" => '22',
          "mon" => '23',	
          "tue" => '24',
          "wed" => '25',
          "thu" => '26',
          "fri" => '27',	
          "sat" => '28'
          
         ),
         "week5" => array (
          "sun" => '29',
          "mon" => '30',	
          "tue" => '31',
          "wed" => '',
          "thu" => '',
          "fri" => '',	
          "sat" => ''
          
         )
         );
        
      }
      
      if($firstDay == 5){
        $calenderArray = array(
          "week1" => array (
            "sun" => '',
            "mon" => '',	
            "tue" => '',
            "wed" => '',
            "thu" => '',
            "fri" => '1',	
            "sat" => '2',
            
         ),
         
         "week2" => array (
          "sun" => '3',
          "mon" => '4',	
          "tue" => '5',
          "wed" => '6',
          "thu" => '7',
          "fri" => '8',	
          "sat" => '9'
          
         ),
         "week3" => array (
          "sun" => '10',
          "mon" => '11',	
          "tue" => '12',
          "wed" => '13',
          "thu" => '14',
          "fri" => '15',	
          "sat" => '16'
          
         ),
         "week4" => array (
          "sun" => '17',
          "mon" => '18',	
          "tue" => '19',
          "wed" => '20',
          "thu" => '21',
          "fri" => '22',	
          "sat" => '23'
          
         ),
         "week5" => array (
          "sun" => '24',
          "mon" => '25',	
          "tue" => '26',
          "wed" => '27',
          "thu" => '28',
          "fri" => '29',	
          "sat" => '30'
          
         ),
         "week6" => array (
          "sun" => '31',
          "mon" => '',	
          "tue" => '',
          "wed" => '',
          "thu" => '',
          "fri" => '',	
          "sat" => ''
          
         )
         );
        }
      if($firstDay == 6){
        $calenderArray = array(
          "week1" => array (
            "sun" => '',
            "mon" => '',	
            "tue" => '',
            "wed" => '',
            "thu" => '',
            "fri" => '',	
            "sat" => '1',
            
         ),
         
         "week2" => array (
          "sun" => '2',
          "mon" => '3',	
          "tue" => '4',
          "wed" => '5',
          "thu" => '6',
          "fri" => '7',	
          "sat" => '8'
          
         ),
         "week3" => array (
          "sun" => '9',
          "mon" => '10',	
          "tue" => '11',
          "wed" => '12',
          "thu" => '13',
          "fri" => '14',	
          "sat" => '15'
          
         ),
         "week4" => array (
          "sun" => '16',
          "mon" => '17',	
          "tue" => '18',
          "wed" => '19',
          "thu" => '20',
          "fri" => '21',	
          "sat" => '22'
          
         ),
         "week5" => array (
          "sun" => '24',
          "mon" => '25',	
          "tue" => '26',
          "wed" => '27',
          "thu" => '28',
          "fri" => '29',	
          "sat" => '30'
          
         ),
         "week6" => array (
          "sun" => '30',
          "mon" => '31',	
          "tue" => '',
          "wed" => '',
          "thu" => '',
          "fri" => '',	
          "sat" => ''
          
         )
         );
        
      }

    ?>
    <div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
      <h2 class="buttons">Office Hours Setup Up</h2>
      <form action="calender.php" method="post" name="cal">
      Student Name : <input type="text" name="studentName" value="">  
      Student Email : <input type="text" name="studentEmail" value="">
      <input type="submit" value="Submit">
      <input type="reset" value="Clear"><br><br>
      
      <?php
        foreach($monday as $value)
        {
          echo '<input type="hidden" name="monday[]" value="'. $value. '">';
        }
        foreach($tuesday as $value)
        {
          echo '<input type="hidden" name="tuesday[]" value="'. $value. '">';
        }
        foreach($wednesday as $value)
        {
          echo '<input type="hidden" name="wednesday[]" value="'. $value. '">';
        }
        foreach($thursday as $value)
        {
          echo '<input type="hidden" name="thursday[]" value="'. $value. '">';
        }
        foreach($friday as $value)
        {
          echo '<input type="hidden" name="friday[]" value="'. $value. '">';
        }
        if($_POST['myforms'] == 'cal'){
            if (empty($studentName) || empty($studentEmail) || empty($timeSelected) ) {
              echo "Email or name or time slot missing. Fill all three to book slot.";
            }else {
              $response = mail("euyar.gmu.edu", "Office hours sign up", "$studentName booked $timeSelected ", "From: $studentEmail");
              if($response){
                echo "<p>Email sucessfully sent from ".$studentEmail."</p>";
              }
            }
          }
      ?>
      <div class="calenderhead row">
        <div class="col-md-5 col-lg-5"></div>
        <?php 
        echo "<h2 style='color:#fff'>July 2019</h2>";
        ?>
      </div>

      <div class="calenderDays row">
        <div class= "col-md-1 col-lg-1 row"></div>
        <div class="col-md-7 col-lg-7 row">
          <div class="caldivide col-md-3 col-lg-3">
            Sunday
          </div>
          <div class="caldivide col-md-3 col-lg-3">
            Monday
          </div>
          <div class="caldivide col-md-3 col-lg-3">
            Tuesday
          </div>
          <div class="caldivide col-md-3 col-lg-3">
            Wednesday
          </div>
        </div>
        <div class="col-md-5 col-lg-5 row">
          <div class="caldivide col-md-4 col-lg-4">
            Thursday
          </div>
          <div class="caldivide col-md-4 col-lg-4">
            Friday
          </div>
          <div class="caldividelast col-md-4 col-lg-4">
            Saturday
          </div>
        </div>
        
        
      </div>
      
        
        <?php
          foreach($calenderArray as $i){            
            echo "<div class='calenderDays row'>
            <div class= 'col-md-1 col-lg-1 row'></div>
            <div class='col-md-7 col-lg-7 row'>
              <div class='caldivide col-md-3 col-lg-3'>",($daysInMonth == 30 && $i['sun'] > '30')? '':$i['sun'],
              "</div><div class='caldivide col-md-3 col-lg-3'>"
              , ($daysInMonth == 30 && $i['mon'] > '30')? '':$i['mon'],"<br>";
              if($i['mon'] != "" && isset($monday)  && $i['mon'] <= strval($daysInMonth)){
                foreach($monday as $y){
                  $value = $y.'-'.$i['mon'];
                  if($datemodified  != $i['mon']  || $timeSelected != $y || $timeSelected == '' || $studentName == '' ||  $studentEmail == ''){
                    echo "<input type='radio' name='stime' value='$value'>$y</input><br>";
                  }
                  if($datemodified == $i['mon'] && $timeSelected == $y && $timeSelected != '' && $studentName != '' &&  $studentEmail != ''){
                    $value = $y.'-'.$studentName;
                    echo "<p style='text-align: left'>$value<br></p>";
                  }
                }
              }
              
              echo "</div>
              <div class='caldivide col-md-3 col-lg-3'>
              ", ($daysInMonth == 30 && $i['tue'] > '30')? '':$i['tue'],"<br>";

              if($i['tue'] != "" && isset($tuesday) && $i['tue'] <= strval($daysInMonth)){
                foreach($tuesday as $y){
                  $value = $y.'-'.$i['tue'];
                  if($datemodified  != $i['tue']  || $timeSelected != $y || $timeSelected == '' || $studentName == '' ||  $studentEmail == ''){
                    echo "<input type='radio' name='stime' value='$value'>$y</input><br>";
                  }
                  if($datemodified == $i['tue'] && $timeSelected == $y && $timeSelected != '' && $studentName != '' &&  $studentEmail != '') {
                    $value = $y.'-'.$studentName;
                    echo "<p style='text-align: left'>$value<br></p>";
                  }
                }
              }
              
              echo "</div>
              <div class='caldivide col-md-3 col-lg-3'>
              ", ($daysInMonth == 30 && $i['wed'] > '30')? '':$i['wed'],"<br>";
              
              if($i['wed'] != "" && isset($wednesday) && $i['wed'] <= strval($daysInMonth)){
                foreach($wednesday as $y){
                  $value = $y.'-'.$i['wed'];
                  if($datemodified  != $i['wed']  || $timeSelected != $y || $timeSelected == '' || $studentName == '' ||  $studentEmail == ''){
                    echo "<input type='radio' name='stime' value='$value'>$y</input><br>";
                  }
                  if($datemodified == $i['wed'] && $timeSelected == $y && $timeSelected != '' && $studentName != '' &&  $studentEmail != ''){
                    $value = $y.'-'.$studentName;
                    echo "<p style='text-align: left'>$value<br></p>";
                  }
                }
              }
              
              echo "
              </div>
            </div>
            <div class='col-md-5 col-lg-5 row'>
              <div class='caldivide col-md-4 col-lg-4'>
              ", ($daysInMonth == 30 && $i['thu'] > '30')? '':$i['thu'],"<br>";

              if($i['thu'] != "" && isset($thursday) && $i['thu'] <= strval($daysInMonth)){
                foreach($thursday as $y){
                  $value = $y.'-'.$i['thu'];
                  if($datemodified  != $i['thu']  || $timeSelected != $y || $timeSelected == '' || $studentName == '' ||  $studentEmail == ''){
                    echo "<input type='radio' name='stime' value='$value'>$y</input><br>";
                  }
                  if($datemodified == $i['thu'] && $timeSelected == $y && $timeSelected != '' && $studentName != '' &&  $studentEmail != ''){
                    $value = $y.'-'.$studentName;
                    echo "<p style='text-align: left'>$value<br></p>";
                  }
                }
              }
              
              echo "
              </div>
              <div class='caldivide col-md-4 col-lg-4'>
              ", ($daysInMonth == 30 && $i['fri'] > '30')? '':$i['fri'],"<br>";

              if($i['fri'] != "" && isset($friday) && $i['fri'] <= strval($daysInMonth)){
                foreach($friday as $y){
                  $value = $y.'-'.$i['fri'];
                  if($datemodified  != $i['fri']  || $timeSelected != $y || $timeSelected == '' || $studentName == '' ||  $studentEmail == ''){
                    echo "<input type='radio' name='stime' value='$value'>$y</input><br>";
                  }
                  if($datemodified == $i['fri'] && $timeSelected == $y){
                    $value = $y.'-'.$studentName;
                    echo "<p style='text-align: left'>$value<br></p>";
                  }
                }
              }
              
              echo "
              </div>
              <div class='caldividelast col-md-4 col-lg-4'>
              ", ($daysInMonth == 30 && $i['sat'] > '30')? '':$i['sat'],"
              </div>
            </div>
          </div>
          ";
          }
        ?>
        <div class="buttons col-md-12 col-lg-12">
        
        <input type="hidden" name="myforms" value="cal"/><br><br>
        <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
      </div>
        </form>
      </body>
    </html>

    </div>
    <?php include '../footer.php';?>
  
  </body>
</html>

<?php


/* *************************** setting up queries *************************** */

// query to retrieve current day's Temperature
$getCurrentTemperature="SELECT Temperature FROM Stats ORDER BY DateAdded DESC, TimeAdded DESC LIMIT 1";

// query to retrieve current day's Humidity
$getCurrentHumidity="SELECT Humidity FROM Stats ORDER BY DateAdded DESC, TimeAdded DESC LIMIT 1";



/* ********************************************************************************* */















/* *************************** running queries *************************** */

// initializing database connection

require (TEMPLATEPATH . '/php/greenhouseDataMySqlConnection.php'); 

// run previous queries
$getCurrentTemperatureResult=mysqli_query($con,$getCurrentTemperature);
$getCurrentHumidityResult=mysqli_query($con,$getCurrentHumidity);





// closing the database connection
mysqli_close($con);

/* ********************************************************************************* */













/* *************************** fetching values *************************** */





// extracting values
   while($row = mysqli_fetch_array($getCurrentTemperatureResult))
      {
       $getCurrentTemperatureResultVal=$row['Temperature'];  
           
      }

	while($row = mysqli_fetch_array($getCurrentHumidityResult))
      {
       $getCurrentHumidityResultVal=$row['Humidity'];  
           
      }

 






/* ********************************************************************************* */
























/* *************************** for future development *************************** */

/*

// query to retrieve DateAdded
$getDateAdded ="SELECT DateAdded FROM Stats ORDER BY DateAdded DESC";

//running the query
$getDateAddedResult=mysqli_query($con,$getDateAdded);

//array to hold all dateAdded
$allDateAdded = array();

for ($i=0; $i<count($allDateAdded) ; $i++) { 
   echo $allDateAdded[$i]."YYYY";
}

  while($row = mysqli_fetch_array($getDateAddedResult))
      {
       $getDateAddedResultVal=$row['DateAdded'];  
       array_push($allDateAdded, $getDateAddedResultVal);       
      }

*/

/* ********************************************************************************* */

?>

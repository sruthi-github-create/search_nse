<?php
//Including Database configuration file.
include "conn.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT * FROM 30_nse_stocks_info WHERE Name LIKE '%$Name%' LIMIT 5";
//Query execution
   $ExecQuery = MySQLi_query($conn, $Query);
//Creating unordered list to display result.

   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <!-- <li onclick='fill("<?php echo $Result['Name']; ?>")'> -->
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Name']; ?>
       <?php echo $Result['Current_Market_Price']; ?>
   </a><br>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
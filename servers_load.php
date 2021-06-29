<?php

/****
 * 
There are a number of servers running our application.
Given N servers, in 5 minutes interval, every minute, the load is checked and if load is
less than 50%, the servers are either reduced to N/2 else they are increased to
2N + 1
Input : No. of servers (N), server load every minute
Output : The number of servers running at the end of 5 minutes

Example:
Input:
2 (2 servers)
10 60 50 15 20 (On 1st minute - 10% load, on 2nd minute - 60% load & so on)
Output:
1 (After 5 minute, 1 server is running)
 * 
 */

//INPUTS 
$n_servers ="2";                                            // N server 
$interval_minutes = "5";                                    // 5 minutes Interval
$server_load = array('10','60','50','15','20');             // Sever Load in every minute

$i="1"; //loop counter
$load_checker = 0;   // assume this as pointer that address the array element position

for($i;$i<=count($server_load);$i++)
{
   if($server_load[$load_checker] < 50)
   {
       echo "<h1>Current Server Load is : ".$server_load[$load_checker]."% Minutes : ".$i."</h1>   Total Server(value of N) : ".$n_servers."  </br>";

       $formulate = $n_servers / 2;
       echo "Allocated Server is : ".$formulate;

   }
   elseif($server_load[$load_checker] >= 50){

        echo "<h1>Current Server Load is : ".$server_load[$load_checker]."% Minutes : ".$i."</h1>   Total Server(value of N) : ".$n_servers." </br> ";
        $formulate = 2 * $n_servers + 1;  // 2N+1
        echo "Allocated Server is : ".$formulate;
   }
    
    $load_checker +=1;

}















?>
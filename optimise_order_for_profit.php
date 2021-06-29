<?php 

/****
 * 
Everyday, the restaurant has a limited number of breads, vadas and samosas. The
restaurant needs to optimise orders in a way that they can generate maximum profit.
Vadapav needs two bread and a vada
Samosapav needs two bread and a samosa

Example
Input:
First input is: no. of breads, no. of vadas and no. of samosas available in the
restaurant
Second input is: Price of Vadapav & price of Samosapav set by the restaurant
Output:
Maximum profit possible

Example:
Input:
9 2 3 (9 breads, 2 vada, 3 samosa)
10 15 (Rs.10 - Vadapav, Rs.15 - Samosapav)
Output:
55 (Maximum profit possible is Rs.55)
 * 
 */
/***
Vadapav needs two bread and a vada
Samosapav needs two bread and a samosa
 1 vada with 2 Paav = 10 Rupees ->  that gives us 2 vada 4 paav = 20 rupees.
 1 samosa with 2 Paav = 15 Rupess   -> 3 samosa with 6 Paav = 15 * 3 = 45 Rupees

 Paav Left After Setup = 0   Used = 10  Quantity = 9

 */

//INPUTS Qunatity
error_reporting(0);   
$s = true;   
$v = true; 

$prices = array(
            'vadaPav' => 10,
            'samosaPav' => 15
);

$quantity = array (
                'pav' => 9,
                'vada' => 2,
                'samosa' => 3
);

$qpav = $quantity['pav'];
$qvada = $quantity['vada'];
$qsamosa = $quantity['samosa'];

echo "<h1>Scenario 1</h1>";
echo "<h3>Selling VadaPav as Priority with addition to SamosaPAv</h3> </br> 
      <p>Total Paav : ".$quantity['pav'].", Total Vada : ".$quantity['vada'].", Total Samosa : ".$quantity['samosa']."</br></br>";

if($v)
{
   
    echo "<p><b>Optimising Vada and Samosa with Bread.......</b></p>";

        $k=1;
        for($i=1;$i<=$qvada;$i++)
        {
            if($qpav > 1)
            {
                    $qpav = $qpav-2;   /// left over paav after setting it to vada
                    $counter_run_vada = $i;
            }else
            {   

                echo "MESSAGE ->  BREAD STOCK IS NOT ENOUGH";
               die();
            }
        }

       echo "<b>[VADA PAV]  Restaurant price : ".$prices['vadaPav']."</b></br>";
       echo "VADA CREATED WITH BREAD : ".$counter_run_vada."</br>";
       echo "VADA LEFT : ".($qvada - $counter_run_vada)."</br>";
       echo "Remaing Bread : ".$qpav."<br>";
       echo "Amount Earned By Selling Vada Pav: ".$prices['vadaPav'] * $counter_run_vada ."</br></br>";
       //EOF Of vadapav

        if($qpav>1)
        {
                echo "<b> [Samosa PAV]  Restaurant price : ".$prices['samosaPav']."</b></br>";
       
                  for($k;$k<=$qsamosa;$k++)
                  {
                    
                        if($qpav > 1)
                        {
                            $qpav = $qpav-2;
                            $counter_run_samosa = $k;
                                
                        }
                        else{
                            break;
                        }

                   }
        
                echo "SAMOSA CREATED WITH BREAD : ".$counter_run_samosa."</br>";
                echo "SAMOSA LEFT : ".($qsamosa - $counter_run_samosa)."</br>";
                echo "Reaming Bread : ".$qpav."</br>";
                echo "Amount Earned By Selling Samosa Pav: ".$prices['samosaPav'] *  $counter_run_samosa."</br></br><hr>";
          }
          else{
                echo "<b> [Samosa PAV]  Restaurant price : ".$prices['samosaPav']."</b></br>";
                $counter_run_samosa=0;
                echo "SAMOSA CREATED WITH BREAD : ".$counter_run_samosa."</br>";
                echo "SAMOSA LEFT : ".($qsamosa - $counter_run_samosa)."</br>";
                echo "Reaming Bread : ".$qpav."</br>";
                echo "Amount Earned By Selling Samosa Pav: ".$prices['samosaPav'] *  $counter_run_samosa."</br></br><hr>";
          }
    // EOF creating vadapav and samosapav  calculating profit as per restaurant price after we sell them


      $total_vadaPav =  $prices['vadaPav'] * $counter_run_vada;
      $total_samosaPav =  $prices['samosaPav'] * $counter_run_samosa;

      echo "<b>Total Amount Earned = ";
      echo $total_vadaPav + $total_samosaPav; echo "</b><br><hr>"; 

}

/*****
 SENARIO 2
 Seeling SamosaPav as Priority with addition to VadaPav
 */
echo "<h1>SCENARIO 2</h1>";
echo "<h3>Selling Samosa Pav on Priority with addition to Vada Pav</h3></br>";
$qpav1 = $quantity['pav'];
$qvada1 = $quantity['vada'];
$qsamosa1 = $quantity['samosa'];


if($s)
{
         if($qpav1 > 1)
           {
                echo "<b> [Samosa PAV]  Restaurant price : ".$prices['samosaPav']."</b></br>";
                  $kk=1;
                  for($kk;$kk<=$qsamosa1;$kk++)
                  {
                    
                        if($qpav1 > 1)
                        {
                            $qpav1 = $qpav1-2;
                            $counter_run_samosa1 = $kk;
                                
                        }
                        else{
                            break;
                        }

                   }
        
                echo "SAMOSA CREATED WITH BREAD : ".$counter_run_samosa1."</br>";
                echo "SAMOSA LEFT : ".($qsamosa1 - $counter_run_samosa1)."</br>";
                echo "Reaming Bread : ".$qpav1."</br>";
                echo "Amount Earned By Selling Samosa Pav: ".$prices['samosaPav'] *  $counter_run_samosa1."</br></br>";
            }
          else{
                echo "<b> [Samosa PAV]  Restaurant price : ".$prices['samosaPav']."</b></br>";
                $counter_run_samosa1=0;
                echo "SAMOSA CREATED WITH BREAD : ".$counter_run_samosa1."</br>";
                echo "SAMOSA LEFT : ".($qsamosa1 - $counter_run_samosa1)."</br>";
                echo "Reaming Bread : ".$qpav1."</br>";
                echo "Amount Earned By Selling Samosa Pav: ".$prices['samosaPav'] *  $counter_run_samosa1."</br></br><hr>";
            }

///vadapav code
    for($ii=1;$ii<=$qvada1;$ii++)
            {
                if($qpav1 > 1)
                {
                        $qpav1 = $qpav1-2;   /// left over paav after setting it to vada
                        $counter_run_vada1 = $ii;
                }else
                {
                    break;
                }
            }

       echo "<b>[VADA PAV]  Restaurant price : ".$prices['vadaPav']."</b></br>";
       echo "VADA CREATED WITH BREAD : ".$counter_run_vada1."</br>";
       echo "VADA LEFT : ".($qvada1 - $counter_run_vada1)."</br>";
       echo "Remaing Bread : ".$qpav1."<br>";
       echo "Amount Earned By Selling Vada Pav: ".$prices['vadaPav'] * $counter_run_vada1 ."</br></br><hr>";
       //EOF Of vadapav

 
 
            $total_vadaPav1 =  $prices['vadaPav'] * $counter_run_vada1;
            $total_samosaPav1 =  $prices['samosaPav'] * $counter_run_samosa1;

            echo "<b>Total Amount Earned = ";
            echo $total_vadaPav1 + $total_samosaPav1; echo "</b><br><hr>"; 
    }
    // EOF creating vadapav and samosapav  calculating profit as per restaurant price after we sell them












?>
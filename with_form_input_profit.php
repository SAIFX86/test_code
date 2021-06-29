<?php

echo "<form action='' method='POST'>";
echo "<label>Total Bread</label>";
echo "<input type='number' name='tbread'/> <small>bread must be more than 1 to make Money</small><br>";
echo "<label>Total Vada</label>";
echo "<input type='number' name='tvada'/><br>";
echo "<label>Total Samosa</label>";
echo "<input type='number' name='tsamosa'/><br>";
echo "<label>Price of Samosa Pav</label>";
echo "<input type='number' name='psamosa'/><br>";
echo "<label>Price of VadaPav</label>";
echo "<input type='number' name='pvada'/><br>";
echo "<button name='submit' value='submit'>Click to Processs Inputs</button>";
echo "</form>";










/***
 USE WITH FORM IGNORE
 */
error_reporting(0); 
if(isset($_POST['submit']))
{
  $v1=true;
  $s1=true;
    $prices = array(
        'vadaPav' => $_POST['pvada'],
        'samosaPav' => $_POST['psamosa']
                );

        $quantity = array (
                    'pav' => $_POST['tbread'],
                    'vada' => $_POST['tvada'],
                    'samosa' => $_POST['tsamosa']
        );

        $qpav = $quantity['pav'];
        $qvada = $quantity['vada'];
        $qsamosa = $quantity['samosa'];

    
    
    if($v1)
    {
        
            if($qpav>1)
            {
                echo "<h1>Scenario 1</h1>";
            echo "<h3>Selling VadaPav as Priority with addition to SamosaPAv</h3> </br> 
                <p>Total Bread : ".$quantity['pav'].", Total Vada : ".$quantity['vada'].", Total Samosa : ".$quantity['samosa']."</br></br>";
            
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
                        break;
                    }
                }
            }
            else{
                echo "MESSAGE ->  BREAD STOCK IS NOT ENOUGH";
                die();
            }
    
           echo "<b>[VADA PAV]  Restaurant price : ".$prices['vadaPav']."</b></br>";
           echo "VADA CREATED WITH BREAD : ".$counter_run_vada."</br>";
           echo "VADA LEFT : ".($qvada - $counter_run_vada)."</br>";
           echo "Remaing Bread : ".$qpav."<br>";
           echo "Amount Earned By Selling Vada Pav: ".$prices['vadaPav'] * $counter_run_vada ."</br></br>";
           //EOF Of vadapav
        
           ///SAMOSA PAAV
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


if($s1)
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



}


?>
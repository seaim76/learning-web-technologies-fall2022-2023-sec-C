    <?php  
     $n1=(int)readline('Enter the number: ');
     $n2=(int)readline('Enter the number: ');
     $n3=(int)readline('Enter the number: ');
     if($n1>$n2 && $n1>$n3)
     {
      echo "$n1 is Greater";
      }
     else{
         if($n2>$n1 && $n2>$n3)
         { 
             echo "$n2 is Greater";
          }
         else
         {
             echo "$n3 is Greater";
         }
     }
      ?>  
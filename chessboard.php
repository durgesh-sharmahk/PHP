<table style="margin:auto">
 <?php
 for($row=1; $row<=8; $row++){
     echo "<tr>";
     for($column=1; $column<=8; $column++){
         if($column%2 == 0){
             $color='#fff';
         }
         else{
             $color='#000';
         }
         if($row%2 == 0){
            if($column%2 == 0){
            $color='#000';
        }
        else{
            $color='#fff';
        }
    }
        echo "<td style='border:1px solid; height:60px; width:60; background-color:".$color."'>";
        
        echo "</td>";
     }
     echo "</tr>";
 }
 
 ?>
</table>

<!DOCTYPE html>
<html>
<style>
table,  td {
  border:1px solid black;
  text-align: center;
  padding: 3px;
}
td:hover{
   padding: 5px;
}
h1{
    color: black;
   text-decoration: underline;
    text-shadow: 4px 4px 2px rgba(2, 5, 7, 0.6);
}
table{
    background-image: linear-gradient(to right bottom ,red,yellow);
    animation-name: example;
  animation-duration: 6s;
  animation-delay: 0s;

}

@keyframes example {
  0% {background-image: linear-gradient(to right bottom ,red,yellow);
  }
  25% {background-image: linear-gradient(to right bottom ,green, blue);
      transform: skew(360deg);
      transform: rotate(360deg);
   }
   50% {background-image: linear-gradient(to right bottom ,rgb(50, 23, 75),rgb(127, 150, 250));
    
    transform: translate(50px,100px);
   }
   75% {background-image: linear-gradient(to right bottom ,yellow,red);
   
   transform: scale(0.5,0.5);}
   100% { background-image: repeating-radial-gradient(red, yellow 10%, green 15%);
    transform: scale(1,1); }
}


</style>
<body>

<h1>Table 9*9</h1>


    <table>
    <?php for($i=1 ;$i<10; $i++) {?>
      
        <tr> 
        <?php for($j=1;$j<10;$j++) {?>
         <td><?php echo $j*$i ?></td>
         <?php }?>
        </tr>


        <?php }?>     
    </table>

</body>
</html>
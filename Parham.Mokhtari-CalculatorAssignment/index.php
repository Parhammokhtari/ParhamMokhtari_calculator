

<?php
$userInput=$_GET['textcontainer'];
 
// $pattern3 = "/.*[+*-\/].*[+*-\/].*/m";
$pattern3 = "~[+\-*\/][+\-*\/]~";
$pattern='~^[0-9+\-*\/]+$~';
// $pattern1='^[*\/\+-]';
$pattern1='/^[0-9\-]/';
$pattern2='/[0-9]$/';
$check=false;
$inputLength= strlen($userInput);
$firstArr = array($inputLength);
if($userInput!=null){
if(preg_match($pattern,$userInput)){
    if(preg_match($pattern1,$userInput)&&preg_match($pattern2,$userInput)){
        if(!preg_match($pattern3,$userInput)){
            echo "Valid Input";
            $check=true;
        }else{
            echo "invalid Input: Several operands are in a row!!!! "; 
        }
    } else{
        echo "invalid Input: The end and start of expression should be digit ";
    }
}else{
    echo "invalid Input: input expression like : (1+2)*5";
}
}
echo "\r\n";
$paramtter="+\-*\/";
$chars = preg_split('/([' . $paramtter . '])/', $userInput, -1, PREG_SPLIT_DELIM_CAPTURE);
//print_r($chars);
 $flag =true;
 while($flag){
for($index=0;$index<sizeof($chars);$index++){
if(in_array("*",$chars,true) ){
   $i= array_search('*',$chars);
    // echo $i;
       $first=intval( $chars[$i-1] );
       $second=intval($chars[$i+1]);
       $result=$first*$second;
       $chars[$i]=$result;
       array_splice($chars, $i+1, 1);
       array_splice($chars, $i-1, 1);
        // unset($chars[$i]);
        // unset($chars[$i+1]);
        // unset($chars[$i-1]);
       // print_r($chars);
  break;
}elseif(in_array("/",$chars,true) ){
      $i= array_search('/',$chars);
    //  echo $i;
      $first=floatval( $chars[$i-1] );
      $second=floatval($chars[$i+1]);
      $result=$first/$second;
      $chars[$i]=$result;
      array_splice($chars, $i+1, 1);
      array_splice($chars, $i-1, 1);
      
      // print_r($chars);
       break;
}elseif(in_array("+",$chars,true) or in_array("-",$chars,true)){
    if(in_array("+",$chars,true)){
        $i= array_search('+',$chars);
     //   echo $i;
        $first=floatval( $chars[$i-1] );
        $second=floatval($chars[$i+1]);
        $result=$first+$second;
        $chars[$i]=$result;
        array_splice($chars, $i+1, 1);
        array_splice($chars, $i-1, 1);
        // print_r($chars);
    }
    if(in_array("-",$chars,true)){
        $i= array_search('-',$chars);
      //  echo $i;
        $first=floatval( $chars[$i-1] );
        $second=floatval($chars[$i+1]);
        $result=$first-$second;
        $chars[$i]=$result;
        array_splice($chars, $i+1, 1);
        array_splice($chars, $i-1, 1);
        // print_r($chars);
    }
    
     break;
}else{
   $flag=false;
   break;
}
}
 }
 if($check){ echo $userInput."= ";
    echo $chars[0];}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <a href="index.html">Back</a>
</body>
</html>
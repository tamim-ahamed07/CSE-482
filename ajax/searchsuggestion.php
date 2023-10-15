<?php 
session_start();
include '../db_connect.php';
  $checkqry = "SELECT * FROM forum WHERE question like '%".$_POST['search']."%'";
  $result = mysqli_query($connect, $checkqry);
  $output = '<ul style="list-style-type:none;padding:5px;background:#ccc">';

  if(mysqli_num_rows($result) > 0 ){
     while ($data = mysqli_fetch_array($result)){
      $output.= '<li style="padding:10px;border-bottom: 2px solid red;cursor:pointer" class="getsearch">'.$data['question'].'</li>';
     };
    
  }else{
    $output .= '<li style="padding:10px;border-bottom: 2px solid red;">no suggestion</li>';
  }
  $output .= '</ul>';
  echo $output;
 ?>
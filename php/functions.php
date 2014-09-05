<?php
session_start();

function message(){
  if(isset($_SESSION['message'])){
    $output = "<div class=\"alert alert-success center\" role=\"alert\">";
    // $output .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>";
    $output .= htmlentities($_SESSION['message']);
    $output .= "</div>";

    //clear message after use
    $_SESSION['message'] = null;
    return $output;
  }
}

function errors(){
  if(isset($_SESSION['errors'])){

    $output = "<div class=\"alert alert-danger center\" role=\"alert\">";
    // $output .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>";
    $output .= htmlentities($_SESSION["errors"]);
    $output .= "</div>";

    //clear message after use
    $_SESSION['errors'] = null;
    return $output;
  }
}

function redirect_to($new_location){
  header("Location: ". $new_location);
  exit;
}

?>

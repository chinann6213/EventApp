<?php

if(isset($_FILES['image'])){
  $user = "chinann6213";
  $target_dir = "../images/".$user."/";

  $total_images = count($_FILES['image']['name']);
  $image_preview = array();
  $errors = array();

  for ($i = 0; $i < $total_images; $i ++) {
    $isImage = false;
    $validate = getimagesize($_FILES["image"]["tmp_name"][$i]);
    if($validate !== false) {
      $isImage = true;
      list($width, $height, $type, $attr) = getimagesize($_FILES["image"]["tmp_name"][$i]);
    }

    if ($isImage === true) {
      $target_file = $target_dir . $_FILES["image"]["name"][$i];

      $file_name = $_FILES['image']['name'][$i];
      $file_size =$_FILES['image']['size'][$i];
      $file_tmp =$_FILES['image']['tmp_name'][$i];
      $file_type=$_FILES['image']['type'][$i];

      //$file_ext=explode('.',$_FILES['image']['name'][$i]);
      //$file_ext=strtolower(end($file_ext));
      $file_ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
      $allowed_extensions= array("jpeg","jpg","png", "gif");

      if(in_array($file_ext, $allowed_extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if (file_exists($target_file)) {
        $errors[]="file already exists.";
      }

      if($file_size > 2097152){
        $errors[]='File size exceeded.';
      }

      if(empty($errors)==true){
        if (move_uploaded_file($file_tmp, $target_dir.$file_name)) {
          $uploaded = array(
            'img_src' => 'images/chinann6213/'.$file_name,
            'img_width' => $width,
            'img_height' => $height
          );
          array_push($image_preview, $uploaded);
        }
      }else{
        array_unshift($errors, "error");
        echo json_encode($errors);
        exit();
      }
    }

  }
  echo json_encode($image_preview);
}




 ?>

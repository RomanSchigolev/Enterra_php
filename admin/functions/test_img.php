<?php
function uploadImage($image)
{
  $imageExtension = pathinfo($image["name"], PATHINFO_EXTENSION);
  // $newFolder = "./uploads/";
  $filename = uniqid() . "." . $imageExtension;
  // $newFolder .= $filename;
  move_uploaded_file($image["tmp_name"], "../../uploads/" . $filename);
  return $filename;
}

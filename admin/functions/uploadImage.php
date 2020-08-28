<?php
function uploadImage($newImage)
{
  $imageExtension = pathinfo($newImage["name"], PATHINFO_EXTENSION);
  $filename = uniqid() . "." . $imageExtension;
  move_uploaded_file($newImage["tmp_name"], ROOTPATH . "/uploads/" . $filename);
  return $filename;
}

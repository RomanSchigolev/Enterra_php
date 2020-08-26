<?php
function uploadImage($image)
{
  $imageExtension = pathinfo($image["name"], PATHINFO_EXTENSION);
  $filename = uniqid() . "." . $imageExtension;
  move_uploaded_file($image["tmp_name"], ROOTPATH . "/uploads/" . $filename);
  return $filename;
}

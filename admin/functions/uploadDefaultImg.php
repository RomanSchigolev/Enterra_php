<?php
function uploadDefaultImg($image)
{
  $imageExtension = pathinfo(basename($image), PATHINFO_EXTENSION);
  $filename = pathinfo(basename($image), PATHINFO_FILENAME) . "-" . uniqid() . "." . $imageExtension;
  copy(ROOTPATH . "/img/default.jpg", ROOTPATH . "/uploads/" . $filename);
  return $filename;
}

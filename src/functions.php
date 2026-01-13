<?php
function view($view, $data = [])
{
  extract($data);
  require "./views/templete/app.php";
}

function dd($dump)
{
  echo "<pre>";
  var_dump($dump);
  echo "</pre>";
  die();
}

function abort($code)
{
  http_response_code($code);
  view($code);
  die();
}

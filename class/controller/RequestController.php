<?php

class RequestController
{
  public static function execute($request, $data)
  {
    if ($request === "first_load") {
      CalculatriceView::display();
    }
    else {
      echo "test res kes";
    }
  }
}

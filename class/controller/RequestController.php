<?php

class RequestController
{
  public static function execute($request, $data)
  {
    if ($request === '00') $request = '0';
    if ($request === "first_load") {
      $calculatriceModel = new CalculatriceModel();
      $calculatriceModel->reset();

      CalculatriceView::display('____________');
      return FALSE;
    }
    else if (strpos("0123456789.", $request) !== FALSE) { // Numeric button
      CalculatriceController::numeric_button($request);
    }
    else if ($request === "+") {
      CalculatriceController::add();
    }
    else if ($request === "-") {
      CalculatriceController::soustract();
    }
    else if ($request === "*") {
      CalculatriceController::multiply();
    }
    else if ($request === "/") {
      CalculatriceController::divide();
    }
    else if ($request === "x²") {
      CalculatriceController::square();
    }
    else if ($request === "x³") {
      CalculatriceController::cube();
    }
    else if ($request === "sqrt") {
      CalculatriceController::sqrt();
    }
    else if ($request === "cbrt") {
      CalculatriceController::cbrt();
    }
    else if ($request === "PI") {
      CalculatriceController::PI_value();
    }
    else if ($request === "cos") {
      CalculatriceController::cos();
    }
    else if ($request === "sin") {
      CalculatriceController::sin();
    }
    else if ($request === "tan") {
      CalculatriceController::tan();
    }
    else if ($request === "mS") {
      CalculatriceController::memory_set();
    }
    else if ($request === "mR") {
      CalculatriceController::memory_get();
    }
    else if ($request === "=") {
      CalculatriceController::equal();
    }
    else if ($request === "Clear") {
      CalculatriceController::clear();
    }
    else {
      echo "no request.." . $request;
    }

    $calculatriceModel = new CalculatriceModel();

    echo $calculatriceModel->get_screen();
  }
}

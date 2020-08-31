<?php

class CalculatriceController
{

  public static function numeric_button($digit)
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    if (strpos($screen, '_') === FALSE) { // if screen copmlete
      return FALSE;
    }

    if ($digit === "0" && strrpos($screen, '0') === 11) { // if start already by 0
      return FALSE;
    }

    if ($digit === "." && strpos($screen, '.') !== FALSE) { // if already float
      return FALSE;
    }

    $screen .= $digit; // add digit

    $screen[0] = '?';

    $screen = str_replace('?', '', $screen);

    $calculatriceModel->set_screen($screen);
  }

  public static function add()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $last = CalculatriceController::format_screen($screen);

    $calculatriceModel->set_screen('____________');

    $calculatriceModel->set_last($last);

    $calculatriceModel->set_operator('+');
  }

  public static function soustract()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $last = CalculatriceController::format_screen($screen);

    $calculatriceModel->set_screen('____________');

    $calculatriceModel->set_last($last);

    $calculatriceModel->set_operator('-');
  }

  public static function multiply()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $last = CalculatriceController::format_screen($screen);

    $calculatriceModel->set_screen('____________');

    $calculatriceModel->set_last($last);

    $calculatriceModel->set_operator('*');
  }

  public static function divide()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $last = CalculatriceController::format_screen($screen);

    $calculatriceModel->set_screen('____________');

    $calculatriceModel->set_last($last);

    $calculatriceModel->set_operator('/');
  }

  public static function square()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = $value * $value;

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function cube()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = $value * $value * $value;

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function sqrt()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = sqrt($value);

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function cbrt()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = pow($value, (1/3));

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function PI_value()
  {
    $calculatriceModel = new CalculatriceModel();

    $calculatriceModel->set_screen('3.1415926535');
  }

  public static function cos()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = cos($value);

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function sin()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = sin($value);

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function tan()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $result = tan($value);

    $result = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($result);
  }

  public static function memory_set()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $calculatriceModel->set_memory($screen);
  }

  public static function memory_get()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_memory();

    $calculatriceModel->set_screen($screen);
  }

  public static function equal()
  {
    $calculatriceModel = new CalculatriceModel();

    $screen = $calculatriceModel->get_screen();

    $value = CalculatriceController::format_screen($screen);

    $operator = $calculatriceModel->get_operator();

    $last = $calculatriceModel->get_last();

    if ($operator === '+') {
      $result = $value + $last;
    }
    else if ($operator === '-') {
      $result = $value - $last;
    }
    else if ($operator === '*') {
      $result = $last * $value;
    }
    else if ($operator === '/') {
      $result = $last / $value;
    }

    $screen = CalculatriceController::format_result($result);

    $calculatriceModel->set_screen($screen);
  }

  public static function clear()
  {
    $calculatriceModel = new CalculatriceModel();

    $calculatriceModel->set_screen('____________');
  }


  private static function format_screen($screen)
  {
    $screen = str_replace('_', '', $screen);

    return floatval($screen);
  }

  private static function format_result($result)
  {
    $result = strval($result);

    $result = explode('E', $result);

    if (isset($result[1]) === TRUE) {
      if ($result[1][0] === '-') $result = '0.0000000000';
      else {
        $result = '999999999999';
      }
    }
    else {
      $result = $result[0];
    }

    if (strlen($result) > 12) {
      $result[12] = '?';
      $result = explode('?', $result);
      $result = $result[0];
    }
    else if (strlen($result) < 12) {
      $extra = 12 - strlen($result);
      for ($i=0; $i<$extra; $i++) {
        $result = '_' . $result;
      }
    }

    return $result;
  }
}

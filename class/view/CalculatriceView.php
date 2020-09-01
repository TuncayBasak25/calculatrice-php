<?php

class CalculatriceView
{
  public static function display($screen_digit)
  {
    ?>
    <div id="calculatrice_main" class="calculatrice w-25 m-auto">
      <div id="calculatrice_screen" class="d-flex">
        <?php
        for ($i=0; $i<strlen($screen_digit); $i++) {
          ?>
          <div class="screen_digit col-1 p-0 ratio_calc d-flex flex-wrap justify-content-center align-content-center bg-secondary">
            <div class="digit_case bg-info" style="border: 3px solid black; border-bottom: none;"></div>
            <div class="digit_case bg-info" style="border: 3px solid black; border-top: none"></div>
          </div>
          <?php
        }
         ?>
      </div>
      <div id="calculatrice_board" class="d-flex flex-wrap">
        <?php
        $button_list = ['1', '2', '3', '+', '-', '4', '5', '6', '*', '/', '7', '8', '9', 'x²', 'x³', '00', '.', 'sqrt', 'cbrt', 'PI', 'cos', 'mS', 'mR', 'sin', 'tan', '=', 'Clear'];
        foreach ($button_list as $index => $button) {
          if ($index < 3 || $index > 4 && $index < 8 || $index > 9 && $index < 13 || $index === 16) { //small button
            $button_class = "col-2";
          }
          else if ($index === 15) { // zero button
            $button_class = "col-4";
          }
          else { //other buttons
            $button_class = "col-3";
          }
          ?>
          <div class="<?= $button_class ?> calculatrice_button p-0 ratio_calc border" onclick="ajax(request('<?= $button ?>'), ajaxClickResponse)">
            <p class="text-center"><?php if ($button !== '00') echo $button; else echo '0'; ?></p>
          </div>
          <?php
        }
         ?>
      </div>
    </div>
    <?php
  }
}

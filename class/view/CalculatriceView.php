<?php

class CalculatriceView
{
  public static function display()
  {
    ?>
    <section id="calculatrice">
      <div id="screen">

      </div>
      <div id="button_board" class="d-flex flex-wrap">
        <?php
        $button_list = ['1', '2', '3', '+', '-', '4', '5', '6', '*', '/', '7', '8', '9', 'x²', 'x³', '0', '.', 'sqrt', 'PI', 'e', 'cos', 'sin', 'mR', 'mS', 'tan', 'a...'];
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
          <div class="<?= $button_class ?> calculatrice_button" onclick="ajax(request('<?= $button ?>'), buttonClick('<?= $button ?>')))">

          </div>
          <?php
        }
         ?>
      </div>
    </section>
    <?php
  }
}

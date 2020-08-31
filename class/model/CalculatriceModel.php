<?php

class calculatriceModel extends DataBaseModel
{
  public function __constructor() {
    $this->data_base = "tuncayb_calculatrice";
    $this->table = "calculatrice";
    $this->table_columns = "(
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      screen_content TEXT
    )";

    $this->createDataBase();

    $this->connect();

    $this->createTable();
  }

  public function new_screen() {
    $this->query("INSERT INTO $this->table (screen_content) VALUES (?)", "");
  }

  public function get_screen() {
    $this->query("SELECT screen_content FROM $this->table");
  }

  public function set_screen($value) {
    $this->query("UPDATE $this->table SET screen_content = ?", $value);
  }

}

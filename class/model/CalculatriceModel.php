<?php

class CalculatriceModel extends DataBaseModel
{
  public function __construct() {
    $this->data_base = "tuncayb_calculatrice";
    $this->table = "calculatrice";
    $this->table_columns = "(
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      screen CHAR(12),
      operator TEXT,
      last DOUBLE DEFAULT 0,
      memory char(12) DEFAULT '____________'
    )";

    $this->createDataBase();

    $this->connect();

    $this->createTable();
  }
  public function reset() {
    $this->resetTable();
    $this->new_screen();
  }

  public function new_screen() {
    $this->query("INSERT INTO $this->table (screen, operator) VALUES (?, ?)", "____________", "");
  }

  public function get_screen() {
    return $this->query("SELECT screen FROM $this->table")->fetch_assoc()['screen'];
  }

  public function get_operator() {
    return $this->query("SELECT operator FROM $this->table")->fetch_assoc()['operator'];
  }

  public function get_last() {
    return $this->query("SELECT last FROM $this->table")->fetch_assoc()['last'];
  }

  public function get_memory() {
    return $this->query("SELECT memory FROM $this->table")->fetch_assoc()['memory'];
  }

  public function set_screen($value) {
    $this->query("UPDATE $this->table SET screen = ?", $value);
  }

  public function set_operator($operator) {
    $this->query("UPDATE $this->table SET operator = ?", $operator);
  }

  public function set_last($value) {
    $this->query("UPDATE $this->table SET last = ?", $value);
  }

  public function set_memory($value) {
    $this->query("UPDATE $this->table SET memory = ?", $value);
  }

}

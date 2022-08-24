<?php 

class Conn {

  public function connect() {

    $host = 'localhost';
  
    $uname = 'root';
  
    $pword = '';

    $dbname = 'tdl_app';
  
    $dsn = "mysql:host=$host;dbname=$dbname";
  
    try {
  
      $pdo = new PDO($dsn, $uname, $pword);
  
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
      if (!$pdo) {
  
        echo 'Not Connected';
  
      }
  
      return $pdo;
  
    } catch (PDOException $e) {
  
      echo $e->getMessage();
  
    }
  
  }

  public function insertListName($l_name) {

    $query = "INSERT INTO list_name (name) VALUES (:l_name)";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':l_name' => $l_name]);

    return $stmt;

  }

  public function getListId() {

    $query = "SELECT MAX(list_id) as max_num FROM list_name";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute();

    $max_num = $stmt->fetch();

    return $max_num['max_num'];

  }

  public function insertListItems($items, $id) {

    $query = "INSERT INTO list_items (item_name, checked, list_id) VALUES (:items, 0, :list_id)";

    $stmt = $this->connect()->prepare($query);

    foreach ($items as $item) {

      $stmt->execute([':items' => $item, ':list_id' => $id]);

    }

    return $stmt;

  }

  public function getAllLists() {

    $query = "SELECT * FROM list_name";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute();

    return $stmt;

  }

  public function getItems($list_id) {

    $query = "SELECT * FROM list_items WHERE list_id = :list_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':list_id' => $list_id]);

    return $stmt;

  }

  public function checkItem($item_id) {

    $query = "UPDATE list_items SET checked = 1 WHERE item_id = :item_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':item_id' => $item_id]);

    return $stmt;

  }

  public function uncheckItem($item_id) {

    $query = "UPDATE list_items SET checked = 0 WHERE item_id = :item_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':item_id' => $item_id]);

    return $stmt;

  }

  public function updateItems($item_id, $item_name) {

    $query = "UPDATE list_items SET item_name = :item_name WHERE item_id = :item_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':item_id' => $item_id, ':item_name' => $item_name]);

    return $stmt;

  }

  public function delItems($item_id) {

    $query = "DELETE FROM list_items WHERE item_id = :item_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':item_id' => $item_id]);

    return $stmt;

  }

  public function delList($list_id) {

    $query = "DELETE  FROM list_name WHERE list_id = :list_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':list_id' => $list_id]);

    return $stmt;

  }

  public function delItem($list_id) {

    $query = "DELETE FROM list_items WHERE list_id = :list_id";

    $stmt = $this->connect()->prepare($query);

    $stmt->execute([':list_id' => $list_id]);

    return $stmt;

  }

}

?>
<?php
  require_once MODEL_DIR.DS.'contactModel.php';

  class ContactController{
    //db stuff
    private $conn;  

    //constructor with the db getconnection
    public function __construct($db){
      $this->conn = $db;
    }

    public function index(){
      $contacts = new Contacts;
      // Get the page via GET request (URL param: page), if non exists default the page to 1
      $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? (int)$_GET['page'] : 1;
      // Number of records to show on each page
      $records_per_page = 5;
      $sql = 'SELECT * FROM '.$contacts->table.' ORDER BY id LIMIT :current_page, :records_per_page';
      $stmt = $this->conn->prepare($sql);
      //bind the value of pagination
      $stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
      $stmt->bindValue(':records_per_page', $records_per_page, PDO::PARAM_INT);
      if($stmt->execute()){
        return ["res" => $stmt->fetchAll(PDO::FETCH_ASSOC), "page" => $page, "records_per_page" => $records_per_page];
      }else {
        die('ERROR OF SQL CONNEXION');
      }
    }
    
  }
?>

<?php
  /**
  *
  */
  class database
  {
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "dunghanh";
    protected $conn = NULL;
    protected $result = NULL;
    function __construct()
    {
      # code...
    }

  //--------------------------
    protected function connectDb(){
      // Create connection
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      // Check connection
     if ($this->conn->connect_error) {
          die("Connection failed: " . $this->conn->connect_error);
      }
    }
  //--------------------------------
    protected function disconnectDb(){
      $this->conn->close();
    }
  //--------------------------------
    public function myQuery($sql){
    $this->result = $this->conn->query($sql);
   }
  //---------------------------------
   protected function freeQuery(){
    if ($this->result)
      {
         mysqli_free_result($this->result);
      }
   }
  //---------------------------------
   public function numRows(){
        $rows = $this->result->num_rows;
        return $rows;
    }
  //--------------------------------
      public function fetchData()
    {
      if ($this->result->num_rows) {
        $row = $this->result->fetch_assoc();
        return $row;
      }
    }
  //----------------------------
  }
?>

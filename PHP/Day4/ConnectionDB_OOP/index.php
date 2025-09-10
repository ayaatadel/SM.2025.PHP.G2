<?php
class DB
{

    protected $db_name,
        $db_type,
        $db_user,
        $db_pass,
        $db_host,
        $connection;
    function __construct($db_name, $db_type, $db_user, $db_pass, $db_host)
    {
        $this->db_name = $db_name;
        $this->db_type = $db_type;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

        // Create Connection
        $this->connection = new PDO("$this->db_type:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
    }

    /**
     * get all data from table ==>> table name , query
     */
    function index($table) // get All Data
    {
        try {
            $query = "select * from $table";
            $data = $this->connection->query($query)->fetchAll(PDO::FETCH_ASSOC);

            if ($data) {
                return $data;
            } else {
                echo "No Data Found";
            }
        } catch (\Throwable $th) {
            echo  $th->getMessage();
        }
    }


    /**
     * show specific user data
     * ==> table name , id
     */

    function show($table, $id)
    {
        try {
            $query = "select * from $table where id=$id";
            $data = $this->connection->query($query)->fetch(PDO::FETCH_ASSOC);

            if ($data) {
                return $data;
            } else {
                echo "No Data Found";
            }
        } catch (\Throwable $th) {
            echo  $th->getMessage();
        }
    }
    function delete($table, $id)
    {
        try {
            $query = "delete from $table where id=$id";
            $sqlQury = $this->connection->prepare($query);
            $sqlQury->execute();
            // return "Data Deleted";
            return $sqlQury->fetch(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo  $th->getMessage();
        }
    }

    
    function insert($table,$data) {
    //    $_POST;===> associative array
    // keys 
    // values


    }
    function update() {}
}
// __construct($db_name, $db_type, $db_user, $db_pass, $db_host)

$database = new DB("iti_sm_php_g2_2025", "mysql", "root", "", "localhost");

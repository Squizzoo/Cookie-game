<?php
    class upgrade {
        private $conn;
        public $html;

        public function __construct($dbname, $user, $pass){
            try {
            $this->conn = new PDO("mysql:host=localhost;".$dbname."", $user, $pass);
            }
            catch(PDOException $e){
              print($e->getMessage());
            }

        }

        public function getUpgrades(){
            $html = $this->html;

            $query = "SELECT * FROM cookie_game_upgrades";
            $data = $this->conn->prepare($query);
            $data->execute();

            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach($result as $row){
                $html .= $row['upgrades_name'];
            }

            return $html;
        }
    }

    if(isset($_POST['getContent'])){
        $upgrade = new upgrade('cookie_game', 'root', '');
        $html = $upgrade->getUpgrades();

        echo $html;
    }
?>

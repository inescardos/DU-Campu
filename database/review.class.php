<?php
    declare(strict_types = 1);
    require_once(__DIR__ . '/../database/reply.class.php');

    class Review{
        public int $id;
        public string $review;
        public int $customer_id;
        public float $points;
        public int $restaurant_id;
        public string $date;

        public function __construct(int $id, string $review, int $customer_id, float $points, int $restaurant_id, string $date){ 
        $this->id = $id;
        $this->review = $review;
        $this->customer_id = $customer_id;
        $this->points = $points;
        $this->restaurant_id = $restaurant_id;
        $this->date = $date;
        }

        function getUsername(PDO $db) : string{
            $stmt = $db->prepare('SELECT username FROM User WHERE User.id=?');
            $stmt->execute(array($this->customer_id));
            $username = $stmt->fetch();
            return $username['username'];
        }


    }

?>
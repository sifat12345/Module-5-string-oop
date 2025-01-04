<?php

    class Book {
        private $title;
        private $availableCopies;
    
        public function __construct($title, $availableCopies) {
            $this->title = $title;
            $this->availableCopies = $availableCopies;
        }
    
        public function borrowBook() {
            if ($this->availableCopies > 0) {
                $this->availableCopies--;
                echo "You have successfully borrowed {$this->title}.<br>";
            } else {
                echo "{$this->title} is currently not available.<br>";
            }
        }
    
        public function returnBook() {
            $this->availableCopies++;
            echo "You have successfully returned {$this->title}.<br>";
        }
    
        public function getTitle() {
            return $this->title;
        }
    
        public function getAvailableCopies() {
            return $this->availableCopies;
        }
    }
    


    class Member {
        private $name;
    
        public function __construct($name) {
            $this->name = $name;
        }
    
        public function borrowBook($book) {
            echo "{$this->name} is borrowing {$book->getTitle()}...<br>";
            $book->borrowBook();
        }
    
        public function returnBook($book) {
            echo "{$this->name} is returning {$book->getTitle()}...<br>";
            $book->returnBook();
        }
    }
    
// Create books
$book1 = new Book("The Great Gatsby", 3);
$book2 = new Book("To Kill a Mockingbird", 5);

// Create members
$member1 = new Member("Member One");
$member2 = new Member("Member Two");

// Borrow books
$member1->borrowBook($book1);
echo '<br>';
$member2->borrowBook($book2);

// Display available copies
echo "{$book1->getTitle()} has {$book1->getAvailableCopies()} copies left.<br>";
echo "{$book2->getTitle()} has {$book2->getAvailableCopies()} copies left.<br>";

// Return books
$member1->returnBook($book1);
echo '<br>';
$member2->returnBook($book2);

// Display available copies
echo "{$book1->getTitle()} has {$book1->getAvailableCopies()} copies left.<br>";
echo "{$book2->getTitle()} has {$book2->getAvailableCopies()} copies left.<br>";

?>






<style>
    *{font-weight:600;}
</style>
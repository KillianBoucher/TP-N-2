<?php
class UserTest extends PHPUnit_Framework_TestCase {
  public function testIsValid() {
    $user1 = new User('john.doe@example.com', 'Doe', 'John', 25);
    $this->assertTrue($user1->isValid());

    $user2 = new User('jane.doe', 'Doe', 'Jane', 15);
    $this->assertFalse($user2->isValid());

    $user3 = new User('', 'Doe', 'Jane', 10);
    $this->assertFalse($user3->isValid());

    $user4 = new User('john.doe@example.com', '', 'Jane', 20);
    $this->assertFalse($user4->isValid());

    $user5 = new User('john.doe@example.com', 'Doe', '', 30);
    $this->assertFalse($user5->isValid());

    $user6 = new User('john.doe@example.com', 'Doe', 'John', 12);
    $this->assertFalse($user6->isValid());
  }
}
?>
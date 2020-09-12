<?php

require __DIR__ . "/../../Entity/Game.php";

class GameTest extends PHPUnit\Framework\TestCase {
  public function testImage_WithNull_ReturnPlaceholder() {
    $game = new Game();
    $game->setImagePath(null);
    $this->assertEquals('/images/placeholder.jpg', $game->getImagePath());
  }

  public function testImage_WithPath_ReturnPath() {
    $game = new Game();
    $game->setImagePath('/images/game.jpg');
    $this->assertEquals('/images/game.jpg', $game->getImagePath());
  }
}

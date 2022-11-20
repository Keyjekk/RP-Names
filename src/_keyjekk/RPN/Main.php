<?php

declare(strict_types=1);

namespace _keyjekk\RPN;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

  public function onEnable():void{

  $this->getServer()->getPluginManager()->registerEvents($this, $this);

  $this->getLogger()->info("§dRPN was started!");

  }

}

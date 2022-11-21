<?php

declare(strict_types=1);

namespace _keyjekk\RPN;

use pocketmine\{
  plugin\PluginBase,
  event\Listener,
  utils\Config
};

class Main extends PluginBase implements Listener{

  public function onEnable():void{

  $this->getServer()->getPluginManager()->registerEvents($this, $this);

  $this->getLogger()->info("§dRPN was started!");

  }
  
  public function onCommand(CommandSender $sender, Command $cmd, ):bool{
    
  }

}

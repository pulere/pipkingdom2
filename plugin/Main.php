<?php

namespace PluginYT;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\Command;
use pocketmine\CommandSender;

use pocketmine\Listener;

class main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getLogger()->info("Its Enabled haha UwU")
    }

    public function onDisable(){
        $this->getLogger()->info("Its disabled haha UwU")
    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

        switch($cmd->getName()){
            case "yt":
             if($sender instanceof Player){
                 $sender->sendMessage("hayyy")
             } else {
                 $sender->sendMessage("hayyy you are not a player")
             }
        }
    return true:
    }

}
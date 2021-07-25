
<?php

namespace Notes;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase

class Main extends PluginBase implements Listener {
    
    public function onEnable(){
        $this->getLogger()->info("Notes Plugin Actived");
    }
    
    public function onCommand
(CommandSender $sender, Command $cmd, string $label, array $args): bool{              switch($cmd->getName()){
            case "Notes":
                if ($sender instanceof Player){
                    $this->OpenMyForm($sender);
                }else{
                    $sender->sendMessage("Use Command In The Game");
                }
                break;
}
        return true;
}a

public function openMyForm($sender){
    $api = $this->getServer             ()->getPluginManager()->getPlugin       ("FormAPI");
        $form = $api->createSimpleForm(function(Playe4 $sender, int $data = null) {
            $result = $data;
            if($result)

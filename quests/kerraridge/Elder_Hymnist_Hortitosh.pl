sub EVENT_SAY { 
    if($text=~/Hail/i){
     quest::say("Hail. are you here to assist with something specific or just looking for something to do.");
     }
}
sub EVENT_ITEM { 
my $Ranger = quest::saylink("Ranger", 1);
my $Band = quest::saylink("Band", 1);
    if(plugin::check_handin(\%itemcount,18552 => 1)){
     quest::say("Our newest instrumentalist arrives! You have grown strong in the safety of our city and it is time now for you to repay our society. The Jharin. keepers of our history. accept you and deem you to be worthy of our training. Take this application to Registrar Bindarah and return to me with proof of your citizenship.");
     quest::say("I know that you may be nervous right now... after all. this should be a very exciting first step for you.  If you happen to get lost while looking for the registrar. just ask one of the other citizens or guards for directions.  They will most likely know where to find the place or person that you are looking for.");
     quest::summonitem("2873");
     quest::ding();
     quest::exp(50);
     }
    elsif(plugin::check_handin(\%itemcount, 2897 => 1, 2877 => 1)){
    quest::say("$name, citizen of Shar Vahl, accept this cloak as a symbol of your loyalty and service to our noble people. It will grow with you, young initiate, and like you it has incredible potential.  If you wish to complete further tasks, you should talk to Gherik Alarhun.");
    quest::say(" May I also suggest that you fing $Ranger $Band, he has a quest for you that will give you a stone that will get you to Shadeweavers Thicket which is close to the old city of Shar Vahl. To return to Kerra Isle, you would need to find the stone of origin.");
    quest::summonitem(2878);
    quest::summonitem(2877);
    quest::ding();
    quest::exp(100);
    quest::faction(175,1);
    quest::faction(2806,1); 
    }
   elsif(plugin::check_handin(\%itemcount,2897 => 1)){
    quest::say("This item means nothing to me by itself");
    quest::summonitem(2897);
    }
   elsif(plugin::check_handin(\%itemcount,2877 => 1)){
    quest::say("This item, by itself means nothing to me.");
    quest::summonitem(2877);
    }
    else {
  #do all other handins first with plugin, then let it do disciplines
  plugin::try_tome_handins(\%itemcount, $class, 'Bard');
  plugin::return_items(\%itemcount);
  }
}

#END of FILE Zone:sharvahl  ID:155166 -- Elder_Hymnist_Hortitosh 


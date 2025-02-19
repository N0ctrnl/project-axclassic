#Yeril_Imsin.pl
#Restock High Quality Ore (PoK)
#Commented out variables, declared instead of when used per Cavedude.
#my $x;
#my $y;
#my $z;
#my $h;

sub EVENT_SPAWN {
	quest::settimer("warning", 21480);#Timer for 5 hours and 58 minutes
	quest::settimer("despawn", 21600);#Timer for 6 hours
}

sub EVENT_TIMER {
	
	if ($timer == "warning") {
		quest::say("Running out of ore soon, get em while they're hot!");
		quest::stoptimer("warning");
	}
	
	if ($timer == "despawn") {
		#Commented these out, spawn by the db was specified...I wanted to write them just to do it.
		#Get my location
		#$x = $npc->GetX();
		#$y = $npc->GetY();
		#$z = $npc->GetZ();
		#$h = $npc->GetHeading();
	
		#Spawn the other me, the one with no ore
		#quest::spawn2(202364, 0, 0, $x, $y, $z, $h);
	
		#Depop myself
		quest::depop();
		quest::stoptimer("despawn");
	}
}

sub EVENT_SAY {
  if($text=~/Hail/i) {
    quest::say("Good day to you, $name. New Tanaan holds a wealth of knowledge and opportunities to further yourself in more ways than mere talent of the mind. If you are a craftsman of steel and armor and seek to further progress your trade, then you have come to the right place. My inventory is quite plentiful and holds the necessary elements for any blacksmith's trade. I am also willing to pay those [willing to help] me restock my supply of high quality ore.");
  }
  if($text=~/willing to help/i) {
    quest::say("Excellent! Simply fill this crate with either four large bricks or four small bricks of unrefined ore from Norrath and return it to me. I will provide you with coin and refine the ore for sale to the smiths of New Tanaan.");
    quest::summonitem(17814);#Empty Ore Crate
  }
}
  
  
sub EVENT_ITEM {
  if(plugin::check_handin(\%itemcount, 10953 => 1)) {#Large Shipment of High Quality Ore
    quest::say("Thank you $name! I will prepare the ore for sale and be open for business again momentarily. Here is your payment for your services.");
     quest::ding(); quest::exp(250);
    quest::faction(157, 10);#Inhabitants of Tanaan
    quest::givecash(0, 0, 0, 44);#44pp is specified exactly as part of the reward.
  }
 elsif(plugin::check_handin(\%itemcount, 10952 => 1)) {#Small Shipment of High Quality Ore
    quest::say("Thank you $name! I will prepare the ore for sale and be open for business again momentarily. Here is your payment for your services.");
     quest::ding(); quest::exp(250);
    quest::faction(157, 5);#Inhabitants of Tanaan
    quest::givecash(0, 0, 0, 14);#14pp is specified exactly as part of the reward.
  }
  
   quest::say("I don't need this."); #text made up
   plugin::return_items(\%itemcount);

    
}#Done
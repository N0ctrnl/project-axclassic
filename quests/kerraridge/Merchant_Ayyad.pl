sub EVENT_SAY { 
my $citizen = quest::saylink("citizen", 1);
if($text=~/Hail/i){
quest::say("Hello $name. sorry but I have no time to chitchat. I'm looking for the help of a $citizen."); }
}
if($text=~/citizen/i){
quest::emote(' looks at you excitedly,');
quest::say("Show me your acrylia slate and I'll explain my situation");
}
}
sub EVENT_ITEM { 
if(plugin::check_handin(\%itemcount, 2877 => 1)){
quest::say("Some of my wares are spoiling and I must place them in a container to preserve them. I cannot afford to take the loss that would result if they were to rot. Please $name. take this bowl and combine two lumps of gray mud with a flask of water and xakra bile. Take the resulting clay and this sketch with another water flask to fashion an unfired gray jar. Fire it in a kiln with a firing sheet and return to me with the product as soon as you can.");
quest::summonitem(2877); 
quest::summonitem(17233);
quest::summonitem(3497);
}
elsif(plugin::check_handin(\%itemcount, 3498 => 1)){
quest::say("Excellent! Please accept this knapsack as payment for your trouble. Here is my seal as well. I can always use more jars and if you give me four of my seals I will share with you a family secret.");
quest::summonitem(17234);
quest::summonitem(3499);
}
#END of FILE Zone:sharvahl  ID:155076 -- Merchant_Ayyad 


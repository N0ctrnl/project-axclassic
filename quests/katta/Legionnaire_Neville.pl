sub EVENT_SAY { 
my $stamina = quest::saylink("stamina", 1);
   if($text=~/Hail/i){
    quest::emote(' coughs a bit and looks up at you with tired, bleary eyes');
    quest::say("Ugh, I have not had such a cold as this since I was a boy. I have heard of a tea-maker in the city of the Vah Shir that makes a $stamina enhancing tea. I would like to try some and see if it might help.");
    }
   if($text=~/stamina/i){
    quest::say("ACHOO! Excuse me. It was some kind of root tea... saucy greyroot... sparkly greenroot... something like that I think. The brewer's name was... Adam... Lama... Oh I just cannot think straight."); 
    }
}
sub EVENT_ITEM{
   if (plugin::check_handin(\%itemcount, 31772 => 1)){
   quest::say("Oh that is good. I feel a little better already, thanks $name! A little more of that stuff and I'll be better in no time.");
   quest::ding();
   quest::faction(350, 10);
   quest::faction(186 10);
   quest::faction(206, 10);
   quest::faction(228, -10);
   quest::faction(55, -10);
   quest::faction(284, -10);
   quest::faction(139, -10);
   quest::faction(96, -10);
   quest::faction(138, -10);
   quest::exp(10000);
   }
}   
#END of FILE Zone:katta  -- Legionnaire_Neville

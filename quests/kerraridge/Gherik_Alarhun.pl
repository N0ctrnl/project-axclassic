sub EVENT_SAY {
    if($text=~/Hail/i){
     quest::say("Good day to you $name. May I be of assistance?");
     }
}
sub EVENT_ITEM { 
    if(plugin::check_handin(\%itemcount,2877 => 1)){
     quest::say("I've been expecting you. It is both my duty and my pleasure to oversee this early stage of your training. To begin. you must display basic combat capability. To this end. return to me with three shells of scorpions and I will instruct you further.");
     quest::summonitem(2877);
     quest::ding();
     quest::exp(100);
     quest::faction(175,1);
     quest::faction(2806,1);
     }
    elsif(plugin::check_handin(\%itemcount,3648 => 3)){
     quest::say("Grind the femur bone of four grimlings in this container. Take the resulting powder and. in the same container. combine water and xakra worm bile. The resulting clay will yield a special bowl when spun with this sketch and a flask of water on a pottery wheel. Bring the unfired bowl to me.");
     quest::summonitem(17235);
     quest::summonitem(3651);
     quest::exp(1000);
     quest::faction(132,10 );
     quest::faction(175,1);
     quest::faction(2806,1); 
     }
    elsif(plugin::check_handin(\%itemcount,3653 => 1)){
     quest::emote)' carefully inspects the bowl');
     quest::say("Not bad for a beginner. Fire it in a kiln with a flask of water and a quality firing sheet. Broker Fahaar is in need of your help. It so happens that he can help you as well. He can supply you with the materials to transform your bowl into a drum that will enhance your percussion songs.");
     quest::say("Show him your acrylia slate and return to me with the Bowl of the Jharin, your initiate's cloak, a stretched hopperhide and a leather cord.");
     quest::summonitem(3653);
     quest::exp(1000);
     quest::faction(132,10 );
     quest::faction(175,1);
     quest::faction(2806,1); 
     }
    elsif(plugin::check_handin(\%itemcount, 3654 => 1, 3655 => 1,, 3656 => 1 2878 => 1))
     quest::emote(' binds the stretched hide to the bowl with the leather cord,');
     quest::say("Wonderful! You have done well and are ready for the next portion of your training.");
     quest::say("I have finished your buckler and enhanced your cloak. They will both prove to be very valuable to you in your service to the Vah Shir. Show your buckler to Hymnist Gawfed for further instruction. May your deeds bring honor to the Jharin!");
     quest::summonitem(3657);
     quest::summonitem(3658);
     quest::summonitem(3659);
     quest::exp(2000);
     quest::ding();
     quest::faction( 132,10 );
     quest::faction(175,1);
     quest::faction(2806,1); 
     quest::shout("People of Shar Vahl, it is with great pleasure that I announce the Jharin has accepted as an official recruit. This honorable citizen will henceforth be charged with the duty of supporting and magnifying the spirit of our people through song while always being eager to help any Vah Shir in need. Please help me in celebrating $name coming of age!");
     }
}
#END of FILE Zone:sharvahl  ID:155075 -- Gherik_Alarhun 


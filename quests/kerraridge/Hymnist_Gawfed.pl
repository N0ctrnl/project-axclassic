sub EVENT_SAY {
    if($text=~/Hail/i){
     quest::say("isn't a wonderful day $name?  How may I be of assistance?"); }
     }
    if($text=~/merchant/i){
     quest::say("Gah... I'm losing my wits. I didn't tell you which merchant. Well, the fur is the first thing to go, and the mind is a close second. My wife's birthday is usually quite a large event in my household and I've been trying to make this one extra special. I'm lucky I can still find my tail.");
     quest::say("Take the note to Jihli Mahej. He's an importer who lives near the... gah! I can't remember the address. I'm sure you'll find him though. Good luck!");
     quest::summonitem();
     }
}
sub EVENT_ITEM { 
my $merchant = quest::saylink("merchant", 1);
    if(plugin::check_handin(\%itemcount,3659 => 1)){
     quest::say("Very well met. young friend.  I assume that Gherik has sent you to me for the purpose of training you.  Unforunately. I will not be doing any formal training for the several days.  I'm taking a bit of a holiday to celebrate my wife's birthday.  If you could take this receipt to the $merchant for me before my wife gets home. I'd appreciate it.  I'll place you at the top of my training list as well.");
     quest::summonitem(5954);
     quest::exp(2000);
     quest::ding();
     quest::faction(132,10);
     quest::faction(175,1);
     quest::faction(2806,1);
     }
    elsif(plugin::check_handin(\%itemcount,5958 => 1)){
     quest::emote(' looks at the vase and nods his head in approval');
     quest::say("I know that she's going to love this vase. The craftsmenship is amazing!");
     quest::emote(' says as he admires the vase.');
     quest::say("I need to properly thank you for retrieveing it for me and I think that I know just the thing.");
     quest::say("If you gather some owlbear feathers I can have my brother apply them to your cloak. He can make a cloak really stand out. It will be a prize fit for any aspiring apprentice to wear. Take this sack and fill it with seven feathers and your recruits cloak. Then return it to me with your cloak. I'll have it all sent over to my brother together in one bag.");
     quest::summonitem("17611");
     quest::exp(2000);
     quest::ding();
     quest::faction(132,10);
     quest::faction(175,1);
     quest::faction(2806,1);
     }
    elsif(plugin::check_handin(\%itemcount,5959 => 1)){
     quest::say("It looks like you're all set. I'll have this sent over to my brother at once. Thank you again for fetch the vase for me. I can't wait to give it to the missus. I just know that she's going to love it.");
     quest::say("I have another task for you. It shouldn't take much time at all. Your cloak won't be done for a while, so you can do this while you wait.");
     quest::say("Take this piece of parchment to Jangle. He'll give you a bag of lute strings. I'm restringing all of my instruments before the party. Please be quick. Thank you again.");
     quest::summonitem(5960):
     quest::exp(2000);
     quest::ding();
     quest::faction(132,10);
     quest::faction(175,1);
     quest::faction(2806,1);
     }
    elsif(plugin::check_handin(\%itemcount,5962 => 1)){
     quest::say("I really must be losing my mind. I could have sworn I specified the quantities. Oh well, I apologize for the confusion. Please take this back to him with my apologies.");
     quest::summonitem(5963);
     quest::exp(2000);
     quest::ding();
     quest::faction(132,10);
     quest::faction(175,1);
     quest::faction(2806,1);
     }
    elsif(plugin::check_handin(\%itemcount,5965 => 1)){
     quest::say("My dear friend, $name, you have been a wondrous help! Though we have not had an opportunity to work on the more refined Jharin teachings, you have definitely proven yourself to be an honorable citizen and worthy apprentice. My brother has returned with your cloak. Please take it along with the title of Jharin Apprentice. To further demonstrate my appreciation of your work for me, please take this lute.");
     quest::shout("Everyone, please welcome my student and friend, $name, to the rank of Jharin Apprentice!");
     quest::say("Now, please meet with Aljuum Mohim. He will be responsible for your training during my holiday. Please show him the lute that I just gave you. He'll most likely be in a tavern somewhere. I just hope that he is sober. Take care, friend!");
     quest::summonitem(5966);
     quest::summonitem(5967);
     quest::exp(3000);
     quest::ding();
     quest::faction(132,10);
     quest::faction(175,1);
     quest::faction(2806,1);
     }
}
#END of FILE Zone:sharvahl  ID:155060 -- Hymnist_Gawfed 


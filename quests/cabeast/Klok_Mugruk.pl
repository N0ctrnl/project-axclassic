my $bristle = quest::saylink("bristle", 1);
my $armor = quest::saylink("armor", 1);
my $service = quest::saylink("service", 1);
my $perform = quest::saylink("perform", 1);
sub EVENT_SAY { 
  if($text=~/Hail/i){
    quest::say("Welcome to my shop. Only the finessst I have. I make for you jussst as I make for the emperor's harem. Many $bristle silk garmentsss do they need. Ssss.. Lucky man, the emperor isss.");
  }
  if($text=~/bristle/i){
    quest::say("What is bristle silk?!! Huh? Where have you been living? Under the rocksss.. Nahh. I sssee. You are a broodling from the common ssstock. You could never afford bristle silk nor the affectionss of those who drape themselves with it. Still, commons have much ssservice to offer. Maybe you would like to earn some curscale $armor. Hmm?");
  }
  if($text=~/armor/i){
    quest::say("Curscale armor? I make thisss crude armor from the broodlings of the scaled wolves. I use the ssskins of the pupsss and cubs. Those ssskins are ssstill young and thin and are bessst for the young adventurers. I sssupply them to the Legion of Cabilisss, but for a small $service I shall make them available to you.");
  }
  if($text=~/service/i){
    quest::say("I am in need of pup and cub scaled wolf skins to create more curscale armor. Many Legionnaires have died in battle. The Baron demands more sssuits. I mussst have more ssskins or it is MY HIDE!! I shall reward pieces of the curscale armor to any who $perform a small service.");
  }
  #Gives the empty curscale pack.
  if($text=~/perform/i){
    quest::say("Good. You take thisss pack and fill it all with scaled curskins. Only the pupsss and cubs of the scaled wolves shall do. They are not much for one sssuch as you. Combine all those ssskins and return the full curskin pack and I shall reward you with any available piece of curskin armor and a sssmall amount of coin. Mossst important is that you shall be proving your allegiance to all of Cabilisss.");
    quest::summonitem(17992);
  }
}

sub EVENT_ITEM {
  #Accepts combined curscale pack.
  if(plugin::check_handin(\%itemcount,12655=>1)) {
    quest::say("You are a good servant and a fine citizen. I have this piece of curscale armor available, but if it is not enough then perhaps I shall have another piece available if you were to [perform the small service] again.");
    @randomGivenItems = (4270,4271,4272,4273,4274,4275,4276,4277,4279,4280,4281);
    my $itemGiven = $randomGivenItems[int(rand(scalar @randomGivenItems))];
    @randomGivenCopper = (1,2,3,4,5,6,7,8,9);
    my $copperGiven = $randomGivenCopper[int(rand(scalar @randomGivenCopper))];
    @randomGivenSilver = (1,2,3,4,5);
    my $silverGiven = $randomGivenSilver[int(rand(scalar @randomGivenSilver))];
    @randomGivenGold = (1,2,3);
    my $goldGiven = $randomGivenGold[int(rand(scalar @randomGivenGold))];
    quest::summonitem($itemGiven);
    quest::givecash($copperGiven,$silverGiven,$goldGiven,0);
    quest::faction(30,10);
    quest::faction(193,10);
     quest::ding(); quest::exp(10000);
    
  }
  else {
  qust::say("I have no need for this.. Take it back!");
    plugin::return_items(\%itemcount);
  }
}

#END of FILE Zone:cabeast  ID:106059 -- Klok_Mugruk


sub EVENT_SPAWN {
 $x = $npc->GetX();
	$y = $npc->GetY();
  quest::set_proximity($x - 75, $x + 75, $y - 75, $y + 75);
  quest::depop(166974);
  quest::depop(166975);
  quest::depop(166976);
  quest::spawn2(166974,0,0,-158.4,-2898.1,115.2,255.8);
  quest::spawn2(166976,0,0,-168,-2898.7,114.4,18.5);
  quest::signalwith(166974,814,0);
  quest::signalwith(166976,815,0);
  quest::signalwith(166582,627,25000);
	}
sub EVENT_ENTER {
    quest::shout("I see you $name! Nothing but death awaits you here!");
      quest::signalwith(166961,405,0);
  }

sub EVENT_DEATH{
quest::signalwith(166962,607,0); #Boss_Dead_Owlbears
quest::signalwith(166799,19,0);
}


sub EVENT_SPAWN {
  my $a = quest::ChooseRandom(102218,102152,102153,102152,102153,102218,102152,102153,102152,102153,102152,102153,102217);
  quest::spawn2($a,0,0,-109.7,145.7,34.8,192);
  }
  sub EVENT_SIGNAL {
  if ($signal == 107){
  quest::depop(102217);
  quest::depop(102152);
  quest::depop(102218);
  quest::depop(102153);
  quest::depop();
  }
  }
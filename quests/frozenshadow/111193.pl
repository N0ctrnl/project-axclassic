sub EVENT_SPAWN {
  my $a = quest::ChooseRandom(111235,111240,111217,111244,111235,111240,111235,111240,111244,111235,111240,111235,111240,111235,111240,111235,111240);
  quest::spawn2($a,7,0,301.8,1014.5,177.3,254.5);
  }
  sub EVENT_SIGNAL {
  if ($signal == 403){
  quest::depop(111217);
  quest::depop(111244);
  quest::depop(111235);
  quest::depop(111240);
  quest::depop();
  }
  }
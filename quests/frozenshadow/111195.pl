sub EVENT_SPAWN {
  my $a = quest::ChooseRandom(111237,111242,111219,111246,111237,111242,111237,111242,111246,111237,111242,111237,111242,111237,111242,111237,111242);
  quest::spawn2($a,9,0,103.6,810.7,177.4,153.2);
  }
  sub EVENT_SIGNAL {
  if ($signal == 405){
  quest::depop(111219);
  quest::depop(111246);
  quest::depop(111237);
  quest::depop(111242);
  quest::depop();
  }
  }
sub EVENT_SPAWN {
  my $a = quest::ChooseRandom(102216,102149,102150,102149,102150,102149,102150,102216,102149,102150,102215);
  quest::spawn2($a,0,0,-152.1,55.4,19.9,192);
  }
  sub EVENT_SIGNAL {
  if ($signal == 106){
  quest::depop(102215);
  quest::depop(102216);
  quest::depop(102149);
  quest::depop(102150);
  quest::depop();
  }
  }
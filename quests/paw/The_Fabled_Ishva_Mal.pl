####Fabled Depoper###
### Romell 6-9-09

sub EVENT_AGGRO
{
	if($ulevel <= 29)
{
	my $x = $npc->GetX();
    	my $y = $npc->GetY();
    	my $z = $npc->GetZ();
    	my $h = $npc->GetHeading();
  	quest::spawn2(18098,0,0,$x,$y,$z,$h);
	## quest::shout("We shall meet again $name! When you are a worthy opponent!!");
	quest::depop;
	}
}

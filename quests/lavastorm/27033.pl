# Zone to safepoint event
# Zone: Lavastorm (from Najena)
# AngeloX

sub EVENT_SPAWN
{
	$x = $npc->GetX();
	$y = $npc->GetY();
	quest::set_proximity($x - 20, $x + 20, $y - 20, $y + 20);
}

sub EVENT_ENTER
{
	quest::movepc(27,-1033.8,-992.4,15.8);
}

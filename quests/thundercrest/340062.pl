##Yar'Lir event 1 of possible 3 NPC ID 340062##
sub EVENT_SPAWN {

 quest::setnexthpevent(50);

 }

sub EVENT_HP {
 quest::spawn2(340064,0,0,-3434.8,3122,301.1,204.2);
 quest::spawn2(340064,0,0,-3465.5,3195.1,301.1,123.8);
 quest::spawn2(340064,0,0,-3537,3163.5,301.1,70.1);
 quest::spawn2(340064,0,0,-3505.4,3093.7,301.1,15);
 }

sub EVENT_DEATH {
quest::spawn2(340067,0,0,-3354.8,3144.2,292.5,183.8); 
}
<?if($spawngroups == ''):?>
       <table class="edit_form">
         <tr>
           <td class="edit_form_header">
             No spawngroup assigned
           </td>
         </tr>
         <tr>
           <td class="edit_form_content">
             To create a spawngroup for this NPC:<br>
             <ul style="padding-left: 25px;">
             <li>Make sure the desired zone is selected from the search bar</li>
             <li><a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcid?>&action=16">Click here to create a new spawngroup</a></li> 
            </ul>
           </td>
         </tr>
       </table>
<?endif;?>
<?if($spawngroups != ''):?>
<BR><CENTER><a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcid?>&action=16">Add new spawngroup for NPC ID <B><?=$npcid?></B> to <B><?=$currzone?>.</b></a></CENTER><BR><BR>
<?foreach($spawngroups as $sg): extract($sg);?>
      <div style="border: 1px solid black; margin-bottom: 15px;">
      <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              Spawngroup: <?=$name?> - "<a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$spawngroupID?></a>"
            </td>
            <td>
              spawn_limit: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$spawn_limit?></a>
            </td>
            <td>
              <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=10">View Spawnpoints for this Spawngroup</a>
            </td>
            <td align="right">
              <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=8"><img src="images/add.gif" border="0" title="Add an NPC to this Spawngroup"></a>&nbsp;
              <a onClick="return confirm('Really delete this spawngroup?\n  THIS WILL DELETE ALL OF THIS SPAWNGROUP\'S SPAWNPOINTS, AS WELL!');" href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=6"><img src="images/remove2.gif" border="0" title="Delete this Spawngroup"></a>
            </td>
          </tr>
          </table>
         </div>
        <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
	     <td width="17%">
		min_x: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$min_x?></a>
	     </td>
	     <td width="17%">
		max_x: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$max_x?></a>
	     </td>
	     <td width="17%">
	       min_y: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$min_y?></a>
	     </td>
            <td width="17%">
	       max_y: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$max_y?></a>
	     </td>
	     <td width="17%">
	       dist: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$dist?></a>
	     </td>
	     <td width="15%">
	       delay: <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$delay?></a>
	     </td>
          </tr>
          </table>
         </div>
<?if($npcs != ''):?>
      <div class="table_content2" style="padding: 0px;">
        <table width="100%" cellspacing="0">
          <tr bgcolor="#AAAAAA">
            <th width="50%">NPC</th>
            <th width="25%" align="center">Chance</th>
            <th width="25%" align="center">&nbsp;</th>
          </tr>
<?$x=0; foreach($npcs as $npc): extract($npc);?>
          <tr bgcolor="#<? echo ($x % 2 == 1) ? "AAAAAA" : "BBBBBB";?>">
            <td>
              <a href="index.php?editor=npc&z=<?=$currzone?>&npcid=<?=$npcID?>"><?=$name?></a> (<?=$npcID?>)
            </td>
            <td align="center"><?=$chance?></a></td>
            <td align="right">
              <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&sgnpcid=<?=$npcID?>&action=1"><img src="images/edit2.gif" title="Edit this Spawngroup Member" border="0"></a>&nbsp;
              <a onClick="return confirm('Really delete this NPC from the spawngroup?');" href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&sgnpcid=<?=$npcID?>&action=7"><img src="images/remove.gif" title="Remove this Spawngroup Member" border="0"></a>
            </td>
          </tr>
<?$x++;endforeach;?>
          <tr bgcolor="#AAAAAA">
            <td colspan="3" align="right">
              <a href="index.php?editor=spawn&z=<?=$currzone?>&npcid=<?=$npcid?>&sid=<?=$spawngroupID?>&action=3">Balance Spawn Rates</a>
            </td>
          </tr>
        </table>
      </div>
<?endif;?>
      </div>
<?endforeach;?>
<?endif;?>
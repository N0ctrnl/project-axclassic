      <div class="table_container" style="width: 750px;">
      <div class="table_header">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
           <td>Rescue Adventures</td>
           <td align="right">    
          <a href="index.php?editor=adventures&z=<?=$currzone?>&npcid=<?=$npcid?>&action=10"><img src="images/add.gif" border="0" title="Add an adventure"></a>
            </td>
           </tr>        
         </table>
      </div>

       <table class="table_content2" width="100%">
<? if (isset($rescue)):?>
         <tr>
          <td align="center" width="1%"><strong>id</strong></td>
          <td align="center" width="10%"><strong>zone</strong></td>
          <td align="center" width="5%"><strong>hard</strong></td>
          <td align="center" width="5%"><strong>raid</strong></td>
          <td align="center" width="5%"><strong>min level</strong></td>
          <td align="center" width="5%"><strong>max level</strong></td>
          <td align="center" width="15%"><strong>type</strong></td
          <td align="center" width="10%"><strong>data</strong></td
          <td align="center" width="20%"><strong>theme</strong></td>
          <td align="center" width="10%"><strong>zone in</strong></td>
          <th width="5%"></th>
         </tr>
<?$x=0; foreach($rescue as $rescue=>$v):?>
        <tr bgcolor="#<? echo ($x % 2 == 0) ? "AAAAAA" : "BBBBBB";?>">
          <td align="center" width="1%"><?=$v['id']?></td>
          <td align="center" width="10%"><?=$v['zone']?></td>
          <td align="center" width="5%"><?=$yesno[$v['is_hard']]?></td>
          <td align="center" width="5%"><?=$yesno[$v['is_raid']]?></td>
          <td align="center" width="5%"><?=$v['min_level']?></td>
          <td align="center" width="5%"><?=$v['max_level']?></td>
          <td align="center" width="15%"><?=$advtype[$v['type']]?></td>
<?if($v['type'] == 1 || $v['type'] == 4):?>
          <td align="center" width="10%"><a href="index.php?editor=npc&z=&z=<?=get_zone_by_npcid($v['type_data'])?>&npcid=<?=$v['type_data']?>"><?=getNPCName($v['type_data'])?></td>
<?endif;?>
<?if($v['type'] == 3):?>
          <td align="center" width="10%"><?=get_item_name($v['type_data'])?> <span>[<a href="http://lucy.allakhazam.com/item.html?id=<?=$v['type_data']?>">lucy</a>]</span>
<?endif;?>    
<?if($v['type'] == 2):?>   
          <td align="center" width="10%">Any</td>  
<?endif;?>
          <td align="center" width="20%"><?=$themetype[$v['theme']]?></td>
          <td align="center" width="10%"><?=getZoneName($v['zone_in_zone_id'])?></td>
          <td align="right">      
            <a href="index.php?editor=adventures&z=<?=$currzone?>&npcid=<?=$npcid?>&id=<?=$v['id']?>&action=8"><img src="images/edit2.gif" border="0" title="Edit Entry"></a>          
            <a onClick="return confirm('Really Delete Adventure <?=$v['id']?>?');" href="index.php?editor=adventures&z=<?=$currzone?>&npcid=<?=$npcid?>&id=<?=$v['id']?>&action=7"><img src="images/remove3.gif" border="0" title="Delete this entry"></a>
          </td>
        </tr>
        <?$x++; endforeach;?>
        </table>
        <?endif;?>
<? if (!isset($rescue)):?>
        <tr>
          <td align="left" width="100" style="padding: 10px;">There are no rescue adventures assigned to this NPC.</td>
        </tr>
<?endif;?>
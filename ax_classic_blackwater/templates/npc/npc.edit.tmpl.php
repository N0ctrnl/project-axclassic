       <form name="npc_edit" method="post" action="index.php?editor=npc&z=<?=$currzone?>&npcid=<?=$npcid?>&action=2">
       <div class="edit_form">
         <div class="edit_form_header">
           Edit NPC <?=$npcid?>
         </div>
         <div class="edit_form_content">
         <center>
         <fieldset style="text-align: left;">
           <legend><strong><font size="4">General</font></strong></legend>
           <input type="hidden" name="id" value="<?=$npcid?>">
           <table width="100%">
             <tr>
               <td valign="top">
                 NPC Name: <br><input type="text" name="name" size="40" value="<?=$name?>"><br><br>
                 Title: <br><input type="text" name="lastname" size="40" value="<?=$lastname?>"><br><br>
                 Level:  <br><input type="text" name="level" size="10" value="<?=$level?>"><br><br>
                 Gender:  <br>
                 <select name="gender">
<?foreach($genders as $key=>$value):?>
                   <option value="<?=$key?>"<?echo ($key == $gender)? " selected" : "";?>><?=$value?></option>
<?endforeach;?>
                 </select>
                </td>
                <td valign="top">
                 Race:<br>
                 <select name="race" style="width: 265px;">
<?foreach($races as $key=>$value):?>
                   <option value="<?=$key?>"<?echo ($key == $race)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                 </select><br><br>

                 Class:<br>
                 <select name="class" style="width: 265px;">
<?foreach($classes as $key=>$value):?>
                   <option value="<?=$key?>"<?echo ($key == $class)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                 </select><br><br>

                 Bodytype:<br>
                 <select name="bodytype" style="width: 265px;">
<?foreach($bodytypes as $key=>$value):?>
                   <option value="<?=$key?>"<?echo ($key == $bodytype)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                 </select>
                </td>
              </tr>
            </table>
         </fieldset><br>
         </center>

         <fieldset>
           <legend><strong><font size="4">Vitals</font></strong></legend>
           <table width="100%" border="0" cellpadding="3" cellspacing="0">
             <tr>
               <td align="left" width="14%">HP:  <br><input type="text" name="hp" size="5" value="<?=$hp?>"></td>
               <td align="left" width="14%">AC:  <br><input type="text" name="AC" size="5" value="<?=$AC?>"></td>
               <td align="left" width="14%">Runspeed:  <br><input type="text" name="runspeed" size="5" value="<?=$runspeed?>"></td>
               <td align="left" width="14%">ATK:  <br><input type="text" name="ATK" size="5" value="<?=$ATK?>"></td>
               <td align="left" width="14%">Accuracy:  <br><input type="text" name="Accuracy" size="3" value="<?=$Accuracy?>"></td>
               <td align="left" width="15%">Max Level: <br><input type="text" name="maxlevel" size="3" value="<?=$maxlevel?>"></td>
               <td align="left" width="15%">Scalerate: <br><input type="text" name="scalerate" size="3" value="<?=$scalerate?>"></td> 
               <td align="left" width="15%">PvtCorpse: <br><input type="text" name="private_corpse" size="3" value="<?=$private_corpse?>"></td>
               <td align="left" width="15%">UniqueSpwn: <br><input type="text" name="unique_spawn_by_name" size="3" value="<?=$unique_spawn_by_name?>"></td> 
             </tr>
              <tr>
               <td align="left" width="25%">
                 See Invis:  <br>
                 <select name="see_invis">
                   <option value="0"<?echo ($see_invis == 0) ? " selected" : ""?>>No</option>
                   <option value="1"<?echo ($see_invis == 1) ? " selected" : ""?>>Yes</option>
                 </select>
               </td>
               <td align="left" width="25%">
                 See ITU:  <br>
                 <select name="see_invis_undead">
                   <option value="0"<?echo ($see_invis_undead == 0) ? " selected" : ""?>>No</option>
                   <option value="1"<?echo ($see_invis_undead == 1) ? " selected" : ""?>>Yes</option>
                 </select>
               </td>
               <td align="left" width="25%">
                 See Hide:  <br>
			      <select name="see_hide">
			      <option value="0"<?echo ($see_hide == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($see_hide == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
			   <td align="left" width="25%">
			     See IH:  <br>
			      <select name="see_improved_hide">
			      <option value="0"<?echo ($see_improved_hide == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($see_improved_hide == 1) ? " selected" : ""?>>Yes</option>
                 </select>
             </tr>
           </table>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Stats</font></strong></legend>
           <table width="100%" border="0" cellpadding="3" cellspacing="0">
             <tr>
               <td align="left" width="14%">STR:  <br><input type="text" name="STR" size="5" value="<?=$STR?>"></td>
               <td align="left" width="14%">STA:  <br><input type="text" name="STA" size="5" value="<?=$STA?>"></td>
               <td align="left" width="14%">DEX:  <br><input type="text" name="DEX" size="5" value="<?=$DEX?>"></td>
               <td align="left" width="14%">AGI:  <br><input type="text" name="AGI" size="5" value="<?=$AGI?>"></td>
               <td align="left" width="14%">INT:  <br><input type="text" name="_INT" size="5" value="<?=$_INT?>"></td>
               <td align="left" width="15%">WIS:  <br><input type="text" name="WIS" size="5" value="<?=$WIS?>"></td>
               <td align="left" width="15%">CHA:  <br><input type="text" name="CHA" size="5" value="<?=$CHA?>"></td>
             </tr>
           </table>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Resists</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
               <tr>
                <td align="left" width="14%">MR:  <br><input type="text" name="MR" size="5" value="<?=$MR?>"></td>
                <td align="left" width="14%">CR:  <br><input type="text" name="CR" size="5" value="<?=$CR?>"></td>
                <td align="left" width="14%">FR:  <br><input type="text" name="FR" size="5" value="<?=$FR?>"></td>
                <td align="left" width="14%">PR:  <br><input type="text" name="PR" size="5" value="<?=$PR?>"></td>
                <td align="left" width="14%">DR:  <br><input type="text" name="DR" size="5" value="<?=$DR?>"></td>
                <td align="left" width="15%">&nbsp;</td>
                <td align="left" width="15%">&nbsp;</td>
              </tr>
            </table>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Combat</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
               <tr>
                <td align="left" width="11%">Min Dmg:  <br><input type="text" name="mindmg" size="5" value="<?=$mindmg?>"></td>
                <td align="left" width="11%">Max Dmg:  <br><input type="text" name="maxdmg" size="5" value="<?=$maxdmg?>"></td>
                <td align="left" width="11%">Spells ID:  <br><input type="text" name="npc_spells_id" size="5" value="<?=$npc_spells_id?>"></td>
                <td align="left" width="11%">Loot ID:  <br><input type="text" name="loottable_id" size="5" value="<?=$loottable_id?>"></td>
                <td align="left" width="11%">HP Regen:  <br><input type="text" name="hp_regen_rate" size="5" value="<?=$hp_regen_rate?>"></td>
                <td align="left" width="12%">Mana Regen:  <br><input type="text" name="mana_regen_rate" size="5" value="<?=$mana_regen_rate?>"></td>
                <td align="left" width="11%">Aggroradius:  <br><input type="text" name="aggroradius" size="5" value="<?=$aggroradius?>"></td>
                <td align="left" width="11%">Atk Speed%: <br><input type="text" name="attack_speed" size="5" value="<?=$attack_speed?>"></td>
                <td align="left" width="11%">Slow Mit: <br><input type="text" name="slow_mitigation" size="5" value="<?=$slow_mitigation?>"></td>
              </tr>
            </table>
            <center>
            <table cellpadding="20px">
              <tr>
                <td valign="top" align="left">
                  <input type="checkbox" name="S" value="S"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "S") ? "checked" : "";}}?>> Summon<br>
                  <input type="checkbox" name="E" value="E"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "E") ? "checked" : "";}}?>> Enrage<br>
                  <input type="checkbox" name="R" value="R"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "R") ? "checked" : "";}}?>> Rampage<br>
                  <input type="checkbox" name="r" value="r"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "r") ? "checked" : "";}}?>> AE Rampage<br>
                  <input type="checkbox" name="F" value="F"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "F") ? "checked" : "";}}?>> Flurry<br>
                  <input type="checkbox" name="T" value="T"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "T") ? "checked" : "";}}?>> Triple Attack<br>
                  <input type="checkbox" name="Q" value="Q"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "Q") ? "checked" : "";}}?>> Quad Attack<br>
                  <input type="checkbox" name="m" value="m"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "m") ? "checked" : "";}}?>> Magic Attack<br>
                  <input type="checkbox" name="b" value="b"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "b") ? "checked" : "";}}?>> Bane Attack<br>
                 </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="U" value="U"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "U") ? "checked" : "";}}?>> Unslowable<br>
                  <input type="checkbox" name="M" value="M"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "M") ? "checked" : "";}}?>> Unmezable<br>
                  <input type="checkbox" name="C" value="C"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "C") ? "checked" : "";}}?>> Uncharmable<br>
                  <input type="checkbox" name="N" value="N"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "N") ? "checked" : "";}}?>> Unstunable<br>
                  <input type="checkbox" name="I" value="I"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "I") ? "checked" : "";}}?>> Unsnareable<br>
                  <input type="checkbox" name="D" value="D"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "D") ? "checked" : "";}}?>> Unfearable<br>
                  <input type="checkbox" name="g" value="g"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "g") ? "checked" : "";}}?>> Resist ranged spells<br>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="A" value="A"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "A") ? "checked" : "";}}?>> Immune to Melee<br>
                  <input type="checkbox" name="B" value="B"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "B") ? "checked" : "";}}?>> Immune to Magic<br>
                  <input type="checkbox" name="f" value="f"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "f") ? "checked" : "";}}?>> Immune to Fleeing<br>
                  <input type="checkbox" name="W" value="W"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "W") ? "checked" : "";}}?>> Immune to non-Magical Melee<br>
                  <input type="checkbox" name="O" value="O"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "O") ? "checked" : "";}}?>> Immune to non-Bane Melee<br>
                  <input type="checkbox" name="H" value="H"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "H") ? "checked" : "";}}?>> Will Not Aggro<br>
                  <input type="checkbox" name="d" value="d"<?if ($npcspecialattks != '') {for ($x=0; $x<strlen($npcspecialattks); $x++) { echo ($npcspecialattks[$x] == "d") ? "checked" : "";}}?>> See through Feign Death<br>
                  &nbsp;    
               </td>
              </tr>
            </table>
            </center>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Appearance</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
               <tr>
                <td align="left" width="17%">Size:  <br><input type="text" name="size" size="10" value="<?=$size?>"></td>
                <td align="left" width="17%">Texture:  <br><input type="text" name="texture" size="10" value="<?=$texture?>"></td>
                <td align="left" width="17%">HelmTexture:  <br><input type="text" name="helmtexture" size="10" value="<?=$helmtexture?>"></td>
                <td align="left" width="17%">Face:  <br><input type="text" name="face" size="10" value="<?=$face?>"></td>
                <td align="left" width="16%">Haircolor:  <br><input type="text" name="luclin_haircolor" size="10" value="<?=$luclin_haircolor?>"></td>
                <td align="left" width="16%">Hairstyle:  <br><input type="text" name="luclin_hairstyle" size="10" value="<?=$luclin_hairstyle?>"></td>
              </tr>
              <tr>
                <td align="left" width="17%">Eyecolor:  <br><input type="text" name="luclin_eyecolor" size="10" value="<?=$luclin_eyecolor?>"></td>
                <td align="left" width="17%">Eyecolor2:  <br><input type="text" name="luclin_eyecolor2" size="10" value="<?=$luclin_eyecolor2?>"></td>
                <td align="left" width="17%">Beard:  <br><input type="text" name="luclin_beard" size="10" value="<?=$luclin_beard?>"></td>
                <td align="left" width="17%">Beardcolor:  <br><input type="text" name="luclin_beardcolor" size="10" value="<?=$luclin_beardcolor?>"></td>
                <td align="left" width="16%">d_melee_texture1:  <br><input type="text" name="d_meele_texture1" size="10" value="<?=$d_meele_texture1?>"></td>
                <td align="left" width="16%">d_melee_texture2:  <br><input type="text" name="d_meele_texture2" size="10" value="<?=$d_meele_texture2?>"></td>
              </tr>
              <tr>
                <td align="left" width="17%">Heritage:  <br><input type="text" name="drakkin_heritage" size="10" value="<?=$drakkin_heritage?>"></td>
                <td align="left" width="17%">Tattoo:  <br><input type="text" name="drakkin_tattoo" size="10" value="<?=$drakkin_tattoo?>"></td>
                <td align="left" width="17%">Details:  <br><input type="text" name="drakkin_details" size="10" value="<?=$drakkin_details?>"></td>
                <td align="left" width="17%">Armor Red:  <br><input type="text" name="armortint_red" size="10" value="<?=$armortint_red?>"></td>
                <td align="left" width="16%">Armor Green:  <br><input type="text" name="armortint_green" size="10" value="<?=$armortint_green?>"></td>
                <td align="left" width="16%">Armor Blue:  <br><input type="text" name="armortint_blue" size="10" value="<?=$armortint_blue?>"></td>
              </tr>
            </table>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Misc</font></strong></legend>
           <table width="100%" border="0" cellpadding="3" cellspacing="0">
           <tr>
          <td align="left" width="17%">Spawn Limit: <br><input type="text" name="spawn_limit" size="10" value="<?=$spawn_limit?>"></td>
          <td align="left" width="17%">Version: <br><input type="text" name="version" size="10" value="<?=$version?>"></td>
          <td align="left" width="17%">&nbsp;</td>
          <td align="left" width="17%">&nbsp;</td>
          <td align="left" width="16%">&nbsp;</td>
          <td align="left" width="16%">&nbsp;</td>
         </tr>
         </table><br>
           <input type="checkbox" name="qglobal" value="1"<?echo ($qglobal == 1) ? "checked" : "";?>>Enable Quest Globals<br>
           <input type="checkbox" name="npc_aggro" value="1"<?echo ($npc_aggro == 1) ? "checked" : "";?>>Can Aggro NPCs<br>
           <input type="checkbox" name="findable" value="1"<?echo ($findable == 1) ? "checked" : "";?>>NPC is Findable<br>
           <input type="checkbox" name="trackable" value="1"<?echo ($trackable == 1) ? "checked" : "";?>>NPC is Trackable<br>
           <input type="checkbox" name="pet" value="1"<?echo ($pet == 1) ? "checked" : "";?>>NPC is a Pet<br>
           <input type="checkbox" name="isbot" value="1"<?echo ($isbot == 1) ? "checked" : "";?>>NPC is a Bot<br><br>
          </fieldset><br>
         <center>
            <input type="submit" value="Submit Changes">
         </center>
         </div>
       </div>

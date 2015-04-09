<?php
/**
 * Created by PhpStorm.
 * User: dellenburg
 * Date: 3/31/2015
 * Time: 13:47
 * Name: Create Character
 * Desc: This script will display a completed character.
 */

$character= $wpdb->get_row("SELECT * FROM $character_table_name where userID = $user_id", ARRAY_A);

?>
<div>
	<p>Player Name: <? echo $character['player']; ?></p>
</div>
<div style="float:left;width:40%;margin:0 5% ">
	<p>Character Name:<br /> <? echo $character['character_name']; ?></p>
	<p>Career:<br /> <? echo str_replace('_'," ",$character['career']); ?></p>
	<p>Soak Value: <? echo $character['soak']; ?></p>
	<p>Strain: <? echo $character['strain']; ?></p>
	<p>Brawn: <? echo $character['brawn']; ?></p>
	<p>Intellect: <? echo $character['intellect']; ?></p>
	<p>Willpower: <? echo $character['willpower']; ?></p>
</div>

<div style="float:left;width:40%;margin:0 5% ">
	<p>Race:<br /> <? echo $character['race']; ?></p>
	<p>Specialization:<br /> <? echo str_replace('_'," ",$character['specialization']); ?></p>
	<p>Wounds: <? echo $character['wounds']; ?></p>
	<p>Defence: <? echo $character['defence']; ?></p>
	<p>Agility: <? echo $character['agility']; ?></p>
	<p>Cunning: <? echo $character['cunning']; ?></p>
	<p>Presence: <? echo $character['presence']; ?></p>
</div>

<br />
<div style="float:left;width:40%;margin:0 5% ">
	<p>Astrogation: <? echo $character['Astrogation']; ?></p>
	<p>Athletics: <? echo $character['Athletics']; ?></p>
	<p>Brawl: <? echo $character['Brawl']; ?></p>
	<p>Charm: <? echo $character['Charm']; ?></p>
	<p>Coercion: <? echo $character['Coercion']; ?></p>
	<p>Computers: <? echo $character['Computers']; ?></p>
	<p>Cool: <? echo $character['Cool']; ?></p>
	<p>Coordination: <? echo $character['Coordination']; ?></p>
	<p>Deception: <? echo $character['Deception']; ?></p>
	<p>Discipline: <? echo $character['Discipline']; ?></p>
	<p>Gunnery: <? echo $character['Gunnery']; ?></p>
	<p>Knowledge: <? echo $character['Knowledge']; ?></p>
	<p>Knowledge Core Worlds: <? echo $character['Knowledge_Core_Worlds']; ?></p>
	<p>Knowledge Education: <? echo $character['Knowledge_Education']; ?></p>
	<p>Knowledge Lore: <? echo $character['Knowledge_Lore']; ?></p>
	<p>Knowledge Outer Rim: <? echo $character['Knowledge_Outer_Rim']; ?></p>
	<p>Knowledge Underworld: <? echo $character['Knowledge_Underworld']; ?></p>
	<p>Knowledge Xenology: <? echo $character['Knowledge_Xenology']; ?></p>
</div>
<div style="float:left;width:40%;margin:0 5% ">
	<p>Knowledge Warfare: <? echo $character['Knowledge_Warfare']; ?></p>
	<p>Leadership: <? echo $character['Leadership']; ?></p>
	<p>Mechanics: <? echo $character['Mechanics']; ?></p>
	<p>Medicine: <? echo $character['Medicine']; ?></p>
	<p>Melee: <? echo $character['Melee']; ?></p>
	<p>Negotiation: <? echo $character['Negotiation']; ?></p>
	<p>Perception: <? echo $character['Perception']; ?></p>
	<p>Piloting Planetary: <? echo $character['Piloting_Planetary']; ?></p>
	<p>Piloting Space: <? echo $character['Piloting_Space']; ?></p>
	<p>Ranged Heavy: <? echo $character['Ranged_Heavy']; ?></p>
	<p>Ranged Light: <? echo $character['Ranged_Light']; ?></p>
	<p>Resilience: <? echo $character['Resilience']; ?></p>
	<p>Skulduggery: <? echo $character['Skulduggery']; ?></p>
	<p>Stealth: <? echo $character['Stealth']; ?></p>
	<p>Streetwise: <? echo $character['Streetwise']; ?></p>
	<p>Survival: <? echo $character['Survival']; ?></p>
	<p>Vigilance: <? echo $character['Vigilance']; ?></p>
</div>
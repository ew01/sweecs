<?php
/**
 * Created by PhpStorm.
 * User: dellenburg
 * Date: 3/31/2015
 * Time: 13:47
 * Name: Create Character
 * Desc: This script will allow the player to see what dice to roll for their skills.
 */
//$character= $wpdb->get_row("SELECT * FROM $character_table_name where userID = $user_id", ARRAY_A);
//$value= $wpdb->get_row("SELECT * FROM $skills_table_name where skill = $skill", ARRAY_A);
$skills= $wpdb->get_col("SELECT skill FROM $skills_table_name WHERE 1");
$character_atts= $wpdb->get_row("SELECT * FROM $character_table_name where userID = $user_id", ARRAY_A);

?>
<script>
	function show(skill){
		//document.getElementById(skill).style.display= 'block';

		var skills= ['Astrogation','Athletics','Brawl','Charm','Coercion','Computers','Cool','Coordination','Deception','Discipline','Gunnery','Knowledge','Knowledge_Core_Worlds','Knowledge_Education','Knowledge_Lore','Knowledge_Outer_Rim','Knowledge_Underworld','Knowledge_Xenology','Knowledge_Warfare','Leadership','Mechanics','Medicine','Melee','Negotiation','Perception','Piloting_Planetary','Piloting_Space','Ranged_Heavy','Ranged_Light','Resilience','Skulduggery','Stealth','Streetwise','Survival','Vigilance'];
		for(var i = 0; i < skills.length; i++){
			var item= skills[i];
			document.getElementById(item).style.display='none';
		}
		document.getElementById(skill).style.display='block';
	}
</script>
<p>Please choose your skill</p>
<div style="float:left;width:40%;margin:0 5%">
	<select name="skill" onchange="show(this.value);">
		<option>Please Choose One</option>
		<?php

		foreach($skills as $skill){

			?>
			<option value='<? echo $skill; ?>'><? echo str_replace("_"," ",$skill); ?></option>
			<?php
		}
		?>
	</select>
</div>
<?php
foreach($skills as $skill){
	$modifier= $wpdb->get_row("SELECT * FROM $skills_table_name WHERE skill = '$skill'", ARRAY_A);
	$ability= $modifier['ability'];
	$ability_rank= $character_atts[$ability];
	$skill_rank= $character_atts[$skill];

	if($skill_rank > $ability_rank){
		$green_die= $skill_rank - $ability_rank;
		$gold_die= $ability_rank;
		$dice= "Roll $green_die Green Die";
		if($gold_die > 0){
			$dice.= " and $gold_die Gold Die";
		}else{
			$dice.= ".";
		}
	}elseif($ability_rank > $skill_rank){
		$gold_die= $skill_rank;
		$green_die= $ability_rank - $skill_rank;
		$dice= "Roll $green_die Green Die";
		if($gold_die > 0){
			$dice.= " and $gold_die Gold Die";
		}else{
			$dice.= ".";
		}
	}elseif($skill_rank == $ability_rank){
		$gold_die= $skill_rank;
		$dice= "Roll $gold_die Gold Die.";
	}

	?>
	<div id="<? echo $skill; ?>" style="display: none;float:left;width:40%;margin:0 5%">
		Skill: <? echo str_replace("_"," ",$skill); ?> Rank <?echo $skill_rank; ?><br />
		Ability: <? echo str_replace("_"," ",ucfirst($ability)); ?> Rank <?echo $ability_rank; ?><br />
		Dice: <? echo $dice; ?><br />
	</div>
	<?php
}








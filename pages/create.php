<?php
/**
 * Created by PhpStorm.
 * User: dellenburg
 * Date: 3/31/2015
 * Time: 13:47
 * Name: Create Character
 * Desc: This script will display the form to create a new character sheet.
 */

@$character= $wpdb->get_row("SELECT * FROM $character_table_name where userID = $user_id", ARRAY_A);
if(isset($_REQUEST['create'])){//Create the submitted Character Sheet
	$player_name=           $_REQUEST['playerName'];
	$character_name=        $_REQUEST['characterName'];
	$career=                $_REQUEST['career'];
	$soak_value=            $_REQUEST['soakValue'];
	$strain=                $_REQUEST['strain'];
	$brawn=                 $_REQUEST['brawn'];
	$intellect=             $_REQUEST['intellect'];
	$willpower=             $_REQUEST['willpower'];
	$race=                  $_REQUEST['race'];
	$specialization=        $_REQUEST['specialization'];
	$wounds=                $_REQUEST['wounds'];
	$defence=               $_REQUEST['defence'];
	$agility=               $_REQUEST['agility'];
	$cunning=               $_REQUEST['cunning'];
	$presence=              $_REQUEST['presence'];
	//skills
	$Astrogation=           $_REQUEST['Astrogation'];
	$Athletics=             $_REQUEST['Athletics'];
	$Brawl=                 $_REQUEST['Brawl'];
	$Charm=                 $_REQUEST['Charm'];
	$Coercion=              $_REQUEST['Coercion'];
	$Computers=             $_REQUEST['Computers'];
	$Cool=                  $_REQUEST['Cool'];
	$Coordination=          $_REQUEST['Coordination'];
	$Deception=             $_REQUEST['Deception'];
	$Discipline=            $_REQUEST['Discipline'];
	$Gunnery=               $_REQUEST['Gunnery'];
	$Knowledge=             $_REQUEST['Knowledge'];
	$Knowledge_Core_Worlds= $_REQUEST['Knowledge_Core_Worlds'];
	$Knowledge_Education=   $_REQUEST['Knowledge_Education'];
	$Knowledge_Lore=        $_REQUEST['Knowledge_Lore'];
	$Knowledge_Outer_Rim=   $_REQUEST['Knowledge_Outer_Rim'];
	$Knowledge_Underworld=  $_REQUEST['Knowledge_Underworld'];
	$Knowledge_Xenology=    $_REQUEST['Knowledge_Xenology'];
	$Knowledge_Warfare=     $_REQUEST['Knowledge_Warfare'];
	$Leadership=            $_REQUEST['Leadership'];
	$Mechanics=             $_REQUEST['Mechanics'];
	$Medicine=              $_REQUEST['Medicine'];
	$Melee=                 $_REQUEST['Melee'];
	$Negotiation=           $_REQUEST['Negotiation'];
	$Perception=            $_REQUEST['Perception'];
	$Piloting_Planetary=    $_REQUEST['Piloting_Planetary'];
	$Piloting_Space=        $_REQUEST['Piloting_Space'];
	$Ranged_Heavy=          $_REQUEST['Ranged_Heavy'];
	$Ranged_Light=          $_REQUEST['Ranged_Light'];
	$Resilience=            $_REQUEST['Resilience'];
	$Skulduggery=           $_REQUEST['Skulduggery'];
	$Stealth=               $_REQUEST['Stealth'];
	$Streetwise=            $_REQUEST['Streetwise'];
	$Survival=              $_REQUEST['Survival'];
	$Vigilance=             $_REQUEST['Vigilance'];

	//insert character
	$wpdb->insert(
		$character_table_name,
		array(
			'userID'                    => $user_id,
			'player'                    => $player_name,
			'character_name'            => $character_name,
			'race'                      => $race,
			'career'                    => $career,
			'soak'                      => $soak_value,
			'strain'                    => $strain,
			'brawn'                     => $brawn,
			'intellect'                 => $intellect,
			'willpower'                 => $willpower,
			'specialization'            => $specialization,
			'wounds'                    => $wounds,
			'defence'                   => $defence,
			'agility'                   => $agility,
			'cunning'                   => $cunning,
			'presence'                  => $presence,
			'Astrogation'               =>	$Astrogation,
			'Athletics'                 =>  $Athletics,
			'Brawl'                     =>  $Brawl,
			'Charm'                     =>  $Charm,
			'Coercion'                  =>  $Coercion,
			'Computers'                 =>  $Computers,
			'Cool'                      =>  $Cool,
			'Coordination'              =>  $Coordination,
			'Deception'                 =>  $Deception,
			'Discipline'                =>  $Discipline,
			'Gunnery'                   =>  $Gunnery,
			'Knowledge'                 =>  $Knowledge,
			'Knowledge_Core_Worlds'     =>  $Knowledge_Core_Worlds,
			'Knowledge_Education'       =>  $Knowledge_Education,
			'Knowledge_Lore'            =>  $Knowledge_Lore,
			'Knowledge_Outer_Rim'       =>  $Knowledge_Outer_Rim,
			'Knowledge_Underworld'      =>  $Knowledge_Underworld,
			'Knowledge_Xenology'        =>  $Knowledge_Xenology,
			'Knowledge_Warfare'         =>  $Knowledge_Warfare,
			'Leadership'                =>  $Leadership,
			'Mechanics'                 =>  $Mechanics,
			'Medicine'                  =>  $Medicine,
			'Melee'                     =>  $Melee,
			'Negotiation'               =>  $Negotiation,
			'Perception'                =>  $Perception,
			'Piloting_Planetary'        =>  $Piloting_Planetary,
			'Piloting_Space'            =>  $Piloting_Space,
			'Ranged_Heavy'              =>  $Ranged_Heavy,
			'Ranged_Light'              =>  $Ranged_Light,
			'Resilience'                =>  $Resilience,
			'Skulduggery'               =>  $Skulduggery,
			'Stealth'                   =>  $Stealth,
			'Streetwise'                =>  $Streetwise,
			'Survival'                  =>  $Survival,
			'Vigilance'                 =>  $Vigilance
		)
	);

	if($wpdb->insert_id > 0){
		echo 'Your character has been created with the following information.';
		?>
		<div>
			<p>Player Name: <? echo $player_name; ?></p>
		</div>
		<div style="float:left;width:40%;margin:0 5% ">
			<p>Character Name:<br /> <? echo $character_name; ?></p>
			<p>Career:<br /> <? echo str_replace("_"," ",$career); ?></p>
			<p>Wounds: <? echo $wounds; ?></p>
			<p>Soak Value: <? echo $soak_value; ?></p>
			<p>Brawn: <? echo $brawn; ?></p>
			<p>Intellect: <? echo $intellect; ?></p>
			<p>Willpower: <? echo $willpower; ?></p>
		</div>

		<div style="float:left;width:40%;margin:0 5% ">
			<p>Race:<br /> <? echo $race; ?></p>
			<p>Specialization:<br /> <? echo $specialization; ?></p>
			<p>Strain: <? echo $strain; ?></p>
			<p>Defence: <? echo $defence; ?></p>
			<p>Agility: <? echo $agility; ?></p>
			<p>Cunning: <? echo $cunning; ?></p>
			<p>Presence: <? echo $presence; ?></p>
		</div>
		<br clear='all' />
		<div>Skills</div>
		<br clear='all' />
		<div style="float:left;width:40%;margin:0 5% ">
			<p>Astrogation: <? echo $Astrogation; ?></p>
			<p>Athletics: <? echo $Athletics; ?></p>
			<p>Brawl: <? echo $Brawl; ?></p>
			<p>Charm: <? echo $Charm; ?></p>
			<p>Coercion: <? echo $Coercion; ?></p>
			<p>Computers: <? echo $Computers; ?></p>
			<p>Cool: <? echo $Cool; ?></p>
			<p>Coordination: <? echo $Coordination; ?></p>
			<p>Deception: <? echo $Deception; ?></p>
			<p>Discipline: <? echo $Discipline; ?></p>
			<p>Gunnery: <? echo $Gunnery; ?></p>
			<p>Knowledge: <? echo $Knowledge; ?></p>
			<p>Knowledge Core Worlds: <? echo $Knowledge_Core_Worlds; ?></p>
			<p>Knowledge Education: <? echo $Knowledge_Education; ?></p>
			<p>Knowledge Lore: <? echo $Knowledge_Lore; ?></p>
			<p>Knowledge Outer Rim: <? echo $Knowledge_Outer_Rim; ?></p>
			<p>Knowledge Underworld: <? echo $Knowledge_Underworld; ?></p>
			<p>Knowledge Xenology: <? echo $Knowledge_Xenology; ?></p>
		</div>
		<div style="float:left;width:40%;margin:0 5% ">
			<p>Knowledge Warfare: <? echo $Knowledge_Warfare; ?></p>
			<p>Leadership: <? echo $Leadership; ?></p>
			<p>Mechanics: <? echo $Mechanics; ?></p>
			<p>Medicine: <? echo $Medicine; ?></p>
			<p>Melee: <? echo $Melee; ?></p>
			<p>Negotiation: <? echo $Negotiation; ?></p>
			<p>Perception: <? echo $Perception; ?></p>
			<p>Piloting Planetary: <? echo $Piloting_Planetary; ?></p>
			<p>Piloting Space: <? echo $Piloting_Space; ?></p>
			<p>Ranged Heavy: <? echo $Ranged_Heavy; ?></p>
			<p>Ranged Light: <? echo $Ranged_Light; ?></p>
			<p>Resilience: <? echo $Resilience; ?></p>
			<p>Skulduggery: <? echo $Skulduggery; ?></p>
			<p>Stealth: <? echo $Stealth; ?></p>
			<p>Streetwise: <? echo $Streetwise; ?></p>
			<p>Survival: <? echo $Survival; ?></p>
			<p>Vigilance: <? echo $Vigilance; ?></p>
		</div>
		<?php
	}else{
		echo "Something Went Wrong.";
	}

}
elseif(!isset($_REQUEST['create']) && !isset($character['character_name'])){//Display Form
	?>
	<script src="<?php echo $base_url; ?>/wp-content/plugins/sweecs/js/prototype.forms.js" type="text/javascript"></script>
	<script src="<?php echo $base_url; ?>/wp-content/plugins/sweecs/js/jotform.forms.js?3.2.6370" type="text/javascript"></script>
	<script type="text/javascript">
		JotForm.init();
		function spec(career){
			var careers= ['Bounty_Hunter', 'Colonist', 'Explorer', 'Hired_Gun', 'Smuggler', 'Technician'];
			for(var i = 0; i < careers.length; i++){
				var item= careers[i];
				document.getElementById(item).style.display='none';
				var item2= item + '_Spec';
				var field= document.getElementById(item2);
				field.setAttribute("name","nope");
			}
			document.getElementById(career).style.display='block';
			var career2= career + '_Spec';
			var field= document.getElementById(career2);
			field.setAttribute("name","specialization");
		}

	</script>
	<link href="<?php echo $base_url; ?>/wp-content/plugins/sweecs/css/css.css?3.2.6370" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="<?php echo $base_url; ?>/wp-content/plugins/sweecs/css/nova.css?3.2.6370" />
	<link type="text/css" media="print" rel="stylesheet" href="<?php echo $base_url; ?>/wp-content/plugins/sweecs/css/printForm.css?3.2.6370" />
	<style type="text/css">
		.form-label-left{
			width:150px !important;
		}
		.form-line{
			padding-top:12px;
			padding-bottom:12px;
		}
		.form-label-right{
			width:150px !important;
		}
		.form-all{
			width:650px;
			color:#555 !important;
			font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
			font-size:14px;
		}
	</style>

	<form class="jotform-form" action="" method="post" name="form_50895250335153" id="50895250335153" accept-charset="utf-8">
		<input type="hidden" name="create" value="" />
		<div> <!-- Top Div -->
			<ul class="form-section page-section">
				<li id="cid_1" class="form-input-wide" data-type="control_head">
					<div class="form-header-group">
						<div class="header-text httal htvam">
							<h2 id="header_1" class="form-header">
								Please Fill out the Sheet Below
							</h2>
						</div>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_7">
					<label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
						Player Name
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_7" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_7" name="playerName" size="20" value="" />
					</div>
				</li>
			</ul>
		</div>
		<div class="form-all" >
			<ul class="form-section page-section">
				<li class="form-line jf-required" data-type="control_textbox" id="id_6" >
					<label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
						Character Name
							<span class="form-required">
								*
							</span>
					</label>
					<div id="cid_6" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="characterName" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_dropdown" id="id_2" >
					<label class="form-label form-label-left form-label-auto" id="label_2" for="input_2">
						Race
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_2" class="form-input jf-required">
						<select class="form-dropdown validate[required]" style="width:150px" id="input_2" name="race">
							<option value="">  </option>
							<option value="Aqualish"> Aqualish </option>
							<option value="Bothan"> Bothan </option>
							<option value="Chiss"> Chiss </option>
							<option value="Drall"> Drall </option>
							<option value="Droid"> Droid </option>
							<option value="Duros"> Duros </option>
							<option value="Gand"> Gand </option>
							<option value="Human"> Human </option>
							<option value="Corellian"> Corellian </option>
							<option value="Klatooinian"> Klatooinian </option>
							<option value="Rodian"> Rodian </option>
							<option value="Selonian"> Selonian </option>
							<option value="Toydarian"> Toydarian </option>
							<option value="Trandoshan"> Trandoshan </option>
							<option value="Twilek"> Twi'lek </option>
							<option value="Weequay"> Weequay </option>
							<option value="Wookiee"> Wookiee </option>
						</select>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_dropdown" id="id_4" >
					<label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
						Career
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_4" class="form-input jf-required">
						<select class="form-dropdown validate[required]" style="width:150px" id="input_4" name="career" onchange="spec(this.value)">
							<option value="">  </option>
							<option value="Bounty_Hunter"> Bounty hunter </option>
							<option value="Colonist"> Colonist </option>
							<option value="Explorer"> Explorer </option>
							<option value="Hired_Gun" > Hired gun </option>
							<option value="Smuggler"> Smuggler </option>
							<option value="Technician"> Technician </option>
						</select>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_dropdown" id="id_5" >
					<label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
						Specialization
						<span class="form-required">
							*
						</span>
					</label>
					<div id="Bounty_Hunter" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Bounty_Hunter_Spec" name="specialization">
							<option value="">  </option>
							<option value="Assassin">Assassin</option>
							<option value="Gadgeteer">Gadgeteer</option>
							<option value="Survivalist">Survivalist</option>
						</select>
					</div>
					<div id="Colonist" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Colonist_Spec" name="specialization">
							<option value="">  </option>
							<option value="Doctor">Doctor</option>
							<option value="Politico">Politico</option>
							<option value="Scholar">Scholar</option>
							<option value="Entrepreneur">Entrepreneur</option>
							<option value="Performer">Performer</option>
							<option value="Marshal">Marshal</option>
						</select>
					</div>
					<div id="Explorer" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Explorer_Spec" name="specialization">
							<option value="">  </option>
							<option value="Fringer">Fringer</option>
							<option value="Scout">Scout</option>
							<option value="Trader">Trader</option>
							<option value="Archaeologist">Archaeologist</option>
							<option value="Big_Game_Hunter">Big-Game Hunter</option>
							<option value="Driver">Driver</option>
						</select>
					</div>
					<div id="Hired_Gun" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Hired_Gun_Spec" name="specialization">
							<option value="">  </option>
							<option value="Bodyguard">Bodyguard</option>
							<option value="Marauder">Marauder</option>
							<option value="Mercenary_Soldier">Mercenary Soldier</option>
							<option value="Enforcer">Enforcer</option>
							<option value="Demolitionist">Demolitionist</option>
							<option value="Heavy">Heavy</option>
						</select>
					</div>
					<div id="Smuggler" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Smuggler_Spec" name="specialization">
							<option value="">  </option>
							<option value="Pilot">Pilot</option>
							<option value="Scoundrel">Scoundrel</option>
							<option value="Thief">Thief</option>
						</select>
					</div>
					<div id="Technician" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Technician_Spec" name="specialization">
							<option value="">  </option>
							<option value="Mechanic">Mechanic</option>
							<option value="Outlaw_Tech">Outlaw Tech</option>
							<option value="Slicer">Slicer</option>
						</select>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_9" >
					<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
						Wounds
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_9" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_9" name="wounds" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_10" >
					<label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
						Strain
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_10" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_10" name="strain" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_8" >
					<label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
						Soak Value
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_8" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="soakValue" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_11" >
					<label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
						Defence
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_11" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_11" name="defence" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_12" >
					<label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
						Brawn
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_12" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_12" name="brawn" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_13" >
					<label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
						Agility
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_13" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_13" name="agility" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_14" >
					<label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">
						Intellect
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_14" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_14" name="intellect" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_15" >
					<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
						Cunning
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_15" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_15" name="cunning" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_16" >
					<label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">
						Willpower
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_16" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_16" name="willpower" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_17" >
					<label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">
						Presence
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_17" name="presence" size="20" value="" />
					</div>
				</li>
				<div>Skills</div>
				<li class="form-line jf-required" data-type="control_textbox" id="id_18" >
					<label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">
						Astrogation
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_18" name="Astrogation" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_19" >
					<label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
						Athletics
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_19" name="Athletics" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_20" >
					<label class="form-label form-label-left form-label-auto" id="label_20" for="input_20">
						Brawl
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_20" name="Brawl" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_21" >
					<label class="form-label form-label-left form-label-auto" id="label_21" for="input_21">
						Charm
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_21" name="Charm" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_22" >
					<label class="form-label form-label-left form-label-auto" id="label_22" for="input_22">
						Coercion
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_22" name="Coercion" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_23" >
					<label class="form-label form-label-left form-label-auto" id="label_23" for="input_23">
						Computers
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_23" name="Computers" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_24" >
					<label class="form-label form-label-left form-label-auto" id="label_24" for="input_24">
						Cool
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_24" name="Cool" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_25" >
					<label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
						Coordination
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_25" name="Coordination" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_26" >
					<label class="form-label form-label-left form-label-auto" id="label_26" for="input_26">
						Deception
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_26" name="Deception" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_27" >
					<label class="form-label form-label-left form-label-auto" id="label_27" for="input_27">
						Discipline
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_27" name="Discipline" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_28" >
					<label class="form-label form-label-left form-label-auto" id="label_28" for="input_28">
						Gunnery
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_28" name="Gunnery" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_29" >
					<label class="form-label form-label-left form-label-auto" id="label_29" for="input_29">
						Knowledge
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_29" name="Knowledge" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_30" >
					<label class="form-label form-label-left form-label-auto" id="label_30" for="input_30">
						Knowledge Core Worlds
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_30" name="Knowledge_Core_Worlds" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_31" >
					<label class="form-label form-label-left form-label-auto" id="label_31" for="input_31">
						Knowledge Education
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_31" name="Knowledge_Education" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_32" >
					<label class="form-label form-label-left form-label-auto" id="label_32" for="input_32">
						Knowledge Lore
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_32" name="Knowledge_Lore" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_33" >
					<label class="form-label form-label-left form-label-auto" id="label_33" for="input_33">
						Knowledge Outer Rim
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_33" name="Knowledge_Outer_Rim" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_34" >
					<label class="form-label form-label-left form-label-auto" id="label_34" for="input_34">
						Knowledge Underworld
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_34" name="Knowledge_Underworld" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_35" >
					<label class="form-label form-label-left form-label-auto" id="label_35" for="input_35">
						Knowledge Xenology
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_35" name="Knowledge_Xenology" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_36" >
					<label class="form-label form-label-left form-label-auto" id="label_36" for="input_36">
						Knowledge Warfare
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_36" name="Knowledge_Warfare" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_37" >
					<label class="form-label form-label-left form-label-auto" id="label_37" for="input_37">
						Leadership
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_37" name="Leadership" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_38" >
					<label class="form-label form-label-left form-label-auto" id="label_38" for="input_38">
						Mechanics
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_38" name="Mechanics" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_39" >
					<label class="form-label form-label-left form-label-auto" id="label_39" for="input_39">
						Medicine
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_39" name="Medicine" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_40" >
					<label class="form-label form-label-left form-label-auto" id="label_40" for="input_40">
						Melee
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_40" name="Melee" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_41" >
					<label class="form-label form-label-left form-label-auto" id="label_41" for="input_41">
						Negotiation
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_41" name="Negotiation" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_42" >
					<label class="form-label form-label-left form-label-auto" id="label_42" for="input_42">
						Perception
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_42" name="Perception" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_43" >
					<label class="form-label form-label-left form-label-auto" id="label_43" for="input_43">
						Piloting Planetary
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_43" name="Piloting_Planetary" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_44" >
					<label class="form-label form-label-left form-label-auto" id="label_44" for="input_44">
						Piloting Space
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_44" name="Piloting_Space" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_45" >
					<label class="form-label form-label-left form-label-auto" id="label_45" for="input_45">
						Ranged Heavy
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_45" name="Ranged_Heavy" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_46" >
					<label class="form-label form-label-left form-label-auto" id="label_46" for="input_46">
						Ranged Light
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_46" name="Ranged_Light" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_47" >
					<label class="form-label form-label-left form-label-auto" id="label_47" for="input_47">
						Resilience
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_47" name="Resilience" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_48" >
					<label class="form-label form-label-left form-label-auto" id="label_48" for="input_48">
						Skulduggery
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_48" name="Skulduggery" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_49" >
					<label class="form-label form-label-left form-label-auto" id="label_49" for="input_49">
						Stealth
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_49" name="Stealth" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_50" >
					<label class="form-label form-label-left form-label-auto" id="label_50" for="input_50">
						Streetwise
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_50" name="Streetwise" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_51" >
					<label class="form-label form-label-left form-label-auto" id="label_51" for="input_51">
						Survival
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_51" name="Survival" size="20" value="" />
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_52" >
					<label class="form-label form-label-left form-label-auto" id="label_52" for="input_52">
						Vigilance
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_52" name="Vigilance" size="20" value="" />
					</div>
				</li>

			</ul>
		</div>
		<br clear="all"/>
		<!--li class="form-line" data-type="control_button" id="id_18"-->
			<div id="cid_18" class="form-input-wide">
				<div style="margin-left:156px" class="form-buttons-wrapper">
					<button id="input_18" type="submit" class="form-submit-button">
						Submit
					</button>
				</div>
			</div>
		<!--/li-->
		<input type="hidden" id="simple_spc" name="simple_spc" value="50895250335153" />
		<script type="text/javascript">
			document.getElementById("si" + "mple" + "_spc").value = "50895250335153-50895250335153";
		</script>
	</form>
	<?php
}
else{
	echo "You already have a character. Please use the edit page.";
}
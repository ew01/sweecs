<?php
/**
 * Created by PhpStorm.
 * User: dellenburg
 * Date: 3/31/2015
 * Time: 13:47
 * Name: Create Character
 * Desc: This script will allow the player to modify their character.
 */

if(isset($_REQUEST['edit'])){//Edit the submitted Character Sheet
	$character_name=    $_REQUEST['characterName'];
	$career=            $_REQUEST['career'];
	$soak_value=        $_REQUEST['soakValue'];
	$strain=            $_REQUEST['strain'];
	$brawn=             $_REQUEST['brawn'];
	$intellect=         $_REQUEST['intellect'];
	$willpower=         $_REQUEST['willpower'];
	$race=              $_REQUEST['race'];
	$specialization=    $_REQUEST['specialization'];
	$wounds=            $_REQUEST['wounds'];
	$defence=           $_REQUEST['defence'];
	$agility=           $_REQUEST['agility'];
	$cunning=           $_REQUEST['cunning'];
	$presence=          $_REQUEST['presence'];
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

	$update_char= $wpdb->update(
		$character_table_name,
		array(
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
		),
		array( 'userID' => $user_id)
	);



	if($update_char > 0){
		echo 'Your character has been updated with the following information.';
		$character= $wpdb->get_row("SELECT * FROM $table_name where userID = $user_id", ARRAY_A);
		?>
		<div>
			<p>Player Name: <? echo $character['player']; ?></p>
		</div>
		<div style="float:left;width:40%;margin:0 5% ">
			<p>Character Name:<br /> <? echo $character['character_name']; ?></p>
			<p>Career:<br /> <? echo str_replace('_'," ",$character['career']); ?></p>
			<p>Wounds: <? echo $character['wounds']; ?></p>
			<p>Soak Value: <? echo $character['soak']; ?></p>
			<p>Brawn: <? echo $character['brawn']; ?></p>
			<p>Intellect: <? echo $character['intellect']; ?></p>
			<p>Willpower: <? echo $character['willpower']; ?></p>
		</div>

		<div style="float:left;width:40%;margin:0 5% ">
			<p>Race:<br /> <? echo $character['race']; ?></p>
			<p>Specialization:<br /> <? echo $character['specialization']; ?></p>
			<p>Strain: <? echo $character['strain']; ?></p>
			<p>Defence: <? echo $character['defence']; ?></p>
			<p>Agility: <? echo $character['agility']; ?></p>
			<p>Cunning: <? echo $character['cunning']; ?></p>
			<p>Presence: <? echo $character['presence']; ?></p>
		</div>
		<br />
		<div style="float:left;width:40%;margin:0 5% ">
			<p>Astrogation:<? echo $character['Astrogation']; ?></p>
			<p>Athletics:<? echo $character['Athletics']; ?></p>
			<p>Brawl:<? echo $character['Brawl']; ?></p>
			<p>Charm:<? echo $character['Charm']; ?></p>
			<p>Coercion:<? echo $character['Coercion']; ?></p>
			<p>Computers:<? echo $character['Computers']; ?></p>
			<p>Cool:<? echo $character['Cool']; ?></p>
			<p>Coordination:<? echo $character['Coordination']; ?></p>
			<p>Deception:<? echo $character['Deception']; ?></p>
			<p>Discipline:<? echo $character['Discipline']; ?></p>
			<p>Gunnery:<? echo $character['Gunnery']; ?></p>
			<p>Knowledge:<? echo $character['Knowledge']; ?></p>
			<p>Knowledge Core Worlds:<? echo $character['Knowledge_Core_Worlds']; ?></p>
			<p>Knowledge Education:<? echo $character['Knowledge_Education']; ?></p>
			<p>Knowledge Lore:<? echo $character['Knowledge_Lore']; ?></p>
			<p>Knowledge Outer Rim:<? echo $character['Knowledge_Outer_Rim']; ?></p>
			<p>Knowledge Underworld:<? echo $character['Knowledge_Underworld']; ?></p>
			<p>Knowledge Xenology:<? echo $character['Knowledge_Xenology']; ?></p>
		</div>
		<div style="float:left;width:40%;margin:0 5% ">
			<p>Knowledge Warfare:<? echo $character['Knowledge_Warfare']; ?></p>
			<p>Leadership:<? echo $character['Leadership']; ?></p>
			<p>Mechanics:<? echo $character['Mechanics']; ?></p>
			<p>Medicine:<? echo $character['Medicine']; ?></p>
			<p>Melee:<? echo $character['Melee']; ?></p>
			<p>Negotiation:<? echo $character['Negotiation']; ?></p>
			<p>Perception:<? echo $character['Perception']; ?></p>
			<p>Piloting_Planetary:<? echo $character['Piloting_Planetary']; ?></p>
			<p>Piloting_Space:<? echo $character['Piloting_Space']; ?></p>
			<p>Ranged Heavy:<? echo $character['Ranged_Heavy']; ?></p>
			<p>Ranged Light:<? echo $character['Ranged_Light']; ?></p>
			<p>Resilience:<? echo $character['Resilience']; ?></p>
			<p>Skulduggery:<? echo $character['Skulduggery']; ?></p>
			<p>Stealth:<? echo $character['Stealth']; ?></p>
			<p>Streetwise:<? echo $character['Streetwise']; ?></p>
			<p>Survival:<? echo $character['Survival']; ?></p>
			<p>Vigilance:<? echo $character['Vigilance']; ?></p>
		</div>
	<?php
	}else{
		echo "there was no change.";
	}
}
else{

	$character= $wpdb->get_row("SELECT * FROM $character_table_name where userID = $user_id", ARRAY_A);

	//build selected variable for drop downs
	$$character['race']=            'selected';
	$$character['career']=          'selected';
	$$character['specialization']=  'selected';
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
				var specID= item + '_Spec';
				var field= document.getElementById(specID);
				field.setAttribute("name","nope");
			}
			document.getElementById(career).style.display='block';
			var career2= career + '_Spec';
			var field= document.getElementById(career2);
			field.setAttribute("name","specialization");
		}
		function setDrops(){
			var specID= document.getElementById('career').value;
			document.getElementById(specID).style.display='block';
		}
	</script>
	<link href="<?php echo $base_url; ?>/wp-content/plugins/sweecs/css/css.css?3.2.6370" rel="stylesheet" type="text/css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $base_url; ?>/wp-content/plugins/sweecs/css/nova.css?3.2.6370"/>
	<link type="text/css" media="print" rel="stylesheet" href="<?php echo $base_url; ?>/wp-content/plugins/sweecs/css/printForm.css?3.2.6370"/>
	<style type="text/css">
		.form-label-left {
			width: 150px !important;
		}

		.form-line {
			padding-top: 12px;
			padding-bottom: 12px;
		}

		.form-label-right {
			width: 150px !important;
		}

		.form-all {
			width: 650px;
			color: #555 !important;
			font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
			font-size: 14px;
		}
	</style>
	<div>
		<p>Player Name: <? echo $character['player']; ?></p>
	</div>
	<form class="jotform-form" action="" method="post" name="form_50895250335153" id="50895250335153" accept-charset="utf-8" >
		<input type="hidden" name="edit" value=""/>

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
			</ul>
		</div>
		<div class="form-all">
			<ul class="form-section page-section">
				<li class="form-line jf-required" data-type="control_textbox" id="id_6">
					<label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
						Character Name
							<span class="form-required">
								*
							</span>
					</label>

					<div id="cid_6" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="characterName"
						       size="20" value="<? echo $character['character_name']; ?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_dropdown" id="id_2">
					<label class="form-label form-label-left form-label-auto" id="label_2" for="input_2">
						Race
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_2" class="form-input jf-required">
						<select class="form-dropdown validate[required]" style="width:150px" id="input_2" name="race">
							<option value=""></option>
							<option value="Aqualish" <? echo $Aqualish;?> > Aqualish</option>
							<option value="Bothan" <? echo $Bothan;?> > Bothan</option>
							<option value="Chiss" <? echo $Chiss;?> > Chiss</option>
							<option value="Drall" <? echo $Drall;?> > Drall</option>
							<option value="Droid" <? echo $Droid;?> > Droid</option>
							<option value="Duros" <? echo $Duros;?> > Duros</option>
							<option value="Gand" <? echo $Gand;?> > Gand</option>
							<option value="Human" <? echo $Human;?> > Human</option>
							<option value="Corellian" <? echo $Corellian;?> > Corellian</option>
							<option value="Klatooinian" <? echo $Klatooinian;?> > Klatooinian</option>
							<option value="Rodian" <? echo $Rodian;?> > Rodian</option>
							<option value="Selonian" <? echo $Selonian;?> > Selonian</option>
							<option value="Toydarian" <? echo $Toydarian; ?> > Toydarian</option>
							<option value="Trandoshan" <? echo $Trandoshan;?> > Trandoshan</option>
							<option value="Twilek" <? echo $Twilek;?> > Twi'lek</option>
							<option value="Weequay" <? echo $Weequay;?> > Weequay</option>
							<option value="Wookiee" <? echo $Wookiee;?> > Wookiee</option>
						</select>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_dropdown" id="id_4">
					<label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
						Career
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_4" class="form-input jf-required" >
						<select class="form-dropdown validate[required]" style="width:150px" id="career" name="career" onchange="spec(this.value)">
							<option value=""></option>
							<option value="Bounty_Hunter" <? echo $Bounty_Hunter;?> > Bounty hunter</option>
							<option value="Colonist" <? echo $Colonist;?> > Colonist</option>
							<option value="Explorer" <? echo $Explorer;?> > Explorer</option>
							<option value="Hired_Gun" <? echo $Hired_Gun;?> > Hired gun</option>
							<option value="Smuggler" <? echo $Smuggler;?> > Smuggler</option>
							<option value="Technician" <? echo $Technician;?> > Technician</option>
						</select>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_dropdown" id="id_5">
					<label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
						Specialization
						<span class="form-required">
							*
						</span>
					</label>
					<div id="Bounty_Hunter" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Bounty_Hunter_Spec" name="specialization">
							<option value="">  </option>
							<option value="Assassin" <? echo $Assassin; ?> >Assassin</option>
							<option value="Gadgeteer" <? echo $Gadgeteer; ?> >Gadgeteer</option>
							<option value="Survivalist" <? echo $Survivalist; ?> >Survivalist</option>
						</select>
					</div>
					<div id="Colonist" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Colonist_Spec" name="specialization">
							<option value="">  </option>
							<option value="Doctor" <? echo $Doctor; ?> >Doctor</option>
							<option value="Politico" <? echo $Politico; ?> >Politico</option>
							<option value="Scholar" <? echo $Scholar; ?> >Scholar</option>
							<option value="Entrepreneur" <? echo $Entrepreneur; ?> >Entrepreneur</option>
							<option value="Performer" <? echo $Performer; ?> >Performer</option>
							<option value="Marshal" <? echo $Marshal; ?> >Marshal</option>
						</select>
					</div>
					<div id="Explorer" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Explorer_Spec" name="specialization">
							<option value="">  </option>
							<option value="Fringer" <? echo $Fringer; ?> >Fringer</option>
							<option value="Scout" <? echo $Scout; ?> >Scout</option>
							<option value="Trader" <? echo $Trader; ?> >Trader</option>
							<option value="Archaeologist" <? echo $Archaeologist; ?> >Archaeologist</option>
							<option value="Big_Game_Hunter" <? echo $Big_Game_Hunter; ?> >Big-Game Hunter</option>
							<option value="Driver" <? echo $Driver; ?> >Driver</option>
						</select>
					</div>
					<div id="Hired_Gun" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Hired_Gun_Spec" name="specialization">
							<option value="">  </option>
							<option value="Bodyguard" <? echo $Bodyguard; ?> >Bodyguard</option>
							<option value="Marauder" <? echo $Marauder; ?> >Marauder</option>
							<option value="Mercenary_Soldier" <? echo $Mercenary_Soldier; ?> >Mercenary Soldier</option>
							<option value="Enforcer" <? echo $Enforcer; ?> >Enforcer</option>
							<option value="Demolitionist" <? echo $Demolitionist; ?> >Demolitionist</option>
							<option value="Heavy" <? echo $Heavy; ?> >Heavy</option>
						</select>
					</div>
					<div id="Smuggler" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Smuggler_Spec" name="specialization">
							<option value="">  </option>
							<option value="Pilot" <? echo $Pilot; ?> >Pilot</option>
							<option value="Scoundrel" <? echo $Scoundrel; ?> >Scoundrel</option>
							<option value="Thief" <? echo $Thief; ?> >Thief</option>
						</select>
					</div>
					<div id="Technician" class="form-input jf-required" style="display:none;" >
						<select class="form-dropdown validate[required]" style="width:150px" id="Technician_Spec" name="specialization">
							<option value="">  </option>
							<option value="Mechanic" <? echo $Mechanic; ?> >Mechanic</option>
							<option value="Outlaw_Tech" <? echo $Outlaw_Tech; ?> >Outlaw Tech</option>
							<option value="Slicer" <? echo $Slicer; ?> >Slicer</option>
						</select>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_9">
					<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9">
						Wounds
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_9" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_9" name="wounds"
						       size="20" value="<? echo $character['wounds'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_10">
					<label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
						Strain
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_10" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_10" name="strain"
						       size="20" value="<? echo $character['strain'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_8">
					<label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
						Soak Value
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_8" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="soakValue"
						       size="20" value="<? echo $character['soak'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_11">
					<label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
						Defence
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_11" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_11" name="defence"
						       size="20" value="<? echo $character['defence'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_12">
					<label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
						Brawn
						<span class="form-required">
							*
						</span>
					</label>
					<div id="cid_12" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_12" name="brawn"
						       size="20" value="<? echo $character['brawn'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_13">
					<label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
						Agility
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_13" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_13" name="agility"
						       size="20" value="<? echo $character['agility'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_14">
					<label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">
						Intellect
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_14" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_14" name="intellect"
						       size="20" value="<? echo $character['intellect'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_15">
					<label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
						Cunning
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_15" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_15" name="cunning"
						       size="20" value="<? echo $character['cunning'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_16">
					<label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">
						Willpower
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_16" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_16" name="willpower"
						       size="20" value="<? echo $character['willpower'];?>"/>
					</div>
				</li>
				<li class="form-line jf-required" data-type="control_textbox" id="id_17">
					<label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">
						Presence
						<span class="form-required">
							*
						</span>
					</label>

					<div id="cid_17" class="form-input jf-required">
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_17" name="presence"
						       size="20" value="<? echo $character['presence'];?>"/>
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_18" name="Astrogation" size="20" value="<? echo $character['Astrogation']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_19" name="Athletics" size="20" value="<? echo $character['Athletics']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_20" name="Brawl" size="20" value="<? echo $character['Brawl']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_21" name="Charm" size="20" value="<? echo $character['Charm']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_22" name="Coercion" size="20" value="<? echo $character['Coercion']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_23" name="Computers" size="20" value="<? echo $character['Computers']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_24" name="Cool" size="20" value="<? echo $character['Cool']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_25" name="Coordination" size="20" value="<? echo $character['Coordination']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_26" name="Deception" size="20" value="<? echo $character['Deception']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_27" name="Discipline" size="20" value="<? echo $character['Discipline']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_28" name="Gunnery" size="20" value="<? echo $character['Gunnery']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_29" name="Knowledge" size="20" value="<? echo $character['Knowledge']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_30" name="Knowledge_Core_Worlds" size="20" value="<? echo $character['Knowledge_Core_Worlds']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_31" name="Knowledge_Education" size="20" value="<? echo $character['Knowledge_Education']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_32" name="Knowledge_Lore" size="20" value="<? echo $character['Knowledge_Lore']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_33" name="Knowledge_Outer_Rim" size="20" value="<? echo $character['Knowledge_Outer_Rim']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_34" name="Knowledge_Underworld" size="20" value="<? echo $character['Knowledge_Underworld']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_35" name="Knowledge_Xenology" size="20" value="<? echo $character['Knowledge_Xenology']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_36" name="Knowledge_Warfare" size="20" value="<? echo $character['Knowledge_Warfare']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_37" name="Leadership" size="20" value="<? echo $character['Leadership']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_38" name="Mechanics" size="20" value="<? echo $character['Mechanics']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_39" name="Medicine" size="20" value="<? echo $character['Medicine']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_40" name="Melee" size="20" value="<? echo $character['Melee']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_41" name="Negotiation" size="20" value="<? echo $character['Negotiation']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_42" name="Perception" size="20" value="<? echo $character['Perception']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_43" name="Piloting_Planetary" size="20" value="<? echo $character['Piloting_Planetary']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_44" name="Piloting_Space" size="20" value="<? echo $character['Piloting_Space']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_45" name="Ranged_Heavy" size="20" value="<? echo $character['Ranged_Heavy']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_46" name="Ranged_Light" size="20" value="<? echo $character['Ranged_Light']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_47" name="Resilience" size="20" value="<? echo $character['Resilience']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_48" name="Skulduggery" size="20" value="<? echo $character['Skulduggery']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_49" name="Stealth" size="20" value="<? echo $character['Stealth']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_50" name="Streetwise" size="20" value="<? echo $character['Streetwise']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_51" name="Survival" size="20" value="<? echo $character['Survival']; ?>" />
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
						<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_52" name="Vigilance" size="20" value="<? echo $character['Vigilance']; ?>" />
					</div>
				</li>
			</ul>
		</div>
		<br clear="all"/>
		<!--li class="form-line" data-type="control_button" id="id_18"-->
		<div id="cid_18" class="form-input-wide">
			<div style="margin-left:156px" class="form-buttons-wrapper">
				<button id="input_18" type="submit" class="form-submit-button">
					Update
				</button>
			</div>
		</div>
		<!--/li-->
		<input type="hidden" id="simple_spc" name="simple_spc" value="50895250335153"/>
		<script type="text/javascript">
			document.getElementById("si" + "mple" + "_spc").value = "50895250335153-50895250335153";
			window.onload = setDrops();
		</script>
	</form>
<?php
}
?>
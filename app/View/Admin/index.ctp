<div class="row">
		<?php echo $this->Session->flash(); ?>

</div>


<style>
	
	

	.bar {
		background: orange;
	}
	
	html {
		background: white;
	}

	table.single tbody tr:nth-child(-n+8) .bar{
		background: lightgreen !important;
	}

	table.multiple tbody tr:nth-child(-n+5) .bar{
		background: lightgreen !important;
	}



</style>
<link rel="stylesheet" href="<?php $this->Path->myroot(); ?>css/admin.css">
<div class="row">

		<h2>Results</h2>	
		<table width="100%" class="single striped all">
			<thead>
				<tr>
					<td class="large-1 medium-1 small-1" style="text-align=center">Rank</td>
					<td class="large-1 medium-1 small-1" id="names">No</td>
					<td class="large-1 medium-1 small-1" >Use of English(30%)</td>
					<td class="large-1 medium-1 small-1" >Overall Performance(30%)</td>
					<td class="large-1 medium-1 small-1" >Originality & Creatvity(20%)</td>
					<td class="large-1 medium-1 small-1" >Audience Response(10%)</td>
					<td class="large-1 medium-1 small-1" >Organization & Coordination(10%)</td>
					<td class="large-6 medium-6 small-6" >Total(100%)</td>
				</tr>
			</thead>
			<tbody>
				<?php $rank_count = 0; $previous = -1; $same = 1;?>
				<?php foreach ($marks0 as $key => $mark) : ?>
				<?php 
					if ($previous != $mark["overall"]) {
						$rank_count+=$same;
						$same = 1;
						$previous = $mark["overall"];
					}
					else {
						$same++;
					}
				?>
				<tr>
					<td><?= $rank_count ?></td>
					<td><?= $mark["singer_id"] ?></td>
					<td><div><?= $mark["m1"] ?></div></td>
					<td><div><?= $mark["m2"] ?></div></td>
					<td><div><?= $mark["m3"] ?></div></td>
					<td><div><?= $mark["m4"] ?></div></td>
					<td><div><?= $mark["m5"] ?></div></td>
					<td><div style="width:<?= $mark["overall"]/$users_amount?>%" id="singer<?= $key+1 ?>" class="bar"><?= $mark["overall"]?>&nbsp;(<?= round($mark["overall"]/$users_amount,2) ?>)</div></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<h2>The Best Use of English</h2>	
		<table width="100%" class="single striped">
			<thead>
				<tr>
					<td class="large-3 medium-3 small-3" style="text-align=center">Rank</td>
					<td class="large-3 medium-3 small-3" id="names">No</td>
					<td class="large-6 medium-6 small-6" >Use of English</td>
				</tr>
			</thead>
			<tbody>
				<?php $rank_count = 0; $previous = -1; $same = 1;?>
				<?php foreach ($marks_m1 as $key => $mark) : ?>
				<?php 
					if ($previous != $mark["overall"]) {
						$rank_count+=$same;
						$same = 1;
						$previous = $mark["overall"];
					}
					else {
						$same++;
					}
				?>
				<tr>
					<td><?= $rank_count ?></td>
					<td><?= $mark["singer_id"] ?></td>
					<td><div><?= $mark["m1_total"] ?></div></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<h2>The Most Creative Performance</h2>	
		<table width="100%" class="single striped">
			<thead>
				<tr>
					<td class="large-3 medium-3 small-3" style="text-align=center">Rank</td>
					<td class="large-3 medium-3 small-3" id="names">No</td>
					<td class="large-6 medium-6 small-6" >Originality & Creatvity</td>
				</tr>
			</thead>
			<tbody>
				<?php $rank_count = 0; $previous = -1; $same = 1;?>
				<?php foreach ($marks_m3 as $key => $mark) : ?>
				<?php 
					if ($previous != $mark["overall"]) {
						$rank_count+=$same;
						$same = 1;
						$previous = $mark["overall"];
					}
					else {
						$same++;
					}
				?>
				<tr>
					<td><?= $rank_count ?></td>
					<td><?= $mark["singer_id"] ?></td>
					<td><div><?= $mark["m3_total"] ?></div></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<h2>The Most Popular Performance</h2>	
		<table width="100%" class="single striped">
			<thead>
				<tr>
					<td class="large-3 medium-3 small-3" style="text-align=center">Rank</td>
					<td class="large-3 medium-3 small-3" id="names">No</td>
					<td class="large-6 medium-6 small-6" >Audience Response</td>
				</tr>
			</thead>
			<tbody>
				<?php $rank_count = 0; $previous = -1; $same = 1;?>
				<?php foreach ($marks_m4 as $key => $mark) : ?>
				<?php 
					if ($previous != $mark["overall"]) {
						$rank_count+=$same;
						$same = 1;
						$previous = $mark["overall"];
					}
					else {
						$same++;
					}
				?>
				<tr>
					<td><?= $rank_count ?></td>
					<td><?= $mark["singer_id"] ?></td>
					<td><div><?= $mark["m4_total"] ?></div></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>


		<a href="<?php $this->Path->myroot(); ?>admin/logout" class="btn red">Logout</a>
		<a href="<?php $this->Path->myroot(); ?>" class="btn teal">Back to Home</a>

</div>
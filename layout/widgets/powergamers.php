<div class="sidebar">
	<h3>Top 5 Power Gamers</h3>
	<?php

	$limit = 5;
	$cache = new Cache('engine/cache/topPG');
	if ($cache->hasExpired()) {
		$players = mysql_select_multi('SELECT `a`.`id`, `b`.`player_id`, `a`.`name`, `a`.`vocation`, `a`.`level`, `a`.`group_id`, `a`.`experience`, `b`.`exphist_lastexp`, `b`.`exphist1`, `b`.`exphist2`, `b`.`exphist3`, `b`.`exphist4`, `b`.`exphist5`, `b`.`exphist6`, `b`.`exphist7`,   (`a`.`experience` - `b`.`exphist_lastexp`)  AS `expdiff` FROM `players` `a` JOIN `znote_players` `b` ON `a`.`id` = `b`.`player_id`  WHERE `a`.`group_id` < 2 ORDER BY `expdiff` DESC LIMIT '.$limit);

		$cache->setContent($players);
		$cache->save();
	} else {
		$players = $cache->load();
	}

	if ($players) {
		$count = 1;
		foreach($players as $player) {
			echo "$count - <a href='characterprofile.php?name=". $player['name']. "'>". $player['name']. "</a> (". $player['level'] .") ". ($player['experience']-$player['exphist_lastexp'])  ."<br>";
			$count++;
		}
	}
	?>
	<br>
	<a href="/powergamers.php">More powergamers</a>
</div>

<?php

require "";

$repo = new GameRepository();
$games = $repo->findByUserId(1);

<h2><?= 'Null Coalesce Operator'; ?></h2>

<?php

$data = ['where' => 'At PHP Meetup'];

echo $data['test'] ?? 'nothing';

echo '<br><br>';

echo $data['where'] ?? 'nothing';

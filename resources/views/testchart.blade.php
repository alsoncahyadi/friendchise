<div class="container-fluid">
    <canvas id="BarChart" style="width:50%;"></canvas>
</div>

<div>
	<h2>
	TEST
	</h2>
</div>

<?php
    $data = array(
        'Jan' => array(33),
        'Feb' => array(32),
        'Mar' => array(12)
    );
?>

{!! app()->chartbar->render("BarChart", $data) !!}
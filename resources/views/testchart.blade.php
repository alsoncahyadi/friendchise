<div id="sales-chart"></div>

<?php
		$salesTable = \Lava::DataTable();

        $salesTable->addDateColumn('Day of Month')->addNumberColumn('Sales');

        foreach ($franchiseeInput as $key => $value) {
        	$salesTable->addRow([
              $key, $value
            ]);	
        }

        $chart = \Lava::LineChart('MyStocks', $salesTable);

        echo \Lava::render('LineChart', 'MyStocks', 'sales-chart');
?>


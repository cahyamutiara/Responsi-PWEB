<?php
if (!empty($_POST['name']) && !empty($_POST['distance']) && !empty($_POST['address'])) {
	$name = $_POST['name'];
	$distance = $_POST['distance'];
	$address = $_POST['address'];
	if (is_numeric($_POST['distance'])) {
		$deliveryPrice = ((int)$_POST['distance'] * 5000);
		$data = $name . ', ' . $address . ', ' . $distance . ', ' . $deliveryPrice . "\n";
		file_put_contents(getcwd() . '/data.txt', $data, FILE_APPEND);
		echo json_encode(array(
			'success' => 1,
			'deliveryPrice' => $deliveryPrice
		));
	}
	else {
		echo json_encode(array(
			'success' => 0,
			'message' => 'Jarak harus berupa bilangan bulat!'
		));
	}
} else {
	echo json_encode(array(
		'success' => 0,
		'message' => 'Harap isi data dengan lengkap!'
	));
}

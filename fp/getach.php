<?php
		
if (isset($_GET['vc']) && !empty($_GET['vc'])) {
	
	include 'global.php';
	include 'function.php';
	
	$datatb = getDeviceAcSn($_GET['vc']);
	
	echo $datatb[0]['ac'].$datatb[0]['sn'];
	
}


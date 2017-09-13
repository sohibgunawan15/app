<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<?php
$page=$_GET['r'];
switch ($page) {
	case 0:
        include('index.php');
    break;
    case 1:
        include('_view.php');
    break;
	case 99:
        include('_cekLogIn.php');
    break;
    default:
       echo "Pages Not Found";
}
?>
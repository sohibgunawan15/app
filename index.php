<!DOCTYPE html>
<?php
 $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if($pageWasRefreshed ) 
	echo'<script>window.location="login.php";</script>';  
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>.:: Gun Devep ::.</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="themes/color.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript" src="src/xtrail-min.js"></script>
</head>
<body class="easyui-layout"  >
	<div data-options="region:'north',border:false" style="auto;background:#B3DFDA;padding:10px;font-style: oblique;font-size:14px;">SISMTEM INFORMASI ALIBABA</div>
	<div data-options="region:'west',split:true,collapsed:false,title:'Menu',inline:true,border:'thin',cls:'c5'" style="width:200px;padding:10px;">
		<a id="" class="easyui-linkbutton"   data-options="iconCls:'icon-reload'" style="width:auto;" onclick="getSelected()">
			<span class="l-btn-icon icon-reload"> </span>
		</a>
		<ul id='tt' class="easyui-tree" data-options="url:'<?php echo basename(__DIR__); ?>/../datagride/tree_data1.json',method:'get',animate:true"></ul>
	</div>
	<div  data-options="region:'center',title:'Center',inline:true,border:'thin',cls:'c5'"  id="content">
	 
	</div>
	<div data-options="region:'south',border:false" style="height:20px;background:#A9FACD;text-align:center;">@ <?php echo date('Y'); ?></div>
</body>
</html>


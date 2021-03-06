<script src="/static/js/DataTables-1.10.11/media/js/jquery.dataTables.min.js"></script>
<link href="/themes/house/xuequ/images_index/index.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/static/js/DataTables-1.10.11/media/css/jquery.dataTables.min.css">

<style type="text/css">
table{ border-collapse:collapse; margin:0 auto;}
tr{ text-align:center; height:47px;}
td{ border:1px solid #d8d8d8;  }
.xuequ_posotion a:hover{ color:#FF6600}
.school_table { width:1013px;    margin: 10px auto;}
</style>
<?php
//$province = $_GET(province);
$province   = Yii::app()->request->getQuery('province', 'ON');

switch ($province) {
    case 'ON':
        $province_cname = '安大略省';
        break;
    case 'BC':
         $province_cname = 'BC省';
        break;
    case 'AB':
         $province_cname = '阿尔伯特省';
        break;
    
    default:
         $province_cname = '安大略省';
}

?>
<div class="xuequ">
	<div class="xuequ_wrap">
		<div class="xuequ_con">
			 <div class="xuequ_posotion">
				<P><a href="/">首页 &nbsp;&nbsp;>&nbsp;&nbsp;</a><a>学区专栏&nbsp;&nbsp;>&nbsp;&nbsp;</a></P>
			 </div>
			<div class="xuequ_top" style=" font-size:18px; margin-top:2px;">
				　<?php echo $province_cname;?>小学排名 ( 排名来源：The Fraser Institute 2014-2015)
			</div>
		</div >  
		
		<div class='school_table'>
			<table id="table_eschool" class="display" width="100%"></table>
		</div>
	</div>
			
	<div class="xuequ_wrap">
		<div class="xuequ_con">
			<div class="xuequ_top" style=" font-size:18px; margin-top:2px;">
				　<?php echo $province_cname;?>中学排名 ( 排名来源：The Fraser Institute 2014-2015)
			</div>
		</div> 
		
		<div class='school_table' >
			<table id="table_sschool" class="display" width="100%"></table>
		</div>
		
		<div style="height:13px; clear:both"></div>
    <div class="xqzl_pic"><a href="javascript:void(0);"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/enjoy/fctj.jpg" border="0" /></a></div>
                     
  
   
   </div>

</div>
<!-- 学区专栏结束 -->
<script type="text/javascript">
	

	 var province = '<?php echo $province;?>';	
	 $.ajax({
		url: 'index.php?r=column/getSchoolList',
		type: 'POST',
		dataType: 'json',
		data: {
			province: province,
			type: 'e'
		},
		success: function(result) {	
						
			//Start Table3
		    $('#table_eschool').DataTable( {
				"language":{
					"sProcessing":   "处理中...",
					"sLengthMenu":   "显示 _MENU_ 项结果",
					"sZeroRecords":  "没有匹配结果",
					"sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
					"sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
					"sInfoFiltered": "(由 _MAX_ 项结果过滤)",
					"sInfoPostFix":  "",
					"sSearch":       "搜索(学校 / 城市）:",
					"sUrl":          "",
					"sEmptyTable":     "表中数据为空",
					"sLoadingRecords": "载入中...",
					"sInfoThousands":  ",",
					"oPaginate": {
						"sFirst":    "首页",
						"sPrevious": "上页",
						"sNext":     "下页",
						"sLast":     "末页"
					},
					"oAria": {
						"sSortAscending":  ": 以升序排列此列",
						"sSortDescending": ": 以降序排列此列"
					}
				},
				data: result.SchoolList,
			    "aoColumnDefs": [            
					 {
					   "aTargets": [1], // Column to target
					   "mRender": function ( data, type, full ) {
						 // 'full' is the row's data object, and 'data' is this column's data
						 // e.g. 'full[0]' is the comic id, and 'data' is the comic title
						 return '<a href="/index.php?r=column/map&id=' + full[6] +'">' + data + '</a>';
					   }
					 }
				],
				columns: [
					{ title: "排名" },
					{ title: "学校" },
					{ title: "年级" },
					{ title: "地址" },
					{ title: "城市" },
					{ title: "电话" },
				],
				//"order": [[ 0, "asc" ]],
				"pageLength": 20

			
			} );			
			//Chart Province Start:House number by Province Bar chart			
			
		}
		
	 });
	 
	 
	 $.ajax({
		url: 'index.php?r=column/getSchoolList',
		type: 'POST',
		dataType: 'json',
		data: {
			province: province,
			type: 's'
		},
		success: function(result) {	
						
			//Start Table3
		    $('#table_sschool').DataTable( {
				"language":{
					"sProcessing":   "处理中...",
					"sLengthMenu":   "显示 _MENU_ 项结果",
					"sZeroRecords":  "没有匹配结果",
					"sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
					"sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
					"sInfoFiltered": "(由 _MAX_ 项结果过滤)",
					"sInfoPostFix":  "",
					"sSearch":       "搜索(学校 / 城市）:",
					"sUrl":          "",
					"sEmptyTable":     "表中数据为空",
					"sLoadingRecords": "载入中...",
					"sInfoThousands":  ",",
					"oPaginate": {
						"sFirst":    "首页",
						"sPrevious": "上页",
						"sNext":     "下页",
						"sLast":     "末页"
					},
					"oAria": {
						"sSortAscending":  ": 以升序排列此列",
						"sSortDescending": ": 以降序排列此列"
					}
				},
				data: result.SchoolList,
			    "aoColumnDefs": [            
					 {
					   "aTargets": [1], // Column to target
					   "mRender": function ( data, type, full ) {
						 // 'full' is the row's data object, and 'data' is this column's data
						 // e.g. 'full[0]' is the comic id, and 'data' is the comic title
						 return '<a href="/index.php?r=column/map&id=' + full[6] +'">' + data + '</a>';
					   }
					 }
				],
				columns: [
					{ title: "排名" },
					{ title: "学校" },
					{ title: "年级" },
					{ title: "地址" },
					{ title: "城市" },
					{ title: "电话" },
				],
				//"order": [[ 0, "asc" ]],
				"pageLength": 20

			
			} );			
			//Chart Province Start:House number by Province Bar chart			
			
		}
		
	 });
	 
 </script>




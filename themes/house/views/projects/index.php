<!-- 地址开始 -->
<div class="cl"></div>
<div class="nytb_dz">
    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">首页</a> > <a href="<?php echo Yii::app()->createUrl('projects/index'); ?>">项目推荐</a> 
</div>
<!-- 地址结束 -->
<!-- Projects List 开始 -->
<div class="enjoy">

    <div class="enjoydown">
        <div class="enjoydownlabel">
            <div class="enjoydownlabel_left">HOT<span> 热点推荐</span></div>
            <div class="enjoydownlabel_right">
                <span>共有<?php echo $count; ?>项目</span>
  
            </div>
        </div>
		
        <div class="enjoydowncont">
          
            <div class="enjoydown_two">
                <?php foreach($subject_list as $project){ ?>
                <div class="enjoydown_list">
                    <div class="enjoydown_list_pic">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $project->room_type_image; ?>" width="485" height="355"/>
                    </div>
                    <div class="enjoydown_list_info" style="display:block;">
                        <span class="enjoy_dz">项目名称：<?php echo $project->name; ?></span>
                        <span class="enjoy_zj"> 开发商：<i><?php echo $project->developer_intro; ?></i></span>
						  <span class="enjoy_zj"> 城市：<i><?php echo $project->cityname; ?></i></span>
                    </div>
                    <div class="enjoydown_list_xx" style="display:none;">
                        <a href="<?php echo Yii::app()->createUrl('projects/more',array('id'=>$project->id)); ?>" >
                            <span class="titlespan">项目名称:<?php echo $project->name; ?></span>
                            <span style="height: 120px; overflow: hidden;">
                                项目概况：<br /><?php echo strip_tags($project->summary); ?>
                            </span>
                          
                            <span>
                                 开发商<br /><i><?php echo $project->developer_intro; ?></i>
                            </span>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <div class="cl"></div>
                <div class="page">
                    <?php
                    $this->widget('CLinkPager',array(
                        'header'         =>'',
                        'firstPageLabel' => '',
                        'lastPageLabel'  => '',
                        'prevPageLabel'  => '<<',
                        'nextPageLabel'  => '>>',
                        'pages'          => $pages,
                        'maxButtonCount' => 6,
                        'cssFile'        => 'themes/house/css/pager.css'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 豪宅鉴赏结束 -->
<script type="text/javascript">
    //豪宅列表
    $(document).ready(function(){
        $(".enjoyup_tabup").find('[data-index="<?php echo $cur_city->id; ?>"]').addClass('spanon');
        
        $(".enjoydown_list").mouseover(function(){
            $(this).find('.enjoydown_list_info').hide();
            $(this).find('.enjoydown_list_xx').show();
        });
        $(".enjoydown_list").mouseout(function(){
            $(this).find('.enjoydown_list_info').show();
            $(this).find('.enjoydown_list_xx').hide();
        });

    });
</script>
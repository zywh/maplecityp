<link href="<?php echo $this->_baseUrl ?>/static/map/css/map.css" type="text/css" rel="stylesheet" />
<div class="cl" style="height:15px"></div>
<div class="main">
    <!-- map开始 -->
    <div class="mapobx">
        <div class="mapleft">
            <div class="mapleftup">
                <div class="dizhi" style="position:relative;">
                    <div class="dizhileft">
                        <input style="line-height:27px;color:#ccc" name="key" type="text" id="city" class="textbox" value="州名/市名(中英)"/></div>
                    <div class="dizhiright"><input name="" type="button" id="search-button"/></div>
                    <div class="map_keyword_search_list" style="max-height:270px;overflow-y:auto">
                        <table id="search_table"></table>
                    </div>
                    <div class="cl"></div>
                </div>
            </div>
            <div class="search_lp">
			
                <div class="search_lpleft"><!--<button>全屏</button> -->共有<span class="Houses_count">0</span>个楼盘<?php 
				if($_GET["type"]=="sale"){
					echo "<font color=red>出售</font>";
					}else{echo "<font color=red>出租</font>";}
			    ?>
				</div>
                <div class="search_lpright">
                    <div class="searchbox">默认</div>
                    <div class="search_tc">
                        <div class="searchboxdown" style="display:none;">
                            <span>默认</span>
                            <span data-value="1">价格：从高到低</span>
                            <span data-value="2">价格：从低到高</span>
                            <span data-value="3">日期：从后到前</span>
                            <span data-value="4">日期：从前到后</span>
                        </div>
                    </div>
                </div>
                <div class="cl"></div>
            </div>
            <div class="mapleftdown" id = "ul_house_list">
                <div class="fclistbox"></div>
            </div>
            <div class="mappage">
                <div class="mappageleft">第 <span id="pageIndex">1</span> 页 ，共 <span class="Houses_count">0</span> 套</div>
                <div class="mappageright">
                    <a href="javascript:;" id="house_prior" style="display: none;float:left">上一页</a>
                    <a href="javascript:;" id="house_next" style="float:right">下一页</a>
                    <div class="cl"></div>
                </div>
                <div class="cl"></div>
            </div>
        </div>
        <div class="mapright">
            <div class="maprightup">
                <div class="mapone">
                    <div class="map_lm">房屋类型：<span id="housetype_choose">不限</span></div>
                    <div class="map_downone" id="type_list" style="display:none;">
                        <a class="cur searchCondition" data-type="housetype" data-value='0' href="#">不限</a> 
                        <?php foreach ($houseType as $key => $val) { ?>
                            <a href="#" class="searchCondition" data-type="housetype" data-value='<?php echo $val->id ?>'><?php echo $val->name ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="mapone">
                    <div class="map_lm">价格区间：<span id="price_choose">不限</span></div>
                    <div class="map_downtwo" style="display:none;">
                        <div class="jgqj_up">
                            <div class="jqqj_one"><input name="" id="begin_price" type="text"  value="0"/></div>
                            <div class="jqqj_line">-</div>
                            <div class="jqqj_one"><input name="" id="end_price" type="text"  value="0"/></div>
                            <div class="qrbtn"><input name="" class="searchCondition" data-type="button_price" type="submit" value="确认" />
                            </div>
                        </div>
                        <div class="jgqj_down" id="price_list">
                            <a class="cur searchCondition" data-type="price" href="javascript:;" data-value="0,0">不限</a>  
                            <a href="javascript:;" class="searchCondition" data-type="price" data-value="0,100">100以下</a>  
                            <a href="javascript:;" class="searchCondition" data-type="price" data-value="100,300">100-300万</a>  
                            <a href="javascript:;" class="searchCondition" data-type="price" data-value="300,500">300-500万</a>  
                            <a href="javascript:;" class="searchCondition" data-type="price" data-value="500,700">500-700万</a>  
                            <a href="javascript:;" class="searchCondition" data-type="price" data-value="700,900">700-900万</a>  
                            <a href="javascript:;" class="searchCondition" data-type="price" data-value="900,0">900以上</a>
                        </div>
                    </div>
                </div>
                <div class="mapone">
                    <div class="map_lm">房型：<span id="room_choose">不限</span></div>
                    <div id="room_list" class="map_downthree" style="display:none;">
                        <a href="javascript:;" class="cur searchCondition" data-type="room" data-value='0'>不限</a>
                        <a href="javascript:;" class="searchCondition" data-type="room" data-value='1'>一卧室</a>
                        <a href="javascript:;" class="searchCondition" data-type="room" data-value='2'>两卧室</a>
                        <a href="javascript:;" class="searchCondition" data-type="room" data-value='3'>三卧室</a>	
                        <a href="javascript:;" class="searchCondition" data-type="room" data-value='4'>四卧室</a>
                        <a href="javascript:;" class="searchCondition" data-type="room" data-value='5'>五卧室</a>	
                        <a href="javascript:;" class="searchCondition" data-type="room" data-value='6'>五卧室以上</a>
                    </div>
                </div>
                <div class="mapone">
                    <div class="map_lm">更多 (3)</div>
                    <div class="map_downfour" style="display:none;">
                        <div class="map_nf">
                            <div class="map_four_title">建造年份</div>
                            <div class="map_nf_cont" id="year_list" >
                                <a class="cur searchCondition" data-type="year" href="javascript:;" data-value=''>不限</a>
                                <a href="javascript:;" class="searchCondition" data-type="year" data-value='New'>新房</a>
                                <a href="javascript:;" class="searchCondition" data-type="year" data-value='0-5'>0-5</a>
 								<a href="javascript:;" class="searchCondition" data-type="year" data-value='6-15'>6-15</a>
                                <a href="javascript:;" class="searchCondition" data-type="year" data-value='16-30'>16-30</a>
                                <a href="javascript:;" class="searchCondition" data-type="year" data-value='31-50'>31-50</a>	
                                <a href="javascript:;" class="searchCondition" data-type="year" data-value='51-99'>51-99</a>   
                                <a href="javascript:;" class="searchCondition" data-type="year" data-value='100+'>100+</a>   
                                
								<div class="cl"></div>
                            </div>
                        </div>
                        <div class="map_mj">
                            <div class="map_four_title">土地面积<span>[平方英尺]</span></div>
                            <div class="map_nf_cont" id="ground_list">
                                <a class="cur searchCondition" data-type="Ground" href="javascript:;" data-value='0,0'>全部</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='0,100'>100以下</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='100,200'>100-200</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='200,300'>200-300</a>	
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='300,400'>300-400</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='400,500'>400-500</a>	
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='500,600'>500-600</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='600,700'>600-700</a>	
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='700,800'>700-800</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='800,900'>800-900</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='900,1000'>900-1000</a>
                                <a href="javascript:;" class="searchCondition" data-type="Ground" data-value='1000,0'>1000以上</a> 
                                <div class="cl"></div>
                            </div>
                        </div>
                        <div>
                            <div class="map_four_title">卫生间数量</div>
                            <div id="bath_list" class="map_nf_cont">
                                <a href="javascript:;" class="cur searchCondition" data-type="baths" data-value='0'>不限</a>
                                <a href="javascript:;" class="searchCondition" data-type="baths" data-value='1'>1</a>
                                <a href="javascript:;" class="searchCondition" data-type="baths" data-value='2'>2</a>
                                <a href="javascript:;" class="searchCondition" data-type="baths" data-value='3'>3</a>	
                                <a href="javascript:;" class="searchCondition" data-type="baths" data-value='4'>4</a>
                                <a href="javascript:;" class="searchCondition" data-type="baths" data-value='5'>5</a>	
                            </div>
                        </div>
                    </div>
                </div>
                <!--                <div class="mapone maptwo"><div class="map_lm map_lm_cur">鸟瞰地图</div></div>
                                <div class="mapone maptwo mapthree"><div class="map_lm">道路地图</div></div>-->
            </div>
            <div class="maprightdown">
				<div class="map_flash" id="google_map">	</div>
				
				
            </div>
            <div class="map_cp">
                <div class="map_cpone">周边设施</div>
                <div class="map_cplist">
                    <a href="javascript:;" class="Search_local" data-value="school">
                        <div class="map_cplist_left"><img src="<?php echo $this->_baseUrl ?>/static/map/images/m1.jpg" /></div>
                        <div class="map_cplist_right">学校</div>
                    </a>
                </div>
                <div class="map_cplist">
                    <a href="javascript:;" class="Search_local" data-value="restaurant">
                        <div class="map_cplist_left"><img src="<?php echo $this->_baseUrl ?>/static/map/images/m2.jpg" /></div>
                        <div class="map_cplist_right">餐饮</div>
                    </a>
                </div>
                <div class="map_cplist">
                    <a href="javascript:;" class="Search_local" data-value="bus_station">
                        <div class="map_cplist_left"><img src="<?php echo $this->_baseUrl ?>/static/map/images/m3.jpg" /></div>
                        <div class="map_cplist_right">交通</div>
                    </a>
                </div>
                <div class="map_cplist">
                    <a href="javascript:;" class="Search_local" data-value="grocery_or_supermarket">
                        <div class="map_cplist_left"><img src="<?php echo $this->_baseUrl ?>/static/map/images/m4.jpg" /></div>
                        <div class="map_cplist_right">购物</div>
                    </a>
                </div>
                <div class="map_cplist">
                    <a href="javascript:;" class="Search_local" data-value="hospital">
                        <div class="map_cplist_left"><img src="<?php echo $this->_baseUrl ?>/static/map/images/m5.jpg" /></div>
                        <div class="map_cplist_right">医院</div>
                    </a>
                </div>
                <div class="map_cplist">
                    <a href="javascript:;" class="Search_local" data-value="bank">
                        <div class="map_cplist_left"><img src="<?php echo $this->_baseUrl ?>/static/map/images/m6.jpg" /></div>
                        <div class="map_cplist_right">银行</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="cl"></div>
</div>;

<!-- map结束 -->
<div class="loadhouse">
    正在加载房源数据，请稍候...
</div>
</div>

<script type="text/javascript" src="/static/map/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="/static/map/js/markercluster.js"></script>

<script>
    //$(document).ready(function() {
	$(function(){	
		
		console.log(gd + ":" + flashgdtop);
		$(".fullscreen").click(function(){
			
			$(this).text(function(i, text){
				return text === "全屏" ? "恢复" : "全屏";
			})
			$(".head").slideToggle();
			$(".topdl").slideToggle();
			
			$(".nav").slideToggle("slow", function(){
			var kd = $(window).width();
			var gd = $(window).height();
			var flashgdtop = $(".map_flash").offset().top;
			var flashgd = gd - flashgdtop;
			console.log(gd + ":" + flashgdtop);
			//var flashgd = gd;
			$(".map_flash").css({height: flashgd - 39});
			$(".mapleftdown").css({height: flashgd - 42});
			});
			
		});
		
        $(".map_lm").mouseover(function() {
            $(this).next().show();
        });

        $(".mapone").mouseover(function() {
            $(this).find(".map_downone").show();
        });

        $(".mapone").mouseout(function() {
            $(this).find(".map_downone").hide();
        });

        $(".mapone").mouseover(function() {
            $(this).find(".map_downtwo").show();
        });

        $(".mapone").mouseout(function() {
            $(this).find(".map_downtwo").hide();
        });

        $(".mapone").mouseover(function() {
            $(this).find(".map_downthree").show();
        });

        $(".mapone").mouseout(function() {
            $(this).find(".map_downthree").hide();
        });

        $(".mapone").mouseover(function() {
            $(this).find(".map_downfour").show();
        });

        $(".mapone").mouseout(function() {
            $(this).find(".map_downfour").hide();
        });

        $(".map_wsj_center").mouseover(function() {
            $(".map_wsj_tc").show();
        });
        $(".map_wsj_center").mouseout(function() {
            $(".map_wsj_tc").hide();
        });
        $(".map_wsj_tc dd").click(function() {
            var val = $(this).text();
            $(".map_wsj_sl").text(val);
        });

        //控制高度达到全屏		
        var kd = $(window).width();
        var gd = $(window).height();
        var flashgdtop = $(".map_flash").offset().top;
        var flashgd = gd - flashgdtop;
		console.log("Initial:" + gd + ":" + flashgdtop);
        $(".map_flash").css({height: flashgd - 39});
        $(".mapleftdown").css({height: flashgd - 42});

        window.onresize = function() {
            var kd = $(window).width();
            var gd = $(window).height();
            var flashgdtop = $(".map_flash").offset().top;
            var flashgd = gd - flashgdtop - 39;
            $(".map_flash").css({height: flashgd });
            $(".mapleftdown").css({height: flashgd - 42});
        }
    });

    //google map
    var map;
    var mapInfo = null;
    var mapMark = null;
    var mapCenter;
    var mapZoom = 11;
    var infowindow = [];
    var markerArray = [];
    var markers = [];
    var HouseArray = [];
    var HouseAreaArray = [];
    var publicArray = [];
    var mapisInit = true;

    var map_type = "";
    var map_price = "";
    var map_room = "";
    var map_year = "";
    var map_Ground = "";
    var map_Baths = "";
    var orderby = 0;
    var country = "";
    var city = '';
    var district = '';
    var local_type;
    var mapOptions;
    var pageIndex = 1;
	var markerClusterer = null;
    mapOptions = {
        center: new google.maps.LatLng(43.6686333, -79.4450250),
        zoom: 17,
        zoomControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        minZoom: 6,
        overviewMapControl: true,
        overviewMapControlOptions: {opened: true}
    };
    map = new google.maps.Map(document.getElementById("google_map"), mapOptions);
	
	//Add Full screen button
	mapCenter = map.getCenter();

    
    mapZoom = map.getZoom();
    google.maps.event.addListener(map, "bounds_changed", function() {
        if (mapZoom != map.getZoom()) {
            changeMap();
        }
    });
    google.maps.event.addListener(map, 'dragend', function() {
        changeMap();
    });

    //汇率
    var getRate = function(code) {
        return '加元';
    }
    var googleMap = {
        //向地图添加信息内容
        setContent: function(lat, lng, content, html, isShow, index) {
            var point = new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
            var marker = new RichMarker({
                position: point,
                map: map,
                draggable: false,
                content: content,
                flat: true
            });
            markerArray.push(marker);
            var info = new google.maps.InfoWindow({
                content: html,
                size: new google.maps.Size(50, 50),
                pixelOffset: new google.maps.Size(0, -24)
            });
            infowindow.push(info);
            google.maps.event.addListener(marker, 'click', function(e) {
                for (i = 0; i < infowindow.length; i++) {
                    infowindow[i].close();
                }
                info.open(map, marker);
                googleMap.setMapView(parseFloat(lat), parseFloat(lng), mapZoom);
                if (mapZoom > 8)
                {
                    $("li.first_li").remove();
                    $(".fclistbox").html(HouseArray[index] + $(".fclistbox").html());
                }
            });
            if (isShow) {
                for (i = 0; i < infowindow.length; i++) {
                    infowindow[i].close();
                }
                info.open(map, marker);
                googleMap.setMapView(parseFloat(lat), parseFloat(lng), mapZoom);
            }
            //marker z-index
          // google.maps.event.addListener(marker, 'mouseover', function() {
          //     this.setZIndex(google.maps.Marker.MAX_ZINDEX + 1);
          // });
          // google.maps.event.addListener(marker, 'mouseout', function() {
          //     this.setZIndex(google.maps.Marker.MAX_ZINDEX - 2);
          // });
        }, //在地图添加房源数量信息
        setContentCount: function(lat, lng, totalCount,city) {
			var content = "<i class='common_bg icon_map_mark'><span>" + totalCount + "</span></i>";
			var point = new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
			//console.log(lat + ":" + lng +":" + totalCount +":" + city);
            
			//var marker = new google.maps.Marker({
			//		position: point,
			//		label: city,
			//		map: map
			//	 
			//});

			var marker = new RichMarker({
                position: point,
                map: map,
                draggable: false,
                content: content,
                flat: true
            });
            markerArray.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                
                    //var showList = '<p style="margin-bottom:0px;">共有' + totalCount + '个楼盘</p>' + list;
                    var showList = '<p style="margin-bottom:0px;">' + city +' 共有' + totalCount + '个楼盘</p>';
                                        
					var infowindow = new google.maps.InfoWindow({
                        content: showList
                    });
                    infowindow.open(map, marker);
                
            });

            //marker z-index
            google.maps.event.addListener(marker, 'mouseover', function() {
                this.setZIndex(google.maps.Marker.MAX_ZINDEX + 1);
            });
            google.maps.event.addListener(marker, 'mouseout', function() {
                this.setZIndex(google.maps.Marker.MAX_ZINDEX - 2);
            });
        }, ///本地信息
        createMarker: function(place) {
            var placeLoc = place.geometry.location;
            var html;
			var iconbase="/static/map/images/";
			var iconurl;

            if (local_type == "school") {
                html = "<i class='homelist icon_scool3'></i>";
				iconurl= iconbase + "m1.jpg";
            }
            else if (local_type == "restaurant") {
                html = "<i class='homelist icon_dining3'></i>";
				iconurl= iconbase + "m2.jpg";
            } else if (local_type == "bus_station") {
                html = "<i class='homelist icon_traffic3'></i>";
				iconurl= iconbase + "m3.jpg";
            } else if (local_type == "grocery_or_supermarket") {
                html = "<i class='homelist icon_shopping3'></i>";
				iconurl= iconbase + "m4.jpg";
            } else if (local_type == "hospital") {
                html = "<i class='homelist icon_hospital3'></i>";
				iconurl= iconbase + "m5.jpg";
            } else if (local_type == "bank") {
                html = "<i class='homelist icon_bank3'></i>";
				iconurl= iconbase + "m6.jpg";
            } else {
                html = "<i class='common_bg icon_map_mark'></i>";
            }
            //var marker = new RichMarker({
            //    position: place.geometry.location,
            //    map: map,
            //    draggable: false,
            //    flat: true,
            //    content: html
            //});
			var infowindow = new google.maps.InfoWindow();
			var currentMark;
			var marker = new google.maps.Marker({
					map: map,
					position: place.geometry.location,
					icon: iconurl
			});
			google.maps.event.addListener(marker, 'mouseover', function() {
					infowindow.setContent(place.name);
					infowindow.open(map, this);
					currentMark = this;
			});
			google.maps.event.addListener(marker, 'mouseout', function() {
					currentMark.setMap(null);
					//infowindow.setContent(place.name);
					//infowindow.open(map, this);
			});

            publicArray[publicArray.length] = marker;
        }, //清空所有信息内容
        clearAll: function(map) {
            if (markerArray) {
                for (var i in markerArray) {
                    markerArray[i].setMap(null);
                }
                markerArray.length = 0;
            }
			if (markerClusterer) {
				//console.log("Clear Cluster Markers");
                markerClusterer.clearMarkers();
			}


            if (infowindow) {
                for (var i in infowindow) {
                    infowindow[i] = null;
                }
                infowindow.length = 0;
            }
            if (publicArray) {
                for (var i in publicArray) {
                    publicArray[i].setMap(null);
                }
                publicArray.length = 0;
            }
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
        }, ///设置地图位置大小
        setMapView: function(lat, lng, zoom) {
//            map.setCenter(new google.maps.LatLng(parseFloat(lat), parseFloat(lng)));
            map.setZoom(parseInt(zoom));
        },
        localSearh: function(searchName) {
            request = {
                location: mapCenter,
                radius: '10000',
                types: [local_type]
            };
            service = new google.maps.places.PlacesService(map);
            service.search(request, function(results, status) {
                if (publicArray) {
                    for (var i in publicArray) {
                        publicArray[i].setMap(null);
                    }
                    publicArray.length = 0;
                }
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        googleMap.createMarker(results[i]);
                    }
                }
            });
        }
    };

    var changeMap = function() {
        googleMap.clearAll(map);
        mapCenter = map.getCenter();
		//console.log("Start changeMap");
        mapZoom = map.getZoom();
        var _sw = map.getBounds().getSouthWest();
        var _ne = map.getBounds().getNorthEast();
        var centerlat = (_ne.lat() + _sw.lat()) / 2;
        var centerlng = (_ne.lng() + _sw.lng()) / 2;
		//Get Marker position
		var b_lat = _ne.lat() - ( _ne.lat() - _sw.lat() ) * 0.07  ;
		var b_lng = _ne.lng() + (_sw.lng() - _ne.lng()) * 0.85;
		//console.log("NE_LAT:" + _ne.lat() + "SW_LAT:" + _sw.lat() + "B_LAT:" + b_lat + "LNG:" + centerlng);
		var b_point = new google.maps.LatLng(b_lat, b_lng);
		//Add Full SCREEN Button
		var content = "<button class=\"fsbutton\">全屏</button>";
		var markerfs = new RichMarker({
			position: b_point,
			map: map,
			draggable: true,
			content: content,
			flat: true
		});
		markerArray.push(markerfs);
		google.maps.event.addListener(markerfs, 'click', function() {
			$(".fsbutton").text(function(i, text){
					return text === "全屏" ? "恢复" : "全屏";
			});
			$(".head").slideToggle();
			$(".topdl").slideToggle();
			
			$(".nav").slideToggle("slow", function(){
			var kd = $(window).width();
			var gd = $(window).height();
			var flashgdtop = $(".map_flash").offset().top;
			var flashgd = gd - flashgdtop;
			console.log("Button is clicked:" + gd + ":" + flashgdtop);
			//var flashgd = gd;
			$(".map_flash").css({height: flashgd - 39});
			$(".mapleftdown").css({height: flashgd - 42});
			}); 
				
		});
		
        var number1 = _sw.lat() + "," + _sw.lng() + "," + centerlat + "," + centerlng;
        var number2 = centerlat + "," + centerlng + "," + _ne.lat() + "," + _ne.lng();
        var number3 = centerlat + "," + _sw.lng() + "," + _ne.lat() + "," + centerlng;
        var number4 = _sw.lat() + "," + centerlng + "," + centerlat + "," + _ne.lng();
        var lenght = 1;
        if (city == '州名/市名(中英)') {
            city = '';
        }
		
        $(".Houses_count").text("0");
        HouseArray = [];
        var forIndex = 0;
        var Arrayindex = 0;
        var city = $.trim($('#city').val());
	
		_bounds = _sw.lat() + "," + _sw.lng() + "," + _ne.lat() + "," + _ne.lng();
		map_type = getUrlParam('cd4') ? getUrlParam('cd4') : map_type;
		map_price = getUrlParam('cd5') ? getUrlParam('cd5') : map_price;
		map_room = getUrlParam('cd8') ? getUrlParam('cd8') : map_room;
		map_year = getUrlParam('cd9') ? getUrlParam('cd9') : map_year;
		map_Ground = getUrlParam('cd7') ? getUrlParam('cd7') : map_Ground;
		country = getUrlParam('cd1') ? getUrlParam('cd1') : country;
		district = getUrlParam('cd2') ? getUrlParam('cd2') : district;
		$.ajax({
			url: '<?php if($_GET["type"]=="sale"){echo Yii::app()->createUrl('map/GetMapHouse');}else{echo Yii::app()->createUrl('map/GetMapczHouse');} ?>',
			type: 'POST',
			dataType: 'json',
			data: {
				bounds: _bounds,
				zoom: mapZoom,
				housetype: map_type,
				houseprice: map_price,
				houseroom: map_room,
				houseyear: map_year,
				houseground: map_Ground,
				housebaths: map_Baths,
				orderby: orderby,
				country: country,
				city: city,
				district: district
			},
			beforeSend: function() {
				$(".loadhouse").show();
			},
			complete: function() {
				$(".loadhouse").hide();
			},
			success: function(data) {
				forIndex++;
				if (!data.IsError) {
					
					var maxMarkers = 2000;
					var houseCount = data.Data.Total;
					//console.log("ZoomLevel:" + mapZoom + ":" + houseCount);
					
					//Start Mark City House Count if maxMarkers is exceeded
					if ( houseCount  >= maxMarkers) {
						//console.log("maxMarker exceed");
						//$(".Houses_count").text(houseCount);
						//console.log("Start City Marker:ZoomLevel:" + mapZoom + ":" + houseCount);
						for (var p in data.Data.AreaHouseCount) {
							var html = "";
                         	var areaHouse = data.Data.AreaHouseCount[p];
//                                if (mapZoom >= 6) {
//                                    html = "<span class='maplist icon_map_house6' title='" + areaHouse['Count'].NameCn + "'>" + areaHouse['Count'].HouseCount + "套</span>";
//                                } else {
							html = "<span class='maplist icon_map_house5' title='" + areaHouse['Count'].NameCn + "'>" + areaHouse['Count'].HouseCount + "套</span>";
//                                }
							//console.log(areaHouse['Count'].NameCn + ":" + data.Data.AreaHouseCount[p].Count.GeocodeLat + ":" + areaHouse['Count'].HouseCount);

							//弹出的房屋列表
							var houseList = '';
							$.each(areaHouse['List'], function() {
								var imgurl = "/" + this.CoverImg;
								var BuildYear = "";
								if (this.BuildYear != null && this.BuildYear > 100) {
									BuildYear = (new Date()).getFullYear() - this.BuildYear + "年";
								} else {
									BuildYear = "不详";
								}
								
								houseList += "<div style='width:330px;' class='fclist' index='" + Arrayindex + "' type='" + (this.Beds > 0 ? this.Beds + "卧" : "") + (this.Baths > 0 ? this.Baths + "卫 " : "") + (this.Kitchen > 0 ? this.Kitchen + "厨" : "") + "' lat='" + this.GeocodeLat + "' lng='" + this.GeocodeLng + "' Address='" + this.Address + "' imgurl='" + imgurl + "' Price='" + this.Price + "' HouseType='" + this.HouseType + "' Id='" + this.Id + "' Country=" + this.Country + " Money=" + this.Money + " ><a style='width:300px;display:block;' href='<?php echo Yii::app()->createUrl('house/view'); ?>&id=" + this.Id + "' target='_blank'><div class='fclistleft' style='width:130px;padding-left:5px'><div class='house_pic'><img src='<?php echo Yii::app()->request->baseUrl; ?>" + imgurl + "' style='width:121px;height:86px' alt='" + this.MunicipalityName + "房产_" + this.Area2Name + "房产_" + this.MunicipalityName + this.Area2Name + this.HouseType + "房产' /><p class='house_no1 fc_title' style='margin-bottom:0px'><span>" + this.Price + "万" + getRate(this.Money) + "</span></p></div></div><div class='fclistright' style='width:150px;'><div class='house_con2'><p>类型：" + this.HouseType + "</p><p>城市：" + this.MunicipalityName + "</p><p>地址：" + this.Address + "</p><p>户型：" + (this.Beds > 0 ? this.Beds + "卧" : "") + (this.Baths > 0 ? this.Baths + "卫 " : "") + (this.Kitchen > 0 ? this.Kitchen + "厨" : "") + "</p></div></div><div class='cl'></div></a></div>";
							})
							//googleMap.setContentCount(data.Data.AreaHouseCount[p].Count.GeocodeLat, data.Data.AreaHouseCount[p].Count.GeocodeLng, html, 0, houseList, areaHouse['Count'].HouseCount);
							googleMap.setContentCount(areaHouse['Count'].GeocodeLat, areaHouse['Count'].GeocodeLng, areaHouse['Count'].HouseCount,areaHouse['Count'].NameCn );
							
//                                }
						}
					}
					
					//End of City Markers
					
					
					//Mark House if house count is in limit
					if ( houseCount < maxMarkers) {
					
						$(data.Data.MapHouseList).each(function(index) {
		
						var imgurl = "/" + this.CoverImg;
						var BuildYear = "";
						if (this.BuildYear != null && this.BuildYear > 100) {
							BuildYear = (new Date()).getFullYear() - this.BuildYear + "年";
						} else {
							BuildYear = "";
						}
						//var li = "<div class='fclist' onclick='openInfo(" + index + ", this)' index='" + Arrayindex + "' type='" + (this.Beds > 0 ? this.Beds + "卧" : "") + (this.Baths > 0 ? this.Baths + "卫 " : "") + (this.Kitchen > 0 ? this.Kitchen + "厨" : "") + "' Jd='" + this.Id + "'  lat='" + this.GeocodeLat + "' lng='" + this.GeocodeLng + "' Address='" + this.Address + "' imgurl='" + imgurl + "' Price='" + this.Price + "' HouseType='" + this.HouseType + "' Id='" + this.Id + "' Country=" + this.Country + " Money=" + this.Money + " ><a href='javascript:;'><div class='fclistleft'><div class='house_pic'><img src='<?php echo Yii::app()->request->baseUrl; ?>" + imgurl + "' style='width:151px;height:116px' alt='" + this.MunicipalityName + "房产_" + this.Area2Name + "房产_" + this.MunicipalityName + this.Area2Name + this.HouseType + "房产' /></div></div><div class='fclistright'><div class='house_con2'><p class='house_no1 fc_title'><i>" + (Arrayindex + 1) + "</i><span>" + this.Price + "万" + getRate(this.Money) + "</span></p><p>类型：" + this.HouseType + "&nbsp;&nbsp;&nbsp;城市：" + this.MunicipalityName + "</p><p>地址：" + this.Address + "</p><p>户型：" + (this.Beds > 0 ? this.Beds + "卧" : "") + (this.Baths > 0 ? this.Baths + "卫 " : "") + (this.Kitchen > 0 ? this.Kitchen + "厨" : "") + "</p></div></div><div class='cl'></div></a></div>";
						var li = "<div class='fclist' onmouseover='openInfo(" + index + ", this)' index='" + Arrayindex + "' type='" + (this.Beds > 0 ? this.Beds + "卧" : "") + (this.Baths > 0 ? this.Baths + "卫 " : "") + (this.Kitchen > 0 ? this.Kitchen + "厨" : "") + "' Jd='" + this.Id + "'  lat='" + this.GeocodeLat + "' lng='" + this.GeocodeLng + "' Address='" + this.Address + "' imgurl='" + imgurl + "' Price='" + this.Price + "' HouseType='" + this.HouseType + "' Id='" + this.Id + "' Country=" + this.Country + " Money=" + this.Money + " ><a href='javascript:;'><div class='fclistleft'><div class='house_pic'><img src='<?php echo Yii::app()->request->baseUrl; ?>" + imgurl + "' style='width:151px;height:116px' alt='" + this.MunicipalityName + "房产_" + this.Area2Name + "房产_" + this.MunicipalityName + this.Area2Name + this.HouseType + "房产' /></div></div><div class='fclistright'><div class='house_con2'><p class='house_no1 fc_title'><i>" + (Arrayindex + 1) + "</i><span>" + this.Price + "万" + getRate(this.Money) + "</span></p><p>类型：" + this.HouseType + "&nbsp;&nbsp;&nbsp;城市：" + this.MunicipalityName + "</p><p>地址：" + this.Address + "</p><p>户型：" + (this.Beds > 0 ? this.Beds + "卧" : "") + (this.Baths > 0 ? this.Baths + "卫 " : "") + (this.Kitchen > 0 ? this.Kitchen + "厨" : "") + "</p></div></div><div class='cl'></div></a></div>";

						HouseArray[Arrayindex] = li;

						tlat = parseFloat(this.GeocodeLat);
						tlng = parseFloat(this.GeocodeLng);
						var content = "<i class='common_bg icon_map_mark'><span>" + (Arrayindex + 1) + "</span></i>";
						//var content = "<i class='common_bg icon_map_mark'></i>";
						var html = "<div class='map_info_title'>" + this.Address + "</div><div class='map_info_content'><div class='map_info_left'><img src='<?php echo Yii::app()->request->baseUrl; ?>" + imgurl + "' style='width:188px;height:148px'/></div><div class='map_info_right'><p class='orange map_info_price'><i class='common_bg'></i><span>价 格：</span><strong class='orange strong_width'>" + this.Price + "</strong><strong class='orange'>万" + getRate(this.Money) + "</strong><br /></p><p><a href='<?php echo Yii::app()->createUrl('house/view'); ?>&id=" + this.Id + "' target='_blank'>查看详情</a></p><p class='map_info_address'><i class='common_bg'></i>地 址：" + this.Address + "</p><p class='map_info_phone'><i class='common_bg'></i>类型：" + this.HouseType + "</p><p class='map_info_type'><i class='common_bg'></i>户 型：" + this.Beds + "卧 " + this.Baths + "卫 " + this.Kitchen + "厨</p></div><div class='clear'></div></div>";
						googleMap.setContent(tlat, tlng, content, html, false, Arrayindex);
						Arrayindex++;

					});
					
						markerClusterer = new MarkerClusterer(map, markerArray); //David
					}
				}
				if (lenght == forIndex) {
					//console.log("Build Left list");
					//$(".Houses_count").text(HouseArray.length % 100 == 0 ? HouseArray.length + "+" : HouseArray.length);
					//$(".house_count").text(HouseArray.length % 100 == 0 ? HouseArray.length + "+" : HouseArray.length);
					$(".Houses_count").text(houseCount);
					$(".house_count").text(houseCount);
										
					var tableHtml = "";
					$.each(HouseArray, function(index) {
						if (index < 10) {
							if (HouseArray[index]) {
								tableHtml = tableHtml + HouseArray[index];
							}
						}
					});
					if (Math.ceil(HouseArray.length / 10.00) < 1) {
						$('#house_next').hide();
					}
					$("#ul_house_list").html(tableHtml);
					pageIndex = 1;
					$("#pageIndex").text(pageIndex);
				}
			}
		});
        
    }
    var search_box = function() {
        if ($("#search_table").html() != "") {
            $(".dizhileft").attr("style", "overflow-y:hidden;overflow-x:hidden");
        } else {
            $(".dizhileft").attr("style", "height:27px;");
        }
    }

    var openInfo = function(num, obj) {
        num = num + 1;
        var info = $(obj);
        var html = "<div class='map_info_title'>" + $(info).attr("Address") + "</div><div class='map_info_content'><div class='map_info_left'><img src='<?php echo Yii::app()->request->baseUrl; ?>" + $(info).attr("imgurl") + "' style='width:188px;height:148px'/></div><div class='map_info_right'><p class='orange map_info_price'><i class='common_bg'></i><span>价 格：</span><strong class='orange strong_width'>" + $(info).attr("Price") + "</strong><strong class='orange'>万" + getRate($(info).attr("Money")) + "</strong><br /></p><p><a class='preferential common_bg' target='blank'  href='<?php echo Yii::app()->createUrl('house/view'); ?>&id=" + $(info).attr("Id") + "'>查看详情</a></p><p class='map_info_address'><i class='common_bg'></i>地 址：" + $(info).attr("Address") + "</p><p class='map_info_phone'><i class='common_bg'></i>类型：" + $(info).attr("HouseType") + "</p><p class='map_info_type'><i class='common_bg'></i>户 型：" + $(info).attr("type") + "</p></div><div class='clear'></div></div>";         //打开房产信息
        googleMap.setContent($(info).attr("lat"), parseFloat($(info).attr("lng")), "<i class='common_bg icon_map_mark'><span>" + num + "</span></i>", html, true, $(info).attr("index"));
    }

    $(function() {
        $('.loadhouse').css({
            left: ($(window).width()) / 2,
            top: ($(window).height()) / 2
        });

        //上一页
        $("#house_prior").click(function() {
            if (pageIndex > 1) {
                var tableHtml = "";
                pageIndex = pageIndex - 1;
                var pageNumber = Math.ceil(HouseArray.length / 10.00);
                $("#house_next").hide();
                if (pageIndex < 2) {
                    $("#house_prior").hide();
                }
                $("#house_next").show();
                $.each(HouseArray, function(index) {
                    if (index < 10 * pageIndex && (10 * (pageIndex - 1)) <= index) {
                        tableHtml = tableHtml + this;
                    }
                });
                $("#ul_house_list").html(tableHtml);
                $("#pageIndex").text(pageIndex);
            } else {
                $("#house_prior").hide();
            }
        });

        //下一页
        $("#house_next").click(function() {
            var pageNumber = Math.ceil(HouseArray.length / 10.00);
            if (pageNumber > pageIndex) {
                var tableHtml = "";
                pageIndex = pageIndex + 1;
                $("#house_prior").show();
                if (pageNumber == pageIndex) {
                    $("#house_next").hide();
                }
                $.each(HouseArray, function(index) {
                    if (index < 10 * pageIndex && (10 * (pageIndex - 1)) <= index) {
                        tableHtml = tableHtml + this;
                    }
                });
                $("#ul_house_list").html(tableHtml);
                $("#pageIndex").text(pageIndex);
            }
        });

        $(".Search_local").click(function() {
            local_type = $(this).attr("data-value");
            googleMap.localSearh(local_type);
        });

        //输入框变化
        $("#city").focus(function() {
            if ($(this).val() == "州名/市名(中英)") {
                changeURLArg('cd1', 0);
                changeURLArg('cd2', 0);
                $(this).val("");
                $(this).css('color', '#000');
            }
        });
        $("#city").click(function() {
            this.select();
        });
        $("#city").blur(function() {
            if ($(this).val() == "") {
                changeURLArg('cd1', 0);
                changeURLArg('cd2', 0);
                $(this).val("州名/市名(中英)");
                $(this).css('color', '#999');
                $("#search-button").click();
            }
            setTimeout('$("#search_table").html("");search_box();', 1000);
        });

        //点击搜索、按回车键、失去焦点执行搜索
        $('#search-button').click(function() {
            changeMap();
        })
        $("#city").keydown(function(event) {
            if (event.keyCode == 13) {
                $("#search-button").click();
                return false;
            }
        });
//        $("#city").blur(function(event) {
//            changeMap();
//        });

        $("#city").keyup(function() {
            var key = $(this).val().trim();
            if (key != "") {
                $.post("/index.php?r=map/getMapCity", {"cityName": key}, function(data) {
                    if (!data.IsError) {
                        var html1 = "";
                        var html2 = "";
                        if (key == $("#city").val()) {
                            $.each(data.Data, function(index, value) {
                                var text = this.NameCn;
                                var demo = text.substr(text.toUpperCase().indexOf(key.toUpperCase()), key.length);
                                html1 = "<tr><th>州/省</th><td><a href='JavaScript:void(0)' class='search_city' Id='" + this.CityId + "' ProvinceId='" + this.ProvinceId + "' lat='" + this.GeocodeLat + "' lng='" + this.GeocodeLng + "' zoom='" + (this.MinZoom + 1) + "'>" + text.replace(demo, "<lable style='color:red'>" + demo + "</lable>") + "</a></td></tr>";
                            });
                            
                            $("#search_table").html(html1 + html2);
                            search_box();
                            $(".search_city").on('click', function() {
                                var lat = $(this).attr("lat");
                                var lng = $(this).attr("lng");
                                var zoom = parseInt($(this).attr("zoom"));
                                if (zoom == 1) {
                                    zoom = 4;
                                }
                                country = $(this).attr("Country");
                                var text = $(this).text();
                                googleMap.setMapView(lat, lng, zoom);
                                $("#city").val(text);
                                $("#search_table").html("");
                                //改变url
                                changeURLArg('cd1', $(this).attr("Id"));
//                                changeURLArg('cd2', $(this).attr("Id"));
                                changeMap();
                            });
                        }
                    }
                }, "json");
            }
        });


        $(".searchCondition").click(function() {
            var type = $(this).attr("data-type");
            var value = $(this).attr("data-value");
            var content = $.trim($(this).html());
            if (type == "housetype") {
                map_type = value;
                $("#type_list a").attr("class", "searchCondition");
                $(this).attr("class", "cur searchCondition");
                $('#housetype_choose').html(content);
                changeURLArg('cd4', map_type);
            } else if (type == "price") {
                map_price = value;
                $("#price_list a").attr("class", "searchCondition");
                $(this).attr("class", "cur searchCondition");
                $('#price_choose').html(content);
                changeURLArg('cd5', map_price);
            } else if (type == "room") {
                map_room = value;
                $("#room_list a").attr("class", "searchCondition");
                $(this).attr("class", "cur searchCondition");
                $('#room_choose').html(content);
                changeURLArg('cd8', map_room);
            } else if (type == "year") {
                map_year = value;
                $("#year_list a").attr("class", "searchCondition");
                $(this).attr("class", "cur searchCondition");
                changeURLArg('cd9', map_year);
            } else if (type == "Ground") {
                map_Ground = value;
                $("#ground_list a").attr("class", "searchCondition");
                $(this).attr("class", "cur searchCondition");
                changeURLArg('cd7', map_Ground);
            } else if (type == "button_price") {
                var begin_price = $("#begin_price").val();
                var end_price = $("#end_price").val();
                if (parseInt(begin_price) > parseInt(end_price)) {
                    $("#begin_price").val(parseInt(end_price));
                    $("#end_price").val(parseInt(begin_price));
                    begin_price = $("#begin_price").val();
                    end_price = $("#end_price").val();
                }
                else {
                    $("#begin_price").val(parseInt(begin_price));
                    $("#end_price").val(parseInt(end_price));
                }
                map_price = begin_price + "," + end_price;
                $('#price_choose').html(begin_price + ' - ' + end_price + '万');
                changeURLArg('cd5', map_price);
            } else if (type = "baths") {
                map_Baths = value;
                $("#bath_list a").attr("class", "searchCondition");
                $(this).attr("class", "cur searchCondition");
            }
            changeMap();
        });

        $(".search_lpright").mouseover(function() {
            $(".searchboxdown").show();
            $(".searchbox").addClass("searchbox_two");
        });
        $(".search_lpright").mouseout(function() {
            $(".searchboxdown").hide();
            $(".searchbox").removeClass("searchbox_two");
        });
        $(".searchboxdown span").click(function() {
            var val = $(this).text();
            $(".searchbox").text(val);
            orderby = parseInt($(this).attr("data-value"));
            changeMap();
            $(".searchboxdown").hide();
            $(".searchbox").removeClass("searchbox_two");
        });
        map.setZoom(parseInt(3));

        //选择默认选择项
        //房屋类型 cd4
        var cd4 = getUrlParam('cd4');
        var cd4Obj = $('#type_list a[data-value="' + cd4 + '"]');
        $('#type_list a').removeClass('cur');
        cd4Obj.addClass('cur');
        $('#housetype_choose').html(cd4Obj.html());
        //价格区间 cd5
        var cd5 = getUrlParam('cd5') ? getUrlParam('cd5') : '0,0';
        if (cd5 != '0,0') {
            var cd5Arr = cd5.split(',');
            $('#begin_price').val(cd5Arr[0]); 
            $('#end_price').val(cd5Arr[1]);
            $('#price_list a').removeClass('cur');
            $('#price_choose').html(cd5Arr[0] + '-' + cd5Arr[1] + '万');
        }else{
            $('#price_choose').html('不限');
        }
        //卧室数量 cd8
        var cd8 = getUrlParam('cd8');
        var cd8Obj = $('#room_list a[data-value="' + cd8 + '"]');
        $('#room_list a').removeClass('cur');
        cd8Obj.addClass('cur');
        $('#room_choose').html(cd8Obj.html());
        //建造年份 cd9
        var cd9 = getUrlParam('cd9');
        var cd9Obj = $('#year_list a[data-value="' + cd9 + '"]');
        $('#year_list a').removeClass('cur');
        cd9Obj.addClass('cur');
        //土地面积 cd9
        var cd7 = getUrlParam('cd9');
        var cd7Obj = $('#ground_list a[data-value="' + cd7 + '"]');
        $('#ground_list a').removeClass('cur');
        cd7Obj.addClass('cur');
    });




    //获取url参数
    var getUrlParam = function(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg);  //匹配目标参数
        if (r != null)
            return unescape(r[2]);
        return null; //返回参数值
    }

    //更改url参数
    var changeURLArg = function(arg, arg_val) {
        var url = window.location.href;
        if (getUrlParam(arg)) {
            var pattern = arg + '=([^&]*)';
            var replaceText = arg + '=' + arg_val;
            if (url.match(pattern)) {
                var tmp = '/(' + arg + '=)([^&]*)/gi';
                tmp = url.replace(eval(tmp), replaceText);
                window.history.replaceState('{}', '', tmp);
                return tmp;
            } else {
                if (url.match('[\?]')) {
                    window.history.replaceState('{}', '', url + '&' + replaceText);
                    return url + '&' + replaceText;
                } else {
                    window.history.replaceState('{}', '', url + '?' + replaceText);
                    return url + '?' + replaceText;
                }
            }
            window.history.replaceState(url + '\n' + arg + '\n' + arg_val);
            return url + '\n' + arg + '\n' + arg_val;
        }
    }
</script>

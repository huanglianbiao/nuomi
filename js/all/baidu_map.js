
 var txtCity=document.getElementById('txtCity');
    var txtResult=document.getElementById('txtResult');
    var txtSearch=document.getElementById('txtSearch');
    
    var map = new BMap.Map("bdMap");
   // console.log(map);
   	map.enableScrollWheelZoom();
   	
   	//获取当前城市位置
 	var nowCity = new BMap.LocalCity();	
	nowCity.get(bdGetPosition);
	function bdGetPosition(result){
		var cityName = result.name;
		
		txtCity.value = cityName;
		
	}
   	
   	
    var city=new BMap.LocalSearch(map,{renderOptions:{map:map,autoViewport:true}});  
    function search(){  
        txtResult.value=""
        map.clearOverlays(); 
        var c=txtCity.value;  
        city.search(c);
        var s=txtSearch.value;  
        var ls = new BMap.LocalSearch(c);  
        ls.search(s);  
        var i=1;  
        ls.setSearchCompleteCallback(function(rs){  
            if (ls.getStatus() == BMAP_STATUS_SUCCESS){  
                    for(j=0;j<rs.getCurrentNumPois();j++)  
                    {  
                        var poi=rs.getPoi(j);  
                        map.addOverlay(new BMap.Marker(poi.point)); 
                        txtResult.value+= poi.title+":" +poi.point.lng+","+poi.point.lat+'\n';  
                    }  
                    if(rs.getPageIndex!=rs.getNumPages())    
          {    
            ls.gotoPage(i);  
            i=i+1;  
          }  
            }});}  
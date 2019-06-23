var pres = ["贵州", "上海", "广东"]; 
        var cities = [
            ["贵阳", "遵义", "六盘水"],
            ["浦东", "浦西"],
            ["佛山", "深圳"]
        ];
       var areas = [
                      [
                         ["南明", "白云", "小河"],
                         ["刺水", "习水", "余庆"],
                         ["钟山区", "老鹰区", "城南"]
                     ],
                     [
                         ["浦东1区", "浦东2区", "浦东3区"],
                         ["浦西区1", "浦西区2", "浦西区3"]
                      ],
                      [
                         ["禅城", "佛山2区"],
                         ["深圳1区", "深圳2区"]
                      ]
            ]
        var preEle = document.getElementById("pre");
        var cityEle = document.getElementById("city");
        var areaEle = document.getElementById("area");
       
        for (var i = 0; i < pres.length; i++){
          var op = new Option(pres[i],i);
           preEle.options.add(op);
        }

  
        function fun(obj) {
            if (obj.value == -1) {
                cityEle.options.length = 0;
                areaEle.options.length = 0;
            }
            var val = obj.value;
            pIndex = obj.value;
          
            var cs = cities[val];
            
            var as = areas[val][0];
            cityEle.options.length = 0;
            areaEle.options.length = 0;
            for (var i = 0; i < cs.length; i++) {
                var op = new Option(cs[i], i);
                cityEle.options.add(op);
            }
            for (var i = 0; i < as.length; i++) {
                var op = new Option(as[i], i);
                areaEle.options.add(op);
            }
        }
        function fun2(obj) {
            var val = obj.selectedIndex;
            var as = areas[pIndex][val];
            areaEle.options.length = 0;
            for (var i = 0; i < as.length; i++) {
                var op = new Option(as[i], i);
                areaEle.options.add(op);
            }
        }
(function () {
    var _id = "193ba831b3e1ce11037f1622b0332425";
    while (document.getElementById("timer" + _id)) _id = _id + "0";
    document.write("<div id='timer" + _id + "' style='min-width:846px;height:144px;'></div>");
    var _t = document.createElement("script");
    _t.src = "//megatimer.ru/timer/timer.min.js?v=1";
    var _f = function (_k) {
        var l = new MegaTimer(_id, {
            "view": [1, 1, 1, 1],
            "type": {"currentType": "1", "params": {"usertime": true, "tz": "3", "utc": 1693670400 * 1000}},
            "design": {
                "type": "circle",
                "params": {
                    "width": "8",
                    "radius": "68",
                    "line": "gradient",
                    "line-color": ["#4a86e8", "#ff00ff"],
                    "background": "solid",
                    "background-color": "rgba(255,255,255,0.13)",
                    "direction": "direct",
                    "number-font-family": {
                        "family": "Open Sans",
                        "link": "<link href='//fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                    },
                    "number-font-size": "45",
                    "number-font-color": "#ffffff",
                    "separator-margin": "0",
                    "separator-on": true,
                    "separator-text": ":",
                    "text-on": true,
                    "text-font-family": {
                        "family": "Open Sans",
                        "link": "<link href='//fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                    },
                    "text-font-size": "15",
                    "text-font-color": "#ffffff"
                }
            },
            "designId": 8,
            "theme": "black",
            "width": 846,
            "height": 144
        });
        if (_k != null) l.run();
    };
    _t.onload = _f;
    _t.onreadystatechange = function () {
        if (_t.readyState == "loaded") _f(1);
    };
    var _h = document.head || document.getElementsByTagName("head")[0];
    _h.appendChild(_t);
}).call(this);
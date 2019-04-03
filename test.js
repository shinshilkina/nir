var needle = require("needle");
var cheerio = require("cheerio");
var async = require("async");

var aUrl = [];
aUrl[0] = "https://eda.ru/recepty/zavtraki";
aUrl[1] = "https://eda.ru/recepty/zagotovki";
aUrl[2] = "https://eda.ru/recepty/supy";
var RightUrl = [];
var myUrl = [];
myUrl[0] = "https://eda.ru/recepty/zavtraki/amerikanskie-bliny-30600";

var ind=0;

var q = async.queue(function(url){
        needle.get(url,function(err,res){
        if(err) throw(err);

        var $ = cheerio.load(res.body);

        $("a").each(function (i, elem) {
        //console.log($(this).attr("href"))
        address = $(this).attr("href");
        	if ((address.indexOf('/recepty/') > -1)&&(address.indexOf('/recepty/') < 1))
        	{
        		RightUrl[i] = 'https://eda.ru' + String($(this).attr("href"));
        		ind++;
        		//console.log(ind);
        		console.log(String(ind)+ ' '+ RightUrl[i]);
        	};
        });
        /*
        img = $(".img-thumb-item img");
        
        img.each(function(i,val){
            console.log($(val).attr("src").replace("50x50","640x640"));
            });
        */
        });
    },10);
var m = async.queue(function(url){
        needle.get(url,function(err,res){
        if(err) throw(err);

        var $ = cheerio.load(res.body);
        $(".recipe__name").each(function (i, elem) {
        //console.log($(this).attr("href"))
        //address = $(this).attr("h1");
        console.log($(this).text());
        console.log('good')
        	
        });
        /*
        img = $(".img-thumb-item img");
        
        img.each(function(i,val){
            console.log($(val).attr("src").replace("50x50","640x640"));
            });
        */
        });
    },10);

var i = 0;
while(aUrl.length > i)
{
    q.push(aUrl[i]);
    i++;
}
var n=0;
while(RightUrl.length > n)
{
    m.push(RightUrl[n]);
    n++;
}



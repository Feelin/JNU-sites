

$(document).ready(function(){

		if(getCookie("myid")){
			timestr = getCookie("myid");
			website = timestr;
		}
		else{
			var myDate = new Date();
			var timestr = myDate.getTime(); 
			website = "common";
		}

		setInterval(function(){$(".yun1").animate({left:'-=4'},80);},20);
		setInterval(function(){$(".yun2").animate({left:'-=2'},105);},20);
		
		$(".zhuhai,.enter2").click(function(){
			$(".zhuhai").unbind();
			clearTimeout(v);
			$(".zhuhai .layer").hide();
			$(".enter2").hide();
			$(".benbu").fadeOut("fast");
			$(".shenlv").fadeOut("fast");
			$(".huawen").fadeOut("fast");
			$(".t_huawen").fadeOut("fast");
			$(".t_zhuhai").fadeOut("fast");
			$(".t_shenlv").fadeOut("fast");
			$(".t_benbu").fadeOut("fast");							
			$(".header").animate({opacity:0},500,function(){$(".zhuhai").animate({left:270},500,function(){$(".container").animate({top:-1000},1000);});});
		
			setCookie("JnuFm",timestr,365);
			delCookie("myid");
			$.get(
				"php/addnewuser.php",
				{newid:timestr,city:"zh"}
				);
			getweather(timestr);
	        $(".uid").val(timestr);
	         getwebsite(website);
	         getfixed(timestr);
		});

		$(".benbu,.enter1").click(function(){
			$(".benbu").unbind();
			clearTimeout(t);
			$(".benbu .layer").hide();
			$(".enter1").hide();
			$(".zhuhai").fadeOut("fast");
			$(".shenlv").fadeOut("fast");
			$(".huawen").fadeOut("fast");
			$(".t_huawen").fadeOut("fast");
			$(".t_zhuhai").fadeOut("fast");
			$(".t_shenlv").fadeOut("fast");
			$(".t_benbu").fadeOut("fast");							
			$(".header").animate({opacity:0},500,function(){$(".benbu").animate({left:270},1000,function(){$(".container").animate({top:-1000},1000);});});
			setCookie("JnuFm",timestr,365);
			delCookie("myid");
			$.get(
				"php/addnewuser.php",
				{newid:timestr,city:"gz"}
				);
			getweather(timestr);
	        $(".uid").val(timestr);
	        getwebsite(website);
	        getfixed(timestr);
		});

		$(".shenlv,.enter3").click(function(){
			$(".shenlv").unbind();
			clearTimeout(m);
			$(".shenlv .layer").hide();
			$(".enter3").hide();
			$(".benbu").fadeOut("fast");
			$(".zhuhai").fadeOut("fast");
			$(".huawen").fadeOut("fast");
			$(".t_huawen").fadeOut("fast");
			$(".t_zhuhai").fadeOut("fast");
			$(".t_shenlv").fadeOut("fast");
			$(".t_benbu").fadeOut("fast");							
			$(".header").animate({opacity:0},500,function(){$(".shenlv").animate({left:270},500,function(){$(".container").animate({top:-1000},1000);});});
			setCookie("JnuFm",timestr,365);
			delCookie("myid");
			$.get(
				"php/addnewuser.php",
				{newid:timestr,city:"sz"}
				);
			getweather(timestr);
	        $(".uid").val(timestr);
	        getwebsite(website);
	        getfixed(timestr);
		});

		$(".huawen,.enter4").click(function(){
			$(".huawen").unbind();
			clearTimeout(n);
			$(".huawen .layer").hide();
			$(".enter4").hide();
			$(".benbu").fadeOut("fast");
			$(".shenlv").fadeOut("fast");
			$(".zhuhai").fadeOut("fast");
			$(".t_huawen").fadeOut("fast");
			$(".t_zhuhai").fadeOut("fast");
			$(".t_shenlv").fadeOut("fast");
			$(".t_benbu").fadeOut("fast");							
			$(".header").animate({opacity:0},500,function(){$(".huawen").animate({left:270},1000,function(){$(".container").animate({top:-1000},1000);});});
			setCookie("JnuFm",timestr,365);
			delCookie("myid");
			$.get(
				"php/addnewuser.php",
				{newid:timestr,city:"gz"}
				);

	        getweather(timestr);
	        $(".uid").val(timestr);
	        getwebsite(website);
	        getfixed(timestr);
		});
		

		$(".a_benbu").mouseenter(function(){
			t = setTimeout(function(){$(".benbu .layer").fadeIn("fast");$(".enter1").fadeIn("fast");},200);

			
			});

	
		$(".a_benbu").mouseleave(function(){
			
			clearTimeout(t);

			$(".benbu .layer").fadeOut("fast");
			$(".enter1").fadeOut("fast");
			});

		$(".a_zhuhai").mouseenter(function(){
			v = setTimeout(function(){$(".zhuhai .layer").fadeIn("fast");$(".enter2").fadeIn("fast");},200);
			
			});
		
		$(".a_zhuhai").mouseleave(function(){

			clearTimeout(v);
			$(".zhuhai .layer").fadeOut("fast");
			$(".enter2").fadeOut("fast");
			});

		$(".a_shenlv").mouseenter(function(){
			m = setTimeout(function(){$(".shenlv .layer").fadeIn("fast");$(".enter3").fadeIn("fast");},200);
			
			});
		
		$(".a_shenlv").mouseleave(function(){
			clearTimeout(m);
			//clearTimeout(v);
			$(".shenlv .layer").fadeOut("fast");
			$(".enter3").fadeOut("fast");
			});

		$(".a_huawen").mouseenter(function(){
			n = setTimeout(function(){$(".huawen .layer").fadeIn("fast");$(".enter4").fadeIn("fast");},200);
			
			});
		
		$(".a_huawen").mouseleave(function(){
			clearTimeout(n);

			$(".huawen .layer").fadeOut("fast");
			$(".enter4").fadeOut("fast");
			});
		
		});

		

function gotoTOP() 
{    
    window.scrollBy(0,-10); 
    scrolldelay = setTimeout('gotoTOP()',10);
    if($(document).scrollTop() ==0) 
        {clearTimeout(scrolldelay); 
        }  
    
}
function showdiv(divname) {            
    document.getElementById("bg").style.display = "block";
    document.getElementById(divname).style.display = "block";
}

function hidediv(divname) {
    document.getElementById("bg").style.display = 'none';
    document.getElementById("showhobby").style.display = 'none';
    document.getElementById("showstudy").style.display = 'none';
    document.getElementById("showtool").style.display = 'none';
    document.getElementById("editwebsite").style.display = 'none';
    document.getElementById("feedback").style.display = 'none';
}

function setCookie(c_name,value,expiredays)
{
var exdate=new Date()
exdate.setDate(exdate.getDate()+expiredays)
document.cookie=c_name+ "=" +escape(value)+
((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}

function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}


function SetHome(obj,vrl){
        try{
            obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
        }
        catch(e){
                if(window.netscape) {
                        try {
                                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                        }
                        catch (e) {
                                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                        }
                        var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                        prefs.setCharPref('browser.startup.homepage',vrl);
                 }
        }
}

function getwebsite(userid){
    $.get(
            "php/getwebsite.php",
            { jnufmid: userid },
            function(data){
               
                websitejson=eval("("+data+")");
                var html1 = '';
                var html2 = '';
                lenght = websitejson.length;
                for(var i=0; i<lenght && i<32; i++)  
                {                                               
                    var webname = websitejson[i].webname;
                    if(websitejson[i].webname.length>4){
                        webname = websitejson[i].webname.substr(0,4)+"...";
                    html1 +='<li><a title="'+websitejson[i].webname+'" id="'+websitejson[i].position+'" class="'+websitejson[i].color+'" target="_blank" href="'+websitejson[i].weburl+'">'+webname+'</a><img class="del" src="img/delete.png"></li>';
                    }
                    else{
                        html1 +='<li><a id="'+websitejson[i].position+'" class="'+websitejson[i].color+'" target="_blank" href="'+websitejson[i].weburl+'">'+webname+'</a><img class="del" src="img/delete.png"></li>';
                    }

                    
                }
               
                for(var i=32; i<lenght && i<64; i++)  
                {                                               
                    var webname = websitejson[i].webname;
                    if(websitejson[i].webname.length>4){
                        webname = websitejson[i].webname.substr(0,4)+"...";
                    html2 +='<li><a title="'+websitejson[i].webname+'" id="'+websitejson[i].position+'" class="'+websitejson[i].color+'" target="_blank" href="'+websitejson[i].weburl+'">'+webname+'</a><img class="del" src="img/delete.png"></li>';
                    }
                    else{
                        html2 +='<li><a id="'+websitejson[i].position+'" class="'+websitejson[i].color+'" target="_blank" href="'+websitejson[i].weburl+'">'+webname+'</a><img class="del" src="img/delete.png"></li>';
                    }

                    
                }
                $("#chooseLink1").html(html1);
                $("#chooseLink2").html(html2);
               
            }
        );
}

function getweather(userid){
    $.get(
            "php/getweather.php",
            { jnufmid: userid },
            function(data){
                var weatherjson=eval("(["+data+"])");
                var htm1 = '';
                var htm2 = '';
                htm1 +='<img style="width: 50px; height: 50px" src="img/weatherimg/'+weatherjson[0].img1+'">'+                    weatherjson[0].temp1+'<br/><span class="weathertext">今：'+weatherjson[0].weather1+'</span>';
                htm2 +='<img style="width: 50px; height: 50px" src="img/weatherimg/'+weatherjson[0].img3+'">'+                    weatherjson[0].temp2+'<br/><span class="weathertext">明：'+weatherjson[0].weather2+'</span>';
                datetime = weatherjson[0].date+"<br/>"+weatherjson[0].week+"&nbsp;"+weatherjson[0].city+"&nbsp;<a href='javascript:;' id='resetcity'>[切换]</a>";
                $(".todayweather").html(htm1);
                $(".tomoweather").html(htm2);
                $(".time").html(datetime);
                $("#resetcity").click(function(){
                    setCookie("myid",getCookie("JnuFm"),365);
                    delCookie("JnuFm");
                    location.reload(); 
                });
            });
}
function getPropertyCount(o){  
   var n, count = 0;  
   for(n in o){  
      if(o.hasOwnProperty(n)){  
         count++;  
      }  
   }  
   return count;  
}  

function getfixed(cookie){
    $.get(
            "php/getfixed.php",
            { jnufmid: cookie },
            function(data){
                var fixedjson=eval("(["+data+"])");
                var majorhtml = '';
                var hobbyhtml = '';
                var toolhtml = '';

                var majorlen=getPropertyCount(fixedjson[0]['major']);
                var hobbylen=getPropertyCount(fixedjson[0]['hobby']);
                var toollen=getPropertyCount(fixedjson[0]['tool']);
  
                for(var i=0; i<majorlen; i++)  
                {    
                    var webname = fixedjson[0]['major'][i].webname;
                    if(webname.length>4){
                        webname = fixedjson[0]['major'][i].webname.substr(0,4)+"...";
                     majorhtml += "<li><a title='"+fixedjson[0]['major'][i].webname+"' href='"+fixedjson[0]['major'][i].weburl+"' target='_blank'>"+webname+"</a></li>";     
                    }
                    else{
                        majorhtml += "<li><a href='"+fixedjson[0]['major'][i].weburl+"' target='_blank'>"+fixedjson[0]['major'][i].webname+"</a></li>"; 
                    }
                    
                } 

                for(var i=0; i<hobbylen; i++)  
                {    
                    var webname = fixedjson[0]['hobby'][i].webname;
                    if(webname.length>4){
                        webname = webname.substr(0,4)+"...";
                         hobbyhtml += "<li><a title='"+fixedjson[0]['hobby'][i].webname+"' href='"+fixedjson[0]['hobby'][i].weburl+"' target='_blank'>"+webname+"</a></li>"; 
                    }
                    else{
                        hobbyhtml += "<li><a href='"+fixedjson[0]['hobby'][i].weburl+"' target='_blank'>"+fixedjson[0]['hobby'][i].webname+"</a></li>"; 
                    }
                    
                }   

                for(var i=0; i<toollen; i++)  
                {    
                    var webname = fixedjson[0]['tool'][i].webname;
                    if(webname.length>4){
                        webname = fixedjson[0]['tool'][i].webname.substr(0,4)+"...";
                     toolhtml += "<li><a title='"+fixedjson[0]['tool'][i].webname+"' href='"+fixedjson[0]['tool'][i].weburl+"' target='_blank'>"+webname+"</a></li>";     
                    }
                    else{
                        toolhtml += "<li><a href='"+fixedjson[0]['tool'][i].weburl+"' target='_blank'>"+fixedjson[0]['tool'][i].webname+"</a></li>"; 
                    }
                    
                }
                $("#majorcontent").html(majorhtml);
                $("#hobbycontent").html(hobbyhtml);     
                $("#toolcontent").html(toolhtml);    

                pager("majorcontent","majorpager",21);
                pager("hobbycontent","hobbypager",21);     
            });
    
       
}

function getcheckinfo(typename){
    $.get(
        "php/getcheckinfo.php",{
            uid:getCookie("JnuFm"),
            typename:typename
        },
        function(data){
            var checkinfojson=eval("(["+data+"])");
            var checkinfohtml = '';
        
            var checkinfolen=getPropertyCount(checkinfojson[0]);

            for(var i=0; i<checkinfolen; i++)  
            {    
                if(checkinfojson[0][i].ifchecked=="checked"){
                    checkinfohtml += '<label class="checklabel"><img src="img/'+typename+'/checked.png"><input type="checkbox" checked="checked" name="checkwhich[]" class="'+typename+'" value="/'+checkinfojson[0][i].checkname+'">'+checkinfojson[0][i].checkname+'</label>';
                }
                else{
                   checkinfohtml += '<label class="checklabel"><img src="img/unchecked.png"><input type="checkbox" name="checkwhich[]" class="'+typename+'" value="/'+checkinfojson[0][i].checkname+'">'+checkinfojson[0][i].checkname+'</label>';
                }           
            }
            checkinfohtml += ' <input type="hidden" name="jnufmid" value="'+getCookie("JnuFm")+'" class="uid"><input type="hidden" name="fixedtype" value="'+typename+'">';
            $("."+typename+"list").html(checkinfohtml);

            $(".checklabel").hover(
              function () {
                 if($(this).children("input").attr('checked')!='checked'){
                    var folder = $(this).children("input").attr("class");
                    $(this).children("img").attr("src","img/"+folder+"/hovering.png");
                 }
              }, 
              function () {
                if($(this).children("input").attr('checked')!='checked'){
                    $(this).children("img").attr("src","img/unchecked.png");
                }
                else{ 
                    var folder = $(this).children("input").attr("class");          
                    $(this).children("img").attr("src","img/"+folder+"/checked.png");
                }
              }     
            );

            $(".checklabel").click(
              function () {
                 if($(this).children("input").attr('checked')=='checked'){
                    var folder = $(this).children("input").attr("class");
                    $(this).children("img").attr("src","img/"+folder+"/checked.png");
                 }
                 else{
                    $(this).children("img").attr("src","img/unchecked.png");
                 }
              }    
            );
        });
     
}

function pager(ul,div,topnum){
        
    var len = $("#"+ul).children("li").length;
    var pagenum = Math.ceil(len/topnum);
    if(pagenum <= 0){
        pagenum = 1;
    }
    var nowpage = $("#"+div).children(".nowpage").text();
    var i=1;
    $("#"+ul).children("li").each(function(){

        if(i<(nowpage-1)*topnum+1 || i>nowpage*topnum ){
            $(this).css("display","none");
        }
        else{
            $(this).css({"display":"inline-block","float":"left"});
        }
        i++;
    });
    $("#"+div).children(".pagenum").text(pagenum);
}
function delCookie(name){
   var date = new Date();
   date.setTime(date.getTime() - 10000);
   document.cookie = name + "=a; expires=" + date.toGMTString();
}



    var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    var aBtn  = document.getElementById('searchby').getElementsByTagName('a');
    var oSlogo = document.getElementById('searchlogo');
    var arr = ['baidu.png','google.png','library.png','taobao.png'];
    var oSearchBar = document.getElementById('searchform');
    var oBorder = oSearchBar.getElementsByTagName('input')[0];
    var oSubmit = oSearchBar.getElementsByTagName('input')[1];
    var txtObj = document.getElementById("alertSpan");
    var logolink = document.getElementById("logolink");


    for(var i =0;i<aBtn.length;i++)
    {
        aBtn[i].index = i ;
        aBtn[i].onclick = function ()
        {
            oBorder.value ='';
            for(var i =0;i<aBtn.length;i++)
            {
                aBtn[i].className = '';
                oSlogo.innerHTML = '';
            }
            this.className = 'active' ;
            oSlogo.src = 'img/'+arr[this.index];
            switch(this.index)
            {         
                case 0: setFunc('http://www.baidu.com/s','wd','http://www.baidu.com');
                searchtype = "baidu";
                setCookie('type',"baidu",365);
                break;
                case 1 : setFunc('http://www.google.com.hk/search','q','http://www.google.com.hk');
                searchtype = "google";
                setCookie('type',"google",365);
                break;
                case 2 : setFunc('http://202.116.13.244/search*chx/?searchtype=X&',
                    'searcharg','http://libgp.jnu.edu.cn');
                   
                $("<input type='hidden' name='searchtype' value='X'>").insertBefore(oBorder);
                searchtype = "library";
                setCookie('type',"library",365);
                break;
                case 3 : setFunc('http://s.taobao.com/search','q','http://s.taobao.com');
                searchtype = "taobao";
                setCookie('type',"taobao",365);
                break;
            }
            function setFunc (sAction,sName,url)
            {
                oSearchBar.action = sAction ;
                oBorder.name = sName ;
                logolink.href = url;
            }
        };
    }

$(document).ready(function(){
    $("#inputtext").focus();
    if(getCookie("JnuFm")){
        getwebsite(getCookie("JnuFm"));
        getweather(getCookie("JnuFm"));
        getfixed(getCookie("JnuFm"));

        $(".uid").val(getCookie("JnuFm"));
    }
    else{
        $(".container").css("display","block");         
    }
   
    pager("toolcontent","toolpager",21);

    $("#majorlink").click(function(){
        getcheckinfo("major");
        showdiv('showstudy');        
    });

    $("#hobbylink").click(function(){
        getcheckinfo("hobby");
        showdiv('showhobby');     
    });

    $(".downpage").click(function(){
        var tempage = $(this).prev("span").prev("span").text();
        var nowpage = $(this).prev("span").text();
        if(tempage == nowpage){
            return false;
        }
        tempage++;
        $(this).prev("span").prev("span").text(tempage);
        var name = $(this).attr("name");
        pager(name+"content",name+"pager",21);

    });
    $(".uppage").click(function(){
        var tempage = $(this).next("span").text();
        if(tempage ==1){
            return false;
        }
        tempage--;
        $(this).next("span").text(tempage);
        var name = $(this).attr("name");
        pager(name+"content",name+"pager",21);

    });


    
     $(".popradiobox").children().children().children("label").click(
      function () {
        $(".popradiobox").children().children().children("label").each(function(){
            if($(this).children("input").attr('checked')=='checked'){
                color = $(this).children("input").attr("value");
                $(this).children("img").attr("src","img/webcolor/"+color+"checked.png");
            }
            else{
                color = $(this).children("input").attr("value");
                $(this).children("img").attr("src","img/webcolor/"+color+".png");
            }    

        });
    });
      
});



$(document).ready(function(){
    searchtype=getCookie('type');
    $("#"+searchtype).trigger("click");
    $("#inputtext").click(function(){
        $.get(
                "php/search.php",
                {w:$('#inputtext').val(),type:searchtype}, 
                function(data){
                    if(data!="")
                    {
                        var result;
                        result=data.split(",");
                        var layer;
                        layer = "<table id='a'>";
                        for(var i=0;i<result.length;i++)
                        {
                            layer+="<tr class='line'><td class='std'>"+result[i]+"</td></tr>";  
                        }
                        layer+="</table>";
                        $("#search_result").empty();
                        $("#search_result").append(layer);  
                        $('#a tr:first').addClass("hover");
                        $("#search_result").show();
                        $('#a tr .std').hover(function(){
                        $('#a tr:first').removeClass("hover");
                        $(this).addClass("hover");
                        },function(){
                        $(this).removeClass("hover");   
                        });
                    }
                    else{
                        $("#search_result").empty();
                        $("#search_result").hide(); 
                    }           
                }
                
            );  
    });
    $("#inputtext").keyup(function(event){
    if((event.keyCode>=48 && event.keyCode<=57) || (event.keyCode>=96 && event.keyCode<=105) || (           event.keyCode>=65 && event.keyCode<=90) || event.keyCode==8|| event.keyCode==32)
        {
            $.get(
                "php/search.php",
                {w:$('#inputtext').val(),type:"baidu"}, 
                function(data){
                    if(data!="")
                    {
                        var result;
                        result=data.split(",");
                        var layer;
                        layer = "<table id='a'>";
                        for(var i=0;i<result.length;i++)
                        {
                            layer+="<tr class='line'><td class='std'>"+result[i]+"</td></tr>";  
                        }
                        layer+="</table>";
                        $("#search_result").empty();
                        $("#search_result").append(layer);  
                        $('#a tr:first').addClass("hover");
                        $("#search_result").show();
                        $('#a tr .std').hover(function(){
                        $('#a tr:first').removeClass("hover");
                        $(this).addClass("hover");
                        },function(){
                        $(this).removeClass("hover");   
                        });
                    }
                    else{
                        $("#search_result").empty();
                        $("#search_result").hide(); 
                    }           
                }
                
            );  
        }   
        $('.hover').live('click',function(){
            $('#inputtext').val($(this).text());
            var wd = $(this).text();
            var get_type=getCookie('type').substring(0,1);
            switch (get_type){   
                case 'b':
                window.location.href = "http://www.baidu.com/s?wd=" + wd;
                break;
                case 'g':
                window.location.href = "http://www.google.com.hk/search?q=" + wd;
                break;
                case 'l':
                window.location.href = "http://202.116.13.244/search*chx/?searchtype=X&searcharg=" + wd;
                break;
                case 't':
                window.location.href = "http://s.taobao.com/search?q=" + wd;
                break;
            }
        });
        if(event.keyCode == 38){
        $('.hover').prev().addClass("hover");
        $('.hover').next().removeClass("hover");
        $('#inputtext').val($('.hover').text());
        }
        if(event.keyCode == 40){
        $('#a tr.hover').next().addClass("hover");
        $('#a tr.hover').prev().removeClass("hover");
        $('#inputtext').val($('#a tr.hover').text());
        }
    });
});
    $(document).ready(function(){
    $("*").click(function(){
    $('#search_result').empty();
    $('#search_result').hide();
 });
});




$(function(){  
 $("#btntext").toggle(
    function(){
        $(this).text("保存设置");
        $(".TabbedPanelsContent>ul>li>img").css("display","block");
        var $addli= $("<li class='addweb'>添加</li>");
        if(websitejson.length<32){
            $(".TabbedPanelsContent>ul:first").append($addli);
        }
        else {
            $(".TabbedPanelsContent>ul:last").append($addli);
        }
        $(".TabbedPanelsContent>ul>li").css("cursor","pointer");
        $(".del").click(function(){
            $.get("php/delete.php",{
               uid:getCookie("JnuFm"),
               position:$(this).parent("li").children("a").attr("id")
            });
            $(this).parent("li").remove();
        });   
        $(".TabbedPanelsContent>ul>li>a").click(function(){
            if($(this).attr("title")){
                name = $(this).attr("title")
            }
            else{
                name = $(this).text();
            }
            $("#webname").val(name);
            $("#webadd").val($(this).attr("href"));
            color = $(this).attr("class");
            $("#position").val($(this).attr("id"));
            /*double hack*/
            $("#"+color+"label").trigger("click");
            $("#"+color+"label").trigger("click");
            $("#do").val("update");
            showdiv("editwebsite");
            
            return false;
        });
        $(".addweb").click(function(){
            showdiv("editwebsite"); 
            index = $(".TabbedPanelsContent>ul>li>a").eq(-1).attr("id");
            index++;
            $("#position").val(index);   
            $("#do").val("add");       
            return false;
        });
    },
    function(){
        $(this).text("管理网站");
        $(".TabbedPanelsContent>ul>li").css("cursor","auto");
        $(".TabbedPanelsContent>ul>li>img").css("display","none");
        $(".addweb").remove();
        getwebsite(getCookie("JnuFm"));
    }); 
    $("#feedbackbtn").click(function(){
        $.get("php/feedback.php",{
            uid:getCookie("JnuFm"),
            content:$(".feedbacktext").val()
        });
        hidediv();
    });
    $("#inputsubmit").click(function(){
        $.get("php/searchdata.php",{
            uid:getCookie("JnuFm"),
            content:$("#inputtext").val(),
            searchby:getCookie("type")
        });
    });
});


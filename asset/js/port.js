$(function() {
    $('header').load("navi.html");

    $.ajax({
        url: 'asset/js/port_data.json',
        dataType: 'json',
        success: function(data) {
            console.log("data",data)
            var sites = data.sites;
            var html = "";
            for (var i=0; i<sites.length; i++) {
                html += "<section>";
                html += "<figure><img src=" + sites[i].imgSrc + ">";
                html += "<figcaption><a href='#'>VIEW SITE →</a></figcaption>";
                html += "</figure> <ul>";
                html += "<li>SITE</li>";
                html += "<li>" + sites[i].siteName + "<br/>: "+sites[i].siteDesc+"</li>";
                html += "<li>사용된 언어</li>";
                html += "<li>" + sites[i].useLang + "</li>";
                html += "<li>INTERACTION</li>";
                html += "<li>" + sites[i].interaction + "</li>";
                html += "<li>DATE</li>";
                html += "<li>" + sites[i].date + "</li></ul>";
                html += "</section>";
            }
            $("#mySites").append(html);
        }
    });
});


window.addEventListener('DOMContentLoaded',function(){
 
      var typingBool = false; 
    var typingIdx= 0; 
    var typingTxt = $(".typing-txt").text(); // 타이핑될 텍스트를 가져온다 

    typingTxt=typingTxt.split(""); // 한글자씩 자른다. 
    if(typingBool==false){ // 타이핑이 진행되지 않았다면 
       typingBool=true;        
       var tyInt = setInterval(typing,100); // 반복동작 
     } 
     
     function typing(){ 
        if(typingIdx<typingTxt.length){ // 타이핑될 텍스트 길이만큼 반복 
            $(".typing").append(typingTxt[typingIdx]); // 한글자씩 이어준다. 
            typingIdx++; 
        }else{ 
            clearInterval(tyInt); //끝나면 반복종료 
        } 
     }  
});
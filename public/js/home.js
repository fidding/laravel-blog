$(function () {
    //判断是否为pc
    function IsPC(){
        var userAgentInfo = navigator.userAgent;
        var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
        }
        return flag;
    }

    //navbar
    if(IsPC()){
        //解决pc与移动端hover事件与click事件冲突
        $('.cate').hover(function () {
            $(this).addClass('open');
            $(this).find('em').addClass('rotate');
        }, function () {
            $(this).removeClass('open');
            $(this).find('em').removeClass('rotate');
        })
    }

    //artile share
    if($('.share-bar').length){
        $('.share-bar').share();
    }

    // 点击搜索按钮
    $("#search_submit .fa-search").click(function () {
        window.location.href = "/search/keyword/" + $("#navbar_search").val();
    });
    // 提交搜索表单
    $("#header-search-form .container").submit(function () {
        window.location.href = "/search/keyword/" + $("#navbar_search").val();
    });
})

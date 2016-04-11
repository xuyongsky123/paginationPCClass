function paginationPC(pageContainer,options){
  var T= this;
  T.pageContainer = document.getElementById(pageContainer);
  T.flag = false; //记录是否成功获取后台传回的总页数

  T.defaults = {
    currentPage:1,  //首次加载的页码
    showNum:4,  //一次加载数据个数（条数）默认为4个
    pageAll:0,  //所有数据的总页数
    ajaxEvent:function(me){ //数据加载接口 -- 使用者自定义数据加载方式
      $.noop();
    }
  };

  //初始化操作
  T.initPaginationPC(options);
}

paginationPC.prototype.initPaginationPC = function(options){
  var T = this;

  T.params = $.extend(T.defaults,options);

  //首次加载数据
  T.loadData(T.params.currentPage);
  //初始化设置分页
  setTimeout(function(){
    if(T.flag){
      T.setPage(T.pageContainer,T.params.pageAll,T.params.currentPage);
    }else{
      T.pageContainer.innerHTML = '<span style="color:red;">请求超时，分页数据初始化失败！请重新刷新页面</span>';
    }
    
  },1000);
  
}

//container 容器，count 总页数 pageindex 当前页数
paginationPC.prototype.setPage = function(container, count, pageindex) {
    var T = this;
    var container = container;
    var count = count;
    var pageindex = pageindex;
    var a = [];
    //总页数少于10 全部显示,大于10 显示前3 后3 中间3 其余....
    if (pageindex == 1) {
      a[a.length] = "<a href=\"#\" class=\"prev unclick\">上一页</a>";
    } else {
      a[a.length] = "<a href=\"#\" class=\"prev\">上一页</a>";
    }
    function setPageList() {
      if (pageindex == i) {
        a[a.length] = "<a href=\"#\" class=\"on\">" + i + "</a>";
      } else {
        a[a.length] = "<a href=\"#\">" + i + "</a>";
      }
    }
    //总页数小于10
    if (count <= 10) {
      for (var i = 1; i <= count; i++) {
        setPageList();
      }
    }
    //总页数大于10页
    else {
      if (pageindex <= 4) {
        for (var i = 1; i <= 5; i++) {
          setPageList();
        }
        a[a.length] = "...<a href=\"#\">" + count + "</a>";
      } else if (pageindex >= count - 3) {
        a[a.length] = "<a href=\"#\">1</a>...";
        for (var i = count - 4; i <= count; i++) {
          setPageList();
        }
      }
      else { //当前页在中间部分
        a[a.length] = "<a href=\"#\">1</a>...";
        for (var i = pageindex - 2; i <= pageindex + 2; i++) {
          setPageList();
        }
        a[a.length] = "...<a href=\"#\">" + count + "</a>";
      }
    }
    if (pageindex == count) {
      a[a.length] = "<a href=\"#\" class=\"next unclick\">下一页</a>";
    } else {
      a[a.length] = "<a href=\"#\" class=\"next\">下一页</a>";
    }
    container.innerHTML = a.join("");
    //事件点击
    var pageClick = function() {
      var oAlink = container.getElementsByTagName("a");
      var inx = pageindex; //初始的页码
      oAlink[0].onclick = function() { //点击上一页
        if (inx == 1) {
          return false;
        }
        inx--;

        T.params.currentPage = inx;
        T.loadData(inx);



        T.setPage(container, count, inx);
        return false;
      }
      for (var i = 1; i < oAlink.length - 1; i++) { //点击页码
        oAlink[i].onclick = function() {
          inx = parseInt(this.innerHTML);

          
          T.params.currentPage = inx;
          T.loadData(inx);


          T.setPage(container, count, inx);
          return false;
        }
      }
      oAlink[oAlink.length - 1].onclick = function() { //点击下一页
        if (inx == count) {
          return false;
        }
        inx++;


        T.params.currentPage = inx;
        T.loadData(inx);


        T.setPage(container, count, inx);
        return false;
      }
    } ();
}

paginationPC.prototype.loadData = function(currentPage){
  var T = this;
  T.params.ajaxEvent(T,currentPage);
}

$(document).ready(function () {
    /**
     * 加载更多资讯
     */
    var $win = $(".detail"),
        $doc = $(document),
        apiRoot = '/',
        $detail = $('.detail'),
        $loading = $('.loading'),
        $tips = $('#loadingInfo'),
        tipsDefault = $tips.html(),
        tipsError = '服务繁忙，请稍后重试。',
        flag = false,
        isLoading = false,
        scrollTimer,
        getQueryString = function (name) {
            var result = location.search.match(
                new RegExp("[\?\&]" + name + "=([^\&]+)", "i")
            );

            if (result == null || result.length < 1) {
                return null;
            }

            return result[1];
        },
        loadHouseList = function(){
            // 保证仅有一条列表的请求在进行
            if (isLoading) {
                return;
            }

            $loading.find('img').show();
            $tips.html(tipsDefault);
            $loading.removeAttr('style').show();

            if (!loadHouseList.pageCount) {
                loadHouseList.pageCount = 0;
            }
            loadHouseList.pageCount += 1;

            $.ajax({
                type: 'POST',
                url: apiRoot + 'money/jl',
                data: {
                    wId: getQueryString('u') || '',
                    page_no: loadHouseList.pageCount,
					year:getQueryString('year') || '',
					month:getQueryString('month') || '',
                },
                dataType: 'json',
                beforeSend: function(){
                    isLoading = true;
                },
                success: function(data){
                    $loading.hide();

                    var html = [];
                  
                    if (data.data.length < 14) {
                        flag = true;
                    }

                    $.each(data.data, function(i, n){
                        html = [];
                          html.push('<li class="clearfix" style="cursor:pointer" onclick="window.location.href=\'/money/jydetail/'+n.orderId+'\'">');		
						  html.push('<div class="detail-l">');
						  html.push('<span>'+n.d+'<span>日');
						  html.push('</div>');
						  html.push('<div class="detail-r clearfix">');
						  if(n.type=='空'){
						      html.push('<p class="num drop">跌</p>');
						  }
						  else{
						     html.push('<p class="num rise">涨</p>');
						  }
						   html.push('<p class="goods-type">'+n.name+'/'+n.sl+'<span>手</span></p>');
						   if(n.zhuanqu>0){
						
						         html.push('<p class="num rise">+'+n.zhuanqu+'</p>');
                            }
                           else{
					 
					            html.push('<p class="num drop">'+n.zhuanqu+'</p>');
					        }		
						    html.push('</div></li>');
						
                        $detail.append(html.join(''));
                    });
                    $('.mask').css({
						   height:$(document).height()
					   });
					   $('.index').css({
						   height:$(document).height()-$('header').height()
					   });
				
				},
                complete: function(){
                    isLoading = false;
                },
                error: function(){
                    $loading.find('img').hide();
                    $tips.html(tipsError);
                    $loading.css({
                        color: '#666',
                        backgroundColor: '#ffc'
                    }).show();
                }
            });
        };

    loadHouseList();

    // 滚动到页面底部再次请求楼盘列表
    // 直到加载完所有楼盘信息
    $win.scroll(function(){
        
		if (scrollTimer) {
            clearTimeout(scrollTimer);
            scrollTimer = undefined;
        }

        if (flag) {
           
               $detail.append(
                    ''
                );
           
            $win.unbind();
            return;
        }

        scrollTimer = setTimeout(
            function(){
                 loadHouseList();
				if($win.scrollTop() >= $win.height()) {
                    loadHouseList();
                }
            },
            100
        );

        return false;
    });


});
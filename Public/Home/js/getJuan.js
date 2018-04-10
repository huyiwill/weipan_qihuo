$(document).ready(function () {
    /**
     * 加载更多资讯
     */
    var $win = $('.ticket-list'),
        $doc = $(document),
        apiRoot = '/',
        $detail = $('.ticket-list'),
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
                url: apiRoot + 'money/securitiesPost',
                data: {
                    page_no: loadHouseList.pageCount
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
                    
						  html.push('<li  >');
						  
						  html.push('<a href="/money/securitiesDetail/'+n.id+'" class="clearfix">  ');
						 
						   html.push('<img src="/static/v13/images/ticket-big.png" class="t-icon">');
						  
						  html.push('<span  class="t-left">'+n.mianzhi+'元</span> <em class="t-right">有限期至'+n.endtime+'</em>');
						 
						  html.push('</a></li>');
                
                        $detail.append(html.join(''));
                   
					});
                  
					
				   if(data.counts==0){
					
					   $detail.hide();
					   $(".ticket-no").show();
					
					}
					
					
					 
					  
					 
				
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
                if($win.scrollTop()) {
                    loadHouseList();
                }
            },
            100
        );

        return false;
    });


});
var wxData = window.wxData || {
    imgUrl: '',
    link: window.location.href,
    title: document.title,
    desc: '...'
};

$.ajax({
    url: 'http://m.plus.94uv.com/index.php?app=wechat', 
    dataType: 'jsonp',
    success: function (data) {
        if (data.timestamp && data.noncestr && data.signature) {
            weixinInit(data);
        }
    }
});

function weixinInit(data) {
    wx.config({
        debug: false,   
        appId: data.appid || 'wx2c4643a8a115af7f', 
        timestamp: data.timestamp,
        nonceStr: data.noncestr,
        signature: data.signature,
        jsApiList: [
            'getNetworkType',
            'scanQRCode',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo'
        ]
    });

    /**
     * 微信分享代码
     */
    wx.ready(function () {
        wx.getNetworkType({
            success: function (res) {
                var networkType = res.networkType; // 返回网络类型2g，3g，4g，wifi
            }
        });

        weixinChecked = 1;

        var msgData = $.extend({
            success: function () {},
            cancel: function () {}
        }, wxData);
        
        wx.onMenuShareAppMessage(msgData);
        wx.onMenuShareTimeline(msgData);
        wx.onMenuShareQQ(msgData);
        wx.onMenuShareWeibo(msgData);
    });
}
export const urlMixin = {
    // inheritAttrs: true,
    props: {
        stockname: String
    },
    data() {
        return {
            urlCrawl: "",
            urlLivePrice: ""
        }
    },
    mounted() {


    },
    methods: {
        setUrlMixin(s, l = 5) {
            if (s == "SH000001") {
                this.urlCrawl = "http://159.138.54.214/api/apicrawl";
                this.urlLivePrice = "https://hq.sinajs.cn/?rn=1552280540946&list=sh000001"
            } else if (s == "SZ399001") {
                this.urlCrawl = "http://159.138.54.214/api/sz399001";
                this.urlLivePrice = "https://hq.sinajs.cn/etag.php?_=1553569520963&list=sz399001"
            } else if (s == "SZ399415") {
                this.urlCrawl = "http://159.138.54.214/api/sz399415";
                this.urlLivePrice = "https://hq.sinajs.cn/etag.php?_=1553569520963&list=sz399415"
            } else if (s == "SH00300") {
                this.urlCrawl = "http://159.138.54.214/api/sh00300";
                this.urlLivePrice = "https://hq.sinajs.cn/etag.php?_=1553569520963&list=sh000300"
            } else if (s == "BTC/USDT") {
                this.urlLivePrice = "https://api.huobi.pro/market/trade?symbol=btcusdt"
                if (l == 5) {
                    this.urlCrawl = "http://159.138.54.214/api/btc";
                } else if (l == 1) {
                    this.urlCrawl = "http://159.138.54.214/api/btc1";
                } else {
                    alert("it will be redirect to 404 page")
                }
            } else if ("US dollar Index") {
                this.urlCrawl = "http://159.138.54.214/api/usindex";
                this.urlLivePrice = "http://hq.sinajs.cn/rn=1553570744061list=DINIW"
            } else {
                window.location.href = 'some url';
            }
        }
    }
}
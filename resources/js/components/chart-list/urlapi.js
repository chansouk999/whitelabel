export const urlapi = {
    props: {
        stockname: String,
        loop: String,
        country: String
    },
    data() {
        return {
            api: "",
            apis: "",
        }
    },
    module() {},
    methods: {
        url(stockname, loop, country) {
            if (stockname == "USdollarIndex" && loop == '5' && country == 'usa') {
                this.api = "http://159.138.54.214/api/usindex";
                this.apis = "http://159.138.54.214/api/datahistory/US dollar Index";
            } else if (stockname == "BTCUSDT" && loop == '5' && country == 'cypto') {
                this.api = "http://159.138.54.214/api/btc";
                this.apis = "http://159.138.54.214/api/datahistory/BTCUSDT";
            } else if (stockname == "BTCUSDT" && loop == '1' && country == 'cypto') {
                this.api = "http://159.138.54.214/api/btc1";
                this.apis = "http://159.138.54.214/api/datahistory/BTCUSDT1";
            } else if (stockname == "SH00300" && loop == '5' && country == 'china') {
                this.api = "http://159.138.54.214/api/sh00300";
                this.apis = "http://159.138.54.214/api/datahistory/SH00300";
            } else if (stockname == "SZ399001" && loop == '5' && country == 'china') {
                this.api = "http://159.138.54.214/api/sz399001";
                this.apis = "http://159.138.54.214/api/datahistory/SZ399001";
            } else if (stockname == "SZ399415" && loop == '5' && country == 'china') {
                this.api = "http://159.138.54.214/api/sz399415";
                this.apis = "http://159.138.54.214/api/datahistory/SZ399415";
            } else {
                this.api = "http://159.138.54.214/api/apicrawl/";
                this.apis = "http://159.138.54.214/api/datahistory/SH000001";
            }
        }
    }
}
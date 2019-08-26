export const adminmixin = {
    data() {
        return {
            token: null,
            loading_text: false,
            loading: null,
            userdetail: [],
            userdetailpg: [],
            userdetailselectpage: null,
            searchuserdetail: null,
            config: {},
            gamehistory: [],
            gameresult: [],

            agentinfo: [],
            gotuserhistory: [],
            popup: false,
            reqmethod: null,
        };
    },
    mounted() {

        this.gettoken()
        this.userdata();
        this.getagentinfo()
    },
    methods: {
        viewuserdata(method, id, name) {
            this.reqmethod = method
            this.A = 0
            this.B = 9
            this.gotuserhistory = []
                // alert(id)
            axios.post('getgamehistory', { reqmethod: method, user_id: id, name: name }).then(res => {
                console.log(res.data)
                this.userdata()
                this.popup = true
                if (res.data.code == 200) {
                    this.gotuserhistory = res.data.data
                }
            }).catch(e => { console.log(e.response) })
        },
        getagentinfo() {
            axios.get('/getagentinfo').then(res => {
                this.agentinfo = res.data.data.data
            }).catch(e => { console.log(e.response) })
        },

        gettoken() {
            axios
                .get('/getallresultadmin', this.config)
                .then(res => {
                    console.log(res.data)
                    this.gamehistory = res.data.gamehistory
                    this.gameresult = res.data.gameresult




                })
        },
        userdata(pagenum, method) {
            this.loading = true;
            this.loading_text = false;
            let url = "";
            if (this.searchuserdetail == null) {
                if (method == "listpage") {
                    url = "/getdata?page=" + pagenum;
                } else if (method == "previous" || method == "next") {
                    url = pagenum;
                } else {
                    url = "/getdata";
                }
            } else {
                if (method == "listpage") {
                    url = "/getdata?page=" + pagenum + "&search=" + this.searchuserdetail;
                } else {
                    url = pagenum;
                }
            }
            axios
                .get(url)
                .then(res => {
                    // console.log(res.data.userdata);
                    if (res.data.userdata == "") {
                        // alert("ok");
                    }
                    this.userdetail = res.data.userdata.data;
                    this.userdetailpg = {
                        currentpage: res.data.userdata.current_page,
                        next_page_url: res.data.userdata.next_page_url,
                        path: res.data.userdata.path,
                        last_page_url: res.data.userdata.last_page_url,
                        per_page: res.data.userdata.per_page,
                        last_page: res.data.userdata.last_page,
                        prev_page_url: res.data.userdata.prev_page_url,
                        per_page: res.data.userdata.per_page
                    };
                })
                .catch(er => {
                    console.log(er.res);
                });
        },

        // gamehistory() {

        // }
    },
    watch: {
        userdetail(e) {
            this.loading = false;
            // console.log(e)
        }
    }
}
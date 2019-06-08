export const adminmixin = {
    data() {
        return {
          token:null,
          loading_text: false,
          loading: null,
          userdetail: [],
          userdetailpg: [],
          userdetailselectpage: null,
          searchuserdetail: null,
          config:{},
          gamehistory:[],
          gameresult:[],
        };
      },
      mounted() {
        
          this.gettoken()
          this.userdata();
          // this.gamehistory()
          
      },
      methods: {
        gettoken(){
          axios.get('/gettoken').then(res=>{
          this.token=res.data.token
          this.config = {
                          headers: {
                            Authorization: 'Bearer '+this.token,
                            Accept:'application/json'
                          }
                        }
                         axios
            .get('http://localhost:8003/api/getallresultadmin',this.config)
            .then(res => {

                this.gamehistory =res.data.gamehistory
                this.gameresult =res.data.gameresult
                console.log(this.gameresult)

            
            
            
            })
            .catch(er => {
              console.log(er.res);
            });
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
              console.log(res.data.userdata);
              if (res.data.userdata == "") {
                alert("ok");
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
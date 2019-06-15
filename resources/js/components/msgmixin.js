
export const msgmixin = {
    data(){
        return{
            userdata:[],
            id:null,
            user_id:null,
            provider_name:null,
            balance:null,
            pro_id:null,
            name:null,
            email:null,
            firstname:null,
            lastname:null,
        }
    },
    mounted(){
        console.log("MSG DADAT WORKED")
        this.userdatasecond()
    },
    methods: {
      
        userdatasecond() {
            axios
              .get("/userdetaildata")
              .then(res => {
                console.log(res.data);
                this.id = res.data[0].id;
                this.user_id = res.data[0].user_id;
                this.provider_name = res.data[0].provider_name;
                this.balance = res.data[0].userBalance;
                this.pro_id = res.data[0].pro_id;
                this.name = res.data[0].name;
                this.email = res.data[0].email;
                this.firstname = res.data[0].id;
                this.lastname = res.data[0].secret;
                // $('.id').val(this.id);
                // $('.provider_name').val(this.provider_name);
                // $('.balance').val(this.balance);
                // $('.pro_id').val(this.pro_id);
                // $('.name').val(this.name);
                // $('.email').val(this.email);
              })
              .catch(er => {
                console.log(er.res);
              });
          },
            
    transfermoney(){
        axios.post('/transfertoapi',{amount:this.transferamount}).then(res=>{
          console.log(res.data)
          if(res.data.code==99){
              alert('Money not enought ')
          }
          if(res.data.code==0){
             alert('You need to register user Api by Entering the game on Lobby page')
             location.href = '/lobby'
          }
          else{
             alert('successful')
          }
        }).catch(e=>{console.log(e.response)})
      },
      payment(data){
  
        
  
  
  
        // this.loading=false
        let vm = this
          data ={
            money : vm.paymentamount,
            data_type : vm.recmetho,
            pay_type : vm.paymenttype
          }
          console.log(data)
         
          axios.post('actionpayment',{data}).then(res=>{
            console.log(res.data)
            if(res.data.code == 419){
                alert('YOU ARE NOT ALLOW')
            }else{
              if(res.data.code == 100){
                
                if(data.data_type == 'h5'){
                  
                }else if(data.data_type == 'json'){
                  vm.loading=true
                  vm.qr_pop=true;
                  vm.order_sn = res.data.data.order_sn
                  vm.remake = res.data.data.remark;
                  vm.qrcode = res.data.data.qrcode;
                    this.gotar()
  
                }
                
              }else{
                vm.loading=true
                 vm.qr_pop=true;
                 vm.remake = res.data.msg;
              }
            }
          }).catch(er=>{console.log(er.response)})
      }
    },
}
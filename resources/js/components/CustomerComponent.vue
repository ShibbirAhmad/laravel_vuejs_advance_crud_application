<template>

   <div >
          
      
              <div style="margin-top:50px;margin-bottom:10px;" class="row">
                  
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                           <a class="btn btn-info text-white " > Add New Customer </a>
                    </div> 

                    <div class="col-lg-4 col-md-4 col-sm-4">
                           <form action="">
                        
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="search here ">
                      
                           </form>
                    </div> 


               </div> 
               
               

                 <div class="row">


                     <div class="col-lg-12 col-md-12 col-sm-12 ">
                        
                      
                        <div class="table-responsive">
                        
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr >
                                        <th scope="col">Serial No</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th colspan="3" scope="col">Action</th>
                    
                                    </tr>
                                </thead>
                                <tbody>


                                  <tr v-for=" (customer,index)  in customers " v-bind:key="customer.id" >
                                    <th scope="row">{{ index+1 }}</th>
                                    <td>{{  customer.name }}</td>
                                    <td>{{ customer.email }}</td>
                                    <td>{{ customer.phone }}</td>
                                    <td>{{  customer.address.substring(0,19) }} </td>
                                    <td> 

                                        <i style="cursor:pointer;" class="fa fa-edit " @click="editAction(customer)" > </i>  
                                        <i  style="cursor:pointer;" class="fa fa-trash-alt ml-3"> </i> 
                                    
                                    </td>

                                  </tr>
                                 
                               
                                  
                                </tbody>
                              </table>

                        </div>


                     </div>
                 </div>



<add v-if="edit" :customer="singleCustomer"></add>

   </div>


</template>

<script>

import Edit  from './Edit.vue';
    export default {
        mounted() {
            console.log('Component mounted.') ;
            this.getCustomerList() ;
        },


        data(){

             return {

               customers: '',
               edit:false,
               singleCustomer:''  

             }    
                 
        },

        methods:{
             
             getCustomerList(){
                 
                 axios.get('all/customer')

                 .then(resp => {
                     
                      if (resp.data.success == "OK") {
                        
                            this.customers=resp.data.customers 

                      }

                      console.log(resp);
                 })




             },
             editAction(customer){
                 this.edit=true;
                 this.singleCustomer=customer;
             }


            
        },

        components:{
            add:Edit,
        }

    


    }
</script>

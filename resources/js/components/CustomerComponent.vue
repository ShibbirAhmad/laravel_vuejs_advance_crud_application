<template>

   <div >
          
      
              <div style="margin-top:50px;margin-bottom:10px;" class="row">
                  
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                           <a class="btn btn-info text-white " @click="modal=true" > Add New Customer </a>
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


                                  <tr v-for=" (customer,index)  in customers.data " v-bind:key="customer.id" >
                                    <th scope="row">{{ index+1 }}</th>
                                    <td>{{  customer.name }}</td>
                                    <td>{{ customer.email }}</td>
                                    <td>{{ customer.phone }}</td>
                                    <td>{{  customer.address.substring(0,19) }} </td>
                                    <td> 

                                        <i style="cursor:pointer;" class="fa fa-edit " @click="editAction(customer)" > </i>  
                                        <i  style="cursor:pointer;" class="fa fa-trash-alt ml-3 " @click="deleteAction(customer,index)"> </i> 
                                    
                                    </td>

                                  </tr>
                                 
                               
                                  
                                </tbody>
                              </table>

                        </div>


                     </div>
                 </div>

 <div class="modal"   tabindex="-1" style="display:block;" v-if="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewTeacher">Add New Customer </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form class="form" @submit.prevent="formSubmit()">
      <div class="modal-body">
         
         
       
          <div class="form-group">
           <label for="my-input">Name</label>
           <input id="my-input" class="form-control" type="text"  v-model="name">
           </div>
            <div class="form-group">
           <label for="my-input">Email</label>
           <input id="my-input" class="form-control" type="email" v-model="email">
           </div>
           <div class="form-group">
           <label for="my-input">Phone</label>
           <input id="my-input" class="form-control" type="text" v-model="phone">
           </div>
           <div class="form-group">
           <label for="my-input">Address</label>
           <input id="my-input" class="form-control" type="text"  v-model="address">
           </div>

      
              <button type="submit" class="btn btn-primary float-right">Save</button> 
      </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="modal=false" >Close</button>
   
        
       
      </div>
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
               singleCustomer:''  ,
               name : '',
               email : '' ,
               phone : '',
               address : '',
               modal:false,


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

             formSubmit(){

                axios.post('add/customer/new',{

                      name : this.name ,
                      email : this.email ,
                      phone : this.phone ,
                      address : this.address ,
                })
                .then(resp=> {

                       if (resp.data.success == "OK") {
                           
                            alert(resp.data.message);
                            this.getCustomerList();
                            this.modal=false;
                       }
                })



             },


             editAction(customer){
                 this.edit=true;
                 this.singleCustomer=customer;
             },


             deleteAction(customer,index){
                
                axios.delete('remove/customer/'+customer.id)

                .then(resp=>{

                    if (resp.data.success == "OK") {
                        // this.getCustomerList();
                       this.customers.splice(index, 1);
                       alert (resp.data.message) ;

                    }


                })

             }


            
        },

        components:{
            add:Edit,
        }

    


    }
</script>

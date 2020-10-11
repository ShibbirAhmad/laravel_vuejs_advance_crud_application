<template>
    
    
 <div class="modal"   tabindex="-1" style="display:block;" v-if="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewTeacher">Edit customer info </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form class="form" @submit.prevent="formUpdate()">
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

      
              <button type="submit" class="btn btn-primary float-right">update</button> 
      </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="modal=false" >Close</button>
   
        
       
      </div>
    </div>
  </div>
                    </div>
</template>
<script>
export default {
    props:['customer'],
    data(){
      return {
        modal:true ,
      name : this.customer.name ,
       email : this.customer.email ,
       phone : this.customer.phone ,
       address : this.customer.address ,


      }
    },
    methods:{

formUpdate(){
   axios.put('/customer/update/'+this.customer.id,{
       name : this.name ,
       email : this.email ,
       phone : this.phone ,
       address : this.address ,
   })

   .then(resp=>{
     console.log(resp)
      if (resp.data.success == "OK") {

        //  alert("customer info updated successfully") ; 
          console.log(resp.data.data) 
          //this.modal=false;
        
      }
   })


}
    }
}
</script>
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


                     <div class="col-lg-10 col-md-10 col-sm-10 ">
                        
                      
                        <div class="table-responsive">
                        
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Serial No</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col ">Action</th>
                        
                        
                                        </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Shibbir Ahmad</td>
                                    <td>Polton,Dhaka</td>
                                    <td>shibbirahmad@gmail.com</td>
                                    <td>01759 416979</td>
                                    <td> 

                                        <i style="cursor:pointer;" class="fa fa-edit " > </i>  
                                        <i  style="cursor:pointer;" class="fa fa-trash-alt ml-3"> </i> 
                                    
                                    </td>

                                  </tr>
                                 
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Shibbir Ahmad</td>
                                    <td>Polton,Dhaka</td>
                                    <td>shibbirahmad@gmail.com</td>
                                    <td>01759 416979</td>
                                    <td> 

                                        <i style="cursor:pointer;" class="fa fa-edit " > </i>  
                                        <i  style="cursor:pointer;" class="fa fa-trash-alt ml-3"> </i> 
                                    
                                    </td>

                                  </tr>
                                  
                                </tbody>
                              </table>

                        </div>


                     </div>
                 </div>

   </div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

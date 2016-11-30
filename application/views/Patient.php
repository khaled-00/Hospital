<?php

//include    base_url().'style/include/html.php';
//include    base_url().'style/include/head.php';
?>

<!--  STAARTTT-->
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            	<!-- Statistics Button Container -->
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                    	<span><i class="icon-business-card"></i> Patient Data</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <br/>
                        <div  >
                            <label></label>
                            <div style="float:right;margin-right:30px">
                                <img src="<?php echo base_url()?>style/images/00.png" class="mws-crop-target" alt="">
                            </div>
                            <div style="margin-left:25px">
                                {dat}
                                <h3> - Full name :</h3>
                                <p>{patients_name}</p>
                                
                                <h3> - Gender :</h3>
                                <p>{gender}</p>
                                
                                <h3> - The patient's condition :</h3>
                                <p>{Case}</p>

                                <h3> - Section :</h3>
                                <p>{section_name}</p>

                                <h3> - Hospital costs :</h3>
                                <p>{Expenses}</p>

                                <h3> - Room Number :</h3>
                                <p>{room}</p>

                                <h3> - Notes :</h3>
                                <p> {Notes} </p>
                                {/dat}
                            </div>
                        </div>
                        <br/>
                    </div>
                           
                </div>            
                    <br/><br/><br/>
            </div>
                
                <!-- Panels End -->
            <!-- Inner Container End -->
                       

<?php
//include   base_url().'style/include/footer.php';
?>
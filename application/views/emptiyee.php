<?php
/*$thisPage=2;

include './include/html.php';
include './include/head.php';
*/
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
                    	<span><i class="icon-business-card"></i> Employee Data</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <br/>
                        <div  >
                            {emp}
                            <label></label>
                            <div style="float:right;margin-right:30px">
                                <img src="<?php echo base_url()?>uploads/{file}" class="mws-crop-target" alt="" width="350px" >
                            </div>
                            <div style="margin-left:25px">
                                <h3> - Full name :</h3>
                                <p>{employee_name}</p>

                                <h3> - Function :</h3>
                                <p>{Degree}</p>

                                <h3> - Section :</h3>
                                <p>{section_name}</p>

                                <h3> - salary :</h3>
                                <p>{Salary}</p>

                                <h3> - date attendance and leave :</h3>
                                <p>{Times}</p>

                                <h3> - Notes :</h3>
                                <p>{Notes}</p>
                            </div>
                            {/emp}
                        </div>
                        <br/>
                    </div>
                           
                </div>            
                    <br/><br/><br/>
            </div>
                
                <!-- Panels End -->
            <!-- Inner Container End -->
                       

<?php
/*include './include/footer.php';*/
?>
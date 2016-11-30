<?php
/*$thisPage=1;

include './include/html.php';
include './include/head.php';*/
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
                    	<span><i class="icon-business-card"></i> Update Patient</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <br/>
                        <div>
                            <form action="" method="post" class="mws-form">
                            <label></label>
                            <div style="margin-left:25px;margin-right:30px;">
                                {data}
                                <h3> - Full name :</h3>
                                <div class="mws-form-item">
                                    <input type="text" name="fullname" class="required large" value="{patients_name}" />
                                </div>
                                <h3> - The patient's condition :</h3>
                                <div class="mws-form-item">
                                    <select class="mws-select2 small" name="case" value="{patients_name}">
                                        <option value="Advice">Advice</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Express">Express</option>
                                        <option value="Hazardous">Hazardous</option>
                                    </select>
                                </div>
                                <h3> - Section :</h3>
                                <div class="mws-form-item">
                                    <select class="mws-select2  small" name="Section" value="{sc_id}">
                                        <option value="{sc_id}">{section_name}</option>
                                        {sec}
                                        <option value="{sc_id}">{section_name}</option>
                                        {/sec}
                                    </select>
                                </div>
                                <h3> - Gender :</h3>
                                <div class="mws-form-item">
                                    <ul class="mws-form-list" value="{gender}" >
                                        <li><input type="radio" value="male" id="male" name="gender" class="required"/><label for="male">Male</label></li>
                                        <li><input type="radio" value="female" id="female" name="gender"><label for="female">Female</label></li>
                                    </ul>
                                </div>
                                <h3> - Hospital costs :</h3>
                                <p><input type="text"  name="costs"  value="{Expenses}"><b> LE</b></p>

                                <h3> - Room Number :</h3>
                                <p><input type="text" name="Room"  value="{room}"></p>

                                <h3> - Notes :</h3>
                                <div class="mws-form-item">
                                    <textarea name="Notes" class="required large" >{Notes}</textarea>
                                </div>
                                {/data}
                            </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label"> <span class="required"></span></label>
                                        <div class="mws-form-item">
                                            <input type="submit" value="  Update  " name="updaet_Patient" class="btn " />
                                        </div>                        
                                </div>
                            </form>
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
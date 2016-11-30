<?php
/*$thisPage=2;

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
                    	<span><i class="icon-business-card"></i> Employee Update</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <br/>
                            
                        <div>
                        {emptiy}
                        <form action="" method="post" class="mws-form" enctype="multipart/form-data" />
                            <label></label>
                            <div style="float:right;margin-right:30px">
                                <img src="<?php echo base_url()?>uploads/{file}" class="mws-crop-target" width="350px" alt="">
                            <br/><br/><br/>
                                <div class="mws-form-row">
                                        <label class="mws-form-label"></label>
                                        <div class="mws-form-item">
                                            <input type="file" name="image" />
                                        </div>
                                </div>
                            </div>
                            <div style="margin-left:25px">
                                <h3> - Full name :</h3>
                                <p><input type="text"  value="{employee_name}" name="name"></p>
                                   
                                <h3> - Function :</h3>
                                <div class="mws-form-item">
                                    <select class="mws-select2" value="{Degree}" name="Function">
                                        <option value="Administrative" >Administrative  </option>
                                        <option value="Doctor">Doctor  </option>
                                        <option value="Nurses">Nurses  </option>
                                        <option value="reception"> reception </option>
                                        <option value="Security">Security</option>
                                        <option value="cleaner">cleaner</option>
                                    </select>
                                </div>
                                <h3> - Section :</h3>
                                <div class="mws-form-item">
                                    <select class="mws-select2  small" name="Section" value="{sc_id}">
                                        <option value="{sc_id}">{section_name}</option>
                                        {section}        
                                        <option value="{sc_id}">{section_name}</option>
                                        {/section}
                                    </select>
                                </div>
                                <h3> - Gender :</h3>
                                <div class="mws-form-item">
                                        <ul class="mws-form-list" value="{sc_id}">
                                            <li><input type="radio" value="male" id="male" name="gender" class="required"/><label for="male">Male</label></li>
                                            <li><input type="radio" value="female" id="female" name="gender"><label for="female">Female</label></li>
                                        </ul>
                                </div>
                                <h3> - salary :</h3>
                                <p><input type="text"  name="cose" value="{Salary}"><b> LE</b></p>

                                <h3> - date attendance and leave :</h3>
                                <p><input type="text" name="time"  value="{Times}"></p>

                                <h3> - Notes :</h3>
                                <p><textarea name="note" >{Notes}</textarea></p>
                            </div>
                                <div class="mws-form-row">
                                <label class="mws-form-label"> <span class="required"></span></label>
                                    <div class="mws-form-item">
                                        <input type="submit" value="  Update  " name="update_emptiyee" class="btn " />
                                    </div>                        
                                </div>
                        </form>
                        {/emptiy}
                        <br/>
                    </div>
                           
                </div>            
                    <br/><br/><br/>
            </div>
                

<?php
/*include './include/footer.php';*/
?>
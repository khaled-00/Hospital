<?php
/*$thisPage=1;

include './include/html.php';
include './include/head.php';
*/?>
<!--  STAARTTT-->
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            	<!-- Statistics Button Container -->
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-add-contact"></i> Patient data</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form id="mws-wizard-form" class="mws-form" action="" method="post">
                            <fieldset id="step-1" class="mws-form-inline">
                                <legend class="wizard-label"><i class="icol-accept"></i> Register new patients</legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Fullname <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="fullname" value="<?php echo set_value('fullname') ?>" class="required large">
                                    </div>
                                </div>
                                <br/>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Continued to section <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <select class="mws-select2 small" name="sectionname">
                                                {sc}
                                                <option value="{sc_id}">{section_name}</option>
                                                {/sc}
                                            </select>
                                        </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Room Number   <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <div class="mws-form-col-2-8">
                                            <input type="text" name="Room" value="<?php echo set_value('room') ?>" class="mws-spinner-time" placeholder="20 . .  .">
                                        </div>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Notes <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="note" rows="" cols="" value="<?php echo set_value('note') ?>" class="required large"></textarea>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Gender <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list">
                                            <li><input type="radio" value="male" id="male" name="gender" class="required"/> <label for="male">Male</label></li>
                                            <li><input type="radio" value="female" id="female" name="gender"> <label for="female">Female</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
                                    </div> 
                                </div>  
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">The patient's condition <span class="required">*</span></label>
                                            <div class="mws-form-item">
                                                <select class="mws-select2 small" name="case">
                                                    <option value="Advice">Advice</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Express">Express</option>
                                                    <option value="Hazardous">Hazardous</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">Hospital costs <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <div class="mws-form-col-2-8">
                                            <input type="text" value="<?php echo set_value('Case') ?>" name="costs" ><b> LE</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-row">
                                    <label class="mws-form-label">Insert Patient <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <input type="submit" value="Registration" name="InsertPatient" class="btn " />
                                    </div> 
                                    
                    </div>
                            </fieldset><!--  -->
                        </form>
                </div>         
                            

                <div class="mws-panel grid_8 mws-collapsible">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Patient data</span>
                        </div>
                    <div id="mws-searchbox" class="mws-inset">
                        <form action="" method="post">
                            <input type="text" name="textsearch" class="mws-search-input" placeholder="Search...">
                            <input type="submit" name="search" class="mws-search-submit" /><i class="icon-search"></i>
                        </form>
                    </div>
                    <!-- Search -->
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table mws-datatable">
                            <?php  if($this->input->post('search'))/*if click search*/  {?>
                                <tbody>
                                    {search}
                                    <tr>
                                        <td>{patients_name}</td>
                                        <td>{section_name}</td>
                                        <td>{room}</td>
                                        <td>{gender}</td>
                                        <td><span class="badge badge-important">Waiting</span></td>
                                        <td>
                                            <span class="btn-group">
                                                <a href="<?php echo base_url()?>Patient/view/{p_id}" class="btn btn-small"><i class="icon-search"></i></a>
                                                <a href="<?php echo base_url()?>update_Patient/Update/{p_id}" class="btn btn-small"><i class="icon-pencil"></i></a>
                                                <a href="<?php echo base_url()?>add_patients/Delete/{p_id}" class="btn btn-small"><i class="icon-trash"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    {/search}
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- END Search -->
                    <!-- Table -->
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>section</th>
                                    <th>room number</th>
                                    <th>Gender</th>
                                    <th>costs</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {patients}
                                <tr>
                                    <td>{patients_name}</td>
                                    <td>{section_name}</td>
                                    <td>{room}</td>
                                    <td>{gender}</td>
                                    <td><span class="badge badge-important">Waiting</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="<?php echo base_url()?>Patient/view/{p_id}" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="<?php echo base_url()?>update_Patient/Update/{p_id}" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="<?php echo base_url()?>add_patients/Delete/{p_id}" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                {/patients}
                            </tbody>
                        </table>
                    </div>
                    <!-- END Table -->
                </div>
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
<?php
/*include './include/footer.php';*/
?>
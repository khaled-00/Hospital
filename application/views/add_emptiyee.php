<?php
/*$thisPage = 2;

include './include/html.php';
include './include/head.php';
*/

?>

 <!-- STAARTT -->
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            	<!-- Statistics Button Container -->
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-add-contact"></i> Employee data</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form id="mws-wizard-form" class="mws-form" action="" method="post"  enctype="multipart/form-data" />
                            
                            <fieldset id="step-1" class="mws-form-inline">
                                <legend class="wizard-label"><i class="icol-accept"></i>  Register new Employee</legend>
                                <div  class="mws-form-row">
                                    <label class="mws-form-label">Full name <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="fullname" class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Function <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <select class="mws-select2 small" name="function">
                                                <option value="Administrative">Administrative  </option>
                                                <option value="Doctor">Doctor  </option>
                                                <option value="Nurses">Nurses  </option>
                                                <option value="reception"> reception </option>
                                                <option value="Security">Security</option>
                                                <option value="cleaner">cleaner</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mws-form-row">
                                    	<label class="mws-form-label">Image employee<span class="required">*</span></label>
                                    	<div class="mws-form-item">
                                            <input type="file" name="image" />
                                        </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Notes <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="note" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Gender <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list">
                                            <li><input type="radio" id="male" value="male" name="gender" class="required"/> <label for="male">Male</label></li>
                                            <li><input type="radio" id="female" value="female" name="gender" /> <label for="female">Female</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">section <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <select class="mws-select2 small" name="section">
                                                {sec}
                                                <option value="{sc_id}">{section_name}</option>
                                                {/sec}
                                            </select>
                                        </div>
                                </div>
                                <div class="mws-form-row">
                                        <label class="mws-form-label">Coming date   <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <div class="mws-form-col-2-8">
                                                <input type="text" class="mws-spinner-time" name="T_on"placeholder="6:10 AM . .  .">
                                            </div>
                                        </div>
                                </div>
                                
                                <div class="mws-form-row">
                                        <label class="mws-form-label">date to leave <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <div class="mws-form-col-2-8">
                                                <input type="text" name="T_oof" placeholder="6:10 PM . .  ." />                              
                                            </div>
                                        </div>
                                </div>
                                <div class="mws-form-row">
                                        <label class="mws-form-label">Salary  <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <div class="mws-form-col-2-8">
                                                <input type="text" name="Salary" placeholder="5000 .  .   ." ><b> LE</b>
                                            </div>
                                        </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Insert Employee <span class="required">*</span></label>
                                        <div class="mws-form-item">
                                            <input type="submit" value="Registration" name="Insert_employee" class="btn " />
                                    </div> 
                            </fieldset>
                        </form>
                   </div>         
                            

                <div class="mws-panel grid_8 mws-collapsible">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Employee data</span>
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
                            <?php  if($this->input->post('search'))  {?>
                                <tbody>
                                    {search}
                                    <tr>
                                        <td>{employee_name}</td>
                                        <td>{Degree}</td>
                                        <td>{section_name}</td>
                                        <td>{Times}</td>
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
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>Function</th>
                                    <th>section</th>
                                    <th>Times</th>
                                    <th>State salary</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {show}
                                <tr>
                                    <td>{employee_name}</td>
                                    <td>{Degree}</td>
                                    <td>{section_name}</td>
                                    <td>{Times}</td>
                                    <td><span class="badge badge-info">Done</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="<?php echo base_url()?>emptiyee/view/{e_id}" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="<?php echo base_url()?>update_emptiyee/Update/{e_id}" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="<?php echo base_url()?>add_emptiyee/Delete/{e_id}" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                               {/show}
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->

<?php
/*include './include/footer.php';*/
?>
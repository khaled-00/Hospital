<?php
/*$thisPage=3;

include './include/html.php';
include './include/head.php';*/
?> 

<div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	<!-- Statistics Button Container -->
            	<div class="mws-stat-container clearfix">
                	 <!-- 00000000000000000000000000000000000000000000 -->
                    <!-- Statistic Item -->
                     <a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-building"></span>
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title"> Section</span>
                            <span class="mws-stat-value up"><?php echo  $sections ?></span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-premium-support"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">reception</span>
                            <span class="mws-stat-value up"><?php echo  $reception ?></span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-user-suit"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Doctors</span>
                            <span class="mws-stat-value up"><?php echo  $doctor ?></span>
                        </span>
                    </a>

                     <a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-user-female"></span>
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Nurses</span>
                            <span class="mws-stat-value up"><?php echo  $Nurses ?></span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-user"></span>
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title"> Patients</span>
                            <span class="mws-stat-value up"><?php echo  $patients ?></span>
                        </span>
                    </a>
                    
                   

                    
                    
                	
                </div>
                <!-- 00000000000000000000000000000000000000000000 -->
                <!-- STAARTT -->
                <!-- Panels Start -->
                   <!-- .................................. Search ..........................
                   <div id="mws-searchbox" class="mws-inset">
                        <form action="typography.html">
                            <input type="text" class="mws-search-input" placeholder="Search...">
                            <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                        </form>
                    </div> 
                   -->
            	 <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Hospital Data</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th>Section \ data</th>
                                    <th>reception</th>
                                    <th>Doctors</th>
                                    <th>Nurses</th>
                                    <th>Patients</th>
                                    <th>Floor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Eyes</th>
                                    <td><?php echo $reception_Eyes ?></td>
                                    <td><?php echo $Doctor_Eyes ?></td>
                                    <td><?php echo $Nurses_Eyes ?></td>
                                    <td><?php echo $row_patients_Eyes ?></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>Heart</th>
                                    <td><?php echo $reception_Heart ?></td>
                                    <td><?php echo $Doctor_Heart ?></td>
                                    <td><?php echo $Nurses_Heart ?></td>
                                    <td><?php echo $row_patients_Heart ?></td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th>Teeth</th>
                                    <td><?php echo $reception_Teeth ?></td>
                                    <td><?php echo $Doctor_Teeth ?></td>
                                    <td><?php echo $Nurses_Teeth ?></td>
                                    <td><?php echo $row_patients_Teeth ?></td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th>intimal</th>
                                    <td><?php echo $reception_intimal ?></td>
                                    <td><?php echo $Doctor_intimal ?></td>
                                    <td><?php echo $Nurses_intimal ?></td>
                                    <td><?php echo $row_patients_intimal ?></td>
                                    <td>4</td>
                                </tr>
                                
                <!-- Panels End -->
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>
            <!-- Inner Container End -->
            
<?php
/*include './include/footer.php';*/
?>            
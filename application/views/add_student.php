<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    <p><?php
                if ($this->session->userdata('action_status') == 1):
                   ?>
                   <div style="padding:5px;box-sizing: border-box;text-align: center;background:lightgreen">
                       <h4><?php echo $this->session->userdata('action_message'); ?></h4>
                   </div>
                   <?php
                endif;
                $this->session->unset_userdata('action_status');
                $this->session->unset_userdata('action_message');
                ?>
                <!-- /.page-content -->
                <div class="row">
                    <?php
                    if ($this->session->userdata('action_status') == 1):
                       ?>
                       <div style="padding:5px;box-sizing: border-box;text-align: center;background:lightgreen">
                           <h4><?php echo $this->session->userdata('action_message'); ?></h4>
                       </div>
                       <?php
                    endif;
                    $this->session->unset_userdata('action_status');
                    $this->session->unset_userdata('action_message');
                    ?></p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

					

			<?php
        $se = $this->session->userdata('check');
//        echo '<pre>';
//        print_r($get_school_code);
//        echo '</pre>';
//        exit();
        ?>
        
			
            <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?php echo base_url() . 'manage_student/create_student'; ?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Student Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_name" value="<?php echo set_value('student_name'); ?>">
								
                                <?php echo form_error('student_name'); ?>
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Father Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_fname" value="<?php echo set_value('student_fname'); ?>">
								
                                <?php echo form_error('student_fname'); ?>
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Mother Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_mname" value="<?php echo set_value('student_mname'); ?>">
                                  <?php echo form_error('student_mname'); ?>
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Unique Code </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_ucode" value="<?php echo set_value('student_ucode'); ?>">
                                                <?php echo form_error('student_ucode'); ?>
							  </div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label" for="selectError">Gender</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_gender">
									
                                    <option value="Male" <?php
                                                if (set_value('student_gender') == 1) {
                                                    echo "selected";
                                                }
                                                ?> >Male</option>
                                                <option value="Female" <?php
                                                if (set_value('student_gender') == 2) {
                                                    echo "selected";
                                                }
                                                ?> >Female</option>
                                                
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date Of Birth</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker span6" id="date01" value="02/16/12" name="student_date_birth" value="<?php echo set_value('student_date_birth'); ?>">
                                                <?php echo form_error('student_date_birth'); ?>
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label " for="typeahead">Email</label>
							  <div class="controls">
								<input type="email" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_email" value="<?php echo set_value('student_email'); ?>">
                                                <?php echo form_error('student_email'); ?>
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Mobile </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_mobile" value="<?php echo set_value('student_mobile'); ?>">
                                                <?php echo form_error('student_mobile'); ?>
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="selectError">Academic Year</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_ayear">
									<?php
                                                    for ($year = date("Y"); $year >= 2014; $year--) {
                                                        $slct = (set_value('student_ayear') == $year) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?php echo $year ?>" <?php echo $slct; ?> ><?php echo $year ?></option> 
                                                    <?php } ?>
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Class</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_class">
									<?php foreach ($class_list as $class) {
                                                    ?>
                                                    <option value="<?php echo $class->class_id; ?>"><?php echo $class->class_name; ?></option>
                                                    <?php
                                                }
                                                ?> 
								  </select>
                                  <?php echo form_error('student_class'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Group</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_group" id="student_group" >
									<?php foreach ($group_list as $group) {
                                                    ?>
                                                    <option value="<?php echo $group->group_id; ?>"><?php echo $group->group_name; ?></option>
                                                    <?php
                                                }
                                                ?> 
								  </select>
                                  <?php echo form_error('student_group'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Optional Subject</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="optional_subject" id="optional_subject" >
									<?php foreach ($optional_list as $optional) {
                                                    ?>
                                                    <option value="<?php echo $optional->subject_id; ?>"><?php echo $optional->subject_name; ?></option>
                                                    <?php
                                                }
                                                ?> 
								  </select>
                                  <?php echo form_error('optional_subject'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Shift</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_shift"  >
									<?php foreach ($shift_list as $shift) {
                                                    ?>
                                                    <option value="<?php echo $shift->shift_id; ?>"><?php echo $shift->shift_name; ?></option>
                                                    <?php
                                                }
                                                ?> 
								  </select>
                                  <?php echo form_error('student_shift'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Section</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_section"  >
									<?php foreach ($section_list as $section) {
                                                    ?>
                                                    <option value="<?php echo $section->section_id; ?>"><?php echo $section->section_name; ?></option>
                                                    <?php
                                                }
                                                ?>
								  </select>
                                  <?php echo form_error('student_section'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Version / Medium</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_version"  >
									 <?php foreach ($version_list as $version) {
                                                    ?>
                                                    <option value="<?php echo $version->version_id; ?>"><?php echo $version->version_name; ?></option>
                                                    <?php
                                                }
                                                ?>
								  </select>
                                  <?php echo form_error('student_version'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError">Religion</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_religion"  >
									 <option value="Islam" <?php
                                                if (set_value('religion') == 1) {
                                                    echo "selected";
                                                }
                                                ?> >Islam</option>
                                                <option value="Hindus" <?php
                                                if (set_value('religion') == 2) {
                                                    echo "selected";
                                                }
                                                ?> >Hindus</option>
                                                <option value="Badhma" <?php
                                                if (set_value('religion') == 3) {
                                                    echo "selected";
                                                }
                                                ?> >Badhma</option>
                                                <option value="Cheristain" <?php
                                                if (set_value('religion') == 4) {
                                                    echo "selected";
                                                }
                                                ?> >Cheristain</option>
								  </select>
                                  <?php echo form_error('student_religion'); ?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Nationality</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_nationality">
									<option value="Islam" <?php
                                                if (set_value('religion') == 1) {
                                                    echo "selected";
                                                }
                                                ?> >Islam</option>
                                                <option value="Hindus" <?php
                                                if (set_value('religion') == 2) {
                                                    echo "selected";
                                                }
                                                ?> >Hindus</option>
                                                <option value="Badhma" <?php
                                                if (set_value('religion') == 3) {
                                                    echo "selected";
                                                }
                                                ?> >Badhma</option>
                                                <option value="Cheristain" <?php
                                                if (set_value('religion') == 4) {
                                                    echo "selected";
                                                }
                                                ?> >Cheristain</option>
                                                
								  </select>
                                  <?php echo form_error('student_religion'); ?>
								</div>
							  </div>
                              
                              <div class="control-group">
								<label class="control-label" for="selectError">Hostel Name</label>
								<div class="controls">
								  <select id="selectError3" class="span6 typeahead" name="student_hostel"  >
									<?php foreach ($hostel_list as $hostel) {
                                                    ?>
                                                    <option value="<?php echo $hostel->hostel_id; ?>"><?php echo $hostel->hostel_name; ?></option>
                                                    <?php
                                                }
                                                ?> 
								  </select>
                                  <?php echo form_error('student_hostel'); ?>
								</div>
							  </div>
                              <div class="control-group">
							  <label class="control-label" for="typeahead">Class Position </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="student_cposition" value="<?php echo set_value('student_cposition'); ?>">
                                                <?php echo form_error('student_cposition'); ?>
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Address </label>
							  <div class="controls">
								<textarea id="message" required class="form-control span6" name="student_address" value="<?php echo set_value('student_cposition'); ?>" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                                                <?php echo form_error('student_address'); ?>
							  </div>
							</div>
                            
                            

							<div class="control-group">
							  <label class="control-label" for="fileInput">Photo</label>
							  <div class="controls">
								<input class="span6 input-file uniform_on" id="fileInput" type="file" name="student_photo">
							  </div>
							</div> 
                            <div class="control-group">
								<label class="control-label">Checkboxes</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" > Is Active?
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> Is Transport?
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3">  Is Resident?
								  </label>
                                  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3">  Is Day Care?
								  </label>
								</div>
							  </div>         
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
					
						
			
			
			
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	
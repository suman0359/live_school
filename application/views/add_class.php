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
				<div class="box span6">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?php echo base_url() . 'creation/create_class' ?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Add Class  </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="class_name" value="<?php echo set_value('class_name'); ?>">
								
                                <?php echo form_error('class_name'); ?>
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
                
                <div class="box span6">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?php echo base_url() . 'creation/edit_class' ?>">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="selectError">Class List</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="class_name">
                                  		<option value="">Select Class Name</option>
									
                                    <?php foreach ($get_the_class as $list) {
                                                        ?>
                                                        <option value="<?php echo $list->class_id; ?>"><?php echo $list->class_name; ?></option>
                                                        <?php
                                                    }
                                                    ?> 
                                                
								  </select>
                                  <?php echo form_error('id'); ?>
								</div>
							  </div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">New Class </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="new_class" value="<?php echo set_value('new_class'); ?>">
								
                                <?php echo form_error('new_class'); ?>
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
            
            
            <div class="row-fluid sortable ui-sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<!--<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                        	<div class="row-fluid"><div class="span6"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select aria-controls="DataTables_Table_0" size="1" name="DataTables_Table_0_length"><option selected="selected" value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search: <input aria-controls="DataTables_Table_0" type="text"></label></div></div></div>-->
                            
                            	<table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
						  <thead>
							  <tr role="row">
                              	<th aria-label="Username: activate to sort column descending" aria-sort="ascending" style="width: 181px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting_asc">No</th>
                                <th aria-label="Date registered: activate to sort column ascending" style="width: 259px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Class List</th>
                                <th aria-label="Actions: activate to sort column ascending" style="width: 309px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Actions</th>
                              </tr>
						  </thead>   
						  
					  <tbody aria-relevant="all" aria-live="polite" role="alert">
                            <?php
												if (!empty($class_list)) {
													$i = 1;
													foreach ($class_list as $list) {
														?> 
                            <tr class="even">
								<td class="  sorting_1"><?php echo $i; ?></td>
								<td class="center "><?php echo $list->class_name; ?></td>
								
								<td class="center ">
									
									<a href="<?php echo base_url() . 'creation/delete_class/' . $list->class_id; ?>" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger" data-rel="tooltip" title="Delete">Delete</a>
								</td>
							</tr>
                            <?php
                                $i++;
                            }
                        } else {
                            echo '<tr><td colspan="3" align="center"><h4><br/><br/>- NO DATA FOUND -<br/><br/></h4></td></tr>';
                        }
                        ?>
                        </tbody>
                        </table>
                        
                        <!--<div class="row-fluid">
                        	<div class="span12">
                        		<div id="DataTables_Table_0_info" class="dataTables_info">Showing 1 to 10 of 32 entries
                        		</div>
                        	</div>
                        	<div class="span12 center">
                        		<div class="dataTables_paginate paging_bootstrap pagination">
                        			<ul>
                        				<li class="prev disabled">
                        					<a href="#">← Previous</a>
                        				</li>
                        				<li class="active">
                        					<a href="#">1</a>
                        				</li>
                                        <li>
                                        <a href="#">2</a>
                                        </li>
                                        <li>
                                        <a href="#">3</a>
                                        </li>
                                        <li>
                                        <a href="#">4</a>
                                        </li>
                                        <li class="next">
                                        <a href="#">Next → </a>
                                        </li>
                                    </ul>
                        		</div>
                        	</div>
                        </div>-->
                        
                        
                        </div>            
					</div>
				</div><!--/span-->
			
			</div>
					
						
			
			
			
			
			
       

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
	
	
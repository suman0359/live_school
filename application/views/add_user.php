<?php
        $se = $this->session->userdata('check');
//        echo '<pre>';
//        print_r($get_school_code);
//        echo '</pre>';
//        exit();
        ?>


            <!-- page content -->
            <div class="right_col" role="main">
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
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add User Name </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() . 'user/create_user'; ?>">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" name="user" value="<?php echo set_value('user'); ?>" required class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <?php echo form_error('user'); ?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="first-name" name="password" value="<?php echo set_value('password'); ?>" required class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <?php echo form_error('password'); ?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Confirm Password<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="first-name" name="password1" value="<?php echo set_value('password1'); ?>" required class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <?php echo form_error('password1'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">User Role</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_group form-control" name="user_role"  >                                                    
                                                    <optgroup label="Select User Role">
                                                        <option value="1" <?php
														if (set_value('user_role') == 1) {
															echo "selected";
														}
														?>>Administrator</option>
														<option value="2" <?php
														if (set_value('user_role') == 2) {
															echo "selected";
														}
														?> >Employee</option> 
                                                    </optgroup>
                                                </select>
                                                <?php echo form_error('user_role'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_group form-control" name="status"  >                                                    
                                                    <optgroup label="Select User Role">
                                                        <option value="1" <?php
														if (set_value('status') == 1) {
															echo "selected";
														}
														?> >Enable</option>
														<option value="2" <?php
														if (set_value('status') == 2) {
															echo "selected";
														}
														?> >Disable</option>
                                                    </optgroup>
                                                </select>
                                                <?php echo form_error('status'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Photo</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" id="id-input-file-11" name="img" value="<?php echo set_value('img'); ?>" />
                                            <?php echo form_error('img'); ?>
                                            </div>
                                        </div>
                                                                                
                                                                             
                                        
                                                                               
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>User Name List </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th>No </th>
                                                <!--<th>Photo</th>-->
                                                <th>User Name</th>
                                                <th>User Rrole</th>
                                                <th>User Status</th>
                                                <th colspan="2">Action</th>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                            
                                            <?php
											
                                        $i = 1;
                                        foreach ($lists as $list) {
											
                                            ?>
                                            <tr class="odd pointer">
                                                
                                                <td class=" "><?php echo $i; ?></td>
                                                <!--<td class=" "><img src="<?php echo base_url(); ?><?php echo $se['user_profile_image'] ?>" alt="<?php echo $se['user_name'] ?>"/></td>-->
                                                <td class=" "><?php echo $list->user_name; ?></td>
                                                <td class=""><?php
                                                    if ($list->user_role == 1) {
                                                        echo "Administrator";
                                                    } else {
                                                        echo "Employee";
                                                    }
                                                    ?>  </td>
                                                 <td><?php
                                                    if ($list->user_status == 1) {
                                                        echo "Enable";
                                                    } else {
                                                        echo "Disable";
                                                    }
                                                    ?></td>
                                                <td class=" "><a href="<?php echo base_url() . 'creation/delete_user/' . $list->user_id; ?>" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger" data-rel="tooltip" title="Delete">
                                        Delete
                                        </a></td>
                                        <td><a href="<?php echo base_url() . 'user/user_edit/' . $list->user_id; ?>" class="btn btn-success btn-xs" title="Edit">Edit</a></td>
                                                
                                            </tr>
                                            <?php
                                $i++;
                            }
                        
                        ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>

                

                <!-- footer content -->

                
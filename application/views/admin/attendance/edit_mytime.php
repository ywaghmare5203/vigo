<div class="panel panel-custom" data-collapsed="0">
    <div class="panel-heading">
        <div class="panel-title">
            <strong><?= lang('edit') . ' ' . lang('time_log') ?></strong>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                    class="sr-only">Close</span></button>
        </div>
    </div>
    <div class="panel-body">
        <form id="time_validation"
              action="<?php echo base_url() ?>admin/attendance/cheanged_mytime/<?php echo $clock_info->clock_id ?>"
              method="post" class="">
            <div class="col-sm-12 margin">
                <div class="col-lg-2"></div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('old_time_in') ?> </label>
                    <div class="input-group">
                        <p class="form-control-static"><?php echo date('h:i A', strtotime($clock_info->clockin_time)) ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('new_time_in') ?> </label>
                    <div class="input-group">
                        <input type="text" name="clockin_edit" class="form-control timepicker"
                               value="<?php echo date('h:i A', strtotime($clock_info->clockin_time)) ?>">
                        <div class="input-group-addon">
                            <a href="#"><i class="fa fa-clock-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 margin">
                <div class="col-lg-2"></div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('old_time_out') ?> </label>
                    <div class="input-group">
                        <p class="form-control-static"><?php echo date('h:i A', strtotime($clock_info->clockout_time)) ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('new_time_out') ?></label>
                    <div class="input-group">
                        <input type="text" name="clockout_edit" class="form-control timepicker"
                               value="<?php echo date('h:i A', strtotime($clock_info->clockout_time)) ?>">
                        <div class="input-group-addon">
                            <a href="#"><i class="fa fa-clock-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  change below -->
            <div class="col-sm-12 margin">
                <div class="col-lg-2"></div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('old_date_in') ?> </label>
                    <div class="input-group">
                        <p class="form-control-static"><?php echo date($clock_info->date_in) ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('new_date_in') ?></label>
                    <div class="input-group">
                        <input type="text" name="datein_edit" class="form-control datepicker"
                               value="<?php echo date($clock_info->date_in) ?>">
                        <div class="input-group-addon">
                            <a href="#"><i class="fa fa-calendar"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 margin">
                <div class="col-lg-2"></div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('old_date_out') ?> </label>
                    <div class="input-group">
                        <p class="form-control-static"><?php echo date($clock_info->date_out) ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="control-label"><?= lang('date_out') ?></label>
                    <div class="input-group">
                        <input type="text" name="dateout_edit" class="form-control datepicker"
                               value="<?php echo date($clock_info->date_out) ?>">
                        <div class="input-group-addon">
                            <a href="#"><i class="fa fa-calendar"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- change above -->
            <div class="col-md-12 margin">
                <div class="col-lg-2"></div>
                <div class="col-sm-8 center-block">
                    <label class="control-label"><?= lang('edit_reason') ?> <span
                            class="required">*</span></label>
                    <div>
                        <textarea class="form-control" name="reason" rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-12 margin">
                <div class="col-lg-2"></div>
                <div class="col-sm-4 m0 mt">
                    <button type="submit"
                            class="btn btn-block btn-primary"><?= lang('request') . ' ' . lang('update') ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="ip">
    <div id="ipWidgetFormPopup" class="ipModuleContentFormModal modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php _e('Form options', 'ipAdmin'); ?></h4>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#ipWidgetFormPopup-fields" data-toggle="tab"><?php _e('Fields', 'ipAdmin'); ?></a></li>
                        <li><a href="#ipWidgetFormPopup-options" data-toggle="tab"><?php _e('Options', 'ipAdmin'); ?></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="ipWidgetFormPopup-fields">
                            <div class="ipWidget_ipForm_container"></div>
                            <div class="hidden">
                                <div class="ipsFieldTemplate form-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default ipsFieldMove" type="button" title="<?php _e('Drag', 'ipAdmin'); ?>"><i class="fa fa-arrows"></i></button>
                                        </div>
                                        <input type="text" class="form-control ipsFieldLabel" name="label" value="" />
                                        <div class="input-group-addon">
                                            <select class="ipsFieldType">
                                                <?php foreach($fieldTypes as $fieldType) { ?>
                                                    <option value="<?php echo esc($fieldType['key']); ?>"><?php echo esc($fieldType['title']); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="input-group-addon">
                                            <input type="checkbox" class="ipsFieldRequired" title="<?php _e('Required', 'ipAdmin'); ?>" />
                                        </div>
                                        <div class="input-group-btn">
                                            <button href="#" class="btn btn-default ipsFieldOptions" title="<?php _e('Options', 'ipAdmin'); ?>"><i class="fa fa-cogs"></i></button>
                                            <button class="btn btn-danger ipsFieldRemove" type="button" title="<?php _e('Delete', 'ipAdmin'); ?>"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-new ipsFieldAdd"><?php _e('Add new', 'ipAdmin'); ?></button>
                        </div>

                        <div class="tab-pane" id="ipWidgetFormPopup-options">
                            <div class="form-group type-textarea name-success">
                                <label><?php _e('Thank you message', 'ipAdmin'); ?></label>
                                <div class="ipWidgetFormSuccess ipsSuccess"><?php echo !empty($success) ? $success : ''; ?></div>
                            </div>
                            <?php echo $optionsForm; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Cancel', 'ipAdmin'); ?></button>
                    <button type="button" class="btn btn-primary ipsConfirm"><?php _e('Confirm', 'ipAdmin'); ?></button>
                </div>
            </div>
        </div>
    </div>
    <div id="ipWidgetFormPopupOptions" class="ipsFieldOptionsPopup modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php _e('Field options', 'ipAdmin'); ?></h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Cancel', 'ipAdmin'); ?></button>
                    <button type="button" class="btn btn-primary ipsConfirm"><?php _e('Confirm', 'ipAdmin'); ?></button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
      <div class="col-12">
            <div class="card">
                  <div class="card-header">
                        <p><?php echo lang('Auth.edit_group_subheading'); ?></p>
                  </div>
                  <div class="card-body">
                        <?php echo form_open(current_url()); ?>

                        <p>
                              <?php echo form_label(lang('Auth.edit_group_name_label'), 'group_name'); ?> <br />
                              <?php echo form_input($group_name); ?>
                        </p>

                        <p>
                              <?php echo form_label(lang('Auth.edit_group_desc_label'), 'description'); ?> <br />
                              <?php echo form_input($group_description); ?>
                        </p>

                        <p><?php echo form_submit('submit', lang('Auth.edit_group_submit_btn'),['class' => 'btn btn-primary']); ?></p>

                        <?php echo form_close(); ?>
                  </div>
            </div>
      </div>
</div>
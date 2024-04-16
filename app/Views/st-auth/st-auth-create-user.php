<div class="row">
      <div class="col-12">
            <div class="card">
                  <div class="card-header">
                        <p class="card-title"><?php echo lang('Auth.create_user_subheading'); ?></p>
                  </div>
                  <div class="card-body">
                        <?php echo form_open('auth/create-user'); ?>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_fname_label'), 'first_name'); ?> <br />
                              <?php echo form_input($first_name); ?>
                        </p>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_lname_label'), 'last_name'); ?> <br />
                              <?php echo form_input($last_name); ?>
                        </p>

                        <?php
                        if ($identity_column !== 'email') {
                              echo '<p>';
                              echo form_label(lang('Auth.create_user_identity_label'), 'identity');
                              echo '<br />';
                              echo \Config\Services::validation()->getError('identity');
                              echo form_input($identity);
                              echo '</p>';
                        }
                        ?>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_company_label'), 'company'); ?> <br />
                              <?php echo form_input($company); ?>
                        </p>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_email_label'), 'email'); ?> <br />
                              <?php echo form_input($email); ?>
                        </p>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_phone_label'), 'phone'); ?> <br />
                              <?php echo form_input($phone); ?>
                        </p>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_password_label'), 'password'); ?> <br />
                              <?php echo form_input($password); ?>
                        </p>

                        <p>
                              <?php echo form_label(lang('Auth.create_user_password_confirm_label'), 'password_confirm'); ?> <br />
                              <?php echo form_input($password_confirm); ?>
                        </p>


                        <p><?php echo form_submit('submit', lang('Auth.create_user_submit_btn'),['class' => 'btn btn-primary']); ?></p>

                        <?php echo form_close(); ?>
                  </div>
            </div>
      </div>
</div>
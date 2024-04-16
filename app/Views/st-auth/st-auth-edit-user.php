<div class="row"> 
      <div class="col-12">
            <div class="card">
                  <div class="card-header">
                        <h4 class="card-title"><?php echo lang('Auth.edit_user_subheading'); ?></h4>
                  </div>
                  <div class="card-body">
                        <?php echo form_open(uri_string()); ?>

                        <div class="row">
                              <div class="col-md-6 col-12">
                                    <?php echo form_label(lang('Auth.edit_user_fname_label'), 'first_name'); ?> <br />
                                    <?php echo form_input($first_name); ?>
                              </div>
                              <div class="col-md-6 col-12">
                                    <?php echo form_label(lang('Auth.edit_user_lname_label'), 'last_name'); ?> <br />
                                    <?php echo form_input($last_name); ?>
                              </div>
                              <div class="col-md-6 col-12">
                                    <?php echo form_label(lang('Auth.edit_user_company_label'), 'company'); ?> <br />
                                    <?php echo form_input($company); ?>
                              </div>
                              <div class="col-md-6 col-12">
                                    <?php echo form_label(lang('Auth.edit_user_phone_label'), 'phone'); ?> <br />
                                    <?php echo form_input($phone); ?>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-6 col-12">
                                    <?php echo form_label(lang('Auth.edit_user_password_label'), 'password'); ?> <br />
                                    <?php echo form_input($password); ?>
                              </div>
                              <div class="col-md-6 col-12">
                                    <?php echo form_label(lang('Auth.edit_user_password_confirm_label'), 'password_confirm'); ?><br />
                                    <?php echo form_input($password_confirm); ?>
                              </div>
                        </div>

                        <hr>
                        <?php if ($ionAuth->isAdmin()) : ?>

                              <h3><?php echo lang('Auth.edit_user_groups_heading'); ?></h3>
                              <?php $currentGroupsAssoc = [];
                              foreach ($currentGroups as $grp) {
                                    $currentGroupsAssoc[$grp->id] = true;
                              }

                              foreach ($groups as $group) :
                                    $gID = $group['id'];
                                    $checked = isset($currentGroupsAssoc[$gID]) ? ' checked="checked"' : '';
                              ?>
                                    <label class="checkbox">
                                          <input type="checkbox" name="groups[]" value="<?php echo htmlspecialchars($gID, ENT_QUOTES, 'UTF-8'); ?>" <?php echo $checked; ?>>
                                          <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </label>
                              <?php endforeach; ?>


                        <?php endif ?>
                        <hr>
                        <?php echo form_hidden('id', $user->id); ?>

                        <p><?php echo form_submit('submit', lang('Auth.edit_user_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

                        <?php echo form_close(); ?>
                  </div>
            </div>
      </div>
</div>
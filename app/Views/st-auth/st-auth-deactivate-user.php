<div class="row">
  <div class="col-12">
    <div class="card"> 
      <div class="card-body">
        <?php echo form_open('auth/deactivate/' . $user->id); ?>

        <p><?php echo sprintf(lang('Auth.deactivate_subheading'), $user->username); ?></p>

        <div class="form-group clearfix">
          <div class="icheck-success d-inline">
            <input type="radio" name="confirm" checked id="success" value="yes">
            <label for="success">Yes</label>
          </div>
          <div class="icheck-danger d-inline">
            <input type="radio" name="confirm" id="danger" value="no">
            <label for="danger">No</label>
          </div>
        </div>

        <?php echo form_hidden('id', $user->id); ?>

        <p><?php echo form_submit('submit', lang('Auth.deactivate_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
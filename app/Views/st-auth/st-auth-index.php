<div class="row"> 
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<?php echo anchor('auth/create-user', lang('Auth.index_create_user_link'),['class'=>'btn btn-secondary']) ?>
				<?php echo anchor('auth/create-group', lang('Auth.index_create_group_link'),['class'=>'btn btn-secondary']) ?>
			</div>
			<div class="card-body">
				<table id="st_table" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th><?php echo lang('Auth.index_fname_th'); ?></th>
							<th><?php echo lang('Auth.index_lname_th'); ?></th>
							<th><?php echo lang('Auth.index_email_th'); ?></th>
							<th><?php echo lang('Auth.index_groups_th'); ?></th>
							<th><?php echo lang('Auth.index_status_th'); ?></th>
							<th><?php echo lang('Auth.index_action_th'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $user) : ?>
							<tr>
								<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
								<td>
									<?php foreach ($user->groups as $group) : ?>
										<?php echo anchor('auth/edit-group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'), ['class' => 'badge badge-dark m-1']); ?><br />
									<?php endforeach ?>
								</td>
								<td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link'), ['class' => 'btn btn-success']) : anchor("auth/activate/" . $user->id, lang('Auth.index_inactive_link'), ['class' => 'btn btn-danger']); ?></td>
								<td><?php echo anchor('auth/edit-user/' . $user->id, lang('Auth.index_edit_link'), ['class' => 'btn btn-primary']) ?></td>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th><?php echo lang('Auth.index_fname_th'); ?></th>
							<th><?php echo lang('Auth.index_lname_th'); ?></th>
							<th><?php echo lang('Auth.index_email_th'); ?></th>
							<th><?php echo lang('Auth.index_groups_th'); ?></th>
							<th><?php echo lang('Auth.index_status_th'); ?></th>
							<th><?php echo lang('Auth.index_action_th'); ?></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<table>
	<tbody>
		<tr>
			<td><strong><?=lang('si:php:safe_mode')?></strong></td>
			<td>
				<?php $safemode = strtolower(@ini_get('safe_mode'));
				if ($safemode == 'on' || $safemode == 'yes' || $safemode == 'true' ||  $safemode == 1) echo lang('yes');
				else echo lang('no');
				?>
			</td>
		</tr>
		<tr>
			<td><strong><?=lang('si:php:memory_limit')?></strong></td>
			<td><?=@ini_get('memory_limit')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:php:post_max_size')?></strong></td>
			<td><?=@ini_get('post_max_size')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:php:upload_max_filesize')?></strong></td>
			<td><?=@ini_get('upload_max_filesize')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:php:max_execution_time')?></strong></td>
			<td><?=@ini_get('max_execution_time')?></td>
		</tr>
	</tbody>
</table>
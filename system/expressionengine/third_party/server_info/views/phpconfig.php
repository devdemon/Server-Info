<table>
	<tbody>
		<tr>
			<td><strong><?=lang('si:php:version')?></strong></td>
			<td><?=phpversion()?></td>
		</tr>
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
		<tr>
			<td><strong><?=lang('si:php:os')?></strong></td>
			<td><?=@php_uname('s').' '.@php_uname('r')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:php:mod_security')?></strong></td>
			<td>
			<?php
				$enabled = FALSE;
				if (function_exists('apache_get_modules')) $modules = @apache_get_modules();
				else $modules = FALSE;

				if (empty($modules) == TRUE OR is_array($modules) == FALSE)
				{
					ob_start();
					phpinfo(INFO_MODULES);
					$contents = ob_get_clean();
					if (strpos($contents, 'mod_security') != FALSE) $enabled = TRUE;
				}
				else
				{
					if (in_array('mod_security', $modules) != FALSE) $enabled = TRUE;
				}
			?>
			<?php if ($enabled == TRUE) echo lang('yes'); else echo lang('si:php:mod_security_off');?>
			</td>
		</tr>
	</tbody>
</table>
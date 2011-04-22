<table>
	<tbody>
		<tr>
			<td><strong><?=lang('si:date:php_server_time')?></strong></td>
			<td><?=$this->localize->decode_date('%l, %d-%M-%y %H:%i:%s %O (%T)', time())?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:date:ee_server_time')?></strong></td>
			<td><?=$this->localize->decode_date('%l, %d-%M-%y %H:%i:%s %O (%T)', $this->localize->now)?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:date:user_server_time')?></strong></td>
			<td><?=$this->localize->decode_date('%l, %d-%M-%y %H:%i:%s %O (%T)', $this->localize->set_localized_time())?></td>
		</tr>

		<tr>
			<td><strong><?=lang('si:date:php_server_tzone')?></strong></td>
			<td><?=date('e')?> (<?=date('O')?>)</td>
		</tr>
		<tr>
			<td><strong><?=lang('si:date:ee_server_tzone')?></strong></td>
			<td><?php $var = explode(') ', substr(lang($this->config->item('server_timezone')), 1)); echo $var[0];?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:date:user_server_tzone')?></strong></td>
			<td><?php $var = explode(') ', substr(lang($this->session->userdata['timezone']), 1)); echo $var[0];?></td>
		</tr>

		<tr>
			<td><strong><?=lang('si:date:php_server_dst')?></strong></td>
			<td><?php if (date('I') == 1) echo lang('yes'); else echo lang('no')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:date:ee_server_dst')?></strong></td>
			<td><?php if ($this->config->item('daylight_savings') == 'y') echo lang('yes'); else echo lang('no')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:date:user_server_dst')?></strong></td>
			<td><?php if ($this->session->userdata['daylight_savings'] == 'y') echo lang('yes'); else echo lang('no')?></td>
		</tr>
	</tbody>
</table>
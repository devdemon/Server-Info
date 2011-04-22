<table>
	<tbody>
		<tr>
			<td><strong><?=lang('si:ee:system_on')?></strong></td>
			<td><?php if ($this->config->item('is_system_on') == 'y') echo lang('yes'); else echo lang('no')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:ee:site_on')?></strong></td>
			<td><?php if ($this->config->item('is_site_on') == 'y') echo lang('yes'); else echo lang('no')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:ee:site_url')?></strong></td>
			<td><?=$this->config->item('site_url')?></td>
		</tr>
		<tr>
			<td><strong><?=lang('si:ee:cp_url')?></strong></td>
			<td><?=$this->config->item('cp_url')?></td>
		</tr>
	</tbody>
</table>
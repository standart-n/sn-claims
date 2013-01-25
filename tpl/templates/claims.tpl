<div class="container-fluid">
	<div class="row-fluid">
		<h4>Заявки на сайте</h4>
	</div>

	<div class="row-fluid">
		<div class="span12">
		<table class="table table-hover table-condensed table-striped">
			<thead>
				<tr>
					<th class="hidden-phone">#</th>
					<th>Имя</th>
					<th>Статус</th>
					<th>Телефон</th>
					<th class="hidden-phone">E-mail</th>
					<th class="hidden-phone hidden-tablet">Skype</th>
					<th class="hidden-phone hidden-tablet">Icq</th>
					<th class="hidden-phone hidden-tablet">Site</th>
					<th>Город</th>
					<th>Дата</th>
				</tr>
			</thead>
			<tbody>
			{if isset($claims)}
				{foreach from=$claims item=key}
					<tr class="{$key.line_class}">
						<td class="hidden-phone"><small>{$key.id}</small></td>
						<td><small>{$key.caption}</small></td>
						<td>
							<input data-id="{$key.id}" class="status input-medium" type="text" value="{$key.status}">
						</td>	
						<td><small>{$key.msg}</small></td>
						<td class="hidden-phone"><small>{$key.email}</small></td>
						<td class="hidden-phone hidden-tablet"><small>{$key.skype}</small></td>
						<td class="hidden-phone hidden-tablet"><small>{$key.icq}</small></td>
						<td class="hidden-phone hidden-tablet"><small>{$key.site}</small></td>
						<td><small>{$key.city}</small></td>
						<td><small>{$key.post_dt}</small></td>
					</tr>
				{/foreach}
			{/if}
			</tbody>
		</table>		
		</div>
	</div>
</div>
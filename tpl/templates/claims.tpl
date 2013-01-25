<div class="row-fluid">
	<h3>Заявки на сайте</h3>
</div>

<div class="row-fluid">
	<div class="span12">
	<table class="table table-hover table-condensed table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Имя</th>
				<th>Статус</th>
				<th>Телефон</th>
				<th>E-mail</th>
				<th>Skype</th>
				<th>Icq</th>
				<th>Site</th>
				<th>Город</th>
				<th>Дата</th>
			</tr>
		</thead>
		<tbody>
		{if isset($claims)}
			{foreach from=$claims item=key}
				<tr class="{$key.line_class}">
					<td>{$key.id}</td>
					<td>{$key.caption}</td>
					<td><input data-claim-id="{$key.id}" class="claims-edit-status input-medium" type="text" value="{$key.status}"></td>
					<td>{$key.msg}</td>
					<td>{$key.email}</td>
					<td>{$key.skype}</td>
					<td>{$key.icq}</td>
					<td>{$key.site}</td>
					<td>{$key.city}</td>
					<td>{$key.post_dt}</td>
				</tr>
			{/foreach}
		{/if}
		</tbody>
	</table>		
	</div>
</div>

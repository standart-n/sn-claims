
		<table align="center" width="100%" cellpadding="5" cellspacing="1" border="0">
			<tr valign="top" class="claims-table-line-caption">
				<td align="left">
					<span class="claims-table-caption">#</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Имя</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Статус</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Телефон</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">E-mail</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Skype</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Icq</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Site</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Город</span>
				</td>
				<td align="left">
					<span class="claims-table-caption">Дата</span>
				</td>
			</tr>
		{if isset($claims)}
			{foreach from=$claims item=key}
				<tr valign="top" class="{$key.line_class}">
					<td align="left">
						{$key.id}
					</td>
					<td align="left">
						{$key.caption}
					</td>
					<td align="left">
						{$key.status}
					</td>
					<td align="left">
						{$key.msg}
					</td>
					<td align="left">
						{$key.email}
					</td>
					<td align="left">
						{$key.skype}
					</td>
					<td align="left">
						{$key.icq}
					</td>
					<td align="left">
						{$key.site}
					</td>
					<td align="left">
						{$key.city}
					</td>
					<td align="left">
						{$key.post_dt}
					</td>
				</tr>
			{/foreach}
		{/if}
		</table>		


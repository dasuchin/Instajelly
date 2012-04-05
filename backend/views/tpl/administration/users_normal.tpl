<h1>{$userType} Users</h1>

<div class="pad25">

	{include file="tpl/administration/users_minimenu.tpl"}
	
	<ul class="item-title">
		<li class="col-last">Created</li>
		<li class="col-first">Username</li>
	</ul>
	
	<div class="hug">
	{if !empty($userList)}
			{foreach from=$userList item=user}
			<div class="item" id="usercontainer_{$user.id}">
			
				<a href="{$httpUrl}admin/users/deleteuser?user_id={$user.id}" onclick="return confirm('Are you sure you want to delete this user?');" class="icon-trash"><img src="{$skin}img/icon-trash.gif" alt="delete"/></a>
				
				<div class="left">
					<a href="/{$user.username}" target="_blank">{$user.username}</a>
				</div>

				<div class="col">{$user.cDate|date_format:"%D"}</div>
			
			<div class="clear"></div>
			</div>
			{/foreach}
	{else}
		- no users yet -
	{/if}
	</div>
	
</div>

<div data-role="content">

	<form action="form.php" method="post">
		<div data-role="fieldcontain">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value=""  />
		
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" value="" />
		</div>
		<fieldset class="ui-grid-a">

			<div class="ui-block-a"><?php echo anchor('', 'Cancel', array('data-role'=>'button'));?></div>
			<div class="ui-block-b"><?php echo anchor('/commute/usr/UxJ9CloO', 'Submit', array('data-role'=>'button','data-theme'=>'b'));?></div>	   
		</fieldset>
	</form>	<!-- /form -->	
	</div><!-- /content -->



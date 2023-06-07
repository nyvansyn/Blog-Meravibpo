<form method="get" class="searchform themeform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php esc_attr_e('To search type and hit enter','squareread'); ?>';" onfocus="if(this.value=='<?php esc_attr_e('To search type and hit enter','squareread'); ?>')this.value='';" value="<?php esc_attr_e('To search type and hit enter','squareread'); ?>" />
	</div>
</form>
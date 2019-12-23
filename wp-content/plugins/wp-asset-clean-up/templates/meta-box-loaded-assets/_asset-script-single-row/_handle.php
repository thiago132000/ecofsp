<?php
/*
 * The file is included from /templates/meta-box-loaded-assets/_asset-script-single-row.php
*/

if ( ! isset($data, $isCoreFile, $hideCoreFiles, $jqueryIconHtmlHandle, $childHandles) ) {
	exit; // no direct access
}
?>
<div class="wpacu_handle" style="margin: 0 0 -8px;">
	<label for="script_<?php echo $data['row']['obj']->handle; ?>"> <?php _e('Handle:', 'wp-asset-clean-up'); ?> <strong><span style="color: green;"><?php echo $data['row']['obj']->handle; ?></span></strong> <?php if (in_array($data['row']['obj']->handle, array('jquery', 'jquery-core', 'jquery-migrate'))) { echo '&nbsp;'.$jqueryIconHtmlHandle; } ?></label>
	&nbsp;<em>* JavaScript (.js)</em>
	<?php if ($isCoreFile && ! $hideCoreFiles) { ?>
		<span class="dashicons dashicons-warning wordpress-core-file"><span class="wpacu-tooltip">WordPress Core File<br />Not sure if needed or not? In this case, it's better to leave it loaded to avoid breaking the website.</span></span>
		<?php
	}
	?>
</div>
<?php
if (! empty($childHandles)) {
	$ignoreChild = (isset($data['ignore_child']['scripts'][$data['row']['obj']->handle]) && $data['ignore_child']['scripts'][$data['row']['obj']->handle]);
	?>
	<p>
		<em style="font-size: 85%;">
			<span style="color: #0073aa; width: 19px; height: 19px; vertical-align: middle;" class="dashicons dashicons-info"></span>
			This file has other JavaScript "children" files depending on it, thus, by unloading it, the following will also be unloaded:
			<span style="color: green; font-weight: 600;">
                        <?php echo implode('<span style="color: black;">,</span> ', $childHandles); ?>
                    </span>
		</em>
		<label for="script_<?php echo $data['row']['obj']->handle; ?>_ignore_children">
			<input type="hidden" name="wpacu_ignore_child[scripts][<?php echo $data['row']['obj']->handle; ?>]" value="" />
			&#10230; <input id="script_<?php echo $data['row']['obj']->handle; ?>_ignore_children"
			                type="checkbox"
			                <?php if ($ignoreChild) { ?>checked="checked"<?php } ?>
			                name="wpacu_ignore_child[scripts][<?php echo $data['row']['obj']->handle; ?>]"
			                value="1" /> <small><?php _e('Ignore dependency rule and keep the "children" loaded', 'wp-asset-clean-up'); ?></small>
		</label>
	</p>
	<?php
}

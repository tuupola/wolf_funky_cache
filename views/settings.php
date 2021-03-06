<h1><?php echo __('Funky Cache Plugin'); ?></h1>

<form action="<?php echo get_url('plugin/funky_cache/save'); ?>" method="post">
<fieldset style="padding: 0.5em;">
  <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Cache settings'); ?></legend>
  <table class="fieldset" cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td class="label"><label for="funky_cache_by_default"><?php echo __('Cache by default'); ?>: </label></td>
      <td class="field">
			  <select name="funky_cache_by_default">
				  <option value="1" <?php if($funky_cache_by_default == "1") echo 'selected ="";' ?>><?php echo __('Yes'); ?></option>
				  <option value="0" <?php if($funky_cache_by_default == "0") echo 'selected ="";' ?>><?php echo __('No'); ?></option>
				</select>	
			</td>
      <td class="help"><?php echo __('Choose yes if you want your pages to be cached by default. Otherwise you must set caching for each page manually.'); ?></td>
    </tr>
    <tr>
      <td class="label">
        <label for="funky_cache_suffix"><?php echo __('Cache file suffix'); ?>: </label>
      </td>
      <td class="field">
        <input type="text" name="funky_cache_suffix" value="<?php print $funky_cache_suffix ?>" />
			</td>
      <td class="help"><?php echo __('Suffix for cache files written to disk. If you use other than .html you also need to update your mod_rewrite rules.'); ?></td>
    </tr>
    <tr>
      <td class="label">
        <label for="funky_cache_folder"><?php echo __('Cache folder'); ?>: </label>
      </td>
      <td class="field">
        <input type="text" name="funky_cache_folder" value="<?php print $funky_cache_folder ?>" />
			</td>
      <td class="help"><?php echo __('Folder where static cache files are written. Relative to document root. When you change this you also need to update your mod_rewrite rules.'); ?></td>
    </tr>
  </table>
</fieldset>
<br/>
<p class="buttons">
  <input class="button" name="commit" type="submit" accesskey="s" value="<?php echo __('Save'); ?>" />
</p>
</form>

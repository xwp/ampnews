<?php
/**
 * AMPConf static widget archive template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>

<section id="archives-2" class="widget widget_archive"><h2 class="widget-title">Archives</h2>
	<ul>
		<li><a href="http://ampconf.local/2018/01/">January 2018</a></li>
		<li><a href="http://ampconf.local/2013/03/">March 2013</a></li>
		<li><a href="http://ampconf.local/2013/01/">January 2013</a></li>
		<li><a href="http://ampconf.local/2012/12/">December 2012</a></li>
		<li><a href="http://ampconf.local/2012/11/">November 2012</a></li>
	</ul>
</section>

<section id="archives-3" class="widget widget_archive"><h2 class="widget-title">Test Archives Widget: No Dropdown or
		Count</h2>
	<ul>
		<li><a href="http://ampconf.local/2018/01/">January 2018</a></li>
		<li><a href="http://ampconf.local/2013/03/">March 2013</a></li>
		<li><a href="http://ampconf.local/2013/01/">January 2013</a></li>
		<li><a href="http://ampconf.local/2012/12/">December 2012</a></li>
		<li><a href="http://ampconf.local/2012/11/">November 2012</a></li>
	</ul>
</section>

<section id="archives-4" class="widget widget_archive"><h2 class="widget-title">Test Archives Widget: With Dropdown,
		Count</h2>        <label class="screen-reader-text" for="archives-dropdown-4">Test Archives Widget: With
		Dropdown, Count</label>
	<select id="archives-dropdown-4" name="archive-dropdown"
			onchange="document.location.href=this.options[this.selectedIndex].value;">

		<option value="">Select Month</option>
		<option value="http://ampconf.local/2018/01/"> January 2018 &nbsp;(1)</option>
		<option value="http://ampconf.local/2013/03/"> March 2013 &nbsp;(7)</option>
		<option value="http://ampconf.local/2013/01/"> January 2013 &nbsp;(14)</option>
		<option value="http://ampconf.local/2012/12/"> December 2012 &nbsp;(12)</option>
		<option value="http://ampconf.local/2012/11/"> November 2012 &nbsp;(2)</option>

	</select>
</section>

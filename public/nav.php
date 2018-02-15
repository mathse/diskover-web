<?php
/*
Copyright (C) Chris Park 2017
diskover is released under the Apache 2.0 license. See
LICENSE for the full license text.
 */

require '../vendor/autoload.php';
use diskover\Constants;

error_reporting(E_ALL ^ E_NOTICE);

$esIndex = $_GET['index'] ?: getCookie('index');
$esIndex2 = $_GET['index2'] ?: getCookie('index2');
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapsible">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
			<a class="navbar-brand" href="dashboard.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>"><img class="pull-left" style="position:absolute;left:15px;top:10px;" src="images/diskovernav.png" /><span style="margin-left:45px;">diskover</span></a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapsible">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>">Simple Search</a></li>
				<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>">Advanced Search</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quick Search <span class="caret"></span></a>
					<ul class="dropdown-menu multi-level" role="menu">
                        <li class="dropdown-submenu">
                            <a href="#">Files</a>
                            <ul class="dropdown-menu">
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=&amp;doctype=file">Untagged</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=delete&amp;doctype=file">Tagged delete</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=archive&amp;doctype=file">Tagged archive</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=keep&amp;doctype=file">Tagged keep</a></li>
                        <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=NOT tag_custom:&quot;&quot;&amp;doctype=file">With custom tag</a></li>
                        <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=NOT tag:&quot;&quot; NOT tag_custom:&quot;&quot;&amp;doctype=file">With any tag</a></li>
						<li class="divider"></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-3 months ")); ?>&amp;doctype=file">Last modified >3 months</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;doctype=file">Lst modified >6 months</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-12 months ")); ?>&amp;doctype=file">Last modified >1 year</a></li>
						<li class="divider"></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-3 months ")); ?>&amp;doctype=file">Last accessed >3 months</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;doctype=file">Last accessed >6 months</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-12 months ")); ?>&amp;doctype=file">Last accessed >1 year</a></li>
						<li class="divider"></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=1048576&amp;doctype=file">Size >1 MB</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=10485760&amp;doctype=file">Size >10 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=26214400&amp;doctype=file">Size >25 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=52428800&amp;doctype=file">Size >50 MB</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=104857600&amp;doctype=file">Size >100 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=26214400&amp;doctype=file">Size >250 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=524288000&amp;doctype=file">Size >500 MB</a></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=1048576000&amp;doctype=file">Size >1 GB</a></li>
						<li class="divider"></li>
						<li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;hardlinks_low=2&amp;doctype=file">Hardlinks >1</a></li>
						<li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=dupe_md5:(NOT &quot;&quot;)&amp;doctype=file">Duplicate files</a></li>
                        <li class="divider"></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;doctype=file">Recommended files to remove</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">Directories</a>
                    <ul class="dropdown-menu">
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=&amp;doctype=directory"">Untagged</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=delete&amp;doctype=directory">Tagged delete</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=archive&amp;doctype=directory">Tagged archive</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=keep&amp;doctype=directory">Tagged keep</a></li>
                        <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=NOT tag_custom:&quot;&quot;&amp;doctype=directory">With custom tag</a></li>
                        <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=NOT tag:&quot;&quot; NOT tag_custom:&quot;&quot;&amp;doctype=directory">With any tag</a></li>
                        <li class="divider"></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-3 months ")); ?>&amp;doctype=directory">Last modified >3 months</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;doctype=directory">Lst modified >6 months</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-12 months ")); ?>&amp;doctype=directory">Last modified >1 year</a></li>
                        <li class="divider"></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-3 months ")); ?>&amp;doctype=directory">Last accessed >3 months</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;doctype=directory">Last accessed >6 months</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-12 months ")); ?>&amp;doctype=directory">Last accessed >1 year</a></li>
                        <li class="divider"></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=1048576&amp;doctype=directory">Size >1 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=10485760&amp;doctype=directory">Size >10 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=26214400&amp;doctype=directory">Size >25 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=52428800&amp;doctype=directory">Size >50 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=104857600&amp;doctype=directory">Size >100 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=26214400&amp;doctype=directory">Size >250 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=524288000&amp;doctype=directory">Size >500 MB</a></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=1048576000&amp;doctype=directory">Size >1 GB</a></li>
                        <li class="divider"></li>
                        <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;doctype=directory">Recommended directories to remove</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">All</a>
                    <ul class="dropdown-menu">
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=">Untagged</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=delete">Tagged delete</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=archive">Tagged archive</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;tag=keep">Tagged keep</a></li>
                    <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=NOT tag_custom:&quot;&quot;">With custom tag</a></li>
                    <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=NOT tag:&quot;&quot; NOT tag_custom:&quot;&quot;">With any tag</a></li>
                    <li class="divider"></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-3 months ")); ?>">Last modified >3 months</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>">Lst modified >6 months</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-12 months ")); ?>">Last modified >1 year</a></li>
                    <li class="divider"></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-3 months ")); ?>">Last accessed >3 months</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>">Last accessed >6 months</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-12 months ")); ?>">Last accessed >1 year</a></li>
                    <li class="divider"></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=1048576">Size >1 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=10485760">Size >10 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=26214400">Size >25 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=52428800">Size >50 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=104857600">Size >100 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=26214400">Size >250 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=524288000">Size >500 MB</a></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;file_size_bytes_low=1048576000">Size >1 GB</a></li>
                    <li class="divider"></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;hardlinks_low=2">Hardlinks >1</a></li>
                    <li><a href="simple.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;q=dupe_md5:(NOT &quot;&quot;)">Duplicate files</a></li>
                    <li class="divider"></li>
                    <li><a href="advanced.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>&amp;submitted=true&amp;p=1&amp;last_mod_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>&amp;last_access_time_high=<?php echo gmdate("Y-m-d\TH:i:s", strtotime("-6 months ")); ?>">Recommended to remove</a></li>
                </ul>
            </li>
                    </ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Analytics <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="filetree.php" id="filetreelink">File Tree</a></li>
						<li><a href="treemap.php" id="treemaplink">Treemap</a></li>
                        <li><a href="heatmap.php" id="heatmaplink">Heatmap</a></li>
                        <li><a href="top50.php" id="top50link">Top 50</a></li>
                        <li><a href="tags.php" id="tagslink">Tags</a></li>
                        <li><a href="dupes.php" id="dupeslink">Dupes</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="admin.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>">Admin</a></li>
				<li><a href="help.php?index=<?php echo $esIndex; ?>&amp;index2=<?php echo $esIndex2; ?>">Help</a></li>
				<li><a href="https://github.com/shirosaidev/diskover" target="_blank">View on Github</a></li>
			</ul>
            <form method="get" action="simple.php" class="navbar-form" role="search" id="searchnav">
                <input type="hidden" name="index" value="<?php echo $esIndex; ?>" />
                <input type="hidden" name="index2" value="<?php echo $esIndex2; ?>" />
                <input type="hidden" name="submitted" value="true" />
                <input type="hidden" name="p" value="1" />
                <?php if (isset($_REQUEST['resultsize'])) {
                    $resultSize = $_REQUEST['resultsize'];
                } elseif (getCookie("resultsize") != "") {
                    $resultSize = getCookie("resultsize");
                } else {
                    $resultSize = Constants::SEARCH_RESULTS;
                } ?>
                <input type="hidden" name="resultsize" value="<?php echo $resultSize; ?>" />
				<div class="form-group" style="display:inline;">
                    <div id="searchnavbox" class="input-group" style="display:table;">
                        <span class="input-group-addon" style="width: 1%; margin: 1px; padding: 1px; height:20px;">
                            <button title="clear search" type="button" onclick="document.getElementById('searchnavinput').value=''; document.getElementById('essearchreply-nav').style.display='none';" class="btn btn-default btn-sm"><span style="color:#555;font-size:10px;"><i class="glyphicon glyphicon-remove"></i></span></button>
                        </span>
    					<input id="searchnavinput" autocomplete="off" type="text" name="q" class="form-control input" style="background-color: #424242!important;" placeholder="Search or !smartsearch" value='<?php echo $request; ?>'>
                        <span class="input-group-addon" style="width: 1%; margin: 1px; padding: 1px; height:20px;">
                            <select id="searchdoctype" name="doctype" class="form-control input-sm">
                              <option value="file" <?php echo $_REQUEST['doctype'] == "file" ? "selected" : ""; ?>>file</option>
                              <option value="directory" <?php echo $_REQUEST['doctype'] == "directory" ? "selected" : ""; ?>>directory</option>
                              <option value="" <?php echo $_REQUEST['doctype'] == "" ? "selected" : ""; ?>>all</option>
                            </select>
                        </span>
                        <span class="input-group-addon" style="width: 1%; margin: 1px; padding: 1px; height:20px;">
                            <button title="search" type="submit" class="btn btn-default btn-sm" style="width:60px;"><span style="font-size:14px;"><strong>&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</strong> </span></button>
                        </span>
                    </div>
				</div>
			</form>
            <div class="essearchreply" id="essearchreply-nav">
                <div class="essearchreply-text" id="essearchreply-text-nav"></div>
            </div>
		</div>
	</div>
</nav>

<div id="sidebar">
<h1 style="padding-bottom:20px">Business Incubator</h1>
	<nav>
		<ul class="sidebar-nav">
			<li><a <?php if ($sidebar == 'veda') { ?> class="current" <?php } ?> href="<?php echo site_url('bi/bi_veda');?>">Veda</a></li>
			<li><a <?php if ($sidebar == 'euis') { ?> class="current" <?php } ?> href="<?php echo site_url('bi/bi_euis');?>">EUIS<a></li>
			<li><a <?php if ($sidebar == 'saas') { ?> class="current" <?php } ?> href="<?php echo site_url('bi/bi_saas');?>">Government 2.0<a></li>
		</ul>
	</nav>
</div>

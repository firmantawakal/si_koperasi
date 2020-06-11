<div id="sidebar-menu">
	<!-- Left Menu Start -->
	<ul class="metisMenu nav" id="side-menu">
			<!-- <li class="menu-title">Navigation</li> -->
			<li class="<?php if(@$_GET['page']=='anggota'){echo 'active';}; ?>"><a href="index.php?page=anggota"><i class="fa fa-child"></i> <span>Data Anggota</span> </a></li>
			
			<li class="<?php if(@$_GET['page']=='simpanan'){echo 'active';}; ?>"><a href="index.php?page=simpanan"><i class="fa  fa-dot-circle-o"></i> <span>Simpanan</span> </a></li>
			
			<li class="<?php if(@$_GET['page']=='pinjaman'){echo 'active';}; ?>"><a href="index.php?page=pinjaman"><i class="fa fa-cubes"></i> <span> Pinjaman </span></a></li>
			
			<li class="<?php if(@$_GET['page']=='angsuran'){echo 'active';}; ?>"><a href="index.php?page=angsuran"><i class="fa fa-magic"></i> <span> Angsuran </span></a></li>

			<li>
				<a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i> <span> Gaji Anggota </span> <span class="menu-arrow"></span></a>
				<ul class="nav-second-level nav" aria-expanded="true">
					<li class="<?php if(@$_GET['page']=='gaji'){echo 'active';}; ?>"><a href="index.php?page=gaji"><i class="fa fa-money"></i> <span> Pembayaran </span></a></li>
					<li class="<?php if(@$_GET['page']=='kewajiban'){echo 'active';}; ?>"><a href="index.php?page=kewajiban"><i class="fa fa-money"></i> <span> Biaya Kewajiban </span></a></li>
				</ul>
			</li>
			
			<li class="<?php if(@$_GET['page']=='user'){echo 'active';}; ?>"><a href="index.php?page=user"><i class="fa fa-user"></i> <span> User </span></a></li>
	</ul>

</div>
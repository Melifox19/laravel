<?php if(Auth::user()->role == 'admin'): ?>
<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
  <a href="<?php echo route('users.index'); ?>"><i class="fa fa-edit"></i><span>Utilisateurs</span></a>
</li>
<?php endif; ?>

<li class="<?php echo e(Request::is('ruchers*') ? 'active' : ''); ?>">
  <a href="<?php echo route('ruchers.index'); ?>"><i class="fa fa-edit"></i><span>Ruchers</span></a>
</li>

<li class="<?php echo e(Request::is('melibornes*') ? 'active' : ''); ?>">
  <a href="<?php echo route('melibornes.index'); ?>"><i class="fa fa-edit"></i><span>Melibornes</span></a>
</li>

<li class="<?php echo e(Request::is('ruches*') ? 'active' : ''); ?>">
  <a href="<?php echo route('ruches.index'); ?>"><i class="fa fa-edit"></i><span>Ruches</span></a>
</li>

<li class="<?php echo e(Request::is('mesures*') ? 'active' : ''); ?>">
  <a href="<?php echo route('mesures.index'); ?>"><i class="fa fa-edit"></i><span>Mesures</span></a>
</li>

<li class="<?php echo e(Request::is('alertes*') ? 'active' : ''); ?>">
  <a href="<?php echo route('alertes.index'); ?>"><i class="fa fa-edit"></i><span>Alertes</span></a>
</li>

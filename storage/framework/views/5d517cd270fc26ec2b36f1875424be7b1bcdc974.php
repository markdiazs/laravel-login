<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li <?php if($current=="home"): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
        <a class="nav-link" href="/">Home </a>
      </li>
      <li <?php if($current=="produtos"): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
        <a class="nav-link" href="/produtos">Produtos</a>
      </li>
      <li <?php if($current=="categorias"): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
        <a class="nav-link" href="/categorias">Categorias </a>
      </li>
         <!-- Right Side Of Navbar -->
          <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item pull-right">
                  <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
              </li>
              <li class="nav-item pull-right">
                  <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
              </li>
          <?php else: ?>
              <li class="nav-item dropdown pull-right">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          <?php echo e(__('Logout')); ?>

                      </a>

                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>
                  </div>
              </li>
          <?php endif; ?>
    </ul>

  </div>
</nav>
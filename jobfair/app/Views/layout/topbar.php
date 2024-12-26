<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobWinni</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
            <a href="<?= base_url('job/about') ?>" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="<?= base_url('job') ?>" class="dropdown-item">Job List</a>
                    <a href="<?= base_url('job/category') ?>" class="dropdown-item">Job Category</a>
                    <?php if (in_array(session()->get('role'), ['user'])): ?>
                        <a href="<?= base_url('job/apply') ?>" class="dropdown-item">Apply</a>
                    <?php endif; ?>  
                    <?php if (in_array(session()->get('role'), ['owner', 'admin'])): ?>
                        <a href="<?= base_url('job/listapply') ?>" class="dropdown-item">List Apply</a>
                    <?php endif; ?>  
                </div>
            </div>

            <?php if (session()->get('role') === 'admin'): ?>
                <a href="<?= base_url('pesan') ?>" class="nav-item nav-link">List</a>
            <?php endif; ?>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rating</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="<?= base_url('job/testimonial') ?>" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <?php if (session()->get('role') === 'user'): ?>
                <a href="<?= base_url('pesan/contact') ?>" class="nav-item nav-link">Contact</a>
            <?php endif; ?>
        </div>
        
        <!-- User Info -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i><?= esc(session()->get('username') ?? 'Guest') ?> | <?= esc(session()->get('role') ?? 'Guest') ?> 
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php if (session()->has('role')): ?>
                        <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item" href="<?= base_url('login') ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        
        <!-- Post A Job Button -->
        <?php if (in_array(session()->get('role'), ['owner', 'admin'])): ?>
            <a href="<?= base_url('job/create') ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
        <?php endif; ?>
    </div>   
</nav>
<!-- Navbar End -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha384-wFqTeYwFwwIBXZKLM2E0LaznGgMBYZF8WQ2txA5zV9OOCqHZV65H87FjXJW97w2w" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app.css">
    <style>
        /* Floating Sidebar Styles for Desktop */
        #floatingSidebar {
            position: fixed;
            top: 80px; /* Adjust based on navbar height */
            left: 20px;
            width: 250px;
            z-index: 1000;
        }

        /* Individual floating boxes */
        .sidebar-item {
            margin-bottom: 15px; /* Space between items */
            padding: 15px;
            background-color: #f8f9fa; /* Matches bg-body-tertiary */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Main content padding to avoid overlap on larger screens */
        .main-content {
            margin-left: 300px; /* Sidebar width + spacing */
            padding-top: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            /* Make sidebar full width and move it to the top */
            #floatingSidebar {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                margin-bottom: 20px;
                display: flex;
                justify-content: space-around;
            }

            /* Stack sidebar items horizontally on smaller screens */
            .sidebar-item {
                width: 30%;
                margin-bottom: 0;
                box-shadow: none;
            }

            /* Remove margin for main content to take full width */
            .main-content {
                margin-left: 0;
                padding-top: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand">PDS Checker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('navHome'); ?>" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('navAbout'); ?>" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('navContact'); ?>" href="#">Contact</a>
                    </li>
                </ul>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Floating Sidebar -->
    <div id="floatingSidebar">
        <div class="sidebar-item">
            <a class="nav-link active" href="#">View Forms</a>
        </div>
        <div class="sidebar-item">
        <a href="<?php echo e(route('fillup')); ?>">New Form</a>
        </div>
        <div class="sidebar-item">
            <a class="nav-link" href="#">Drafts</a>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="main-content container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html>
<?php /**PATH C:\Users\Ramos Familla\FinalRequirements\resources\views/layouts/app.blade.php ENDPATH**/ ?>
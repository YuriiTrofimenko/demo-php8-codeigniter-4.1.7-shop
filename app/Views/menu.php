<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CodeIgniter 4 Demo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarNav">
        <ul class="nav navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('/home/index'); ?>">
                    Index</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/home/items'); ?>">
                    Get All Items</a></li>
            <li class="nav-item"><a class="nav-link" href="/home/getItemDescription">
                    Get Item</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/getItemInfo2'); ?>">
                    Select Item</a></li>
        </ul>
    </div>
</nav>
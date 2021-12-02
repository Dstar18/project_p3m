<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="header page-area">
    <div class="container position-relative">
      <div class="row">
        <div class="col-sm-12">
        <ol class="breadcrumb">
          <?php foreach ($this->uri->segments as $segment): ?>
            <?php 
              $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
              $is_active =  $url == $this->uri->uri_string;
            ?>


            <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
              <?php if($is_active): ?>
                <?php echo ucfirst($segment) ?>
              <?php else: ?>
                <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ol>
        </div>
      </div>
    </div>
  </div>
</section>
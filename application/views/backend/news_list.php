<!--Content Header (Page header) -->
<section class="content-header">
  <h1>
    News List
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">News</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">All News
      </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <table class="table table-bordered">
        <tr>
          <th width="10">No.</th>
          <th>ID</th>
          <th>Title</th>
          <th>Tag</th>
          <th>Action</th>
        </tr>
        <?php 
        $x = 1;
        foreach ($news as $key => $value) {
          ?>
          <tr style="<?php echo ($value->news_level == '0'? 'background:#d4d4d4' : ''); ?>">
            <td><?php echo $x; ?></td>
            <td><?php echo $value->news_id; ?></td>
            <td><?php echo $value->news_title; ?></td>
            <td>
            <?php
            if(!empty($value->list_tag)) {
              foreach ($value->list_tag as $k => $v) {
                ?>
                <label class="label bg-green"><?php echo $v->tag_name; ?></label>
                <?php
              }
            }
            ?>
            </td>
            <td>
              <a href="<?php echo base_url() ?>backend/news_edit/<?php echo $value->news_id ?>" class="btn btn-sm btn-default"> EDIT</a>
              <a href="<?php echo base_url() ?>backend/news_delete/<?php echo $value->news_id ?>" class="btn btn-sm btn-danger"> DELETE</a>
            </td>
          </tr>
          <?php
          $x++;
        }
        ?>
      </table>
      <?php echo $pagination; ?>
    </div>
  </div>
</section>
<!-- /.content -->
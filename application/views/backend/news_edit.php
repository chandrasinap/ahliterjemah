<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

    News Edit

    <small>Control panel</small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="<?=  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>

    <li class="active">News</li>

  </ol>

</section>

<!-- Main content -->

<section class="content">

  <form method="POST" action="" id="formNews">

    <!-- Main row -->

    <div class="row">

        <div class="col-md-8">

          <div class="box box-info">

            <div class="box-header">

              <h3 class="box-title">Form News

              </h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body pad">

              <input type="hidden" name="id" value="<?php echo $news->news_id; ?>">

              <input type="hidden" name="datepublish" value="<?php echo $news->news_datepublish; ?>">

              <label for="title">Title</label>

              <input type="text" class="form-control" id="title" placeholder="title...." name="title" value="<?php echo $news->news_title; ?>">

              <br />

              <label for="title">Synopsis</label>

              <textarea name="synopsis" class="form-control" placeholder="Synopsis...."><?php echo $news->news_synopsis; ?></textarea>

              <br />

              <textarea name="content" id="texteditor"><?php echo $news->news_content; ?></textarea>

            </div>

          </div>

          <div class="row">

            <div class="col-md-6">

              <div class="box box-info">

                <div class="box-header">

                  <h3 class="box-title">Tag</h3>

                </div>

                <div class="box-body pad">

                  <input id="tag" name="tag[]" class="form-control" value="<?php echo str_replace('"', '', $news->news_tag); ?>" />

                </div>

              </div>

            </div>

            <div class="col-md-6">

              <div class="box box-info">

                <div class="box-header">

                  <h3 class="box-title">News Level</h3>

                  <div class="box-body pad">

                    <div class="btn-group" data-toggle="buttons">

                      <label id="status1" class="status btn <?php echo ($news->news_level == '1' ? 'btn-primary active': 'btn-default'); ?>">

                        <input type="radio" name="level" value="1" autocomplete="off" <?php echo ($news->news_level == '1' ? 'checked': ''); ?>> On

                      </label>

                      <label id="status2" class="status btn <?php echo ($news->news_level == '0' ? 'btn-primary active': 'btn-default'); ?>">

                        <input type="radio" name="level" value="0" autocomplete="off" <?php echo ($news->news_level == '0' ? 'checked': ''); ?>> Off 

                      </label>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4"> 

          <div class="box box-info">

            <div class="box-header">

              <h3 class="box-title">Image Headline</h3>

              <div class="box-body pad">

                <input type="hidden" name="image_headline" id="imageHeadlineName" class="form-control" value="<?php echo $news->news_image_headline; ?>">

                <button class="btn btn-primary btn-block" type="button" id="btnModalUploadImage">Upload Image Headnail</button>

                <br />

                <img src="<?php echo !empty($news->news_image_headline) ? base_url('assets/news_image/970x400-'.$news->news_image_headline) : ''; ?>" alt="" id="lastHeadline" class="img-responsive" />

              </div>

            </div>

          </div>

          <div class="box box-info">

            <div class="box-header">

              <h3 class="box-title">Image Thumbnail</h3>

              <div class="box-body pad">

                <input type="hidden" name="image_thumbnail" id="imageThumbnail" class="form-control" value="<?php echo $news->news_image_thumbnail; ?>">

                <button class="btn btn-primary btn-block" type="button" id="btnModalUploadImageThumbnail">Upload Image Thumbnail</button>

                <br />

                <img src="<?php echo !empty($news->news_image_thumbnail) ? base_url('assets/news_image/300x200-'.$news->news_image_thumbnail) : ''; ?>" alt="" id="lastThumbnail" class="img-responsive" />

              </div>

            </div>

          </div>

          

          <div class="box box-info">

            <div class="box-header">

              <h3 class="box-title">Action</h3>

              <div class="box-body pad">

                <button type="submit" class="btn btn-primary pull-right">Save</button>

                <button type="button" class="btn btn-default pull-right">Cancel</button>

              </div>

            </div>

          </div>

        </div>

    </div>

    <!-- /.row (main row) -->

  </form>

</section>

<!-- /.content -->



<!-- modal upload image headline -->

<div class="modal" id="modalFormUploadImage">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title">Upload Image Headline</h4>

      </div>

      <div class="modal-body">

        <p>

          <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="formUploadImage"  method="post" action="">

            <div id="noticeErrorUpload" class="bg-red"></div>

            <div class="from-group">

              <label for="userfile">File</label>

              <input class="form-control" type="file" name="userfile" id="userfile" size="20" />

            </div>

            <br />

            <input class="btn btn-primary" type="submit" name="submit" value="Upload"/>

          </form>

          <br />

        </p>

        <p id="resHeadline" style="text-align:center;">

          <img id="imgRealHeadline" class="img-responsive" src="" />

          <input type="hidden" id="srcImageHeadline" />

          <br />

          <input type="hidden" size="3" id="x">

          <input type="hidden" size="3" id="y">

          <input type="hidden" size="3" id="w">

          <input type="hidden" size="3" id="h">

          <button type="button" id="btnCropHeadline" class="btn btn-success">Crop Headline</button>

        </p>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>

    <!-- /.modal-content -->

  </div>

  <!-- /.modal-dialog -->

</div>

<!-- /.modal -->



<!-- modal upload image thumbnail -->

<div class="modal" id="modalFormUploadImageThumbnail">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title">Upload Image Thumbnail</h4>

      </div>

      <div class="modal-body">

        <p>

          <form enctype="multipart/form-data" accept-charset="utf-8" name="formname" id="formUploadImageThumbnail"  method="post" action="">

            <div id="noticeErrorUploadThumbnail" class="bg-red"></div>

            <div class="from-group">

              <label for="userfile">File</label>

              <input class="form-control" type="file" name="userfile" id="userfile" size="20" />

            </div>

            <br />

            <input class="btn btn-primary" type="submit" name="submit" value="Upload"/>

          </form>

          <br />

        </p>

        <p id="resThumbnail" style="text-align:center;">

          <img id="imgRealThumbnail" class="img-responsive" src="" />

          <input type="hidden" id="srcImageThumbnail">

          <br />

          <input type="hidden" size="3" id="x-thumbnail">

          <input type="hidden" size="3" id="y-thumbnail">

          <input type="hidden" size="3" id="w-thumbnail">

          <input type="hidden" size="3" id="h-thumbnail">

          <button type="button" id="btnCropThumbnail" class="btn btn-success">Crop Thumbnail</button>

        </p>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>

    <!-- /.modal-content -->

  </div>

  <!-- /.modal-dialog -->

</div>

<!-- /.modal -->
    
    <div class="single-blog">
		<div class="container">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
                
                <h2 class="sub-title-heading"><span><?php echo $title?></span></h2>
                
				<div class="detail-entry-cover">
					<img src="<?php echo $img?>" alt="image 1">
				</div>
				
				<div class="col-md-12 col-sm-6 no-l-padding by-admin">
                    <p> By Admin | <?php echo $date?></p>
					<hr/>
				</div>
				
				<div class="entery-content">
					
                    <!--h2 class="sub-title-heading">ANOTHER <span>SUBTITLE </span> HERE</h2-->
                    
                    <!--h4 class="subtitle-text">lala</h4-->
					
					<p><?php echo $content?></p>
                    
				</div>
				
                <?php echo $tag_related?>
                
                <!--div class="comment">
					<h3>Comments</h3>
					<ul class="media-list">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="<?= base_url('assets/')?>images/comment.jpg" alt="comment">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">Username <span>| 6 day ago</span></h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
								<a href="#">Reply</a>
								<ul class="media-list">
									<li class="media">
										<div class="media-left">
											<a href="#">
												<img class="media-object" src="<?= base_url('assets/')?>images/comment.jpg" alt="...">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Username <span>| 6 day ago</span></h4>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
											<a href="#">Reply</a>
										</div>
									</li>
								</ul>
							</div>							
						</li>
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="<?= base_url('assets/')?>images/comment.jpg" alt="...">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">Username <span>| 6 day ago</span></h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
								<a href="#">Reply</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="add-comment">
					<h2>Add a Comments</h2>
					<form class="comment-form" id="commentform" method="post" action="#">
						<div class="col-md-6 no-padding-left">
							<input type="text" placeholder="Name" name="Name" class="comments-line d-border-c-f">
						</div>
						<div class="col-md-6 no-padding-right">	
							<input type="text" placeholder="Email" name="email" class="comments-line d-border-c-f">
						</div>
						<div class="col-md-12 no-padding">
							<input type="text" id="msg" placeholder="Message" />
						</div>
						<div class="form-submit">
								<input type="submit" class="button-1 d-border-c d-bg-c-h" value="Post" id="submit" name="submit">
								<input type="hidden" id="comment_post_ID" value="" name="comment_post_ID">
								<input type="hidden" value="0" id="comment_parent" name="comment_parent">
						</div>
					</form>
					
				</div-->
                
			</div>
			
		</div>
	</div>
	<footer id="footer-section" class="footer-section">
		<div class="back-home">
			<a href="/">Go Back</a>
		</div>
	</footer>
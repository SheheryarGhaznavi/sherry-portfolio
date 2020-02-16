@extends('layouts.appNew')

@section('content')

      <div >
        <div class="page-wrapper">
          <a class="blog-back-button" href="/home#blog"><i class="fa fa-angle-left"></i></a>

          <div class="blog-post-main-image">
            <img class="post-image img-responsive" src="{{ asset('images/blog/blog_post_2_full.jpg') }}" alt="blog-post-1" />
          </div>

          <div class="blog-post-content">
            <h1>Bootstrap is the Most Popular HTML, CSS, and JS Framework</h1>
            <ul class="tags">
                <li><a>HTML5</a></li>
                <li><a>CSS3</a></li>
                <li><a>jQuery</a></li>
                <li><a>Ajax</a></li>
                <li><a>PHP5</a></li>
            </ul>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fringilla elit, eu mattis arcu. Curabitur augue augue, scelerisque sit amet varius eget, tristique at nisl. In euismod suscipit tristique. Nulla sollicitudin pretium massa sit amet tristique.</p>

            <p>Aenean porta quam quis tempus posuere. Integer tempor, elit in auctor scelerisque, arcu augue rhoncus mauris, et hendrerit sem tellus vitae eros. Nulla feugiat ultrices posuere. Nullam aliquet dolor orci. Curabitur tincidunt sem et libero dignissim, sed molestie felis ultricies. Phasellus malesuada tellus vitae eros bibendum, nec ultricies massa sollicitudin. Etiam justo neque, faucibus quis urna interdum, interdum rutrum massa. Mauris et velit ac dolor luctus fringilla. Integer in mattis dui, eget eleifend mauris. Fusce sagittis ipsum nec est finibus, vitae congue nunc elementum. Morbi imperdiet nisl sem, at commodo leo posuere a. Maecenas eu laoreet lorem. Aenean fringilla cursus augue, sed mollis dui.</p>

            <blockquote>
                <p>Vivamus volutpat auctor metus, venenatis ornare mi dictum sit amet. Aliquam erat volutpat.</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>

            <p>Praesent ac quam sed magna gravida interdum. Vivamus sed nunc lobortis, tempor ante ut, gravida nibh. Praesent sed euismod odio. Maecenas dui dui, euismod quis lobortis quis, dignissim ut eros. Curabitur cursus lacinia sollicitudin. Aenean vitae erat imperdiet, egestas nisi non, placerat sapien. In nec commodo justo. Nunc posuere lacinia neque eu malesuada. Sed lacus lacus, tincidunt id faucibus eget, sagittis sed enim. Nunc nec dapibus odio.</p>

            <div class="post-info">
              <span class="autor"><i class="fa fa-fw fa-user"></i> John Doe</span>
              <span class="divider">|</span>
              <span class="date"><i class="fa fa-fw fa-clock-o"></i> 12 December, 2016</span>
              <!-- Share Buttons -->
              <div class="btn-group share-buttons pull-right hidden-xs">
                <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
              </div>
              <!-- /Share Buttons -->
            </div>

            <div class="post-comments">
              <div class="block-title">
                <h3>Comments (3)</h3>
              </div>

              <div class="media">
                  <a class="pull-left" href="#">
                      <img class="media-object" src="{{ asset('images/blog/comments/comment_photo_1.png') }}" alt="">
                  </a>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="#">John Doe</a> <span class="divider">|</span> <span class="light-gray">1 hour ago</span>
                      </div>
                      <p>Nam pellentesque laoreet augue sed facilisis. Suspendisse nec sollicitudin mauris. Integer fringilla a odio sit amet fermentum. Nunc nibh mauris, pretium eu risus et, finibus facilisis lorem.</p>
                      <div class="media-footer">
                          <a href="#"><i class="fa fa-reply"></i> Reply</a>
                          <span class="divider"></span>
                          <i class="fa fa-thumbs-up"></i>
                          <span>0</span>
                          <i class="fa fa-thumbs-down"></i>
                      </div>

                      <div class="media">
                          <a class="pull-left" href="#">
                              <img class="media-object" src="{{ asset('images/blog/comments/comment_photo_2.png') }}" alt="">
                          </a>
                          <div class="media-body">
                              <div class="media-heading">
                                  <a href="#">Bryan Morris</a> <span class="divider">|</span> <span class="light-gray">5 hours ago</span>
                              </div>
                              <p>Donec fermentum elementum massa nec imperdiet. Quisque iaculis accumsan elit eget porttitor.</p>
                              <div class="media-footer">
                                  <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                  <span class="divider"></span>
                                  <i class="fa fa-thumbs-up"></i>
                                  <span>0</span>
                                  <i class="fa fa-thumbs-down"></i>
                              </div>
                          </div>
                      </div>

                      <div class="media">
                          <a class="pull-left" href="#">
                              <img class="media-object" src="{{ asset('images/blog/comments/comment_photo_1.png') }}" alt="">
                          </a>
                          <div class="media-body">
                              <div class="media-heading">
                                  <a href="#">John Doe</a> <span class="divider">|</span> <span class="light-gray">12 hours ago</span>
                              </div>
                              <p>Nulla tincidunt augue lacinia purus scelerisque fringilla. Donec venenatis volutpat lacus, ac efficitur ligula imperdiet id. Nunc gravida ullamcorper metus, ut gravida velit condimentum vel.</p>
                              <div class="media-footer">
                                  <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                  <span class="divider"></span>
                                  <i class="fa fa-thumbs-up"></i>
                                  <span>0</span>
                                  <i class="fa fa-thumbs-down"></i>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>
            </div>

            <div class="post-comment-add">
                <div class="block-title">
                  <h3>Leave a Comment</h3>
                </div>
                <form class="form-add-comment">
                    <div class="form-group">
                        <input class="form-control" placeholder="Your name" name="name">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-user"></i>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message..." name="message"></textarea>
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-comment"></i>
                    </div> 
                    <button class="button" type="submit">Add comment</button>
                </form>
            </div>

          </div>

        </div>
      </div>
  

@endsection
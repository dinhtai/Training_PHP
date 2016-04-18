<div class="row">
    <div class="container">
        <h2 class="blog-title">Adways Blog</h2>
        <p class="lead blog-description">This is blog for developer training PHP, relax and share experience.</p>
    </div>
    <div class="col-sm-3">
        <div class="sidebar-module sidebar-module-inset">
            <img
                src="http://media.npr.org/assets/news/2009/10/27/facebook1_sq-17f6f5e06d5742d8c53576f7c13d5cf7158202a9.jpg?s=16"
                alt="ddasdk">
            <div class="caption">
                <h3><?php echo $_SESSION['username']?></h3>
                <p>From the restored 540 K Streamliner to the all-new S65 AMG Coupe to the Concept Coupe SUV, last
                    weekend in Montere</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="thumbnail">
            <form action="/Post/post" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Message" name="post_content">
             <span class="input-group-btn">
                 <button class="btn btn-default" type="submit">Post</button>
             </span>
                </div><!-- /input-group -->
            </form>
            <hr>
            <?php foreach ($nodes as $id => $item) { ?>
                <div class="blog-post">
                    <div class="media">
                        <div class="media-left">
                            <img
                                src="http://media.npr.org/assets/news/2009/10/27/facebook1_sq-17f6f5e06d5742d8c53576f7c13d5cf7158202a9.jpg?s=12"
                                alt="" style="width: 50px; height: 50px">
                        </div>
                        <div class="media-body">
                            <h4><a href=""><?php echo $item->user_infor[0]->username ?></a></h4>
                            <p><?php echo $item->content ?></p>
                        </div>
                    </div>
                </div><!-- /.blog-post -->
            <?php } ?>
        </div>
        <nav>
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>

    </div><!-- /.blog-main -->

    <div class="col-sm-2">
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <!--            <div class="sidebar-module">-->
        <!--                <h4>Archives</h4>-->
        <!--                <ol class="list-unstyled">-->
        <!--                    <li><a href="#">March 2014</a></li>-->
        <!--                    <li><a href="#">February 2014</a></li>-->
        <!--                    <li><a href="#">January 2014</a></li>-->
        <!--                    <li><a href="#">December 2013</a></li>-->
        <!--                    <li><a href="#">November 2013</a></li>-->
        <!--                    <li><a href="#">October 2013</a></li>-->
        <!--                    <li><a href="#">September 2013</a></li>-->
        <!--                    <li><a href="#">August 2013</a></li>-->
        <!--                    <li><a href="#">July 2013</a></li>-->
        <!--                    <li><a href="#">June 2013</a></li>-->
        <!--                    <li><a href="#">May 2013</a></li>-->
        <!--                    <li><a href="#">April 2013</a></li>-->
        <!--                </ol>-->
        <!--            </div>-->
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->
</div><!-- /.container -->

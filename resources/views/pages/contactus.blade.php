                            <?php 

                                $employee = DB::table('tb_blogs')->get();
                                    foreach($employee as $row ) {
                                        echo ' 

                                        <div class="col-md-12 nf-item">
                                            <div class="blog-post">
                                                <div class="post-header">
                                                </div>
                                                <div class="post-media">
                                                    <img class="item-container" style="height:225px;" alt="'.$row->title.'" src="';?>{{ asset('uploads/images/'.$row->image)}}<?php echo'" class="col-md-12 img-responsive" alt="1" />
                                                </div>
                                                <h4><a href="blog/read/'.$row->slug.'">'.$row->title.'</a></h4>
                                                <div class="post-meta"><span>by <a href="blog/read/'.$row->slug.'">Jake Ellison</a>,</span> <span>July 9, 2015</span></div>
                                                <div class="post-more-link"><a href="blog/read/'.$row->slug.'">Read More</a></div>
                                            </div>
                                        </div>';
                                    }
                            ?>
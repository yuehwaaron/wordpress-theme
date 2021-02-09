<?php
  get_header();
?>

      <section class="banner-area">
        <div class="container-fluid">
          <div class="banner">
            <?php if(get_theme_mod('header_image')): ?>
              <img src="<?php echo esc_url(get_theme_mod('header_image')) ?>" alt="banner area" class="fluid" />
            <?php EndIf ?>
          </div>

          <div class="banner-title text-center">
            
            <?php if(get_theme_mod('header_text_field')): ?>
              <h1 class="text-lg text-light"><?php echo get_theme_mod('header_text_field')?></h1>
            <?php EndIf ?>
            <?php if(get_theme_mod('header_text_field')): ?>
              <span class="description text-sm text-light"><?php echo get_theme_mod('header_description_field')?></span>
            <?php EndIf ?>
            
          </div>
        </div>
      </section>

      <section class="categories">
        <div class="container">
          <div class="flex flex-row flex-wrap">
          <?php
            get_template_part('./templates/temp/categories','content')
          ?>
          </div>
        </div>
      </section>

      <section class="post-area">
        <div class="wrapper">
          <div class="row">
            <!-- <div class="col-8-lg col-12-md"> -->
            <div class="col-12-lg col-12-md">
              <div class="grid">
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post1.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >People</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Travel</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post2.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Commercial</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Natural</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post3.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Photograpy</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Uncategorized</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post4.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Natural</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Uncategorized</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post1.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >People</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Travel</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post2.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Commercial</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Natural</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post3.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Photograpy</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Uncategorized</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
                <div class="article">
                  <article class="blog-post">
                    <div class="post-thumbnail">
                      <img
                        src="./assets/images/post4.png"
                        alt="Post Image"
                        class="fluid"
                      />
                    </div>
                    <div class="post-info">
                      <div class="post-author">
                        <a href="#"
                          ><span class="text-sm text-grey">
                            By Admin November 23, 2020
                          </span></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="#"
                          ><span class="text-lg text-dark">
                            Trip that you never ever forget
                          </span></a
                        >
                      </div>
                      <div class="post-content">
                        <p class="para">
                          Lorem ipsum dolor sit, amet consectetur adipisicing
                          elit. Minus minima necessitatibus in possimus cumque
                          laboriosam.
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Natural</span
                          ></a
                        >
                        <a href="#"
                          ><span class="text-sm uppercase text-gart"
                            >Uncategorized</span
                          ></a
                        >
                      </div>
                    </div>
                  </article>
                </div>
              </div>

              <div class="row">
                <div class="col-12-lg text-center">
                  <div class="pagination">
                    <a href="#"><span>1</span></a>
                    <a href="#"><span>2</span></a>
                    <a href="#"><span>3</span></a>
                    <a href="#"><span class="fa fa-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-4-lg col-12-md">
              <aside class="sidebar">
                <section class="latest-post">
                  <a href="#" class="text-md text-dark">Latest Posts</a>
                  <div class="flex flex-column">
                    <article class="new-post">
                      <div class="row">
                        <div class="col-4-lg post-image">
                          <img
                            src="./assets/images/post1.png"
                            class="fluid"
                            alt="latest post"
                          />
                        </div>
                        <div class="col-8-lg post-title">
                          <div class="cat">
                            <a href="#" class="text-sm text-grey category"
                              >People</a
                            >
                            <a href="#" class="text-sm text-grey category"
                              >Travel</a
                            >
                          </div>
                          <a href="#" class="text-md text-dark"
                            >Trip that you will never ever forget.</a
                          >
                        </div>
                      </div>
                    </article>
                    <article class="new-post">
                      <div class="row">
                        <div class="col-4-lg post-image">
                          <img
                            src="./assets/images/post1.png"
                            class="fluid"
                            alt="latest post"
                          />
                        </div>
                        <div class="col-8-lg post-title">
                          <div class="cat">
                            <a href="#" class="text-sm text-grey category"
                              >People</a
                            >
                            <a href="#" class="text-sm text-grey category"
                              >Travel</a
                            >
                          </div>
                          <a href="#" class="text-md text-dark"
                            >Trip that you will never ever forget.</a
                          >
                        </div>
                      </div>
                    </article>
                    <article class="new-post">
                      <div class="row">
                        <div class="col-4-lg post-image">
                          <img
                            src="./assets/images/post1.png"
                            class="fluid"
                            alt="latest post"
                          />
                        </div>
                        <div class="col-8-lg post-title">
                          <div class="cat">
                            <a href="#" class="text-sm text-grey category"
                              >People</a
                            >
                            <a href="#" class="text-sm text-grey category"
                              >Travel</a
                            >
                          </div>
                          <a href="#" class="text-md text-dark"
                            >Trip that you will never ever forget.</a
                          >
                        </div>
                      </div>
                    </article>
                  </div>
                </section>
                <section class="search-area">
                  <div class="search">
                    <h3 class="text-md text dark">Search</h3>
                    <form action="" class="form-group">
                      <input type="search" class="input-control mr-sm-2" placeholder="Search" />
                      <button class="btn btn-submit" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </form>
                  </div>
                </section>
                <section class="popular-tags">
                  <h4 class="text-md">Popular Tags</h4>
                  <div class="tags flex flex-row flex-wrap">
                    <a href="#"><span>Camera</span></a>
                    <a href="#"><span>Bike</span></a>
                    <a href="#"><span>Craft</span></a>
                    <a href="#"><span>Article</span></a>
                    <a href="#"><span>Good</span></a>
                    <a href="#"><span>Apple</span></a>
                    <a href="#"><span>Photograpy</span></a>
                  </div>
                </section>
              </aside>
            </div> -->

          </div>
        </div>
      </section>

<?php
  get_footer();
?>
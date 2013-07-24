<header id="header">
    <section class="container">
      <!--<h1 id="logo"> <a href="index.html">Green Peas</a> </h1>-->
      <?php echo $this->Html->tag('h1',  $this->Html->link('Green Peas','#'), array('id' => 'logo')); ?>
      <nav id="nav">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
             <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><!-- <a href="index.html">Home</a> -->
              <?php echo $this->Html->link('Home','#');?>
                </li>
                <li class="dropdown"> <!--<a class="dropdown-toggle" href="#" data-toggle="dropdown">Company <b class="caret"></b> </a>-->
                <?php echo $this->Html->link('Company','#',array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
                  <ul class="dropdown-menu">
                  	<li><!--<a href="about-us.html">About Us</a>-->
                      <?php echo $this->Html->link('About Us','#');?>
                    </li>
                    <li><!--<a href="career.html">Career</a>-->
                     <?php echo $this->Html->link('Career','#');?>
                    </li>
          	    	<li><!--<a href="team.html">Our Team</a>-->
                    <?php echo $this->Html->link('Our Team','#');?>
                    </li>
                	<li><!--<a href="author.html">author</a>-->
                    <?php echo $this->Html->link('author','#');?>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"> <!--<a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery <b class="caret"></b> </a>-->
                 <?php echo $this->Html->link('Gallery','#',array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
                  <ul class="dropdown-menu">
                  	<li><!--<a href="gallery-2col.html">Gallery 2 column</a>-->
                        <?php echo $this->Html->link('Gallery 2 column','#');?>                 
                    </li>
          	    	<li><?php echo $this->Html->link('Gallery 3 column','#');?></li>
                	<li><?php echo $this->Html->link('Gallery 4 column','#');?></li>
                	<li><?php echo $this->Html->link('Gallery 5 column','#');?></li>
                  </ul>
                </li>
                <li class="dropdown"> <!--<a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog <b class="caret"></b> </a>-->
                <?php echo $this->Html->link('Blog','#',array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
                  <ul class="dropdown-menu">
                  	<li><!--<a href="blog.html">Blog</a>-->
                    <?php echo $this->Html->link('Blog','#');?>
                    </li>
          	    	<li><?php echo $this->Html->link('Blog Detail','#');?></li>
                	<li><?php echo $this->Html->link('Blog Double Slider','#');?></li>
                  </ul>
                </li>
                <li class="dropdown"> <!--<a class="dropdown-toggle" href="#" data-toggle="dropdown">Features <b class="caret"></b> </a>-->
                <?php echo $this->Html->link('Features','#',array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
                  <ul class="dropdown-menu">
                  	<li><!--<a href="password_protected.html">Password Protected</a>-->
                    <?php echo $this->Html->link('Password Protected','#');?>
                    </li>
          	    	<li><?php echo $this->Html->link('Password Protected','#',array('escape'=>false));?></li>
                	<li<?php echo $this->Html->link('Search Result','#',array('escape'=>false));?></li>
                    <li><?php echo $this->Html->link('ShortCodes','#',array('escape'=>false));?></li>
                    <li><?php echo $this->Html->link('404 Page','#',array('escape'=>false));?></li>
                    <li><?php echo $this->Html->link('faq','#',array('escape'=>false));?></li>
                    <li><?php echo $this->Html->link('Left Nav','#',array('escape'=>false));?></li>
                    <li><?php echo $this->Html->link('Testimonials','#',array('escape'=>false));?></li>
                  </ul>
                </li>
                <li> <?php echo $this->Html->link('Contact','#');?> </li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!-- /.navbar-inner -->
        </div>
        <!-- /.navbar -->
      </nav>
    </section>
  </header>
<section id="content-holder2">
    <section class="container">
      <section class="row-fluid">
        <figure class="span3">
          <h2>Featured Stuff</h2>
          <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <?php echo $this->Html->link('+ Read More','#',array('class'=>'more-btn'));?>
          </figure>
        <figure class="span9">
          <ul id="carousel" class="elastislide-list">
					<li><!--<a href="#"><img src="images/image07.jpg" alt="image01" /></a>-->
                    <?php echo $this->Html->link($this->Html->image('image07.jpg', array('alt' => 'image01')),'#',array('escape'=>false));?>
                    </li>
					<li> <?php echo $this->Html->link($this->Html->image('image08.jpg', array('alt' => 'image02')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image09.jpg', array('alt' => 'image03')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image50.jpg', array('alt' => 'image04')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image51.jpg', array('alt' => 'image05')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image52.jpg', array('alt' => 'image06')),'#',array('escape'=>false));?></li>
					<li><?php echo $this->Html->link($this->Html->image('image07.jpg', array('alt' => 'image07')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image08.jpg', array('alt' => 'image08')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image09.jpg', array('alt' => 'image09')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image50.jpg', array('alt' => 'image10')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image51.jpg', array('alt' => 'image11')),'#',array('escape'=>false));?></li>
					<li> <?php echo $this->Html->link($this->Html->image('image52.jpg', array('alt' => 'image12')),'#',array('escape'=>false));?></li>
				</ul>
                
        </figure>
      </section>
      <section class="row-fluid">
        <figure class="span6">
          <h2>From Our Blog</h2>
          <article class="h-blog"> 
          <!--<a href="#"><img src="images/image10.jpg" alt="" /></a>-->
          <?php echo $this->Html->link($this->Html->image('image10.jpg', array('alt' => '')),'#',array('escape'=>false));?>
          <strong class="title"> <!--<a href="#">Help Protect Critical Panda Habitats</a>--><?php echo $this->Html->link('Help Protect Critical Panda Habitats','#');?></strong>
           <em class="date">Posted On 9th May 2012 <?php echo $this->Html->link('4 Comments','#');?></em>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry type and scrambled it to make a type specimen book.</p>
          </article>
          <article class="h-blog">  <!--<a href="#"><img src="images/image49.jpg" alt="" /></a> -->
           <?php echo $this->Html->link($this->Html->image('image49.jpg', array('alt' => '')),'#',array('escape'=>false));?>
      <strong class="title"> <!--<a href="#">Help Protect Critical Panda Habitats</a>--><?php echo $this->Html->link('Help Protect Critical Panda Habitats','#');?></strong>
           <em class="date">Posted On 9th May 2012 <?php echo $this->Html->link('4 Comments','#',array('escape'=>false));?></em>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry type and scrambled it to make a type specimen book.</p>
          </article>
          <a href="#" class="more-btn">+ Read More</a> </figure>
        <figure class="span6">
          <h2>Newsletter</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, galley of type and scrambled it to make a type specimen book.</p>
          <section class="field-holder">
            <input name="" type="text" class="letter-bg">
            <input name="" type="submit" class="sub-btn" value="Subscribe">
          </section>
          <h2>About Us</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, galley of type and scrambled it to make a type specimen book.</p>
          <?php echo $this->Html->link('+ Read More','#',array('class'=>'more-btn','escape'=>false));?>
         </figure>
      </section>
    </section>
  </section>
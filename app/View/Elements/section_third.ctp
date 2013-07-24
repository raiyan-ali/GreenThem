<section class="content-holder1 footer-top">
    <section class="container">
      <section class="top">
        <section class="row-fluid">
          <figure class="span3">
            <h2>From The Gallery</h2>
            <ul class="gallery-list">
              <li><!-- <a href="#"> <img src="images/image11.jpg" alt=""> </a>-->
              <?php echo $this->Html->link($this->Html->image('image11.jpg', array('alt' => '')),'#',array('escape'=>false));?>
               </li>

              <li><?php echo $this->Html->link($this->Html->image('image12.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
              <li><?php echo $this->Html->link($this->Html->image('image11.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
              <li> <?php echo $this->Html->link($this->Html->image('image13.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
              <li><?php echo $this->Html->link($this->Html->image('image14.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
               <li> <?php echo $this->Html->link($this->Html->image('image13.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
               <li> <?php echo $this->Html->link($this->Html->image('image15.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
               <li> <?php echo $this->Html->link($this->Html->image('image16.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
               <li> <?php echo $this->Html->link($this->Html->image('image15.jpg', array('alt' => '')),'#',array('escape'=>false));?></li>
            </ul>
           <?php echo $this->Html->link('View More','#',array('class'=>'more-btn2','escape'=>false));?> 
           </figure>
          <figure class="span3">
            <h2>Our Team</h2>
            <div class="author-img-holder">
			<?php echo $this->Html->image('image17.jpg', array('alt' => '','class'=>'author-img'));?> 
            <!--<img src="images/image17.jpg" class="author-img" alt="" />--> <strong class="author-name">John Orange</strong> <em>CEO</em> <span>37 years old</span> </div>
            <p>Pellentesque euismod egestas massa, ac vehicula nunc tristique quis. Donec sollicitudin, diam eu vestibulum adipiimperdiet ultricies. <br>
              Dignissim, ante sit amet imperdiet ultricies, felis enim luctus leo, et cursus leo libero in nisi. Donec sit amet ipsum velit, a faucibus purus.</p>
          </figure>
          <figure class="span3 b-post">
            <h2>Latest Blog Post</h2>
            <div class="f-img-holder">
            <?php echo $this->Html->link($this->Html->image('image18.jpg', array('alt' => '','class'=>'f-blog-img')),'#',array('escape'=>false))?>
             <!--<a href="#"><img src="images/image18.jpg" class="f-blog-img" alt="" /></a>--> 
             <span class="p-date">22 <br> May</span> </div>
            <p>Maecenas laoreet lectus est, eget ultricies eros. Aliquam ipsum nunc, tincidunt non fringilla.Maecenas laoreet lectus est, eget ultricies eros. Aliquam ipsum nunc, tincidunt non fringilla.</p>
            <?php echo $this->Html->link('Read More','#',array('class'=>'more-btn2','escape'=>false));?>  </figure>
          <figure class="span3">
            <h2>Contact Us</h2>
            <?php echo $this->Form->create(null,array('url' => 'form'));?>
          <?php echo $this->Form->input(false,array('class'=>'f-field','value'=>'Name'));?>
          <?php echo $this->Form->input(false,array('class'=>'f-field','value'=>'Email'));?>
          <?php echo $this->Form->input(false,array('class'=>'f-area','cols'=>'4','rows'=>'20','value'=>'Message'));?>
            <?php echo $this->Form->input(false,array('class'=>'send-btn','type'=>'submit','value'=>'Send')); ?>
             <?php echo $this->Form->end();?>
          </figure>
        </section>
      </section>
    </section>
  </section>
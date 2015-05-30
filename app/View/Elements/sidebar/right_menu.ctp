<ul id="nav">
    <li><a href="#"><?php echo __('Processors'); ?></a>
        <ul id="sub_nav">
            <li><?php echo $this->Html->link(__('Filter and Compare'), array('controller' => 'Processors','action' => 'filter')); ?></li>
            <li><?php echo $this->Html->link(__('Browse and Compare'), array('controller' => 'Processors','action' => 'browse')); ?></li>
        </ul>
    </li>
    <li><a href="#"><?php echo __('Smart phones (available soon)'); ?></a></li>
    <li><a href="#"><?php echo __('Notebooks (available soon)'); ?></a></li>
    <li><a href="#"><?php echo __('Tablets (available soon)'); ?></a></li>
    <li><a href="#"><?php echo __('Desktop PC (available soon)'); ?></a></li>
</ul>
<script type="text/javascript">
    $(document).ready(function () {
      $('#nav > li > a').click(function(){
        if ($(this).attr('class') != 'active'){
          $('#nav li ul').slideUp();
          $(this).next().slideToggle();
          $('#nav li a').removeClass('active');
          $(this).addClass('active');
        }
        else{
            $('#nav li ul').slideToggle();
        }
      });
    });
</script>
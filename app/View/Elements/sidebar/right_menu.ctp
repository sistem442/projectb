<ul id="main-menu" class="sm sm-vertical sm-blue">
  
  <li><a href="#">Processors</a>
    <ul>
      <li><?php echo $this->Html->link(__('Filter and Compare'), array('controller' => 'Processors','action' => 'filter')); ?></li>
      <li><?php echo $this->Html->link(__('Browse and Compare'), array('controller' => 'Processors','action' => 'browse')); ?></li>
      <li><a href="#" class="has-submenu"><?php echo __('Articles'); ?></a>
          <ul class="sub-menu sm-nowrap">
              <li><a href="/">How to select computer processor (CPU)</a></li>
          </ul>
      </li>
    </ul>
  </li>
</ul>
<script type="text/javascript">
    $(document).ready(function () {
        $('#main-menu').smartmenus();
    });
</script>
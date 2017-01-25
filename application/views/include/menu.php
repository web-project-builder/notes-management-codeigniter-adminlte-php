
<?php if(CheckPermission("Notes", "all_read,own_read")){ ?>
					<li class="<?=($this->router->class==="notes")?"active":"not-active"?>">
						<a href="<?php echo base_url("notes"); ?>"><i class="glyphicon glyphicon-briefcase"></i> <span>Notes</span></a>
					</li><?php }?>
<?php if(CheckPermission("Notes Category", "all_read,own_read")){ ?>
					<li class="<?=($this->router->class==="notes_category")?"active":"not-active"?>">
						<a href="<?php echo base_url("notes_category"); ?>"><i class="glyphicon glyphicon-align-center"></i> <span>Notes Category</span></a>
					</li><?php }?>

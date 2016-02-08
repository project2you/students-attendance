<section id="main" class="column">
		
		<?php

		if($this->session->flashdata('message') != ''){
			 
			 echo '<h4 class="alert_success">'.$this->session->flashdata('message').' </h4>';
		}

		?>
		
		<article class="module width_full">

		<header><h3 class="tabs_involved">  </h3>
		
		<form action="<?php echo base_url();?>verify/save_verify_checked" method="post" enctype="multipart/form-data" />

		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">

			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th style="width:5%;" >No.</th> 
    				<th style="width:15%;" >รหัสนักศึกษา.</th> 
    				<th style="width:15%;" >ชื่อ</th> 
					<th style="width:12%;" >นามสกุล</th> 
    				<th style="width:15%;">สาขา/แผนก</th> 
					<th style="width:10%;" >ภาคเรียน</th> 
					<th style="width:10%;" >ปีการศึกษา</th> 
					<th style="width:20%;">ปรกติ / สาย / ลา / ขาด</th> 
				</tr> 
			</thead> 
		
			<tbody> 
                    <?php  $i=0; foreach ($query as $item):?>
						<tr>
							<td class="align-center">
								<?php echo $item['std_id']; ?>
								<INPUT TYPE="hidden" NAME="std_id[]" VALUE="<?php echo $item['std_cardid']; ?>">
							</td>

							<td><?php echo $item['std_cardid']; ?></td>
							<td><?php echo $item['std_fname']; ?>  </td>
							<td><?php echo $item['std_lname']; ?> </td>
							<td align="center"><?php echo $item['dep_thai']; ?></td>
							<td align="center" ><?php echo $ter_id; ?></td>
							<td align="center"><?php echo $item['yea_title']; ?></td>
							<td>
								<?php
									$data = array(
										'name'        => 'verify_check['.$i.']',
										'checked'     => True,
										'value'     => 1,
										'style'       => 'margin:10px',
										);
									echo form_radio($data);

									$data = array(
										'name'        => 'verify_check['.$i.']',
										'checked'     => false,
										'value'     => 2,
										'style'       => 'margin:10px',
										);

									echo form_radio($data);

									$data = array(
										'name'        => 'verify_check['.$i.']',
										'checked'     => false,
										'value'     => 3,
										'style'       => 'margin:10px',
										);

									echo form_radio($data);

									$data = array(
										'name'        => 'verify_check['.$i.']',
										'checked'     => false,
										'value'     => 4,
										'style'       => 'margin:10px',
										);

									echo form_radio($data);
									$i++;
								?>
							</td> 
						</tr>
					<?php endforeach;?>    

			</tbody> 
			</table>

			</div><!-- end of #tab1 -->
			
		</div><!-- end of .tab_container -->

		<footer>
				<?php 
					$t=time();
					$date_time = date("Y-m-d",$t);
				?>				
				
				<div class="submit_link">
						<label style="width:100%;" >เลือกวันที่ : </label>
						<input type="text" name="log_time"  id="log_time" value="<?php echo $date_time; ?>" style="width:25%;">
						<input type="hidden" name="count_all_user" id="count_all_user" value="0" >

						<label style="width:100%;" > : </label>

						<INPUT TYPE="hidden" NAME="ver_id" VALUE="<?php echo $id; ?>">
						<INPUT TYPE="hidden" NAME="maj_id" VALUE="<?php echo $maj_id; ?>">
						<INPUT TYPE="hidden" NAME="dep_id" VALUE="<?php echo $dep_id; ?>">
						<INPUT TYPE="hidden" NAME="ter_id" VALUE="<?php echo $ter_id; ?>">
						<INPUT TYPE="hidden" NAME="yea_title" VALUE="<?php echo $yea_id; ?>">
						<input type="submit" id="submit_save" value="บันทึกข้อมูล" class="alt_btn">
						<input type="button" id="submit_cancel" value="ยกเลิก" class="alt_btn">

						</form>
				</div>
				
		</footer>
		
		</article><!-- end of content manager article -->
		
		<div class="clear"></div>

		<br>

		<section>
			<nav role="navigation">
				<?php 
					if ($this->session->userdata('flag') == 0 ){
						echo $this->pagination->create_links(); 
					}
				?>
			</nav>
		</section>

		<?php //echo $this->session->flashdata('total_rows');//$count_all_student; ?>
		<?php //echo 	$this->session->userdata('last_query'); ?>


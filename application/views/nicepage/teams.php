<?php 
$base_path = FCPATH;

$get_section_team    = $this->model_utama->view_where('tbl_nicepage',array('key' => 'section_team'))->row_array();
if(isset($get_section_team['value'])){
	if(!empty($get_section_team['value'])){
		$section_team = json_decode($get_section_team['value'],true);
	}
}

?>
<div class="post-head mb-4"> 
	<?php echo ($section_team['judul'] !='' ? $section_team['judul'] : 'Team');?>
</div>
		<div class="row"> 
			<?php
			  foreach ($get_teams->result_array() as $team) {	 
				  if ($team['photo'] !== '' &&  file_exists( $base_path ."asset/img_nicepage/team/".($team['photo']) ) ){
						$img_src = base_url()."asset/img_nicepage/team/". $team['photo'];
				  }
				  ?>
				  <div class="col-md-3 mb-4">
					  <div class=" card shadow h-100">
						<div class="image-container">
							<img src="<?php echo $img_src;?>" alt="<?php echo  $team['team'];?>" class="card-img-top">
						</div>
						<div class="card-body">
							 <h5 class="body-title text-center">
                                <?php echo $team['nama'];?>
                            </h5> 
                            <div class="team-title text-center">
                                <?php echo $team['jabatan'];?>
							</div>
							<div class="team-socmed  text-center">
                                <a target="_blank" href="<?php echo $person['socmed_fb'];?>">
                                        <button type="button" class="btn btn-theme btn-read-more">Selengkapnya</button>
                                </a>
                            </div>
						</div>
					</div> 
				</div>
				<?php
			  }
			?> 
		</div>
<div class="pagination">
	<?php echo $this->pagination->create_links(); ?>
</div> 
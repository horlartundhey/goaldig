<ul class="activitiez">
										<?php if(!empty($activities)){
												foreach($activities as $activity){
											?>
											<li>
												<div class="activity-meta">
													<i><?=$activity['date']?></i>
													<span><a title="" href="#"><?=$activity['line']?> </a></span>
													<h6><a href="#"><?=$activity['name']?>.</a></h6>
												</div>
											</li>
										<?php }} ?>
											
										</ul>
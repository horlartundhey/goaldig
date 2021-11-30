<table class="table table-hover dataTable no-footer" id="myTable" role="grid" aria-describedby="myTable_info">
                                                  <thead>
                                                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 127px;">Image</th><th class="sorting_disabled" rowspan="1" colspan="1">Name &amp;Membership ID </th>
													<th class="sorting_disabled" rowspan="1" colspan="1" >Society</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" >Election</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" >Post</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" >Votes Received</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" >Status</th>
													</tr>
                                                  </thead>
                                                    <tbody>

                                                                                                 
                                                     <?php if(!empty($candidates)){
																foreach($candidates as $candidate){
													?>
                                                    <tr class="unread odd" role="row">
                                                            <td><img class="rounded-circle" style="width:60px;" src="<?=$this->config->config['base_url']?>uploads/candidate_files/<?=$candidate['image']?>" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1"><?=$candidate['surname'].' '.$candidate['othernames']?></h6>
                                                                <p class="m-0"><?=$candidate['membership_id']?></p>
                                                            </td>
															<td>
                                                                <h6 class="text-muted"><?=$candidate['society']?></h6>
                                                            </td>
															 <td>
                                                                <h6 class="text-muted"><?=$election['title']?></h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><?=$post['title']?></h6>
                                                            </td>
                                                            <td> <h6 class="mb-1"><?=$candidate['votes']?></h6></td> 
															<td> <h6 class="mb-1"><?=($election['status']=="closed")?$candidate['status']:""?></h6></td>  
                                                            
                                                        </tr>
													 <?php } }?>
														</tbody>
                                                  
                                                </table>
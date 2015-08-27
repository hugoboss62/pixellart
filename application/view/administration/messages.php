				<div class="row">
	                <div class="col-lg-12">
	                    <h1 class="page-header">Tous les messages</h1>
	                </div>
	                <!-- /.col-lg-12 -->
	            </div>
	            <div class="row">
					<table class="table table-bordered table-hover table-responsive">
						<thead>
							<tr>
								<?php foreach($messages[0] as $key => $value) { ?>
									<?php 
										switch($key){
											default:
												echo "<th>$key</th>";
										}
									?>
								<?php } ?>
							</tr>
						</thead>
						<tbody style="text-align: center;">
							<?php foreach($messages as $message) { ?>
								<tr>
									<?php foreach($message as $key => $value) { ?>
										<td><?php echo $value; ?></td>
									<?php } ?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
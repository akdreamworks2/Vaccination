<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h3>Change About Us</h3>
									
								</div>
								<div class="card-body">
									<form action="<?php echo base_url();?>Admin/update_aboutuscontent" method="post">
                                    <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">About us</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="about" placeholder="About us" rows="3" ><?php echo $data['about']?></textarea>
											</div>
										</div><div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Vision</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="vision" placeholder="vision" rows="3"><?php echo $data['vision']?></textarea>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Innovation</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="innovation" placeholder="Innovation" rows="3"><?php echo $data['innovation']?></textarea>
											</div>
										</div>
                                        <div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Business Address</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="business_address" placeholder="Business Adress " rows="3"><?php echo $data['business_address']?></textarea>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $data['email']?>">
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Phone No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="phone_no" placeholder="phone no" value="<?php echo $data['phone_no']?>">
											</div>
									
                                        </div>
										<div class="mb-3 row">
											<div class="col-sm-10 ml-sm-auto">
												<button type="submit" class="btn btn-primary">Update</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
</body>
</html>
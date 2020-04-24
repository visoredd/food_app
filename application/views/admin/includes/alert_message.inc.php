<?php
									if($this->session->flashdata('success_message')){
										echo '
											<div class="alert alert-success col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
												<strong>Success!</strong> '.$this->session->flashdata('success_message').'
											</div>
										';
									}
									if($this->session->flashdata('error_message')){
										echo '
											<div class="alert alert-danger">
												<strong>Error!</strong> '.$this->session->flashdata('error_message').'
											</div>
										';
									}
								?>
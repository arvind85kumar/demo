<section id="content">
                <div class="container">

                    <!-- Colored Headers -->
                    <div class="block-header">
                        <h2>Grow your business with email marketing<small>Grow your business with marketing automation</small></h2>
                    </div>
                    
                    <div class="row">
						  <div class="col-sm-12">
						<div role="alert" class="alert alert-danger alert-dismissible">
                                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                                Oh snap! Change a few things up and try submitting again.
                            </div>
                            </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header bgm-cyan">
                                    <h2>Upload your Emails in CSV</h2>                                   
                                </div>

                                <div class="card-body card-padding">
									<fieldset>
  <legend>Upload Your Emails</legend>
                                  <?php echo form_open_multipart('Newsletter/upload_file');?>
                                  <div class="col-sm-2"><h4>Upload Csv File</h4></div>
                                     <div class="col-sm-4">
                                   <input type="file" name="csv_email" accept=".csv"/>
                                   </div>
                                   <div class="col-sm-4">
                                   <button type="submit" class="btn bgm-cyan waves-effect">Upload</button>
                                   </div>
                                   </form>
                                   </div>
                                </div>
                            </div>
                        </div>
                    <br>
                    <br>

                    
                    <!-- Extra -->
                </div>
            </section>

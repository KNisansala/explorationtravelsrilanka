 
<div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Your Comments</h4>
                    </div> 
                    <form  method="post" action="view-comments.php" enctype="multipart/form-data"> 
                        <div class="modal-body"> 
                            <div class="form-group">
                                <?php if (!empty($success)) { ?>

                                    <div class="alert alert-success" style="margin-top: 15px ">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Success! </strong> <?php echo $success; ?>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="imageName">Select Image</label>
                                <input name="image" type="file" id="imageName" />
                                
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" />
                                <input type="hidden" name="status" value="1" />
                            </div>
                            <div class="form-group">
                                <label for="description">Your Comment</label>
                                <textarea id="description" name="description" class="form-control" rows="5" placeholder="Enter Description"> </textarea>
                            </div>
 
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>  
                            <button type="submit" class="btn btn-default" name="save-data">Save Comment</button>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
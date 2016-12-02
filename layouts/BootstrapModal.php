<?php
#BootstrapModal.html
require_once('../lib/BootstrapModal.html');
 /*
    lojax will only create one modal at a time.
    So if another is requested while a modal is already being displayed,
    lojax will replace the title, body, and footer areas with those of the new one. 
*/   
?>
<div class="modal fade" role="dialog" aria-labelledby="modalHeader" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" jx-panel="modalHeader">
                     <?php if(isset($TPL->Header)) { echo $TPL->Header; } ?>
                </h4>
            </div>
            <div class="modal-body" jx-panel="modalBody">
                <?php if(isset($TPL->Body)) { echo $TPL->Body; } ?>
            </div>
            <div class="modal-footer" jx-panel="modalFooter">
                <?php 
                if(isset($TPL->Footer)) { 
                    echo $TPL->Footer; 
                }
                else {
                    echo '<button class="btn btn-primary" data-dismiss="modal">OK</button>';
                } 
                ?>
            </div>
        </div>
    </div>
</div>
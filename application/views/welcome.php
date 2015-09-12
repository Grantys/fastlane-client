<div class="container">
    <div class="row-fluid">
        <form class="form-horizontal">
        <h1><?php echo $this->lang->line('login_form_button_text'); ?></h1>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder='<?php echo $this->lang->line('login_form_text_email'); ?>' aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">@</span>
              <input type="text" class="form-control" placeholder='<?php echo $this->lang->line('login_form_text_password'); ?>' aria-describedby="basic-addon2">
            </div>
        
            <button class="btn btn-inverse">
              <?php echo $this->lang->line('login_form_button_login');?>
            </button>
        </form>
    </div>
</div>
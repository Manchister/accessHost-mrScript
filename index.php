<?php require_once('header.php'); ?>

<br/><br/>
<div class="bq-form">
    <form action="gotdata.php" method="POST" role="form" class="form-horizontal panel panel-success ">

        <div class="panel-heading text-center" style="margin-bottom: 40px;">
            <h4>Insert installation data:</h4>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="host_id" class="col-xs-3"><b class="h4 text-danger">Host:</b>&nbsp;<br/><small class="text-black">may change localhost</small></label>
                <div class="col-xs-8">
                    <input type="text" id="host_id" name="thehost"
                           class="form-control text-center" value="localhost"/>
                </div>
            </div>

            <div class="form-group">
                <label for="host_user_id" class="col-xs-3 text-danger"><b class="h4">Username:</b></label>
                <div class="col-xs-8">
                    <input type="text" id="host_user_id" name="theusername"
                           class="form-control text-center" placeholder="Insert host user name"/>
                </div>
            </div>

            <div class="form-group">
                <label for="host_pass_id" class="col-xs-3 text-danger"><b class="h4">Password:</b></label>
                <div class="col-xs-8">
                    <input type="text" id="host_pass_id" name="thepassword"
                           class="form-control text-center" placeholder="Insert password here"/>
                </div>

            </div>

            <div class="form-group">
                <label for="db_id" class="col-xs-3 text-warning"><b class="h4">Database:</b></label>
                <div class="col-xs-8">
                    <input type="text" id="db_id" name="thedatabase"
                           class="form-control text-center" placeholder="Insert database here"/>
                </div>
            </div>

            <!--            <div class="form-group">
                            <label for="table_prefix_id" class="col-xs-2">Tables start with:</label>
                            <div class="col-xs-10">
                                <input type="text" id="table_prefix_id"
                                    class="form-control" placeholder="tables prefix"/>
                            </div>
                        </div>
            -->
            <br/>
            <div class="panel-info panel-footer btn-group-vertical center-block">
                <button type="submit" id="install" name="install"
                        class="btn btn-md btn-success">Install
                </button>
                <button type="reset" class="btn btn-md btn-primary">Reset
                </button>
            </div>
        </div>
    </form>
</div>


<?php require_once('footer.php'); ?>

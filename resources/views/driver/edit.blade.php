<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel">Update Driver</h5>
      </div>
      <div class="modal-body">
        <form role="form">
            <input type="hidden" id="driver_id">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control"  id ="driver_name">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input class="form-control"  id ="driver_address">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input class="form-control"  id ="driver_age">
            </div>


            <button type="submit" class="btn btn-default btn-primary" id="driver_submit" style="float: right;">Save </button>

            <div style="clear: both;"></div>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<div class="modal-header">

    <div class="pull-left">
        <h3 class="modal-title"><%obj.designation || "Create Group"%></h3>
    </div>
    <div class="pull-right">
        <input type="checkbox"
               ng-model="modalControl.edit"
               data-label-text="Edit"
               bootstrap-switch data-size="small"/>
    </div>
    <div class="clearfix"></div>
</div>


<div class="modal-body">

</div>
<div ng-if="modalControl.defined" class="modal-footer">
    <div class="btn btn-warning" type="button" ng-click="cancel(obj)">Cancel</div>
    <div class="btn btn-danger" type="button" ng-click="delete(obj)">Delete</div>
    <div class="btn btn-primary" type="button" ng-click="save(obj)">Save</div>
</div>
<div ng-if="!modalControl.defined" class="modal-footer">
    <div class="btn btn-warning" type="button" ng-click="cancel(obj)">Cancel</div>
    <div class="btn btn-primary" type="button" ng-click="create(obj)">Create</div>
</div>


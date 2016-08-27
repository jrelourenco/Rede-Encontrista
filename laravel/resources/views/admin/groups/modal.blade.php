<div class="modal-header">
    <h3 class="modal-title"><%group.designation || "Create Group"%></h3>
    <div class="pull-right">
        <input type="checkbox" ng-model="edit" bootstrap-switch data-size="small"/>
    </div>
</div>


<div class="modal-body">
    <div class="row  col-sm-7">
        <div class="form-horizontal ">


            <div class="form-group ">
                <label class="control-label col-sm-4 " for="designation">
                    Designação <span style="color:red;">*</span>
                </label>
                <div class="col-sm-8">
                    <input class="form-control" id="designation" ng-model="group.designation" type="text" disable
                    />
                </div>
            </div>


            <div class="form-group ">
                <label class="control-label col-sm-4 " for="localization">
                    Localização <span style="color:red;">*</span>
                </label>
                <div class="col-sm-8">
                    <input class="form-control" id="localization" ng-model="group.localization" type="text" required
                           ng-change="group.designation  = group.localization + (group.creation_date | date:'yy')"
                    />
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 requiredField" for="creation_date">
                    Incio do Grupo <span style="color:red;">*</span>
                </label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <input class="form-control"
                               id="creation_date"
                               type="text"
                               uib-datepicker-popup="yyyy/MM/dd"
                               popup-placement="bottom"
                               is-open="dpOpenStatus.creation_date"
                               ng-model="group.creation_date"
                               ng-change="group.designation  = group.localization + (group.creation_date | date:'yy')"
                        />
                        <div class="input-group-btn">
                            <div type="button" class="btn btn-default"
                                 ng-click="dpOpenStatus.creation_date = !dpOpenStatus.creation_date">
                                <i class="glyphicon  glyphicon-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4" for="inactivation_date">
                    Fim do grupo
                </label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <input class="form-control"
                               id="inactivation_date"
                               type="text"
                               uib-datepicker-popup="dd/MM/yyyy"
                               is-open="dpOpenStatus.inactivation_date"
                               ng-model="group.inactivation_date"
                        />
                        <div class="input-group-btn">
                            <div type="button" class="btn btn-default"
                                 ng-click="dpOpenStatus.inactivation_date = !dpOpenStatus.inactivation_date">
                                <i class="glyphicon  glyphicon-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="separator">

        <div class="form-horizontal ">
            <div class="form-group ">
                <label class="control-label col-sm-4 col-sm-offset-4 " for="localization">
                    Ano Letivo
                </label>
                <div class="col-sm-4">
                    <select class="form-control"
                            ng-init="group.team_coordinator.selected = group.team_coordinator.years[0]"
                            ng-options="year  for year in group.team_coordinator.years track by year"
                            ng-model="group.team_coordinator.selected"></select>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4" for="team_coordinator.coordinator">
                    Coordenador <span style="color:red;">*</span>
                </label>
                <div class="col-md-8">
                    <select class="form-control"
                            ng-options="member.encontrista.name  for member in group.members  track by member.encontrista.id"
                            ng-model="group.team_coordinator[group.team_coordinator.selected].coordinator"/>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 " for="team_coordinator.coordinator">
                    Secretario <span style="color:red;">*</span>
                </label>
                <div class="col-md-8">
                    <select class="form-control"
                            ng-options="member.encontrista.name  for member in group.members  track by member.encontrista.id"
                            ng-model="group.team_coordinator[group.team_coordinator.selected].secretary"/>


                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 " for="team_coordinator.coordinator">
                    Tesoureiro <span style="color:red;">*</span>
                </label>
                <div class="col-md-8">
                    <select class="form-control"
                            ng-options="member.encontrista.name  for member in group.members  track by member.encontrista.id"
                            ng-model="group.team_coordinator[group.team_coordinator.selected].treasurer"/>


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Encontrista</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="member in group.members">
                <td><%member.encontrista.name%></td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class="clearfix"></div>
    <pre><%group|json%></pre>
</div>
<div ng-if="groupDefined" class="modal-footer">
    <div class="btn btn-warning" type="button" ng-click="cancel(group)">Cancel</div>
    <div class="btn btn-danger" type="button" ng-click="delete(group)">Delete</div>
    <div class="btn btn-primary" type="button" ng-click="save(group)">Save</div>
</div>
<div ng-if="!groupDefined" class="modal-footer">
    <div class="btn btn-warning" type="button" ng-click="cancel(group)">Cancel</div>
    <div class="btn btn-primary" type="button" ng-click="create(group)">Create</div>
</div>


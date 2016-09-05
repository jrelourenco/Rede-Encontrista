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
    <div class="row  col-sm-7">
        <div class="form-horizontal ">
            <div class="form-group ">
                <label class="control-label col-sm-4 " for="designation">
                    Designação <span style="color:red;">*</span>
                </label>
                <div class="col-sm-8">
                    <input class="form-control" id="designation" ng-model="obj.designation"
                           type="text" disabled
                    />
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 " for="localization">
                    Localização <span style="color:red;">*</span>
                </label>
                <div class="col-sm-8">
                    <input ng-disabled="!modalControl.edit " class="form-control" id="localization"
                           ng-model="obj.localization"
                           type="text" required
                           ng-change="obj.designation  = obj.localization + (obj.creation_date | date:'yy')"
                    />
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 requiredField" for="creation_date">
                    Incio do Grupo <span style="color:red;">*</span>
                </label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <input ng-disabled="!modalControl.edit " class="form-control"
                               id="creation_date"
                               type="text"
                               uib-datepicker-popup="dd/MM/yyyy"
                               popup-placement="bottom"
                               is-open="dpOpenStatus.creation_date"
                               ng-model="obj.creation_date"
                               ng-change="obj.designation  = obj.localization + (obj.creation_date | date:'yy')"
                        />
                        <div class="input-group-btn">
                            <div ng-disabled="!modalControl.edit" class="btn btn-default"
                                 ng-click="dpOpenStatus.creation_date = modalControl.edit && !dpOpenStatus.creation_date">
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
                        <input ng-disabled="!modalControl.edit"
                               class="form-control"
                               id="inactivation_date"
                               type="text"
                               uib-datepicker-popup="dd/MM/yyyy"
                               is-open="dpOpenStatus.inactivation_date"
                               ng-model="obj.inactivation_date"
                        />
                        <div class="input-group-btn">
                            <div ng-disabled="!modalControl.edit" class="btn btn-default"
                                 ng-click="dpOpenStatus.inactivation_date = modalControl.edit && !dpOpenStatus.inactivation_date">
                                <i class="glyphicon  glyphicon-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="separator">
            <div class="form-group ">
                <label class="control-label col-sm-4 col-sm-offset-4 ">Ano Letivo</label>
                <div class="col-sm-4">
                    <div class="input-group">

                        <select class="form-control"
                                ng-init="obj.team_coordinator.selected = obj.team_coordinator.years[0]"
                                ng-options="year  for year in obj.team_coordinator.years track by year"
                                ng-model="obj.team_coordinator.selected">
                        </select>
                        <div class="input-group-btn dropdown">
                            <div ng-disabled="!modalControl.edit" class="btn btn-default btn-success dropdown-toggle"
                                 id="newYear"
                                 ng-attr-data-toggle="<%modalControl.edit ? 'dropdown' : ''%>">
                                <i class=" glyphicon glyphicon-plus"></i>
                            </div>

                            <div class="dropdown-menu" role="menu" aria-labelledby="newYear">
                                <li role="presentation" class="dropdown-header">Novo ano letivo</li>
                                <li>
                                    <form class="input-group">
                                        <input id="newYear" ng-disabled="!modalControl.edit " class="form-control"
                                               ng-model="newYearValue"
                                               ng-keydown="obj = $event.which === 13 ?  values.newYear(obj,newYearValue):obj"/>

                                        <div class="input-group-btn">
                                            <div class="btn btn-success"
                                                 ng-click="obj = values.newYear(obj,newYearValue)">Ok
                                            </div>
                                        </div>

                                    </form>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4" for="team_coordinator.coordinator">
                    Coordenador <span style="color:red;">*</span>
                </label>
                <div class="col-md-8">
                    <select ng-disabled="!modalControl.edit" class="form-control"
                            ng-options="member.encontrista.name  for member in obj.members  track by member.encontrista.id"
                            ng-model="obj.team_coordinator[obj.team_coordinator.selected].coordinator"></select>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 " for="team_coordinator.coordinator">
                    Secretario <span style="color:red;">*</span>
                </label>
                <div class="col-md-8">
                    <select ng-disabled="!modalControl.edit" class="form-control"
                            ng-options="member.encontrista.name  for member in obj.members  track by member.encontrista.id"
                            ng-model="obj.team_coordinator[obj.team_coordinator.selected].secretary"></select>


                </div>
            </div>
            <div class="form-group ">
                <label class="control-label col-sm-4 " for="team_coordinator.coordinator">
                    Tesoureiro <span style="color:red;">*</span>
                </label>
                <div class="col-md-8">
                    <select ng-disabled="!modalControl.edit" class="form-control"
                            ng-options="member.encontrista.name  for member in obj.members  track by member.encontrista.id"
                            ng-model="obj.team_coordinator[obj.team_coordinator.selected].treasurer"></select>


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <label class="pull-left"> Encontristas</label>
                    <div class="btn btn-success pull-right" ng-disabled="!modalControl.edit">
                        <i class=" glyphicon glyphicon-plus"></i>
                    </div>
                </th>


            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="member in obj.members">
                <td><%member.encontrista.name%></td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class="clearfix"></div>
    <pre><%obj|json%></pre>
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


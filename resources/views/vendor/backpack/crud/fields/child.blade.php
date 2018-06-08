<!-- array input -->
<?php
    $max = isset($field['max']) && (int) $field['max'] > 0 ? $field['max'] : -1;
    $min = isset($field['min']) && (int) $field['min'] > 0 ? $field['min'] : -1;
    $item_name = strtolower(isset($field['entity_singular']) && !empty($field['entity_singular']) ? $field['entity_singular'] : $field['label']);
    $items = old($field['name']) ? (old($field['name'])) : (isset($field['value']) ? ($field['value']) : (isset($field['default']) ? ($field['default']) : '' ));
    // make sure not matter the attribute casting
    // the $items variable contains a properly defined JSON
    if (is_array($items)) {
        if (count($items)) {
            $items = json_encode($items);
        } else {
            $items = '[]';
        }
    } elseif (is_string($items) && !is_array(json_decode($items))) {
        $items = '[]';
    }
?>
<div 
    ng-app="backPackTableApp" 
    ng-controller="tableController" 
    @include('crud::inc.field_wrapper_attributes') 
    >

    <label>{!! $field['label'] !!} </label>
    <label>Total : <% sum(items) %> Unit(s)</label>
    @include('crud::inc.field_translatable_icon')

    <input class="array-json" type="hidden" id="{{ $field['name'] }}" name="{{ $field['name'] }}">

    <div class="array-container form-group">
    
        <table 
            class="table table-bordered table-striped m-b-0" 
            ng-init="field = '#{{ $field['name'] }}'; items = {{ $items }}; max = {{$max}}; min = {{$min}}; maxErrorTitle = '{{trans('backpack::crud.table_cant_add', ['entity' => $item_name])}}'; maxErrorMessage = '{{trans('backpack::crud.table_max_reached', ['max' => $max])}}'"
            >

            <thead>
                <tr>
                    @foreach( $field['columns'] as $column )
                    <th style="font-weight: 600!important;">
                        {{ $column['label'] }}
                    </th>
                    @endforeach
                    <th class="text-center" ng-if="max == -1 || max > 1"> {{-- <i class="fa fa-sort"></i> --}} </th>
                    <th class="text-center" ng-if="max == -1 || max > 1"> {{-- <i class="fa fa-trash"></i> --}} </th>
                </tr>
            </thead>

            <tbody ui-sortable="sortableOptions" ng-model="items" class="table-striped">

                <tr post-render ng-repeat="item in items" class="array-row" >
                    
                    
                    @foreach ($field['columns'] as $column)
                        <td 
                             class="
                                @if(isset($column['size']))  
                                    col-md-{{ $column['size'] }}
                                @endif
                                "
                            >
                        <!-- load the view from the application if it exists, otherwise load the one in the package -->
                        @if(view()->exists('vendor.backpack.crud.fields.'.$column['type']))
                            @include('vendor.backpack.crud.fields.'.$column['type'], array('field' => $column))
                        @else
                            @include('crud::fields.'.$column['type'], array('field' => $column))
                        @endif
                        </td>
                    @endforeach

                    <td ng-if="max == -1 || max > 1">
                        <span class="btn btn-sm btn-default sort-handle"><span class="sr-only">sort item</span><i class="fa fa-sort" role="presentation" aria-hidden="true"></i></span>
                    </td>
                    <td ng-if="max == -1 || max > 1">
                        <button ng-hide="min > -1 && $index < min" class="btn btn-sm btn-default" type="button" ng-click="removeItem(item);"><span class="sr-only">delete item</span><i class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>
                    </td>
                </tr>
            </tbody>
                
        </table>

        <div class="array-controls btn-group m-t-10">

            <button ng-if="max == -1 || items.length < max" class="btn btn-sm btn-default" type="button" ng-click="addItem()"><i class="fa fa-plus"></i> {{ $item_name }}</button>

<button ng-if="max == -1 || items.length < max" class="btn btn-sm btn-default" type="button" ng-click="addItem()"><i class="fa fa-plus"></i> Add {{ $item_name }}</button>

        </div>

    </div>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>
{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    {{-- @push('crud_fields_styles')
        {{- YOUR CSS HERE --}}
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        {{-- YOUR JS HERE --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-sortable/0.14.3/sortable.min.js"></script>
        <script>
            
            window.angularApp = window.angularApp || angular.module('backPackTableApp', ['ui.sortable'], function($interpolateProvider){
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });
<<<<<<< HEAD
            window.angularApp.controller('tableController', function($scope, $rootScope){
=======


            window.angularApp.controller('tableController', function($scope){

>>>>>>> 8ab252476cf3b8994bcdf39f7e075b97ba7497b1
                $scope.datos = {!! json_encode($subject_management) !!};
                // $rootScope.items = $scope;
                // console.log($rootScope.datos);
                $scope.sortableOptions = {
                    handle: '.sort-handle'
                };
                $scope.sum = function(list) {
                    // console.log($scope.items);
                    var total=0;
                    angular.forEach($scope.items, function(item){
                        if(typeof item.unit !== NaN) {
                            total+= parseInt(item.unit);
                        }
                    });
                    return total;
                }
<<<<<<< HEAD
=======
                var g;
>>>>>>> 8ab252476cf3b8994bcdf39f7e075b97ba7497b1
                $scope.changeSubject = function() {
                    console.log("a = " , this.item);
                    var selectedSubject = this.item.subject_id;
                    var dynamicDesc, dynamicUnit, dynamicCode;
                    
                    angular.forEach($scope.datos, function(value, key) {
<<<<<<< HEAD
                        console.log("val = " , value);
                        if(value.curriculum_id == selectedSubject) {
=======

>>>>>>> 8ab252476cf3b8994bcdf39f7e075b97ba7497b1
                        // console.log("val = " , value);

                        if(value.id == selectedSubject) {
                        console.log("val = " , value);
                            // this.item.description = value.subject_description;
                            dynamicDesc = value.subject_description;
                            dynamicUnit = value.no_unit;
                            dynamicCode = value.subject_code
                        }
                    });
                    this.item.description = dynamicDesc;
                    this.item.unit = dynamicUnit;
                    this.item.subj_code = dynamicCode;
                    dynamicDesc = null;
                    dynamicUnit = null;
                    dynamicCode = null;
                }
        
                $scope.addItem = function(){
                    if( $scope.max > -1 ){
                        if( $scope.items.length < $scope.max ){
                            var item = {};
                            $scope.items.push(item);
                        } else {
                            new PNotify({
                                title: $scope.maxErrorTitle,
                                text: $scope.maxErrorMessage,
                                type: 'error'
                            });
                        }
                    }
                    else {
                        var item = {};
                        $scope.items.push(item);
                    }
                    
                    
                }
                $scope.removeItem = function(item){
                    var index = $scope.items.indexOf(item);
                    $scope.items.splice(index, 1);
                }
                
                $scope.$watch('items', function(a, b){
                    if( $scope.min > -1 ){
                        while($scope.items.length < $scope.min){
                            $scope.addItem();
                        }
                    }
                    if( typeof $scope.items != 'undefined' && $scope.items.length ){
                        if( typeof $scope.field != 'undefined'){
                            if( typeof $scope.field == 'string' ){
                                $scope.field = $($scope.field);
                            }
                            $scope.field.val( angular.toJson($scope.items) );
                        }
                    }
                    
                }, true);
                if( $scope.min > -1 ){
                    for(var i = 0; i < $scope.min; i++){
                        $scope.addItem();
                    }
                }
            });
            window.angularApp.directive('postRender', function($timeout, $rootScope) {
                return {
                   link: function(scope, element, attr) {
                      $timeout(function() { 
                         $('.select2').each(function (i, obj) {
                                if (!$(obj).data("select2"))
                                {
                                    $(obj).select2();
                                }
                            });
                      });
                   }
                }
            });
        
            angular.element(document).ready(function(){
                angular.forEach(angular.element('[ng-app]'), function(ctrl){
                    var ctrlDom = angular.element(ctrl);
                    if( !ctrlDom.hasClass('ng-scope') ){
                        angular.bootstrap(ctrl, [ctrlDom.attr('ng-app')]);
                    }
                });
            });
        </script>

    @endpush
@endif

{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
<div class="col-md-12">
    <hr>
</div>
<div class="col-md-5 col-md-offset-7">
    <b>Total:</b><input style="border: 1px solid #d2d6de;padding: 5px; margin: 5px" readonly="readonly" type="text" id="total">
</div>

<!-- select2 -->


    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>


@if (!$crud->child_resource_included['select'])

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <!-- include select2 css-->
        <link href="{{ asset('vendor/backpack/select2/select2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('vendor/backpack/select2/select2-bootstrap-dick.css') }}" rel="stylesheet" type="text/css" />
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- include select2 js-->
        <script src="{{ asset('vendor/backpack/select2/select2.js') }}"></script>
        <script type="text/javascript">
            function UpdateTotal(){
                var total = 0.0;
                var inputs = document.getElementsByName("currency");
                for(i=0;i<inputs.length;i++){
                    if(!isNaN(parseFloat(inputs[i].value))){
                        total = total + parseFloat(inputs[i].value);
                    }
                }
                if(!isNaN(total)){
                    document.getElementById('total').value = Math.round(total * 100) / 100;
                }
                
            }
            window.onload = function () {
                var check = function(){
                    var total = 0.0;
                    var inputs = document.getElementsByName("currency");
                    for(i=0;i<inputs.length;i++){
                        if(!isNaN(parseFloat(inputs[i].value))){
                            total = total + parseFloat(inputs[i].value);
                        }
                    }
                    if(!isNaN(total)){
                        document.getElementById('total').value = Math.round(total * 100) / 100;
                    }
                    else {
                        setTimeout(check, 500); // check again in a second
                    }
                }
                check();
            }
        </script>
    @endpush

    
    <?php $crud->child_resource_included['select'] = true; ?>
@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}

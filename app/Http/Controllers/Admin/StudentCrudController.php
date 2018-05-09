<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\StudentRequest as StoreRequest;
use App\Http\Requests\StudentRequest as UpdateRequest;

class StudentCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setCreateView('crud\create');


        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Student');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/student');
        $this->crud->setEntityNameStrings('student', 'students');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        $this->crud->addField(
            ['name' => 'application', 
            'tab' => 'Applicant Information',
            'type' => 'date']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'level', 
            'tab' => 'Applicant Information',
            'type' => 'enum']
            , 'update/create/both');

        $this->crud->addField([// image
            'label' => "Photo",
            'name' => 'photo',
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
            'tab' => 'Applicant Information'
        ]);

        $this->crud->addField(
            ['name' => 'firstname',
            'label' => 'First Name', 
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'lastname',
            'label' => 'Last Name',
            'tab' => 'Applicant Information']
            , 'update/create/both');


        $this->crud->addField(
            ['name' => 'middlename',
            'label' => 'Midde Name',
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'gender', 
            'tab' => 'Applicant Information',
            'type' => 'enum']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'birthdate',
            'label' => 'Date of Birth',
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'citizenship', 
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'passport', 
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'birthplace',
            'label' => 'Place of Birth',
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'residentialaddress',
            'label' => 'Residential Address in the Philippines',
            'tab' => 'Applicant Information',
            'type' => 'address']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'email',
            'label' => 'E-mail Address',
            'tab' => 'Applicant Information',
            'type' => 'email']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'religion',
            'id' => 'findme',
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'living',
            'label' => '',
            'type' => 'checkall',
            'tab' => 'Applicant Information',
             'attributes' => [
                    'disabled' => 'disabled']]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'legalguardian', 
            'tab' => 'Applicant Information',
            'label' => '',
            'wrapperAttributes' => [
                 'id' => 'legalguardianwrapper'],
             'attributes' => [
                    'placeholder' => 'Legal Guardian Name',
                    'id' => 'legalguardian2']
                  ], 'update/create/both');

        $this->crud->addField(
            ['name' => 'contactnumber',
            'label' => 'Contact Number',
            'type' => 'number',
            'tab' => 'Applicant Information']
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'readingwriting', 
            'tab' => 'Applicant Information',
            'type' => 'enum']
            , 'update/create/both');
        $this->crud->addField(
            ['name' => 'verbalproficiency', 
            'tab' => 'Applicant Information',
            'type' => 'enum']
            , 'update/create/both');
        $this->crud->addField(
            [   // Table
                'tab' => 'Applicant Information',
                'name' => 'mojorlanguages',
                'label' => 'Major language(s) used at home',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'languages' => 'List below'
                ],
                'max' => 10, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both'
        );
        $this->crud->addField(
            [   // Table
                'tab' => 'Applicant Information',
                'name' => 'otherlanguages',
                'label' => 'Other languages/dialects spoken',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'languages' => 'List below'
                ],
                'max' => 10, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both'
        );
        $this->crud->addField(
            [   // Table
                'tab' => 'Applicant Information',
                'name' => 'classparticipation',
                'label' => 'List any participation in advanced level classes (i.e., Advanced Math, Gifted or Talented, Gateway, Writing, etc.)',
                'type' => 'table',
                'entity_singular' => 'Line', // used on the "Add X" button
                'columns' => [
                    'languages' => 'List below'
                ],
                'max' => 10, // maximum rows allowed in the table
                'min' => 1 // minimum rows allowed in the table
            ],'update/create/both'
        );

        $this->crud->addField(
                [
                    'tab'   => 'Applicant Information',
                    'name'        => 'remedialhelp', // the name of the db column
                    'label'       => 'Did your child receive any remedial help in previous school? (i.e., Remedial Program, Special Education, Speech Therapy, IEP, IDR, etc.)', // the input label
                    'type'        => 'radioIfYes',
                    'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                                        0 => "Yes",
                                        1 => "No"
                                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                ]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'remedialhelpexplantion',
            'label' => 'Please explain and provide latest testing results.',
            'type' => 'ifyes',
            'tab' => 'Applicant Information',
            'attributes' => [
                    'placeholder' => 'Explanation here']]
            , 'update/create/both');

        $this->crud->addField(
            ['name' => 'specialtalent',
            'label' => 'Does your child have any special talent or interest in:',
            'type' => 'checklistcustom',
            'tab' => 'Applicant Information',
            'attributes' => [
                    'id' => 'specialtalentid']]
            , 'update/create/both');

        $this->crud->addField(
            [   // Custom Field
                'name' => 'otherinfo',
                'label' => 'Is there any other information you think the teacher should know about your child?',
                'type' => 'ifyesdynamic',
                'tab' => 'Applicant Information',
                'attributes' => [
                    'id' => 'otherinfoid',
                    'placeholder' => 'Please specify here',
                ]
            ],'update/create/both');

        $this->crud->addField(
            [   // Custom Field
                'name' => 'disciplinaryproblem',
                'label' => 'Has your child ever been asked to leave school because of any behavioral/disciplinary problems?',
                'type' => 'ifyesdynamic',
                'tab' => 'Applicant Information',
                'attributes' => [
                    'id' => 'disciplinaryproblemid',
                    'placeholder' => 'Please explain',
                ]
            ],'update/create/both');
        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}

@if ($crud->hasAccess('update'))
	<a href="{{ str_replace('search/','',Request::url().'/'.$entry->getKey()) }}/print" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-print"></i> Print</a>
@endif
<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="treeview">
  <a href="#"><i class="fa fa-key"></i> <span>Enrollment Module</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url('admin/student') }}"><i class="fa fa-tag"></i> <span>Students</span></a></li>
    <li><a href="{{ url('admin/misc') }}"><i class="fa fa-tag"></i> <span>Miscellaneous</span></a></li>
    <li><a href="{{ url('admin/level') }}"><i class="fa fa-tag"></i> <span>Levels</span></a></li>
  </ul>
</li>

<li class="treeview">
  <a href="#"><i class="fa fa-tasks"></i> <span>System Management</span> <i class="fa fa-angle-left pull-right"></i></a>
  	<ul class="treeview-menu">
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/schoolyear') }}"><span>School Year Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/curriculum_management') }}"><span>Curriculum Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/subject_management') }}"><span>Subject Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/year_management') }}"><span>Level Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/section_management') }}"><span>Section Management</span></a>
	    </li>
  	</ul>
</li>

<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>

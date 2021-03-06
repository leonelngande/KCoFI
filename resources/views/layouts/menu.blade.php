<li class="{{ Request::is('home') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

<li class="{{ Request::is('certificates*') ? 'active' : '' }}">
    <a href="{!! route('certificates.index') !!}"><i class="fa fa-certificate"></i><span>Certificates</span></a>
</li>

<li class="{{ Request::is('convicts*') ? 'active' : '' }}">
    <a href="{!! route('convicts.index') !!}"><i class="fa fa-user-secret"></i><span>Convicts</span></a>
</li>

<li class="{{ Request::is('convictionRecords*') ? 'active' : '' }}">
    <a href="{!! route('convictionRecords.index') !!}"><i class="fa fa-archive"></i><span>Conviction Records</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Administrators</span></a>
</li>

<li class="{{ Request::is('divisions*') ? 'active' : '' }}">
    <a href="{!! route('divisions.index') !!}"><i class="fa fa-globe"></i><span>Divisions</span></a>
</li>

<li class="{{ Request::is('subdivisions*') ? 'active' : '' }}">
    <a href="{!! route('subdivisions.index') !!}"><i class="fa fa-globe"></i><span>Subdivisions</span></a>
</li>


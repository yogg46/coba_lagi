        <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">

                <ul class="side-nav magic-nav">

                    <li class="side-nav-header">Navigation</li>

                    <li>
                        <a href="/dashboard"><i class="sli-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>

                    {{-- Admin --}}

                    @if (auth()->user()->role == 1)
                    <li class="has-submenu">
                        <a href="#submenuSeven" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-users"></i>
                            <span class="nav-text">Karyawan</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuSeven">
                            <ul>
                                <li><a href="/karyawan">All</a></li>
                                <li><a href="/karyawan/Administator">Administator</a></li>
                                <li><a href="/">Manager</a></li>
                                <li><a href="/">Marketing</a></li>
                                <li><a href="/">Leader</a></li>
                                <li><a href="/">Programer</a></li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="/client"><i class="sli-briefcase"></i> <span class="nav-text">client</span></a>
                    </li>

                    <li>
                        <a href="/projects"><i class="sli-docs"></i> <span class="nav-text">Project</span></a>
                    </li>

                    <li>
                        <a href="/"><i class="fs-list"></i> <span class="nav-text">Report</span></a>
                    </li>
                    @endif

                    {{-- Management --}}
                    @if (auth()->user()->role == 2)
                        {{-- report & view progres project --}}
                        <li>
                            <a href="/projects"><i class="sli-docs"></i> <span class="nav-text">Project</span></a>
                        </li>
                        <li>
                            <a href="/"><i class="fs-list"></i> <span class="nav-text">Report</span></a>
                        </li>

                    @endif




                </ul>

            </div><!-- END: sidebar-inner -->

        </aside>    <!-- END: Side Navigation -->

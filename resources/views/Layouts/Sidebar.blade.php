<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image-->  <span class="brand-text fw-light">Tugas Crud Pegawai</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open"> 
                               <!--<p> 
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>

                                </p> -->
                                <a href="{{ route('tambah') }}" class="nav-link active">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Tambah data

                                </p>
                            </a>
                            </a>
                        </li>
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
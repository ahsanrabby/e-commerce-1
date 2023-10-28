<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Category Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('category.add')}}">Add Category</a></li>
                        <li><a href="{{route('category.manage')}}">Manage Categoey</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="hide-menu">Sub Categoey</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('sub-category.add')}}">Add Sub Category</a></li>
                        <li><a href="{{route('sub-category.manage')}}">Manage Sub Category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Brand Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('brand.add')}}">Add Brand</a></li>
                        <li><a href="{{route('brand.manage')}}">Manage Brand</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-media-right-alt"></i>
                        <span class="hide-menu">Unit Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('unit.add')}}">Add Unit</a></li>
                        <li><a href="{{route('unit.manage')}}">Manage Unit</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-accordion-merged"></i>
                        <span class="hide-menu">Product Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('product.add')}}">Add Product</a></li>
                        <li><a href="{{route('product.manage')}}">Manage Product</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-settings"></i>
                        <span class="hide-menu">Order Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.all-order')}}">Manage Order</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-gallery"></i>
                        <span class="hide-menu">Customer Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.manage-cust')}}">Manage Customer</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-files"></i>
                        <span class="hide-menu">Roles & Permission</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('/roles')}}">Manage Roles</a></li>

                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-pie-chart"></i>
                        <span class="hide-menu">Coupon Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="chart-morris.html">Add Coupon</a></li>
                        <li><a href="chart-chartist.html">Manage Coupon</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-light-bulb"></i>
                        <span class="hide-menu">Setting</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="icon-material.html">Company Setting</a></li>
                        <li><a href="icon-fontawesome.html">Tax Setting</a></li>
                        <li><a href="icon-themify.html">Shipping Setting</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

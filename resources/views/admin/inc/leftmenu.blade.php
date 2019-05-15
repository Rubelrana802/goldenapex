   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('/login')}}">
       <img src="{{ asset('admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
        <li><a href="{{ url('/login')}}" class="waves-effect">
          <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i>
        </a></li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-layout-accordion-list"></i>
          <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/invoice/create') }}"><i class="fa fa-circle-o"></i> New Invoice</a></li>
        <li><a href="{{ url('/invoice/manage') }}"><i class="fa fa-circle-o"></i> Manage Invoice</a></li>
        </ul>
      </li>  

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-tag"></i>
          <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="{{ url('/category/save') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
  		  <li><a href="{{ url('/category/manage') }}"><i class="fa fa-circle-o"></i> Manage Category</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-tag"></i>
          <span>Inventory Location</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="{{ route('location.create') }}"><i class="fa fa-circle-o"></i> Add Store</a></li>
  		  <li><a href="{{ url('/category/manage') }}"><i class="fa fa-circle-o"></i> Manage Store</a></li>
        </ul>
      </li>


      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-bag"></i>
          <span>Item & Inventory</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/product/add') }}"><i class="fa fa-circle-o"></i> Add Item</a></li>
        <li><a href="{{ url('/product/manage') }}"><i class="fa fa-circle-o"></i> Manage Item</a></li>
        <li><a href="{{ url('/product/location') }}"><i class="fa fa-circle-o"></i> Inventory Location</a></li>
        <li><a href="{{ url('/product/report') }}"><i class="fa fa-circle-o"></i> Inventory Report</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-handshake-o"></i>
          <span>Customer</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/customer/add')}}"><i class="fa fa-circle-o"></i> Add Customer</a></li>
        <li><a href="{{ url('/customer/manage')}}"><i class="fa fa-circle-o"></i> Manage Customer</a></li>
        <li><a href="{{ url('/customer/credit')}}"><i class="fa fa-circle-o"></i> Credit Customer</a></li>
        <li><a href="{{ url('/customer/paid')}}"><i class="fa fa-circle-o"></i> Paid Customer</a></li>
        </ul>
      </li>

<!--       <li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="fa fa-universal-access"></i>
    <span>Unit</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="{{ url('/unit/add') }}"><i class="fa fa-circle-o"></i> Add Unit</a></li>
  <li><a href="{{ url('/unit/manage') }}"><i class="fa fa-circle-o"></i> Manage Unit</a></li>
  </ul>
</li> -->

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-user"></i>
          <span>Supplier</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/supplier/add') }}"><i class="fa fa-circle-o"></i> Add Supplier</a></li>
        <li><a href="{{ url('/supplier/manage') }}"><i class="fa fa-circle-o"></i> Manage Supplier</a></li>
        <li><a href="{{ url('/supplier/credit')}}"><i class="fa fa-circle-o"></i> Supplier Ledger</a></li>
        <li><a href="{{ url('/supplier/paid')}}"><i class="fa fa-circle-o"></i> Supplier Sales Details</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>Purchase</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ route('purchase.product') }}"><i class="fa fa-circle-o"></i> Add Purchase</a></li>
        <li><a href="{{ route('manage.purchase.product') }}"><i class="fa fa-circle-o"></i> Manage Purchase</a></li>
        <li><a href="{{ url('/purchase/return') }}"><i class="fa fa-circle-o"></i> Supplier Return Invoice</a></li>
        <li><a href="{{ url('/purchase/payment') }}"><i class="fa fa-circle-o"></i> Supplier Payment</a></li>
        <li><a href="{{ url('/purchase/manage') }}"><i class="fa fa-circle-o"></i> Purchase Report</a></li>
        </ul>
      </li>

 <!--      <li>
   <a href="javaScript:void();" class="waves-effect">
     <i class="fa fa-retweet"></i>
     <span>Return</span> <i class="fa fa-angle-left pull-right"></i>
   </a>
   <ul class="sidebar-submenu">
   <li><a href="{{ url('/return') }}"><i class="fa fa-circle-o"></i> Return</a></li>
   <li><a href="{{ url('/stock/return/list') }}"><i class="fa fa-circle-o"></i> Stock Return List</a></li>
   <li><a href="{{ url('/supplier/return/list') }}"><i class="fa fa-circle-o"></i> Supplier Return List</a></li>
   <li><a href="{{ url('/wastage/return/list') }}"><i class="fa fa-circle-o"></i> Wastage Return List</a></li>
   </ul>
 </li> -->

<!--       <li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="fa fa-money"></i>
    <span>Tax</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="{{ url('/tax/add') }}"><i class="fa fa-circle-o"></i> Add Tax</a></li>
  <li><a href="{{ url('/tax/manage') }}"><i class="fa fa-circle-o"></i> Manage Tax</a></li>
  </ul>
</li> -->
  
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/sales/return') }}"><i class="fa fa-circle-o"></i> Sales Return</a></li>
        <li><a href="{{ url('/sales/quotation') }}"><i class="fa fa-circle-o"></i> Sales Quotation</a></li>
        <li><a href="{{ url('/sales/payment') }}"><i class="fa fa-circle-o"></i> Customer Payment</a></li>
        <li><a href="{{ url('/sales/report') }}"><i class="fa fa-circle-o"></i> Customer & Sales Report</a></li>
        </ul>
      </li>



    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-money"></i>
          <span>Expense</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/Expense/item') }}"><i class="fa fa-circle-o"></i> Add Expense Item</a></li>
        <li><a href="{{ url('/Expense/add') }}"><i class="fa fa-circle-o"></i> Add Expense</a></li>
        <li><a href="{{ url('/Expense/manage') }}"><i class="fa fa-circle-o"></i> Manage Expense</a></li>
        </ul>
      </li>

<!--       <li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="ti-book"></i>
    <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="{{ url('/stock/report') }}"><i class="fa fa-circle-o"></i> Stock Report</a></li>
  <li><a href="{{ url('/supplier/stock/report') }}"><i class="fa fa-circle-o"></i> Stock Report (Supplier Wise)</a></li>
  <li><a href="{{ url('/product/stock/report') }}"><i class="fa fa-circle-o"></i> Stock Report (Product Wise)</a></li>
  </ul>
</li>

<li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="ti-briefcase"></i>
    <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="#"><i class="fa fa-circle-o"></i> Todays Report</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Todays Customer Receipt</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Report</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Report (Category Wise)</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report (Product Wise)</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report (Category Wise)</a></li>
  </ul>
</li> -->

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-briefcase"></i>
          <span>Fixed Assets</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Add Fixed Assets</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage Fixed Assets</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Fixed Assets Location</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Fixed Assets Purchase</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Fixed Assets Sales</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-layout-grid2"></i>
          <span>Bank</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('bank/add') }}"><i class="fa fa-circle-o"></i> Add New Bank</a></li>
        <li><a href="{{ url('/bank/transaction') }}"><i class="fa fa-circle-o"></i> Bank Transaction</a></li>
        <li><a href="{{ url('bank/manage') }}"><i class="fa fa-circle-o"></i> Manage Bank</a></li>
        <li><a href="{{ url('bank/manage') }}"><i class="fa fa-circle-o"></i> Bank Deposits</a></li>
        <li><a href="{{ url('bank/manage') }}"><i class="fa fa-circle-o"></i> Bank Credits</a></li>
        <li><a href="{{ url('bank/manage') }}"><i class="fa fa-circle-o"></i> Bank Account Transfer</a></li>
        <li><a href="{{ url('bank/manage') }}"><i class="fa fa-circle-o"></i> Banking Report</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-layout-grid2"></i>
          <span>Bank Loan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('bank/add') }}"><i class="fa fa-circle-o"></i> Add New Bank</a></li>
        <li><a href="{{ url('/bank/loan') }}"><i class="fa fa-circle-o"></i> Bank Loan</a></li>
        <li><a href="{{ url('bank/manage/loan') }}"><i class="fa fa-circle-o"></i> Manage Loan</a></li>
        <li><a href="{{ url('bank/payment') }}"><i class="fa fa-circle-o"></i> Payment Loan</a></li>
        <li><a href="{{ url('bank/report') }}"><i class="fa fa-circle-o"></i> Bank Loan Report</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-layout-grid2"></i>
          <span>Employee</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('employee/add') }}"><i class="fa fa-circle-o"></i> Add Employee</a></li>
        <li><a href="{{ url('/employee/salary') }}"><i class="fa fa-circle-o"></i> Received Salary</a></li>
        <li><a href="{{ url('employee/advanced') }}"><i class="fa fa-circle-o"></i> Received Advanced</a></li>
        <li><a href="{{ url('employee/payment') }}"><i class="fa fa-circle-o"></i> Payment Advanced</a></li>
        <li><a href="{{ url('employee/report') }}"><i class="fa fa-circle-o"></i> Employee Report</a></li>
        </ul>
      </li>
<!--       <li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="fa fa-university"></i>
    <span>Office Loan</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="{{ url('/officeloan/add') }}"><i class="fa fa-circle-o"></i> Add Person</a></li>
  <li><a href="{{ url('/officeloan/loan') }}"><i class="fa fa-circle-o"></i> Add Loan</a></li>
  <li><a href="{{ url('/officeloan/payment') }}"><i class="fa fa-circle-o"></i> Add Payment</a></li>
  <li><a href="{{ url('/officeloan/manage') }}"><i class="fa fa-circle-o"></i> Manage Loan</a></li>
  </ul>
</li>

<li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="fa fa-user-circle"></i>
    <span>Personal Loan</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="#"><i class="fa fa-circle-o"></i> Add Person</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Add Loan</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Add Payment</a></li>
  <li><a href="#"><i class="fa fa-circle-o"></i> Manage Loan</a></li>
  </ul>
</li> -->
    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-money"></i>
          <span style="font-size: 13px !important ;">Marketing Management</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ url('/marketing/order') }}"><i class="fa fa-circle-o"></i> Order Placement</a></li>
        <li><a href="{{ url('/marketing/tracking') }}"><i class="fa fa-circle-o"></i> Employee Tracking</a></li>
      </ul>
    </li>

    <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="fa fa-money"></i>
      <span>Accounts</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{ url('/accounts/chart') }}"><i class="fa fa-circle-o"></i> Chart Of Accounts</a></li>
      <li><a href="{{ url('/trial/balance') }}"><i class="fa fa-circle-o"></i> Trial Balance</a></li>
      <li><a href="{{ url('/cash/flow') }}"><i class="fa fa-circle-o"></i> Cash Flow Statement</a></li>
      <li><a href="{{ url('/Profit/loss') }}"><i class="fa fa-circle-o"></i> Profit & Loss Account</a></li>
      <li><a href="{{ url('/balance/sheet') }}"><i class="fa fa-circle-o"></i> Balance Sheet</a></li>
    </ul>
</li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-reload"></i>
          <span>Data Synchronizer</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Backup</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-settings"></i>
          <span>Software Settings</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage Company</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Add User</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage User</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Setting</a></li>
        </ul>
      </li>

    </ul>
	 
   </div>
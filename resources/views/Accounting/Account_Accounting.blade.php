<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<!-- Fancybox CSS -->


    <!-- Include jQuery -->

@include('Components.Admin.Header')

<body>


    @include('Components.Accounting.Sidebar')
    <!-- sidebar end -->

    <!-- navbar-wrapper start -->
    <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
        <div class="navbar__left">
            <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
            <form class="navbar-search">
                <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                    placeholder="Search here...">
                <i class="las la-search"></i>
                <ul class="search-list"></ul>
            </form>
        </div>
        <div class="navbar__right">
            <ul class="navbar__action-list">
                <li>
                    <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Visit Website">
                        <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i
                                class="las la-globe"></i></a>
                    </button>
                </li>
                <li class="dropdown">
                    <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown"
                        data-display="static" aria-haspopup="true" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unread Notifications">
                            <i class="las la-bell "></i>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                        <div class="dropdown-menu__header">
                            <span class="caption">Notification</span>
                        </div>
                        <div class="dropdown-menu__body  d-flex justify-content-center align-items-center ">
                            <div class="empty-notification text-center">
                                <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png"
                                    alt="empty">
                                <p class="mt-3">No unread notification found</p>
                            </div>
                        </div>
                        <div class="dropdown-menu__footer">
                            <a href="https://script.viserlab.com/courierlab/demo/admin/notifications"
                                class="view-all-message">View all notifications</a>
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="System Setting">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/system-setting"><i
                                class="las la-wrench"></i></a>
                    </button>
                </li>
                <li class="dropdown d-flex profile-dropdown">
                    <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="navbar-user">
                            <span class="navbar-user__thumb"><img
                                    src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/images/profile/667c14b5145fd1719407797.png"
                                    alt="image"></span>
                            <span class="navbar-user__info">
                                <span class="navbar-user__name">admin</span>
                            </span>
                            <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/profile"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-user-circle"></i>
                            <span class="dropdown-menu__caption">Profile</span>
                        </a>

                        <a href="https://script.viserlab.com/courierlab/demo/admin/password"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-key"></i>
                            <span class="dropdown-menu__caption">Password</span>
                        </a>

                        <a href="https://script.viserlab.com/courierlab/demo/admin/logout"
                            class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                            <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                            <span class="dropdown-menu__caption">Logout</span>
                        </a>
                    </div>
                    <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                        <i class="las la-sliders-h"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar-wrapper end -->


    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">In and Out</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <!-- Add Account Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#manageAccount">
                            <i class="las la-user-plus"></i> Add Account
                        </button>

                        <!-- Deposit Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#manageDeposit">
                            <i class="las la-plus"></i> IN
                        </button>

                        <!-- Withdrawal Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#manageWithdraw">
                            <i class="las la-minus"></i> OUT
                        </button>

                        <!-- Expense Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#manageExpense">
                            <i class="las la-minus"></i> Expense
                        </button>
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#managePayment">
                            <i class="las la-minus"></i> Proof of Payment
                        </button>
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal" data-bs-target="#manageStartingBalance">
                            <i class="las la-minus"></i> Add Starting Balance
                        </button>
                    </div>
                </div>

                <!-- Account Selection Dropdown -->
                <form method="GET" action="{{ route('filter.transactions') }}">
                    <div class="form-group">
                        <label for="accountSelect">Select Account:</label>
                        <select id="accountSelect" name="account" class="form-control" onchange="this.form.submit()">
                            <option value="">-- Select an Account --</option>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}" {{ request('account') == $account->id ? 'selected' : '' }}>
                                    {{ $account->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>

                <!-- Display the overall Outstanding Balance and Remaining Balance -->
                <div class="row mb-3">
                    <div class="col-md-4">
                    <div class="alert alert-info">
    <strong>Starting Balance:</strong> {{ number_format($startingBalance, 2) }}
</div>

                        <div class="alert alert-info">
                            <strong>Outstanding Balance:</strong> {{ number_format($outstandingBalance, 2) }}
                        </div>
                        <div class="alert alert-warning">
                        <strong>Total Expense:</strong> {{ number_format($totalExpense, 2) }}
                    </div>
                        <div class="alert alert-success">
                            <strong>Remaining Balance:</strong> {{ number_format($remainingBalance, 2) }}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="dt-buttons btn-group d-flex justify-content-end gap-2">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bx-export'></i> Export
                                </button>
                                <ul class="dropdown-menu">
                                    <li><button type="button" id="copyBtn" class="btn dropdown-item"><i class='bx bx-copy'></i> Copy</button></li>
                                    <li><button type="button" id="printBtn" class="btn dropdown-item"><i class='bx bx-printer'></i> Print</button></li>
                                    <li><button type="button" id="excelBtn" class="btn dropdown-item"><i class='bx bx-file'></i> Excel</button></li>
                                    <li><button type="button" id="pdfBtn" class="btn dropdown-item"><i class='bx bxs-file-pdf'></i> Pdf</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
           <table class="jobOffersTable">
    <thead>
        <tr>
            <th>Date</th>
            <th>Particulars</th>
            <th>Payment Received</th>
            <th>Expense</th>
            <th>Net Income</th>
            <th>Proof of Payment</th>
            <th>Notes</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($transactions as $transaction)
            <tr>
                <td>{{ date('F d Y', strtotime($transaction->date)) }}</td>
                <td>{{ $transaction->particulars }}</td>
                <td>₱{{ number_format($transaction->deposit_amount, 2, '.', ',') }}</td>
                <td>₱{{ number_format($transaction->withdraw_amount, 2, '.', ',') }}</td>
                <td>₱{{ number_format($netIncome, 2, '.', ',') }}</td>

                <td>
    @if($transaction->proof_of_payment)
        <a href="{{ asset($transaction->proof_of_payment) }}" data-fancybox="gallery" data-caption="Proof of Payment">
            <img src="{{ asset($transaction->proof_of_payment) }}" alt="Company Image" style="max-width: 100px;">
        </a>
    @else
        No Proof Uploaded
    @endif
</td>

                <td>{{ $transaction->notes }}</td>
                <td>
                    <!-- Update Action -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal"
                        data-id="{{ $transaction->id }}"
                        data-date="{{ $transaction->date }}"
                        data-particulars="{{ $transaction->particulars }}"
                        data-deposit="{{ $transaction->deposit_amount }}"
                        data-withdraw="{{ $transaction->withdraw_amount }}"
                        data-expense="{{ $transaction->expense_amount }}"
                        data-notes="{{ $transaction->notes }}">
                        Update
                    </button>

                    <!-- Delete Action -->
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No records found</td>
            </tr>
        @endforelse
    </tbody>
</table>


                <!-- Modal Structure -->
                <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update Transaction</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="updateForm" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" class="form-control" id="particulars" name="particulars" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deposit_amount" class="form-label">Payment Received</label>
                                        <input type="number" step="0.01" class="form-control" id="deposit_amount" name="deposit_amount" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="withdraw_amount" class="form-label">Expense</label>
                                        <input type="number" step="0.01" class="form-control" id="withdraw_amount" name="withdraw_amount" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="expense_amount" class="form-label">Net Income</label>
                                        <input type="number" step="0.01" class="form-control" id="expense_amount" name="expense_amount" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Add Account Modal -->
                <div class="modal fade" id="manageAccount" tabindex="-1" aria-labelledby="manageAccountLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageAccountLabel">Create Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('account.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Account Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Deposit Modal -->
                <div class="modal fade" id="manageDeposit" tabindex="-1" aria-labelledby="manageDepositLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDepositLabel">Deposit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('deposit.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach($accounts as $account)
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deposit_amount" class="form-label">Deposit Amount</label>
                                        <input type="number" id="deposit_amount" name="deposit_amount" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Withdrawal Modal -->
                <div class="modal fade" id="manageWithdraw" tabindex="-1" aria-labelledby="manageWithdrawLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageWithdrawLabel">Withdraw</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('withdraw.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach($accounts as $account)
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="withdraw_amount" class="form-label">Withdrawal Amount</label>
                                        <input type="number" id="withdraw_amount" name="withdraw_amount" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="managePayment" tabindex="-1" aria-labelledby="manageWithdrawLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageWithdrawLabel">Proof of Payment   </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('uploadpayment.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label for="account_id" class="form-label">Account</label>
            <select id="account_id" name="account_id" class="form-select" required>
                <option value="">Select Account</option>
                @foreach($accounts as $account)
                    <option value="{{ $account->id }}">{{ $account->name }}</option>
                @endforeach
            </select>
            @error('account_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="particulars" class="form-label">Particulars</label>
            <input type="text" id="particulars" name="particulars" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <input type="text" id="notes" name="notes" class="form-control">
        </div>
        <div class="mb-3">
            <label for="proof_of_payment" class="form-label">Proof of Payment</label>
            <input type="file" id="proof_of_payment" name="proof_of_payment" class="form-control" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    </div>
</form>

                        </div>
                    </div>
                </div>

                <!-- Expense Modal -->
                <div class="modal fade" id="manageExpense" tabindex="-1" aria-labelledby="manageExpenseLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageExpenseLabel">Expense</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('expense.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach($accounts as $account)
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="expense_amount" class="form-label">Expense Amount</label>
                                        <input type="number" id="expense_amount" name="expense_amount" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              <!-- Starting Balance Modal -->
<div class="modal fade" id="manageStartingBalance" tabindex="-1" aria-labelledby="manageStartingBalanceLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageStartingBalanceLabel">Add Starting Balance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('startingbalance.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="account_id" class="form-label">Account</label>
                        <select id="account_id" name="account_id" class="form-select" required>
                            <option value="">Select Account</option>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                            @endforeach
                        </select>
                        @error('account_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="starting_balance" class="form-label">Starting Amount</label>
                        <input type="number" id="starting_balance" name="starting_balance" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>





    <!-- Confirmation Modal -->
    <!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this vehicle?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var deleteButtons = document.querySelectorAll('.btn-delete');
        var deleteForm = document.getElementById('deleteForm');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var url = button.getAttribute('data-url');
                deleteForm.setAttribute('action', url);
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#updateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract the ID
            var date = button.data('date');
            var particulars = button.data('particulars');
            var deposit = button.data('deposit');
            var withdraw = button.data('withdraw');
            var expense = button.data('expense');
            var notes = button.data('notes');

            // Update the modal's content
            var modal = $(this);
            modal.find('#date').val(date);
            modal.find('#particulars').val(particulars);
            modal.find('#deposit_amount').val(deposit);
            modal.find('#withdraw_amount').val(withdraw);
            modal.find('#expense_amount').val(expense);
            modal.find('#notes').val(notes);

            // Make fields read-only or editable based on their values
            modal.find('#deposit_amount').prop('readonly', deposit == 0);
            modal.find('#withdraw_amount').prop('readonly', withdraw == 0);
            modal.find('#expense_amount').prop('readonly', expense == 0);

            // Set the form's action URL to include the transaction ID
            modal.find('#updateForm').attr('action', '/transactions/' + id);
        });
    });
</script>


<script>
$(document).ready(function() {
    $('.jobOffersTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>

<script>
    $('form[id^="editJobForm"]').on('submit', function(e) {
    e.preventDefault();

    var form = $(this);
    var formData = new FormData(form[0]);
    var jobId = form.attr('id').replace('editJobForm', '');

    $.ajax({
        url: form.attr('action'),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message,
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false
            }).then(() => {
                $('#editJobModal' + jobId).modal('hide');
                location.reload(); // Reload page or update table row
            });
        },
        error: function(xhr, status, error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Failed to update vehicle. Please try again.',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: true
            });
        }
    });
});

</script>
    <script>
        "use strict";
        const colors = {
            success: '#28c76f',
            error: '#eb2222',
            warning: '#ff9f43',
            info: '#1e9ff2',
        }

        const icons = {
            success: 'fas fa-check-circle',
            error: 'fas fa-times-circle',
            warning: 'fas fa-exclamation-triangle',
            info: 'fas fa-exclamation-circle',
        }

        const notifications = [];
        const errors = [];


        const triggerToaster = (status, message) => {
            iziToast[status]({
                title: status.charAt(0).toUpperCase() + status.slice(1),
                message: message,
                position: "topRight",
                backgroundColor: '#fff',
                icon: icons[status],
                iconColor: colors[status],
                progressBarColor: colors[status],
                titleSize: '1rem',
                messageSize: '1rem',
                titleColor: '#474747',
                messageColor: '#a2a2a2',
                transitionIn: 'obunceInLeft'
            });
        }

        if (notifications.length) {
            notifications.forEach(element => {
                triggerToaster(element[0], element[1]);
            });
        }

        if (errors.length) {
            errors.forEach(error => {
                triggerToaster('error', error);
            });
        }

        function notify(status, message) {
            if (typeof message == 'string') {
                triggerToaster(status, message);
            } else {
                $.each(message, (i, val) => triggerToaster(status, val));
            }
        }
    </script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>


    <script>
        "use strict";
        bkLib.onDomLoaded(function () {
            $(".nicEdit").each(function (index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function ($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function () {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function () {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function () {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function (e) {
                const {
                    top,
                    left
                } = $(this).next(".dropdown-menu")[0].getBoundingClientRect();
                $(this).next(".dropdown-menu").css({
                    position: "fixed",
                    inset: "unset",
                    transform: "unset",
                    top: top + "px",
                    left: left + "px",
                });
            });
        })(jQuery);
    </script>


    <script>
        (function ($) {
            "use strict";
            $(document).on('click', '.confirmationBtn', function () {
                var modal = $('#confirmationModal');
                let data = $(this).data();
                modal.find('.question').text(`${data.question}`);
                modal.find('form').attr('action', `${data.action}`);
                modal.modal('show');
            });
        })(jQuery);
    </script>

    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Include SweetAlert2 JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Buttons Extension CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">
    <!-- DataTables Buttons Extension JS -->
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>
    <!-- jQuery (required for Fancybox) -->

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/fancybox.min.js"></script>

</body>

</html>

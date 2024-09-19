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
    @include('Components.Admin.Navbar')



    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">In and Out</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <!-- Add Account Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAccount">
                            <i class="las la-user-plus"></i> Add Account
                        </button>

                        <!-- Deposit Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageDeposit">
                            <i class="las la-plus"></i> IN
                        </button>

                        <!-- Withdrawal Button -->
                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageWithdraw">
                            <i class="las la-minus"></i> OUT
                        </button>

                        <!-- Expense Button -->

                        <button class="btn btn-sm btn-outline--primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageStartingBalance">
                            <i class="las la-minus"></i> Add Starting Balance
                        </button>
                    </div>
                </div>

                <!-- Account Selection Dropdown -->
                <form method="GET" action="{{ route('filter.transactions') }}">
                    <div class="form-group pt-4">
                        <label for="accountSelect">Select Account:</label>
                        <select id="accountSelect" name="account" class="form-control" onchange="this.form.submit()">
                            <option value="">-- Select an Account --</option>
                            @foreach ($accounts as $account)
                                <option value="{{ $account->id }}"
                                    {{ request('account') == $account->id ? 'selected' : '' }}>
                                    {{ $account->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>

                <!-- Display the overall Outstanding Balance and Remaining Balance -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="alert alert-info p-2">
                            <strong>Starting Balance:</strong> {{ number_format($startingBalance, 2) }}
                        </div>
                        <div class="alert alert-info p-2" style="background-color: rgba(255, 0, 0, 0.5); color: white;">
                            <strong>Remaining Balance:</strong> {{ number_format($outstandingBalance, 2) }}
                        </div>
                        {{-- <div class="alert alert-info" style="background-color: rgba(255, 0, 0, 0.5); color: white;">
                            <strong>Total Expenses:</strong> {{ number_format($totalExpense, 2) }}
                        </div> --}}
                    </div>
                </div>
                  <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins pb-3">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-export'></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" id="copyBtn" class="btn dropdown-item">
                                    <i class='bx bx-copy'></i> Copy
                                </button>
                            </li>
                            <li>
                                <button type="button" id="printBtn" class="btn dropdown-item">
                                    <i class='bx bx-printer'></i> Print
                                </button>
                            </li>
                            <li>
                                <button type="button" id="pdfBtn" class="btn dropdown-item">
                                    <i class='bx bxs-file-pdf'></i> PDF
                                </button>
                            </li>
                            <li>
                                <button type="button" id="excelBtn" class="btn dropdown-item">
                                    <i class='bx bx-file'></i> Excel
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="data-table" class="table table--light style--two display nowrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Particulars</th>
                                                <th>Payment Amount</th>
                                                <th>Expense Amount</th>
                                                <th>Payment Channel</th>
                                                {{-- <th>Net Income</th> --}}
                                                <th>Proof of Payment</th>
                                                <th>Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($transactions as $transaction)
                                                <tr>


                                                    <td> {{ \Carbon\Carbon::parse($transaction->date)->format('d-M-y h-i A') }}
                                                    </td>

                                                    <td>{{ $transaction->particulars }}</td>
                                                    <td>₱{{ number_format($transaction->deposit_amount, 2, '.', ',') }}
                                                    </td>
                                                    <td>₱{{ number_format($transaction->withdraw_amount, 2, '.', ',') }}
                                                    </td>
                                                    <td>{{ $transaction->payment_channel }}</td>
                                                    {{-- <td>₱{{ number_format($transaction->netIncome, 2, '.', ',') }}</td> <!-- Assuming net_income is a property of $transaction --> --}}

                                                    <td>
                                                        @if ($transaction->proof_payment)
                                                            <a href="{{ asset($transaction->proof_payment) }}"
                                                                data-fancybox="gallery" data-caption="Proof of Payment">
                                                                <img src="{{ asset($transaction->proof_payment) }}"
                                                                    alt="Proof of Payment" style="max-width: 100px;">
                                                            </a>
                                                        @else
                                                            No Proof Uploaded
                                                        @endif
                                                    </td>

                                                    <td class="text-start">{{ $transaction->notes }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7">No records found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal Structure -->
                <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update Transaction
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="updateForm" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" class="form-control" id="particulars" name="particulars"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deposit_amount" class="form-label">Payment
                                            Received</label>
                                        <input type="number" step="0.01" class="form-control" id="deposit_amount"
                                            name="deposit_amount" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="payment_channel" class="form-label">Payment
                                            Channel</label>
                                        <textarea class="form-control" id="payment_channel" name="payment_channel" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="proof_payment" class="form-label">Proof of
                                            Payment</label>
                                        <input type="file" id="proof_payment" name="proof_payment"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Add Account Modal -->
                <div class="modal fade" id="manageAccount" tabindex="-1" aria-labelledby="manageAccountLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageAccountLabel">Create Account
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('account.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Account
                                            Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Deposit Modal -->
                <div class="modal fade" id="manageDeposit" tabindex="-1" aria-labelledby="manageDepositLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDepositLabel">Deposit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('deposit.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}">
                                                    {{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="datetime-local" id="date" name="date"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deposit_amount" class="form-label">Deposit
                                            Amount</label>
                                        <input type="number" id="deposit_amount" name="deposit_amount"
                                            class="form-control" required min="0" step="0.01">
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="payment_channel" class="form-label">Payment
                                            Channel</label>
                                        <input type="text" id="payment_channel" name="payment_channel"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="proof_payment" class="form-label">Proof of
                                            Payment</label>
                                        <input type="file" id="proof_payment" name="proof_payment"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- Withdrawal Modal -->
                <div class="modal fade" id="manageWithdraw" tabindex="-1" aria-labelledby="manageWithdrawLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageWithdrawLabel">Withdraw</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('withdraw.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}">
                                                    {{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="withdraw_amount" class="form-label">Withdrawal
                                            Amount</label>
                                        <input type="number" id="withdraw_amount" name="withdraw_amount"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="managePayment" tabindex="-1" aria-labelledby="manageWithdrawLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageWithdrawLabel">Proof of Payment
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('uploadpayment.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}">
                                                    {{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="proof_of_payment" class="form-label">Proof of
                                            Payment</label>
                                        <input type="file" id="proof_of_payment" name="proof_of_payment"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- Expense Modal -->
                <div class="modal fade" id="manageExpense" tabindex="-1" aria-labelledby="manageExpenseLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageExpenseLabel">Expense</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('expense.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}">
                                                    {{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="particulars" class="form-label">Particulars</label>
                                        <input type="text" id="particulars" name="particulars"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="expense_amount" class="form-label">Expense
                                            Amount</label>
                                        <input type="number" id="expense_amount" name="expense_amount"
                                            class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Starting Balance Modal -->
                <div class="modal fade" id="manageStartingBalance" tabindex="-1"
                    aria-labelledby="manageStartingBalanceLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageStartingBalanceLabel">Add
                                    Starting Balance</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('startingbalance.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="account_id" class="form-label">Account</label>
                                        <select id="account_id" name="account_id" class="form-select" required>
                                            <option value="">Select Account</option>
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}">
                                                    {{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('account_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="starting_balance" class="form-label">Starting
                                            Amount</label>
                                        <input type="number" id="starting_balance" name="starting_balance"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirmationModal" tabindex="-1"
                    aria-labelledby="confirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmationModalLabel">Confirm
                                    Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this vehicle?
                            </div>
                            <div class="modal-footer">
                                <form id="deleteForm" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Yes,
                                        Delete</button>
                                </form>
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <!-- jsPDF with autoTable for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

    <!-- FileSaver.js for CSV export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>
    <script>
        if ($('li').hasClass('active')) {
            $('.sidebar__menu-wrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>

<script>
    $(document).ready(function() {
        $('#data-table').DataTable();
    });

    // Function to extract all table data
    function getTableData() {
        var table = $('#data-table').DataTable();
        var data = table.rows({ search: 'applied' }).data().toArray();
        var headers = table.columns().header().toArray().map(th => $(th).text());

        return { data, headers };
    }

    // Copy function
    document.getElementById('copyBtn').addEventListener('click', function() {
        var { data } = getTableData();
        var textToCopy = data.map(row => row.map(cell => $('<div>').html(cell).text()).join("\t")).join("\n");

        var tempTextArea = document.createElement("textarea");
        tempTextArea.value = textToCopy;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand("copy");
        document.body.removeChild(tempTextArea);
        alert("Table data copied to clipboard!");
    });

    // Print function
    document.getElementById('printBtn').addEventListener('click', function() {
        var { data, headers } = getTableData();
        var printContents = `
        <table border="1">
            <thead>
                <tr>${headers.map(header => `<th>${header}</th>`).join('')}</tr>
            </thead>
            <tbody>
                ${data.map(row => `<tr>${row.map(cell => `<td>${$('<div>').html(cell).text()}</td>`).join('')}</tr>`).join('')}
            </tbody>
        </table>`;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = `<html><head><title>Print</title></head><body>${printContents}</body></html>`;
        window.print();
        document.body.innerHTML = originalContents;
    });

    // PDF export function
    document.getElementById('pdfBtn').addEventListener('click', function() {
        const { jsPDF } = window.jspdf;
        var doc = new jsPDF('landscape'); // Set the orientation to landscape

        var { data, headers } = getTableData();

        // Convert HTML content to text
        var cleanData = data.map(row => row.map(cell => $('<div>').html(cell).text()));

        doc.autoTable({
            head: [headers],
            body: cleanData,
            startY: 10,
            theme: 'grid',
            margin: { top: 10 },
            styles: {
                fontSize: 8,
                cellPadding: 2
            },
            headStyles: {
                fillColor: [22, 160, 133],
                textColor: 255
            },
            pageBreak: 'auto',
        });

        doc.save('table_data.pdf');
    });

    // Excel export function
    document.getElementById('excelBtn').addEventListener('click', function() {
        var { data, headers } = getTableData();
        var wb = XLSX.utils.book_new();
        var cleanData = data.map(row => row.map(cell => $('<div>').html(cell).text()));
        var ws = XLSX.utils.aoa_to_sheet([headers, ...cleanData]);
        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
        XLSX.writeFile(wb, "table_data.xlsx");
    });
</script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>




</body>

</html>

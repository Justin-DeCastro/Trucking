<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Include SweetAlert2 CSS (optional) -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Include jQuery -->
<style>
    .jobOffersTable {
        width: 100%;
        border-collapse: collapse;
    }

    .jobOffersTable thead {
        background-color: #f8f9fa;
        /* Light grey background for headers */
        font-weight: bold;
    }

    .jobOffersTable th,
    .jobOffersTable td {
        border: 1px solid #dee2e6;
        /* Border around table cells */
        padding: 8px;
        text-align: left;
    }

    .jobOffersTable th {
        background-color: #343a40;
        /* Darker background for header cells */
        color: #fff;
        /* White text for header */
    }

    .jobOffersTable tbody tr:nth-chil d(even) {
        background-color: #f2f2f2;
        /* Light grey for alternate rows */
    }
</style>
@include('Components.Admin.Header')

<body>


    @include('Components.Accounting.Sidebar')
    @include('Components.Admin.Navbar')

    <!-- sidebar end -->

    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Financial Report Table</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-outline--primary dropdown-toggle"
                                id="dropdownAccountButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-plus"></i> Manage Account
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#manageDeposit">
                                        <i class="fas fa-plus"></i> Add Deposit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#manageWithdraw">
                                        <i class="fas fa-minus"></i> Add Expense
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageAdmin">
                            <i class="fas fa-plus"></i> Add PMS
                        </button>
                        <button class="btn btn-sm btn-outline--primary addAdmin" type="button" data-bs-toggle="modal"
                            data-bs-target="#manageSubcontractor">
                            <i class="fas fa-plus"></i>Add Loan
                        </button>
                    </div>
                </div>

                <!-- Tab Content -->

                <ul class="nav nav-tabs" id="financialTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="accounts-tab" data-bs-toggle="tab" href="#accounts"
                            role="tab" aria-controls="accounts" aria-selected="true">Accounts</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="preventive-maintenance-tab" data-bs-toggle="tab"
                            href="#preventive-maintenance" role="tab" aria-controls="preventive-maintenance"
                            aria-selected="false">Preventive Maintenance</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="loans-tab" data-bs-toggle="tab" href="#loans" role="tab"
                            aria-controls="loans" aria-selected="false">Loans</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content" id="financialTabsContent">
                    <!-- Accounts Tab -->
                    <div class="tab-pane fade show active" id="accounts" role="tabpanel"
                        aria-labelledby="accounts-tab">
                        <div class="row">
                            <!-- Left Column: Accounts -->
                            <div class="col-md-2">
                                <div class="list-group">
                                    <!-- Add All Accounts Link -->
                                    <a href="#" class="list-group-item list-group-item-action"
                                        onclick="filterData(''); return false;">
                                        All Accounts
                                    </a>
                                    @foreach ($accounts as $account)
                                        <a href="#" class="list-group-item list-group-item-action"
                                            onclick="filterData('{{ $account->name }}'); return false;">
                                            {{ $account->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Right Column: Table -->
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        @if ($formattedTransactions->isEmpty())
                                            <p class="no-data-message">No data available.</p>
                                        @else
                                            <div
                                                class="d-flex flex-wrap justify-content-between gap-2 align-items-center breadcrumb-plugins pb-3">
                                                <h6 class="page-title">Financial Table for Job Offers</h6>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-export'></i> Export
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <button type="button" id="copyBtn"
                                                                class="btn dropdown-item">
                                                                <i class='bx bx-copy'></i> Copy
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" id="printBtn"
                                                                class="btn dropdown-item">
                                                                <i class='bx bx-printer'></i> Print
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" id="pdfBtn"
                                                                class="btn dropdown-item">
                                                                <i class='bx bxs-file-pdf'></i> PDF
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" id="excelBtn"
                                                                class="btn dropdown-item">
                                                                <i class='bx bx-file'></i> Excel
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="table-responsive--md table-responsive">
                                                <table id="data-table"
                                                    class="table table--light style--two display nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Account Name</th>
                                                            <th>Particulars</th>
                                                            <th>Service Fee</th>
                                                            <th>Expenses</th>
                                                            <th>Net Income</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body">
                                                        @foreach ($formattedTransactions as $data)
                                                            <tr class="data-row"
                                                                data-account="{{ $data['accountName'] }}"
                                                                data-date="{{ $data['date'] }}"
                                                                data-net-income="{{ $data['netIncome'] }}">
                                                                <td>{{ $data['date'] }}</td>
                                                                <td>{{ $data['accountName'] }}</td>
                                                                <td>{{ $data['particulars'] }}</td>
                                                                <td>₱ {{ number_format($data['depositBalance'], 2) }}
                                                                </td>
                                                                <td>₱ {{ number_format($data['withdrawBalance'], 2) }}
                                                                </td>
                                                                <td class="text-start">₱
                                                                    {{ number_format($data['netIncome'], 2) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mt-4">
                                                <h5>Total Net Income Per Day</h5>
                                                <ul id="total-net-income-list">
                                                    <!-- Totals will be updated here -->
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Preventive Maintenance Tab -->
                    <div class="tab-pane fade" id="preventive-maintenance" role="tabpanel"
                        aria-labelledby="preventive-maintenance-tab">
                        <div
                            class="d-flex flex-wrap justify-content-between gap-2 align-items-center breadcrumb-plugins pb-3">
                            <h6 class="page-title">Financial Table for Preventive Maintenance</h6>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bx-export'></i> Export
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button type="button" id="copyBtn1" class="btn dropdown-item">
                                            <i class='bx bx-copy'></i> Copy
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="printBtn1" class="btn dropdown-item">
                                            <i class='bx bx-printer'></i> Print
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="pdfBtn1" class="btn dropdown-item">
                                            <i class='bx bxs-file-pdf'></i> PDF
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="excelBtn1" class="btn dropdown-item">
                                            <i class='bx bx-file'></i> Excel
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if ($formattedPreventives->isEmpty())
                            <p class="no-data-message">No data available.</p>
                        @else
                            <div class="table-responsive--md table-responsive">
                                <table id="data-table1" class="table table--light style--two display nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Parts Replaced</th>
                                            <th>Quantity</th>
                                            <th>Price per Piece</th>
                                            <th class="text-start">Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($formattedPreventives as $data)
                                            <tr>
                                                <td>{{ $data['date'] }}</td>
                                                <td>{{ $data['partsReplaced'] }}</td>
                                                <td>{{ $data['quantity'] }}</td>
                                                <td>₱ {{ number_format($data['pricePerPiece'], 2) }}</td>
                                                <td class="text-start">₱ {{ number_format($data['totalAmount'], 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <!-- Loans Tab -->
                    <div class="tab-pane fade" id="loans" role="tabpanel" aria-labelledby="loans-tab">
                        <div
                            class="d-flex flex-wrap justify-content-between gap-2 align-items-center breadcrumb-plugins pb-3">
                            <h6 class="page-title">Financial Table for Loans</h6>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bx-export'></i> Export
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button type="button" id="copyBtn2" class="btn dropdown-item">
                                            <i class='bx bx-copy'></i> Copy
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="printBtn2" class="btn dropdown-item">
                                            <i class='bx bx-printer'></i> Print
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="pdfBtn2" class="btn dropdown-item">
                                            <i class='bx bxs-file-pdf'></i> PDF
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" id="excelBtn2" class="btn dropdown-item">
                                            <i class='bx bx-file'></i> Excel
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if ($formattedLoans->isEmpty())
                            <p class="no-data-message">No data available.</p>
                        @else
                            <div class="table-responsive--md table-responsive">
                                <table id="data-table2" class="table table--light style--two display nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Borrower</th>
                                            <th>Initial Amount</th>
                                            <th>Interest</th>
                                            <th class="text-start">Total Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($formattedLoans as $data)
                                            <tr>
                                                <td>{{ $data['date'] }}</td>
                                                <td>{{ $data['borrower'] }}</td>
                                                <td>₱ {{ number_format($data['initialAmount'], 2) }}</td>
                                                <td>₱ {{ number_format($data['interest'], 2) }}</td>
                                                <td class="text-start">₱ {{ number_format($data['totalPayment'], 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Accounts Modal -->
                <div class="modal fade" id="accountsModal" tabindex="-1" role="dialog"
                    aria-labelledby="accountsModalLabel" aria-hidden="true">
                    <div class="modal-dialog" r ole="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="accountsModalLabel">Account Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong> <span id="modal-account-date"></span></p>
                                <p><strong>Account Name:</strong> <span id="modal-account-name"></span></p>
                                <p><strong>Particulars:</strong> <span id="modal-account-particulars"></span></p>
                                <p><strong>Service Fee:</strong> <span id="modal-account-service-fee"></span></p>
                                <p><strong>Expenses:</strong> <span id="modal-account-expenses"></span></p>
                                <p><strong>Net Income:</strong> <span id="modal-account-net-income"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="print-account">Print</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preventive Maintenance Modal -->
                <div class="modal fade" id="preventiveMaintenanceModal" tabindex="-1" role="dialog"
                    aria-labelledby="preventiveMaintenanceModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="preventiveMaintenanceModalLabel">Preventive Maintenance
                                    Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong> <span id="modal-preventive-date"></span></p>
                                <p><strong>Parts Replaced:</strong> <span id="modal-preventive-parts"></span></p>
                                <p><strong>Quantity:</strong> <span id="modal-preventive-quantity"></span></p>
                                <p><strong>Price per Piece:</strong> <span
                                        id="modal-preventive-price-per-piece"></span></p>
                                <p><strong>Total Amount:</strong> <span id="modal-preventive-total"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="print-preventive">Print</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loans Modal -->
                <div class="modal fade" id="loansModal" tabindex="-1" role="dialog"
                    aria-labelledby="loansModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loansModalLabel">Loan Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong> <span id="modal-loan-date"></span></p>
                                <p><strong>Borrower:</strong> <span id="modal-loan-borrower"></span></p>
                                <p><strong>Initial Amount:</strong> <span id="modal-loan-initial-amount"></span></p>
                                <p><strong>Interest:</strong> <span id="modal-loan-interest"></span></p>
                                <p><strong>Total Payment:</strong> <span id="modal-loan-total-payment"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="print-loan">Print</button>
                            </div>
                        </div>
                    </div>
                </div>




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
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
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
                                        <label for="deposit_amount" class="form-label">Deposit Amount</label>
                                        <input type="number" id="deposit_amount" name="deposit_amount"
                                            class="form-control" required min="0" step="0.01">
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Notes</label>
                                        <input type="text" id="notes" name="notes" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="payment_channel" class="form-label">Payment Channel</label>
                                        <input type="text" id="payment_channel" name="payment_channel"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="proof_payment" class="form-label">Proof of Payment</label>
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

                {{-- add expense --}}
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

                <!-- Create PMS Modal -->
                <div class="modal fade" id="manageAdmin" tabindex="-1" aria-labelledby="manageAdminLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageAdminLabel">Create
                                    Vehicle PMS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('preventives.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="plate_number" class="form-label">Plate
                                            Number</label>
                                        <select id="plate_number" name="plate_number" class="form-control" required>
                                            <option value="">Select Plate Number
                                            </option>
                                            @foreach ($plateNumbers as $plateNumber)
                                                <option value="{{ $plateNumber }}">
                                                    {{ $plateNumber }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="truck_model" class="form-label">Truck
                                            Model</label>
                                        <input type="text" id="truck_model" name="truck_model"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="parts_replaced" class="form-label">Parts Replaced</label>
                                        <input type="text" id="parts_replaced" name="parts_replaced"
                                            class="form-control" required
                                            oninput="this.value = this.value.toUpperCase();">
                                    </div>
                                    <div class="mb-3">
                                        <label for="parts_replaced" class="form-label">Quantity</label>
                                        <input type="text" id="parts_replaced" name="quantity"
                                            class="form-control" required
                                            oninput="this.value = this.value.toUpperCase();">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price_parts_replaced" class="form-label">Price of Parts
                                            Replaced</label>
                                        <input type="number" id="price_parts_replaced" name="price_parts_replaced"
                                            class="form-control" placeholder="Don't use comma" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="proof_of_need_to_fixed" class="form-label">Proof of Need to
                                            Fixed</label>
                                        <input type="file" id="proof_of_need_to_fixed"
                                            name="proof_of_need_to_fixed[]" class="form-control" multiple required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="proof_of_payment" class="form-label">Proof of Payment</label>
                                        <input type="file" id="proof_of_payment" name="proof_of_payment[]"
                                            class="form-control" multiple required>
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

                <!-- loan -->
                <div class="modal fade" id="manageSubcontractor" tabindex="-1"
                    aria-labelledby="manageSubcontractorLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageSubcontractorLabel">Loan Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('loan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" id="date" name="date" class="form-control"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="borrower" class="form-label">Borrower</label>
                                            <input type="text" id="borrower" name="borrower"
                                                class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="initial_amount" class="form-label">Initial Amount</label>
                                            <input type="number" id="initial_amount" name="initial_amount"
                                                class="form-control" placeholder="Enter Amount" required>
                                        </div>
                                        <!-- Input for Interest Percentage -->
                                        <div class="col-md-6">
                                            <label for="interest_percentage" class="form-label">Interest Percentage
                                                (%)</label>
                                            <input type="number" id="interest_percentage" name="interest_percentage"
                                                class="form-control" placeholder="Enter Interest %" required>
                                        </div>

                                        <!-- Payment Per Month -->
                                        <div class="col-md-6">
                                            <label for="payment_per_month" class="form-label">Payment Per
                                                Month</label>
                                            <input type="number" id="payment_per_month" name="payment_per_month"
                                                class="form-control" readonly>
                                        </div>

                                        <!-- Payment Terms -->
                                        <div class="col-md-6">
                                            <label for="payment_terms" class="form-label">Payment Terms
                                                (Months)</label>
                                            <input type="number" id="payment_terms" name="payment_terms"
                                                class="form-control" placeholder="Enter Terms in Months" required>
                                        </div>

                                        <!-- Total Payment -->
                                        <div class="col-md-6">
                                            <label for="total_payment" class="form-label">Total Payment</label>
                                            <input type="number" id="total_payment" name="total_payment"
                                                class="form-control" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="mode_of_payment" class="form-label">Mode of Payment</label>
                                            <select id="mode_of_payment" name="mode_of_payment" class="form-control">
                                                <option value="" disabled selected>Select Mode of Payment
                                                </option>
                                                <option value="cash">Cash</option>
                                                <option value="cheque">Cheque</option>
                                            </select>
                                        </div>


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


                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

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
                    $(document).ready(function() {
                        // For Accounts Table
                        $('#data-table tbody').on('click', '.data-row', function() {
                            const date = $(this).data('date');
                            const accountName = $(this).data('account');
                            const particulars = $(this).children('td').eq(2).text();
                            const serviceFee = $(this).children('td').eq(3).text();
                            const expenses = $(this).children('td').eq(4).text();
                            const netIncome = $(this).children('td').eq(5).text();

                            $('#modal-account-date').text(date);
                            $('#modal-account-name').text(accountName);
                            $('#modal-account-particulars').text(particulars);
                            $('#modal-account-service-fee').text(serviceFee);
                            $('#modal-account-expenses').text(expenses);
                            $('#modal-account-net-income').text(netIncome);

                            $('#accountsModal').modal('show');
                        });

                        // For Preventive Maintenance Table
                        $('#data-table1 tbody').on('click', 'tr', function() {
                            const date = $(this).children('td').eq(0).text();
                            const partsReplaced = $(this).children('td').eq(1).text();
                            const quantity = $(this).children('td').eq(2).text();
                            const pricePerPiece = $(this).children('td').eq(3).text();
                            const totalAmount = $(this).children('td').eq(4).text();

                            $('#modal-preventive-date').text(date);
                            $('#modal-preventive-parts').text(partsReplaced);
                            $('#modal-preventive-quantity').text(quantity);
                            $('#modal-preventive-price-per-piece').text(pricePerPiece);
                            $('#modal-preventive-total').text(totalAmount);

                            $('#preventiveMaintenanceModal').modal('show');
                        });

                        // For Loans Table
                        $('#data-table2 tbody').on('click', 'tr', function() {
                            const date = $(this).children('td').eq(0).text();
                            const borrower = $(this).children('td').eq(1).text();
                            const initialAmount = $(this).children('td').eq(2).text();
                            const interest = $(this).children('td').eq(3).text();
                            const totalPayment = $(this).children('td').eq(4).text();

                            $('#modal-loan-date').text(date);
                            $('#modal-loan-borrower').text(borrower);
                            $('#modal-loan-initial-amount').text(initialAmount);
                            $('#modal-loan-interest').text(interest);
                            $('#modal-loan-total-payment').text(totalPayment);

                            $('#loansModal').modal('show');
                        });
                    });
                </script>

                <script>
                    $('#print-account').click(function() {
                        const printContent = `
            <html>
                <head>
                    <title>Print Account Details</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .logo-container { text-align: center; margin-bottom: 20px; }
                        .logo-container img { width: 10%; height: auto; }
                        h5 { color: #333; text-align: center; }
                    </style>
                </head>
                <body>
                    <div class="logo-container">
                        <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                    </div>
                    <h5>Account Details</h5>
                    <p>Date: ${$('#modal-account-date').text()}</p>
                    <p>Account Name: ${$('#modal-account-name').text()}</p>
                    <p>Particulars: ${$('#modal-account-particulars').text()}</p>
                    <p>Service Fee: ${$('#modal-account-service-fee').text()}</p>
                    <p>Expenses: ${$('#modal-account-expenses').text()}</p>
                    <p>Net Income: ${$('#modal-account-net-income').text()}</p>
                </body>
            </html>
        `;
                        const newWin = window.open('', '', 'width=600,height=400');
                        newWin.document.write(printContent);
                        newWin.document.close();
                        newWin.print();
                    });

                    $('#print-preventive').click(function() {
                        const printContent = `
            <html>
                <head>
                    <title>Print Preventive Maintenance Details</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .logo-container { text-align: center; margin-bottom: 20px; }
                        .logo-container img { width: 10%; height: auto; }
                        h5 { color: #333; text-align: center; }
                    </style>
                </head>
                <body>
                    <div class="logo-container">
                        <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                    </div>
                    <h5>Preventive Maintenance Details</h5>
                    <p>Date: ${$('#modal-preventive-date').text()}</p>
                    <p>Parts Replaced: ${$('#modal-preventive-parts').text()}</p>
                    <p>Quantity: ${$('#modal-preventive-quantity').text()}</p>
                    <p>Price per Piece: ${$('#modal-preventive-price-per-piece').text()}</p>
                    <p>Total Amount: ${$('#modal-preventive-total').text()}</p>
                </body>
            </html>
        `;
                        const newWin = window.open('', '', 'width=600,height=400');
                        newWin.document.write(printContent);
                        newWin.document.close();
                        newWin.print();
                    });

                    $('#print-loan').click(function() {
                        const printContent = `
            <html>
                <head>
                    <title>Print Loan Details</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .logo-container { text-align: center; margin-bottom: 20px; }
                        .logo-container img { width: 10%; height: auto; }
                        h5 { color: #333; text-align: center; }
                    </style>
                </head>
                <body>
                    <div class="logo-container">
                        <img src="{{ asset('Home/GDR Logo.png') }}" alt="GDR Logo">
                    </div>
                    <h5>Loan Details</h5>
                    <p>Date: ${$('#modal-loan-date').text()}</p>
                    <p>Borrower: ${$('#modal-loan-borrower').text()}</p>
                    <p>Initial Amount: ${$('#modal-loan-initial-amount').text()}</p>
                    <p>Interest: ${$('#modal-loan-interest').text()}</p>
                    <p>Total Payment: ${$('#modal-loan-total-payment').text()}</p>
                </body>
            </html>
        `;
                        const newWin = window.open('', '', 'width=600,height=400');
                        newWin.document.write(printContent);
                        newWin.document.close();
                        newWin.print();
                    });
                </script>


                <script>
                    function filterData(accountName) {
                        var rows = document.querySelectorAll('#table-body .data-row');
                        rows.forEach(function(row) {
                            if (row.getAttribute('data-account') === accountName || accountName === 'All') {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }
                </script>
                <script>
                    if ($('li').hasClass('active')) {
                        $('.sidebar__menu-wrapper').animate({
                            scrollTop: eval($(".active").offset().top - 320)
                        }, 500);
                    }
                </script>
                <script>
                    // Function to filter data based on account name
                    function filterData(accountName) {
                        const rows = document.querySelectorAll('#table-body .data-row');
                        let totalNetIncome = 0;
                        rows.forEach(row => {
                            const rowAccount = row.getAttribute('data-account');
                            const rowNetIncome = parseFloat(row.getAttribute('data-net-income'));
                            if (accountName === '' || rowAccount === accountName) {
                                row.style.display = '';
                                totalNetIncome += rowNetIncome;
                            } else {
                                row.style.display = 'none';
                            }
                        });

                        // Update the total net income display
                        updateTotalNetIncome(totalNetIncome);
                    }

                    // Function to update the total net income display
                    function updateTotalNetIncome(totalNetIncome) {
                        const list = document.getElementById('total-net-income-list');
                        list.innerHTML = `<li>Total Net Income: ₱ ${totalNetIncome.toFixed(2)}</li>`;
                    }

                    // Initialize with "All Accounts" filter
                    filterData('');
                </script>
                <script>
                    $(document).ready(function() {
                        // Initialize DataTables for all tables
                        $('#data-table').DataTable();
                        $('#data-table1').DataTable();
                        $('#data-table2').DataTable();
                    });

                    // General function to extract table data
                    function getTableData(tableId) {
                        var table = $(tableId).DataTable();
                        var data = table.rows({
                            search: 'applied'
                        }).data().toArray();
                        var headers = table.columns().header().toArray().map(th => $(th).text());
                        return {
                            data,
                            headers
                        };
                    }

                    // Copy Function
                    function copyTableData(tableId) {
                        var {
                            data
                        } = getTableData(tableId);
                        var textToCopy = data.map(row => row.map(cell => $('<div>').html(cell).text()).join("\t")).join("\n");

                        var tempTextArea = document.createElement("textarea");
                        tempTextArea.value = textToCopy;
                        document.body.appendChild(tempTextArea);
                        tempTextArea.select();
                        document.execCommand("copy");
                        document.body.removeChild(tempTextArea);
                        alert("Table data copied to clipboard!");
                    }

                    // Print Function
                    function printTableData(tableId) {
                        var {
                            data,
                            headers
                        } = getTableData(tableId);
                        var actionColumnIndex = headers.indexOf('Action');
                        var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);
                        var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

                        var printContents = `
            <table border="1">
                <thead><tr>${filteredHeaders.map(header => `<th>${header}</th>`).join('')}</tr></thead>
                <tbody>${filteredData.map(row => `<tr>${row.map(cell => `<td>${$('<div>').html(cell).text()}</td>`).join('')}</tr>`).join('')}</tbody>
            </table>`;

                        var originalContents = document.body.innerHTML;
                        document.body.innerHTML = printContents;
                        window.print();
                        document.body.innerHTML = originalContents;
                    }

                    // PDF Export Function
                    function exportPDF(tableId) {
                        const {
                            jsPDF
                        } = window.jspdf;
                        var doc = new jsPDF('landscape');
                        var {
                            data,
                            headers
                        } = getTableData(tableId);
                        var actionColumnIndex = headers.indexOf('Action');
                        var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);
                        var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));
                        var cleanData = filteredData.map(row => row.map(cell => $('<div>').html(cell).text()));

                        doc.autoTable({
                            head: [filteredHeaders],
                            body: cleanData,
                            startY: 10,
                            theme: 'grid',
                            styles: {
                                fontSize: 8
                            },
                            headStyles: {
                                fillColor: [22, 160, 133],
                                textColor: 255
                            },
                        });

                        doc.save('table_data.pdf');
                    }

                    // Excel Export Function
                    function exportExcel(tableId) {
                        var {
                            data,
                            headers
                        } = getTableData(tableId);
                        var actionColumnIndex = headers.indexOf('Action');
                        var filteredHeaders = headers.filter((header, index) => index !== actionColumnIndex);
                        var filteredData = data.map(row => row.filter((cell, index) => index !== actionColumnIndex));

                        var wb = XLSX.utils.book_new();
                        var cleanData = filteredData.map(row => row.map(cell => $('<div>').html(cell).text()));
                        var ws = XLSX.utils.aoa_to_sheet([filteredHeaders, ...cleanData]);
                        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
                        XLSX.writeFile(wb, "table_data.xlsx");
                    }

                    // Assign event listeners for Job Offers table
                    document.getElementById('copyBtn').addEventListener('click', function() {
                        copyTableData('#data-table');
                    });
                    document.getElementById('printBtn').addEventListener('click', function() {
                        printTableData('#data-table');
                    });
                    document.getElementById('pdfBtn').addEventListener('click', function() {
                        exportPDF('#data-table');
                    });
                    document.getElementById('excelBtn').addEventListener('click', function() {
                        exportExcel('#data-table');
                    });

                    // Assign event listeners for Preventive Maintenance table
                    document.getElementById('copyBtn1').addEventListener('click', function() {
                        copyTableData('#data-table1');
                    });
                    document.getElementById('printBtn1').addEventListener('click', function() {
                        printTableData('#data-table1');
                    });
                    document.getElementById('pdfBtn1').addEventListener('click', function() {
                        exportPDF('#data-table1');
                    });
                    document.getElementById('excelBtn1').addEventListener('click', function() {
                        exportExcel('#data-table1');
                    });

                    // Assign event listeners for Loans table (assuming its id is data-table2)
                    document.getElementById('copyBtn2').addEventListener('click', function() {
                        copyTableData('#data-table2');
                    });
                    document.getElementById('printBtn2').addEventListener('click', function() {
                        printTableData('#data-table2');
                    });
                    document.getElementById('pdfBtn2').addEventListener('click', function() {
                        exportPDF('#data-table2');
                    });
                    document.getElementById('excelBtn2').addEventListener('click', function() {
                        exportExcel('#data-table2');
                    });
                </script>



</body>

</html>

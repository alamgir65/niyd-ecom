@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col">
            <!-- DataTable with Buttons -->
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table table-bordered">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal to add new record -->
            <div class="offcanvas offcanvas-end" id="add-new-record">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                    <form class="add-new-record pt-0 row g-3" id="form-add-new-record" onsubmit="return false">
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <span id="basicFullname2" class="input-group-text"><i class="ri-user-line ri-18px"></i></span>
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
                                    <label for="basicFullname">Full Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <span id="basicPost2" class="input-group-text"><i class='ri-briefcase-line ri-18px'></i></span>
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
                                    <label for="basicPost">Post</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="ri-mail-line ri-18px"></i></span>
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                    <label for="basicEmail">Email</label>
                                </div>
                            </div>
                            <div class="form-text">
                                You can use letters, numbers & periods
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <span id="basicDate2" class="input-group-text"><i class='ri-calendar-2-line ri-18px'></i></span>
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    <label for="basicDate">Joining Date</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <span id="basicSalary2" class="input-group-text"><i class='ri-money-dollar-circle-line ri-18px'></i></span>
                                <div class="form-floating form-floating-outline">
                                    <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
                                    <label for="basicSalary">Salary</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary data-submit me-sm-4 me-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
            <!--/ DataTable with Buttons -->
        </div>
    </div>
@endsection

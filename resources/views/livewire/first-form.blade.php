<div height="800px" class="stepper" id="stepper">
    <div class="steps-container">
        <div class="steps">
            <div class="step" icon="fa fa-pencil-alt" id="1">
                <div class="step-title">
                    <span class="step-number">01</span>
                    <div class="step-text">Basic Information</div>
                </div>
            </div>
            <div class="step" icon="fa fa-info-circle" id="2">
                <div class="step-title">
                    <span class="step-number">02</span>
                    <div class="step-text">Personal Data</div>
                </div>
            </div>
            <div class="step" icon="fa fa-book-reader" id="3">
                <div class="step-title">
                    <span class="step-number">03</span>
                    <div class="step-text">Terms and Conditions</div>
                </div>
            </div>
            <div class="step" icon="fa fa-check" id="4">
                <div class="step-title">
                    <span class="step-number">04</span>
                    <div class="step-text">Finish</div>
                </div>
            </div>
        </div>
    </div>
    <div class="stepper-content-container">
        <div class="stepper-content fade-in" stepper-label="1">
            <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9;">
                <div class="my-0 mx-auto" style="max-width: 500px;  border-radius: 10px; background: #f5f5f5;">
                    <div class="p-10 d-flex flex-col justify-content-center align-items-center">
                        <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold" style="fontSize: 30px; color: #939393">
                            Step 1
                        </div>
                        <div class="p-10 d-flex flex-col justify-content-center align-items-center w-100">
                            <label class="text-muted mb-2">
                                Username
                            </label>
                            <div class="cdb-form">
                                <input type="text"
                                       class="form-control bg-light">
                            </div>
                            <label class="text-muted mb-2">
                                Email
                            </label>
                            <div class="cdb-form">
                                <input type="text"  class="form-control bg-light">
                            </div>
                            <label class="text-muted mb-2">
                                Password
                            </label>
                            <div class="cdb-form">
                                <input type="password" class="form-control bg-light">
                            </div>
                            <label class="text-muted mb-2">
                                Confirm Password
                            </label>
                            <div class="cdb-form">
                                <input type="password" class="form-control bg-light">
                            </div>
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <button class="btn btn-dark btn-block mb-3 mt-5 ms-auto" onclick="stepper2.navigate('2')">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stepper-content fade-in" stepper-label="2">
            <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9;">
                <div class="my-0 mx-auto" style="max-width: 500px;  border-radius: 10px; background: #f5f5f5;">
                    <div class="p-10 d-flex flex-col justify-content-center align-items-center">
                        <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold" style="fontSize: 30px; color: #939393">
                            Step 2
                        </div>
                        <div class="p-10 d-flex flex-col justify-content-center align-items-center w-100">
                            <label class="text-muted mb-2">
                                First Name
                            </label>
                            <div class="cdb-form">
                                <input type="text"  class="form-control bg-light " />
                            </div>
                            <label class="text-muted mb-2">
                                Last Name
                            </label>
                            <div class="cdb-form">
                                <input type="email" class="form-control bg-light " />
                            </div>
                            <label class="text-muted mb-2">
                                Phone Number
                            </label>
                            <div class="cdb-form">
                                <input type="text"  class="form-control bg-light " />
                            </div>
                            <label class="text-muted mb-2">
                                Address
                            </label>
                            <div class="cdb-form">
                                <input type="email" class="form-control bg-light " />
                            </div>
                            <label class="text-muted mb-2">
                                Country
                            </label>
                            <div class="cdb-form">
                                <input type="text"  class="form-control bg-light " />
                            </div>

                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('1')">
                                    Previous
                                </button>
                                <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('3')">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

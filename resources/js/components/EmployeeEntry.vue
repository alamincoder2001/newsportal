<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveUser">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h5 class=""> <strong>Personal Information</strong></h5>
                                <hr class="mt-0 col-md-11" />
                                <div class="form-group row mb-2">
                                    <input type="hidden" name="admin_id" id="admin_id">
                                    <label for="name" class="col-md-4">Employee Name<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" id="name" v-model="form.name" class="form-control"
                                            autocomplete="off" placeholder="Name">
                                        <span class="error-name error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <input type="hidden" name="admin_id" id="admin_id">
                                    <label for="mobile" class="col-md-4">Employee Mobile<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" id="mobile" v-model="form.mobile" class="form-control"
                                            autocomplete="off" placeholder="017xxxxxxxxx (11 digits)">
                                        <span class="error-mobile error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="email" class="col-md-4">Employee Email<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="email" id="email" v-model="form.email" class="form-control"
                                            placeholder="Email" autocomplete="off">
                                        <span class="error-email error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="gender" class="col-md-4">Employee Gender<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <select id="gender" v-model="form.gender" class="form-select shadow-none">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <span class="error-gender error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="birth_date" class="col-md-4">Birth Date<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="date" id="birth_date" v-model="form.birth_date" class="form-control"
                                            autocomplete="off">
                                        <span class="error-birth_date error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="nid_no" class="col-md-4">National Id<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" id="nid_no" v-model="form.nid_no" class="form-control"
                                            autocomplete="off" placeholder="Ex. 123456">
                                        <span class="error-nid_no error text-danger fst-italic"></span>
                                    </div>
                                </div>



                                <h5 class="mt-4"> <strong>Others Information</strong></h5>
                                <hr class="mt-0 col-md-11" />
                                <div class="form-group row mb-2">
                                    <label for="father_name" class="col-md-4">Father Name<span
                                            class="text-danger fw-bold"></span></label>
                                    <div class="col-md-7">
                                        <input type="text" id="father_name" v-model="form.father_name" class="form-control"
                                            autocomplete="off" placeholder="Father name">
                                        <span class="error-father_name error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="mother_name" class="col-md-4">Mother Name<span
                                            class="text-danger fw-bold"></span></label>
                                    <div class="col-md-7">
                                        <input type="text" id="mother_name" v-model="form.mother_name" class="form-control"
                                            autocomplete="off" placeholder="Mother name">
                                        <span class="error-mother_name error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="present_address" class="col-md-4">Present Address<span
                                            class="text-danger fw-bold"></span></label>
                                    <div class="col-md-7">
                                        <textarea id="present_address" v-model="form.present_address" class="form-control"
                                            cols="30" rows="2" placeholder="Present address"></textarea>
                                        <span class="error-present_address error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="permanent_address" class="col-md-4">Permanent Address<span
                                            class="text-danger fw-bold"></span></label>
                                    <div class="col-md-7">
                                        <textarea id="permanent_address" v-model="form.permanent_address"
                                            class="form-control" cols="30" rows="2"
                                            placeholder="Permanent address"></textarea>
                                        <span class="error-permanent_address error text-danger fst-italic"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class=""> <strong>Company Information</strong></h5>
                                <hr class="mt-0 col-md-11" />
                                <div class="form-group row mb-2">
                                    <label for="name" class="col-md-4">Designation<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <select id="designation" v-model="form.designation" class="form-select shadow-none">
                                            <option value="" selected>Select</option>
                                            <option v-for="(des, sl) in designations" :key="sl" :value="des.id">{{
                                                des.designation_name }}</option>
                                        </select>
                                        <span class="error-designation error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="name" class="col-md-4">Department<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <select id="department" v-model="form.department" class="form-select shadow-none">
                                            <option value="" selected>Select</option>
                                            <option v-for="(dep, sl) in departments" :key="sl" :value="dep.id">{{
                                                dep.department_name }}</option>
                                        </select>
                                        <span class="error-department error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="join_date" class="col-md-4">Join Date<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="date" id="join_date" v-model="form.join_date" class="form-control"
                                            autocomplete="off">
                                        <span class="error-join_date error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="salary" class="col-md-4">Salary Range<span
                                            class="text-danger fw-bold">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" id="salary" v-model="form.salary" class="form-control"
                                            placeholder="Salary" autocomplete="off">
                                        <span class="error-salary error text-danger fst-italic"></span>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="nid" class="col-md-4">Upload National Id<span
                                            class="text-danger fw-bold"></span></label>
                                    <div class="col-md-7">
                                        <input type="file" id="nid" class="form-control shadow-none" @change="nidUrl" />
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="name" class="col-md-4">Upload Employee Photo<span
                                            class="text-danger fw-bold"></span></label>
                                    <div class="col-md-7">
                                        <div class="form-group ImageBackground">
                                            <img :src="imageSrc" class="imageShow" />
                                            <!-- <p style="text-align: center;font-size: 11px;margin: 0px;">150px X 150px</p> -->
                                            <label for="image">Photo</label>
                                            <input type="file" id="image" class="form-control shadow-none"
                                                @change="imageUrl" />
                                        </div>
                                    </div>
                                </div>






                                <div class="form-group row text-end">
                                    <label for="name" class="col-md-4"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-success text-light">
                                            <i class="fa fa-floppy-o pe-1" aria-hidden="true"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- list of category -->
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="employees" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 10,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table striped bordered"
                max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'img'">
                    </span>
                </template>
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'after'">
                        <a href="" @click.prevent="editRow(props.row)">
                            <i class="fas fa-edit text-info"></i>
                        </a>
                        <a href="" @click.prevent="deleteRow(props.row.id)">
                            <i class="fas fa-trash text-danger"></i>
                        </a>
                    </span>
                </template>
            </vue-good-table>
        </div>
    </div>
</template>


<script>
export default {
    data() {
        return {
            form: new Form({
                id: "",
                name: "",
                email: "",
                mobile: "",
                gender: "",
                join_date: "",
                birth_date: "",
                nid_no: "",
                designation: "",
                department: "",
                father_name: "",
                mother_name: "",
                present_address: "",
                permanent_address: "",
                salary: "",
                nid_file: "",
                photo: "",
            }),
            designations: [],
            departments: [],

            imageSrc: location.origin + "/noImage.jpg",
            employees: [],
            columns: [
                // { label: 'id', field: 'id' },
                { label: 'Name', field: 'name' },
                { label: 'Email', field: 'email' },
                { label: 'Mobile', field: 'mobile' },
                { label: 'Department', field: 'department.department_name' },
                { label: 'Designation', field: 'designation.designation_name' },
                { label: 'Join Date', field: 'join_date' },
                { label: 'National Id', field: 'nidFile', html: true },
                { label: "Photo", field: "img", html: true },
                { label: "Action", field: "after" },
            ],
        }
    },

    created() {
        this.getDesignation();
        this.getDepartment();
        this.getEmployee();
    },

    methods: {
        getDesignation() {
            axios.get("/admin/get-designation").then(res => {
                this.designations = res.data
            })
        },
        getDepartment() {
            axios.get("/admin/get-department").then(res => {
                this.departments = res.data
            })
        },
        getEmployee() {
            axios.get(location.origin + "/admin/get-employee").then((res) => {
                this.employees = res.data.map(p => {
                    p.nidFile = p.nid_file == null ? '' : '<a href="' + p.nid_file + '" target="_blank"> NID file</a>';
                    p.img = p.photo == null ? '<img src="/noImage.jpg" width="60px">' : '<img src="' + p.photo + '" width="60px">';
                    return p;
                });
            });
        },

        saveUser() {
            this.form.nid_length = this.form.nid_no.length;
            let url = "/admin/save-employee";
            if (this.form.id != '') {
                url = "/admin/update/employee";
            }
            this.form.post(url).then(res => {
                if (res.data.status == "error") {
                    this.showError(res.data.message);
                    return
                }
                $.notify(res.data.message, "success");

                if (res.data.status) {
                    location.reload();
                }
            });
        },

        showError(error) {
            if (error.name) {
                $('.error-name').html(error.name);
            } else {
                $('.error-name').empty();
            }
            if (error.mobile) {
                $('.error-mobile').html(error.mobile);
            } else {
                $('.error-mobile').empty();
            }
            if (error.email) {
                $('.error-email').html(error.email);
            } else {
                $('.error-email').empty();
            }
            if (error.gender) {
                $('.error-gender').html(error.gender);
            } else {
                $('.error-gender').empty();
            }
            if (error.birth_date) {
                $('.error-birth_date').html(error.birth_date);
            } else {
                $('.error-birth_date').empty();
            }
            if (error.nid_length) {
                $('.error-nid_no').html('Nid must be of length 10 / 13 / 17');
            } else if (error.nid_no) {
                $('.error-nid_no').html(error.nid_no);
            } else {
                $('.error-nid_no').empty();

            }
            if (error.father_name) {
                $('.error-father_name').html(error.father_name);
            } else {
                $('.error-father_name').empty();
            }
            if (error.mother_name) {
                $('.error-mother_name').html(error.mother_name);
            } else {
                $('.error-mother_name').empty();
            }
            if (error.present_address) {
                $('.error-present_address').html(error.present_address);
            } else {
                $('.error-present_address').empty();
            }
            if (error.permanent_address) {
                $('.error-permanent_address').html(error.permanent_address);
            } else {
                $('.error-permanent_address').empty();
            }
            if (error.designation) {
                $('.error-designation').html(error.designation);
            } else {
                $('.error-designation').empty();
            }
            if (error.department) {
                $('.error-department').html(error.department);
            } else {
                $('.error-department').empty();
            }
            if (error.join_date) {
                $('.error-join_date').html(error.join_date);
            } else {
                $('.error-join_date').empty();
            }
            if (error.salary) {
                $('.error-salary').html(error.salary);
            } else {
                $('.error-salary').empty();
            }

        },

        editRow(data) {

            this.form.id = data.id;
            this.form.name = data.name;
            this.form.email = data.email;
            this.form.mobile = data.mobile;
            this.form.gender = data.gender;
            this.form.join_date = data.join_date;
            this.form.birth_date = data.birth_date;
            this.form.nid_no = data.nid_no;
            this.form.designation = data.designation_id;
            this.form.department = data.department_id;
            this.form.father_name = data.father_name;
            this.form.mother_name = data.mother_name;
            this.form.present_address = data.present_address;
            this.form.permanent_address = data.permanent_address;
            this.form.salary = data.salary;
            this.imageSrc = data.photo != null ? location.origin + data.photo : location.origin + "/noImage.jpg";
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/employee/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getEmployee();
                });
            }
        },

        nidUrl(event) {
            this.form.nid_file = event.target.files[0];
        },
        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    // if (img.width === 150 && img.height === 150) {
                    this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                    this.form.photo = event.target.files[0];
                    // } else {
                    //     alert(`This image ${img.width}px X ${img.height}px but require image 150px X 150px`);
                    // }
                }
            }
        },
    },
}
</script>

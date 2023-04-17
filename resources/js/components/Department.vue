<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveDepartment">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <label for="department_name">Department Name:</label>
                                    <input type="text" id="department_name" name="department_name" class="form-control shadow-none"
                                        v-model="department.department_name" placeholder="Department name" autocomplete="off" />
                                </div>
                                <div class="form-group mt-4 text-end">
                                    <button type="reset" class="btn btn-danger">
                                        Reset
                                    </button>
                                    <button type="submit" class="btn btn-success text-light">
                                        <i class="fa fa-floppy-o pe-1" aria-hidden="true"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- list of department -->
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="departments" :fixed-header="false" :pagination-options="{
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
            department: {
                id: "",
                department_name: "",
                addedBy: "",
            },
            departments: [],

            columns: [
                { label: 'Department name', field: 'department_name' },
                { label: "Action", field: "after" },
            ],
            page: 1,
            per_page: 10,
        }
    },

    created() {
        this.getDepartment();
    },

    methods: {
        async getDepartment() {
            axios.get("/admin/get-department")
                .then(res => {
                    this.departments = res.data
                })

        },

        saveDepartment(event) {
            if (this.department.department_name == '') {
                alert("department department name required");
                return
            }
            let formdata = new FormData(event.target)
            formdata.append("id", this.department.id)
            axios.post(location.origin + "/admin/department", formdata)
                .then(res => {
                    if (res.data.error) {
                        alert(res.data.error.department_name[0])
                    } else {
                        $.notify(res.data, "success");
                        this.clearData();
                        this.getDepartment();
                    }
                })
        },

        editRow(val) {
            this.department = {
                id: val.id,
                department_name: val.department_name,
                addedBy: val.addedBy,
            }
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/department/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getDepartment();
                });
            }
        },

        clearData() {
            this.department = {
                id: "",
                department_name: "",
                addedBy: "",
            }
        }
    },
}
</script>

<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveDesignation">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <label for="designation_name">Designation Name:</label>
                                    <input type="text" id="designation_name" name="designation_name" class="form-control shadow-none"
                                        v-model="designation.designation_name" placeholder="Designation name" autocomplete="off" />
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

        <!-- list of designation -->
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="designations" :fixed-header="false" :pagination-options="{
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
            designation: {
                id: "",
                designation_name: "",
                addedBy: "",
            },
            designations: [],

            columns: [
                { label: 'Designation name', field: 'designation_name' },
                { label: "Action", field: "after" },
            ],
            page: 1,
            per_page: 10,
        }
    },

    created() {
        this.getDesignation();
    },

    methods: {
        async getDesignation() {
            axios.get("/admin/get-designation")
                .then(res => {
                    this.designations = res.data
                })

        },

        saveDesignation(event) {
            if (this.designation.designation_name == '') {
                alert("designation designation name required");
                return
            }
            let formdata = new FormData(event.target)
            formdata.append("id", this.designation.id)
            axios.post(location.origin + "/admin/designation", formdata)
                .then(res => {
                    if (res.data.error) {
                        alert(res.data.error.designation_name[0])
                    } else {
                        $.notify(res.data, "success");
                        this.clearData();
                        this.getDesignation();
                    }
                })
        },

        editRow(val) {
            this.designation = {
                id: val.id,
                designation_name: val.designation_name,
                addedBy: val.addedBy,
            }
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/designation/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getDesignation();
                });
            }
        },

        clearData() {
            this.designation = {
                id: "",
                designation_name: "",
                addedBy: "",
            }
        }
    },
}
</script>

<template>
    <div class="row">
        <!-- list of category -->
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="employees" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 10,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table striped bordered"
                max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'nidFile'">
                    </span>
                </template>
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'img'">
                    </span>
                </template>
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'after'">
                        <!-- <a href="" @click.prevent="editRow(props.row)">
                            <i class="fas fa-edit text-info"></i>
                        </a>
                        <a href="" @click.prevent="deleteRow(props.row.id)">
                            <i class="fas fa-trash text-danger"></i>
                        </a> -->
                    </span>
                </template>
            </vue-good-table>
        </div>
    </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    data() {
        return {
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
                // { label: "Action", field: "after" },
            ],

        };
    },

    created() {
        this.getEmployee();
    },

    methods: {
        getEmployee() {
            axios.get(location.origin + "/admin/get-employee").then((res) => {
                this.employees = res.data.map(p => {
                    p.nidFile = p.nid_file == null ? '' : '<a href="' + p.nid_file + '" target="_blank"> NID file</a>';
                    p.img = p.photo == null ? '<img src="/noImage.jpg" width="60px">' : '<img src="' + p.photo + '" width="60px">';
                    return p;
                });
            });
        },

        editRow(val) {
            // window.open('/admin/news/' + val.id, "_self");
        },
        deleteRow(id) {
            // if (confirm("Are you sure want to delete this!")) {
            //     axios.post(location.origin + "/admin/news/delete", { id: id }).then((res) => {
            //         $.notify(res.data, "success");
            //         this.getNews();
            //     });
            // }
        }
    },
};
</script>

<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveFooterPage">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group mt-2">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" v-model="footerpage.title" id="title"
                                        class="form-control shadow-none">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="form-group mt-2">
                                            <label for="url">Description:</label>
                                            <ckeditor :editor="editor" v-model="footerpage.description" row="10"></ckeditor>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 text-end">
                                        <button type="button" @click="clearData"
                                            class="btn btn-sm btn-outline-secondary shadow-none">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Save Footer Page
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="footerpages" :fixed-header="true" :pagination-options="{
                enabled: true,
                perPage: 15,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'before'">
                        <button class="btn btn-sm btn-outline-primary shadow-none" @click="editRow(props.row)">
                            Edit
                        </button>
                        <button class="btn btn-sm btn-outline-danger shadow-none" @click="deleteRow(props.row.id)">
                            Delete
                        </button>
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
            columns: [
                { label: "Id", field: "id" },
                { label: "Title", field: "title" },
                { label: "Description", field: "description", html:true },
                { label: "Action", field: "before" },
            ],
            footerpages: [],
            footerpage: {
                id: "",
                title: "",
                description: "",
            },

            editor: ClassicEditor,
        };
    },

    created() {
        this.getFooterPage();
    },

    methods: {
        getFooterPage() {
            axios.get(location.origin + "/admin/get-footerpage").then((res) => {
                this.footerpages = res.data
            });
        },

        saveFooterPage(event) {
            if (this.footerpage.title == "") {
                alert("Title field is required");
                return;
            }

            let formdata = new FormData(event.target)
            formdata.append("id", this.footerpage.id)
            formdata.append("description", this.footerpage.description)
            let url;
            if (this.footerpage.id == '') {
                url = '/admin/footerpage';
            } else {
                url = '/admin/update/footerpage'
            }
            axios
                .post(url, formdata)
                .then((res) => {
                    $.notify(res.data.message, "success");
                    this.clearData();
                    this.getFooterPage();
                });
        },

        editRow(val) {
            this.footerpage = {
                id: val.id,
                title: val.title,
                description: val.description
            };
        },
        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/footerpage/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getFooterPage();
                });
            }
        },

        clearData() {
            this.footerpage = {
                id: "",
                title: "",
                description: ""
            };
        },
    },
};
</script>
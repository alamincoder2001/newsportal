<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveEditor">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <label for="name">Editor Name:</label>
                                    <input type="text" id="name" name="name" class="form-control shadow-none"
                                        v-model="editor.name" placeholder="Editor Name" autocomplete="off" />
                                </div>
                                <div class="form-group mt-2">
                                    <label for="status">Status:</label>
                                    <select id="status" name="status" class="form-select shadow-none"
                                        v-model="editor.status">
                                        <option value="a">Active</option>
                                        <option value="p">Inactive</option>
                                    </select>
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

        <!-- list of category -->
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="editors" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 10,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table striped bordered"
                max-height="550px">
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
            editor: {
                id: "",
                name: "",
                status: 'a',
            },
            editors: [],

            columns: [
                { label: 'Editor Name', field: 'name' },
                { label: 'Status', field: 'statusText', html: true },
                { label: "Action", field: "after" },
            ],
            page: 1,
            per_page: 10,
        }
    },

    created() {
        this.getEditor();
    },

    methods: {
        async getEditor() {
            axios.get("/admin/fetch-editor")
                .then(res => {
                    this.editors = res.data.map(editor => {
                        editor.statusText = editor.status == 'p' ? '<span class="badge bg-danger">Inactive</span>' : '<span class="badge bg-success">Active</span>'
                        return editor;
                    })
                })

        },

        saveEditor(event) {
            if (this.editor.name == '') {
                alert("Editor name required");
                return
            }
            let formdata = new FormData(event.target)
            formdata.append("id", this.editor.id)
            axios.post("/admin/editor", formdata)
                .then(res => {
                    if (res.data.error) {
                        alert(res.data.error.name[0])
                    } else {
                        $.notify(res.data, "success");
                        this.clearData();
                        this.getEditor();
                    }
                })
        },

        editRow(val) {
            this.editor = {
                id: val.id,
                name: val.name,
                status: val.status
            }
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post("/admin/editor/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getEditor();
                });
            }
        },

        clearData() {
            this.editor = {
                id: "",
                name: "",
                status:"a",
            }
        }
    },
}
</script>

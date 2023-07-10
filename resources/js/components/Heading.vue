<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select style="padding: 0 8px;" v-model="searchBy.category_id" name="category_id" id="category_id" class="form-control shadow-none">
                                    <option value="">Select Category</option>
                                    <option v-for="(item, index) in categories" :value="item.id" :key="index">{{ item.name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" v-model="searchBy.title" id="title" name="title" class="form-control shadow-none" placeholder="By Title" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-sm shadow-none" @click="getHeading">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- list of category -->
        <div class="col-md-12" style="overflow-x: auto" v-if="newses.length > 0">
            <vue-good-table :columns="columns" :rows="newses" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 10,
            }" :search-options="{ enabled: true }" :line-numbers="true"
                styleClass="vgt-table striped bordered news_table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'img'">
                    </span>
                </template>
                <template slot="table-row" slot-scope="props">
                    <div style="text-align: center;font-size: 16px;" v-if="props.column.field == 'after'">
                        <a href="" title="edit" @click.prevent="editRow(props.row)">
                            <i class="fas fa-edit text-info"></i>
                        </a>
                        <a href="" title="delete" @click.prevent="deleteRow(props.row.id)">
                            <i class="fas fa-trash text-danger"></i>
                        </a>
                    </div>
                </template>
            </vue-good-table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            newses: [],
            columns: [
                { label: 'Heading Title', field: 'title' },
                { label: "Action", field: "after" },
            ],

            categories: [],
            searchBy: {
                category_id: 20,
                title: '',
            },

        };
    },

    created() {
        this.getCategory();
        this.getHeading();
    },

    methods: {
        getCategory() {
            axios.get("/admin/fetch-category")
                .then(res => {
                    this.categories = res.data
                })

        },
        getHeading() {
            axios.post("/admin/get-heading", this.searchBy).then((res) => {
                if (res.data.status) {
                    this.newses = res.data.msg
                }else{
                    console.log(res.data.msg);
                }
            });
        },

        editRow(val) {
            if (confirm("Are you sure to edit the news!")) {
                window.open('/admin/news/' + val.news_id, "_self");
            }
        },

        deleteRow(id) {
            if (confirm("Are you sure to delete the heading!")) {
                axios.post("/admin/heading/delete", { id: id }).then((res) => {
                    $.notify(res.data.msg, "success");
                    this.getHeading();
                });
            }
        },
    },
};
</script>

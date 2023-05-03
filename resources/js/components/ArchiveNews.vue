<template>
    <div class="row">
        <!-- list of category -->
        <div class="col-md-12" style="overflow-x: auto">
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
                    <div style="font-size:16px;text-align: center;" v-if="props.column.field == 'after'">
                        <a href="" @click.prevent="UndoRow(props.row.id)" title="undo">
                            <i class="fas fa-undo text-info" style="font-size:16px"></i>
                        </a><br>
                        <a href="" @click.prevent="editRow(props.row)" title="edit">
                            <i class="fas fa-edit text-info" style="font-size:16px"></i>
                        </a><br>
                        <a href="" @click.prevent="deleteRow(props.row.id)" title="delete">
                            <i class="fas fa-trash text-danger" style="font-size:16px"></i>
                        </a>
                    </div>
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
            newses: [],
            columns: [
                // { label: 'id', field: 'id' },
                { label: 'News Title', field: 'title' },
                { label: 'Category Name', field: 'categories' },
                { label: 'Description', field: 'description', html: true },
                { label: "Thumbnail", field: "img", html: true },
                { label: "Action", field: "after" },
            ],

        };
    },

    created() {
        this.getNews();
    },

    methods: {
        getNews() {
            axios.get(location.origin + "/admin/get-archive-news").then((res) => {
                this.newses = res.data.map(n => {
                    n.img = n.thumbnail == '' ? '' : '<img src="' + n.thumbnail + '" width="100px">';
                    n.categories = n.category.map(c => c.category_name.name);
                    return n;
                });
            });
        },

        categories() {
            return 'Sohel';
        },

        showError(error) {
            if (error.title) {
                $('#title').addClass('is-invalid');
            } else {
                $('#title').removeClass('is-invalid');
            }
            // if (error.user_name) {
            //     toastr.error(error.user_name);
            //     $('#subtitle').addClass('is-invalid');
            // } else {
            //     $('#subtitle').removeClass('is-invalid');
            // }
            if (error.category_id) {
                $('#category').addClass('is-invalid');
            } else {
                $('#category').removeClass('is-invalid');
            }

        },

        editRow(val) {
            window.open('/admin/news/' + val.id, "_self");
        },
        deleteRow(id) {
            if (confirm("Are you sure want to delete the news!")) {
                axios.post(location.origin + "/admin/news/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getNews();
                });
            }
        },
        UndoRow(id) {
            if (confirm("Are you sure want to undo the news!")) {
                axios.post(location.origin + "/admin/news/undo", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getNews();
                });
            }
        }
    },
};
</script>
